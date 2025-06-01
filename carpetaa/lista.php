<?php 

include 'clienteclass.php';

$david = pepe::obtenerclientes();


echo "<a href=nou.php>Crear</a>"

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
</tr>
<tr>
    <?php foreach ($david as $clientes){ ?>
<td> <?php echo $clientes->dni ?>  </td>
<td> <?php echo $clientes->nombre ?>  </td>
<td> <?php echo $clientes->direccion ?>  </td>
<td> <?php echo $clientes->localidad ?>  </td>
<td> <?php echo $clientes->provincia ?>  </td>
<td> <?php echo $clientes->telefono ?>  </td>
<td> <?php echo $clientes->email ?>  </td>
<td> <?php echo "<a href=editar.php?dni=$clientes->dni >Editar</a>";  ?>  </td>

</tr>
<?php } ?>
</table>