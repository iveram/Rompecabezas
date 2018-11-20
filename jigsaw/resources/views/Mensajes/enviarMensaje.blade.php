<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Enviar Mensaje - Jigsaw Groups</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Ingrese los datos para enviar un mensaje</h2><br/>
      <div class="container">
    </div>
      <form method="POST" action="/Mensajes">
      @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Nombre_Curso">Destinatario:</label>
            <input type="text" class="form-control" name="nombre_curso">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Fecha_inicio">Mensaje:</label>
            <input type="date" class="form-control" name="fecha_inicio">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Crear curso</button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>