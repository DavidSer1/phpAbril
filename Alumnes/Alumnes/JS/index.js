document.addEventListener("DOMContentLoaded", function () {

    const semafor = document.getElementById("semafor");
    const cotxe = document.getElementById("cotxe");
    const policia = document.getElementById("policia");


    // SEMÀFOR
    semafor.style.position = "absolute";
    semafor.style.left = "300px";
    semafor.style.top = "400px";
    semafor.style.width = "100px";
    semafor.style.height = "250px";
    semafor.style.backgroundImage = "url('img/semafor-roig.png')";
    semafor.style.backgroundSize = "contain";
    semafor.style.backgroundRepeat = "no-repeat";
    semafor.style.zIndex = "10";

    // COTXE
    cotxe.style.position = "absolute";
    cotxe.style.left = "50px";
    cotxe.style.top = "400px";
    cotxe.style.width = "200px";
    cotxe.style.height = "100px";
    cotxe.style.backgroundImage = "url('img/cotxe.png')";
    cotxe.style.backgroundSize = "contain";
    cotxe.style.backgroundRepeat = "no-repeat";
    cotxe.style.zIndex = "10";

    // POLICIA
    policia.style.position = "absolute";
    policia.style.left = "600px";
    policia.style.top = "300px";
    policia.style.width = "150px";
    policia.style.height = "150px";
    policia.style.backgroundImage = "url('img/police-stop.png')";
    policia.style.backgroundSize = "contain";
    policia.style.backgroundRepeat = "no-repeat";
    policia.style.display = "none";
    policia.style.zIndex = "10";

    let estatsemafor = "roig";
    let llumsemafor = "roig";

    function actualitzasemafor() {
      if (llumsemafor === "roig") {
        semafor.style.backgroundImage = "url('img/semafor-roig.png')";
      } else if (llumsemafor === "ambar") {
        semafor.style.backgroundImage = "url('img/semafor-ambar.png')";
      } else if (llumsemafor === "verd") {
        semafor.style.backgroundImage = "url('img/semafor-verd.png')";
      }
    }

    // Funció cíclica per canviar el color del semàfor
    function canvicolorsemafor() {
      llumsemafor = estatsemafor;
      actualitzasemafor();

      let delay = 0;
      if (estatsemafor === "roig") {
        delay = 10000; // 10s
        estatsemafor = "ambar";
      } else if (estatsemafor === "ambar") {
        delay = 500; // 0.5s
        estatsemafor = "verd";
      } else if (estatsemafor === "verd") {
        delay = 1500; // 1.5s
        estatsemafor = "roig";
      }
      setTimeout(canvicolorsemafor, delay);
    }
    canvicolorsemafor();

    // Mostrar policia
    function mostrarpolicia() {
      policia.style.display = "block";
      policia.style.transform = "scale(1.5)";
      setTimeout(() => {
        policia.style.display = "none";
        policia.style.transform = "scale(1)";
      }, 4000);
    }

    // Moure el cotxe
    function moveCotxe(direction) {
      let currentLeft = parseInt(cotxe.style.left, 10);

      if (direction === "forward") {
        currentLeft += 10;
      } else if (direction === "backward") {
        currentLeft -= 10;
      }
      cotxe.style.left = currentLeft + "px";

      // Comprovem col·lisió amb el semàfor
      let cotxeRect = cotxe.getBoundingClientRect();
      let semaforRect = semafor.getBoundingClientRect();

      if (cotxeRect.right >= semaforRect.left && cotxeRect.left < semaforRect.right) {
        if (llumsemafor === "roig") {
          mostrarpolicia();
        }
      }
    }

    // Tecles
    document.addEventListener("keydown", function (e) {
      if (e.key === "ArrowRight") {
        moveCotxe("forward");
      } else if (e.key === "ArrowLeft") {
        moveCotxe("backward");
      }
    });
  });