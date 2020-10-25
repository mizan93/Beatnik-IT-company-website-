<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $about=AboutUs::latest()->get();
        return view('admin.aboutus.index',compact('about'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aboutus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',

            'image' => 'required|mimes:jpeg,jpg,bmp,png',
             ]);
        // get form image
        $image = $request->file('image');
        $slug = Str::slug($request->image);

        if (isset($image))
        {
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check item dir is exists
            if (!Storage::disk('public')->exists('about-us'))
            {

                Storage::disk('public')->makeDirectory('about-us');
            }
//            resize image for item and upload
            $item = Image::make($image)->resize(500,333)->stream();
            Storage::disk('public')->put('about-us/'.$imagename,$item);

        } else {
            $imagename = "default.png";
        }
        $about = new AboutUs();

        $about->title = $request->title;
        $about->description = $request->description;
        $about->image = $imagename;
        $about->save();
        Toastr::success('About section has been Created :)' ,'Success');
        return redirect()->route('about-us.index');
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
        $about=AboutUs::find($id);
        return view('admin.aboutus.edit',compact('about'));
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
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
             ]);
        // get form image
        $image = $request->file('image');
        $slug = Str::slug($request->image);
            $about=AboutUs::find($id);
        if (isset($image))
        {
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//           check item dir is exists
            if (!Storage::disk('public')->exists('about-us'))
            {

                Storage::disk('public')->makeDirectory('about-us');
            }
              //    delete old image
              if (Storage::disk('public')->exists('about-us/' . $about->image)) {
                Storage::disk('public')->delete('about-us/' . $about->image);
            }
//resize image for item and upload
            $image = Image::make($image)->resize(500,333)->stream();
            Storage::disk('public')->put('about-us/'.$imagename,$image);

        } else {
            $imagename = $about->image;
        }

        $about->title = $request->title;
        $about->description = $request->description;
        $about->image = $imagename;
        $about->save();
        Toastr::success('About section has been Updated :)' ,'Success');
        return redirect()->route('about-us.index');

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
