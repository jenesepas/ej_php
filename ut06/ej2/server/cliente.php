<?php


//Creamos un cliente para llamar a esa URL. 
//Con WSDL (2 opciones)
//$cliente = new SoapClient("http://localhost/php/ut06/ej2/server/servicio.wsdl");

$cliente = new SoapClient("http://localhost/php/ut06/ej2/server/servicio.php?wsdl");

  // Probamos a obtener el FACTORIAL de 5
  $valor = $cliente->FACTORIAL(5);
  print_r("Factorial de 5: ".$valor);
  print "<br />";

  // Probamos a obtener la POTENCIA 3,4
  $valor = $cliente->POTENCIA(3, 4);
  print_r("Potencia (3, 4): ".$valor);
  print "<br />";

?>