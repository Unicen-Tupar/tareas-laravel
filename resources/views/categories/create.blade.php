@extends('layouts.app')
@section('main')
  <a href="{{route('tarea.index')}}">Volver</a>
  <form action="{{route('category.store')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Nombre:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de la Categoria">
    </div>
    <button type="submit" class="btn btn-default">Crear</button>
  </form>
@endsection
