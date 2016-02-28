<?php

class Matematicas {
    
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
     } // Fin de funcion    
}
?>
