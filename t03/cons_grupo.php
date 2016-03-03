<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 3 : MySQL y PHP -->
<!-- Ejemplo de consulta sobre un  valor proporcionado por un formulario HTML -->
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Consulta grupo</title>
     </head>
     <body>
<?php

     // Leemos el valor enviado por el formulario:
     $nombre = $_POST['nombre'];
     
     // Nos conectamos a la base de datos ut3 del usuario ut3:  
     $pdo = new PDO ('mysql:host=localhost; dbname=ut3', 'ut3', 'ut3');
     
     // Hacemos la consulta:
     $fila = $pdo->query ("select cod_grupo, nombre_grupo, pais, fecha_fundacion, fecha_disolucion, estilo, discografica ".
     								"from grupos where nombre_grupo  like '%".$nombre."%'");
     
     // Depositamos el resultado en la fila $resultado:
     $resultado = $fila->fetch ();     
     if ($resultado == null)
     		echo "Error: No existe un musico con ese nombre.<br />";
     else {
     	  while ($resultado != null) {
		     // Y extraemos los compornentes de esa fila que nos interesan:
		     $cod_grupo    = $resultado ["cod_grupo"];
		     $nombre_grupo    = $resultado ["nombre_grupo"];
		     $pais             = $resultado ["pais"];
		     $fecha_fun = $resultado ["fecha_fundacion"];
		     $fecha_dis = $resultado ["fecha_disolucion"];
		     $estilo = $resultado ["estilo"];
		     $discogra = $resultado ["discografica"];
		     
		     // Visualizamos el resultado:
		     print "<p>El grupo -->".$nombre_grupo." tiene el codigo ".$cod_grupo.", nació el ".$fecha_fun.
		     			", se disolvió el ".$fecha_dis.", es de ".$pais.", estilo ".$estilo.
		     			" y su discografica es la ".$discogra.".";
		     
		     $resultado = $fila->fetch (); 			     
		  }
	  }	     			                 
?>   
     </body>
</html>