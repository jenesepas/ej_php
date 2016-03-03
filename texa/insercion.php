<!DOCTYPE html>
<!--
    Tarea 3 - Prueba básica para inserción en la BD.
    Inserción de datos.
-->
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Inserción de un músico.</title>
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
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     // Vamos a controlar las excepciones que pudiera haber.
     try{
        
     
        // Averiguamos el actual MAX de cod_musico:
        $resultado  = $pdo->query ("select max(cod_musico) from musicos");
        $maximo     = $resultado->fetch ();
        $maximo_cod = $maximo [0];
      
        // Calculamos el nuevo cod_musico:
        $nuevo_cod_musico = $maximo_cod + 1;
         
         
        //Construimos la sentencia "preparada":
        $sql = $pdo->prepare("INSERT INTO musicos (cod_musico, nombre_musico, pais, fecha_nacimiento, grupo) ". "VALUES (:cod, :nombre, :pais, :fc, :grupo)");
     
         // Vinculamos los parámetros de la "preparada" a los valores enviados desde el formulario:
         $sql->bindParam(':cod', $nuevo_cod_musico);
         $sql->bindParam(':nombre', $nombre);
         $sql->bindParam(':pais', $pais);
         $sql->bindParam(':fc', $fecha_nac);
         $sql->bindParam(':grupo', $grupo);
         
        // Y la ejecutamos:
        $sql->execute();  
     
        echo "Datos insertados";
     } catch(PDOException $p){
         echo "Error:".$p->getMessage();
     }
    ?>   
     </body>
</html>