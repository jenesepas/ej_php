<?php
require_once('Estrella.php');

class Civilizacion {
    protected $Estrella_Natal;
    protected $Eon_Aparicion;
    protected $Poblacion;
    protected $Planeta_Habitado;

    public function getEstrella_Natal() {return $this->Estrella_Natal; }
    public function getEon_Aparicion() {return $this->Eon_Aparicion; }
    public function getPoblacion() {return $this->Poblacion; }
    public function getPlaneta_Habitado() {return $this->Planeta_Habitado; }        
    
    public function __construct($row) {
        $this->Estrella_Natal = new Estrella($row['Estrella_Natal']->getEon_Formacion(), $row['Estrella_Natal']->getNombre());
        $this->Eon_Aparicion = $row['Eon_Aparicion'];
        $this->Poblacion = $row['Poblacion'];;        
        $this->Planeta_Habitado = $row['Planeta_Habitado'];
    }
}
?>