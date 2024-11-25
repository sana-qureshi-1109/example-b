<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center>
<body>
    <h1>Create New Post</h1>
   <form action="/create_post_backened" method="POST" enctype="multipart/form-data">
    @csrf
   <input type="hidden" name="user_id" id="user_id" value= "{{$user->id}}" required><br>
   <br> <input type="file" name="image" id="image" required><br>
   <br> <input type="text" name="caption" id="caption" placeholder="Caption" required><br>
   <br><input type="text" name="location" id="location" placeholder="Location" required><br>
   <br><button>Create</button><br>
</form>
</body>
</center>
</html>