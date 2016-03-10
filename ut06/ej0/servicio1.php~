<?php



function suma($a,$b){ return $a+$b; }

function resta($a,$b){ return $a-$b; }


$uri="http://localhost/php/ut06/ej0";

$server = new SoapServer(null,array('uri'=>$uri));

$server->addFunction("suma");

$server->addFunction("resta");

$server->handle();


?>