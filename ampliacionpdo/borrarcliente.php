<?php 
include 'funciones.php'; 
if (isset($_GET['dni'])) {
    $conexion = obtenerconexion(); 
    $dni = $_GET['dni'];
$valor = $conexion->prepare("delete from clientes where dni = :dni");
$rows = $valor->execute(array(':dni' => $dni));
if($rows > 0){
    echo "Borrado correctamente";
       header("Location: index.php");
}
}
?>