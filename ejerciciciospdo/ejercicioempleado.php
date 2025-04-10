<?php 

class Empleado {
    private $nombre;

    private $sueldo;

    public function __construct($nombre ,$sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }
  public  function inicializar(){

        if($sueldo > 3000){
        echo "El sueldo es mayor a 3000";
        } 
        
         else {
        echo "No pago impuestos";
        
        }
        }
        
        function  imprimir(){
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Sueldo: " . $this->sueldo . "<br>";
        }

}


$a = new Empleado("Juan", 3000);
$a->inicializar();
$a->imprimir();
$b = new Empleado("Ana", 4000);
$b->inicializar();
$b->imprimir();


?>