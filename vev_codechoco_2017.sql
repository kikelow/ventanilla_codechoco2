-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2018 a las 02:25:09
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
  `descripcion` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `empresa_id`, `opciones_id`, `recurso_id`, `descripcion`) VALUES
(1, 12, 57, 2, 'fffff'),
(2, 12, 59, 1, 'hhhhh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_empresa`
--

CREATE TABLE `actividad_empresa` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `actividad_item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `actividad_empresa`
--

INSERT INTO `actividad_empresa` (`id`, `empresa_id`, `actividad_item_id`) VALUES
(1, 1, 1),
(2, 1, 3),
(11, 8, 2),
(12, 8, 4);

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
(2, 'Transformación de materia prima'),
(3, 'Transformación de materia de proveedores'),
(4, 'Comercialización');

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
(1, 1, 'madera', ''),
(2, 1, 'maderita', ''),
(3, 1, 'madera la tooo', ''),
(4, 1, '', ''),
(5, 1, '', ''),
(6, 1, '', 'madera la too'),
(31, 8, 'alguno', ''),
(32, 8, '', ''),
(33, 8, '', ''),
(34, 8, '', ''),
(35, 8, '', ''),
(36, 8, '', 'alguno');

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
  `observacion` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `certificacion`
--

INSERT INTO `certificacion` (`id`, `empresa_id`, `opciones_id`, `etapa_id`, `vigencia`, `observacion`) VALUES
(1, 12, 66, 1, 'uno', 'uno'),
(2, 12, 68, 2, 'tres', 'tres'),
(3, 12, 70, 1, '', ''),
(4, 12, 72, 3, 'siete', 'siete');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conservacion`
--

CREATE TABLE `conservacion` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL,
  `area` varchar(15) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `conservacion`
--

INSERT INTO `conservacion` (`id`, `empresa_id`, `opciones_id`, `area`, `descripcion`) VALUES
(1, 13, 29, 'uno', 'uno'),
(2, 13, 32, 'tin', 'tin'),
(3, 13, 35, 'tan', 'tan');

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
(1, 12, 20000, 50, 2015),
(2, 1, 0, 0, 0),
(3, 12, 0, 0, 0),
(4, 1, 0, 0, 0);

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
(1, 12, 32, 56, 2015),
(2, 1, 0, 0, 0),
(3, 12, 0, 0, 0),
(4, 1, 0, 0, 0);

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
(1, 1, 1, 1, 1),
(2, 1, 2, 1, 2),
(3, 1, 3, 1, 3),
(4, 1, 4, 1, 4),
(5, 1, 5, 1, 5),
(6, 1, 6, 2, 0),
(7, 1, 7, 2, 0),
(36, 8, 1, 2, 0),
(37, 8, 2, 2, 0),
(38, 8, 3, 2, 0),
(39, 8, 4, 2, 0),
(40, 8, 5, 2, 0),
(41, 8, 6, 2, 0),
(42, 8, 7, 2, 0);

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
  `area` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `ecosistema`
--

INSERT INTO `ecosistema` (`id`, `empresa_id`, `opciones_id`, `area`) VALUES
(1, 11, 42, 'uno yo'),
(2, 11, 44, 'tres otro'),
(3, 11, 46, 'aja');

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
(2, 1, 2, '10'),
(3, 1, 3, '15'),
(16, 8, 1, ''),
(17, 8, 2, ''),
(18, 8, 3, '');

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
(2, 1, 1, 2, 10),
(3, 1, 2, 1, 10),
(4, 1, 2, 2, 5),
(5, 1, 3, 1, 10),
(6, 1, 3, 2, 20),
(31, 8, 1, 1, 0),
(32, 8, 1, 2, 0),
(33, 8, 2, 1, 0),
(34, 8, 2, 2, 0),
(35, 8, 3, 1, 0),
(36, 8, 3, 2, 0);

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
  `impacto_amb_si_no` int(11) NOT NULL,
  `desc_impacto_amb` text COLLATE utf8_bin NOT NULL,
  `impacto_soc_si_no` int(11) NOT NULL,
  `desc_impacto_soc` text COLLATE utf8_bin NOT NULL,
  `num_socios` int(11) NOT NULL,
  `asociacion_si_no` int(11) NOT NULL COMMENT 'Asociacion',
  `subsector_id` int(11) NOT NULL,
  `etapa_empresa_id` int(11) NOT NULL,
  `const_legalmente_sino` int(11) NOT NULL,
  `año_funcionamiento` int(11) NOT NULL,
  `personeria_juridi_sino` int(11) NOT NULL,
  `tipo_personeria` varchar(100) COLLATE utf8_bin NOT NULL,
  `opera_actualmente_sino` int(11) NOT NULL,
  `año_func_desp_reg_camara` int(11) NOT NULL,
  `informacion_as` varchar(2) COLLATE utf8_bin NOT NULL,
  `verificacion1` varchar(2) COLLATE utf8_bin NOT NULL,
  `verificacion2` varchar(2) COLLATE utf8_bin NOT NULL,
  `plan_mejora` varchar(2) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `tipo_persona_id`, `tipo_identificacion_id`, `identificacion`, `razon_social`, `persona_id`, `municipio_id`, `vereda`, `direccion`, `aut_ambiental`, `coodenadas_n`, `coordenadas_w`, `altitud`, `area`, `si_no_pot_id`, `fami_empresa_si_no`, `tamaño_empresa_id`, `fecha_registro`, `descripcion`, `impacto_amb_si_no`, `desc_impacto_amb`, `impacto_soc_si_no`, `desc_impacto_soc`, `num_socios`, `asociacion_si_no`, `subsector_id`, `etapa_empresa_id`, `const_legalmente_sino`, `año_funcionamiento`, `personeria_juridi_sino`, `tipo_personeria`, `opera_actualmente_sino`, `año_func_desp_reg_camara`, `informacion_as`, `verificacion1`, `verificacion2`, `plan_mejora`) VALUES
