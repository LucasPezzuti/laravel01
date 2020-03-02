@extends('plantilla.miplantilla')
@section('contenido')
    @if ($nombre)
  <h2>vos sos   {{ $nombre }}</h2>
@else
  <h2>no se quien sos</h2>
@endif

@endsection
