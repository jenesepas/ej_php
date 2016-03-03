<?php

    //abrimos o restauramos sesión
    session_start();
    $error="";
    
?> 


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>DWES05_Menu Inicial</title>
</head>
<body>
    <fieldset style="width: 200px">  
        <legend>DWES05_Menu Inicial:</legend>          
        <div align="center" class='formulario'> 
            <br/>           
            <form action='Crear_Estrella.php' method='post'>                    
              <input type='submit' name='crear_e' value='Crear Estrella' />
            </form>
            <br/><br/>
            <form action='Crear_Civilizacion_Tecnologica.php' method='post'>
                <input type='submit' name='crear_c' value='Crear Civ. Tec.' /><br/>
            </form>  
            <br/><br/>
            <form action='Listar_Civilizacion_Tecnologica.php' method='post'>
                <input type='submit' name='listar_c' value='Listar Civ. Tec.' /><br/>
            </form>  
            <br/><br/>
            <?php echo $error ."<br/>";?>         
        </div>         
    </fieldset>
    

</body>
</html>