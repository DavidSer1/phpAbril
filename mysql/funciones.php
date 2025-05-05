<?php  


function obtenerconexion(){
    try{
        $conexion = new PDO("mysql:host=localhost;dbname=pdo", "pdo", "pdo");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conexion;
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

}



?>