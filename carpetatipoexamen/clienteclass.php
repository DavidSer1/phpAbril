<?php  

class David{
    public $dni;
    public $nombre;
    public $direccion;
    public $localidad;
    public $provincia;
    public $telefono;
    public $email;

    public static function obtenertodo(){
        include 'funciones.php';
        $conexion = obtenerConexion();
     
        $consulta = $conexion->query("SELECT * from clientes");
        $clientes = [];
        foreach($consulta as $pepe){
            $cliente = new David();
            $cliente->dni = $pepe['dni'];
            $cliente->nombre = $pepe['nombre'];
            $cliente->direccion = $pepe['direccion'];
            $cliente->localidad = $pepe['localidad'];
            $cliente->provincia = $pepe['provincia'];
            $cliente->telefono = $pepe['telefono'];
            $cliente->email = $pepe['email'];
            $clientes[] = $cliente;
        }
        return $clientes;

            }
}

?>