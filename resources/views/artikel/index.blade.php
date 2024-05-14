@extends('layout.layout')
@section('content')
    <h2 style="text-align: center">ARTIKEL</h2>
    <br>
    <div class="container">
         <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
            @foreach ($artikels as $item)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $item->foto }}" width="100%" height="400x" class="card-img-top">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <center>
                                    <p class="card-text">{{ $item->judul }}</p>
                                    <p class="card-text" style="align-content: center">
                                        <a href="/artikel/id/{{ $item->id }}" class="btn btn-primary">Baca Artikel</a>
                                        <a href="/artikel/kategori/{{ $item->kategori}}" class="btn btn-primary">Kategori</a>
                                </center>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                      @endforeach
         </div>
    </div>
@endsection
