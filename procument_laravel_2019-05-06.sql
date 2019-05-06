# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 10.3.7-MariaDB)
# Database: procument_laravel
# Generation Time: 2019-05-06 17:13:37 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table districts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `districts`;

CREATE TABLE `districts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `region` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `districts` WRITE;
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;

INSERT INTO `districts` (`id`, `name`, `region`)
VALUES
	(1,'Ahanta West District',10),
	(2,'Aowin/Suaman District',10),
	(3,'Bia West District',10),
	(4,'Bia East District',10),
	(5,'Bibiani/Anhwiaso/Bekwai District',10),
	(6,'Bodi District',10),
	(7,'Ellembele District',10),
	(8,'Jomoro District',10),
	(9,'Juaboso District',10),
	(10,'Mpohor District',10),
	(11,'Mpohor/Wassa East District',10),
	(12,'Nzema East Municipal District',10),
	(13,'Prestea-Huni Valley District',10),
	(14,'Sefwi Akontombra District',10),
	(15,'Sefwi Wiawso Municipal District',10),
	(16,'Sekondi Takoradi Metropolitan Assembly',10),
	(17,'Shama District',10),
	(18,'Suaman District',10),
	(19,'Tarkwa-Nsuaem Municipal District',10),
	(20,'Wasa Amenfi East District',10),
	(21,'Wasa Amenfi West District',10),
	(22,'Wassa Amenfi Central District',10),
	(23,'Adaklu District',2),
	(24,'Afadjato South District',2),
	(25,'Agotime Ziope District',2),
	(26,'Akatsi North District',2),
	(27,'Akatsi South District',2),
	(28,'Biakoye District',2),
	(29,'Central Tongu District',2),
	(30,'Ho Municipal District',2),
	(31,'Ho West District',2),
	(32,'Hohoe Municipal District',2),
	(33,'Jasikan District',2),
	(34,'Kadjebi District',2),
	(35,'Keta Municipal District',2),
	(36,'Ketu North District',2),
	(37,'Ketu South Municipal District',2),
	(38,'Kpando Municipal District',2),
	(39,'Krachi East District',2),
	(40,'Krachi Nchumuru District',2),
	(41,'Krachi West District',2),
	(42,'Nkwanta North District',2),
	(43,'Nkwanta South District',2),
	(44,'North Dayi District',2),
	(45,'North Tongu District',2),
	(46,'South Dayi District',2),
	(47,'South Tongu District',2),
	(48,'Daffiama Bussie Issa District',4),
	(49,'Jirapa District',4),
	(50,'Lambussie Karni District',4),
	(51,'Lawra District',4),
	(52,'Nadowli District',4),
	(53,'Nandom District',4),
	(54,'Sissala East District',4),
	(55,'Sissala West District',4),
	(56,'Wa East District',4),
	(57,'Wa Municipal District',4),
	(58,'Wa West District',4),
	(59,'Bawku Municipal District',5),
	(60,'Bawku West District',5),
	(61,'Binduri District',5),
	(62,'Bolgatanga Municipal District',5),
	(63,'Bongo District',5),
	(64,'Builsa District',5),
	(65,'Builsa South District',5),
	(66,'Garu-Tempane District',5),
	(67,'Kassena Nankana East District',5),
	(68,'Kassena Nankana West District',5),
	(69,'Nabdam District',5),
	(70,'Pusiga District',5),
	(71,'Talensi District',5),
	(72,'Bole District',7),
	(73,'Bunkpurugu-Nyankpanduri District',7),
	(74,'Central Gonja District',7),
	(75,'Chereponi District',7),
	(76,'East Gonja Municipal District',7),
	(77,'East Mamprusi Municipal District',7),
	(78,'Gushegu Municipal District',7),
	(79,'Karaga District',7),
	(80,'Kpandai District',7),
	(81,'Kumbungu District',7),
	(82,'Mamprugo Moaduri District',7),
	(83,'Mion District',7),
	(84,'Nanton District',7),
	(85,'Nanumba North Municipal District',7),
	(86,'Nanumba South District',7),
	(87,'North Gonja District',7),
	(88,'Saboba District',7),
	(89,'Sagnarigu Municipal District',7),
	(90,'Savelugu Municipal District',7),
	(91,'Sawla-Tuna-Kalba District',7),
	(92,'Tamale Metropolitan District',7),
	(93,'Tatale Sangule District',7),
	(94,'Tolon District',7),
	(95,'West Gonja District',7),
	(96,'West Mamprusi Municipal District',7),
	(97,'Yendi Municipal District',7),
	(98,'Yunyoo-Nasuan District',7),
	(99,'Zabzugu District',7),
	(100,'Ablekuma North Municipal District',1),
	(101,'Ablekuma West Municipal District',1),
	(102,'Accra Metropolitan District',1),
	(103,'Ada East District',1),
	(104,'Ada West District',1),
	(105,'Adenta Municipal District',1),
	(106,'Ashaiman Municipal District',1),
	(107,'Ayawaso East Municipal District',1),
	(108,'Ayawaso North Municipal District',1),
	(109,'Ayawaso West Municipal District',1),
	(110,'Ga Central District',1),
	(111,'Ga East Municipal District',1),
	(112,'Ga North Municipal District',1),
	(113,'Ga South Municipal District',1),
	(114,'Ga West Municipal District',1),
	(115,'Kpone Katamanso Municipal District',1),
	(116,'Krowor Municipal District',1),
	(117,'La Dade Kotopon Municipal District',1),
	(118,'La Nkwantanang Madina Municipal District',1),
	(119,'Ledzokuku Municipal District',1),
	(120,'Ningo Prampram District',1),
	(121,'Okaikwei Municipal District',1),
	(122,'Shai Osudoku District',1),
	(123,'Tema Metropolitan District',1),
	(124,'Tema West Municipal District',1),
	(125,'Weija Municipal District',1),
	(126,'Akuapim South District',8),
	(127,'Akuapim North District',8),
	(128,'Akyemansa District',8),
	(129,'Asuogyaman District',8),
	(130,'Ayensuano District',8),
	(131,'Atiwa East District',8),
	(132,'Atiwa West District',8),
	(133,'Birim Central Municipal District',8),
	(134,'Birim North District',8),
	(135,'Birim South District',8),
	(136,'Denkyembour District',8),
	(137,'East Akim Municipal District',8),
	(138,'Fanteakwa District',8),
	(139,'Kwaebibirem District',8),
	(140,'Kwahu Afram Plains North District',8),
	(141,'Kwahu Afram Plains South District',8),
	(142,'Kwahu East District',8),
	(143,'Kwahu South District',8),
	(144,'Kwahu West Municipal District',8),
	(145,'Lower Manya Krobo District',8),
	(146,'New-Juaben Municipal District',8),
	(147,'Nsawam Adoagyire Municipal District',8),
	(148,'Suhum Municipal',8),
	(149,'Upper Manya Krobo District',8),
	(150,'Upper West Akim District',8),
	(151,'West Akim Municipal District',8),
	(152,'Yilo Krobo Municipal',8),
	(153,'Abura/Asebu/Kwamankese District',9),
	(154,'Agona East District',9),
	(155,'Agona West Municipal District',9),
	(156,'Ajumako/Enyan/Essiam District',9),
	(157,'Asikuma/Odoben/Brakwa District',9),
	(158,'Assin North Municipal District',9),
	(159,'Assin South District',9),
	(160,'Awutu Senya East Municipal District',9),
	(161,'Awutu Senya West District',9),
	(162,'Cape Coast Metropolitan District',9),
	(163,'Effutu Municipal District',9),
	(164,'Ekumfi District',9),
	(165,'Gomoa East District',9),
	(166,'Gomoa West District',9),
	(167,'Komenda/Edina/Eguafo/Abirem Municipal District',9),
	(168,'Mfantsiman Municipal District',9),
	(169,'Twifo-Ati Morkwa District',9),
	(170,'Twifo/Heman/Lower Denkyira District',9),
	(171,'Upper Denkyira East Municipal District',9),
	(172,'Upper Denkyira West District',9),
	(173,'Asunafo North Municipal District',6),
	(174,'Asunafo South District',6),
	(175,'Asutifi North District',6),
	(176,'Asutifi South District',6),
	(177,'Atebubu-Amantin District',6),
	(178,'Banda District',6),
	(179,'Berekum East Municipal District',6),
	(180,'Berekum Municipal District',6),
	(181,'Dormaa East District',6),
	(182,'Dormaa Municipal District',6),
	(183,'Dormaa West District',6),
	(184,'Jaman North District',6),
	(185,'Jaman South District',6),
	(186,'Kintampo North Municipal District',6),
	(187,'Kintampo South District',6),
	(188,'Nkoranza North District',6),
	(189,'Nkoranza South District',6),
	(190,'Pru District',6),
	(191,'Sene East District',6),
	(192,'Sene West District',6),
	(193,'Sunyani Municipal District',6),
	(194,'Sunyani West District',6),
	(195,'Tain District',6),
	(196,'Tano North District',6),
	(197,'Tano South District',6),
	(198,'Techiman Municipal District',6),
	(199,'Techiman North District',6),
	(200,'Wenchi Municipal District',6),
	(201,'Adansi North District',3),
	(202,'Adansi South District',3),
	(203,'Afigya-Kwabre District',3),
	(204,'Ahafo Ano North District',3),
	(205,'Ahafo Ano South District',3),
	(206,'Amansie Central District',3),
	(207,'Amansie West District',3),
	(208,'Asante Akim Central Municipal District',3),
	(209,'Asante Akim North District',3),
	(210,'Asante Akim South District',3),
	(211,'Asokore Mampong Municipal District',3),
	(212,'Atwima Kwanwoma District',3),
	(213,'Atwima Mponua District',3),
	(214,'Atwima Nwabiagya District',3),
	(215,'Bekwai Municipal District',3),
	(216,'Bosome Freho District',3),
	(217,'Botsomtwe District',3),
	(218,'Ejisu-Juaben Municipal District',3),
	(219,'Ejura - Sekyedumase District',3),
	(220,'Kumasi Metropolitan District',3),
	(221,'Kwabre East District',3),
	(222,'Mampong Municipal District',3),
	(223,'Obuasi Municipal District',3),
	(224,'Offinso North District',3),
	(225,'Offinso South Municipal District',3),
	(226,'Sekyere Afram Plains District',3),
	(227,'Sekyere Central District',3),
	(228,'Sekyere East District',3),
	(229,'Sekyere Kumawu District',3),
	(230,'Sekyere South District',3);

/*!40000 ALTER TABLE `districts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table opportunities
# ------------------------------------------------------------

