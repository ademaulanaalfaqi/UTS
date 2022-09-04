<?php

namespace App\Http\Controllers;
use App\Models\Komen;


class KomenController extends Controller{

    function store(){
        $komen = new Komen();
        $komen->nama = request('nama');
        $komen->email = request('email');
        $komen->pesan = request('pesan');
        $komen->save();
        

        return redirect()->back();
        
    }
}