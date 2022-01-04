@extends('dashboard.layouts.master')
@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">Example Form</div>
        <div class="card-body card-block">
            <form action="{{route('category.store')}}" method="post" class="" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="username" name="name" placeholder="Category name" class="form-control">
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



    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td><img src="{{asset($category->image)}}" width="80px" height="20px" alt=""> </td>
                        <td><a href="{{route('category.edit',['id'=>$category->id])}}"><i class="far fa-edit"></i></a></td>
                        <td><a href="{{route('category.destroy',['id'=>$category->id])}}"><i class="cursor-pointer fas fa-trash text-secondary"></i></a></td>
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
