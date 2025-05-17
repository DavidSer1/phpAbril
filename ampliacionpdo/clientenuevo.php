<?php 
include 'funciones.php'; 
include 'redireccionlogin.php';
$conexion = obtenerconexion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $localidad = $_POST['localidad'];
    $provincia = $_POST['provincia'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $consultas = $conexion->prepare("INSERT INTO clientes (dni, nombre, direccion, localidad, provincia, telefono, email, password) 
                                     VALUES (:dni, :nombre, :direccion, :localidad, :provincia, :telefono, :email, :password)");

    $rows = $consultas->execute(array(
        ":dni" => $dni,
        ":nombre" => $nombre,
        ":direccion" => $direccion,
        ":localidad" => $localidad,
        ":provincia" => $provincia,
        ":telefono" => $telefono,
        ":email" => $email,
        ":password" => $password_hash
    ));

    if ($rows == 1) {
        echo "Se ha insertado correctamente";
        header("Location: index.php");
    } else {
        echo "No se ha insertado correctamente";
    }
}
?>

  <form action="clientenuevo.php" method="POST">
    <div>
      <label for="dni">DNI:</label><br>
      <input type="text" id="dni" name="dni" maxlength="9" required>
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
  <label for="password">Contraseña:</label><br>
  <input type="password" id="password" name="password" maxlength="255" required>
</div>

    <div>
      <button type="submit">Enviar</button>
    </div>
  </form>