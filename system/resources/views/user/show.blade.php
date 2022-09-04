@extends('admin.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Detail User
                    </div>
                    <div class="card-body">
                        <h4>{{$user->nama}}</h4>
                        <p>
                            {{'@'.$user->username}} |
                            {{$user->email}} |
                            Hp : {{$user->nomor_hp}}
                        </p> 
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection