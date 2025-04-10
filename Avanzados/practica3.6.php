<?php
$letras = [
    "A", "B", "C", "D", "E", "f", "G", "H", "I", "J", "K", "L", "M", "N", 
    "O", "P", "Q", "R", "S", "t", "U", "V", "W", "X", "Y", "Z"
];
$frase = "Hola Mundo";
echo "Frase : $frase <br>";
$resultado = "";
$totalLetras = count($letras);

foreach (str_split($frase) as $caracter) {
    $indice = array_search($caracter, $letras);
    if ($indice !== false) {
        $caracter = $letras[($indice + 1) % $totalLetras];
    }
    $resultado .= $caracter;
}

echo "Frase codificada:" . $resultado;
?>
