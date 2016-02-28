<?php

/**
 * Discos class
 * 
 * Clase Discos  Desarollo WEB en Entorno Servidor UT6. Servicios WEB Tarea 06.2: Servicio 
 * WEB con WSDL Juan A. Forte Garcia 
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class Discos extends SoapClient {

  private static $classmap = array(
                                   );

  public function Discos($wsdl = "http://localhost/php/t06/sw_server/server_SI_WSDL.php?wsdl", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   * Saca el nombre de un musico. 
   *
   * @param int $cod_musico
   * @return string
   */
  public function Dame_Nombre_Musico($cod_musico) {
    return $this->__soapCall('Dame_Nombre_Musico', array($cod_musico),       array(
            'uri' => 'http://localhost/php/t06/sw_server',
            'soapaction' => ''
           )
      );
  }

  /**
   * Saca el grupo del pais y con fecha_fundacion posterior a la dada. 
   *
   * @param string $pais
   * @param string $fecha
   * @return string
   */
  public function Dame_Grupo_Viejo($pais, $fecha) {
    return $this->__soapCall('Dame_Grupo_Viejo', array($pais, $fecha),       array(
            'uri' => 'http://localhost/php/t06/sw_server',
            'soapaction' => ''
           )
      );
  }

}

?>
