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
        
        class COSA 
            {            
            private $numero_cosa;
            private $nombre_cosa;
            
            
    
             public function __construct ($nu, $nc)
                    {                   
                     $this->numero_cosa = $nu;
                     $this->nombre_cosa = $nc;                                                             
                    } // Fin de funcion _construct ()

                     
            public function __destruct ()
                    {
                     print("Destruimos a: ".$this->nombre_cosa." Su indice es: ".$this->numero_cosa);
                     print "<br />";
                     
                    } // Fin de funcion _destruct ()
                    
            public function Visualiza_Objeto ()
                    {                   
                     print("El objeto se llama: ".$this->nombre_cosa);
                     print "<br />";
                    } // Fin de funcion Visualiza_Objeto ()                   
                    
                    
                    
                     
            } // Fin de la clase COSA
        
        
            
         // Vamos a declarar un array de objetos (Números primos):
         $OBJETOS = array (9);
         
         
         // Y los creamos
         $OBJETOS [1] = new COSA (1, 'Uno');
         $OBJETOS [2] = new COSA (2, "Dos");
         $OBJETOS [3] = new COSA (3, "Tres");
         $OBJETOS [4] = new COSA (4, "Cinco");
         $OBJETOS [5] = new COSA (5, "Siete");
         $OBJETOS [6] = new COSA (6, "Once");
         $OBJETOS [7] = new COSA (7, "Trece");
         $OBJETOS [8] = new COSA (8, "Diecisiete");
         $OBJETOS [9] = new COSA (9, "Diecinueve");
         
                          
         // Vamos a visualizar los objetos con índice impar:
         $OBJETOS [1]->Visualiza_Objeto ();
         $OBJETOS [3]->Visualiza_Objeto ();
         $OBJETOS [5]->Visualiza_Objeto ();
         $OBJETOS [7]->Visualiza_Objeto ();
         $OBJETOS [9]->Visualiza_Objeto ();
         print "<br />";
         
         
         // Ahora destruimos los objetos con índíce 1, 3 y 5:
         // Prueba a comentar estas 3 líneas para que funcione.
         unset ($OBJETOS [1]); 
         unset ($OBJETOS [3]);
         unset ($OBJETOS [5]);
         print "<br />";
         
         
         // Y, aunque han sido destruidos, probamos a visualizarlos:
         // Lógicamente, estas 3 sentencias fracasan y generan un error,
         // pues se invoca a un método de un objeto inexistente
         $OBJETOS [1]->Visualiza_Objeto ();
         $OBJETOS [3]->Visualiza_Objeto ();
         $OBJETOS [5]->Visualiza_Objeto ();         
         print "<br />";
         
         
         
         // OJO: Cuando acaba el programa, se destruyen los objetos
         // que quedasen vivos.
         
         
        
        ?>
    </body>
</html>
