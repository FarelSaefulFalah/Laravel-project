<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// use App\Http\Requests\StorePenulisRequest;
// use App\Http\Requests\UpdatePenulisRequest;
use App\Models\Genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genre = Genre::orderBy('id', 'desc')->get();
        return view('genre.index', compact('genre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoregenreRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoregenreRequest $request)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_genre' => 'required|max:235',
        ]);

        $genre = new Genre();
        $genre->nama_genre = $request->nama_genre;
        $genre->save();

        return redirect()->route('genre.index')->with('success', 'data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\genre  $genre
     * @return \Illuminate\Http\Response
     */
    // public function show(genre $genre)
    public function show($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genre.show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\genre  $genre
     * @return \Illuminate\Http\Response
     */
    // public function edit(genre $genre)
    public function edit($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategenreRequest  $request
     * @param  \App\Models\genre  $genre
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdategenreRequest $request, genre $genre)
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_genre' => 'required|max:235',
        ]);

        $genre = Genre::findOrFail($id);
        $genre->nama_genre = $request->nama_genre;
        $genre->save();

        return redirect()->route('genre.index')->with('success', 'data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\genre  $genre
     * @return \Illuminate\Http\Response
     */
    // public function destroy(genre $genre)
    public function destroy($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();

        return redirect()->route('genre.index')->with('success', 'data berhasil dihapus!');
    }
}
