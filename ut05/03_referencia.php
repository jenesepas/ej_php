<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">
<head>
<title>Alcance de las variables</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
class Nombre {
   public $nombre;
   function setNombre($nombre) {
      $this->nombre = $nombre;	
   }
   function getNombre() {
      return $this->nombre;
   }
}
function cambiaNombre($objeto,$nombre) {
   $objeto->setNombre($nombre);
}
$luis = new Nombre;
$luis->setNombre("Luis Miguel");
echo "El nombre del objeto es " . $luis->getNombre() . "<br>";
cambiaNombre($luis,"Pedro");
echo "El nombre del objeto es " . $luis->getNombre() . "<br>";
?>
</body>
</html>
