<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title>Atributos que son objetos</title>
</head>
<body>
<?php


// Definimos la clase Humanoide
class Humanoide 
 {
  private  $energia;// Su unico atributo es privado
  
  
  // Funcion que construye un Humanoide.
  public function __construct($ener)
  { 
    $this->energia=$ener;
  }
   
  // Funcion que visualiza su único atributo (es privado)
  public function Mostrar_Humanoide ()
  {
     echo $this->energia. '<br />';
  }
  
  
  // Funcion que permite cambiar el atributo privado de un humanoide despues de ser creado: 
  public function Cambiar_Atributo_Privado_Humanoide ($ener)
  {  
    $this->energia=$ener;
  }
} // Fin clase Humanoide








// Definimos la clase Dron, que tiene como uno de sus atributos un objeto 
// de la clase Humanoide. Además, tiene otros atibutos.
class Dron {
  private $humanoide; // Objeto de clase Humanoide
  private $nombre; // Variable vulgar
  private $material; // Variable vulgar
  private $version; // Variable vulgar
  
    
  
  // Construimos el objeto de clase Dron:
  public function __construct($nom, $mat, $vers, $ener)
  { // El atributo humanoide hay que crearlo, como todos los objetos en OO
    $this->humanoide = new Humanoide($ener);
    $this->nombre    = $nom;
    $this->material  = $mat;
    $this->version   = $vers;   
  }
  
     
  
  // Funcion que permite cambiar el "color" de un dron despues de ser creado:
  public function Cambiar_Color_Dron ($nuevo_col)
  {
    $this->color->$nuevo_col; // Se necesita esta función, pues "$color" es privado
  }
  
  
  
  // Funcion que permite cambiar los atributos de un dron despues de ser creado:
  public function Cambiar_Atributos_Dron ($nom, $mat, $vers, $ener)
  {
    $this->humanoide->Cambiar_Atributo_Privado_Humanoide ($ener);
    $this->nombre    = $nom;
    $this->material  = $mat;
    $this->version   = $vers;
  }
  
  
  // Funcion que permite mostrar algunos atributos del dron:
   public function Mostrar_Dron ()
  {      
    echo $this->nombre."  ";
    echo $this->material."  ";
    echo $this->version."  ";
    $this->humanoide-> Mostrar_Humanoide ();
  }

}



// Creamos 2 Drones:
$DRON_1 = new Dron ('T600','Acero', '1.00', 'Bateria Uranio');
$DRON_2 = new Dron ('T800','Grafeno', '1.01', 'Bateria Hidrogeno');

// Los visualizamos:
$DRON_1 -> Mostrar_Dron (); 
$DRON_2 -> Mostrar_Dron ();

echo '<br />';


// Cambiamos atributos al DRON_1:
$DRON_1 -> Cambiar_Atributos_Dron ('T600b','Acero acorazado', '1.01', 'Bateria Uranio-Mercurio');

// Y lo volvemos a visualizar
$DRON_1 -> Mostrar_Dron (); 


?>
</body>
</html>