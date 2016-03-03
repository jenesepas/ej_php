<?php

/**
    * Clase Discos
    * 
    * Desarollo WEB en Entorno Servidor
    * UT6. Servicios WEB
    * Tarea 06.2: Servicio WEB con WSDL
    * Juan A. Forte Garcia
    *
   */
   
class Discos {
   
   /**
    * Saca el nombre de un musico.
    * 
    * @param integer $cod_musico
    * @return string $nombre_musico
    * 
   */  
	public function Dame_Nombre_Musico($cod_musico){ 
	
		
		return $nombre_musico=$this->consulta_Musico($cod_musico); 
	
	}
	
	/**
    * Saca el grupo del pais y con fecha_fundacion posterior a la dada.
    * 
    * @param string $pais
    * @param string $fecha
    * @return string $cadena
    * 
   */ 
	public function Dame_Grupo_Viejo($pais,$fecha){ 
	
		
		return $cadena=$this->consulta_Grupo($pais, $fecha); 
	
	}
	
	
	private function consulta_Musico($cod_musico) {
				
		// Nos conectamos a la base de datos ut6 del usuario ut6:  
     $pdo = new PDO ('mysql:host=localhost; dbname=ut6', 'ut6', 'ut6');
     
     // Hacemos la consulta:(Cuidado con las tablas en MAYUSCULAS)
     $fila = $pdo->query ("select nombre_musico from MUSICOS where cod_musico =".$cod_musico);
        
       
     // Depositamos el resultado en la fila $resultado:
     $resultado = $fila->fetch ();
     
     // Y extraemos los compornentes de esa fila que nos interesan:
     $nombre_musico = $resultado["nombre_musico"];
     	                 
     
     return $nombre_musico;
	}	
	
	private function consulta_Grupo($pais, $fecha) {
				
		// Nos conectamos a la base de datos ut6 del usuario ut6:  
     $pdo = new PDO ('mysql:host=localhost; dbname=ut6', 'ut6', 'ut6');
     
     // Hacemos la consulta:     
     $fila = $pdo->query ("select nombre_grupo, fecha_fundacion from GRUPOS where pais ='".$pais.
     								"' and fecha_fundacion >'".$fecha."' order by fecha_fundacion");     
     // Depositamos el resultado en la fila $resultado:
     $resultado = $fila->fetch ();
     
     // Y extraemos los compornentes de esa fila que nos interesan:
     $cadena = "El grupo ".$resultado["nombre_grupo"]." fue fundado en ".$resultado["fecha_fundacion"];	
     		                 
     
     return $cadena;
	}	
	
}
?>