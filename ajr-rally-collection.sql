# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.41)
# Database: ajr-rally-collection
# Generation Time: 2023-02-07 11:42:14 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table cars
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cars`;

CREATE TABLE `cars` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL DEFAULT '',
  `bhp` int(11) NOT NULL,
  `drivetrain` varchar(300) NOT NULL DEFAULT '',
  `year` int(11) NOT NULL,
  `img_url` varchar(1000) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;

INSERT INTO `cars` (`id`, `name`, `bhp`, `drivetrain`, `year`, `img_url`)
VALUES
	(1,'Lancia Stratos HF (Group 4)',280,'Rear-Wheel Drive (RWD)',1977,'https://www.motorbiscuit.com/wp-content/uploads/2021/01/Lancia-Stratos-HF-Group-4-rally-car-1024x624.jpg'),
	(2,'Peugeot 306 Maxi Evo 2 (F2)',280,'Front-Wheel Drive (FWD)',1998,'https://delessencedansmesveines.com/wp-content/uploads/2014/01/Panizzi_Charbo97_2.jpg'),
	(3,'Subaru Impreza WRC (WRC 2.0)',300,'All-Wheel Drive (AWD)',2001,'https://i1.wp.com/www.motoringresearch.com/wp-content/uploads/2018/04/014-30-Years-of-Hot-Subarus.jpg?fit=1366%2C768&ssl=1'),
	(4,'MG Metro 6R4 (Group B)',410,'All-Wheel Drive (AWD)',1986,'https://www.autocar.co.uk/sites/autocar.co.uk/files/images/car-reviews/first-drives/legacy/tt-17thfeb881.jpg'),
	(5,'Toyota Yaris WRC (WRC 1.6)',380,'All-Wheel Drive (AWD)',2018,'https://cdn-2.motorsport.com/static/img/amp/800000/870000/879000/879200/879262/s6_3569161/wrc-rally-monte-carlo-2017-jari-matti-latvala-miikka-anttila-toyota-yaris-wrc-toyota-racin.jpg'),
	(6,'Skoda 130 LR (Group B)',135,'Rear-Wheel Drive (RWD)',1985,'https://images.cdn.circlesix.co/image/1/1366/0/uploads/posts/2015/12/f4cdd1d1f1acd6a6c545d8c79b1d2d6d.jpg');

/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
