/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.1.37-MariaDB : Database - betflixa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`betflixa` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `betflixa`;

/*Table structure for table `epl_fixtures` */

DROP TABLE IF EXISTS `epl_fixtures`;

CREATE TABLE `epl_fixtures` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `home_team` varchar(20) DEFAULT NULL,
  `away_team` varchar(20) DEFAULT NULL,
  `game_time` datetime DEFAULT NULL,
  `match_tip` varchar(20) DEFAULT NULL,
  `match_status` bigint(20) DEFAULT '0',
  `home_result` int(10) DEFAULT NULL,
  `away_result` int(10) DEFAULT NULL,
  `end_result` bigint(20) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `epl_fixtures` */

insert  into `epl_fixtures`(`id`,`home_team`,`away_team`,`game_time`,`match_tip`,`match_status`,`home_result`,`away_result`,`end_result`) values 
(1,'Everton','Wolves','2019-10-24 01:25:20','Wolves',1,78,15,2),
(2,'Man u','Arsenal','2019-10-23 01:25:31','Arsenal',1,50,3,1),
(3,'Brighton','Aston Villa','2019-10-30 01:25:34','Ast v',1,2,2,0),
(4,'Spurs','Liverpool','2019-10-30 01:25:38','liverpool',1,0,5,2);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `email_address` varchar(225) DEFAULT NULL,
  `password_hash` varchar(100) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`user_id`,`first_name`,`last_name`,`phone_number`,`email_address`,`password_hash`,`date_created`) values 
(7,'duss','oct',702689658,'dusselcollins@gmail.com','$2y$13$SHznn/.tEmjGQ545srdjGusNu3wkoR7PgUylCaBHryqN7CXDGBGBK','2019-10-04 16:37:29');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
