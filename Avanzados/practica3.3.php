<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

function comprobarDNI() {
    $dni = "20946193R";
    $letra = substr($dni, -1);
    $numero = (int) substr($dni, 0, -1); 
    $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
    $letraCorrecta = $letras[$numero % 23]; 

    return ord($letra) == ord($letraCorrecta); 
    
}

if (comprobarDNI()) {
    echo "El DNI es correcto";
    echo $dni;
} else {
    echo "El DNI no es correcto";
}


?>
    
</body>
</html>



