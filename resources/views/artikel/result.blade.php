@extends('layout.layout')
@section('content')
<center>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <img src="{{ $artikels->foto }}" width="150px" height="200px" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$artikels->judul}}</h5>
                        <p class="card-text">Kategori : {{$artikels->kategori}}</p>
                        <p class="card-text">{{$artikels->konten}}</p>
                        <p class="card-text">Penulis : {{$artikels->penulis}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
@endsection
