-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2019 a las 08:24:54
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_camacho`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartamentos`
--

CREATE TABLE `apartamentos` (
  `id` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `parqueadero` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `torre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `apartamentos`
--

INSERT INTO `apartamentos` (`id`, `num`, `parqueadero`, `usuario_id`, `torre_id`) VALUES
(2, 1, 'L3', 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas_comunes`
--

CREATE TABLE `areas_comunes` (
  `id` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `conjunto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arrendamiento`
--

CREATE TABLE `arrendamiento` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `apartamento_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conjuntos`
--

CREATE TABLE `conjuntos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `dir` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `conjuntos`
--

INSERT INTO `conjuntos` (`id`, `nombre`, `dir`, `usuario_id`) VALUES
(1, 'diamante 2', 'bucaramanga 3', 6),
(7, 'nuevo', 'giron', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `fecha` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `area_comun_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torres`
--

CREATE TABLE `torres` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `conjunto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `torres`
--

INSERT INTO `torres` (`id`, `nombre`, `conjunto_id`) VALUES
(1, '201', 1),
(4, 'c2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `pass`, `rol`) VALUES
(6, 'johan 2', 'johanca', 'e10adc3949ba59abbe56e057f20f883e', 2),
(7, 'asd', 'asd', 'asd', 1),
(9, 'diana', 'diana', 'e10adc3949ba59abbe56e057f20f883e', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apartamentos`
--
ALTER TABLE `apartamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `torre_id` (`torre_id`);

--
-- Indices de la tabla `areas_comunes`
--
ALTER TABLE `areas_comunes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conjunto_id` (`conjunto_id`);

--
-- Indices de la tabla `arrendamiento`
--
ALTER TABLE `arrendamiento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apartamento_id` (`apartamento_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `conjuntos`
--
ALTER TABLE `conjuntos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `area_comun_id` (`area_comun_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `torres`
--
ALTER TABLE `torres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conjunto_id` (`conjunto_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apartamentos`
--
ALTER TABLE `apartamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `areas_comunes`
--
ALTER TABLE `areas_comunes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `arrendamiento`
--
ALTER TABLE `arrendamiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `conjuntos`
--
ALTER TABLE `conjuntos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `torres`
--
ALTER TABLE `torres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `apartamentos`
--
ALTER TABLE `apartamentos`
  ADD CONSTRAINT `apartamentos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `apartamentos_ibfk_2` FOREIGN KEY (`torre_id`) REFERENCES `torres` (`id`);

--
-- Filtros para la tabla `areas_comunes`
--
ALTER TABLE `areas_comunes`
  ADD CONSTRAINT `areas_comunes_ibfk_1` FOREIGN KEY (`conjunto_id`) REFERENCES `conjuntos` (`id`);

--
-- Filtros para la tabla `arrendamiento`
--
ALTER TABLE `arrendamiento`
  ADD CONSTRAINT `arrendamiento_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `arrendamiento_ibfk_2` FOREIGN KEY (`apartamento_id`) REFERENCES `apartamentos` (`id`);

--
-- Filtros para la tabla `conjuntos`
--
ALTER TABLE `conjuntos`
  ADD CONSTRAINT `conjuntos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `conjuntos` (`id`),
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`area_comun_id`) REFERENCES `areas_comunes` (`id`);

--
-- Filtros para la tabla `torres`
--
ALTER TABLE `torres`
  ADD CONSTRAINT `torres_ibfk_1` FOREIGN KEY (`conjunto_id`) REFERENCES `conjuntos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
