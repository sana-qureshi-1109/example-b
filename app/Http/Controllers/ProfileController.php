<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Hash;
use Str;

class ProfileController extends Controller
{
    public function Profile(){
        $user=Auth::user();
        return view('profile',compact('user'));
    }

    public function Update(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $user_name = $request->input('user_name');
        $email = $request->input('email');
        $mobile_no = $request->input('mobile_no');

        $password =Hash::make($request->input('password'));
    
        //process image start
        $profilePicCheck =$request ->has('profile_pic');

        if($profilePicCheck) {
            $profile_pic =$request->file('profile_pic');
            $fileName=$profile_pic->getClientOriginalName();
    
            $fileExtension=$profile_pic->getClientOriginalExtension();
            $generateNewName=Str::random(10).".".$fileExtension;
            
            $storeTofilesystem=$profile_pic->storeAs('uploads/profile_pictures', $generateNewName, 'public');
    
            // $image->store('uploads','public');
            $profile_picRefName="storage/uploads/profile_pictures/".$generateNewName;
    
        }

        
        

        $update=User::findorfail($id);
        $update->name=$name;
        $update->user_name=$user_name;
        $update->email=$email;
        $update->mobile_no=$mobile_no;
        
        if ($password != null){
            $update->password=$password;
        }

        if($profilePicCheck) {
        $update->profile_pic_path=$profile_picRefName;
        }
        
       
        $update->save();

        return redirect('/profile');

}

}
   