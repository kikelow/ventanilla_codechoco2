-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2018 a las 16:20:46
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
(7, 'Otros');

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
(15, '¿En caso de aplicar, cuenta con la certificación del curso de manipulación de alimentos?', 3),
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
(33, 'Otros requerimientos exigidos por la autoridad ambiental, municipio, gobernación etc.\r\nEjemplo: vedas, restricción de otras actividades y permisos.', 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aspecto`
--
ALTER TABLE `aspecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medio`
--
ALTER TABLE `medio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pregunta_indicativa`
--
ALTER TABLE `pregunta_indicativa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aspecto_id` (`aspecto_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aspecto`
--
ALTER TABLE `aspecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `medio`
--
ALTER TABLE `medio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pregunta_indicativa`
--
ALTER TABLE `pregunta_indicativa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pregunta_indicativa`
--
ALTER TABLE `pregunta_indicativa`
  ADD CONSTRAINT `fk_aspecto` FOREIGN KEY (`aspecto_id`) REFERENCES `aspecto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
