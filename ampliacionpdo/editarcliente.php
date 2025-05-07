<?php 

?>
  <form>
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
      <button type="submit">Enviar</button>
    </div>
  </form>