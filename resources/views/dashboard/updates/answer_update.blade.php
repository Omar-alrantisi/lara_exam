@extends('dashboard.layouts.master')
@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Example Form</div>
        <div class="card-body card-block">
            <form action="{{route('answer.update',['id'=>$answer->id])}}" method="post" class="">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="name" name="name" value="{{$answer->name}}" placeholder="Answer" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <select name="correct" id="inputState" class="form-control">
                      <option selected>Choose Answer</option>
                      <option value="1">True</option>
                      <option value="0">False</option>
                    </select>

            </div>

            <div class="form-group">
                <select name="question" id="inputState" class="form-control">
                        <option selected>Choose Question</option>
                        @foreach($questions as $question)
                        <option value="{{$question->id}}">{{$question->name}}</option>
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
