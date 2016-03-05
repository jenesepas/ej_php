$(document).ready(function(){
function validarNombre(){
    if(nombre.val().length < 4) {
        equipos.removeClass("oculto");
        return false;
    }
    equipos.addClass("oculto");
    return true;
}

function validar(){
    return validarNombre();
}

var nombre = $("#nombre");
var equipos = $("#equipos");

/*
$("#datos").submit(function(){
    if(validar()) return true;
    else return false;
});
*/
});