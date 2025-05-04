<?php 

class Cliente{

    private $nombre;
    private $productosAlquilados = [];
    
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
    public function getProductosAlquilados() {
        return $this->productosAlquilados;
    }
    public function alquilarProducto(Producto $producto) {
        $this->productosAlquilados[] = $producto;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function __toString() {
        $info = "Cliente: $this->nombre\nProductos alquilados:\n";
        if (count($this->productosAlquilados) > 0) {
            foreach ($this->productosAlquilados as $producto) {
                $info .= "- $producto\n";
            }
        } else {
            $info .= "No tiene productos alquilados.\n";
        }
        return $info;
    }
    }
    
?>