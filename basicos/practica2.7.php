<?php

define("RADIO_TIERRA", 6371); 
define("DISTANCIA_SOL", 149597870);
define("PI", 3.14159265359); 

$circunferencia_tierra = 2 * PI * RADIO_TIERRA;

$vueltas_al_mundo = DISTANCIA_SOL / $circunferencia_tierra;

echo "El radio de la Tierra es: " . RADIO_TIERRA . " km" . "<br>";
echo "La distancia de la Tierra al Sol es: " . DISTANCIA_SOL . " km" . "<br>";
echo "La circunferencia de la Tierra en el ecuador es: " . $circunferencia_tierra . " km" . "<br>";
echo "La distancia al Sol equivale a aproximadamente " . round($vueltas_al_mundo, 2) . " vueltas al mundo.";
?>
