<?php 
include 'clienteclass.php'; 
$cliente= David::obtenertodo();

echo "";

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
           
    </tr>
    <?php endforeach; ?>
</table>