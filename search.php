<?php 
if(!isset($_SESSION)){ 
    session_start(); 
}
//Variable que contendrá el resultado de la búsqueda
$texto = '';
//Variable que contendrá el número de resgistros encontrados
$registros = '';

	echo '<head>
		<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width">
	  <title>RSS</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style-min.css">
      <link rel="stylesheet" href="css/responsive-min.css">
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
		</head>
    <body class="main-layout">';
if($_POST){
	
  $busqueda = trim($_POST['palabra']);

  $entero = 0;
  $registros = '
  <div id="noticias" class="service" style="padding-bottom: 0px;"><div class="container"><div class="row"><div class="col-md-12"><div class="titlepage"><h2>Noticias </h2>';
  if (empty($busqueda)){
   $texto = '
   <div class=" text-center jumbotron"><h4>NO HAY RESULTADOS EN LA BBDD</h4></div>
   </div></div></div></div></br></br>';	
  }else{
	  // Si hay información para buscar, abrimos la conexión
	  //cadena de conexion 
    include("configDB.php");
	  
	  //Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar
	  $sql = "SELECT * FROM entradas WHERE Titulo LIKE '%" .$busqueda. "%' or Descripcion LIKE '%" .$busqueda. "%'  or Autor LIKE '%" .$busqueda. "%' ORDER BY Fecha desc LIMIT 10";
	  
	  $resultado = mysqli_query($conexion, $sql); //Ejecución de la consulta
      //Si hay resultados...
	  if (@mysqli_num_rows($resultado) > 0){ 
	     // Se recoge el número de resultados
		 $registros .= '<div class="noticias" id="noticias">
               <span>HEMOS ENCONTRADO ' . mysqli_num_rows($resultado) . '</span>
               </div></div></div></div>';
	     // Se almacenan las cadenas de resultado
		 while($fila = mysqli_fetch_assoc($resultado)){ 
        $texto .= '<div class="jumbotron"><h3><a target="_blank" href='.$fila['Link'].'>'.$fila['Titulo'] . '</a></h3><hr>' .
        $fila['Autor'].'<br>'.$fila['Descripcion'] . '<br><br>'.$fila['Fecha'].
        '</div><br/><br/>';
			}
	  
	  }else{
			$texto = '
         <div class=" text-center jumbotron"><h4>NO HAY RESULTADOS EN LA BBDD</h4></div></div></div></div></div></br></br>';	
	  }
	  // Cerramos la conexión (por seguridad, no dejar conexiones abiertas)
	  mysqli_close($conexion);
  }
  echo $registros . "<br/>" . $texto;
  echo ' </div>
  <footr><div class="footer"><div class="container"><div class="copyright"><p>Copyright 2021 All Right Reserved By Team Carmona, González and Salazar. </p></div></div></footr></body>';
}
?>