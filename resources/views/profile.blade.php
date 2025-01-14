<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <style>
.body{
    background-color:black;
}



.box1 img{
 border-radius: 100px;
 box-shadow:1px 1px 20px #6a823f;
}

.box1{
    background-color:#f5f8ef;
    width:360px;
 margin:auto;
 padding:35px;
 border-radius:15px;
 outline:solid 1px #d7eacb;
}

.box1 input{
    height:50px;
    margin:1px;
    width:353px;
    /* background-color:#fefefe; */
    border-color:#ececec;
    
}

.box1 button{
    background-color:#c7d9a8;
    height:50px;
    width:364px;
    padding:16px;
    font-weight:bold;
    border-color:white;
    border-radius:10px;
    font-family:callibri;
    font-size:17px;
    color:#5a6644;
    margin:auto;
}

.box1 button{
 box-shadow:1px 1px 10px #6c8f2f;
}
.choose_but{
    background-color:#c7d9a8;
    border-radius:10px;
    border-color:#fff8f8;
    font-weight:bolder;
    color:#5a6644;
    margin:2000px;
    width:200px;
    padding: auto;

}

.box1 img{
    border-radius:100px;
    margin-left:130px;
    size:90px;
}
.box1 h1{
    color:#313725;
    font-size:40px;
    margin-left:120px;
    margin-top:-18px;
}

    </style>
</head>

<body>
   
   <div class="box1">
   <h1>Profile</h1>
   <form method="post" action="/profile/update" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" id="id" value="{{$user->id}}" placeholder="Name" required><br>

    <img src="{{$user->profile_pic_path}}" alt="" width="120" height="120"><br>
    <br><input class="choose_but" type="file" name="profile_pic" id="profile_pic"><br><br>

    <input type="text" name="name" id="name" value="{{$user->name}}" placeholder="Name" required><br>
    <br><input type="text" name="user_name" id="user_name" value="{{$user->user_name}}" placeholder="User Name" required><br>
    <br><input type="email" name="email" id="email" value="{{$user->email}}" placeholder="Email" required><br>
    <br><input type="text" name="mobile_no" id="mobile_no" value="{{$user->mobile_no}}" placeholder="Mobile No" required><br>
    <br><input type="password" name="password" id="password"  placeholder="password" required><br>
    <br><button>Update</button><br>
   </div>

   
</form>

</body>
</html>