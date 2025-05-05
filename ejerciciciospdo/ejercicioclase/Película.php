<?php
include "Producto.php";

class Pelicula extends Producto {
    private $idioma;
    private $duracion;
    private $genero;

    public function __construct($nombre, $precio, $idioma, $duracion, $genero) {
        parent::__construct($nombre, $precio);
        $this->idioma = $idioma;
        $this->duracion = $duracion;
        $this->genero = $genero;
    }

    public function getPrecio() {
        return 2;
    }

    public function getIdioma() {
        return $this->idioma;
    }

    public function getDuracion() {
        return $this->duracion;
    }

    public function getGenero() {
        return $this->genero;
    }


    public function __toString() {
        return parent::__toString() . " - Idioma: $this->idioma - Duración: $this->duracion min - Género: $this->genero";
    }

}
