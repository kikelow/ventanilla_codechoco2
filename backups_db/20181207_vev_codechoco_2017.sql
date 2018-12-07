-- MySQL dump 10.16  Distrib 10.1.30-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: vev_codechoco_2017
-- ------------------------------------------------------
-- Server version	10.1.30-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actividad_empresa`
--

DROP TABLE IF EXISTS `actividad_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actividad_empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `actividad_item_id` int(11) NOT NULL,
  `si_no_actividad_id` int(11) NOT NULL,
  `direccion` text COLLATE utf8_bin NOT NULL,
  `municipio_id` int(11) NOT NULL,
  `tipo_tenencia_id` int(11) NOT NULL,
  `area` varchar(20) COLLATE utf8_bin NOT NULL,
  `pot_si_no_id` int(11) NOT NULL,
  `observacion` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_id` (`empresa_id`),
  KEY `actividad_item_id` (`actividad_item_id`),
  KEY `municipio_id` (`municipio_id`),
  KEY `tipo_tenencia_id` (`tipo_tenencia_id`),
  KEY `pot_si_no_id` (`pot_si_no_id`),
  KEY `si_no_actividad_id` (`si_no_actividad_id`),
  CONSTRAINT `actividad_empresa_ibfk_2` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividad_empresa`
--

