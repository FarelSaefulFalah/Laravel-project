<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getArtikel()
    {
        $artikels = artikel::all();
        return view('artikel.index', compact('artikels'));
    }
    public function getArtikelByid($id)
    {
        $artikels = artikel::findOrFail($id);
        return view('artikel.result', compact('artikels'));
    }
    public function getArtikelByKategori($kategori)
    {
        $artikels = artikel::where('kategori', $kategori)->get();
        return view('artikel.kategori', compact('artikels'));
    }
}
