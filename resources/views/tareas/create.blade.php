@extends('layouts.app')
@section('main')
  <a href="{{route('tarea.index')}}">Volver</a>
  <form action="{{route('tarea.store')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la Tarea">
    </div>
    <div class="form-group">
      <label for="descripcion">Descripción:</label>
      <textarea id="descripcion" name="descripcion" rows="8" cols="80"></textarea>
    </div>
    <div class="form-group">
      <label for="hecho">Hecho:</label>
      <input type="checkbox" name="hecho" id="hecho" >
    </div>
    <button type="submit" class="btn btn-default">Crear</button>
  </form>
@endsection
