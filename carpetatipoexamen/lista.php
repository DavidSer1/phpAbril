<?php 
include 'clienteclass.php'; 
$cliente= David::obtenertodo();

echo "<a href='nouclient.php'>Crear</a>";
?>
<table>
    <tr>
        <th>DNI</th>
        <th>NOMBRE</th>
        <th>DIRECCION</th>
        <th>LOCALIDAD</th>
        <th>PROVINCIA</th>
        <th>TELEFONO</th>
        <th>EMAIL</th>
        <th>Acciones</th>
    </tr>
    <?php foreach($cliente as  $client):  ?>
    <tr>
     
    <td> <?php echo $client->dni; ?> </td>

<td> <?php echo $client->nombre ?></td>
<td> <?php echo $client->direccion ?></td>
<td> <?php echo $client->localidad ?></td>
<td> <?php echo $client->provincia ?></td>
<td> <?php echo $client->telefono ?></td>
<td> <?php echo $client->email ?></td>
<td> <?php echo "<a href='editar.php?dni={$client->dni}'>Editar</a>"; ?>
<?php echo "<a href='eliminar.php?dni={$client->dni}'>Eliminar</a>"; ?>
 
<?php echo "<a href='editar.php?dni=$client->dni '>Eliminar</a>"; ?> </td>
           
    </tr>
    <?php endforeach; ?>
</table>