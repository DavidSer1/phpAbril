var comunitats = [
    {"comunitat": "Andalucía", "provincies": ["Almería", "Cádiz", "Córdoba", "Granada", "Jaén", "Huelva", "Málaga", "Sevilla"]},
    {"comunitat": "Aragón", "provincies": ["Huesca", "Teruel", "Zaragoza"]},
    {"comunitat": "Canarias", "provincies": ["Las Palmas", "Santa Cruz de Tenerife"]},
    {"comunitat": "Cantabria", "provincies": ["Cantabria"]},
    {"comunitat": "Castilla y León", "provincies": ["Ávila", "Burgos", "León", "Palencia", "Salamanca", "Segovia", "Soria", "Toledo", "Zamora"]},
    {"comunitat": "Castilla-La Mancha", "provincies": ["Albacete", "Ciudad Real", "Cuenca", "Guadalajara", "Valladolid"]},
    {"comunitat": "Cataluña", "provincies": ["Barcelona", "Girona", "Lleida", "Tarragona"]},
    {"comunitat": "Ceuta", "provincies": ["Ceuta"]},
    {"comunitat": "Comunidad Valenciana", "provincies": ["Alicante", "Castellón", "Valencia"]},
    {"comunitat": "Comunidad de Madrid", "provincies": ["Madrid"]},
    {"comunitat": "Extremadura", "provincies": ["Badajoz", "Cáceres"]},
    {"comunitat": "Galicia", "provincies": ["La Coruña", "Lugo", "Orense", "Pontevedra"]},
    {"comunitat": "Islas Baleares", "provincies": ["Islas Baleares"]},
    {"comunitat": "La Rioja", "provincies": ["La Rioja"]},
    {"comunitat": "País Vasco", "provincies": ["Álava", "Guipúzcoa", "Vizcaya"]},
    {"comunitat": "Navarra", "provincies": ["Navarra"]},
    {"comunitat": "Melilla", "provincies": ["Melilla"]},
    {"comunitat": "Principado de Asturias", "provincies": ["Asturias"]},
    {"comunitat": "Región de Murcia", "provincies": ["Murcia"]}
];

var selectComunidad = document.getElementById("comunidad");
var selectProvincia = document.getElementById("provincia");
var botonBuscar = document.getElementById("buscar");

selectComunidad.addEventListener("change", function() {
    var comunidad = comunitats.find(function(comunidad) {
        return comunidad.comunitat === selectComunidad.value;
    });
    selectProvincia.innerHTML = "";
    comunidad.provincies.forEach(function(provincia) {
        var option = document.createElement("option");
        option.value = provincia;
        let a = document.createTextNode(provincia);
        option.appendChild(a);

        selectProvincia.appendChild(option);

    })});

comunitats.forEach(function(comunidad) {
    var option = document.createElement("option");
    option.value = comunidad.comunitat;
    let a = document.createTextNode(comunidad.comunitat);
    option.appendChild(a);
    selectComunidad.appendChild(option);

});
botonBuscar.addEventListener("click", function() {
let url = "https://www.google.es/maps/place/";
let com = selectComunidad.value;
let prov = selectProvincia.value;
let urlFinal = url + com + ", " + prov;
window.open(urlFinal, "_blank");
});


