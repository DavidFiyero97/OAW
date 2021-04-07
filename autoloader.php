<?php

spl_autoload_register(array(new SimplePie_Autoloader(),'autoload'));
if(!class_exists('SimplePie'))
{
 trigger_error('Autoloader no esta registrado apropiadamente', E_USER_ERROR);
}
/**
*@package SimplePie
*@subpackage API
*/
class SiplePie_Autoloader{
  //constructor
  public function __contruct()
  {
    $this->path = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'library';
  }
  //$class es el nombre de la clase que se intentará cargar
  public function autoload($class)
  {
    //solo carga la clase si empieza con SimplePie
    if(strpos($class, 'SimplePie')!==0){
      return;
    }
    $filename=$this->path . DIRECTORY_SEPARATOR . str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php';
    include $filename;
  }
}
