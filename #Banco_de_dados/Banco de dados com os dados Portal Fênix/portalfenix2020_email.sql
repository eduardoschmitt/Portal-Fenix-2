-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: portalfenix2020
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `email`
--

DROP TABLE IF EXISTS `email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `email` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(136) NOT NULL,
  `senha` varchar(136) NOT NULL,
  `codadm` int(11) DEFAULT NULL,
  `codinstpessoa` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod`),
  UNIQUE KEY `email` (`email`),
  KEY `fk_codadm_email` (`codadm`),
  KEY `fk_codinstpessoa_email` (`codinstpessoa`),
  CONSTRAINT `fk_codadm_email` FOREIGN KEY (`codadm`) REFERENCES `admnistrador` (`cod`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_codinstpessoa_email` FOREIGN KEY (`codinstpessoa`) REFERENCES `inst_pessoa` (`cod`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email`
--

LOCK TABLES `email` WRITE;
/*!40000 ALTER TABLE `email` DISABLE KEYS */;
INSERT INTO `email` VALUES (4,'valdercidefreitas@gmail.com','a32e2a17206569f27dbc5235114c3bb4a00049a6',NULL,4),(14,'andrevalerim@gmail.com','18535c227874180212f9679591736edf1b09787b',1,NULL),(15,'crisvalerim@hotmail.com','b698549b7710e4116250d85955dcdf88d8bfaf61',NULL,14),(29,'lucasvalerim@gmail.com','9b612e6447144ea740268bddfd03b10e95cadf81',NULL,28),(35,'duhdelas@gmail.com','14459f84a76df0cc57ffd1bf6a17149bfd09f82b',2,NULL);
/*!40000 ALTER TABLE `email` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-29 23:15:40
