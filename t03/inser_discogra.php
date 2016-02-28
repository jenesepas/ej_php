<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 3 : MySQL y PHP -->
<!-- Ejemplo de consulta sobre un  valor proporcionado por un formulario HTML -->
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Insercion Discografica</title>
     </head>
     <body>
<?php

     // Leemos los valores enviados por el formulario:
     $nombre    = $_POST['nombre'];
     $pais      = $_POST['pais'];
     $capital = $_POST['capital'];
     $tipo     = $_POST['tipo'];       
     
     // Nos conectamos a la base de datos ut3 del usuario ut3:  
     $pdo = new PDO ('mysql:host=localhost; dbname=ut3', 'ut3', 'ut3');
     
     // Averiguamos el actual MAX de cod_discogra:
     $resultado  = $pdo->query ("select max(cod_discografica) from discograficas");
     $maximo     = $resultado->fetch ();
     $maximo_cod = $maximo [0];
      
     // Calculamos el nuevo cod_musico:
     $nuevo_cod_discogra = $maximo_cod + 1;
                      
         
     //Construimos la sentencia "preparada":
     $sql = $pdo->prepare("INSERT INTO discograficas (cod_discografica, nombre_empresa, pais, capital_social, tipo) ". 
     								"VALUES (:cod, :nombre, :pais, :cs, :tipo)");
     
     // Vinculamos los parámetros de la "preparada" a los valores enviados desde el formulario:
     $sql->bindParam(':cod', $nuevo_cod_discogra);
     $sql->bindParam(':nombre', $nombre);
     $sql->bindParam(':pais', $pais);
     $sql->bindParam(':cs', $capital);
     $sql->bindParam(':tipo', $tipo);
     
     // Y la ejecutamos:
     $resultado=$sql->execute();
     if ($resultado)
     	echo "Insercion realizada correctamente.<br />";
     else 
      echo "Error: no se pudo realizar la insercion.<br />";  
	     
     
                     
?>   
     </body>
</html>