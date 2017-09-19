@extends('layouts.app')
@section('content')
  <a href="{{ route('tarea.index') }}">Volver</a>
  <h1>{{$tarea->nombre}}</h1>
  @foreach ($tarea->imagenes as $imagen)
  <img src="{{$imagen}}" alt="">
  @endforeach
  <p>{{$tarea->descripcion}}</p>
@endsection
