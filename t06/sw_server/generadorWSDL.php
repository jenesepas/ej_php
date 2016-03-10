<?php
require_once 'discos.php';
require_once 'WSDLDocument.php';

$wsdl = new WSDLDocument(
        "Discos",
        "http://localhost/ej_php/t06/nw_server/server_NO_WSDL.php",
        "http://localhost/ej_php/t06/sw_server");
echo $wsdl->saveXML();
?>
