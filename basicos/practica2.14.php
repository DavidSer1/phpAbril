<?php

for ($hora = 0; $hora < 24; $hora++) { 
    $horario = "AM";
    for ($minuto = 0; $minuto < 60; $minuto += 15) { 
        $nuevahora = $hora;
        if($hora > 12){
            $nuevahora = $hora -12;
            $horario = "PM";
        }
            echo   "Son las" . $nuevahora . ":" . $minuto .  $horario . "<br>";
    }
}
?>