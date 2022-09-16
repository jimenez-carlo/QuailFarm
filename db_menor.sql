-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: db_menor
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

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
-- Table structure for table `tbl_access`
--

DROP TABLE IF EXISTS `tbl_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_access`
--

LOCK TABLES `tbl_access` WRITE;
/*!40000 ALTER TABLE `tbl_access` DISABLE KEYS */;
INSERT INTO `tbl_access` VALUES (1,'admin'),(2,'sales clerk'),(3,'customer'),(4,'inventory clerk');
/*!40000 ALTER TABLE `tbl_access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT 0,
  `date_created` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_category`
--

LOCK TABLES `tbl_category` WRITE;
/*!40000 ALTER TABLE `tbl_category` DISABLE KEYS */;
INSERT INTO `tbl_category` VALUES (1,'Quail',0,'2022-09-12 17:00:48',NULL),(2,'Egg',0,'2022-09-12 17:00:48',NULL),(3,'Vitamins',0,'2022-09-12 17:00:48',NULL),(7,'Feeds',0,'2022-09-12 22:30:50',NULL);
/*!40000 ALTER TABLE `tbl_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_gender`
--

DROP TABLE IF EXISTS `tbl_gender`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_gender` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_gender`
--

LOCK TABLES `tbl_gender` WRITE;
/*!40000 ALTER TABLE `tbl_gender` DISABLE KEYS */;
INSERT INTO `tbl_gender` VALUES (1,'male'),(2,'female');
/*!40000 ALTER TABLE `tbl_gender` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_inventory`
--

DROP TABLE IF EXISTS `tbl_inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_inventory`
--

LOCK TABLES `tbl_inventory` WRITE;
/*!40000 ALTER TABLE `tbl_inventory` DISABLE KEYS */;
INSERT INTO `tbl_inventory` VALUES (1,1,2477),(2,2,1501),(3,3,1000),(4,4,1001),(5,5,330),(6,6,123),(7,7,100),(8,8,100),(9,9,94),(10,10,101),(11,11,100),(12,12,100),(13,13,0);
/*!40000 ALTER TABLE `tbl_inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_inventory_history`
--

DROP TABLE IF EXISTS `tbl_inventory_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_inventory_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `original_qty` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_inventory_history`
--

LOCK TABLES `tbl_inventory_history` WRITE;
/*!40000 ALTER TABLE `tbl_inventory_history` DISABLE KEYS */;
INSERT INTO `tbl_inventory_history` VALUES (6,1,1013,2,2,'2022-06-26 20:23:58'),(7,1,1015,3,2,'2022-06-26 20:24:04'),(8,1,1018,23,2,'2022-06-26 20:24:05'),(9,1,1041,23,2,'2022-06-26 20:34:27'),(10,1,1064,500,2,'2022-06-26 20:43:00'),(11,1,1564,23,7,'2022-06-26 20:47:08'),(12,1,1587,20,7,'2022-06-26 20:47:10'),(13,2,1000,500,2,'2022-06-26 21:26:54'),(14,6,100,23,2,'2022-07-30 17:14:05'),(15,1,1607,3,2,'2022-07-31 23:49:30'),(16,1,1610,3,2,'2022-07-31 23:49:34'),(17,2,1500,1,2,'2022-07-31 23:54:01'),(18,1,1613,-5,2,'2022-08-04 22:49:30'),(19,4,1000,1,2,'2022-08-06 16:12:38'),(20,5,100,230,2,'2022-08-06 16:12:51'),(21,1,1608,50,2,'2022-09-11 15:57:13'),(22,10,100,1,2,'2022-09-11 15:57:22'),(23,1,1658,800,2,'2022-09-11 16:46:22'),(24,1,2458,23,2,'2022-09-11 16:48:18'),(25,1,2479,-2,8,'2022-09-16 22:29:11');
/*!40000 ALTER TABLE `tbl_inventory_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_invoice`
--

DROP TABLE IF EXISTS `tbl_invoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(45) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  `status_id` int(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_invoice`
--

LOCK TABLES `tbl_invoice` WRITE;
/*!40000 ALTER TABLE `tbl_invoice` DISABLE KEYS */;
INSERT INTO `tbl_invoice` VALUES (1,'1655401570',8,'2022-06-17 01:46:10',1,NULL,NULL),(2,'1655403210',8,'2022-06-17 02:13:30',1,NULL,NULL),(3,'1655405509',8,'2022-06-17 02:51:49',1,NULL,NULL),(4,'1655405523',8,'2022-06-17 02:52:03',1,NULL,NULL),(5,'1655487346',8,'2022-06-18 01:35:46',1,NULL,NULL),(6,'1655707155',11,'2022-06-20 14:39:15',1,NULL,NULL),(7,'1656247504',8,'2022-06-26 20:45:04',1,NULL,NULL),(8,'1659172911',8,'2022-07-30 17:21:51',2,NULL,NULL),(9,'1659963610',8,'2022-08-08 21:00:10',2,NULL,NULL),(10,'1660144995',8,'2022-08-10 23:23:15',7,NULL,NULL),(18,'1660145702',8,'2022-08-10 23:35:02',1,NULL,NULL),(19,'1662888047',8,'2022-09-11 17:20:47',NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbl_invoice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_invoice_status`
--

DROP TABLE IF EXISTS `tbl_invoice_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_invoice_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_invoice_status`
--

LOCK TABLES `tbl_invoice_status` WRITE;
/*!40000 ALTER TABLE `tbl_invoice_status` DISABLE KEYS */;
INSERT INTO `tbl_invoice_status` VALUES (1,'PENDING'),(2,'PARTIAL APPROVED'),(3,'APPROVED'),(4,'DELIVERED'),(5,'RECEIVED'),(6,'CANCELLED'),(7,'REJECTED');
/*!40000 ALTER TABLE `tbl_invoice_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_invoice_status_history`
--

DROP TABLE IF EXISTS `tbl_invoice_status_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_invoice_status_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_invoice_status_history`
--

LOCK TABLES `tbl_invoice_status_history` WRITE;
/*!40000 ALTER TABLE `tbl_invoice_status_history` DISABLE KEYS */;
INSERT INTO `tbl_invoice_status_history` VALUES (9,18,1,8,'2022-08-10 23:35:02'),(10,77,2,2,'2022-09-16 21:45:32'),(11,77,2,2,'2022-09-16 21:46:29'),(12,78,2,2,'2022-09-16 21:46:29'),(13,79,3,2,'2022-09-16 21:46:29'),(14,77,2,2,'2022-09-16 21:51:16'),(15,78,2,2,'2022-09-16 21:51:16'),(16,79,3,2,'2022-09-16 21:51:16'),(17,9,2,2,'2022-09-16 21:52:44'),(18,9,2,2,'2022-09-16 21:52:44'),(19,9,3,2,'2022-09-16 21:52:44'),(20,9,2,2,'2022-09-16 22:02:19'),(21,9,2,2,'2022-09-16 22:02:35'),(22,9,3,2,'2022-09-16 22:04:38'),(23,9,2,2,'2022-09-16 22:04:58'),(24,0,3,2,'2022-09-16 22:08:04'),(25,0,3,2,'2022-09-16 22:08:20'),(26,9,2,2,'2022-09-16 22:09:06'),(27,9,2,2,'2022-09-16 22:09:06'),(28,9,3,2,'2022-09-16 22:09:06'),(29,9,2,2,'2022-09-16 22:09:47'),(30,9,2,2,'2022-09-16 22:09:47'),(31,9,3,2,'2022-09-16 22:09:47'),(32,9,2,2,'2022-09-16 22:10:46'),(33,9,2,2,'2022-09-16 22:10:46'),(34,9,3,2,'2022-09-16 22:10:46'),(35,9,2,2,'2022-09-16 22:13:08'),(36,9,2,2,'2022-09-16 22:13:08'),(37,9,3,2,'2022-09-16 22:13:08'),(38,9,2,2,'2022-09-16 22:24:42'),(39,9,2,2,'2022-09-16 22:26:00'),(40,9,2,2,'2022-09-16 22:27:06'),(41,9,2,2,'2022-09-16 22:27:48'),(42,9,2,2,'2022-09-16 22:29:11');
/*!40000 ALTER TABLE `tbl_invoice_status_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT 0.00,
  `date_created` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `is_deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_product`
--

LOCK TABLES `tbl_product` WRITE;
/*!40000 ALTER TABLE `tbl_product` DISABLE KEYS */;
INSERT INTO `tbl_product` VALUES (1,1,'Male quail','Kal','image_20220626144238.jpeg',15.00,'2022-06-11 14:31:01',NULL,1),(2,1,'Female quail','Laying Eggs','female_quail.png',25.00,'2022-06-11 14:31:01',NULL,0),(3,2,'Quail Egg','Egg','quail_egg.jpg',1.15,'2022-06-12 21:41:20',NULL,0),(4,1,'Female quail','8 - 12 Months Kal','Quail8months.png',15.00,'2022-06-20 13:56:04',NULL,0),(5,1,'test','test','default.png',100.00,'2022-06-26 17:58:28',2,1),(6,1,'test','test','default.png',100.00,'2022-06-26 17:58:48',2,1),(7,1,'test','test','default.png',100.00,'2022-06-26 17:59:26',2,1),(8,1,'test','test','default.png',100.00,'2022-06-26 18:01:25',2,1),(9,1,'1232','test','image_20220626124207.jpeg',100.00,'2022-06-26 18:07:13',2,0),(10,1,'test','test','image_20220626121905.jpeg',123.00,'2022-06-26 18:19:05',2,0),(11,1,'123','test','image_20220626122042.jpeg',123.00,'2022-06-26 18:20:43',2,1),(12,1,'test','test','image_20220626122100.jpeg',123.00,'2022-06-26 18:21:00',2,1),(13,1,'123','test','default.png',231.00,'2022-09-11 17:09:10',2,0);
/*!40000 ALTER TABLE `tbl_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_status`
--

DROP TABLE IF EXISTS `tbl_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_status`
--

LOCK TABLES `tbl_status` WRITE;
/*!40000 ALTER TABLE `tbl_status` DISABLE KEYS */;
INSERT INTO `tbl_status` VALUES (1,'draft'),(2,'order placed'),(3,'approved'),(4,'order shipped'),(5,'cancelled'),(6,'rejected'),(7,'received'),(8,'delivered');
/*!40000 ALTER TABLE `tbl_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_status_history`
--

DROP TABLE IF EXISTS `tbl_status_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_status_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=240 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_status_history`
--

LOCK TABLES `tbl_status_history` WRITE;
/*!40000 ALTER TABLE `tbl_status_history` DISABLE KEYS */;
INSERT INTO `tbl_status_history` VALUES (1,2,1,8,'2022-06-16 18:52:37'),(11,12,1,8,'2022-06-16 19:05:16'),(16,17,1,8,'2022-06-16 19:44:58'),(17,18,1,8,'2022-06-16 19:45:39'),(18,19,1,8,'2022-06-16 23:49:20'),(19,20,1,8,'2022-06-16 23:51:42'),(20,21,1,8,'2022-06-16 23:54:55'),(21,22,1,8,'2022-06-16 23:54:56'),(22,23,1,8,'2022-06-16 23:54:56'),(23,24,1,8,'2022-06-17 00:04:07'),(24,25,1,8,'2022-06-17 00:05:19'),(25,26,1,8,'2022-06-17 00:05:21'),(26,27,1,8,'2022-06-17 00:05:36'),(27,28,1,8,'2022-06-17 00:07:06'),(28,29,1,8,'2022-06-17 00:07:07'),(29,30,1,8,'2022-06-17 00:10:13'),(30,31,1,8,'2022-06-17 00:13:48'),(31,32,1,8,'2022-06-17 00:14:49'),(32,33,1,8,'2022-06-17 00:14:50'),(33,34,1,8,'2022-06-17 00:14:51'),(34,35,1,8,'2022-06-17 00:41:55'),(35,36,1,8,'2022-06-17 00:41:56'),(36,37,1,8,'2022-06-17 00:41:57'),(37,38,1,8,'2022-06-17 00:52:32'),(38,39,1,8,'2022-06-17 00:52:32'),(39,40,1,8,'2022-06-17 00:52:33'),(40,41,1,8,'2022-06-17 01:04:59'),(41,42,1,8,'2022-06-17 01:04:59'),(42,43,1,8,'2022-06-17 01:05:00'),(43,41,2,8,'2022-06-17 01:34:44'),(44,42,2,8,'2022-06-17 01:34:44'),(45,43,2,8,'2022-06-17 01:34:44'),(46,41,2,8,'2022-06-17 01:36:21'),(47,42,2,8,'2022-06-17 01:36:21'),(48,43,2,8,'2022-06-17 01:36:21'),(49,41,2,8,'2022-06-17 01:38:19'),(50,42,2,8,'2022-06-17 01:38:19'),(51,43,2,8,'2022-06-17 01:38:19'),(52,44,1,8,'2022-06-17 01:46:07'),(53,45,1,8,'2022-06-17 01:46:07'),(54,46,1,8,'2022-06-17 01:46:08'),(55,44,2,8,'2022-06-17 01:46:10'),(56,45,2,8,'2022-06-17 01:46:10'),(57,46,2,8,'2022-06-17 01:46:10'),(58,47,1,8,'2022-06-17 02:13:26'),(59,48,1,8,'2022-06-17 02:13:27'),(60,49,1,8,'2022-06-17 02:13:27'),(61,47,2,8,'2022-06-17 02:13:30'),(62,48,2,8,'2022-06-17 02:13:30'),(63,49,2,8,'2022-06-17 02:13:30'),(64,50,1,8,'2022-06-17 02:39:36'),(65,50,2,8,'2022-06-17 02:51:49'),(66,51,1,8,'2022-06-17 02:51:56'),(67,52,1,8,'2022-06-17 02:51:57'),(68,53,1,8,'2022-06-17 02:51:58'),(69,51,2,8,'2022-06-17 02:52:03'),(70,52,2,8,'2022-06-17 02:52:03'),(71,53,2,8,'2022-06-17 02:52:03'),(72,54,1,8,'2022-06-17 02:58:40'),(73,55,1,8,'2022-06-17 02:58:40'),(74,56,1,8,'2022-06-17 02:58:41'),(75,54,2,8,'2022-06-18 01:35:46'),(76,55,2,8,'2022-06-18 01:35:46'),(77,56,2,8,'2022-06-18 01:35:46'),(78,57,1,11,'2022-06-20 14:39:11'),(79,58,1,11,'2022-06-20 14:39:12'),(80,59,1,11,'2022-06-20 14:39:13'),(81,60,1,11,'2022-06-20 14:39:13'),(82,57,2,11,'2022-06-20 14:39:15'),(83,58,2,11,'2022-06-20 14:39:15'),(84,59,2,11,'2022-06-20 14:39:15'),(85,60,2,11,'2022-06-20 14:39:15'),(86,61,1,11,'2022-06-20 15:37:34'),(87,62,1,11,'2022-06-20 15:37:35'),(88,63,1,11,'2022-06-20 15:37:36'),(89,64,1,11,'2022-06-20 15:37:37'),(90,65,1,8,'2022-06-26 18:59:08'),(91,66,1,8,'2022-06-26 18:59:10'),(92,67,1,8,'2022-06-26 18:59:10'),(93,68,1,8,'2022-06-26 20:44:29'),(94,69,1,8,'2022-06-26 20:44:33'),(95,65,2,8,'2022-06-26 20:45:04'),(96,66,2,8,'2022-06-26 20:45:04'),(97,67,2,8,'2022-06-26 20:45:04'),(98,68,2,8,'2022-06-26 20:45:04'),(99,69,2,8,'2022-06-26 20:45:04'),(100,70,1,8,'2022-07-30 17:20:54'),(101,71,1,8,'2022-07-30 17:21:08'),(102,72,1,8,'2022-07-30 17:21:09'),(103,73,1,8,'2022-07-30 17:21:09'),(104,74,1,8,'2022-07-30 17:21:10'),(105,75,1,8,'2022-07-30 17:21:10'),(106,76,1,8,'2022-07-30 17:21:11'),(107,71,2,8,'2022-07-30 17:21:51'),(108,72,2,8,'2022-07-30 17:21:51'),(109,73,2,8,'2022-07-30 17:21:51'),(110,74,2,8,'2022-07-30 17:21:51'),(111,76,2,8,'2022-07-30 17:21:51'),(112,77,1,8,'2022-07-31 22:49:49'),(113,78,1,8,'2022-07-31 22:49:49'),(114,79,1,8,'2022-08-08 20:59:56'),(115,77,2,8,'2022-08-08 21:00:10'),(116,78,2,8,'2022-08-08 21:00:10'),(117,79,2,8,'2022-08-08 21:00:10'),(118,80,1,8,'2022-08-08 21:00:45'),(119,80,2,8,'2022-08-10 23:23:15'),(120,81,1,8,'2022-08-10 23:25:51'),(121,81,2,8,'2022-08-10 23:25:55'),(122,81,2,8,'2022-08-10 23:26:01'),(123,81,2,8,'2022-08-10 23:26:04'),(124,81,2,8,'2022-08-10 23:26:33'),(125,81,2,8,'2022-08-10 23:28:08'),(126,81,2,8,'2022-08-10 23:31:31'),(127,81,2,8,'2022-08-10 23:33:09'),(128,81,2,8,'2022-08-10 23:35:02'),(129,82,1,8,'2022-09-11 17:20:41'),(130,82,2,8,'2022-09-11 17:20:47'),(131,83,1,8,'2022-09-11 19:23:56'),(132,84,1,8,'2022-09-11 19:23:57'),(133,85,1,8,'2022-09-11 19:23:57'),(134,84,6,2,'2022-09-13 16:58:37'),(135,84,6,2,'2022-09-13 16:59:23'),(136,81,3,2,'2022-09-13 17:00:04'),(137,82,3,2,'2022-09-13 17:05:12'),(138,79,3,2,'2022-09-13 17:06:46'),(139,80,3,2,'2022-09-13 17:09:45'),(140,78,6,2,'2022-09-13 17:09:49'),(141,77,3,2,'2022-09-13 17:10:40'),(142,77,3,2,'2022-09-13 17:12:49'),(143,78,3,2,'2022-09-13 17:14:08'),(144,79,3,2,'2022-09-13 17:14:54'),(145,79,3,2,'2022-09-13 17:16:37'),(146,79,3,2,'2022-09-13 17:17:33'),(147,78,3,2,'2022-09-13 17:18:47'),(148,77,3,2,'2022-09-13 17:19:26'),(149,77,3,2,'2022-09-13 17:20:23'),(150,78,3,2,'2022-09-13 17:21:04'),(151,79,3,2,'2022-09-13 17:21:52'),(152,79,3,2,'2022-09-13 17:22:32'),(153,78,3,2,'2022-09-13 17:26:46'),(154,77,3,2,'2022-09-13 17:27:25'),(155,77,3,2,'2022-09-13 17:28:56'),(156,78,3,2,'2022-09-13 17:29:02'),(157,79,3,2,'2022-09-13 17:29:04'),(158,79,3,2,'2022-09-13 17:30:48'),(159,78,3,2,'2022-09-13 17:30:49'),(160,77,3,2,'2022-09-13 17:30:49'),(161,77,3,2,'2022-09-13 17:31:25'),(162,78,3,2,'2022-09-13 17:31:26'),(163,79,3,2,'2022-09-13 17:31:27'),(164,80,3,2,'2022-09-13 17:31:41'),(165,76,3,2,'2022-09-13 17:31:51'),(166,76,6,2,'2022-09-13 17:36:58'),(167,80,6,2,'2022-09-13 17:37:15'),(168,79,6,2,'2022-09-13 17:37:26'),(169,78,6,2,'2022-09-13 17:37:29'),(170,77,6,2,'2022-09-13 17:41:06'),(171,78,6,2,'2022-09-13 17:41:11'),(172,79,6,2,'2022-09-13 17:41:17'),(173,79,0,8,'2022-09-13 17:42:15'),(174,79,0,8,'2022-09-13 17:42:21'),(175,77,0,8,'2022-09-13 17:43:50'),(176,77,5,8,'2022-09-13 17:44:40'),(177,79,6,2,'2022-09-13 17:45:13'),(178,78,6,2,'2022-09-13 17:45:20'),(179,78,6,2,'2022-09-13 17:47:58'),(180,79,6,2,'2022-09-13 17:48:00'),(181,77,5,8,'2022-09-13 17:48:09'),(182,77,3,2,'2022-09-16 21:13:51'),(183,79,3,2,'2022-09-16 21:17:34'),(184,78,6,2,'2022-09-16 21:17:47'),(185,77,3,2,'2022-09-16 21:35:32'),(186,78,3,2,'2022-09-16 21:35:32'),(187,79,3,2,'2022-09-16 21:35:32'),(188,77,3,2,'2022-09-16 21:36:19'),(189,78,3,2,'2022-09-16 21:36:19'),(190,79,3,2,'2022-09-16 21:36:19'),(191,77,6,2,'2022-09-16 21:36:51'),(192,78,6,2,'2022-09-16 21:36:51'),(193,79,6,2,'2022-09-16 21:36:51'),(194,77,3,2,'2022-09-16 21:39:13'),(195,78,3,2,'2022-09-16 21:39:13'),(196,79,3,2,'2022-09-16 21:39:13'),(197,77,3,2,'2022-09-16 21:41:40'),(198,78,3,2,'2022-09-16 21:41:41'),(199,79,3,2,'2022-09-16 21:41:43'),(200,77,3,2,'2022-09-16 21:41:53'),(201,78,3,2,'2022-09-16 21:41:53'),(202,79,3,2,'2022-09-16 21:41:53'),(203,77,3,2,'2022-09-16 21:41:59'),(204,77,3,2,'2022-09-16 21:42:11'),(205,78,3,2,'2022-09-16 21:42:11'),(206,79,3,2,'2022-09-16 21:42:11'),(207,77,3,2,'2022-09-16 21:45:32'),(208,77,3,2,'2022-09-16 21:46:29'),(209,78,3,2,'2022-09-16 21:46:29'),(210,79,3,2,'2022-09-16 21:46:29'),(211,77,3,2,'2022-09-16 21:51:16'),(212,78,3,2,'2022-09-16 21:51:16'),(213,79,3,2,'2022-09-16 21:51:16'),(214,77,3,2,'2022-09-16 21:52:44'),(215,78,3,2,'2022-09-16 21:52:44'),(216,79,3,2,'2022-09-16 21:52:44'),(217,79,3,2,'2022-09-16 22:02:19'),(218,78,3,2,'2022-09-16 22:02:35'),(219,77,3,2,'2022-09-16 22:04:38'),(220,77,3,2,'2022-09-16 22:04:58'),(221,1659963610,3,2,'2022-09-16 22:08:04'),(222,1659963610,3,2,'2022-09-16 22:08:20'),(223,77,3,2,'2022-09-16 22:09:06'),(224,78,3,2,'2022-09-16 22:09:06'),(225,79,3,2,'2022-09-16 22:09:06'),(226,77,3,2,'2022-09-16 22:09:47'),(227,78,3,2,'2022-09-16 22:09:47'),(228,79,3,2,'2022-09-16 22:09:47'),(229,77,3,2,'2022-09-16 22:10:46'),(230,78,3,2,'2022-09-16 22:10:46'),(231,79,3,2,'2022-09-16 22:10:46'),(232,77,3,2,'2022-09-16 22:13:08'),(233,78,3,2,'2022-09-16 22:13:08'),(234,79,3,2,'2022-09-16 22:13:08'),(235,77,3,2,'2022-09-16 22:24:42'),(236,77,3,2,'2022-09-16 22:26:00'),(237,77,3,2,'2022-09-16 22:27:06'),(238,77,3,2,'2022-09-16 22:27:48'),(239,77,3,2,'2022-09-16 22:29:11');
/*!40000 ALTER TABLE `tbl_status_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_transactions`
--

DROP TABLE IF EXISTS `tbl_transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT 1,
  `date_created` datetime DEFAULT current_timestamp(),
  `is_deleted` int(11) DEFAULT 0,
  `date_updated` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_transactions`
--

LOCK TABLES `tbl_transactions` WRITE;
/*!40000 ALTER TABLE `tbl_transactions` DISABLE KEYS */;
INSERT INTO `tbl_transactions` VALUES (2,NULL,3200.00,16,1,8,7,2,'2022-06-16 18:52:37',1,'2022-06-18 18:24:14'),(17,NULL,900.00,3,2,8,7,2,'2022-06-16 19:44:58',1,'2022-06-18 18:24:14'),(18,NULL,350.00,7,3,8,7,2,'2022-06-16 19:45:39',1,'2022-06-18 18:24:14'),(19,NULL,50.00,1,3,8,7,2,'2022-06-16 23:49:20',1,'2022-06-18 18:24:14'),(20,NULL,200.00,1,1,8,7,2,'2022-06-16 23:51:42',1,'2022-06-18 18:24:14'),(21,NULL,200.00,1,1,8,7,2,'2022-06-16 23:54:55',1,'2022-06-18 18:24:14'),(22,NULL,300.00,1,2,8,7,2,'2022-06-16 23:54:56',1,'2022-06-18 18:24:14'),(23,NULL,50.00,1,3,8,7,2,'2022-06-16 23:54:56',1,'2022-06-18 18:24:14'),(24,NULL,1000.00,5,1,8,7,2,'2022-06-17 00:04:07',1,'2022-06-18 18:24:14'),(25,NULL,300.00,1,2,8,7,2,'2022-06-17 00:05:19',1,'2022-06-18 18:24:14'),(26,NULL,150.00,3,3,8,7,2,'2022-06-17 00:05:21',1,'2022-06-18 18:24:14'),(27,NULL,600.00,2,2,8,7,2,'2022-06-17 00:05:36',1,'2022-06-18 18:24:14'),(28,NULL,150.00,3,3,8,7,2,'2022-06-17 00:07:06',1,'2022-06-18 18:24:14'),(29,NULL,1800.00,6,2,8,7,2,'2022-06-17 00:07:07',1,'2022-06-18 18:24:14'),(30,NULL,1400.00,7,1,8,7,2,'2022-06-17 00:10:13',1,'2022-06-18 18:24:14'),(31,NULL,200.00,1,1,8,7,2,'2022-06-17 00:13:48',1,'2022-06-18 18:24:14'),(32,NULL,300.00,1,2,8,7,2,'2022-06-17 00:14:49',1,'2022-06-18 18:24:14'),(33,NULL,50.00,1,3,8,7,2,'2022-06-17 00:14:50',1,'2022-06-18 18:24:14'),(34,NULL,200.00,1,1,8,7,2,'2022-06-17 00:14:51',1,'2022-06-18 18:24:14'),(35,NULL,50.00,1,3,8,7,2,'2022-06-17 00:41:55',1,'2022-06-18 18:24:14'),(36,NULL,600.00,2,2,8,7,2,'2022-06-17 00:41:56',1,'2022-06-18 18:24:14'),(37,NULL,200.00,1,1,8,7,2,'2022-06-17 00:41:57',1,'2022-06-18 18:24:14'),(38,NULL,300.00,1,2,8,7,2,'2022-06-17 00:52:32',1,'2022-06-18 18:24:14'),(39,NULL,1150.00,23,3,8,7,2,'2022-06-17 00:52:32',1,'2022-06-18 18:24:14'),(40,NULL,200.00,1,1,8,7,2,'2022-06-17 00:52:33',1,'2022-06-18 18:24:14'),(41,NULL,200.00,1,1,8,7,2,'2022-06-17 01:04:59',0,'2022-06-18 18:24:14'),(42,NULL,300.00,1,2,8,7,2,'2022-06-17 01:04:59',0,'2022-06-18 18:24:14'),(43,NULL,50.00,1,3,8,7,2,'2022-06-17 01:05:00',0,'2022-06-18 18:24:14'),(44,1,200.00,1,1,8,7,2,'2022-06-17 01:46:07',0,'2022-06-18 12:48:26'),(45,1,300.00,1,2,8,7,2,'2022-06-17 01:46:07',0,'2022-06-18 12:48:13'),(46,1,50.00,1,3,8,7,2,'2022-06-17 01:46:08',0,'2022-06-18 18:24:14'),(47,2,200.00,1,1,8,7,2,'2022-06-17 02:13:26',0,'2022-06-18 18:24:14'),(48,2,300.00,1,2,8,7,2,'2022-06-17 02:13:27',0,'2022-06-18 18:24:14'),(49,2,50.00,1,3,8,7,2,'2022-06-17 02:13:27',0,'2022-06-18 18:24:14'),(50,3,300.00,1,2,8,7,2,'2022-06-17 02:39:36',0,'2022-06-18 18:24:14'),(51,4,600.00,3,1,8,7,2,'2022-06-17 02:51:56',0,'2022-06-18 18:24:14'),(52,4,600.00,2,2,8,7,2,'2022-06-17 02:51:57',0,'2022-06-18 18:24:14'),(53,4,50.00,1,3,8,7,2,'2022-06-17 02:51:58',0,'2022-06-18 18:24:14'),(54,5,2200.00,11,1,8,7,2,'2022-06-17 02:58:40',0,'2022-06-18 18:24:14'),(55,5,2100.00,7,2,8,7,2,'2022-06-17 02:58:40',0,'2022-06-18 18:24:14'),(56,5,10050.00,201,3,8,7,2,'2022-06-17 02:58:41',0,'2022-06-18 18:24:14'),(57,6,15.00,1,1,11,7,2,'2022-06-20 14:39:11',0,'2022-06-20 14:39:11'),(58,6,25.00,1,2,11,7,2,'2022-06-20 14:39:12',0,'2022-06-20 14:39:12'),(59,6,1.00,1,3,11,7,2,'2022-06-20 14:39:13',0,'2022-06-20 14:39:13'),(60,6,15.00,1,4,11,7,2,'2022-06-20 14:39:13',0,'2022-06-20 14:39:13'),(61,NULL,1.00,1,3,11,7,2,'2022-06-20 15:37:34',0,'2022-06-20 15:37:34'),(62,NULL,15.00,1,4,11,7,2,'2022-06-20 15:37:35',0,'2022-06-20 15:37:35'),(63,NULL,25.00,1,2,11,7,2,'2022-06-20 15:37:36',0,'2022-06-20 15:37:36'),(64,NULL,15.00,1,1,11,7,2,'2022-06-20 15:37:37',0,'2022-06-20 15:37:37'),(65,7,15.00,1,4,8,7,2,'2022-06-26 18:59:08',0,'2022-06-26 18:59:08'),(66,7,100.00,1,7,8,7,2,'2022-06-26 18:59:10',0,'2022-06-26 18:59:10'),(67,7,123.00,1,12,8,7,2,'2022-06-26 18:59:10',0,'2022-06-26 18:59:10'),(68,7,1.00,1,3,8,7,2,'2022-06-26 20:44:29',0,'2022-06-26 20:44:29'),(69,7,300.00,3,8,8,7,2,'2022-06-26 20:44:33',0,'2022-06-26 20:44:33'),(70,NULL,15.00,1,1,8,7,2,'2022-07-30 17:20:54',1,'2022-07-30 17:20:54'),(71,8,15.00,1,1,8,7,2,'2022-07-30 17:21:08',0,'2022-07-30 17:21:08'),(72,8,25.00,1,2,8,7,2,'2022-07-30 17:21:09',0,'2022-07-30 17:21:09'),(73,8,1.00,1,3,8,7,2,'2022-07-30 17:21:09',0,'2022-07-30 17:21:09'),(74,8,15.00,1,4,8,7,2,'2022-07-30 17:21:10',0,'2022-07-30 17:21:10'),(75,NULL,100.00,1,8,8,7,2,'2022-07-30 17:21:10',1,'2022-07-30 17:21:10'),(76,8,200.00,2,7,8,2,2,'2022-07-30 17:21:11',0,'2022-09-13 11:36:58'),(77,9,30.00,2,1,8,2,3,'2022-07-31 22:49:49',0,'2022-09-16 04:29:11'),(78,9,50.00,2,2,8,2,2,'2022-07-31 22:49:49',0,'2022-09-16 04:13:08'),(79,9,100.00,1,7,8,2,2,'2022-08-08 20:59:56',0,'2022-09-16 04:13:08'),(80,10,175.00,7,2,8,2,2,'2022-08-08 21:00:45',0,'2022-09-13 11:37:15'),(81,18,15.00,1,1,8,2,2,'2022-08-10 17:35:02',0,'2022-09-13 11:00:04'),(82,19,225.00,15,1,8,2,2,'2022-09-11 17:20:41',0,'2022-09-13 11:05:12'),(83,NULL,45.00,3,1,8,2,2,'2022-09-11 19:23:56',0,'2022-09-13 05:04:36'),(84,NULL,25.00,1,2,8,2,2,'2022-09-11 19:23:57',0,'2022-09-13 10:59:23'),(85,NULL,3.00,3,3,8,2,2,'2022-09-11 19:23:57',0,'2022-09-13 05:03:31');
/*!40000 ALTER TABLE `tbl_transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `access_id` int(11) DEFAULT 3,
  `date_created` datetime DEFAULT current_timestamp(),
  `is_deleted` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users`
--

LOCK TABLES `tbl_users` WRITE;
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
INSERT INTO `tbl_users` VALUES (2,'admin','$2y$10$oAudgvpauxhyTxyhDOvo7.Geu/ddVWPU/TIq690SwRXOySZa81Iry','jimenez.carlo.llabor@gmail.com',1,'2022-06-12 02:42:14',0),(7,'cashier','$2y$10$Y3ksPARb0uYJFuetdyGuaeRa.jOpIR.8KAxNlVvij4ZQNaZ1KmVm6','cashier@gmail.com',2,'2022-06-12 10:10:09',0),(8,'customer','$2y$10$oAudgvpauxhyTxyhDOvo7.Geu/ddVWPU/TIq690SwRXOySZa81Iry','customer@gmail.com',3,'2022-06-12 10:23:27',0),(9,'carrier','$2y$10$Y3ksPARb0uYJFuetdyGuaeRa.jOpIR.8KAxNlVvij4ZQNaZ1KmVm6','carrier@gmail.com',4,'2022-06-15 22:14:36',0),(10,'admin2','$2y$10$/wkSAVsPPi.ooWYWZodyoeio4Xs9gPjEZCm4MMdG.LDlRGAEOxN82','admin2@gmail.com',1,'2022-06-18 19:38:27',0),(11,'customer2','$2y$10$NUrJmzQsyD.zE6K2kOXLLeHKY75trAqrWoS5eZRjy0IxHWTcV3mZa','customer2@gmail.com',3,'2022-06-20 14:36:28',0),(12,'JIMENEZ31396','$2y$10$sEYi97dPYqYy0IOAij8vQ.wfZS0y5/8kI6jR0pLZjSqPnp6wZW/.G','testlords@gmail.com',1,'2022-08-06 16:11:57',0),(13,'jimenez.carlo.llabor@gmail.com','$2y$10$bi1p.UAHwe3BLFmsvu3q2eHBPRH7nwtYaCyFlIXpg2J2Dl68weOwK','jimenez.carlo.llabor@gmail.com',3,'2022-09-12 16:30:13',0);
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_users_info`
--

DROP TABLE IF EXISTS `tbl_users_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_users_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `contact_no` int(11) DEFAULT NULL,
  `gender_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_users_info`
--

LOCK TABLES `tbl_users_info` WRITE;
/*!40000 ALTER TABLE `tbl_users_info` DISABLE KEYS */;
INSERT INTO `tbl_users_info` VALUES (2,'Carlo','jimenez','poblaction sur bayambang pangasinan2',2147483647,1),(7,'Cashier','Cashier','poblaction sur bayambang pangasinan',2147483647,1),(8,'Customer','Customer','poblaction sur bayambang pangasinan',2147483647,1),(9,'Carrier','Carrier','poblaction sur bayambang pangasinan',2147483647,1),(10,'admin2','admin2','poblaction sur bayambang pangasinan',2147483647,1),(11,'Carlo','jimenez','poblaction sur bayambang pangasinan',2147483647,1),(12,'Typhoon','jimenez','poblaction sur bayambang pangasinan',2147483647,1),(13,'carlo','jimenezz','test',2147483647,1);
/*!40000 ALTER TABLE `tbl_users_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-16 23:05:09
