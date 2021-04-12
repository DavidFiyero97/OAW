<?php
$usuario= "root";
$contrasena= "";
$servidor= "localhost";
$base= "bdrss";
$conexion= new mysqli($servidor,$usuario,$contrasena,$base);
$conexion->set_charset("utf8");
 ?>
