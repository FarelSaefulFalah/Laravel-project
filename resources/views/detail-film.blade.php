{{-- <h1>Id Film :{{ $film->id }}</h1>
<h1>Judul Film :{{ $film->Judul }}</h1>
<p>Dekripsi Film :{{ $film->Deskripsi }}
    <span>
        <h1>Daftar Film</h1>
        <h2>Code Film {{ $film->DetailFilem->code_film }}</h2>
        <h2>Url Imdb <a href="{{ $film->DetailFilem->url_imdb }}">KLIK DISINI</a></h2>
        <hr>
    </span>
<h4>Media Film</h4>
@foreach ($film->Media as $mediafilm)
<span>
    <h2>Media Title : {{ $mediafilm->media_title }}</h2>
    @if ($mediafilm->media_type)
        <p>URL Media : <a href="{{ $mediafilm->url_media }}">{{ $mediafilm->url_media }}</a></p>
    @else
        <img src="{{ $mediafilm->url_media }}" width="200px" height="200px">
    @endif
    <hr>
</span>
@endforeach --}}
@extends('layout/layout')
@section('content')
            <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">{{$film->Judul}}</h1>
                    <p class="lead text-muted">{{ $film->Deskripsi }}</p>
                    <p>
                        <a href="{{$film->DetailFilem->url_imdb}}" class="btn btn-primary my-2">URL IMDB</a>
                        <a href="{{ url('/film') }}" class="btn btn-primary my-2">Kemabali ke Home</a>
                    </p>
                </div>
            </div>
        </section>

          <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($film->Media as $item)
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header" style="background-color : rgb(255, 183, 50)">
                        <h4>{{$item->media_title}}</h4>
                    </div>
                  @if ($item->media_type)
                  <center>
                    <iframe width="420" height="200"src="{{$item->url_media}}"></iframe>
                  </center>
                    @else
                        <img width="420" height="206" src="{{ $item->url_media }}" height="200">
                    @endif
                </div>
              </div>
        @endforeach
      </div>
    </div>
  </div>

@endsection
