<?php

namespace App\Http\Controllers;

use App\Models\AlbumMusic;
use App\Http\Requests\StoreAlbumMusicRequest;
use App\Http\Requests\UpdateAlbumMusicRequest;

class AlbumMusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAlbumMusicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlbumMusicRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AlbumMusic  $albumMusic
     * @return \Illuminate\Http\Response
     */
    public function show(AlbumMusic $albumMusic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AlbumMusic  $albumMusic
     * @return \Illuminate\Http\Response
     */
    public function edit(AlbumMusic $albumMusic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlbumMusicRequest  $request
     * @param  \App\Models\AlbumMusic  $albumMusic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAlbumMusicRequest $request, AlbumMusic $albumMusic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlbumMusic  $albumMusic
     * @return \Illuminate\Http\Response
     */
    public function destroy(AlbumMusic $albumMusic)
    {
        //
    }
}
