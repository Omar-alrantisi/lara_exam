@extends('dashboard.layouts.master')
@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Example Form</div>
        <div class="card-body card-block">
            <form action="{{route('category.update',['id'=>$category->id])}}" method="post" class="" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="username" name="name" value="{{$category->name}}" placeholder="Category name" class="form-control">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Choose Image</label>
                    <input class="form-control" name="image" type="file" id="formFileMultiple" multiple>
                  </div>
                <div class="form-actions form-group">
                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
