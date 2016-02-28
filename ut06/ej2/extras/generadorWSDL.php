<?php
require_once 'matematicas.php';
require_once 'WSDLDocument.php';

$wsdl = new WSDLDocument(
        "Matematicas",
        "http://localhost/02SERVER_SI_W/servicio.php",
        "http://localhost/02SERVER_SI_W");
echo $wsdl->saveXML();
?>
