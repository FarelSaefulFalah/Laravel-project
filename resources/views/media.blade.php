@php
    $media = App\models\Media::all();
@endphp

@foreach ($media as $m)
    <h1>Media Sosial</h1>
    <h3>{{ $m->id }}</h3>
    <h3>{{ $m->film_id }}</h3>
    <h3>{{ $m->media_type }}</h3>
    <h3>{{ $m->media_title }}</h3>
    <h3>{{ $m->url_media }}</h3>
@endforeach
