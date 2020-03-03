@extends('plantilla.miplantilla')
@section('contenido')
<h1>Mis peliculas son</h1>
<ul>

    @foreach ($peliculas  as $pelicula)
<li><a href="{{ route('peliculas.show',$pelicula) }}">{{ $pelicula->titulo }}</a></li>
    @endforeach
</ul>

@endsection
