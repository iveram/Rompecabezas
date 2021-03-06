<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Editar el curso</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container" align="center">
      <h2>Ingrese los datos que desee actualizar</h2><br/>
      <div class="container">
    </div>
      <form method="POST" action="/Cursos">
      @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Nombre_Curso">Nombre del curso:</label>
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
            <label for="Descripcion_curso">Ingrese una breve descripci�n del curso:</label>
            <input type="text" class="form-control" name="descripcion_curso" value="{{$arreglo[2]}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Documentos">Documento de presentaci�n: (Opcional)</label>
            <input type="text" class="form-control" name="documentos" value="{{$arreglo[3]}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Hora_inicio">Horario de entrada:</label>
            <input type="time" class="form-control" name="hora_inicio" value="{{$arreglo[4]}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Hora_termino">Horario de salida:</label>
            <input type="time" class="form-control" name="hora_termino" value="{{$arreglo[5]}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Sala">Sala:</label>
            <input type="text" class="form-control" name="sala" value="{{$arreglo[6]}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="button" class="btn btn-success"><a href="{{ url('cursos') }}">Aceptar cambios</a></button>
            <button type="button" class="btn btn-success"><a href="{{ url('cursos') }}">Cancelar</a></button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>
