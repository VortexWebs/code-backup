<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::view('login', 'login');
Route::view('signup', 'signup');
Route::view('seller_profile', 'seller/seller_profile');
Route::view('user_profile', 'user/user_profile');




// Login Routes
Route::post('login','login_controller@login');
Route::post('signup','login_controller@signup');
Route::post('logout','login_controller@logout');