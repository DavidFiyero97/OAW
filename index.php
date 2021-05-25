<!DOCTYPE html><html><head> <!-- basic --> <meta charset="utf-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- mobile metas --> <meta name="viewport" content="width=device-width, initial-scale=1"> <meta name="viewport" content="initial-scale=1, maximum-scale=1"> <!-- site metas --> <title>RSS</title> <meta name="keywords" content=""> <meta name="description" content=""> <meta name="author" content=""> <!-- bootstrap css --> <link rel="stylesheet" href="css/bootstrap.min.css"> 
<!-- style css --> <link rel="stylesheet" href="css/style-min.css"> <!-- Responsive--> <link rel="stylesheet" href="css/responsive-min.css"> </head><!-- body --><body class="main-layout"> <!-- loader --> <div class="loader_bg"> <div class="loader"><img src="images/loading.gif" alt="#" /></div> </div> <!-- end loader --> <!-- header --> <header> <!-- header inner --> <div class="header"> <div class="container"> <div class="row"> <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section"> <div class="full"> <div class="center-desk"> <div class="logo"> <a href="index.html">RSS</a> </div> </div> </div> </div> <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9"> <div class="menu-area"> <div class="limit-box"> <nav class="main-menu"> <ul class="menu-area-main"> <li class="active"> <a href="#myCarousel">Inicio</a> </li> <!-- se corrigio el enlace de inicio --> <li> <a href="#noticias"> Noticias</a> </li> <li> <a href="#about">Nosotros</a> </li> </ul> </nav> </div> </div> </div> </div> </div> <!-- end header inner --> </header> <!-- Modal --> <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title" id="exampleModalLabel">URL EXISTENTE</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div> <div class="modal-body"> La URL ingresada ya existe, favor de ingresar otra o actuliazar las existentes. </div> </div> </div> </div> <!-- end header --> <section class="slider_section"> <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel"> <div class="carousel-inner"> <div class="carousel-item active"> <img class="first-slide" src="images/banner2-min.jpg" alt="First slide"> <div class="container"> <div class="carousel-caption relative"> <h1>Actualizar</h1> <p>Si ya leíste todas las noticas siempre puedes actualizar el sitio y ver si ya hay algo nuevo que sea de su interes.</p> <a href="Actualizar.php">Actualizar ahora</a> </div> </div> </div> <div class="carousel-item"> <img class="second-slide" src="images/banner3-min.jpg" alt="Second slide"> <div class="container"> <div class="carousel-caption relative"> <h1>Agregar nuevas noticias</h1> <p>Siempre puede agregar un nuevo link del sitio de noticias de su agrado.</p> <a href="#nuevas">Agregar ahora</a> </div> </div> </div> </div> <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <i class='fa fa-angle-left'></i> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <i class='fa fa-angle-right'></i> </a> </div> </section> <!-- noticias --> <div id="noticias" class="service"> <div class="container"> <div class="row"> <div class="col-md-12"> <div class="titlepage"> <h2>Noticias </h2> <span>En esta sección podrás encontrar todas las noticias de las url que proporcinaste. Disfrútalo.</span> </div> <div class="contact"> <form action="search.php" method="post"> <div class="row"> <div class="col-sm-12"> <input class="contactus" placeholder="Ingresa tu búsqueda" name="palabra" id="busqueda"> </div> <div class="col-sm-12"> <input type="submit" class="send" value="Buscar" class="btn"> </div> </div> </form> </div> </div> </div> </div> <div class="container margin-r-l"> <div class="row"> <!-- Sidebar Menu --> <div id="menu" class="menu"> <div class="container"> <div class="image"> <a href="#"><img src="images/orden-min.jpg" alt="" /></a> </div> <div class="author-content"> <h1> Ordenar por</h1> </div> <nav class="main-nav" role="navigation"> <ul class="main-menu"> <li><a id="sortTitulo">Título</a></li> <li><a id="sortFecha">Fecha</a></li> <li><a id="sortAutor">Autor</a></li> </ul> </nav> <div class="image"> <a href="#"><img src="images/orden-min.jpg" alt="" /></a> </div> <div class="author-content"> <h1>Filtrado por:</h1> </div> <div class="main-nav" role="navigation"> <div class="dropdown"> <button class="dropdown-btn btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Año 2021 </button> <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <li><a><button style="color:black;" class="mes dropdown-item" value="2021-01">Enero</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2021-02">Febrero</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2021-03">Marzo</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2021-04">Abril</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2021-05">Mayo</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2021-06">Junio</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2021-07">Julio</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2021-08">Agosto</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2021-09">Septiembre</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2021-10">Octubre</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2021-11">Noviembre</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2021-12">Diciembre</button></a></li> </div> </div> </div> <br /> <br /> <div class="main-nav" role="navigation"> <div class="dropdown"> <button class="dropdown-btn btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Año 2020 </button> <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> <li><a><button style="color:black;" class="mes dropdown-item" value="2020-01">Enero</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2020-02">Febrero</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2020-03">Marzo</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2020-04">Abril</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2020-05">Mayo</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2020-06">Junio</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2020-07">Julio</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2020-08">Agosto</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2020-09">Septiembre</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2020-10">Octubre</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2020-11">Noviembre</button></a></li> <li><a><button style="color:black;" class="mes dropdown-item" value="2020-12">Diciembre</button></a></li> </div> </div> </div> </div> <div class="copyright-text"> <p></p> </div> </div> <div class="contenido"> <div class="noticias" id="noticias"> </div> </div> </div> </div> </div> <!-- end service --> <!-- about --> <div id="about" class="about top_layer"> <div class="container"> <div class="row"> <div class="col-md-12"> <div class="titlepage"> <h2>Nuestro equipo</h2> <span>Este equipo de trabajo está intregado por Karina Carmona Vargas, Jessica González Bautista y por David Salazar Vazquez. Primera entrega del proyecto final en relación a la materia de Optimización de aplicaciones web del profesor Víctor Hugo Medina</span> </div> </div> </div> <div class="row"> <div class="col-md-12"> <div class="img-box"> <figure><img src="images/about-min.png" alt="img" /></figure> </div> </div> </div> </div> </div> <!-- end abouts --> <!-- nuevas --> <div id="nuevas" class="testimonial"> <div class="container"> <div class="row"> <div class="col-md-12"> <div class="titlepage"> <h3>Agregar nuevo sitio de noticias</h3> </div> </div> </div> <div class="row"> <div class="col-sm-12"> <div class="contact"> <h3>Ingresa el link del sitio de noticas en xml</h3> <form action="save.php" method="post"> <div class="row"> <div class="col-sm-12"> <input class="contactus" placeholder="Link..." type="search" name="urlXml"> </div> <div class="col-sm-12"> <input type="submit" class="send" value="Agregar" class="btn"> </div> </div> </form> </div> </div> </div> </div> </div> <!-- end nuevas --> <!-- footer --> <footr> <div class="footer"> <div class="container"> <div class="copyright"> <p>Copyright 2021 All Right Reserved By Team Carmona, González and Salazar. </p> </div> </div> </footr>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script><script src="js/popper.min.js"></script><script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min-compiled.js"></script><script src="js/plugin.js"></script>
   <script src="js/custom-compiled.js"></script>
   <script>
