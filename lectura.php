<?php
  include("configDB.php");
  $consulta="SELECT * FROM entradas ORDER BY Fecha desc";
  $respuesta = mysqli_query($conexion,$consulta) or die ("Algo ha salido mal en la consulta");
  $ent=0; //entero
  while($columna = mysqli_fetch_array($respuesta)and $ent<10)
  {
    echo $columna['Titulo'] . "<br/>" . $columna['Descripcion'] . "<br/>".$columna['Fecha']."<br/><br/>";
    $ent++;
  }
 ?>
