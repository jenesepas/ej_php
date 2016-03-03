<?php

$url="http://localhost/php/ut06/ej0/servicio1.php";

$uri="http://localhost/php/ut06/ej0";

$cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri));


$suma = $cliente->suma(12,12);

$resta = $cliente->resta(12,12);

print("La suma es ".$suma);

print("<br />La resta es ".$resta);




?>