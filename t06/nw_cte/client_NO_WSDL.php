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
        
$url="http://localhost/ej_php/t06/nw_server/server_NO_WSDL.php";

//Creamos un cliente para llamar a esa URL. 
//Es obligatorio establecer el parámetro 'uri' al no tener WSDL el servidor!
$discos = new SoapClient(null,
                          array('location'=>$url, 
                                'uri'=>"http://localhost/ej_php/t06/nw_server"));


// Obtenemos el nombre del musico con cod=30
$nombre_musico = $discos->Dame_Nombre_Musico(30);
print("El nombre del musico 30 es: ".$nombre_musico);
print "<br />";

//obtenemos el grupo y la fecha fundacion posterior a la fecha pasada.
print($discos->Dame_Grupo_Viejo("Reino Unido","1970-01-01").", posterior a la fecha: 1970-01-01 y de Reino Unido.");
        
        
?>
    </body>
</html>