<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Jigsaw</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
<style>
html{overflow-y:scroll;} /* Forces a scrollbar when the viewport is larger than the websites content - CSS3 */

body{margin:0; padding:0; font-size:13px; font-family:Georgia, "Times New Roman", Times, serif; color:#979797; background-color:#FFFFFF;}

.clear:after{content:"."; display:block; height:0; clear:both; visibility:hidden; line-height:0;}
.clear{display:block; clear:both;}
html[xmlns] .clear{display:block;}
* html .clear{height:1%;}

a{outline:none; text-decoration:none;}

code{font-weight:normal; font-style:normal; font-family:Georgia, "Times New Roman", Times, serif;}

.fl_left{float:left;}
.fl_right{float:right;}

img{margin:0; padding:0; border:none; line-height:normal; vertical-align:middle;}
.imgholder, .imgl, .imgr{padding:4px; border:1px solid #D6D6D6; text-align:center;}
.imgl{float:left; margin:0 15px 15px 0; clear:left;}
.imgr{float:right; margin:0 0 15px 15px; clear:right;}

/*----------------------------------------------HTML 5 Overrides-------------------------------------*/

address, article, aside, figcaption, figure, footer, header, nav, section{display:block; margin:0; padding:0;}

q{display:block; padding:0 10px 8px 10px; color:#979797; background-color:#ECECEC; font-style:italic; line-height:normal;}
q:before{content:'� '; font-size:26px;}
q:after{content:' �'; font-size:26px; line-height:0;}

/* ----------------------------------------------Wrapper-------------------------------------*/

div.wrapper{display:block; width:960px; margin:0 auto; padding:0; text-align:left;}

.row1, .row1 a{color:#979797; background-color:#FFFFFF;}
.row2{color:#979797; background-color:#FFFFFF;}
.row2 a{color:#FF9900; background-color:#FFFFFF;}
.row3{border-top:1px solid #DEDEDE;}
.row3, .row3 a{color:#979797; background-color:#FFFFFF;}

/*----------------------------------------------Generalise-------------------------------------*/

#header, #container, #footer{display:block; width:960px;}

nav ul{margin:0; padding:0; list-style:none;}

h1, h2, h3, h4, h5, h6{margin:0; padding:0; font-size:16px; font-weight:bold; font-style:normal; line-height:normal; text-transform:uppercase;}

address{font-style:normal;}

blockquote, q{display:block; padding:8px 10px; color:#979797; background-color:#ECECEC; font-style:italic; line-height:normal;}
blockquote:before, q:before{content:'� '; font-size:26px;}
blockquote:after, q:after{content:' �'; font-size:26px; line-height:0;}

.one_third, .two_third, .three_third{display:block; float:left; margin:0 30px 0 0;}
.one_third{width:300px;}
.two_third{width:630px;}
.three_third{width:960px; float:none; margin-right:0; clear:both;}
.lastbox{margin-right:0;}

/*----------------------------------------------Header-------------------------------------*/

#header{}

#header #hgroup{padding:20px 0 0 0; float:left;}
#header #hgroup h1, #header #hgroup h2{font-weight:normal; text-transform:none;}
#header #hgroup h1{font-size:36px;}
#header #hgroup h2{font-size:13px;}

#header nav{display:block; float:right; margin:20px 0 0 0; padding:20px 0;}
#header nav ul{}
#header nav li{display:inline; margin-right:25px; text-transform:uppercase;}
#header nav li.last{margin-right:0;}
#header nav li a{}
#header nav li a:hover{color:#FF9900; background-color:#FFFFFF;}

/*----------------------------------------------Content Area-------------------------------------*/

#container{padding:30px 0;}
#container section{display:block; width:100%; margin:0 0 30px 0; padding:0;}
#container .last{margin:0;}
#container .more{text-align:left;}

/* ------Slider-----*/

#container #slider{}

/* ------Left Column-----*/

#container #left_column{float:left; width:280px;}
#container #left_column h2.title{margin-bottom:15px; padding-bottom:15px; border-bottom:1px solid #DEDEDE;}

#container #left_column nav{display:block; width:100%; margin-bottom:30px;}
#container #left_column nav ul{margin:0; padding:0; list-style:none;}
#container #left_column nav li{margin:0 0 3px 0; padding:0;}
#container #left_column nav li.last{margin-bottom:0;}
#container #left_column nav a{display:block; margin:0; padding:5px 10px 5px 20px; color:#666666; background:url("../images/orange_file.gif") no-repeat 10px center #FFFFFF; text-decoration:none; border-bottom:1px dotted #666666;}
#container #left_column nav a:hover{color:#FF9900; background-color:#FFFFFF;}

/* ------Main Content-----*/

#container #content{float:right; width:630px; line-height:1.6em;}
#container #content article{margin-bottom:30px;}
#container #content .last{margin:0;}

/*----------------------------------------------Footer-------------------------------------*/

#footer{padding:20px 0;}
#footer p{margin:0; padding:0;}
</style>
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">JigSaw</a></h1>
      <h2>El Metodo diferente para estudiar ;)</h2>
    </div>
    <nav>
      <ul>
        <li><a href="#">Bienveni@</a></li><!--Nombre del usuario--> 
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Mensajes</a></li>
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
      <h2 class="title">Pagínas UCT</h2>
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
