@extends('layouts.admin')
@section('title','posts')
@section('content')

<h1>Posts Page</h1>

<!-- <table border=1> -->


<!-- Recent Posts Start -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Posts</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">ID</th>
                                    <th scope="col">User_ID</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Caption</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Created_at</th>
                                 </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post) 
                            <tr>
                            <td><h3>{{$post->id}}</h3></td>
                           <td><h3>{{$post->user_id}}</h3></td>
                           <td><h3><img src="{{$post->image}}" alt=""width=50 height=50></h3></td>
                           <td><h3>{{$post->caption}}</h3></td>
                           <td><h3>{{$post->location}}</h3></td>
                           <td><h3>{{$post->created_at}}</h3></td>
                           <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->



</table>

























@stop