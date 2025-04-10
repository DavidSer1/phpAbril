document.addEventListener('DOMContentLoaded', main);

let vaixells = [
    { "B1": [21, 22] },
    { "B2": [62, 72, 82] },
    { "B3": [45, 46, 47, 48] },
    { "B4": [99, 89, 79, 69, 59] }
];

let intentos = 0;
let aciertos = 0;
const maxIntentos = 25;
const totalAciertosNecesarios = 14;
let disparosRealizados = new Set(); 

function main() {
    document.getElementById('disparar').addEventListener('click', dispara);
    document.getElementById('iniciar').addEventListener('click', iniciarpartida);
}

function iniciarpartida() {
    crearTauler();
    intentos = 0;
    aciertos = 0;
    disparosRealizados.clear();
    actualizarMarcador();
    document.getElementById('resultat').innerHTML = ""; 
}

function crearTauler() {
    let tauler = document.getElementById('tauler');
    let taula = "<table>";

    taula += "<tr><td></td>";
    for (let i = 65; i < 75; i++) {
        taula += "<td>" + String.fromCharCode(i) + "</td>";
    }
    taula += "</tr>";

    for (let j = 0; j < 10; j++) {
        let idFila = j + 1;
        taula += "<tr><td>" + idFila + "</td>";
        for (let a = 0; a < 10; a++) {
            taula += `<td id="${j}${a}">X</td>`;
        }
        taula += "</tr>";
    }

    taula += "</table>";
    tauler.innerHTML = taula;

    let selectFila = document.getElementById('fila');
    let selectColumna = document.getElementById('columna');
    let opcionesFila = "";
    let opcionesColumna = "";

    for (let i = 0; i < 10; i++) {
        opcionesFila += `<option value="${i}">${i + 1}</option>`;
        opcionesColumna += `<option value="${i}">${String.fromCharCode(65 + i)}</option>`;
    }
    selectFila.innerHTML = opcionesFila;
    selectColumna.innerHTML = opcionesColumna;
}

function dispara() {
    let fila = document.getElementById('fila').value;
    let columna = document.getElementById('columna').value;
    let id = fila + columna;
    let celda = document.getElementById(id);
    let mensaje = document.getElementById('resultat');

    // Verifica si ya se ha disparado en esta posición
    if (disparosRealizados.has(id)) {
        mensaje.innerHTML = " Ya has disparado en esta posición. Elige otra.";
        return; 
    }

    disparosRealizados.add(id); 
    mensaje.innerHTML = ""; 
    let acertado = false;

    vaixells.forEach(vaixell => {
        let clave = Object.keys(vaixell)[0];
        let posiciones = vaixell[clave];

        if (posiciones.includes(parseInt(id))) {
            acertado = true;
            celda.innerHTML = "B";
            aciertos++;
        }
    });

    if (!acertado) {
        celda.innerHTML = "";
    }

    intentos++;
    actualizarMarcador();

    if (aciertos === totalAciertosNecesarios) {
        setTimeout(() => {
            alert(" Has guanyat!");
            iniciarpartida();
        }, 100);
    } else if (intentos === maxIntentos) {
        setTimeout(() => {
            alert(" Has perdut!");
            iniciarpartida();
        }, 100);
    }
}

function actualizarMarcador() {
    document.getElementById('errors').innerHTML = `Intentos: ${intentos} de ${maxIntentos}`;
    document.getElementById('acerts').innerHTML = `Aciertos: ${aciertos} de ${totalAciertosNecesarios}`;
}
