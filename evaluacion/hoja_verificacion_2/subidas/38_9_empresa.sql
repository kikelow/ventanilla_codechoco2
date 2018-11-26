-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2018 a las 03:07:49
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
-- Base de datos: `codechoc_ventanilla`
--

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

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
