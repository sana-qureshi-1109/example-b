<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Str;
use Auth;


class PostController extends Controller
{

    public function CreatePostScreen(){
        $user=Auth::user();
        return view('posts/create_post', compact('user'));
    }
    public function CreatePost(Request $request){
        
        $user_id=$request->input('user_id');
        $image=$request->file('image');
        $caption=$request->input('caption');
        $location=$request->input('location');

       
        $fileName=$image->getClientOriginalName();

        $fileExtension=$image->getClientOriginalExtension();
        $generateNewName=Str::random(10).".".$fileExtension;
        
        $storeTofilesystem=$image->storeAs('uploads', $generateNewName, 'public');

        $image->store('uploads','public');
        $imageRefName="storage/uploads/".$generateNewName;

        $create= new Post;
        
        $create->user_id=$user_id;
        $create->image=$imageRefName;
        $create->caption=$caption;
        $create->location=$location;
        $create->save();

        return "Successful";

    }
    }
