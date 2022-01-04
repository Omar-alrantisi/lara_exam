@extends('dashboard.layouts.master')
@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Example Form</div>
        <div class="card-body card-block">
            <form action="{{route('exam.update',['id'=>$exam->id])}}" method="post" class="">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="username" name="name" value="{{$exam->name}}" placeholder="Name" class="form-control">
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
@endsection
