<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Companyinfo;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class CompanyinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info= Companyinfo::latest()->get();
        return view('admin.companyinfo.index',compact('info'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info= new Companyinfo();
        $info->email = $request->email;
        $info->phone = $request->phone;
        $info->address = $request->address;
        $info->city = $request->city;
        $info->details = $request->details;
        $info->fb_link = $request->fb_link;
        $info->tw_link = $request->tw_link;
        $info->insta_link = $request->insta_link;
        $info->ln_link = $request->ln_link;
        $info->save();
        Toastr::success('Company info has been saved :)', 'Success');

         return redirect()->route('company-info.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info= Companyinfo::find($id);
        return view('admin.companyinfo.edit',compact('info'));
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
        $info= Companyinfo::find($id);
        $info->email = $request->email;
        $info->phone = $request->phone;
        $info->address = $request->address;
        $info->city = $request->city;
        $info->details = $request->details;
        $info->fb_link = $request->fb_link;
        $info->tw_link = $request->tw_link;
        $info->insta_link = $request->insta_link;
        $info->ln_link = $request->ln_link;
        $info->save();
        Toastr::success('Company info has been Updated :)', 'Success');

         return redirect()->route('company-info.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info= Companyinfo::find($id);
        $info->delete();
        Toastr::success('Company info has been deleted, create again :)', 'Success');

        return redirect()->back();

    }
}
