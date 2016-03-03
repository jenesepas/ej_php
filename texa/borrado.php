<!DOCTYPE html>
<!--
    Tarea 3 - Prueba básica para borrado en la BD.
    Borrado de datos.
-->
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Borrado de un músico.</title>
     </head>
     
     <body>
    
     <?php

     // Leemos los valores enviados por el formulario:
     $nombre    = $_POST['nombre'];     
     
     // Nos conectamos a la base de datos ut3 del usuario ut3:  
     $pdo = new PDO ('mysql:host=localhost; dbname=ut3', 'ut3', 'ut3');
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     // Vamos a controlar las excepciones que pudiera haber.
     try{
         
        //Construimos la sentencia "preparada":
        $sql = $pdo->prepare("DELETE FROM musicos WHERE nombre_musico= :nombre");
     
         // Vinculamos los parámetros de la "preparada" a los valores enviados desde el formulario:
         $sql->bindParam(':nombre', $nombre);

         // Y la ejecutamos:
        $sql->execute();  
     
        echo "Músico ".$nombre." eliminado de la BD";
     } catch(PDOException $p){
         echo "Error:".$p->getMessage();
     }
    ?>   
     </body>
</html>