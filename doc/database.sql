-- MySQL dump 10.13  Distrib 5.6.16, for Win32 (x86)
--
-- Host: localhost    Database: ramps
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `admin_ID` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_fname` varchar(255) NOT NULL,
  `admin_lname` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  PRIMARY KEY (`admin_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'test','test','TEST','TESTING','http://www.wpclipart.com/people/faces/men_faces/men_faces_04/face_man_long.png'),(2,'admin','d033e22ae348aeb5660fc2140aec35850c4da997','Admin','Nimda',''),(3,'alvar','pungar','Alvar','Pungar',''),(4,'tanel','viira','Tanel','Viira',''),(5,'rasmusr','reimaa','Rasmus','Reimaa',''),(6,'rasmusp','pind','Rasmus','Pind',''),(7,'lauri','nomtak','Lauri','Nõmtak','');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `author_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(11) unsigned DEFAULT NULL,
  `author_name` varchar(255) NOT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,1,'Oskar Luts');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `book_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) unsigned DEFAULT NULL,
  `genre_id` int(11) unsigned DEFAULT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_quantiy` varchar(255) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,1,1,'Kevade','24');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `client_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `trent_id` int(11) unsigned DEFAULT NULL,
  `mrent_id` int(11) unsigned DEFAULT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `pcode` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,1,1,'Piilu','Part','59912158547','5555555','piilu@part.ee'),(2,NULL,NULL,'Jaana','Lind','','5454546','jaana@lind.ee'),(3,NULL,NULL,'Jaana','Lind','49802306985','5454546','jaana@lind.ee');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genres` (
  `genre_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `genre_name` varchar(255) NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genres`
--

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` VALUES (1,'Draama');
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `moment_blacklist`
--

DROP TABLE IF EXISTS `moment_blacklist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moment_blacklist` (
  `mlist_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`mlist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moment_blacklist`
--

LOCK TABLES `moment_blacklist` WRITE;
/*!40000 ALTER TABLE `moment_blacklist` DISABLE KEYS */;
/*!40000 ALTER TABLE `moment_blacklist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `moment_rent`
--

DROP TABLE IF EXISTS `moment_rent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moment_rent` (
  `mrent_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) unsigned DEFAULT NULL,
  `book_id` int(11) unsigned DEFAULT NULL,
  `mrent_start_date` datetime NOT NULL,
  `mrent_end_date` datetime NOT NULL,
  PRIMARY KEY (`mrent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moment_rent`
--

LOCK TABLES `moment_rent` WRITE;
/*!40000 ALTER TABLE `moment_rent` DISABLE KEYS */;
INSERT INTO `moment_rent` VALUES (1,1,1,'2015-11-28 06:00:00','2015-11-30 06:00:00'),(2,1,1,'2015-11-11 00:00:00','2015-11-26 00:00:00');
/*!40000 ALTER TABLE `moment_rent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `total_blacklist`
--

DROP TABLE IF EXISTS `total_blacklist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `total_blacklist` (
  `tlist_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`tlist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `total_blacklist`
--

LOCK TABLES `total_blacklist` WRITE;
/*!40000 ALTER TABLE `total_blacklist` DISABLE KEYS */;
/*!40000 ALTER TABLE `total_blacklist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `total_rent`
--

DROP TABLE IF EXISTS `total_rent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `total_rent` (
  `trent_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) unsigned DEFAULT NULL,
  `book_id` int(11) unsigned DEFAULT NULL,
  `trent_start_date` datetime NOT NULL,
  `trent_end_date` datetime NOT NULL,
  PRIMARY KEY (`trent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `total_rent`
--

LOCK TABLES `total_rent` WRITE;
/*!40000 ALTER TABLE `total_rent` DISABLE KEYS */;
INSERT INTO `total_rent` VALUES (1,1,1,'2015-11-28 06:00:00','2015-11-30 06:00:00'),(3,1,1,'2015-11-19 00:00:00','2015-11-28 00:00:00');
/*!40000 ALTER TABLE `total_rent` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-29 18:35:51