window.onload=function(){"0"==window.location.search.substring(1).split("=")[1]&&$("#exampleModal").modal("toggle");$(".noticias").html('<?php imprimir("ORDER BY Fecha desc")?>');$("#sortTitulo").on("click",function(){$(".noticias").html('<?php imprimir("ORDER BY Titulo")?>')});$("#sortFecha").on("click",function(){$(".noticias").html('<?php imprimir("ORDER BY Fecha desc")?>')});$("#sortAutor").on("click",function(){$(".noticias").html('<?php imprimir("ORDER BY Autor")?>')});$(".mes").on("click",
function(){var a={mes:$(this).val()};$.ajax({data:a,url:"meses.php",type:"post",success:function(b){$(".noticias").html(b)}})});$(document).ready(function(){$("#busqueda").autocomplete({source:<?php autoCom(); ?>})})};
   </script>
</body>
<?php
function imprimir($parametros){
	include("configDB.php");	
	$consulta = 'SELECT * FROM entradas '.$parametros;
    $respuesta = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    $i=0;		
	while ($columna = mysqli_fetch_array( $respuesta ) and $i<10)
    {
        echo '<div class="jumbotron noticia"><h3><a target="_blank" href='.$columna['Link'].'>'.$columna['Titulo'] . '</a></h3><hr>' .
		$columna['Autor'].'<br>'.$columna['Descripcion'] . '<br><br>'.$columna['Fecha'].
		'</div><br/><br/>';
        $i++;
    }	
}
function autoCom(){
	include("configDB.php");
	$result = mysqli_query($conexion, "SELECT * FROM entradas");
	$array = array();
	if($result){
		while ($row = mysqli_fetch_array($result)) {
			$titulo = $row['Titulo'];
			array_push($array, $titulo);
		}
	}	
	echo json_encode($array);
}	
?> 