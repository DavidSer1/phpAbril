<?php  

include "funciones.php";

$conexion = obtenerconexion(); 
$dni = "5555555F";
$nombre = "Juan";
$direccion = "Pérez";
$localidad = "Oliva";
$provincia = "Valencia";
$telefono = "601284764";
$email = "davsermel@gmail.com";

$consultas = $conexion->prepare("INSERT INTO clientes (dni, nombre, direccion, localidad, provincia, telefono, email) VALUES (:dni, :nombre, :direccion, :localidad, :provincia, :telefono, :email)");
$rows = $consultas->execute(array(
    ":dni" => $dni,
    ":nombre" => $nombre,
    ":direccion" => $direccion,
    ":localidad" => $localidad,
    ":provincia" => $provincia,
    ":telefono" => $telefono,
    ":email" => $email
));
header("Location: listado.php");
if($rows == 1){
    echo "Se ha insertado correctamente";
    header("Location: listado.php");
}else{
    echo "No se ha insertado correctamente";
}

?>
