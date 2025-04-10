window.onload = main;
let paraules = ["tiktok", "snapchat", "strava", "instagram", "facebook"];
let caracters = [];
let paraulaVeure = [];
let contarerrors = 0;
let lletresUsades = new Set();

function main() {
    document.getElementById("inici").addEventListener('click', iniciarJoc);
    document.getElementById("comprova").addEventListener('click', comprovar);
}

function iniciarJoc() {
    let numRandom = Math.floor(Math.random() * paraules.length);
    let paraulaRandom = paraules[numRandom];
    let paraulaDescobrir = document.getElementById("paraulaDescobrir");

    caracters = [];
    paraulaVeure = [];
    contarerrors = 0;
    lletresUsades.clear();

    for (let i = 0; i < paraulaRandom.length; i++) {
        caracters[i] = paraulaRandom[i];
        paraulaVeure[i] = "_";
    }

    paraulaDescobrir.innerHTML = "<p>" + paraulaVeure.join(" ") + "</p>";
    document.getElementById("error").innerHTML = "Errors: ";
    document.querySelectorAll(".error-img").forEach(img => img.style.display = "none");
}

function comprovar() {
    let inputCaracter = document.getElementById("caracter").value.toLowerCase();

    if (inputCaracter === "") {
        alert("No has escrit ningun caracter");
        return;
    }

    if (!inputCaracter.match(/[a-z]/i)) return;

    if ([...lletresUsades].includes(inputCaracter)) {
        alert("Aquest lletra ja s'ha utilitzat");
        return;
    }
    

    lletresUsades.add(inputCaracter);
    let hihaerror = true;

    caracters.forEach((ele, ind) => {
        if (inputCaracter === ele) {
            paraulaVeure[ind] = ele;
            hihaerror = false;
        }
    });

    if (hihaerror) {
        let errors = document.getElementById("error");
        errors.innerHTML += inputCaracter + " ";
        contarerrors++;
        
        if (contarerrors <= 6) {
            for (let i = 1; i <= contarerrors; i++) {
                document.querySelector(".error" + i).style.display = "block";
            }
        }
    } else {
        document.getElementById("paraulaDescobrir").innerHTML = "<p>" + paraulaVeure.join(" ") + "</p>";
    }

    document.getElementById("caracter").value = "";

    if (!paraulaVeure.includes("_")) {
        alert("Has guanyat!");
        tornarajugar();
    } else if (contarerrors >= 6) {
        alert("Has perdut! La paraula era: " + caracters.join(""));
        tornarajugar();
    }
}

function tornarajugar() {
    let resposta = prompt("Vols tornar a jugar? (sí/no)").toLowerCase();

    if (resposta === "si" || resposta === "sí") {
        iniciarJoc();
    }
    else if (resposta && resposta.length > 2) {
        alert("El número màxim de caràcters és 2");
        return tornarajugar();
    } 
    else {
        alert("Ja has acabat la partida.");
    }
}