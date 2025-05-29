<?php 

include 'funciones.php'; 
include 'redireccionlogin.php';
$sesionpermiso = $_SESSION['permisos'] ;
function tipopermiso() {
  if ($_SESSION['permisos'] == 1) {
    return "Cliente";
  } elseif ($_SESSION['permisos'] == 2) {
    return "Empleado";
  } elseif ($_SESSION['permisos'] == 3) {
    return "Administrador";
  }

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $dni= $_POST['dni'];
  $nombre= $_POST['nombre'];
  $direccion= $_POST['direccion'];
  $localidad= $_POST['localidad'];
  $provincia= $_POST['provincia'];
  $telefono= $_POST['telefono'];
  $email= $_POST['email'];
  $permisos = $_POST['permisos'];



 
  $conexion = obtenerconexion();
  $consulta = $conexion->prepare("UPDATE clientes
                                  SET nombre = :nombre, direccion = :direccion,  
                                  localidad = :localidad,  provincia = :provincia, telefono = :telefono,   
                                  email = :email, permisos = :permisos WHERE dni = :dni");

  $rows = $consulta->execute(array(
      ":dni" => $dni,
      ":nombre" => $nombre,
      ":direccion" => $direccion,
      ":localidad" => $localidad,
      ":provincia" => $provincia,
      ":telefono" => $telefono,
      ":email" => $email,
      ":permisos" => $permisos
  ));


  if($rows > 0){
      header("Location: index.php?actualizado=ok");
  }
  else{
    header("Location: index.php?actualizado=error");
  }


}
else{

$conexion =  obtenerconexion();


if (isset($_GET['dnis'])) {
    $dnis = $_GET['dnis'];

}

else {
    header("Location: index.php");
    exit();
}

$consulta2 = $conexion->prepare("SELECT * FROM clientes WHERE dni = :dnis");


$consulta2->execute([':dnis' => $dnis]);

$cliente = $consulta2->fetch(PDO::FETCH_OBJ);


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

    
    <?php if ($sesionpermiso < 2): ?>
      <div>
      <label for="permiso">Permisos:</label><br>
 <input type="text" id="permiso" name="permisos" readonly value="<?php echo $cliente->permisos; ?>">
<?php  tipopermiso();?>
      </div>
    <?php endif; ?>

    <?php if ($sesionpermiso == 3): ?>
      <div>
    <label for="permiso">Permisos:</label><br>
    <select id="permiso" name="permisos">
    <?php if ($sesionpermiso == 1): ?>
      <option value="1" >Cliente</option>
      <?php endif; ?>
      <?php if ($sesionpermiso == 2): ?>
      <option value="2" >Empleado</option>
      <?php endif; ?>
      <?php if ($sesionpermiso == 3): ?>
          <option value="3" >Administrador</option>
          <?php endif; ?>
    </select>
    </div>
<?php endif; ?>

    <div>
      <button type="submit">Enviar</button>
    </div>
  </form>

  <?php
}

?>