CREATE DATABASE  IF NOT EXISTS `wodhard` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `wodhard`;
-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: wodhard
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.10.1

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
-- Table structure for table `gimnasio`
--

DROP TABLE IF EXISTS `gimnasio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gimnasio` (
  `idgimnasio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `fechaApertura` datetime NOT NULL,
  `imagenGym` varchar(150) NOT NULL,
  PRIMARY KEY (`idgimnasio`),
  UNIQUE KEY `idgimnasio_UNIQUE` (`idgimnasio`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gimnasio`
--

LOCK TABLES `gimnasio` WRITE;
/*!40000 ALTER TABLE `gimnasio` DISABLE KEYS */;
/*!40000 ALTER TABLE `gimnasio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gimnasioxsector`
--

DROP TABLE IF EXISTS `gimnasioxsector`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gimnasioxsector` (
  `idgimnasioXsector` int(11) NOT NULL AUTO_INCREMENT,
  `idgimnasio` int(11) NOT NULL,
  `idsectores` int(11) NOT NULL,
  PRIMARY KEY (`idgimnasioXsector`),
  UNIQUE KEY `idgimnasioXsector_UNIQUE` (`idgimnasioXsector`),
  KEY `idgimnasio_idx` (`idgimnasio`),
  KEY `idsectores_idx` (`idsectores`),
  CONSTRAINT `idgimnasio` FOREIGN KEY (`idgimnasio`) REFERENCES `gimnasio` (`idgimnasio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idsectores` FOREIGN KEY (`idsectores`) REFERENCES `sectores` (`idsectores`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gimnasioxsector`
--

LOCK TABLES `gimnasioxsector` WRITE;
/*!40000 ALTER TABLE `gimnasioxsector` DISABLE KEYS */;
/*!40000 ALTER TABLE `gimnasioxsector` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horario`
--

DROP TABLE IF EXISTS `horario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horario` (
  `idhorario` int(11) NOT NULL AUTO_INCREMENT,
  `hora_inicio` varchar(45) NOT NULL,
  `hora_fin` varchar(45) NOT NULL,
  PRIMARY KEY (`idhorario`),
  UNIQUE KEY `idhorario_UNIQUE` (`idhorario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horario`
--

LOCK TABLES `horario` WRITE;
/*!40000 ALTER TABLE `horario` DISABLE KEYS */;
/*!40000 ALTER TABLE `horario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instructor`
--

DROP TABLE IF EXISTS `instructor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instructor` (
  `idinstructor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `foto` varchar(45) NOT NULL,
  `comentario` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `tipoTelefono` varchar(45) NOT NULL,
  PRIMARY KEY (`idinstructor`),
  UNIQUE KEY `idinstructor_UNIQUE` (`idinstructor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instructor`
--

LOCK TABLES `instructor` WRITE;
/*!40000 ALTER TABLE `instructor` DISABLE KEYS */;
/*!40000 ALTER TABLE `instructor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registrousuario`
--

DROP TABLE IF EXISTS `registrousuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registrousuario` (
  `idregistroUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `fechaInicio` varchar(45) NOT NULL,
  `fecha_fin` varchar(45) NOT NULL,
  `idgimnasio` varchar(45) NOT NULL,
  `idusuario` varchar(45) NOT NULL,
  PRIMARY KEY (`idregistroUsuario`,`idgimnasio`,`idusuario`),
  UNIQUE KEY `idregistroUsuario_UNIQUE` (`idregistroUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registrousuario`
--

LOCK TABLES `registrousuario` WRITE;
/*!40000 ALTER TABLE `registrousuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `registrousuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rutina`
--

DROP TABLE IF EXISTS `rutina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rutina` (
  `idrutina` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `dia` varchar(15) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `imagenRutina` varchar(150) NOT NULL,
  PRIMARY KEY (`idrutina`),
  UNIQUE KEY `idrutina_UNIQUE` (`idrutina`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rutina`
--

LOCK TABLES `rutina` WRITE;
/*!40000 ALTER TABLE `rutina` DISABLE KEYS */;
/*!40000 ALTER TABLE `rutina` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rutinaxhorario`
--

DROP TABLE IF EXISTS `rutinaxhorario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rutinaxhorario` (
  `idrutinaXhorario` int(11) NOT NULL AUTO_INCREMENT,
  `idrutinaFK` int(11) NOT NULL,
  `idhorario` int(11) NOT NULL,
  PRIMARY KEY (`idrutinaXhorario`),
  UNIQUE KEY `idrutinaXhorario_UNIQUE` (`idrutinaXhorario`),
  KEY `idrutina_idx` (`idrutinaFK`),
  KEY `idhorario_idx` (`idhorario`),
  CONSTRAINT `idhorario` FOREIGN KEY (`idhorario`) REFERENCES `horario` (`idhorario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idrutinaFK` FOREIGN KEY (`idrutinaFK`) REFERENCES `rutina` (`idrutina`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rutinaxhorario`
--

LOCK TABLES `rutinaxhorario` WRITE;
/*!40000 ALTER TABLE `rutinaxhorario` DISABLE KEYS */;
/*!40000 ALTER TABLE `rutinaxhorario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rutinaxinstructor`
--

DROP TABLE IF EXISTS `rutinaxinstructor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rutinaxinstructor` (
  `idrutinaXinstructor` int(11) NOT NULL AUTO_INCREMENT,
  `idinstructor` int(11) NOT NULL,
  `idrutina` int(11) NOT NULL,
  PRIMARY KEY (`idrutinaXinstructor`),
  UNIQUE KEY `idrutinaXinstructor_UNIQUE` (`idrutinaXinstructor`),
  KEY `idinstructor_idx` (`idinstructor`),
  KEY `idrutina_idx` (`idrutina`),
  CONSTRAINT `idinstructor` FOREIGN KEY (`idinstructor`) REFERENCES `instructor` (`idinstructor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idrutina` FOREIGN KEY (`idrutina`) REFERENCES `rutina` (`idrutina`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rutinaxinstructor`
--

LOCK TABLES `rutinaxinstructor` WRITE;
/*!40000 ALTER TABLE `rutinaxinstructor` DISABLE KEYS */;
/*!40000 ALTER TABLE `rutinaxinstructor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sectores`
--

DROP TABLE IF EXISTS `sectores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sectores` (
  `idsectores` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`idsectores`),
  UNIQUE KEY `idsectores_UNIQUE` (`idsectores`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sectores`
--

LOCK TABLES `sectores` WRITE;
/*!40000 ALTER TABLE `sectores` DISABLE KEYS */;
/*!40000 ALTER TABLE `sectores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefono`
--

DROP TABLE IF EXISTS `telefono`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefono` (
  `idtelefono` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(10) NOT NULL,
  `tipoTelefono` varchar(45) NOT NULL,
  `idgimnasio` int(11) NOT NULL,
  PRIMARY KEY (`idtelefono`),
  UNIQUE KEY `idtelefono_UNIQUE` (`idtelefono`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefono`
--

LOCK TABLES `telefono` WRITE;
/*!40000 ALTER TABLE `telefono` DISABLE KEYS */;
/*!40000 ALTER TABLE `telefono` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `admin` varchar(45) NOT NULL,
  `passadmin` varchar(45) NOT NULL,
  `user` varchar(45) NOT NULL,
  `passuser` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'admin','123','victor','1111','');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-03 13:11:04
