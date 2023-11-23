<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookcontroller extends Controller
{
    function book(Request $req){
        $book= new username;
        $book->name=$req->name;
        //the first first_name is fromthe database name the second first_name is from the registration_admin name attribute
        
        $book->phone=$req->phone;
        $book->address=$req->address;
        $book->location=$req->location;
        $book->guests=$req->guests;
        $book->arrivals=$req->arrivals;
        $book->leaving=$req->leaving;
        $book->guests=$req->guests;
        
        $book->save();
        return redirect('login');
        
        
       


    }
}
