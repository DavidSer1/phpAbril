-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2025 a las 09:14:41
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientes_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `dni` varchar(9) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `localidad` varchar(30) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permisos` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`dni`, `nombre`, `direccion`, `localidad`, `provincia`, `telefono`, `email`, `contraseña`, `password`, `permisos`) VALUES
('12345678A', 'Ana García', 'Calle Mayor 12', 'Madrid', 'Madrid', '600123456', 'ana.garcia@email.com', '', '', 1),
('23456789B', 'Luis Pérez', 'Av. del Sol 45', 'Valencia', 'Valencia', '611234567', 'luis.perez@email.com', '', '', 1),
('34567890C', 'Marta López', 'C/ Luna 7', 'Sevilla', 'Sevilla', '622345678', 'marta.lopez@email.com', '', '', 1),
('45678901D', 'Carlos Ruize', 'Camino Real 20', 'Granada', 'Andalucía', '633456789', 'carlos.ruiz@email.com', '', '', 1),
('66666666R', 'pepe', 'Joan rois', 'Pego', 'Valencias', '999999999', 'pepe@gmail.com', '', '$2y$10$udULWuWZGHrS7KgGkmKBkeU3iE4EKvDE6Oa/XyxJwR/6kDSU6NgbC', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
