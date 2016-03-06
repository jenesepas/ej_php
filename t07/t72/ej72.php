<?php
/**
 * Desarrollo Web en Entorno Servidor
 <!-- Tarea7: PHP y Xajax. -->
 */

// Incluimos la lilbrería Xajax
require_once("xajax_core/xajax.inc.php");

// Creamos las funciones de validación, que van a ser llamadas
//  desde JavaScript

function validarNombre($nombre){
    return ereg('^[a-zA-Z]+$',$nombre);
}

function validarPassword($pass) {
	 if(strlen($pass) < 7) return false;
	 else {
	 	return ereg('[0-9]+',$pass);
	 }	
  
    
}

function validarEmail($email){
    return ereg('^[a-zA-Z0-9]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$', $email);
}



function validarFormulario($valores) {
    $respuesta = new xajaxResponse();
    $error = false;

    if (!validarNombre($valores['nombre'])) {
        $respuesta->assign("errorNombre", "innerHTML", "El nombre debe tener sólo texto.");
        $error = true;
    }
    else $respuesta->clear("errorNombre", "innerHTML");
    
    if (!validarPassword($valores['password'])) {
        $respuesta->assign("errorPassword", "innerHTML", "La contraseña debe ser mayor de 6 caracteres y alguno numérico.");
        $error = true;
    }
    else $respuesta->clear("errorPassword", "innerHTML");

    if (!validarEmail($valores['email'])) {
        $respuesta->assign("errorEmail", "innerHTML", "La dirección de email no es válida.");
        $error = true;
    }
    else $respuesta->clear("errorEmail", "innerHTML");

    if (!$error) $respuesta->alert("Todo correcto.");

    $respuesta->assign("enviar","value","Enviar");
    $respuesta->assign("enviar","disabled",false);

    return $respuesta;    
}

// Creamos el objeto xajax
$xajax = new xajax();

// Registramos la función que vamos a llamar desde JavaScript
$xajax->register(XAJAX_FUNCTION,"validarFormulario");
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
  <title>DWES Tarea 72: Validación formulario con Xajax</title>
  <link rel="stylesheet" href="estilos.css" type="text/css" />
  <?php
  // Le indicamos a Xajax que incluya el código JavaScript necesario
  $xajax->printJavascript(); 
  ?>
  <script type="text/javascript" src="validar.js"></script>
</head>

<body>
    <div id='form'>
    <!-- Cuando se vaya a enviar el formulario ejecutamos
           una función en JavaScript, que realiza la llamada a PHP -->
    <form id='datos' action="javascript:void(null);" onsubmit="enviarFormulario();">
    <fieldset >
        <legend>Introducción de datos</legend>
        <div class='campo'>
            <label for='nombre' >Nombre:</label><br />
            <input type='text' name='nombre' id='nombre' maxlength="50" /><br />
            <span id="errorNombre" class="error" for="nombre"></span>
        </div>
        <div class='campo'>
            <label for='password' >Contraseña:</label><br />
            <input type='password' name='password' id='password' maxlength="50" />
            <span id="errorPassword" class="error" for="password"></span>
        </div>
        
        <div class='campo'>
            <label for='email' >Email:</label><br />
            <input type='text' name='email' id='email' maxlength="50" />
            <span id="errorEmail" class="error" for="email"></span>
        </div>

        <div class='campo'>
            <input type='submit' id='enviar' name='enviar' value='Enviar' />
        </div>
    </fieldset>
    </form>
    </div>
</body>
</html>