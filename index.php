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
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width">
   <title>Administrador</title>
 </head>
 <body>
   <p>Bienvenido</p>
   <form action="save.php" method="post">
     <p> Introduzca la direccion del archivo xml a guardar:
       <input type="text" name="urlXml">
     </p>
     <input type="submit" value="Agregar">
   </form>
 </body>
 </html>
