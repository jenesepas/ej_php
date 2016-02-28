<?php

require_once('mates.php');


$uri="http://localhost/php/ut06/ej0";

$server = new SoapServer(null,array('uri'=>$uri));

$server->setClass('Matematicas');

$server->handle();


?>
