<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$cadena = "El perro de San Roque no tiene rabo";

echo "Las letras totales de la frase son: " . strlen($cadena) . "<br>";

echo "Las palabras totales de la frase son: " . str_word_count($cadena) . "<br>";
echo "Cuenta espacios en blanco: " . substr_count($cadena, " ") . "<br>";
echo "Una linea con el numero de letras de cada palabra<br>";




$palabras = explode(" ", $cadena);
foreach ($palabras as $palabra) {
    echo $palabra . " " . strlen($palabra) . "      letras" . "<br>";
}

?>
    
</body>
</html>