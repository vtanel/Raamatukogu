-- MySQL dump 10.13  Distrib 5.6.26, for Win32 (x86)
--
-- Host: localhost    Database: raamatukogu
-- ------------------------------------------------------
-- Server version	5.6.26

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
  `author_name` varchar(255) NOT NULL,
  PRIMARY KEY (`author_id`)
)
  ENGINE = InnoDB
  AUTO_INCREMENT = 13
  DEFAULT CHARSET = latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors`
VALUES (1, 'Oskar Luts'), (2, 'Anton H. Tammsaare'), (3, 'Autor1'), (4, 'luts'), (5, 'asd'), (11, 'Sipsik'),
  (12, 'auto 7');
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
)
  ENGINE = InnoDB
  AUTO_INCREMENT = 33
  DEFAULT CHARSET = latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books`
VALUES (1, 1, 1, 'Kevade', '28'), (2, 2, 2, 'Tõde ja õigus', '5'), (3, 3, 3, 'Raamat1', ''), (17, 5, 4, 'Raamat2', ''),
  (28, 2, 1, 'Tõde ja õigus II', '6'), (29, 1, 1, 'Suvi ', '3'), (30, 11, NULL, 'Klaabu', '7'),
  (31, 11, NULL, 'asd', '9'), (32, 12, 12, 'raama3 ', '7');
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
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `pcode` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`client_id`)
)
  ENGINE = InnoDB
  AUTO_INCREMENT = 5
  DEFAULT CHARSET = latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1, 'Piilu', 'Part', '59912158547', '5555555', 'lauri.nomtak@khk.ee'),
  (2, 'Jaana', 'Lind', '', '5454546', 'jaana@lind.ee'), (3, 'Jaana', 'Lind', '49802306985', '5454546', 'jaana@lind.ee'),
  (4, 'Lauri', 'Nõmtak', '12345678910', '97', 'laurinomtak@gmail.com');
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
)
  ENGINE = InnoDB
  AUTO_INCREMENT = 13
  DEFAULT CHARSET = latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genres`
--

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres`
VALUES (1, 'Draama'), (2, 'Komöödia'), (3, 'Tüüp1'), (4, 'asd'), (10, 'Laste'), (11, 'type'), (12, 'tere');
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reminders`
--

DROP TABLE IF EXISTS `reminders`;
/*!40101 SET @saved_cs_client = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reminders` (
  `reminder_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `send_date`   DATETIME                  DEFAULT NULL,
  `rent_id`     INT(10) UNSIGNED          DEFAULT NULL,
  PRIMARY KEY (`reminder_id`),
  KEY `rent_id` (`rent_id`),
  CONSTRAINT `reminders_ibfk_1` FOREIGN KEY (`rent_id`) REFERENCES `rent` (`rent_id`)
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reminders`
--

LOCK TABLES `reminders` WRITE;
/*!40000 ALTER TABLE `reminders` DISABLE KEYS */;
/*!40000 ALTER TABLE `reminders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rent`
--

DROP TABLE IF EXISTS `rent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rent` (
  `rent_id`         int(10) unsigned NOT NULL DEFAULT '0',
  `client_id`       int(11) unsigned          DEFAULT NULL,
  `book_id`         int(11) unsigned          DEFAULT NULL,
  `rent_start_date` datetime                  DEFAULT NULL,
  `rent_end_date`   datetime                  DEFAULT NULL,
  `last_reminder`   DATETIME                  DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rent`
--

LOCK TABLES `rent` WRITE;
/*!40000 ALTER TABLE `rent` DISABLE KEYS */;
INSERT INTO `rent` VALUES (0, 2, 1, '2015-11-02 14:17:50', '2015-12-13 14:17:57', '2016-12-15 15:35:08'),
  (1, 1, 1, '2015-11-28 06:00:00', '2015-11-30 06:00:00', '2016-12-15 15:35:20'),
  (2, 4, 1, '2015-11-11 00:00:00', '2015-12-26 00:00:00', '2016-12-15 15:35:22'),
  (3, 4, 2, '2015-11-02 15:09:39', '2015-12-01 15:09:43', '2016-12-15 15:35:24'),
  (4, 1, 1, '2015-12-15 15:38:10', '2014-12-15 15:38:13', '2016-01-04 08:52:56'),
  (5, 1, 1, '2015-12-15 15:40:51', '2014-12-15 15:40:53', '2016-01-04 08:49:27'),
  (6, 1, 1, '2016-01-04 08:55:24', '2016-01-04 08:55:27', '2016-01-04 08:55:30');
/*!40000 ALTER TABLE `rent` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-04  9:12:20
