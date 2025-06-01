<?php

function obtenerConexion() {
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=clientesdavid", "jefe", "jefe");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexion;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>