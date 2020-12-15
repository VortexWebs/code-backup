<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\seller;
use App\users;

class user_controller extends Controller
{
    public function seller_profile(){
        $id = session('user_id');
        $id = $id[0]->id;
        $data = seller::where('id',$id)->get();
        return view("seller/seller_profile",['data'=>$data]);
    }
    public function user_profile(){
        $id = session('user_id');
        $id = $id[0]->id;
        $data = users::where('id',$id)->get();
        return view("user/user_profile",['data'=>$data]);
    }
}
