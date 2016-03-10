<?php

$url="http://localhost/ej_php/ut06/ej0/servicio.php";

$uri="http://localhost/ej_php/ut06/ej0";

$cliente = new SoapClient(null,array('location'=>$url,'uri'=>$uri));


$suma = $cliente->suma(5,10);

$resta = $cliente->resta(5,10);

print("La suma es ".$suma);

print("<br />La resta es ".$resta);




?>