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
         
     <form name="input" action="insercion.php" method="post">
     
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
                  
     </body>
</html>
