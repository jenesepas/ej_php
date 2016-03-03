

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "

http://www.w3.org/TR/html4/loose.dtd">

<!-- Desarrollo Web en Entorno Servidor -->

<!-- Tema 2 : Características del Lenguaje PHP -->

<!-- Ejemplo: Procesar datos post -->

<html>

     <head>

          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

          <title>Desarrollo Web</title>

     </head>

     <body>

<?php

     $nombre = $_REQUEST['nombre'];

     $modulos = $_REQUEST['ciclos'];

     print "Nombre: ".$nombre."<br />";
        
     $cuenta=count($modulos);
     
     if ($cuenta > 0)
     {    
        foreach ($modulos as $modulo) {

              print "Modulo: ".$modulo."<br />";

        }
     }
     else print "<br />"."Array modulos está vacio.";

?>

     </body>

</html>

