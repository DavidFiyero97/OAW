<?php
if(!isset($_SESSION)){
  session_start();
}
@$_SESSION['url']=$_POST['urlXml'];

//conectando a la base de datos
include("configDB.php");

//leer el archivo xml y guardarlo en una BD
require_once 'autoloader.php';
$url= $_SESSION['url'];
$feed= new SimplePie();
$feed->set_feed_url($url);
$feed->init();
$itemQty = $feed->get_item_quantity();
for($i=0;$i<$itemQty;i++){
  $item = $feed->get_item($i);
  $Titulo = $item->get_title();
  $Autor = $item->get_author()->get_name();
  $Fecha= $item->get_date('Y-m-d H:i:s');
  $Descripcion= $item->get_description();
  $_GUARDAR_SQL= = "INSERT INTO entradas(Titulo,Autor,Fecha,Descripcion) VALUES ('$Titulo','$Autor','$Fecha','$Descripcion')";
  msqli_query($conexion,$_GUARDAR_SQL);
}
@mysqli_close();
$_SESSION['menaje']="Guardado exitosamente";
header("Location: index.php");
include("index.php");
 ?>
