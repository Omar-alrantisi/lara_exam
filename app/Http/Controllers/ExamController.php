<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Http\Requests\StoreExamRequest;
use App\Http\Requests\UpdateExamRequest;
use App\Models\Category;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams=Exam::all();
        $categories=Category::all();
        return view('dashboard.manage_exam',compact('exams','categories'));
    }
    public function public_index()
    {
        $exams=Exam::all();
        $categories=Category::all();
        return view('public_site.exam_cards',compact('exams','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.manage_exam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExamRequest $request)
    {
        $this->validate($request,[
            'name'=>'required|max:250',


          ]);

          Exam::create([
              "name"=>$request->name,
              "category_id"=>$request->category,



         ]);
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam,$id)
    {
         $categories   = Category::all();
         $singleCategory = Category::find($id);
         $singleExam = Exam::find($id);
         $exams=Exam::all();

        return view('public_site.exam_cards', compact('categories', 'singleCategory','singleExam','exams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exam=Exam::find($id);
        $categories=Category::all();
        return view('dashboard.updates.exam_update',compact('exam','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExamRequest  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExamRequest $request, $id)
    {
        $exam=Exam::find($id);

        $exam->name=$request->name;

        $exam->category_id=$request->category;

        $exam->update();
        return redirect()->route('exam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exam=Exam::find($id);
        $exam->destroy($id);

        return redirect()->route('exam.index');
    }
}
