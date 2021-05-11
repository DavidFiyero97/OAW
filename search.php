<?php
if(!isset($_SESSION)){
  session_start();
}
//texto contendra el resultado de la búsqueda
//registro contendra el número de reg encontrados
$texto= '';
$registros= '';

if($_POST){
  //eliminar espacios en blanco u otros caracteres al inicio de la cadena
  //y asignar a busqueda
  $busqueda=trim($_POST['palabra']);

  //si la busqueda esta vacia entonces no hay nada que encontrar
  if(empty($busqueda)){
    $texto= 'No hay resultados';
  } else{
    //pero si no esta vacio entonces se abre la conexion de la BD
    include("configDB.php");
    //consulta a la base de datos. Se utiliza LIKE para acceder a todo lo que contenga la cadena
    $query= "SELECT * FROM entradas where Titulo LIKE '%" .$busqueda. "%' ORDER BY Fecha desc LIMIT 10";
    //se ejecuta la cnsulta
    $resultado= mysqli_query($conexion,$query);

    //si se encuentran resultados entonces nos muestra el numero de resultados
    if(mysqli_num_rows($resultado)>0){
      $registros = '<p>Se han encontrado ' . mysqli_num_rows($resultado) . ' registros</p>';
      //mientras se recupere l fila, el apuntador fila se mueve hacia adelante y recupera la fila
      while($fila=mysqli_fetch_assoc($resultado)){
        $texto .=$fila['Titulo'] . "<br/>" . $fila['Autor'] . "<br/>" . $fila['Descripcion'] . "<br/>" . $fila['Fecha'] . "<br/><br/>";
      }
    }else{ //si no se encontro nigun url en la BD
      $texto = "No hay ningun resultado en la base de datos";
    } //cerrar conexion
    mysqli_close($conexion); 
  }
  echo $registros . "<br/>" . $texto;
}

 ?>
