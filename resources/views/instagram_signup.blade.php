<!-- resources/views/instagram_signup.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body{
        background-color:#f5f5f5;
    

    }
    .box1{
      background-color:white;
      width:300px;
      margin:auto;
      padding:50px;
      text-align:center;
      border-color:#ff0000;
      outline:solid 2px #e5e5e5;
     
    }
    .box1 h1{
        font-family:pristina;
        font-size: 60px;


    }   
    .box1 h3{
        color:#8d8d8d;
        font-family:calibri;
        margin-top:-40px;
    } 

    .box1 button{
        color:white;
        background-color:#0793f1;
        width: 300px;
        height: 34px;
        font-size:15px;
        font-weight:bold;
        border-radius:3px;
        border-color:#0793f1;

    }

    .box1 input{
        width: 280px;
        padding: 10px;
        background-color:#f9f9f9;
        font-weight:light;
        font-size:14px;
        border-color:#e5e5e5;
        font-family:calibri;
        
      
    }

    .box1 p{
        color:#8d8d8d;
        font-family:calibri;
        /* font-weight:bold; */
        font-size:16px;
        
    }

    .box1 h4{
        color:#8d8d8d;
        font-family:calibri;
        font-weight:bold;
        font-size:18px;
    }

    .box2{
        font-family:calibri;
        font-size:17px;
    }

    .box2{background-color:white;
      width:396px;
      margin:auto;
      margin-top:10px;
      padding:2px;
      text-align:center;
      outline:solid 2px #e5e5e5;
     

    }
    }

</style>    
<body>
    <div class="box1">
    <h1>Instagram</h1>
        <h3>Sign up to see photos and videos<br>
         from your friends</h3>
        <button><i class="fa fa-facebook-official" aria-hidden="true"  style="font-size:21px;"></i>   Log in with Facebook</button>
        <h4>OR</h4>
        <form method="post" action="/signup">
            @csrf
            <input type="text" id="mobile_no" name="mobile_no" placeholder="Mobile No"><br><br>
            <input type="email" id="email" name="email" placeholder="Email" required><br><br>
            <input type="password" id="psw" name="psw" placeholder="Password" required><br><br>
            <input type="text" id="f_name" name="f_name" placeholder="Full Name" required><br><br>
            <input type="text" id="u_name" name="u_name" placeholder="Username" required><br><br>
            <!-- <input type="text" id="address" name="address" placeholder="Address"><br><br>
            <h4>Gender</h4>
            <input type="radio" id="gender" name="gender" value="male" required> Male
            <input type="radio" id="gender" name="gender" value="female" required> Female
            <br><br> -->
            <!-- <input type="submit" value="Sign up"><br> -->
             <button>Sign up</button>
            <p>By signing up, you agree to our<br>
            Terms, Data Policy and Cookies</br>
            Policy.</p><br>
        </form>
        <hr>

    </div>

    <div class="box2">
        
        <br><center>Have an account? <a href="/instagram_login">Log in</a></center></br>

    </div>
    
</body>

</html>
