-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: dauction
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `buyers`
--

DROP TABLE IF EXISTS `buyers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buyers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emailx` varchar(100) DEFAULT NULL,
  `passwordx` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buyers`
--

LOCK TABLES `buyers` WRITE;
/*!40000 ALTER TABLE `buyers` DISABLE KEYS */;
INSERT INTO `buyers` VALUES (1,'edgardoalbertoromero@gmail.com','LEUTyfClY9VuUAfsSVSshpO/J3WY7F/P8rnbXbzeSKo=');
/*!40000 ALTER TABLE `buyers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `description` text,
  `startprice` double DEFAULT NULL,
  `finalprice` double DEFAULT '0',
  `totalfees` double DEFAULT '0',
  `datepost` datetime DEFAULT NULL,
  `deadline` datetime DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL COMMENT 'ACTIVE - The item is available to the buyers\nFINISHED - The auction was finish\nINACTIVE - The item is unavailable to the buyers (It''s cancelled)\n',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (1,'Lenovo ThinkPad W540, i7-4700MQ 2.4GHz 16Gb, 240Gb SSD','Lenovo','ThinkPad W540','Good working condition. Used gently. It\'s not looks like new and has some wear traces. Comes without Windows licence. Power supply included. MiniDisplay port, VGA, Bluetooth, Wifi, full keyboard. Screen resolution is 1920x1080. Intel HD Graphics 4600 and NVIDIA Quadro K1100M (2Gb GDDR5) video cards. Canadian QWERTY French backlight keyboard. Battery health 85.8%\n\nFree spare 250Gb HDD included.\n\n\nAs is! No returns! No warranty! \nUS&Canada Only!\n\nPayPal Instant payment Only! ',501.99,0,0,'2018-04-17 00:00:00','2018-04-27 17:59:59','ACTIVE'),(2,'iPad (5th gen) 9.7\'\' Wi-Fi + Cellular 32GB Space Gray MP1J2CLA','Apple','Apple iPad (5th Generation)','The Apple iPad 5th Generation offers Wi-Fi connectivity and multiple useful features and functions. See everything crystal clear on the 9.7-inch LED retina display which delivers a 2048 x 1536-resolution. The A9 chip with 64-bit architecture ensures your apps will run smoothly. Equipped with a high-definition forward-facing 1.2MP FaceTime camera and an 8MP rear camera, this tablet lets you capture all your memories and store them on the 32GB built-in memory. In addition, this space gray Wi-Fi + Cellular model has a 32.4-watt rechargeable lithium battery that can last you up to 10 hours.',399.99,0,0,'2018-04-17 00:00:00','2018-04-22 15:35:00','ACTIVE'),(3,'Nwt Michael kors mk Fulton leather flap continental 10 card wallet clutch plum','Michael Kors','Fulton flap','New with tags \nMichael Kors Fulton flap continental wallet clutch\n\n\nThis list is for a new Michael Kors Fulton Flap Leather Wallet, Plum Color.\n\n* Pebble Leather with partial fabric lining\n* Gold tone hardware\n* 4\" H x 1.\" D x 7.5\" L\n* Exterior 1 slip pocket on the back\n* Interior 1 zip center pocket, 4 bill compartments and 10 card slots',109.99,0,0,'2018-04-17 00:00:00','2018-04-21 13:45:00','ACTIVE'),(4,'Pink Fast Forward Girl\'s Hello Kitty 3D Eva Molded Backpack School nap bag','Hello Kitty','Backpack School','Fast Forward Girl\'s Hello Kitty 3D Eva Molded Backpack School  Nursery nap bag\n\n 100% Polyester\n\n 16\"x12\"\n\nImported\nHand Wash\nTwo compartments\nPadded shoulder straps\nAdjustable padded shoulder straps, features one main compartment and one front compartment. Two side mesh pockets. Contains small hanging loop for locker or closet hanging. \n',19.99,0,0,'2018-04-17 00:00:00','2018-04-20 23:59:59','ACTIVE'),(5,'New Canada Huge Giant 3 \' X 5 \' High Quality Canadian Flag - Drapeau Canadien','Unbranded','Unbranded','Features\n\n- Made of high quality polyester, fastness and durable\n\n- With a flagpole casing on the left side, other three sides sewed by machine\n\n- Great for parties, festivals, historical events, military occasions etc\n\nSpecifications\n\n- Size: Approx 90x150cm\n\n- Material: Polyester fabrics\n\nQuantity:1* flag',55.99,0,0,'2018-04-17 00:00:00','2018-04-24 16:30:00','ACTIVE'),(6,'Optimus Prime Transformers 1984 84 Original Generation 1 G1 Autobot Commander','Hasbro','Optimus Prime','Transformers Optimus Prime Generation 1 Autobot Commander Action Figure\n\nThis is the real deal original Optimus Prime released by Hasbro in 1984.  You\'ll note the Takara and Hasbro patent dates 1980 and 1982 on the bottom of the trailer. \n\nOverall in good working condition, and he transforms fine.  The spring-loaded launcher in the trailer for Roller still works.  The mechanic / artillery robot built-in the trailer is broken off at the top of the stalk and is missing.  Optimus\' left shoulder joint won\'t come forward all the way.  Three of the missiles are missing.  Some joints are a little stiff.  There is a little paint and sticker wear.  No packaging or instructions included.\n\nFEATURES & DETAILS:\nOptimus Prime Action Figure\nTrailer / Command Center\n\"Roller\" Scout Car\n2 Fists\nGun\n1 Missile\nRefueling Handle, Tube, and Tip\nTech Specs\nTech Spec Decoder\n',49.99,0,0,'2018-04-17 00:00:00','2018-04-25 11:35:00','ACTIVE'),(7,'NIB Star Wars Lord DARTH VADER Rubies Supreme Edition Costume Standard & XL Size','Rubie\'s\n','Star Wars','NIB Star Wars Lord DARTH VADER Rubies Supreme Edition Costume Standard Size \n\nBrand New Star Wars Darth Vader \"Lord Vader\" Rubies Supreme Edition Costume Cosplay Replica Licensed 909877  FREE SHIPPING (USA upper 48 Only)\nSize Standard and XL sizes. \nPick up HOT Lady Star Wars Lovin Chicks wearing this the baddest of Bad Boys!\nLord Vader (Born Anakin Skywalker) is the pivotal figure in the Star Wars Saga.  Once a heroic Jedi Knight, Darth Vader was SEDUCED by the dark side of the force, becoming a Sith Lord.  Leading the Empire\'s eradication of the Jedi Order.  He remains in service of the Emperor, the very, very, very evil Darth Sidious, for decades, enforcing his Master\'s will and seeking to crush the flegling Rebel Alliance. \nBut there was good in him......\nPremium Quality, top of line, Supreme Edition Star Wars collectible Adult Costume.\nIncludes:\nOfficially licensed collectors\'s edition Darth Vader injection molded replica mask/helmet set with voice device.\nQuilted faux-leather bodysuit with injection molded chest armor, codpiece, shin guards, and collar with shoulder guards using Lucas Studios original molds.  Electronic components require 8 AA batteries (not included).\nAlso details include gloves, flowing cape, zipper fly (for peeing)  faux leather belt and light up detail.\n\nDoes not include: Weapon, boots/shoes or person inside costume.\nAvailable in Adult Standard size which fits up to size 44.\nThis is one of the sexiest of Star Wars Costumes\nOfficially Licensed STAR WARS Costume\n\n*Please check out our other eBay listings.  We carry the full line of Rubies Supreme Star Wars Edition Costumes*\n \nBuyer pays $0 (FREE) Economy Shipping (US Upper 48 Only)\n\nI will ship to certain foreign countries.  Please contact me for rates.\n\nInternational Buyers responsible for all taxes/duties.\n\nI do not ship to HI, AK, PR, Mexico, Africa, Indonesia or Russia.\n\nPlease feel free to contact me with any questions, need more pictures or I\'ve made an error in the listing.\n',995.95,0,0,'2018-04-17 00:00:00','2018-04-21 15:00:00','ACTIVE');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-18 23:13:38
