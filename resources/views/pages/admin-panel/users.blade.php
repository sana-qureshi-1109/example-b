@extends('layouts.admin')
@section('title','users')
@section('content')

<h1>Users Page</h1>



<!-- Recent Users Start -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Users</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">ID</th>
                                    <th scope="col">Profile Picture</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user) 
                            <tr>
                            <td><h3>{{$user->id}}</h3></td>
                            <td><h3><img src="{{$user->profile_pic_path}}" alt=""width=50 height=50></h3></td>
                            <td><h3>{{$user->name}}</h3></td>
                            <td><h3>{{$user->email}}</h3></td>     
                                    
                                 
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->



















@stop