


@if(Session::has('success'))
            <h1 style="color:green">{{ Session::get('success') }}</h1>
        @endif
    <center>
        <p>Hello {{ $user->fname }}</p>
        <p>Name - {{$user->name}}</p>
        <p>Mobile No. - {{$user->mobile_no}}</p>
        <p>Username - {{$user->user_name}}</p>
        <p>Address - {{$user->address}}</p>
        <p>Gender - {{$user->gender}}</p>
        <p>Email - {{$user->email}}</p>
        <a href="/logout">Logout</a><br>
        <br><a href="/profile">Profile</a><br>

        <br><a href="/create_post">Create Post</a>

        @foreach($posts as $post)
        <div class="box1">
       <div class="profile_pic">
        <img src="{{$post->user->profile_pic_path}}" alt="" width="90" height="90">
</div>
    
     
            

        <div class="username">
        <lable class="user_name_lable">{{$post->user->name}}</lable>
        </div>

         <div class="location">
         <i class="fa fa-map-marker" aria-hidden="true"> </i>{{$post->location}}<br>
         </div>
    
        
        <div class="post_image">
        <img src ="{{url($post->image)}}" alt="" width="390" height="200">
</div>
    
        <h3>{{$post->caption}}</h3>
<!--         
        <hr> -->
        </div>
        @endforeach

        
    </center>
<!-- <h1>hii</h1>
    <table border=1>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>mobile_no</th>
        <th>email</th>
        <th>user_name</th>
        <th>gender</th>
        <th>address</th>
</tr>
@foreach($userData as $eachUserData)
<tr>
    <td>{{$eachUserData->id}}</td>
    <td>{{$eachUserData->name}}</td>
    <td>{{$eachUserData->mobile_no}}</td>
    <td>{{$eachUserData->email}}</td>
    <td>{{$eachUserData->user_name}}</td>
    <td>{{$eachUserData->gender}}</td>
    <td>{{$eachUserData->address}}</td>

</tr>
@endforeach -->



</table>


