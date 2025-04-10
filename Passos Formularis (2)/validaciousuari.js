
window.onload = iniciar;

function iniciar (){
    document.getElementById("enviar").addEventListener("click", validar,false);
    mostrarnumerosCaptcha();

} 
var element3 = document.getElementById("numeroscaptcha");
let numero1 =  Math.floor(Math.random() * 10);
let numero2 =  Math.floor(Math.random() * 10);
let resultado = numero1 + numero2;

function validarNom () {
    var element = document.getElementById("nom");
    if (!element.checkValidity()){
        if (element.validity.valueMissing){
            error(element,"Deus d'introduïr un nom.");
        }
        if (element.validity.patternMismatch){
            error(element, "El nom ha de tindre entre 2 i 30 caracters.");
        }
        //error(element);
        return false;
    }
    return true;
}

function validarApellidos () {
    var element = document.getElementById("apellidos");
    if (!element.checkValidity()){
        if (element.validity.valueMissing){
            error(element,"Deus d'introduïr un apellido.");
        }
        if (element.validity.patternMismatch){
            error(element, "El nom ha de tindre entre 2 i 30 caracters.");
        }
        //error(element);
        return false;
    }
    return true;
}

function validarEmail () {
    var element = document.getElementById("email");
    var element2 = document.getElementById("correu2");
    if (element.value != element2.value){
        error(element, "Els emails no son iguals.");
        return false;
    }
    if (element.value == element2.value){
    if (!element.checkValidity()){
        if (element.validity.valueMissing){
            error(element,"Deus d'introduïr un email.");
        }
        else if(element.validity.typeMismatch){
            error(element, "El email no es correcte.");
        }
        else if(element2.validity.typeMismatch){
            error(element, "El email no es correcte.");
        }
       else if (element2.validity.valueMissing){
            error(element2,"Deus d'introduïr un email.");
        }
        return false;
    }
}
    return true;
}

function validarNickname () {
    var element = document.getElementById("nick");
    if (!element.checkValidity()){
        if (element.validity.valueMissing){
            error(element,"Deus d'introduïr un nickname.");
        }
        if (element.validity.patternMismatch){
            error(element, "El nickname ha de tindre entre 2 i 8 caracters.");
        }
        //error(element);
        return false;
    }
    return true;
}

function validarContraseña () {
    var element = document.getElementById("contra");
    var element2 = document.getElementById("contra2");
    if (element.value != element2.value){
        error(element, "Les contrassenyes no coincideixen");
        return false;
    }
    if (element.value == element2.value){
    if (!element.checkValidity()){
        if (element.validity.valueMissing){
            error(element,"Deus d'introduïr una contrassenya.");
        }
        else if(element.validity.patternMismatch){
            error(element, "La contrassenya ha de tindre entre 6 y 15, con una o más mayúsculas, 1 o más números y 1 o más caracteres .");
        }
        else if(element2.validity.patternMismatch){
            error(element, "La contrassenya ha de tindre entre 6 y 15, con una o más mayúsculas, 1 o más números y 1 o más caracteres .");
        }
       else if (element2.validity.valueMissing){
            error(element2,"Deus d'introduïr una contrassenya.");
        }
        return false;
    }
}
    return true;
}
function mostrarnumerosCaptcha(){
 


    element3.innerHTML = numero1 + " + " + numero2;


 

}

function validarCaptcha(){
    var element = document.getElementById("captcha");

    if (!element.checkValidity()){
        if (element.validity.valueMissing){
            error(element,"Deus d'introduïr un numero");
        }
        if(resultado != element.value){
            error(element, "El resultat es incorrecte.");
           
        }
        return false;

    }
    return true;
}

function validar (e) {
    esborrarError ();
    if (validarNom() && validarApellidos()  && validarEmail()  && validarNickname() && validarContraseña() && validarCaptcha() &&  confirm("Confirma si vols enviar el formulari") ){

        return true;

    }else{
        e.preventDefault();
        return false;
    }
}

function error (element, missatge){
    let miss=document.createTextNode(missatge);    
    document.getElementById("missatgeError").appendChild(miss);
    element.classList.add("error");
    element.focus();
}


function esborrarError (){
    document.getElementById("missatgeError").textContent="";
    let formulari = document.forms[0];
        for ( let i=0; i < formulari.elements.length; i++){
            formulari.elements[i].classList.remove("error");
        }
}