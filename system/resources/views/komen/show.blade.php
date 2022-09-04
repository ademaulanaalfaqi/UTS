@extends('admin.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        Detail User
                    </div>
                    <div class="card-body">
                        <h3>{{$komen->nama}}</h3>
                        <p>
                            {{$komen->email}} <hr>
                            <span style="font-size: 20px;">Komentar:</span>  <br> {{$komen->pesan}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection