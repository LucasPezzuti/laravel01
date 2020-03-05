<?php
// Rutas Usuario
Auth::routes();

Route::get('/', function () {
    $nombre = "Facundo";
    return view("inicio",compact(['nombre']));
});

Route::GET('nombrate/{nombre?}', function ($nombre = "") {
   return view('nombrate', compact('nombre'));
});


Route::get('actores', 'ActoresController@index')->name('actores.index');
Route::get('actores/{actor}', 'ActoresController@show')->name('actores.show');

Route::get('peliculas', 'PeliculasController@index')->name('peliculas.index');
Route::get('peliculas/{pelicula}', 'PeliculasController@show')->name('peliculas.show');

Route::resource('genero', 'GeneroController');
