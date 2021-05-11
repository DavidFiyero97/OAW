<?php
if(!isset($_SESSION)){
  session_start();
}
//texto contendra el resultado de la búsqueda
//registro contendra el número de reg encontrados
$texto= '';
$registros= '';



function Buscar_url($urla){    
  include("configDB.php");
  $ent=0;
      $consulta="SELECT * FROM urls";
      $respuesta = mysqli_query($conexion,$consulta) or die ("Algo ha salido mal en la consulta");

      while($columna = mysqli_fetch_array($respuesta)and $ent<10)
      {
        if($columna['Link'] == $urla){
          mysqli_close($conexion);
          return 1;
        }
        $ent++;
      }
      mysqli_close($conexion); 
    return 0;
  }
 ?>
 