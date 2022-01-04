@extends('dashboard.layouts.master')
@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Example Form</div>
        <div class="card-body card-block">
            <form action="{{route('question.update',['id'=>$question->id])}}" method="post" class="">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="username" name="name" value="{{$question->name}}" placeholder="Question name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="username" name="mark" value="{{$question->mark}}" placeholder="Mark" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <select name="exam" id="inputState" class="form-control">
                        <option selected>Choose Exam</option>
                  @foreach($exams as $exam)
                  <option value="{{$exam->id}}">{{$exam->name}}</option>
                  @endforeach
              </select>

                </div>

                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
