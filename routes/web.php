<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

// Ruta peliculas
Route::get('/pelicula', "PeliculaController@index");

Route::get('/pelicula/index', function () {
    return view('pelicula.index');
});

Route::get('/pelicula/accion', function () {
    return view('pelicula.accion');
});

Route::get('/pelicula/comedia', function () {
    return view('pelicula.comedia');
});

Route::get('/pelicula/drama', function () {
    return view('pelicula.drama');
});

Route::get('/pelicula/terror', function () {
    return view('pelicula.terror');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
