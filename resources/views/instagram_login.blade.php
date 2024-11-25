<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

    .box1 input{
        width: 280px;
        padding: 10px;
        background-color:#f9f9f9;
        font-weight:light;
        font-size:14px;
        border-color:#e5e5e5;
        font-family:calibri;
        font-size:19px;
      
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

    .box1 h5{
        color:#8d8d8d;
        font-family:calibri;
        font-weight:bold;
        font-size:21px;
    }
    .box1 a{
        color : #41557d;
        font-family:calibri;
        font-weight:bold;
        font-size:20px;


    }
    .box1 h4{
        color:#447897;
        font-family:calibri;
        font-size:17px;
    }
   
    .box2{
        font-family:calibri;
        font-size:18px;
    }

    .box2{
        background-color:white;
      width:359px;
      margin:auto;
      padding:22px;
      text-align:center;
      outline:solid 2px #e5e5e5;
    }
</style>
<body>
    

        @if(Session::has('success'))
            <h1 style="color:green">{{ Session::get('success') }}</h1>
        @endif
        @if(Session::has('fail'))
            <h1 style="color:red">{{ Session::get('fail') }}</h1>
        @endif

        <div class="box1">
        <h1>Instagram</h1>
        <form action="{{ url('login-user') }}" method="POST">
       
            @csrf
            <input type="email" id="email" name="email" placeholder="Email" required><br><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br><br>
            <!-- <input type="submit" value="Log in"> -->
             <button>Log in</button>
        </form>
        <h5>OR</h5> 
       
        <a href="https://www.facebook.com/">Log in with Facebook</a>
        <h4>Forgot password?</h4>
        

        </div>

        <br>
        <div class="box2">
      <center>
        Don't have an account? <a href="/instagram_signup">Sign up</a>
</center>

  
    </div>
</body>

</html>
