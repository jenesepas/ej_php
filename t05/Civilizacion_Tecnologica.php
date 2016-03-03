<?php
require_once('Civilizacion_Inteligente.php');

class Civilizacion_Tecnologica extends Civilizacion_Inteligente {
    protected $Etapa_Alcanzada;
    protected $Puntos_Restantes;
    protected $Eon_Ultima_Etapa_Alcanzada;
    
    public function getEtapa_Alcanzada() {return $this->Etapa_Alcanzada; }
    public function getPuntos_Restantes() {return $this->Puntos_Restantes; }
    public function getEon_Ultima_Etapa_Alcanzada() {return $this->Eon_Ultima_Etapa_Alcanzada; }

    public function __construct($row) {
        parent::__construct($row);
        $this->Etapa_Alcanzada = $row['Etapa_Alcanzada'];
        $this->Puntos_Restantes = $row['Puntos_Restantes'];    
        $this->Eon_Ultima_Etapa_Alcanzada = $row['Eon_Ultima_Etapa_Alcanzada'];
    }

/*
    public function __destruct ()
    {
        print("1 objeto destruido.");        
                     
    }
*/
    public function Avanzar_Etapa(){

        switch ($this->Etapa_Alcanzada) {
            case 'C1':
                $this->Etapa_Alcanzada = 'C2';
                $this->Puntos_Restantes = 1000000;
                break;
            case 'C2':
                $this->Etapa_Alcanzada = 'C3';
                break;
            case 'C3':
                $this->Etapa_Alcanzada = 'C4';
                break;
            case 'C4':
                $this->Etapa_Alcanzada = 'C5';
                break;        
            //no tiene etapa
            default:
                $this->Etapa_Alcanzada = 'C1';
                break;
        }
    }

    public function Restar_Puntos($cuantos){        
        $this->Puntos_Restantes = $this->Puntos_Restantes - $cuantos; 
        /*
        if ($this->Puntos_Restantes <= 0){
            unset($this);
        }*/
    }

}
?>