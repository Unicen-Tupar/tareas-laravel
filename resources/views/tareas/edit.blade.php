@extends('layouts.app')
@section('main')
  <a href="{{route('tarea.index')}}">Volver</a>

  <form action="{{route('tarea.update', $tarea)}}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
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
      <input type="checkbox" name="hecho" id="hecho" value=1>
    </div>
    <div class="form-group">
      <label for="category_id">Categoría:</label>
      <select class="form-control"  name="category_id" id="category_id">
        @foreach ($categories as $categoria)
          <option value={{$categoria->id}}>{{$categoria->name}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-default">Modificar</button>

  </form>
  @endsection
