<?php
require_once('Estrella.php');
require_once('Civilizacion.php');
require_once('Civilizacion_Inteligente.php');
require_once('Civilizacion_Tecnologica.php');

    //abrimos o restauramos sesión
    session_start();

    $error="";
  
    $Civilizaciones_tec = array ();
    $Civilizaciones_tec = $_SESSION['Civilizaciones_tec'];  

    // Comprobamos si ya se ha enviado el formulario   
    if (!isset($Civilizaciones_tec))         
      $error = "Error: No existen Civilizaciones Tecnol&oacutegicas.";
    else {
      if (!isset($_POST['elegir'])) 
        $error = "Elija una Civilizaci&oacuten Tecnol&oacutegica y pulse un bot&oacuten.";
      else {
        if (isset($_POST['avanzar'])){
          //avanzamos etapa de la civ_tec elegida
          $Civilizaciones_tec[$_POST['elegir']]->Avanzar_Etapa();
        }
        //restar
        else {
           if (empty($_POST['puntos'])) 
              $error = "Introduzca puntos a restar.";
           else  {//restamos puntos de la civ_tec elegida
            $Civilizaciones_tec[$_POST['elegir']]->Restar_Puntos($_POST['puntos']); 

            if ($Civilizaciones_tec[$_POST['elegir']]->getPuntos_Restantes() <= 0){
              //borramos el objeto
              unset($Civilizaciones_tec[$_POST['elegir']]);
              $error = "Una Civilizaci&oacuten Tecnol&oacutegica ha sido borrada.";
            }  
          }  
        }
        //guardamos el array modificado.
        $_SESSION['Civilizaciones_tec']=$Civilizaciones_tec; 

      }

    }

?> 


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Listado Civilizaciones Tecnologicas</title>
</head>
<body>
    <fieldset style="width: 600px">  
        <legend>Listado Civilizaciones Tecnol&oacutegicas:</legend>          
        <div class='listado'>              
            <form action='<?php echo $_SERVER['PHP_SELF'];?>' method='post'>
              <?php   
                //for ($i=0; $i < count($Civilizaciones_tec); $i++){  
                foreach ($Civilizaciones_tec as $i => $val){
                  if (isset($i)){                
                    echo "<input type='radio' name='elegir' value='".$i."'/>";                 
                    echo " Nombre: ".$Civilizaciones_tec[$i]->getEstrella_Natal()->getNombre()."; Etapa_Alcanzada: ".$Civilizaciones_tec[$i]->getEtapa_Alcanzada()."; Puntos: ".$Civilizaciones_tec[$i]->getPuntos_Restantes()." <br/>";                                  
                  }                  
                }
              ?> 
              <br/>
              <!--doble sumit para 1 mismo form-->
              <input type='submit' name='avanzar' value='Avanzar Etapa' /><br/>
              <label for="nombre">Puntos a restar:</label>
              <input type="number" name="puntos" value="0" />
              <input type='submit' name='restar' value='Restar' /><br/>
            </form>            
            <form action='index.php' method='post'>
                <input type='submit' name='volver' value='Volver' /><br/>
            </form>  
            <?php echo $error ."<br/>";?>         
        </div>         
    </fieldset>
    

</body>
</html>