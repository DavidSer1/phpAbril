<?php

class Juego extends Producto {
    private $plataforma;
    private $genero;

    public function __construct($nombre, $precio, $plataforma, $genero) {
        parent::__construct($nombre, $precio);
        $this->plataforma = $plataforma;
        $this->genero = $genero;
    }

    public function getPrecio() {
        return 3;
    }

    public function getPlataforma() {
        return $this->plataforma;
    }

    public function setPlataforma($plataforma) {
        $this->plataforma = $plataforma;
    }

    public function getGenero() {
        return $this->genero;
    }



    public function __toString() {
        return parent::__toString() . " - Plataforma: $this->plataforma - Género: $this->genero";
    }
}
