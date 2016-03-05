<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tarea7: PHP, Javascript y Ajax. -->
<?php require_once("validar1.php"); ?> 
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>DWES Tarea 7.1 - Juan Antonio Forte García</title>  
</head>

<body>
    <div>    
    <fieldset >
        <legend>Equipos de Baloncesto en la NBA:</legend>
        <div>
            <label for='nombre' >Nombre:</label>
            <input type='text' name='nombre' id='nombre' maxlength="50" value="" />
            <br />            
				<span id='equipos'>Debe tener más de 3 caracteres.</span>	       
        </div>               
    </fieldset>
  
    </div>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="validar1.js"></script> 
</body>
</html>