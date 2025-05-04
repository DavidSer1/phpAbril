<?php 



 abstract class Producto{

    protected $nombre;
    protected $precio;
    
    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getNombre() {
        return $this->nombre;
    }

  

    abstract public function getPrecio();

    public function __toString() {
        return "$this->nombre - Precio: $this->precio €";
    }
    }


?>