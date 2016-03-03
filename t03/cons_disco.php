<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 3 : MySQL y PHP -->
<!-- Ejemplo de consulta sobre un  valor proporcionado por un formulario HTML -->
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Consulta disco</title>
     </head>
     <body>
<?php

     // Leemos el valor enviado por el formulario:
     $nombre = $_POST['nombre'];
     
     // Nos conectamos a la base de datos ut3 del usuario ut3:  
     $pdo = new PDO ('mysql:host=localhost; dbname=ut3', 'ut3', 'ut3');
     
     // Hacemos la consulta:
     $fila = $pdo->query ("select cod_disco, nombre_disco, fecha_publicacion, millones_vendidos, formato_inicial, ".
     								"grupo, discografica from discos where nombre_disco  like '%".$nombre."%'");
     
     // Depositamos el resultado en la fila $resultado:
     $resultado = $fila->fetch ();     
     if ($resultado == null)
     		echo "Error: No existe un disco con ese nombre.<br />";
     else {
     	  while ($resultado != null) {
		     // Y extraemos los compornentes de esa fila que nos interesan:
		     $cod_disco    = $resultado ["cod_disco"];
		     $nombre_disco    = $resultado ["nombre_disco"];		     
		     $fp = $resultado ["fecha_publicacion"];
		     $mv             = $resultado ["millones_vendidos"];
		     $fi             = $resultado ["formato_inicial"];
		     $grupo             = $resultado ["grupo"];
		     $discogra             = $resultado ["discografica"];
		     
		     // Visualizamos el resultado:
		     print "<p>El disco ".$nombre_disco." tiene el codigo ".$cod_disco. ", se publicó el ".$fp.
		     " por el grupo ".$grupo.", en formato ".$fi.", vendió ".$mv." en la discografica ".$discogra.".";
		     
		     $resultado = $fila->fetch (); 			     
		  }
	  }	     			                 
?>   
     </body>
</html>