//js con jquery para coger los datos de php

function muestraEquipos(str) {
    if (str.length == 0) { 
        document.getElementById("equipos").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("equipos").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "ej71.php?q=" + str, true);
        xmlhttp.send(null);
    }
}	
