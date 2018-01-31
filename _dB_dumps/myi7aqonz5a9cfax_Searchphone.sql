-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: fugfonv8odxxolj8.cbetxkdyhwsb.us-east-1.rds.amazonaws.com    Database: myi7aqonz5a9cfax
-- ------------------------------------------------------
-- Server version	5.7.19-log

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
-- Table structure for table `Searchphone`
--

DROP TABLE IF EXISTS `Searchphone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Searchphone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PhoneName` varchar(100) NOT NULL,
  `os` varchar(100) NOT NULL,
  `Ram` varchar(200) NOT NULL,
  `Camera` varchar(200) NOT NULL,
  `Display` varchar(200) NOT NULL,
  `Overview` varchar(500) NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Searchphone`
--

LOCK TABLES `Searchphone` WRITE;
/*!40000 ALTER TABLE `Searchphone` DISABLE KEYS */;
INSERT INTO `Searchphone` VALUES (1,'YU Yuphoria','Android 5.0.2 (Lollipop) - YU5010A model','16 GB, 2 GB RAM','8 MP, f/2.2, autofocus, LED flash','720 x 1280 pixels, 16:9 ratio (~294 ppi density)','Yu Yuphoria smartphone was launched in May 2015. The phone comes with a 5.00-inch touchscreen display with a resolution of 720 pixels by 1280 pixels at a PPI of 294 pixels per inch. Yu Yuphoria price in India starts from Rs. 5,090. ','http://micromaxcanvas.co.in/wp-content/uploads/2015/05/Yuphoria-YU5010-Front.jpeg'),(2,'iPhone 6','iOS 8, upgradable to iOS 11.2','16/32/64/128 GB, 1 GB RAM DDR3','8 MP (f/2.2, 29mm, 1/3\", 1.5 µm), phase detection autofocus, dual-LED dual-tone flash','750 x 1334 pixels, 16:9 ratio (~326 ppi density)','Apple launched two new iPhones, the 4.7-inch iPhone 6 in September of 2014.The iPhone 6 pricing started at $199 on contract or $649 without contract, while the iPhone 6 Plus pricing started at $299 on contract or $749 without contract.','https://i-cdn.phonearena.com/images/phones/48955-xlarge/Apple-iPhone-6-0.jpg'),(3,'Samsung','Android 7.1 (Nougat)','16 GB, 2 GB RAM','8 MP, f/1.9, autofocus, LED flash','800 x 1280 pixels, 16:10 ratio (~189 ppi density)','The Samsung Galaxy Tab A 8.0 (2017) is powered by 1.4GHz quad-core processor and it comes with 2GB of RAM. The tablet packs 16GB of internal storage that can be expanded up to 256GB via a microSD card. As far as the cameras are concerned, the Samsung Galaxy Tab A 8.0 (2017) packs a 8-megapixel primary camera on the rear and a 5-megapixel front shooter for selfies.','https://www.91-img.com/pictures/samsung-galaxy-tab-a-8.0-2017-lte-tablet-large-1.jpg'),(4,'HTC Desire 816','Android 4.4.2 (KitKat), upgradable to 6.0 (Marshmallow)','8 GB, 1.5 GB RAM','13 MP (f/2.2, 28mm), autofocus, LED flash','720 x 1280 pixels, 16:9 ratio (~267 ppi density)','HTC has adapted the design it developed for the One (M7), which means thinner bezels on the left and right, and more space on the top and bottom to accommodate dual front-firing speakers. The Desire 816 is more or less consistent with this tall, elongated design, but differentiates itself with a large 5.5-inch display. This makes it wider and taller than the rest of the new crop of HTC smartphones. Coupled with a thickness of 8mm and weight of 165g, the HTC Desire 816 is solid to hold.','https://images-na.ssl-images-amazon.com/images/I/41Xq6fKEgzL._SX425_.jpg');
/*!40000 ALTER TABLE `Searchphone` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-31 22:35:19
