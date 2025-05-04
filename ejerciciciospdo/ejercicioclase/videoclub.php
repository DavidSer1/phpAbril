<?php 

class Videoclub{

private $nombre;

private $clientes = []; 
private $productos = []; 


public function __construct($nombre) {
    $this->nombre = $nombre;
}
// Dentro de Videoclubclass.php
public function getClientes() {
return $this->clientes;
}
public function getProductos() {
return $this->productos;
}
public function agregarCliente(Cliente $cliente) {
    $this->clientes[] = $cliente;
}

public function agregarProducto(Producto $producto) {
    $this->productos[] = $producto;
}

public function mostrarClientes() {
    foreach ($this->clientes as $cliente) {
        echo $cliente ;
    }
}

public function mostrarProductos() {
    foreach ($this->productos as $producto) {
        echo $producto ;
    }
}
public function alquilarProducto(Cliente $cliente, Producto $producto) {
    $cliente->alquilarProducto($producto);
}

}



?>