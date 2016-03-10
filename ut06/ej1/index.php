<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
    <body>
<?php
        
$url="http://localhost/ej_php/ut06/ej1/servicio.php";

//Creamos un cliente para llamar a esa URL. 
//Es obligatorio establecer el parámetro 'uri' al no tener WSDL el servidor!
$cliente = new SoapClient(null,
                          array('location'=>$url, 
                                'uri'=>"http://localhost/ej_php/ut06/ej1"));


// Obtenemos el factorial de 4
$num_ini=4;
$numero = $cliente->FACTORIAL ($num_ini);
print("El factorial de ".$num_ini." es: ".$numero);
print "<br />";

// Obtenemos el factorial de 5
$num_ini=5;
$numero = $cliente->FACTORIAL ($num_ini);
print("El factorial de ".$num_ini." es: ".$numero);
print "<br />";


// Obtenemos el factorial de 8
$num_ini=8;
$numero = $cliente->FACTORIAL ($num_ini);
print("El factorial de ".$num_ini." es: ".$numero);
print "<br />";


// Obtenemos el factorial de 10
$num_ini=10;
$numero = $cliente->FACTORIAL ($num_ini);
print("El factorial de ".$num_ini." es: ".$numero);
print "<br />"; 



        
        
?>
    </body>
</html>
