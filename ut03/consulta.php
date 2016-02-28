<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 3 : MySQL y PHP -->
<!-- Ejemplo de consulta sobre un  valor proporcionado por un formulario HTML -->
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Consulta</title>
     </head>
     <body>
<?php

     // Leemos el valor enviado por el formulario:
     $numero = $_POST['codigo'];
     
     // Nos conectamos a la base de datos ut3 del usuario ut3:  
     $pdo = new PDO ('mysql:host=localhost; dbname=ut3', 'ut3', 'ut3');
     
     // Hacemos la consulta:
     $fila = $pdo->query ("select nombre_musico, pais, fecha_nacimiento from musicos where cod_musico =".$numero);
     
     // Depositamos el resultado en la fila $resultado:
     $resultado        = $fila->fetch ();
     
     // Y extraemos los compornentes de esa fila que nos interesan:
     $nombre_musico    = $resultado ["nombre_musico"];
     $pais             = $resultado ["pais"];
     $fecha_nacimiento = $resultado ["fecha_nacimiento"];
     
     // Visualizamos el resultado:
     print "<p>El músico con código <".$numero."> se llama ".$nombre_musico. " y es de ".$pais;                      
?>   
     </body>
</html>