<?php

namespace App\Http\Controllers;
use App\Models\Komen;
use App\Models\Balas;


class KomenAdminController extends Controller{

    function index(){
        $data ['list_komen'] = Komen::all();
        return view('komen.index', $data);
    }


    function show(Komen $komen){
        $data['komen'] = ($komen);
        return view('komen.show', $data);
    }
}