(1, 1, 1, '123', 'prueba1', 1, 1, 'tutunendo', 'no se', 'Codechocó', '56', '32', '45', '12', 2, 1, 2, '2018-02-25 00:34:50', 'prueba1', 1, 'prueba1', 1, 'prueba1', 23, 2, 1, 3, 1, 2, 1, 'SAS', 1, 3, 'no', 'no', 'no', 'no'),
(8, 1, 1, '1232', 'prueba2', 8, 5, 'no se', 'no se', 'Codechocó', '', '', '', '', 1, 1, 2, '2018-02-25 00:53:52', '', 1, '', 1, '', 0, 1, 6, 1, 2, 0, 2, '', 2, 0, 'no', 'no', 'no', 'no'),
(11, 1, 1, '1232', 'no hacer prueba con este', 11, 5, 'no se', 'no se', 'Codechocó', '', '', '', '', 1, 1, 2, '2018-02-25 00:54:29', '', 1, '', 1, '', 0, 1, 6, 1, 2, 0, 2, '', 2, 0, 'no', 'no', 'no', 'no'),
(13, 1, 2, '', 'no hacer prueba con este', 13, 1, '', '', 'Codechocó', '', '', '', '', 2, 1, 2, '2018-02-25 01:01:33', '', 1, '', 1, '', 0, 1, 5, 1, 2, 0, 2, '', 2, 0, 'no', 'no', 'no', 'no');

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
(6, 11, 'uno', 'xxx', 1, '2013'),
(7, 11, '', '', 1, ''),
(8, 11, 'tres', 'yyy', 3, '2569'),
(9, 11, '', '', 1, ''),
(10, 11, '', '', 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `involucra`
--

CREATE TABLE `involucra` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `involucra`
--

INSERT INTO `involucra` (`id`, `empresa_id`, `opciones_id`) VALUES
(3, 11, 53),
(4, 11, 55);

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
(13, 13, 27, 2, 1, '10', 'mnl,');

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
(5, 1, 5, 10),
(26, 8, 1, 0),
(27, 8, 2, 0),
(28, 8, 3, 0),
(29, 8, 4, 0),
(30, 8, 5, 0);

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
(53, 'IV1', 'Como socios'),
(54, 'IV2', 'Como empleados directos'),
(55, 'IV3', 'Como empleados indirectos'),
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
(89, 'VIABILIDAD_ECONOMICA4', '¿El precio del producto considera costos de transporte y logística, y la mano de obra familiar asociada al desarrollo del bien o servicio?'),
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
(130, 'COMUNICACION_ATRIBUTOS2', '¿La organización involucra actividades de educación y cultura ambiental?');

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
(1, 12, 'ese mismo', 3, '2018', 'si señor'),
(3, 11, 'nbjkh', 2, 'sss', 'efw');

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
(2, 12, 'practica mejor pesca', '20', 'mejor pesca del año');

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
(1, 12, 'Jungla', '500');

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
(2, 12, 'uno ahí', 1, 'bueno');

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
(3, 13, 'ggdsh', 'kjdsfs', 1);

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
(1, 12, 'Como Amigos'),
(2, 12, ''),
(3, 12, '');

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
(1, 12, 'de caza', 'muy bueno');

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
(1, 12, 'Minero', 'mina'),
(2, 12, 'Minero', 'mina');

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
(1, 13, 22, 2, 2, '1', 'a'),
(2, 13, 23, 2, 2, '2', 'b'),
(3, 13, 24, 2, 1, '3', 'c'),
(4, 13, 25, 2, 2, '4', 'd'),
(5, 13, 26, 2, 2, '5', 'e');

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
  `direccion` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `identificacion`, `nombre1`, `nombre2`, `apellido1`, `paellido2`, `correo`, `celular`, `fijo`, `direccion`) VALUES
