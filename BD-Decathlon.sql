-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: decathlon
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.20-MariaDB

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

CREATE DATABASE `decathlon` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Natación'),(2,'Ciclismo'),(3,'Futbol'),(4,'Tenis'),(5,'Running');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion_corta` varchar(255) NOT NULL,
  `precio` double DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (1,1,'Vestido de Baño','Vestido de baño rosa para niña',25000,'vestido-de-bano-enterizo-natacion-leony-plum-nina-azul.jpg'),(2,2,'Bicicleta rin 29','Bicicleta montañera rin 29, 7 vel.',1200000,'bicicleta-de-mtb-rin-275quote-de-21-velrockrider-st-100-sport-bike-negro.jpg'),(4,4,'Raqueta Playeras','Set de Raqueta Playeras',65000,'set-palas-tenis-playa-sandever-experience-rojoslashazulslashverde.jpg'),(5,5,'Tenis hombre para running','Tenis hombre para trail running',260000,'tenis-trail-running-para-hombre-tr-azul-oscuroslashamarillo.jpg'),(6,1,'Tabla de surf','tabla de tamaño mediana',30000,'tabla-natacion-piscina-azul-negro.jpg'),(8,1,'Gorro natación','Gorro negro para natación',15000,'gorro-silicona-natacion-500-negro.jpg'),(9,1,'Gafas natación','Gafas de natación xbase azul',25000,'gafas-lentes-claros-natacion-xbase-mika-azul-estampado-l.jpg'),(10,2,'Guantes negros','Guantes negros infantil ciclismo sport',35000,'guantes-de-ciclismo-infantil-300-negro.jpg'),(11,2,'Casco Ciclismo','Casco para bicicleta urbano',130000,'casco-bicicleta-urbana-500-amarillo-fluorescente.jpg'),(12,2,'Morral Triatlón','Morral Triatlón negro sport ',240000,'morral-transicion-triatlon-aptonia-35l.jpg'),(13,3,'Pantaloneta Futbol','Pantaloneta Futbol negra M',25000,'pantaloneta-de-futbol-kipsta-f100-adulto-blanco.jpg'),(14,3,'Guantes Arquero','Guantes Arquero color negro',50000,'guantes-de-portero-kispta-f100-resist-adulto-negro-amarillo.jpg'),(15,3,'Guayos de futbol','Guayos de futbol agility 900',140000,'botas-de-futbol-kipsta-agility-900-hg-turf-ninos-rojo-naranja.jpg'),(16,3,'Minibalon de Futbol','Minibalon de Futbol turquesa',10000,'minibalon-de-futbol-sunny-300-talla-1-azul-turquesa.jpg'),(17,4,'Camiseta Polo Azul','Camiseta Polo azul dry',35000,'camiseta-polo-de-tenis-dry-100-hombre-azul-oscuro.jpg'),(18,4,'Raqueta Speedball','Raqueta Speedball azul',50000,'raqueta-de-speedball-turnball-racket-azul.jpg'),(19,4,'Bolas de Espuma de tenis','Bolas de Espuma de tenis',12000,'bola-de-espuma-de-tenis-tb100x2-rojo.jpg'),(20,5,'Reloj deportivo Rojo','Reloj deportivo con manecillas júnior',65000,'reloj-deportivo-con-manecillas-junior-a300-s-rojo.jpg'),(21,5,'Botella blanda flexible','Botella blanda tipo soft flask flexible',45000,'botella-flexible-para-correr-250ml-azul.jpg'),(22,5,'Licra mujer running','Licra mujerpara correr running',75000,'licra-para-correr-mujer-running-kiprun-care-negro-rosa-transpirables.jpg');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(255) NOT NULL,
  `usuario` tinyint(1) DEFAULT NULL,
  `producto` tinyint(1) DEFAULT NULL,
  `categoria` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` VALUES (1,'Admin',1,1,1),(2,'Deportista',0,0,1);
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `id_rol` int(11) NOT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `id_session` varchar(255) DEFAULT NULL,
  `fecha_session` datetime DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Nehomar','admin@dominio.com','e10adc3949ba59abbe56e057f20f883e','',1,'2021-11-04','01iejcgim0pmbb3eb9alq0jek2','2021-11-04 18:53:11',1),(2,'Miguel','prueba@dominio.com','e10adc3949ba59abbe56e057f20f883e','',2,'2021-11-04',NULL,NULL,1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'decathlon'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-04 19:02:50
