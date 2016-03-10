<?php

/**
 * Matematicas class
 * 
 * Clase Matematicas  Desarollo WEB en Entorno Servidor UT6. Servicios WEB Ejemplo 2: Servicio 
 * WEB con WSDL Mauri 
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class Matematicas extends SoapClient {

  private static $classmap = array(
                                   );

  public function Matematicas($wsdl = "http://localhost/ej_php/ut06/ej2/server/servicio.wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   * Calcula el factorial de un número 
   *
   * @param int $i
   * @return int
   */
  public function FACTORIAL($i) {
    return $this->__soapCall('FACTORIAL', array($i),       array(
            'uri' => 'http://localhost/ej_php/ut06/ej2/server',
            'soapaction' => ''
           )
      );
  }

  /**
   * Calcula la potencia de 2 números 
   *
   * @param int $b
   * @param int $e
   * @return int
   */
  public function POTENCIA($b, $e) {
    return $this->__soapCall('POTENCIA', array($b, $e),       array(
            'uri' => 'http://localhost/ej_php/ut06/ej2/server',
            'soapaction' => ''
           )
      );
  }

}

?>
