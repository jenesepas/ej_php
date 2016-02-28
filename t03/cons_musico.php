<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 3 : MySQL y PHP -->
<!-- Ejemplo de consulta sobre un  valor proporcionado por un formulario HTML -->
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Consulta musico</title>
     </head>
     <body>
<?php

     // Leemos el valor enviado por el formulario:
     $nombre = $_POST['nombre'];
     
     // Nos conectamos a la base de datos ut3 del usuario ut3:  
     $pdo = new PDO ('mysql:host=localhost; dbname=ut3', 'ut3', 'ut3');
     
     // Hacemos la consulta:
     $fila = $pdo->query ("select cod_musico, nombre_musico, pais, fecha_nacimiento from musicos where nombre_musico  like '%".$nombre."%'");
     
     // Depositamos el resultado en la fila $resultado:
     $resultado = $fila->fetch ();     
     if ($resultado == null)
     		echo "Error: No existe un musico con ese nombre.<br />";
     else {
     	  while ($resultado != null) {
		     // Y extraemos los compornentes de esa fila que nos interesan:
		     $cod_musico    = $resultado ["cod_musico"];
		     $nombre_musico    = $resultado ["nombre_musico"];
		     $pais             = $resultado ["pais"];
		     $fecha_nacimiento = $resultado ["fecha_nacimiento"];
		     
		     // Visualizamos el resultado:
		     print "<p>El músico ".$nombre_musico." tiene el codigo ".$cod_musico. 
		     			", nació el ".$fecha_nacimiento." y es de ".$pais.".";
		     
		     $resultado = $fila->fetch (); 			     
		  }
	  }	     			                 
?>   
     </body>
</html>