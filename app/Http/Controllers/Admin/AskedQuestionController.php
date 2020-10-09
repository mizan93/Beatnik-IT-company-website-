<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AskedQuestion;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Symfony\Component\Console\Question\Question;

class AskedQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questionans=AskedQuestion::latest()->get();
        return view('admin.question.index',compact('questionans'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.question.create');

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
            'question' => 'required',
            'ans' => 'required',
        ]);
        $qa = new AskedQuestion();
        $qa->question = $request->question;
        $qa->ans = $request->ans;
        $qa->save();
        Toastr::success('Question and ans Successfully Saved :)','Success');
        return redirect()->route('question.index');
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
        $question=AskedQuestion::find($id);
        return view('admin.question.edit',compact('question'));
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
            'question' => 'required',
            'ans' => 'required',
        ]);
        $qa = AskedQuestion::find($id);
        $qa->question = $request->question;
        $qa->ans = $request->ans;
        $qa->save();
        Toastr::success('Question and ans Successfully Saved :)','Success');
        return redirect()->route('question.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $q=AskedQuestion::find($id);
        $q->delete();
        Toastr::success('deleted  :)','Success');
        return redirect()->back();
    }
}
