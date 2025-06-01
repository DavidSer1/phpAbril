
<?php 


if($_SERVER['REQUEST_METHOD'] == "POST"){
 $dni = $_POST['dni'];
 $nombre = $_POST['nombre'];
 $direccion = $_POST['direccion'];
 $localidad = $_POST['localidad'];
 $provincia = $_POST['provincia'];
 $telefono = $_POST['telefono'];
 $email = $_POST['email'];
include 'funciones.php';
$conexion = obtenerConexion();
$consulta = $conexion->prepare("insert into clientes (dni,nombre,direccion,localidad,provincia,telefono,email) VALUES (:dni,:nombre,:direccion,:localidad,:provincia,:telefono,:email)");
$row = $consulta->execute([":dni" => $dni,
":nombre" => $nombre,
":direccion" => $direccion,
":localidad" => $localidad,
":provincia" => $provincia,
":telefono" => $telefono,
":email" => $email

]);
if ($row) {
    header("Location: lista.php");
    exit();
}


}


?>





<form action="nou.php" method="POST">
    <label for="dni">DNI:</label>
    <input type="text" id="dni" name="dni" required><br>
    
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br>
    
    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion"><br>
    
    <label for="localidad">Localidad:</label>
    <input type="text" id="localidad" name="localidad"><br>
    
    <label for="provincia">Provincia:</label>
    <input type="text" id="provincia" name="provincia"><br>
    
    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono"><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br>
    
    <input type="submit" value="Crear Cliente">
    </form>