<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Hash;
use Session;
use App\Models\User;
use App\Models\Post;
class DashboardController extends Controller
{
    public function Dashboard() {
        if(Auth::check()){
            $user=Auth::user(); 
            $fname=$user->name;
            
            $userData=User::get();

            //get post data
            $posts=Post::get();
         


          

            return view('dashboard',compact('user','userData', 'posts'));

        }
    }

    
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('instagram_login');
    }
}
