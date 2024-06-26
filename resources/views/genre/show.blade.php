@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Genre
                        <a href="{{route('genre.index')}}" class="btn btn-sm btn-primary" style="float: right;">Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">Nama genre</label>
                            <input type="text" class="form-control @error('nama_genre') is-invalid @enderror" name="nama_genre" value="{{$genre->nama_genre}}" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="">Judul genre</label>
                            <textarea class="form-control" name="bio" disabled>{{$genre->judul}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
