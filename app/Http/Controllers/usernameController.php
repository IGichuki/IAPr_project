<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\username;

class usernameController extends Controller
{
    //
    function signup(Request $req){
        $user= new username;
        $user->name=$req->name;
        //the first first_name is fromthe database name the second first_name is from the registration_admin name attribute
        
        $user->email=$req->email;
        $user->password=$req->password;
        $user->phone=$req->phone;
        $user->save();
        return redirect('login');
        
        
       


    }
    function add_users(Request $req){
        $user= new username;
        $user->name=$req->name1;
        //the first first_name is fromthe database name the second first_name is from the registration_admin name attribute
        
        $user->email=$req->email;
        $user->password=$req->password;
        $user->phone=$req->phoneNumber;
        $user->save();
        return redirect('add_users');
        

    }
    function showusers(){
        $data=username::all();
         return view('userdetails',['userdetails'=>$data]);
    }
}

