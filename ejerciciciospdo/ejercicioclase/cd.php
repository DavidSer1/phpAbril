<?php


class CD extends Producto {
    private $duracion;
    private $genero;

    public function __construct($nombre, $precio, $duracion, $genero) {
        parent::__construct($nombre, $precio);
        $this->duracion = $duracion;
        $this->genero = $genero;
    }

    public function getPrecio() {
        return 1;
    }

    public function getDuracion() {
        return $this->duracion;
    }

    public function setDuracion($duracion) {
        $this->duracion = $duracion;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function __toString() {
        return parent::__toString() . " - Duración: $this->duracion min - Género: $this->genero";
    }
}
