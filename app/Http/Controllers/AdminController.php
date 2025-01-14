<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;      
use DB;          

class AdminController extends Controller
{

  public function Dashboard(){

    $totalUsers=User::count();
    $totalPosts=Post::count();
    return view('pages/admin-panel/dashboard',compact('totalUsers','totalPosts'));
  }
  
  public function UsersPage(){
    $users=User::get();
 
    //Alternate way
    $users = DB::select('CALL users_data()', []);
   
    
    return view('pages/admin-panel/users',compact('users'));
  }

  public function PostsPage(){
    // $posts=Post::get();   

    //Alternate way
    $posts = DB::select('CALL posts_data()', []);
   
    return view('pages/admin-panel/posts',compact('posts'));
  }

  public  function UsersListAPI(){
    $usersList=User::get();

    return response()->json([
      "status" =>"success",
      "message" =>"User data fetched successfully by TGA",
      "data" => $usersList
      ], 200);}

      public  function PostsAPI(){
        $postsList=Post::get();
    
        return response()->json([
          "status" =>"success",
          "message" =>"User data fetched successfully by TGA",
          "data" => $postsList
          ], 200);}
    
    

}
