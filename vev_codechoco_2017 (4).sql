-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2018 a las 16:22:19
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vev_codechoco_2017`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alias`
--

CREATE TABLE `alias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `alias`
--

INSERT INTO `alias` (`id`, `nombre`) VALUES
(1, 'Quienes somos'),
(2, 'Servicios'),
(3, 'Negocios verdes'),
(4, 'Noticias'),
(5, 'Mercados evaluados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo_page`
--

CREATE TABLE `archivo_page` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) COLLATE utf8_bin NOT NULL,
  `ruta` varchar(100) COLLATE utf8_bin NOT NULL,
  `alias_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `archivo_page`
--

INSERT INTO `archivo_page` (`id`, `nombre`, `ruta`, `alias_id`) VALUES
(3, 'plan nacional de negocios verdes', 'Plan_Nacional_de_Negocios_Verdes.pdf', 3),
(4, 'plan regional de negocios verdes', 'Plan_Regional_Negocios_Pacifico.pdf', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partner_page`
--

CREATE TABLE `partner_page` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `ruta` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partner_page`
--

INSERT INTO `partner_page` (`id`, `nombre`, `ruta`) VALUES
(3, 'gobernacion', '1062_escudo-choco-new-pag_200x200.png'),
(4, 'dps', 'logo-DPS-Gov.png'),
(5, 'iiap', 'logo.png'),
(6, 'confachoco', 'logo (1).png'),
(7, 'alcaldia', 'escudo.png'),
(8, 'utch', 'logo_utch_400x95.png'),
(9, 'sena', 'logoSena.png'),
(10, 'icbf', 'icbf-logo_32.png'),
(11, 'fucla', 'logo-uniclaretiana.png'),
(12, 'bioinnova', 'BIOINNOVA-400.png'),
(13, 'banco agrario', 'logo-banco-agrario-colombia.png'),
(14, 'ica', 'LogoICA.png'),
(15, 'oim', 'logo (2).png'),
(16, 'wwf', 'logo (3).png'),
(17, 'pnud', 'pnud-logo-30.svg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alias`
--
ALTER TABLE `alias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `archivo_page`
--
ALTER TABLE `archivo_page`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contenido_id` (`alias_id`);

--
-- Indices de la tabla `partner_page`
--
ALTER TABLE `partner_page`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alias`
--
ALTER TABLE `alias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `archivo_page`
--
ALTER TABLE `archivo_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `partner_page`
--
ALTER TABLE `partner_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `archivo_page`
--
ALTER TABLE `archivo_page`
  ADD CONSTRAINT `archivo_page_ibfk_1` FOREIGN KEY (`alias_id`) REFERENCES `alias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
