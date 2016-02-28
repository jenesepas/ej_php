<?php
require_once('Estrella.php');
require_once('Civilizacion.php');
require_once('Civilizacion_Inteligente.php');
require_once('Civilizacion_Tecnologica.php');

    //abrimos o restauramos sesión
    session_start();
   
    $error="";
    $Estrellas = array ();
    // Vamos a declarar un array de objetos (Estrellas):              
    if (isset($_SESSION['estrellas'])) {      
      $Estrellas = $_SESSION['estrellas'];
    }  
    else $error="Debe dar de alta las estrellas antes que las civilizaciones.";
    

    // Comprobamos si ya se ha enviado el formulario   
    if (isset($_POST['crear'])) {

        //array con los datos necesarios para construir un objeto civilizacion tecnologica
        $row =array();   
        if (!empty($_POST['estrella'])){
          $row['Estrella_Natal'] = $_SESSION['estrellas'][$_POST['estrella'] - 1];   
        }        
        $row['Eon_Aparicion'] = $_POST['eon_aparicion'];
        $row['Poblacion'] = $_POST['poblacion'];
        $row['Planeta_Habitado'] = $_POST['planeta_habitado'];
        $row['Forma_Comunicacion'] = $_POST['forma_comunicacion'];
        $row['Organizacion'] = $_POST['organizacion'];
        $row['Etapa_Alcanzada'] = $_POST['etapa_alcanzada'];
        $row['Puntos_Restantes'] = $_POST['puntos_restantes'];
        $row['Eon_Ultima_Etapa_Alcanzada'] = $_POST['eon_ultima'];

        if (empty($_POST['estrella']) || empty($row['Eon_Aparicion']) || empty($row['Poblacion']) || empty($row['Planeta_Habitado']) 
          || empty($row['Forma_Comunicacion']) || empty($row['Organizacion']) || empty($row['Etapa_Alcanzada']) 
          || empty($row['Puntos_Restantes']) || empty($row['Eon_Ultima_Etapa_Alcanzada'])) 
            $error = "Hay alg&uacuten campo vacio.";
        else {                                  

              $Civilizaciones_tec = array ();
              // // Recuperamos los objetos guardados              
              if (isset($_SESSION['Civilizaciones_tec'])) { 
                $Civilizaciones_tec = $_SESSION['Civilizaciones_tec'];   
              }    
              // Y los creamos 
              //$Civilizaciones_tec[] = new Civilizacion_Tecnologica($estrella, $eon_aparicion,$poblacion,$planeta_habitado,
              //                        $forma_comunicacion,$organizacion,$etapa_alcanzada,$puntos_restantes,$eon_ultima);                 
              $Civilizaciones_tec[] = new Civilizacion_Tecnologica($row);
              //guardamos el array modificado.
              $_SESSION['Civilizaciones_tec']=$Civilizaciones_tec; 

              $error = "Civilizaci&oacuten Tec. ".$Civilizaciones_tec[count($Civilizaciones_tec) -1]->getEstrella_Natal()->getNombre()." creada."; 
              
        }      
    }
?> 


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Crear Civilizacion Tecnologica</title>
</head>
<body>

 
    <fieldset style="width: 300px">  
        <legend>Crear Civilizaci&oacuten Tecnol&oacutegica:</legend>          
        <div class='formulario'>            
            <form action='Crear_Civilizacion_Tecnologica.php' method='post'>
              <label>Estrella Natal:</label><br/>
              <select name="estrella">
                <option value="0" selected="selected">Seleccione Estrella</option>
                <?php
                if (isset($Estrellas))
                  for ($i=0; $i < count($Estrellas); $i++){   
                    $valor=$i + 1;               
                    echo "<option value='".$valor."'>".$Estrellas[$i]->getEon_Formacion() ." - ".$Estrellas[$i]->getNombre()." </option>";                                      
                  }                
                ?>
              </select>               
              <br/> 
              <label>E&oacuten Aparici&oacuten:</label><br/>
              <input type='text' name='eon_aparicion'>  
              <br/>          
              <label>Poblaci&oacuten:</label><br/>
              <input type='text' name='poblacion'>  
              <br/>
              <label>Planeta Habitado:</label><br/>
              <input type='text' name='planeta_habitado'>  
              <br/>
              <label>Forma de Comunicaci&oacuten:</label><br/>
              <select name="forma_comunicacion">
                <option value="0" selected="selected">Seleccione Forma</option>
                <option value="Sonido">Sonido</option>
                <option value="Signos">Signos</option>
                <option value="Colores">Colores</option>
              </select>  
              <br/>
              <label>Organizaci&oacuten:</label><br/>
              <select name="organizacion">
                <option value="0" selected="selected">Seleccione Organizaci&oacuten</option>
                <option value="Nomadas">N&oacutemadas</option>
                <option value="Sedentarios">Sedentarios</option>               
              </select>  
              <br/>
              <label>Etapa Alcanzada:</label><br/>
              <select name="etapa_alcanzada">
                <option value="0" selected="selected">Seleccione Etapa</option>
                <option value="C1">C1</option>
                <option value="C2">C2</option>               
                <option value="C3">C3</option>
                <option value="C4">C4</option>
                <option value="C5">C5</option>
              </select>
              <br/>
              <label>Puntos Restantes:</label><br/>
              <input type='text' name='puntos_restantes'>  
              <br/>
              <label>E&oacuten &Uacuteltima Etapa Alcanzada:</label><br/>
              <input type='text' name='eon_ultima'>  
              <br/><br/>
              <input type='submit' name='crear' value='Crear Objeto' />
            </form>
            <br/>
            <form action='index.php' method='post'>
                <input type='submit' name='volver' value='Volver' /><br/>
            </form>  
            <br/>
            <?php echo $error ."<br/>";?>         
        </div>         
    </fieldset>
    

</body>
</html>