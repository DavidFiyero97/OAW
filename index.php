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
  <main>
  <div class="buscador">
    <h2> Introduzca la direccion del archivo xml a guardar:</h2>
    <br>
    <form action="save.php" method="post" class="forma">
      <div class="searchForm" id="searchForm">
        <input name="urlXml" type="search" class="searchBar">
      </div>
      <br>
      <input type="submit" value="Agregar" class="btn">
    </form>
  </div>
  </main>
 </body>
 </html>