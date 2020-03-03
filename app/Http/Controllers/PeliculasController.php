<?php

namespace App\Http\Controllers;

use App\Pelicula;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('peliculas.index', compact('peliculas'));
    }

    public function show(Pelicula $pelicula)
    {
        // $pelicula = Pelicula::find($pelicula);
       return view('peliculas.show', compact('pelicula'));

    }
}
