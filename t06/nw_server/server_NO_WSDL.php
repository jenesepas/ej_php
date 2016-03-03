<?php

require_once('discos.php');


$uri="http://localhost/php/t06/nw_server";

$server = new SoapServer(null,array('uri'=>$uri));

$server->setClass('Discos');

$server->handle();


?>