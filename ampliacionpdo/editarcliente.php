<?php 

include 'funciones.php'; 

    $conexion =  obtenerconexion();
    $consulta2 = $conexion->query("SELECT * FROM clientes");
$clientes = $consulta2->fetchAll(PDO::FETCH_OBJ);
if (isset($_GET['dnis'])) {
    $dnis = $_GET['dnis'];

}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
$dni= $_POST['dni'];
$nombre= $_POST['nombre'];
$direccion= $_POST['direccion'];
$localidad= $_POST['localidad'];
$provincia= $_POST['provincia'];
$telefono= $_POST['telefono'];
$email= $_POST['email'];
$dnis = $_POST['dnis']; 

$consulta = $conexion->prepare("UPDATE clientes SET dni = :dni, nombre = :nombre, direccion = :direccion,  localidad = :localidad,  provincia = :provincia, telefono = :telefono,   email = :email  WHERE dni = :dnis");

$rows = $consulta->execute(array(
    ":dni" => $dni,
    ":nombre" => $nombre,
    ":direccion" => $direccion,
    ":localidad" => $localidad,
    ":provincia" => $provincia,
     ":telefono" => $telefono,
     ":email" => $email,
       ":dnis" => $dnis
));
if($rows > 0){
    echo "Se ha actualizado correctamente";
    header("Location: index.php");
}

echo $dni;
}



?>
  <form action="editarcliente.php" method="POST">
    <div>

    <label for="dni">DNI:</label><br>
            <input type="text" id="dni" name="dni" maxlength="9" required value="<?php echo htmlspecialchars($cliente['dni']); ?>">
    </div>

    <div>
      <label for="nombre">Nombre:</label><br>
      <input type="text" id="nombre" name="nombre" maxlength="30" required>
    </div>

    <div>
      <label for="direccion">Dirección:</label><br>
      <input type="text" id="direccion" name="direccion" maxlength="30" required>
    </div>

    <div>
      <label for="localidad">Localidad:</label><br>
      <input type="text" id="localidad" name="localidad" maxlength="30" required>
    </div>

    <div>
      <label for="provincia">Provincia:</label><br>
      <input type="text" id="provincia" name="provincia" maxlength="30" required>
    </div>

    <div>
      <label for="telefono">Teléfono:</label><br>
      <input type="tel" id="telefono" name="telefono" maxlength="30" required>
    </div>

    <div>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" maxlength="30" required>
    </div>

    <div>
      <button type="submit">Enviar</button>
    </div>
  </form>