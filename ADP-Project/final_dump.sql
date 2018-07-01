-- MySQL dump 10.13  Distrib 5.7.15, for Linux (x86_64)
--
-- Host: localhost    Database: PROJECT
-- ------------------------------------------------------
-- Server version	5.7.15-0ubuntu0.16.04.1

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
-- Current Database: `PROJECT`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `PROJECT` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `PROJECT`;

--
-- Table structure for table `Bus`
--

DROP TABLE IF EXISTS `Bus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Bus` (
  `bus_name` varchar(6) NOT NULL,
  `no_of_seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Bus`
--

LOCK TABLES `Bus` WRITE;
/*!40000 ALTER TABLE `Bus` DISABLE KEYS */;
INSERT INTO `Bus` VALUES ('A',29),('B',29),('C',29),('D',29),('V1',29),('V2',29);
/*!40000 ALTER TABLE `Bus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Drivers`
--

DROP TABLE IF EXISTS `Drivers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Drivers` (
  `Name` varchar(50) NOT NULL,
  `Contact_no` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Drivers`
--

LOCK TABLES `Drivers` WRITE;
/*!40000 ALTER TABLE `Drivers` DISABLE KEYS */;
INSERT INTO `Drivers` VALUES ('raju',1234567891),('sanju',987654322);
/*!40000 ALTER TABLE `Drivers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Reservation_log`
--

DROP TABLE IF EXISTS `Reservation_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Reservation_log` (
  `passanger_name` varchar(50) NOT NULL,
  `source` varchar(10) NOT NULL,
  `time` time NOT NULL,
  `DateofJourney` date NOT NULL,
  `book_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `res_no` int(11) NOT NULL AUTO_INCREMENT,
  `seat_no` int(11) NOT NULL,
  `vehicle` varchar(8) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  PRIMARY KEY (`res_no`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Reservation_log`
--

LOCK TABLES `Reservation_log` WRITE;
/*!40000 ALTER TABLE `Reservation_log` DISABLE KEYS */;
INSERT INTO `Reservation_log` VALUES ('thuanbamlung','kamand','12:00:00','2016-11-21','2016-11-22 02:46:13',103,6,'D','gai'),('pramod','kamand','08:00:00','2016-11-21','2016-11-22 08:10:48',105,7,'V1','sam'),('gaingamsin','kamand','12:00:00','2016-11-24','2016-11-22 11:52:48',106,14,'D','gai');
/*!40000 ALTER TABLE `Reservation_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Stuff`
--

DROP TABLE IF EXISTS `Stuff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Stuff` (
  `user_name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Stuff`
--

LOCK TABLES `Stuff` WRITE;
/*!40000 ALTER TABLE `Stuff` DISABLE KEYS */;
/*!40000 ALTER TABLE `Stuff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `user_name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES ('dkmehra','123','dk','devendramehra437@gmail.com'),('gai','gai','gai','gaingamsinpamei@gmail.com'),('jonny','123','pramod','jontypurbia.udr@gmail.com'),('jonty_purbia','116','Jonty Purbia','jontypurbia.udr@gmail.com'),('Pj','123','Pramod Jonwal','jonwalpramod1122@gmail.com'),('sam','sam','sam','gaingamsinpamei@gmail.com');
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account` (
  `user_name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `account`
--

LOCK TABLES `account` WRITE;
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` VALUES ('admin','admin','gaingamsin','gaingamsinpamei@gmail.com'),('sam','sam','sam','gaingamsinpamei@gmail.com'),('student','123g','gaingamsin','gaingamsinpamei@gmail.com');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `user_name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('admin','admin','gaingamsin','gaingamsinpamei@gmail.com');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schedule` (
  `vehicle` varchar(8) NOT NULL,
  `timing` time NOT NULL,
  `source` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule`
--

LOCK TABLES `schedule` WRITE;
/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
INSERT INTO `schedule` VALUES ('V1','07:00:00','mandi'),('B','08:00:00','mandi'),('V2','09:00:00','mandi'),('A','10:00:00','mandi'),('V2','11:00:00','mandi'),('C','12:00:00','mandi'),('D','13:00:00','mandi'),('B','14:00:00','mandi'),('A','16:00:00','mandi'),('C','17:00:00','mandi'),('V2','18:00:00','mandi'),('C','19:30:00','mandi'),('D','20:30:00','mandi'),('D','07:00:00','kamand'),('V1','08:00:00','kamand'),('A','09:00:00','kamand'),('V2','10:00:00','kamand'),('D','12:00:00','kamand'),('B','13:00:00','kamand'),('A','14:00:00','kamand'),('V2','15:00:00','kamand'),('C','16:00:00','kamand'),('D','18:00:00','kamand'),('B','19:30:00','kamand'),('C','20:30:00','kamand');
/*!40000 ALTER TABLE `schedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `waiting_log`
--

DROP TABLE IF EXISTS `waiting_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `waiting_log` (
  `passenger_name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `source` varchar(10) NOT NULL,
  `time` time NOT NULL,
  `DateofJourney` date NOT NULL,
  `book_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `waiting_no` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle` varchar(8) NOT NULL,
  PRIMARY KEY (`waiting_no`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `waiting_log`
--

LOCK TABLES `waiting_log` WRITE;
/*!40000 ALTER TABLE `waiting_log` DISABLE KEYS */;
INSERT INTO `waiting_log` VALUES ('thuanbamlung','gai','kamand','12:00:00','2016-11-21','2016-11-22 02:46:27',17,'D'),('ak','gai','kamand','08:00:00','2016-11-21','2016-11-22 03:13:18',18,'V2');
/*!40000 ALTER TABLE `waiting_log` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-25 18:56:29
