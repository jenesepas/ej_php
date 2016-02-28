<?php
// Si el usuario aún no se ha autentificado, pedimos las credenciales
if (!isset($_SERVER['PHP_AUTH_USER'])) {
	header('WWW-Authenticate: Basic realm="Contenido restringido"');
	header("HTTP/1.0 401 Unauthorized");
	exit;
}
// Si ya ha enviado las credenciales, las comprobamos con la base de datos
else {
	// Conectamos a la base de datos
	$pdo = new PDO('mysql:host=localhost; dbname=dwes2', 'dwes', 'abc123.');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	echo "after pdo";
     /*// Vamos a controlar las excepciones que pudiera haber.
     try{*/
			date_default_timezone_set('Europe/Madrid');
			// Ejecutamos la consulta para comprobar si existe
			// esa combinación de usuario y contraseña
			$sql = "SELECT usuario FROM usuarios
			WHERE usuario='${_SERVER['PHP_AUTH_USER']}' AND
			contrasena=md5('${_SERVER['PHP_AUTH_PW']}')";
			$fila = $pdo->query($sql);
			echo " fila ".$fila;

			$resultado=$fila->fetch();
			echo $resultado;
			// Si no existe, se vuelven a pedir las credenciales
			if($resultado == null) {
				header('WWW-Authenticate: Basic realm="Contenido restringido"');
				header("HTTP/1.0 401 Unauthorized");
				exit;
			}
			else {
				echo "else";
				/*
				if (isset($_COOKIE['ultimo_login'])) {
					$ultimo_login = $_COOKIE['ultimo_login'];
				}
				setcookie("ultimo_login", time(), time()+3600);
				setcookie("usuario", $resultado[0], time()+3600);
				
				$resultado->close();
				$pdo->close();
				*/
			}
	/*		
	} catch(PDOException $p){
         echo "Error:".$p->getMessage();
    }	*/
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "
http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 4 : Desarrollo de aplicaciones web con PHP -->
<!-- Ejemplo: Cookies en autentificación HTTP -->
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Ejemplo Tema 4: Cookies en autentificación HTTP</title>
		<link href="dwes.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<?php
		if ($error == null) {
			echo "Nombre de usuario: ".$_SERVER['PHP_AUTH_USER']."<br />";
			echo "Hash de la contraseña: ".md5($_SERVER['PHP_AUTH_PW'])."<br />";
			if (isset($ultimo_login))
				echo "Ultimo login: " . date("d/m/y \a \l\a\s H:i", $ultimo_login);
			else
				echo "Bienvenido. Esta es su primera visita.";
		}
		else
			echo "Se ha producido el error $error.<br />";
	?>
	</body>
</html>
