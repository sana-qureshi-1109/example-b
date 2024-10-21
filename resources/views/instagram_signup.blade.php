<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <center>
    <h1><b>Instagram</b></h1>
    <h4>Sign up to see photos and videos <br>
          from your friends</h4>
          <button>Log in with facebook</button>
 <h4>OR</h4>
 <form method="post"action="/signup">
    @csrf
    <input type="mobile_no"id="mobile_no"name="mobile_no"placeholder="Mobile No"><br>
 <br><input type="email" id="email" name="email" placeholder="Email"required><br>
 <br><input type="password" id="psw" name="psw" placeholder="Password" required><br>
 <br><input type="text" id="f_name" name="f_name" placeholder="Full Name"required><br>
 <br><input type="text" id="u_name" name="u_name" placeholder="Username Name"><br>
 <br><input type="text"id="addresss"name="address"placeholder="Address"></br>
 <h3>Gender</h3>
 <input type="radio"id="gender"name="gender" value="male" required>Male
 <input type="radio"id="gender"name="gender"value="female" required>Female
<h5>People who use our service may have uploaded<br>
your contact information to Instagram. Learn more</h5>
<h5>By signing up, you agree to our Terms, Privacy<br>
Policy and Cookies Policy</h5>
 <br>
 <input type="Submit" value="Sign up">
</form>

<hr>
Have an account?<a href="/instagram_login">Log in</a>

</center>


</body>
</html>
