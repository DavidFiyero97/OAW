<?php
if(!isset($_SESSION)){
  session_start();
}

include("configDB.php");
require_once 'autoloader.php';

  //desabilitamos el modo seguro para poder borrar el contenido de las tablas
  $consulta="SET SQL_SAFE_UPDATES = 0";
  mysqli_query($conexion,$consulta) or die ("Algo ha salido mal en la consulta");


  //elimina las noticias para poder actualizar despues
  $consulta="DELETE FROM entradas";
  mysqli_query($conexion,$consulta) or die ("Algo ha salido mal en la consulta");

  //Activampos el modo seguro 
  $consulta="SET SQL_SAFE_UPDATES = 1";
  mysqli_query($conexion,$consulta) or die ("Algo ha salido mal en la consulta");

  // TOMA LOS URLS GUARDADOS PARA ACTUALIZAR LA BASE DE DATOS
  $consulta="SELECT * FROM Urls";
  $respuesta = mysqli_query($conexion,$consulta) or die ("Algo ha salido mal en la consulta");

  $ent=0;


   while($columna = mysqli_fetch_array($respuesta)and $ent<10)
  {
      $feed = new SimplePie();
      $feed->set_feed_url($columna['Link']);
      $feed->init();
      $itemQty = $feed->get_item_quantity();
      
    for ($i = 0; $i < $itemQty; $i++) {
      $item = $feed->get_item($i);
      $Titulo = htmlspecialchars_decode($item->get_title());
      $Autor = htmlspecialchars_decode($item->get_author()->get_name());
      $Fecha = htmlspecialchars_decode($item->get_date('Y-m-d H:i:s'));
      $Descripcion = htmlspecialchars_decode($item->get_description());
      $_GUARDAR_SQL = "INSERT INTO entradas (Titulo,Autor,Fecha,Descripcion) VALUES ('$Titulo','$Autor','$Fecha','$Descripcion')";    
      mysqli_query($conexion, $_GUARDAR_SQL);
     }
     $ent++;
  }
  @mysqli_close($conexion);
  session_destroy();
  header("Location: index.php");

?>