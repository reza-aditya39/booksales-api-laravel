<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
     public function index(){
        $genremodel = new Genre();
        $genres = $genremodel->getGenres();

        return view('genre',['genres' => $genres]);
    }
}
