<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\Komen;

class HomeController extends Controller{
    function showHome(){
        $data ['list_artikel'] = Artikel::all();
        return view('home.home', $data);
    }

    function showDetail(Artikel $artikel){
        $data ['artikel'] = $artikel;
        $data ['list_komen'] = Komen::all();
        return view('home.home-detail', $data);
    }
}