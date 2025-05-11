<?php  
include "funciones.php";

$conexion = obtenerconexion(); 
$dni = "5555553F";

$valor = $conexion->prepare("delete from clientes where dni = :dni");
$rows = $valor->execute(array(':dni' => $dni));

if($rows > 0){
    echo "Borrado correctamente";
      header("Location: index.php");
}

?>