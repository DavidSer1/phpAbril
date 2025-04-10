<?php


$precio_kg = ["manzanas" => 2.50, "uvas" => 3.80, "tomates" => 1.90, "patatas" =>
1.20, "judias" => 3.50];

$lista_compra = ["manzanas" => 2.0, "uvas" => 1.5, "tomates" => 2.3, "patatas" =>
3.0, "judias" => 1.21];


foreach ($lista_compra as $producto => $peso) {
   
    $coste = $precio_kg[$producto] * $peso;
    
    echo "El coste de " . $producto . "      es:       ". number_format($coste,2)  . "€ <br>";
    $total += $coste;
 
}

echo "El total de todos los productos  es" . number_format($total ,2) . "€"; 


?>