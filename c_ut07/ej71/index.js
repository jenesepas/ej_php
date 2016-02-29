////////////////////////////////////////////////////////////////////
// Cuando el documento esté cargado llamamos a la función iniciar().
////////////////////////////////////////////////////////////////////
crearEvento(window,"load",iniciar);
/////////////////////////////////////////////////////////

function iniciar()
{
	// Creamos un objeto XHR.
	miXHR = new objetoXHR();
	
	// Cargamos en el objeto con ID resultados el contenido 
	// del fichero datos.txt empleando una petición AJAX.
	cargarSync(document.getElementById("resultados"),"fecha.php");
}

/////////////////////////////////////////////////////////
// Función cargarSync: carga el contenido de la url
// en el objeto que se le pasa como referencia,
// usando una petición AJAX de forma SINCRONA.
/////////////////////////////////////////////////////////
function cargarSync(objeto, url) 
{ 
	if (miXHR) 
	{	
		alert("Comenzamos la petición AJAX");

		//Si existe el objeto  miXHR
		miXHR.open('GET', url, false); //Abrimos la url, false=SINCRONA 
		
		// Hacemos la petición al servidor. Como parámetro del método send:
		// null -> cuando usamos GET.
		// cadena con los datos -> cuando usamos POST
		miXHR.send(null);
		
		//Escribimos la respuesta recibida de la petición AJAX en el objeto DIV
		textoDIV(objeto, miXHR.responseText);
		
		alert("Terminó la petición AJAX");
	}
}