<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function Signup(){
        return(1);
    }

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


}



