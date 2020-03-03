@extends('plantilla.miplantilla')
@section('contenido')
<h1>La pelicula que estas viendo es:</h1>
<h3>{{ $pelicula->titulo }}</h3>
@endsection
