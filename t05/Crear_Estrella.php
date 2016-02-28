<?php
require_once('Estrella.php');

    //abrimos o restauramos sesión
    session_start();

    $error="";

    // Comprobamos si ya se ha enviado el formulario   
    if (isset($_POST['crear'])) {
        $eon = $_POST['eon_formacion'];
        $nombre = $_POST['nombre'];

        if (empty($eon) || empty($nombre)) 
            $error = "Debes introducir Eon Formacion y Nombre";
        else {      
              
              // Vamos a declarar un array de objetos (Estrellas):              
              $Estrellas = array ();
              // Recuperamos los objetos guardados              
              if (isset($_SESSION['estrellas'])) { 
                $Estrellas = $_SESSION['estrellas'];
              }
              // Y los creamos 
              $Estrellas[] = new Estrella($eon, $nombre);                 

              //guardamos el array modificado.
              $_SESSION['estrellas']=$Estrellas; 

              $error = "Estrella ".$Estrellas[count($Estrellas) -1]->getEon_Formacion() ." - ".
                        $Estrellas[count($Estrellas) -1]->getNombre()." creada."; 
              /*
              for ($i=0; $i < count($Estrellas); $i++){                  
                echo $i."/".count($Estrellas)."-> ".$Estrellas[$i]->getEon_Formacion() ." - ".$Estrellas[$i]->getNombre()." <br/>";
              }*/
        }      
    }
?> 


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Crear Estrella</title>
</head>
<body>

 
    <fieldset style="width: 230px">  
        <legend>Crear Estrella:</legend>          
        <div class='formulario'>            
            <form action='Crear_Estrella.php' method='post'>
              <label>E&oacuten Formaci&oacuten:</label><br/>
              <input type='text' name='eon_formacion'>  
              <br/><br/>          
              <label>Nombre:</label><br/>
              <input type='text' name='nombre'>  
              <br/><br/>
              <input type='submit' name='crear' value='Crear Objeto' />
            </form>
            <br/>
            <form action='index.php' method='post'>
                <input type='submit' name='volver' value='Volver' /><br/>
            </form>  
            <br/><br/>
            <?php echo $error ."<br/>";?>         
        </div>         
    </fieldset>
    

</body>
</html>