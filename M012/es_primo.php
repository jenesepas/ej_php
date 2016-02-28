<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 2 : Características del Lenguaje PHP -->
<!-- Ejemplo: Procesar datos post enviados por un formulario HTML-->
<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Es Primo</title>
     </head>
     <body>
<?php

     // Leemos el valor enviado por el formulario:
     $numero = $_POST['numero'];
	 $es_primo = 0;
	 
	 // En el caso de ser menor que 0 no procesamos el número
	 if ($numero < 1)
	  {
	   print "El numero ".$numero." es menor que 1. Prueba con un entero positivo ";
	   exit;
	  }
	 
	 // En el caso de 1 y 2, ni siquiera nos molestamos en comprobarlo.
	 if ($numero == 1 || $numero == 2)
	  {
	   print "El numero ".$numero." si es super-primo. ";
	   exit;
	  }

	 // Averguamos si ese numero es primo o no invocando a la
	 // funcion es_primo () que está definida abajo	 
	 $es_primo = es_primo ($numero);
	 
	  // Y visualizamos el resultado:
	  if ($es_primo == 1)
	   {
	    print "El numero ".$numero." si es primo. ";
	   }
	   else
	    {
		 print "El numero ".$numero." no es primo. ";
		}
     
	 
	 
	 
	 
	
	// Definición de funciones   
    //   ----- es_primo () -----
    function es_primo ($n)
           {// Vamos a calcular si el número "n" es primo                    
         
            $limite = intval (sqrt ($n)) + 1;
            $es_primo = 1; // Suponemos que es primo
            for ($c = 2; $c <= $limite; $c++)
              {
                if (($n % $c) == 0)   
                 {               
                  $es_primo = 0; //Hemos encontrado un divisor           
                  break;
                 }                            
               }                  
            return ($es_primo);
           } // Fin de es_primo () 
     
?>   
     </body>
</html>