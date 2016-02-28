<?php
        


//Creamos un cliente para llamar a esa URL. 
$discos = new SoapClient("http://localhost/php/t06/sw_server/server_SI_WSDL.php?wsdl");


// Obtenemos el nombre del musico con cod=2
$nombre_musico = $discos->Dame_Nombre_Musico(2);
print("El nombre del musico 2 es: ".$nombre_musico);
print "<br />";

//obtenemos el grupo y la fecha fundacion posterior a la fecha pasada.
print($discos->Dame_Grupo_Viejo("Reino Unido","1965-01-01").", posterior a la fecha: 1965-01-01 y de Reino Unido.");
        
        
?>