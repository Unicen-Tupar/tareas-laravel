@extends('layouts.app')
@section('main')
<h1>Lista de Categorias</h1>
<a href="{{ route('category.create')}}">Crear Nueva Categoria</a>
| <a href="{{ route('tarea.index')}}">Lista Tareas</a>
<ul class="list-group">
  @foreach ($categories as $category)
    <li class="list-group-item">
      <a href="{{route('category.show', $category)}}">{{$category->name}} | {{$category->tasks_count}} tareas</a>
      <a href="{{route('category.edit', $category)}}" class="glyphicon glyphicon-pencil"></a>
      <div class="pull-right">
        @if($category->tasks_count == 0)
          <form action="{{route('category.destroy', $category)}}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
          </form>
        @endif
      </div>
    </li>
  @endforeach
</ul>
@endsection
