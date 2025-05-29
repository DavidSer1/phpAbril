<?php
include 'funciones.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $localidad = $_POST['localidad'];
    $provincia = $_POST['provincia'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    $conexion = obtenerConexion();
    $consulta = $conexion->prepare("UPDATE clientes SET nombre = :nombre, direccion = :direccion, localidad = :localidad, provincia = :provincia, telefono = :telefono, email = :email WHERE dni = :dni");

    $rows = $consulta->execute([
        ':dni' => $dni,
        ':nombre' => $nombre,
        ':direccion' => $direccion,
        ':localidad' => $localidad,
        ':provincia' => $provincia,
        ':telefono' => $telefono,
        ':email' => $email
    ]);

    if ($rows == 1) {
        header("Location: lista.php");
        exit;
    } else {
        echo "Error al actualizar el cliente.";
    }

} else 
if (isset($_GET['dni'])) {
    $dni = $_GET['dni'];
    $conexion = obtenerConexion();
    $consulta = $conexion->prepare("SELECT * FROM clientes WHERE dni = :dni");
    $consulta->execute([':dni' => $dni]);
    $cliente = $consulta->fetch(PDO::FETCH_OBJ); 

}
?>

<form action="editar.php" method="POST">
    <label for="dni">DNI:</label>
    <input type="text" id="dni" name="dni" value="<?php echo $cliente->dni; ?>" readonly><br>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $cliente->nombre; ?>" required><br>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" value="<?php echo $cliente->direccion; ?>"><br>

    <label for="localidad">Localidad:</label>
    <input type="text" id="localidad" name="localidad" value="<?php echo $cliente->localidad; ?>"><br>

    <label for="provincia">Provincia:</label>
    <input type="text" id="provincia" name="provincia" value="<?php echo $cliente->provincia; ?>"><br>

    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" value="<?php echo $cliente->telefono; ?>"><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $cliente->email; ?>"><br>

    <input type="submit" value="Actualizar Cliente">
</form>



