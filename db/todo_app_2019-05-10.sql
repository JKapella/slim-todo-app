# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.43)
# Database: todo_app
# Generation Time: 2019-05-10 10:36:03 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table todo_table
# ------------------------------------------------------------

DROP TABLE IF EXISTS `todo_table`;

CREATE TABLE `todo_table` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `message` varchar(2000) DEFAULT NULL,
  `completed` tinyint(11) NOT NULL DEFAULT '0',
  `deleted` tinyint(11) NOT NULL DEFAULT '0',
  `due_date` varchar(50) DEFAULT NULL,
  `high_priority` tinyint(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `todo_table` WRITE;
/*!40000 ALTER TABLE `todo_table` DISABLE KEYS */;

INSERT INTO `todo_table` (`id`, `message`, `completed`, `deleted`, `due_date`, `high_priority`)
VALUES
	(1,'Finish Todo app',1,1,NULL,NULL),
	(2,'spread love',1,0,NULL,NULL),
	(3,'Make this app v v nice',0,0,NULL,NULL),
	(4,'Finish app',1,0,NULL,NULL),
	(5,'Super finish app',1,0,NULL,NULL),
	(6,'New thing!',1,0,NULL,NULL),
	(7,'new item',0,0,NULL,NULL),
	(8,'another new thing',0,0,NULL,NULL),
	(9,'more stuff coming through here',0,0,NULL,NULL),
	(10,'lovely to do list',0,0,NULL,NULL),
	(11,'Sub tasks!',1,0,NULL,NULL),
	(12,'New to do list item! Get it added!',0,0,NULL,NULL),
	(13,'',1,0,NULL,NULL),
	(14,'Get A E S T H E T I C',0,0,NULL,NULL),
	(15,'Love Ashby',1,0,NULL,NULL),
	(16,'test',0,0,'test',NULL),
	(17,'Due Date',0,0,'2019-05-29',NULL);

/*!40000 ALTER TABLE `todo_table` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
