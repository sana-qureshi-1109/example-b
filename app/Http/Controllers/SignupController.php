<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class SignupController extends Controller
{
    // public function Signup(){
    //     return(1);
    // }

    public function Addition(){
        $num1=20;
        $num2=10; 
        $sum=$num1+$num2;

        $result="The result is ".$sum;
       
        return $result;
    }

    public function Substraction(){
        $num1=30;
        $num2=20;
        $substraction=$num1-$num2;

        $result="The result is ".$substraction;
       
        return $result;


    }    
     
    public function Multiplication(){
        $num1=10;
        $num2=5;
        $multiplication=$num1*$num2;

        $result="The result is" .$multiplication;

        return $result;
    }

    public function Division(){
        $num1=50;
        $num2=2;
        $division=$num1/$num2;

        $result="The result is ".$division;

        return $result;
  
        


       
    }

    public function Calculator(){
        $num1=20;
        $num2=10; 
        $sum=$num1+$num2;

        $addition="The addition result is ".$sum;


        $num1=30;
        $num2=20;
        $substraction=$num1-$num2;

        $substraction="The substraction result is ".$substraction;
       
      

        $num1=10;
        $num2=5;
        $multiplication=$num1*$num2;

        $multiplication="The multiplication result is " .$multiplication;

    

        $num1=50;
        $num2=2;
        $division=$num1/$num2;

        $division="The division result is ".$division;

        $total=$addition. "<br>" ."<br>".$substraction."<br>"."<br>". $multiplication."<br>"."<br>". $division;

        return $total;

      

    }

    
    public function Signup(Request $request){
        $email=$request->input('email');
        $mobile_no=$request->input('mobile_no');
        $psw=$request->input('psw');
        $f_name=$request->input('f_name');
        $u_name=$request->input('u_name');
        $address=$request->input('address');
        $gender=$request->input('gender');

        $insert=new User;
        $insert->name=$f_name;
        $insert->email=$email;
        $insert->password=$psw;
        $insert->mobile_no=$mobile_no;
        $insert->address=$address;
        $insert->user_name=$u_name;
        $insert->gender=$gender;
        $insert->save();

        if($insert){
            return view('/instagram_login');
        }else{
            return"failed";
        }
        }
      
    }






