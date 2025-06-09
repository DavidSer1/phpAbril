<?php 


include 'funciones.php'; 
include 'clienteclass.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni= $_POST['dni'];
    $nombre= $_POST['nombre'];
    $direccion= $_POST['direccion'];
    $localidad= $_POST['localidad'];
    $provincia= $_POST['provincia'];
    $telefono= $_POST['telefono'];
    $email= $_POST['email'];

    if(editarcliente($dni, $nombre, $direccion, $localidad, $provincia, $telefono, $email)){
        $mensaje = "Cliente editado correctamente.";
    } else {
        $mensaje = "Error al editar el cliente.";
    }

    header("Location: index.php?mensaje=" . $mensaje);
    exit();
}


if (!isset($_GET['dnis'])) {
    header("Location: index.php");
    exit();
}

$dnis = $_GET['dnis'];


$cliente = Clienteclass::obtenerPorDni($dnis);
if($cliente){
  $mensaje = "Cliente encontrado.";
}
else {
  $mensaje = "Cliente no encontrado.";

}
echo $mensaje;



?>

<form action="editarcliente.php" method="POST">
    <div>
        <label for="dni">DNI:</label><br>
        <input type="text" id="dni" name="dni" readonly maxlength="9"  value="<?php echo $cliente->dni; ?>">
    </div>

    <div>
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" maxlength="30" required value="<?php echo $cliente->nombre; ?>">
    </div>

    <div>
        <label for="direccion">Dirección:</label><br>
        <input type="text" id="direccion" name="direccion" maxlength="30" required value="<?php echo $cliente->direccion; ?>">
    </div>

    <div>
        <label for="localidad">Localidad:</label><br>
        <input type="text" id="localidad" name="localidad" maxlength="30" required value="<?php echo $cliente->localidad; ?>">
    </div>

    <div>
        <label for="provincia">Provincia:</label><br>
        <input type="text" id="provincia" name="provincia" maxlength="30" value="<?php echo $cliente->provincia; ?>">
    </div>

    <div>
        <label for="telefono">Teléfono:</label><br>
        <input type="tel" id="telefono" name="telefono" maxlength="30" value="<?php echo $cliente->telefono; ?>">
    </div>

    <div>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" maxlength="30" value="<?php echo $cliente->email; ?>">
    </div>

    <div>
        <button type="submit">Enviar</button>
    </div>
</form>
