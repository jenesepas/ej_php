<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 3 : MySQL y PHP -->
<!-- Ejemplo de inserción de una fila proporcionada por un  -->
<!-- formulario HTML  -->

<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Información de un músico</title>
     </head>
     
     <body>
     <h2>DWEC03-web1 - Juan Antonio Forte Garcia</h2>
     <h2>Musicos:</h2>
         
     <form name="input1" action="inser_musico.php" method="post">
     
     Nombre del musico: <input type="text" name="nombre" />
     <br />
     
     Pais del musico: <input type="text" name="pais" />   
     <br />
     
     Fecha de nacimiento del musico: <input type="date" name="fecha_nac" />   
     <br />
     
     Grupo del musico: <input type="number" name="grupo" />   
     <br />
     <br />
     
     <input type="submit" value="Añadir Músico" />
     </form>
  
  	  
  	  <h2>Grupos:</h2>
         
     <form name="input2" action="inser_grupo.php" method="post">
     
     Nombre del Grupo: <input type="text" name="nombre" />
     <br />
     
     Pais del Grupo: <input type="text" name="pais" />   
     <br />
     
     Fecha de fundacion: <input type="date" name="fecha_fun" />   
     <br />
     
     Fecha de disolucion: <input type="date" name="fecha_dis" />   
     <br />
     
     Estilo: <input type="text" name="estilo" />   
     <br />
     
     Cod. discografica: <input type="number" name="discogra" />   
     <br />
     <br />
     
     <input type="submit" value="Añadir Grupo" />
     </form>

	  <h2>Discos:</h2>
         
     <form name="input3" action="inser_disco.php" method="post">
     
     Nombre del Disco: <input type="text" name="nombre" />
     <br />                   
     
     Fecha de publicacion: <input type="date" name="fecha_pub" />   
     <br />
     
	  Millones vendidos: <input type="number" name="ventas" />
	  <br />
	       
     Formato: <input type="text" name="formato" />   
     <br />
     
     Cod. grupo: <input type="number" name="grupo" />  
	  <br />
	       
     Cod. discografica: <input type="number" name="discogra" />   
     <br />
     <br />
     
     <input type="submit" value="Añadir Disco" />
     </form>  

	  <h2>Discograficas:</h2>
         
     <form name="input4" action="inser_discogra.php" method="post">
     
     Nombre empresa: <input type="text" name="nombre" />
     <br />                   
     
     Pais: <input type="text" name="pais" />   
     <br />          
     
	  Capital social: <input type="number" name="capital" />
	  <br />
	       
     Tipo empresa: <input type="text" name="tipo" />   
     <br />
          
     <br />
     
     <input type="submit" value="Añadir Discografica" />
     </form>       
                     
     </body>
</html>
