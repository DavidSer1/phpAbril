class Adresa {
    constructor(nom, url) {
        this.nom = nom;
        this.url = url;
    }
}

const llistaElement = document.getElementById("llista");
const nomInput = document.getElementById("nomAdresa");
const urlInput = document.getElementById("urlAdresa");
const crearBtn = document.getElementById("crearAdresa");

// Carregar adreces guardades en LocalStorage
document.addEventListener("DOMContentLoaded", () => {
    const adrecesGuardades = JSON.parse(localStorage.getItem("adreces")) || [];
    adrecesGuardades.forEach(adresa => afegirAdresaADom(adresa));
});

// Afegir nova adreça
crearBtn.addEventListener("click", () => {
    const nom = nomInput.value.trim();
    const url = urlInput.value.trim();
    
    if (!nom || !url) {
        alert("Els camps no poden estar buits");
        return;
    }
 

    const novaAdresa = new Adresa(nom, url);
    afegirAdresaADom(novaAdresa);
    guardarAdresa(novaAdresa);
    nomInput.value = "";
    urlInput.value = "";
});


function afegirAdresaADom(adresa) {
    const li = document.createElement("li");
    
    const checkbox = document.createElement("input");
    checkbox.type = "checkbox";
    checkbox.addEventListener("change", () => eliminarAdresa(adresa, li));
    
    const enllac = document.createElement("a");
    enllac.href = adresa.url;
    let afegir = document.createTextNode(nom);
    
    enllaç.appendChild(afegir);
    enllac.target = "_blank";
    
    li.appendChild(checkbox);
    li.appendChild(enllac);
    llistaElement.appendChild(li);
}

// Guardar adreça en LocalStorage
function guardarAdresa(adresa) {
    const adreces = JSON.parse(localStorage.getItem("adreces")) || [];
    adreces.push(adresa);
    localStorage.setItem("adreces", JSON.stringify(adreces));
}

// Eliminar adreça del LocalStorage i del DOM
function eliminarAdresa(adresa, element) {
    if (!confirm("Estàs segur que vols eliminar aquesta adreça?")) {
        return;
    }
    let adreces = JSON.parse(localStorage.getItem("adreces")) || [];
    let index = adreces.findIndex(a => a.nom === adresa.nom && a.url === adresa.url);
    if (index !== -1) {
        adreces.splice(index, 1);
    }
    localStorage.setItem("adreces", JSON.stringify(adreces));
    element.remove();
}
