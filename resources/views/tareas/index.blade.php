@extends('layouts.app')
@section('content')
<h1>Lista de Tareas</h1>
<a href="{{ route('tarea.create') }}">Crear Nueva Tarea</a>
| <a href="{{ route('category.create') }}">Crear Nueva Categoria</a>
| <a href="{{ route('category.index') }}">Ver Lista Categorias</a>
<ul class="list-group">
  @foreach ($tareas as $tarea)
    <li class="list-group-item">
      <a href="{{ route('tarea.show', $tarea) }}">{{$tarea->nombre}} | {{$tarea->nombre_categoria}}</a>
      <div class="pull-right">
        <form action="{{route('tarea.destroy', $tarea)}}" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <button type="submit" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
        </form>
      </div>
      <div class="pull-right">
        <a href="{{route('tarea.edit',$tarea)}}" class="btn btn-default btn-xs" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
      </div>
    </li>
  @endforeach
</ul>
{{ $tareas->links() }}
@endsection
