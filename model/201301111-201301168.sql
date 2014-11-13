-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: janta_store
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

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
-- Table structure for table `buy_log`
--

DROP TABLE IF EXISTS `buy_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buy_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wholesaler_id` int(11) NOT NULL,
  `date_of_purchase` varchar(15) NOT NULL,
  `commodity` varchar(30) NOT NULL,
  `price` varchar(15) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buy_log`
--

LOCK TABLES `buy_log` WRITE;
/*!40000 ALTER TABLE `buy_log` DISABLE KEYS */;
INSERT INTO `buy_log` VALUES (3,1,'10/11/2014','Stylish Paan','100',16),(4,12,'11/5/2014','Add Gel','40',60),(5,4,'11/8/2014','BT Brinjal','20',10),(6,13,'11/8/2014','Buttons','0.5',200),(7,2,'11/15/2014','Dairy Milk Silk','100',20),(8,9,'11/5/2014','Cardboard Cartons','10',20),(9,8,'11/5/2014','High refined jaggery','40',40),(10,5,'11/8/2014','Electric Wires','5',50),(11,10,'11/15/2014','Sweet Sugar Cubes','30',50),(12,6,'11/8/2014','Frontier Kaju Pista','50',50),(13,7,'11/14/2014','Plastic Buckets','40',50),(14,3,'11/12/2014','Chart Sheet','2',50),(15,11,'11/12/2014','Dettol','85.04',20),(16,14,'11/12/2014','Usha Bulbs','20',50);
/*!40000 ALTER TABLE `buy_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cleaners`
--

DROP TABLE IF EXISTS `cleaners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cleaners` (
  `employee_id` int(11) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cleaners`
--