(1, '456', 'prueba1', '', '', '', 'asda@gmail.com', '889', '46', 'bogota'),
(2, '123', 'yo', '', '', '', 'asda@gmail.com', '', '', ''),
(3, '123', 'yo', '', '', '', 'asda@gmail.com', '', '', ''),
(4, '123', 'yo', '', '', '', 'asda@gmail.com', '', '', ''),
(5, '123', 'yo', '', '', '', 'asda@gmail.com', '', '', ''),
(6, '123', 'yo', '', '', '', 'asda@gmail.com', '', '', ''),
(7, '123', 'yo', '', '', '', 'asda@gmail.com', '', '', ''),
(8, '123', 'yo', '', '', '', 'asda@gmail.com', '', '', ''),
(9, '123', 'yo', '', '', '', 'asda@gmail.com', '', '', ''),
(10, '123', 'yo', '', '', '', 'asda@gmail.com', '', '', ''),
(11, '123', 'yo', '', '', '', 'asda@gmail.com', '', '', ''),
(12, '', '', '', '', '', '', '', '', ''),
(13, '', '', '', '', '', '', '', '', '');

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
  `observacion` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `plan_manejo`
--

INSERT INTO `plan_manejo` (`id`, `empresa_id`, `opciones_id`, `aplica_noaplica_id`, `cumple_nocumple_id`, `vigencia`, `observacion`) VALUES
(1, 13, 49, 1, 1, 'uno', 'uno'),
(2, 13, 51, 2, 2, 'tres', 'ambiental');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`id`, `empresa_id`, `opciones_id`, `descripcion`) VALUES
(1, 13, 57, 'capa'),
(2, 13, 59, 'recre');

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
(1, 1, 18, 2, 2, '10', 'invima'),
(2, 1, 19, 2, 2, '20', 'ica'),
(3, 1, 20, 2, 2, '30', 'turismo'),
(4, 1, 21, 2, 2, '40', 'forestal');

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
  `esp_unidad` varchar(50) COLLATE utf8_bin NOT NULL,
  `costo_produccion` double NOT NULL,
  `precio_v_unitario` double NOT NULL,
  `ganancia_unidad` double NOT NULL,
  `ventas_anual` double NOT NULL,
  `si_no_id` int(11) NOT NULL COMMENT 'ingresos superior al costo? '
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `sost_economica`
--

