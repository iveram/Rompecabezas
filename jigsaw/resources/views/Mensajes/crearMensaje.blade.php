<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Enviar mensaje - Jigsaw Groups</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container" align="center">
      <h2>Ingrese datos para enviar mensaje</h2><br/>
      <div class="container">
    </div>
      <form method="POST" action="/cursos">
      @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Nombre_Curso">Nombre del destinatario:</label>
            <input type="text" class="form-control" name="destinatario_curso">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Fecha_inicio">Mensaje:</label>
            <input type="text" class="form-control" name="texto_mensaje">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="button" class="btn btn-success">Enviar</button>
            <button type="button" class="btn btn-success"><a href="{{ url('mensajes') }}">Cancelar</a></button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>
