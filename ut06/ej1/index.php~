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
        
$url="http://localhost/php/ut06/ej1/servicio.php";

//Creamos un cliente para llamar a esa URL. 
//Es obligatorio establecer el parámetro 'uri' al no tener WSDL el servidor!
$cliente = new SoapClient(null,
                          array('location'=>$url, 
                                'uri'=>"http://localhost/php/ut06/ej1"));


// Obtenemos el factorial de 4
$numero = $cliente->FACTORIAL (4);
print("Es: ".$numero);
print "<br />";

// Obtenemos el factorial de 5
$numero = $cliente->FACTORIAL (5);
print("Es: ".$numero);
print "<br />";


// Obtenemos el factorial de 6
$numero = $cliente->FACTORIAL (6);
print("Es: ".$numero);
print "<br />";


// Obtenemos el factorial de 7
$numero = $cliente->FACTORIAL (7);
print("Es: ".$numero);
print "<br />"; 



        
        
?>
    </body>
</html>