INSERT INTO `sost_economica` (`id`, `empresa_id`, `bien_servicio`, `vendida_anual`, `unidad_medida_id`, `esp_unidad`, `costo_produccion`, `precio_v_unitario`, `ganancia_unidad`, `ventas_anual`, `si_no_id`) VALUES
(1, 12, 'carro', 8, 1, 'hj', 5, 3, 54, 65, 1),
(2, 12, 'moto', 0, 1, '', 0, 0, 0, 0, 1),
(3, 12, 'algo', 59, 1, '', 54, 23, 23, 23, 2),
(4, 12, 'mas', 0, 1, '', 0, 0, 0, 0, 1),
(5, 12, 'yuca', 0, 1, '', 0, 0, 0, 0, 1);

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
  `descripcion` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tenencia_tierra`
--

INSERT INTO `tenencia_tierra` (`id`, `empresa_id`, `opciones_id`, `descripcion`) VALUES
(2, 1, 12, 'uno'),
(3, 1, 14, 'tres'),
(4, 1, 16, 'cinco');

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
(3, 1, 3, '10'),
(16, 8, 1, ''),
(17, 8, 2, ''),
(18, 8, 3, '');

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
(1, 12, 23, 2015),
(2, 1, 0, 0),
(3, 12, 0, 0),
(4, 1, 0, 0);

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
  `observacion` text COLLATE utf8_bin NOT NULL,
  `verificacion` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `verificacion_1`
--

INSERT INTO `verificacion_1` (`id`, `empresa_id`, `opciones_id`, `si_no_noaplica_id`, `observacion`, `verificacion`) VALUES
(1, 13, 73, 3, '', ''),
(2, 13, 74, 1, '', ''),
(3, 13, 75, 1, '', ''),
(4, 13, 76, 1, '', ''),
(5, 13, 77, 1, '', ''),
(6, 13, 78, 1, '', ''),
(7, 13, 79, 1, '', ''),
(8, 13, 80, 1, '', ''),
(9, 13, 81, 1, '', ''),
(10, 13, 82, 1, '', ''),
(11, 13, 83, 1, '', ''),
(12, 13, 84, 1, '', ''),
(13, 13, 85, 3, '', '');

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
  `verificaicion` text COLLATE utf8_bin NOT NULL,
  `evidencia` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
-- Indices de la tabla `aplica_noaplica`
--
ALTER TABLE `aplica_noaplica`
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
  ADD KEY `impcto_amb_si_no` (`impacto_amb_si_no`),
  ADD KEY `impacto_soc_si_no` (`impacto_soc_si_no`),
  ADD KEY `subsector_id` (`subsector_id`),
  ADD KEY `etapa_empresa_id` (`etapa_empresa_id`),
  ADD KEY `const_legalmente_sino` (`const_legalmente_sino`),
  ADD KEY `opera_actualmente_sino` (`opera_actualmente_sino`),
  ADD KEY `personeria_juridi_sino` (`personeria_juridi_sino`);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `actividad_empresa`
--
ALTER TABLE `actividad_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `actividad_item`
--
ALTER TABLE `actividad_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `aplica_noaplica`
--
ALTER TABLE `aplica_noaplica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `bienes_servicios`
--
ALTER TABLE `bienes_servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `conservacion`
--
ALTER TABLE `conservacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `costo_insumos`
--
ALTER TABLE `costo_insumos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `costo_mano_obra`
--
ALTER TABLE `costo_mano_obra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `edad`
--
ALTER TABLE `edad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `empleado_edad`
--
ALTER TABLE `empleado_edad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `empleado_sexo`
--
ALTER TABLE `empleado_sexo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
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
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `involucra`
--
ALTER TABLE `involucra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `licencia`
--
ALTER TABLE `licencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
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
-- AUTO_INCREMENT de la tabla `opciones`
--
ALTER TABLE `opciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT de la tabla `orientacion`
--
ALTER TABLE `orientacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `otros_certificacion`
--
ALTER TABLE `otros_certificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `otros_conservacion`
--
ALTER TABLE `otros_conservacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `otros_ecosistema`
--
ALTER TABLE `otros_ecosistema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `otros_legislacion`
--
ALTER TABLE `otros_legislacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `otro_actividades`
--
ALTER TABLE `otro_actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `otro_involucra`
--
ALTER TABLE `otro_involucra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `otro_programa`
--
ALTER TABLE `otro_programa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `otro_tenencia_tierra`
--
ALTER TABLE `otro_tenencia_tierra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `plan_manejo`
--
ALTER TABLE `plan_manejo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
-- AUTO_INCREMENT de la tabla `socio_empleado_item`
--
ALTER TABLE `socio_empleado_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `sost_economica`
--
ALTER TABLE `sost_economica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
-- AUTO_INCREMENT de la tabla `tipo_vinculacion`
--
ALTER TABLE `tipo_vinculacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `total_ventas`
--
ALTER TABLE `total_ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `verificacion_1`
--
ALTER TABLE `verificacion_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `verificacion_2`
--
ALTER TABLE `verificacion_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
-- Filtros para la tabla `bienes_servicios`
--
ALTER TABLE `bienes_servicios`
  ADD CONSTRAINT `bienes_servicios_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `conservacion`
--
ALTER TABLE `conservacion`
  ADD CONSTRAINT `conservacion_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `conservacion_ibfk_2` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`);

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
  ADD CONSTRAINT `empresa_ibfk_8` FOREIGN KEY (`impacto_amb_si_no`) REFERENCES `si_no` (`id`),
  ADD CONSTRAINT `empresa_ibfk_9` FOREIGN KEY (`impacto_soc_si_no`) REFERENCES `si_no` (`id`);

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
-- Filtros para la tabla `plan_manejo`
--
ALTER TABLE `plan_manejo`
  ADD CONSTRAINT `plan_manejo_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `plan_manejo_ibfk_2` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`),
  ADD CONSTRAINT `plan_manejo_ibfk_3` FOREIGN KEY (`aplica_noaplica_id`) REFERENCES `aplica_noaplica` (`id`),
  ADD CONSTRAINT `plan_manejo_ibfk_4` FOREIGN KEY (`cumple_nocumple_id`) REFERENCES `cumple_nocumple` (`id`);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
