-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2018 a las 20:55:58
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
(5, 13, 3),
(6, 13, 4);

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
-- Estructura de tabla para la tabla `asociacion`
--

CREATE TABLE `asociacion` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `num_asociados` varchar(10) COLLATE utf8_bin NOT NULL,
  `viabilidad_emp` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(1, 12, 'carro', ''),
(2, 12, 'moto', ''),
(3, 12, 'algo', ''),
(4, 12, 'mas', ''),
(5, 12, 'yuca', ''),
(6, 12, '', 'yuca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificador`
--

CREATE TABLE `calificador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `observacion` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conservacion`
--

CREATE TABLE `conservacion` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL,
  `si_no_id` int(11) NOT NULL,
  `area` varchar(15) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criterio`
--

CREATE TABLE `criterio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(1, 11, 1, 1, 2),
(2, 11, 2, 2, 0),
(3, 11, 3, 1, 3),
(4, 11, 4, 1, 5),
(5, 11, 5, 2, 0),
(6, 11, 6, 1, 10),
(7, 11, 7, 2, 0);

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
(4, 11, 1, '4'),
(5, 11, 2, '23'),
(6, 11, 3, '12');

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
(7, 13, 1, 1, 5),
(8, 13, 1, 2, 5),
(9, 13, 2, 1, 6),
(10, 13, 2, 2, 6),
(11, 13, 3, 1, 7),
(12, 13, 3, 2, 7);

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
  `año_func_desp_reg_camara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `tipo_persona_id`, `tipo_identificacion_id`, `identificacion`, `razon_social`, `persona_id`, `municipio_id`, `vereda`, `direccion`, `aut_ambiental`, `coodenadas_n`, `coordenadas_w`, `altitud`, `area`, `si_no_pot_id`, `fami_empresa_si_no`, `tamaño_empresa_id`, `fecha_registro`, `descripcion`, `impacto_amb_si_no`, `desc_impacto_amb`, `impacto_soc_si_no`, `desc_impacto_soc`, `num_socios`, `asociacion_si_no`, `subsector_id`, `etapa_empresa_id`, `const_legalmente_sino`, `año_funcionamiento`, `personeria_juridi_sino`, `tipo_personeria`, `opera_actualmente_sino`, `año_func_desp_reg_camara`) VALUES
(1, 1, 1, '45645', 'pescado', 1, 1, 'kljhlkj', 'jkljkl', '', '878', '89', '676', '78', 1, 1, 1, '2018-01-26 05:51:18', 'jhgkh', 1, 'ihgiuyiuyt', 1, 'uytuiyfgufyu', 67, 1, 1, 0, 0, 0, 0, '', 0, 0),
(11, 1, 1, '', 'gyarapuri', 11, 1, '', '', '', '', '', '', '', 1, 1, 1, '2018-01-26 06:04:55', '', 1, '', 1, '', 0, 1, 1, 0, 0, 0, 0, '', 0, 0),
(12, 1, 1, '', 'asdfasdfa', 11, 1, '', '', 'Codechocó', '', '', '', '', 2, 2, 1, '2018-01-27 02:26:28', '', 2, '', 2, '', 0, 2, 1, 2, 0, 0, 0, '', 0, 0),
(13, 1, 1, '', 'ggggggg', 11, 1, '', '', 'Codechocó', '', '', '', '', 2, 2, 1, '2018-01-27 04:04:46', '', 2, '', 2, '', 0, 2, 1, 1, 1, 12, 1, '32', 1, 25);

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
-- Estructura de tabla para la tabla `indicador`
--

CREATE TABLE `indicador` (
  `id` int(11) NOT NULL,
  `criterio_id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `nombre` varchar(70) COLLATE utf8_bin NOT NULL,
  `orientacion_id` int(11) NOT NULL,
  `año` varchar(20) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos`
--

CREATE TABLE `insumos` (
  `id` int(11) NOT NULL,
  `sost_economica_id` int(11) NOT NULL,
  `semanal` double NOT NULL,
  `mensual` double NOT NULL,
  `anual` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `involucra`
--

CREATE TABLE `involucra` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `legalizacion`
--

CREATE TABLE `legalizacion` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `opciones_id` int(11) NOT NULL,
  `si_no_id` int(11) NOT NULL,
  `año_funcionamiento` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mano_obra`
--

CREATE TABLE `mano_obra` (
  `id` int(11) NOT NULL,
  `sost_economica_id` int(11) NOT NULL,
  `semana` double NOT NULL,
  `mensual` double NOT NULL,
  `anual` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(4, 4, 'Cartagena de Indias');

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
(1, 11, 1, 23),
(2, 11, 2, 5),
(3, 11, 3, 3),
(4, 11, 4, 5),
(5, 11, 5, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE `opciones` (
  `id` int(11) NOT NULL,
  `codigo` varchar(10) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL
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
(28, 'L2', 'Plan de manejo ambiental'),
(29, 'PC1', 'Sistemas silvopastoriales'),
(30, 'PC2', 'Sistemas silvicultura'),
(31, 'PC3', 'Agroforestería'),
(32, 'PC4', 'Cultivos mixtos'),
(33, 'PC5', 'Cercas vivas/ barreras rompevientos/ corredores de conectivi'),
(34, 'PC6', 'Bosques para protección de nacimientos de agua, quebradas, r'),
(35, 'PC7', 'Cercas o aislamiento para protección de nacimientos de agua,'),
(36, 'PC8', 'Buen uso de recursos hídricos'),
(37, 'PC9', 'Control Biológico de plagas'),
(38, 'PC10', 'Fertilización orgánica'),
(39, 'PC11', 'Labranza mínima '),
(40, 'PC12', 'Uso de fuentes alternativas de energía'),
(41, 'PC13', 'Uso de practicas y/o tecnologías bajas en carbono'),
(42, 'AC1', 'Bosque andino o niebla'),
(43, 'AC2', 'Bosque húmedo'),
(44, 'AC3', 'Bosque seco'),
(45, 'AC4', 'Páramo'),
(46, 'AC5', 'Marinos'),
(47, 'AC6', 'Sabana'),
(48, 'AC7', 'Manglar'),
(49, 'PM1', 'Protocolo o plan de aprovechamiento para productos silvestres maderables y no maderables'),
(50, 'PM2', 'Estudio de capacidad de carga para ecoturismo'),
(51, 'PM3', 'Plan de manejo ambiental'),
(52, 'PM4', 'Otro documento'),
(53, 'I1', 'Como socios'),
(54, 'I2', 'Como empleados directos'),
(55, 'I3', 'Como empleados indirectos'),
(57, 'A1', 'Capacitación'),
(58, 'A2', 'Asistencia técnica'),
(59, 'A3', 'Recreación'),
(60, 'A4', 'Salud'),
(61, 'PR1', 'Capacitación'),
(62, 'PR2', 'Asistencia técnica'),
(63, 'PR3', 'Recreación'),
(64, 'PR4', 'Proyectos productivos'),
(65, 'PR5', 'Salud');

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
  `nombre` int(50) NOT NULL,
  `etapa_id` int(11) NOT NULL,
  `vigencia` varchar(30) COLLATE utf8_bin NOT NULL,
  `observacion` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otros_legislacion`
--

CREATE TABLE `otros_legislacion` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `aplica_noaplica_id` int(11) NOT NULL,
  `cumple_nocumple_id` int(11) NOT NULL,
  `observacion` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(1, '87687', 'ghfhg', '', '', '', 'gfdgfdsfgsf', '75678657', '65465', 'hlgjkklgj'),
(2, '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', '', ''),
(11, '', '', '', '', '', '', '', '', '');

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
  `observacion` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyeccion_plata`
--

CREATE TABLE `proyeccion_plata` (
  `id` int(11) NOT NULL,
  `sost_economica_id` int(11) NOT NULL,
  `valor` double NOT NULL,
  `año` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `producto` varchar(40) COLLATE utf8_bin NOT NULL,
  `vendida_anual` double NOT NULL,
  `unidad_medida_id` int(11) NOT NULL,
  `costo_produccion` double NOT NULL,
  `ganancia_unidad` double NOT NULL,
  `ventas_anual` double NOT NULL,
  `si_no_id` int(11) NOT NULL COMMENT 'ingresos superior al costo? ',
  `fecha` varchar(30) COLLATE utf8_bin NOT NULL,
  `id_si_no` int(11) NOT NULL COMMENT 'proyeccion de ventas anuales?'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
(1, 'Fami-empresa'),
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
(1, 11, 1, '23'),
(2, 11, 2, '2'),
(3, 11, 3, '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_medida`
--

CREATE TABLE `unidad_medida` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verificacion_1`
--

CREATE TABLE `verificacion_1` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `indicador_id` int(11) NOT NULL,
  `si_no_id` int(11) NOT NULL,
  `aplica_noaplica_id` int(11) NOT NULL,
  `observacion` varchar(100) COLLATE utf8_bin NOT NULL,
  `verificacion` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verificacion_2`
--

CREATE TABLE `verificacion_2` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `indicador_id` int(11) NOT NULL,
  `calificador_id` int(11) NOT NULL,
  `observacion` varchar(100) COLLATE utf8_bin NOT NULL,
  `verificaicion` varchar(200) COLLATE utf8_bin NOT NULL,
  `evidencia` varchar(30) COLLATE utf8_bin NOT NULL
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
-- Indices de la tabla `asociacion`
--
ALTER TABLE `asociacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

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
  ADD KEY `opciones_id` (`opciones_id`),
  ADD KEY `si_no_id` (`si_no_id`);

--
-- Indices de la tabla `criterio`
--
ALTER TABLE `criterio`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `etapa_empresa`
--
ALTER TABLE `etapa_empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `indicador`
--
ALTER TABLE `indicador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criterio_id` (`criterio_id`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `orientacion_id` (`orientacion_id`);

--
-- Indices de la tabla `insumos`
--
ALTER TABLE `insumos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sost_economica_id` (`sost_economica_id`);

--
-- Indices de la tabla `involucra`
--
ALTER TABLE `involucra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `opciones_id` (`opciones_id`);

--
-- Indices de la tabla `legalizacion`
--
ALTER TABLE `legalizacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `opciones_id` (`opciones_id`),
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
-- Indices de la tabla `mano_obra`
--
ALTER TABLE `mano_obra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sost_economica_id` (`sost_economica_id`);

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
  ADD UNIQUE KEY `codigo` (`codigo`);

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
  ADD KEY `aplica_noaplica_id` (`aplica_noaplica_id`),
  ADD KEY `cumple_nocumple_id` (`cumple_nocumple_id`);

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
-- Indices de la tabla `proyeccion_plata`
--
ALTER TABLE `proyeccion_plata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sost_economica_id` (`sost_economica_id`);

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
-- Indices de la tabla `socio_empleado_item`
--
ALTER TABLE `socio_empleado_item`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sost_economica`
--
ALTER TABLE `sost_economica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_si_no` (`id_si_no`),
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
  ADD KEY `indicador_id` (`indicador_id`),
  ADD KEY `si_no_id` (`si_no_id`),
  ADD KEY `aplica_noaplica_id` (`aplica_noaplica_id`);

--
-- Indices de la tabla `verificacion_2`
--
ALTER TABLE `verificacion_2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`),
  ADD KEY `indicador_id` (`indicador_id`),
  ADD KEY `calificador_id` (`calificador_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `actividad_empresa`
--
ALTER TABLE `actividad_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
-- AUTO_INCREMENT de la tabla `asociacion`
--
ALTER TABLE `asociacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `bienes_servicios`
--
ALTER TABLE `bienes_servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `calificador`
--
ALTER TABLE `calificador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `certificacion`
--
ALTER TABLE `certificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `conservacion`
--
ALTER TABLE `conservacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `criterio`
--
ALTER TABLE `criterio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cumple_nocumple`
--
ALTER TABLE `cumple_nocumple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `demografia`
--
ALTER TABLE `demografia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `edad`
--
ALTER TABLE `edad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `empleado_edad`
--
ALTER TABLE `empleado_edad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `empleado_sexo`
--
ALTER TABLE `empleado_sexo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `etapa_empresa`
--
ALTER TABLE `etapa_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `indicador`
--
ALTER TABLE `indicador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `insumos`
--
ALTER TABLE `insumos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `involucra`
--
ALTER TABLE `involucra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `legalizacion`
--
ALTER TABLE `legalizacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `licencia`
--
ALTER TABLE `licencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mano_obra`
--
ALTER TABLE `mano_obra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `nivel_educativo`
--
ALTER TABLE `nivel_educativo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `opciones`
--
ALTER TABLE `opciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT de la tabla `orientacion`
--
ALTER TABLE `orientacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `otros_certificacion`
--
ALTER TABLE `otros_certificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `otros_conservacion`
--
ALTER TABLE `otros_conservacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `otros_ecosistema`
--
ALTER TABLE `otros_ecosistema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `otros_legislacion`
--
ALTER TABLE `otros_legislacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `plan_manejo`
--
ALTER TABLE `plan_manejo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proyeccion_plata`
--
ALTER TABLE `proyeccion_plata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT de la tabla `socio_empleado_item`
--
ALTER TABLE `socio_empleado_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `sost_economica`
--
ALTER TABLE `sost_economica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `verificacion_1`
--
ALTER TABLE `verificacion_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
-- Filtros para la tabla `asociacion`
--
ALTER TABLE `asociacion`
  ADD CONSTRAINT `asociacion_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

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
  ADD CONSTRAINT `conservacion_ibfk_2` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`),
  ADD CONSTRAINT `conservacion_ibfk_3` FOREIGN KEY (`si_no_id`) REFERENCES `si_no` (`id`);

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
-- Filtros para la tabla `legalizacion`
--
ALTER TABLE `legalizacion`
  ADD CONSTRAINT `legalizacion_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  ADD CONSTRAINT `legalizacion_ibfk_2` FOREIGN KEY (`opciones_id`) REFERENCES `opciones` (`id`),
  ADD CONSTRAINT `legalizacion_ibfk_3` FOREIGN KEY (`si_no_id`) REFERENCES `si_no` (`id`);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
