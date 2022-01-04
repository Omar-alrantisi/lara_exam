@extends('dashboard.layouts.master')
@section('content')

<div class="col-lg-12">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>Result</th>
                        <th>User ID</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $result)
                    <tr>
                        <td>{{$result->id}}</td>
                        <td>{{$result->user->user_id}}</td>
                        <td><a href="{{route('result.destroy',['id'=>$result->id])}}"><i class="cursor-pointer fas fa-trash text-secondary"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
@endsection
