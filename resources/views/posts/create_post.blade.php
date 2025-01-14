



<div class="box1">
    <h1>Create New Post</h1>
    <form action="/create_post_backened" method="POST" enctype="multipart/form-data">
    @csrf
   <input type="hidden" name="user_id" id="user_id" value= "{{$user->id}}" required><br>
   <br> <input class="choose_file" type="file" name="image" id="image" required><br>
   <br> <input type="text" name="caption" id="caption" placeholder="Caption" required><br>
   <br><input type="text" name="location" id="location" placeholder="Location" required><br>
   <br><button>Create</button><br>
</div>
</form>

