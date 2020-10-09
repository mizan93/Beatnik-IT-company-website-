<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Intro;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class IntroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intro = Intro::latest()->get();

        return view('admin.intro.index',compact('intro'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.intro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $slug = Str::slug($request->title);

        if (isset($image))
        {
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check intro dir is exists
            if (!Storage::disk('public')->exists('intro'))
            {
                Storage::disk('public')->makeDirectory('intro');
            }
//            resize image for intro and upload
            $intro = Image::make($image)->resize(500,333)->stream();
            Storage::disk('public')->put('intro/'.$imagename,$intro);

        } else {
            $imagename = "default.png";
        }
        $intro = new Intro();

        $intro->title = $request->title;
        $intro->image = $imagename;
        $intro->save();
        Toastr::success('intro. has been Created :)' ,'Success');
        return redirect()->route('intro.index');

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
        $intro=Intro::find($id);
        return view('admin.intro.edit',compact('intro'));
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
        $image = $request->file('image');
        $slug = Str::slug($request->title);
        $intro =  Intro::find($id);

        if (isset($image))
        {
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check intro dir is exists
            if (!Storage::disk('public')->exists('intro'))
            {
                Storage::disk('public')->makeDirectory('intro');
            }
              //            delete old image
              if (Storage::disk('public')->exists('intro/' . $intro->image)) {
                Storage::disk('public')->delete('intro/' . $intro->image);
            }
//            resize image for intro and upload
            $intro = Image::make($image)->resize(500,333)->stream();
            Storage::disk('public')->put('intro/'.$imagename,$intro);

        } else {
            $imagename = $intro->image;
        }


        $intro->title = $request->title;
        $intro->image = $imagename;
        $intro->save();
        Toastr::success('intro. has been Updated :)' ,'Success');
        return redirect()->route('intro.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $intro = Intro::findOrFail($id);
        if (Storage::disk('public')->exists('intro/' . $intro->image)) {
            Storage::disk('public')->delete('intro/' . $intro->image);
        }
        $intro->delete();
        Toastr::success('intro has been Deleted :)', 'Success');
        return redirect()->back();
    }
}
