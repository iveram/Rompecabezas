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
      <h1><a href="/">Grupos Jigsaw</a></h1>
    </div>
    <nav>
      <ul>
        <li><a href="/">Inicio</a></li>
        <li><a href="{{ url('cursos') }}">Cursos</a></li>
        <li><a href="{{ url('mensajes') }}">Mensajes</a></li>
        <li><a href="{{ url('temas') }}">Temas</a></li>
        @if (Route::has('login'))

                    @auth
                        <li><a href="{{ url('/home') }}">Home</a></li>
                    @else
                        <li><a href="{{ route('login') }}">LOGIN</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">REGISTER</a></li>
                        @endif
                    @endauth

            @endif
        <li class="last"><a href="#">Salir</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- footer -->
<div class="wrapper row3">
  <div class="container">
    <table class="table table-stripped">
      <thead>
        <tr>
          <th>Nombre del Tema</th>
          <th>Fecha de inicio</th>
          <th>Descripcion del tema</th>
          <th>Documento</th>
          <th>Sala</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Programacion</td>
          <td>26-11-2018</td>
          <td>Curso de programacion</td>
          <td>Documento</td>
          <td>EB 204<td>
          <td><a href="{{action('temasController@edit', 1)}}" class="btn btn-warning">Editar</a></td>
          <td>
          <form action="{{action('temasController@destroy', 1)}}" method="post">
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
