<?php
    //abrimos o restauramos sesión
    session_start();
    
    // Comprobamos si ya se ha enviado el formulario   
    if (isset($_POST['enviar'])) {
        $idioma = $_POST['idioma'];
        $p_pub = $_POST['p_pub'];
        $z_hor = $_POST['z_hor'];                      
    }


?>    
        
<!DOCTYPE html>
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tarea 4 - Juan Antonio Forte García -->
<!-- preferencias.php -->
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Tarea 4 - DWES - jafg</title>
  <link href="tarea.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id='preferencias'>    
    <form action='preferencias.php' method='post'>
    <fieldset>
        <legend>Preferencias</legend>       
        <div class='campo'>             
            <label class='etiqueta' >Idioma:</label><br/>
            
            <select name="idioma">               
              <option label="español" value="español"
                  <?php if($idioma == "español")echo "SELECTED"; ?>></option>
              <option label="inglés" value="ingles" 
                  <?php if($idioma == "ingles")echo "SELECTED"; ?>></option>  
            </select><br/><br/>
            
            <label class='etiqueta' >Perfil público:</label><br/>
            <select name="p_pub">
              <option label="sí" value="si"
                      <?php if($p_pub == "si")echo "SELECTED"; ?>></option>
              <option label="no" value="no" 
                      <?php if($p_pub == "no")echo "SELECTED"; ?>></option>  
            </select><br/><br/>
            
            <label class='etiqueta' >Zona horaria:</label><br/>
            <select name="z_hor">
              <option label="GMT-2" value="GMT-2"
                      <?php if($z_hor == "GMT-2")echo "SELECTED"; ?>></option>
              <option label="GMT-1" value="GMT-1"
                      <?php if($z_hor == "GMT-1")echo "SELECTED"; ?>></option>  
              <option label="GMT" value="GMT"
                      <?php if($z_hor == "GMT")echo "SELECTED"; ?>></option>  
              <option label="GMT+1" value="GMT+1"
                      <?php if($z_hor == "GMT+1")echo "SELECTED"; ?>></option>
              <option label="GMT+2" value="GMT+2"
                      <?php if($z_hor == "GMT+2")echo "SELECTED"; ?>></option>      
            </select><br/><br/>
            
        </div>
        
        <div class='campo'>            
            <input type='submit' name='enviar' value='Establecer Preferencias' /><br/>

            <!--pasamos valores a vbles de sesión para tenerlas en la pag. enlazada. -->
            <?php $_SESSION['idioma']=$idioma; $_SESSION['p_pub']=$p_pub; $_SESSION['z_hor']=$z_hor;?>
            <a href='mostrar.php'>Mostrar preferencias</a>           
             
        </div>
    </fieldset>
    </form>
    </div><br/><br/>
    

</body>
</html>
