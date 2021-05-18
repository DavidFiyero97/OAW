<?php 
$mes=$_POST['mes'];
include("configDB.php");
$imprimir="";
$consulta='SELECT * FROM entradas WHERE Fecha LIKE "%'.$mes.'%"';
$respuesta=mysqli_query($conexion,$consulta);
$i=0;
while($columna=mysqli_fetch_array($respuesta)){
	$imprimir=$imprimir.'<div class="jumbotron noticia"><h3><a target="_blank" href='.$columna['Link'].'>'.$columna['Titulo'] . '</a></h3><hr>' .
    $columna['Autor'].'<br>'.$columna['Descripcion'] . '<br><br>'.$columna['Fecha'].
    '</div><br/><br/>';
    $i++;
}
if($i == 0){
    $imprimir ='<div class=" text-center jumbotron"><h4>NO HAY RESULTADOS EN LA BBDD</h4></div>';
}
echo $imprimir; 
?>