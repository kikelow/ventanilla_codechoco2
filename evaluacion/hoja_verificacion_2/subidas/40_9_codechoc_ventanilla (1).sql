-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 19-11-2018 a las 18:20:47
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `codechoc_ventanilla`
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
(1, 1, 57, 1, '', 'no'),
(2, 1, 58, 1, '', 'no'),
(3, 1, 59, 1, '', 'no'),
(4, 1, 60, 1, '', 'no'),
(5, 2, 57, 1, '', 'no'),
(6, 2, 58, 1, '', 'no'),
(7, 2, 59, 1, '', 'no'),
(8, 2, 60, 1, '', 'no'),
(9, 4, 57, 1, '', 'no'),
(10, 4, 58, 1, '', 'no'),
(11, 4, 59, 1, '', 'no'),
(12, 4, 60, 1, '', 'no');

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
(1, 1, 1, 'no'),
(2, 1, 2, 'no'),
(3, 1, 3, 'no'),
(4, 2, 1, 'no'),
(5, 2, 2, 'si'),
(6, 2, 3, 'si'),
(10, 4, 1, 'si'),
(11, 4, 2, 'si'),
(12, 4, 3, 'no');

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
  `alias_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `archivo_page`
--

INSERT INTO `archivo_page` (`id`, `nombre`, `ruta`, `alias_id`) VALUES
(5, 'plan nacional de negocios verdes', 'Plan_Nacional_de_Negocios_Verdes.pdf', 3),
(6, 'plan regional de negocios verdes', 'Plan_Regional_Negocios_Pacifico.pdf', 3);

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
(1, 1, 'Crema de aloe vera', ''),
(2, 1, 'Crema de Cacao y Cebo de Cordero', ''),
(3, 1, 'Crema de Cascara de Banano', ''),
(4, 1, 'Extracto de Suelda con Suelda', ''),
(5, 1, 'Extracto de Limoncillo', ''),
(6, 1, '', 'La Moringa y sus derivados'),
(7, 2, 'Cocadas de diferentes sabores', ''),
(8, 2, 'Galletas de diferentes sabores', ''),
(9, 2, 'Enyucados', ''),
(10, 2, '', ''),
(11, 2, '', ''),
(12, 2, '', 'Cocadas y Galletas de diferentes sabores'),
(19, 4, 'CAFÉ', ''),
(20, 4, 'FRUTAS', ''),
(21, 4, '', ''),
(22, 4, '', ''),
(23, 4, '', ''),
(24, 4, '', 'cacao');

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
(1, 1, 66, 1, '', '', 'no'),
(2, 1, 67, 1, '', '', 'no'),
(3, 1, 68, 1, '', '', 'no'),
(4, 1, 69, 1, '', '', 'no'),
(5, 1, 70, 1, '', '', 'no'),
(6, 1, 71, 1, '', '', 'no'),
(7, 1, 72, 1, '', '', 'no'),
(8, 2, 66, 1, '', '', 'no'),
(9, 2, 67, 1, '', '', 'no'),
(10, 2, 68, 1, '', '', 'no'),
(11, 2, 69, 1, '', '', 'no'),
(12, 2, 70, 1, '', '', 'no'),
(13, 2, 71, 1, '', '', 'no'),
(14, 2, 72, 1, '', '', 'no'),
(15, 4, 66, 3, '', '', 'si'),
(16, 4, 67, 1, '', '', 'no'),
(17, 4, 68, 1, '', '', 'no'),
(18, 4, 69, 1, '', '', 'no'),
(19, 4, 70, 1, '', '', 'no'),
(20, 4, 71, 1, '', '', 'no'),
(21, 4, 72, 1, '', '', 'no');

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
(1, 1, 29, '', '', 'no'),
(2, 1, 30, '', '', 'no'),
(3, 1, 31, '', '', 'no'),
(4, 1, 32, '', '', 'no'),
(5, 1, 33, '', '', 'no'),
(6, 1, 34, '', '', 'no'),
(7, 1, 35, '', '', 'no'),
(8, 1, 36, '', '', 'no'),
(9, 1, 37, '', '', 'no'),
(10, 1, 38, '', '', 'no'),
(11, 1, 39, '', '', 'no'),
(12, 1, 40, '', '', 'no'),
(13, 1, 41, '', '', 'no'),
(14, 2, 29, '', '', 'no'),
(15, 2, 30, '', '', 'no'),
(16, 2, 31, '', '', 'no'),
(17, 2, 32, '', '', 'no'),
(18, 2, 33, '', '', 'no'),
(19, 2, 34, '', '', 'no'),
(20, 2, 35, '', '', 'no'),
(21, 2, 36, '', '', 'no'),
(22, 2, 37, '', '', 'no'),
(23, 2, 38, '', '', 'no'),
(24, 2, 39, '', '', 'no'),
(25, 2, 40, '', '', 'no'),
(26, 2, 41, '', '', 'no'),
(27, 4, 29, '', '', 'no'),
(28, 4, 30, '', '', 'no'),
(29, 4, 31, '', '', 'si'),
(30, 4, 32, '', '', 'no'),
(31, 4, 33, '', '', 'no'),
(32, 4, 34, '', '', 'no'),
(33, 4, 35, '', '', 'si'),
(34, 4, 36, '', '', 'si'),
(35, 4, 37, '', '', 'no'),
(36, 4, 38, '', '', 'no'),
(37, 4, 39, '', '', 'no'),
(38, 4, 40, '', '', 'no'),
(39, 4, 41, '', '', 'no');

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
(8, 'Negocios Verdes', 3, '<p style=\"text-align: justify; \">Contempla las actividades económicas en las que se ofertan bienes o servicios, que generan impactos ambientales positivos y además incorporan buenas prácticas ambientales, sociales y económicas con enfoque de ciclo de vida, contribuyendo a la conservación del ambiente como capital natural que soporta el desarrollo del territorio.</p>', 8),
(9, 'Identificación de los bienes y servicios de negocios verdes ', 3, '<p>Es relevante porque:</p><p><ol><li>Promueve patrones de producción y consumo sostenibles de bienes y servicios de los negocios verdes y sostenibles.<br></li><li>Propicia la creación de una cultura alineada con principios ambientales, sociales y éticos.<br></li><li>Facilita la toma de decisiones a los consumidores (públicos o privados) al momento de elegir un bien y servicio.<br></li><li>Visibiliza una oferta de bienes y servicios de cara al mercado nacional e internacional.<br></li></ol></p>', 6),
(10, 'Criterios para identificar los Negocios Verdes', 3, '<ol><li>Viabilidad económica del negocio<br></li><li>Impacto ambiental positivo del bien o servicio<br></li><li>Enfoque de ciclo de vida del bien o servicio<br></li><li>Vida Útil<br></li><li>No uso de sustancias o materiales peligrosos<br></li><li>Reciclabilidad de los materiales y uso de materiales reciclados<br></li><li>Uso eficiente y sostenible de recursos para la producción del bien o servicio<br></li><li>Responsabilidad social al interior de la empresa<br></li><li>Responsabilidad social y ambiental en la cadena de valor de la empresa<br></li><li>Responsabilidad social y ambiental al exterior de la empresa<br></li><li>Comunicación de atributos sociales o ambientales asociados al bien o servicio<br></li><li>Esquemas, programas o reconocimientos ambientales o sociales implementados o recibidos<br></li></ol>', 6),
(11, 'HISTORIA', 1, '<p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph\"><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif\">El Plan\nNacional de Negocios Verdes estableció las Ventanillas o nodos de negocios verdes,\ny los definió como grupos técnicos y de gestión al interior de Corporaciones\nAutónomas Regionales y Autoridades Ambientales Urbanas, las cuales se pueden\noperar mediante alianza con una entidad de emprendimiento, siendo la misión de\nestas, posicionar los negocios verdes como un nuevo renglón de la economía\nregional (PNNV, 2014).</span></p><p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph\"><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif\">En el\nChocó, la Ventanilla se formaliza mediante la Resolución 071 de junio 7 de\n2016, bajo el nombre de “Ventanilla de Emprendimientos Verdes”, está adscrita a\nla Subdirección de Planeación, y opera bajo alianza interinstitucional, en la\nque participan instituciones públicas y privadas con asiento en el Departamento\ndel Chocó, organizadas bajo la figura de Mesa Departamental de Negocios Verdes\ndel Chocó. <o:p></o:p></span></p><p><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-bidi-font-style:\nitalic\"><o:p><span lang=\"ES-TRAD\" style=\"text-align: justify; font-size: 11pt;\">La ventanilla se lanzó oficialmente el 17 de noviembre del 2016, en el\nmarco de la Feria de Detónate, con la presencia d</span><span lang=\"ES-TRAD\" style=\"text-align: justify; font-size: 11pt; color: black;\">el MADS, en cabeza del </span><span lang=\"ES-TRAD\" style=\"text-align: justify; font-size: 11pt;\">DR MAURICIO MIRA, director de la Oficina de\nNegocios Verdes, del MADS, el Dr. TEÓFILO CUESTA BORJA, Director de CODECHOCÓ,\ny el Coordinado de la Ventanilla Profesional Especializado YOVANNY RODRÍGUEZ\nCÓRDOBA.</span></o:p></span><br></p><p><span style=\"font-family: Arial, sans-serif; font-size: 11pt; text-align: justify;\">Desde su implementación, la Ventanilla tiene vinculadas formalmente 80\nmicroempresas de varios sectores las cuales son acompañadas por las diferentes\nde la Mesa Departamental de Negocios Verdes. Dentro de este proceso se resaltan\nlos esfuerzos&nbsp; realizado por la alianza\nCodechocó, IIAP, WWP y el PPD del PNUD, a través de con la cual se vienen\nfortaleciendo 15 microempresas; y el Convenio MADS-UE, a través del cual se\nestán apoyando 23 microempresas y con una proyección de apoyar 10 nuevas\nempresas en el segundo semestre de 2018&nbsp;\npara un total de 33 en la región.</span></p>', 7),
(13, 'MISIÓN', 1, '<p><span lang=\"ES-TRAD\" style=\"font-size:12.0pt;font-family:\r\n&quot;Arial&quot;,sans-serif;mso-fareast-font-family:&quot;MS Mincho&quot;;mso-ansi-language:ES-TRAD;\r\nmso-fareast-language:ES;mso-bidi-language:AR-SA\">Fomentar el desarrollo\r\neconómico local, la generación de empresas, empleos, y el mejoramiento de la\r\ncalidad de vida de la población, aplicando los principios del Desarrollo\r\nSostenible.</span></p>', 6),
(14, 'VISIÓN', 1, '<p class=\"MsoNormal\" style=\"text-align:justify;text-justify:inter-ideograph\"><span lang=\"ES-TRAD\" style=\"font-family:&quot;Arial&quot;,sans-serif\">Ser reconocida como una\r\nunidad técnica y de gestión, que promueve el posicionamiento de la Bioeconomía\r\npara el Desarrollo Económico Local del Chocó.<o:p></o:p></span></p>', 6),
(15, 'Objetivos específicos que persiguen las ventanillas', 1, '<p class=\"MsoNormal\" style=\"\"><span lang=\"ES-TRAD\" style=\"\"><strong>Articular la institucionalidad</strong></span></p><p class=\"MsoListParagraphCxSpFirst\" style=\"margin-left: 18pt;\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"\">Liderar, coordinar y articular a\r\nlos diferentes actores regionales en la implementación del PRNV.</span><span lang=\"ES-TRAD\" style=\"\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 18pt;\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"\">Posicionar el PRNV, hacer\r\nseguimiento a compromisos, evaluar avances, realizar ajustes.</span></p><p class=\"MsoNormal\" style=\"margin-left: 18pt;\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"\">Crear y consolidar alianzas\r\nestratégicas continuas y duraderas que contribuyan a la&nbsp; promoción y posicionamiento del PRNV.</span><span lang=\"ES-TRAD\" style=\"\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left: 18pt;\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"\">Medir la &nbsp;contribución del programa al desarrollo de la\r\nregión y conservación de los Recursos Naturales.</span></p><p class=\"MsoNormal\" style=\"margin-left: 18pt;\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"\">Servir de instrumento operativo\r\npara la dinamización del observatorio de biocomercio sostenible.</span></p><span lang=\"ES-TRAD\" style=\"\"><br></span><p class=\"MsoNormal\" style=\"\"><span lang=\"ES-TRAD\" style=\"\"><strong>Incentivar la oferta</strong><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"margin-left: 18pt;\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"\">Consolidar la oferta de Productos verdes\r\nRegionales.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-left: 18pt;\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"\">Incentivar a producción de bienes y servicios\r\nverdes regionales aumentando la competitividad a escala Nacional e&nbsp; Internacional.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left: 18pt;\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"\">Capacitar a los empresarios en relación a la\r\ndefinición de bien o servicio verde.</span></p><span lang=\"ES-TRAD\" style=\"\"><br></span><p class=\"MsoNormal\" style=\"\"><span lang=\"ES-TRAD\" style=\"\"><strong>Incentivar la demanda</strong><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left: 18pt;\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"\">Divulgar el potencial\r\ny las tendencias de mercado de los negocios verdes.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left: 18pt;\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"\">Sensibilizar al\r\nconsumidor sobre la importancia de productos verdes.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left: 18pt;\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"\">Posicionar de manera\r\nconjunta con los aliados a los Negocios Verdes como un nuevo sector en la\r\neconomía Regional.<strong><font face=\"Arial, sans-serif\"><span style=\"font-size: 11pt;\"><o:p></o:p></span></font></strong></span></p>', 6),
(16, 'Valores que orientan el accionar de la ventanilla', 1, '<p class=\"MsoNormal\" style=\"text-align: justify; margin-left: 18pt;\">Actuamos y\npromovemos el <em><strong>Respeto y el\nReconocimiento</strong></em> de la diversidad biológica y cultural de la región, para que\nlas empresas fomentadas reconozcan estos elementos singulares y diferenciadores\ny los incorporen como ventajas competitivas en sus negocios.<br></p><p class=\"MsoNormal\" style=\"text-align: justify; margin-left: 18pt;\">Actuamos y\npromovemos una <em>Visión de Contexto</em>\ndonde instituciones y empresas fomentadas nos comprometemos con la promoción\ndel desarrollo económico local de la región.</p><p class=\"MsoNormal\" style=\"text-align: justify; margin-left: 18pt;\">Actuamos y\npromovemos la <em>Integralidad</em>, donde\ninstituciones y empresas fomentadas nos comprometemos con prácticas\nempresariales medioambientalmente sostenibles que protegen a las generaciones\npresentes y futuras.</p><p class=\"MsoNormal\" style=\"text-align: justify; margin-left: 18pt;\">Actuamos y\npromovemos la <em>Equidad</em>, donde\ninstituciones y empresas fomentadas nos comprometemos con prácticas\nempresariales que protegen los derechos humanos, la inclusión social, la\nsuperación de la pobreza, y la creación de capital social.</p><p class=\"MsoNormal\" style=\"text-align: justify; margin-left: 18pt;\">Actuamos y\npromovemos el <em>Valor Compartido</em>,\ndonde instituciones y empresas fomentadas y sus redes de proveedurías, nos\ncomprometemos en actúan con los principios del Desarrollo Sostenible y la\nAgenda 2030.</p><p class=\"MsoNormal\" style=\"text-align: justify; margin-left: 18pt;\">Actuamos y\npromovemos el<em> Compromiso</em>, donde\ninstituciones y empresas fomentadas, entreguemos a los consumidores finales.\nproductos y servicios que contribuyen a solucionar problemas medioambientales,\nuna sociedad más justa y equitativa</p><p class=\"MsoNormal\" style=\"text-align: justify; margin-left: 18pt;\">Actuamos y\npromovemos la <em>Dignidad humana</em>, donde\ninstituciones y empresas fomentadas, respetamos las comunidades étnicas, sus\nterritorios, su normatividad, y los derechos laborales de los empleados.</p><p class=\"MsoNormal\" style=\"text-align: justify; margin-left: 18pt;\">Actuamos y\npromovemos la <em>Mejora Continua</em>, donde\ninstituciones y empresas fomentadas, nos comprometemos con alcanzar los máximos\nniveles de aportes ambientales y sociales positivos como Negocio Verde ideal.</p><p class=\"MsoNormal\" style=\"text-align: justify; margin-left: 18pt;\">Actuamos y\npromovemos una Gestión de <em>Servicio</em>, donde\ninstituciones y empresas fomentadas, priorizamos la satisfacción de las\nnecesidades de nuestros clientes.</p><p class=\"MsoNormal\" style=\"text-align: justify; margin-left: 18pt;\">Actuamos y\npromovemos y la<font face=\"Arial, sans-serif\"><span style=\"font-size: 11pt;\"> <em>solidaridad</em>, </span></font>donde\ninstituciones y empresas fomentadas, estemos continuamente comprometidas en\nactuar en redes y el beneficio mutuo para lograr el bien común.<font face=\"Arial, sans-serif\"><span style=\"font-size: 11pt;\"><o:p></o:p></span></font></p>', 6),
(17, 'TIPOS DE CLIENTES QUE ATIENDEN LA VENTANILLA', 2, '<ul><li><strong><em>Emprendedor con una idea general de\nnegocios:</em></strong>\nEmprendedor<span lang=\"ES-TRAD\"> que tiene algo en mente, pero no sabe cómo\nllevarlo a cabo, implementarlo o ejecutarlo.</span><strong><br></strong></li><li><strong><br></strong></li><li><em><strong>Emprendedor con una idea asociada a\nla conservación del ambiente y la Biodiversidad:</strong></em> Emprendedor<span lang=\"ES-TRAD\"> que tiene la actitud y motivación de emprender una actividad\nproductiva, asociada a la protección del ambiente y los recursos naturales,\npero no sabe a cómo llevarlo a cabo, implementarlo o ejecutarlo.</span><strong><br></strong></li><li><strong><br></strong></li><li><em><strong>Empresario con una empresa o negocio en desarrollo general</strong></em><span lang=\"ES-TRAD\"><em><strong>:\n</strong></em>Empresario con un</span><span lang=\"ES-TRAD\"> negocio </span><span lang=\"ES-TRAD\">en marcha,\nse interesa vincular su actividad productiva </span><span lang=\"ES-TRAD\">a la protección del ambiente y los recursos naturales, pero no sabe cómo\niniciar y qué hacer.</span><em><br></em></li><li><em><br></em></li><li><strong><em>Empresario con una empresa <span lang=\"ES-TRAD\">o negocio</span> en desarrollo asociado a conservación:</em></strong> Empresario que tiene en operación una empresa\nque dentro de sus acciones responde a varios de los Criterios e Indicadores de\nlos Negocios Verdes y se interesa por consolidarlo en este sector productivo,\npero no sabe <span lang=\"ES-TRAD\">cómo iniciar y qué hacer.</span><strong><br></strong></li><li><strong><br></strong></li><li><em><strong>Empresario con una empresa <span lang=\"ES-TRAD\">o Negocio</span> Verde consolidado:</strong></em> Empresario con un negocio en marcha que <span lang=\"ES-TRAD\">cumple</span><span lang=\"ES-TRAD\" style=\"\"> con las características y\ngran parte de Criterios e Indicadores que definen un Negocio Verde, pero\npresenta dificultades o inquietudes.</span><br></li></ul><o:p></o:p>\n\n<p class=\"MsoNormal\" style=\"margin-left: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><o:p></o:p></p>\n\n<p class=\"MsoNormal\" style=\"margin-left: 18pt; vertical-align: middle;\"><o:p></o:p></p>\n\n', 6),
(18, 'SERVICIOS DE LA VENTANILLA POR ALIADO ESTRATÉGICO DE LA MESA', 2, '<p class=\"MsoNormal\" style=\"margin-left:18.0pt;text-align:justify;text-justify:\r\ninter-ideograph;text-indent:-18.0pt;mso-pagination:none;mso-list:l0 level1 lfo1;\r\nmso-layout-grid-align:none;text-autospace:none\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;font-family:Symbol;mso-fareast-font-family:\r\nSymbol;mso-bidi-font-family:Symbol\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;\r\nfont-family:&quot;Arial&quot;,sans-serif\">Apoyo para el establecimiento de\r\nencadenamientos productivos entre empresas&nbsp;\r\n<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:18.0pt;text-align:justify;text-justify:\r\ninter-ideograph;text-indent:-18.0pt;mso-pagination:none;mso-list:l0 level1 lfo1;\r\nmso-layout-grid-align:none;text-autospace:none\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;font-family:Symbol;mso-fareast-font-family:\r\nSymbol;mso-bidi-font-family:Symbol\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;\r\nfont-family:&quot;Arial&quot;,sans-serif\">Asesorías en la creación, fortalecimiento y\r\ndesarrollo de empresas de Negocios Verdes.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:18.0pt;text-align:justify;text-justify:\r\ninter-ideograph;text-indent:-18.0pt;mso-pagination:none;mso-list:l0 level1 lfo1;\r\nmso-layout-grid-align:none;text-autospace:none\"><!--[if !supportLists]--><span lang=\"ES\" style=\"font-size:11.0pt;font-family:Symbol;mso-fareast-font-family:\r\nSymbol;mso-bidi-font-family:Symbol;mso-ansi-language:ES;mso-bidi-font-weight:\r\nbold\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;\r\nfont-family:&quot;Arial&quot;,sans-serif\">Valoración del cumplimiento de los Criterios e\r\nIndicadores de los Negocios Verdes.</span><strong><span lang=\"ES\" style=\"font-size:\r\n11.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:ES\"><o:p></o:p></span></strong></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:18.0pt;text-align:justify;text-justify:\r\ninter-ideograph;text-indent:-18.0pt;mso-pagination:none;mso-list:l0 level1 lfo1;\r\nmso-layout-grid-align:none;text-autospace:none\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;font-family:Symbol;mso-fareast-font-family:\r\nSymbol;mso-bidi-font-family:Symbol\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;\r\nfont-family:&quot;Arial&quot;,sans-serif\">Formulación de planes de mejora, asesorías,\r\nacompañamiento y otorgamientos de incentivos no financieros para en su\r\nimplementación.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:18.0pt;text-align:justify;text-justify:\r\ninter-ideograph;text-indent:-18.0pt;mso-pagination:none;mso-list:l0 level1 lfo1;\r\nmso-layout-grid-align:none;text-autospace:none\"><!--[if !supportLists]--><span lang=\"ES\" style=\"font-size:11.0pt;font-family:Symbol;mso-fareast-font-family:\r\nSymbol;mso-bidi-font-family:Symbol;mso-ansi-language:ES;mso-bidi-font-weight:\r\nbold\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;\r\nfont-family:&quot;Arial&quot;,sans-serif\">Otorgar Certificaciones del cumplimiento de los\r\nCriterios e Indicadores de los Negocios Verdes para promocionar las empresas.</span><strong><span lang=\"ES\" style=\"font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:\r\nES\"><o:p></o:p></span></strong></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:18.0pt;text-align:justify;text-justify:\r\ninter-ideograph;text-indent:-18.0pt;mso-pagination:none;mso-list:l0 level1 lfo1;\r\nmso-layout-grid-align:none;text-autospace:none\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;font-family:Symbol;mso-fareast-font-family:\r\nSymbol;mso-bidi-font-family:Symbol\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;\r\nfont-family:&quot;Arial&quot;,sans-serif\">Promoción comercial de las empresas, sus\r\nproductos y servicios en las plataformas institucionales (MADS y CODECHOCO) y\r\notros aliados.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:18.0pt;text-align:justify;text-justify:\r\ninter-ideograph;text-indent:-18.0pt;mso-pagination:none;mso-list:l0 level1 lfo1;\r\nmso-layout-grid-align:none;text-autospace:none\"><!--[if !supportLists]--><span lang=\"ES\" style=\"font-size:11.0pt;font-family:Symbol;mso-fareast-font-family:\r\nSymbol;mso-bidi-font-family:Symbol;mso-ansi-language:ES;mso-bidi-font-weight:\r\nbold\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;\r\nfont-family:&quot;Arial&quot;,sans-serif\">Promoción comercial de las empresas en ferias\r\nnacionales, internacionales y locales.</span><span lang=\"ES\" style=\"font-size:\r\n11.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:ES;mso-bidi-font-weight:\r\nbold\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:18.0pt;text-align:justify;text-justify:\r\ninter-ideograph;text-indent:-18.0pt;mso-pagination:none;mso-list:l0 level1 lfo1;\r\nmso-layout-grid-align:none;text-autospace:none\"><!--[if !supportLists]--><span lang=\"ES\" style=\"font-size:11.0pt;font-family:Symbol;mso-fareast-font-family:\r\nSymbol;mso-bidi-font-family:Symbol;mso-ansi-language:ES;mso-bidi-font-weight:\r\nbold\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;\r\nfont-family:&quot;Arial&quot;,sans-serif\">Apoyo en los trámites ambientales (permisos,\r\nautorizaciones, planes de manejo y licencias ambientales) ante CODECHOCO</span><span lang=\"ES\" style=\"font-size:11.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:\r\nES;mso-bidi-font-weight:bold\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:18.0pt;text-align:justify;text-justify:\r\ninter-ideograph;text-indent:-18.0pt;mso-pagination:none;mso-list:l0 level1 lfo1;\r\nmso-layout-grid-align:none;text-autospace:none\"><!--[if !supportLists]--><span lang=\"ES\" style=\"font-size:11.0pt;font-family:Symbol;mso-fareast-font-family:\r\nSymbol;mso-bidi-font-family:Symbol;mso-ansi-language:ES;mso-bidi-font-weight:\r\nbold\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;\r\nfont-family:&quot;Arial&quot;,sans-serif\">Apoyo en los trámites de constitución y\r\nlegalización de la empresa.</span><span lang=\"ES\" style=\"font-size:11.0pt;\r\nfont-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:ES;mso-bidi-font-weight:bold\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:18.0pt;text-align:justify;text-justify:\r\ninter-ideograph;text-indent:-18.0pt;mso-pagination:none;mso-list:l0 level1 lfo1;\r\nmso-layout-grid-align:none;text-autospace:none\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;font-family:Symbol;mso-fareast-font-family:\r\nSymbol;mso-bidi-font-family:Symbol\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;\r\nfont-family:&quot;Arial&quot;,sans-serif\">Apoyo en los trámites relacionados con\r\nregistros sanitarios e INVIMA.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:18.0pt;text-align:justify;text-justify:\r\ninter-ideograph;text-indent:-18.0pt;mso-pagination:none;mso-list:l0 level1 lfo1;\r\nmso-layout-grid-align:none;text-autospace:none\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;font-family:Symbol;mso-fareast-font-family:\r\nSymbol;mso-bidi-font-family:Symbol\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;\r\nfont-family:&quot;Arial&quot;,sans-serif\">Apoyo en los trámites relacionados con\r\ncertificaciones y permisos del ICA<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:18.0pt;text-align:justify;text-justify:\r\ninter-ideograph;text-indent:-18.0pt;mso-pagination:none;mso-list:l0 level1 lfo1;\r\nmso-layout-grid-align:none;text-autospace:none\"><!--[if !supportLists]--><span lang=\"ES\" style=\"font-size:11.0pt;font-family:Symbol;mso-fareast-font-family:\r\nSymbol;mso-bidi-font-family:Symbol;mso-ansi-language:ES;mso-bidi-font-weight:\r\nbold\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;\r\nfont-family:&quot;Arial&quot;,sans-serif\">Apoyo en los trámites relacionados con el\r\nregistro Nacional de turismo</span><span lang=\"ES\" style=\"font-size:11.0pt;\r\nfont-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:ES;mso-bidi-font-weight:bold\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:18.0pt;text-align:justify;text-justify:\r\ninter-ideograph;text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;font-family:Symbol;mso-fareast-font-family:\r\nSymbol;mso-bidi-font-family:Symbol\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;\r\nfont-family:&quot;Arial&quot;,sans-serif\">Capacitaciones desarrollo de competencias\r\nempresariales <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:18.0pt;text-align:justify;text-justify:\r\ninter-ideograph;text-indent:-18.0pt;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;font-family:Symbol;mso-fareast-font-family:\r\nSymbol;mso-bidi-font-family:Symbol\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES-TRAD\" style=\"font-size:11.0pt;\r\nfont-family:&quot;Arial&quot;,sans-serif\">Capacitaciones en desarrollo de competencias\r\nhumanas<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:18.0pt;text-align:justify;text-justify:\r\ninter-ideograph;text-indent:-18.0pt;mso-pagination:none;mso-list:l0 level1 lfo1;\r\nmso-layout-grid-align:none;text-autospace:none\"><!--[if !supportLists]--><span lang=\"ES\" style=\"font-size:11.0pt;font-family:Symbol;mso-fareast-font-family:\r\nSymbol;mso-bidi-font-family:Symbol;mso-ansi-language:ES;mso-bidi-font-weight:\r\nbold\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES\" style=\"font-size:11.0pt;\r\nfont-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:ES;mso-bidi-font-weight:bold\">Asistencia\r\ntécnica ambiental.<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-left:18.0pt;text-align:justify;text-justify:\r\ninter-ideograph;text-indent:-18.0pt;mso-pagination:none;mso-list:l0 level1 lfo1;\r\nmso-layout-grid-align:none;text-autospace:none\"><!--[if !supportLists]--><span lang=\"ES\" style=\"font-size:11.0pt;font-family:Symbol;mso-fareast-font-family:\r\nSymbol;mso-bidi-font-family:Symbol;mso-ansi-language:ES;mso-bidi-font-weight:\r\nbold\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"ES\" style=\"font-size:11.0pt;\r\nfont-family:&quot;Arial&quot;,sans-serif;mso-ansi-language:ES\">Asesoramiento en\r\ntransformación productiva&nbsp;<o:p></o:p></span></p>', 6);

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
(1, 1, 0, 0, 0),
(2, 2, 0, 0, 0),
(3, 4, 0, 0, 0);

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
(1, 1, 0, 0, 0),
(2, 2, 0, 607500, 0),
(3, 4, 0, 0, 0);

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
(1, 1, 1, 2, 0),
(2, 1, 2, 2, 0),
(3, 1, 3, 2, 0),
(4, 1, 4, 2, 0),
(5, 1, 5, 2, 0),
(6, 1, 6, 2, 0),
(7, 1, 7, 2, 0),
(8, 2, 1, 2, 0),
(9, 2, 2, 2, 0),
(10, 2, 3, 2, 0),
(11, 2, 4, 1, 1),
(12, 2, 5, 2, 0),
(13, 2, 6, 2, 0),
(14, 2, 7, 2, 0),
(22, 4, 1, 1, 1),
(23, 4, 2, 1, 0),
(24, 4, 3, 2, 0),
(25, 4, 4, 1, 0),
(26, 4, 5, 2, 0),
(27, 4, 6, 1, 0),
(28, 4, 7, 2, 0);

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
(1, 3, 'CHOCÓ');

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
(1, 1, 42, '', 'no'),
(2, 1, 43, '', 'no'),
(3, 1, 44, '', 'no'),
(4, 1, 45, '', 'no'),
(5, 1, 46, '', 'no'),
(6, 1, 47, '', 'no'),
(7, 1, 48, '', 'no'),
(8, 2, 42, '', 'no'),
(9, 2, 43, '', 'no'),
(10, 2, 44, '', 'no'),
(11, 2, 45, '', 'no'),
(12, 2, 46, '', 'no'),
(13, 2, 47, '', 'no'),
(14, 2, 48, '', 'no'),
(15, 4, 42, '', 'no'),
(16, 4, 43, '', 'no'),
(17, 4, 44, '', 'no'),
(18, 4, 45, '', 'si'),
(19, 4, 46, '', 'si'),
(20, 4, 47, '', 'si'),
(21, 4, 48, '', 'no');

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
(1, 1, 1, ''),
(2, 1, 2, ''),
(3, 1, 3, ''),
(4, 2, 1, '0'),
(5, 2, 2, '2'),
(6, 2, 3, '1'),
(10, 4, 1, '20'),
(11, 4, 2, '5'),
(12, 4, 3, '5');

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
(1, 1, 1, 1, 2),
(2, 1, 1, 2, 3),
(3, 1, 2, 1, 0),
(4, 1, 2, 2, 0),
(5, 1, 3, 1, 0),
(6, 1, 3, 2, 0),
(7, 2, 1, 1, 0),
(8, 2, 1, 2, 1),
(9, 2, 2, 1, 0),
(10, 2, 2, 2, 1),
(11, 2, 3, 1, 0),
(12, 2, 3, 2, 3),
(19, 4, 1, 1, 3),
(20, 4, 1, 2, 4),
(21, 4, 2, 1, 2),
(22, 4, 2, 2, 1),
(23, 4, 3, 1, 20),
(24, 4, 3, 2, 10);

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
(1, 2, 4, '900888381-7', 'FUNADACIÓN PARQUE TEMÁTICO AFRIKA', 31, 1, 4, '', 'VÍA QUIBDÓ - YUTO', 'Codechocó', '', '', '', '30 ', 1, 2, 2, '2018-06-08 16:16:26', 'Es una empresa que se dedica al cultivo de plantas medicinales, fabricación e industrialización de remedios tradicionales.  Se cultivan las siguientes plantas y árboles: Yantén, Escancel, Sábila, Suelda con suelda, Romero, Pronto Alivio, Escubilla, La Moringa, Oregano, Marañon, Guayaba, Mango, Limoncillo, Árbol del pan, Cacao, Limón, Guanabana, entre otros; los cuales son la base para la elaboración de productos medicinales como son:                 \r\n Shampo para evitar la caida y para el crecimiento del Cabello a base hojas de guayaba.                                                                                                                                                                                                                                                                           Crema de Aloe Vera: sirve para desmanchar la piel y protegerla contra el acné.                                                                                                                                                                                                                                                                                         Crema de Cacao y Cebo de Cordero: sirve para embellecimiento de la piel, desmanchar, quitar arrugas, reducción de grasa abdominal.                                                                                                                                                                                            La Moringa y sus Derivados: En polvo, cápsulas, hojas secas o frescas; las cuales son la base para la producción de bebidas para diabéticos.                                                                                                                                                                                          \r\nExtracto de Suelda con Suelda: Sirve para la artritis, problemas de articulaciones.                                                                                                                                                                                                                                                                                          Extracto de Limoncillo: Sirve para eliminar la bacteria licobactery pilory                                                                                                                                                                                                                                                                                                      Jarabe de Yantén y Escancel: Para eliminar la gastritis.                                                                                                                                                                                                                                                                                                                                     Crema de Cascara de Banano: Para eliminar berrugas y arrugas.                                                                                                                                                                                                                                                                                                                      Jarabe de Hojas de Guanabana: Para eliminar células cancerigenas.', ' La empresa en el procesamiento de los productos aplica el principio de producción limpia, utilizando el 100% de la materia prima generando subproductos de los procesos principales, un ejemplo de esto es la producción de abono.', 0, 2, 2, 1, 1, 1, 1, 1, 'No hay observaciones', 'si', 'si', 'si', 'si', 58.94),
(2, 2, 4, '89160000-3', 'BOCADITOS DOÑA BETTY - ESTABLECIMIENTO COMERCIAL ', 33, 2, 1, 'Área Urbana', 'Cra 22 # 18 - 97', 'Codechocó', '', '', '', '72  Mt2', 1, 2, 2, '2018-06-14 15:51:44', 'Descripción del Negocio (Bien o Servicio) : Elaboración de cocadas, galletas, enyucado, cucas con ingredientes nativos en su mayoría (borojó, lulo, guayaba agria, piña, chontaduro). Las cocadas son de diferentes sabores: leche, café, chontaduro, piña, papaya, borojo, jengibre, lulo, guayaba agria.También elaboran galletas especiales para acompañar copas de helado, estas son por encargo. ', 'Características Ambientales de su negocio verde (Incluir el impacto ambiental positivo generado): Uso sostenible de frutos de la biodiversidad nativa que se maneja a parttir de proveedores que no manejan agroquímicos, promoviendo también un conocimiento y gastronomía local. ', 0, 2, 6, 1, 1, 19, 1, 9, 'El negocio con reconocimiento en la región, con productos posicionados', 'si', 'si', 'si', 'si', 59.36),
(4, 1, 1, '1000000000', 'PRUEBA VERDE SAS', 37, 4, 4, '', 'CLL 20 # 2-5', 'Codechocó', '258.3', '368.4', '2.5', '300', 1, 1, 3, '2018-08-02 10:36:23', 'café', 'ahsyeedhlasdfhweo okasdjbwekdf alksdjf wejbasd,ffg. qwfjbwrjklweb sdmfnsdbkr s,dfbwjer', 50, 1, 2, 3, 1, 25, 2, 52, 'OK.', 'si', 'si', 'si', 'si', 41.36363636363637);

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
(1, '4799040', 'GREGORIO RENTERÍA MOSQUERA', 'GERENTE'),
(2, '54250989', 'Betty Amparo Moreno ', 'Representante Legal'),
(3, '22112', 'asdsdas', 'qweqeqw'),
(4, '100000000', 'lusia Niño', 'MADS');

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
-- Estructura de tabla para la tabla `img_empresa`
--

CREATE TABLE `img_empresa` (
  `id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `imagen` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `img_empresa`
