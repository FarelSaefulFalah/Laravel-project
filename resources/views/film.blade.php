{{-- @php

    $film = App\models\film::all();
    $single = App\models\DetailFilem::all();
    $media = App\models\Media::all();

@endphp
<h1>DAFTAR FILM</h1>
@foreach ($film as $data)
    <h2>Id : {{$data->id}}</h2>
    <h2>Judul Film : {{ $data->Judul }}</h2>
     <a href="{{url('film/'.$data->id)}}">KLIK DISINI</a>
     @endforeach
     <hr> --}}

@extends('layout/layout')
@section('content')
@php
    $film = App\Models\Film::all();
@endphp
            <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($film as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                    dy=".3em">{{$item->Judul}}</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">{{$item->Deskripsi}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{url('film/' .$item->id)}}" class="btn btn-sm btn-outline-secondary">click</a>
                                    </div>
                                    <small class="text-muted">1.5M Views</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection

    {{-- <section class="py-5 text-center container">
        <div class="row py-lg-5">
             @foreach ($film as $item)
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{{$item->Judul}}</h1>
                <p class="lead text-muted">{{$item->Deskripsi}}</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                </p>
            </div>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                    dy=".3em">Thumbnail</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">{{ $item->Deskripsi }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ url('film/' . $item->id) }}" type="button"
                                            class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endsection --}}
    {{-- <h2>Id : {{$data->id}}</h2>
    <h2>Judul Film : {{ $data->Judul }}</h2>
    <h2>Deskripsi Film : {{ $data->Deskripsi }}</h2>
    <h1>Detail Film</h1>
    <h2>Code Film {{ $data->DetailFilem->code_film }}</h2>
    <h2>Url Imdb {{ $data->DetailFilem->url_imdb }}</h2>
    @foreach ($data->Media as $mediafilm)
    <h1>Media Film</h1>
    <h2>Media Tipe : {{ $mediafilm->media_type }}</h2>
    <h2>Media Title : {{ $mediafilm->media_title }}</h2>
    <h2>Media Url : {{ $mediafilm->url_media }}</h2>
    <hr>
    @endforeach --}}

    {{-- <h2>Id : {{$film->id}}</h2>
    <h2>Judul Film : {{ $film->Judul }}</h2>
    <h2>Deskripsi Film : {{ $film->Deskripsi }}</h2>
    <h3>Detail Film</h3>
    <h4>Code Film {{ $film->Film->code_film }}</h4>
    <h4>Url Imdb {{ $film->Film->url_imdb }}</h4>
    <hr> --}}
