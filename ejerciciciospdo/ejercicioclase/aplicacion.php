<?php
include "videoclub.php";
include "Cliente.php";
include "Película.php";
include "cd.php";
include "juego.php";

// Crear el videoclub
$videoclub = new Videoclub("Mi VideoClub");

// Crear clientes
$cliente1 = new Cliente("Juan");
$cliente2 = new Cliente("Ana");
$cliente3 = new Cliente("Luis");
$cliente4 = new Cliente("Marta");
$videoclub->agregarCliente($cliente1);
$videoclub->agregarCliente($cliente2);
$videoclub->agregarCliente($cliente3);
$videoclub->agregarCliente($cliente4);

// Crear productos
$pelicula1 = new Pelicula("Pelicula 1", 2, "Español", 120, "Drama");
$pelicula2 = new Pelicula("Pelicula 2", 3, "Inglés", 100, "Comedia");
$pelicula3 = new Pelicula("Pelicula 3", 4, "Español", 140, "Acción");
$pelicula4 = new Pelicula("Pelicula 4", 5, "Francés", 90, "Romance");
$pelicula5 = new Pelicula("Pelicula 5", 2.5, "Español", 110, "Terror");

$cd1 = new CD("CD 1", 1.5, 60, "Rock");
$cd2 = new CD("CD 2", 2, 50, "Pop");
$cd3 = new CD("CD 3", 2.5, 45, "Jazz");
$cd4 = new CD("CD 4", 1, 70, "Clásica");
$cd5 = new CD("CD 5", 1.8, 40, "Reggaeton");

$juego1 = new Juego("Juego 1", 5, "PS5", "Acción");
$juego2 = new Juego("Juego 2", 4, "Xbox", "Aventura");
$juego3 = new Juego("Juego 3", 6, "PC", "Estrategia");
$juego4 = new Juego("Juego 4", 3.5, "PS5", "Deportes");
$juego5 = new Juego("Juego 5", 4.5, "Switch", "Plataformas");

// Agregar productos  videoclub
$productos = [$pelicula1, $pelicula2, $pelicula3, $pelicula4, $pelicula5, 
              $cd1, $cd2, $cd3, $cd4, $cd5,
              $juego1, $juego2, $juego3, $juego4, $juego5];
foreach ($productos as $producto) {
    $videoclub->agregarProducto($producto);
}

// Realizar alquileres
$videoclub->alquilarProducto($cliente1, $pelicula1);
$videoclub->alquilarProducto($cliente1, $pelicula2);
$videoclub->alquilarProducto($cliente2, $juego1);
$videoclub->alquilarProducto($cliente3, $cd1);
$videoclub->alquilarProducto($cliente4, $pelicula3);

// Mostrar clientes
echo "<h2>Clientes del Videoclub</h2>";
echo "<table border='1' style='width:30%; text-align:left;'>";
echo "<tr><th>Nombre del Cliente</th></tr>";
foreach ($videoclub->getClientes() as $cliente) {
    echo "<tr><td>" . $cliente->getNombre() . "</td></tr>";
}
echo "</table>";

echo "<hr>";

// Mostrar productos organizados
echo "<h2>Productos Disponibles en el Videoclub</h2>";

echo "<h3>Películas</h3>";
echo "<table border='1' style='width:80%; text-align:left;'>";
echo "<tr><th>Nombre</th><th>Precio (€)</th><th>Idioma</th><th>Duración</th><th>Género</th></tr>";
foreach ($videoclub->getProductos() as $producto) {
    if ($producto instanceof Pelicula) {
        echo "<tr>
            <td>{$producto->getNombre()}</td>
            <td>{$producto->getPrecio()}</td>
            <td>{$producto->getIdioma()}</td>
            <td>{$producto->getDuracion()} min</td>
            <td>{$producto->getGenero()}</td>
        </tr>";
    }
}
echo "</table>";


echo "<h3>CDs</h3>";
echo "<table border='1' style='width:80%; text-align:left;'>";
echo "<tr><th>Nombre</th><th>Precio (€)</th><th>Duración</th><th>Género</th></tr>";
foreach ($videoclub->getProductos() as $producto) {
    if ($producto instanceof CD) {
        echo "<tr>
            <td>{$producto->getNombre()}</td>
            <td>{$producto->getPrecio()}</td>
            <td>{$producto->getDuracion()} min</td>
            <td>{$producto->getGenero()}</td>
        </tr>";
    }
}
echo "</table>";


echo "<h3>Juegos</h3>";
echo "<table border='1' style='width:80%; text-align:left;'>";
echo "<tr><th>Nombre</th><th>Precio (€)</th><th>Plataforma</th><th>Género</th></tr>";
foreach ($videoclub->getProductos() as $producto) {
    if ($producto instanceof Juego) {
        echo "<tr>
            <td>{$producto->getNombre()}</td>
            <td>{$producto->getPrecio()}</td>
            <td>{$producto->getPlataforma()}</td>
            <td>{$producto->getGenero()}</td>
        </tr>";
    }
}
echo "</table>";

echo "<hr>";


echo "<h2>Alquileres Realizados</h2>";
echo "<table border='1' style='width:80%; text-align:left;'>";
echo "<tr><th>Cliente</th><th>Productos Alquilados</th></tr>";
foreach ($videoclub->getClientes() as $cliente) {
    echo "<tr><td>" . $cliente->getNombre() . "</td><td>";
    $productosAlquilados = $cliente->getProductosAlquilados();
    if (count($productosAlquilados) > 0) {
        foreach ($productosAlquilados as $producto) {
            echo $producto->getNombre() . " ({$producto->getPrecio()} €)<br>";
        }
    } else {
        echo "No tiene productos alquilados.";
    }
    echo "</td></tr>";
}
echo "</table>";
?>
