@php

// $musicall = App\models\AlbumMusic::all();
$music = App\models\AlbumMusic::Where('tahun','2007')->orderby('id','desc')->get();
$musicfind = App\models\AlbumMusic::find(9);
$musicfirst = App\models\AlbumMusic::first();
@endphp

@foreach($music as $datamusic)
    <h1 style="color: red">INI FOREACH/ELOQUENT ALL</h1>
    <h2>Id : {{$datamusic->id}}</h2>
    <h2>Judul : {{$datamusic->Judul}}</h2>
    <h2>Tahun : {{$datamusic->Tahun}}</h2>
    <h2>Cover Album : {{$datamusic->Cover_album}}</h2>
    <HR>
@endforeach
    {{-- find --}}
    <h1 style="color: yellow">INI ELOQUENT FIND</h1>
    <h2>Id : {{$musicfind->id ?? 'Kosong'}}</h2>
    <h2>Judul : {{$musicfind->Judul ?? 'Kosong'}}</h2>
    <h2>Tahun : {{$musicfind->Tahun ?? 'Kosong'}}</h2>
    <h2>Cover Album : {{$musicfind->Cover_album ?? 'Kosong'}}</h2>
    <HR>
    {{-- first --}}
    <h1 style="color: green">INI ELOQUENT FIRST</h1>
    <h2>Id : {{$musicfirst->id ?? 'Kosong'}}</h2>
    <h2>Judul : {{$musicfirst->Judul ?? 'Kosong'}}</h2>
    <h2>Tahun : {{$musicfirst->Tahun ?? 'Kosong'}}</h2>
    <h2>Cover Album : {{$musicfirst->Cover_album ?? 'Kosong'}}</h2>