-- MySQL dump 10.19  Distrib 10.3.32-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: mysql    Database: test
-- ------------------------------------------------------
-- Server version	10.3.32-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `apartamentos`
--

DROP TABLE IF EXISTS `apartamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apartamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `parqueadero` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `torre_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `torre_id` (`torre_id`),
  CONSTRAINT `apartamentos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `apartamentos_ibfk_2` FOREIGN KEY (`torre_id`) REFERENCES `torres` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apartamentos`
--

LOCK TABLES `apartamentos` WRITE;
/*!40000 ALTER TABLE `apartamentos` DISABLE KEYS */;
INSERT INTO `apartamentos` VALUES (2,1,'L3',6,1);
/*!40000 ALTER TABLE `apartamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `areas_comunes`
--

DROP TABLE IF EXISTS `areas_comunes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `areas_comunes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` int(11) NOT NULL,
  `conjunto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `conjunto_id` (`conjunto_id`),
  CONSTRAINT `areas_comunes_ibfk_1` FOREIGN KEY (`conjunto_id`) REFERENCES `conjuntos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areas_comunes`
--

LOCK TABLES `areas_comunes` WRITE;
/*!40000 ALTER TABLE `areas_comunes` DISABLE KEYS */;
/*!40000 ALTER TABLE `areas_comunes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `arrendamiento`
--

DROP TABLE IF EXISTS `arrendamiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `arrendamiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `apartamento_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `apartamento_id` (`apartamento_id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `arrendamiento_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `arrendamiento_ibfk_2` FOREIGN KEY (`apartamento_id`) REFERENCES `apartamentos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arrendamiento`
--

LOCK TABLES `arrendamiento` WRITE;
/*!40000 ALTER TABLE `arrendamiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `arrendamiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conjuntos`
--

DROP TABLE IF EXISTS `conjuntos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conjuntos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `dir` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `conjuntos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conjuntos`
--

LOCK TABLES `conjuntos` WRITE;
/*!40000 ALTER TABLE `conjuntos` DISABLE KEYS */;
INSERT INTO `conjuntos` VALUES (1,'diamante 2','bucaramanga 3',6),(7,'nuevo','giron',6),(8,'Prueba','El bosque',7);
/*!40000 ALTER TABLE `conjuntos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservas`
--

DROP TABLE IF EXISTS `reservas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `area_comun_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `area_comun_id` (`area_comun_id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `conjuntos` (`id`),
  CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`area_comun_id`) REFERENCES `areas_comunes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservas`
--

LOCK TABLES `reservas` WRITE;
/*!40000 ALTER TABLE `reservas` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `torres`
--

DROP TABLE IF EXISTS `torres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `torres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `conjunto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `conjunto_id` (`conjunto_id`),
  CONSTRAINT `torres_ibfk_1` FOREIGN KEY (`conjunto_id`) REFERENCES `conjuntos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `torres`
--

LOCK TABLES `torres` WRITE;
/*!40000 ALTER TABLE `torres` DISABLE KEYS */;
INSERT INTO `torres` VALUES (1,'201',1),(4,'c2',1);
/*!40000 ALTER TABLE `torres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `rol` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (6,'johan 2','johanca','e10adc3949ba59abbe56e057f20f883e',2),(7,'asd','asd','asd',1),(9,'diana','diana','e10adc3949ba59abbe56e057f20f883e',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-10 21:21:29
