-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2018 a las 17:50:12
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
(130, 'COMUNICACION_ATRIBUTOS2', '¿La organización involucra actividades de educación y cultura ambiental?'),
(133, 'ESQUEMAS_RECONOCIMIENTOS1', '¿ El bien o servicio tiene ecoetiquetas, cartas de reconocimiento, registros de auditorias, sellos etc.? ¿Cuáles?'),
(134, 'ESQUEMAS_RECONOCIMIENTOS2', '¿ La organización mide su huella de carbono, regulación hídrica o servicios ecosistemicos? ¿Cuál(es)?'),
(135, 'RESPON_SOCIAL_ADICCIONAL1', '¿La organización otorga condiciones sociales y pago de salarios mejores a las exigidas por la legislación nacional vigente?'),
(136, 'RESPON_SOCIAL_ADICCIONAL2', '¿La organización contrata personal en estado de vulnerabilidad?'),
(137, 'VIABILIDAD_ECONOMICA5', '¿Las ventas del bien o servicio son suficientes para hacerle frente a las necesidades financieras (gastos, remuneración de sus empleados, otros)?');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD UNIQUE KEY `codigo_2` (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `opciones`
--
ALTER TABLE `opciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
