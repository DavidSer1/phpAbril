<?php  
include "funciones.php";

$conexion = obtenerconexion(); 


$dni = "5555555F";
$nombre = "DavidPepe";
$localidad = "Oliva";
$provincia = "Valencia";


$consulta = $conexion->prepare("UPDATE clientes SET nombre = :nombre, localidad = :localidad,
 provincia = :provincia WHERE dni = :dni");
$rows = $consulta->execute(array(
    ":dni" => $dni,
    ":nombre" => $nombre,
    ":localidad" => $localidad,
    ":provincia" => $provincia
));
if($rows > 0){
    echo "Se ha actualizado correctamente";
    header("Location: listado.php");
}

?>