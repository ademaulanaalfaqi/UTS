<?php

namespace App\Http\Controllers;

class AdminController extends Controller{
    function showBase(){
        return view('admin/base');
    }

    function showUser(){
        return view('admin/user');
    }

    function showKomen(){
        return view('admin/komen');
    }

    function showDashboard(){
        return view('admin/dashboard');
    }

    function showArtikel(){
        return view('admin/artikel');
    }
}