-- MySQL dump 10.13  Distrib 8.0.43, for Linux (x86_64)
--
-- Host: mysql324.1gb.ua    Database: gbua_tm_liloi
-- ------------------------------------------------------
-- Server version	8.4.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `umklaidet_config`
--

DROP TABLE IF EXISTS `umklaidet_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `umklaidet_config` (
  `key_config` varchar(100) NOT NULL,
  `data` json NOT NULL,
  PRIMARY KEY (`key_config`)
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `umklaidet_config`
--

LOCK TABLES `umklaidet_config` WRITE;
/*!40000 ALTER TABLE `umklaidet_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `umklaidet_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `umklaidet_levels`
--

DROP TABLE IF EXISTS `umklaidet_levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `umklaidet_levels` (
  `key_level` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `status` tinyint unsigned NOT NULL DEFAULT '1',
  `summary` text NOT NULL,
  `start` date NOT NULL,
  `finish` date NOT NULL,
  PRIMARY KEY (`key_level`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=cp1251;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `umklaidet_levels`
--

LOCK TABLES `umklaidet_levels` WRITE;
/*!40000 ALTER TABLE `umklaidet_levels` DISABLE KEYS */;
INSERT INTO `umklaidet_levels` VALUES (1,'Dreamer',3,'Enter the summary','2025-10-11','2026-10-13');
INSERT INTO `umklaidet_levels` VALUES (2,'Gamer',2,'-','2025-10-14','2026-10-14');
/*!40000 ALTER TABLE `umklaidet_levels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `umklaidet_logs`
--

DROP TABLE IF EXISTS `umklaidet_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `umklaidet_logs` (
  `key_log` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ts` timestamp NOT NULL,
  `tags` varchar(1000) NOT NULL,
  `data` json NOT NULL,
  PRIMARY KEY (`key_log`)
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `umklaidet_logs`
--

LOCK TABLES `umklaidet_logs` WRITE;
/*!40000 ALTER TABLE `umklaidet_logs` DISABLE KEYS */;
/*!40000 ALTER TABLE `umklaidet_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `umklaidet_maps`
--

DROP TABLE IF EXISTS `umklaidet_maps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `umklaidet_maps` (
  `key_map` varchar(333) NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` tinyint unsigned NOT NULL DEFAULT '1',
  `type` tinyint unsigned NOT NULL,
  `program` text NOT NULL,
  `data` json NOT NULL,
  PRIMARY KEY (`key_map`)
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `umklaidet_maps`
--

LOCK TABLES `umklaidet_maps` WRITE;
/*!40000 ALTER TABLE `umklaidet_maps` DISABLE KEYS */;
INSERT INTO `umklaidet_maps` VALUES (':','Маяк',2,1,'Спуститися на:\n[Рівень 1](/Library) (бібліотека)','{}');
INSERT INTO `umklaidet_maps` VALUES (':Library','Рівень 1 - Бібліотека',2,1,'[Піднятись](/) до Маяка','{}');
/*!40000 ALTER TABLE `umklaidet_maps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `umklaidet_milestones`
--

DROP TABLE IF EXISTS `umklaidet_milestones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `umklaidet_milestones` (
  `key_milestone` smallint unsigned NOT NULL AUTO_INCREMENT,
  `key_level` tinyint unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` tinyint unsigned NOT NULL DEFAULT '1',
  `summary` text NOT NULL,
  `start` date NOT NULL,
  `finish` date NOT NULL,
  PRIMARY KEY (`key_milestone`),
  KEY `umklaidet_milestones_umklaidet_levels_key_level_fk` (`key_level`),
  CONSTRAINT `umklaidet_milestones_umklaidet_levels_key_level_fk` FOREIGN KEY (`key_level`) REFERENCES `umklaidet_levels` (`key_level`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=cp1251;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `umklaidet_milestones`
--

LOCK TABLES `umklaidet_milestones` WRITE;
/*!40000 ALTER TABLE `umklaidet_milestones` DISABLE KEYS */;
INSERT INTO `umklaidet_milestones` VALUES (1,1,'Віха: Флорія Тоска #1',2,'-','2025-10-14','2026-10-19');
/*!40000 ALTER TABLE `umklaidet_milestones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `umklaidet_quests`
--

DROP TABLE IF EXISTS `umklaidet_quests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `umklaidet_quests` (
  `key_quest` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `key_level` tinyint unsigned NOT NULL,
  `key_milestone` smallint unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` tinyint unsigned NOT NULL DEFAULT '1',
  `summary` text NOT NULL,
  `data` json NOT NULL,
  PRIMARY KEY (`key_quest`),
  KEY `umklaidet_quests_umklaidet_levels_key_level_fk` (`key_level`),
  KEY `umklaidet_quests_umklaidet_milestones_key_milestone_fk` (`key_milestone`),
  CONSTRAINT `umklaidet_quests_umklaidet_levels_key_level_fk` FOREIGN KEY (`key_level`) REFERENCES `umklaidet_levels` (`key_level`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `umklaidet_quests_umklaidet_milestones_key_milestone_fk` FOREIGN KEY (`key_milestone`) REFERENCES `umklaidet_milestones` (`key_milestone`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `umklaidet_quests`
--

LOCK TABLES `umklaidet_quests` WRITE;
/*!40000 ALTER TABLE `umklaidet_quests` DISABLE KEYS */;
/*!40000 ALTER TABLE `umklaidet_quests` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-10-14  3:40:54
