@extends('dashboard.layouts.master')
@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Question</div>
        <div class="card-body card-block">
            <form action="{{route('question.store')}}" method="post" class="">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="username" name="name" placeholder="Question name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="username" name="mark" placeholder="Mark" class="form-control">
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



    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Question Name</th>
                        <th>Mark</th>
                        <th>Exam</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($questions as $question)
                    <tr>
                        <td>{{$question->id}}</td>
                        <td>{{$question->name}}</td>
                        <td>{{$question->mark}}</td>
                        <td>{{$question->exam->name}}</td>
                        <td><a href="{{route('question.edit',['id'=>$question->id])}}"><i class="far fa-edit"></i></a></td>
                        <td><a href="{{route('question.destroy',['id'=>$question->id])}}"><i class="cursor-pointer fas fa-trash text-secondary"></i></a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
@endsection
message.txt
3 KB
