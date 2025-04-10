<?php 
include ("../practica3.12/cripto.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $frase = $_POST["frase"];
    $desplazamiento = $_POST["desplazamiento"];
    echo "Frase original: " . $frase . "<br>";
    echo "Desplazamiento: " . $desplazamiento . "<br>";
    echo "Frase codificada: " . codificar($frase, $desplazamiento) . "<br>";
 
}


?>