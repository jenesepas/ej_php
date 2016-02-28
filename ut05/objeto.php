<?php

class Nombre {
   public $nombre = "Luis Miguel";
   public function getNombre() {
      return $this->nombre;
   }
}





$luis = new Nombre;
echo $luis->getNombre();
echo "<br />";
echo 'La variable $luis es un objeto del tipo: ' . get_class($luis);
?>