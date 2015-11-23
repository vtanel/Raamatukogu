-- MySQL dump 10.13  Distrib 5.6.26, for Win32 (x86)
--
-- Host: localhost    Database: raamatukogu
-- ------------------------------------------------------
-- Server version	5.6.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE = @@TIME_ZONE */;
/*!40103 SET TIME_ZONE = '+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS = @@UNIQUE_CHECKS, UNIQUE_CHECKS = 0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS = 0 */;
/*!40101 SET @OLD_SQL_MODE = @@SQL_MODE, SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES = @@SQL_NOTES, SQL_NOTES = 0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `admin_ID`    INT(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_fname` varchar(255) NOT NULL,
  `admin_lname` varchar(255) NOT NULL,
  `admin_image` TEXT    NOT NULL,
  PRIMARY KEY (`admin_ID`)
)
  ENGINE = InnoDB
  AUTO_INCREMENT = 8
  DEFAULT CHARSET = latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1, 'test', 'test', 'TEST', 'TESTING',
                             'http://www.wpclipart.com/people/faces/men_faces/men_faces_04/face_man_long.png'),
  (2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', 'Nimda', ''),
  (3, 'alvar', 'pungar', 'Alvar', 'Pungar', ''), (4, 'tanel', 'viira', 'Tanel', 'Viira', ''),
  (5, 'rasmusr', 'reimaa', 'Rasmus', 'Reimaa', ''), (6, 'rasmusp', 'pind', 'Rasmus', 'Pind', ''),
  (7, 'lauri', 'nomtak', 'Lauri', 'Nõmtak', '');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blacklist`
--

DROP TABLE IF EXISTS `blacklist`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blacklist` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `client_ID` INT(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`client_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blacklist`
--

LOCK TABLES `blacklist` WRITE;
/*!40000 ALTER TABLE `blacklist` DISABLE KEYS */;
/*!40000 ALTER TABLE `blacklist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `book_ID`       INT(11) NOT NULL AUTO_INCREMENT,
  `book_title` varchar(255) NOT NULL,
  `book_author` varchar(255) NOT NULL,
  `book_type` varchar(255) NOT NULL,
  `book_quantity` INT(11) NOT NULL,
  PRIMARY KEY (`book_ID`)
)
  ENGINE = InnoDB
  AUTO_INCREMENT = 66
  DEFAULT CHARSET = latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (60, 'Kevade', 'Luts', 'Draama', 3), (61, 'wqdqwed', 'dsadsa', 'dasdsa', 21),
  (62, 'wqdqwed', 'dsadsa', 'dasdsa', 21), (63, 'wqdqwed', 'dsadsa', 'dasdsa', 21),
  (64, 'wqdqwed', 'dsadsa', 'dasdsa', 21), (65, 'test', 'test', 'test', 1);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `p_code` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `blacklist` tinyint(1) NOT NULL,
  `total_rent` int(11) NOT NULL,
  `client_ID` INT(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`client_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client`
VALUES ('asasd', 'asdsad', 2147483647, 123, 'asd', 0, 1, 1), ('asd', 'asd', 2147483647, 1212, 'asd', 0, 1, 2),
  ('asd', 'asd', 2147483647, 1212, 'asd', 0, 1, 3), ('asd', 'asd', 2147483647, 123, 'asd', 0, 1, 4);
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE = @OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE = @OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS = @OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES = @OLD_SQL_NOTES */;

-- Dump completed on 2015-11-23 15:15:05
