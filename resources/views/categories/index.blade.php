@extends('layouts.app')
@section('main')
<h1>Lista de Categorias</h1>
<!--<a href="{{ route('tarea.create') }}">Crear Nueva Tarea</a>
| <a href="{{ route('category.create') }}">Crear Nueva Categoria</a>
| <a href="{{ route('category.index') }}">Ver Lista de Categorias</a>
 <ul class="list-group">
  @foreach ($categories as $category)
    <li class="list-group-item">
      <a href="{{ route('category.show') }}">{{$category->name}}</a>
      <div class="pull-right">
        <form action="{{route('category.destroy', $category)}}" method="post">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          <button type="submit" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
        </form>
      </div>
    </li>
  @endforeach
</ul>
{{ $categories->links() }}
@foreach ($categories as $category)
  @if($category->tasks_count > 0)
    <h2>La categoria <a href="{{route('category.show', $category)}}">{{$category->name}}</a> tiene {{$category->tasks_count}} tareas</h2>
  @endif
@endforeach -->
@endsection
