@extends('layouts.app')
@section('main')
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Lista de Categorias</h3>
  </div>
  <div class="panel-body">
      <ul class="list-group">
       <li class="list-group-item">
          <a href="#" class="list-group-item"><span class="badge">13</span>
          fffff</a>
      </li>
    </ul>
  </div>
  <div class="panel-footer">
    <a href="{{route('tarea.index')}}" class="btn btn-default">Volver</a>
  </div>
</div>

@endsection
