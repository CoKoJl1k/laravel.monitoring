-- MySQL dump 10.13  Distrib 5.7.33, for Win64 (x86_64)
--
-- Host: localhost    Database: symfony_inspire
-- ------------------------------------------------------
-- Server version	5.7.33

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
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_books` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `author`
--

LOCK TABLES `author` WRITE;
/*!40000 ALTER TABLE `author` DISABLE KEYS */;
INSERT INTO `author` VALUES (109,'Madelyn','Stehr',3),(110,'Jacques','Goyette',2),(111,'Felix','Bosco',7),(112,'Cristobal','Boehm',6),(113,'Yadira','Feest',7),(114,'Wilma','Heidenreich',9),(115,'Haylie','Klocko',2),(116,'Leanna','Altenwerth',7),(117,'Sienna','Hand',4),(118,'Jessika','Ryan',3),(119,'Hudson','Zulauf',7),(120,'Clementine','Fahey',1),(121,'Clay','Howe',10),(122,'Ken','Krajcik',4),(123,'Paul','Stiedemann',7),(124,'Jensen','Bailey',7),(125,'Dejuan','Runte',7),(126,'Kailyn','Kub',1),(127,'Jakayla','Ritchie',2),(128,'Jay','Ortiz',10);
/*!40000 ALTER TABLE `author` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=539 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (499,'Voluptates eos assumenda.',NULL,'Ea veritatis at facilis sint corporis.','1993-10-04 20:34:45'),(500,'Iure consequatur unde.',NULL,'Ab maiores corporis veniam harum sit velit.','1992-02-01 09:56:36'),(501,'Est quia corrupti.',NULL,'Ut impedit praesentium possimus quia.','1984-10-21 07:58:52'),(502,'Ratione est.',NULL,'Est odio officia maiores ex qui ea.','2015-07-24 21:18:48'),(503,'Sint quaerat voluptas.',NULL,'Ex rerum quisquam blanditiis autem.','1972-08-06 15:20:30'),(504,'Eaque error.',NULL,'Libero et modi ducimus dolorum.','2000-05-25 15:43:29'),(505,'Cupiditate neque.',NULL,'Est inventore aliquid libero sequi dicta exercitationem ea.','1996-02-22 06:29:36'),(506,'Dolores consequatur.',NULL,'Maiores deserunt in vel ab commodi quas culpa.','2016-02-22 17:51:24'),(507,'Ut eos.',NULL,'Ut consectetur id accusamus et architecto reiciendis eos.','1978-07-13 14:08:52'),(508,'Nisi dolore.',NULL,'Soluta eum odio quos deleniti voluptas repellendus asperiores.','2004-08-14 19:44:16'),(509,'Consequatur odit.',NULL,'Consequatur blanditiis alias nesciunt.','2000-10-20 17:48:22'),(510,'Assumenda architecto molestiae.',NULL,'Eligendi ipsum voluptates voluptatem.','1987-05-07 11:18:03'),(511,'Sed laboriosam.',NULL,'Consequatur autem asperiores placeat et voluptas.','2009-05-02 23:44:00'),(512,'Necessitatibus est eaque.',NULL,'Odio dignissimos et dolorum molestiae labore.','1982-06-05 06:02:33'),(513,'Tempore voluptatem.',NULL,'Sed laborum eligendi omnis quisquam et.','2020-08-24 18:09:34'),(514,'Veritatis vel et.',NULL,'Rem cumque et qui et recusandae.','2013-01-25 03:35:06'),(515,'Alias et.',NULL,'Tenetur saepe amet sit quia odio eum odio.','1987-06-26 16:09:05'),(516,'Ex optio quia.',NULL,'Exercitationem culpa modi voluptatem.','2018-12-11 23:50:32'),(517,'Tempore sint.',NULL,'Aliquid harum et aperiam laboriosam est ipsum.','1988-03-17 01:50:11'),(518,'Id facilis quibusdam.',NULL,'Corrupti architecto eligendi autem.','2010-09-01 17:10:19'),(519,'Ullam quo.',NULL,'Enim est quae qui.','2013-07-11 21:57:08'),(520,'Optio assumenda.',NULL,'Ea recusandae dolor et soluta assumenda itaque.','1993-12-08 00:44:37'),(521,'Nihil qui.',NULL,'Voluptate dolorum est quidem optio ad.','2019-11-16 02:11:06'),(522,'Nostrum nesciunt.',NULL,'Quo quia nostrum adipisci quia ut.','2004-10-10 15:03:35'),(523,'Quod nesciunt.',NULL,'Dolorem porro voluptatem nulla.','2008-03-21 04:24:22'),(524,'Dolores et.',NULL,'Nostrum ut quisquam cupiditate atque quidem hic qui.','1986-08-26 18:03:47'),(525,'Vel amet.',NULL,'Recusandae velit sint magnam est similique.','2017-01-12 12:06:25'),(526,'Consequatur consequatur voluptatem.',NULL,'Ea molestiae laudantium nesciunt quo.','1987-06-29 19:43:19'),(527,'Qui qui.',NULL,'Et occaecati doloremque ea illum sunt qui.','2023-07-27 06:11:24'),(528,'Inventore ea.',NULL,'Nesciunt omnis fuga quia et ut.','2013-03-21 15:10:31'),(529,'Architecto voluptatibus.',NULL,'Quaerat qui quibusdam voluptates.','1970-11-17 05:04:20'),(530,'Nesciunt id.',NULL,'Similique inventore dicta cum suscipit neque.','1980-10-28 16:16:53'),(531,'Eum dolorem.',NULL,'Soluta qui consequatur minima harum unde voluptatem at repellendus.','2005-05-30 16:49:54'),(532,'Eos debitis.',NULL,'Sit facilis similique ab nobis.','2017-10-17 09:36:34'),(533,'Quasi autem consectetur.',NULL,'Debitis harum similique nesciunt velit non qui.','2006-12-02 06:21:29'),(534,'Quia autem corporis.',NULL,'Accusamus totam similique fugiat reiciendis similique at ipsam eos.','1984-09-10 08:04:18'),(535,'Et atque praesentium.',NULL,'Corporis inventore repellat et odio rem voluptas.','2007-05-15 02:28:33'),(536,'Tenetur nesciunt optio.',NULL,'Quis magni eum atque.','2007-04-17 07:40:45'),(537,'In est.',NULL,'Alias sed ut sit enim.','1973-03-31 20:59:50'),(538,'Magni cum perferendis.',NULL,'Sunt a cum sit eius qui.','2010-12-28 07:08:53');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book_author`
--

