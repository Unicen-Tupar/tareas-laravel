@extends('layouts.app')
@section('main')
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Lista de Categorias</h3>
  </div>
  <div class="panel-body">
      <ul class="list-group">
      @foreach ($categories as $category)
       <li class="list-group-item">
          <a href="{{route('category.show',$category)}}" class="list-group-item"><span class="badge">{{$cantTasks[$category->name]}}</span>
          {{$category->name}}</a>
      </li>
      @endforeach
    </ul>
    {{ $categories->links() }}
  </div>
  <div class="panel-footer">
    <a href="{{route('tarea.index')}}" class="btn btn-default">Volver</a>
  </div>
</div>

@endsection
