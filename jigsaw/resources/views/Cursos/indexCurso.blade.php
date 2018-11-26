<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Jigsaw</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">Grupos Jigsaw</a></h1>
    </div>
    <nav>
      <ul>
        <li><a href="#">Bienvenido</a></li><!--Nombre del usuario-->
        <li><a href="#">Inicio</a></li>
        <li><a href="{{ url('cursos') }}">Cursos</a></li>
        <li><a href="{{ url('mensajes') }}">Mensajes</a></li>
        <li><a href="#">Modulos</a></li>
        <li class="last"><a href="#">Salir</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <section id="slider"><a href="#"><img src="18631.jpg" alt=""></a></section>
    <!-- content body -->
    <aside id="left_column">
      <h2 class="title">Cursos</h2>
      <section class="last">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="{{ url('cursos/create') }}">Crear Curso</a>
          <a class="navbar-brand" href="{{ url('cursos') }}">Mis Cursos</a>
        </nav>
      <h2 class="title">Páginas UCT</h2>
      <nav>
        <ul>
          <li><a href="https://uct.cl/">Universidad Católica de Temuco</a></li>
          <li><a href="https://estudiantes.uct.cl/">Portal de estudiantes</a></li>
          <li><a href="https://educa.uct.cl/">Educa</a></li>
        </ul>
      </nav>
      <!-- /nav -->
      </section>
      <!-- /section -->
    </aside>
    <!-- main content -->

    <div id="content">
      <article>
        <h2>Seleccione una opción a su izquierda</h2>
    </div>
    <!-- / content body -->
  </div>
</div>
<!-- footer -->
<div class="wrapper row3">
  <div class="container">
    <table class="table table-stripped">
      <thead>
        <tr>
          <th>Nombre del Curso</th>
          <th>Fecha de inicio</th>
          <th>Descripcion del curso</th>
          <th>Documento</th>
          <th>Horario de entrada</th>
          <th>Horario de salida</th>
          <th>Sala</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Programacion</td>
          <td>26-11-2018</td>
          <td>Curso de programacion</td>
          <td>Documento</td>
          <td>11:20</td>
          <td>12:45</td>
          <td>EB 204<td>
          <td><a href="{{action('CursoController@edit', 1)}}" class="btn btn-warning">Editar</a></td>
          <td>
          <form action="{{action('CursoController@destroy', 1)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Eliminar</button>
          </form>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2018 - Derechos reservados - <a href="#">Taller Integracion II</a></p>
  </footer>
</div>
</body>
</html>
