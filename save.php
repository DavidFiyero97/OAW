<?php
if(!isset($_SESSION)){ 
    session_start(); 
} 
@$_SESSION['url'] = $_POST['urlXml'];

//CONEXIÓN A LA BASE DE DATOS
include("configDB.php");

//LEER ARCHIVO XML Y GUARDAR EN UNA BASE DE DATOS
require_once 'autoloader.php';
$url = $_SESSION['url'];
$feed = new SimplePie();
$feed->set_feed_url($url);
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
@mysqli_close();
session_destroy();
header("Location: index.php");
?>