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


echo "Productos con precio menor a 1.50 €/kg:<br>";

if (precio_manzanas < 1.50) {
    echo "- Manzanas<br>";
}
else if (precio_uvas < 1.50) {
    echo "- Uvas<br>";
}
else if (precio_tomates < 1.50) {
    echo "- Tomates<br>";
}
else if (precio_patatas < 1.50) {
    echo "- Patatas<br>";
}
else if (precio_judias < 1.50) {
    echo "- Judías<br>";
}

?>
