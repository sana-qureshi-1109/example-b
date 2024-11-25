<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

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
        <h1>{{$post->location}}</h1>
        <img src ="{{url($post->image)}}" alt="" width="180" height="180">
        <h1>{{$post->caption}}</h1>
        
        <hr>
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
</body>
</html>
