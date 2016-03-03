<?php
require_once('Civilizacion.php');

class Civilizacion_Inteligente extends Civilizacion {
    protected $Forma_Comunicacion;
    protected $Organizacion;
    
    public function getForma_Comunicacion() {return $this->Forma_Comunicacion; }
    public function getOrganizacion() {return $this->Organizacion; }
    
    public function __construct($row) {
    	parent::__construct($row);
        $this->Forma_Comunicacion = $row['Forma_Comunicacion'];
        $this->Organizacion = $row['Organizacion'];    
    }
}
?>