LOCK TABLES `actividad_empresa` WRITE;
/*!40000 ALTER TABLE `actividad_empresa` DISABLE KEYS */;
INSERT INTO `actividad_empresa` VALUES (1,9,1,1,'cl575',8,1,'23',1,'adasd'),(2,9,2,1,'adxda',6,3,'43',1,'adadas'),(3,9,3,1,'cll 68',21,4,'34',1,'fgfg'),(6,10,1,2,'',0,0,'',0,''),(7,10,2,2,'',0,0,'',0,''),(8,10,3,2,'',0,0,'',0,'');
/*!40000 ALTER TABLE `actividad_empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `actividad_item`
--

DROP TABLE IF EXISTS `actividad_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actividad_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividad_item`
--

LOCK TABLES `actividad_item` WRITE;
/*!40000 ALTER TABLE `actividad_item` DISABLE KEYS */;
INSERT INTO `actividad_item` VALUES (1,'Producción materia prima'),(2,'Transformación'),(3,'Comercialización');
/*!40000 ALTER TABLE `actividad_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `actividades`
--

DROP TABLE IF EXISTS `actividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actividades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `recurso_id` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_bin NOT NULL,
  `confirmacion` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `recurso_id` (`recurso_id`),
  KEY `opciones_id` (`pregunta_id`),
  KEY `empresa_id` (`info_com_id`),
  CONSTRAINT `actividades_ibfk_2` FOREIGN KEY (`pregunta_id`) REFERENCES `pregunta_indicativa` (`id`),
  CONSTRAINT `actividades_ibfk_3` FOREIGN KEY (`recurso_id`) REFERENCES `recurso` (`id`),
  CONSTRAINT `actividades_ibfk_4` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividades`
--

LOCK TABLES `actividades` WRITE;
/*!40000 ALTER TABLE `actividades` DISABLE KEYS */;
INSERT INTO `actividades` VALUES (1,2,137,2,'','no'),(2,2,138,2,'','no'),(3,2,139,2,'','no'),(4,2,140,2,'','no'),(5,5,137,2,'','no'),(6,5,138,2,'','no'),(7,5,139,2,'','no'),(8,5,140,2,'','no');
/*!40000 ALTER TABLE `actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alias`
--

DROP TABLE IF EXISTS `alias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alias`
--

LOCK TABLES `alias` WRITE;
/*!40000 ALTER TABLE `alias` DISABLE KEYS */;
INSERT INTO `alias` VALUES (1,'Quienes somos'),(2,'Servicios'),(3,'Negocios verdes'),(4,'Noticias'),(5,'Mercados evaluados');
/*!40000 ALTER TABLE `alias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aplica_noaplica`
--

DROP TABLE IF EXISTS `aplica_noaplica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aplica_noaplica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aplica_noaplica`
--

LOCK TABLES `aplica_noaplica` WRITE;
/*!40000 ALTER TABLE `aplica_noaplica` DISABLE KEYS */;
INSERT INTO `aplica_noaplica` VALUES (1,'Aplica'),(2,'No aplica');
/*!40000 ALTER TABLE `aplica_noaplica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `apoyo`
--

DROP TABLE IF EXISTS `apoyo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apoyo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_bin NOT NULL,
  `nombre_entidad` varchar(100) COLLATE utf8_bin NOT NULL,
  `tipo_entidad_id` int(11) NOT NULL,
  `año` year(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_id` (`info_com_id`),
  KEY `orientacion_id` (`tipo_entidad_id`),
  CONSTRAINT `apoyo_ibfk_1` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`),
  CONSTRAINT `apoyo_ibfk_2` FOREIGN KEY (`tipo_entidad_id`) REFERENCES `tipo_entidad` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apoyo`
--

LOCK TABLES `apoyo` WRITE;
/*!40000 ALTER TABLE `apoyo` DISABLE KEYS */;
INSERT INTO `apoyo` VALUES (1,2,'','',1,0000),(2,2,'','',1,0000),(3,2,'','',1,0000),(4,2,'','',1,0000),(5,2,'','',1,0000),(6,2,'','',1,0000),(7,2,'','',1,0000),(8,2,'','',1,0000),(9,2,'','',1,0000),(10,2,'','',1,0000),(11,5,'','',1,0000),(12,5,'','',1,0000),(13,5,'','',1,0000),(14,5,'','',1,0000),(15,5,'','',1,0000),(16,5,'','',1,0000),(17,5,'','',1,0000),(18,5,'','',1,0000),(19,5,'','',1,0000),(20,5,'','',1,0000);
/*!40000 ALTER TABLE `apoyo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `archivo_page`
--

DROP TABLE IF EXISTS `archivo_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `archivo_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(70) COLLATE utf8_bin NOT NULL,
  `ruta` varchar(100) COLLATE utf8_bin NOT NULL,
  `alias_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `alias_id` (`alias_id`),
  CONSTRAINT `archivo_page_ibfk_1` FOREIGN KEY (`alias_id`) REFERENCES `alias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `archivo_page`
--

LOCK TABLES `archivo_page` WRITE;
/*!40000 ALTER TABLE `archivo_page` DISABLE KEYS */;
INSERT INTO `archivo_page` VALUES (3,'plan nacional de negocios verdes','Plan_Nacional_de_Negocios_Verdes.pdf',3),(4,'plan regional de negocios verdes','Plan_Regional_Negocios_Pacifico.pdf',3);
/*!40000 ALTER TABLE `archivo_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `area`
--

DROP TABLE IF EXISTS `area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `area`
--

LOCK TABLES `area` WRITE;
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
INSERT INTO `area` VALUES (1,'No aplica');
/*!40000 ALTER TABLE `area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aspecto`
--

DROP TABLE IF EXISTS `aspecto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aspecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aspecto`
--

LOCK TABLES `aspecto` WRITE;
/*!40000 ALTER TABLE `aspecto` DISABLE KEYS */;
INSERT INTO `aspecto` VALUES (1,'Certificaciones vigentes'),(2,'Requisitos excluyentes'),(3,'Administrativo'),(4,'Ambiental'),(5,'Social'),(6,'Proveedores'),(7,'Otros'),(8,'Viabilidad económica del negocio'),(9,'Impacto ambiental positivo del bien o servicio'),(10,'Enfoque de ciclo de vida del bien o servicio'),(11,'Vida útil'),(12,'Sustitución de sustancias o materiales peligrosos'),(13,'Reciclabilidad de los materiales y/o uso de materiales reciclados'),(14,'Uso eficiente y sostenible de recursos para la producción del bien o servicio'),(15,'Responsabilidad social al interior de la empresa'),(16,'Responsabilidad social y ambiental en la cadena de valor de la empresa'),(17,'Responsabilidad social y ambiental al exterior de la empresa'),(18,'Comunicación de atributos sociales o ambientales asociados al bien o servicio'),(19,'Responsabilidad social al interior de la empresa'),(20,'Esquemas, programas o reconocimientos ambientales o sociales implementados o recibidos'),(21,'Impactos ambientales positivos'),(22,'Buenas practicas'),(23,'Área de conservación'),(24,'Certificaciones'),(25,'Cadena de valor'),(26,'Actividades con comunidades locales'),(27,'Comercialización'),(28,'Turismo');
/*!40000 ALTER TABLE `aspecto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bien_serv_op`
--

DROP TABLE IF EXISTS `bien_serv_op`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bien_serv_op` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bien_serv_op`
--

LOCK TABLES `bien_serv_op` WRITE;
/*!40000 ALTER TABLE `bien_serv_op` DISABLE KEYS */;
INSERT INTO `bien_serv_op` VALUES (1,'Bien'),(2,'Servicio'),(3,'Ambos');
/*!40000 ALTER TABLE `bien_serv_op` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bienes_servicios`
--

DROP TABLE IF EXISTS `bienes_servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bienes_servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_bin NOT NULL,
  `lider` varchar(40) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_id` (`empresa_id`),
  CONSTRAINT `bienes_servicios_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=199 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bienes_servicios`
--

LOCK TABLES `bienes_servicios` WRITE;
/*!40000 ALTER TABLE `bienes_servicios` DISABLE KEYS */;
INSERT INTO `bienes_servicios` VALUES (1,1,'ggggg',''),(2,1,'ll',''),(3,1,'ff',''),(4,1,'dd',''),(5,1,'hhh',''),(6,1,'','madera la too 111'),(31,8,'alguno',''),(32,8,'',''),(33,8,'',''),(34,8,'',''),(35,8,'',''),(36,8,'','pepino'),(37,11,'pera',''),(38,11,'yuca',''),(39,11,'papa',''),(40,11,'',''),(41,11,'',''),(42,11,'','remolacha'),(43,13,'algo',''),(44,13,'prueba',''),(45,13,'',''),(46,13,'',''),(47,13,'',''),(48,13,'','Patacones'),(49,15,'',''),(50,15,'',''),(51,15,'',''),(52,15,'pescadito',''),(53,15,'remolacha',''),(54,15,'','algunito'),(55,16,'',''),(56,16,'',''),(57,16,'',''),(58,16,'',''),(59,16,'',''),(60,16,'','ese mismo'),(61,17,'blusa',''),(62,17,'pantalon',''),(63,17,'falda',''),(64,17,'',''),(65,17,'',''),(66,17,'','vestidos'),(67,18,'jjjjl',''),(68,18,'ñññ',''),(69,18,'nnnnn',''),(70,18,'',''),(71,18,'',''),(72,18,'','kkkkkkkkkkkkkllllll'),(73,19,'',''),(74,19,'',''),(75,19,'',''),(76,19,'',''),(77,19,'',''),(78,19,'','limonada'),(79,20,'',''),(80,20,'',''),(81,20,'',''),(82,20,'',''),(83,20,'',''),(84,20,'','kjkjjkjjkkj'),(85,21,'',''),(86,21,'',''),(87,21,'',''),(88,21,'',''),(89,21,'',''),(90,21,'','lkjñlkhkljhkj'),(91,22,'',''),(92,22,'',''),(93,22,'',''),(94,22,'',''),(95,22,'',''),(96,22,'','hjkhjhkjkhk'),(97,23,'',''),(98,23,'',''),(99,23,'',''),(100,23,'',''),(101,23,'',''),(102,23,'','ñoplppopop'),(103,24,'',''),(104,24,'',''),(105,24,'',''),(106,24,'',''),(107,24,'',''),(108,24,'','galletas'),(109,25,'',''),(110,25,'',''),(111,25,'',''),(112,25,'',''),(113,25,'',''),(114,25,'','jhgkjhkj'),(115,26,'',''),(116,26,'',''),(117,26,'',''),(118,26,'',''),(119,26,'',''),(120,26,'','ñlñlñl'),(121,27,'',''),(122,27,'',''),(123,27,'',''),(124,27,'',''),(125,27,'',''),(126,27,'','pescado'),(127,28,'',''),(128,28,'',''),(129,28,'',''),(130,28,'',''),(131,28,'',''),(132,28,'','jhgfjhgfjhgfjhg'),(133,4,'lulo',''),(134,4,'papaya',''),(135,4,'coco',''),(136,4,'yuca',''),(137,4,'ñame',''),(138,4,'','mermelada'),(139,5,'lulo',''),(140,5,'papaya',''),(141,5,'coco',''),(142,5,'yuca',''),(143,5,'ñame',''),(144,5,'','mermelada'),(145,6,'lulo',''),(146,6,'papaya',''),(147,6,'coco',''),(148,6,'yuca',''),(149,6,'ñame',''),(150,6,'','mermelada'),(151,7,'lulo',''),(152,7,'papaya',''),(153,7,'coco',''),(154,7,'yuca',''),(155,7,'ñame',''),(156,7,'','mermelada'),(157,8,'lulo',''),(158,8,'papaya',''),(159,8,'coco',''),(160,8,'yuca',''),(161,8,'ñame',''),(162,8,'','mermelada'),(163,9,'lulo',''),(164,9,'papaya',''),(165,9,'coco',''),(166,9,'yuca',''),(167,9,'ñame',''),(168,9,'','mermelada'),(169,10,'lulo',''),(170,10,'papaya',''),(171,10,'coco',''),(172,10,'yuca',''),(173,10,'ñame',''),(174,10,'','mermelada'),(175,11,'lulo',''),(176,11,'papaya',''),(177,11,'coco',''),(178,11,'yuca',''),(179,11,'ñame',''),(180,11,'','mermelada'),(181,13,'lulo',''),(182,13,'papaya',''),(183,13,'coco',''),(184,13,'yuca',''),(185,13,'ñame',''),(186,13,'','mermelada'),(187,16,'sads',''),(188,16,'wewq',''),(189,16,'asd',''),(190,16,'ad',''),(191,16,'asd',''),(192,16,'','qqqqqq'),(193,19,'sads',''),(194,19,'wewq',''),(195,19,'asd',''),(196,19,'ad',''),(197,19,'asd',''),(198,19,'','qqqqqq');
/*!40000 ALTER TABLE `bienes_servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bienes_servicios_adicionales`
--

DROP TABLE IF EXISTS `bienes_servicios_adicionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bienes_servicios_adicionales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `bien` varchar(100) COLLATE utf8_bin NOT NULL,
  `costo_total_produccion` double NOT NULL,
  `venta_total_anual` double NOT NULL,
  `ingresos_superior` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `info_com_id` (`info_com_id`),
  KEY `ingresos_superior` (`ingresos_superior`),
  CONSTRAINT `bienes_servicios_adicionales_ibfk_1` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bienes_servicios_adicionales`
--

LOCK TABLES `bienes_servicios_adicionales` WRITE;
/*!40000 ALTER TABLE `bienes_servicios_adicionales` DISABLE KEYS */;
INSERT INTO `bienes_servicios_adicionales` VALUES (1,2,'',0,0,1),(2,5,'',0,0,1);
/*!40000 ALTER TABLE `bienes_servicios_adicionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cabildo`
--

DROP TABLE IF EXISTS `cabildo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cabildo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresa` int(11) NOT NULL,
  `si_no_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_empresa` (`id_empresa`),
  KEY `si_no_id` (`si_no_id`),
  CONSTRAINT `fk_empresa_cabildo` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cabildo`
--

LOCK TABLES `cabildo` WRITE;
/*!40000 ALTER TABLE `cabildo` DISABLE KEYS */;
INSERT INTO `cabildo` VALUES (1,4,1,'cabildo'),(2,5,1,'cabildo'),(3,6,1,'cabildo'),(4,7,1,'cabildo'),(5,8,1,'cabildo'),(6,9,1,'cabildo'),(7,10,1,'cabildo'),(8,11,1,'cabildo'),(9,12,1,'cabildo'),(10,13,1,'cabildo'),(11,14,1,'adsads'),(12,15,1,'adsads'),(13,16,1,'adsads'),(14,17,1,'adsads'),(15,18,1,'adsads'),(16,19,1,'adsads');
/*!40000 ALTER TABLE `cabildo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cadena_valor`
--

DROP TABLE IF EXISTS `cadena_valor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cadena_valor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `otro_nombre` varchar(150) COLLATE utf8_bin NOT NULL,
  `respuesta_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `info_com_id` (`info_com_id`),
  KEY `pregunta_id` (`pregunta_id`),
  KEY `respuesta_id` (`respuesta_id`),
  CONSTRAINT `cadena_valor_ibfk_1` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`),
  CONSTRAINT `cadena_valor_ibfk_2` FOREIGN KEY (`pregunta_id`) REFERENCES `pregunta_indicativa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadena_valor`
--

LOCK TABLES `cadena_valor` WRITE;
/*!40000 ALTER TABLE `cadena_valor` DISABLE KEYS */;
INSERT INTO `cadena_valor` VALUES (1,2,128,'',4),(2,2,129,'',4),(3,2,130,'',4),(4,2,131,'',4),(5,2,132,'',4),(6,2,133,'',4),(7,2,134,'',4),(8,2,135,'',4),(9,2,136,'',0),(10,5,128,'',4),(11,5,129,'',4),(12,5,130,'',4),(13,5,131,'',4),(14,5,132,'',4),(15,5,133,'',4),(16,5,134,'',4),(17,5,135,'',4),(18,5,136,'',0);
/*!40000 ALTER TABLE `cadena_valor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calificador`
--

DROP TABLE IF EXISTS `calificador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calificador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calificador`
--

LOCK TABLES `calificador` WRITE;
/*!40000 ALTER TABLE `calificador` DISABLE KEYS */;
INSERT INTO `calificador` VALUES (1,'0'),(2,'0.5'),(3,'1'),(4,'N/A');
/*!40000 ALTER TABLE `calificador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Bienes y servicios sostenibles provenientes de recursos naturales\r\n\r\n'),(2,'Ecoproductos Industriales\r\n'),(3,'Mercados de Carbono\r\n');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certificacion`
--

DROP TABLE IF EXISTS `certificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `certificacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `etapa_id` int(11) NOT NULL,
  `vigencia` varchar(30) COLLATE utf8_bin NOT NULL,
  `otro_nombre` varchar(200) COLLATE utf8_bin NOT NULL,
  `observacion` varchar(50) COLLATE utf8_bin NOT NULL,
  `confirmacion` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_id` (`info_com_id`),
  KEY `opciones_id` (`pregunta_id`),
  KEY `etapa_id` (`etapa_id`),
  CONSTRAINT `certificacion_empresa_id_restrink1` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`),
  CONSTRAINT `certificacion_etapa_id_restrink1` FOREIGN KEY (`etapa_id`) REFERENCES `etapa` (`id`),
  CONSTRAINT `certificacion_opciones_id_restrink1` FOREIGN KEY (`pregunta_id`) REFERENCES `pregunta_indicativa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificacion`
--

LOCK TABLES `certificacion` WRITE;
/*!40000 ALTER TABLE `certificacion` DISABLE KEYS */;
INSERT INTO `certificacion` VALUES (1,2,120,3,'','','','no'),(2,2,121,3,'','','','no'),(3,2,122,3,'','','','no'),(4,2,123,3,'','','','no'),(5,2,124,3,'','','','no'),(6,2,125,3,'','','','no'),(7,2,126,3,'','','','no'),(8,2,127,3,'','','',''),(9,5,120,3,'','','','no'),(10,5,121,3,'','','','no'),(11,5,122,3,'','','','no'),(12,5,123,3,'','','','no'),(13,5,124,3,'','','','no'),(14,5,125,3,'','','','no'),(15,5,126,3,'','','','no'),(16,5,127,3,'','','','');
/*!40000 ALTER TABLE `certificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comercializacion`
--

DROP TABLE IF EXISTS `comercializacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comercializacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `numero` varchar(100) COLLATE utf8_bin NOT NULL,
  `local` varchar(100) COLLATE utf8_bin NOT NULL,
  `regional` varchar(100) COLLATE utf8_bin NOT NULL,
  `nacional` varchar(100) COLLATE utf8_bin NOT NULL,
  `global` varchar(100) COLLATE utf8_bin NOT NULL,
  `observacion` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `info_com_id` (`info_com_id`),
  KEY `pregunta_id` (`pregunta_id`),
  CONSTRAINT `comercializacion_fbk1` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`),
  CONSTRAINT `comercializacion_fbk2` FOREIGN KEY (`pregunta_id`) REFERENCES `pregunta_indicativa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comercializacion`
--

LOCK TABLES `comercializacion` WRITE;
/*!40000 ALTER TABLE `comercializacion` DISABLE KEYS */;
INSERT INTO `comercializacion` VALUES (1,2,141,'','','','','',''),(2,2,142,'','','','','',''),(3,2,143,'','','','','',''),(4,2,144,'','','','','',''),(5,5,141,'','','','','',''),(6,5,142,'','','','','',''),(7,5,143,'','','','','',''),(8,5,144,'','','','','','');
/*!40000 ALTER TABLE `comercializacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `condicion_vulnerabilidad_es`
--

DROP TABLE IF EXISTS `condicion_vulnerabilidad_es`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `condicion_vulnerabilidad_es` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `vulnerabilidad_econo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `info_com_id` (`info_com_id`),
  KEY `sexo_id` (`sexo_id`),
  KEY `total_rotulo_id` (`total_rotulo_id`),
  CONSTRAINT `condicion_vulnerabilidad_es_ibfk_1` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`),
  CONSTRAINT `condicion_vulnerabilidad_es_ibfk_2` FOREIGN KEY (`sexo_id`) REFERENCES `sexo` (`id`),
  CONSTRAINT `condicion_vulnerabilidad_es_ibfk_3` FOREIGN KEY (`total_rotulo_id`) REFERENCES `total_rotulo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `condicion_vulnerabilidad_es`
--

LOCK TABLES `condicion_vulnerabilidad_es` WRITE;
/*!40000 ALTER TABLE `condicion_vulnerabilidad_es` DISABLE KEYS */;
INSERT INTO `condicion_vulnerabilidad_es` VALUES (1,2,1,4,10,7,9,6,1,2,1,2,4),(2,2,2,4,5,7,3,7,1,2,3,6,6),(3,2,1,5,3,1,1,1,1,1,1,1,1),(4,2,2,5,4,1,1,1,1,1,1,1,1),(5,5,1,4,7,4,5,4,1,2,2,4,5),(6,5,2,4,8,3,4,1,1,2,7,6,7),(7,5,1,5,9,9,6,3,1,1,4,3,5),(8,5,2,5,5,2,2,2,2,2,2,2,2);
/*!40000 ALTER TABLE `condicion_vulnerabilidad_es` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consejo_comunitario`
--

DROP TABLE IF EXISTS `consejo_comunitario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consejo_comunitario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresa` int(11) NOT NULL,
  `si_no_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_empresa` (`id_empresa`),
  KEY `si_no_id` (`si_no_id`),
  CONSTRAINT `fk_empresa_consejo` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consejo_comunitario`
--

LOCK TABLES `consejo_comunitario` WRITE;
/*!40000 ALTER TABLE `consejo_comunitario` DISABLE KEYS */;
INSERT INTO `consejo_comunitario` VALUES (1,4,1,'conseejo'),(2,5,1,'conseejo'),(3,6,1,'conseejo'),(4,7,1,'conseejo'),(5,8,1,'conseejo'),(6,9,1,'conseejo'),(7,10,1,'conseejo'),(8,11,1,'conseejo'),(9,12,1,'conseejo'),(10,13,1,'conseejo'),(11,14,1,'asdasd'),(12,15,1,'asdasd'),(13,16,1,'asdasd'),(14,17,1,'asdasd'),(15,18,1,'asdasd'),(16,19,1,'asdasd');
/*!40000 ALTER TABLE `consejo_comunitario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conservacion`
--

DROP TABLE IF EXISTS `conservacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conservacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `area` varchar(15) COLLATE utf8_bin NOT NULL,
  `otro_nombre` varchar(200) COLLATE utf8_bin NOT NULL,
  `confirmacion` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_id` (`info_com_id`),
  KEY `opciones_id` (`pregunta_id`),
  KEY `info_com_id` (`info_com_id`),
  CONSTRAINT `conservacion_ibfk_2` FOREIGN KEY (`pregunta_id`) REFERENCES `pregunta_indicativa` (`id`),
  CONSTRAINT `fk_comple2` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conservacion`
--

LOCK TABLES `conservacion` WRITE;
/*!40000 ALTER TABLE `conservacion` DISABLE KEYS */;
INSERT INTO `conservacion` VALUES (1,2,109,'','','no'),(2,2,110,'','','no'),(3,2,111,'','','no'),(4,2,112,'','','no'),(5,2,113,'','','no'),(6,2,114,'','','no'),(7,2,115,'','','no'),(8,2,116,'','','no'),(9,2,117,'','','no'),(10,2,118,'','','no'),(11,2,119,'','qqqqq','si'),(12,5,109,'','','no'),(13,5,110,'','','no'),(14,5,111,'','','no'),(15,5,112,'','','no'),(16,5,113,'','','no'),(17,5,114,'','','no'),(18,5,115,'','','no'),(19,5,116,'','','no'),(20,5,117,'','','no'),(21,5,118,'','','no'),(22,5,119,'','','');
/*!40000 ALTER TABLE `conservacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contenido`
--

DROP TABLE IF EXISTS `contenido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contenido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(60) COLLATE utf8_bin NOT NULL,
  `alias_id` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `id_img_page` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_img_page` (`id_img_page`),
  KEY `alias` (`alias_id`),
  CONSTRAINT `fk_alias` FOREIGN KEY (`alias_id`) REFERENCES `alias` (`id`),
  CONSTRAINT `fk_img` FOREIGN KEY (`id_img_page`) REFERENCES `img_page` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contenido`
--

LOCK TABLES `contenido` WRITE;
/*!40000 ALTER TABLE `contenido` DISABLE KEYS */;
INSERT INTO `contenido` VALUES (8,'Negocios Verdes',3,'<h5 style=\"text-align: center;\"><strong>¿Qué son los Negocios Verdes?</strong></h5><p style=\"text-align: justify; \">Contempla las actividades económicas en las que se ofertan bienes o servicios, que generan impactos ambientales positivos y además incorporan buenas prácticas ambientales, sociales y económicas con enfoque de ciclo de vida, contribuyendo a la conservación del ambiente como capital natural que soporta el desarrollo del territorio.</p>',7),(9,'Identificación de los bienes y servicios de negocios verdes ',3,'<p>Es relevante porque:</p><p><ol><li>Promueve patrones de producción y consumo sostenibles de bienes y servicios de los negocios verdes y sostenibles.<br></li><li>Propicia la creación de una cultura alineada con principios ambientales, sociales y éticos.<br></li><li>Facilita la toma de decisiones a los consumidores (públicos o privados) al momento de elegir un bien y servicio.<br></li><li>Visibiliza una oferta de bienes y servicios de cara al mercado nacional e internacional.<br></li></ol></p>',8),(10,'Criterios para identificar los Negocios Verdes',3,'<ol><li>Viabilidad económica del negocio<br></li><li>Impacto ambiental positivo del bien o servicio<br></li><li>Enfoque de ciclo de vida del bien o servicio<br></li><li>Vida Útil<br></li><li>No uso de sustancias o materiales peligrosos<br></li><li>Reciclabilidad de los materiales y uso de materiales reciclados<br></li><li>Uso eficiente y sostenible de recursos para la producción del bien o servicio<br></li><li>Responsabilidad social al interior de la empresa<br></li><li>Responsabilidad social y ambiental en la cadena de valor de la empresa<br></li><li>Responsabilidad social y ambiental al exterior de la empresa<br></li><li>Comunicación de atributos sociales o ambientales asociados al bien o servicio<br></li><li>Esquemas, programas o reconocimientos ambientales o sociales implementados o recibidos<br></li></ol>',9);
/*!40000 ALTER TABLE `contenido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cumple_nocumple`
--

DROP TABLE IF EXISTS `cumple_nocumple`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cumple_nocumple` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cumple_nocumple`
--

LOCK TABLES `cumple_nocumple` WRITE;
/*!40000 ALTER TABLE `cumple_nocumple` DISABLE KEYS */;
INSERT INTO `cumple_nocumple` VALUES (1,'Cumple'),(2,'No cumple');
/*!40000 ALTER TABLE `cumple_nocumple` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region_id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `autoridad_amb` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `region_id` (`region_id`),
  CONSTRAINT `departamento_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (14,3,'CHOCÓ','CODECHOCÓ'),(15,4,'Cundinamarca','CAR');
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `descripcion_etaria`
--

DROP TABLE IF EXISTS `descripcion_etaria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `descripcion_etaria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `18_30` int(11) NOT NULL,
  `30_50` int(11) NOT NULL,
  `mayor_50` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `info_com_id` (`info_com_id`),
  KEY `sexo_id` (`sexo_id`),
  CONSTRAINT `descripcion_etaria_ibfk_1` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`),
  CONSTRAINT `descripcion_etaria_ibfk_2` FOREIGN KEY (`sexo_id`) REFERENCES `sexo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descripcion_etaria`
--

LOCK TABLES `descripcion_etaria` WRITE;
/*!40000 ALTER TABLE `descripcion_etaria` DISABLE KEYS */;
INSERT INTO `descripcion_etaria` VALUES (1,2,1,4,4,4),(2,2,2,5,2,2),(3,5,1,3,7,4),(4,5,2,7,7,3);
/*!40000 ALTER TABLE `descripcion_etaria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `pagina_web` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tipo_persona_id` (`tipo_persona_id`),
  KEY `tipo_identificacion_id` (`tipo_identificacion_id`),
  KEY `persona_id` (`persona_id`),
  KEY `tamaño_empresa_id` (`tamaño_empresa_id`),
  KEY `municipio_id` (`municipio_id`),
  KEY `fami_empresa_si_no` (`fami_empresa_si_no`),
  KEY `subsector_id` (`subsector_id`),
  KEY `etapa_empresa_id` (`etapa_empresa_id`),
  KEY `empresario_id` (`empresario_id`),
  KEY `id_personeria` (`id_personeria`),
  KEY `bien_serv_op` (`bien_serv_op`),
  CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`),
  CONSTRAINT `empresa_ibfk_10` FOREIGN KEY (`id_personeria`) REFERENCES `tipo_personeria` (`id`),
  CONSTRAINT `empresa_ibfk_11` FOREIGN KEY (`bien_serv_op`) REFERENCES `bien_serv_op` (`id`),
  CONSTRAINT `empresa_ibfk_2` FOREIGN KEY (`tipo_identificacion_id`) REFERENCES `tipo_identificacion` (`id`),
  CONSTRAINT `empresa_ibfk_3` FOREIGN KEY (`tipo_persona_id`) REFERENCES `tipo_persona` (`id`),
  CONSTRAINT `empresa_ibfk_6` FOREIGN KEY (`municipio_id`) REFERENCES `municipio` (`id`),
  CONSTRAINT `empresa_ibfk_7` FOREIGN KEY (`fami_empresa_si_no`) REFERENCES `si_no` (`id`),
  CONSTRAINT `empresa_ibfk_8` FOREIGN KEY (`empresario_id`) REFERENCES `empresario` (`id`),
  CONSTRAINT `empresa_ibfk_9` FOREIGN KEY (`tamaño_empresa_id`) REFERENCES `tamaño_empresa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (9,1,1,'1077434234','grado',51,6,6,'mi barrio','23','12','34',1,3,'2018-11-21','negocio de venta de fruta',9,1,9,2,'5',2,'venta sdsdlsadalj ','si','si','si','si',95.83363636363637,3,2,'www.notiene.com'),(10,1,1,'1077434234','segundo grado',52,7,6,'mi barrio','23','12','34',1,3,'2018-11-21','negocio de venta de fruta',9,1,9,2,'5',2,'venta sdsdlsadalj ','si','si','si','no',0,3,2,'www.notiene.com');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresario`
--

DROP TABLE IF EXISTS `empresario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identificacion` varchar(15) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `cargo` varchar(100) COLLATE utf8_bin NOT NULL,
  `carta_si_no` varchar(2) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `carta_si_no` (`carta_si_no`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresario`
--

LOCK TABLES `empresario` WRITE;
/*!40000 ALTER TABLE `empresario` DISABLE KEYS */;
INSERT INTO `empresario` VALUES (1,'122323','dueño','gerente','1'),(2,'122323','dueño','gerente','1'),(3,'122323','dueño','gerente','1'),(4,'122323','dueño','gerente','1'),(5,'122323','dueño','gerente','1'),(6,'122323','dueño','gerente','1'),(7,'122323','dueño','gerente','1'),(8,'122323','dueño','gerente','1'),(9,'122323','dueño','gerente','1'),(10,'122323','dueño','gerente','1'),(11,'122323','dueño','genrete','1'),(12,'122323','dueño','genrete','1'),(13,'122323','dueño','genrete','1'),(14,'122323','dueño','genrete','1'),(15,'122323','dueño','genrete','1'),(16,'122323','dueño','genrete','1');
/*!40000 ALTER TABLE `empresario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etapa`
--

DROP TABLE IF EXISTS `etapa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etapa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etapa`
--

LOCK TABLES `etapa` WRITE;
/*!40000 ALTER TABLE `etapa` DISABLE KEYS */;
INSERT INTO `etapa` VALUES (1,'Propuesta'),(2,'En proceso'),(3,'Emitida');
/*!40000 ALTER TABLE `etapa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etapa_empresa`
--

DROP TABLE IF EXISTS `etapa_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etapa_empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etapa_empresa`
--

LOCK TABLES `etapa_empresa` WRITE;
/*!40000 ALTER TABLE `etapa_empresa` DISABLE KEYS */;
INSERT INTO `etapa_empresa` VALUES (1,'Idea'),(2,'Inversión inicial'),(3,'Despegue'),(4,'Expansión'),(5,'Consolidación');
/*!40000 ALTER TABLE `etapa_empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo_etnico`
--

DROP TABLE IF EXISTS `grupo_etnico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo_etnico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresa` int(11) NOT NULL,
  `grupo_op_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_empresa` (`id_empresa`),
  KEY `grupo_op_id` (`grupo_op_id`),
  CONSTRAINT `fk_empresa_grupo_etnico` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`),
  CONSTRAINT `fk_grupo_op` FOREIGN KEY (`grupo_op_id`) REFERENCES `grupo_etnico_op` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo_etnico`
--

LOCK TABLES `grupo_etnico` WRITE;
/*!40000 ALTER TABLE `grupo_etnico` DISABLE KEYS */;
INSERT INTO `grupo_etnico` VALUES (1,4,1,'indigena'),(2,5,1,'indigena'),(3,6,1,'indigena'),(4,7,1,'indigena'),(5,8,1,'indigena'),(6,9,1,'indigena'),(7,10,1,'indigena'),(8,11,1,'indigena'),(9,12,1,'indigena'),(10,13,1,'indigena'),(11,14,3,'qeqw'),(12,15,3,'qeqw'),(13,16,3,'qeqw'),(14,17,3,'qeqw'),(15,18,3,'qeqw'),(16,19,3,'qeqw');
/*!40000 ALTER TABLE `grupo_etnico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo_etnico_op`
--

DROP TABLE IF EXISTS `grupo_etnico_op`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo_etnico_op` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo_etnico_op`
--

LOCK TABLES `grupo_etnico_op` WRITE;
/*!40000 ALTER TABLE `grupo_etnico_op` DISABLE KEYS */;
INSERT INTO `grupo_etnico_op` VALUES (1,'Pueblos indígenas'),(2,'Pueblos rrom (gitanos)'),(3,'Comunidades negras (afrodescendientes, raizales, palenqueros)');
/*!40000 ALTER TABLE `grupo_etnico_op` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hoja_verificacion_1`
--

DROP TABLE IF EXISTS `hoja_verificacion_1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hoja_verificacion_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `respuesta_id` int(11) NOT NULL,
  `cumplimiento_id` int(11) NOT NULL,
  `vigencia` varchar(11) COLLATE utf8_bin NOT NULL,
  `nombre_certificacion` varchar(200) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `medio_verificacion` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_id` (`empresa_id`),
  KEY `pregunta_id` (`pregunta_id`),
  KEY `respuesta_id` (`respuesta_id`),
  KEY `cumplimiento_id` (`cumplimiento_id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoja_verificacion_1`
--

LOCK TABLES `hoja_verificacion_1` WRITE;
/*!40000 ALTER TABLE `hoja_verificacion_1` DISABLE KEYS */;
INSERT INTO `hoja_verificacion_1` VALUES (1,9,1,2,1,'2018-11-15','sfsfsdf','','Entrevista,Documentación'),(2,9,2,1,0,'','','vfxvdsv','Entrevista,Observación'),(3,9,3,1,0,'','','dffd','Entrevista'),(4,9,4,1,0,'','','dfdsf','Entrevista,Observación'),(5,9,5,1,0,'','','',''),(6,9,34,1,0,'','','',''),(7,9,6,4,0,'','','asdas','Entrevista'),(8,9,7,4,0,'','','zdsadas','Entrevista,Observación'),(9,9,8,4,0,'','','dds','Entrevista'),(10,9,9,4,0,'','','',''),(11,9,10,4,0,'','','adasd','Documentación'),(12,9,11,4,0,'','','asdas','Entrevista'),(13,9,12,4,0,'','','zxczx','Entrevista,Documentación'),(14,9,13,4,0,'','','asdas','Documentación'),(15,9,14,4,0,'','','zxczcx','Entrevista'),(16,9,16,1,2,'','','sadsa','Entrevista'),(17,9,17,1,2,'','','zcxcz','Documentación'),(18,9,18,1,2,'','','dasds','Entrevista'),(19,9,19,4,4,'','','',''),(20,9,20,1,1,'','','sads','Entrevista'),(21,9,21,2,2,'','','asdas','Entrevista'),(22,9,22,2,1,'','','xzczxcx','Entrevista'),(23,9,23,1,1,'','','scxzx','Entrevista'),(24,9,24,4,4,'','','',''),(25,9,25,4,4,'','','',''),(26,9,26,4,0,'','','',''),(27,9,27,4,0,'','','',''),(28,9,28,1,0,'','','cxcz','Observación'),(29,9,29,1,0,'','','zdczxc','Entrevista'),(30,9,30,4,0,'','','',''),(31,9,31,1,0,'','','zxcx','Entrevista,Observación'),(32,9,32,1,0,'','','zczx','Entrevista,Observación'),(33,9,33,1,0,'','','xcz','Entrevista,Observación'),(34,10,1,4,1,'','','',''),(35,10,2,4,0,'','','',''),(36,10,3,4,0,'','','',''),(37,10,4,4,0,'','','',''),(38,10,5,4,0,'','','',''),(39,10,34,4,0,'','','',''),(40,10,6,1,0,'','','adasdas','Entrevista,Observación'),(41,10,7,1,0,'','','zxczx','Entrevista,Observación'),(42,10,8,2,0,'','','zczxc','Documentación'),(43,10,9,4,0,'','','',''),(44,10,10,4,0,'','','',''),(45,10,11,4,0,'','','',''),(46,10,12,4,0,'','','',''),(47,10,13,2,0,'','','',''),(48,10,14,2,0,'','','',''),(49,10,16,4,4,'','','',''),(50,10,17,4,4,'','','',''),(51,10,18,4,4,'','','',''),(52,10,19,4,4,'','','',''),(53,10,20,4,4,'','','',''),(54,10,21,4,4,'','','',''),(55,10,22,4,4,'','','',''),(56,10,23,4,4,'','','',''),(57,10,24,4,4,'','','',''),(58,10,25,4,4,'','','',''),(59,10,26,4,0,'','','',''),(60,10,27,4,0,'','','',''),(61,10,28,4,0,'','','',''),(62,10,29,4,0,'','','',''),(63,10,30,4,0,'','','',''),(64,10,31,4,0,'','','',''),(65,10,32,4,0,'','','',''),(66,10,33,4,0,'','','','');
/*!40000 ALTER TABLE `hoja_verificacion_1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hoja_verificacion_2`
--

DROP TABLE IF EXISTS `hoja_verificacion_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hoja_verificacion_2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `calificador_id` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `medio_verificacion` varchar(200) COLLATE utf8_bin NOT NULL,
  `evidencia` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_id` (`empresa_id`),
  KEY `pregunta_id` (`pregunta_id`),
  KEY `calificador_id` (`calificador_id`)
) ENGINE=InnoDB AUTO_INCREMENT=422 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoja_verificacion_2`
--

LOCK TABLES `hoja_verificacion_2` WRITE;
/*!40000 ALTER TABLE `hoja_verificacion_2` DISABLE KEYS */;
INSERT INTO `hoja_verificacion_2` VALUES (328,9,35,3,'cxcñzx','Entrevista','35_9_1530735945-MXGP.PRO.MULTI-CODEX.WwW.GamesTorrents.CoM.torrent'),(329,9,36,3,'sadsad','Entrevista,Observación','36_9_AllSFR-www.gamesfull.org.torrent'),(330,9,37,3,'ddfsd','Entrevista','37_9_AllSFR-www.gamesfull.org.torrent'),(331,9,38,3,'vcxvc','Observación','38_9_AllSFR-www.gamesfull.org.torrent'),(332,9,39,3,'dsadasd','Entrevista,Observación','39_9_AllSFR-www.gamesfull.org.torrent'),(333,9,40,3,'xcvcx','Entrevista,Observación','40_9_AllSFR-www.gamesfull.org.torrent'),(334,9,41,3,'sreres','Entrevista,Observación,Documentación','_9_1523650148-Returner.77.MULTI-SKIDROW.WwW.GamesTorrents.CoM.torrent'),(335,9,42,3,'zczxc','Entrevista','42_9_AllSFR-www.gamesfull.org.torrent'),(336,9,43,3,'sdcdzc','Entrevista,Observación','43_9_AllSFR-www.gamesfull.org.torrent'),(337,9,44,4,'','',''),(338,9,45,3,'cxzcz','Entrevista,Documentación','45_9_AllSFR-www.gamesfull.org.torrent'),(339,9,46,3,'xcxzczx','Entrevista,Observación,Documentación','46_9_AllSFR-www.gamesfull.org.torrent'),(340,9,47,3,'zczczx','Entrevista,Observación','47_9_AllSFR-www.gamesfull.org.torrent'),(341,9,48,3,'zxcxz','Observación,Documentación','48_9_AllSFR-www.gamesfull.org.torrent'),(342,9,49,3,'sdasdas','Observación','49_9_AllSFR-www.gamesfull.org.torrent'),(343,9,50,3,'asdas','Entrevista,Documentación','50_9_AllSFR-www.gamesfull.org.torrent'),(344,9,51,3,'sadad','Entrevista,Observación','51_9_AllSFR-www.gamesfull.org.torrent'),(345,9,52,3,'sdds','Entrevista,Observación','52_9_AllSFR-www.gamesfull.org.torrent'),(346,9,53,3,'cdscs','Entrevista,Observación','53_9_AllSFR-www.gamesfull.org.torrent'),(347,9,54,4,'','',''),(348,9,55,3,'xcvxc','Entrevista','55_9_AllSFR-www.gamesfull.org.torrent'),(349,9,56,3,'zczxc','Documentación','56_9_AllSFR-www.gamesfull.org.torrent'),(350,9,57,3,'xzcxc','Entrevista','57_9_AllSFR-www.gamesfull.org.torrent'),(351,9,58,3,'xczxc','Entrevista,Documentación',''),(352,9,59,3,'zxczx','Entrevista',''),(353,9,60,4,'','',''),(354,9,61,1,'cxzc','Entrevista',''),(355,9,62,3,'asdasd','Entrevista,Observación',''),(356,9,63,3,'zxcx','Entrevista,Observación',''),(357,9,64,2,'<zx<z','Documentación',''),(358,9,65,3,'xcx','Entrevista',''),(359,9,66,3,'zxczx','Entrevista',''),(360,9,67,3,'czx','Entrevista',''),(361,9,68,3,'asds','Observación',''),(362,9,69,3,'zcx','Entrevista',''),(363,9,70,3,'xcx','Entrevista',''),(364,9,71,2,'zczx','Observación',''),(365,9,72,3,'xcxz','Entrevista',''),(366,9,73,3,'zcñzx','Documentación',''),(367,9,74,3,'zxx','Entrevista',''),(368,9,75,3,'xcxzczx','Entrevista',''),(369,9,76,3,'<<xz','Entrevista,Observación',''),(370,9,77,2,'zxc','Entrevista,Observación',''),(371,9,78,2,'zxczxc','Entrevista,Observación',''),(372,9,79,2,'zxcx','Entrevista,Observación',''),(373,9,80,2,'zxczx','Entrevista,Observación',''),(374,9,81,2,'zxcxxc','Entrevista,Observación',''),(375,10,35,0,'','',''),(376,10,36,0,'','',''),(377,10,37,0,'','',''),(378,10,38,0,'','',''),(379,10,39,0,'','',''),(380,10,40,0,'','',''),(381,10,41,0,'','',''),(382,10,42,0,'','',''),(383,10,43,0,'','',''),(384,10,44,0,'','',''),(385,10,45,0,'','',''),(386,10,46,0,'','',''),(387,10,47,0,'','',''),(388,10,48,0,'','',''),(389,10,49,0,'','',''),(390,10,50,0,'','',''),(391,10,51,0,'','',''),(392,10,52,0,'','',''),(393,10,53,0,'','',''),(394,10,54,0,'','',''),(395,10,55,0,'','',''),(396,10,56,0,'','',''),(397,10,57,0,'','',''),(398,10,58,0,'','',''),(399,10,59,0,'','',''),(400,10,60,0,'','',''),(401,10,61,0,'','',''),(402,10,62,0,'','',''),(403,10,63,0,'','',''),(404,10,64,0,'','',''),(405,10,65,0,'','',''),(406,10,66,0,'','',''),(407,10,67,0,'','',''),(408,10,68,0,'','',''),(409,10,69,0,'','',''),(410,10,70,0,'','',''),(411,10,71,0,'','',''),(412,10,72,0,'','',''),(413,10,73,0,'','',''),(414,10,74,0,'','',''),(415,10,75,0,'','',''),(416,10,76,0,'','',''),(417,10,77,0,'','',''),(418,10,78,0,'','',''),(419,10,79,0,'','',''),(420,10,80,0,'','',''),(421,10,81,0,'','','');
/*!40000 ALTER TABLE `hoja_verificacion_2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `img_empresa`
--

DROP TABLE IF EXISTS `img_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `img_empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `imagen` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_id` (`empresa_id`),
  CONSTRAINT `img_emprea1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `img_empresa`
--

LOCK TABLES `img_empresa` WRITE;
/*!40000 ALTER TABLE `img_empresa` DISABLE KEYS */;
INSERT INTO `img_empresa` VALUES (2,20,'20_dd3ed1a2b3a86284eba2d43c7c669368.jpg'),(3,22,'22_460c927e251e1b3206558669aca181c8.jpg'),(4,23,'23_1.PNG'),(5,24,'24_1e27e411bee18ee4fc0059f470a9eb84.jpg'),(6,25,'25_messi.jpg'),(7,26,''),(8,27,''),(9,28,'28_12208467_1483285018668988_6527247117495603979_n.jpg'),(10,4,''),(11,5,''),(12,6,''),(13,7,''),(14,8,''),(15,9,''),(16,10,''),(17,11,''),(18,13,''),(19,16,''),(20,19,'');
/*!40000 ALTER TABLE `img_empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `img_page`
--

DROP TABLE IF EXISTS `img_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `img_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) COLLATE utf8_bin NOT NULL,
  `ruta` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `img_page`
--

LOCK TABLES `img_page` WRITE;
/*!40000 ALTER TABLE `img_page` DISABLE KEYS */;
INSERT INTO `img_page` VALUES (6,'NO APLICA','NO APLICA'),(7,'LOGO VENTANILLA','logo1.png'),(8,'LOGO MERCADOS VERDES','logo_nv.png'),(9,'slide1','p3.jpeg'),(10,'slide2','p0.jpg');
/*!40000 ALTER TABLE `img_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `impacto_practicas`
--

DROP TABLE IF EXISTS `impacto_practicas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `impacto_practicas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `otro_nombre` varchar(200) COLLATE utf8_bin NOT NULL,
  `respuesta_id` int(11) NOT NULL,
  `confirmacion` varchar(2) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `info_com_id` (`info_com_id`),
  KEY `pregunta_id` (`pregunta_id`),
  KEY `respuesta_id` (`respuesta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `impacto_practicas`
--

LOCK TABLES `impacto_practicas` WRITE;
/*!40000 ALTER TABLE `impacto_practicas` DISABLE KEYS */;
INSERT INTO `impacto_practicas` VALUES (1,5,82,'',4,'no'),(2,5,83,'',4,'no'),(3,5,84,'',4,'no'),(4,5,85,'',4,'no'),(5,5,86,'',4,'no'),(6,5,87,'',4,'no'),(7,5,88,'',4,'no'),(8,5,89,'',4,'no'),(9,5,90,'',4,'no'),(10,5,91,'',4,'no'),(11,5,92,'',4,'no'),(12,5,93,'',4,'no'),(13,5,94,'',4,''),(14,5,95,'',4,'no'),(15,5,96,'',4,'no'),(16,5,97,'',4,'no'),(17,5,98,'',4,'no'),(18,5,99,'',4,'no'),(19,5,100,'',4,'no'),(20,5,101,'',4,'no'),(21,5,102,'',4,'no'),(22,5,103,'',4,'no'),(23,5,104,'',4,'no'),(24,5,105,'',4,'no'),(25,5,106,'',4,'no'),(26,5,107,'',4,'no'),(27,5,108,'',4,'');
/*!40000 ALTER TABLE `impacto_practicas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `informacion_complementaria`
--

DROP TABLE IF EXISTS `informacion_complementaria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `informacion_complementaria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `fecha_registro` varchar(11) COLLATE utf8_bin NOT NULL,
  `num_familias` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_id` (`empresa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `informacion_complementaria`
--

LOCK TABLES `informacion_complementaria` WRITE;
/*!40000 ALTER TABLE `informacion_complementaria` DISABLE KEYS */;
INSERT INTO `informacion_complementaria` VALUES (2,9,'2018-12-06',15),(3,9,'2018-12-06',0),(4,9,'2018-12-06',0),(5,10,'2018-12-06',0);
/*!40000 ALTER TABLE `informacion_complementaria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `junta_comunal`
--

DROP TABLE IF EXISTS `junta_comunal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `junta_comunal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresa` int(11) NOT NULL,
  `si_no_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_empresa` (`id_empresa`),
  KEY `si_no_id` (`si_no_id`),
  CONSTRAINT `fk_emprea_junta` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `junta_comunal`
--

LOCK TABLES `junta_comunal` WRITE;
/*!40000 ALTER TABLE `junta_comunal` DISABLE KEYS */;
INSERT INTO `junta_comunal` VALUES (1,4,1,'junta'),(2,5,1,'junta'),(3,6,1,'junta'),(4,7,1,'junta'),(5,8,1,'junta'),(6,9,1,'junta'),(7,10,1,'junta'),(8,11,1,'junta'),(9,12,1,'junta'),(10,13,1,'junta'),(11,14,1,'23434'),(12,15,1,'23434'),(13,16,1,'23434'),(14,17,1,'23434'),(15,18,1,'23434'),(16,19,1,'23434');
/*!40000 ALTER TABLE `junta_comunal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) COLLATE utf8_bin NOT NULL,
  `clave` varchar(50) COLLATE utf8_bin NOT NULL,
  `persona_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `persona_id` (`persona_id`),
  CONSTRAINT `login_restrink1` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'admin','admin',17),(3,'raga','raga',11),(5,'555555','555555',24),(6,'yovanny','yovanny',25),(7,' 123',' 123',26),(8,' 123',' 123',27),(9,' 123',' 123',28),(10,'99999999','$2y$10$/WVtZWm6jstVSAfJbVkqlOM925P7rbZNMi8qs9hxEbE',62),(11,'99999999','$2y$10$cdAbG5.xO9svwjqrd1Zj/u1snh0x4qBOAYteX8ipbms',63);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medio`
--

DROP TABLE IF EXISTS `medio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medio`
--

LOCK TABLES `medio` WRITE;
/*!40000 ALTER TABLE `medio` DISABLE KEYS */;
INSERT INTO `medio` VALUES (1,'Entrevista'),(2,'Observación'),(3,'Documentación');
/*!40000 ALTER TABLE `medio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipio`
--

DROP TABLE IF EXISTS `municipio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `municipio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `departamento_id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `departamento_id` (`departamento_id`),
  CONSTRAINT `municipio_ibfk_1` FOREIGN KEY (`departamento_id`) REFERENCES `departamento` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipio`
--

LOCK TABLES `municipio` WRITE;
/*!40000 ALTER TABLE `municipio` DISABLE KEYS */;
INSERT INTO `municipio` VALUES (6,14,'QUIBDÓ'),(7,14,'ACANDÍ'),(8,14,'ALTO BAUDÓ'),(9,14,'ATRATO'),(10,14,'BAGADÓ'),(11,14,'BAHIA SOLANO'),(12,14,'BAJO BAUDÓ'),(13,14,'BOJAYÁ'),(14,14,'CANTON DE SAN PABLO'),(15,14,'CARMEN DEL DARIÉN'),(16,14,'CERTEGUI'),(17,14,'CONDOTO'),(18,14,'CARMEN DE ATRATO'),(19,14,'ISTMINA'),(20,14,'JURADÓ'),(21,14,'LITORAL DEL SAN JUAN '),(22,14,'LLORÓ'),(23,14,'MEDIO ATRATO'),(24,14,'MEDIO BAUDÓ'),(25,14,'MEDIO SAN JUAN'),(26,14,'NÓVITA'),(27,14,'NUQUÍ'),(28,14,'RÍO IRÓ'),(29,14,'RIOSUCIO'),(30,14,'SAN JOSÉ DEL PALMAR'),(31,14,'SIPÍ'),(32,14,'TADÓ'),(33,14,'UNGUÍA'),(34,14,'UNIÓN PANAMERICANA'),(35,15,'Boyaca');
/*!40000 ALTER TABLE `municipio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `negocio_comunidad`
--

DROP TABLE IF EXISTS `negocio_comunidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `negocio_comunidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `socios` int(11) NOT NULL,
  `empleados_directos` int(11) NOT NULL,
  `empleados_indirectos` int(11) NOT NULL,
  `empleados_temporales` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `info_com_id` (`info_com_id`),
  KEY `sexo_id` (`sexo_id`),
  CONSTRAINT `negocio_comunidad_ibfk_1` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`),
  CONSTRAINT `negocio_comunidad_ibfk_2` FOREIGN KEY (`sexo_id`) REFERENCES `sexo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `negocio_comunidad`
--

LOCK TABLES `negocio_comunidad` WRITE;
/*!40000 ALTER TABLE `negocio_comunidad` DISABLE KEYS */;
INSERT INTO `negocio_comunidad` VALUES (1,2,1,0,0,0,0),(2,2,2,0,0,0,0),(3,5,1,0,0,0,0),(4,5,2,0,0,0,0);
/*!40000 ALTER TABLE `negocio_comunidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nivel_educativo`
--

DROP TABLE IF EXISTS `nivel_educativo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nivel_educativo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `primaria` int(11) NOT NULL,
  `bachillerato` int(11) NOT NULL,
  `tecnico` int(11) NOT NULL,
  `tecnologo` int(11) NOT NULL,
  `universitario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_id` (`info_com_id`),
  KEY `nivel_id` (`sexo_id`),
  CONSTRAINT `fk_comple` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`),
  CONSTRAINT `nivel_educativo_ibfk_2` FOREIGN KEY (`sexo_id`) REFERENCES `sexo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nivel_educativo`
--

LOCK TABLES `nivel_educativo` WRITE;
/*!40000 ALTER TABLE `nivel_educativo` DISABLE KEYS */;
INSERT INTO `nivel_educativo` VALUES (1,2,1,4,5,3,4,7),(2,2,2,2,4,1,4,2),(3,5,1,4,7,2,4,2),(4,5,2,5,5,10,78,100);
/*!40000 ALTER TABLE `nivel_educativo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticia`
--

DROP TABLE IF EXISTS `noticia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(300) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `fecha_publicacion` datetime NOT NULL,
  `fuente_autor` varchar(100) COLLATE utf8_bin NOT NULL,
  `id_img_page` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_img_page` (`id_img_page`),
  CONSTRAINT `fk_img2` FOREIGN KEY (`id_img_page`) REFERENCES `img_page` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticia`
--

LOCK TABLES `noticia` WRITE;
/*!40000 ALTER TABLE `noticia` DISABLE KEYS */;
INSERT INTO `noticia` VALUES (2,'seguda - 2','sdfafdas - 2','2018-04-20 21:53:49','dasdsds - 2',7),(3,'otra wera','<p style=\"text-align: justify;\">la&nbsp; otra de la calle tal que paso por mi casa me dijp que eras listoadssdadasdsa dasdasd asdasdas dasdsa dsa dasdasdsadasd sdffdfddddfdffdsfdsfdf dsfdsfd sfds fdsfdfdf dsf dsfdsfds fdsfdsfdsfds fdsfdsfdsf dsfdfdfdds fdsf dsf dsfdf dfdf df dsf df df df ds fdfd fdfdfdf dfd fd fdfdf df df d fdfdfdfdfs dfdfdfdfdf dfdfdfdf dfdfdfdd fddfds fdsfdf dsf</p>','2018-04-20 22:18:58','yo mismo',9),(5,'Colombia y 5 países más dejarán de participar en Unasur','<p>Un total de seis países de la Unión de Naciones Suramericanas () comunicaron a Bolivia, que ostenta la presidencia temporal del bloque, su decisión de \"no participar en las distintas instancias\", hasta que no se garantice \"el funcionamiento adecuado de la organización\".&nbsp;</p><br style=\"\"><p>El documento, al que este viernes tuvo acceso Efe, está dirigido al ministro de Relaciones Exteriores boliviano, Fernando Huanacuni,&nbsp;está firmado por los cancilleres de Argentina, <strong>Colombia, Chile, Brasil, Paraguay y Perú.</strong></p>','2018-05-21 18:03:22','ElTiempo.com',10),(6,'Una persona muerta y dos heridas deja avalancha en Girardot','<p>La intensa lluvia que se prolongó durante varias horas, arrastró el material que se había extraído para instalar una tubería, en la parte alta de la montaña. Sobre las 2 de la mañana el lodo sorprendió a los habitantes del barrio Puerto Cabrera. Decenas de personas tuvieron que abandonar sus viviendas por los techos.</p><p>Diez viviendas fueron las más afectadas, los enseres de sus habitantes quedaron bajo el lodo. Con palas, los habitantes intentan remover el lodo para recuperar algunas de sus cosas. Las familias damnificadas esperan la ayuda de la Alcaldía para recuperar sus viviendas.</p>','2018-05-17 23:28:21','Noticias RCN',7);
/*!40000 ALTER TABLE `noticia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otro_condicion_vulneravibilidad`
--

DROP TABLE IF EXISTS `otro_condicion_vulneravibilidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `otro_condicion_vulneravibilidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `otro_rotulo_id` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `info_com_id` (`info_com_id`),
  KEY `sexo_id` (`sexo_id`),
  KEY `otro_rotulo_id` (`otro_rotulo_id`),
  CONSTRAINT `otro_condicion_vulneravibilidad_ibfk_1` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`),
  CONSTRAINT `otro_condicion_vulneravibilidad_ibfk_2` FOREIGN KEY (`otro_rotulo_id`) REFERENCES `total_rotulo` (`id`),
  CONSTRAINT `otro_condicion_vulneravibilidad_ibfk_3` FOREIGN KEY (`sexo_id`) REFERENCES `sexo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otro_condicion_vulneravibilidad`
--

LOCK TABLES `otro_condicion_vulneravibilidad` WRITE;
/*!40000 ALTER TABLE `otro_condicion_vulneravibilidad` DISABLE KEYS */;
INSERT INTO `otro_condicion_vulneravibilidad` VALUES (1,2,4,1,'',4),(2,2,4,2,'',8),(3,2,5,1,'',3),(4,2,5,2,'',6),(5,5,4,1,'',2),(6,5,4,2,'',9),(7,5,5,1,'',7),(8,5,5,2,'',1);
/*!40000 ALTER TABLE `otro_condicion_vulneravibilidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otro_negocio_comunidad`
--

DROP TABLE IF EXISTS `otro_negocio_comunidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `otro_negocio_comunidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `info_com_id` (`info_com_id`),
  KEY `sexo_id` (`sexo_id`),
  CONSTRAINT `otro_negocio_comunidad_ibfk_1` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`),
  CONSTRAINT `otro_negocio_comunidad_ibfk_2` FOREIGN KEY (`sexo_id`) REFERENCES `sexo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otro_negocio_comunidad`
--

LOCK TABLES `otro_negocio_comunidad` WRITE;
/*!40000 ALTER TABLE `otro_negocio_comunidad` DISABLE KEYS */;
INSERT INTO `otro_negocio_comunidad` VALUES (1,2,1,'',0),(2,2,2,'',0),(3,5,1,'',0),(4,5,2,'',0);
/*!40000 ALTER TABLE `otro_negocio_comunidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otro_nivel_educativo`
--

DROP TABLE IF EXISTS `otro_nivel_educativo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `otro_nivel_educativo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `info_com_id` (`info_com_id`),
  KEY `sexo_id` (`sexo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otro_nivel_educativo`
--

LOCK TABLES `otro_nivel_educativo` WRITE;
/*!40000 ALTER TABLE `otro_nivel_educativo` DISABLE KEYS */;
INSERT INTO `otro_nivel_educativo` VALUES (1,2,1,'',4),(2,2,2,'',5),(3,5,1,'',8),(4,5,2,'',7);
/*!40000 ALTER TABLE `otro_nivel_educativo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otro_programa`
--

DROP TABLE IF EXISTS `otro_programa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `otro_programa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `recurso_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_id` (`info_com_id`),
  KEY `recurso_id` (`recurso_id`),
  CONSTRAINT `otro_programa_ibfk_1` FOREIGN KEY (`recurso_id`) REFERENCES `recurso` (`id`),
  CONSTRAINT `otro_programa_restrink1` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otro_programa`
--

LOCK TABLES `otro_programa` WRITE;
/*!40000 ALTER TABLE `otro_programa` DISABLE KEYS */;
INSERT INTO `otro_programa` VALUES (1,2,2,'',''),(2,5,2,'','');
/*!40000 ALTER TABLE `otro_programa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pais`
--

DROP TABLE IF EXISTS `pais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pais`
--

LOCK TABLES `pais` WRITE;
/*!40000 ALTER TABLE `pais` DISABLE KEYS */;
INSERT INTO `pais` VALUES (1,'Colombia');
/*!40000 ALTER TABLE `pais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partner_page`
--

DROP TABLE IF EXISTS `partner_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partner_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `ruta` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partner_page`
--

LOCK TABLES `partner_page` WRITE;
/*!40000 ALTER TABLE `partner_page` DISABLE KEYS */;
INSERT INTO `partner_page` VALUES (3,'gobernacion','1062_escudo-choco-new-pag_200x200.png'),(4,'dps','logo-DPS-Gov.png'),(5,'iiap','logo.png'),(6,'confachoco','logo (1).png'),(7,'alcaldia','escudo.png'),(8,'utch','logo_utch_400x95.png'),(9,'sena','logoSena.png'),(10,'icbf','icbf-logo_32.png'),(11,'fucla','logo-uniclaretiana.png'),(12,'bioinnova','BIOINNOVA-400.png'),(13,'banco agrario','logo-banco-agrario-colombia.png'),(14,'ica','LogoICA.png'),(15,'oim','logo (2).png'),(16,'wwf','logo (3).png'),(17,'pnud','pnud-logo-30.svg');
/*!40000 ALTER TABLE `partner_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `cargo` varchar(150) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rol_id` (`rol_id`),
  KEY `area_id` (`area_id`),
  CONSTRAINT `rol_restrink1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`),
  CONSTRAINT `rol_restrink2` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (1,'1020','prueba1','','','','asda@gmail.commm','88910','468','bogota dc',4,'',1,''),(8,'123','estavan','','','','asda@gmail.com','','','',4,'',1,''),(11,'123489999','Emelecio','','Martinez','rojas','asda@gmail.com','321256346','6718133','porvenir',2,'',1,''),(13,'107789456','Hrinson','','','','tbs47@hotmail.com','3157894653','6728695','pablo sexto',4,'',1,''),(15,'895466','Alfalfa','','','','asfas@hotmail.com','','','',4,'',1,''),(16,'456546','yo','','','','asda@gmail.com','','','',4,'',1,''),(17,'1235464','stiven','','Morales','jj','dasd@hotm.copm','3201646','67125','PABLO SEXTO',1,'',1,''),(20,'26260656','Rosa Renteria Palacios','','','','renteria@gmail.com','6127068685','45646','margaritas',4,'',1,''),(21,'46456564','lllllllll','','','','','','','',4,'',1,''),(24,'555555','Luis','Fernando','Palacios','Mosquera','da-vo1996@hotmail.com','3210156441635','665464','jgfjhgfhghj',2,'',1,''),(25,'123345678','Yovanny','','Hinestroza','Pereas','asfdasf@gmail.com','320654134','645712','niño jesus',3,'',1,''),(26,' 123','miguel',' ',' ',' rojas','asda@gmail.com',' 321256346',' ',' porvenir',2,'',1,''),(27,' 123','amancio',' algo',' ',' rojas','asda@gmail.com',' 321256346',' ',' porvenir',2,'',1,''),(28,' 123',' rafael',' asdasdas',' ',' rojas','asda@gmail.com',' 321256346',' ',' porvenir',2,'',1,''),(29,'45635465','hhhh','','','','','','','',4,'',1,''),(30,'6587685','jgfjhgf','','','','','','','',4,'',1,''),(31,'333323232','jhfgkjhgfkjhfjhg','','','','','','','',4,'',1,''),(32,'23132','jhfgkjh','','','','','','','',4,'',1,''),(33,'4564546','jhgkjh','','','','','','','',4,'',1,''),(34,'749879','jkhjhkjh','','','','','','','',4,'',1,''),(35,'1546','jklhkjl','','','','','','','',4,'',1,''),(36,'142457','mm','','','','','','','',4,'',1,''),(37,'56547879','qq','','','','','','','',4,'',1,''),(38,'13564','oioi','','','','','','','',4,'',1,''),(39,'5234234','tu mismo','','','','das@sfd.com','3211111111','23432','cll 4534',4,'',1,''),(40,'5234234','tu mismo','','','','das@sfd.com','3211111111','23432','cll 4534',4,'',1,''),(41,'5234234','tu mismo','','','','das@sfd.com','3211111111','23432','cll 4534',4,'',1,''),(42,'5234234','tu mismo','','','','das@sfd.com','3211111111','23432','cll 4534',4,'',1,''),(43,'5234234','tu mismo','','','','das@sfd.com','3211111111','23432','cll 4534',4,'',1,''),(44,'5234234','tu mismo','','','','das@sfd.com','3211111111','23432','cll 4534',4,'',1,''),(45,'5234234','tu mismo','','','','das@sfd.com','3211111111','23432','cll 4534',4,'',1,''),(46,'5234234','tu mismo','','','','das@sfd.com','3211111111','23432','cll 4534',4,'',1,''),(47,'5234234','tu mismo','','','','das@sfd.com','3211111111','23432','cll 4534',4,'',1,''),(48,'5234234','tu mismo','','','','das@sfd.com','3211111111','23432','cll 4534',4,'',1,''),(49,'5234234','tu mismo','','','','das@sfd.com','3211111111','23432','cll 4534',4,'',1,''),(50,'5234234','tu mismo','','','','das@sfd.com','3211111111','23432','cll 4534',4,'',1,''),(51,'5234234','tu mismo','','','','das@sfd.com','3211111111','23432','cll 4534',4,'',1,''),(52,'5234234','tu mismo','','','','das@sfd.com','3211111111','23432','cll 4534',4,'',1,''),(53,'5234234','tu mismo','','','','das@sfd.com','3211111111','23432','cll 4534',4,'',1,''),(54,'5234234','tu mismo','','','','das@sfd.com','3211111111','23432','cll 4534',4,'',1,''),(55,'5234234','tu mismo','','','','das@sfd.com','3211111111','23432','cll 4534',4,'',1,''),(56,'343432','zczxcx','','','','asds@dasd.com','32123232121','131231','CLL 3434',4,'',1,''),(57,'343432','zczxcx','','','','asds@dasd.com','32123232121','131231','CLL 3434',4,'',1,''),(58,'343432','zczxcx','','','','asds@dasd.com','32123232121','131231','CLL 3434',4,'',1,''),(59,'343432','zczxcx','','','','asds@dasd.com','32123232121','131231','CLL 3434',4,'',1,''),(60,'343432','zczxcx','','','','asds@dasd.com','32123232121','131231','CLL 3434',4,'',1,''),(61,'343432','zczxcx','','','','asds@dasd.com','32123232121','131231','CLL 3434',4,'',1,''),(62,'99999999','asdasd','asdas','dads','adas','asasdsad@corre.com','212312','qweqw','ddffsd',2,'',1,''),(63,'99999999','asdasd','asdas','dads','adas','asasdsad@corre.com','212312','qweqw','ddffsd',2,'',1,'');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan_mejora`
--

DROP TABLE IF EXISTS `plan_mejora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plan_mejora` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
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
  `observacion` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `opciones_id` (`pregunta_id`),
  KEY `empresa_id` (`empresa_id`),
  CONSTRAINT `plan_mejora_restrink1` FOREIGN KEY (`pregunta_id`) REFERENCES `pregunta_indicativa` (`id`),
  CONSTRAINT `plan_mejora_restrink2` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_mejora`
--

LOCK TABLES `plan_mejora` WRITE;
/*!40000 ALTER TABLE `plan_mejora` DISABLE KEYS */;
INSERT INTO `plan_mejora` VALUES (83,9,61,'dasds','asda','asdas','x','x','x','x','x','x','x','x','x','','x','x','sadas'),(84,9,64,'sdasd','asds','dsas','x','x','x','x','','x','x','x','x','x','x','x','asdasd'),(85,9,71,'asdasd','asds','asd','x','x','x','x','x','x','x','x','x','x','x','x','das'),(88,9,21,'dsadas','adas','asdas','x','x','x','x','x','x','x','x','x','x','x','x','dfsds'),(89,9,22,'das','ada','dsa','x','x','x','x','x','x','x','x','x','x','x','x','sdsd'),(91,9,1,'sdad','sads','dasdas','x','x','x','x','x','x','x','x','','','','','qedas'),(92,9,77,'wdsad','sda','sad','x','','x','x','x','x','x','x','x','x','x','x','ads'),(101,9,78,'','','','','','','','','','','','','','','',''),(102,9,79,'','','','','','','','','','','','','','','',''),(103,9,80,'','','','','','','','','','','','','','','',''),(104,9,81,'','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `plan_mejora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pregunta_indicativa`
--

DROP TABLE IF EXISTS `pregunta_indicativa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pregunta_indicativa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `aspecto_id` int(11) NOT NULL,
  `No` varchar(4) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aspecto_id` (`aspecto_id`),
  CONSTRAINT `fk_aspecto` FOREIGN KEY (`aspecto_id`) REFERENCES `aspecto` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pregunta_indicativa`
--

LOCK TABLES `pregunta_indicativa` WRITE;
/*!40000 ALTER TABLE `pregunta_indicativa` DISABLE KEYS */;
INSERT INTO `pregunta_indicativa` VALUES (1,'¿Se cuenta con una certificación Socio - Ambiental vigente?.  Si la respuesta es positiva, debe adjuntar los soportes que evidencien el cumplimiento e implementación de dicha certificación para realizar una verificación de escritorio.',1,'1'),(2,'¿Se prohíbe la utilización de sustancias y/o materiales que aunque se encuentren legalmente registrados, son altamente tóxicos para el ambiente y/o salud humana? \r\nEjemplo: Mercurio, Arsénico, Plomo, Cobre; agroquímicos de alta toxicidad (etiqueta roja y amarilla), entre otros.',2,'2'),(3,'¿Se prohíbe las acciones que pueden alterar los ecosistemas, bien sea por que el negocio desarrolla  actividades en los mismos o en su área de influencia y se prohíbe la afectación a la vida silvestre (fauna y flora) evitando la cacería, tala y pesca en los casos que están prohibidos por ley?',2,'4'),(4,'¿Se prohíbe el uso de sustancias y/o materiales prohibidos para el país, o que no están legalmente registrados?',2,'5'),(5,'¿Se promueve e implementa prácticas inclusivas y no discriminatorias; se respeta, protege y promueve los derechos humanos, los derechos de las comunidades indígenas, afrocolombianas u otras comunidades tradicionales al desarrollar sus actividades en el territorio?',2,'6'),(6,'¿Cuenta con RUT?',3,'7'),(7,'¿Cuenta con NIT?',3,'8'),(8,'¿Cuenta con cámara de comercio vigente?',3,'9'),(9,'¿En caso de aplicar, cuenta con registro Invima?',3,'10'),(10,'¿En caso de aplicar, cuenta con registro ICA?',3,'11'),(11,'¿En caso de aplicar, cuenta con Registro Nacional de Turismo?',3,'12'),(12,'¿Se cuenta con evidencia de tenencia de la tierra? (Ver formato de inscripción, IV.  Características del Negocio Verde, numeral 2.)',3,'13'),(13,'¿la actividad del negocio va de acuerdo con los requerimientos de uso legal del suelo?',3,'14'),(14,'¿En caso de aplicar, cuenta con la certificación del curso de manipulación de alimentos?',3,'15'),(16,'¿En caso de aplicar, cuenta con contrato de Acceso a Recursos Genéticos?\r\n\r\n',4,'16'),(17,'¿En caso de aplicar, cuenta con Registro de Plantación Forestal y cumple con los requerimientos exigidos por la Autoridad Ambiental que aplica a los productos silvestres maderables y no maderables?',4,'17'),(18,'¿En caso de aplicar, cuenta con Registro de Sistema Agroforestal?',4,'18'),(19,'¿En caso de aplicar, cuenta con Permiso de Movilización y/o Salvoconductos de Movilización ?',4,'19'),(20,'¿En caso de aplicar, cuenta con Licencia Ambiental para el uso y extracción de especies nativas?',4,'20'),(21,'¿ Si el negocio compra y comercializa productos fuente de la biodiversidad, se cuenta con permiso de comercialización?',4,'21'),(22,'¿En caso de aplicar, cuenta con concesión de aguas (subterráneas o superficiales) ?',4,'22'),(23,'¿En caso de aplicar, cumple con los requerimientos legales de manejo de aguas residuales y vertimientos?',4,'23'),(24,'¿En caso de aplicar, cuenta con Permiso de Emisiones?',4,'24'),(25,'¿En caso de generarse residuos o desechos peligrosos (mayor o igual a 10 kg/mes), se cuenta con registro como generador de residuos (RESPEL)? ',4,'25'),(26,'¿Todos los desperdicios y basuras se recolectan y se evita la acumulación de desperdicios susceptibles de descomposición, que puedan ser nocivos para la salud de los trabajadores y se cumple con los requerimientos de limpieza y recolección de escombros?',4,'26'),(27,'¿Se prohíbe la contratación de menores de 18 años?\r\nEn caso de contratar menores de 18 años, ¿cumple con los requerimientos legales en cuanto a la autorización de trabajo para adolescentes por parte de un inspector de trabajo?',5,'27'),(28,'¿Se prohíbe todo tipo de trabajo forzado o actividades realizadas bajo régimen de prisión? ',5,'28'),(29,'¿La actividad del negocio conoce y respeta los intereses colectivos de las comunidades?',5,'29'),(30,'¿La remuneración a los trabajadores se realiza de acuerdo o basado en el Salario Mínimo Legal Vigente, y lo especificado en el Código Sustantivo de Trabajo. \r\n(Ejemplo: se pagan horas extras, primas, liquidaciones de contrato, y otros requerimientos laborales de acuerdo al tipo de contrato).\r\n',5,'30'),(31,'¿Se cuenta con un Sistema de Gestión de Seguridad y Salud en el Trabajo (SG - SST), que incluya  prácticas para disminuir riesgos asociados a desastres naturales, cuenta con un plan de contingencias y emergencias?',5,'31'),(32,'¿Se evita la contratación o compra de insumos o productos, a proveedores, empresas y/o negocios que incumplen con alguna de las anteriores preguntas formuladas, o cualquier otro requisito legal ?',6,'32'),(33,'Otros requerimientos exigidos por la autoridad ambiental, municipio, gobernación etc.\r\nEjemplo: vedas, restricción de otras actividades y permisos.',7,'33'),(34,'¿Los propietarios, representante legal, junta directiva y/o representantes del negocio no están involucrados en actividades ilegales, afectación a la comunidad, denuncias o se encuentran bajo investigación y no cuentan con procesos sancionatorios ambientales?',2,'3'),(35,'¿Cuenta con estados financieros, contabilidad o registro de ingreso y egresos?',8,'1.1'),(36,'¿Cuenta con un plan financiero a corto, mediano y largo plazo que acompañe las acciones del negocio?',8,'1.2'),(37,'¿El bien o servicio tiene potencial comercial y cuenta con estrategias de mercadeo que garanticen su sostenibilidad en el mercado (demanda del producto)?',8,'1.3'),(38,'¿El bien o servicio cuenta con un plan estratégico que incluya; misión, visión, metas y estrategias, equipo de trabajo, plan de negocios, información, alianzas estratégicas y publicidad? ',8,'1.4'),(39,'¿Las ventas del bien o servicio son suficientes para cubrir las necesidades financieras (gastos, remuneración de sus empleados, otros, ver apartado IV. Sostenibilidad Económica)?',8,'1.5'),(40,'¿Su negocio tiene ingresos adicionales a la venta directa del producto o servicio líder (ver apartado IV Sotenibilidad Económica)?',8,'1.6'),(41,'¿El precio del producto considera costos de transporte y logística, y la mano de obra familiar asociada al desarrollo del bien o servicio?',8,'1.7'),(42,'¿Cuenta con estrategias de análisis de las prácticas comerciales de sus competidores, aliados estratégicos y líder de su mercado?',8,'1.8'),(43,'¿Ha identificado los canales de distribución por la que circulan sus productos y la de sus competidores directos actualmente?',8,'1.9'),(44,'¿Se diseñan e implementan acciones que promueva la conservación y preservación de los ecosistemas y de la vida silvestre?',9,'2.1'),(45,'¿Se implementan acciones de prevención o mitigación de los impactos negativos generados en cada una de las etapas del bien o servicio?',9,'2.2'),(46,'¿Se implementan acciones que permiten la reducción o mitigación de emisiones de gases de efecto invernadero-GEI? (ver hoja de información complementaria: apartado I Sostenibilidad Ambiental )',9,'2.3'),(47,'¿En caso de desarrollarse la actividad turística en un Área Protegida, cuenta con Estudio de Capacidad de Carga?',9,'2.4'),(48,'¿Se identifica los impactos sobre el ambiente, la comunidad y los trabajadores en las principales etapas del sistema productivo o ciclo de vida del producto? ',10,'3.1'),(49,'¿Se consideran criterios ambientales en la compra de productos o insumos necesarios para el proceso de producción, o incluye autoabastecimiento con criterios ambientales?',10,'3.2'),(50,'¿Se realizan acciones para mantener, asegurar o mejorar los impactos ambientales positivos generados en el ciclo de vida del bien o servicio?',10,'3.3'),(51,'¿Se realizan acciones y procedimientos para extender su vida útil del bien o servicio?',11,'4.1'),(52,'¿Se desarrollan actividades de innovación, investigación o ambas, que aporte a extender la vida útil del bien o servicio?',11,'4.2'),(53,'¿Cuenta con hojas o fichas de seguridad de los productos utilizados y se utilizan de acuerdo a lo indicado en la hoja de seguridad: tipo de cultivo establecido y cantidades indicadas?',12,'5.1'),(54,'¿Se previene o mitiga el uso de sustancias que afectan el ambiente, la salud humana o ambas, y en caso de usarlas se cuenta con un plan de sustitución?\r\n(Ejemplo: agroquímicos categoría azul y verde, sustancias tóxicas utilizadas en limpieza y desinfección, y otras).',12,'5.2'),(55,'¿Cuenta con un programa de manejo integral de residuos, se promueve e implementan acciones para reducir, reciclar y reutilizar los residuos generados?',13,'6.1'),(56,'¿Se utilizan materiales recuperables, reciclables, reutilizables y/o biodegradables en la fabricación del producto, su empaque y embalaje, y se cuenta con un plan de acción que permita el cambio de materiales no renovables por renovables o reciclados?',13,'6.2'),(57,'¿Se toman acciones para disminuir o eliminar el uso de empaques y embalajes?  ',13,'6.3'),(58,'¿Cuenta con un programa de ahorro y uso eficiente de agua y energía ?',14,'7.1'),(59,'¿Cuenta con un programa de uso eficiente de materias primas?',14,'7.2'),(60,'¿Se cuenta con un plan de reducción o sustitución de fuentes de energía no renovales y se involucra fuentes de energía alternativa o tecnologías más limpias?',14,'7.3'),(61,'¿Cuenta con un programa de bienestar social para sus empleados y colaboradores, que incluya equidad en puestos de trabajo, equidad salarial y beneficios adicionales? ',15,'8.1'),(62,'¿Se toman medidas para que los empleados, colaboradores y sus familias tengan acceso a servicios de salud y recreación?',15,'8.2'),(63,'¿Se facilita y promueve que sus empleados y colaboradores se capaciten mediante educación formal y no formal?',15,'8.3'),(64,'¿El código de ética del negocio es socializado y los empleados y colaboradores hacen uso de los mecanismos de participación para escuchar y responder las sugerencias, ideas, peticiones y reclamaciones',15,'8.4'),(65,'¿Promueve, promociona o ambas, que sus proveedores, intermediadores y clientes realicen actividades de responsabilidad social y ambiental? ',16,'9.1'),(66,'¿Cuenta con contratos, alianzas o convenios con empresas de economía social, MIPYMES y promueve estrategias de encadenamiento?',16,'9.2'),(67,'¿Se promueve la responsabilidad extendida del producto con proveedores, clientes y usuarios? ',16,'9.3'),(68,'¿Promueve y prioriza la generación de empleo local?',17,'10.1'),(69,'¿Apoya la  inversión social, ambiental y desarrollo comunitario?',17,'10.2'),(70,'¿Se realizan acciones de sensibilización a los consumidores, en temas de responsabilidad y sostenibilidad?',17,'10.3'),(71,'¿Se respetan las áreas y actividades de importancia social, cultural, biológica, ambiental y religiosa para la comunidad? ',17,'10.4'),(72,'¿Cuenta con un procedimiento de peticiones, quejas, reclamos y sugerencias para recibir, documentar y responder a los clientes?',17,'10.5'),(73,'¿Se cuenta con un mecanismo de consulta a las comunidades aledañas y protege (salvaguarda) el conocimiento ancestral o tradicional?',17,'10.6'),(74,'¿Se comunican los atributos ambientales y socio-culturales del bien o servicio a los clientes y el público en general?',18,'11.1'),(75,'¿Se comunica a los clientes y público en general sobre su sistema de producción, comercialización y su aporte en la cadena de valor del bien o servicio?',18,'11.2'),(76,'¿Cuenta con un programa de capacitación y promoción de prácticas de responsabilidad social y ambiental con empleados, colaboradores, proveedores, clientes y comunidad en general?',18,'11.3'),(77,'¿Se otorga condiciones sociales y pago de salarios mejores a las exigidas por la Legislación Nacional Vigente?',19,'8.5'),(78,'¿Se cuenta con un programa para la inclusión y contratación de población vulnerable (Ver información complementaria: II. Información de Sostenibilidad Social)?',19,'8.6'),(79,'¿Se cuenta con premios y reconocimientos enfocados a Buenas Prácticas Ambientales y Sociales?',20,'12.1'),(80,'¿Se cuenta con evidencias de auditorias, verificaciones, certificaciones, sellos, ecoetiquetas o hizo parte de un Sistemas Participativo de Garantías?',20,'12.2'),(81,'¿Se cuenta con un programa de educación ambiental enfocado en desarrollo sostenible aplicado a su sistema productivo?',20,'12.3'),(82,'Conservación',21,''),(83,'Cambio de materiales no renovables por renovables',21,''),(84,'Mantenimiento de la biodiversidad nativa',21,''),(85,'Cambios de fuentes de energía no renovables por renovables',21,''),(86,'Disminución de la presión sobre el recurso',21,''),(87,'Disminución de la contaminación',21,''),(88,'Mantenimiento servicios ecosistémicos',21,''),(89,'Educación y cultura ambiental',21,''),(90,'Repoblación y mantenimiento de la base natural',21,''),(91,'Mejoramiento de las condiciones de los recursos naturales',21,''),(92,'Reducción de las emisiones de gases efecto invernadero',21,''),(93,'Respeto al conocimiento y las prácticas culturales tradicionales amigables',21,''),(94,'otro',21,''),(95,'Sistemas silvopastoriles',22,''),(96,'Sistemas silvicultura',22,''),(97,'Agroforestería ',22,''),(98,'Cultivos mixtos',22,''),(99,'Cercas vivas/ barreras rompevientos/ corredores de conectividad de bosques',22,''),(100,'Bosques para protección de nacimientos de agua, quebradas, ríos y lagunas',22,''),(101,'Cercas o aislamiento para protección de nacimientos de agua, quebradas, ríos y lagunas',22,''),(102,'Buen uso de los recursos hídricos',22,''),(103,' Control biológico de plagas',22,''),(104,'Fertilización orgánica',22,''),(105,'Labranza mínima',22,''),(106,'Uso de fuentes alternativas de energía ',22,''),(107,'Uso de prácticas y/o tecnologías bajas en carbono ',22,''),(108,'Otro',22,''),(109,'Bosque andino o  niebla',23,''),(110,'Bosque húmedo o selva',23,''),(111,'Bosque montañoso/submontañoso',23,''),(112,'Bosque seco',23,''),(113,'Páramo',23,''),(114,'Humedal',23,''),(115,'Sabana',23,''),(116,'Manglar',23,''),(117,'Marinos',23,''),(118,'Ecosistema léntico/lóticos',23,''),(119,'otro',23,''),(120,'Certificación orgánica',24,''),(121,'Rainforest Alliance Certified',24,''),(122,'Análisis de Peligros y Puntos Críticos de Control (APPCC)',24,''),(123,'Buenas Prácticas de Manufactura (BPM)',24,''),(124,'Buenas Prácticas Agrícolas (BPA)',24,''),(125,'Buenas Prácticas Pecuarias',24,''),(126,'Comercio Justo',24,''),(127,'Otro',24,''),(128,'¿Cuenta con un sistema de identificación y selección de sus proveedores?',25,''),(129,'¿Tiene en cuenta criterios de responsabilidad social y ambiental para la selección de sus proveedores?',25,''),(130,'¿Cuenta con monitoreo y seguimiento a las actividades que realiza sus proveedores?',25,''),(131,'¿El negocio verifica el origen de la materia prima ? ',25,''),(132,'¿Cuenta con un listado actualizado con la documentación legal y otros requerimientos que debe cumplir sus proveedores de acuerdo a la naturaleza de su producto o servicio?',25,''),(133,'¿El negocio conoce los procesos y procedimientos de los proveedores?',25,''),(134,'¿Se promueve el encadenamiento en los procesos de la empresa?',25,''),(135,'¿En caso de aplicar, se evita la compra de insumos provenientes de organismos genéticamente modificados o transgénicos?',25,''),(136,'Dado el caso, describa otras actividades adicionales a las descritas anteriormente que estén enfocadas en asegurar la cadena de valor en el negocio:',25,''),(137,'Capacitación',26,''),(138,'Asistencia técnica',26,''),(139,'Recreación',26,''),(140,'Salud',26,''),(141,'Clientes',27,''),(142,' Alianzas',27,''),(143,'Canales de comercialización',27,''),(144,'Intermediarios',27,''),(145,'Agencias de viajes y turismo, agencias mayoristas y operadores de turismo. ',28,''),(146,'Establecimientos de alojamientos y hospedaje.',28,''),(147,'Operadores profesionales de congresos, ferias y convenciones.',28,''),(148,'Oficinas de representaciones turísticas. ',28,''),(149,'Guías de turismo',28,''),(150,'Establecimientos que presten servicios de turismo de interés social.',28,''),(151,'Si presta servicio de ecoturismo, etnoturismo, agroturismo y acuaturismo',28,'');
/*!40000 ALTER TABLE `pregunta_indicativa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programa`
--

DROP TABLE IF EXISTS `programa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `programa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `recurso_id` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_bin NOT NULL,
  `confirmacion` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_id` (`info_com_id`),
  KEY `opciones_id` (`pregunta_id`),
  KEY `recurso_id` (`recurso_id`),
  CONSTRAINT `programa_ibfk_1` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`),
  CONSTRAINT `programa_ibfk_2` FOREIGN KEY (`pregunta_id`) REFERENCES `pregunta_indicativa` (`id`),
  CONSTRAINT `programa_ibfk_3` FOREIGN KEY (`recurso_id`) REFERENCES `recurso` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programa`
--

LOCK TABLES `programa` WRITE;
/*!40000 ALTER TABLE `programa` DISABLE KEYS */;
INSERT INTO `programa` VALUES (1,2,137,2,'','no'),(2,2,138,2,'','no'),(3,2,139,2,'','no'),(4,2,140,2,'','no'),(5,5,137,2,'','no'),(6,5,138,2,'','no'),(7,5,139,2,'','no'),(8,5,140,2,'','no');
/*!40000 ALTER TABLE `programa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recurso`
--

DROP TABLE IF EXISTS `recurso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recurso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recurso`
--

LOCK TABLES `recurso` WRITE;
/*!40000 ALTER TABLE `recurso` DISABLE KEYS */;
INSERT INTO `recurso` VALUES (1,'Lo realizó con recursos propios'),(2,'Gestionó los recursos ante otra entidad');
/*!40000 ALTER TABLE `recurso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `region`
--

DROP TABLE IF EXISTS `region`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pais_id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pais_id` (`pais_id`),
  CONSTRAINT `region_ibfk_1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `region`
--

LOCK TABLES `region` WRITE;
/*!40000 ALTER TABLE `region` DISABLE KEYS */;
INSERT INTO `region` VALUES (3,1,'Pacifica'),(4,1,'Andina');
/*!40000 ALTER TABLE `region` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` VALUES (1,'Administrador de contenido'),(2,'Verificador'),(3,'Administrador verificador'),(4,'Representante legal');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sector`
--

DROP TABLE IF EXISTS `sector`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sector` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria_id` (`categoria_id`),
  CONSTRAINT `categoria_id` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sector`
--

LOCK TABLES `sector` WRITE;
/*!40000 ALTER TABLE `sector` DISABLE KEYS */;
INSERT INTO `sector` VALUES (1,1,'Biocomercio'),(2,1,'Agrosistemas Sostenibles'),(3,2,'Aprovechamiento y valoración de residuos'),(4,2,'Fuentes no convencionales de energía renovableFuentes no convencionales de energía renovable'),(5,2,'Construcción Sostenible '),(6,2,'Otros bienes y Productos Verdes Sostenibles '),(7,3,'Mercado Regulado'),(8,3,'Mercado Voluntario');
/*!40000 ALTER TABLE `sector` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sexo`
--

DROP TABLE IF EXISTS `sexo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sexo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sexo`
--

LOCK TABLES `sexo` WRITE;
/*!40000 ALTER TABLE `sexo` DISABLE KEYS */;
INSERT INTO `sexo` VALUES (1,'Masculino'),(2,'Femenino');
/*!40000 ALTER TABLE `sexo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `si_no`
--

DROP TABLE IF EXISTS `si_no`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `si_no` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `si_no`
--

LOCK TABLES `si_no` WRITE;
/*!40000 ALTER TABLE `si_no` DISABLE KEYS */;
INSERT INTO `si_no` VALUES (1,'Si'),(2,'No'),(4,'No aplica');
/*!40000 ALTER TABLE `si_no` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slide`
--

DROP TABLE IF EXISTS `slide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_bin NOT NULL,
  `id_img_page` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_img_page` (`id_img_page`),
  CONSTRAINT `slide1` FOREIGN KEY (`id_img_page`) REFERENCES `img_page` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slide`
--

LOCK TABLES `slide` WRITE;
/*!40000 ALTER TABLE `slide` DISABLE KEYS */;
INSERT INTO `slide` VALUES (3,'','',9),(4,'','',10);
/*!40000 ALTER TABLE `slide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sost_economica`
--

DROP TABLE IF EXISTS `sost_economica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sost_economica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `bien_servicio_id` varchar(100) COLLATE utf8_bin NOT NULL,
  `u_vendidadas_anuales` int(11) NOT NULL,
  `unidad_medida_id` int(11) NOT NULL,
  `cantidad_unidad` double NOT NULL,
  `costo_produccion_unidad` double NOT NULL,
  `precio_v_unitario` double NOT NULL,
  `ganancia_unidad` double NOT NULL,
  `ventas_anual` double NOT NULL,
  `ingreso_superior` int(11) NOT NULL COMMENT 'ingresos superior al costo? ',
  PRIMARY KEY (`id`),
  KEY `si_no_id` (`ingreso_superior`),
  KEY `unidad_medida_id` (`unidad_medida_id`),
  KEY `empresa_id` (`info_com_id`),
  CONSTRAINT `sost_eco_restrink1` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`),
  CONSTRAINT `sost_eco_restrink2` FOREIGN KEY (`unidad_medida_id`) REFERENCES `unidad_medida` (`id`),
  CONSTRAINT `sost_eco_restrink3` FOREIGN KEY (`ingreso_superior`) REFERENCES `si_no` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sost_economica`
--

LOCK TABLES `sost_economica` WRITE;
/*!40000 ALTER TABLE `sost_economica` DISABLE KEYS */;
INSERT INTO `sost_economica` VALUES (1,2,'163',0,1,0,0,0,0,0,1),(2,2,'164',0,1,0,0,0,0,0,1),(3,2,'165',0,1,0,0,0,0,0,1),(4,2,'166',0,1,0,0,0,0,0,1),(5,2,'167',0,1,0,0,0,0,0,1),(6,2,'168',0,1,0,0,0,0,0,1),(7,5,'163',0,1,0,0,0,0,0,1),(8,5,'164',0,1,0,0,0,0,0,1),(9,5,'165',0,1,0,0,0,0,0,1),(10,5,'166',0,1,0,0,0,0,0,1),(11,5,'167',0,1,0,0,0,0,0,1),(12,5,'168',0,1,0,0,0,0,0,1);
/*!40000 ALTER TABLE `sost_economica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subsector`
--

DROP TABLE IF EXISTS `subsector`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subsector` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sector_id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sector_id` (`sector_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subsector`
--

LOCK TABLES `subsector` WRITE;
/*!40000 ALTER TABLE `subsector` DISABLE KEYS */;
INSERT INTO `subsector` VALUES (1,1,'Maderables '),(2,1,'No maderables'),(3,1,'Productos derivados de fauna silvestre'),(4,1,'Turismo de naturaleza/Ecoturismo'),(5,1,'Recursos genéticos y productos derivados'),(6,2,'Sistemas de producción ecológico, biológico, orgánico '),(7,3,'Aprovechamiento y valoración de Residuos '),(8,4,'Energía Solar'),(9,4,'Energía Eólica'),(10,4,'Energía Geotérmica'),(11,4,'Biomasa'),(12,4,'Energía de los Mares'),(13,4,'Pequeños aprovechamientos hidroeléctricos'),(14,5,'Construcción Sostenible '),(15,6,'Otros bienes y Productos Verdes Sostenibles'),(16,7,'Mercado Regulado'),(17,8,'Mercado Voluntario');
/*!40000 ALTER TABLE `subsector` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tamaño_empresa`
--

DROP TABLE IF EXISTS `tamaño_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tamaño_empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tamaño_empresa`
--

LOCK TABLES `tamaño_empresa` WRITE;
/*!40000 ALTER TABLE `tamaño_empresa` DISABLE KEYS */;
INSERT INTO `tamaño_empresa` VALUES (2,'Micro empresa'),(3,'Pequeña empresa'),(4,'Mediana empresa');
/*!40000 ALTER TABLE `tamaño_empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tcip`
--

DROP TABLE IF EXISTS `tcip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tcip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresa` int(11) NOT NULL,
  `tcip_op_od` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_empresa` (`id_empresa`),
  KEY `tcip_op_od` (`tcip_op_od`),
  CONSTRAINT `fk_empresa_tcip` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`),
  CONSTRAINT `fk_tcip_op_tcip` FOREIGN KEY (`tcip_op_od`) REFERENCES `tcip_op` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tcip`
--

LOCK TABLES `tcip` WRITE;
/*!40000 ALTER TABLE `tcip` DISABLE KEYS */;
INSERT INTO `tcip` VALUES (1,4,1,'reverva'),(2,5,1,'reverva'),(3,6,1,'reverva'),(4,7,1,'reverva'),(5,8,1,'reverva'),(6,9,1,'reverva'),(7,10,1,'reverva'),(8,11,1,'reverva'),(9,12,1,'reverva'),(10,13,1,'reverva'),(11,14,1,'assdasd'),(12,15,1,'assdasd'),(13,16,1,'assdasd'),(14,17,1,'assdasd'),(15,18,1,'assdasd'),(16,19,1,'assdasd');
/*!40000 ALTER TABLE `tcip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tcip_op`
--

DROP TABLE IF EXISTS `tcip_op`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tcip_op` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tcip_op`
--

LOCK TABLES `tcip_op` WRITE;
/*!40000 ALTER TABLE `tcip_op` DISABLE KEYS */;
INSERT INTO `tcip_op` VALUES (1,'Reserva indígena'),(2,'Tierra de uso comunal'),(3,'Resguardo'),(4,'No aplica');
/*!40000 ALTER TABLE `tcip_op` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_contrato`
--

DROP TABLE IF EXISTS `tipo_contrato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_contrato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `directo` int(11) NOT NULL,
  `indirecto` int(11) NOT NULL,
  `temporal` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `info_com_id` (`info_com_id`),
  KEY `sexo_id` (`sexo_id`),
  CONSTRAINT `tipo_contrato_ibfk_1` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`),
  CONSTRAINT `tipo_contrato_ibfk_2` FOREIGN KEY (`sexo_id`) REFERENCES `sexo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_contrato`
--

LOCK TABLES `tipo_contrato` WRITE;
/*!40000 ALTER TABLE `tipo_contrato` DISABLE KEYS */;
INSERT INTO `tipo_contrato` VALUES (1,2,1,4,5,1),(2,2,2,7,1,2),(3,5,1,4,2,3),(4,5,2,4,7,4);
/*!40000 ALTER TABLE `tipo_contrato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_entidad`
--

DROP TABLE IF EXISTS `tipo_entidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_entidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_entidad`
--

LOCK TABLES `tipo_entidad` WRITE;
/*!40000 ALTER TABLE `tipo_entidad` DISABLE KEYS */;
INSERT INTO `tipo_entidad` VALUES (1,'Privada'),(2,'Pública'),(3,'ONG'),(4,'Otra');
/*!40000 ALTER TABLE `tipo_entidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_identificacion`
--

DROP TABLE IF EXISTS `tipo_identificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_identificacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_identificacion`
--

LOCK TABLES `tipo_identificacion` WRITE;
/*!40000 ALTER TABLE `tipo_identificacion` DISABLE KEYS */;
INSERT INTO `tipo_identificacion` VALUES (1,'CC'),(2,'TI'),(3,'RC'),(4,'NIT');
/*!40000 ALTER TABLE `tipo_identificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_persona`
--

DROP TABLE IF EXISTS `tipo_persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_persona`
--

LOCK TABLES `tipo_persona` WRITE;
/*!40000 ALTER TABLE `tipo_persona` DISABLE KEYS */;
INSERT INTO `tipo_persona` VALUES (1,'Natural'),(2,'Juridica');
/*!40000 ALTER TABLE `tipo_persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_personeria`
--

DROP TABLE IF EXISTS `tipo_personeria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_personeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_personeria`
--

LOCK TABLES `tipo_personeria` WRITE;
/*!40000 ALTER TABLE `tipo_personeria` DISABLE KEYS */;
INSERT INTO `tipo_personeria` VALUES (1,'SAS'),(2,'CORPORACIÓN'),(3,'ASOCIACIÓN');
/*!40000 ALTER TABLE `tipo_personeria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_tenencia`
--

DROP TABLE IF EXISTS `tipo_tenencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_tenencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_tenencia`
--

LOCK TABLES `tipo_tenencia` WRITE;
/*!40000 ALTER TABLE `tipo_tenencia` DISABLE KEYS */;
INSERT INTO `tipo_tenencia` VALUES (1,'Propietario con registro'),(2,'Arrendatario'),(3,'Posesión tradicional y/o ancestral de tierras y territorios de los pueblos indígenas'),(4,'Estatal'),(5,'Concesión'),(6,'Autorización del propietario o administrador del area'),(7,'Otra, Cual?');
/*!40000 ALTER TABLE `tipo_tenencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `total_empleados`
--

DROP TABLE IF EXISTS `total_empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `total_empleados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `total_rotulo_id` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `info_com_id` (`info_com_id`),
  KEY `sexo_id` (`sexo_id`),
  KEY `total_rotulo_id` (`total_rotulo_id`),
  CONSTRAINT `total_empleados_ibfk_1` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`),
  CONSTRAINT `total_empleados_ibfk_2` FOREIGN KEY (`total_rotulo_id`) REFERENCES `total_rotulo` (`id`),
  CONSTRAINT `total_empleados_ibfk_3` FOREIGN KEY (`sexo_id`) REFERENCES `sexo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `total_empleados`
--

LOCK TABLES `total_empleados` WRITE;
/*!40000 ALTER TABLE `total_empleados` DISABLE KEYS */;
INSERT INTO `total_empleados` VALUES (1,2,1,1,10),(2,2,1,2,7),(3,2,2,1,0),(4,2,2,2,0),(5,2,3,1,0),(6,2,3,2,0),(7,5,1,1,8),(8,5,1,2,5),(9,5,2,1,0),(10,5,2,2,0),(11,5,3,1,0),(12,5,3,2,0);
/*!40000 ALTER TABLE `total_empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `total_rotulo`
--

DROP TABLE IF EXISTS `total_rotulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `total_rotulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `total_rotulo`
--

LOCK TABLES `total_rotulo` WRITE;
/*!40000 ALTER TABLE `total_rotulo` DISABLE KEYS */;
INSERT INTO `total_rotulo` VALUES (1,'Total de empleados'),(2,'Temporada alta'),(3,'Temporada baja'),(4,'Condicion de vulnerabilidad'),(5,'Socios / colaboradores');
/*!40000 ALTER TABLE `total_rotulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `total_ventas`
--

DROP TABLE IF EXISTS `total_ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `total_ventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `costo_pro_insumos_totales` double NOT NULL,
  `costo_pro_mano_obra` double NOT NULL,
  `total_ventas_realizadas_ant` double NOT NULL,
  `fecha` year(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_id` (`info_com_id`),
  CONSTRAINT `total_ventas_restrink` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `total_ventas`
--

LOCK TABLES `total_ventas` WRITE;
/*!40000 ALTER TABLE `total_ventas` DISABLE KEYS */;
INSERT INTO `total_ventas` VALUES (1,2,0,0,0,2018),(2,5,0,0,0,2018);
/*!40000 ALTER TABLE `total_ventas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `turismo`
--

DROP TABLE IF EXISTS `turismo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `turismo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_com_id` int(11) NOT NULL,
  `pregunta_id` int(11) NOT NULL,
  `respuesta_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `info_com_id` (`info_com_id`),
  KEY `pregunta_id` (`pregunta_id`),
  KEY `respuesta_id` (`respuesta_id`),
  CONSTRAINT `turismo_fbk1` FOREIGN KEY (`info_com_id`) REFERENCES `informacion_complementaria` (`id`),
  CONSTRAINT `turismo_fbk2` FOREIGN KEY (`pregunta_id`) REFERENCES `pregunta_indicativa` (`id`),
  CONSTRAINT `turismo_fbk3` FOREIGN KEY (`respuesta_id`) REFERENCES `si_no` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `turismo`
--

LOCK TABLES `turismo` WRITE;
/*!40000 ALTER TABLE `turismo` DISABLE KEYS */;
INSERT INTO `turismo` VALUES (1,2,145,4),(2,2,146,4),(3,2,147,4),(4,2,148,4),(5,2,149,4),(6,2,150,4),(7,2,151,4),(8,5,145,4),(9,5,146,4),(10,5,147,4),(11,5,148,4),(12,5,149,4),(13,5,150,4),(14,5,151,4);
/*!40000 ALTER TABLE `turismo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unidad_medida`
--

DROP TABLE IF EXISTS `unidad_medida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unidad_medida` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidad_medida`
--

LOCK TABLES `unidad_medida` WRITE;
/*!40000 ALTER TABLE `unidad_medida` DISABLE KEYS */;
INSERT INTO `unidad_medida` VALUES (1,'Kg'),(2,'Lb');
/*!40000 ALTER TABLE `unidad_medida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `veri_empresa`
--

DROP TABLE IF EXISTS `veri_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `veri_empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresa` int(11) NOT NULL,
  `si_no_id` int(11) NOT NULL,
  `anio` year(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_empresa` (`id_empresa`),
  KEY `si_no_id` (`si_no_id`),
  CONSTRAINT `fk-empresa-veri` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`),
  CONSTRAINT `fk_si_no_veri` FOREIGN KEY (`si_no_id`) REFERENCES `si_no` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `veri_empresa`
--

LOCK TABLES `veri_empresa` WRITE;
/*!40000 ALTER TABLE `veri_empresa` DISABLE KEYS */;
INSERT INTO `veri_empresa` VALUES (10,10,1,1995),(11,10,1,1995),(12,13,2,0000),(13,13,2,0000),(14,14,1,1996),(15,14,1,1996),(16,15,1,1996),(17,15,1,1996),(18,15,1,0000),(19,16,1,1996),(20,16,1,1996),(21,16,1,0000),(22,17,1,1996),(23,17,1,1996),(24,17,1,0000),(25,18,1,1996),(26,18,1,1996),(27,18,1,0000),(28,19,1,1996),(29,19,1,1996),(30,19,1,0000);
/*!40000 ALTER TABLE `veri_empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verificador`
--

DROP TABLE IF EXISTS `verificador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verificador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_bin NOT NULL,
  `entidad` varchar(80) COLLATE utf8_bin NOT NULL,
  `area` varchar(80) COLLATE utf8_bin NOT NULL,
  `cargo` varchar(80) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_id` (`empresa_id`),
  CONSTRAINT `vrificador_relacion1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='la persona que hizo el trabajo de campo ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verificador`
--

LOCK TABLES `verificador` WRITE;
/*!40000 ALTER TABLE `verificador` DISABLE KEYS */;
INSERT INTO `verificador` VALUES (1,27,'Lesty','codechoco','principal','verifacdor'),(2,28,'juan camilo perea','codechoco','financiera','verificador'),(3,4,'kike','ninguna','administrativa','genrente'),(4,5,'kike','ninguna','administrativa','genrente'),(5,6,'kike','ninguna','administrativa','genrente'),(6,7,'kike','ninguna','administrativa','genrente'),(7,8,'kike','ninguna','administrativa','genrente'),(8,9,'kike','ninguna','administrativa','genrente'),(9,10,'kike','ninguna','administrativa','genrente'),(10,11,'kike','ninguna','administrativa','genrente'),(11,13,'kike','ninguna','administrativa','genrente'),(12,16,'kike','ninguna','administrativa','genrente'),(13,19,'kike','ninguna','administrativa','genrente');
/*!40000 ALTER TABLE `verificador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verificadorxempresa`
--

DROP TABLE IF EXISTS `verificadorxempresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verificadorxempresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  `fecha_asignacion` text COLLATE utf8_bin NOT NULL,
  `fecha_retiro` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `empresa_id` (`empresa_id`),
  KEY `persona_id` (`persona_id`),
  CONSTRAINT `verificador_restrink1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  CONSTRAINT `verificador_restrink2` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verificadorxempresa`
--

LOCK TABLES `verificadorxempresa` WRITE;
/*!40000 ALTER TABLE `verificadorxempresa` DISABLE KEYS */;
INSERT INTO `verificadorxempresa` VALUES (1,15,11,'22/09/2080',''),(2,11,11,'15/5/2013',''),(4,13,11,'25/2/2018',''),(7,18,24,'2018-05-18 08:03:01',''),(9,17,11,'2018-05-21 23:17:14',''),(10,1,24,'2018-05-28 07:39:37',''),(11,8,24,'2018-05-29 20:02:37',''),(12,20,11,'2018-06-08 02:21:14',''),(13,22,11,'2018-06-08 02:21:46',''),(14,23,11,'2018-06-08 03:25:21',''),(15,24,11,'2018-06-08 04:19:12',''),(16,25,11,'2018-06-08 04:32:36',''),(18,27,11,'2018-06-09 17:32:02',''),(19,28,11,'2018-06-09 17:56:09',''),(20,9,11,'2018-11-22 11:33:28',''),(21,10,11,'2018-11-26 10:47:20','');
/*!40000 ALTER TABLE `verificadorxempresa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-07 16:16:15
