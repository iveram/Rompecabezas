<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar Tema - Jigsaw Groups</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container" align="center">
      <h2>Ingrese los datos para crear un tema</h2><br/>
      <div class="container">
    </div>
      <form method="POST" action="/Temas">
      @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Nombre_Curso">Nombre del tema:</label>
            <input type="text" class="form-control" name="nombre_curso" value="{{$arreglo[0]}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Fecha_inicio">Fecha de inicio:</label>
            <input type="date" class="form-control" name="fecha_inicio" value="{{$arreglo[1]}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Descripcion_curso">Ingrese una breve descripción del temas:</label>
            <input type="text" class="form-control" name="descripcion_curso" value="{{$arreglo[2]}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Documentos">Documento de presentación: (Opcional)</label>
            <input type="text" class="form-control" name="documentos" value="{{$arreglo[3]}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Sala">Sala:</label>
            <input type="text" class="form-control" name="sala" value="{{$arreglo[4]}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success"><a href="{{ url('temas') }}">Aceptar cambios</a></button>
            <button type="submit" class="btn btn-success"><a href="{{ url('temas') }}">Cancelar</a></button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>
