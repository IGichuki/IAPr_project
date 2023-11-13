<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\users;

class usersController extends Controller
{

    function registration_admin(Request $req){
        $admin= new users;
        $admin->first_name=$req->first_name;
        //the first first_name is fromthe database name the second first_name is from the registration_admin name attribute
        $admin->last_name=$req->last_name;
        $admin->email=$req->email;
        $admin->password=$req->password;
        $admin->contact_no=$req->contact_no;
        $admin->save();
        return redirect('login-admin');
        
        
       


    }
}
