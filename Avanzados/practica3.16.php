
<?php
$opciones = array("piedra", "papel", "tijeras");
if (isset($_REQUEST["jugada"] )) {
$mijugada = $opciones[rand(0, 2)];
if ($_REQUEST["jugada"] == $mijugada) {
$resultado = "Empates.";
} else if (($_REQUEST["jugada"]=="piedra" && $mijugada == "tijeras")
||
($_REQUEST["jugada"] == "tijeras" && $mijugada == "papel")||
($_REQUEST["jugada"] == "papel" && $mijugada == "piedra")) {
$resultado = "Tu ganas.";
} else {
$resultado = "Gano yo.";
}
}
?>
<html>
<head>
<title>Piedra, papel o tijera</title>
</head>
<body>
<?php
echo isset($_REQUEST["jugada"])?"Has elegido {$_REQUEST['jugada']}, yo
he elegido $mijugada $resultado <br>¿Quieres jugar otra vez?<br>":"";
?>
<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
Piedra<input type="radio" name="jugada" value="piedra">
Papel<input type="radio" name="jugada" value="papel">
Tijera<input type="radio" name="jugada" value="tijeras">

<input type="hidden" name="ganadas" value="<?= $_REQUEST["ganadas"] ?>">
<input type="hidden" name="empatadas" value="<?= $_REQUEST["empatadas"] ?>">
<input type="hidden" name="perdidas" value="<?= $_REQUEST["perdidas"] ?>">

<input type="submit" value="Jugar">
</form>
</body>
</head>