<?php
include 'clienteclass.php'; 
include 'redireccionlogin.php';

$permiso = $_SESSION['permisos'] ;
$dniUsuario = $_SESSION['dni'] ;

if ($permiso == 1) {
    $clientes = [Clienteclass::obtenerPorDni($dniUsuario)];
} else {

    $clientes = Clienteclass::obtenerTodos();
}
if ($permiso == 3) {
    echo "<a href='clientenuevo.php'><button>Crear</button></a>";
} 

echo "<a href='logout.php'><button>Cerrar sesión</button></a>";

if (count($clientes) > 0): ?>
    <table border="1">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Localidad</th>
                <th>Provincia</th>
                <th>Teléfono</th>
                <th>Email</th>
                <?php if ($permiso == 3): ?>
                    <th>Eliminar</th>
                      <?php endif; ?>
                    <th>Modificar</th>
              
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
                <?php if ($cliente): ?>
                <tr>
                    <td><?=$cliente->dni ?></td>
                    <td><?=$cliente->nombre ?></td>
                    <td><?=$cliente->direccion ?></td>
                    <td><?= $cliente->localidad ?></td>
                    <td><?=$cliente->provincia ?></td>
                    <td><?= $cliente->telefono ?></td>
                    <td><?= $cliente->email ?></td>

                    <?php if ($permiso == 3): ?>
                    <td>
                        <a href="borrarcliente.php?dni=<?= $cliente->dni ?>">
                            <button>Eliminar</button>
                        </a>
                    </td>
                      <?php endif; ?>
                    <td>
                        <a href="editarcliente.php?dnis=<?= $cliente->dni ?>">
                            <button>Modificar</button>
                        </a>
                    </td>
                  
                </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No hay clientes en la base de datos.</p>
<?php endif; ?>
