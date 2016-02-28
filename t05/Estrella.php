<?php
class Estrella {
    protected $Eon_Formacion;
    protected $Nombre;
    
    public function getEon_Formacion() {return $this->Eon_Formacion; }
    public function getNombre() {return $this->Nombre; }
            
    
    public function __construct($eon, $nom) {
        $this->Eon_Formacion = $eon;
        $this->Nombre = $nom;        
    }
}
?>