--

INSERT INTO `img_empresa` (`id`, `empresa_id`, `imagen`) VALUES
(1, 1, '1_afrika.jpg'),
(2, 2, '2_doña_bety.jpg'),
(4, 4, '');

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
(16, 'expo', 'BANNERPROMOCIONALcode.jpg'),
(17, 'apertura', 'apertura.png'),
(21, 'feria2', 'DjB1FnYXgAAigwO.jpg'),
(22, 'foto4', 'foto.jpg');

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
(1, 1, '', '', 1, ''),
(2, 1, '', '', 1, ''),
(3, 1, '', '', 1, ''),
(4, 1, '', '', 1, ''),
(5, 1, '', '', 1, ''),
(6, 2, 'Acompañamiento empresrial', 'SENA', 2, '2014'),
(7, 2, 'Capacitación', 'DPS', 2, '2015'),
(8, 2, 'Capacitación', 'EPS', 2, '2016'),
(9, 2, '', '', 1, ''),
(10, 2, '', '', 1, ''),
(11, 4, '', '', 1, ''),
(12, 4, '', '', 1, ''),
(13, 4, '', '', 1, ''),
(14, 4, '', '', 1, ''),
(15, 4, '', '', 1, '');

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
(1, 1, 53, 'no'),
(2, 1, 54, 'no'),
(3, 1, 55, 'no'),
(4, 2, 53, 'no'),
(5, 2, 54, 'si'),
(6, 2, 55, 'no'),
(7, 4, 53, 'si'),
(8, 4, 54, 'no'),
(9, 4, 55, 'no');

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
(1, 1, 27, 2, 2, '', ''),
(2, 2, 27, 2, 2, '', ''),
(3, 4, 27, 2, 2, '', '');

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
(6, 'yovanny', 'yovanny', 25),
(11, '1077467646', '1077467646', 30),
(12, '11795555', '11795555', 32),
(13, '12345', '12345', 36);

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
(1, 1, 'QUIBDÓ'),
(2, 1, 'ACANDÍ'),
(3, 1, 'ALTO BAUDÓ'),
(4, 1, 'ATRATO'),
(5, 1, 'BAGADÓ'),
(6, 1, 'BAHIA SOLANO'),
(7, 1, 'BAJO BAUDÓ'),
(8, 1, 'BOJAYÁ'),
(9, 1, 'CANTON DE SAN PABLO'),
(10, 1, 'CARMEN DEL DARIÉN'),
(11, 1, 'CERTEGUI'),
(12, 1, 'CONDOTO'),
(13, 1, 'CARMEN DE ATRATO'),
(14, 1, 'ISTMINA'),
(15, 1, 'JURADÓ'),
(16, 1, 'LITORAL DEL SAN JUAN '),
(17, 1, 'LLORÓ'),
(18, 1, 'MEDIO ATRATO'),
(19, 1, 'MEDIO BAUDÓ'),
(20, 1, 'MEDIO SAN JUAN'),
(21, 1, 'NÓVITA'),
(22, 1, 'NUQUÍ'),
(23, 1, 'RÍO IRÓ'),
(24, 1, 'RIOSUCIO'),
(25, 1, 'SAN JOSÉ DEL PALMAR'),
(26, 1, 'SIPÍ'),
(27, 1, 'TADÓ'),
(28, 1, 'UNGUÍA'),
(29, 1, 'UNIÓN PANAMERICANA');

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
(1, 1, 1, 0),
(2, 1, 2, 0),
(3, 1, 3, 0),
(4, 1, 4, 0),
(5, 1, 5, 0),
(6, 2, 1, 1),
(7, 2, 2, 2),
(8, 2, 3, 0),
(9, 2, 4, 0),
(10, 2, 5, 0),
(16, 4, 1, 10),
(17, 4, 2, 20),
(18, 4, 3, 0),
(19, 4, 4, 0),
(20, 4, 5, 0);

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
(2, 'EXPOAMBIENTE, LA FERIA QUE IMPULSARÁ LOS NEGOCIOS VERDES DEL CHOCÓ', '<p><em>Del\n26 al 28 de julio de 2018</em>, en la ciudad de Quibdó, se realizará la&nbsp;<span style=\"border: 1pt none windowtext; padding: 0cm;\">1ra\nversión de la Feria ExpoAmbienteChocó</span>, la cual, es\nconsiderada por el Ministerio de Ambiente y Desarrollo Sostenible, como la\nprincipal ventanilla para promocionar los productos y servicios que tienen como\nbase la Biodiversidad del Departamento; y en los que se destacan los ejes\ntemáticos como el ecoturismo, productos no maderables, artesanías, materias\nprimas derivadas de la fauna silvestre y la producción agroecológica.&nbsp; <o:p></o:p></p>\n\n<span style=\"line-height: 115%;\"><o:p>&nbsp;</o:p></span>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: 115%;\"><span style=\"line-height: 115%;\">ExpoAmbienteChocó\ncontará con más de 70 stand de productos, bienes y servicios 100% Chocoanos. De\nlos cuales un gran porcentaje han sido apoyados técnica y financieramente por\nla Ventanilla de Emprendimientos Verdes&nbsp;\nde CODECHOCÓ desde el año 2016 a través del Programa Regional de\nNegocios Verdes.<o:p></o:p></span></p>\n\n<span lang=\"es\" style=\"\"><o:p>&nbsp;</o:p></span>\n\n<p style=\"margin: 0cm 0cm 0.0001pt; line-height: 115%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span lang=\"es\" style=\"\">Bajo el lema “Donde la naturaleza\ny la cultura se vuelven oportunidad”, la Feria contará con distintos escenarios\npensados en las necesidades tanto de los empresarios como de los comerciantes y\nel público en general. Allí se podrá ampliar la oferta y la demanda de los\nproductos, obtener asesoría financiera, actualizar la documentación legal como\ncomerciante, reencontrarse con las tradiciones y costumbres de nuestros\nantepasados y conocer que está haciendo la autoridad ambiental para posicionar\nlos Negocios Verdes en la Región. <o:p></o:p></span></p>\n\n<span lang=\"es\" style=\"\"><o:p>&nbsp;</o:p></span>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: 115%;\"><span lang=\"ES\" style=\"line-height: 115%;\">Teofilo Cuesta Borja, Director General de CODECHOCÓ,\nhabló acerca del valor a la hora de hacer aprovechamiento sostenible en el\nDepartamento: “la oferta ambiental constituye una verdadera oportunidad de vida\npara las comunidades Negras e Indígenas que habitan en el territorio, y la\nposibilidad de impulsar los negocios verdes en la Región”. </span><span style=\"line-height: 115%;\">Adicionalmente, hizo referencia a\nlas grandes oportunidades de negocios que posibilita ExpoAmbiente, a través de\nlas ruedas de negocios que se realizarán durante los tres días de la feria\ndonde se permitirá cerrar negocios promisorios a nivel regional, nacional e\ninternacional”, precisó Cuesta. </span><span lang=\"ES\" style=\"line-height: 115%;\"><o:p></o:p></span></p>\n\n<span style=\"line-height: 115%;\"><o:p>&nbsp;</o:p></span>\n\n<p class=\"MsoNormal\" style=\"line-height: 115%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"line-height: 115%;\">Por su parte, </span><span style=\"line-height: 115%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Yovanny Rodríguez Córdoba, Coordinador de la Ventanilla de\nNegocios Verdes del Chocó, aseguró que ExpoAmbiente, es un gran canal para\nfortalecer el crecimiento verde en la Región, de la mano de los emprendedores\nlocales; Además de ser una oportunidad para identificar nuevos emprendimientos\nverdes en la jurisdicción”.&nbsp;</span></p><span style=\"line-height: 115%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"></span><p style=\"margin: 0cm 0cm 0.0001pt; line-height: 115%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Los visitantes podrán disfrutar de charlas, foros o paneles\nprogramados en la agenda académica de la feria, así como de espacios culturales\ndonde se rencuentra la naturaleza y la cultura. <o:p></o:p></span></p>\n\n<span style=\"line-height: 115%; border: 1pt none windowtext; padding: 0cm;\">&nbsp;</span>\n\n<p class=\"MsoNormal\" style=\"margin-bottom: 0.0001pt; line-height: 115%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"line-height: 115%; border: 1pt none windowtext; padding: 0cm;\">Agéndate con el Ambiente <o:p></o:p></span></p>\n\n<span style=\"line-height: 115%;\">&nbsp;</span>\n\n<p class=\"MsoNormal\" style=\"margin: 0cm 0cm 0.0001pt 24pt; line-height: 115%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><!--[if !supportLists]--><span style=\"line-height: 115%;\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n</span></span><!--[endif]--><span style=\"line-height: 115%;\">Fecha:</span><span style=\"line-height: 115%;\"> Del 26 al 28 de julio de 2018<o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin: 0cm 0cm 0.0001pt 24pt; line-height: 115%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><!--[if !supportLists]--><span style=\"line-height: 115%;\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n</span></span><!--[endif]--><span style=\"line-height: 115%;\">Lugar: </span><span style=\"line-height: 115%;\">Parque Manuel Mosquera Garcés <o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin: 0cm 0cm 0.0001pt 24pt; line-height: 115%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><!--[if !supportLists]--><span style=\"line-height: 115%;\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n</span></span><!--[endif]--><span style=\"line-height: 115%;\">Horario:</span><span style=\"line-height: 115%;\"> Jueves y viernes de 08:00 a.m.\na 6:00 p.m. y Sábado de 08:00 a.m. a 5:00 p.m.<o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" style=\"margin: 0cm 0cm 0.0001pt 24pt; line-height: 115%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><!--[if !supportLists]--><span style=\"line-height: 115%;\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\n</span></span><!--[endif]--><span style=\"line-height: 115%;\">Entrada: </span><span style=\"line-height: 115%;\">Libre<o:p></o:p></span></p>\n\n<span style=\"line-height: 115%;\">&nbsp;</span>\n\n<p style=\"margin: 0cm 0cm 0.0001pt; line-height: 115%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Organiza: <o:p></o:p></p>\n\n<p style=\"margin: 0cm 0cm 0.0001pt; line-height: 115%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">CODECHOCÓ&nbsp; <o:p></o:p></p>\n\n<p style=\"margin: 0cm 0cm 0.0001pt; text-align: justify; line-height: 115%; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><o:p></o:p></p><p>Apoya:<span style=\"text-align: justify;\"> Ministerio de Ambiente y Desarrollo Sostenible y la Mesa\nInterinstitucional de Negocios Verdes del Chocó.</span></p>&nbsp;<o:p></o:p>', '2018-07-16 16:02:27', 'Codechocó', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE `opciones` (
  `id` int(11) NOT NULL,
  `codigo` varchar(30) COLLATE utf8_bin NOT NULL,
  `nombre` text COLLATE utf8_bin NOT NULL,
  `No` varchar(6) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `opciones`
--

INSERT INTO `opciones` (`id`, `codigo`, `nombre`, `No`) VALUES
(12, 'TT1', 'Propietario con escritura', ''),
(13, 'TT2', 'Arrendatario', ''),
(14, 'TT3', 'Posesión tradicional y/o ancestral de tierras y territorios ', ''),
(15, 'TT4', 'Estatal', ''),
(16, 'TT5', 'Concesión', ''),
(17, 'TT6', 'Autorización del propietario o administrador del área', ''),
(18, 'R1', 'Registro invima', ''),
(19, 'R2', 'Registro ICA', ''),
(20, 'R3', 'Registro nacional de turismo', ''),
(21, 'R4', 'Registro de plantación forestal', ''),
(22, 'P1', 'Permiso de aprovechamiento', ''),
(23, 'P2', 'Concesión de aguas (Subterráneas o superficiales)', ''),
(24, 'P3', 'Permiso de vertimientos o emisiones', ''),
(25, 'P4', 'Permiso tala de árboles', ''),
(26, 'P5', 'Permiso de movilizacion', ''),
(27, 'L1', 'Licencia ambiental', ''),
(28, 'O1', 'Plan de manejo ambiental', ''),
(29, 'PC1', 'Sistemas silvopastoriales', ''),
(30, 'PC2', 'Sistemas silvicultura', ''),
(31, 'PC3', 'Agroforestería', ''),
(32, 'PC4', 'Cultivos mixtos', ''),
(33, 'PC5', 'Cercas vivas/ barreras rompevientos/ corredores de conectividad de bosques', ''),
(34, 'PC6', 'Bosques para protección de nacimientos de agua, quebradas, ríos y lagunas', ''),
(35, 'PC7', 'Cercas o aislamiento para protección de nacimientos de agua, quebradas, ríos y lagunas', ''),
(36, 'PC8', 'Buen uso de recursos hídricos', ''),
(37, 'PC9', 'Control Biológico de plagas', ''),
(38, 'PC10', 'Fertilización orgánica', ''),
(39, 'PC11', 'Labranza mínima ', ''),
(40, 'PC12', 'Uso de fuentes alternativas de energía', ''),
(41, 'PC13', 'Uso de practicas y/o tecnologías bajas en carbono', ''),
(42, 'AREA_ECO1', 'Bosque andino o niebla', ''),
(43, 'AREA_ECO2', 'Bosque húmedo', ''),
(44, 'AREA_ECO3', 'Bosque seco', ''),
(45, 'AREA_ECO4', 'Páramo', ''),
(46, 'AREA_ECO5', 'Marinos', ''),
(47, 'AREA_ECO6', 'Sabana', ''),
(48, 'AREA_ECO7', 'Manglar', ''),
(49, 'PM1', 'Protocolo o plan de aprovechamiento para productos silvestres maderables y no maderables', ''),
(50, 'PM2', 'Estudio de capacidad de carga para ecoturismo', ''),
(51, 'PM3', 'Plan de manejo ambiental', ''),
(52, 'PM4', 'Otro documento', ''),
(53, 'INVOLUCRA1', 'Como socios', ''),
(54, 'INVOLUCRA2', 'Como empleados directos', ''),
(55, 'INVOLUCRA3', 'Como empleados indirectos', ''),
(57, 'ACTIVIDAD_COMU1', 'Capacitación', ''),
(58, 'ACTIVIDAD_COMU2', 'Asistencia técnica', ''),
(59, 'ACTIVIDAD_COMU3', 'Recreación', ''),
(60, 'ACTIVIDAD_COMU4', 'Salud', ''),
(61, 'PR1', 'Capacitación', ''),
(62, 'PR2', 'Asistencia técnica', ''),
(63, 'PR3', 'Recreación', ''),
(64, 'PR4', 'Proyectos productivos', ''),
(65, 'PR5', 'Salud', ''),
(66, 'CE1', 'Certificación orgánica', ''),
(67, 'CE2', 'Comercio justo', ''),
(68, 'CE3', 'Análisis de y puntos Críticos de control (APPCC)', ''),
(69, 'CE4', 'Buenas practicas de manufactura (BPM)', ''),
(70, 'CE5', 'Buenas practicas agricolas (BPA)', ''),
(71, 'CE6', 'Buenas practicas pecuarias', ''),
(72, 'CE7', 'Rainforest Alliance', ''),
(73, 'CUMPLIMIENTO_LEGAL1', '¿La organización incumple con la legislación ambiental nacional aplicable?\r\nVer los resultados obtenidos en el formato de información AS en el numeral 2 de legislación ambiental colombiana.', '0.0'),
(74, 'CONDICION_LABORAL1', '¿La organización contrata menores de edad? Si es así,  ¿Sus actividades involucran las peores formas de trabajo infantil y las actividades peligrosas y condiciones de trabajo nocivas para la salud e integridad física o psicológica?', '0.1'),
(75, 'CONDICION_LABORAL2', '¿La organización genera algún tipo de trabajo forzado o bajo régimen de prisión?', '0.2'),
(76, 'CONDICION_LABORAL3', '¿La organización promueve o implementa prácticas o políticas restrictivas o discriminatorias?', '0.3'),
(77, 'CONDICION_LABORAL4', '¿El bien o servicio vulnera los derechos humanos?', '0.4'),
(78, 'IMPACTO_AMBIENTAL1', '¿La organización ha introducido o utiliza especies exóticas invasoras? Si es así,  ¿Cuenta con un adecuado plan de manejo ambiental? Ejm especies exóticas de zoocria', '0.5'),
(79, 'IMPACTO_AMBIENTAL2', '¿La organización utiliza especies listadas bajo CITES? Si es así, ¿Contada con autorización de la Autoridad Ambiental?', '0.6'),
(80, 'IMPACTO_AMBIENTAL3', '¿La organización vulnera la conservación y preservación de los servicios ecosistemicos en el área de influencia directa?, ¿Cómo Contribuye?', '0.7'),
(81, 'IMPACTO_AMBIENTAL4', '¿La organización fomenta y desarrolla su actividad productiva bajo la destrucción directa e indirecta de ecosistemas naturales, y/o genera detrimento sobre cualquier recurso natural?', '0.8'),
(82, 'IMPACTO_AMBIENTAL5', '¿La organización promueve el uso de organismos genéticamente modificados o transgénicos?', '0.9'),
(83, 'IMPACTO_SOCIAL1', '¿La organización vulnera los derechos de las comunidades indígenas, afrocolombianas u otras comunidades tradicionales al desarrollar sus actividades productivas en el territorios?', '0.10'),
(84, 'IMPACTO_SOCIAL2', '¿La organización tiene conflictos sobre la tenencia de la tierra y fomenta el desplazamiento forzado?', '0.11'),
(85, 'MATERIAL_PELIGROSO1', '¿La producción del bien o servicio utiliza materiales o sustancias de alta toxicidad para el ambiente o/y salud humana? Ej.. Mercurio, Arsénico, Agroquímicos (etiqueta roja y amarilla), entre otros.', '0.12'),
(86, 'VIABILIDAD_ECONOMICA1', '¿La organización cuenta con estados financiaros, contabilidad o registro de ingreso y egresos?', '1.1'),
(87, 'VIABILIDAD_ECONOMICA2', '¿El bien o servicio tiene potencial comercial y cuenta con estrategias de mercadeo que garanticen su sostenibilidad en el mercado (demanda del producto)?', '1.2'),
(88, 'VIABILIDAD_ECONOMICA3', '¿El bien o servicio cuenta con un plan estratégico que incluya; misión, visión metas y estrategias, equipo de trabajo, plan de negocios, información, alianzas estratégicas y publicidad? ', '1.3'),
(89, 'VIABILIDAD_ECONOMICA5', '¿El precio del producto considera costos de transporte y logística, y la mano de obra familiar asociada al desarrollo del bien o servicio?', '1.5'),
(90, 'CONTRIBUCION_CONSERVACION1', '¿El bien o servicio evita el uso de monocultivos?', '1.6'),
(91, 'CONTRIBUCION_CONSERVACION2', '¿La organización implementa acciones de conservación de los ecosistemas naturales existentes?', '1.7'),
(92, 'CONTRIBUCION_CONSERVACION3', '¿El bien o servicio mantiene la biodiversidad nativa y mejora las condiciones de los recursos naturales existentes?', '1.8'),
(93, 'CONTRIBUCION_CONSERVACION4', '¿La organización  tiene acciones para la disminución de la contaminación? ¿Cuáles?', '1.9'),
(94, 'CONTRIBUCION_CONSERVACION5', '¿El bien o servicio contribuye a la disminución  de la presión de los recursos naturales? ¿Cómo?', '1.10'),
(95, 'CONTRIBUCION_CONSERVACION6', '¿El bien o servicio mejora las condiciones de los recursos naturales? ¿Cómo?', '1.11'),
(96, 'CONTRIBUCION_CONSERVACION7', '¿El bien o servicio implementa acciones que permiten la reducción de emisiones de gases de efecto invernadero-GEI? ¿Cómo?', '1.12'),
(97, 'CONTRIBUCION_CONSERVACION8', '¿El bien o servicio involucra fuentes de energía alternativa o tecnologías más limpias? ¿Cuáles?', '1.13'),
(98, 'CICLO_VIDA1', '¿Los impactos de sus actividades sobre el medio ambiente, la comunidad y los trabajadores en las principales etapas del sistema productivo están edificados?', '1.14'),
(99, 'CICLO_VIDA2', '¿La organización implementa acciones de prevención ó mitigación de los  impactos generados en su sistema productivo o ciclo de vida del producto? ¿Cuáles?', '1.15'),
(100, 'CICLO_VIDA3', '¿El bien o servicio considera criterios ambientales en la compra productos o insumos necesarios para su proceso de producción o incluye autoabastecimiento con criterios ambientales?', '1.16'),
(101, 'CICLO_VIDA4', '¿La organización realiza entrenamiento y capacitaciones a sus empleados con énfasis en el desarrollo sostenible en su sistema productivo  o ciclo de vida del bien o servicio', '1.17'),
(102, 'CICLO_VIDA5', '¿El bien o servicio promueve acciones para la innovación, la investigación y el desarrollo de valor agregado al bien o servicio? ¿Cuáles?', '1.18'),
(103, 'VIDA_UTIL1', '¿Se involucran procesos que extiendan la vida útil y/o mejoren la calidad del bien o servicio?', '1.19'),
(104, 'VIDA_UTIL2', '¿Se realizan acciones que permitan que la vida útil del producto sea superior al promedio de los bienes o servicios similares?', '1.20'),
(105, 'VIDA_UTIL3', '¿El bien o servicio cuenta con buenas prácticas de higiene y sanidad?', '1.21'),
(106, 'SUSTITUCION_MATERIALES1', '¿En el producción de bien o servicio se  previene o mitiga el uso de sustancias que afectan el ambiente y/o la salud humana y se cuenta con un registro de sustitución de sustancias, hojas de seguridad de productos utilizados o análisis de laboratorio?', '1.22'),
(107, 'MATERIALES_RECICLADOS1', '¿La organización cuenta con un manejo integral de residuos? Por favor describir.', '1.23'),
(108, 'MATERIALES_RECICLADOS2', '¿Se utilizan materiales reciclados en la fabricación del bien o servicio? ¿Cuales?', '1.24'),
(109, 'MATERIALES_RECICLADOS3', '¿Los empaques, envases o empaques del bien incluye materiales recuperables, reciclables, reutilizables o que se puedan incorporar en un proceso productivo? ¿Cuales?', '1.25'),
(110, 'MATERIALES_RECICLADOS4', '¿El bien o servicio cuenta con un plan de acción que permita el cambio de materiales no renovables por renovables o reciclados?', '1.26'),
(111, 'SOSTENIBLE_RECURSO1', '¿La organización lleva un registro de consumo mensual de energía y realiza acciones para su ahorro y uso eficiente? ¿Cuales?', '1.27'),
(112, 'SOSTENIBLE_RECURSO2', '¿La organización lleva un registro de consumo mensual de agua y realiza acciones para su ahorro y uso eficiente? ¿Cuales?', '1.28'),
(113, 'SOSTENIBLE_RECURSO3', '¿Las principales fuentes de contaminación atmosférica, auditiva, olores y visual están identificadas en la zona directa de la organización? ¿Cuáles? ', '1.29'),
(114, 'SOSTENIBLE_RECURSO4', '¿Las principales fuentes de contaminación atmosférica, auditiva, olores y visual están identificadas en la zona indirecta de la organización? ¿Cuáles? ', '1.30'),
(115, 'SOSTENIBLE_RECURSO5', '¿La organización disminuye el consumo de recursos renovables y no renovales? ¿Cómo?', '1.31'),
(116, 'SOSTENIBLE_RECURSO6', '¿El bien o servicio implica acciones extractivas sobre los recursos naturales? Si es así ¿Se cuenta con un programa de manejo ambiental?', '1.32'),
(117, 'RESPO_SOCIAL_EMPRESA1', '¿La organización cuenta con programas de gestión social, de salud y seguridad industrial corporativos? ¿Cuales?', '1.33'),
(118, 'RESPO_SOCIAL_EMPRESA2', '¿La organización implementa prácticas al interior de la empresa para disminuir riesgos asociados a desastres naturales?', '1.34'),
(119, 'RESPO_SOCIAL_EMPRESA3', '¿La organización mejora la calidad de vida de sus empleados (vivienda, educación, cultura, recreación y deporte)? ¿Cómo?', '1.35'),
(120, 'RESPO_SOCIAL_VALOR1', '¿La organización informa sobre las particularidades de lo(s) proceso(s) de producción y/o comercialización, y resalta su aporte en la creación de valor y buenas prácticas sostenibles?', '1.36'),
(121, 'RESPO_SOCIAL_VALOR2', '¿La organización tiene contratos, alianzas o convenios con empresas de economía social, MIPYMES y/o promueve estrategias de encadenamiento? ¿Cuáles?', '1.37'),
(122, 'RESPO_SOCIAL_VALOR3', '¿La organización promueve la devolución de empaques, envases y embalajes? ', '1.38'),
(123, 'RESPO_SOCIAL_EXTERIOR1', '¿La organización apoya la generación de empleo local?', '1.39'),
(124, 'RESPO_SOCIAL_EXTERIOR2', '¿La organización tiene programas y/o apoya fundaciones u organizaciones de inversión social y desarrollo comunitario?', '1.40'),
(125, 'RESPO_SOCIAL_EXTERIOR3', '¿La organización sensibiliza a sus consumidores en ser responsable y  sostenibles a la hora de adquirir sus productos? ', '1.41'),
(126, 'RESPO_SOCIAL_EXTERIOR4', '¿La organización respeta las áreas y actividades de importancia social, cultural, biológica, ambiental y religiosa para la comunidad? ', '1.42'),
(127, 'RESPO_SOCIAL_EXTERIOR5', '¿La organización tiene mecanismo de consulta a las comunidades aledañas y clientes, y da respuesta a las quejas o reclamos de las mismas?', '1.43'),
(128, 'RESPO_SOCIAL_EXTERIOR6', '¿La organización protege el conocimiento Ancestral o tradicional y lo salvaguarda?', '1.44'),
(129, 'COMUNICACION_ATRIBUTOS1', '¿Se comunican los atributos ambientales y sociales del bien o servicio a los clientes y el público en general?', '1.45'),
(130, 'COMUNICACION_ATRIBUTOS2', '¿La organización involucra actividades de educación y cultura ambiental?', '1.46'),
(133, 'ESQUEMAS_RECONOCIMIENTOS1', '¿ El bien o servicio tiene ecoetiquetas, cartas de reconocimiento, registros de auditorias, sellos etc.? ¿Cuáles?', '2.1'),
(134, 'ESQUEMAS_RECONOCIMIENTOS2', '¿ La organización mide su huella de carbono, regulación hídrica o servicios ecosistemicos? ¿Cuál(es)?', '2.2'),
(135, 'RESPON_SOCIAL_ADICCIONAL1', '¿La organización otorga condiciones sociales y pago de salarios mejores a las exigidas por la legislación nacional vigente?', '2.3'),
(136, 'RESPON_SOCIAL_ADICCIONAL2', '¿La organización contrata personal en estado de vulnerabilidad?', '2.4'),
(137, 'VIABILIDAD_ECONOMICA4', '¿Las ventas del bien o servicio son suficientes para hacerle frente a las necesidades financieras (gastos, remuneración de sus empleados, otros)?', '1.4');

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
(1, 1, '', 1, '', ''),
(2, 2, '', 1, '', ''),
(3, 4, '', 1, '', '');

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
(1, 1, '', '', ''),
(2, 2, 'Buenas practicas de manufactura', '70 mt2', 'Buen uso de los residuos generados en la actividad'),
(3, 4, '', '', '');

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
(1, 1, '', ''),
(2, 2, 'Predio Urbano', '70 mt2'),
(3, 4, '', '');

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
(1, 1, '', 2, ''),
(2, 2, 'Registro Sanitario', 2, 'Pendiente por tramitar, se están realizando las ad'),
(3, 4, '', 2, '');

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
(1, 1, '', '', 1),
(2, 2, '', '', 1),
(3, 4, '', '', 1);

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
(1, 1, ''),
(2, 2, '                  '),
(3, 4, '                  ');

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
(1, 1, '', ''),
(2, 2, '', ''),
(3, 4, '', '');

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
(1, 1, '', ''),
(2, 2, '', ''),
(3, 4, '', '');

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
(1, 1, 22, 2, 2, '', ''),
(2, 1, 23, 2, 2, '', ''),
(3, 1, 24, 2, 2, '', ''),
(4, 1, 25, 2, 2, '', ''),
(5, 1, 26, 2, 2, '', ''),
(6, 2, 22, 2, 2, '', ''),
(7, 2, 23, 2, 2, '', ''),
(8, 2, 24, 2, 2, '', ''),
(9, 2, 25, 2, 2, '', ''),
(10, 2, 26, 2, 2, '', ''),
(11, 4, 22, 2, 2, '', ''),
(12, 4, 23, 2, 2, '', ''),
(13, 4, 24, 2, 2, '', ''),
(14, 4, 25, 2, 2, '', ''),
(15, 4, 26, 2, 2, '', '');

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
(17, '1235464', 'stiven', '', 'Morales', 'jj', 'dasd@hotm.copm', '3201646', '67125', 'PABLO SEXTO', 1, '', 1, ''),
(25, '11795555', 'Yovanny', '', 'Rodríguez', 'Córdoba', 'yrodriguez@codechoco.gov.co', '3117764798', '6710711', 'Cra 1 N° 22-96', 3, '', 1, ''),
(30, '1077467646', 'steffany ', 'johana', 'florez', 'murillo', 'steffany82010@hotmail.es', '3136339205', '', 'alfonso lopez ', 2, '', 1, ''),
(31, '4799040', 'GREGORIO RENTERIA MOSQUERA', '', '', '', 'grerentcarbon@gmail.com', '3202902088', '6711879', 'Barrio  Cesar Conto', 4, '', 1, ''),
(32, '11795555', 'Yovanny', '', 'Rodríguez', 'Córdoba', 'yrodriguez@codechoco.gov.co', '3117764798', '6710711', 'Cra 1 N° 22-96', 2, '', 1, ''),
(33, '54250989', 'Betty Amparo Moreno Moreno', '', '', '', 'anguely35@gmail.com', '3137256477', '3137256477', 'Cra 22 # 18 - 97', 4, '', 1, ''),
(35, '00000000', 'no', '', '', '', 'no@sdsa.com', '', '', '', 4, '', 1, ''),
(36, '12345', 'Luisa', 'Fernanda', 'Niño', 'Ranchero', 'lfnino@minambiente.gov.co', '3176227136', '3176227136', 'Ministerio de Ambiente', 2, '', 1, ''),
(37, '100000000000', 'LUISA NIÑO', '', '', '', 'LFNINO@MINAMBIENTE.GOV.CO', '310000000', '123456', 'CRA 32 # 8 - 12', 4, '', 1, '');

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
(1, 1, 49, 2, 2, '', '', 'no'),
(2, 1, 50, 2, 2, '', '', 'no'),
(3, 1, 51, 2, 2, '', '', 'no'),
(4, 1, 52, 2, 2, '', '', 'no'),
(5, 2, 49, 2, 2, '', '', 'no'),
(6, 2, 50, 2, 2, '', '', 'no'),
(7, 2, 51, 2, 2, '', '', 'no'),
(8, 2, 52, 2, 2, '', '', 'no'),
(9, 4, 49, 2, 2, '', '', 'no'),
(10, 4, 50, 1, 2, '', '', 'si'),
(11, 4, 51, 1, 1, '', '', 'si'),
(12, 4, 52, 2, 2, '', '', 'no');

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
(1, 1, 73, 'bnb', ' nj', 'ff', '', '', '', '', '', '', '', 'x', '', '', '', '', ''),
(2, 1, 86, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 1, 89, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 1, 137, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 1, 90, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 1, 92, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 1, 93, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 1, 94, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 1, 96, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 1, 97, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 1, 98, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 1, 100, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 1, 102, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 1, 103, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 1, 105, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 1, 106, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 1, 108, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 1, 111, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 1, 112, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 1, 116, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 1, 118, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 1, 120, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 1, 123, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 1, 126, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 1, 128, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 1, 129, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 1, 133, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 1, 135, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 1, 136, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 2, 86, '\"Se requiere poder ofrecer a la empresaria un acompañamiento en los temas administrativos y contables, de manera continua, dado que las intervenciones puntuales y/o autodidactas que ha tenido (por ejemplo con DPS), no funcionan dado que ella está practicamente sola en estos temas, pues su tiempo se lo debe dedicar a la producción.\r\nA este respecto se propone hacer un acercamiento con la UTCH, para ver la posibilidad de esta institución de establecer un grupo de pasantes que conformen una especie de \"\"consultorio administrativo, contable y financiero para emprendedores de negocios verdes\"\". De tal manera que se pueda realmente tener una continuidad para el funcionamiento de estás áreas de vital importancia.\"					\r\nSe requiere poder ofrecer a la empresaria un acompañamiento en los temas administrativos y contables, de manera continua, dado que las intervenciones puntuales y/o autodidactas que ha tenido (por ejemplo con DPS), no funcionan dado que ella está practicamente sola en estos temas, pues su tiempo se lo debe dedicar a la producción.\r\nA este respecto se propone hacer un acercamiento con la UTCH, para ver la posibilidad de esta institución de establecer un grupo de pasantes que conformen una especie de \"consultorio administrativo, contable y financiero para emprendedores de negocios verdes\". De tal manera que se pueda realmente tener una continuidad para el funcionamiento de estás áreas de vital importancia.', 'UTCH\r\nEmpresaria', 'Llevar los registros contables básicos para determinar la viabilidad real del negocio.', '', '', '', '', '', '', '', '', '', '', '', '', 'Se plantea de manera permanente dado que está todo por ser construido y organizado, y si no se logra un acompañamiento hombro a hombro, va a ser muy dificil que la empresaria lo logre mantener. La idea es ayudarle mientras el negocio crece (aumentando capacidad de producción y llegando a nuevos mercadoss) y ella puede estar en capacidad de pagar un apoyo administrativo y contable. '),
(31, 2, 88, 'Documentar los diferentes perfiles de clientes que se manejan actualmente, de tal manera que se puedan definir estrategias de fidelización de clientes y se visibilice la oportunidad de acceder a nuevos mercados.', 'UTCH\r\nSENA\r\nCÁMARA DE COMERCIO', 'Entender cada perfil de cliente actual y potencial.', '', '', '', '', '', '', '', '', '', '', '', '', 'En cuatro meses es posible hacer la perfilación y diseñar estrategias de fidelización y llegada a nuevos mercados.'),
(32, 2, 89, 'Potenciar el programa que se viene adelantando desde el DPS para el tema de hábitos empresariales, complementando con apoyo en la definición con claridad del modelo de negocio, y posterior elaboración del plan de negocio.', 'UTCH\r\nSENA\r\nCÁMARA DE COMERCIO\r\nEmpresaria', 'Tener un modelo de negocio definido y un plan de negocio.', '', '', '', '', '', '', '', '', '', '', '', '', 'Se estima que en dos meses de defina el modelo de negocio de manera participativa con la empresaria y sus colaboradoras. Posteriormente iniciar la construcción de un plan de negocio.'),
(33, 2, 137, 'En la medida en que se tenga una información contable veraz, se podra realizar la interpretación de los mismos y un análisis financiero, que permita definir si probablemente se pueden ajustar algunos costos y gastos, de tal manera que se logre hacer más rentable la operación del negocio.', 'UTCH\r\nSENA\r\nCÁMARA DE COMERCIO', 'Hacer más rentable el negocio.', '', '', '', '', '', '', '', '', '', '', '', '', 'El análisis financiero y los ajustes que requiera el negocio solo se podrán hacer en la medida en que se avance en los registros contables de manera confiable, y de ahí en adelante se debe realizar los análisis de los diferentes indicadores de manera periodica.'),
(34, 2, 91, 'Es muy importante hacer un anáiisis del estado de los cocoteros actualmente en el departamento con un referente en el país, estudiar las variedades, y proyectar un posible proyecto de reforestación de coco.\r\n\r\nDe otra parte se debe realizar la trazabilidad frente al origen de los cocos que actualmente se compran en Medellín.', 'UTCH\r\nCODECHOCO', 'Conocer la posibilidad y el plazo real de poder contar con cocos en el departamento.\r\n\r\nSaber el origen real de los cocos que actualmente se utilizan en la producción.', '', '', '', '', '', '', '', '', '', '', '', '', 'Hay que con la universidad revisar posibles investigaciones ya realizadas en ese sentido, y determinar otros aspectos importantes a ser revisados que permitan soportar la viabilidad de un posible proyecto de reforestación de coco.'),
(35, 2, 93, 'Es muy importante hacer un anáiisis del estado de los cocoteros actualmente en el departamento con un referente en el país, estudiar las variedades, y proyectar un posible proyecto de reforestación de coco.\r\n\r\nDe otra parte se debe realizar la trazabilidad frente al origen de los cocos que actualmente se compran en Medellín.', 'UTCH\r\nCODECHOCO', 'Conocer la posibilidad y el plazo real de poder contar con cocos en el departamento.\r\n\r\nSaber el origen real de los cocos que actualmente se utilizan en la producción.', '', '', '', '', '', '', '', '', '', '', '', '', 'Hay que con la universidad revisar posibles investigaciones ya realizadas en ese sentido, y determinar otros aspectos importantes a ser revisados que permitan soportar la viabilidad de un posible proyecto de reforestación de coco.'),
(36, 2, 94, 'Visitar y documentar los cultivos o áreas de recolección de los proveedores actuales de los frutos nativos, resaltando sus buenas prácticas ambientales y sociales, y como Bocaditos Doña Betty aporta a esos desarrollos.', 'UTCH\r\nCODECHOCO', 'Resaltar el origen de la materia prima de frutos nativos que actualmente surten a la empresaria.', '', '', '', '', '', '', '', '', '', '', '', '', 'Se trata de tener mejor documentado el impacto ambiental y social positivo con que cuenta la empresaria.'),
(37, 2, 98, 'Se propone esquematizar todo el sistema productivo, de tal manera que se facilite identificar los posibles impactos o afectaciones que se generen o que se puedan generar en cada uno de los pasos.\r\nUna vez identificados se podrán establecer acciones de prevención o mitigación de los mismos.', 'UTCH\r\nCODECHOCO\r\nLa empresaria.', 'Documentar el proceso productivo y los respectivos impactos y medidas a tomar.', '', '', '', '', '', '', '', '', '', '', '', '', 'Se trata de tener documentado el proceso productivo, con los impactos que se pueden genrar en cada paso, trabajo que se debe hacer participativamente con la empresaria. Las acciones a implementar para prevenir o mitigar se establecerían teniendo en cuenta las condiciones financieras del emprendimiento.'),
(38, 2, 99, 'Se propone esquematizar todo el sistema productivo, de tal manera que se facilite identificar los posibles impactos o afectaciones que se generen o que se puedan generar en cada uno de los pasos.\r\nUna vez identificados se podrán establecer acciones de prevención o mitigación de los mismos.', 'UTCH\r\nCODECHOCO\r\nLa empresaria.', 'Documentar el proceso productivo y los respectivos impactos y medidas a toma', '', '', '', '', '', '', '', '', '', '', '', '', 'Se trata de tener documentado el proceso productivo, con los impactos que se pueden genrar en cada paso, trabajo que se debe hacer participativamente con la empresaria. Las acciones a implementar para prevenir o mitigar se establecerían teniendo en cuenta las condiciones financieras del emprendimiento.'),
(39, 2, 100, 'Se trata de tener documentado el proceso productivo, con los impactos que se pueden genrar en cada paso, trabajo que se debe hacer participativamente con la empresaria. Las acciones a implementar para prevenir o mitigar se establecerían teniendo en cuenta las condiciones financieras del emprendimiento.', 'UTCH\r\nCODECHOCO\r\nLa empresaria.', 'Además de lo planteado en el punto 1,6 y una vez se tenga mayor claridad en los costos de producción poder contar con un empaque mucho más amigable con el medio ambiente.', '', '', '', '', '', '', '', '', '', '', '', '', 'Adicional a lo planteado en el punto 1,6, se trata de explorar nuevos empaques que no sean plásticos, análizar su impacto en los costos, y ver la posibilidad de armar una red con otros emprendedores que usan empaques similares, para por volumen hacerlo viable en costos.'),
(40, 2, 101, 'Diseñar un breve programa de capacitación para los empresarios de negocios verdes y sus colaboradores, en las diferentes dimensiones y componentes del desarrollo sostenible. No solo conceptual, sino también como desde su negocio verde está haciendo un aporte a los objetivos de Desarrollo sostenible del mundo.', 'UTCH\r\nINVIMA', 'Establecer la mayor cantidad de días como vida útil de los diferentes productos, teniendo encuenta que uno de sus atributos es ser natural.', '', '', '', '', '', '', '', '', '', '', '', '', 'Se requiere un tiempo de análisis teniendo en cuenta los ingredientes involucrados en el proceso.'),
(41, 2, 102, 'Revisar durante las adecuaciones realizadas, como minimizar el impacto de las mismas sobre el proceso productivo.', 'UTCH\r\nCODECHOCO\r\nLa empresaria.', 'Revisión de las adecuaciones a hacerse y la forma de implementarlas sin afectar el proceso productivo y la higiene que se debe mantener en la producción de alimentos.', '', '', '', '', '', '', '', '', '', '', '', '', 'Se trata de elaborar un protocolo temporal mientras las adecuaciones de las cuales está siendo objeto el negocio, y asimismo, sentar las bases para el protocolo definitivo de higiene y manipulación de alimentos durante el proceso.'),
(42, 2, 103, 'Precisar la manera en que se determina las fechas de vencimiento de cada uno de sus productos y sus diferentes sabores.', 'UTCH\r\nINVIMA', 'Establecer la mayor cantidad de días como vida útil de los diferentes productos, teniendo encuenta que uno de sus atributos es ser natural.', '', '', '', '', '', '', '', '', '', '', '', '', 'Se requiere un tiempo de análisis teniendo en cuenta los ingredientes involucrados en el proceso.'),
(43, 2, 104, 'Precisar la manera en que se determina las fechas de vencimiento de cada uno de sus productos y sus diferentes sabores.', 'UTCH\r\nCODECHOCO\r\nLa empresaria.', 'Revisión de las adecuaciones a hacerse y la forma de implementarlas sin afectar el proceso productivo y la higiene que se debe mantener en la producción de alimentos.', '', '', '', '', '', '', '', '', '', '', '', '', 'Se trata de elaborar un protocolo temporal mientras las adecuaciones de las cuales está siendo objeto el negocio, y asimismo, sentar las bases para el protocolo definitivo de higiene y manipulación de alimentos durante el proceso.'),
(44, 2, 107, 'Ver lo propuesto en el punto 1,9', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 2, 110, 'Se debe explorar la posibilidad de cambiar el empaque por otros que utilicen materiales renovables y más amigables con el medio ambiente.', 'UTCH\r\nBIOINNOVA\r\nCODECHOCÓ\r\nLa empresaria.', 'Tener un empaque para sus productos más amigables con el medio ambiente.', '', '', '', '', '', '', '', '', '', '', '', '', 'Evaluar posibles materiales y tipos de empaque, se requiere para ello tener clara la estructura de costo de la operación del negocio, así como evaluar la posibilidad de establecer redes con otros emprendedores del departamento que requieran empaques similares, para reducir costos por volumen, dado que generalmente este es uno de los aspectos que frena hacer el cambio del plástico.'),
(46, 2, 111, 'Se sugiere llevar registros mensuales de consumo de luz, para poder establecer si hay nuevas acciones que permitan reducir su consumo.', 'La empresa', 'Llevar registros y documentar acciones para minimizar el consumo.', '', '', '', '', '', '', '', '', '', '', '', '', 'Se plantea poderlo realizar de manera habitual, de acuerdo con la llegada del recibo.'),
(47, 2, 113, 'Las acciones a este respecto estan relacionadas con lo ya anotado en los puntos 1,14; 1,15; y 1;21', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 2, 114, 'Las acciones a este respecto estan relacionadas con lo ya anotado en los puntos 1,14; 1,15; y 1;21', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 2, 115, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 2, 117, 'Se plantea documentar los diferentes protocolos de uso de elementos de protección, así como protocolo en caso de una emergencia.\r\nSe recomienda en el plan de negocio que se elabore, tener en cuenta en el análisis financiero contar con el personal contratado con pago de prestaciones sociales y afiliación de ARL', 'UTCH\r\nSENA\r\nLa empresaria', 'Por una parte contar con un protocolo de manejo de emergencias y de uso de elementos de protección, y de otra analizar como crecer el negocio en cuanto a producción y clientes, pero también para mejorar condiciones de contratación de las colaboradoras actuales.', '', '', '', '', '', '', '', '', '', '', '', '', 'Teniendo en cuenta la organización administrativa y financiera que se requiere hacer del negocio, se da un tiempo de seis meses, en la medida en que se avance en otros aspectos.'),
(51, 2, 119, 'Se recomienda en el plan de negocio que se elabore, tener en cuenta en el análisis financiero contar con el personal contratado con pago de prestaciones sociales y afiliación de ARL', 'UTCH\r\nSENA\r\nLa empresaria', 'Analizar como crecer el negocio en cuanto a producción y clientes, pero también para mejorar condiciones de contratación de las colaboradoras actuales.', '', '', '', '', '', '', '', '', '', '', '', '', 'De la mano de otros aspectos administrativos, contables y financieros que se requiere atender, dar un tiempo para analizar en términos organizacionales como se puede hacer contrataciones más indefinidas.'),
(52, 2, 120, 'En la medida que se puedan establecer unos indicadores de impacto al documentar los impactos ambientales y sociales positivos de productores a los cuales compra las diferentes frutas nativas, así como tambien el desarrollo de otro emprendimiento a partir de los residuos orgánicos que se generan, se podrá resaltar estos beneficios como parte de los productos que produce Bocaditos Doña Betty.', 'UTCH\r\nSENA\r\nCODECHOCÓ\r\nLa empresaria', 'Destacar los atributos sociales y ambientales del producto.', '', '', '', '', '', '', '', '', '', '', '', '', 'El avance en este sentido depende de avanzar en otros puntos ya propuestos, por lo que se anota despues de unos meses en que se haya logrado trabajar los otros temas.'),
(53, 2, 122, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 2, 125, 'Ver lo planteado en el punto 1,36 y 1,38', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, 2, 127, 'Pensar en asignar un número telefónico para recibir observaciones, sugerencias y/o quejas por parte de consumidores al por mayor o al por menor.', 'UTCH\r\nLa Empresaria', 'A partir de lo coordinado con la UTCH, ayudar a llevar un control sobre los aspectos que puedan mencionar los consumidores y que resultaran importantes para un proceso de mejoramiento de producto, o de canales de distribución.', '', '', '', '', '', '', '', '', '', '', '', '', 'Se trata de mantener un canal de comunicación efectivo con consumidores al por mayor y al por menor, y ayudar a utilizar esa información en pro de un mejoramiento continuo del negocio.'),
(56, 2, 129, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, 2, 130, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, 2, 133, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, 2, 134, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(60, 2, 135, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(61, 2, 136, 'Ver lo planteado en el punto 1,36  1,38  y 1,41 de tal manera que se puedan tener elementos esenciales en la comunicación de manera adicional al componente cultural y social que tiene este emprendimiento.', 'UTCH\r\nSENA\r\nCODECHOCÓ\r\nLa Empresaria', 'Aprovechar los beneficios sociales, culturales y ambientales del producto para una comunicación más efectiva.', '', '', '', '', '', '', '', '', '', '', '', '', 'Se debe trabajar en la elaboración de indicadores de impacto que puedan favorecer la comunicación.'),
(71, 4, 74, 'hgf', 'kjhgkjh', 'jhgjh', 'x', 'x', 'x', 'x', '', '', '', '', '', '', '', 'x', 'ikutyui'),
(72, 4, 75, 'kuijytgiu', 'iuygi', 'oiu', '', 'x', 'x', 'x', 'x', '', '', '', '', '', '', '', ''),
(73, 4, 76, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(74, 4, 77, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(75, 4, 78, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(76, 4, 80, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(77, 4, 81, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, 4, 83, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(79, 4, 85, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(80, 4, 86, 'fgdghtf', 'hgfdhjg', 'ghfj', 'x', 'x', 'x', 'x', 'x', '', '', '', '', '', '', '', ''),
(81, 4, 88, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
(1, 1, 57, '', 'no'),
(2, 1, 58, '', 'no'),
(3, 1, 59, '', 'no'),
(4, 1, 60, '', 'no'),
(5, 2, 57, '', 'no'),
(6, 2, 58, '', 'no'),
(7, 2, 59, '', 'no'),
(8, 2, 60, '', 'no'),
(9, 4, 57, '', 'si'),
(10, 4, 58, '', 'si'),
(11, 4, 59, '', 'no'),
(12, 4, 60, '', 'no');

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
(3, 1, 'Pacifica');

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
(1, 1, 18, 1, 2, '', 'en el momento se encuentra en proceso de'),
(2, 1, 19, 2, 2, '', ''),
(3, 1, 20, 2, 2, '', ''),
(4, 1, 21, 2, 2, '', ''),
(5, 2, 18, 1, 2, '', 'Se encuentra en proceso dado que se está'),
(6, 2, 19, 2, 2, '', ''),
(7, 2, 20, 2, 2, '', ''),
(8, 2, 21, 2, 2, '', ''),
(9, 4, 18, 1, 2, '', ''),
(10, 4, 19, 1, 1, '', ''),
(11, 4, 20, 1, 2, '', ''),
(12, 4, 21, 2, 1, '23-07-2018', '');

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
(4, '', '', 22),
(5, '', '', 21);

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
(1, 1, 'Crema de aloe vera', 0, 1, 0, 0, 0, 0, 1),
(2, 1, 'Crema de Cacao y Cebo de Cordero', 0, 1, 0, 0, 0, 0, 1),
(3, 1, 'Crema de Cascara de Banano', 0, 1, 0, 0, 0, 0, 1),
(4, 1, 'Extracto de Suelda con Suelda', 0, 1, 0, 0, 0, 0, 1),
(5, 1, 'Extracto de Limoncillo', 0, 1, 0, 0, 0, 0, 1),
(6, 1, 'La Moringa y sus derivados', 0, 1, 0, 0, 0, 0, 1),
(7, 2, 'Cocadas de diferentes sabores', 9720, 2, 3000, 4500, 1500, 43740000, 1),
(8, 2, 'Galletas de diferentes sabores', 0, 1, 0, 0, 0, 0, 1),
(9, 2, 'Enyucados', 0, 1, 0, 0, 0, 0, 1),
(10, 2, 'Cocadas y Galletas de diferentes sabores', 0, 1, 0, 0, 0, 0, 1),
(11, 4, 'CAFÉ', 100, 1, 10000000, 20000000, 10000000, 2000000000, 1),
(12, 4, 'FRUTAS', 300, 1, 100, 200, 100, 60000, 1),
(13, 4, 'cacao', 0, 1, 0, 0, 0, 0, 1);

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
(1, 1, 14, 'Tierras pertenecientes al Padre de la Se', 'si'),
(2, 1, 12, '', 'no'),
(3, 1, 13, '', 'no'),
(4, 1, 15, '', 'no'),
(5, 1, 16, '', 'no'),
(6, 1, 17, '', 'no'),
(7, 2, 12, 'Presentó escritura pública', 'si'),
(8, 2, 13, '', 'no'),
(9, 2, 14, '', 'no'),
(10, 2, 15, '', 'no'),
(11, 2, 16, '', 'no'),
(12, 2, 17, '', 'no'),
(13, 4, 12, '', 'si'),
(14, 4, 13, '', 'no'),
(15, 4, 14, '', 'no'),
(16, 4, 15, '', 'no'),
(17, 4, 16, '', 'no'),
(18, 4, 17, '', 'no');

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
(1, 1, 1, ''),
(2, 1, 2, ''),
(3, 1, 3, ''),
(4, 2, 1, ''),
(5, 2, 2, '1'),
(6, 2, 3, '2'),
(10, 4, 1, '20'),
(11, 4, 2, '5'),
(12, 4, 3, '5');

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
(1, 1, 0, 0),
(2, 2, 0, 0),
(3, 4, 2000060000, 0);

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
(2, 'Lb'),
(3, 'Unidad'),
(4, 'Ltrs'),
(5, 'Otros');

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
(1, 1, 73, 1, 'Hasta el momento no cuenta con registro INVIMA'),
(2, 1, 74, 2, 'revisar los registros contables'),
(3, 1, 75, 2, 'revisar los registros contables'),
(4, 1, 76, 2, 'revisar los registros contables'),
(5, 1, 77, 2, 'revisar los registros contables'),
(6, 1, 78, 2, 'nbn,'),
(7, 1, 79, 2, 'kk'),
(8, 1, 80, 2, 'revisar los registros contables'),
(9, 1, 81, 2, 'revisar los registros contables'),
(10, 1, 82, 2, 'revisar los registros contables'),
(11, 1, 83, 2, 'kkk'),
(12, 1, 84, 2, 'revisar los registros contables'),
(13, 1, 85, 2, 'k'),
(14, 2, 73, 2, 'Se esta en proceso de adecuaciones de la planta física para solicitar el registro INVIMA'),
(15, 2, 74, 2, 'No hay menores de edad vinculados a las actividades productivas de la empresa'),
(16, 2, 75, 2, 'Se respetan las practicas laborales  relacionadas con jornadas laborales, o de otro tipo.'),
(17, 2, 76, 2, 'No se observan practicas discriminatorias o maltrato personal'),
(18, 2, 77, 2, 'Se observan respeto de los derechos humanos'),
(19, 2, 78, 3, ''),
(20, 2, 79, 3, ''),
(21, 2, 80, 2, 'Se fomenta el uso sostenible de los frutos nativos dado que es la materia prima que se adquiere para la fabricación de los productos.'),
(22, 2, 81, 2, 'Promueve el uso sostenible de la biodiversidad, comprando a proveedores que no utilizan agroquímicos'),
(23, 2, 82, 2, 'Se fomenta el uso sostenible de los frutos nativos dado que es la materia prima que se adquiere para la fabricación de los productos.'),
(24, 2, 83, 2, 'El tema de la elaboración de cocadas y enyucados y demás productos hacen parte de un conocimiento propio de la región.'),
(25, 2, 84, 2, 'Tiene una escritura del terreno donde opera.'),
(26, 2, 85, 2, 'Los proveedores de frutas sobre las cuales se elaboran los productos lo hacen de manera orgánica, sin agroquímicos.'),
(27, 4, 73, 2, ''),
(28, 4, 74, 1, ''),
(29, 4, 75, 1, ''),
(30, 4, 76, 1, ''),
(31, 4, 77, 1, ''),
(32, 4, 78, 1, ''),
(33, 4, 79, 2, ''),
(34, 4, 80, 1, ''),
(35, 4, 81, 1, ''),
(36, 4, 82, 2, ''),
(37, 4, 83, 1, ''),
(38, 4, 84, 2, ''),
(39, 4, 85, 1, '');

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
(1, 1, 86, 2, 'm,', ''),
(2, 1, 87, 3, 'jjj', ''),
(3, 1, 88, 4, 'mm', ''),
(4, 1, 89, 1, 'mmm', ''),
(5, 1, 137, 1, 'nnn', ''),
(6, 1, 90, 1, 'jj', ''),
(7, 1, 91, 3, 'jj', ''),
(8, 1, 92, 2, 'pkk', ''),
(9, 1, 93, 2, 'kk', ''),
(10, 1, 94, 1, 'mjjj', ''),
(11, 1, 95, 3, 'nj', ''),
(12, 1, 96, 1, 'mjjjj', ''),
(13, 1, 97, 1, 'bnnh', ''),
(14, 1, 98, 2, 'jj', ''),
(15, 1, 99, 3, 'jj', ''),
(16, 1, 100, 1, 'kkl', ''),
(17, 1, 101, 3, 'mjn,j', ''),
(18, 1, 102, 2, 'hjjh', ''),
(19, 1, 103, 1, 'nggh', ''),
(20, 1, 104, 4, 'nb', ''),
(21, 1, 105, 2, 'n nbm', ''),
(22, 1, 106, 2, 'njjnbh', ''),
(23, 1, 107, 3, 'bnbmb m', ''),
(24, 1, 108, 2, 'nbm n', ''),
(25, 1, 109, 4, 'ttgg', ''),
(26, 1, 110, 3, 'nhgjh', ''),
(27, 1, 111, 2, 'mm', ''),
(28, 1, 112, 2, ',,', ''),
(29, 1, 113, 3, 'mm', ''),
(30, 1, 114, 4, 'mm', ''),
(31, 1, 115, 3, ' nmn', ''),
(32, 1, 116, 2, 'nvbvn', ''),
(33, 1, 117, 3, 'bbm', ''),
(34, 1, 118, 2, 'mb', ''),
(35, 1, 119, 4, 'bbh', ''),
(36, 1, 120, 2, 'mm', ''),
(37, 1, 121, 3, 'm', ''),
(38, 1, 122, 4, ' mnm', ''),
(39, 1, 123, 2, 'm,j,', ''),
(40, 1, 124, 3, 'm,n,', ''),
(41, 1, 125, 4, 'jbh', ''),
(42, 1, 126, 2, 'mn,n', ''),
(43, 1, 127, 3, ' m,mn,m', ''),
(44, 1, 128, 1, 'm,n,', ''),
(45, 1, 129, 2, ' nnm', ''),
(46, 1, 130, 3, '  n', ''),
(47, 1, 133, 1, 'jn', ''),
(48, 1, 134, 3, ',mn,', ''),
(49, 1, 135, 2, ' mm', ''),
(50, 1, 136, 1, 'm,m', ''),
(51, 2, 86, 2, 'la organización lleva la parte contable en libros pero se de organizar y actualizar; Ver intentos de registros a partir de capacitaciones recibidas (Ver carpeta 1,1)', ''),
(52, 2, 87, 3, 'Se tienen identificados los clientes, teniendo en cuenta que comercializan los productos en el aeropuerto, en el mercames (supermercado regional) en la paila de la abuela, panadería el trigal, y las galletas que acompañan los helados (helados que se venden a nivel local). Si bien no tiene claros los registros de su capacidad de producción sabe que en un día puede elaborar entre 30 y 40 cocadas de sabores diferentes; esto le permite poder comprometerse y saber los compromisos que admite a nivel comercial.\r\nVer fotos de elaboración de galletas por pedido\r\n(Ver carpeta 1,2)', ''),
(53, 2, 88, 2, 'Junto con el DPS se le está ayudando a mejorar su modelo y plan de negocio en un programa del que es participe .\r\n\r\nVer fotos de manuales para crear hábitos empresariales del DPS (Ver Carpeta FORMATO DE INFORMACION AS PUNTO 4 y criterio 1,3)', ''),
(54, 2, 89, 2, 'Si bien tiene clientes fijos y pedidos constantes, al no tener registtros de contabilidad no se puede precisar con exactitud esta parte', ''),
(55, 2, 137, 1, 'No tiene  definido con exactitud  que compone el precio que fija a sus productos ', ''),
(56, 2, 90, 3, 'En su mayoría son proveedores locales que utilizan frutos nativos. Sin embargo, en el caso del coco que es materia prima básica  se trae desde Medellin, entonces no se tiene claridad sobre su origen; ya que en el departamento los cocoteros no están funcionando a pesar de que es un cultivo que debería darse allí fácilmente pero no se ha logrado   \r\n\r\nVer foto cocos traídos de Medellín.\r\n(Ver carpeta 1,6   1,10)', ''),
(57, 2, 91, 2, 'De manera indirecta al preferir productos locales nativos que no utilicen ningún agroquímico, se está  ayudando a conservar los ecosistemas naturales existentes. ', ''),
(58, 2, 92, 3, 'De manera indirecta al preferir productos locales nativos que no utilicen ningún agroquímico, se está  ayudando a conservar los ecosistemas naturales existentes. ', ''),
(59, 2, 93, 2, 'El  coco, materia prima básica, se adquiere en Medellín. Se desconoce su origen, si es de importación o no; teniendo en cuenta que en el departamento los cocoteros no se han logrado dar.\r\n\r\nVer foto cocos traídos de Medellín.\r\n(Ver carpeta 1,6   1,10)', ''),
(60, 2, 94, 2, 'El  coco, materia prima básica, se adquiere en Medellín. Se desconoce su origen, si es de importación o no; teniendo en cuenta que en el departamento los cocoteros no se han logrado dar.', ''),
(61, 2, 95, 3, 'Hace uso sostenible de la biodiverisdad al preferir en su mayoría proveedores locales de frutos nativos que no utilizan agroquímicos', ''),
(62, 2, 96, 3, 'Tiene implementado un sistema de hornos a gas\r\nVer fotos hornos\r\n(Ver carpeta 1,12   1,27)\r\n', ''),
(63, 2, 97, 3, 'Los hornos y sistema de cocción está a gas desde hace tres años y en el resto del lugar tiene bombillos ahorradores \r\n\r\nVer bombillos ahorradores\r\n(Ver carpeta 1,13)\r\n(Ver carpeta 1,12   1,27)', ''),
(64, 2, 98, 2, 'Si bien dejo ver que tiene identificados los impactos a lo largo de la entrevista realizada; por una parte no se han documentado y por otra, no hay claridad sobre las acciones que puede tomar al respecto. ', ''),
(65, 2, 99, 2, 'Si bien dejo ver que tiene identificados los impactos a lo largo de la entrevista realizada; por una parte no se han documentado y por otra, no hay claridad sobre las acciones que puede tomar al respecto. ', ''),
(66, 2, 100, 2, 'En cuanto a la proveeduría de frutas nativas, si se hace . Sin embargo, la materia prima más importante básica se trae de Medellín y se desconoce el origen de este producto, se cree que es importado', ''),
(67, 2, 101, 2, 'La dueña es una emprendedora con bastante iniciativa, capacita a  una empleada que tiene constante en como hacer las cocadas, les indica, lo practica con el fin de que ella coja la dinamica', ''),
(68, 2, 102, 2, 'Se ve innovación en cuanto a los sabores nativos que son incluidos en las cocadas. Sin embargo, teniendo en cuenta que es una empresa pequeña donde solo es su dueña con sus dos asistentes se le dificulta por el tiempo que debe dedicarle a su empresa pensar en otro tipo de acciones más innovadoras o de investigación ', ''),
(69, 2, 103, 2, 'Se aclara que en su mayoría las frutas al venir de cultivos sin agroquímicos y a esto se suma que ella en el proceso de elaboración de las cocadas no usa preservativos, la vida util se extiende al máximo teniendo en cuenta que es un producto natural y esto es lo que se quiere vender. Por ejemplo las cocadas de leche tienen una duración de entre 15 y 20 días', ''),
(70, 2, 104, 2, 'Se aclara que en su mayoría las frutas al venir de cultivos sin agroquímicos y a esto se suma que ella en el proceso de elaboración de las cocadas no usa preservativos, la vida util se extiende al máximo teniendo en cuenta que es un producto natural y esto es lo que se quiere vender. Por ejemplo las cocadas de leche tienen una duración de entre 15 y 20 días', ''),
(71, 2, 105, 3, 'La  dueña y sus empleadas han tomado cursos en el SENA para buenas prácticas y manejo de alimentos, sin embargo se encuentra en un proceso de adecuación lo cual le dificulta un poco en este momento \r\nVer construcción vecina y uso de gorro y tapabocas por parte de las empleadas.\r\n(Ver carpeta 1,21)\r\n', ''),
(72, 2, 106, 3, '', ''),
(73, 2, 107, 2, 'Como se mencionó anteriormente, genera gran cantidad de residuos orgánicos en el proceso y aún no tiene solucionado el manejo de estos a pesar de algunas pruebas con preparación de abonos con ayuda de alguien que anteriormente ha recogido estos residuos', ''),
(74, 2, 108, 4, 'Por ser un tema de alimentos', ''),
(75, 2, 109, 4, 'Por ser un tema de alimentos', ''),
(76, 2, 110, 2, 'Acatualmente la empresa esta haciendo cmabios de empaques por uno mas amigable con el medio ambiente y estos sean biodegrables', ''),
(77, 2, 111, 2, 'Hace 3 años renovó su sistema de horno a cocción a gas.\r\n\r\nVer fotos hornos\r\n(Ver carpeta 1,12   1,27)', ''),
(78, 2, 112, 3, 'Toda el agua que consume proviene de aguas lluvias en donde las trata con una pastilla eventualmente, con limpieza de los tanques y el hervido de la misma.', ''),
(79, 2, 113, 2, 'Si bien es consciente de construcciones cercanas en proceso, de que está ubicada en una vía principal por temas como ruído y polvo, esto no hace parte de un documento como tal. Por ende limita la posibilidad de tomar acciones al respecto pues es un típico barrio urbano de la ciudad de Quibdó.', ''),
(80, 2, 114, 2, 'Si bien es consciente de construcciones cercanas en proceso, de que está ubicada en una vía principal por temas como ruído y polvo, esto no hace parte de un documento como tal. Por ende limita la posibilidad de tomar acciones al respecto pues es un típico barrio urbano de la ciudad de Quibdó.\r\nVer foto de construcción vecina\r\n(Ver carpeta 1,30)\r\n', ''),
(81, 2, 115, 2, 'La producción tanto de su proveeduría como dentro de la empresa disminuye el consumo de recursos renovables y no renovables, sin embargo por el tema de los empaques no se ha explorado este tema.\r\n\r\nVer foto del empaque de las cocadas.\r\n(Ver Carpeta 1,26  1,31   1,36   1,38  1,41  1,43)', ''),
(82, 2, 116, 4, '', ''),
(83, 2, 117, 2, 'Sus empleadas se encontraban perfectamente uniformadas de acuerdo a las normas estipuladas para manipulación de alimentos.\r\nBaterias de cocina adecuadas, y empleadas con uso de elementos adecuados.\r\n(Ver carpeta 1,33)', ''),
(84, 2, 118, 4, '', ''),
(85, 2, 119, 2, 'Genera dos empleos locales, que durante la charla con las empleadas si les ha cambiado la vida el hecho de contar con este ingreso casi permanente ', ''),
(86, 2, 120, 2, 'Más allá de la etiqueta que le pone a sus productos, le hace falta resaltar los beneficios sociales y ambientales de su producto. Adicionalmente pasa mucho tiempo sola por lo que no le es posible  compartir  con otros emprendedores.\r\nVer foto de la etiqueta.\r\n(Ver Carpeta 1,26  1,31  1,36   1,38  1,41  1,43)', ''),
(87, 2, 121, 4, '', ''),
(88, 2, 122, 1, 'El envase como se mencionó anteriromente es de plástico, en la etiqueta no se comunica si se debería reciclar, devolver o disponer de él. Sin embargo por ser alimentos no es fácil dadas las condiciones manejar un tema de devolución, preferiblemente de reciclar o como disponer de él al finalizar su uso o cambiar el material.\r\nVer foto de la etiqueta.\r\n(Ver Carpeta 1,26  1,31  1,36  1,38  1,41  1,43)', ''),
(89, 2, 123, 3, 'No solamente tiene dos asistentes locales sino también a nivel de proveeduría genera empleos indirectos locales.', ''),
(90, 2, 124, 4, '', ''),
(91, 2, 125, 1, 'Falta comunicar temas como el manejo o correcta disposición del empaque y de los beneficios sociales y ambientales del producto.\r\nVer foto de la etiqueta.\r\n(Ver Carpeta 1,26  1,31  1,36  1,38  1,41  1,43)', ''),
(92, 2, 126, 3, 'Es una persona muy querida y reconocida por la comunidad por respetar esta clase de temas ', ''),
(93, 2, 127, 2, 'Si bien en la etiqueta aparece un teléfono donde eventualmente le pueden hacer una consulta, queja o reclamo, no está estipulado como un programa. Tampoco maneja un correo electónico que sería otra alternativa para atender estos temas.', ''),
(94, 2, 128, 3, 'Los productos que produce hacen parte de la gastronomía local a nivel de la región pacífico.  ', ''),
(95, 2, 129, 2, 'Aunque en las etiquetas se destaca los sabores, falta comunicar mejor los temas de uso de frutas nativas y los impactos a nivel social y ambiental de la actividad.', ''),
(96, 2, 130, 2, 'Promueve los sabores nativos', ''),
(97, 2, 133, 1, 'Aún no es una empresa para llegar a este nivel', ''),
(98, 2, 134, 1, '', ''),
(99, 2, 135, 1, '', ''),
(100, 2, 136, 1, '', ''),
(101, 4, 86, 2, '', ''),
(102, 4, 87, 1, '', ''),
(103, 4, 88, 2, '', ''),
(104, 4, 89, 1, '', ''),
(105, 4, 137, 1, '', ''),
(106, 4, 90, 1, '', ''),
(107, 4, 91, 1, '', ''),
(108, 4, 92, 1, '', ''),
(109, 4, 93, 1, '', ''),
(110, 4, 94, 1, '', ''),
(111, 4, 95, 1, '', ''),
(112, 4, 96, 1, '', ''),
(113, 4, 97, 1, '', ''),
(114, 4, 98, 1, '', ''),
(115, 4, 99, 1, '', ''),
(116, 4, 100, 2, '', ''),
(117, 4, 101, 1, '', ''),
(118, 4, 102, 1, '', ''),
(119, 4, 103, 1, '', ''),
(120, 4, 104, 1, '', ''),
(121, 4, 105, 1, '', ''),
(122, 4, 106, 1, '', ''),
(123, 4, 107, 1, '', ''),
(124, 4, 108, 1, '', ''),
(125, 4, 109, 1, '', ''),
(126, 4, 110, 1, '', ''),
(127, 4, 111, 3, '', ''),
(128, 4, 112, 2, '', ''),
(129, 4, 113, 1, '', ''),
(130, 4, 114, 1, '', ''),
(131, 4, 115, 1, '', ''),
(132, 4, 116, 1, '', ''),
(133, 4, 117, 3, '', ''),
(134, 4, 118, 3, '', ''),
(135, 4, 119, 3, '', ''),
(136, 4, 120, 3, '', ''),
(137, 4, 121, 3, '', ''),
(138, 4, 122, 3, '', ''),
(139, 4, 123, 3, '', ''),
(140, 4, 124, 3, '', ''),
(141, 4, 125, 3, '', ''),
(142, 4, 126, 3, '', ''),
(143, 4, 127, 3, '', ''),
(144, 4, 128, 3, '', ''),
(145, 4, 129, 3, '', ''),
(146, 4, 130, 3, '', ''),
(147, 4, 133, 3, '', ''),
(148, 4, 134, 3, '', ''),
(149, 4, 135, 3, '', ''),
(150, 4, 136, 3, '', '');

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
(1, 1, '', '', '', ''),
(2, 2, 'Sandra Hurtado (MADS-CFBC),  Nory Blondón (CODECHOCÓ),  Luz Yoleine (CODECHOCÓ)', 'MADS-CODECHOCO', 'ONV -MADS y VEV -CODECHOCO', 'Contratistas'),
(3, 4, '', '', '', '');

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
(1, 1, 30, '2018-06-08 21:16:45', ''),
(2, 2, 32, '2018-06-14 15:52:44', ''),
(3, 4, 36, '2018-08-02 10:42:31', '');

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
  ADD KEY `contenido_id` (`alias_id`);

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
-- Indices de la tabla `partner_page`
--
ALTER TABLE `partner_page`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `actividad_empresa`
--
ALTER TABLE `actividad_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `bienes_servicios`
--
ALTER TABLE `bienes_servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `conservacion`
--
ALTER TABLE `conservacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `costo_insumos`
--
ALTER TABLE `costo_insumos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `costo_mano_obra`
--
ALTER TABLE `costo_mano_obra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cumple_nocumple`
--
ALTER TABLE `cumple_nocumple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `demografia`
--
ALTER TABLE `demografia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `desc_demografia`
--
ALTER TABLE `desc_demografia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ecosistema`
--
ALTER TABLE `ecosistema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `edad`
--
ALTER TABLE `edad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empleado_edad`
--
ALTER TABLE `empleado_edad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `empleado_sexo`
--
ALTER TABLE `empleado_sexo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empresario`
--
ALTER TABLE `empresario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT de la tabla `img_empresa`
--
ALTER TABLE `img_empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `img_page`
--
ALTER TABLE `img_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `involucra`
--
ALTER TABLE `involucra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `licencia`
--
ALTER TABLE `licencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `nivel`
--
ALTER TABLE `nivel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `nivel_educativo`
--
ALTER TABLE `nivel_educativo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `otros_conservacion`
--
ALTER TABLE `otros_conservacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `otros_ecosistema`
--
ALTER TABLE `otros_ecosistema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `otros_legislacion`
--
ALTER TABLE `otros_legislacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `otro_tenencia_tierra`
--
ALTER TABLE `otro_tenencia_tierra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `partner_page`
--
ALTER TABLE `partner_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `plan_manejo`
--
ALTER TABLE `plan_manejo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `plan_mejora`
--
ALTER TABLE `plan_mejora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `recurso`
--
ALTER TABLE `recurso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `socio_empleado_item`
--
ALTER TABLE `socio_empleado_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sost_economica`
--
ALTER TABLE `sost_economica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `total_ventas`
--
ALTER TABLE `total_ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `verificacion_1`
--
ALTER TABLE `verificacion_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `verificacion_2`
--
ALTER TABLE `verificacion_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT de la tabla `verificador`
--
ALTER TABLE `verificador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `verificadorxempresa`
--
ALTER TABLE `verificadorxempresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `archivo_page_ibfk_1` FOREIGN KEY (`alias_id`) REFERENCES `alias` (`id`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
