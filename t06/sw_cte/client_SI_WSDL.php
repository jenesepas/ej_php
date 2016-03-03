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
        
        
        // Incluimos el fichero generado a partir
        // del WSDL del servicio:
        require_once 'Discos.php';
        
        
        //Creamos una instancia de la clase Discos. 
        $discos = new Discos ();

        // Obtenemos el nombre del musico con cod=30
		   $nombre_musico = $discos->Dame_Nombre_Musico(30);
			print("El nombre del musico 30 es: ".$nombre_musico);
			print "<br />";
			
			//obtenemos el grupo y la fecha fundacion posterior a la fecha pasada.
			print($discos->Dame_Grupo_Viejo("Reino Unido","1970-01-01").", posterior a la fecha: 1970-01-01 y de Reino Unido.");
        
                            
        
        ?>
    </body>
</html>