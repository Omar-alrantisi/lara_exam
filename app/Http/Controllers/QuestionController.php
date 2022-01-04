<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Models\Answer;
use App\Models\Exam;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions=Question::all();
        $exams=Exam::all();
        return view('dashboard.manage_question',compact('questions','exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.manage_question');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionRequest $request)
    {
        $this->validate($request,[
            'name'=>'required|max:250',


          ]);

          Question::create([
              "name"=>$request->name,
              "mark"=>$request->mark,
              "exam_id"=>$request->exam,



         ]);
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam,$id)
    {
         $exams   = Exam::all();
         $singleexam   = Exam::find($id);
        //  return dd($singleexams->question->answer);
        //  $singlequestion = Question::find($id);
        //  $singleExam = Exam::find($id);
         $answers=Answer::all();
        //  $questions=Question::all();

        return view('public_site.quiz', compact('exams', 'singleexam','answers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question=Question::find($id);
        $exams=Exam::all();
        return view('dashboard.updates.question_update',compact('question','exams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionRequest  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionRequest $request, $id)
    {
        $question=Question::find($id);

        $question->name=$request->name;

        $question->exam_id=$request->exam;

        $question->update();
        return redirect()->route('question.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question=Question::find($id);
        $question->destroy($id);

        return redirect()->route('question.index');
    }

}
