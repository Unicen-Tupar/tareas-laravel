@extends('layouts.app')
@section('main')
  <a href="{{ route('tarea.index') }}">Volver</a>
  <h1>{{$tarea->nombre}}</h1>
  <p>{{$tarea->descripcion}}</p>
@endsection
