<!-- Desarrollo Web en Entorno Servidor -->
<!-- Examen - Juan Antonio Forte -->
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Insercion numero</title>
     </head>
     <body>
<?php

     // Leemos los valores enviados por el formulario:
     $numero_nat    = $_POST['num_inser'];
          
     
     // Nos conectamos a la base de datos ut3 del usuario ut3:  
     $pdo = new PDO ('mysql:host=localhost; dbname=examen', 'examen', 'examen');
     
     // Averiguamos el actual MAX de cod_numeros:
     $resultado  = $pdo->query ("select max(cod_numeros) from NUMEROS");
     $maximo     = $resultado->fetch ();
     $maximo_cod = $maximo [0];
      
     // Calculamos el nuevo cod_musico:
     $nuevo_cod_numero = $maximo_cod + 1;
     
     //echo $nuevo_cod_numero ." - ". $numero_nat
     
     // Averiguamos si existe el numero natural:
     $resultado  = $pdo->query ("select 1 from NUMEROS where numero_natural =".$numero_nat);
     $existe_numero = $resultado->fetch ();
     
     if ($existe_numero != null)
     		echo "Atención: el numero natural ".$numero_nat." ya existe.<br />";
     else {                
          
          //solo necesitamos hasta la mitad del numerom insertado.
          $mitad = ($numero_nat/2) + 1;
          for ($div=1; $div < $mitad;$div++)
          {     
     	     if (($numero_nat % $div) == 0)
               {                                                            
                                              	   
          	     //Construimos la sentencia "preparada":
                    $sql = $pdo->prepare("INSERT INTO NUMEROS (cod_numeros, numero_natural, uno_de_sus_divisores) ". 
                                   "VALUES (:cod, :num, :div)");
                    // Vinculamos los parámetros de la "preparada" a los valores enviados desde el formulario:
          	     $sql->bindParam(':cod', $nuevo_cod_numero);
          	     $sql->bindParam(':num', $numero_nat);
          	     $sql->bindParam(':div', $div);
          	     
          	     // Y la ejecutamos:
          	     $resultado=$sql->execute();

                    //aumentamos cod
                    $nuevo_cod_numero+=1;
          	     
                    if ($resultado)
                         echo "Insercion del dividor ".$div." de ".$numero_nat." realizada correctamente.<br />";
                    else 
                         echo "Error: no se pudo realizar la insercion.<br />";
                    
               }      
	     }

          

    } 
                   
?>   
     </body>
</html>