LOCK TABLES `cleaners` WRITE;
/*!40000 ALTER TABLE `cleaners` DISABLE KEYS */;
INSERT INTO `cleaners` VALUES (4);
/*!40000 ALTER TABLE `cleaners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commodities`
--

DROP TABLE IF EXISTS `commodities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commodities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `location_in_shop` varchar(30) NOT NULL,
  `qty_in_shop` int(11) NOT NULL,
  `qty_in_godown` int(11) NOT NULL,
  `type` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commodities`
--

LOCK TABLES `commodities` WRITE;
/*!40000 ALTER TABLE `commodities` DISABLE KEYS */;
INSERT INTO `commodities` VALUES (2,'Colgate Toothpaste 100g','NONE','50','I know it',10,20,'Confectionery'),(3,'Reezig Inc.','LOL','0.96','Left Shelf',4,7,'Miscellaneous'),(7,'Sasta Paan','Cheap Good Paan','10','Nowhere',50,150,'Miscellaneous'),(9,'Good Day Cookies','Biscuits','50','Showcase 2',5,5,'Confectionery'),(10,'Buttons','4-hole buttons','50','Right Shelf',50,100,'Miscellaneous'),(11,'Dettol','Antiseptic Handwash','65','Left Shelf',15,30,'Toiletries');
/*!40000 ALTER TABLE `commodities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `confectioneries`
--

DROP TABLE IF EXISTS `confectioneries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `confectioneries` (
  `commodity_id` int(11) NOT NULL,
  `batch_no` varchar(15) NOT NULL,
  `date_of_expiry` varchar(15) NOT NULL,
  PRIMARY KEY (`commodity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `confectioneries`
--

LOCK TABLES `confectioneries` WRITE;
/*!40000 ALTER TABLE `confectioneries` DISABLE KEYS */;
INSERT INTO `confectioneries` VALUES (2,'B-123456','15/10/2015'),(9,'1245','5/12/1995');
/*!40000 ALTER TABLE `confectioneries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_of_joining` varchar(15) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `number_of_leaves` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (2,'Saksham Aggarwal','10000','E-117','5/11/2014','7569156769',3),(3,'Abhineet Jain','1000','E-214','5/11/2014','100',6),(4,'Tinu Sahay','1000','E-128','2014-11-11','123479650',0);
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `managers`
--

DROP TABLE IF EXISTS `managers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `managers` (
  `employee_id` int(11) NOT NULL,
  `educational_qualifications` varchar(50) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`employee_id`),
  UNIQUE KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `managers`
--

LOCK TABLES `managers` WRITE;
/*!40000 ALTER TABLE `managers` DISABLE KEYS */;
INSERT INTO `managers` VALUES (2,'BTech CSE 2nd Year','saksham','password');
/*!40000 ALTER TABLE `managers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `miscellaneous`
--

DROP TABLE IF EXISTS `miscellaneous`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `miscellaneous` (
  `commodity_id` int(11) NOT NULL,
  PRIMARY KEY (`commodity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `miscellaneous`
--

LOCK TABLES `miscellaneous` WRITE;
/*!40000 ALTER TABLE `miscellaneous` DISABLE KEYS */;
INSERT INTO `miscellaneous` VALUES (3),(7),(10);
/*!40000 ALTER TABLE `miscellaneous` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salespersons`
--

DROP TABLE IF EXISTS `salespersons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salespersons` (
  `employee_id` int(11) NOT NULL,
  `educational_qualifications` varchar(50) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`employee_id`),
  UNIQUE KEY `employee_id_2` (`employee_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salespersons`
--

LOCK TABLES `salespersons` WRITE;
/*!40000 ALTER TABLE `salespersons` DISABLE KEYS */;
INSERT INTO `salespersons` VALUES (3,'NONE','abhineet','password');
/*!40000 ALTER TABLE `salespersons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sell_log`
--

DROP TABLE IF EXISTS `sell_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sell_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discount` varchar(10) NOT NULL,
  `billing_amount` varchar(15) NOT NULL,
  `timestamp` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sell_log`
--

LOCK TABLES `sell_log` WRITE;
/*!40000 ALTER TABLE `sell_log` DISABLE KEYS */;
INSERT INTO `sell_log` VALUES (2,'5','95.03','2014-11-06 23:58:51'),(3,'5','95.03','2014-11-06 23:59:46'),(4,'0','180.00','2014-11-10 21:56:23'),(5,'0','260.00','2014-11-13 22:38:55');
/*!40000 ALTER TABLE `sell_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sold_items`
--

DROP TABLE IF EXISTS `sold_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sold_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sell_log_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_price` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sold_items`
--

LOCK TABLES `sold_items` WRITE;
/*!40000 ALTER TABLE `sold_items` DISABLE KEYS */;
INSERT INTO `sold_items` VALUES (3,2,2,2,'100'),(4,2,3,1,'0.03'),(5,3,2,2,'100'),(6,3,3,1,'0.03'),(7,4,9,1,'50'),(8,4,8,3,'30'),(9,4,2,2,'100'),(10,5,2,5,'250'),(11,5,10,20,'10'),(12,5,0,10,'0');
/*!40000 ALTER TABLE `sold_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stationery`
--

DROP TABLE IF EXISTS `stationery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stationery` (
  `commodity_id` int(11) NOT NULL,
  PRIMARY KEY (`commodity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stationery`
--

LOCK TABLES `stationery` WRITE;
/*!40000 ALTER TABLE `stationery` DISABLE KEYS */;
/*!40000 ALTER TABLE `stationery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `toiletries`
--

DROP TABLE IF EXISTS `toiletries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `toiletries` (
  `commodity_id` int(11) NOT NULL,
  `batch_no` varchar(15) NOT NULL,
  `date_of_expiry` varchar(15) NOT NULL,
  PRIMARY KEY (`commodity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toiletries`
--

LOCK TABLES `toiletries` WRITE;
/*!40000 ALTER TABLE `toiletries` DISABLE KEYS */;
INSERT INTO `toiletries` VALUES (11,'75691','11/12/2015');
/*!40000 ALTER TABLE `toiletries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wholesalers`
--

DROP TABLE IF EXISTS `wholesalers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wholesalers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `transportation_cost` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wholesalers`
--

LOCK TABLES `wholesalers` WRITE;
/*!40000 ALTER TABLE `wholesalers` DISABLE KEYS */;
INSERT INTO `wholesalers` VALUES (1,'Abhineet Paan Bhandar','11'),(2,'Chandan chocolates','15.5'),(3,'Paplu paper waala','50'),(4,'Abhineet Aloo waala','25'),(5,'Mahima suppliers','35'),(6,'Moudgil biscuits','32.5'),(7,'Pandey plastic shop','12.53'),(8,'Gupta gud waala','35.65'),(9,'Debu dibiya','100'),(10,'Mishra mishri','65'),(11,'Saksham soaps','50'),(13,'Bittu buttons','65');
/*!40000 ALTER TABLE `wholesalers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-13 22:48:57
