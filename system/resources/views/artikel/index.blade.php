@extends('admin.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
            <div class="card">
                    <div class="card-header">
                        Filter
                    </div>
                    <div class="card-body">
                        <form action="{{url('artikel/filter')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <input type="text" placeholder="Search" class="form-control" name="judul" value="{{$judul ?? ""}}">
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa fa-search"> Filter</i></button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Data Artikel
                        <a href="{{url('artikel/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Isi</th>
                            </thead>
                            <tbody>
                                @foreach($list_artikel as $artikel)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{url('artikel', $artikel->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                                <a href="{{url('artikel', $artikel->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                @include('admin.utils.delete-artikel', ['url' => url('artikel', $artikel->id)])
                                            </div>
                                        </td>
                                        <td>{{$artikel->judul}}</td>
                                        <td>{{$artikel->writer->nama}}</td>
                                        <td>{{$artikel->isi}}</td>
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