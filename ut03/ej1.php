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
                          
        $pdo = new PDO ("mysql:host=localhost; dbname=ut3", "ut3", "ut3");       
        $sql = "select nombre_disco, millones_vendidos from discos";
		  //$dwes = new PDO("mysql:host=localhost;dbname=dwes", "dwes", "abc123.");
		  //$sql = "SELECT cod, nombre_corto FROM producto";

		  $resultado = $pdo->query($sql);

		  if($resultado) {
				$row = $resultado->fetch();
				while ($row != null) {
					echo $row ['nombre_disco'] . ' ==> ' . $row ['millones_vendidos'] . '<br />';
					//echo $row ['cod'] . ' ==> ' . $row ['nombre_corto'] . '<br />';
					$row = $resultado->fetch();
				}	
        }
        else {
        		echo "No se pudo establecer la conexion.<br />";
        }	
        
        ?>
    </body>
