<?php

namespace App\Http\Controllers;

use App\Models\film;
use App\Http\Requests\StorefilmRequest;
use App\Http\Requests\UpdatefilmRequest;

class FilmController extends Controller
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
     * @param  \App\Http\Requests\StorefilmRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefilmRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(film $film)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefilmRequest  $request
     * @param  \App\Models\film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefilmRequest $request, film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(film $film)
    {
        //
    }
}
