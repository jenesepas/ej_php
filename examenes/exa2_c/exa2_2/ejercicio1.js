//javascript

var listaCreada=0;

window.onload=iniciar;

function iniciar()
{
	
document.getElementById("insertar").addEventListener('click',validar_ins,false);

document.getElementById("eliminar").addEventListener('click',validar_del,false);
}

function validar_ins(event1)
{
	if (validarInsertar())
		return true;
	else{
		event1.preventDefault();
		return false;
	}	
}

function validar_del(event2)
{
	if (validarEliminar())
		return true;
	else{
		event2.preventDefault();
		return false;
	}	
}


function validarInsertar()
{
	var patron=/^[a-zA-Z]+$/
	
	if (patron.test(document.getElementById("fruta").value))
	{
		//alert("Campo fruta correcto.");
		if (listaCreada == 0)		
			crearLista();
		else
			crearFila();	
		
		document.getElementById("fruta").value="";	
	}
	else
	{
		alert("Campo fruta incorrecto.");
		document.getElementById("fruta").focus();
		return false;
			
	}	
}

function validarEliminar()
{
	var patron=/^\d*$/
	
	if ((listaCreada==1) && (patron.test(document.getElementById("num").value)))
	{
		//alert("Field right!!.");
		eliminarFila();
		
	}
	else
	{
		alert("Campo no numerico o lista no creada.");
		document.getElementById("num").focus();
		return false;
			
	}	
}


function crearLista()
{
	var nuevalista=document.createElement('ol');
	var nuevoelemento=document.createElement('li');
	var textoelemento = document.createTextNode(document.getElementById("fruta").value);
	
	nuevoelemento.appendChild(textoelemento);
	nuevalista.appendChild(nuevoelemento);	
	document.getElementsByTagName('body')[0].appendChild(nuevalista);
		
	
	listaCreada=1;
	 
}

function crearFila()
{
	var nuevoelemento=document.createElement('li');
	var textoelemento = document.createTextNode(document.getElementById("fruta").value);
	
	nuevoelemento.appendChild(textoelemento);
	document.getElementsByTagName('ol')[0].appendChild(nuevoelemento);	
	
}

function eliminarFila()
{	
	var elemento=document.getElementsByTagName("li")[(document.getElementById("num").value-1)];
	elemento.parentNode.removeChild(elemento);
			
}

