<?php  

class Menu{
private $opciones = array();

    function cargaropciones($opcion){
        $this->opciones = $opcion;
    }

    function cargaropcionesIndividuales($opcion){
        $this->opciones[] = $opcion;
    }

    function mostraropcionesHorizontal(){
        echo "<h1>Menu horizantal </h1>";
        foreach($this->opciones as $opcion){
            echo $opcion . " - ";
        }
    }

    function mostraropcionesVertical(){
        echo "<h1>Menu vertical</h1>";
    
        foreach($this->opciones as $opcion){
            echo $opcion . "<br>";
        }
    }
}

$a = new Menu();
$a->cargaropciones(["Opción1", "Opción2", "Opción3"]);
$a->cargaropcionesIndividuales("Contacto");

//$a->mostraropcionesHorizontal();

$a->mostraropcionesVertical();


?>