DROP TABLE IF EXISTS `book_author`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book_author` (
  `book_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  PRIMARY KEY (`book_id`,`author_id`),
  KEY `IDX_9478D34516A2B381` (`book_id`),
  KEY `IDX_9478D345F675F31B` (`author_id`),
  CONSTRAINT `FK_9478D34516A2B381` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_9478D345F675F31B` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_author`
--

LOCK TABLES `book_author` WRITE;
/*!40000 ALTER TABLE `book_author` DISABLE KEYS */;
INSERT INTO `book_author` VALUES (499,116),(500,109),(501,118),(502,115),(503,118),(504,116),(505,115),(506,109),(507,110),(508,115),(509,117),(510,110),(511,110),(512,114),(513,112),(514,118),(515,115),(516,114),(517,111),(518,111),(519,118),(520,122),(521,121),(522,127),(523,128),(524,111),(525,122),(526,127),(527,117),(528,122),(529,115),(530,127),(531,122),(532,119),(533,123),(534,111),(535,116),(536,119),(537,124),(538,111);
/*!40000 ALTER TABLE `book_author` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20230805111912','2023-08-05 14:21:32',45),('DoctrineMigrations\\Version20230805112025','2023-08-05 14:21:32',25),('DoctrineMigrations\\Version20230805170245','2023-08-05 20:03:07',112),('DoctrineMigrations\\Version20230805175547','2023-08-06 20:53:58',526),('DoctrineMigrations\\Version20230806175326','2023-08-06 20:53:58',71);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-22 11:18:58
