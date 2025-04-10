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

echo "Comparación de precios entre productos:<br>";

if (precio_manzanas < precio_uvas) {
    echo "Las manzanas son más baratas que las uvas.<br>";
} else {
    echo "Las uvas son más baratas que las manzanas.<br>";
}

if (precio_tomates < precio_judias) {
    echo "Los tomates son más baratos que las judías.<br>";
} else {
    echo "Las judías son más baratas que los tomates.<br>";
}

if (precio_patatas < precio_manzanas) {
    echo "Las patatas son más baratas que las manzanas.<br>";
} else {
    echo "Las manzanas son más baratas que las patatas.<br>";
}

if (precio_uvas < precio_tomates) {
    echo "Las uvas son más baratas que los tomates.<br>";
} else {
    echo "Los tomates son más baratos que las uvas.<br>";
}

if (precio_judias < precio_patatas) {
    echo "Las judías son más baratas que las patatas.<br>";
} else {
    echo "Las patatas son más baratas que las judías.<br>";
}

?>
