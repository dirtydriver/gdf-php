-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 192.168.0.20    Database: intalk2
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `agazat`
--

DROP TABLE IF EXISTS `agazat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agazat` (
  `idagazat` int(11) NOT NULL AUTO_INCREMENT,
  `agazat` varchar(45) NOT NULL,
  PRIMARY KEY (`idagazat`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agazat`
--

LOCK TABLES `agazat` WRITE;
/*!40000 ALTER TABLE `agazat` DISABLE KEYS */;
INSERT INTO `agazat` VALUES (1,'IT'),(2,'Gazdaság'),(3,'Könyvelés'),(4,'Üzleti Elemző');
/*!40000 ALTER TABLE `agazat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dolgozo`
--

DROP TABLE IF EXISTS `dolgozo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dolgozo` (
  `dolgozo_id` int(11) NOT NULL AUTO_INCREMENT,
  `neve` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fizetes` varchar(45) NOT NULL,
  `agazat` int(11) NOT NULL,
  `neme` int(11) NOT NULL,
  PRIMARY KEY (`dolgozo_id`),
  UNIQUE KEY `dolgozo_id_UNIQUE` (`dolgozo_id`),
  KEY `agazat_FK_idx` (`agazat`),
  KEY `neme_FK_idx` (`neme`),
  CONSTRAINT `agazat_FK` FOREIGN KEY (`agazat`) REFERENCES `agazat` (`idagazat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `neme_FK` FOREIGN KEY (`neme`) REFERENCES `neme` (`idneme`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dolgozo`
--

LOCK TABLES `dolgozo` WRITE;
/*!40000 ALTER TABLE `dolgozo` DISABLE KEYS */;
/*!40000 ALTER TABLE `dolgozo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `neme`
--

DROP TABLE IF EXISTS `neme`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `neme` (
  `idneme` int(11) NOT NULL AUTO_INCREMENT,
  `neme` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idneme`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `neme`
--

LOCK TABLES `neme` WRITE;
/*!40000 ALTER TABLE `neme` DISABLE KEYS */;
INSERT INTO `neme` VALUES (1,'Nő'),(2,'Férfi');
/*!40000 ALTER TABLE `neme` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-06 23:10:39
