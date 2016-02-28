<?php

   /**
    * Clase Matematicas
    * 
    * Desarollo WEB en Entorno Servidor
    * UT6. Servicios WEB
    * Ejemplo 2: Servicio WEB con WSDL
    * Mauri
    *
   */
class Matematicas
 {
   /**
    * Calcula el factorial de un número
    * 
    * @param integer $i
    * @return integer $fac
    * 
   */    
    public function FACTORIAL ($i)
     {                   
     $fac=1;
     $n = $i;
        
      while ($n>0)
       {
        $fac = $fac * $n;
        $n--;
       }            
       return ($fac);          
     } 
         
     
    /**
     * Calcula la potencia de 2 números
     * 
     * @param integer $b
     * @param integer $e
     * @return integer $potencia
     * 
    */    
    public function POTENCIA ($b, $e)
     {                              
      $potencia = pow ($b, $e);
        
      return ($potencia);          
     }   
 }
?>
