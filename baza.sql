/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.11-MariaDB : Database - proizvodi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`proizvodi` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `proizvodi`;

/*Table structure for table `proizvod` */

DROP TABLE IF EXISTS `proizvod`;

CREATE TABLE `proizvod` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(40) DEFAULT NULL,
  `sifra` varchar(12) DEFAULT NULL,
  `serijski_broj` varchar(30) DEFAULT NULL,
  `opis` text DEFAULT NULL,
  `prodajna_cena` decimal(11,2) DEFAULT NULL,
  `stanje` int(11) DEFAULT NULL,
  `kupovna_cena` decimal(11,2) DEFAULT NULL,
  `vrsta_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vrsta_id` (`vrsta_id`),
  CONSTRAINT `proizvod_ibfk_1` FOREIGN KEY (`vrsta_id`) REFERENCES `vrsta_proizvoda` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `proizvod` */

insert  into `proizvod`(`id`,`naziv`,`sifra`,`serijski_broj`,`opis`,`prodajna_cena`,`stanje`,`kupovna_cena`,`vrsta_id`) values 
(1,'IPHONE Xdfs','123','asdv','afds',122.00,53,42.00,1);

/*Table structure for table `vrsta_proizvoda` */

DROP TABLE IF EXISTS `vrsta_proizvoda`;

CREATE TABLE `vrsta_proizvoda` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `vrsta_proizvoda` */

insert  into `vrsta_proizvoda`(`id`,`naziv`) values 
(1,'kafa'),
(2,'grickaliceasgf'),
(3,'bezalkoholno pice'),
(4,'alkoholno pice'),
(5,'meso'),
(6,'zacin'),
(7,'slatkisi'),
(9,'fds'),
(10,'chipsy');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
