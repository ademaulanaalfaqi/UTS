@extends('admin.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        Edit Data User
                    </div>
                    <div class="card-body">
                        <form action="{{url('artikel', $artikel->id)}}" method="post">
                        @csrf
                        @method('PUT')
                            <div class="form-group">
                                <label for="" class="control-label">Judul</label>
                                <input type="text" name="judul" class="form-control" value="{{$artikel->judul}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Isi</label>
                                <textarea name="isi" class="form-control">{{$artikel->isi}}</textarea>
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection