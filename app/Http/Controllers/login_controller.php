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
            $data = users::select('id')->where([
                ["email",$req->input('email')],
                ["password",$req->input('pass')]
            ])->get();
            if($data == '[]'){
                echo "Email OR password combination wrong";
            }else{
                $req->session()->put('isLogged','true');
                $req->session()->put('user',$utype);
                $req->session()->put('user_id',$data);
                return redirect('user_profile');
            }
        }else{
            $data = seller::select('id')->where([
                ["email",$req->input('email')],
                ["password",$req->input('pass')]
            ])->get();
            
            if($data == '[]'){
                echo "Email OR password combination wrong";
            }else{
                $req->session()->put('isLogged','true');
                $req->session()->put('user',$utype);
                $req->session()->put('user_id',$data);
                return redirect('seller_profile');
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
            $data = users::select('id')->where([
                ["email",$email],
                ["password",$pass]
            ])->get();
            $req->session()->put('user_id',$data);
            return redirect('user_profile');

        }else{
            $seller = new seller();
            $seller->email = $email;
            $seller->uname = $uname;
            $seller->password = $pass;
            $seller->save();
            $req->session()->put('isLogged','true');
            $data = seller::select('id')->where([
                ["email",$email],
                ["password",$pass]
            ])->get();
            $req->session()->put('user_id',$data);
            return redirect('seller_profile');
        }
    }

    public function logout(){
        Session::forget('isLogged');
        return redirect('/');
    }
}
