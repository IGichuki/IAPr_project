<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\usersController;
use App\http\Controllers\usernameController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});


Route::get('classwork', function () {
    return view('classwork');
});
Route::get('login-admin', function () {
    return view('login-admin');
});
Route::get('login', function () {
    return view('login');
});
Route::get('aboutus', function () {
    return view('aboutus');
});
// Route::get('signup', function () {
//     return view('signup');
// });
// Route::get('registration-admin', function () {
//     return view('registration-admin');
// });
Route::get('index-admin', function () {
    return view('index-admin');
});
Route::get('adminHeader', function () {
    return view('adminHeader');
});
Route::get('sidebar-admin', function () {
    return view('sidebar-admin');
});
Route::get('book_form', function () {
    return view('book_form');
    Route::POST('send');
});

Route::view('book','book');
Route::POST('book',[bookController::class,'book']);

Route::get('book2', function () {
    return view('book2');
});

Route::get('checkout', function () {
    return view('checkout');
});

Route::get('contactus', function () {
    return view('contactus');
});

Route::get('fourteenfalls', function () {
    return view('fourteenfalls');
});

Route::get('header', function () {
    return view('header');
});

Route::get('home', function () {
    return view('home');
});

Route::get('kilifi', function () {
    return view('kilifi');
});

Route::get('logout', function () {
    return view('logout');
});

Route::get('maasaimara', function () {
    return view('maasaimara');
});

Route::get('mombasa', function () {
    return view('mombasa');
});

Route::get('review', function () {
    return view('review');
});
Route::get('settings', function () {
    return view('settings');
});

Route::get('riftvalley', function () {
    return view('riftvalley');
});
Route::get('nakuru', function () {
    return view('nakuru');
});
Route::get('userdetails', function () {
    return view('userdetails');
});
Route::get('appointments', function () {
    return view('appointments');
});
Route::get('connect', function () {
    return view('connect');
});
Route::get('processregistration-admin', function () {
    return view('processregistration-admin');
});
Route::view('registration_admin','registration_admin');
Route::POST('registration_admin',[usersController::class,'registration_admin']);

Route::view('signup','signup');
Route::POST('signup',[usernameController::class,'signup']);

Route::get('index-2', function () {
    return view('index-2');
});
Route::get('edit-profile', function () {
    return view('edit-profile');
});
Route::get('calendar', function () {
    return view('calendar');
});
Route::get('profile', function () {
    return view('profile');
});







