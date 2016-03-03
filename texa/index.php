<!DOCTYPE html>
<!--
    Tarea 3 - Prueba básica para inserción en la BD.
    Formulario de entrada de datos.
-->
<html>
     <head>
          <meta http-equiv="Content-Type" 
                content="text/html; charset=UTF-8">
          <title>Pedimos información sobre los datos a insertar</title>
     </head>     
     <body>         
        <!-- Formulario para pedir datos del Músico -->
        <form name="input" action="insercion.php" method="post">
     
            <h1>DATOS PARA AÑADIR UN MÚSICO</h1>
            Nombre del musico: <input type="text" name="nombre" />
            <br />
     
            Pais del musico: <input type="text" name="pais" />   
            <br />
     
            Fecha de nacimiento del musico: 
            <input type="date" name="fecha_nac" />   
            <br />
     
            Grupo del musico: <input type="number" name="grupo" />   
            <br />
            <br />     
            <input type="submit" value="Añadir Músico" />
        </form>
        
        <!-- Formulario para pedir el nombre del músico a borrar -->
        <form name="input" action="borrado.php" method="post">
     
            <h1>DATOS PARA BORRAR UN MÚSICO</h1>
            Nombre del musico: <input type="text" name="nombre" />
            
            <br />
            <br />     
            <input type="submit" value="Borrar Músico" />
        </form>
     </body>
</html>