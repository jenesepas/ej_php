<?php

// Utilizamos el código (La clase) construida en este archivo:
require_once('discos.php');


// Para generar el archivo .wsdl.
//$server = new SoapServer(null, array('uri'=>""));

// publicacion de servicio
$server = new SoapServer("http://localhost/ej_php/t06/sw_server/server_SI_WSDL.wsdl");


$server->setClass('discos');
$server->handle();
?>