<?php
include ("cripto.php");

$frase = "Hola Mundo";
echo "Frase original: " . $frase . "<br>";

codificar($frase, 3);
descodificar($frase,0);


?>
