<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index() {
        // Logic to fetch data and display the main page
        return view('index');
    }
}
