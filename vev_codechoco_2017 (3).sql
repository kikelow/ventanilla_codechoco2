-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2018 a las 16:09:13
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
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `recurso_id` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_bin NOT NULL,
  `confirmacion` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `info_com_id`, `pregunta_id`, `recurso_id`, `descripcion`, `confirmacion`) VALUES
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
(30, 15, 60, 1, '', 'no'),
(31, 28, 57, 1, '', 'no'),
(32, 28, 58, 1, '', 'no'),
(33, 28, 59, 1, '', 'no'),
(34, 28, 60, 1, '', 'no'),
(35, 20, 57, 1, '', 'no'),
(36, 20, 58, 1, '', 'no'),
(37, 20, 59, 1, '', 'no'),
(38, 20, 60, 1, '', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_empresa`
--

CREATE TABLE `actividad_empresa` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `actividad_item_id` int(11) NOT NULL,
  `si_no_actividad_id` int(11) NOT NULL,
  `direccion` text COLLATE utf8_bin NOT NULL,
  `municipio_id` int(11) NOT NULL,
  `tipo_tenencia_id` int(11) NOT NULL,
  `area` varchar(20) COLLATE utf8_bin NOT NULL,
  `pot_si_no_id` int(11) NOT NULL,
  `observacion` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `actividad_empresa`
--

INSERT INTO `actividad_empresa` (`id`, `empresa_id`, `actividad_item_id`, `si_no_actividad_id`, `direccion`, `municipio_id`, `tipo_tenencia_id`, `area`, `pot_si_no_id`, `observacion`) VALUES
(1, 16, 1, 1, 'cl575', 8, 1, '23', 1, 'adasd'),
(2, 16, 2, 1, 'adxda', 6, 3, '43', 1, 'adadas'),
(3, 16, 3, 1, 'cll 68', 21, 4, '34', 1, 'fgfg'),
(6, 19, 1, 2, '', 0, 0, '', 0, ''),
(7, 19, 2, 2, '', 0, 0, '', 0, ''),
(8, 19, 3, 2, '', 0, 0, '', 0, '');

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
-- Estructura de tabla para la tabla `apoyo`
--

CREATE TABLE `apoyo` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_bin NOT NULL,
  `nombre_entidad` varchar(100) COLLATE utf8_bin NOT NULL,
  `tipo_entidad_id` int(11) NOT NULL,
  `año` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `apoyo`
--

INSERT INTO `apoyo` (`id`, `info_com_id`, `descripcion`, `nombre_entidad`, `tipo_entidad_id`, `año`) VALUES
(21, 11, 'mercancia', 'No recuerdo el nombre', 3, 2001),
(22, 11, '', '', 2, 0000),
(23, 11, 'alambres', 'doblamos', 2, 2003),
(24, 11, '', '', 2, 0000),
(25, 11, 'computadores', 'Soft', 1, 2005),
(26, 16, '', '', 1, 0000),
(27, 16, '', '', 1, 0000),
(28, 16, 'sdfgsd', 'ajjjjjjjjjj', 3, 2015),
(29, 16, '', '', 1, 0000),
(30, 16, '', '', 1, 0000),
(31, 17, '', '', 1, 0000),
(32, 17, '', '', 1, 0000),
(33, 17, 'alguno', 'sdgsdfgsdfgs', 2, 0000),
(34, 17, '', '', 1, 0000),
(35, 17, '', '', 1, 0000),
(36, 15, '', '', 1, 0000),
(37, 15, '', '', 1, 0000),
(38, 15, '', '', 1, 0000),
(39, 15, '', '', 1, 0000),
(40, 15, '', '', 1, 0000),
(41, 28, '', '', 1, 0000),
(42, 28, '', '', 1, 0000),
(43, 28, '', '', 1, 0000),
(44, 28, '', '', 1, 0000),
(45, 28, '', '', 1, 0000),
(46, 20, '', '', 1, 0000),
(47, 20, '', '', 1, 0000),
(48, 20, '', '', 1, 0000),
(49, 20, '', '', 1, 0000),
(50, 20, '', '', 1, 0000);

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
-- Estructura de tabla para la tabla `aspecto`
--

CREATE TABLE `aspecto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `aspecto`
--

INSERT INTO `aspecto` (`id`, `nombre`) VALUES
(1, 'Certificaciones vigentes'),
(2, 'Requisitos excluyentes'),
(3, 'Administrativo'),
(4, 'Ambiental'),
(5, 'Social'),
(6, 'Proveedores'),
(7, 'Otros'),
(8, 'Viabilidad económica del negocio'),
(9, 'Impacto ambiental positivo del bien o servicio'),
(10, 'Enfoque de ciclo de vida del bien o servicio'),
(11, 'Vida útil'),
(12, 'Sustitución de sustancias o materiales peligrosos'),
(13, 'Reciclabilidad de los materiales y/o uso de materiales reciclados'),
(14, 'Uso eficiente y sostenible de recursos para la producción del bien o servicio'),
(15, 'Responsabilidad social al interior de la empresa'),
(16, 'Responsabilidad social y ambiental en la cadena de valor de la empresa'),
(17, 'Responsabilidad social y ambiental al exterior de la empresa'),
(18, 'Comunicación de atributos sociales o ambientales asociados al bien o servicio'),
(19, 'Responsabilidad social al interior de la empresa'),
(20, 'Esquemas, programas o reconocimientos ambientales o sociales implementados o recibidos');

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
(72, 18, '', 'kkkkkkkkkkkkkllllll'),
(73, 19, '', ''),
(74, 19, '', ''),
(75, 19, '', ''),
(76, 19, '', ''),
(77, 19, '', ''),
(78, 19, '', 'limonada'),
(79, 20, '', ''),
(80, 20, '', ''),
(81, 20, '', ''),
(82, 20, '', ''),
(83, 20, '', ''),
(84, 20, '', 'kjkjjkjjkkj'),
(85, 21, '', ''),
(86, 21, '', ''),
(87, 21, '', ''),
(88, 21, '', ''),
(89, 21, '', ''),
(90, 21, '', 'lkjñlkhkljhkj'),
(91, 22, '', ''),
(92, 22, '', ''),
(93, 22, '', ''),
(94, 22, '', ''),
(95, 22, '', ''),
(96, 22, '', 'hjkhjhkjkhk'),
(97, 23, '', ''),
(98, 23, '', ''),
(99, 23, '', ''),
(100, 23, '', ''),
(101, 23, '', ''),
(102, 23, '', 'ñoplppopop'),
(103, 24, '', ''),
(104, 24, '', ''),
(105, 24, '', ''),
(106, 24, '', ''),
(107, 24, '', ''),
(108, 24, '', 'galletas'),
(109, 25, '', ''),
(110, 25, '', ''),
(111, 25, '', ''),
(112, 25, '', ''),
(113, 25, '', ''),
(114, 25, '', 'jhgkjhkj'),
(115, 26, '', ''),
(116, 26, '', ''),
(117, 26, '', ''),
(118, 26, '', ''),
(119, 26, '', ''),
(120, 26, '', 'ñlñlñl'),
(121, 27, '', ''),
(122, 27, '', ''),
(123, 27, '', ''),
(124, 27, '', ''),
(125, 27, '', ''),
(126, 27, '', 'pescado'),
(127, 28, '', ''),
(128, 28, '', ''),
(129, 28, '', ''),
(130, 28, '', ''),
(131, 28, '', ''),
(132, 28, '', 'jhgfjhgfjhgfjhg'),
(133, 4, 'lulo', ''),
(134, 4, 'papaya', ''),
(135, 4, 'coco', ''),
(136, 4, 'yuca', ''),
(137, 4, 'ñame', ''),
(138, 4, '', 'mermelada'),
(139, 5, 'lulo', ''),
(140, 5, 'papaya', ''),
(141, 5, 'coco', ''),
(142, 5, 'yuca', ''),
(143, 5, 'ñame', ''),
(144, 5, '', 'mermelada'),
(145, 6, 'lulo', ''),
(146, 6, 'papaya', ''),
(147, 6, 'coco', ''),
(148, 6, 'yuca', ''),
(149, 6, 'ñame', ''),
(150, 6, '', 'mermelada'),
(151, 7, 'lulo', ''),
(152, 7, 'papaya', ''),
(153, 7, 'coco', ''),
(154, 7, 'yuca', ''),
(155, 7, 'ñame', ''),
(156, 7, '', 'mermelada'),
(157, 8, 'lulo', ''),
(158, 8, 'papaya', ''),
(159, 8, 'coco', ''),
(160, 8, 'yuca', ''),
(161, 8, 'ñame', ''),
(162, 8, '', 'mermelada'),
(163, 9, 'lulo', ''),
(164, 9, 'papaya', ''),
(165, 9, 'coco', ''),
(166, 9, 'yuca', ''),
(167, 9, 'ñame', ''),
(168, 9, '', 'mermelada'),
(169, 10, 'lulo', ''),
(170, 10, 'papaya', ''),
(171, 10, 'coco', ''),
(172, 10, 'yuca', ''),
(173, 10, 'ñame', ''),
(174, 10, '', 'mermelada'),
(175, 11, 'lulo', ''),
(176, 11, 'papaya', ''),
(177, 11, 'coco', ''),
(178, 11, 'yuca', ''),
(179, 11, 'ñame', ''),
(180, 11, '', 'mermelada'),
(181, 13, 'lulo', ''),
(182, 13, 'papaya', ''),
(183, 13, 'coco', ''),
(184, 13, 'yuca', ''),
(185, 13, 'ñame', ''),
(186, 13, '', 'mermelada'),
(187, 16, 'sads', ''),
(188, 16, 'wewq', ''),
(189, 16, 'asd', ''),
(190, 16, 'ad', ''),
(191, 16, 'asd', ''),
(192, 16, '', 'qqqqqq'),
(193, 19, 'sads', ''),
(194, 19, 'wewq', ''),
(195, 19, 'asd', ''),
(196, 19, 'ad', ''),
(197, 19, 'asd', ''),
(198, 19, '', 'qqqqqq');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienes_servicios_adicionales`
--

CREATE TABLE `bienes_servicios_adicionales` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `costo_total_produccion` double NOT NULL,
  `venta_total_anual` double NOT NULL,
  `ingresos_superior` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bien_serv_op`
--

CREATE TABLE `bien_serv_op` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `bien_serv_op`
--

INSERT INTO `bien_serv_op` (`id`, `nombre`) VALUES
(1, 'Bien'),
(2, 'Servicio'),
(3, 'Ambos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabildo`
--

CREATE TABLE `cabildo` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `si_no_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cabildo`
--

INSERT INTO `cabildo` (`id`, `id_empresa`, `si_no_id`, `nombre`) VALUES
(1, 4, 1, 'cabildo'),
(2, 5, 1, 'cabildo'),
(3, 6, 1, 'cabildo'),
(4, 7, 1, 'cabildo'),
(5, 8, 1, 'cabildo'),
(6, 9, 1, 'cabildo'),
(7, 10, 1, 'cabildo'),
(8, 11, 1, 'cabildo'),
(9, 12, 1, 'cabildo'),
(10, 13, 1, 'cabildo'),
(11, 14, 1, 'adsads'),
(12, 15, 1, 'adsads'),
(13, 16, 1, 'adsads'),
(14, 17, 1, 'adsads'),
(15, 18, 1, 'adsads'),
(16, 19, 1, 'adsads');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cadena_valor`
--

CREATE TABLE `cadena_valor` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `respuesta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `info_com_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `etapa_id` int(11) NOT NULL,
  `vigencia` varchar(30) COLLATE utf8_bin NOT NULL,
  `otro_nombre` varchar(200) COLLATE utf8_bin NOT NULL,
  `observacion` varchar(50) COLLATE utf8_bin NOT NULL,
  `confirmacion` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `certificacion`
--

INSERT INTO `certificacion` (`id`, `info_com_id`, `pregunta_id`, `etapa_id`, `vigencia`, `otro_nombre`, `observacion`, `confirmacion`) VALUES
(39, 11, 66, 2, '1', '', '11', 'si'),
(40, 11, 68, 1, '3', '', '33', 'si'),
(41, 11, 70, 1, '5', '', '55', 'si'),
(42, 11, 72, 1, '7', '', '77', 'si'),
(43, 11, 67, 1, '', '', '', 'no'),
(44, 11, 69, 1, '', '', '', 'no'),
(45, 11, 71, 1, '', '', '', 'no'),
(46, 16, 69, 1, '', '', '', 'si'),
(47, 16, 71, 1, '', '', '', 'si'),
(48, 16, 66, 1, '', '', '', 'no'),
(49, 16, 67, 1, '', '', '', 'no'),
(50, 16, 68, 1, '', '', '', 'no'),
(51, 16, 70, 1, '', '', '', 'no'),
(52, 16, 72, 1, '', '', '', 'no'),
(53, 17, 68, 1, '10', '', 'sdfgsdfg', 'si'),
(54, 17, 66, 1, '', '', '', 'no'),
(55, 17, 67, 1, '', '', '', 'no'),
(56, 17, 69, 1, '', '', '', 'no'),
(57, 17, 70, 1, '', '', '', 'no'),
(58, 17, 71, 1, '', '', '', 'no'),
(59, 17, 72, 1, '', '', '', 'no'),
(60, 15, 66, 1, '', '', '', 'no'),
(61, 15, 67, 1, '', '', '', 'no'),
(62, 15, 68, 1, '', '', '', 'no'),
(63, 15, 69, 1, '', '', '', 'no'),
(64, 15, 70, 1, '', '', '', 'no'),
(65, 15, 71, 1, '', '', '', 'no'),
(66, 15, 72, 1, '', '', '', 'no'),
(67, 28, 66, 1, '', '', '', 'no'),
(68, 28, 67, 1, '', '', '', 'no'),
(69, 28, 68, 1, '', '', '', 'no'),
(70, 28, 69, 1, '', '', '', 'no'),
(71, 28, 70, 1, '', '', '', 'no'),
(72, 28, 71, 1, '', '', '', 'no'),
(73, 28, 72, 1, '', '', '', 'no'),
(74, 20, 66, 1, '', '', '', 'no'),
(75, 20, 67, 1, '', '', '', 'no'),
(76, 20, 68, 1, '', '', '', 'no'),
(77, 20, 69, 1, '', '', '', 'no'),
(78, 20, 70, 1, '', '', '', 'no'),
(79, 20, 71, 1, '', '', '', 'no'),
(80, 20, 72, 1, '', '', '', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion_vulnerabilidad_es`
--

CREATE TABLE `condicion_vulnerabilidad_es` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `total_rotulo_id` int(11) NOT NULL,
  `discapacidad` int(11) NOT NULL,
  `cabeza_familia` int(11) NOT NULL,
  `adulto_mayor` int(11) NOT NULL,
  `indigena` int(11) NOT NULL,
  `com_negras` int(11) NOT NULL,
  `campesino` int(11) NOT NULL,
  `reinsertado` int(11) NOT NULL,
  `victimas_armado` int(11) NOT NULL,
  `vulnerabilidad_econo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consejo_comunitario`
--

CREATE TABLE `consejo_comunitario` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `si_no_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `consejo_comunitario`
--

INSERT INTO `consejo_comunitario` (`id`, `id_empresa`, `si_no_id`, `nombre`) VALUES
(1, 4, 1, 'conseejo'),
(2, 5, 1, 'conseejo'),
(3, 6, 1, 'conseejo'),
(4, 7, 1, 'conseejo'),
(5, 8, 1, 'conseejo'),
(6, 9, 1, 'conseejo'),
(7, 10, 1, 'conseejo'),
(8, 11, 1, 'conseejo'),
(9, 12, 1, 'conseejo'),
(10, 13, 1, 'conseejo'),
(11, 14, 1, 'asdasd'),
(12, 15, 1, 'asdasd'),
(13, 16, 1, 'asdasd'),
(14, 17, 1, 'asdasd'),
(15, 18, 1, 'asdasd'),
(16, 19, 1, 'asdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conservacion`
--

CREATE TABLE `conservacion` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `area` varchar(15) COLLATE utf8_bin NOT NULL,
  `otro_nombre` varchar(200) COLLATE utf8_bin NOT NULL,
  `confirmacion` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `conservacion`
--

INSERT INTO `conservacion` (`id`, `info_com_id`, `pregunta_id`, `area`, `otro_nombre`, `confirmacion`) VALUES
(43, 11, 29, '1', '', 'si'),
(44, 11, 31, '3', '', 'si'),
(45, 11, 33, '5', '', 'si'),
(46, 11, 35, '7', '', 'si'),
(47, 11, 37, '9', '', 'si'),
(48, 11, 30, '', '', 'no'),
(49, 11, 32, '', '', 'no'),
(50, 11, 34, '', '', 'no'),
(51, 11, 36, '', '', 'no'),
(52, 11, 38, '', '', 'no'),
(53, 11, 39, '', '', 'no'),
(54, 11, 40, '', '', 'no'),
(55, 11, 41, '', '', 'no'),
(56, 16, 35, '78', '', 'si'),
(57, 16, 38, '4', '', 'si'),
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
(69, 17, 37, '20km', '', 'si'),
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
(94, 15, 41, '', '', 'no'),
(95, 28, 29, '', '', 'no'),
(96, 28, 30, '', '', 'no'),
(97, 28, 31, '', '', 'no'),
(98, 28, 32, '', '', 'no'),
(99, 28, 33, '', '', 'no'),
(100, 28, 34, '', '', 'no'),
(101, 28, 35, '', '', 'no'),
(102, 28, 36, '', '', 'no'),
(103, 28, 37, '', '', 'no'),
(104, 28, 38, '', '', 'no'),
(105, 28, 39, '', '', 'no'),
(106, 28, 40, '', '', 'no'),
(107, 28, 41, '', '', 'no'),
(108, 20, 29, '', '', 'no'),
(109, 20, 30, '', '', 'no'),
(110, 20, 31, '', '', 'no'),
(111, 20, 32, '', '', 'no'),
(112, 20, 33, '', '', 'no'),
(113, 20, 34, '', '', 'no'),
(114, 20, 35, '', '', 'no'),
(115, 20, 36, '', '', 'no'),
(116, 20, 37, '', '', 'no'),
(117, 20, 38, '', '', 'no'),
(118, 20, 39, '', '', 'no'),
(119, 20, 40, '', '', 'no'),
(120, 20, 41, '', '', 'no');

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
(8, 'Negocios Verdes', 3, '<h5 style=\"text-align: center;\"><strong>¿Qué son los Negocios Verdes?</strong></h5><p style=\"text-align: justify; \">Contempla las actividades económicas en las que se ofertan bienes o servicios, que generan impactos ambientales positivos y además incorporan buenas prácticas ambientales, sociales y económicas con enfoque de ciclo de vida, contribuyendo a la conservación del ambiente como capital natural que soporta el desarrollo del territorio.</p>', 7),
(9, 'Identificación de los bienes y servicios de negocios verdes ', 3, '<p>Es relevante porque:</p><p><ol><li>Promueve patrones de producción y consumo sostenibles de bienes y servicios de los negocios verdes y sostenibles.<br></li><li>Propicia la creación de una cultura alineada con principios ambientales, sociales y éticos.<br></li><li>Facilita la toma de decisiones a los consumidores (públicos o privados) al momento de elegir un bien y servicio.<br></li><li>Visibiliza una oferta de bienes y servicios de cara al mercado nacional e internacional.<br></li></ol></p>', 8),
(10, 'Criterios para identificar los Negocios Verdes', 3, '<ol><li>Viabilidad económica del negocio<br></li><li>Impacto ambiental positivo del bien o servicio<br></li><li>Enfoque de ciclo de vida del bien o servicio<br></li><li>Vida Útil<br></li><li>No uso de sustancias o materiales peligrosos<br></li><li>Reciclabilidad de los materiales y uso de materiales reciclados<br></li><li>Uso eficiente y sostenible de recursos para la producción del bien o servicio<br></li><li>Responsabilidad social al interior de la empresa<br></li><li>Responsabilidad social y ambiental en la cadena de valor de la empresa<br></li><li>Responsabilidad social y ambiental al exterior de la empresa<br></li><li>Comunicación de atributos sociales o ambientales asociados al bien o servicio<br></li><li>Esquemas, programas o reconocimientos ambientales o sociales implementados o recibidos<br></li></ol>', 9);

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
(70, 18, 7, 2, 0),
(71, 19, 1, 2, 0),
(72, 19, 2, 2, 0),
(73, 19, 3, 2, 0),
(74, 19, 4, 2, 0),
(75, 19, 5, 2, 0),
(76, 19, 6, 2, 0),
(77, 19, 7, 2, 0),
(78, 20, 1, 2, 0),
(79, 20, 2, 2, 0),
(80, 20, 3, 2, 0),
(81, 20, 4, 2, 0),
(82, 20, 5, 2, 0),
(83, 20, 6, 2, 0),
(84, 20, 7, 2, 0),
(85, 21, 1, 2, 0),
(86, 21, 2, 2, 0),
(87, 21, 3, 2, 0),
(88, 21, 4, 2, 0),
(89, 21, 5, 2, 0),
(90, 21, 6, 2, 0),
(91, 21, 7, 2, 0),
(92, 22, 1, 2, 0),
(93, 22, 2, 2, 0),
(94, 22, 3, 2, 0),
(95, 22, 4, 2, 0),
(96, 22, 5, 2, 0),
(97, 22, 6, 2, 0),
(98, 22, 7, 2, 0),
(99, 23, 1, 2, 0),
(100, 23, 2, 2, 0),
(101, 23, 3, 2, 0),
(102, 23, 4, 2, 0),
(103, 23, 5, 2, 0),
(104, 23, 6, 2, 0),
(105, 23, 7, 2, 0),
(106, 24, 1, 2, 0),
(107, 24, 2, 2, 0),
(108, 24, 3, 2, 0),
(109, 24, 4, 2, 0),
(110, 24, 5, 2, 0),
(111, 24, 6, 2, 0),
(112, 24, 7, 2, 0),
(113, 25, 1, 2, 0),
(114, 25, 2, 2, 0),
(115, 25, 3, 2, 0),
(116, 25, 4, 2, 0),
(117, 25, 5, 2, 0),
(118, 25, 6, 2, 0),
(119, 25, 7, 2, 0),
(120, 26, 1, 2, 0),
(121, 26, 2, 2, 0),
(122, 26, 3, 2, 0),
(123, 26, 4, 2, 0),
(124, 26, 5, 2, 0),
(125, 26, 6, 2, 0),
(126, 26, 7, 2, 0),
(127, 27, 1, 2, 0),
(128, 27, 2, 2, 0),
(129, 27, 3, 2, 0),
(130, 27, 4, 2, 0),
(131, 27, 5, 2, 0),
(132, 27, 6, 2, 0),
(133, 27, 7, 2, 0),
(134, 28, 1, 2, 0),
(135, 28, 2, 2, 0),
(136, 28, 3, 2, 0),
(137, 28, 4, 2, 0),
(138, 28, 5, 2, 0),
(139, 28, 6, 2, 0),
(140, 28, 7, 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `autoridad_amb` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id`, `region_id`, `nombre`, `autoridad_amb`) VALUES
(14, 3, 'CHOCÓ', 'CODECHOCÒ'),
(15, 4, 'Cundinamarca', 'CAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion_etaria`
--

CREATE TABLE `descripcion_etaria` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `18_30` int(11) NOT NULL,
  `30_50` int(11) NOT NULL,
  `mayor_50` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(52, 15, 48, '', 'no'),
(53, 28, 42, '', 'no'),
(54, 28, 43, '', 'no'),
(55, 28, 44, '', 'no'),
(56, 28, 45, '', 'no'),
(57, 28, 46, '', 'no'),
(58, 28, 47, '', 'no'),
(59, 28, 48, '', 'no'),
(60, 20, 42, '', 'no'),
(61, 20, 43, '', 'no'),
(62, 20, 44, '', 'no'),
(63, 20, 45, '', 'no'),
(64, 20, 46, '', 'no'),
(65, 20, 47, '', 'no'),
(66, 20, 48, '', 'no');

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
  `latitud` varchar(10) COLLATE utf8_bin NOT NULL,
  `longitud` varchar(10) COLLATE utf8_bin NOT NULL,
  `altitud` varchar(10) COLLATE utf8_bin NOT NULL,
  `fami_empresa_si_no` int(11) NOT NULL COMMENT 'Fami empresa si o no',
  `tamaño_empresa_id` int(11) NOT NULL,
  `fecha_registro` varchar(40) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `num_socios` int(11) NOT NULL,
  `organizacion` int(11) NOT NULL COMMENT 'Asociacion',
  `subsector_id` int(11) NOT NULL,
  `etapa_empresa_id` int(11) NOT NULL,
  `años_funcionamiento` varchar(10) COLLATE utf8_bin NOT NULL,
  `año_func_desp_reg_camara` int(11) NOT NULL,
  `obs_general` text COLLATE utf8_bin NOT NULL,
  `informacion_as` varchar(2) COLLATE utf8_bin NOT NULL,
  `verificacion1` varchar(2) COLLATE utf8_bin NOT NULL,
  `verificacion2` varchar(2) COLLATE utf8_bin NOT NULL,
  `plan_mejora` varchar(2) COLLATE utf8_bin NOT NULL,
  `puntaje` double NOT NULL,
  `id_personeria` int(11) NOT NULL,
  `bien_serv_op` int(11) NOT NULL,
  `pagina_web` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `tipo_persona_id`, `tipo_identificacion_id`, `identificacion`, `razon_social`, `persona_id`, `empresario_id`, `municipio_id`, `vereda`, `latitud`, `longitud`, `altitud`, `fami_empresa_si_no`, `tamaño_empresa_id`, `fecha_registro`, `descripcion`, `num_socios`, `organizacion`, `subsector_id`, `etapa_empresa_id`, `años_funcionamiento`, `año_func_desp_reg_camara`, `obs_general`, `informacion_as`, `verificacion1`, `verificacion2`, `plan_mejora`, `puntaje`, `id_personeria`, `bien_serv_op`, `pagina_web`) VALUES
(4, 1, 1, '1077434234', 'prueba de segundo grado', 46, 1, 6, 'mi barrio', '23', '12', '34', 1, 3, '2018-11-21', 'negocio de venta de fruta', 9, 1, 9, 2, '5', 2, 'venta sdsdlsadalj ', 'no', 'no', 'no', 'no', 0, 3, 2, 'www.notiene.com'),
(5, 1, 1, '1077434234', 'prueba de segundo grado', 47, 2, 6, 'mi barrio', '23', '12', '34', 1, 3, '2018-11-21', 'negocio de venta de fruta', 9, 1, 9, 2, '5', 2, 'venta sdsdlsadalj ', 'no', 'no', 'no', 'no', 0, 3, 2, 'www.notiene.com'),
(6, 1, 1, '1077434234', 'prueba de segundo grado', 48, 3, 6, 'mi barrio', '23', '12', '34', 1, 3, '2018-11-21', 'negocio de venta de fruta', 9, 1, 9, 2, '5', 2, 'venta sdsdlsadalj ', 'no', 'no', 'no', 'no', 0, 3, 2, 'www.notiene.com'),
(7, 1, 1, '1077434234', 'prueba de segundo grado', 49, 4, 6, 'mi barrio', '23', '12', '34', 1, 3, '2018-11-21', 'negocio de venta de fruta', 9, 1, 9, 2, '5', 2, 'venta sdsdlsadalj ', 'no', 'no', 'no', 'no', 0, 3, 2, 'www.notiene.com'),
(8, 1, 1, '1077434234', 'prueba de segundo grado', 50, 5, 6, 'mi barrio', '23', '12', '34', 1, 3, '2018-11-21', 'negocio de venta de fruta', 9, 1, 9, 2, '5', 2, 'venta sdsdlsadalj ', 'no', 'no', 'no', 'no', 0, 3, 2, 'www.notiene.com'),
(9, 1, 1, '1077434234', 'grado', 51, 6, 6, 'mi barrio', '23', '12', '34', 1, 3, '2018-11-21', 'negocio de venta de fruta', 9, 1, 9, 2, '5', 2, 'venta sdsdlsadalj ', 'si', 'si', 'si', 'no', 33.90692640692641, 3, 2, 'www.notiene.com'),
(10, 1, 1, '1077434234', 'segundo grado', 52, 7, 6, 'mi barrio', '23', '12', '34', 1, 3, '2018-11-21', 'negocio de venta de fruta', 9, 1, 9, 2, '5', 2, 'venta sdsdlsadalj ', 'si', 'si', 'no', 'no', 0, 3, 2, 'www.notiene.com'),
(11, 1, 1, '1077434234', 'prueba de segundo grado', 53, 8, 6, 'mi barrio', '23', '12', '34', 1, 3, '2018-11-21', 'negocio de venta de fruta', 9, 1, 9, 2, '5', 2, 'venta sdsdlsadalj ', 'no', 'no', 'no', 'no', 0, 3, 2, 'www.notiene.com'),
(12, 1, 1, '1077434234', 'prueba de segundo grado', 54, 9, 6, 'mi barrio', '23', '12', '34', 1, 3, '2018-11-21', 'negocio de venta de fruta', 9, 1, 9, 2, '5', 2, 'venta sdsdlsadalj ', 'no', 'no', 'no', 'no', 0, 3, 2, 'www.notiene.com'),
(13, 1, 1, '1077434234', 'prueba de segundo grado', 55, 10, 6, 'mi barrio', '23', '12', '34', 1, 3, '2018-11-21', 'negocio de venta de fruta', 9, 1, 9, 2, '5', 2, 'venta sdsdlsadalj ', 'no', 'no', 'no', 'no', 0, 3, 2, 'www.notiene.com'),
(14, 1, 1, '141232', 'aasdas', 56, 11, 6, 'DFDSD', '12', '23', '21', 1, 3, '2018-11-21', 'asdsadghgfhf', 12, 1, 2, 2, '1', 2, 'gkfgkdfkgfdldgdfglgld', 'no', 'no', 'no', 'no', 0, 2, 3, 'www.sdfd.com'),
(15, 1, 1, '141232', 'aasdas', 57, 12, 6, 'DFDSD', '12', '23', '21', 1, 3, '2018-11-21', 'asdsadghgfhf', 12, 1, 2, 2, '1', 2, 'gkfgkdfkgfdldgdfglgld', 'no', 'no', 'no', 'no', 0, 2, 3, 'www.sdfd.com'),
(16, 1, 1, '141232', 'aasdas', 58, 13, 6, 'DFDSD', '12', '23', '21', 1, 3, '2018-11-21', 'asdsadghgfhf', 12, 1, 2, 2, '1', 2, 'gkfgkdfkgfdldgdfglgld', 'no', 'no', 'no', 'no', 0, 2, 3, 'www.sdfd.com'),
(17, 1, 1, '141232', 'aasdas', 59, 14, 6, 'DFDSD', '12', '23', '21', 1, 3, '2018-11-21', 'asdsadghgfhf', 12, 1, 2, 2, '1', 2, 'gkfgkdfkgfdldgdfglgld', 'no', 'no', 'no', 'no', 0, 2, 3, 'www.sdfd.com'),
(18, 1, 1, '141232', 'aasdas', 60, 15, 6, 'DFDSD', '12', '23', '21', 1, 3, '2018-11-21', 'asdsadghgfhf', 12, 1, 2, 2, '1', 2, 'gkfgkdfkgfdldgdfglgld', 'no', 'no', 'no', 'no', 0, 2, 3, 'www.sdfd.com'),
(19, 1, 1, '141232', 'aasdas', 61, 16, 6, 'DFDSD', '12', '23', '21', 1, 3, '2018-11-21', 'asdsadghgfhf', 12, 1, 2, 2, '1', 2, 'gkfgkdfkgfdldgdfglgld', 'no', 'no', 'no', 'no', 0, 2, 3, 'www.sdfd.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresario`
--

CREATE TABLE `empresario` (
  `id` int(11) NOT NULL,
  `identificacion` varchar(15) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `cargo` varchar(100) COLLATE utf8_bin NOT NULL,
  `carta_si_no` varchar(2) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `empresario`
--

INSERT INTO `empresario` (`id`, `identificacion`, `nombre`, `cargo`, `carta_si_no`) VALUES
(1, '122323', 'dueño', 'gerente', '1'),
(2, '122323', 'dueño', 'gerente', '1'),
(3, '122323', 'dueño', 'gerente', '1'),
(4, '122323', 'dueño', 'gerente', '1'),
(5, '122323', 'dueño', 'gerente', '1'),
(6, '122323', 'dueño', 'gerente', '1'),
(7, '122323', 'dueño', 'gerente', '1'),
(8, '122323', 'dueño', 'gerente', '1'),
(9, '122323', 'dueño', 'gerente', '1'),
(10, '122323', 'dueño', 'gerente', '1'),
(11, '122323', 'dueño', 'genrete', '1'),
(12, '122323', 'dueño', 'genrete', '1'),
(13, '122323', 'dueño', 'genrete', '1'),
(14, '122323', 'dueño', 'genrete', '1'),
(15, '122323', 'dueño', 'genrete', '1'),
(16, '122323', 'dueño', 'genrete', '1');

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
(4, 'Expansión'),
(5, 'Consolidación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_etnico`
--

CREATE TABLE `grupo_etnico` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `grupo_op_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `grupo_etnico`
--

INSERT INTO `grupo_etnico` (`id`, `id_empresa`, `grupo_op_id`, `nombre`) VALUES
(1, 4, 1, 'indigena'),
(2, 5, 1, 'indigena'),
(3, 6, 1, 'indigena'),
(4, 7, 1, 'indigena'),
(5, 8, 1, 'indigena'),
(6, 9, 1, 'indigena'),
(7, 10, 1, 'indigena'),
(8, 11, 1, 'indigena'),
(9, 12, 1, 'indigena'),
(10, 13, 1, 'indigena'),
(11, 14, 3, 'qeqw'),
(12, 15, 3, 'qeqw'),
(13, 16, 3, 'qeqw'),
(14, 17, 3, 'qeqw'),
(15, 18, 3, 'qeqw'),
(16, 19, 3, 'qeqw');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_etnico_op`
--

CREATE TABLE `grupo_etnico_op` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `grupo_etnico_op`
--

INSERT INTO `grupo_etnico_op` (`id`, `nombre`) VALUES
(1, 'Pueblos indígenas'),
(2, 'Pueblos rrom (gitanos)'),
(3, 'Comunidades negras (afrodescendientes, raizales, palenqueros)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoja_verificacion_1`
--

CREATE TABLE `hoja_verificacion_1` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `respuesta_id` int(11) NOT NULL,
  `cumplimiento_id` int(11) NOT NULL,
  `vigencia` varchar(11) COLLATE utf8_bin NOT NULL,
  `nombre_certificacion` varchar(200) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `medio_verificacion` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `hoja_verificacion_1`
--

INSERT INTO `hoja_verificacion_1` (`id`, `empresa_id`, `pregunta_id`, `respuesta_id`, `cumplimiento_id`, `vigencia`, `nombre_certificacion`, `descripcion`, `medio_verificacion`) VALUES
(1, 9, 1, 4, 1, '2018-11-15', 'sfsfsdf', '', 'Entrevista,Documentación'),
(2, 9, 2, 2, 0, '', '', 'vfxvdsv', 'Entrevista,Observación'),
(3, 9, 3, 4, 0, '', '', 'dffd', 'Entrevista'),
(4, 9, 4, 4, 0, '', '', '', ''),
(5, 9, 5, 4, 0, '', '', '', ''),
(6, 9, 34, 4, 0, '', '', '', ''),
(7, 9, 6, 4, 0, '', '', '', ''),
(8, 9, 7, 4, 0, '', '', '', ''),
(9, 9, 8, 4, 0, '', '', '', ''),
(10, 9, 9, 4, 0, '', '', '', ''),
(11, 9, 10, 4, 0, '', '', '', ''),
(12, 9, 11, 4, 0, '', '', '', ''),
(13, 9, 12, 4, 0, '', '', '', ''),
(14, 9, 13, 4, 0, '', '', '', ''),
(15, 9, 14, 4, 0, '', '', '', ''),
(16, 9, 16, 4, 4, '', '', '', ''),
(17, 9, 17, 4, 4, '', '', '', ''),
(18, 9, 18, 4, 4, '', '', '', ''),
(19, 9, 19, 4, 4, '', '', '', ''),
(20, 9, 20, 4, 4, '', '', '', ''),
(21, 9, 21, 4, 4, '', '', '', ''),
(22, 9, 22, 4, 4, '', '', '', ''),
(23, 9, 23, 4, 4, '', '', '', ''),
(24, 9, 24, 4, 4, '', '', '', ''),
(25, 9, 25, 4, 4, '', '', '', ''),
(26, 9, 26, 4, 0, '', '', '', ''),
(27, 9, 27, 4, 0, '', '', '', ''),
(28, 9, 28, 4, 0, '', '', '', ''),
(29, 9, 29, 4, 0, '', '', '', ''),
(30, 9, 30, 4, 0, '', '', '', ''),
(31, 9, 31, 4, 0, '', '', '', ''),
(32, 9, 32, 4, 0, '', '', '', ''),
(33, 9, 33, 4, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoja_verificacion_2`
--

CREATE TABLE `hoja_verificacion_2` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `calificador_id` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `medio_verificacion` varchar(200) COLLATE utf8_bin NOT NULL,
  `evidencia` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_empresa`
--

CREATE TABLE `img_empresa` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `imagen` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `img_empresa`
--

INSERT INTO `img_empresa` (`id`, `empresa_id`, `imagen`) VALUES
(2, 20, '20_dd3ed1a2b3a86284eba2d43c7c669368.jpg'),
(3, 22, '22_460c927e251e1b3206558669aca181c8.jpg'),
(4, 23, '23_1.PNG'),
(5, 24, '24_1e27e411bee18ee4fc0059f470a9eb84.jpg'),
(6, 25, '25_messi.jpg'),
(7, 26, ''),
(8, 27, ''),
(9, 28, '28_12208467_1483285018668988_6527247117495603979_n.jpg'),
(10, 4, ''),
(11, 5, ''),
(12, 6, ''),
(13, 7, ''),
(14, 8, ''),
(15, 9, ''),
(16, 10, ''),
(17, 11, ''),
(18, 13, ''),
(19, 16, ''),
(20, 19, '');

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
-- Estructura de tabla para la tabla `impacto_practicas`
--

CREATE TABLE `impacto_practicas` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `otro_nombre` varchar(200) COLLATE utf8_bin NOT NULL,
  `respuesta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_complementaria`
--

CREATE TABLE `informacion_complementaria` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `fecha_registro` varchar(11) COLLATE utf8_bin NOT NULL,
  `num_familias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(48, 15, 55, 'no'),
(49, 28, 53, 'no'),
(50, 28, 54, 'no'),
(51, 28, 55, 'no'),
(52, 20, 53, 'no'),
(53, 20, 54, 'si'),
(54, 20, 55, 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `junta_comunal`
--

CREATE TABLE `junta_comunal` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `si_no_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `junta_comunal`
--

INSERT INTO `junta_comunal` (`id`, `id_empresa`, `si_no_id`, `nombre`) VALUES
(1, 4, 1, 'junta'),
(2, 5, 1, 'junta'),
(3, 6, 1, 'junta'),
(4, 7, 1, 'junta'),
(5, 8, 1, 'junta'),
(6, 9, 1, 'junta'),
(7, 10, 1, 'junta'),
(8, 11, 1, 'junta'),
(9, 12, 1, 'junta'),
(10, 13, 1, 'junta'),
(11, 14, 1, '23434'),
(12, 15, 1, '23434'),
(13, 16, 1, '23434'),
(14, 17, 1, '23434'),
(15, 18, 1, '23434'),
(16, 19, 1, '23434');

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
(17, 15, 27, 2, 2, '', ''),
(18, 28, 27, 2, 2, '', ''),
(19, 20, 27, 2, 2, '', '');

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
-- Estructura de tabla para la tabla `medio`
--

CREATE TABLE `medio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `medio`
--

INSERT INTO `medio` (`id`, `nombre`) VALUES
(1, 'Entrevista'),
(2, 'Observación'),
(3, 'Documentación');

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
(6, 14, 'QUIBDÓ'),
(7, 14, 'ACANDÍ'),
(8, 14, 'ALTO BAUDÓ'),
(9, 14, 'ATRATO'),
(10, 14, 'BAGADÓ'),
(11, 14, 'BAHIA SOLANO'),
(12, 14, 'BAJO BAUDÓ'),
(13, 14, 'BOJAYÁ'),
(14, 14, 'CANTON DE SAN PABLO'),
(15, 14, 'CARMEN DEL DARIÉN'),
(16, 14, 'CERTEGUI'),
(17, 14, 'CONDOTO'),
(18, 14, 'CARMEN DE ATRATO'),
(19, 14, 'ISTMINA'),
(20, 14, 'JURADÓ'),
(21, 14, 'LITORAL DEL SAN JUAN '),
(22, 14, 'LLORÓ'),
(23, 14, 'MEDIO ATRATO'),
(24, 14, 'MEDIO BAUDÓ'),
(25, 14, 'MEDIO SAN JUAN'),
(26, 14, 'NÓVITA'),
(27, 14, 'NUQUÍ'),
(28, 14, 'RÍO IRÓ'),
(29, 14, 'RIOSUCIO'),
(30, 14, 'SAN JOSÉ DEL PALMAR'),
(31, 14, 'SIPÍ'),
(32, 14, 'TADÓ'),
(33, 14, 'UNGUÍA'),
(34, 14, 'UNIÓN PANAMERICANA'),
(35, 15, 'Boyaca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocio_comunidad`
--

CREATE TABLE `negocio_comunidad` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `socios` int(11) NOT NULL,
  `empleados_directos` int(11) NOT NULL,
  `empleados_indirectos` int(11) NOT NULL,
  `empleados_temporales` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `info_com_id` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `primaria` int(11) NOT NULL,
  `bachillerato` int(11) NOT NULL,
  `tecnico` int(11) NOT NULL,
  `tecnologo` int(11) NOT NULL,
  `universitario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `nivel_educativo`
--

INSERT INTO `nivel_educativo` (`id`, `info_com_id`, `sexo_id`, `primaria`, `bachillerato`, `tecnico`, `tecnologo`, `universitario`) VALUES
(1, 1, 1, 5, 0, 0, 0, 0),
(2, 1, 2, 5, 0, 0, 0, 0),
(3, 1, 3, 5, 0, 0, 0, 0),
(4, 1, 4, 5, 0, 0, 0, 0),
(5, 1, 5, 0, 0, 0, 0, 0),
(26, 8, 1, 0, 0, 0, 0, 0),
(27, 8, 2, 0, 0, 0, 0, 0),
(28, 8, 3, 0, 0, 0, 0, 0),
(29, 8, 4, 0, 0, 0, 0, 0),
(30, 8, 5, 0, 0, 0, 0, 0),
(31, 15, 1, 0, 0, 0, 0, 0),
(32, 15, 2, 0, 0, 0, 0, 0),
(33, 15, 3, 0, 0, 0, 0, 0),
(34, 15, 4, 0, 0, 0, 0, 0),
(35, 15, 5, 0, 0, 0, 0, 0),
(36, 16, 1, 0, 0, 0, 0, 0),
(37, 16, 2, 0, 0, 0, 0, 0),
(38, 16, 3, 0, 0, 0, 0, 0),
(39, 16, 4, 0, 0, 0, 0, 0),
(40, 16, 5, 0, 0, 0, 0, 0),
(41, 17, 1, 0, 0, 0, 0, 0),
(42, 17, 2, 0, 0, 0, 0, 0),
(43, 17, 3, 0, 0, 0, 0, 0),
(44, 17, 4, 0, 0, 0, 0, 0),
(45, 17, 5, 0, 0, 0, 0, 0),
(46, 18, 1, 0, 0, 0, 0, 0),
(47, 18, 2, 0, 0, 0, 0, 0),
(48, 18, 3, 0, 0, 0, 0, 0),
(49, 18, 4, 0, 0, 0, 0, 0),
(50, 18, 5, 0, 0, 0, 0, 0),
(51, 19, 1, 0, 0, 0, 0, 0),
(52, 19, 2, 0, 0, 0, 0, 0),
(53, 19, 3, 0, 0, 0, 0, 0),
(54, 19, 4, 0, 0, 0, 0, 0),
(55, 19, 5, 0, 0, 0, 0, 0),
(56, 20, 1, 0, 0, 0, 0, 0),
(57, 20, 2, 0, 0, 0, 0, 0),
(58, 20, 3, 0, 0, 0, 0, 0),
(59, 20, 4, 0, 0, 0, 0, 0),
(60, 20, 5, 0, 0, 0, 0, 0),
(61, 21, 1, 0, 0, 0, 0, 0),
(62, 21, 2, 0, 0, 0, 0, 0),
(63, 21, 3, 0, 0, 0, 0, 0),
(64, 21, 4, 0, 0, 0, 0, 0),
(65, 21, 5, 0, 0, 0, 0, 0),
(66, 22, 1, 0, 0, 0, 0, 0),
(67, 22, 2, 0, 0, 0, 0, 0),
(68, 22, 3, 0, 0, 0, 0, 0),
(69, 22, 4, 0, 0, 0, 0, 0),
(70, 22, 5, 0, 0, 0, 0, 0),
(71, 23, 1, 0, 0, 0, 0, 0),
(72, 23, 2, 0, 0, 0, 0, 0),
(73, 23, 3, 0, 0, 0, 0, 0),
(74, 23, 4, 0, 0, 0, 0, 0),
(75, 23, 5, 0, 0, 0, 0, 0),
(76, 24, 1, 0, 0, 0, 0, 0),
(77, 24, 2, 0, 0, 0, 0, 0),
(78, 24, 3, 0, 0, 0, 0, 0),
(79, 24, 4, 0, 0, 0, 0, 0),
(80, 24, 5, 0, 0, 0, 0, 0),
(81, 25, 1, 0, 0, 0, 0, 0),
(82, 25, 2, 0, 0, 0, 0, 0),
(83, 25, 3, 0, 0, 0, 0, 0),
(84, 25, 4, 0, 0, 0, 0, 0),
(85, 25, 5, 0, 0, 0, 0, 0),
(86, 26, 1, 0, 0, 0, 0, 0),
(87, 26, 2, 0, 0, 0, 0, 0),
(88, 26, 3, 0, 0, 0, 0, 0),
(89, 26, 4, 0, 0, 0, 0, 0),
(90, 26, 5, 0, 0, 0, 0, 0),
(91, 27, 1, 0, 0, 0, 0, 0),
(92, 27, 2, 0, 0, 0, 0, 0),
(93, 27, 3, 0, 0, 0, 0, 0),
(94, 27, 4, 0, 0, 0, 0, 0),
(95, 27, 5, 0, 0, 0, 0, 0),
(96, 28, 1, 0, 0, 0, 0, 0),
(97, 28, 2, 0, 0, 0, 0, 0),
(98, 28, 3, 0, 0, 0, 0, 0),
(99, 28, 4, 0, 0, 0, 0, 0),
(100, 28, 5, 0, 0, 0, 0, 0);

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
(2, 'seguda - 2', 'sdfafdas - 2', '2018-04-20 21:53:49', 'dasdsds - 2', 7),
(3, 'otra wera', '<p style=\"text-align: justify;\">la&nbsp; otra de la calle tal que paso por mi casa me dijp que eras listoadssdadasdsa dasdasd asdasdas dasdsa dsa dasdasdsadasd sdffdfddddfdffdsfdsfdf dsfdsfd sfds fdsfdfdf dsf dsfdsfds fdsfdsfdsfds fdsfdsfdsf dsfdfdfdds fdsf dsf dsfdf dfdf df dsf df df df ds fdfd fdfdfdf dfd fd fdfdf df df d fdfdfdfdfs dfdfdfdfdf dfdfdfdf dfdfdfdd fddfds fdsfdf dsf</p>', '2018-04-20 22:18:58', 'yo mismo', 9),
(5, 'Colombia y 5 países más dejarán de participar en Unasur', '<p>Un total de seis países de la Unión de Naciones Suramericanas () comunicaron a Bolivia, que ostenta la presidencia temporal del bloque, su decisión de \"no participar en las distintas instancias\", hasta que no se garantice \"el funcionamiento adecuado de la organización\".&nbsp;</p><br style=\"\"><p>El documento, al que este viernes tuvo acceso Efe, está dirigido al ministro de Relaciones Exteriores boliviano, Fernando Huanacuni,&nbsp;está firmado por los cancilleres de Argentina, <strong>Colombia, Chile, Brasil, Paraguay y Perú.</strong></p>', '2018-05-21 18:03:22', 'ElTiempo.com', 10),
(6, 'Una persona muerta y dos heridas deja avalancha en Girardot', '<p>La intensa lluvia que se prolongó durante varias horas, arrastró el material que se había extraído para instalar una tubería, en la parte alta de la montaña. Sobre las 2 de la mañana el lodo sorprendió a los habitantes del barrio Puerto Cabrera. Decenas de personas tuvieron que abandonar sus viviendas por los techos.</p><p>Diez viviendas fueron las más afectadas, los enseres de sus habitantes quedaron bajo el lodo. Con palas, los habitantes intentan remover el lodo para recuperar algunas de sus cosas. Las familias damnificadas esperan la ayuda de la Alcaldía para recuperar sus viviendas.</p>', '2018-05-17 23:28:21', 'Noticias RCN', 7);

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
(7, 15, '', 1, '', ''),
(8, 28, '', 1, '', ''),
(9, 20, '2j111', 2, 'ljklkoj11111', 'jhklkjj11111'),
(10, 20, '2j22222', 1, 'ljklkoj00', 'jhklkjj00000000');

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
(6, 15, '', '', ''),
(7, 28, '', '', ''),
(8, 20, '1', '1', '1'),
(9, 20, '2', '2', '2'),
(10, 20, '3', '3', '3'),
(11, 20, '4', '4', '4');

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
(5, 15, '', ''),
(6, 28, '', ''),
(7, 20, '212222', '1111111222'),
(8, 20, '222333', '22222222233');

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
(7, 15, '', 2, ''),
(8, 28, '', 2, ''),
(9, 20, '3q111', 1, 'kjñlkq'),
(10, 20, '2222', 1, 'kjñlkq222'),
(11, 20, '3333', 2, 'kjñlkq0000000');

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
(7, 15, '', '', 1),
(8, 28, '', '', 1),
(9, 20, '111', 'kdf11111111', 1),
(10, 20, '22222', 'llllll222222', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otro_condicion_vulneravibilidad`
--

CREATE TABLE `otro_condicion_vulneravibilidad` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `otro_rotulo_id` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(4, 11, 'De ninguna forma                                                           '),
(5, 16, '46545'),
(6, 17, ''),
(7, 15, ''),
(8, 28, ''),
(9, 20, '1 yo                                                                                          '),
(10, 20, '2 yo                                                                                          ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otro_negocio_comunidad`
--

CREATE TABLE `otro_negocio_comunidad` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otro_nivel_educativo`
--

CREATE TABLE `otro_nivel_educativo` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otro_programa`
--

CREATE TABLE `otro_programa` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `recurso_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `otro_programa`
--

INSERT INTO `otro_programa` (`id`, `info_com_id`, `recurso_id`, `nombre`, `descripcion`) VALUES
(2, 11, 0, 'Pencion', 'Pencionsita'),
(3, 16, 0, '', 'klp'),
(4, 17, 0, '', ''),
(5, 15, 0, '', ''),
(6, 28, 0, '', ''),
(7, 20, 0, '111111', 'fasfas111111111'),
(8, 20, 0, '222222', 'jkl22222222222');

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
(6, 15, '', ''),
(7, 28, '', ''),
(20, 20, '1', '1111111'),
(21, 20, '222', '2222222'),
(22, 20, '333', '333333');

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
(30, 15, 26, 2, 2, '', ''),
(31, 28, 22, 2, 2, '', ''),
(32, 28, 23, 2, 2, '', ''),
(33, 28, 24, 2, 2, '', ''),
(34, 28, 25, 2, 2, '', ''),
(35, 28, 26, 2, 2, '', ''),
(36, 20, 22, 2, 2, '', ''),
(37, 20, 23, 2, 2, '', ''),
(38, 20, 24, 2, 2, '', ''),
(39, 20, 25, 2, 2, '', ''),
(40, 20, 26, 2, 2, '', '');

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
(28, ' 123', ' rafael', ' asdasdas', ' ', ' rojas', 'asda@gmail.com', ' 321256346', ' ', ' porvenir', 2, '', 1, ''),
(29, '45635465', 'hhhh', '', '', '', '', '', '', '', 4, '', 1, ''),
(30, '6587685', 'jgfjhgf', '', '', '', '', '', '', '', 4, '', 1, ''),
(31, '333323232', 'jhfgkjhgfkjhfjhg', '', '', '', '', '', '', '', 4, '', 1, ''),
(32, '23132', 'jhfgkjh', '', '', '', '', '', '', '', 4, '', 1, ''),
(33, '4564546', 'jhgkjh', '', '', '', '', '', '', '', 4, '', 1, ''),
(34, '749879', 'jkhjhkjh', '', '', '', '', '', '', '', 4, '', 1, ''),
(35, '1546', 'jklhkjl', '', '', '', '', '', '', '', 4, '', 1, ''),
(36, '142457', 'mm', '', '', '', '', '', '', '', 4, '', 1, ''),
(37, '56547879', 'qq', '', '', '', '', '', '', '', 4, '', 1, ''),
(38, '13564', 'oioi', '', '', '', '', '', '', '', 4, '', 1, ''),
(39, '5234234', 'tu mismo', '', '', '', 'das@sfd.com', '3211111111', '23432', 'cll 4534', 4, '', 1, ''),
(40, '5234234', 'tu mismo', '', '', '', 'das@sfd.com', '3211111111', '23432', 'cll 4534', 4, '', 1, ''),
(41, '5234234', 'tu mismo', '', '', '', 'das@sfd.com', '3211111111', '23432', 'cll 4534', 4, '', 1, ''),
(42, '5234234', 'tu mismo', '', '', '', 'das@sfd.com', '3211111111', '23432', 'cll 4534', 4, '', 1, ''),
(43, '5234234', 'tu mismo', '', '', '', 'das@sfd.com', '3211111111', '23432', 'cll 4534', 4, '', 1, ''),
(44, '5234234', 'tu mismo', '', '', '', 'das@sfd.com', '3211111111', '23432', 'cll 4534', 4, '', 1, ''),
(45, '5234234', 'tu mismo', '', '', '', 'das@sfd.com', '3211111111', '23432', 'cll 4534', 4, '', 1, ''),
(46, '5234234', 'tu mismo', '', '', '', 'das@sfd.com', '3211111111', '23432', 'cll 4534', 4, '', 1, ''),
(47, '5234234', 'tu mismo', '', '', '', 'das@sfd.com', '3211111111', '23432', 'cll 4534', 4, '', 1, ''),
(48, '5234234', 'tu mismo', '', '', '', 'das@sfd.com', '3211111111', '23432', 'cll 4534', 4, '', 1, ''),
(49, '5234234', 'tu mismo', '', '', '', 'das@sfd.com', '3211111111', '23432', 'cll 4534', 4, '', 1, ''),
(50, '5234234', 'tu mismo', '', '', '', 'das@sfd.com', '3211111111', '23432', 'cll 4534', 4, '', 1, ''),
(51, '5234234', 'tu mismo', '', '', '', 'das@sfd.com', '3211111111', '23432', 'cll 4534', 4, '', 1, ''),
(52, '5234234', 'tu mismo', '', '', '', 'das@sfd.com', '3211111111', '23432', 'cll 4534', 4, '', 1, ''),
(53, '5234234', 'tu mismo', '', '', '', 'das@sfd.com', '3211111111', '23432', 'cll 4534', 4, '', 1, ''),
(54, '5234234', 'tu mismo', '', '', '', 'das@sfd.com', '3211111111', '23432', 'cll 4534', 4, '', 1, ''),
(55, '5234234', 'tu mismo', '', '', '', 'das@sfd.com', '3211111111', '23432', 'cll 4534', 4, '', 1, ''),
(56, '343432', 'zczxcx', '', '', '', 'asds@dasd.com', '32123232121', '131231', 'CLL 3434', 4, '', 1, ''),
(57, '343432', 'zczxcx', '', '', '', 'asds@dasd.com', '32123232121', '131231', 'CLL 3434', 4, '', 1, ''),
(58, '343432', 'zczxcx', '', '', '', 'asds@dasd.com', '32123232121', '131231', 'CLL 3434', 4, '', 1, ''),
(59, '343432', 'zczxcx', '', '', '', 'asds@dasd.com', '32123232121', '131231', 'CLL 3434', 4, '', 1, ''),
(60, '343432', 'zczxcx', '', '', '', 'asds@dasd.com', '32123232121', '131231', 'CLL 3434', 4, '', 1, ''),
(61, '343432', 'zczxcx', '', '', '', 'asds@dasd.com', '32123232121', '131231', 'CLL 3434', 4, '', 1, '');

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
(36, 15, 52, 2, 2, '', '', 'no'),
(37, 28, 49, 2, 2, '', '', 'no'),
(38, 28, 50, 2, 2, '', '', 'no'),
(39, 28, 51, 2, 2, '', '', 'no'),
(40, 28, 52, 2, 2, '', '', 'no'),
(41, 20, 49, 2, 2, '', '', 'no'),
(42, 20, 50, 2, 2, '', '', 'no'),
(43, 20, 51, 2, 2, '', '', 'no'),
(44, 20, 52, 2, 2, '', '', 'no');

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
(27, 11, 76, 'jhgjf', 'hgfh', 'hjgfj', 'x', 'x', 'x', 'x', '', '', '', 'x', '', '', 'x', 'x', 'hfdhj'),
(29, 11, 79, 'hgjh', 'jhg', 'jhg', 'x', 'x', 'x', 'x', '', '', '', 'x', '', 'x', 'x', '', 'estoy lleno'),
(30, 11, 84, 'ñññ', 'ññ', 'ñ', 'x', 'x', 'x', 'x', '', 'x', 'x', '', '', 'x', 'x', '', 'jhgkjhgkj'),
(31, 11, 86, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
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
(65, 11, 130, 'hgfjhgfj', 'jhgfjh', 'hgfj', 'x', 'x', 'x', '', '', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'jugfujkhgu'),
(73, 11, 83, '010', '010', '010', 'x', 'x', 'x', 'x', '', '', 'x', 'x', 'x', '', 'x', 'x', 'uytiuy'),
(74, 11, 118, '134', '134', '134', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', '', '', 'x', 'x', 'utyriuytriuy'),
(75, 11, 74, '74', '01', '01', 'x', 'x', 'x', 'x', 'x', 'x', '', '', 'x', 'x', '', 'x', '74 y cod 01'),
(76, 11, 87, '1.2 ', '87', '87', 'x', 'x', 'x', 'x', '', '', 'x', 'x', '', 'x', 'x', '', 'soy 87 cod. 1.2'),
(82, 13, 73, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(83, 13, 85, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(84, 17, 74, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(85, 17, 75, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, 17, 76, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(87, 17, 79, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(88, 17, 80, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(89, 17, 81, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(90, 17, 82, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(91, 17, 83, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(92, 17, 85, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(93, 17, 123, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(94, 17, 124, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(95, 17, 129, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(96, 20, 90, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(97, 20, 91, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(98, 20, 92, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(99, 20, 94, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(100, 20, 100, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(101, 20, 101, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(102, 20, 105, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(103, 20, 109, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(104, 20, 116, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(105, 20, 118, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(106, 20, 121, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(107, 20, 125, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(108, 20, 129, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(109, 20, 133, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(110, 20, 135, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(111, 20, 136, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(112, 28, 73, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(113, 28, 85, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(114, 28, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(115, 28, 89, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta_indicativa`
--

CREATE TABLE `pregunta_indicativa` (
  `id` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `aspecto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `pregunta_indicativa`
--

INSERT INTO `pregunta_indicativa` (`id`, `descripcion`, `aspecto_id`) VALUES
(1, '¿Se cuenta con una certificación Socio - Ambiental vigente?.  Si la respuesta es positiva, debe adjuntar los soportes que evidencien el cumplimiento e implementación de dicha certificación para realizar una verificación de escritorio.', 1),
(2, '¿Se prohíbe la utilización de sustancias y/o materiales que aunque se encuentren legalmente registrados, son altamente tóxicos para el ambiente y/o salud humana? \r\nEjemplo: Mercurio, Arsénico, Plomo, Cobre; agroquímicos de alta toxicidad (etiqueta roja y amarilla), entre otros.', 2),
(3, '¿Se prohíbe las acciones que pueden alterar los ecosistemas, bien sea por que el negocio desarrolla  actividades en los mismos o en su área de influencia y se prohíbe la afectación a la vida silvestre (fauna y flora) evitando la cacería, tala y pesca en los casos que están prohibidos por ley?', 2),
(4, '¿Se prohíbe el uso de sustancias y/o materiales prohibidos para el país, o que no están legalmente registrados?', 2),
(5, '¿Se promueve e implementa prácticas inclusivas y no discriminatorias; se respeta, protege y promueve los derechos humanos, los derechos de las comunidades indígenas, afrocolombianas u otras comunidades tradicionales al desarrollar sus actividades en el territorio?', 2),
(6, '¿Cuenta con RUT?', 3),
(7, '¿Cuenta con NIT?', 3),
(8, '¿Cuenta con cámara de comercio vigente?', 3),
(9, '¿En caso de aplicar, cuenta con registro Invima?', 3),
(10, '¿En caso de aplicar, cuenta con registro ICA?', 3),
(11, '¿En caso de aplicar, cuenta con Registro Nacional de Turismo?', 3),
(12, '¿Se cuenta con evidencia de tenencia de la tierra? (Ver formato de inscripción, IV.  Características del Negocio Verde, numeral 2.)', 3),
(13, '¿la actividad del negocio va de acuerdo con los requerimientos de uso legal del suelo?', 3),
(14, '¿En caso de aplicar, cuenta con la certificación del curso de manipulación de alimentos?', 3),
(16, '¿En caso de aplicar, cuenta con la certificación del curso de manipulación de alimentos?', 4),
(17, '¿En caso de aplicar, cuenta con Registro de Plantación Forestal y cumple con los requerimientos exigidos por la Autoridad Ambiental que aplica a los productos silvestres maderables y no maderables?', 4),
(18, '¿En caso de aplicar, cuenta con Registro de Sistema Agroforestal?', 4),
(19, '¿En caso de aplicar, cuenta con Permiso de Movilización y/o Salvoconductos de Movilización ?', 4),
(20, '¿En caso de aplicar, cuenta con Licencia Ambiental para el uso y extracción de especies nativas?', 4),
(21, '¿ Si el negocio compra y comercializa productos fuente de la biodiversidad, se cuenta con permiso de comercialización?', 4),
(22, '¿En caso de aplicar, cuenta con concesión de aguas (subterráneas o superficiales) ?', 4),
(23, '¿En caso de aplicar, cumple con los requerimientos legales de manejo de aguas residuales y vertimientos?', 4),
(24, '¿En caso de aplicar, cuenta con Permiso de Emisiones?', 4),
(25, '¿En caso de generarse residuos o desechos peligrosos (mayor o igual a 10 kg/mes), se cuenta con registro como generador de residuos (RESPEL)? ', 4),
(26, '¿Todos los desperdicios y basuras se recolectan y se evita la acumulación de desperdicios susceptibles de descomposición, que puedan ser nocivos para la salud de los trabajadores y se cumple con los requerimientos de limpieza y recolección de escombros?', 4),
(27, '¿Se prohíbe la contratación de menores de 18 años?\r\nEn caso de contratar menores de 18 años, ¿cumple con los requerimientos legales en cuanto a la autorización de trabajo para adolescentes por parte de un inspector de trabajo?', 5),
(28, '¿Se prohíbe todo tipo de trabajo forzado o actividades realizadas bajo régimen de prisión? ', 5),
(29, '¿La actividad del negocio conoce y respeta los intereses colectivos de las comunidades?', 5),
(30, '¿La remuneración a los trabajadores se realiza de acuerdo o basado en el Salario Mínimo Legal Vigente, y lo especificado en el Código Sustantivo de Trabajo. \r\n(Ejemplo: se pagan horas extras, primas, liquidaciones de contrato, y otros requerimientos laborales de acuerdo al tipo de contrato).', 5),
(31, '¿Se cuenta con un Sistema de Gestión de Seguridad y Salud en el Trabajo (SG - SST), que incluya  prácticas para disminuir riesgos asociados a desastres naturales, cuenta con un plan de contingencias y emergencias?', 5),
(32, '¿Se evita la contratación o compra de insumos o productos, a proveedores, empresas y/o negocios que incumplen con alguna de las anteriores preguntas formuladas, o cualquier otro requisito legal ?', 6),
(33, 'Otros requerimientos exigidos por la autoridad ambiental, municipio, gobernación etc.\r\nEjemplo: vedas, restricción de otras actividades y permisos.', 7),
(34, '¿Los propietarios, representante legal, junta directiva y/o representantes del negocio no están involucrados en actividades ilegales, afectación a la comunidad, denuncias o se encuentran bajo investigación y no cuentan con procesos sancionatorios ambientales?', 2),
(35, '¿Cuenta con estados financieros, contabilidad o registro de ingreso y egresos?', 8),
(36, '¿Cuenta con un plan financiero a corto, mediano y largo plazo que acompañe las acciones del negocio?', 8),
(37, '¿El bien o servicio tiene potencial comercial y cuenta con estrategias de mercadeo que garanticen su sostenibilidad en el mercado (demanda del producto)?', 8),
(38, '¿El bien o servicio cuenta con un plan estratégico que incluya; misión, visión, metas y estrategias, equipo de trabajo, plan de negocios, información, alianzas estratégicas y publicidad? ', 8),
(39, '¿Las ventas del bien o servicio son suficientes para cubrir las necesidades financieras (gastos, remuneración de sus empleados, otros, ver apartado IV. Sostenibilidad Económica)?', 8),
(40, '¿Su negocio tiene ingresos adicionales a la venta directa del producto o servicio líder (ver apartado IV Sotenibilidad Económica)?', 8),
(41, '¿El precio del producto considera costos de transporte y logística, y la mano de obra familiar asociada al desarrollo del bien o servicio?', 8),
(42, '¿Cuenta con estrategias de análisis de las prácticas comerciales de sus competidores, aliados estratégicos y líder de su mercado?', 8),
(43, '¿Ha identificado los canales de distribución por la que circulan sus productos y la de sus competidores directos actualmente?', 8),
(44, '¿Se diseñan e implementan acciones que promueva la conservación y preservación de los ecosistemas y de la vida silvestre?', 9),
(45, '¿Se implementan acciones de prevención o mitigación de los impactos negativos generados en cada una de las etapas del bien o servicio?', 9),
(46, '¿Se implementan acciones que permiten la reducción o mitigación de emisiones de gases de efecto invernadero-GEI? (ver hoja de información complementaria: apartado I Sostenibilidad Ambiental )', 9),
(47, '¿En caso de desarrollarse la actividad turística en un Área Protegida, cuenta con Estudio de Capacidad de Carga?', 9),
(48, '¿Se identifica los impactos sobre el ambiente, la comunidad y los trabajadores en las principales etapas del sistema productivo o ciclo de vida del producto? ', 10),
(49, '¿Se consideran criterios ambientales en la compra de productos o insumos necesarios para el proceso de producción, o incluye autoabastecimiento con criterios ambientales?', 10),
(50, '¿Se realizan acciones para mantener, asegurar o mejorar los impactos ambientales positivos generados en el ciclo de vida del bien o servicio?', 10),
(51, '¿Se realizan acciones y procedimientos para extender su vida útil del bien o servicio?', 11),
(52, '¿Se desarrollan actividades de innovación, investigación o ambas, que aporte a extender la vida útil del bien o servicio?', 11),
(53, '¿Cuenta con hojas o fichas de seguridad de los productos utilizados y se utilizan de acuerdo a lo indicado en la hoja de seguridad: tipo de cultivo establecido y cantidades indicadas?', 12),
(54, '¿Se previene o mitiga el uso de sustancias que afectan el ambiente, la salud humana o ambas, y en caso de usarlas se cuenta con un plan de sustitución?\r\n(Ejemplo: agroquímicos categoría azul y verde, sustancias tóxicas utilizadas en limpieza y desinfección, y otras).', 12),
(55, '¿Cuenta con un programa de manejo integral de residuos, se promueve e implementan acciones para reducir, reciclar y reutilizar los residuos generados?', 13),
(56, '¿Se utilizan materiales recuperables, reciclables, reutilizables y/o biodegradables en la fabricación del producto, su empaque y embalaje, y se cuenta con un plan de acción que permita el cambio de materiales no renovables por renovables o reciclados?', 13),
(57, '¿Se toman acciones para disminuir o eliminar el uso de empaques y embalajes?  ', 13),
(58, '¿Cuenta con un programa de ahorro y uso eficiente de agua y energía ?', 14),
(59, '¿Cuenta con un programa de uso eficiente de materias primas?', 14),
(60, '¿Se cuenta con un plan de reducción o sustitución de fuentes de energía no renovales y se involucra fuentes de energía alternativa o tecnologías más limpias?', 14),
(61, '¿Cuenta con un programa de bienestar social para sus empleados y colaboradores, que incluya equidad en puestos de trabajo, equidad salarial y beneficios adicionales? ', 15),
(62, '¿Se toman medidas para que los empleados, colaboradores y sus familias tengan acceso a servicios de salud y recreación?', 15),
(63, '¿Se facilita y promueve que sus empleados y colaboradores se capaciten mediante educación formal y no formal?', 15),
(64, '¿El código de ética del negocio es socializado y los empleados y colaboradores hacen uso de los mecanismos de participación para escuchar y responder las sugerencias, ideas, peticiones y reclamaciones', 15),
(65, '¿Promueve, promociona o ambas, que sus proveedores, intermediadores y clientes realicen actividades de responsabilidad social y ambiental? ', 16),
(66, '¿Cuenta con contratos, alianzas o convenios con empresas de economía social, MIPYMES y promueve estrategias de encadenamiento?', 16),
(67, '¿Se promueve la responsabilidad extendida del producto con proveedores, clientes y usuarios? ', 16),
(68, '¿Promueve y prioriza la generación de empleo local?', 17),
(69, '¿Apoya la  inversión social, ambiental y desarrollo comunitario?', 17),
(70, '¿Se realizan acciones de sensibilización a los consumidores, en temas de responsabilidad y sostenibilidad?', 17),
(71, '¿Se respetan las áreas y actividades de importancia social, cultural, biológica, ambiental y religiosa para la comunidad? ', 17),
(72, '¿Cuenta con un procedimiento de peticiones, quejas, reclamos y sugerencias para recibir, documentar y responder a los clientes?', 17),
(73, '¿Se cuenta con un mecanismo de consulta a las comunidades aledañas y protege (salvaguarda) el conocimiento ancestral o tradicional?', 17),
(74, '¿Se comunican los atributos ambientales y socio-culturales del bien o servicio a los clientes y el público en general?', 18),
(75, '¿Se comunica a los clientes y público en general sobre su sistema de producción, comercialización y su aporte en la cadena de valor del bien o servicio?', 18),
(76, '¿Cuenta con un programa de capacitación y promoción de prácticas de responsabilidad social y ambiental con empleados, colaboradores, proveedores, clientes y comunidad en general?', 18),
(77, '¿Se otorga condiciones sociales y pago de salarios mejores a las exigidas por la Legislación Nacional Vigente?', 19),
(78, '¿Se cuenta con un programa para la inclusión y contratación de población vulnerable (Ver información complementaria: II. Información de Sostenibilidad Social)?', 19),
(79, '¿Se cuenta con premios y reconocimientos enfocados a Buenas Prácticas Ambientales y Sociales?', 20),
(80, '¿Se cuenta con evidencias de auditorias, verificaciones, certificaciones, sellos, ecoetiquetas o hizo parte de un Sistemas Participativo de Garantías?', 20),
(81, '¿Se cuenta con un programa de educación ambiental enfocado en desarrollo sostenible aplicado a su sistema productivo?', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `recurso_id` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_bin NOT NULL,
  `confirmacion` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`id`, `info_com_id`, `pregunta_id`, `recurso_id`, `descripcion`, `confirmacion`) VALUES
(17, 11, 57, 0, '1111', 'si'),
(18, 11, 59, 0, '33333', 'si'),
(19, 11, 58, 0, '', 'no'),
(20, 11, 60, 0, '', 'no'),
(21, 16, 59, 0, 'kjhgjk', 'si'),
(22, 16, 57, 0, '', 'no'),
(23, 16, 58, 0, '', 'no'),
(24, 16, 60, 0, '', 'no'),
(25, 17, 58, 0, 'asiasdfsdf', 'si'),
(26, 17, 57, 0, '', 'no'),
(27, 17, 59, 0, '', 'no'),
(28, 17, 60, 0, '', 'no'),
(29, 15, 57, 0, '', 'no'),
(30, 15, 58, 0, '', 'no'),
(31, 15, 59, 0, '', 'no'),
(32, 15, 60, 0, '', 'no'),
(33, 28, 57, 0, '', 'no'),
(34, 28, 58, 0, '', 'no'),
(35, 28, 59, 0, '', 'no'),
(36, 28, 60, 0, '', 'no'),
(37, 20, 57, 0, '', 'no'),
(38, 20, 58, 0, '', 'no'),
(39, 20, 59, 0, '', 'no'),
(40, 20, 60, 0, '', 'no');

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
(4, 1, 'Andina');

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
(24, 15, 21, 2, 2, '', ''),
(25, 28, 18, 2, 2, '', ''),
(26, 28, 19, 2, 2, '', ''),
(27, 28, 20, 2, 2, '', ''),
(28, 28, 21, 2, 2, '', ''),
(29, 20, 18, 2, 2, '', ''),
(30, 20, 19, 2, 2, '', ''),
(31, 20, 20, 2, 2, '', ''),
(32, 20, 21, 2, 2, '', '');

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
  `nombre` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `si_no`
--

INSERT INTO `si_no` (`id`, `nombre`) VALUES
(1, 'Si'),
(2, 'No'),
(4, 'No aplica');

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
(3, '', '', 9),
(4, '', '', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sost_economica`
--

CREATE TABLE `sost_economica` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `bien_servicio_id` varchar(100) COLLATE utf8_bin NOT NULL,
  `u_vendidadas_anuales` int(11) NOT NULL,
  `unidad_medida_id` int(11) NOT NULL,
  `cantidad_unidad` double NOT NULL,
  `costo_produccion_unidad` double NOT NULL,
  `precio_v_unitario` double NOT NULL,
  `ganancia_unidad` double NOT NULL,
  `ventas_anual` double NOT NULL,
  `ingreso_superior` int(11) NOT NULL COMMENT 'ingresos superior al costo? '
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `sost_economica`
--

INSERT INTO `sost_economica` (`id`, `info_com_id`, `bien_servicio_id`, `u_vendidadas_anuales`, `unidad_medida_id`, `cantidad_unidad`, `costo_produccion_unidad`, `precio_v_unitario`, `ganancia_unidad`, `ventas_anual`, `ingreso_superior`) VALUES
(6, 8, 'alguno', 50, 1, 0, 2500, 100, 50, 800000, 1),
(7, 11, 'pera', 1, 2, 0, 15, 35, 20, 35, 1),
(8, 11, 'yuca', 1, 2, 0, 2, 50, 48, 50, 2),
(9, 11, 'papa', 2, 2, 0, 2, 231, 229, 462, 2),
(10, 16, 'ese mismo', 10, 1, 0, 5, 23, 56, 87, 1),
(11, 17, 'blusa', 0, 1, 0, 0, 0, 0, 0, 1),
(12, 17, 'pantalon', 0, 1, 0, 0, 0, 0, 0, 1),
(13, 17, 'falda', 0, 1, 0, 0, 0, 0, 0, 1),
(14, 17, 'vestidos', 0, 1, 0, 0, 0, 0, 0, 1),
(15, 13, 'pera', 5, 1, 0, 26, 5, -21, 25, 1),
(16, 15, 'pescadito', 5, 1, 0, 0, 0, 0, 0, 1),
(17, 15, 'remolacha', 0, 1, 0, 0, 0, 0, 0, 1),
(18, 15, 'algunito', 0, 1, 0, 0, 0, 0, 0, 1),
(19, 28, 'jhgfjhgfjhgfjhg', 40, 1, 0, 20, 50, 30, 2000, 1),
(20, 20, 'kjkjjkjjkkj', 0, 1, 0, 0, 0, 0, 0, 1);

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
-- Estructura de tabla para la tabla `tcip`
--

CREATE TABLE `tcip` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `tcip_op_od` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tcip`
--

INSERT INTO `tcip` (`id`, `id_empresa`, `tcip_op_od`, `nombre`) VALUES
(1, 4, 1, 'reverva'),
(2, 5, 1, 'reverva'),
(3, 6, 1, 'reverva'),
(4, 7, 1, 'reverva'),
(5, 8, 1, 'reverva'),
(6, 9, 1, 'reverva'),
(7, 10, 1, 'reverva'),
(8, 11, 1, 'reverva'),
(9, 12, 1, 'reverva'),
(10, 13, 1, 'reverva'),
(11, 14, 1, 'assdasd'),
(12, 15, 1, 'assdasd'),
(13, 16, 1, 'assdasd'),
(14, 17, 1, 'assdasd'),
(15, 18, 1, 'assdasd'),
(16, 19, 1, 'assdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcip_op`
--

CREATE TABLE `tcip_op` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tcip_op`
--

INSERT INTO `tcip_op` (`id`, `nombre`) VALUES
(1, 'Reserva indígena'),
(2, 'Tierra de uso comunal'),
(3, 'Resguardo'),
(4, 'No aplica');

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
(92, 15, 17, '', 'no'),
(93, 28, 12, '', 'no'),
(94, 28, 13, '', 'si'),
(95, 28, 14, '', 'no'),
(96, 28, 15, '', 'no'),
(97, 28, 16, '', 'no'),
(98, 28, 17, '', 'no'),
(99, 20, 12, '', 'no'),
(100, 20, 13, '', 'no'),
(101, 20, 14, '', 'no'),
(102, 20, 15, '', 'no'),
(103, 20, 16, '', 'no'),
(104, 20, 17, '', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_contrato`
--

CREATE TABLE `tipo_contrato` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `directo` int(11) NOT NULL,
  `indirecto` int(11) NOT NULL,
  `temporal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_entidad`
--

CREATE TABLE `tipo_entidad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipo_entidad`
--

INSERT INTO `tipo_entidad` (`id`, `nombre`) VALUES
(1, 'Privada'),
(2, 'Pública'),
(3, 'ONG'),
(4, 'Otra');

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
-- Estructura de tabla para la tabla `tipo_personeria`
--

CREATE TABLE `tipo_personeria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipo_personeria`
--

INSERT INTO `tipo_personeria` (`id`, `nombre`) VALUES
(1, 'SAS'),
(2, 'CORPORACIÓN'),
(3, 'ASOCIACIÓN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_tenencia`
--

CREATE TABLE `tipo_tenencia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipo_tenencia`
--

INSERT INTO `tipo_tenencia` (`id`, `nombre`) VALUES
(1, 'Propietario con registro'),
(2, 'Arrendatario'),
(3, 'Posesión tradicional y/o ancestral de tierras y territorios de los pueblos indígenas'),
(4, 'Estatal'),
(5, 'Concesión'),
(6, 'Autorización del propietario o administrador del area'),
(7, 'Otra, Cual?');

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
(36, 13, 3, '6'),
(37, 19, 1, ''),
(38, 19, 2, ''),
(39, 19, 3, ''),
(40, 20, 1, ''),
(41, 20, 2, ''),
(42, 20, 3, ''),
(43, 21, 1, ''),
(44, 21, 2, ''),
(45, 21, 3, ''),
(46, 22, 1, ''),
(47, 22, 2, ''),
(48, 22, 3, ''),
(49, 23, 1, ''),
(50, 23, 2, ''),
(51, 23, 3, ''),
(52, 24, 1, ''),
(53, 24, 2, ''),
(54, 24, 3, ''),
(55, 25, 1, ''),
(56, 25, 2, ''),
(57, 25, 3, ''),
(58, 26, 1, ''),
(59, 26, 2, ''),
(60, 26, 3, ''),
(61, 27, 1, ''),
(62, 27, 2, ''),
(63, 27, 3, ''),
(64, 28, 1, ''),
(65, 28, 2, ''),
(66, 28, 3, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_empleados`
--

CREATE TABLE `total_empleados` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `total_rotulo_id` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_rotulo`
--

CREATE TABLE `total_rotulo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `total_rotulo`
--

INSERT INTO `total_rotulo` (`id`, `nombre`) VALUES
(1, 'Total de empleados'),
(2, 'Temporada alta'),
(3, 'Temporada baja'),
(4, 'Condicion de vulnerabilidad'),
(5, 'Socios / colaboradores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_ventas`
--

CREATE TABLE `total_ventas` (
  `id` int(11) NOT NULL,
  `info_com_id` int(11) NOT NULL,
  `costo_pro_insumos_totales` double NOT NULL,
  `costo_pro_mano_obra` double NOT NULL,
  `total_ventas_realizadas_ant` double NOT NULL,
  `fecha` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `total_ventas`
--

INSERT INTO `total_ventas` (`id`, `info_com_id`, `costo_pro_insumos_totales`, `costo_pro_mano_obra`, `total_ventas_realizadas_ant`, `fecha`) VALUES
(5, 11, 547, 0, 0, 2019),
(6, 16, 5446, 0, 0, 0000),
(7, 17, 0, 0, 0, 0000),
(8, 15, 0, 0, 0, 0000),
(9, 28, 2000, 0, 0, 2018),
(10, 20, 0, 0, 0, 0000);

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
-- Estructura de tabla para la tabla `verificador`
--

CREATE TABLE `verificador` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_bin NOT NULL,
  `entidad` varchar(80) COLLATE utf8_bin NOT NULL,
  `area` varchar(80) COLLATE utf8_bin NOT NULL,
  `cargo` varchar(80) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='la persona que hizo el trabajo de campo ';

--
-- Volcado de datos para la tabla `verificador`
--

INSERT INTO `verificador` (`id`, `empresa_id`, `nombre`, `entidad`, `area`, `cargo`) VALUES
(1, 27, 'Lesty', 'codechoco', 'principal', 'verifacdor'),
(2, 28, 'juan camilo perea', 'codechoco', 'financiera', 'verificador'),
(3, 4, 'kike', 'ninguna', 'administrativa', 'genrente'),
(4, 5, 'kike', 'ninguna', 'administrativa', 'genrente'),
(5, 6, 'kike', 'ninguna', 'administrativa', 'genrente'),
(6, 7, 'kike', 'ninguna', 'administrativa', 'genrente'),
(7, 8, 'kike', 'ninguna', 'administrativa', 'genrente'),
(8, 9, 'kike', 'ninguna', 'administrativa', 'genrente'),
(9, 10, 'kike', 'ninguna', 'administrativa', 'genrente'),
(10, 11, 'kike', 'ninguna', 'administrativa', 'genrente'),
(11, 13, 'kike', 'ninguna', 'administrativa', 'genrente'),
(12, 16, 'kike', 'ninguna', 'administrativa', 'genrente'),
(13, 19, 'kike', 'ninguna', 'administrativa', 'genrente');

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
(10, 1, 24, '2018-05-28 07:39:37', ''),
(11, 8, 24, '2018-05-29 20:02:37', ''),
(12, 20, 11, '2018-06-08 02:21:14', ''),
(13, 22, 11, '2018-06-08 02:21:46', ''),
(14, 23, 11, '2018-06-08 03:25:21', ''),
(15, 24, 11, '2018-06-08 04:19:12', ''),
(16, 25, 11, '2018-06-08 04:32:36', ''),
(18, 27, 11, '2018-06-09 17:32:02', ''),
(19, 28, 11, '2018-06-09 17:56:09', ''),
(20, 9, 11, '2018-11-22 11:33:28', ''),
(21, 10, 11, '2018-11-26 10:47:20', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `veri_empresa`
--

CREATE TABLE `veri_empresa` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `si_no_id` int(11) NOT NULL,
  `anio` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `veri_empresa`
--

INSERT INTO `veri_empresa` (`id`, `id_empresa`, `si_no_id`, `anio`) VALUES
(10, 10, 1, 1995),
(11, 10, 1, 1995),
(12, 13, 2, 0000),
(13, 13, 2, 0000),
(14, 14, 1, 1996),
(15, 14, 1, 1996),
(16, 15, 1, 1996),
(17, 15, 1, 1996),
(18, 15, 1, 0000),
(19, 16, 1, 1996),
(20, 16, 1, 1996),
(21, 16, 1, 0000),
(22, 17, 1, 1996),
(23, 17, 1, 1996),
(24, 17, 1, 0000),
(25, 18, 1, 1996),
(26, 18, 1, 1996),
(27, 18, 1, 0000),
(28, 19, 1, 1996),
(29, 19, 1, 1996),
(30, 19, 1, 0000);

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
  ADD KEY `opciones_id` (`pregunta_id`),
  ADD KEY `empresa_id` (`info_com_id`);

--
-- Indices de la tabla `actividad_empresa`
--
ALTER TABLE `actividad_empresa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `actividad_item_id` (`actividad_item_id`),
  ADD KEY `municipio_id` (`municipio_id`),
  ADD KEY `tipo_tenencia_id` (`tipo_tenencia_id`),
  ADD KEY `pot_si_no_id` (`pot_si_no_id`),
  ADD KEY `si_no_actividad_id` (`si_no_actividad_id`);

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
-- Indices de la tabla `apoyo`
--
ALTER TABLE `apoyo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`info_com_id`),
  ADD KEY `orientacion_id` (`tipo_entidad_id`);

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
-- Indices de la tabla `aspecto`
--
ALTER TABLE `aspecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bienes_servicios`
--
ALTER TABLE `bienes_servicios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `bienes_servicios_adicionales`
--
ALTER TABLE `bienes_servicios_adicionales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_com_id` (`info_com_id`),
  ADD KEY `ingresos_superior` (`ingresos_superior`);

--
-- Indices de la tabla `bien_serv_op`
--
ALTER TABLE `bien_serv_op`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cabildo`
--
ALTER TABLE `cabildo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `si_no_id` (`si_no_id`);

--
-- Indices de la tabla `cadena_valor`
--
ALTER TABLE `cadena_valor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_com_id` (`info_com_id`),
  ADD KEY `pregunta_id` (`pregunta_id`),
  ADD KEY `respuesta_id` (`respuesta_id`);

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
  ADD KEY `empresa_id` (`info_com_id`),
  ADD KEY `opciones_id` (`pregunta_id`),
  ADD KEY `etapa_id` (`etapa_id`);

--
-- Indices de la tabla `condicion_vulnerabilidad_es`
--
ALTER TABLE `condicion_vulnerabilidad_es`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_com_id` (`info_com_id`),
  ADD KEY `sexo_id` (`sexo_id`),
  ADD KEY `total_rotulo_id` (`total_rotulo_id`);

--
-- Indices de la tabla `consejo_comunitario`
--
ALTER TABLE `consejo_comunitario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `si_no_id` (`si_no_id`);

--
-- Indices de la tabla `conservacion`
--
ALTER TABLE `conservacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`info_com_id`),
  ADD KEY `opciones_id` (`pregunta_id`),
  ADD KEY `info_com_id` (`info_com_id`);

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_img_page` (`id_img_page`),
  ADD KEY `alias` (`alias_id`);

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
-- Indices de la tabla `descripcion_etaria`
--
ALTER TABLE `descripcion_etaria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_com_id` (`info_com_id`),
  ADD KEY `sexo_id` (`sexo_id`);

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
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_persona_id` (`tipo_persona_id`),
  ADD KEY `tipo_identificacion_id` (`tipo_identificacion_id`),
  ADD KEY `persona_id` (`persona_id`),
  ADD KEY `tamaño_empresa_id` (`tamaño_empresa_id`),
  ADD KEY `municipio_id` (`municipio_id`),
  ADD KEY `fami_empresa_si_no` (`fami_empresa_si_no`),
  ADD KEY `subsector_id` (`subsector_id`),
  ADD KEY `etapa_empresa_id` (`etapa_empresa_id`),
  ADD KEY `empresario_id` (`empresario_id`),
  ADD KEY `id_personeria` (`id_personeria`),
  ADD KEY `bien_serv_op` (`bien_serv_op`);

--
-- Indices de la tabla `empresario`
--
ALTER TABLE `empresario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carta_si_no` (`carta_si_no`);

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
-- Indices de la tabla `grupo_etnico`
--
ALTER TABLE `grupo_etnico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `grupo_op_id` (`grupo_op_id`);

--
-- Indices de la tabla `grupo_etnico_op`
--
ALTER TABLE `grupo_etnico_op`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hoja_verificacion_1`
--
ALTER TABLE `hoja_verificacion_1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `pregunta_id` (`pregunta_id`),
  ADD KEY `respuesta_id` (`respuesta_id`),
  ADD KEY `cumplimiento_id` (`cumplimiento_id`);

--
-- Indices de la tabla `hoja_verificacion_2`
--
ALTER TABLE `hoja_verificacion_2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `pregunta_id` (`pregunta_id`),
  ADD KEY `calificador_id` (`calificador_id`);

--
-- Indices de la tabla `img_empresa`
--
ALTER TABLE `img_empresa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `img_page`
--
ALTER TABLE `img_page`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `impacto_practicas`
--
ALTER TABLE `impacto_practicas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_com_id` (`info_com_id`),
  ADD KEY `pregunta_id` (`pregunta_id`),
  ADD KEY `respuesta_id` (`respuesta_id`);

--
-- Indices de la tabla `informacion_complementaria`
--
ALTER TABLE `informacion_complementaria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `involucra`
--
ALTER TABLE `involucra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `opciones_id` (`opciones_id`);

--
-- Indices de la tabla `junta_comunal`
--
ALTER TABLE `junta_comunal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `si_no_id` (`si_no_id`);

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
-- Indices de la tabla `medio`
--
ALTER TABLE `medio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departamento_id` (`departamento_id`);

--
-- Indices de la tabla `negocio_comunidad`
--
ALTER TABLE `negocio_comunidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_com_id` (`info_com_id`),
  ADD KEY `sexo_id` (`sexo_id`);

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
  ADD KEY `empresa_id` (`info_com_id`),
  ADD KEY `nivel_id` (`sexo_id`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_img_page` (`id_img_page`);

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
-- Indices de la tabla `otro_condicion_vulneravibilidad`
--
ALTER TABLE `otro_condicion_vulneravibilidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_com_id` (`info_com_id`),
  ADD KEY `sexo_id` (`sexo_id`),
  ADD KEY `otro_rotulo_id` (`otro_rotulo_id`);

--
-- Indices de la tabla `otro_involucra`
--
ALTER TABLE `otro_involucra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `otro_negocio_comunidad`
--
ALTER TABLE `otro_negocio_comunidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_com_id` (`info_com_id`),
  ADD KEY `sexo_id` (`sexo_id`);

--
-- Indices de la tabla `otro_nivel_educativo`
--
ALTER TABLE `otro_nivel_educativo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_com_id` (`info_com_id`),
  ADD KEY `sexo_id` (`sexo_id`);

--
-- Indices de la tabla `otro_programa`
--
ALTER TABLE `otro_programa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`info_com_id`),
  ADD KEY `recurso_id` (`recurso_id`);

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
-- Indices de la tabla `pregunta_indicativa`
--
ALTER TABLE `pregunta_indicativa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aspecto_id` (`aspecto_id`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`info_com_id`),
  ADD KEY `opciones_id` (`pregunta_id`),
  ADD KEY `recurso_id` (`recurso_id`);

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
-- Indices de la tabla `sost_economica`
--
ALTER TABLE `sost_economica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `si_no_id` (`ingreso_superior`),
  ADD KEY `unidad_medida_id` (`unidad_medida_id`),
  ADD KEY `empresa_id` (`info_com_id`);

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
-- Indices de la tabla `tcip`
--
ALTER TABLE `tcip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `tcip_op_od` (`tcip_op_od`);

--
-- Indices de la tabla `tcip_op`
--
ALTER TABLE `tcip_op`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tenencia_tierra`
--
ALTER TABLE `tenencia_tierra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `opciones_id` (`opciones_id`);

--
-- Indices de la tabla `tipo_contrato`
--
ALTER TABLE `tipo_contrato`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_com_id` (`info_com_id`),
  ADD KEY `sexo_id` (`sexo_id`);

--
-- Indices de la tabla `tipo_entidad`
--
ALTER TABLE `tipo_entidad`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `tipo_personeria`
--
ALTER TABLE `tipo_personeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_tenencia`
--
ALTER TABLE `tipo_tenencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_vinculacion`
--
ALTER TABLE `tipo_vinculacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `vinculacion_id` (`vinculacion_id`);

--
-- Indices de la tabla `total_empleados`
--
ALTER TABLE `total_empleados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_com_id` (`info_com_id`),
  ADD KEY `sexo_id` (`sexo_id`),
  ADD KEY `total_rotulo_id` (`total_rotulo_id`);

--
-- Indices de la tabla `total_rotulo`
--
ALTER TABLE `total_rotulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `total_ventas`
--
ALTER TABLE `total_ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`info_com_id`);

--
-- Indices de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `verificador`
--
ALTER TABLE `verificador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Indices de la tabla `verificadorxempresa`
--
ALTER TABLE `verificadorxempresa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `persona_id` (`persona_id`);

--
-- Indices de la tabla `veri_empresa`
--
ALTER TABLE `veri_empresa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `si_no_id` (`si_no_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `actividad_empresa`
--
ALTER TABLE `actividad_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT de la tabla `apoyo`
--
ALTER TABLE `apoyo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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
-- AUTO_INCREMENT de la tabla `aspecto`
--
ALTER TABLE `aspecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `bienes_servicios`
--
ALTER TABLE `bienes_servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT de la tabla `bienes_servicios_adicionales`
--
ALTER TABLE `bienes_servicios_adicionales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bien_serv_op`
--
ALTER TABLE `bien_serv_op`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cabildo`
--
ALTER TABLE `cabildo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `cadena_valor`
--
ALTER TABLE `cadena_valor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `condicion_vulnerabilidad_es`
--
ALTER TABLE `condicion_vulnerabilidad_es`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `consejo_comunitario`
--
ALTER TABLE `consejo_comunitario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `conservacion`
--
ALTER TABLE `conservacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `cumple_nocumple`
--
ALTER TABLE `cumple_nocumple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `demografia`
--
ALTER TABLE `demografia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `descripcion_etaria`
--
ALTER TABLE `descripcion_etaria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `desc_demografia`
--
ALTER TABLE `desc_demografia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ecosistema`
--
ALTER TABLE `ecosistema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `edad`
--
ALTER TABLE `edad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `empresario`
--
ALTER TABLE `empresario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `etapa`
--
ALTER TABLE `etapa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `etapa_empresa`
--
ALTER TABLE `etapa_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `grupo_etnico`
--
ALTER TABLE `grupo_etnico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `grupo_etnico_op`
--
ALTER TABLE `grupo_etnico_op`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `hoja_verificacion_1`
--
ALTER TABLE `hoja_verificacion_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `hoja_verificacion_2`
--
ALTER TABLE `hoja_verificacion_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=328;

--
-- AUTO_INCREMENT de la tabla `img_empresa`
--
ALTER TABLE `img_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `img_page`
--
ALTER TABLE `img_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `informacion_complementaria`
--
ALTER TABLE `informacion_complementaria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `involucra`
--
ALTER TABLE `involucra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `junta_comunal`
--
ALTER TABLE `junta_comunal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `licencia`
--
ALTER TABLE `licencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `medio`
--
ALTER TABLE `medio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `negocio_comunidad`
--
ALTER TABLE `negocio_comunidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `nivel_educativo`
--
ALTER TABLE `nivel_educativo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `otros_certificacion`
--
ALTER TABLE `otros_certificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `otros_conservacion`
--
ALTER TABLE `otros_conservacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `otros_ecosistema`
--
ALTER TABLE `otros_ecosistema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `otros_legislacion`
--
ALTER TABLE `otros_legislacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `otro_actividades`
--
ALTER TABLE `otro_actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `otro_condicion_vulneravibilidad`
--
ALTER TABLE `otro_condicion_vulneravibilidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `otro_involucra`
--
ALTER TABLE `otro_involucra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `otro_negocio_comunidad`
--
ALTER TABLE `otro_negocio_comunidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `otro_nivel_educativo`
--
ALTER TABLE `otro_nivel_educativo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `otro_programa`
--
ALTER TABLE `otro_programa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `otro_tenencia_tierra`
--
ALTER TABLE `otro_tenencia_tierra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `plan_manejo`
--
ALTER TABLE `plan_manejo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `plan_mejora`
--
ALTER TABLE `plan_mejora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT de la tabla `pregunta_indicativa`
--
ALTER TABLE `pregunta_indicativa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `recurso`
--
ALTER TABLE `recurso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT de la tabla `sost_economica`
--
ALTER TABLE `sost_economica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
-- AUTO_INCREMENT de la tabla `tcip`
--
ALTER TABLE `tcip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tcip_op`
--
ALTER TABLE `tcip_op`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tenencia_tierra`
--
ALTER TABLE `tenencia_tierra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de la tabla `tipo_contrato`
--
ALTER TABLE `tipo_contrato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_entidad`
--
ALTER TABLE `tipo_entidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT de la tabla `tipo_personeria`
--
ALTER TABLE `tipo_personeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_tenencia`
--
ALTER TABLE `tipo_tenencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tipo_vinculacion`
--
ALTER TABLE `tipo_vinculacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `total_empleados`
--
ALTER TABLE `total_empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `total_rotulo`
--
ALTER TABLE `total_rotulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `total_ventas`
--
ALTER TABLE `total_ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `verificador`
--
ALTER TABLE `verificador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `verificadorxempresa`
--
ALTER TABLE `verificadorxempresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `veri_empresa`
--
ALTER TABLE `veri_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  ADD CONSTRAINT `actividades_ibfk_1` FOREIGN KEY (`info_com_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `actividades_ibfk_2` FOREIGN KEY (`pregunta_id`) REFERENCES `opciones` (`id`),
  ADD CONSTRAINT `actividades_ibfk_3` FOREIGN KEY (`recurso_id`) REFERENCES `recurso` (`id`);

--
-- Filtros para la tabla `actividad_empresa`
--
ALTER TABLE `actividad_empresa`
  ADD CONSTRAINT `actividad_empresa_ibfk_2` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `apoyo`
--
ALTER TABLE `apoyo`
  ADD CONSTRAINT `apoyo_ibfk_1` FOREIGN KEY (`info_com_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `apoyo_ibfk_2` FOREIGN KEY (`tipo_entidad_id`) REFERENCES `tipo_entidad` (`id`);

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
-- Filtros para la tabla `cabildo`
--
ALTER TABLE `cabildo`
  ADD CONSTRAINT `fk_empresa_cabildo` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `certificacion`
--
ALTER TABLE `certificacion`
  ADD CONSTRAINT `certificacion_empresa_id_restrink1` FOREIGN KEY (`info_com_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `certificacion_etapa_id_restrink1` FOREIGN KEY (`etapa_id`) REFERENCES `etapa` (`id`),
  ADD CONSTRAINT `certificacion_opciones_id_restrink1` FOREIGN KEY (`pregunta_id`) REFERENCES `opciones` (`id`);

--
-- Filtros para la tabla `consejo_comunitario`
--
ALTER TABLE `consejo_comunitario`
  ADD CONSTRAINT `fk_empresa_consejo` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `conservacion`
--
ALTER TABLE `conservacion`
  ADD CONSTRAINT `conservacion_ibfk_1` FOREIGN KEY (`info_com_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `conservacion_ibfk_2` FOREIGN KEY (`pregunta_id`) REFERENCES `opciones` (`id`);

--
-- Filtros para la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD CONSTRAINT `fk_alias` FOREIGN KEY (`alias_id`) REFERENCES `alias` (`id`),
  ADD CONSTRAINT `fk_img` FOREIGN KEY (`id_img_page`) REFERENCES `img_page` (`id`);

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
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`),
  ADD CONSTRAINT `empresa_ibfk_10` FOREIGN KEY (`id_personeria`) REFERENCES `tipo_personeria` (`id`),
  ADD CONSTRAINT `empresa_ibfk_11` FOREIGN KEY (`bien_serv_op`) REFERENCES `bien_serv_op` (`id`),
  ADD CONSTRAINT `empresa_ibfk_2` FOREIGN KEY (`tipo_identificacion_id`) REFERENCES `tipo_identificacion` (`id`),
  ADD CONSTRAINT `empresa_ibfk_3` FOREIGN KEY (`tipo_persona_id`) REFERENCES `tipo_persona` (`id`),
  ADD CONSTRAINT `empresa_ibfk_6` FOREIGN KEY (`municipio_id`) REFERENCES `municipio` (`id`),
  ADD CONSTRAINT `empresa_ibfk_7` FOREIGN KEY (`fami_empresa_si_no`) REFERENCES `si_no` (`id`),
  ADD CONSTRAINT `empresa_ibfk_8` FOREIGN KEY (`empresario_id`) REFERENCES `empresario` (`id`),
  ADD CONSTRAINT `empresa_ibfk_9` FOREIGN KEY (`tamaño_empresa_id`) REFERENCES `tamaño_empresa` (`id`);

--
-- Filtros para la tabla `grupo_etnico`
--
ALTER TABLE `grupo_etnico`
  ADD CONSTRAINT `fk_empresa_grupo_etnico` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `fk_grupo_op` FOREIGN KEY (`grupo_op_id`) REFERENCES `grupo_etnico_op` (`id`);

--
-- Filtros para la tabla `img_empresa`
--
ALTER TABLE `img_empresa`
  ADD CONSTRAINT `img_emprea1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `involucra`
--
ALTER TABLE `involucra`
  ADD CONSTRAINT `involucra_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `involucra_ibfk_2` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`);

--
-- Filtros para la tabla `junta_comunal`
--
ALTER TABLE `junta_comunal`
  ADD CONSTRAINT `fk_emprea_junta` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`);

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
  ADD CONSTRAINT `nivel_educativo_ibfk_1` FOREIGN KEY (`info_com_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `nivel_educativo_ibfk_2` FOREIGN KEY (`sexo_id`) REFERENCES `nivel` (`id`);

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
  ADD CONSTRAINT `otro_programa_restrink1` FOREIGN KEY (`info_com_id`) REFERENCES `empresa` (`id`);

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
-- Filtros para la tabla `pregunta_indicativa`
--
ALTER TABLE `pregunta_indicativa`
  ADD CONSTRAINT `fk_aspecto` FOREIGN KEY (`aspecto_id`) REFERENCES `aspecto` (`id`);

--
-- Filtros para la tabla `programa`
--
ALTER TABLE `programa`
  ADD CONSTRAINT `programa_ibfk_1` FOREIGN KEY (`info_com_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `programa_ibfk_2` FOREIGN KEY (`pregunta_id`) REFERENCES `opciones` (`id`);

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
  ADD CONSTRAINT `sost_eco_restrink1` FOREIGN KEY (`info_com_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `sost_eco_restrink2` FOREIGN KEY (`unidad_medida_id`) REFERENCES `unidad_medida` (`id`),
  ADD CONSTRAINT `sost_eco_restrink3` FOREIGN KEY (`ingreso_superior`) REFERENCES `si_no` (`id`);

--
-- Filtros para la tabla `tcip`
--
ALTER TABLE `tcip`
  ADD CONSTRAINT `fk_empresa_tcip` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `fk_tcip_op_tcip` FOREIGN KEY (`tcip_op_od`) REFERENCES `tcip_op` (`id`);

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
  ADD CONSTRAINT `total_ventas_restrink` FOREIGN KEY (`info_com_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `verificador`
--
ALTER TABLE `verificador`
  ADD CONSTRAINT `vrificador_relacion1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `verificadorxempresa`
--
ALTER TABLE `verificadorxempresa`
  ADD CONSTRAINT `verificador_restrink1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `verificador_restrink2` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`);

--
-- Filtros para la tabla `veri_empresa`
--
ALTER TABLE `veri_empresa`
  ADD CONSTRAINT `fk-empresa-veri` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `fk_si_no_veri` FOREIGN KEY (`si_no_id`) REFERENCES `si_no` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
