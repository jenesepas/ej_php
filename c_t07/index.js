////////////////////////////////////////////////////////////////////
// Cuando el documento esté cargado llamamos a la función iniciar().
////////////////////////////////////////////////////////////////////
crearEvento(window,"load",iniciar);
/////////////////////////////////////////////////////////


function iniciar()
{
	// Creamos un objeto XHR.
	miXHR = new objetoXHR();
	
	// Cargamos los datos XML de forma asíncrona.
	// En este caso ponemos una página PHP que nos devuelve datos en formato XML
	// pero podríamos poner también el nombre de un fichero XML directamente: catalogos.xml
	// Se adjunta ejemplo de fichero XML.
	cargarAsync("datosjson.txt");
}

/////////////////////////////////////////////////////////
// Función cargarAsync: carga el contenido de la url
// usando una petición AJAX de forma ASINCRONA.
/////////////////////////////////////////////////////////
function cargarAsync(url) 
{ 
	if (miXHR) 
	{	
		// Activamos el indicador Ajax antes de realizar la petición.
		//document.getElementById("indicador").innerHTML="<img src='ajax-loader.gif'/>";
		
		//Si existe el objeto  miXHR
		miXHR.open('GET', url, true); //Abrimos la url, true=ASINCRONA 
		
		// En cada cambio de estado(readyState) se llamará a la función estadoPeticion
		miXHR.onreadystatechange = estadoPeticion;
	
		// Hacemos la petición al servidor. Como parámetro: null ya que los datos van por GET
		miXHR.send(null);
	}
}

/////////////////////////////////////////////////////////
// Función estadoPeticion: será llamada a cada cambio de estado de la petición AJAX
// cuando la respuesta del servidor es 200(fichero encontrado) y el estado de
// la solicitud es 4, accedemos a la propiedad responseText
/////////////////////////////////////////////////////////
function estadoPeticion()
{
	if (this.readyState==4 && this.status == 200)
	{
		// Los datos JSON los recibiremos como texto en la propiedad this.responseText
		
		// Con la función eval() evaluaremos ese resultado para convertir a objetos y variables el string que estamos recibiendo en JSON.
		// Lo que recibimos en formato JSON es un string que representa un array [ ... ] que contiene objetos literales {...},{...},... 
		/* Ejemplo: [ {"id":"2","nombrecentro":"IES A Piringalla","localidad":"Lugo","provincia":"Lugo","telefono":"982212010","fechavisita":"2010-11-26","numvisitantes":"85"} , {"id":"10","nombrecentro":"IES As Fontiñas","localidad" : ..... } ]  */
		
		// Asignamos a la variable resultados la evaluación de responseText	
		var resultados=eval( '(' +this.responseText+')');

		//creamos nuevo nodo para la tabla	
		var tabla = document.createElement('table');
		tabla.setAttribute('border','1');
		
		document.getElementsByTagName('body')[0].appendChild(tabla); 
		//nuevo nodo para titulo
		var titulo = document.createElement('th');	
		var text_titulo = document.createTextNode('ALUMNOS');
		titulo.appendChild(text_titulo);
		document.getElementsByTagName('table')[0].appendChild(titulo);		
		
		//contamos el num de filas de la tabla (la 0 es el titulo)
		var n_filas=0;	
		// Hacemos un bucle para recorrer todos los objetos literales recibidos en el array resultados y mostrar su contenido.
		for (var i=0; i < resultados.length; i++) 
		{						
			objeto = resultados[i];
			
			var fila = document.createElement('tr');				
			document.getElementsByTagName('table')[0].appendChild(fila);
			n_filas++;
							
			var columna = document.createElement('td');	
			var text_columna = document.createTextNode(objeto.curso);
			columna.appendChild(text_columna);
			document.getElementsByTagName('table')[0].childNodes[n_filas].appendChild(columna);						
					
			// Para cada curso leemos los alumnos
			alumnos=objeto.alumnos;
			for (var z=0; z < alumnos.length; z++) 
			{
				var fila = document.createElement('tr');				
				document.getElementsByTagName('table')[0].appendChild(fila);
				n_filas++;				
				
				var columna = document.createElement('td');	
				var text_columna = document.createTextNode(alumnos[z].nombre);
				columna.appendChild(text_columna);
				document.getElementsByTagName('table')[0].childNodes[n_filas].appendChild(columna);
				
				var columna = document.createElement('td');	
				var text_columna = document.createTextNode(alumnos[z].apellido);
				columna.appendChild(text_columna);
				document.getElementsByTagName('table')[0].childNodes[n_filas].appendChild(columna);				
			}
			
		}

	
		
	}
}