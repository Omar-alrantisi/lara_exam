@extends('dashboard.layouts.master')
@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Example Form</div>
        <div class="card-body card-block">
            <form action="{{route('answer.store')}}" method="post" class="">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="name" name="name" placeholder="Answer" class="form-control">
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



    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Answer</th>
                        <th>Correct Answer</th>
                        <th>Question id</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($answers as $answer)
                    <tr>
                        <td>{{$answer->id}}</td>
                        <td>{{$answer->name}}</td>
                        <td>{{$answer->correct}}</td>
                        <td>{{$answer->question->name}}</td>
                        <td><a href="{{route('answer.edit',['id'=>$answer->id])}}"><i class="far fa-edit"></i></a></td>
                        <td><a href="{{route('answer.destroy',['id'=>$answer->id])}}"><i class="cursor-pointer fas fa-trash text-secondary"></i></a></td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
@endsection
