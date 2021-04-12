<?php

spl_autoload_register(array(new SimplePie_Autoloader(), 'autoload'));

if(!class_exists('SimplePie'))
{
 trigger_error('Autoloader no esta registrado apropiadamente', E_USER_ERROR);
}
/**
*@package SimplePie
*@subpackage API
*/
class SimplePie_Autoloader
{
  /**
   * Constructor
   */
  public function __construct()
  {
    $this->path = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'library';
  }

  /**
   * Autoloader
   *
   * @param string $class The name of the class to attempt to load.
   */
  public function autoload($class)
  {
    // Only load the class if it starts with "SimplePie"
    if (strpos($class, 'SimplePie') !== 0)
    {
      return;
    }

    $filename = $this->path . DIRECTORY_SEPARATOR . str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php';
    include $filename;
  }

}
