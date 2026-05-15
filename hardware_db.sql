/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-12.2.2-MariaDB, for osx10.19 (x86_64)
--
-- Host: localhost    Database: hardware_db
-- ------------------------------------------------------
-- Server version	12.2.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `componentes`
--

DROP TABLE IF EXISTS `componentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `componentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `categoria` enum('CPU','GPU','RAM','Storage','Motherboard','Other') DEFAULT 'Other',
  `estado` enum('Nuevo','Usado','Dañado') DEFAULT 'Nuevo',
  `fecha_registro` timestamp NULL DEFAULT current_timestamp(),
  `stock` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `componentes`
--

SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT, @@AUTOCOMMIT=0;
LOCK TABLES `componentes` WRITE;
/*!40000 ALTER TABLE `componentes` DISABLE KEYS */;
INSERT INTO `componentes` VALUES
(1,'NVIDIA RTX 4080 Super','GPU','Nuevo','2026-05-15 05:38:25',4),
(2,'ASUS ROG Maximus Z790','Motherboard','Nuevo','2026-05-15 05:38:25',2),
(3,'AMD Ryzen 7 7800X3D','CPU','Nuevo','2026-05-15 05:38:25',12),
(4,'Samsung 990 Pro 2TB NVMe','Storage','Nuevo','2026-05-15 05:38:25',7),
(5,'EVGA 750W N1 PSU','Other','Usado','2026-05-15 05:38:25',3),
(6,'Kingston FURY Beast 8GB','RAM','Usado','2026-05-15 05:38:25',5),
(7,'Gigabyte B550M DS3H','Motherboard','Usado','2026-05-15 05:38:25',4),
(8,'Intel Core i9-14900K','CPU','Nuevo','2026-05-15 05:38:25',5),
(9,'Crucial P3 500GB SSD','Storage','Nuevo','2026-05-15 05:38:25',4),
(10,'AMD Radeon RX 6600','GPU','Dañado','2026-05-15 05:38:25',0),
(11,'Pasta Térmica MX-4','Other','Nuevo','2026-05-15 05:38:25',50),
(12,'Corsair Vengeance 32GB DDR5','RAM','Nuevo','2026-05-15 05:38:25',20),
(13,'MSI MAG B650 Tomahawk','Motherboard','Nuevo','2026-05-15 05:38:25',9),
(14,'Intel Core i7-12700K','CPU','Usado','2026-05-15 05:38:25',1),
(15,'WD Black SN850X 1TB','Storage','Nuevo','2026-05-15 05:38:25',12),
(16,'ASUS TUF RTX 4070 Ti','GPU','Nuevo','2026-05-15 05:38:25',3),
(17,'Logitech G Pro X Superlight','Other','Nuevo','2026-05-15 05:38:25',8),
(18,'G.Skill Ripjaws 16GB DDR4','RAM','Nuevo','2026-05-15 05:38:25',25),
(19,'Biostar H610MH','Motherboard','Dañado','2026-05-15 05:38:25',0),
(20,'AMD Ryzen 9 7950X','CPU','Nuevo','2026-05-15 05:39:09',0),
(21,'Seagate Barracuda 2TB HDD','Storage','Usado','2026-05-15 05:39:09',18),
(22,'MSI GTX 1650 Ventus','GPU','Nuevo','2026-05-15 05:39:09',15),
(23,'ASRock Z790 Steel Legend','Motherboard','Nuevo','2026-05-15 05:39:09',6),
(24,'Intel Core i5-13400F','CPU','Nuevo','2026-05-15 05:39:09',8),
(25,'Teamgroup T-Force 32GB','RAM','Nuevo','2026-05-15 05:39:09',10),
(26,'Sandisk Extreme Portable 1TB','Storage','Nuevo','2026-05-15 05:39:09',5),
(27,'NZXT Kraken Elite 360','Other','Nuevo','2026-05-15 05:39:09',5),
(28,'AMD Radeon RX 7900 XTX','GPU','Nuevo','2026-05-15 05:39:09',2),
(29,'Kingston A400 240GB','Storage','Nuevo','2026-05-15 05:39:09',0),
(30,'EVGA Z790 Classified','Motherboard','Nuevo','2026-05-15 05:39:09',1),
(31,'Crucial Basics 4GB DDR4','RAM','Dañado','2026-05-15 05:39:09',1),
(32,'AMD Ryzen 5 5600G','CPU','Usado','2026-05-15 05:39:09',3),
(33,'Cooler Master Hyper 212','Other','Nuevo','2026-05-15 05:39:09',14),
(34,'NVIDIA RTX 3060 12GB','GPU','Usado','2026-05-15 05:39:09',6),
(35,'Razer BlackWidow V4','Other','Usado','2026-05-15 05:39:09',2);
/*!40000 ALTER TABLE `componentes` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;
SET AUTOCOMMIT=@OLD_AUTOCOMMIT;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2026-05-15  0:56:15
