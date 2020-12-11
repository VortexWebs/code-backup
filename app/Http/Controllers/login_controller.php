<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\seller;
use App\users;

class login_controller extends Controller
{
    public function login(){
        return "Hello there";
    }
    public function signup(Request $req){
        return "Hello there from signup";
    }
}