DROP TABLE IF EXISTS `opportunities`;

CREATE TABLE `opportunities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `solicitation_title` varchar(100) NOT NULL,
  `entity` int(11) DEFAULT NULL,
  `project_name` varchar(50) DEFAULT NULL,
  `industry` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `award_amount` decimal(20,2) DEFAULT NULL,
  `solicitation_number` varchar(100) DEFAULT NULL,
  `posted_date` date DEFAULT NULL,
  `contract_award_date` date DEFAULT NULL,
  `office_address` varchar(100) DEFAULT NULL,
  `expired_date` date DEFAULT NULL,
  `interested_vendors` int(11) DEFAULT NULL,
  `point_of_contact` varchar(100) DEFAULT NULL,
  `description_of_solicitation` text DEFAULT NULL,
  `documents` varchar(215) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table people
# ------------------------------------------------------------

DROP TABLE IF EXISTS `people`;

CREATE TABLE `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `business_name` varchar(100) NOT NULL,
  `registration_number` varchar(50) NOT NULL,
  `year_of_registration` int(11) DEFAULT NULL,
  `physical_address` varchar(50) DEFAULT NULL,
  `region` int(11) DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `tin` varchar(100) DEFAULT NULL,
  `ghana_post_gps` varchar(100) DEFAULT NULL,
  `contact_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `entity_type` varchar(20) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `people` WRITE;
/*!40000 ALTER TABLE `people` DISABLE KEYS */;

INSERT INTO `people` (`id`, `business_name`, `registration_number`, `year_of_registration`, `physical_address`, `region`, `district`, `tin`, `ghana_post_gps`, `contact_name`, `email`, `telephone`, `position`, `entity_type`, `category`, `updated_at`, `created_at`, `user`)
VALUES
	(1,'OCANSEY KATEY GAD','39203903',NULL,'sdd',NULL,NULL,NULL,NULL,NULL,'gadocansey@gmail.com','3333333333',NULL,NULL,NULL,'2019-04-28 23:54:43','2019-04-28 23:54:43',NULL),
	(2,'ALUGOLD','29292929',NULL,'NDNND',3,201,'39393939','32333','GAD','gadocansey@gmail.com','0243348522','GAD OCANSEY','Buyer','GOLD MINING','2019-04-29 01:28:41','2019-04-29 01:28:41',1),
	(3,'zenith','33333',1990,'sdndmd',6,175,'3333','dnsnsd','sndndnd','gad.ocansey@tpoly.edu.gh','0202933030','sdd','Vendor','dd','2019-04-29 22:56:41','2019-04-29 22:56:41',3),
	(4,'webmaster','33389',2010,'djdj',8,128,'3333','55','dff','gadocansey@gmdail.commmm','2922929929','dff','Buyer','d','2019-04-30 05:54:32','2019-04-30 05:54:32',3);

/*!40000 ALTER TABLE `people` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table regions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `regions`;

CREATE TABLE `regions` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(30) DEFAULT NULL,
  `INPUTEDDATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;

