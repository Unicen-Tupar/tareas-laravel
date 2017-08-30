@extends('layouts.app')
@section('main')
<h1>Lista de Tareas</h1>
<a href="{{ route('tarea.create') }}">Crear Nueva Tarea</a>
<ul class="list-group">
  @foreach ($tareas as $tarea)
    <li class="list-group-item">
      <a href="{{ route('tarea.show', $tarea) }}">{{$tarea->nombre}} - {{$tarea->nombre_categoria}}</a>
    </li>
  @endforeach
</ul>
<hr>
<h2>La categoria Casa tiene {{$categoriaCasa->tasks_count}} tareas</h2>
@endsection
