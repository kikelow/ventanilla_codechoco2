-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2018 a las 20:37:57
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL,
  `recurso_id` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_bin NOT NULL,
  `confirmacion` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `empresa_id`, `opciones_id`, `recurso_id`, `descripcion`, `confirmacion`) VALUES
(15, 11, 58, 1, '22', 'si'),
(16, 11, 60, 2, '44', 'si'),
(17, 11, 57, 1, '', 'no'),
(18, 11, 59, 1, '', 'no'),
(19, 16, 58, 1, '', 'si'),
(20, 16, 60, 2, '', 'si'),
(21, 16, 57, 1, '', 'no'),
(22, 16, 59, 1, '', 'no'),
(23, 17, 59, 1, 'yo mismo', 'si'),
(24, 17, 57, 1, '', 'no'),
(25, 17, 58, 1, '', 'no'),
(26, 17, 60, 1, '', 'no'),
(27, 15, 57, 1, '', 'no'),
(28, 15, 58, 1, '', 'no'),
(29, 15, 59, 1, '', 'no'),
(30, 15, 60, 1, '', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_empresa`
--

CREATE TABLE `actividad_empresa` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `actividad_item_id` int(11) NOT NULL,
  `confirmacion` varchar(3) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `actividad_empresa`
--

INSERT INTO `actividad_empresa` (`id`, `empresa_id`, `actividad_item_id`, `confirmacion`) VALUES
(141, 13, 1, 'no'),
(142, 13, 2, 'si'),
(143, 13, 3, 'no'),
(161, 1, 1, 'si'),
(162, 1, 2, 'no'),
(163, 1, 3, 'si'),
(168, 8, 1, 'no'),
(169, 8, 2, 'si'),
(170, 8, 3, 'si'),
(300, 11, 1, 'no'),
(301, 11, 2, 'no'),
(302, 11, 3, 'si'),
(304, 15, 1, 'no'),
(305, 15, 2, 'no'),
(306, 15, 3, 'no'),
(308, 16, 1, 'no'),
(309, 16, 2, 'no'),
(310, 16, 3, 'no'),
(311, 17, 1, 'no'),
(312, 17, 2, 'no'),
(313, 17, 3, 'no'),
(314, 18, 1, 'no'),
(315, 18, 2, 'no'),
(316, 18, 3, 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_item`
--

CREATE TABLE `actividad_item` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `actividad_item`
--

INSERT INTO `actividad_item` (`id`, `nombre`) VALUES
(1, 'Producción materia prima'),
(2, 'Transformación'),
(3, 'Comercialización');

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
-- Estructura de tabla para la tabla `aplica_noaplica`
--

CREATE TABLE `aplica_noaplica` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `aplica_noaplica`
--

INSERT INTO `aplica_noaplica` (`id`, `nombre`) VALUES
(1, 'Aplica'),
(2, 'No aplica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo_page`
--

CREATE TABLE `archivo_page` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) COLLATE utf8_bin NOT NULL,
  `ruta` varchar(100) COLLATE utf8_bin NOT NULL,
  `contenido_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `archivo_page`
--

INSERT INTO `archivo_page` (`id`, `nombre`, `ruta`, `contenido_id`) VALUES
(1, 'Plan nacional de negocios verdes', 'Plan_Nacional_de_Negocios_Verdes.pdf', 8),
(2, 'Plan regional de negocios verdes', 'ProgramaRegionalNegociosPACìFICO.pdf', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id`, `nombre`) VALUES
(1, 'No aplica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienes_servicios`
--

CREATE TABLE `bienes_servicios` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_bin NOT NULL,
  `lider` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `bienes_servicios`
--

INSERT INTO `bienes_servicios` (`id`, `empresa_id`, `nombre`, `lider`) VALUES
(1, 1, 'ggggg', ''),
(2, 1, 'll', ''),
(3, 1, 'ff', ''),
(4, 1, 'dd', ''),
(5, 1, 'hhh', ''),
(6, 1, '', 'madera la too 111'),
(31, 8, 'alguno', ''),
(32, 8, '', ''),
(33, 8, '', ''),
(34, 8, '', ''),
(35, 8, '', ''),
(36, 8, '', 'pepino'),
(37, 11, 'pera', ''),
(38, 11, 'yuca', ''),
(39, 11, 'papa', ''),
(40, 11, '', ''),
(41, 11, '', ''),
(42, 11, '', 'remolacha'),
(43, 13, 'algo', ''),
(44, 13, 'prueba', ''),
(45, 13, '', ''),
(46, 13, '', ''),
(47, 13, '', ''),
(48, 13, '', 'Patacones'),
(49, 15, '', ''),
(50, 15, '', ''),
(51, 15, '', ''),
(52, 15, 'pescadito', ''),
(53, 15, 'remolacha', ''),
(54, 15, '', 'algunito'),
(55, 16, '', ''),
(56, 16, '', ''),
(57, 16, '', ''),
(58, 16, '', ''),
(59, 16, '', ''),
(60, 16, '', 'ese mismo'),
(61, 17, 'blusa', ''),
(62, 17, 'pantalon', ''),
(63, 17, 'falda', ''),
(64, 17, '', ''),
(65, 17, '', ''),
(66, 17, '', 'vestidos'),
(67, 18, 'jjjjl', ''),
(68, 18, 'ñññ', ''),
(69, 18, 'nnnnn', ''),
(70, 18, '', ''),
(71, 18, '', ''),
(72, 18, '', 'kkkkkkkkkkkkkllllll');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificador`
--

CREATE TABLE `calificador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `calificador`
--

INSERT INTO `calificador` (`id`, `nombre`) VALUES
(1, '0'),
(2, '0.5'),
(3, '1'),
(4, 'N/A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Bienes y servicios sostenibles provenientes de recursos naturales\r\n\r\n'),
(2, 'Ecoproductos Industriales\r\n'),
(3, 'Mercados de Carbono\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificacion`
--

CREATE TABLE `certificacion` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL,
  `etapa_id` int(11) NOT NULL,
  `vigencia` varchar(30) COLLATE utf8_bin NOT NULL,
  `observacion` varchar(50) COLLATE utf8_bin NOT NULL,
  `confirmacion` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `certificacion`
--

INSERT INTO `certificacion` (`id`, `empresa_id`, `opciones_id`, `etapa_id`, `vigencia`, `observacion`, `confirmacion`) VALUES
(39, 11, 66, 2, '1', '11', 'si'),
(40, 11, 68, 1, '3', '33', 'si'),
(41, 11, 70, 1, '5', '55', 'si'),
(42, 11, 72, 1, '7', '77', 'si'),
(43, 11, 67, 1, '', '', 'no'),
(44, 11, 69, 1, '', '', 'no'),
(45, 11, 71, 1, '', '', 'no'),
(46, 16, 69, 1, '', '', 'si'),
(47, 16, 71, 1, '', '', 'si'),
(48, 16, 66, 1, '', '', 'no'),
(49, 16, 67, 1, '', '', 'no'),
(50, 16, 68, 1, '', '', 'no'),
(51, 16, 70, 1, '', '', 'no'),
(52, 16, 72, 1, '', '', 'no'),
(53, 17, 68, 1, '10', 'sdfgsdfg', 'si'),
(54, 17, 66, 1, '', '', 'no'),
(55, 17, 67, 1, '', '', 'no'),
(56, 17, 69, 1, '', '', 'no'),
(57, 17, 70, 1, '', '', 'no'),
(58, 17, 71, 1, '', '', 'no'),
(59, 17, 72, 1, '', '', 'no'),
(60, 15, 66, 1, '', '', 'no'),
(61, 15, 67, 1, '', '', 'no'),
(62, 15, 68, 1, '', '', 'no'),
(63, 15, 69, 1, '', '', 'no'),
(64, 15, 70, 1, '', '', 'no'),
(65, 15, 71, 1, '', '', 'no'),
(66, 15, 72, 1, '', '', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conservacion`
--

CREATE TABLE `conservacion` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL,
  `area` varchar(15) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `confirmacion` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `conservacion`
--

INSERT INTO `conservacion` (`id`, `empresa_id`, `opciones_id`, `area`, `descripcion`, `confirmacion`) VALUES
(43, 11, 29, '1', '11', 'si'),
(44, 11, 31, '3', '33', 'si'),
(45, 11, 33, '5', '55', 'si'),
(46, 11, 35, '7', '77', 'si'),
(47, 11, 37, '9', '99', 'si'),
(48, 11, 30, '', '', 'no'),
(49, 11, 32, '', '', 'no'),
(50, 11, 34, '', '', 'no'),
(51, 11, 36, '', '', 'no'),
(52, 11, 38, '', '', 'no'),
(53, 11, 39, '', '', 'no'),
(54, 11, 40, '', '', 'no'),
(55, 11, 41, '', '', 'no'),
(56, 16, 35, '78', '78', 'si'),
(57, 16, 38, '4', '4', 'si'),
(58, 16, 29, '', '', 'no'),
(59, 16, 30, '', '', 'no'),
(60, 16, 31, '', '', 'no'),
(61, 16, 32, '', '', 'no'),
(62, 16, 33, '', '', 'no'),
(63, 16, 34, '', '', 'no'),
(64, 16, 36, '', '', 'no'),
(65, 16, 37, '', '', 'no'),
(66, 16, 39, '', '', 'no'),
(67, 16, 40, '', '', 'no'),
(68, 16, 41, '', '', 'no'),
(69, 17, 37, '20km', 'hgjkh', 'si'),
(70, 17, 29, '', '', 'no'),
(71, 17, 30, '', '', 'no'),
(72, 17, 31, '', '', 'no'),
(73, 17, 32, '', '', 'no'),
(74, 17, 33, '', '', 'no'),
(75, 17, 34, '', '', 'no'),
(76, 17, 35, '', '', 'no'),
(77, 17, 36, '', '', 'no'),
(78, 17, 38, '', '', 'no'),
(79, 17, 39, '', '', 'no'),
(80, 17, 40, '', '', 'no'),
(81, 17, 41, '', '', 'no'),
(82, 15, 29, '', '', 'no'),
(83, 15, 30, '', '', 'no'),
(84, 15, 31, '', '', 'no'),
(85, 15, 32, '', '', 'no'),
(86, 15, 33, '', '', 'no'),
(87, 15, 34, '', '', 'no'),
(88, 15, 35, '', '', 'no'),
(89, 15, 36, '', '', 'no'),
(90, 15, 37, '', '', 'no'),
(91, 15, 38, '', '', 'no'),
(92, 15, 39, '', '', 'no'),
(93, 15, 40, '', '', 'no'),
(94, 15, 41, '', '', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `id` int(11) NOT NULL,
  `titulo` varchar(60) COLLATE utf8_bin NOT NULL,
  `alias_id` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `id_img_page` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`id`, `titulo`, `alias_id`, `descripcion`, `id_img_page`) VALUES
(8, 'Negocios Verdes', 3, '<h5 style="text-align: center;"><strong>¿Qué son los Negocios Verdes?</strong></h5><p style="text-align: justify; ">Contempla las actividades económicas en las que se ofertan bienes o servicios, que generan impactos ambientales positivos y además incorporan buenas prácticas ambientales, sociales y económicas con enfoque de ciclo de vida, contribuyendo a la conservación del ambiente como capital natural que soporta el desarrollo del territorio.</p>', 7),
(9, 'Identificación de los bienes y servicios de negocios verdes ', 3, '<p>Es relevante porque:</p><p><ol><li>Promueve patrones de producción y consumo sostenibles de bienes y servicios de los negocios verdes y sostenibles.<br></li><li>Propicia la creación de una cultura alineada con principios ambientales, sociales y éticos.<br></li><li>Facilita la toma de decisiones a los consumidores (públicos o privados) al momento de elegir un bien y servicio.<br></li><li>Visibiliza una oferta de bienes y servicios de cara al mercado nacional e internacional.<br></li></ol></p>', 8),
(10, 'Criterios para identificar los Negocios Verdes', 3, '<ol><li>Viabilidad económica del negocio<br></li><li>Impacto ambiental positivo del bien o servicio<br></li><li>Enfoque de ciclo de vida del bien o servicio<br></li><li>Vida Útil<br></li><li>No uso de sustancias o materiales peligrosos<br></li><li>Reciclabilidad de los materiales y uso de materiales reciclados<br></li><li>Uso eficiente y sostenible de recursos para la producción del bien o servicio<br></li><li>Responsabilidad social al interior de la empresa<br></li><li>Responsabilidad social y ambiental en la cadena de valor de la empresa<br></li><li>Responsabilidad social y ambiental al exterior de la empresa<br></li><li>Comunicación de atributos sociales o ambientales asociados al bien o servicio<br></li><li>Esquemas, programas o reconocimientos ambientales o sociales implementados o recibidos<br></li></ol>', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costo_insumos`
--

CREATE TABLE `costo_insumos` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `semanal` double NOT NULL,
  `mensual` double NOT NULL,
  `anual` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `costo_insumos`
--

INSERT INTO `costo_insumos` (`id`, `empresa_id`, `semanal`, `mensual`, `anual`) VALUES
(5, 11, 200000, 300000, 5000000),
(6, 16, 4, 45, 68),
(7, 17, 0, 0, 0),
(8, 15, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costo_mano_obra`
--

CREATE TABLE `costo_mano_obra` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `semanal` double NOT NULL,
  `mensual` double NOT NULL,
  `anual` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `costo_mano_obra`
--

INSERT INTO `costo_mano_obra` (`id`, `empresa_id`, `semanal`, `mensual`, `anual`) VALUES
(5, 11, 2323, 55, 3256),
(6, 16, 87, 112, 12),
(7, 17, 0, 0, 0),
(8, 15, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cumple_nocumple`
--

CREATE TABLE `cumple_nocumple` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cumple_nocumple`
--

INSERT INTO `cumple_nocumple` (`id`, `nombre`) VALUES
(1, 'Cumple'),
(2, 'No cumple');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demografia`
--

CREATE TABLE `demografia` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `desc_demografia_id` int(11) NOT NULL,
  `si_no_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `demografia`
--

INSERT INTO `demografia` (`id`, `empresa_id`, `desc_demografia_id`, `si_no_id`, `cantidad`) VALUES
(1, 1, 1, 2, 1),
(2, 1, 2, 2, 2),
(3, 1, 3, 2, 3),
(4, 1, 4, 2, 4),
(5, 1, 5, 2, 5),
(6, 1, 6, 1, 0),
(7, 1, 7, 1, 0),
(36, 8, 1, 2, 0),
(37, 8, 2, 2, 0),
(38, 8, 3, 2, 0),
(39, 8, 4, 2, 0),
(40, 8, 5, 2, 0),
(41, 8, 6, 2, 0),
(42, 8, 7, 2, 0),
(43, 15, 1, 2, 0),
(44, 15, 2, 2, 0),
(45, 15, 3, 2, 0),
(46, 15, 4, 2, 0),
(47, 15, 5, 2, 0),
(48, 15, 6, 2, 0),
(49, 15, 7, 2, 0),
(50, 16, 1, 2, 0),
(51, 16, 2, 2, 0),
(52, 16, 3, 2, 0),
(53, 16, 4, 2, 0),
(54, 16, 5, 2, 0),
(55, 16, 6, 2, 0),
(56, 16, 7, 2, 0),
(57, 17, 1, 2, 0),
(58, 17, 2, 2, 0),
(59, 17, 3, 2, 0),
(60, 17, 4, 2, 0),
(61, 17, 5, 2, 0),
(62, 17, 6, 2, 0),
(63, 17, 7, 2, 0),
(64, 18, 1, 2, 0),
(65, 18, 2, 2, 0),
(66, 18, 3, 2, 0),
(67, 18, 4, 2, 0),
(68, 18, 5, 2, 0),
(69, 18, 6, 2, 0),
(70, 18, 7, 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id`, `region_id`, `nombre`) VALUES
(1, 3, 'Chocó'),
(2, 3, 'Valle del cauca'),
(3, 4, 'Atlántico'),
(4, 4, 'Bolivar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desc_demografia`
--

CREATE TABLE `desc_demografia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `desc_demografia`
--

INSERT INTO `desc_demografia` (`id`, `nombre`) VALUES
(1, 'Personas de comunidades indígenas'),
(2, 'Personas en situación de discapacidad'),
(3, 'Adultos mayores'),
(4, 'Madres cabeza de familia'),
(5, 'Reinsertados'),
(6, 'Desplazados'),
(7, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecosistema`
--

CREATE TABLE `ecosistema` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL,
  `area` varchar(20) COLLATE utf8_bin NOT NULL,
  `confirmacion` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `ecosistema`
--

INSERT INTO `ecosistema` (`id`, `empresa_id`, `opciones_id`, `area`, `confirmacion`) VALUES
(25, 11, 42, '1', 'si'),
(26, 11, 44, '3', 'si'),
(27, 11, 46, '5', 'si'),
(28, 11, 48, '7', 'si'),
(29, 11, 43, '', 'no'),
(30, 11, 45, '', 'no'),
(31, 11, 47, '', 'no'),
(32, 16, 43, '4', 'si'),
(33, 16, 45, '4', 'si'),
(34, 16, 42, '', 'no'),
(35, 16, 44, '', 'no'),
(36, 16, 46, '', 'no'),
(37, 16, 47, '', 'no'),
(38, 16, 48, '', 'no'),
(39, 17, 44, '10km', 'si'),
(40, 17, 42, '', 'no'),
(41, 17, 43, '', 'no'),
(42, 17, 45, '', 'no'),
(43, 17, 46, '', 'no'),
(44, 17, 47, '', 'no'),
(45, 17, 48, '', 'no'),
(46, 15, 42, '', 'no'),
(47, 15, 43, '', 'no'),
(48, 15, 44, '', 'no'),
(49, 15, 45, '', 'no'),
(50, 15, 46, '', 'no'),
(51, 15, 47, '', 'no'),
(52, 15, 48, '', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edad`
--

CREATE TABLE `edad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='rangos de edad';

--
-- Volcado de datos para la tabla `edad`
--

INSERT INTO `edad` (`id`, `nombre`) VALUES
(1, 'Entre 18-30'),
(2, 'Entre 30-50'),
(3, 'Mayores 50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_edad`
--

CREATE TABLE `empleado_edad` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `edad_id` int(11) NOT NULL,
  `cantidad` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `empleado_edad`
--

INSERT INTO `empleado_edad` (`id`, `empresa_id`, `edad_id`, `cantidad`) VALUES
(1, 1, 1, '5'),
(2, 1, 2, ''),
(3, 1, 3, '15'),
(16, 8, 1, ''),
(17, 8, 2, ''),
(18, 8, 3, ''),
(19, 15, 1, ''),
(20, 15, 2, ''),
(21, 15, 3, ''),
(22, 16, 1, ''),
(23, 16, 2, ''),
(24, 16, 3, ''),
(25, 17, 1, '2'),
(26, 17, 2, '5'),
(27, 17, 3, '6'),
(28, 18, 1, ''),
(29, 18, 2, ''),
(30, 18, 3, ''),
(31, 11, 1, '4'),
(32, 11, 2, '3'),
(33, 11, 3, '5'),
(34, 13, 1, '8'),
(35, 13, 2, '4'),
(36, 13, 3, '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_sexo`
--

CREATE TABLE `empleado_sexo` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `socio_empleado_id` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `empleado_sexo`
--

INSERT INTO `empleado_sexo` (`id`, `empresa_id`, `socio_empleado_id`, `sexo_id`, `cantidad`) VALUES
(1, 1, 1, 1, 10),
(2, 1, 1, 2, 11),
(3, 1, 2, 1, 7),
(4, 1, 2, 2, 9),
(5, 1, 3, 1, 11),
(6, 1, 3, 2, 9),
(31, 8, 1, 1, 0),
(32, 8, 1, 2, 7),
(33, 8, 2, 1, 0),
(34, 8, 2, 2, 0),
(35, 8, 3, 1, 5),
(36, 8, 3, 2, 10),
(37, 15, 1, 1, 4),
(38, 15, 1, 2, 5),
(39, 15, 2, 1, 2),
(40, 15, 2, 2, 5),
(41, 15, 3, 1, 0),
(42, 15, 3, 2, 0),
(43, 16, 1, 1, 0),
(44, 16, 1, 2, 5),
(45, 16, 2, 1, 0),
(46, 16, 2, 2, 0),
(47, 16, 3, 1, 0),
(48, 16, 3, 2, 0),
(49, 17, 1, 1, 0),
(50, 17, 1, 2, 7),
(51, 17, 2, 1, 0),
(52, 17, 2, 2, 0),
(53, 17, 3, 1, 0),
(54, 17, 3, 2, 0),
(55, 18, 1, 1, 0),
(56, 18, 1, 2, 4),
(57, 18, 2, 1, 0),
(58, 18, 2, 2, 0),
(59, 18, 3, 1, 0),
(60, 18, 3, 2, 0),
(61, 13, 3, 1, 5),
(62, 13, 3, 2, 4),
(63, 11, 3, 1, 10),
(64, 11, 3, 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `tipo_persona_id` int(11) NOT NULL,
  `tipo_identificacion_id` int(11) NOT NULL,
  `identificacion` varchar(15) COLLATE utf8_bin NOT NULL,
  `razon_social` varchar(50) COLLATE utf8_bin NOT NULL,
  `persona_id` int(11) NOT NULL COMMENT 'Representante_legal',
  `empresario_id` int(11) NOT NULL,
  `municipio_id` int(11) NOT NULL,
  `vereda` varchar(100) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(100) COLLATE utf8_bin NOT NULL,
  `aut_ambiental` varchar(40) COLLATE utf8_bin NOT NULL,
  `coodenadas_n` varchar(10) COLLATE utf8_bin NOT NULL,
  `coordenadas_w` varchar(10) COLLATE utf8_bin NOT NULL,
  `altitud` varchar(10) COLLATE utf8_bin NOT NULL,
  `area` varchar(10) COLLATE utf8_bin NOT NULL,
  `si_no_pot_id` int(11) NOT NULL COMMENT 'tiene o no tiene POT',
  `fami_empresa_si_no` int(11) NOT NULL COMMENT 'Fami empresa si o no',
  `tamaño_empresa_id` int(11) NOT NULL,
  `fecha_registro` varchar(40) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `desc_impacto_amb` text COLLATE utf8_bin NOT NULL,
  `num_socios` int(11) NOT NULL,
  `asociacion_si_no` int(11) NOT NULL COMMENT 'Asociacion',
  `subsector_id` int(11) NOT NULL,
  `etapa_empresa_id` int(11) NOT NULL,
  `const_legalmente_sino` int(11) NOT NULL,
  `año_funcionamiento` int(11) NOT NULL,
  `opera_actualmente_sino` int(11) NOT NULL,
  `año_func_desp_reg_camara` int(11) NOT NULL,
  `obs_general` text COLLATE utf8_bin NOT NULL,
  `informacion_as` varchar(2) COLLATE utf8_bin NOT NULL,
  `verificacion1` varchar(2) COLLATE utf8_bin NOT NULL,
  `verificacion2` varchar(2) COLLATE utf8_bin NOT NULL,
  `plan_mejora` varchar(2) COLLATE utf8_bin NOT NULL,
  `puntaje` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `tipo_persona_id`, `tipo_identificacion_id`, `identificacion`, `razon_social`, `persona_id`, `empresario_id`, `municipio_id`, `vereda`, `direccion`, `aut_ambiental`, `coodenadas_n`, `coordenadas_w`, `altitud`, `area`, `si_no_pot_id`, `fami_empresa_si_no`, `tamaño_empresa_id`, `fecha_registro`, `descripcion`, `desc_impacto_amb`, `num_socios`, `asociacion_si_no`, `subsector_id`, `etapa_empresa_id`, `const_legalmente_sino`, `año_funcionamiento`, `opera_actualmente_sino`, `año_func_desp_reg_camara`, `obs_general`, `informacion_as`, `verificacion1`, `verificacion2`, `plan_mejora`, `puntaje`) VALUES
(1, 1, 1, '123456', 'prueba1', 1, 1, 1, 'tutunendo city', 'no me acuerdo', 'Codechocó', '56', '32', '45', '12', 2, 1, 2, '2018-02-25 00:34:50', 'prueba1', 'prueba1', 18, 2, 1, 1, 1, 9, 1, 5, '', 'no', 'no', 'no', 'no', 0),
(8, 1, 1, '1232', 'prueba2', 8, 1, 5, 'no se', 'no se', 'Codechocó', '', '', '', '', 1, 1, 2, '2018-02-25 00:53:52', '', '', 0, 1, 6, 1, 2, 0, 2, 0, '', 'no', 'no', 'no', 'no', 0),
(11, 1, 1, '1232', 'no hacer prueba con este 11', 11, 1, 5, 'no se', 'no se', 'Codechocó', '', '', '', '', 1, 1, 2, '2018-02-25 00:54:29', '', '', 0, 1, 6, 1, 2, 0, 2, 0, 'llllllllllllllllffffffffffffffff', 'si', 'si', 'si', 'si', 68.68),
(13, 1, 2, '12364897', 'no hacer prueba con este 13', 13, 1, 1, '', '', 'Codechocó', '', '', '', '', 2, 1, 2, '2018-02-25 01:01:33', 'descripcion 13', 'está mas o menos', 0, 1, 5, 3, 1, 0, 2, 0, '', 'si', 'si', 'si', 'si', 60.15),
(15, 2, 1, '3415406546', 'Pesqueras', 15, 1, 2, '', '', 'Codechocó', '', '', '', '', 2, 2, 2, '2018-04-04 16:21:24', 'sdakjsghdkajh ', 'kjaghskdhjagsda', 10, 1, 1, 1, 1, 10, 1, 4, 'kjashdklajshl pesquera', 'no', 'no', 'no', 'no', 0),
(16, 2, 1, '44535435', 'agcuaman', 16, 1, 1, '', '', 'Codechocó', '', '', '', '', 2, 1, 3, '2018-04-04 16:41:33', 'asmmmmmmm', 'askkkkkkkkkkkkkkkkkkkkkkk', 5, 1, 1, 1, 1, 5, 1, 4, '', 'si', 'no', 'no', 'no', 0),
(17, 1, 1, '26260656', 'modisteria roldy five', 20, 4, 2, '', '', 'Codechocó', '', '', '', '', 2, 2, 2, '2018-04-24 03:45:39', 'modisteria buena', 'aporta mucho', 5, 1, 2, 1, 2, 0, 1, 0, 'sisi', 'si', 'si', 'si', 'no', 53.86409090909091),
(18, 2, 1, 'lllllllll', 'llllll', 21, 5, 5, '', '', 'Codechocó', '', '', '', '', 2, 2, 2, '2018-04-24 03:54:58', 'asdasd', 'asfasfasfasf', 0, 2, 2, 1, 2, 0, 2, 0, 'bbbbbbbbbbbbbbbbbb', 'no', 'no', 'no', 'no', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresario`
--

CREATE TABLE `empresario` (
  `id` int(11) NOT NULL,
  `identificacion` varchar(15) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `cargo` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `empresario`
--

INSERT INTO `empresario` (`id`, `identificacion`, `nombre`, `cargo`) VALUES
(1, '165465', 'perea', 'chismoso'),
(4, '10756468', 'david raga', 'gerente'),
(5, 'pppppppp', 'ppppp', 'ppppppppp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapa`
--

CREATE TABLE `etapa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `etapa`
--

INSERT INTO `etapa` (`id`, `nombre`) VALUES
(1, 'Propuesta'),
(2, 'En proceso'),
(3, 'Emitida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapa_empresa`
--

CREATE TABLE `etapa_empresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `etapa_empresa`
--

INSERT INTO `etapa_empresa` (`id`, `nombre`) VALUES
(1, 'Idea'),
(2, 'Inversión inicial'),
(3, 'Despegue'),
(4, 'Expansión');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_page`
--

CREATE TABLE `img_page` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_bin NOT NULL,
  `ruta` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `img_page`
--

INSERT INTO `img_page` (`id`, `nombre`, `ruta`) VALUES
(6, 'NO APLICA', 'NO APLICA'),
(7, 'LOGO VENTANILLA', 'logo1.png'),
(8, 'LOGO MERCADOS VERDES', 'logo_nv.png'),
(9, 'slide1', 'p3.jpeg'),
(10, 'slide2', 'p0.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `apoyo` varchar(100) COLLATE utf8_bin NOT NULL,
  `entidad` varchar(100) COLLATE utf8_bin NOT NULL,
  `orientacion_id` int(11) NOT NULL,
  `año` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`id`, `empresa_id`, `apoyo`, `entidad`, `orientacion_id`, `año`) VALUES
(21, 11, 'mercancia', 'No recuerdo el nombre', 3, '2001'),
(22, 11, '', '', 2, ''),
(23, 11, 'alambres', 'doblamos', 2, '2003'),
(24, 11, '', '', 2, ''),
(25, 11, 'computadores', 'Soft', 1, '2005'),
(26, 16, '', '', 1, ''),
(27, 16, '', '', 1, ''),
(28, 16, 'sdfgsd', 'ajjjjjjjjjj', 3, '2015'),
(29, 16, '', '', 1, ''),
(30, 16, '', '', 1, ''),
(31, 17, '', '', 1, ''),
(32, 17, '', '', 1, ''),
(33, 17, 'alguno', 'sdgsdfgsdfgs', 2, '1018'),
(34, 17, '', '', 1, ''),
(35, 17, '', '', 1, ''),
(36, 15, '', '', 1, ''),
(37, 15, '', '', 1, ''),
(38, 15, '', '', 1, ''),
(39, 15, '', '', 1, ''),
(40, 15, '', '', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `involucra`
--

CREATE TABLE `involucra` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL,
  `confirmacion` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `involucra`
--

INSERT INTO `involucra` (`id`, `empresa_id`, `opciones_id`, `confirmacion`) VALUES
(37, 11, 53, 'si'),
(38, 11, 54, 'no'),
(39, 11, 55, 'si'),
(40, 16, 53, 'no'),
(41, 16, 54, 'si'),
(42, 16, 55, 'no'),
(43, 17, 53, 'no'),
(44, 17, 54, 'si'),
(45, 17, 55, 'si'),
(46, 15, 53, 'no'),
(47, 15, 54, 'no'),
(48, 15, 55, 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licencia`
--

CREATE TABLE `licencia` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL,
  `aplica_noaplica_id` int(11) NOT NULL,
  `cumple_nocumple_id` int(11) NOT NULL,
  `vigencia` varchar(20) COLLATE utf8_bin NOT NULL,
  `observacion` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `licencia`
--

INSERT INTO `licencia` (`id`, `empresa_id`, `opciones_id`, `aplica_noaplica_id`, `cumple_nocumple_id`, `vigencia`, `observacion`) VALUES
(14, 11, 27, 2, 2, '1', '11'),
(15, 16, 27, 2, 2, '5', '8'),
(16, 17, 27, 2, 2, '', ''),
(17, 15, 27, 2, 2, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_bin NOT NULL,
  `clave` varchar(50) COLLATE utf8_bin NOT NULL,
  `persona_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `usuario`, `clave`, `persona_id`) VALUES
(1, 'admin', 'admin', 17),
(3, 'raga', 'raga', 11),
(5, '555555', '555555', 24),
(6, 'yovanny', 'yovanny', 25),
(7, ' 123', ' 123', 26),
(8, ' 123', ' 123', 27),
(9, ' 123', ' 123', 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id` int(11) NOT NULL,
  `departamento_id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `departamento_id`, `nombre`) VALUES
(1, 1, 'Tadó'),
(2, 1, 'Quibdo'),
(3, 3, 'Barranquilla'),
(4, 4, 'Cartagena de Indias'),
(5, 2, 'Cali');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE `nivel` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`id`, `nombre`) VALUES
(1, 'Primaria'),
(2, 'Bachillerato'),
(3, 'Técnico'),
(4, 'Universitario'),
(5, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_educativo`
--

CREATE TABLE `nivel_educativo` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `nivel_id` int(11) NOT NULL,
  `cantiad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `nivel_educativo`
--

INSERT INTO `nivel_educativo` (`id`, `empresa_id`, `nivel_id`, `cantiad`) VALUES
(1, 1, 1, 5),
(2, 1, 2, 5),
(3, 1, 3, 5),
(4, 1, 4, 5),
(5, 1, 5, 0),
(26, 8, 1, 0),
(27, 8, 2, 0),
(28, 8, 3, 0),
(29, 8, 4, 0),
(30, 8, 5, 0),
(31, 15, 1, 0),
(32, 15, 2, 0),
(33, 15, 3, 0),
(34, 15, 4, 0),
(35, 15, 5, 0),
(36, 16, 1, 0),
(37, 16, 2, 0),
(38, 16, 3, 0),
(39, 16, 4, 0),
(40, 16, 5, 0),
(41, 17, 1, 0),
(42, 17, 2, 0),
(43, 17, 3, 0),
(44, 17, 4, 0),
(45, 17, 5, 0),
(46, 18, 1, 0),
(47, 18, 2, 0),
(48, 18, 3, 0),
(49, 18, 4, 0),
(50, 18, 5, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `fecha_publicacion` datetime NOT NULL,
  `fuente_autor` varchar(100) COLLATE utf8_bin NOT NULL,
  `id_img_page` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `descripcion`, `fecha_publicacion`, `fuente_autor`, `id_img_page`) VALUES
(2, 'seguda - 2', 'sdfafdas - 2', '2018-04-20 21:53:49', 'dasdsds - 2', 2),
(3, 'otra wera', '<p style="text-align: justify;">la&nbsp; otra de la calle tal que paso por mi casa me dijp que eras listoadssdadasdsa dasdasd asdasdas dasdsa dsa dasdasdsadasd sdffdfddddfdffdsfdsfdf dsfdsfd sfds fdsfdfdf dsf dsfdsfds fdsfdsfdsfds fdsfdsfdsf dsfdfdfdds fdsf dsf dsfdf dfdf df dsf df df df ds fdfd fdfdfdf dfd fd fdfdf df df d fdfdfdfdfs dfdfdfdfdf dfdfdfdf dfdfdfdd fddfds fdsfdf dsf</p>', '2018-04-20 22:18:58', 'yo mismo', 2),
(5, 'Colombia y 5 países más dejarán de participar en Unasur', '<p>Un total de seis países de la Unión de Naciones Suramericanas () comunicaron a Bolivia, que ostenta la presidencia temporal del bloque, su decisión de "no participar en las distintas instancias", hasta que no se garantice "el funcionamiento adecuado de la organización".&nbsp;</p><br style=""><p>El documento, al que este viernes tuvo acceso Efe, está dirigido al ministro de Relaciones Exteriores boliviano, Fernando Huanacuni,&nbsp;está firmado por los cancilleres de Argentina, <strong>Colombia, Chile, Brasil, Paraguay y Perú.</strong></p>', '2018-05-21 18:03:22', 'ElTiempo.com', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE `opciones` (
  `id` int(11) NOT NULL,
  `codigo` varchar(30) COLLATE utf8_bin NOT NULL,
  `nombre` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `opciones`
--

INSERT INTO `opciones` (`id`, `codigo`, `nombre`) VALUES
(12, 'TT1', 'Propietario con escritura'),
(13, 'TT2', 'Arrendatario'),
(14, 'TT3', 'Posesión tradicional y/o ancestral de tierras y territorios '),
(15, 'TT4', 'Estatal'),
(16, 'TT5', 'Concesión'),
(17, 'TT6', 'Autorización del propietario o administrador del área'),
(18, 'R1', 'Registro invima'),
(19, 'R2', 'Registro ICA'),
(20, 'R3', 'Registro nacional de turismo'),
(21, 'R4', 'Registro de plantación forestal'),
(22, 'P1', 'Permiso de aprovechamiento'),
(23, 'P2', 'Concesión de aguas (Subterráneas o superficiales)'),
(24, 'P3', 'Permiso de vertimientos o emisiones'),
(25, 'P4', 'Permiso tala de árboles'),
(26, 'P5', 'Permiso de movilizacion'),
(27, 'L1', 'Licencia ambiental'),
(28, 'O1', 'Plan de manejo ambiental'),
(29, 'PC1', 'Sistemas silvopastoriales'),
(30, 'PC2', 'Sistemas silvicultura'),
(31, 'PC3', 'Agroforestería'),
(32, 'PC4', 'Cultivos mixtos'),
(33, 'PC5', 'Cercas vivas/ barreras rompevientos/ corredores de conectividad de bosques'),
(34, 'PC6', 'Bosques para protección de nacimientos de agua, quebradas, ríos y lagunas'),
(35, 'PC7', 'Cercas o aislamiento para protección de nacimientos de agua, quebradas, ríos y lagunas'),
(36, 'PC8', 'Buen uso de recursos hídricos'),
(37, 'PC9', 'Control Biológico de plagas'),
(38, 'PC10', 'Fertilización orgánica'),
(39, 'PC11', 'Labranza mínima '),
(40, 'PC12', 'Uso de fuentes alternativas de energía'),
(41, 'PC13', 'Uso de practicas y/o tecnologías bajas en carbono'),
(42, 'AREA_ECO1', 'Bosque andino o niebla'),
(43, 'AREA_ECO2', 'Bosque húmedo'),
(44, 'AREA_ECO3', 'Bosque seco'),
(45, 'AREA_ECO4', 'Páramo'),
(46, 'AREA_ECO5', 'Marinos'),
(47, 'AREA_ECO6', 'Sabana'),
(48, 'AREA_ECO7', 'Manglar'),
(49, 'PM1', 'Protocolo o plan de aprovechamiento para productos silvestres maderables y no maderables'),
(50, 'PM2', 'Estudio de capacidad de carga para ecoturismo'),
(51, 'PM3', 'Plan de manejo ambiental'),
(52, 'PM4', 'Otro documento'),
(53, 'INVOLUCRA1', 'Como socios'),
(54, 'INVOLUCRA2', 'Como empleados directos'),
(55, 'INVOLUCRA3', 'Como empleados indirectos'),
(57, 'ACTIVIDAD_COMU1', 'Capacitación'),
(58, 'ACTIVIDAD_COMU2', 'Asistencia técnica'),
(59, 'ACTIVIDAD_COMU3', 'Recreación'),
(60, 'ACTIVIDAD_COMU4', 'Salud'),
(61, 'PR1', 'Capacitación'),
(62, 'PR2', 'Asistencia técnica'),
(63, 'PR3', 'Recreación'),
(64, 'PR4', 'Proyectos productivos'),
(65, 'PR5', 'Salud'),
(66, 'CE1', 'Certificación orgánica'),
(67, 'CE2', 'Comercio justo'),
(68, 'CE3', 'Análisis de y puntos Críticos de control (APPCC)'),
(69, 'CE4', 'Buenas practicas de manufactura (BPM)'),
(70, 'CE5', 'Buenas practicas agricolas (BPA)'),
(71, 'CE6', 'Buenas practicas pecuarias'),
(72, 'CE7', 'Rainforest Alliance'),
(73, 'CUMPLIMIENTO_LEGAL1', '¿La organización incumple con la legislación ambiental nacional aplicable?\r\nVer los resultados obtenidos en el formato de información AS en el numeral 2 de legislación ambiental colombiana.'),
(74, 'CONDICION_LABORAL1', '¿La organización contrata menores de edad? Si es así,  ¿Sus actividades involucran las peores formas de trabajo infantil y las actividades peligrosas y condiciones de trabajo nocivas para la salud e integridad física o psicológica?'),
(75, 'CONDICION_LABORAL2', '¿La organización genera algún tipo de trabajo forzado o bajo régimen de prisión?'),
(76, 'CONDICION_LABORAL3', '¿La organización promueve o implementa prácticas o políticas restrictivas o discriminatorias?'),
(77, 'CONDICION_LABORAL4', '¿El bien o servicio vulnera los derechos humanos?'),
(78, 'IMPACTO_AMBIENTAL1', '¿La organización ha introducido o utiliza especies exóticas invasoras? Si es así,  ¿Cuenta con un adecuado plan de manejo ambiental? Ejm especies exóticas de zoocria'),
(79, 'IMPACTO_AMBIENTAL2', '¿La organización utiliza especies listadas bajo CITES? Si es así, ¿Contada con autorización de la Autoridad Ambiental?'),
(80, 'IMPACTO_AMBIENTAL3', '¿La organización vulnera la conservación y preservación de los servicios ecosistemicos en el área de influencia directa?, ¿Cómo Contribuye?'),
(81, 'IMPACTO_AMBIENTAL4', '¿La organización fomenta y desarrolla su actividad productiva bajo la destrucción directa e indirecta de ecosistemas naturales, y/o genera detrimento sobre cualquier recurso natural?'),
(82, 'IMPACTO_AMBIENTAL5', '¿La organización promueve el uso de organismos genéticamente modificados o transgénicos?'),
(83, 'IMPACTO_SOCIAL1', '¿La organización vulnera los derechos de las comunidades indígenas, afrocolombianas u otras comunidades tradicionales al desarrollar sus actividades productivas en el territorios?'),
(84, 'IMPACTO_SOCIAL2', '¿La organización tiene conflictos sobre la tenencia de la tierra y fomenta el desplazamiento forzado?'),
(85, 'MATERIAL_PELIGROSO1', '¿La producción del bien o servicio utiliza materiales o sustancias de alta toxicidad para el ambiente o/y salud humana? Ej.. Mercurio, Arsénico, Agroquímicos (etiqueta roja y amarilla), entre otros.'),
(86, 'VIABILIDAD_ECONOMICA1', '¿La organización cuenta con estados financiaros, contabilidad o registro de ingreso y egresos?'),
(87, 'VIABILIDAD_ECONOMICA2', '¿El bien o servicio tiene potencial comercial y cuenta con estrategias de mercadeo que garanticen su sostenibilidad en el mercado (demanda del producto)?'),
(88, 'VIABILIDAD_ECONOMICA3', '¿El bien o servicio cuenta con un plan estratégico que incluya; misión, visión metas y estrategias, equipo de trabajo, plan de negocios, información, alianzas estratégicas y publicidad? '),
(89, 'VIABILIDAD_ECONOMICA5', '¿El precio del producto considera costos de transporte y logística, y la mano de obra familiar asociada al desarrollo del bien o servicio?'),
(90, 'CONTRIBUCION_CONSERVACION1', '¿El bien o servicio evita el uso de monocultivos?'),
(91, 'CONTRIBUCION_CONSERVACION2', '¿La organización implementa acciones de conservación de los ecosistemas naturales existentes?'),
(92, 'CONTRIBUCION_CONSERVACION3', '¿El bien o servicio mantiene la biodiversidad nativa y mejora las condiciones de los recursos naturales existentes?'),
(93, 'CONTRIBUCION_CONSERVACION4', '¿La organización  tiene acciones para la disminución de la contaminación? ¿Cuáles?'),
(94, 'CONTRIBUCION_CONSERVACION5', '¿El bien o servicio contribuye a la disminución  de la presión de los recursos naturales? ¿Cómo?'),
(95, 'CONTRIBUCION_CONSERVACION6', '¿El bien o servicio mejora las condiciones de los recursos naturales? ¿Cómo?'),
(96, 'CONTRIBUCION_CONSERVACION7', '¿El bien o servicio implementa acciones que permiten la reducción de emisiones de gases de efecto invernadero-GEI? ¿Cómo?'),
(97, 'CONTRIBUCION_CONSERVACION8', '¿El bien o servicio involucra fuentes de energía alternativa o tecnologías más limpias? ¿Cuáles?'),
(98, 'CICLO_VIDA1', '¿Los impactos de sus actividades sobre el medio ambiente, la comunidad y los trabajadores en las principales etapas del sistema productivo están edificados?'),
(99, 'CICLO_VIDA2', '¿La organización implementa acciones de prevención ó mitigación de los  impactos generados en su sistema productivo o ciclo de vida del producto? ¿Cuáles?'),
(100, 'CICLO_VIDA3', '¿El bien o servicio considera criterios ambientales en la compra productos o insumos necesarios para su proceso de producción o incluye autoabastecimiento con criterios ambientales?'),
(101, 'CICLO_VIDA4', '¿La organización realiza entrenamiento y capacitaciones a sus empleados con énfasis en el desarrollo sostenible en su sistema productivo  o ciclo de vida del bien o servicio'),
(102, 'CICLO_VIDA5', '¿El bien o servicio promueve acciones para la innovación, la investigación y el desarrollo de valor agregado al bien o servicio? ¿Cuáles?'),
(103, 'VIDA_UTIL1', '¿Se involucran procesos que extiendan la vida útil y/o mejoren la calidad del bien o servicio?'),
(104, 'VIDA_UTIL2', '¿Se realizan acciones que permitan que la vida útil del producto sea superior al promedio de los bienes o servicios similares?'),
(105, 'VIDA_UTIL3', '¿El bien o servicio cuenta con buenas prácticas de higiene y sanidad?'),
(106, 'SUSTITUCION_MATERIALES1', '¿En el producción de bien o servicio se  previene o mitiga el uso de sustancias que afectan el ambiente y/o la salud humana y se cuenta con un registro de sustitución de sustancias, hojas de seguridad de productos utilizados o análisis de laboratorio?'),
(107, 'MATERIALES_RECICLADOS1', '¿La organización cuenta con un manejo integral de residuos? Por favor describir.'),
(108, 'MATERIALES_RECICLADOS2', '¿Se utilizan materiales reciclados en la fabricación del bien o servicio? ¿Cuales?'),
(109, 'MATERIALES_RECICLADOS3', '¿Los empaques, envases o empaques del bien incluye materiales recuperables, reciclables, reutilizables o que se puedan incorporar en un proceso productivo? ¿Cuales?'),
(110, 'MATERIALES_RECICLADOS4', '¿El bien o servicio cuenta con un plan de acción que permita el cambio de materiales no renovables por renovables o reciclados?'),
(111, 'SOSTENIBLE_RECURSO1', '¿La organización lleva un registro de consumo mensual de energía y realiza acciones para su ahorro y uso eficiente? ¿Cuales?'),
(112, 'SOSTENIBLE_RECURSO2', '¿La organización lleva un registro de consumo mensual de agua y realiza acciones para su ahorro y uso eficiente? ¿Cuales?'),
(113, 'SOSTENIBLE_RECURSO3', '¿Las principales fuentes de contaminación atmosférica, auditiva, olores y visual están identificadas en la zona directa de la organización? ¿Cuáles? '),
(114, 'SOSTENIBLE_RECURSO4', '¿Las principales fuentes de contaminación atmosférica, auditiva, olores y visual están identificadas en la zona indirecta de la organización? ¿Cuáles? '),
(115, 'SOSTENIBLE_RECURSO5', '¿La organización disminuye el consumo de recursos renovables y no renovales? ¿Cómo?'),
(116, 'SOSTENIBLE_RECURSO6', '¿El bien o servicio implica acciones extractivas sobre los recursos naturales? Si es así ¿Se cuenta con un programa de manejo ambiental?'),
(117, 'RESPO_SOCIAL_EMPRESA1', '¿La organización cuenta con programas de gestión social, de salud y seguridad industrial corporativos? ¿Cuales?'),
(118, 'RESPO_SOCIAL_EMPRESA2', '¿La organización implementa prácticas al interior de la empresa para disminuir riesgos asociados a desastres naturales?'),
(119, 'RESPO_SOCIAL_EMPRESA3', '¿La organización mejora la calidad de vida de sus empleados (vivienda, educación, cultura, recreación y deporte)? ¿Cómo?'),
(120, 'RESPO_SOCIAL_VALOR1', '¿La organización informa sobre las particularidades de lo(s) proceso(s) de producción y/o comercialización, y resalta su aporte en la creación de valor y buenas prácticas sostenibles?'),
(121, 'RESPO_SOCIAL_VALOR2', '¿La organización tiene contratos, alianzas o convenios con empresas de economía social, MIPYMES y/o promueve estrategias de encadenamiento? ¿Cuáles?'),
(122, 'RESPO_SOCIAL_VALOR3', '¿La organización promueve la devolución de empaques, envases y embalajes? '),
(123, 'RESPO_SOCIAL_EXTERIOR1', '¿La organización apoya la generación de empleo local?'),
(124, 'RESPO_SOCIAL_EXTERIOR2', '¿La organización tiene programas y/o apoya fundaciones u organizaciones de inversión social y desarrollo comunitario?'),
(125, 'RESPO_SOCIAL_EXTERIOR3', '¿La organización sensibiliza a sus consumidores en ser responsable y  sostenibles a la hora de adquirir sus productos? '),
(126, 'RESPO_SOCIAL_EXTERIOR4', '¿La organización respeta las áreas y actividades de importancia social, cultural, biológica, ambiental y religiosa para la comunidad? '),
(127, 'RESPO_SOCIAL_EXTERIOR5', '¿La organización tiene mecanismo de consulta a las comunidades aledañas y clientes, y da respuesta a las quejas o reclamos de las mismas?'),
(128, 'RESPO_SOCIAL_EXTERIOR6', '¿La organización protege el conocimiento Ancestral o tradicional y lo salvaguarda?'),
(129, 'COMUNICACION_ATRIBUTOS1', '¿Se comunican los atributos ambientales y sociales del bien o servicio a los clientes y el público en general?'),
(130, 'COMUNICACION_ATRIBUTOS2', '¿La organización involucra actividades de educación y cultura ambiental?'),
(133, 'ESQUEMAS_RECONOCIMIENTOS1', '¿ El bien o servicio tiene ecoetiquetas, cartas de reconocimiento, registros de auditorias, sellos etc.? ¿Cuáles?'),
(134, 'ESQUEMAS_RECONOCIMIENTOS2', '¿ La organización mide su huella de carbono, regulación hídrica o servicios ecosistemicos? ¿Cuál(es)?'),
(135, 'RESPON_SOCIAL_ADICCIONAL1', '¿La organización otorga condiciones sociales y pago de salarios mejores a las exigidas por la legislación nacional vigente?'),
(136, 'RESPON_SOCIAL_ADICCIONAL2', '¿La organización contrata personal en estado de vulnerabilidad?'),
(137, 'VIABILIDAD_ECONOMICA4', '¿Las ventas del bien o servicio son suficientes para hacerle frente a las necesidades financieras (gastos, remuneración de sus empleados, otros)?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orientacion`
--

CREATE TABLE `orientacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `orientacion`
--

INSERT INTO `orientacion` (`id`, `nombre`) VALUES
(1, 'Privada'),
(2, 'Pública'),
(3, 'ONG'),
(4, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otros_certificacion`
--

CREATE TABLE `otros_certificacion` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `etapa_id` int(11) NOT NULL,
  `vigencia` varchar(30) COLLATE utf8_bin NOT NULL,
  `observacion` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `otros_certificacion`
--

INSERT INTO `otros_certificacion` (`id`, `empresa_id`, `nombre`, `etapa_id`, `vigencia`, `observacion`) VALUES
(4, 11, 'algunita', 2, '8', '88'),
(5, 16, '', 1, '', 'kkk'),
(6, 17, '', 1, '', ''),
(7, 15, '', 1, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otros_conservacion`
--

CREATE TABLE `otros_conservacion` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `area` varchar(20) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `otros_conservacion`
--

INSERT INTO `otros_conservacion` (`id`, `empresa_id`, `nombre`, `area`, `descripcion`) VALUES
(3, 11, 'Otrico', 'otro', 'otroooo'),
(4, 16, '', '', ''),
(5, 17, '', '', ''),
(6, 15, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otros_ecosistema`
--

CREATE TABLE `otros_ecosistema` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `area` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `otros_ecosistema`
--

INSERT INTO `otros_ecosistema` (`id`, `empresa_id`, `nombre`, `area`) VALUES
(2, 11, 'Jungla', '8898'),
(3, 16, '', ''),
(4, 17, '', ''),
(5, 15, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otros_legislacion`
--

CREATE TABLE `otros_legislacion` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `cumple_nocumple_id` int(11) NOT NULL,
  `observacion` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `otros_legislacion`
--

INSERT INTO `otros_legislacion` (`id`, `empresa_id`, `nombre`, `cumple_nocumple_id`, `observacion`) VALUES
(4, 11, 'otro--', 1, '11111'),
(5, 16, 'mmm', 2, 'hgjk'),
(6, 17, '', 2, ''),
(7, 15, '', 2, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otro_actividades`
--

CREATE TABLE `otro_actividades` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin NOT NULL,
  `recurso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `otro_actividades`
--

INSERT INTO `otro_actividades` (`id`, `empresa_id`, `nombre`, `descripcion`, `recurso_id`) VALUES
(4, 11, 'Alguna', 'algunita', 2),
(5, 16, '', '', 1),
(6, 17, '', '', 1),
(7, 15, '', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otro_involucra`
--

CREATE TABLE `otro_involucra` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `otro_involucra`
--

INSERT INTO `otro_involucra` (`id`, `empresa_id`, `nombre`) VALUES
(4, 11, 'De ninguna forma                                                                  '),
(5, 16, '46545'),
(6, 17, ''),
(7, 15, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otro_programa`
--

CREATE TABLE `otro_programa` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `otro_programa`
--

INSERT INTO `otro_programa` (`id`, `empresa_id`, `nombre`, `descripcion`) VALUES
(2, 11, 'Pencion', 'Pencionsita'),
(3, 16, '', 'klp'),
(4, 17, '', ''),
(5, 15, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otro_tenencia_tierra`
--

CREATE TABLE `otro_tenencia_tierra` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `otro_tenencia_tierra`
--

INSERT INTO `otro_tenencia_tierra` (`id`, `empresa_id`, `nombre`, `descripcion`) VALUES
(3, 11, 'algunos', 'no se cualesssssssss'),
(4, 16, '', ''),
(5, 17, '', ''),
(6, 15, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`) VALUES
(1, 'Colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL,
  `aplica_noaplica_id` int(11) NOT NULL,
  `cumple_nocumple_id` int(11) NOT NULL,
  `vigencia` varchar(20) COLLATE utf8_bin NOT NULL,
  `observacion` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`id`, `empresa_id`, `opciones_id`, `aplica_noaplica_id`, `cumple_nocumple_id`, `vigencia`, `observacion`) VALUES
(6, 11, 22, 2, 2, '1', '11'),
(7, 11, 23, 1, 1, '2', '22'),
(8, 11, 24, 2, 2, '3', '33'),
(9, 11, 25, 1, 2, '4', '44'),
(10, 11, 26, 2, 2, '5', '55'),
(11, 16, 22, 2, 2, '', ''),
(12, 16, 23, 2, 2, '', ''),
(13, 16, 24, 2, 2, '', ''),
(14, 16, 25, 2, 1, '1', '2'),
(15, 16, 26, 2, 2, '', ''),
(16, 17, 22, 2, 2, '', ''),
(17, 17, 23, 2, 2, '', ''),
(18, 17, 24, 2, 2, '', ''),
(19, 17, 25, 2, 2, '', ''),
(20, 17, 26, 2, 2, '', ''),
(21, 13, 22, 1, 1, '', ''),
(22, 13, 23, 2, 2, '', ''),
(23, 13, 24, 1, 2, '', ''),
(24, 13, 25, 2, 1, '', ''),
(25, 13, 26, 2, 2, '', ''),
(26, 15, 22, 2, 2, '', ''),
(27, 15, 23, 2, 2, '', ''),
(28, 15, 24, 2, 2, '', ''),
(29, 15, 25, 2, 2, '', ''),
(30, 15, 26, 2, 2, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `identificacion` varchar(15) COLLATE utf8_bin NOT NULL,
  `nombre1` varchar(30) COLLATE utf8_bin NOT NULL,
  `nombre2` varchar(30) COLLATE utf8_bin NOT NULL,
  `apellido1` varchar(30) COLLATE utf8_bin NOT NULL,
  `paellido2` varchar(30) COLLATE utf8_bin NOT NULL,
  `correo` varchar(30) COLLATE utf8_bin NOT NULL,
  `celular` varchar(15) COLLATE utf8_bin NOT NULL,
  `fijo` varchar(15) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(40) COLLATE utf8_bin NOT NULL,
  `rol_id` int(11) NOT NULL,
  `entidad` varchar(150) COLLATE utf8_bin NOT NULL,
  `area_id` int(11) NOT NULL,
  `cargo` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `identificacion`, `nombre1`, `nombre2`, `apellido1`, `paellido2`, `correo`, `celular`, `fijo`, `direccion`, `rol_id`, `entidad`, `area_id`, `cargo`) VALUES
(1, '1020', 'prueba1', '', '', '', 'asda@gmail.commm', '88910', '468', 'bogota dc', 4, '', 1, ''),
(8, '123', 'estavan', '', '', '', 'asda@gmail.com', '', '', '', 4, '', 1, ''),
(11, '123489999', 'Emelecio', '', 'Martinez', 'rojas', 'asda@gmail.com', '321256346', '6718133', 'porvenir', 2, '', 1, ''),
(13, '107789456', 'Hrinson', '', '', '', 'tbs47@hotmail.com', '3157894653', '6728695', 'pablo sexto', 4, '', 1, ''),
(15, '895466', 'Alfalfa', '', '', '', 'asfas@hotmail.com', '', '', '', 4, '', 1, ''),
(16, '456546', 'yo', '', '', '', 'asda@gmail.com', '', '', '', 4, '', 1, ''),
(17, '1235464', 'stiven', '', 'Morales', 'jj', 'dasd@hotm.copm', '3201646', '67125', 'PABLO SEXTO', 1, '', 1, ''),
(20, '26260656', 'Rosa Renteria Palacios', '', '', '', 'renteria@gmail.com', '6127068685', '45646', 'margaritas', 4, '', 1, ''),
(21, '46456564', 'lllllllll', '', '', '', '', '', '', '', 4, '', 1, ''),
(24, '555555', 'Luis', 'Fernando', 'Palacios', 'Mosquera', 'da-vo1996@hotmail.com', '3210156441635', '665464', 'jgfjhgfhghj', 2, '', 1, ''),
(25, '123345678', 'Yovanny', '', 'Hinestroza', 'Pereas', 'asfdasf@gmail.com', '320654134', '645712', 'niño jesus', 3, '', 1, ''),
(26, ' 123', 'miguel', ' ', ' ', ' rojas', 'asda@gmail.com', ' 321256346', ' ', ' porvenir', 2, '', 1, ''),
(27, ' 123', 'amancio', ' algo', ' ', ' rojas', 'asda@gmail.com', ' 321256346', ' ', ' porvenir', 2, '', 1, ''),
(28, ' 123', ' rafael', ' asdasdas', ' ', ' rojas', 'asda@gmail.com', ' 321256346', ' ', ' porvenir', 2, '', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_manejo`
--

CREATE TABLE `plan_manejo` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL,
  `aplica_noaplica_id` int(11) NOT NULL,
  `cumple_nocumple_id` int(11) NOT NULL,
  `vigencia` varchar(100) COLLATE utf8_bin NOT NULL,
  `observacion` varchar(100) COLLATE utf8_bin NOT NULL,
  `confirmacion` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `plan_manejo`
--

INSERT INTO `plan_manejo` (`id`, `empresa_id`, `opciones_id`, `aplica_noaplica_id`, `cumple_nocumple_id`, `vigencia`, `observacion`, `confirmacion`) VALUES
(21, 11, 49, 1, 1, '1', '111', 'si'),
(22, 11, 51, 1, 2, '3', '333', 'si'),
(23, 11, 50, 2, 2, '', '', 'no'),
(24, 11, 52, 2, 2, '', '', 'no'),
(25, 16, 50, 2, 2, '56', '', 'si'),
(26, 16, 52, 2, 2, '78', '', 'si'),
(27, 16, 49, 2, 2, '', '', 'no'),
(28, 16, 51, 2, 2, '', '', 'no'),
(29, 17, 49, 2, 2, '10', '', 'si'),
(30, 17, 51, 2, 2, '10', '', 'si'),
(31, 17, 50, 2, 2, '', '', 'no'),
(32, 17, 52, 2, 2, '', '', 'no'),
(33, 15, 49, 2, 2, '', '', 'no'),
(34, 15, 50, 2, 2, '', '', 'no'),
(35, 15, 51, 2, 2, '', '', 'no'),
(36, 15, 52, 2, 2, '', '', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_mejora`
--

CREATE TABLE `plan_mejora` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL,
  `acciones` text COLLATE utf8_bin NOT NULL,
  `actor` text COLLATE utf8_bin NOT NULL,
  `resultado` text COLLATE utf8_bin NOT NULL,
  `1` varchar(1) COLLATE utf8_bin NOT NULL,
  `2` varchar(1) COLLATE utf8_bin NOT NULL,
  `3` varchar(1) COLLATE utf8_bin NOT NULL,
  `4` varchar(1) COLLATE utf8_bin NOT NULL,
  `5` varchar(1) COLLATE utf8_bin NOT NULL,
  `6` varchar(1) COLLATE utf8_bin NOT NULL,
  `7` varchar(1) COLLATE utf8_bin NOT NULL,
  `8` varchar(1) COLLATE utf8_bin NOT NULL,
  `9` varchar(1) COLLATE utf8_bin NOT NULL,
  `10` varchar(1) COLLATE utf8_bin NOT NULL,
  `11` varchar(1) COLLATE utf8_bin NOT NULL,
  `12` varchar(1) COLLATE utf8_bin NOT NULL,
  `observacion` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `plan_mejora`
--

INSERT INTO `plan_mejora` (`id`, `empresa_id`, `opciones_id`, `acciones`, `actor`, `resultado`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `observacion`) VALUES
(1, 13, 78, 'jhgkjh', 'hgkjhgk', 'jhgfjkhg', 'x', 'x', 'x', 'x', 'x', 'x', '', '', '', '', '', '', 'gyhuiy'),
(2, 13, 79, 'hjkfyutf', 'uyiu', 'uy', 'f', 'x', 'x', 'x', 'x', 'x', '', '', '', 'x', 'x', 'x', ''),
(3, 13, 80, 'iuygiuygu', '', 'guiyg', 'u', 'y', 'y', 'u', 'h', '', '', '', '', '', '', '', ''),
(4, 13, 81, 'fuyfgiu', '', '', '', 'y', 'x', 'x', 'x', 'x', 'x', '', 'u', '', '', '', 'iuygo'),
(5, 13, 82, 'iuy', '', 'iyu', 'o', 'y', 'u', 'i', 'o', '', '', '', '', '', '', '', 'kgjhg'),
(6, 13, 89, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 13, 95, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 13, 98, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 13, 103, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 13, 104, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 13, 105, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 13, 106, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 13, 108, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 13, 112, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 13, 113, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 13, 114, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 13, 115, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 13, 116, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 13, 117, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 13, 119, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 13, 121, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 13, 123, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 13, 125, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 13, 129, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 13, 133, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 13, 135, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 11, 76, 'asd', 'ghgh', 'hjhhjhj', 'x', 'x', 'x', 'x', 'x', 'x', '', '', '', '', '', '', 'algo'),
(28, 11, 78, 'lkñ', 'mmm', 'mm', 'x', 'x', 'x', 'x', 'x', '', '', '', '', 'x', 'x', 'x', 'asasda'),
(29, 11, 79, 'jhk', 'jklh', 'kjhl', 'x', 'x', '', '', 'x', '', '', 'x', 'x', 'x', '', '', 'sadasd'),
(30, 11, 84, 'hjgaksjhagsdj', 'yyy', 'yyy', 'x', 'x', '', '', '', '', 'x', '', '', '', '', '', 'asdfa'),
(31, 11, 86, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 11, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 11, 89, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 11, 137, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 11, 90, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 11, 91, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 11, 92, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, 11, 94, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, 11, 95, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, 11, 96, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, 11, 97, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, 11, 99, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, 11, 101, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 11, 102, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 11, 103, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 11, 105, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 11, 106, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 11, 111, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 11, 112, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 11, 113, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, 11, 114, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, 11, 116, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, 11, 117, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 11, 119, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, 11, 120, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, 11, 121, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, 11, 122, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, 11, 123, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, 11, 124, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, 11, 125, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, 11, 126, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(62, 11, 127, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(63, 11, 128, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(64, 11, 129, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(65, 11, 130, 'asdfas', 'hgjfdjh', 'gfdhg', 'x', 'x', '', '', '', 'x', 'x', 'x', 'x', 'x', '', 'x', 'iuytiuyt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_bin NOT NULL,
  `confirmacion` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`id`, `empresa_id`, `opciones_id`, `descripcion`, `confirmacion`) VALUES
(17, 11, 57, '1111', 'si'),
(18, 11, 59, '33333', 'si'),
(19, 11, 58, '', 'no'),
(20, 11, 60, '', 'no'),
(21, 16, 59, 'kjhgjk', 'si'),
(22, 16, 57, '', 'no'),
(23, 16, 58, '', 'no'),
(24, 16, 60, '', 'no'),
(25, 17, 58, 'asiasdfsdf', 'si'),
(26, 17, 57, '', 'no'),
(27, 17, 59, '', 'no'),
(28, 17, 60, '', 'no'),
(29, 15, 57, '', 'no'),
(30, 15, 58, '', 'no'),
(31, 15, 59, '', 'no'),
(32, 15, 60, '', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recurso`
--

CREATE TABLE `recurso` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `recurso`
--

INSERT INTO `recurso` (`id`, `nombre`) VALUES
(1, 'Lo realizó con recursos propios'),
(2, 'Gestionó los recursos ante otra entidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `pais_id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id`, `pais_id`, `nombre`) VALUES
(3, 1, 'Pacifica'),
(4, 1, 'Caribe'),
(5, 1, 'Andina'),
(6, 1, 'Orinoquía'),
(7, 1, 'Amazónica'),
(8, 1, 'Insular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL,
  `aplica_noaplica_id` int(11) NOT NULL,
  `cumple_nocumple_id` int(11) NOT NULL,
  `vigencia` varchar(20) COLLATE utf8_bin NOT NULL,
  `observacion` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `empresa_id`, `opciones_id`, `aplica_noaplica_id`, `cumple_nocumple_id`, `vigencia`, `observacion`) VALUES
(5, 11, 18, 1, 1, '1', '11'),
(6, 11, 19, 1, 1, '2', '22'),
(7, 11, 20, 2, 2, '3', '33'),
(8, 11, 21, 2, 2, '4', '44'),
(9, 16, 18, 2, 2, '', ''),
(10, 16, 19, 2, 2, '', ''),
(11, 16, 20, 1, 2, '10', '20'),
(12, 16, 21, 2, 2, '', ''),
(13, 17, 18, 1, 2, '10', 'fgsdf'),
(14, 17, 19, 2, 2, '', ''),
(15, 17, 20, 1, 1, '10', 'kjlñkj'),
(16, 17, 21, 2, 2, '', ''),
(17, 13, 18, 1, 1, '20', 'HGJFGJF22222'),
(18, 13, 19, 1, 1, '10', 'KJKJNKJ'),
(19, 13, 20, 2, 2, '5', 'KJLKLJH'),
(20, 13, 21, 1, 1, '25', 'KJHGKUJH'),
(21, 15, 18, 2, 2, '', ''),
(22, 15, 19, 2, 2, '', ''),
(23, 15, 20, 2, 2, '', ''),
(24, 15, 21, 2, 2, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre`) VALUES
(1, 'Administrador de contenido'),
(2, 'Verificador'),
(3, 'Administrador verificador'),
(4, 'Representante legal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector`
--

CREATE TABLE `sector` (
  `id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `sector`
--

INSERT INTO `sector` (`id`, `categoria_id`, `nombre`) VALUES
(1, 1, 'Biocomercio'),
(2, 1, 'Agrosistemas Sostenibles'),
(3, 2, 'Aprovechamiento y valoración de residuos'),
(4, 2, 'Fuentes no convencionales de energía renovableFuentes no convencionales de energía renovable'),
(5, 2, 'Construcción Sostenible '),
(6, 2, 'Otros bienes y Productos Verdes Sostenibles '),
(7, 3, 'Mercado Regulado'),
(8, 3, 'Mercado Voluntario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id`, `nombre`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `si_no`
--

CREATE TABLE `si_no` (
  `id` int(11) NOT NULL,
  `nombre` varchar(5) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `si_no`
--

INSERT INTO `si_no` (`id`, `nombre`) VALUES
(1, 'Si'),
(2, 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `si_no_noaplica`
--

CREATE TABLE `si_no_noaplica` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `si_no_noaplica`
--

INSERT INTO `si_no_noaplica` (`id`, `nombre`) VALUES
(1, 'Si'),
(2, 'No'),
(3, 'No Aplica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_bin NOT NULL,
  `id_img_page` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `slide`
--

INSERT INTO `slide` (`id`, `titulo`, `descripcion`, `id_img_page`) VALUES
(3, 'prueba1', 'Descripcion 1', 7),
(4, 'test2', 'test dos para slider', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socio_empleado_item`
--

CREATE TABLE `socio_empleado_item` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `socio_empleado_item`
--

INSERT INTO `socio_empleado_item` (`id`, `nombre`) VALUES
(1, 'Número de socios'),
(2, 'Socios vinculados laboralmente con la empresa'),
(3, 'Número de empleados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sost_economica`
--

CREATE TABLE `sost_economica` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `bien_servicio` varchar(100) COLLATE utf8_bin NOT NULL,
  `vendida_anual` double NOT NULL,
  `unidad_medida_id` int(11) NOT NULL,
  `costo_produccion` double NOT NULL,
  `precio_v_unitario` double NOT NULL,
  `ganancia_unidad` double NOT NULL,
  `ventas_anual` double NOT NULL,
  `si_no_id` int(11) NOT NULL COMMENT 'ingresos superior al costo? '
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `sost_economica`
--

INSERT INTO `sost_economica` (`id`, `empresa_id`, `bien_servicio`, `vendida_anual`, `unidad_medida_id`, `costo_produccion`, `precio_v_unitario`, `ganancia_unidad`, `ventas_anual`, `si_no_id`) VALUES
(6, 8, 'alguno', 50, 1, 2500, 100, 50, 800000, 1),
(7, 11, 'pera', 1, 2, 15, 35, 20, 35, 1),
(8, 11, 'yuca', 1, 2, 2, 50, 48, 50, 2),
(9, 11, 'papa', 2, 2, 2, 231, 229, 462, 2),
(10, 16, 'ese mismo', 10, 1, 5, 23, 56, 87, 1),
(11, 17, 'blusa', 0, 1, 0, 0, 0, 0, 1),
(12, 17, 'pantalon', 0, 1, 0, 0, 0, 0, 1),
(13, 17, 'falda', 0, 1, 0, 0, 0, 0, 1),
(14, 17, 'vestidos', 0, 1, 0, 0, 0, 0, 1),
(15, 13, 'pera', 5, 1, 26, 5, -21, 25, 1),
(16, 15, 'pescadito', 5, 1, 0, 0, 0, 0, 1),
(17, 15, 'remolacha', 0, 1, 0, 0, 0, 0, 1),
(18, 15, 'algunito', 0, 1, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subsector`
--

CREATE TABLE `subsector` (
  `id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `subsector`
--

INSERT INTO `subsector` (`id`, `sector_id`, `nombre`) VALUES
(1, 1, 'Maderables '),
(2, 1, 'No maderables'),
(3, 1, 'Productos derivados de fauna silvestre'),
(4, 1, 'Turismo de naturaleza/Ecoturismo'),
(5, 1, 'Recursos genéticos y productos derivados'),
(6, 2, 'Sistemas de producción ecológico, biológico, orgánico '),
(7, 3, 'Aprovechamiento y valoración de Residuos '),
(8, 4, 'Energía Solar'),
(9, 4, 'Energía Eólica'),
(10, 4, 'Energía Geotérmica'),
(11, 4, 'Biomasa'),
(12, 4, 'Energía de los Mares'),
(13, 4, 'Pequeños aprovechamientos hidroeléctricos'),
(14, 5, 'Construcción Sostenible '),
(15, 6, 'Otros bienes y Productos Verdes Sostenibles'),
(16, 7, 'Mercado Regulado'),
(17, 8, 'Mercado Voluntario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tamaño_empresa`
--

CREATE TABLE `tamaño_empresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tamaño_empresa`
--

INSERT INTO `tamaño_empresa` (`id`, `nombre`) VALUES
(2, 'Micro empresa'),
(3, 'Pequeña empresa'),
(4, 'Mediana empresa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tenencia_tierra`
--

CREATE TABLE `tenencia_tierra` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL,
  `descripcion` varchar(40) COLLATE utf8_bin NOT NULL,
  `confirmacion` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tenencia_tierra`
--

INSERT INTO `tenencia_tierra` (`id`, `empresa_id`, `opciones_id`, `descripcion`, `confirmacion`) VALUES
(69, 11, 12, 'uno', 'si'),
(70, 11, 14, 'tres', 'si'),
(71, 11, 16, 'cinco', 'si'),
(72, 11, 13, 'dos', 'si'),
(73, 11, 15, '', 'no'),
(74, 11, 17, '', 'no'),
(75, 16, 12, 'jhk', 'si'),
(76, 16, 14, 'kjl', 'si'),
(77, 16, 13, '', 'no'),
(78, 16, 15, '', 'no'),
(79, 16, 16, '', 'no'),
(80, 16, 17, '', 'no'),
(81, 17, 13, 'Yo Soy', 'si'),
(82, 17, 15, 'El Mismo', 'si'),
(83, 17, 17, 'asfdasf', 'si'),
(84, 17, 12, '', 'no'),
(85, 17, 14, '', 'no'),
(86, 17, 16, '', 'no'),
(87, 15, 12, '', 'no'),
(88, 15, 13, '', 'no'),
(89, 15, 14, '', 'no'),
(90, 15, 15, '', 'no'),
(91, 15, 16, '', 'no'),
(92, 15, 17, '', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_identificacion`
--

CREATE TABLE `tipo_identificacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipo_identificacion`
--

INSERT INTO `tipo_identificacion` (`id`, `nombre`) VALUES
(1, 'CC'),
(2, 'TI'),
(3, 'RC'),
(4, 'NIT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_persona`
--

CREATE TABLE `tipo_persona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipo_persona`
--

INSERT INTO `tipo_persona` (`id`, `nombre`) VALUES
(1, 'Natural'),
(2, 'Juridica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vinculacion`
--

CREATE TABLE `tipo_vinculacion` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `vinculacion_id` int(11) NOT NULL,
  `cantidad` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipo_vinculacion`
--

INSERT INTO `tipo_vinculacion` (`id`, `empresa_id`, `vinculacion_id`, `cantidad`) VALUES
(1, 1, 1, '10'),
(2, 1, 2, '10'),
(3, 1, 3, ''),
(16, 8, 1, ''),
(17, 8, 2, ''),
(18, 8, 3, ''),
(19, 15, 1, ''),
(20, 15, 2, ''),
(21, 15, 3, ''),
(22, 16, 1, ''),
(23, 16, 2, ''),
(24, 16, 3, ''),
(25, 17, 1, '3'),
(26, 17, 2, '2'),
(27, 17, 3, '1'),
(28, 18, 1, ''),
(29, 18, 2, ''),
(30, 18, 3, ''),
(31, 11, 1, '5'),
(32, 11, 2, '12'),
(33, 11, 3, '2'),
(34, 13, 1, '2'),
(35, 13, 2, '5'),
(36, 13, 3, '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_ventas`
--

CREATE TABLE `total_ventas` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `valor` double NOT NULL,
  `anio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `total_ventas`
--

INSERT INTO `total_ventas` (`id`, `empresa_id`, `valor`, `anio`) VALUES
(5, 11, 547, 2019),
(6, 16, 5446, 2200),
(7, 17, 0, 0),
(8, 15, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_medida`
--

CREATE TABLE `unidad_medida` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `unidad_medida`
--

INSERT INTO `unidad_medida` (`id`, `nombre`) VALUES
(1, 'Kg'),
(2, 'Lb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verificacion_1`
--

CREATE TABLE `verificacion_1` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL,
  `si_no_noaplica_id` int(11) NOT NULL,
  `observacion` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `verificacion_1`
--

INSERT INTO `verificacion_1` (`id`, `empresa_id`, `opciones_id`, `si_no_noaplica_id`, `observacion`) VALUES
(1, 13, 73, 3, 'kkkk'),
(2, 13, 74, 2, 'H'),
(3, 13, 75, 2, 'H'),
(4, 13, 76, 2, 'H'),
(5, 13, 77, 2, 'H'),
(6, 13, 78, 1, 'H'),
(7, 13, 79, 1, 'H'),
(8, 13, 80, 1, 'H'),
(9, 13, 81, 1, 'H'),
(10, 13, 82, 1, 'H'),
(11, 13, 83, 2, 'Hj'),
(12, 13, 84, 2, 'kjh'),
(13, 13, 85, 3, 'oiji'),
(14, 11, 73, 2, 'Esta bienmmmmmmmmmmm'),
(15, 11, 74, 2, 'Bien'),
(16, 11, 75, 2, 'Ninguno'),
(17, 11, 76, 1, 'Tiene que mejorar'),
(18, 11, 77, 2, 'No los vulnera'),
(19, 11, 78, 1, 'Algunas veces y no tiene plan de manejo'),
(20, 11, 79, 1, 'algunas'),
(21, 11, 80, 2, 'no vulnera'),
(22, 11, 81, 2, 'no '),
(23, 11, 82, 2, 'no'),
(24, 11, 83, 2, 'no'),
(25, 11, 84, 1, 'tiene conflicto con algunos vecinos'),
(26, 11, 85, 2, 'Ninguna'),
(27, 17, 73, 2, 'asdas'),
(28, 17, 74, 1, 'asd'),
(29, 17, 75, 1, 'asdgf'),
(30, 17, 76, 1, 'sdfgsdf'),
(31, 17, 77, 2, 'sdfgsdf'),
(32, 17, 78, 2, 'sdfgsd'),
(33, 17, 79, 1, 'sdfg'),
(34, 17, 80, 1, 'sdfg'),
(35, 17, 81, 1, 'sdfg'),
(36, 17, 82, 1, 'sdfg'),
(37, 17, 83, 1, 'sdfg'),
(38, 17, 84, 2, 'sdfg'),
(39, 17, 85, 1, 'sdfgsdfgs');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verificacion_2`
--

CREATE TABLE `verificacion_2` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL,
  `calificador_id` int(11) NOT NULL,
  `observacion` text COLLATE utf8_bin NOT NULL,
  `evidencia` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `verificacion_2`
--

INSERT INTO `verificacion_2` (`id`, `empresa_id`, `opciones_id`, `calificador_id`, `observacion`, `evidencia`) VALUES
(556, 13, 86, 3, 'sdaf', '86_13_logo_code.png'),
(557, 13, 87, 3, 'sdf', ''),
(558, 13, 88, 3, 'sdf', ''),
(559, 13, 89, 2, 'sdf', ''),
(560, 13, 137, 4, 'sdf', '137_13_logo_code.png'),
(561, 13, 90, 3, 'sdf', ''),
(562, 13, 91, 3, 'sdf', ''),
(563, 13, 92, 3, 'sdf', ''),
(564, 13, 93, 4, 'asdf', ''),
(565, 13, 94, 3, 'sadf', ''),
(566, 13, 95, 1, 'sdf', ''),
(567, 13, 96, 3, 'sdfa', ''),
(568, 13, 97, 3, 'asdf', ''),
(569, 13, 98, 1, 'asdf', ''),
(570, 13, 99, 3, 'asdf', ''),
(571, 13, 100, 4, 'asdf', ''),
(572, 13, 101, 3, 'asfd', ''),
(573, 13, 102, 3, 'asdf', ''),
(574, 13, 103, 1, 'asdf', ''),
(575, 13, 104, 2, 'asdf', ''),
(576, 13, 105, 1, 'asdf', ''),
(577, 13, 106, 2, 'asdf', ''),
(578, 13, 107, 3, 'asdf', ''),
(579, 13, 108, 2, 'asdf', ''),
(580, 13, 109, 3, 'asdf', ''),
(581, 13, 110, 3, 'asdf', ''),
(582, 13, 111, 3, 'asdf', ''),
(583, 13, 112, 1, 'asdf', ''),
(584, 13, 113, 1, 'asdfa', ''),
(585, 13, 114, 1, 'asdf', ''),
(586, 13, 115, 1, 'asdf', ''),
(587, 13, 116, 1, 'asdf', ''),
(588, 13, 117, 1, 'asdf', ''),
(589, 13, 118, 3, 'asdf', ''),
(590, 13, 119, 1, 'asdf', ''),
(591, 13, 120, 3, 'asdf', ''),
(592, 13, 121, 1, 'asdf', ''),
(593, 13, 122, 3, 'asdf', ''),
(594, 13, 123, 1, 'asdf', ''),
(595, 13, 124, 3, 'asdf', ''),
(596, 13, 125, 1, 'asdf', ''),
(597, 13, 126, 3, 'asdf', ''),
(598, 13, 127, 3, 'sdf', ''),
(599, 13, 128, 3, 'asdf', ''),
(600, 13, 129, 1, 'asdf', ''),
(601, 13, 130, 3, 'asdf', ''),
(602, 13, 133, 1, 'asdf', ''),
(603, 13, 134, 3, 'asdf', ''),
(604, 13, 135, 2, 'asdf', ''),
(605, 13, 136, 3, 'asdf', '136_13_logo_code.png'),
(607, 11, 86, 2, 'mas o menos', ''),
(608, 11, 87, 3, 'asdj', ''),
(609, 11, 88, 1, 'asda', ''),
(610, 11, 89, 2, 'sdfs', ''),
(611, 11, 137, 1, 'sdfsd', ''),
(612, 11, 90, 1, 'sadfas', ''),
(613, 11, 91, 1, 'asdf', ''),
(614, 11, 92, 1, 'asdf', ''),
(615, 11, 93, 3, 'asdf', ''),
(616, 11, 94, 1, 'asdf', ''),
(617, 11, 95, 1, 'asdf', ''),
(618, 11, 96, 1, 'asdf', ''),
(619, 11, 97, 1, 'asdf', ''),
(620, 11, 98, 3, 'asdf', ''),
(621, 11, 99, 1, 'asdf', ''),
(622, 11, 100, 4, 'asdfasdf', ''),
(623, 11, 101, 1, 'sadf', ''),
(624, 11, 102, 1, 'asdfas', ''),
(625, 11, 103, 1, 'asdf', ''),
(626, 11, 104, 3, 'asdf', ''),
(627, 11, 105, 1, 'asdf', ''),
(628, 11, 106, 2, 'asfdad', ''),
(629, 11, 107, 3, 'asdfasd', ''),
(630, 11, 108, 4, 'asdfasd', ''),
(631, 11, 109, 4, 'asdfas', ''),
(632, 11, 110, 4, 'asdfasdf', ''),
(633, 11, 111, 1, 'asdf', ''),
(634, 11, 112, 1, 'asdf', ''),
(635, 11, 113, 1, 'asdf', ''),
(636, 11, 114, 1, 'asfd', ''),
(637, 11, 115, 3, 'asdf', ''),
(638, 11, 116, 1, 'asdfgsd', ''),
(639, 11, 117, 2, 'asdf', ''),
(640, 11, 118, 3, 'asdf', ''),
(641, 11, 119, 1, 'asdf', ''),
(642, 11, 120, 2, 'asdf', ''),
(643, 11, 121, 2, 'asdf', ''),
(644, 11, 122, 2, 'asdfasdf', ''),
(645, 11, 123, 2, 'asdfasd', ''),
(646, 11, 124, 1, 'asdf', ''),
(647, 11, 125, 1, 'asdf', ''),
(648, 11, 126, 1, 'asdf', ''),
(649, 11, 127, 1, 'asdfa', ''),
(650, 11, 128, 1, 'sdfgsdfg', ''),
(651, 11, 129, 2, 'sdfg', ''),
(652, 11, 130, 1, 'sdfg', ''),
(653, 11, 133, 4, 'sdfg', ''),
(654, 11, 134, 3, 'sdfg', ''),
(655, 11, 135, 3, 'Bien', ''),
(656, 11, 136, 3, 'Bien', '136_11_1.PNG'),
(657, 17, 86, 3, 'sdfg', ''),
(658, 17, 87, 1, 'sdfgsdf', ''),
(659, 17, 88, 1, 'sdfgsd', '88_17_1.PNG'),
(660, 17, 89, 1, 'sdfgsdfg', ''),
(661, 17, 137, 1, 'fgtjfghjfg', ''),
(662, 17, 90, 3, 'sdfgs', ''),
(663, 17, 91, 3, 'sdfg', ''),
(664, 17, 92, 1, 'dfgsd', ''),
(665, 17, 93, 1, 'sdfg', ''),
(666, 17, 94, 1, 'sdfgsd', ''),
(667, 17, 95, 1, 'sdfg', ''),
(668, 17, 96, 1, 'sdfgsd', ''),
(669, 17, 97, 1, 'sdfgsdf', ''),
(670, 17, 98, 1, 'sdfg', ''),
(671, 17, 99, 1, 'dfgs', ''),
(672, 17, 100, 2, 'sdjfgh', ''),
(673, 17, 101, 1, 'sdfg', ''),
(674, 17, 102, 1, 'sfgsdfgs', ''),
(675, 17, 103, 2, 'jjj', ''),
(676, 17, 104, 2, 'ytuit', ''),
(677, 17, 105, 3, 'gjmhtm', ''),
(678, 17, 106, 2, 'fgjfghjfg', ''),
(679, 17, 107, 3, 'fgjgf', ''),
(680, 17, 108, 1, 'fgjfg', ''),
(681, 17, 109, 1, 'tity', ''),
(682, 17, 110, 1, 'gfhjfghjf', ''),
(683, 17, 111, 1, 'asdgtw', ''),
(684, 17, 112, 3, 'wert', ''),
(685, 17, 113, 1, 'wert', ''),
(686, 17, 114, 1, 'wert', ''),
(687, 17, 115, 1, 'wert', ''),
(688, 17, 116, 1, 'wertwe', ''),
(689, 17, 117, 1, 'ewrtw', ''),
(690, 17, 118, 2, 'wertwe', ''),
(691, 17, 119, 1, 'wertwe', ''),
(692, 17, 120, 1, 'fghjfgh', ''),
(693, 17, 121, 3, 'werwert', ''),
(694, 17, 122, 1, 'wertw', ''),
(695, 17, 123, 1, 'gfhjfgh', ''),
(696, 17, 124, 3, 'fghjfghj', ''),
(697, 17, 125, 1, 'ghjfg', ''),
(698, 17, 126, 1, 'dfjdfhgj', ''),
(699, 17, 127, 1, 'dghjfghj', ''),
(700, 17, 128, 1, 'fghjfghj', ''),
(701, 17, 129, 1, 'fghjfghj', ''),
(702, 17, 130, 3, 'rtyurtyur', ''),
(703, 17, 133, 2, 'hjytjt', ''),
(704, 17, 134, 2, 'rtjurtjrty', ''),
(705, 17, 135, 3, 'rtrtgh', ''),
(706, 17, 136, 3, 'trty', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verificadorxempresa`
--

CREATE TABLE `verificadorxempresa` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `fecha_asignacion` text COLLATE utf8_bin NOT NULL,
  `fecha_retiro` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `verificadorxempresa`
--

INSERT INTO `verificadorxempresa` (`id`, `empresa_id`, `persona_id`, `fecha_asignacion`, `fecha_retiro`) VALUES
(1, 15, 11, '22/09/2080', ''),
(2, 11, 11, '15/5/2013', ''),
(4, 13, 11, '25/2/2018', ''),
(7, 18, 24, '2018-05-18 08:03:01', ''),
(9, 17, 11, '2018-05-21 23:17:14', ''),
(10, 1, 24, '2018-05-28 07:39:37', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vinculacion`
--

CREATE TABLE `vinculacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `vinculacion`
--

INSERT INTO `vinculacion` (`id`, `nombre`) VALUES
(1, 'Nº de empleos indefinidos'),
(2, 'Nº de empleos a termino definido'),
(3, 'Nº de empleos x días (jornales) promedio en el año');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recurso_id` (`recurso_id`),
  ADD KEY `opciones_id` (`opciones_id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `actividad_empresa`
--
ALTER TABLE `actividad_empresa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `actividad_item_id` (`actividad_item_id`);

--
-- Indices de la tabla `actividad_item`
--
ALTER TABLE `actividad_item`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alias`
--
ALTER TABLE `alias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `aplica_noaplica`
--
ALTER TABLE `aplica_noaplica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `archivo_page`
--
ALTER TABLE `archivo_page`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contenido_id` (`contenido_id`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bienes_servicios`
--
ALTER TABLE `bienes_servicios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `calificador`
--
ALTER TABLE `calificador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `certificacion`
--
ALTER TABLE `certificacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `opciones_id` (`opciones_id`),
  ADD KEY `etapa_id` (`etapa_id`);

--
-- Indices de la tabla `conservacion`
--
ALTER TABLE `conservacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `opciones_id` (`opciones_id`);

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_img_page` (`id_img_page`),
  ADD KEY `alias` (`alias_id`);

--
-- Indices de la tabla `costo_insumos`
--
ALTER TABLE `costo_insumos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `costo_mano_obra`
--
ALTER TABLE `costo_mano_obra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `cumple_nocumple`
--
ALTER TABLE `cumple_nocumple`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `demografia`
--
ALTER TABLE `demografia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `desc_demografia_id` (`desc_demografia_id`),
  ADD KEY `si_no_id` (`si_no_id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region_id` (`region_id`);

--
-- Indices de la tabla `desc_demografia`
--
ALTER TABLE `desc_demografia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ecosistema`
--
ALTER TABLE `ecosistema`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `opciones_id` (`opciones_id`);

--
-- Indices de la tabla `edad`
--
ALTER TABLE `edad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado_edad`
--
ALTER TABLE `empleado_edad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `edad_id` (`edad_id`);

--
-- Indices de la tabla `empleado_sexo`
--
ALTER TABLE `empleado_sexo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `empleado_sexo_id` (`socio_empleado_id`),
  ADD KEY `sexo_id` (`sexo_id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_persona_id` (`tipo_persona_id`),
  ADD KEY `tipo_identificacion_id` (`tipo_identificacion_id`),
  ADD KEY `persona_id` (`persona_id`),
  ADD KEY `si_no_id` (`si_no_pot_id`),
  ADD KEY `tamaño_empresa_id` (`tamaño_empresa_id`),
  ADD KEY `municipio_id` (`municipio_id`),
  ADD KEY `fami_empresa_si_no` (`fami_empresa_si_no`),
  ADD KEY `subsector_id` (`subsector_id`),
  ADD KEY `etapa_empresa_id` (`etapa_empresa_id`),
  ADD KEY `const_legalmente_sino` (`const_legalmente_sino`),
  ADD KEY `opera_actualmente_sino` (`opera_actualmente_sino`),
  ADD KEY `empresario_id` (`empresario_id`);

--
-- Indices de la tabla `empresario`
--
ALTER TABLE `empresario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `etapa`
--
ALTER TABLE `etapa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `etapa_empresa`
--
ALTER TABLE `etapa_empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `img_page`
--
ALTER TABLE `img_page`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `orientacion_id` (`orientacion_id`);

--
-- Indices de la tabla `involucra`
--
ALTER TABLE `involucra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `opciones_id` (`opciones_id`);

--
-- Indices de la tabla `licencia`
--
ALTER TABLE `licencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cumple_nocumple_id` (`cumple_nocumple_id`),
  ADD KEY `aplica_noaplica_id` (`aplica_noaplica_id`),
  ADD KEY `opciones_id` (`opciones_id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `persona_id` (`persona_id`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departamento_id` (`departamento_id`);

--
-- Indices de la tabla `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nivel_educativo`
--
ALTER TABLE `nivel_educativo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `nivel_id` (`nivel_id`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_img_page` (`id_img_page`);

--
-- Indices de la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD UNIQUE KEY `codigo_2` (`codigo`);

--
-- Indices de la tabla `orientacion`
--
ALTER TABLE `orientacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `otros_certificacion`
--
ALTER TABLE `otros_certificacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `etapa_id` (`etapa_id`);

--
-- Indices de la tabla `otros_conservacion`
--
ALTER TABLE `otros_conservacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `otros_ecosistema`
--
ALTER TABLE `otros_ecosistema`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `otros_legislacion`
--
ALTER TABLE `otros_legislacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `cumple_nocumple_id` (`cumple_nocumple_id`);

--
-- Indices de la tabla `otro_actividades`
--
ALTER TABLE `otro_actividades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `recurso_id` (`recurso_id`);

--
-- Indices de la tabla `otro_involucra`
--
ALTER TABLE `otro_involucra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `otro_programa`
--
ALTER TABLE `otro_programa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `otro_tenencia_tierra`
--
ALTER TABLE `otro_tenencia_tierra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `opciones_id` (`opciones_id`),
  ADD KEY `aplica_noaplica_id` (`aplica_noaplica_id`),
  ADD KEY `cumple_nocumple_id` (`cumple_nocumple_id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `area_id` (`area_id`);

--
-- Indices de la tabla `plan_manejo`
--
ALTER TABLE `plan_manejo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `opciones_id` (`opciones_id`),
  ADD KEY `aplica_noaplica_id` (`aplica_noaplica_id`),
  ADD KEY `cumple_nocumple_id` (`cumple_nocumple_id`);

--
-- Indices de la tabla `plan_mejora`
--
ALTER TABLE `plan_mejora`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opciones_id` (`opciones_id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `opciones_id` (`opciones_id`);

--
-- Indices de la tabla `recurso`
--
ALTER TABLE `recurso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pais_id` (`pais_id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `opciones_id` (`opciones_id`),
  ADD KEY `aplica_noaplica_id` (`aplica_noaplica_id`),
  ADD KEY `cumple_nocumple_id` (`cumple_nocumple_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `si_no`
--
ALTER TABLE `si_no`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `si_no_noaplica`
--
ALTER TABLE `si_no_noaplica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_img_page` (`id_img_page`);

--
-- Indices de la tabla `socio_empleado_item`
--
ALTER TABLE `socio_empleado_item`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sost_economica`
--
ALTER TABLE `sost_economica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `si_no_id` (`si_no_id`),
  ADD KEY `unidad_medida_id` (`unidad_medida_id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `subsector`
--
ALTER TABLE `subsector`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sector_id` (`sector_id`);

--
-- Indices de la tabla `tamaño_empresa`
--
ALTER TABLE `tamaño_empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tenencia_tierra`
--
ALTER TABLE `tenencia_tierra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `opciones_id` (`opciones_id`);

--
-- Indices de la tabla `tipo_identificacion`
--
ALTER TABLE `tipo_identificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_vinculacion`
--
ALTER TABLE `tipo_vinculacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `vinculacion_id` (`vinculacion_id`);

--
-- Indices de la tabla `total_ventas`
--
ALTER TABLE `total_ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `verificacion_1`
--
ALTER TABLE `verificacion_1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `aplica_noaplica_id` (`si_no_noaplica_id`),
  ADD KEY `opciones_id` (`opciones_id`);

--
-- Indices de la tabla `verificacion_2`
--
ALTER TABLE `verificacion_2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `calificador_id` (`calificador_id`),
  ADD KEY `opciones_id` (`opciones_id`);

--
-- Indices de la tabla `verificadorxempresa`
--
ALTER TABLE `verificadorxempresa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `persona_id` (`persona_id`);

--
-- Indices de la tabla `vinculacion`
--
ALTER TABLE `vinculacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `actividad_empresa`
--
ALTER TABLE `actividad_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=317;
--
-- AUTO_INCREMENT de la tabla `actividad_item`
--
ALTER TABLE `actividad_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `alias`
--
ALTER TABLE `alias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `aplica_noaplica`
--
ALTER TABLE `aplica_noaplica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `archivo_page`
--
ALTER TABLE `archivo_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `bienes_servicios`
--
ALTER TABLE `bienes_servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT de la tabla `calificador`
--
ALTER TABLE `calificador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `certificacion`
--
ALTER TABLE `certificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT de la tabla `conservacion`
--
ALTER TABLE `conservacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `costo_insumos`
--
ALTER TABLE `costo_insumos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `costo_mano_obra`
--
ALTER TABLE `costo_mano_obra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `cumple_nocumple`
--
ALTER TABLE `cumple_nocumple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `demografia`
--
ALTER TABLE `demografia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `desc_demografia`
--
ALTER TABLE `desc_demografia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `ecosistema`
--
ALTER TABLE `ecosistema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT de la tabla `edad`
--
ALTER TABLE `edad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `empleado_edad`
--
ALTER TABLE `empleado_edad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `empleado_sexo`
--
ALTER TABLE `empleado_sexo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `empresario`
--
ALTER TABLE `empresario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `etapa`
--
ALTER TABLE `etapa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `etapa_empresa`
--
ALTER TABLE `etapa_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `img_page`
--
ALTER TABLE `img_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT de la tabla `involucra`
--
ALTER TABLE `involucra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT de la tabla `licencia`
--
ALTER TABLE `licencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `nivel_educativo`
--
ALTER TABLE `nivel_educativo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `opciones`
--
ALTER TABLE `opciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT de la tabla `orientacion`
--
ALTER TABLE `orientacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `otros_certificacion`
--
ALTER TABLE `otros_certificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `otros_conservacion`
--
ALTER TABLE `otros_conservacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `otros_ecosistema`
--
ALTER TABLE `otros_ecosistema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `otros_legislacion`
--
ALTER TABLE `otros_legislacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `otro_actividades`
--
ALTER TABLE `otro_actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `otro_involucra`
--
ALTER TABLE `otro_involucra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `otro_programa`
--
ALTER TABLE `otro_programa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `otro_tenencia_tierra`
--
ALTER TABLE `otro_tenencia_tierra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `plan_manejo`
--
ALTER TABLE `plan_manejo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `plan_mejora`
--
ALTER TABLE `plan_mejora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `recurso`
--
ALTER TABLE `recurso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `sector`
--
ALTER TABLE `sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `si_no`
--
ALTER TABLE `si_no`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `si_no_noaplica`
--
ALTER TABLE `si_no_noaplica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `socio_empleado_item`
--
ALTER TABLE `socio_empleado_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `sost_economica`
--
ALTER TABLE `sost_economica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `subsector`
--
ALTER TABLE `subsector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `tamaño_empresa`
--
ALTER TABLE `tamaño_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tenencia_tierra`
--
ALTER TABLE `tenencia_tierra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT de la tabla `tipo_identificacion`
--
ALTER TABLE `tipo_identificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipo_persona`
--
ALTER TABLE `tipo_persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_vinculacion`
--
ALTER TABLE `tipo_vinculacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `total_ventas`
--
ALTER TABLE `total_ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `verificacion_1`
--
ALTER TABLE `verificacion_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `verificacion_2`
--
ALTER TABLE `verificacion_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=707;
--
-- AUTO_INCREMENT de la tabla `verificadorxempresa`
--
ALTER TABLE `verificadorxempresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `vinculacion`
--
ALTER TABLE `vinculacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `actividades_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `actividades_ibfk_2` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`),
  ADD CONSTRAINT `actividades_ibfk_3` FOREIGN KEY (`recurso_id`) REFERENCES `recurso` (`id`);

--
-- Filtros para la tabla `actividad_empresa`
--
ALTER TABLE `actividad_empresa`
  ADD CONSTRAINT `actividad_empresa_ibfk_2` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `archivo_page`
--
ALTER TABLE `archivo_page`
  ADD CONSTRAINT `archivo_page1` FOREIGN KEY (`contenido_id`) REFERENCES `contenido` (`id`);

--
-- Filtros para la tabla `bienes_servicios`
--
ALTER TABLE `bienes_servicios`
  ADD CONSTRAINT `bienes_servicios_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `certificacion`
--
ALTER TABLE `certificacion`
  ADD CONSTRAINT `certificacion_empresa_id_restrink1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `certificacion_etapa_id_restrink1` FOREIGN KEY (`etapa_id`) REFERENCES `etapa` (`id`),
  ADD CONSTRAINT `certificacion_opciones_id_restrink1` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`);

--
-- Filtros para la tabla `conservacion`
--
ALTER TABLE `conservacion`
  ADD CONSTRAINT `conservacion_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `conservacion_ibfk_2` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`);

--
-- Filtros para la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD CONSTRAINT `fk_alias` FOREIGN KEY (`alias_id`) REFERENCES `alias` (`id`),
  ADD CONSTRAINT `fk_img` FOREIGN KEY (`id_img_page`) REFERENCES `img_page` (`id`);

--
-- Filtros para la tabla `costo_insumos`
--
ALTER TABLE `costo_insumos`
  ADD CONSTRAINT `costo_insumo_restrink1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `costo_mano_obra`
--
ALTER TABLE `costo_mano_obra`
  ADD CONSTRAINT `costo_mano_obra_restrink1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `demografia`
--
ALTER TABLE `demografia`
  ADD CONSTRAINT `demografia_ibfk_1` FOREIGN KEY (`desc_demografia_id`) REFERENCES `desc_demografia` (`id`),
  ADD CONSTRAINT `demografia_ibfk_2` FOREIGN KEY (`si_no_id`) REFERENCES `si_no` (`id`),
  ADD CONSTRAINT `demografia_ibfk_3` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `departamento_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`);

--
-- Filtros para la tabla `ecosistema`
--
ALTER TABLE `ecosistema`
  ADD CONSTRAINT `ecosistema_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `ecosistema_ibfk_2` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`);

--
-- Filtros para la tabla `empleado_edad`
--
ALTER TABLE `empleado_edad`
  ADD CONSTRAINT `empleado_edad_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `empleado_edad_ibfk_2` FOREIGN KEY (`edad_id`) REFERENCES `edad` (`id`);

--
-- Filtros para la tabla `empleado_sexo`
--
ALTER TABLE `empleado_sexo`
  ADD CONSTRAINT `empleado_sexo_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`),
  ADD CONSTRAINT `empresa_ibfk_2` FOREIGN KEY (`tipo_identificacion_id`) REFERENCES `tipo_identificacion` (`id`),
  ADD CONSTRAINT `empresa_ibfk_3` FOREIGN KEY (`tipo_persona_id`) REFERENCES `tipo_persona` (`id`),
  ADD CONSTRAINT `empresa_ibfk_4` FOREIGN KEY (`tamaño_empresa_id`) REFERENCES `tamaño_empresa` (`id`),
  ADD CONSTRAINT `empresa_ibfk_5` FOREIGN KEY (`si_no_pot_id`) REFERENCES `si_no` (`id`),
  ADD CONSTRAINT `empresa_ibfk_6` FOREIGN KEY (`municipio_id`) REFERENCES `municipio` (`id`),
  ADD CONSTRAINT `empresa_ibfk_7` FOREIGN KEY (`fami_empresa_si_no`) REFERENCES `si_no` (`id`),
  ADD CONSTRAINT `empresa_ibfk_8` FOREIGN KEY (`empresario_id`) REFERENCES `empresario` (`id`);

--
-- Filtros para la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD CONSTRAINT `institucion_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `institucion_ibfk_2` FOREIGN KEY (`orientacion_id`) REFERENCES `orientacion` (`id`);

--
-- Filtros para la tabla `involucra`
--
ALTER TABLE `involucra`
  ADD CONSTRAINT `involucra_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `involucra_ibfk_2` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`);

--
-- Filtros para la tabla `licencia`
--
ALTER TABLE `licencia`
  ADD CONSTRAINT `licencia_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `licencia_ibfk_2` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`),
  ADD CONSTRAINT `licencia_ibfk_3` FOREIGN KEY (`aplica_noaplica_id`) REFERENCES `aplica_noaplica` (`id`),
  ADD CONSTRAINT `licencia_ibfk_4` FOREIGN KEY (`cumple_nocumple_id`) REFERENCES `cumple_nocumple` (`id`);

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_restrink1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`);

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `municipio_ibfk_1` FOREIGN KEY (`departamento_id`) REFERENCES `departamento` (`id`);

--
-- Filtros para la tabla `nivel_educativo`
--
ALTER TABLE `nivel_educativo`
  ADD CONSTRAINT `nivel_educativo_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `nivel_educativo_ibfk_2` FOREIGN KEY (`nivel_id`) REFERENCES `nivel` (`id`);

--
-- Filtros para la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `fk_img2` FOREIGN KEY (`id_img_page`) REFERENCES `img_page` (`id`);

--
-- Filtros para la tabla `otros_certificacion`
--
ALTER TABLE `otros_certificacion`
  ADD CONSTRAINT `otro_cert_restrink1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `otro_cert_restrink2` FOREIGN KEY (`etapa_id`) REFERENCES `etapa` (`id`);

--
-- Filtros para la tabla `otros_conservacion`
--
ALTER TABLE `otros_conservacion`
  ADD CONSTRAINT `otro_conservacion_restrink1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `otros_ecosistema`
--
ALTER TABLE `otros_ecosistema`
  ADD CONSTRAINT `otro_ecosistema_restrink1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `otros_legislacion`
--
ALTER TABLE `otros_legislacion`
  ADD CONSTRAINT `otro_legislacion_restrink1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `otro_legislacion_restrink2` FOREIGN KEY (`cumple_nocumple_id`) REFERENCES `cumple_nocumple` (`id`);

--
-- Filtros para la tabla `otro_actividades`
--
ALTER TABLE `otro_actividades`
  ADD CONSTRAINT `otro_actividad_restrink1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `otro_actividad_restrink2` FOREIGN KEY (`recurso_id`) REFERENCES `recurso` (`id`);

--
-- Filtros para la tabla `otro_involucra`
--
ALTER TABLE `otro_involucra`
  ADD CONSTRAINT `otro_involucra_restrink1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `otro_programa`
--
ALTER TABLE `otro_programa`
  ADD CONSTRAINT `otro_programa_restrink1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `otro_tenencia_tierra`
--
ALTER TABLE `otro_tenencia_tierra`
  ADD CONSTRAINT `otro_tierra_restrink1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD CONSTRAINT `permiso_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `permiso_ibfk_2` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`),
  ADD CONSTRAINT `permiso_ibfk_3` FOREIGN KEY (`aplica_noaplica_id`) REFERENCES `aplica_noaplica` (`id`),
  ADD CONSTRAINT `permiso_ibfk_4` FOREIGN KEY (`cumple_nocumple_id`) REFERENCES `cumple_nocumple` (`id`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `rol_restrink1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`),
  ADD CONSTRAINT `rol_restrink2` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`);

--
-- Filtros para la tabla `plan_manejo`
--
ALTER TABLE `plan_manejo`
  ADD CONSTRAINT `plan_manejo_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `plan_manejo_ibfk_2` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`),
  ADD CONSTRAINT `plan_manejo_ibfk_3` FOREIGN KEY (`aplica_noaplica_id`) REFERENCES `aplica_noaplica` (`id`),
  ADD CONSTRAINT `plan_manejo_ibfk_4` FOREIGN KEY (`cumple_nocumple_id`) REFERENCES `cumple_nocumple` (`id`);

--
-- Filtros para la tabla `plan_mejora`
--
ALTER TABLE `plan_mejora`
  ADD CONSTRAINT `plan_mejora_restrink1` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`),
  ADD CONSTRAINT `plan_mejora_restrink2` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `programa`
--
ALTER TABLE `programa`
  ADD CONSTRAINT `programa_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `programa_ibfk_2` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`);

--
-- Filtros para la tabla `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `region_ibfk_1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`),
  ADD CONSTRAINT `registro_ibfk_3` FOREIGN KEY (`aplica_noaplica_id`) REFERENCES `aplica_noaplica` (`id`),
  ADD CONSTRAINT `registro_ibfk_4` FOREIGN KEY (`cumple_nocumple_id`) REFERENCES `cumple_nocumple` (`id`);

--
-- Filtros para la tabla `sector`
--
ALTER TABLE `sector`
  ADD CONSTRAINT `categoria_id` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);

--
-- Filtros para la tabla `slide`
--
ALTER TABLE `slide`
  ADD CONSTRAINT `slide1` FOREIGN KEY (`id_img_page`) REFERENCES `img_page` (`id`);

--
-- Filtros para la tabla `sost_economica`
--
ALTER TABLE `sost_economica`
  ADD CONSTRAINT `sost_eco_restrink1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `sost_eco_restrink2` FOREIGN KEY (`unidad_medida_id`) REFERENCES `unidad_medida` (`id`),
  ADD CONSTRAINT `sost_eco_restrink3` FOREIGN KEY (`si_no_id`) REFERENCES `si_no` (`id`);

--
-- Filtros para la tabla `tenencia_tierra`
--
ALTER TABLE `tenencia_tierra`
  ADD CONSTRAINT `empresa_id_restrink` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `opciones_id_restrink` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`);

--
-- Filtros para la tabla `tipo_vinculacion`
--
ALTER TABLE `tipo_vinculacion`
  ADD CONSTRAINT `tipo_vinculacion_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `tipo_vinculacion_ibfk_2` FOREIGN KEY (`vinculacion_id`) REFERENCES `vinculacion` (`id`);

--
-- Filtros para la tabla `total_ventas`
--
ALTER TABLE `total_ventas`
  ADD CONSTRAINT `total_ventas_restrink` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `verificacion_1`
--
ALTER TABLE `verificacion_1`
  ADD CONSTRAINT `verificacion_1_restrink1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `verificacion_1_restrink2` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`),
  ADD CONSTRAINT `verificacion_1_restrink3` FOREIGN KEY (`si_no_noaplica_id`) REFERENCES `si_no_noaplica` (`id`);

--
-- Filtros para la tabla `verificacion_2`
--
ALTER TABLE `verificacion_2`
  ADD CONSTRAINT `verificacion_2_restrink1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `verificacion_2_restrink2` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`),
  ADD CONSTRAINT `verificacion_2_restrink3` FOREIGN KEY (`calificador_id`) REFERENCES `calificador` (`id`);

--
-- Filtros para la tabla `verificadorxempresa`
--
ALTER TABLE `verificadorxempresa`
  ADD CONSTRAINT `verificador_restrink1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `verificador_restrink2` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
