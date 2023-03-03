-- MySQL dump 10.19  Distrib 10.3.36-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sae203Base
-- ------------------------------------------------------
-- Server version	10.3.36-MariaDB-0+deb10u2

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
-- Table structure for table `auteurs`
--

DROP TABLE IF EXISTS `auteurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auteurs` (
  `auteur_id` int(11) NOT NULL AUTO_INCREMENT,
  `auteur_nom` varchar(25) NOT NULL,
  `auteur_prenom` varchar(25) NOT NULL,
  `auteur_nat` varchar(25) NOT NULL,
  PRIMARY KEY (`auteur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auteurs`
--

LOCK TABLES `auteurs` WRITE;
/*!40000 ALTER TABLE `auteurs` DISABLE KEYS */;
INSERT INTO `auteurs` VALUES (1,'rara','zeze','suisse'),(2,'Chappuis','Philippe','Francais');
/*!40000 ALTER TABLE `auteurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bandes_dessinees`
--

DROP TABLE IF EXISTS `bandes_dessinees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bandes_dessinees` (
  `bd_id` int(11) NOT NULL AUTO_INCREMENT,
  `bd_titre` char(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `bd_annee` int(11) NOT NULL,
  `bd_prix` decimal(10,0) NOT NULL,
  `bd_photo` char(30) NOT NULL,
  `db_nb_pages` int(11) NOT NULL,
  `bd_resume` char(200) NOT NULL,
  `_auteur_id` int(11) NOT NULL,
  PRIMARY KEY (`bd_id`),
  KEY `creer` (`_auteur_id`),
  CONSTRAINT `creer` FOREIGN KEY (`_auteur_id`) REFERENCES `auteurs` (`auteur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bandes_dessinees`
--

LOCK TABLES `bandes_dessinees` WRITE;
/*!40000 ALTER TABLE `bandes_dessinees` DISABLE KEYS */;
INSERT INTO `bandes_dessinees` VALUES (1,'Toto en MMI',2022,30,'mmitutu.jpg',40,'top MMI avec toto',1);
/*!40000 ALTER TABLE `bandes_dessinees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clip`
--

DROP TABLE IF EXISTS `clip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clip` (
  `clip_id` int(11) NOT NULL AUTO_INCREMENT,
  `clip_titre` char(30) NOT NULL,
  `clip_annee` char(4) NOT NULL,
  `clip_nbr_vues` int(10) NOT NULL,
  `clip_photo` char(30) NOT NULL,
  `clip_album` char(40) NOT NULL,
  `clip_type` char(30) NOT NULL,
  `_product_id` int(1) NOT NULL,
  PRIMARY KEY (`clip_id`),
  KEY `produire` (`_product_id`),
  CONSTRAINT `produire` FOREIGN KEY (`_product_id`) REFERENCES `product` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clip`
--

LOCK TABLES `clip` WRITE;
/*!40000 ALTER TABLE `clip` DISABLE KEYS */;
/*!40000 ALTER TABLE `clip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_nom` int(30) NOT NULL,
  `product_prenom` int(30) NOT NULL,
  `product_nat` int(30) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-02  9:01:22
