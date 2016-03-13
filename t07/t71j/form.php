<?php
/**
 * Desarrollo Web en Entorno Servidor
 * Tema 7 : Aplicaciones web dinámicas: PHP y Javascript
 * Ejemplo Validación formulario con Xajax: form.php
 */

// Incluimos la lilbrería Xajax
require_once("xajax_core/xajax.inc.php");

// Creamos la función que va a ser llamada desde JavaScript

function ayudaNombre($nombre) {
    $equiposNBA = array("Bucks", "Bulls", "Celtics", "Cavaliers", "Clippers", "Grizzlies", "Hawks", "Heat", "Hornets",
                        "Jazz", "Kings", "Knicks", "Lakers", "Magic", "Mavericks", "Nets", "Nuggets", "Pacers", "Pelicans", "Pistons", 
                        "Raptors", "Rockets", "Sixers", "Spurs", "Suns", "Thunder", "Timberwolves", "Trail Brazers", "Wizards", "Warriors");
    $respuesta = new xajaxResponse();
    
    // Recorremos el array
    $nombreActual = strtolower($nombre);
    $ayuda = "";
    foreach($equiposNBA as $equipo){
        if (strpos(strtolower($equipo), $nombreActual) === 0){
            $ayuda .= $equipo."<br/>";
        }
    }

    $respuesta->assign("ayudaNombre", "innerHTML", $ayuda);
        
    return $respuesta;    
}

// Creamos el objeto xajax
$xajax = new xajax();

// Registramos la función que vamos a llamar desde JavaScript
$xajax->register(XAJAX_FUNCTION,"ayudaNombre");
// Y configuramos la ruta en que se encuentra la carpeta xajax_js
$xajax->configure('javascript URI','./');

// El método processRequest procesa las peticiones que llegan a la página
// Debe ser llamado antes del código HTML
$xajax->processRequest();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Ejemplo Tema 7: Ayuda dinámica con Xajax</title>
  <link rel="stylesheet" href="estilos.css" type="text/css" />
  <?php
  // Le indicamos a Xajax que incluya el código JavaScript necesario
  $xajax->printJavascript(); 
  ?>
  <script type="text/javascript" src="validar.js"></script>
</head>

<body>
    <div id='form'>
    <!-- Cada vez que el campo cambie se actualiza la ayuda que aparece debajo -->
    <form id='datos' action="javascript:void(null);">  
    <fieldset >
        <legend>Introducción de datos</legend>
        <div class='campo'>
            <label for='nombre' >Equipo NBA:</label><br />
            <input type='text' name='nombre' id='nombre' maxlength="50" onkeyup="actualizarLista();" /><br />
            <span id="ayudaNombre" class="ayuda" for="nombre"></span>
        </div>        
    </fieldset>
    </form> 
    </div>
</body>
</html>
