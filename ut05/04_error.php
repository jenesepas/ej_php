<?php
class Nombre {
   protected $nombre;
   public function getNombre() {
      return $this->nombre;
   }
   public function setNombre($nombre) {
      $this->nombre = $nombre;
   }
   public function NombreDefecto() {
      return "Luis Miguel<br>";
   }
}
$luis = new Nombre;
echo $luis->NombreDefecto();
//También se puede acceder al nombre por defecto 
echo Nombre::getNombre();
?>
