@extends('dashboard.layouts.master')
@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Example Form</div>
        <div class="card-body card-block">
            <form action="{{route('exam.store')}}" method="post" class="">
                @csrf
                <div class="form-group">
                    <div class="input-group">

                        <input type="text" id="username" name="name" placeholder="Exam" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <select name="category" id="inputState" class="form-control">
                            <option selected>Choose Category</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
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
                        <th>Name</th>
                        <th>Category</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($exams as $exam)
                    <tr>
                        <td>{{$exam->id}}</td>
                        <td>{{$exam->name}}</td>
                        <td>{{$exam->category->name}}</td>
                        <td><a href="{{route('exam.edit',['id'=>$exam->id])}}"><i class="far fa-edit"></i></a></td>
                        <td><a href="{{route('exam.destroy',['id'=>$exam->id])}}"><i class="cursor-pointer fas fa-trash text-secondary"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
@endsection
