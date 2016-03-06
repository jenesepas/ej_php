<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tarea7: PHP, Javascript y Ajax. -->
<?php

	$equipos = array("Bucks","Bulls","Celtics","Cavaliers","Clippers","Grizzlies","Hawks","Heat","Hornets",
							"Jazz", "Kings","Knicks","Lakers","Magic","Mavericks","Nets","Nuggets","Pacers","Pelicans",
							"Pistons","Raptors","Rockets","Sixers","Spurs","Suns","Thunder","Timberwolves","Trail Blazers",
							"Wizards","Warriors");
		

	// get the q parameter from URL
	$q = $_REQUEST["q"];
	
	$muestra = "";
	
	// lookup all hints from array if $q is different from "" 
	if ($q !== "") {
	    $q = strtolower($q);
	    $len=strlen($q);
	    foreach($equipos as $name) {
	        if (stristr($q, substr($name, 0, $len))) {
	            if ($muestra === "") {
	                $muestra = $name;
	            } else {
	                $muestra .= ", $name";
	            }
	        }
	    }
	}
	
	// Output "no suggestion" if no hint was found or output correct values 
	echo $muestra === "" ? "Sin sugerencias..." : $muestra;

?>