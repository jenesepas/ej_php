<!DOCTYPE html>

<html>
<head>
<title>DWES Examen2- Juan Antonio Forte García</title>
</head>
<body>
<?php


// ************* Definimos la clase Jugador
class Jugador 
 {
  protected	$Nombre;
  protected	$Estatura;
  
  
//Funcion que construye un Jugador.
  public function __construct($p_nombre,$p_estatura)
  { 
    $this->Nombre=$p_nombre;
    $this->Estatura=$p_estatura;
  }
   
  // Funcion que visualiza el nombre
  public function Dame_Nombre() {return $this->Nombre; } 
  
  // Funcion que visualiza la estatura
  public function Dame_Estatura() {return $this->Estatura; }   
  
} // Fin clase Jugador



//************* Definimos la clase Base
class Base extends Jugador {
   private $Asistencias;
     
  
  // Construimos el objeto de clase Base:
  public function __construct($p_nombre,$p_estatura,$p_asistencias)
  { 
    parent::__construct($p_nombre,$p_estatura);
    $this->Asistencias = $p_asistencias;
      
  }
  // Funcion que visualiza las asistencias
  public function Dame_Asistencias() {return $this->Asistencias; }   

}//fin clase Base



//*************** Definimos la clase Alero
class Alero extends Jugador {
   private $Puntos;
     
  
  // Construimos el objeto de clase Base:
  public function __construct($p_nombre,$p_estatura,$p_puntos)
  { 
    parent::__construct($p_nombre,$p_estatura);
    $this->Puntos = $p_puntos;
      
  }
  // Funcion que visualiza las asistencias
  public function Dame_Puntos() {return $this->Puntos; }   

}//fin clase Alero


//*************** Definimos la clase Pivot
class Pivot extends Jugador {
   private $Rebotes;
     
  
  // Construimos el objeto de clase Base:
  public function __construct($p_nombre,$p_estatura,$p_rebotes)
  { 
    parent::__construct($p_nombre,$p_estatura);
    $this->Rebotes = $p_rebotes;
      
  }
  // Funcion que visualiza las asistencias
  public function Dame_Rebotes() {return $this->Rebotes; }   

}//fin clase Pivot


//************** Definimos la clase Equipo
class Equipo
 {
  private	$Nombre_equipo;
  private	$Integrantes = array(5);
  
//Funcion que construye un Equipo.
  public function __construct($p_nombre_eq,$p_j1,$p_j2,$p_j3,$p_j4,$p_j5)
  { 
    $this->Nombre_equipo = $p_nombre_eq;
 
 
	 if (get_class($p_j1) != 'Jugador')    
    	$this->Integrantes[1] = $p_j1;	
    
  	
    if (get_class($p_j2) != 'Jugador')    
    	$this->Integrantes[2] = $p_j2;	
    
    if (get_class($p_j3) != 'Jugador')    
    	$this->Integrantes[3] = $p_j3;	
    
    if (get_class($p_j4) != 'Jugador')    
    	$this->Integrantes[4] = $p_j4;	
    
    if (get_class($p_j5) != 'Jugador')    
    	$this->Integrantes[5] = $p_j5;				
    
    //visializa nombre e integrantes
    echo '<br />Se ha creado un equipo: '.$this->Dame_Nombre_eq().'<br /><br />';
    
    //echo get_class($this->Integrantes[1]).': '.$this->Integrantes[1]->Dame_Nombre().'<br />';
    foreach ($this->Integrantes as $j => $val){						    		
    		if (isset($j) && $j>0){
				//echo $j.'<br />';    			
    			echo get_class($this->Integrantes[$j]).': '.$this->Integrantes[$j]->Dame_Nombre().'<br />';
    		}	
    } 		
    
  }
   
  // Funcion que visualiza el nombre eq.
  public function Dame_Nombre_eq() {return $this->Nombre_equipo; } 

 
  // Funcion que visualiza la estatura media
  public function Estatura_Media() {
  		$estatura_m=0;
  		
		foreach ($this->Integrantes as $j => $val){						    		
    		if (isset($j) && $j>0){
				//echo 'j'.$i.'<br />';    			
    			$estatura_m += $this->Integrantes[$j]->Dame_Estatura();
    		}	
    	}
    	
    	//echo '<br />esta: '.$estatura_m;  	
		if ($estatura_m > 0)
  			return ($estatura_m/5);
  		else return 0;	 
  	}  
  	
  	// Funcion que visualiza la estatura maxima
  public function Maxima_Estatura() {
  		$estatura_m=0;
  		
		foreach ($this->Integrantes as $j => $val){						    		
    		if (isset($j) && $j>0){
    			if ($this->Integrantes[$j]->Dame_Estatura() > $estatura_m)				   			
    				$estatura_m = $this->Integrantes[$j]->Dame_Estatura();
    		}	
    	}
    	    	
  		return $estatura_m;  			  		  		
  	}
  	
  // Funcion que visualiza puntos medios
  public function Puntos_Medios_Aleros() {
  		$puntos_m=0;
  		$n_aleros=0;
  		
		foreach ($this->Integrantes as $j => $val){						    		
    		if (isset($j) && $j>0 && get_class($this->Integrantes[$j]) == 'Alero'){
    				$puntos_m += $this->Integrantes[$j]->Dame_Puntos();		   			
    				$n_aleros++;
    		}	
    	}
    	    	
  		if ($puntos_m > 0 && $n_aleros > 0 )
  			return ($puntos_m/$n_aleros);
  		else return 0; 			  		  		
  	} 
  	 
  
} // Fin clase Equipo




//***** Definicion de objetos
/*
$jugador = new Jugador('Sabonis',221);

echo '<br />';
echo 'Jugador: '.$jugador->Dame_Nombre()." - ".$jugador->Dame_Estatura();
if (get_class($jugador) != 'Jugador')
	echo '<br /> no es un jugador';

$base = new Base('Corbalan',195,25);
echo '<br /><br />';
echo 'Base: '.$base->Dame_Nombre()." - ".$base->Dame_Estatura()." - ".$base->Dame_Asistencias();


$alero = new Alero('Epi',198,1025);
$alero2 = new Alero('Herreros',198,725);
$alero3 = new Alero('Villacampa',195,925);
echo '<br /><br />';
echo 'Alero: '.$alero->Dame_Nombre()." - ".$alero->Dame_Estatura()." - ".$alero->Dame_Puntos();

$pivot = new Pivot('Romay',213,504);
echo '<br /><br />';
echo 'Pivot: '.$pivot->Dame_Nombre()." - ".$pivot->Dame_Estatura()." - ".$pivot->Dame_Rebotes();
*/

$base = new Base('Corbalan',195,25);
$alero = new Alero('Epi',198,2000);
$alero2 = new Alero('Herreros',199,700);
$alero3 = new Alero('Villacampa',195,300);
$alero4 = new Alero('Sibilio',200,300);
$pivot = new Pivot('Romay',213,1504);
$pivot2 = new Pivot('Martin',206,1504);

$equipo = new Equipo ('Espa&ntilde;a',$base,$alero,$alero2,$alero3,$pivot);

echo '<br /><br />';
echo 'La estatura media es: '.$equipo->Estatura_Media();

echo '<br /><br />';
echo 'La maxima estatura es: '.$equipo->Maxima_Estatura();

echo '<br /><br />';
echo 'Los puntos medios de los aleros son: '.$equipo->Puntos_Medios_Aleros();

?>
</body>
</html>