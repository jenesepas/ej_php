<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        
        // Incluimos el fichero generado a partir
        // del WSDL del servicio:
        require_once 'Matematicas.php';
        
        
        //Creamos un cliente para llamar a esa URL. 
        $cliente = new Matematicas ();

        // Probamos a obtener el FACTORIAL de 6
        $valor = $cliente->FACTORIAL(6);
        print_r("Factorial de 6: ".$valor);
        print "<br />";

        // Probamos a obtener la POTENCIA 2,5
        $valor = $cliente->POTENCIA(2, 5);
        print_r("Potencia (2, 5): ".$valor);
        print "<br />";
                            
        
        ?>
    </body>
</html>
