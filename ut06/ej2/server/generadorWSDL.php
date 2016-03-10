<?php
require_once 'matematicas.php';
require_once 'WSDLDocument.php';

$wsdl = new WSDLDocument(
        "Matematicas",
        "http://localhost/ej_php/ut06/ej2/server/servicio.php",
        "http://localhost/ej_php/ut06/ej2/server");
echo $wsdl->saveXML();
?>
