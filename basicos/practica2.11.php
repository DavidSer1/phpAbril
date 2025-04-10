<?php

define("precio_manzanas", 2.50);
define("precio_uvas", 3.80);
define("precio_tomates", 1.90);
define("precio_patatas", 1.20);
define("precio_judias", 3.50);

$fruta = "patata"; 

switch ($fruta) {
    case "manzana":
        echo "El precio de la manzana es " . precio_manzanas . " €/kg<br>";
        break;
    case "uvas":
        echo "El precio de las uvas es " . precio_uvas . " €/kg<br>";
        break;
    case "tomate":
        echo "El precio del tomate es " . precio_tomates . " €/kg<br>";
        break;
    case "patata":
        echo "El precio de la patata es " . precio_patatas . " €/kg<br>";
        break;
    case "judia":
        echo "El precio de las judías es " . precio_judias . " €/kg<br>";
        break;
    default:
        echo "Producto no encontrado.<br>";
}

?>
