<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<center>
<body>
   <h1>Profile</h1>

   <form method="post" action="/profile/update" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" id="id" value="{{$user->id}}" placeholder="Name" required><br>

    <img src="{{$user->profile_pic_path}}" alt="" width="80" height="80"
    <br><input type="file" name="profile_pic" id="profile_pic"><br>

    <input type="text" name="name" id="name" value="{{$user->name}}" placeholder="Name" required><br>
    <br><input type="text" name="user_name" id="user_name" value="{{$user->user_name}}" placeholder="User Name" required><br>
    <br><input type="email" name="email" id="email" value="{{$user->email}}" placeholder="Email" required><br>
    <br><input type="text" name="mobile_no" id="mobile_no" value="{{$user->mobile_no}}" placeholder="Mobile No" required><br>
    <br><input type="password" name="password" id="password"  placeholder="password" required><br>
    <br><button>Update</button><br>
    </form

</body>
<center>
</html>