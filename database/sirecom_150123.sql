-- MariaDB dump 10.19  Distrib 10.10.2-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: sirecom
-- ------------------------------------------------------
-- Server version	10.10.2-MariaDB

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
-- Table structure for table `apoyos_didacticos`
--

DROP TABLE IF EXISTS `apoyos_didacticos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apoyos_didacticos` (
  `matricula` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apoyos_didacticos`
--

LOCK TABLES `apoyos_didacticos` WRITE;
/*!40000 ALTER TABLE `apoyos_didacticos` DISABLE KEYS */;
INSERT INTO `apoyos_didacticos` VALUES
('A-10085643','Paola','Hernandez'),
('C-9656355','Jesus','Montes'),
('C-9987858','Luis','Gonz├ílez');
/*!40000 ALTER TABLE `apoyos_didacticos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discentes`
--

DROP TABLE IF EXISTS `discentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `discentes` (
  `matricula` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discentes`
--

LOCK TABLES `discentes` WRITE;
/*!40000 ALTER TABLE `discentes` DISABLE KEYS */;
INSERT INTO `discentes` VALUES
('A-10042358','Teresa','Morales Vega'),
('A-10050872','Alejandra','Valdivia Barajas'),
('A-10055395','Nancy Mercedes','Huerta Morales'),
('A-10061381','Maria Mercedes','Ru├¡z Palacios'),
('A-10061382','Lucely','Gonz├ílez Escamilla'),
('A-10061383','Kenya','Elizalde Mart├¡nez'),
('A-10061384','M├│nica Selene','Mart├¡nez Alvarez'),
('A-10061385','Dulce Noelia','Flores L├│pez'),
('A-10061386','Dania Itzel','Hern├índez Guzm├ín'),
('A-10061491','Dennisse Aranzazu','Paz Vazquez'),
('A-10061492','Haley Valeria','Avenda├▒o Sanchez'),
('A-10061493','Elizabeth Sarai','Mart├¡nez Molina'),
('A-10061494','Alejandra Yamileth','Ledezma Aguirre'),
('A-10061495','Nancy Maddiela','Salas Maldonado'),
('A-10061496','Kenia Elizabeth','Rodr├¡guez Moreno'),
('A-10061497','Pamela Dominique','Galv├ín Ru├¡z'),
('A-10061523','Maria Del Rosario','Escamilla Mendoza'),
('A-10061527','Mariana Yahomi','Arias Zetina'),
('A-10061672','Cipactli','Castellanos Cruz'),
('A-10061764','Nancy Itzel','Rojas Ayala'),
('D-4797580','Abraham Eduardo','L├│pez Arellano'),
('D-4798512','Erick Leonardo','Camargo Pacheco'),
('D-4798856','Jonathan Gamaliel','Santana Zamora'),
('D-4893549','Daniel','Olvera Zarate'),
('D-5247493','Johann Alejandro','S├ínchez Mart├¡nez'),
('D-5415400','├üngel De Jes├║s','Mil Gonz├ílez'),
('D-5472693','Eduardo','L├│pez Gonz├ílez'),
('D-5475140','Yael','Salgado S├ínchez'),
('D-5531874','Jos├® Alberto','De La Cruz M├®ndez'),
('D-5684277','Mauricio','Moreno G├│mez'),
('D-5895030','Alex Jair','Sol├¡s Villa'),
('D-5908473','Daniel','Esparza Gonz├ílez'),
('D-5941641','Julio Cesar','Vidal Hern├índez'),
('D-5975001','Seigi','Alatriste Trejo'),
('D-6049033','David Natan','Guevara Sanchez'),
('D-6223352','Christian Jair','Loeza Ram├¡rez'),
('D-6250292','Edgar','├üvila Carrillo'),
('D-6365023','Osvaldo','Jim├®nez Grande'),
('D-6612432','Emilio Iv├ín','Esteban Cabrera');
/*!40000 ALTER TABLE `discentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pc`
--

DROP TABLE IF EXISTS `pc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pc` (
  `pc_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `discente_matricula` varchar(10) NOT NULL,
  `direccion_MAC` varchar(17) NOT NULL,
  `sistema_operativo` varchar(15) NOT NULL,
  `procesador` varchar(25) NOT NULL,
  `memoria_RAM` int(11) NOT NULL,
  `marca` varchar(15) NOT NULL,
  `modelo` varchar(25) NOT NULL,
  `apoyos_matricula` varchar(10) NOT NULL,
  PRIMARY KEY (`pc_id`),
  UNIQUE KEY `direccion_MAC` (`direccion_MAC`),
  KEY `pc_discente_matricula_fk` (`discente_matricula`),
  KEY `pc_apoyos_matricula_fk` (`apoyos_matricula`),
  CONSTRAINT `pc_apoyos_matricula_fk` FOREIGN KEY (`apoyos_matricula`) REFERENCES `apoyos_didacticos` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pc_discente_matricula_fk` FOREIGN KEY (`discente_matricula`) REFERENCES `discentes` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pc`
--

LOCK TABLES `pc` WRITE;
/*!40000 ALTER TABLE `pc` DISABLE KEYS */;
INSERT INTO `pc` VALUES
(1,'D-4798512','00:1B:44:11:3A:B0','Windows','Intel Core i3-11',8,'Acer','Aspire 3','A-10085643'),
(2,'A-10061494','00:1B:44:11:3A:B1','Windows','Intel Core i5-11',8,'HP','Pavilion','C-9656355'),
(3,'D-4798512','00:1B:44:11:3A:B3','Windows','Intel Celeron',8,'DELL','Latitude','A-10085643'),
(4,'A-10061523','00:1B:44:11:3A:B4','Windows','Intel Core i7-11',16,'ASUS','TUF F15','C-9656355'),
(5,'A-10061764','00:1B:44:11:3A:B5','Linux','Intel Core i5-10',8,'MSI','GF63','C-9656355'),
(6,'A-10061496','00:1B:44:11:3A:B6','Windows','Intel Core i7-10',16,'MSI','GF63','A-10085643'),
(7,'D-5415400','00:1B:44:11:3A:B7','Windows','Intel Core i5-10',8,'MSI','GT76','C-9656355'),
(8,'D-5908473','00:1B:44:11:3A:B8','Windows','Intel Core i5-9',8,'Acer','Aspire','C-9656355'),
(9,'D-5941641','00:1B:44:11:3A:B9','Linux','Intel Core i5-10',16,'MSI','GF63','C-9656355'),
(10,'A-10055395','00:1B:44:11:3A:C0','Windows','Intel Celeron',8,'Acer','Aspire 3','A-10085643'),
(11,'A-10061494','00:1B:44:11:3A:C1','Windows','Intel Core i5-7',8,'HP','Pavilion','C-9656355'),
(12,'D-5415400','00:1B:44:11:3A:C3','Windows','Intel Celeron',8,'DELL','Latitude','A-10085643'),
(13,'A-10061523','00:1B:44:11:3A:C4','Windows','Intel Core i7-11',16,'ASUS','TUF F15','C-9656355'),
(14,'A-10061494','00:1B:44:11:3A:C5','Linux','Intel Core i5-10',8,'MSI','GF63','C-9656355'),
(15,'A-10061385','00:1B:44:11:3A:C6','Windows','Intel Core i7-10',16,'MSI','GF63','A-10085643'),
(16,'D-5415400','00:1B:44:11:3A:C7','Windows','Intel Core i5-10',8,'MSI','GL66','C-9656355'),
(17,'D-5975001','00:1B:44:11:3A:C8','Linux','Intel Core i5-9',4,'Acer','Aspire','C-9656355'),
(18,'D-5941641','00:1B:44:11:3A:D9','Linux','Intel Core i5-10',8,'MSI','GF63','C-9656355');
/*!40000 ALTER TABLE `pc` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-15 21:56:34
