@extends('layouts.app')
@section('main')
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
    </li>
  @endforeach
</ul>
{{ $tareas->links() }}
@foreach ($categories as $category)
  @if($category->tasks_count > 0)
    <h2>La categoria <a href="{{route('category.show', $category)}}">{{$category->name}}</a> tiene {{$category->tasks_count}} tareas</h2>
  @endif
@endforeach
@endsection
