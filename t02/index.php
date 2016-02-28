
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "

http://www.w3.org/TR/html4/loose.dtd">

<!-- Desarrollo Web en Entorno Servidor -->

<!-- Tema 2 : Características del Lenguaje PHP -->

<!-- Tarea 2: Juan Antonio Forte García -->

<html>

<head>

     <meta http-equiv="content-type" content="text/html; charset=UTF-8">

     <title>Peligrosos 2</title>

</head>

<body>

<?php
    session_start();
    /*
    if (isset($_POST['reiniciar'])) {
    	$_SESSION = array(); //inicializamos vbles de sesion
    	$_POST['nombre']="";
	 	$_POST['masa']="";
	 	$_POST['velocidad']="";
	 	$_POST['mod']="";
    }	
    */
    $nombre =	$_POST['nombre'];	 
	 $masa = $_POST['masa'];
	 $velocidad = $_POST['velocidad'];
	 $mod = $_POST['mod'];	
	 
	 
    
    //si boton introducir pulsado
	 if (isset($_POST['introducir'])){ 
		//si campo nombre vacio               	
   	if ((empty($nombre) || $nombre==""))
        	$val_1=0;
      //si nombre con valor
      else       	
      	$val_1=1;
      	
      
      //campo masa en rango válido
      if (!empty($masa) && ($masa < 1 || $masa > 1000000000))  				
			$val_2=0;						
		else 
			$val_2=1;
		
		//campo velocidad en rango válido	
		if (!empty($velocidad) && ($velocidad < 1 || $velocidad > 100)) 			
			$val_3=0;									
		else 
			$val_3=1; 
			
		//campo distancia en rango válido	
		if (!empty($mod) && ($mod < 0.001 || $mod >1))
			$val_4=0;									
		else 
			$val_4=1; 	
				
	 }  
	 //si boton introducir no pulsado  	
	 else {		
		$val_1=0;		
		$val_2=0;
		$val_3=0;
		$val_4=0;
	 }	
					    
    
	//cumplen las restricciones para dar de alta un PHA	
    if (isset($_POST['introducir']) && $val_1==1 && $val_2==1 && $val_3==1 && $val_4==1) {
		 		 		 
		 
		 //elementos del array			 
		 $num_phas=count($_SESSION['phass']); 
		 //asignamos valor al index si no encontrado			 
		 $index=-1;	
		 
		 if ($num_phas >0) {			 	
			//buscamos nombre y clave	 	
		 	foreach ($_SESSION['phass'] as $key => $phas) {
        		if (in_array($nombre,$phas)) {	 
		 		  	//asignamos index si encontrado
		 		  	$index = $key; 
		 		  	break;
		 		}
		 	}
		 		 	
		 }
		 
		 //si encontrado
		 if ($index > -1) { 
		 	//si los demas campos no vacios, modificamos
		 	if (!empty($masa) && !empty($velocidad) && !empty($mod)){
		 		 
				 //comprobamos si new distancia es menor que la que habia, modificamos valores		 		 
		 		 if ($mod < $_SESSION['phass'][$index][3]) {
						$_SESSION['phass'][$index][1] = $masa;
	       			$_SESSION['phass'][$index][2] = $velocidad;
	       			$_SESSION['phass'][$index][3] = $mod;			
	       		
	       			print "El PHA ".$nombre." se ha vuelto más peligroso."."<br /><br />"; 		 
		 		 }
		 		 else print "El PHA ".$nombre." ya existe."."<br /><br />";
		 	}
		 	//si los demas campos vacios, borramos
		 	elseif(empty($masa) && empty($velocidad) && empty($mod)) {
		 		//borramos index
		 		unset($_SESSION['phass'][$index]);	
				//ordenamos array		 		
		 		$_SESSION['phass'] = array_values($_SESSION['phass']);
		 		
		 		print "El PHA ".$nombre." ha sido borrado."."<br /><br />";
		 	}
    	 }
    	 //no existe el nombre de PHA
    	 else {
    	 	 //alta de phas si campos no vacios	  
    	 	 if (!empty($masa) && !empty($velocidad) && !empty($mod)) { 	 	    	 
		       $_SESSION['phass'][$num_phas][0] = $nombre;
		       $_SESSION['phass'][$num_phas][1] = $masa;
		       $_SESSION['phass'][$num_phas][2] = $velocidad;
		       $_SESSION['phass'][$num_phas][3] = $mod; 
		       
		       print "El PHA ".$nombre." ha sido introducido."."<br /><br />";
	       }
	       else print "El PHA ".$nombre." contiene campos vacios."."<br /><br />";
       }                       
       
	 }
	 
	 //pintamos lista de PHAs 
	 if (isset($_SESSION['phass'])){
    	 $num_phas=count($_SESSION['phass']);    	 
		 
		 //pinta si hay datos en el array     
		 if ($num_phas >0){				 			 
			 print "Listado de PHAs:"."<br />";
			      
	       foreach ($_SESSION['phass'] as $phas) {
	       	foreach ($phas as $index => $pha) {	       		
					if ($index == 0)					
						print "Nombre: ".$pha;
					if ($index == 3)
					 	print " - MOD: ".$pha."<br />"; 
				}	
	       }
	    }  
	 }     
	 else print "La lista de PHAs está vacia."
	  
               
?>
		<br /><br />
     <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

          Nombre PHA: 

          <input type="text" name="nombre" value="<?php echo $_POST['nombre'];?>" />

          <?php
          
					//si boton introducir pulsado     
					if (isset($_POST['introducir']) && $val_1==0)  
						echo "<span style='color:red'> &lt;-- Debe introducir un nombre de PHA!!</span>";       
										
          ?><br />          
          
          Masa (Toneladas):

          <input type="text" name="masa" value="<?php echo $_POST['masa'];?>" />

          <?php

					if (isset($_POST['introducir']) && $val_2==0)
						echo "<span style='color:red'> &lt;-- Masa fuera de rango!!</span>";
							
          ?><br />
			
			 Vel. traslación (Km/s):

          <input type="text" name="velocidad" value="<?php echo $_POST['velocidad'];?>" />

          <?php
 
					if (isset($_POST['introducir']) && $val_3==0)
						echo "<span style='color:red'> &lt;-- Velocidad fuera de rango!!</span>";
					
          ?><br />
          
          Distancia min. orbital (MOD):

          <input type="text" name="mod" value="<?php echo $_POST['mod'];?>" />

          <?php

               if (isset($_POST['introducir']) && $val_4==0)
						echo "<span style='color:red'> &lt;-- Distancia fuera de rango!!</span>";
						
          ?><br />
          

          <input type="submit" value="Introducir" name="introducir"/>
          <!--<input type="submit" value="Reiniciar" name="reiniciar"/>-->
          

     </form>


</body>

</html>


