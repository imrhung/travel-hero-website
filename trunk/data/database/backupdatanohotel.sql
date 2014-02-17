CREATE DATABASE  IF NOT EXISTS `travel_hero` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `travel_hero`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: travel_hero
-- ------------------------------------------------------
-- Server version	5.5.33

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
-- Table structure for table `quest`
--

DROP TABLE IF EXISTS `quest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` float DEFAULT '0',
  `longitude` float DEFAULT '0',
  `movie_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qrcode_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quest_owner_id` int(11) DEFAULT '0',
  `parent_quest_id` int(11) DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `points` int(11) DEFAULT '0',
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reward_id` int(11) DEFAULT NULL,
  `donate_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quest`
--

LOCK TABLES `quest` WRITE;
/*!40000 ALTER TABLE `quest` DISABLE KEYS */;
INSERT INTO `quest` VALUES (1,'Big Quest 0','',10.7172,106.73,'',NULL,0,NULL,'https://s3-ap-southeast-1.amazonaws.com/singtravelhero/images/questphoto/1fdac2ef-62c7-4d5e-b7c7-7ddadaa37840.jpg',200,'1SB1-1 Mỹ Viên, Phú Mỹ Hưng, Tân Phú Ward, District 7, Ho Chi Minh City, Vietnam',1,NULL),(2,'Unicef Fight For Zero','UNICEF strives for Zero. That means, zero exploited children, zero abused children, and zero trafficked children.',10.7739,106.703,'https://dl.dropboxusercontent.com/u/3243296/videos/UNICEF.mp4','https://s3-us-west-2.amazonaws.com/travelhero/qrcode/497c717d-cc6d-4dfc-b615-90f628d0cb4d.png',0,1,'https://s3-ap-southeast-1.amazonaws.com/singtravelhero/images/questphoto/b0d330a1-9697-4e90-8294-0a521a0a8e49.jpg',1000,'115 Nguyen Hue, District 1, Ho Chi Minh City, Vietnam',NULL,'https://unicef.org.vn/donate/'),(3,'Koto | Know One Teach One','Is a vocational training organisation for street and disadvantaged youth in Vietnam. Accepts youth whose backgrounds are primarily orphans, street kids and the poor in both the city and rural communities.',10.7772,106.704,'https://dl.dropboxusercontent.com/u/3243296/videos/KOTO.mp4','https://s3-us-west-2.amazonaws.com/travelhero/qrcode/76def669-8511-427f-abf0-e05656f357bb.png',0,1,'https://s3-ap-southeast-1.amazonaws.com/singtravelhero/images/questphoto/5a39b469-601a-4344-be67-0eca9dad7f42.jpg',1000,'89 Hai Bà Trưng, Bến Nghé Ward, District 1, Ho Chi Minh City, Vietnam',NULL,NULL),(4,'Kristina Nobel Foundation','Christina Noble Children\'s Foundation is an International Partnership of people dedicated to serving underprivileged children in Vietnam and Mongolia with the hope of helping each child maximize their life potential.',10.7799,106.686,'https://dl.dropboxusercontent.com/u/3243296/videos/CNCF.mp4','https://s3-us-west-2.amazonaws.com/travelhero/qrcode/d5c4c7ea-7249-4b89-861a-627057d4861e.png',0,1,'https://s3-ap-southeast-1.amazonaws.com/singtravelhero/images/questphoto/dbdd9ed2-9482-426c-9191-0605279b7b79.jpg',1000,'38 Tu Xuong Street \nDistrict 3 \nHO CHI MINH CITY \nVietnam',NULL,NULL),(5,'Big Quest 1','',10.7172,106.73,NULL,NULL,0,NULL,'',500,'1SB1-1 Mỹ Viên, Phú Mỹ Hưng, Tân Phú Ward, District 7, Ho Chi Minh City, Vietnam',1,NULL),(6,'American Red Cross in Vietnam','the American Red Cross has been working with the Vietnam Red Cross and other partners since early 2008 to improve access to and utilization of HIV information, treatment, care and support services.',21.0222,105.843,'https://dl.dropboxusercontent.com/u/3243296/videos/American%20Red%20Cross_VN.mp4','https://s3-us-west-2.amazonaws.com/travelhero/qrcode/5cc4d388-e8a0-4187-9178-f857cebcb0fd.png',0,5,'https://s3-ap-southeast-1.amazonaws.com/singtravelhero/images/questphoto/b7a95302-5f27-4534-8f98-918c2901ffaa.png',800,'15 Thiền Quang, Hà Nội, Vietnam',NULL,'https://www.redcross.org/quickdonate/index.jsp'),(7,'Blue Dragon Children’s Home','Blue Dragon Children\'s Foundation is an Australian grassroots charity that reaches out to kids in crisis throughout Vietnam.',21.0259,105.847,'https://dl.dropboxusercontent.com/u/3243296/videos/blueDragonChildrensHome.mp4','https://s3-us-west-2.amazonaws.com/travelhero/qrcode/a75d1db9-b5b0-4369-85fd-b85cdbaf819a.png',0,5,'https://s3-ap-southeast-1.amazonaws.com/singtravelhero/images/questphoto/a09eeafc-5c08-447b-bc36-b763a016ff40.png',500,'66 Nghĩa Dũng, Phúc Xá, Ha Noi, Vietnam',NULL,NULL),(8,'Care International in Vietnam','CARE has worked in Vietnam since 1989. As Vietnam becomes a middle-income country, we are concentrating our work on supporting rights and sustainable development among the most vulnerable groups in Vietnam, for example remote ethnic minorities, poor women and girls, and people vulnerable to climate change.',21.0681,105.823,'https://dl.dropboxusercontent.com/u/3243296/videos/care_international.mp4','https://s3-us-west-2.amazonaws.com/travelhero/qrcode/939389c7-3e0f-4071-aa30-9caa2742444d.png',0,5,'https://s3-ap-southeast-1.amazonaws.com/singtravelhero/images/questphoto/d7c7942e-41fe-4d2d-ab7e-b8583e06c3ca.png',500,'92 Tô Ngọc Vân, Quảng An, Tây Hồ, Hanoi, Vietnam',NULL,NULL),(9,'UNICEF Next Generation','a group of young entrepreneurs that advocate for UNICEF in the United-States, visited UNICEF projects in Ho Chi Minh City and Dong Thap. UNICEF Next Generation United States members are influential and passionate young adults (age 18-35) who are committed to supporting UNICEF\'s mission to fulfill the rights of all children through the deliverance of educational and fundraising programmes',10.7739,106.703,'https://dl.dropboxusercontent.com/u/3243296/videos/UNICEF%20next_genmp4.mp4','https://s3-us-west-2.amazonaws.com/travelhero/qrcode/2a6b4946-2c8b-441f-93cd-2c61490d1f32.png',0,5,'https://s3-ap-southeast-1.amazonaws.com/singtravelhero/images/questphoto/49aa2afa-4068-42d8-9401-6113e4fa8065.jpg',2000,'115 Nguyen Hue, District 1, Ho Chi Minh City, Vietnam',NULL,'https://unicef.org.vn/donate/');
/*!40000 ALTER TABLE `quest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hero_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_level` int(11) DEFAULT '0',
  `points` int(11) DEFAULT '0',
  `accept_tou` bit(1) DEFAULT b'0',
  `register_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Vu Hoang Son','vhson','gun4boy@yahoo.com',NULL,NULL,'1498934909',NULL,0,0,'\0','2013-12-02'),(5,'Martial Ganière','martialganiere','martial.ganiere@gmail.com',NULL,NULL,'841843895',NULL,0,0,'\0','2014-01-11'),(6,'Keviin Q Nguyen','keviin.q.nguyen','lqnguyen@live.co.uk',NULL,NULL,'507981927',NULL,0,0,'\0','2014-01-12'),(7,'Luan Jenkins','luanjenkins','luan.jenkins@gmail.com',NULL,NULL,'85500069',NULL,0,0,'\0','2014-01-24');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_quest`
