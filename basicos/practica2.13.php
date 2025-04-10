<?php

for ($hora = 0; $hora < 24; $hora++) { 
    for ($minuto = 0; $minuto < 60; $minuto += 15) { 
     
        $hora_formateada = ($hora < 10) ? "0" . $hora : $hora;
        $minuto_formateado = ($minuto < 10) ? "0" . $minuto : $minuto;
        
        echo "La hora es " . $hora_formateada . ":" . $minuto_formateado . "<br>";
    }
}

?>
