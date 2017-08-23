<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de Tareas</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1>Lista de Tareas</h1>
          <ul class="list-group">
            @foreach ($tareas as $tarea)
              <li class="list-group-item">{{$tarea->nombre}}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
