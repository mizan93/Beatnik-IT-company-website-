<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\AskedQuestion;
use App\Models\Category;
use App\Models\Companyinfo;
use App\Models\Experience;
use App\Models\PortFolio;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $intro=AboutUs::all();
        $about=AboutUs::all();
        $experiance=Experience::all();
        $companyinfo=Companyinfo::all();
        $services=Service::latest()->get();
        $categories=Category::latest()->get();
        $portfolio=PortFolio::latest()->get();
        $question_ans=AskedQuestion::latest()->get();
        return view('welcome',compact('about','services','intro','companyinfo','categories','portfolio','question_ans','experiance'));
    }
    public function details($id){
        $portfolio=PortFolio::find($id);
        return view('details',compact('portfolio'));
    }

}
