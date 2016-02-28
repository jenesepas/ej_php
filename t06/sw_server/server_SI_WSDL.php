<?php

// Utilizamos el código (La clase) construida en este archivo:
require_once('discos.php');


// publicacion de servicio
$server = new SoapServer("http://localhost/php/t06/sw_server/server_SI_WSDL.wsdl");


$server->setClass('discos');
$server->handle();
?>