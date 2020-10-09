<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\PortFolio;
use App\Models\PortfolioImage;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio=PortFolio::latest()->get();
        return view('admin.portfolio.index',compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.portfolio.create',compact('categories'));
  
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
            'category' => 'required', 
            'client' => 'required',
            'pro_url' => 'required',
            'title' => 'required',
            'details' => 'required',
            'image_id' => 'required',
             ]);
        // get form image
        $portfolio = new PortFolio();
        $portfolio->category_id = $request->category;
        $portfolio->client = $request->client;
        $portfolio->pro_url = $request->pro_url;
        $portfolio->title = $request->title;
        $portfolio->details = $request->details;
        $portfolio->save();

         $slug = Str::slug($request->title);
         //single image
//         if ($request->hasFile('image_id')) {
//             $image=$request->file('image_id');
// //            make unique name for image
//        $currentDate = Carbon::now()->toDateString();
//        $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//       // check portfolio dir is exists
//        if (!Storage::disk('public')->exists('portfolio'))
//        {
//            Storage::disk('public')->makeDirectory('portfolio');
//        }
//     //    resize image for portfolio and upload
//        $Upload_image = Image::make($image)->resize(500,333)->stream();
//        Storage::disk('public')->put('portfolio/'.$imagename,$Upload_image);
//        $portfolioImage=new PortfolioImage();
//        $portfolioImage->port_folio_id=$portfolio->id;
//        $portfolioImage->image=$imagename;
//        $portfolioImage->save();

//         }
         // multiple image
        if (count($request->image_id)>0) {
           foreach ($request->image_id as $image) {
            // $image=$request->file('image_id');
            //            make unique name for image
                   $currentDate = Carbon::now()->toDateString();
                   $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
                  // check portfolio dir is exists
                   if (!Storage::disk('public')->exists('portfolio'))
                   {
                       Storage::disk('public')->makeDirectory('portfolio');
                   }
                //    resize image for portfolio and upload
                   $Upload_image = Image::make($image)->resize(500,333)->stream();
                   Storage::disk('public')->put('portfolio/'.$imagename,$Upload_image);
                   $portfolioImage=new PortfolioImage();
                   $portfolioImage->port_folio_id=$portfolio->id;
                   $portfolioImage->image=$imagename;
                   $portfolioImage->save();
           }
        }
        
        Toastr::success('portfolio has been Created :)' ,'Success');
        return redirect()->route('portfolio.index');
    
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
        $categories=Category::all();

            $portfolio = PortFolio::findOrFail($id);
            return view('admin.portfolio.edit',compact('portfolio','categories'));

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
            'category' => 'required', 
            'client' => 'required',
            'pro_url' => 'required',
            'title' => 'required',
            'details' => 'required',
            // 'image_id' => 'required',
             ]);
        // get form image
        $portfolio =  PortFolio::find($id);
        if (!is_null($portfolio)) {
            # code...
       
        $portfolio->category_id = $request->category;
        $portfolio->client = $request->client;
        $portfolio->pro_url = $request->pro_url;
        $portfolio->title = $request->title;
        $portfolio->details = $request->details;
        $portfolio->save();

         $slug = Str::slug($request->title);
         //single image
//         if ($request->hasFile('image_id')) {
//             $image=$request->file('image_id');
// //            make unique name for image
//        $currentDate = Carbon::now()->toDateString();
//        $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//       // check portfolio dir is exists
//        if (!Storage::disk('public')->exists('portfolio'))
//        {
//            Storage::disk('public')->makeDirectory('portfolio');
//        }
//     //    resize image for portfolio and upload
//        $Upload_image = Image::make($image)->resize(500,333)->stream();
//        Storage::disk('public')->put('portfolio/'.$imagename,$Upload_image);
//        $portfolioImage=new PortfolioImage();
//        $portfolioImage->port_folio_id=$portfolio->id;
//        $portfolioImage->image=$imagename;
//        $portfolioImage->save();

//         }
         // multiple image
        if (count($request->image_id)>0) {
           foreach ($request->image_id as $image) {
            // $image=$request->file('image_id');
            //            make unique name for image
                   $currentDate = Carbon::now()->toDateString();
                   $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
                  // check portfolio dir is exists
                   if (!Storage::disk('public')->exists('portfolio'))
                   {
                       Storage::disk('public')->makeDirectory('portfolio');
                   }
                   //            delete old image
            if (Storage::disk('public')->exists('portfolio/' . $portfolio->image)) {
                Storage::disk('public')->delete('portfolio/' . $portfolio->image);
            }
                //    resize image for portfolio and upload
                   $Upload_image = Image::make($image)->resize(500,333)->stream();
                   Storage::disk('public')->put('portfolio/'.$imagename,$Upload_image);
                  
                   $portfolioImage= PortfolioImage::find($id);
                   $portfolioImage->port_folio_id=$portfolio->id;
                   $portfolioImage->image=$imagename;
                   $portfolioImage->save();
           }
        }}
        
        Toastr::success('portfolio has been Created :)' ,'Success');
        return redirect()->route('portfolio.index');
    
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio=PortFolio::find($id);
        $portfolio->delete();
   
        //     $imagef=PortfolioImage::find($id);
        //     if (Storage::disk('public')->exists('post/' .  $imagef->image)) {
        //         Storage::disk('public')->delete('post/' .  $imagef->image);
        //     }
        // $imagef->delete();
        
        Toastr::success('Portfolio Successfully Deleted :)', 'Success');
        return redirect()->back();
    
    }
}
