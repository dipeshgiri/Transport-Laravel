<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userlogin;
use Illuminate\Support\Facades\Hash;
use log;

class loginsession extends Controller
{
    public function logincheck(Request $req)
    {
    	$email=$req->email;
    	$password=$req->password;
    	$user=userlogin::where('email',$email)->get();
    	if(Hash::check($password,$user[0]->password))
    	{
            $req->session()->put('data',$user[0]->user_name);
            log::logs('User Logged In');
            return redirect('/home');
        }
        else
        {
            $req->session()->flash('status',"Email Or Password is Incorrect Please Try Again");
            return redirect('/');
        }
    }
    public function register(Request $req)
    {
        $userlogin=new userlogin();
        $userlogin->user_name=$req->username;
        $userlogin->email=$req->email;
        $userlogin->password=Hash::make($req->password);
        $check=$userlogin->save();
        if($check)
        {
            $req->session()->flash('status',"New User Register Successfully");
            return redirect('/register');
        }
    }
}



?>