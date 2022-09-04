@extends('admin.base')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        Data Artikel
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Waktu</th>
                                <th>Pesan</th>
                            </thead>
                            <tbody>
                                @foreach($list_komen as $komen)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{url('komen', $komen->id)}}" class="btn btn-dark">Lihat</i></a>
                                                
                                            </div>
                                        </td>
                                        <td>{{$komen->nama}}</td>
                                        <td>{{$komen->email}}</td>
                                        <td>{{$komen->created_at->diffForHumans()}}</td>
                                        <td>{{$komen->pesan}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection