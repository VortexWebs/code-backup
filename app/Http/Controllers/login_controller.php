<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\seller;
use App\users;

class login_controller extends Controller
{
    public function login(Request $req){
        $email = $req->input('email');
        $pass = $req->input('pass');
        $utype = $req->input('utype');

        if($utype == "customer"){
            $data = users::where([
                ["email",$req->input('email')],
                ["password",$req->input('pass')]
            ])->get();
            if($data == '[]'){
                echo "Email OR password combination wrong";
            }else{
                $req->session()->put('isLogged','true');
                return redirect('/');
            }
        }else{
            $data = seller::where([
                ["email",$req->input('email')],
                ["password",$req->input('pass')]
            ])->get();
            
            if($data == '[]'){
                echo "Email OR password combination wrong";
            }else{
                $req->session()->put('isLogged','true');
                return redirect('/');
            }
        }
        
    }
    public function signup(Request $req){
        $utype = $req->input('utype');
        $email = $req->input('email');
        $uname = $req->input('uname');
        $pass = $req->input('pass');
        
        $req->session()->put('user',$utype);
        
        if($utype == "customer"){
            $user = new users();
            $user->email = $email;
            $user->uname = $uname;
            $user->password = $pass;
            $user->save();
            $req->session()->put('isLogged','true');
            return redirect('user_profile');
        }else{
            $seller = new seller();
            $seller->email = $email;
            $seller->uname = $uname;
            $seller->password = $pass;
            $seller->save();
            $req->session()->put('isLogged','true');
            return redirect('seller_profile');
        }
    }

    public function logout(){
        Session::forget('isLogged');
        return redirect('/');
    }
}
