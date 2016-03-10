<?php

// Utilizamos el código (La clase) construida en este archivo:
require_once('matematicas.php');


// Sin WSDL es obligatorio el uri que especifica el directorio del servicio WEB
// Para generar el archivo .wsdl.
//$server = new SoapServer(null, array('uri'=>""));

//Con WSDL
$server = new SoapServer("http://localhost/ej_php/ut06/ej2/server/servicio.wsdl");

$server->setClass('matematicas');
$server->handle();
?>

