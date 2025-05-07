<?php
include 'clienteclass.php'; 

$clientes = Clienteclass::obtenerTodos();
echo " <a href=clientenuevo.php> <button>Crear</button> </a>";
if (count($clientes) > 0): ?>
    <table>
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
                    <td><?php echo $cliente->dni; ?></td>
                    <td><?php echo $cliente->nombre; ?></td>
                    <td><?php echo $cliente->direccion; ?></td>
                    <td><?php echo $cliente->localidad; ?></td>
                    <td><?php echo $cliente->provincia; ?></td>
                    <td><?php echo $cliente->telefono; ?></td>
                    <td><?php echo $cliente->email; ?></td>
                    <td><?php  echo " <a href=borrarcliente.php> <button>Eliminar</button> </a>"; ?></td>
                    <td><?php   echo " <a href=editarcliente.php?$cliente->dni> <button>Modificar</button> </a>"; ?></td>
                  
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No hay clientes en la base de datos.</p>
<?php endif; ?>
