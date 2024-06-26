@extends('Layout.layout')
@section('content')
    <div class="contaier">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <img src="{{ $movie->cover_url }}" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">{{ $movie->title }}</p>
                        <p> Jumlah Viewer : {{ $movie->viewer }}</p>
                        <p> Desc : {{ $movie->description }}</p>
                        <p><a href="{{ $movie->trailer_url }}">Link Disini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
