<?php
include 'funciones.php'; 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conexion = obtenerconexion();

    $dni = $_POST['dni'] ;
    $password = $_POST['password'] ;

    $sql = "SELECT * FROM clientes WHERE dni = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->execute([$dni]);

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

 if ($usuario) {
    if (password_verify($password, $usuario['password'])) {
        $_SESSION['dni'] = $usuario['dni'];
        $_SESSION['permisos'] = $usuario['permisos']; 

        header("Location: index.php");
        exit;
    } else {
        echo "Contraseña incorrecta.";
    }
}
 else {
        echo "Usuario no encontrado.";
    }
}
?>

<form action="login.php" method="POST">
  <label for="dni">DNI:</label>
  <input type="text" id="dni" name="dni" required>

  <br>

  <label for="password">Contraseña:</label>
  <input type="password" id="password" name="password" required>

  <br>

  <button type="submit">Iniciar sesión</button>
</form>
