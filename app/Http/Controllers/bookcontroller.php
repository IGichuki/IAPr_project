<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\book;
class bookcontroller extends Controller
{
    function book(Request $req){
        $book= new book;
        $book->name=$req->name;
        //the first first_name is fromthe database name the second first_name is from the registration_admin name attribute
        $book->email=$req->email;
        $book->phone=$req->phone;
        $book->address=$req->address;
        $book->location=$req->location;
        $book->guests=$req->guests;
        $book->arrivals=$req->arrivals;
        $book->leaving=$req->leaving;
        $book->paymentmethod=$req->paymentmethod;
        
        $book->save();
        return redirect('book');
       
    }
    function showbook(){
        $data=book::all();
      return view('schedule',['book'=>$data]);
       }
}
