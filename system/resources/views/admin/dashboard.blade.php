@extends('admin.base')

@section('content')
    @if(Auth::check())
        <h2>Selamat Datang {{request()->user()->nama}}</h2>
    @else

    @endif
@endsection