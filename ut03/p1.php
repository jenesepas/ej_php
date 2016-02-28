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
        <h3>Prueba de conexion con mysqli</h3>
        <?php
        

			@ $dwes = new mysqli('localhost', 'dwes', 'abc123.', 'dwes');			
			$error = $dwes->connect_errno;
			
			if ($error != null) {
			
			     echo "<p>Error $error conectando a la base de datos: $dwes->connect_error</p>";
			
			     exit();
			
			}
			else {
					
					echo "<p>Select: stock con > 2 unidades</p><br>";

					$resultado = $dwes->query('SELECT producto, unidades FROM stock WHERE unidades<2');
					
					$stock = $resultado->fetch_array();  // Obtenemos el primer registro
					
					while($stock != null) {					
						$producto = $stock['producto'];  // O también $stock[0];
						
						$unidades = $stock['unidades'];  // O también $stock[1];
						
						print "<p>Producto $producto: $unidades unidades.</p>";
						
						$stock = $resultado->fetch_array();
					
					}
					
					echo "<p>Insert: </p><br>";
					
					$consulta = $dwes->stmt_init();

					$consulta->prepare('INSERT INTO familia (cod, nombre) VALUES (?, ?)');
					
					$cod_producto = "COM_PC";
					
					$nombre_producto = "Componentes PC";
					
					$consulta->bind_param('ss', $cod_producto, $nombre_producto);
					
					$consulta->execute();
					
					$consulta->close();
					
					//vemos los elementos insertados
					
					$consulta = $dwes->stmt_init();

					$consulta->prepare('SELECT cod, nombre FROM familia');
					
					$consulta->execute();
					
					$consulta->bind_result($cod, $nombre);
					
					while($consulta->fetch()) {
					
						print "<p>Familia: $cod $nombre .</p>";
					
					}
					
					$consulta->close();


					$dwes->close();

			}	


        ?>
    </body>
</html>
