<?php  
if(isset($_GET['dni'])){
    $dni = $_GET['dni'];
    include 'funciones.php'; 
    $conexion = obtenerConexion();
    $consulta = $conexion->prepare("DELETE FROM clientes WHERE dni = :dni");
    $rows = $consulta->execute([':dni' => $dni]);
    if($rows == 1) {
        echo "Cliente eliminado correctamente.";
        header("Location: lista.php");
    } else {
        echo "Error al eliminar el cliente.";
    }
}


?>