/**
 * @param String name
 * @return String
 */
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}


var family = getParameterByName('familia');
var nombre = getParameterByName('nombre');
var divFamily = document.getElementById('family')


if (family) {
    localStorage.setItem("person", family);
    var conFamilia = true
}

if (nombre) {
    localStorage.setItem("person", nombre);
}

if (conFamilia) {
    var innerInvitado = "Familia " + localStorage.getItem("person");
} else {
    var innerInvitado = localStorage.getItem("person");
}

divFamily.innerHTML =  innerInvitado.toUpperCase()



