<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ExperianceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiance=Experience::all();
        return view('admin.experiance.index',compact('experiance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.experiance.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          // get form image
          $image = $request->file('image');
          $slug = Str::slug($request->title);

          if (isset($image))
          {
  //          make unique name for image
              $currentDate = Carbon::now()->toDateString();
              $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
  //            check item dir is exists
              if (!Storage::disk('public')->exists('experiance'))
              {
                  Storage::disk('public')->makeDirectory('experiance');
              }
  //            resize image for item and upload
              $item = Image::make($image)->resize(500,333)->stream();
              Storage::disk('public')->put('experiance/'.$imagename,$item);

          } else {
              $imagename = "default.png";
          }
        $experiance=new Experience();
        $experiance->title = $request->title;
        $experiance->desc1 = $request->desc1;
        $experiance->desc2 = $request->desc2;
        $experiance->client = $request->client;
        $experiance->project = $request->project;
        $experiance->support = $request->support;
        $experiance->worker = $request->worker;
        $experiance->image = $imagename ;
        $experiance->save();
        Toastr::success('Experiance has been saved :)', 'Success');
        return redirect()->route('experiance.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $experiance= Experience::find($id);
        return view('admin.experiance.edit',compact('experiance'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $experiance= Experience::find($id);
                  // get form image
                  $image = $request->file('image');
                  $slug = Str::slug($request->title);

                  if (isset($image))
                  {
          //          make unique name for image
                      $currentDate = Carbon::now()->toDateString();
                      $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
          //            check item dir is exists
                      if (!Storage::disk('public')->exists('experiance'))
                      {
                          Storage::disk('public')->makeDirectory('experiance');
                      }
                      //            delete old image
            if (Storage::disk('public')->exists('experiance/' . $experiance->image)) {
                Storage::disk('public')->delete('experiance/' . $experiance->image);
            }
          //            resize image for item and upload
                      $item = Image::make($image)->resize(500,333)->stream();
                      Storage::disk('public')->put('experiance/'.$imagename,$item);

                  } else {
                      $imagename = $experiance->image;
                  }
        $experiance->title = $request->title;
        $experiance->desc1 = $request->desc1;
        $experiance->desc2 = $request->desc2;
        $experiance->client = $request->client;
        $experiance->project = $request->project;
        $experiance->support = $request->support;
        $experiance->worker = $request->worker;
        $experiance->image = $imagename ;

        $experiance->save();
        Toastr::success('Experiance has been Updated :)', 'Success');
        return redirect()->route('experiance.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experiance= Experience::finde($id);
        if (Storage::disk('public')->exists('experiance/' . $experiance->image)) {
            Storage::disk('public')->delete('experiance/' . $experiance->image);
        }
        $experiance->delete();
        Toastr::success('Experiance has been deleted :)', 'Success');
        return redirect()->back();
    }
}
