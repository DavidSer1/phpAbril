
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

function mostrar_impares($cadena1){
    $cadena1 = "A quien madruga Dios le ayuda";
    for($i = 0; $i < strlen($cadena1); $i+=2){ 
       echo substr($cadena1, $i, 1) . "<br>";
    }
}
mostrar_impares($cadena1);


?>
</body>
</html>
