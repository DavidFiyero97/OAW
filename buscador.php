<?php
    @session_start();
    if(strlen(@$_SESSION['mensaje'])!=0){
      echo '<script> alert("Guardado correctamente")</script>';
      @session_destroy();
    }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
    <meta charset="utf-8">
    <title>RSS</title>
 </head>
 <body class="centrado fondo">
  <h1>Bienvenido</h1>
  
  
	<div class="jumbotron" id="margen">
	<form action="search.php" method="post">
		<h2>Introduzca su búsqueda:   
      <br><br>
			<input type="text" name="palabra" id="busqueda" class="searchBar">
		</h2>
		<input class="btn btn-success" type="submit" value="Buscar">
	</form>
	</div>
  <br>  
  <div class="sideBar">
    <div class="header">
      <ul class="nav flex-column nav nav-pills nav-stacked">
        <li class="active active2"><a>Ordenar</a>
          <ul>
            <li><a href="lectura.php">Fecha</a></li>
            <li><a href="lecturados.php">Titulo</a></li>
            <li><a href="lecturatres.php">Autor</a></li>
            <li><a href="lecturacuatro.php">Descripcion</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <br>
 </body>

 </html>
 