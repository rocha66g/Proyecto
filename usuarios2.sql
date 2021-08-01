-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-06-2021 a las 03:13:11
-- Versión del servidor: 8.0.22
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Nombres` varchar(30) NOT NULL,
  `Apellidos` varchar(40) NOT NULL,
  `Genero` varchar(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contraseña` varchar(256) NOT NULL,
  `ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Nombres`, `Apellidos`, `Genero`, `Correo`, `Contraseña`, `ID`) VALUES
('Jonatan Leonel', 'Sánchez Velázquez', 'HOMBRE', 'jonatan@gmail.com', '$2y$10$pbV7GdVAGdnSQ.X4BPJeLeAgPATg4hEgnU0/cqTk4eDtkPpu9JzMC', 88505),
('Alejandro', 'Sanchez Ramirez', 'HOMBRE', 'alejandro@gmail.com', '$2y$10$2ebPvcrIL/DAQaRg4bTwy.nWuputVMX0hbGagL1Ilt9GPba0VW.3a', 81272),
('Ivan', 'Frutero de la Rosa', 'MUJER', 'ivan@gmail.com', '$2y$10$MSTA1oFv83O8fY.MRZx4buTwzGoZNhb8OThZB42eLw7LXCUQtxtiK', 917);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencias`
--

CREATE TABLE `sugerencias` (
  `Nombre` varchar(30) NOT NULL,
  `Sugerencia` varchar(100) NOT NULL,
  `Estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `sugerencias`
--

INSERT INTO `sugerencias` (`Nombre`, `Sugerencia`, `Estado`) VALUES
('Jonatan Leonel', 'Me agrada esta pagina', 'ME GUSTA'),
('Alejandro', 'Sin comentarios', 'ME GUSTA'),
('Jose Luis Rocha', 'No me gusta esta pagina', 'NO ME GUSTA'),
('Ivan', 'Quisiera que tuviera un apartado nuevo', 'ME GUSTA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
