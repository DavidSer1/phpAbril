<?php 

function obtenerconexion(){
    try{
        $conexion = new PDO("mysql:host=localhost;dbname=clientes_db", "jefe", "jefe");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conexion;
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

}
function borrar($dni){
    try{ 
    $conexion = obtenerconexion();
    
    $valor = $conexion->prepare("delete from clientes where dni = :dni");
    $rows = $valor->execute(array(':dni' => $dni));
    
    if($rows > 0){
        return true;
    }
    else{
        return false;
    }
    //mejorable de esta forma: return($rows>0)

    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}


function nuevocliente($dni,$nombre,$direccion,$localidad, $provincia,$telefono ,$email,$password){
    try{ 
    $conexion = obtenerconexion();
    $password_hash = password_hash($password, PASSWORD_DEFAULT);


    $consultas = $conexion->prepare("INSERT INTO clientes (dni, nombre, direccion, localidad, provincia, telefono, email, password) 
                                     VALUES (:dni, :nombre, :direccion, :localidad, :provincia, :telefono, :email, :password)");


  $rows = $consultas->execute(array(
        ":dni" => $dni,
        ":nombre" => $nombre,
        ":direccion" => $direccion,
        ":localidad" => $localidad,
        ":provincia" => $provincia,
        ":telefono" => $telefono,
        ":email" => $email,
        ":password" => $password_hash

    ));


    if ($rows == 1) {
      
     return true;
    } else {
  return false;
    }
 } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

}

function editarcliente($dni,$nombre,$direccion,$localidad, $provincia,$telefono ,$email){
try{
    $conexion = obtenerconexion();
    $consulta = $conexion->prepare("UPDATE clientes
                                    SET nombre = :nombre, direccion = :direccion,  
                                    localidad = :localidad,  provincia = :provincia, telefono = :telefono,   
                                    email = :email WHERE dni = :dni");
  
    $rows = $consulta->execute(array(
        ":dni" => $dni,
        ":nombre" => $nombre,
        ":direccion" => $direccion,
        ":localidad" => $localidad,
        ":provincia" => $provincia,
        ":telefono" => $telefono,
        ":email" => $email
      
    ));
   
    if($rows > 0){
     return true;
    } else {
        return false;
    }
   

}
catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

}





?>