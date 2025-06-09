<?php 
include 'funciones.php'; 

if (isset($_GET['dni'])) {

    $dni = $_GET['dni'];
if(borrar($dni)){
    $mensaje="Cliente eliminado correctamente";
}
else{
   $mensaje="=Error al eliminar el cliente";
 
}

header("Location: index.php?mensaje=$mensaje");

}
?>