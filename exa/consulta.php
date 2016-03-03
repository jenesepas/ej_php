<!-- Desarrollo Web en Entorno Servidor -->
<!-- Examen - Juan Antonio Forte -->
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Consulta numeros</title>
     </head>
     <body>
<?php

     // Leemos el valor enviado por el formulario:
     $numero = $_POST['mayor_div'];
     
     // Nos conectamos a la base de datos ut3 del usuario ut3:  
     $pdo = new PDO ('mysql:host=localhost; dbname=examen', 'examen', 'examen');
     
     // Hacemos la consulta:
     $fila = $pdo->query ("select max(uno_de_sus_divisores) as udd from NUMEROS where numero_natural =".$numero);
     
     // Depositamos el resultado en la fila $resultado:
     $resultado = $fila->fetch ();     
     if ($resultado == null)
     		echo "Error: No existe ese numero.<br />";
     else {
     	  // solo obtenemos un resultado siempre
            $udd    = $resultado ["udd"];   
            if ($udd == null)
               print "<p>Numero natural ".$numero." no encontrado.";                     
            else
               // Visualizamos el resultado:
               print "<p>Mayor divisor de ".$numero." es ".$udd.".";          
	  }	     			                 
?>   
     </body>
</html>