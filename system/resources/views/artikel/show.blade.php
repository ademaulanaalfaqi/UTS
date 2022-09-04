@extends('admin.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Detail Artikel
                    </div>
                    <div class="card-body">
                        <h4>{{$artikel->judul}}</h4>
                        <p>Penulis: {{$artikel->writer->nama}}</p>
                        <hr>
                        <p>
                            {!! nl2br($artikel->isi) !!}
                        </p> 
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection