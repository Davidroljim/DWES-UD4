-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-10-2021 a las 14:29:43
-- Versión del servidor: 8.0.26-0ubuntu0.20.04.2
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenciaviajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelos`
--

CREATE TABLE `vuelos` (
  `id` int NOT NULL,
  `Origen` text COLLATE utf8mb4_general_ci NOT NULL,
  `Destino` text COLLATE utf8mb4_general_ci NOT NULL,
  `Fecha` datetime NOT NULL,
  `Companya` text COLLATE utf8mb4_general_ci NOT NULL,
  `ModeloAvion` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vuelos`
--

INSERT INTO `vuelos` (`id`, `Origen`, `Destino`, `Fecha`, `Companya`, `ModeloAvion`) VALUES
(1, 'Madrid', 'Sevilla', '2021-10-22 13:47:00', 'Rayannai', 'A-234'),
(2, 'Sevilla', 'Malaga', '2021-10-27 14:03:33', 'IBERIA', 'AIRBUS-747'),
(3, 'Barcelona', 'Paris', '2021-10-27 14:04:59', 'Qatar', 'sf-2332'),
(4, 'Sevilla', 'Andorra', '2021-10-28 14:04:59', 'Iberia', 'as-gsd34'),
(5, 'Extremadura', 'Galicia', '2021-10-21 14:04:59', 'Iberia', 'sfqw-2332'),
(6, 'Cadiz', 'Malaga', '2021-11-28 14:04:59', 'Iberia', 'as-xgsdad34'),
(7, 'Guanajuato', 'Madrid', '2021-12-21 14:09:27', 'AerolineasMexicanas', 'Boening-747'),
(8, 'Tabasco', 'Sevilla', '2021-12-26 14:09:27', 'AerolineasMexicanas', 'Boeing-747'),
(9, 'Chihuahua', 'Malaga', '2021-12-15 14:11:52', 'Vueling', 'X-43A SCRAM JET'),
(10, 'Barcelona', 'Roma', '2021-10-23 14:14:48', 'Iberia', 'furbolista-747');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