INSERT INTO `regions` (`ID`, `NAME`, `INPUTEDDATE`)
VALUES
	(1,'Greater Accra','2014-02-01 02:29:07'),
	(2,'Volta ','2014-02-01 02:29:07'),
	(3,'Ashanti','2014-02-01 02:29:22'),
	(4,'Upper West','2014-02-01 02:29:22'),
	(5,'Upper East','2014-02-01 02:29:40'),
	(6,'Brong Ahafo','2014-02-01 02:29:40'),
	(7,'Northern','2014-02-01 02:29:56'),
	(8,'Eastern','2014-02-01 02:29:56'),
	(9,'Central','2014-02-01 02:30:07'),
	(10,'Western','2014-02-01 02:30:07');

/*!40000 ALTER TABLE `regions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tenders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tenders`;

CREATE TABLE `tenders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(200) DEFAULT NULL,
  `opportunity` varchar(100) DEFAULT NULL,
  `expression_of_interest` text DEFAULT NULL,
  `industry` varchar(100) DEFAULT NULL,
  `region` int(11) DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `tenders` WRITE;
/*!40000 ALTER TABLE `tenders` DISABLE KEYS */;

INSERT INTO `tenders` (`id`, `type`, `opportunity`, `expression_of_interest`, `industry`, `region`, `district`, `year`, `user`, `created_at`, `updated_at`)
VALUES
	(1,'EDUCATION','SEHege',NULL,'health',NULL,NULL,2019,3,'2019-05-01 06:54:21','2019-05-01 06:54:21'),
	(3,'news_and_eventcs','ssdds','dddsdsdds','fdddd',NULL,NULL,434,3,'2019-05-01 13:33:51','2018-01-01 15:02:17');

/*!40000 ALTER TABLE `tenders` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(3,'OCANSEY KATEY GAD','gadocansey@gmail.com','2019-04-29 02:28:22','$2y$10$SqfBWmTIZK5B/Qvl2CfaHe9YRVnTQjqHvpjyADtrGsM.Zt60QcAAu','c3f3tUNJZv9WKizxgELkXJ9Ha7RLkQqb437GhVAjNE0vNZw80ZXLPRCAmBTn','2019-04-29 02:09:00','2019-04-29 02:28:22'),
	(4,'Agnes Sam','cashallsam@gmail.com',NULL,'$2y$10$y.oBDaJobwQ2PBNhsjlB0O6lDHqsCbbRS32pSAhgm49lm/N.7B8.m',NULL,'2019-04-30 05:49:47','2019-04-30 05:49:47');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
