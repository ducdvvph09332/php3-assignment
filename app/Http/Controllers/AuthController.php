<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }

    public function loginPost(Request $request){
        $data = $request->only('email', 'password');
        if(Auth::attempt($data)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login')->with('notify', 'Bạn đã nhập sai email hoặc password!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function register(){
        return view('auth.register');
    }
}
