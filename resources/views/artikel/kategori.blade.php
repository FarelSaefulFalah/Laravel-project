@extends('layout.layout')
@section('content')
<center>
<div class="container">
    <div class="row">
        @foreach ($artikels as $item)
        <div class="col mb-5">
            <div class="card mt-5" id="card">
                <div class="card-header" id="card-header">
                    <img src="{{ $item->foto }}" width="150px" height="200px" alt="...">
                </div>
                <div class="card-body" id="card-body">
                    <h5 class="card-title">{{$item->judul}}</h5>
                    <p class="card-text">Kategori : {{$item->kategori}}</p>
                    <p class="card-text">Penulis : {{$item->penulis}}</p>
                    <a href="../id/{{$item->id}}" class="btn btn-primary">Baca artikel</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</center>
@endsection