--

DROP TABLE IF EXISTS `user_quest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_quest` (
  `user_id` int(11) DEFAULT NULL,
  `quest_id` int(11) DEFAULT NULL,
  `parent_quest_id` int(11) DEFAULT NULL,
  `status_quest` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_quest`
--

LOCK TABLES `user_quest` WRITE;
/*!40000 ALTER TABLE `user_quest` DISABLE KEYS */;
INSERT INTO `user_quest` VALUES (1,2,1,0),(27,8,5,0),(1,3,1,0),(27,6,5,0),(27,9,5,0),(27,2,1,0),(6,2,1,0),(1,7,5,0),(1,4,1,0);
/*!40000 ALTER TABLE `user_quest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reward`
--

DROP TABLE IF EXISTS `reward`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reward` (
  `id` int(11) NOT NULL,
  `reward_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_url` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reward`
--

LOCK TABLES `reward` WRITE;
/*!40000 ALTER TABLE `reward` DISABLE KEYS */;
INSERT INTO `reward` VALUES (1,'Medal of HONOR','http://ec2-54-200-123-156.us-west-2.compute.amazonaws.com/travelhero/images/medals/d6cd052f-273b-4192-9af2-5769db01ed04.png'),(2,'Trophy of HONOR','http://ec2-54-200-123-156.us-west-2.compute.amazonaws.com/travelhero/images/medals/e266579b-df4c-49a4-9146-eba7a8a11961.png');
/*!40000 ALTER TABLE `reward` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'travel_hero'
--
/*!50003 DROP FUNCTION IF EXISTS `fnc_checkSignUpInfo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`user_hau`@`localhost` FUNCTION `fnc_checkSignUpInfo`(iFullName VARCHAR(100),
									iHeroName VARCHAR(100),
									iEmail VARCHAR(100),
									iPhoneNumber VARCHAR(100),
									iPassword VARCHAR(100)) RETURNS int(11)
BEGIN
	DECLARE count INT;
	DECLARE resultCode INT;
    SELECT COUNT(*) INTO count FROM user WHERE email = iEmail OR hero_name = iHeroName;

	IF count > 0 THEN
		SET resultCode = 0;
	ELSE
		INSERT INTO user
		VALUES(iFullName, iHeroName, iEmail, iPhoneNumber, iPassword, null, null, 1, 1, 0, NOW());
		SET resultCode = 1;
	END IF;
	RETURN resultCode;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `fnc_checkSignUpWithFacebookInfo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`user_hau`@`localhost` FUNCTION `fnc_checkSignUpWithFacebookInfo`(iFacebookId VARCHAR(100),
												iFullName VARCHAR(100),
												iHeroName VARCHAR(100)) RETURNS int(11)
BEGIN
	DECLARE count INT;
	DECLARE resultCode INT;
    

	IF EXISTS(SELECT * FROM user WHERE facebook_id = iFacebookId OR hero_name = iHeroName) THEN
		SET resultCode = 0;
	ELSE
		INSERT INTO user
		VALUES(UUID(), iFullName, iHeroName, null, null, null, null, null, 1, 1, 0, NOW());
		SET resultCode = 1;
	END IF;
	RETURN resultCode;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_allquestofuseraccept` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`user_hau`@`localhost` PROCEDURE `sp_allquestofuseraccept`(IN iUserId INT)
BEGIN
	SELECT * FROM quest
	INNER JOIN user_quest
	ON quest.id = user_quest.quest_id
	WHERE user_quest.user_id = iUserId;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_checksignupwithemailinfo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`user_hau`@`localhost` PROCEDURE `sp_checksignupwithemailinfo`(iFullName VARCHAR(100),
											iHeroName VARCHAR(100),
											iEmail VARCHAR(100),
											iPhoneNumber VARCHAR(100),
											iPassword VARCHAR(100))
BEGIN
	IF EXISTS(SELECT * FROM user WHERE email = iEmail OR hero_name = iHeroName) THEN
		SELECT -1 AS id;
	ELSE
		INSERT INTO user(full_name, hero_name, email, phone_number, `password`, register_date)
		VALUES(iFullName, iHeroName, iEmail, iPhoneNumber, iPassword, NOW());
		SELECT * FROM user WHERE hero_name = iHeroName;
	END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_checksignupwithfacebookinfo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`user_hau`@`localhost` PROCEDURE `sp_checksignupwithfacebookinfo`(IN iFacebookId VARCHAR(100),
												IN iFullName VARCHAR(100),
												IN iHeroName VARCHAR(100),
												IN iEmail VARCHAR(100))
BEGIN

	IF EXISTS(SELECT * FROM user WHERE facebook_id = iFacebookId OR hero_name = iHeroName) THEN
		 SELECT '0' as `code`, user.*, (SELECT COUNT(*) FROM user_quest WHERE user_quest.user_id = (SELECT id FROM user WHERE facebook_id = iFacebookId)) AS quest_count FROM user WHERE facebook_id = iFacebookId;
	ELSE
		INSERT INTO user(full_name, hero_name, email, facebook_id, register_date)
		VALUES(iFullName, iHeroName, iEmail, iFacebookId, NOW());
		SELECT '1' as `code`, user.*, (SELECT COUNT(*) FROM user_quest WHERE user_quest.user_id = (SELECT id FROM user WHERE facebook_id = iFacebookId)) AS quest_count FROM user WHERE facebook_id = iFacebookId;
	END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_getparentquest` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`user_hau`@`localhost` PROCEDURE `sp_getparentquest`(IN iQuestId INT)
BEGIN
	SELECT * FROM quest WHERE id = (SELECT parent_quest_id FROM quest WHERE id = iQuestId);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_getquestrefer` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`user_hau`@`localhost` PROCEDURE `sp_getquestrefer`(IN iQuestId INT)
BEGIN
	SELECT * FROM quest WHERE parent_quest_id = (SELECT parent_quest_id FROM quest WHERE id = iQuestId) ORDER BY id ASC;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_getuserdatawithemail` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`user_hau`@`localhost` PROCEDURE `sp_getuserdatawithemail`(IN userName VARCHAR(100), IN pass VARCHAR(100))
BEGIN
	DECLARE userId INT;
	SELECT id INTO userId FROM user WHERE email = userName AND `password` = pass;
	SELECT *,(SELECT COUNT(*) FROM user_quest WHERE user_quest.user_id = userId) AS quest_count FROM user WHERE id = userId;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_getuserdatawithfacebook` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`user_hau`@`localhost` PROCEDURE `sp_getuserdatawithfacebook`(IN facebookId VARCHAR(100))
BEGIN
	DECLARE userId INT;
	SELECT id INTO userId FROM user WHERE facebook_id = facebookId;
	SELECT *,(SELECT COUNT(*) FROM user_quest WHERE user_quest.user_id = userId) AS quest_count FROM user WHERE id = userId;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_paginationhotelagodabydistance` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`user_hau`@`localhost` PROCEDURE `sp_paginationhotelagodabydistance`(IN currentPage INT
																						, IN pageSize INT
																						, IN iLat FLOAT
																						, IN iLon FLOAT
																						, IN iDistance FLOAT
																						, IN iCountryisocode VARCHAR(2))
BEGIN
	DECLARE rowNumber INT;
	SET currentPage = currentPage + 1;
	SET rowNumber = currentPage * pageSize;
	SELECT *, (((acos(sin((iLat * 0.0174)) 
				* sin((hotel_agoda.latitude * 0.0174))
				+cos((iLat*0.0174)) 
				* cos((hotel_agoda.latitude * 0.0174)) 
				*cos(((iLon- hotel_agoda.longitude)*0.0174))))*57.32484)*111.18957696) as distance
	FROM hotel_agoda 
	WHERE countryisocode = iCountryisocode
	HAVING distance <= iDistance
	ORDER BY distance
	LIMIT rowNumber, pageSize;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_paginationquest` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`user_hau`@`localhost` PROCEDURE `sp_paginationquest`(IN currentPage INT, IN pageSize INT)
BEGIN
	DECLARE rowNumber INT;
	SET currentPage = currentPage;
	SET rowNumber = currentPage * pageSize;

	SELECT A.* FROM quest A WHERE !isnull(A.parent_quest_id)
	ORDER BY A.id LIMIT rowNumber, pageSize;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_useracceptquest` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`user_hau`@`localhost` PROCEDURE `sp_useracceptquest`(IN iUserId INT, IN iQuestId INT, IN iParentQuestId INT)
BEGIN
	IF NOT EXISTS(SELECT * FROM quest WHERE id = iQuestId AND parent_quest_id = iParentQuestId) THEN
		SELECT 0 AS `code`;
	ELSE
		IF EXISTS(SELECT * FROM user_quest WHERE user_id = iUserId AND quest_id = iQuestId) THEN
			SELECT 0 AS `code`;
		ELSE
			INSERT INTO user_quest(user_id, quest_id, parent_quest_id) VALUES (iUserId, iQuestId, iParentQuestId);
			SELECT 1 AS `code`;
		END IF;
	END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_usercompletequest` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`user_hau`@`localhost` PROCEDURE `sp_usercompletequest`(IN iUserId INT, IN iQuestId INT)
BEGIN
	DECLARE parentQuestId INT;
	SELECT parent_quest_id INTO parentQuestId FROM quest WHERE id = iQuestId;

	IF EXISTS(SELECT * FROM user_quest WHERE user_id = iUserId AND quest_id = iQuestId AND status_quest = 0) THEN
		SET SQL_SAFE_UPDATES=0;
		UPDATE user_quest SET status_quest = 1 WHERE user_id = iUserId AND quest_id = iQuestId;
		-- check main quest
		
		SET SQL_SAFE_UPDATES=0;
		UPDATE user SET points = points + (SELECT points FROM quest WHERE id = iQuestId) WHERE id = iUserId;
		
		IF ((SELECT COUNT(*) 
			 FROM quest 
			 WHERE parent_quest_id = parentQuestId) = (SELECT COUNT(*) 
													   FROM user_quest 
													   WHERE user_id = iUserId
															AND parent_quest_id = parentQuestId
															AND status_quest = 1))
		THEN
			SET SQL_SAFE_UPDATES=0;
			UPDATE user SET points = points + (SELECT points FROM quest WHERE id = parentQuestId) WHERE id = iUserId;
			INSERT INTO user_quest VALUES (iUserId, parentQuestId, null, 1);
			SELECT 2 AS `code`, 'Complete Main Quest' AS `message`,  quest.*,reward.* from quest, reward where quest.id = parentQuestId and quest.reward_id = reward.id;
		ELSE
			SELECT 1 AS `code`, 'Complete Quest' AS `message`;
		END IF;
	ELSE
		SELECT 0 AS `code`, 'Fail' AS `message`;
	END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `test` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
CREATE DEFINER=`user_hau`@`localhost` PROCEDURE `test`()
BEGIN 
	DECLARE a INT;
	SELECT id INTO a FROM quest WHERE id = 1;
	SELECT a;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-02-12 20:05:51
