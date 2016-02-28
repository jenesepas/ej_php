<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 3 : MySQL y PHP -->
<!-- Ejemplo de consulta sobre un  valor proporcionado por un formulario HTML -->
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Insercion Disco</title>
     </head>
     <body>
<?php

     // Leemos los valores enviados por el formulario:
     $nombre    = $_POST['nombre'];
     $fecha_pub = $_POST['fecha_pub'];
     $ventas      = $_POST['ventas'];     
     $formato = $_POST['formato'];
     $grupo = $_POST['grupo'];
     $discogra  = $_POST['discogra'];       
     
     // Nos conectamos a la base de datos ut3 del usuario ut3:  
     $pdo = new PDO ('mysql:host=localhost; dbname=ut3', 'ut3', 'ut3');
     
     // Averiguamos el actual MAX de cod_musico:
     $resultado  = $pdo->query ("select max(cod_disco) from discos");
     $maximo     = $resultado->fetch ();
     $maximo_cod = $maximo [0];
      
     // Calculamos el nuevo cod_musico:
     $nuevo_cod_disco = $maximo_cod + 1;
     
     // Averiguamos si existe el cod. del grupo:
     $resultado  = $pdo->query ("select 1 from grupos where cod_grupo =".$grupo);
     $existe_grupo = $resultado->fetch ();
     
     // Averiguamos si existe el cod. de discografica:
     $resultado  = $pdo->query ("select 1 from discograficas where cod_discografica =".$discogra);
     $existe_discogra = $resultado->fetch ();
     
     if ($existe_grupo == null || $existe_discogra == null)
     		echo "Error: el codigo del grupo o la discografica no existe.<br />";
     else {                
         
	     //Construimos la sentencia "preparada":
	     $sql = $pdo->prepare("INSERT INTO discos (cod_disco, nombre_disco, fecha_publicacion, millones_vendidos, formato_inicial, grupo, discografica) ". 
	     			"VALUES (:cod, :nombre, :fp, :mv, :formato, :grupo, :discogra)");
	     
	     // Vinculamos los parámetros de la "preparada" a los valores enviados desde el formulario:
	     $sql->bindParam(':cod', $nuevo_cod_disco);
	     $sql->bindParam(':nombre', $nombre);
	     $sql->bindParam(':fp', $fecha_pub);
	     $sql->bindParam(':mv', $ventas);
	     $sql->bindParam(':formato', $formato);
	     $sql->bindParam(':grupo', $grupo);
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