<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
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

    public function loginPost(LoginRequest $request){
        $data = $request->only('email', 'password');
        if(Auth::attempt($data)){
            return redirect()->route('dashboard');
        }
    }

    public function logout(){
        
    }

    public function register(){
        return view('auth.register');
    }

    public function registerStore(){
        
    }
}
