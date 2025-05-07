<?php 

function obtenerconexion(){
    try{
        $conexion = new PDO("mysql:host=localhost;dbname=clientes_db", "jefe", "jefe");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conexion;
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

}

?>