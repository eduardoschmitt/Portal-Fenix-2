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
-- Table structure for table `doa_recebe`
--

DROP TABLE IF EXISTS `doa_recebe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doa_recebe` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `codequipamento` int(11) DEFAULT NULL,
  `codinstpessoa` int(11) DEFAULT NULL,
  `codtransporte` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod`),
  KEY `fk_transporte_doarecebe` (`codtransporte`),
  KEY `fk_equipamento_doarecebe` (`codequipamento`),
  KEY `fk_instpessoa_doarecebe` (`codinstpessoa`),
  CONSTRAINT `fk_equipamento_doarecebe` FOREIGN KEY (`codequipamento`) REFERENCES `equipamentos` (`cod`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_instpessoa_doarecebe` FOREIGN KEY (`codinstpessoa`) REFERENCES `inst_pessoa` (`cod`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_transporte_doarecebe` FOREIGN KEY (`codtransporte`) REFERENCES `transporte_equip` (`cod`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doa_recebe`
--

LOCK TABLES `doa_recebe` WRITE;
/*!40000 ALTER TABLE `doa_recebe` DISABLE KEYS */;
/*!40000 ALTER TABLE `doa_recebe` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-29 23:15:38
