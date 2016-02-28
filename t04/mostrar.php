<?php        
    // Recuperamos la información de la sesión
    session_start();
    
    if (isset($_POST['borrar'])){        
        //cerramos sesion
        session_unset();        
        $error = "Información de la sesión eliminada.";
        
    }
    else {
        $idioma = $_SESSION['idioma'];
        $p_pub = $_SESSION['p_pub'];
        $z_hor = $_SESSION['z_hor'];          
    }

?>    
        
<!DOCTYPE html>
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tarea 4 - Juan Antonio Forte García -->
<!-- mostrar.php -->
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Tarea 4 - DWES - jafg</title>
  <link href="tarea.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id='mostrar'>
    <form  action='mostrar.php' method='post'>
    <fieldset>
        <legend>Preferencias</legend>
        <div><span class='mensaje'><?php echo $error; ?></span></div>
        <div class='campo'>             
            <label class='etiqueta' >Idioma:</label><br/>
            <label class='texto' ><?php echo $idioma; ?></label><br/>            
            <br/>
            
            <label class='etiqueta' >Perfil público:</label><br/>
            <label class='texto' ><?php echo $p_pub; ?></label><br/>
            <br/>
            
            <label class='etiqueta' >Zona horaria:</label><br/>
            <label class='texto' ><?php echo $z_hor; ?></label><br/>                       
            <br/>
        </div>
        
        <div class='campo'>            
            <input type='submit' name='borrar' value='Borrar Preferencias' /><br/>

            <!-- Retornamos a la pag. de origen -->
            <a href='preferencias.php'>Establecer preferencias</a>
        </div>
    </fieldset>
    </form>
    </div><br/><br/>
    

</body>
</html>

