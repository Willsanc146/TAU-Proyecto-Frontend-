-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 20-06-2023 a las 08:34:12
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autolavado_parkinggp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `cc` int(255) NOT NULL,
  `telefono` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `nombre`, `apellido`, `cc`, `telefono`) VALUES
(1, 'Luis Angel', 'Gerrero', 10000000, 2147483647),
(2, 'Antonio Luis', 'Rosales', 20000000, 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lavado_car`
--

CREATE TABLE `lavado_car` (
  `id` int(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `placa` varchar(255) NOT NULL,
  `combo` int(11) NOT NULL,
  `colaborador` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `lavado_car`
--

INSERT INTO `lavado_car` (`id`, `tipo`, `placa`, `combo`, `colaborador`) VALUES
(1, 'automovil', 'DWR05J', 2, 1),
(2, 'camioneta', 'ZWI18A', 21, 2),
(3, 'motocicleta', 'AFE13C', 6, 1),
(4, 'motocicleta', 'AFE14C', 7, 2),
(5, 'camioneta', 'CMY75J', 21, 1),
(6, 'motocicleta', 'ZQK15F', 8, 1),
(7, 'automovil', 'DFR14K', 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `clave`) VALUES
(1, 'andres', 'andres@gmail.com', 'MTIzNDU='),
(2, 'wiliam', 'william93sb@gmail.com', 'MTIzNDU=');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lavado_car`
--
ALTER TABLE `lavado_car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `colaborador` (`colaborador`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `lavado_car`
--
ALTER TABLE `lavado_car`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `lavado_car`
--
ALTER TABLE `lavado_car`
  ADD CONSTRAINT `lavado_car_ibfk_1` FOREIGN KEY (`colaborador`) REFERENCES `lavado_car` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
