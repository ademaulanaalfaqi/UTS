<?php

namespace App\Http\Controllers;
use App\Models\Artikel;

class ArtikelController extends Controller{
    function index(){
        $user = request()->user();
        $data ['list_artikel'] = $user->artikel;
        return view('artikel.index', $data);
    }

    function create(){
        return view('artikel.create');
    }

    function store(){
        $artikel = new Artikel;
        $artikel->id_user = request()->user()->id;
        $artikel->judul = request('judul'); 
        $artikel->isi = request('isi');
        $artikel->save();

        return redirect('artikel')->with('success', 'Data berhasil ditambahkan');
    }

    function show(Artikel $artikel){
        $data ['artikel'] = $artikel;
        return view('artikel.show', $data);
    }

    function edit(Artikel $artikel){
        $data ['artikel'] = $artikel;
        return view('artikel.edit', $data);
    }

    function update(Artikel $artikel){
        $artikel->judul = request('judul');
        $artikel->isi = request('isi');
        $artikel->save();

        return redirect('artikel')->with('success', 'Data berhasil diedit');
    }

    function destroy(Artikel $artikel){
        $artikel->delete();

        return redirect('artikel')->with('success', 'Data berhasil dihapus');
    }

    function filter(){
        $judul = request('judul');
        $data['list_artikel'] = Artikel::where('judul', 'like', "%$judul%")->get();
        $data ['judul'] = $judul;
        return view('artikel.index', $data);
    }
}