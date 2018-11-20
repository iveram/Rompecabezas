<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>Jigsaw</title>
  <meta charset="UTF-8">
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
      <h2></h2>
    </div>
    <nav>
      <ul>
        <li><a href="#">Bienvenido</a></li><!--Nombre del usuario--> 
        <li><a href="#">Inicio</a></li>
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
      <h2 class="title">Páginas UCT</h2>
      <nav>
        <ul>
          <li><a href="https://uct.cl/">Universidad Católica de Temuco</a></li>
          <li><a href="https://estudiantes.uct.cl/">Portal de estudiantes</a></li>
          <li><a href="https://educa.uct.cl/">Educa</a></li>
        </ul>
      </nav>
      <!-- /nav -->
      <h2 class="title">Contacto</h2>
      <section class="last">
        <address>
        ####<br>
        ####<br>
        ####<br>
        ####<br>
        ####<br>
        <br>
        </address>
      </section>
      <!-- /section -->
    </aside>
    <!-- main content -->
    <div id="content">
      <article>
        <h2>¿Cual es el metodo de estudio Jigsaw o Rompecabezas?</h2>
        <p>El método Jigsaw es una técnica de cooperación para la resolución de múltiples
		conflictos que ha sido aplicada al aprendizaje con resultados positivos. En la técnica,
		también llamada del rompecabezas, cada pieza (estudiante) es esencial para la
		realización y comprensión de las tareas a superar. El hecho de convertir a cada
		estudiante en esencial para la resolución del problema es lo que provoca una mayor
		implicación en el alumnado y, por tanto, mejores resultados globales, constituyendo así
		una estrategia eficaz de aprendizaje.</p>
      </article>
      <article>
        <h2>¿Donde surgio este metodo?</h2>
        <p>El Jigsaw fue utilizado por primera vez en 1971 en Austin (Texas) por el
		profesor Aronson, como respuesta a los problemas raciales surgidos al combinar por
		primera vez en la misma aula grupos de jóvenes blancos, afro-americanos e hispanos.
		Tras un período inicial de desconfianza, agitación y hostilidad entre los diferentes
		grupos sociales, se observó que la fuente de los problemas era la competitividad en las
		clases. Para solucionar el problema, el profesor Aronson estableció una nueva técnica de
		aprendizaje cooperativo, dividiendo a sus alumnos en pequeños grupos de trabajo
		diversificados en términos de raza, etnia y género. El éxito del nuevo método de
		aprendizaje, Jigsaw, ayudó a resolver un problema que ya había sobrepasado la
		dimensión del aula para convertirse en un problema social en la ciudad. 
		</p>
      </article>
    </div>
    <!-- / content body -->
  </div>
</div>
<!-- footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2018 - Derechos reservados - <a href="#">Taller Integracion II</a></p>
  </footer>
</div>
</body>
</html>
