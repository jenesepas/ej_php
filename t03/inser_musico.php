<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 3 : MySQL y PHP -->
<!-- Ejemplo de consulta sobre un  valor proporcionado por un formulario HTML -->
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Insercion musico</title>
     </head>
     <body>
<?php

     // Leemos los valores enviados por el formulario:
     $nombre    = $_POST['nombre'];
     $pais      = $_POST['pais'];
     $fecha_nac = $_POST['fecha_nac'];
     $grupo     = $_POST['grupo'];       
     
     // Nos conectamos a la base de datos ut3 del usuario ut3:  
     $pdo = new PDO ('mysql:host=localhost; dbname=ut3', 'ut3', 'ut3');
     
     // Averiguamos el actual MAX de cod_musico:
     $resultado  = $pdo->query ("select max(cod_musico) from musicos");
     $maximo     = $resultado->fetch ();
     $maximo_cod = $maximo [0];
      
     // Calculamos el nuevo cod_musico:
     $nuevo_cod_musico = $maximo_cod + 1;
     
     // Averiguamos si existe el cod. del grupo:
     $resultado  = $pdo->query ("select 1 from grupos where cod_grupo =".$grupo);
     $existe_grupo = $resultado->fetch ();
     if ($existe_grupo == null)
     		echo "Error: el codigo del grupo no existe.<br />";
     else {                
         
	     //Construimos la sentencia "preparada":
	     $sql = $pdo->prepare("INSERT INTO musicos (cod_musico, nombre_musico, pais, fecha_nacimiento, grupo) ". "VALUES (:cod, :nombre, :pais, :fc, :grupo)");
	     
	     // Vinculamos los parámetros de la "preparada" a los valores enviados desde el formulario:
	     $sql->bindParam(':cod', $nuevo_cod_musico);
	     $sql->bindParam(':nombre', $nombre);
	     $sql->bindParam(':pais', $pais);
	     $sql->bindParam(':fc', $fecha_nac);
	     $sql->bindParam(':grupo', $grupo);
	     
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