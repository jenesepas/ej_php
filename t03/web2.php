<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 3 : MySQL y PHP -->
<!-- Ejemplo de consulta sobre un  valor proporcionado por un  -->
<!-- formulario HTML  -->

<html>
     <head>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>Informaciones</title>
     </head>
     
     <body>
     <h2>DWEC03-web2 - Juan Antonio Forte Garcia</h2>
     <h2>Musicos:</h2>    
     <form name="input1" action="cons_musico.php" method="post">
     
     Introduce numbre del musico: <input type="text" name="nombre" />
     <br />
     <br />
     <input type="submit" value="Consulta Musico" />
     </form>
     
     <h2>Grupos:</h2>    
     <form name="input2" action="cons_grupo.php" method="post">
     
     Introduce numbre del grupo: <input type="text" name="nombre" />
     <br />
     <br />     
     <input type="submit" value="Consulta Grupo" />
     </form>  
     
     <h2>Discos:</h2>    
     <form name="input3" action="cons_disco.php" method="post">
     
     Introduce numbre del disco: <input type="text" name="nombre" />
     <br />
     <br />     
     <input type="submit" value="Consulta Disco" />
     </form>  
     
     <h2>Discograficas:</h2>    
     <form name="input" action="cons_discogra.php" method="post">
     
     Introduce numbre de la discografica: <input type="text" name="nombre" />
     <br />
     <br />     
     <input type="submit" value="Consulta Discografica" />
     </form>             
     
     </body>
</html> 
