<?php 
class Clienteclass {
    public $dni;
    public $nombre;
    public $direccion;
    public $localidad;
    public $provincia;
    public $telefono;
    public $email;

    public static function obtenerTodos() {
        include 'funciones.php';
        $conexion = obtenerConexion();
        
        $resultado = $conexion->query("SELECT * FROM clientes");
        $clientes = [];

        foreach ($resultado as $fila) {
            $cliente = new Clienteclass();
            $cliente->dni = $fila['dni'];
            $cliente->nombre = $fila['nombre'];
            $cliente->direccion = $fila['direccion'];
            $cliente->localidad = $fila['localidad'];
            $cliente->provincia = $fila['provincia'];
            $cliente->telefono = $fila['telefono'];
            $cliente->email = $fila['email'];

            $clientes[] = $cliente;
        }

        return $clientes;
    }
        public static function obtenerPorDni($dni) {
    
        $conexion = obtenerConexion();

        $sql = "SELECT * FROM clientes WHERE dni = :dni LIMIT 1";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([':dni' => $dni]);
        $fila = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($fila) {
            $cliente = new Clienteclass();
            $cliente->dni = $fila['dni'];
            $cliente->nombre = $fila['nombre'];
            $cliente->direccion = $fila['direccion'];
            $cliente->localidad = $fila['localidad'];
            $cliente->provincia = $fila['provincia'];
            $cliente->telefono = $fila['telefono'];
            $cliente->email = $fila['email'];

            return $cliente;
        }

        return null;
    }
}
?>
