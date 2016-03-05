//javascript
var consulta;
var consulta2;
var codigos;

window.onload=iniciar;

function iniciar()
{

consulta = new XMLHttpRequest();
consulta.onreadystatechange = procesarrespuesta;
consulta.open('GET','codigo.xml',true);
consulta.send(null);

consulta2 = new XMLHttpRequest();
consulta2.onreadystatechange = procesarrespuesta2;
consulta2.open('GET','provincias.json',true);
consulta2.send(null);



document.getElementById("codigo").addEventListener('blur',validar,false);
}

function procesarrespuesta()
{
	if ((consulta.readyState == 4) && (consulta.status == 200)) 
	{
		codigos = consulta.responseXML.getElementsByTagName('codigo'); 
				
	}
}

function procesarrespuesta2()
{
	if ((consulta2.readyState == 4) && (consulta2.status == 200)) 
	{
		var lista = document.getElementById('prov');		
		var provinJSON = JSON.parse(consulta2.responseText)
			for (var y in provinJSON){
				provincias = provinJSON[y];
				
				
				for (var z in provincias){
					//alert(provincias[z]);	
					
					var nuevoelemento = document.createElement('option');										
					nuevoelemento.setAttribute('value',provincias[z]);
					
					var textoelemento = document.createTextNode(provincias[z]);
					nuevoelemento.appendChild(textoelemento);
					
					lista.appendChild(nuevoelemento);
								
				}
			} 				
	}
}	


function validar(event1)
{
	if (validarCodigo())
		return true;
	else{
		event1.preventDefault();
		return false;
	}	
}

function validarCodigo()
{
	var encontrado=false;
	//alert('validar codigo');
	for (var i=0; i < codigos.length; i++)
	{
		if (codigos[i].firstChild.nodeValue == document.getElementById("codigo").value)
		{
			encontrado=true;
		} 
	}
	
	if (!encontrado){
		alert("Codigo no encontrado.");
		document.getElementById("codigo").focus();
	}	
	
	return encontrado;
}