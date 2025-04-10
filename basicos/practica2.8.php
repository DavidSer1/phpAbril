<?php

define("precio_manzanas", 2.50);
define("precio_uvas", 3.80);
define("precio_tomates", 1.90);
define("precio_patatas", 1.20);
define("precio_judias", 3.50);

$peso_manzanas = 2.0;
$peso_uvas = 1.5;
$peso_tomates = 2.3;
$peso_patatas = 3.0;
$peso_judias = 1.21;

$coste_manzanas = precio_manzanas * $peso_manzanas;
$coste_uvas = precio_uvas * $peso_uvas;
$coste_tomates = precio_tomates * $peso_tomates;
$coste_patatas = precio_patatas * $peso_patatas;
$coste_judias = precio_judias * $peso_judias;

$total = $coste_manzanas + $coste_uvas + $coste_tomates + $coste_patatas + $coste_judias;

echo "Coste de las manzanas: " . number_format($coste_manzanas, 2) . " €<br>";
echo "Coste de las uvas: " . number_format($coste_uvas, 2) . " €<br>";
echo "Coste de los tomates: " . number_format($coste_tomates, 2) . " €<br>";
echo "Coste de las patatas: " . number_format($coste_patatas, 2) . " €<br>";
echo "Coste de las judías: " . number_format($coste_judias, 2) . " €<br>";
echo "Coste total de todo: " . number_format($total, 2) . " €";
?>