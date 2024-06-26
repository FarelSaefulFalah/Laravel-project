@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Penulis
                        <a href="{{route('genre.index')}}" class="btn btn-sm btn-primary" style="float: right;">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('genre.update', $genre->id)}}" method="POST">
                            @csrf
                            @method('put')
                            <div class="mb-2">
                                <label for="">Nama genre</label>
                                <input type="text" class="form-control @error('nama_genre') is-invalid @enderror" name="nama_genre" value="{{$genre->nama_genre}}">
                                @error('nama_genre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">Bio genre</label>
                                <textarea class="form-control @error('judul') is-invalid @enderror" name="judul">{{$genre->judul}}</textarea>
                                @error('')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <button class="btn btn-sm btn-success" type="submit">simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
