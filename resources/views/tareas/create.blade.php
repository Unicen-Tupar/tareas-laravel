@extends('layouts.app')
@section('content')
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
      <input type="checkbox" name="hecho" id="hecho" value=1>
    </div>
    <div class="form-group">
      <label for="category_id">Categoría:</label>
      <select class="form-control"  name="category_id" id="category_id">
        @foreach ($categorias as $categoria)
          <option value={{$categoria->id}}>{{$categoria->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      /*aca aplicaria la policy para que se muestre si es admin */
      @if (@can('esmanager', $tarea)){
        <label for="user_id">Asignar a:</label>
        <select class="form-control"  name="user_id" id="user_id">
          @foreach ($usuarios as $usuario)
          <option value={{$usuario->id}}@if($usuario->id == Auth::id()) selected @endif>{{$usuario->name}} ({{$usuario->email}})</option>
          @endforeach
        </select>
        }
      @endif

    </div>
    <button type="submit" class="btn btn-default">Crear</button>
  </form>
@endsection
