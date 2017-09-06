@extends('layouts.app')
@section('content')
  <a href="{{ route('tarea.index') }}">Volver</a>
  <h1>{{$tarea->nombre}}</h1>
  <p>{{$tarea->descripcion}}</p>
@endsection
