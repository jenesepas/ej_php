<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 2 : Caracter�sticas del Lenguaje PHP -->
<!-- Ejemplo: Procesar datos post enviados por un formulario HTML -->
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Divisores</title>
     </head>
     <body>
<?php
     // Leemos el valor enviado por el formulario:
     $numero = $_POST['numero'];
     $divisores = array();  // Creamos $divisores como un array vacío
     
     // Vamos a recorrer desde 1 hasta la mitad de ese número
     // buscando sus divisores. Los depositaremos en un array.
     $limite = intval ($numero/2) + 1;
     $i      = 1;
     for ($c = 1; $c <= $limite; $c++)
        {
         if (($numero % $c) == 0)   
          { //Hemos encontrado un divisor y lo metemos en el array           
           $divisores [$i] = $c;
           $i++;           
          }                            
        } 
      
     // Una vez construido el array, lo visualizamos:   
     foreach ($divisores as $divisor)
      {
       print "Divisor: ".$divisor."<br />";  
      }
     
     
?>   
     </body>
</html>