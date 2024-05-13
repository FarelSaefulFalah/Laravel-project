@extends('Layout.layout')
@section('content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{$movie->cover_url}}" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="Movie/{{$movie->id}}">{{$movie->title}}</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
