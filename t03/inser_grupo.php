<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 3 : MySQL y PHP -->
<!-- Ejemplo de consulta sobre un  valor proporcionado por un formulario HTML -->
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Insercion Grupo</title>
     </head>
     <body>
<?php

     // Leemos los valores enviados por el formulario:
     $nombre    = $_POST['nombre'];
     $pais      = $_POST['pais'];
     $fecha_fun = $_POST['fecha_fun'];
     $fecha_dis = $_POST['fecha_dis'];
     $estilo = $_POST['estilo'];
     $discogra  = $_POST['discogra'];       
     
     // Nos conectamos a la base de datos ut3 del usuario ut3:  
     $pdo = new PDO ('mysql:host=localhost; dbname=ut3', 'ut3', 'ut3');
     
     // Averiguamos el actual MAX de cod_musico:
     $resultado  = $pdo->query ("select max(cod_grupo) from grupos");
     $maximo     = $resultado->fetch ();
     $maximo_cod = $maximo [0];
      
     // Calculamos el nuevo cod_musico:
     $nuevo_cod_grupo = $maximo_cod + 1;
     
     // Averiguamos si existe el cod. de discografica:
     $resultado  = $pdo->query ("select 1 from discograficas where cod_discografica =".$discogra);
     $existe_discogra = $resultado->fetch ();
     if ($existe_discogra == null)
     		echo "Error: el codigo de la discografica no existe.<br />";
     else {                
         
	     //Construimos la sentencia "preparada":
	     $sql = $pdo->prepare("INSERT INTO grupos (cod_grupo, nombre_grupo, pais, fecha_fundacion, fecha_disolucion, estilo, discografica) ". 
	     			"VALUES (:cod, :nombre, :pais, :ff, :fd, :est, :discogra)");
	     
	     // Vinculamos los parámetros de la "preparada" a los valores enviados desde el formulario:
	     $sql->bindParam(':cod', $nuevo_cod_grupo);
	     $sql->bindParam(':nombre', $nombre);
	     $sql->bindParam(':pais', $pais);
	     $sql->bindParam(':ff', $fecha_fun);
	     $sql->bindParam(':fd', $fecha_dis);
	     $sql->bindParam(':est', $estilo);
	     $sql->bindParam(':discogra', $discogra);
	     
	     // Y la ejecutamos:
	     $resultado=$sql->execute();
	     if ($resultado)
	     	echo "Insercion realizada correctamente.<br />";
	     else 
	      echo "Error: no se pudo realizar la insercion.<br />";  
	     
    } 
                     
?>   
     </body>
</html>