<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;


class LoginController extends Controller
{


    public function login_user(Request $request){
        $this->validate($request, [
            'email'=>'required',
            'password'=>'required',

        ]);

        $email=$request->input('email');
        $password=$request->input('password');


        $credentials=$request->only('email','password');
        
        if(Auth::attempt($credentials)){
            return redirect(url('dashboard'))->with('success', 'You logged in successfully');
        } else {
            // Debugging
            \Log::info('Login failed for: ', ['email' => $email]);
            return redirect(url('instagram_login'))->with('fail', 'Login failed');
        }
     

    }
}
