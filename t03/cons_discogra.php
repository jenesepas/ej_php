<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 3 : MySQL y PHP -->
<!-- Ejemplo de consulta sobre un  valor proporcionado por un formulario HTML -->
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Consulta discogra</title>
     </head>
     <body>
<?php

     // Leemos el valor enviado por el formulario:
     $nombre = $_POST['nombre'];
     
     // Nos conectamos a la base de datos ut3 del usuario ut3:  
     $pdo = new PDO ('mysql:host=localhost; dbname=ut3', 'ut3', 'ut3');
     
     // Hacemos la consulta:
     $fila = $pdo->query ("select cod_discografica, nombre_empresa, pais, capital_social, tipo ".
     								"from discograficas where nombre_empresa  like '%".$nombre."%'");
     
     // Depositamos el resultado en la fila $resultado:
     $resultado = $fila->fetch ();     
     if ($resultado == null)
     		echo "Error: No existe una discografica con ese nombre.<br />";
     else {
     	  while ($resultado != null) {
		     // Y extraemos los compornentes de esa fila que nos interesan:
		     $cod    = $resultado ["cod_discografica"];
		     $nombre    = $resultado ["nombre_empresa"];
		     $pais             = $resultado ["pais"];
		     $cs = $resultado ["capital_social"];
		     $tipo = $resultado ["tipo"];
		     
		     // Visualizamos el resultado:
		     print "<p>La discografica ".$nombre." tiene el codigo ".$cod. 
		     			", es una ".$tipo.", tiene un capital de ".$cs." y es de ".$pais.".";
		     
		     $resultado = $fila->fetch (); 			     
		  }
	  }	     			                 
?>   
     </body>
</html>