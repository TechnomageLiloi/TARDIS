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
-- Table structure for table `tardis_config`
--

DROP TABLE IF EXISTS `tardis_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tardis_config` (
  `key_config` varchar(100) NOT NULL,
  `data` json NOT NULL,
  PRIMARY KEY (`key_config`)
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tardis_levels`
--

DROP TABLE IF EXISTS `tardis_levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tardis_levels` (
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
-- Table structure for table `tardis_logs`
--

DROP TABLE IF EXISTS `tardis_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tardis_logs` (
  `key_log` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ts` timestamp NOT NULL,
  `tags` varchar(1000) NOT NULL,
  `data` json NOT NULL,
  PRIMARY KEY (`key_log`)
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tardis_maps`
--

DROP TABLE IF EXISTS `tardis_maps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tardis_maps` (
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
-- Table structure for table `tardis_milestones`
--

DROP TABLE IF EXISTS `tardis_milestones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tardis_milestones` (
  `key_milestone` smallint unsigned NOT NULL AUTO_INCREMENT,
  `key_level` tinyint unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` tinyint unsigned NOT NULL DEFAULT '1',
  `summary` text NOT NULL,
  `start` date NOT NULL,
  `finish` date NOT NULL,
  PRIMARY KEY (`key_milestone`),
  KEY `tardis_milestones_tardis_levels_key_level_fk` (`key_level`),
  CONSTRAINT `tardis_milestones_tardis_levels_key_level_fk` FOREIGN KEY (`key_level`) REFERENCES `tardis_levels` (`key_level`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=cp1251;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tardis_quests`
--

DROP TABLE IF EXISTS `tardis_quests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tardis_quests` (
  `key_quest` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `key_level` tinyint unsigned NOT NULL,
  `key_milestone` smallint unsigned NOT NULL,
  `title` varchar(100) NOT NULL,
  `status` tinyint unsigned NOT NULL DEFAULT '1',
  `summary` text NOT NULL,
  `data` json NOT NULL,
  PRIMARY KEY (`key_quest`),
  KEY `tardis_quests_tardis_levels_key_level_fk` (`key_level`),
  KEY `tardis_quests_tardis_milestones_key_milestone_fk` (`key_milestone`),
  CONSTRAINT `tardis_quests_tardis_levels_key_level_fk` FOREIGN KEY (`key_level`) REFERENCES `tardis_levels` (`key_level`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tardis_quests_tardis_milestones_key_milestone_fk` FOREIGN KEY (`key_milestone`) REFERENCES `tardis_milestones` (`key_milestone`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-10-17  5:15:05
