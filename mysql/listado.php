<?php  
include "funciones.php";

$conexion = obtenerconexion();
$stmt = $conexion->prepare("SELECT * FROM clientes");
$stmt->execute();


while($datos = $stmt->fetch()){
    echo $datos[0] . " " . $datos[1] . " " . $datos[2] . $datos[3].  $datos[4] . $datos[5] . "<br>";

}

echo "<a href='insert.php'>Insertar</a><br>";
echo "<a href='update.php'>Actualizar</a><br>";
echo "<a href='delete.php'>Eliminar</a><br>";


?>