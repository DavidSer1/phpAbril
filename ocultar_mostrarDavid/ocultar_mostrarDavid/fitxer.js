document.addEventListener("DOMContentLoaded", function() {

    const btnParrafo1 = document.getElementById("parrafo1");
    const btnParrafo2 = document.getElementById("parrafo2");

    const parrafos = document.querySelectorAll("p");

    btnParrafo1.addEventListener("click", function() {
        visibilitatparagrafs(parrafos[0]);
    });
    btnParrafo2.addEventListener("click", function() {
        visibilitatparagrafs(parrafos[1]);
    });
});

function visibilitatparagrafs(element) {
    if (element.classList.contains("oculto")) {
        element.classList.remove("oculto");
        element.classList.add("visible");
    } else {
        element.classList.remove("visible");
        element.classList.add("oculto");
    }
}
