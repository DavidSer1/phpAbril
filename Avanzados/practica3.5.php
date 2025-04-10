<?php
$letras = [
    "A", "B", "C", "D", "E", "f", "G", "H", "I", "J", "K", "L", "M", "N", 
    "O", "P", "Q", "R", "S", "t", "U", "V", "W", "X", "Y", "Z"
];

for($i = 0; $i < count($letras); $i++){
    echo strtolower($letras[$i]);
    echo strtoupper($letras[$i]);
    echo "<br>";
}

?>