-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2018 a las 23:31:09
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vev_codechoco_2017_2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comercializacion`
--

CREATE TABLE `comercializacion` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `numero` varchar(100) COLLATE utf8_bin NOT NULL,
  `local` varchar(100) COLLATE utf8_bin NOT NULL,
  `regional` varchar(100) COLLATE utf8_bin NOT NULL,
  `nacional` varchar(100) COLLATE utf8_bin NOT NULL,
  `global` varchar(100) COLLATE utf8_bin NOT NULL,
  `observacion` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `comercializacion`
--

INSERT INTO `comercializacion` (`id`, `info_com_id`, `pregunta_id`, `numero`, `local`, `regional`, `nacional`, `global`, `observacion`) VALUES
(1, 14, 141, '10', '2', '2', '2', '2', 'aksdjhfklajshdfasd'),
(2, 14, 142, '8', '3', '2', '56', '23', 'ñlkñ´l'),
(3, 14, 143, '23', '2', '2', '2', '56', '2'),
(4, 14, 144, '5', '23', '12', '2', '21', 'ñljkhlk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turismo`
--

CREATE TABLE `turismo` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `respuesta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `turismo`
--

INSERT INTO `turismo` (`id`, `info_com_id`, `pregunta_id`, `respuesta_id`) VALUES
(1, 14, 145, 1),
(2, 14, 146, 1),
(3, 14, 147, 2),
(4, 14, 148, 4),
(5, 14, 149, 2),
(6, 14, 150, 2),
(7, 14, 151, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comercializacion`
--
ALTER TABLE `comercializacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_com_id` (`info_com_id`),
  ADD KEY `pregunta_id` (`pregunta_id`);

--
-- Indices de la tabla `turismo`
--
ALTER TABLE `turismo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_com_id` (`info_com_id`),
  ADD KEY `pregunta_id` (`pregunta_id`),
  ADD KEY `respuesta_id` (`respuesta_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comercializacion`
--
ALTER TABLE `comercializacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `turismo`
--
ALTER TABLE `turismo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comercializacion`
--
ALTER TABLE `comercializacion`
  ADD CONSTRAINT `comercializacion_fbk1` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`),
  ADD CONSTRAINT `comercializacion_fbk2` FOREIGN KEY (`pregunta_id`) REFERENCES `pregunta_indicativa` (`id`);

--
-- Filtros para la tabla `turismo`
--
ALTER TABLE `turismo`
  ADD CONSTRAINT `turismo_fbk1` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`),
  ADD CONSTRAINT `turismo_fbk2` FOREIGN KEY (`pregunta_id`) REFERENCES `pregunta_indicativa` (`id`),
  ADD CONSTRAINT `turismo_fbk3` FOREIGN KEY (`respuesta_id`) REFERENCES `si_no` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
