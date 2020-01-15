<?php

namespace App\Http\Controllers;

use App\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index()
    {
        $peliculas =Pelicula::all();
        return view('pelicula.index')->with('peliculas', $peliculas);

    }
    public function show()
    {

    }

}
