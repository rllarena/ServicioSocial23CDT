-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2023 a las 07:28:58
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stc_catalogo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `siglas` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `jerarquia` int(11) NOT NULL,
  `ext` varchar(200) DEFAULT NULL,
  `res` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `siglas`, `nombre`, `jerarquia`, `ext`, `res`) VALUES
(1, 'DIDT', 'Direccion de ingeneria de desarollo tecnologico', 1, '4079-4770', 'jorge rocha sachez'),
(2, ' GINP ', ' Gerencia de Ingeneria y nuevos Proyectos', 2, '4052-3740', 'Felix jacob santiago sanchez'),
(3, 'CAC', 'Coordinación de Aseguramiento de calidad', 3, '4054', 'Silvia Ramirez sanchez'),
(4, 'LIB', 'Libranzas', 4, '4062-4085-4134', 'alma graciela reyes rodriguez '),
(5, 'RPE', 'Incidentes caja negra', 5, '4054', 'armando enrique sanchez salinas'),
(6, 'UA', ' Unidad administrativa', 6, '4054', 'Gabriela simon sanchez '),
(7, 'AP', ' Administracion de proyectos', 7, '4054', 'Jose eduardo acevedo montiel'),
(8, 'CDT', ' Coordinación de desarrollo teconologico', 8, '4053', 'sandra pinto perez '),
(9, 'LEDA', ' Laboratorio de electronica digital avanzada', 9, '5023 210', 'Ing. Saul Leon Figueroa'),
(10, ' TETRA', ' Sistema de radio comunicacion', 10, '4060', 'Ing. Jorge Garcia Lopez'),
(11, 'AO', ' Analisis operativo', 11, '4058', 'Ing. Yolanda carrillo hernandez'),
(12, 'DIF', ' Difucion y actualizacion tecnologica', 12, '4059', 'Ing. jose Antonio Barajas Coronado'),
(13, 'IEP', ' Ingenieria e informacion de proyectos', 13, '5424', 'Ing. Blass Rafael Valencia Mejia'),
(14, 'UA', ' Unidad Administrativa', 14, '4061', 'Lic Martha Cecilia Garcia Soria'),
(15, 'CL', ' Coordinación de laboratorio', 15, '5589', 'Hugo Hernandez Giron'),
(16, 'LEE', ' Laboratorio de electrica electronica ', 16, '4009', 'Ing jose salinas rosales'),
(17, 'LMM', ' Laboratorio de metal mecanica ', 17, '4007', 'Ing Eduardo Iturbide Salas'),
(18, 'LFQ', ' Laboratorio de fisica quimica ', 18, '4008', 'Ing Rodolgo Díaz Delgado'),
(19, 'LM', ' Laboratorio de metrologia ', 19, '4007', 'Ing Eduardo Iturbide Salas'),
(20, 'UA', ' Unidad Administrativa ', 20, '5589', 'Isidro Ordaz Zamora'),
(21, 'GIIS', ' Gerencia sistemas e investigacion de incidentes ', 21, '4052', 'Jesus angel sanchez cruz'),
(22, 'CST', ' Coordinacion de soporte tecnico ', 22, '5517-5402 ', 'tito hiram sanchez ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jerarquia`
--

CREATE TABLE `jerarquia` (
  `id` int(11) NOT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `gerencia` varchar(100) DEFAULT NULL,
  `coordinacion` varchar(100) DEFAULT NULL,
  `subarea` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jerarquia`
--

INSERT INTO `jerarquia` (`id`, `direccion`, `gerencia`, `coordinacion`, `subarea`) VALUES
(1, 'DIDT', NULL, NULL, NULL),
(2, 'DIDT', 'GINP', NULL, NULL),
(3, 'DIDT', 'GINP', 'CAC', NULL),
(4, 'DIDT', 'GINP', 'CAC', 'LIB'),
(5, 'DIDT', 'GINP', 'CAC', 'RPE'),
(6, 'DIDT', 'GINP', 'CAC', 'UA'),
(7, 'DIDT', 'GINP', 'CAC', 'AP'),
(8, 'DIDT', 'GINP', 'CDT', NULL),
(9, 'DIDT', 'GINP', 'CDT', 'LEDA'),
(10, 'DIDT', 'GINP', 'CDT', 'TETRA'),
(11, 'DIDT', 'GINP', 'CDT', 'AO'),
(12, 'DIDT', 'GINP', 'CDT', 'DIF'),
(13, 'DIDT', 'GINP', 'CDT', 'IEP'),
(14, 'DIDT', 'GINP', 'CDT', 'UA'),
(15, 'DIDT', 'GINP', 'CL', NULL),
(16, 'DIDT', 'GINP', 'CL', 'LEE'),
(17, 'DIDT', 'GINP', 'CL', 'LMM'),
(18, 'DIDT', 'GINP', 'CL', 'LFQ'),
(19, 'DIDT', 'GINP', 'CL', 'LM'),
(20, 'DIDT', 'GINP', 'CL', 'UA'),
(21, 'DIDT', 'GIIS', NULL, NULL),
(22, 'DIDT', 'GIIS', 'CST', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ta` (`jerarquia`);

--
-- Indices de la tabla `jerarquia`
--
ALTER TABLE `jerarquia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `fk_je` FOREIGN KEY (`jerarquia`) REFERENCES `jerarquia` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
