<?php

require_once('discos.php');

$discos = new Discos();

print("El nombre es ".$discos->Dame_Nombre_Musico(30));

print("El grupo es ".$discos->Dame_Grupo_Viejo("Reino Unido","1970-01-01"));

?>