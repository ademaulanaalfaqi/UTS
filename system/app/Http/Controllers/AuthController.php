<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{

    function login(){
        return view('login');
    }

    function loginProcess(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('dashboard')->with('success', 'Login Berhasil');
        } else{
            return back()->with('danger', 'Login Gagal, Silahkan coba lagi!');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }
}