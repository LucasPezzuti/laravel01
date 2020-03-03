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

Route::get('inicio', function () {
   return view('inicio');
});

Route::post('inicio', function () {
  return  'hola estoy por post';
});

Route::GET('nombrate/{nombre?}', function ($nombre = "") {
   return view('nombrate', compact('nombre'));
});


Route::get('peliculas', 'PeliculasController@index')->name('peliculas.index');
Route::get('peliculas/{pelicula}', 'PeliculasController@show')->name('peliculas.show');

Route::resource('genero', 'GeneroController');
