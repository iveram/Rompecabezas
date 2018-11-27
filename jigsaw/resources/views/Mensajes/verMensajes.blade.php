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
          <th>Remitente</th>
          <th>Fecha&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
          <th>Mensaje</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>juanito espinoza</td>
          <td>26-11-2018</td>
          <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>Julio Rojas</td>
          <td>27-11-2018</td>
          <td>Felicidades usted aprovó la asignatura de TALLER DE INTEGRACION II. tiene un 7</td>
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
