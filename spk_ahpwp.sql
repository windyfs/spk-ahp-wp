-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: spk_ahpwp
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alternatif`
--

DROP TABLE IF EXISTS `alternatif`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `penghasilan` double DEFAULT NULL,
  `tanggungan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_alternatif`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alternatif`
--

LOCK TABLES `alternatif` WRITE;
/*!40000 ALTER TABLE `alternatif` DISABLE KEYS */;
INSERT INTO `alternatif` VALUES (1,'Agus',28,500000,2),(2,'Budi',35,2000000,3),(3,'Bayu',22,3000000,1),(4,'Dino',40,1000000,4),(5,'Eko',30,6000000,2),(6,'Fandi',25,4000000,1),(7,'Gigih',32,750000,3),(8,'Hadi',38,1000000,4),(9,'Karyo',27,450000,2),(10,'Joko',33,500000,3),(11,'Jaiman',23,500000,1),(12,'Latif',42,3000000,4),(13,'Maman',29,550000,2),(14,'Noto',36,900000,3),(15,'Farhan',24,3000000,1),(16,'Paijo',41,1000000,4),(17,'Rizal',31,2000000,3),(18,'Satrio',26,480000,2),(19,'Tono',34,820000,3),(20,'Udin',21,2000000,1),(22,'Wahyu',28,3000000,2),(23,'Zahid',37,3000000,3),(24,'Yanto',22,1000000,1),(25,'Zain',45,4000000,4),(26,'Slamet Riyadi',40,200000,3),(27,'Siti Aminah',35,1200000,4),(28,'Bambang Setiawan',48,1800000,2),(29,'Sumarni',42,1600000,5),(30,'Joko Santoso',38,1400000,6),(31,'Suparno',33,1300000,3),(32,'Wahyu Widodo',29,1100000,4),(33,'Sri Utami',45,1700000,2),(34,'Suryadi',32,1300000,3),(35,'Yulianto',37,4000000,4),(36,'Suparno',50,2000000,2),(37,'Sumirah',39,1500000,3),(38,'Sutarno',31,1200000,5),(39,'Totok Sugiono',43,1600000,2),(40,'Sigit Santoso',56,1400000,7),(41,'Supriyanto',41,1700000,3),(42,'Harianto',28,1000000,4),(43,'Ika Rahayu',47,1900000,2),(44,'Joko Saputra',34,1300000,3),(45,'Yuni Indah',46,1800000,4),(66,'Paidi',40,1000000,1);
/*!40000 ALTER TABLE `alternatif` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kriteria`
--

-- --
-- DROP TABLE IF EXISTS `kriteria`;
-- /*!40101 SET @saved_cs_client     = @@character_set_client */;
-- /*!50503 SET character_set_client = utf8mb4 */;
-- CREATE TABLE `kriteria` (
--   `id` int(11) NOT NULL AUTO_INCREMENT,
--   `nama_kriteria` varchar(50) NOT NULL,
--   `nilai_usia` float DEFAULT NULL,
--   `nilai_penghasilan` float DEFAULT NULL,
--   `nilai_tanggungan` float DEFAULT NULL,
--   `jenis` varchar(10) DEFAULT NULL,
--   `bobot` float DEFAULT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
-- /*!40101 SET character_set_client = @saved_cs_client */;
-- --

-- --
-- -- Dumping data for table `kriteria`
-- --

-- --
-- LOCK TABLES `kriteria` WRITE;
-- /*!40000 ALTER TABLE `kriteria` DISABLE KEYS */;
-- INSERT INTO `kriteria` VALUES (1,'Usia',1,7,5,'benefit',0.730645),(2,'Penghasilan',0.143,1,0.333,'cost',0.0809612),(3,'Tanggungan',0.2,3,1,'benefit',0.188394);
-- /*!40000 ALTER TABLE `kriteria` ENABLE KEYS */;
-- UNLOCK TABLES;
-- --

--
-- Dumping routines for database 'spk_ahpwp'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-25 22:08:16
