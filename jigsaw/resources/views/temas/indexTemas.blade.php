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
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <section id="slider"><a href="#"><img src="18631.jpg" alt=""></a></section>
    <!-- content body -->
    <aside id="left_column">
      <h2 class="title">Temas</h2>
      <section class="last">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="{{ url('temas/create') }}">Crear Temas</a>
          <a class="navbar-brand" href="{{ url('temas/show') }}">Mis Temas</a>
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

</body>
</html>
