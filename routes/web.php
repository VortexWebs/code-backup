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
Route::get('seller_profile', 'user_controller@seller_profile');
Route::get('user_profile', 'user_controller@user_profile');




// Login Routes
Route::post('login','login_controller@login');
Route::post('signup','login_controller@signup');
Route::post('logout','login_controller@logout');