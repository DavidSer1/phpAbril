<?php
include 'clienteclass.php'; 

    $clientes = Clienteclass::obtenerTodos();
if(isset($_GET['mensaje'])){
    $mensaje = $_GET['mensaje'];
    echo "<script>alert('$mensaje');</script>";
}

    echo "<a href='clientenuevo.php'><button>Crear</button></a>";



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
 
                    <th>Eliminar</th>
            
                    <th>Modificar</th>
              
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
              
                <tr>
                    <td><?=$cliente->dni ?></td>
                    <td><?=$cliente->nombre ?></td>
                    <td><?=$cliente->direccion ?></td>
                    <td><?= $cliente->localidad ?></td>
                    <td><?=$cliente->provincia ?></td>
                    <td><?= $cliente->telefono ?></td>
                    <td><?= $cliente->email ?></td>

                
                    <td>
                        <a href="borrarcliente.php?dni=<?= $cliente->dni ?>">
                            <button>Eliminar</button>
                        </a>
                    </td>
                
                    <td>
                        <a href="editarcliente.php?dnis=<?= $cliente->dni ?>">
                            <button>Modificar</button>
                        </a>
                    </td>
                  
                </tr>
               
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No hay clientes en la base de datos.</p>
<?php endif; ?>
