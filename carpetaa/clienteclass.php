<?php 

class pepe{
    public $dni;
     public $nombre;
      public $direccion;
       public $localidad;
        public $provincia;
        
        public $telefono;
         public $email;
         public static function obtenerclientes(){
            include 'funciones.php';
            $conexion = obtenerConexion();
            $consulta = $conexion->query("SELECT * from clientes ");
            
$clientes = [];
foreach($consulta as $cliente){
$clientep = new pepe();
$clientep->dni = $cliente['dni'];
$clientep->nombre = $cliente['nombre'];
$clientep->direccion = $cliente['direccion'];
$clientep->localidad = $cliente['localidad'];
$clientep->provincia = $cliente['provincia'];
$clientep->telefono = $cliente['telefono'];
$clientep->email = $cliente['email'];
$clientes[] = $clientep;

}
return $clientes;

         }
}










?>