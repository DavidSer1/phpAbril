<?php

function codificar($frase, $desplazamiento) {
    $letras_mayusculas = [
        "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", 
        "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
    ];
    
    $letras_minusculas = [
        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", 
        "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
    ];

    $resultado = "";

    foreach (str_split($frase) as $caracter) {
        if (in_array($caracter, $letras_mayusculas)) {
            $indice = array_search($caracter, $letras_mayusculas);
            $caracter = $letras_mayusculas[($indice + $desplazamiento) % count($letras_mayusculas)];
        } else if (in_array($caracter, $letras_minusculas)) {
            $indice = array_search($caracter, $letras_minusculas);
            $caracter = $letras_minusculas[($indice + $desplazamiento) % count($letras_minusculas)];
        }

        $resultado .= $caracter;
    }

   /* echo "Frase codificada: " . $resultado . "<br>";*/
    return $resultado;
}
function descodificar($frase,$desplazamiento){
    $letras = [
        "A", "B", "C", "D", "E", "f", "G", "H", "I", "J", "K", "L", "M", "N", 
        "O", "P", "Q", "R", "S", "t", "U", "V", "W", "X", "Y", "Z"
    ];

    $resultado = "";
    $totalLetras = count($letras);
    
    foreach (str_split($frase) as $caracter) {
        $indice = array_search($caracter, $letras);
        if ($indice !== false) {
        
            $caracter = $letras[($indice - $desplazamiento + $totalLetras) % $totalLetras];
        }
        $resultado .= $caracter;
    }
    
    echo "Frase descodificada: " . $resultado;
}


?>