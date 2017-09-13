@extends('layouts.app')
@section('content')
  <a href="{{ route('tarea.index') }}">Volver</a>
  <h1>{{$category->name}}</h1>
  <ul class="list-group">
    @foreach ($category->tasks as $tarea)
      <li class="list-group-item">
        <a href="{{ route('tarea.show', $tarea) }}">{{$tarea->nombre}}</a>
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
@endsection
