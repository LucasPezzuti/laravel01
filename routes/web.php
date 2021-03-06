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

Route::resource('genero', 'GeneroController');

// Route::get('peliculas', 'PeliculasController@index')->name('peliculas.index');
// Route::get('peliculas/create', 'PeliculasController@create')->name('peliculas.create');
// Route::get('peliculas/{pelicula}', 'PeliculasController@show')->name('peliculas.show');
// Route::post('peliculas', 'PeliculasController@store')->name('peliculas.store');
// Route::get('peliculas/{pelicula}/edit', 'PeliculasController@edit')->name('peliculas.edit');
// Route::put('peliculas/{pelicula}', 'PeliculasController@update')->name('peliculas.update');
// Route::delete('peliculas/{pelicula}', 'PeliculasController@destroy')->name('peliculas.destroy');

Route::resource('peliculas', 'PeliculasController');
