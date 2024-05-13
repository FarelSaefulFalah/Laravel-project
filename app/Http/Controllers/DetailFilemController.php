<?php

namespace App\Http\Controllers;

use App\Models\DetailFilem;
use App\Http\Requests\StoreDetailFilemRequest;
use App\Http\Requests\UpdateDetailFilemRequest;

class DetailFilemController extends Controller
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
     * @param  \App\Http\Requests\StoreDetailFilemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetailFilemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailFilem  $detailFilem
     * @return \Illuminate\Http\Response
     */
    public function show(DetailFilem $detailFilem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailFilem  $detailFilem
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailFilem $detailFilem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetailFilemRequest  $request
     * @param  \App\Models\DetailFilem  $detailFilem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetailFilemRequest $request, DetailFilem $detailFilem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailFilem  $detailFilem
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailFilem $detailFilem)
    {
        //
    }
}
