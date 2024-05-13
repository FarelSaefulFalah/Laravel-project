<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Movie;

class MovieController extends Controller
{
    //Melihat semua data
    public function getMovie(){
        //Melihat semua data yang ada pada model "Movie"
        $movies = Movie::all();

        //dump data
        // dd{$movies}
        //
        return view('movie.index', compact('movies'));
    }
    public function getMovieById($id){
        $movie = Movie::findOrFail($id);
        return view('movie.show', compact('movie'));
    }
    }
