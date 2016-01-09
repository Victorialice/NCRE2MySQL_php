-- MySQL dump 10.13  Distrib 5.5.31, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: php_bbs
-- ------------------------------------------------------
-- Server version	5.5.31-0ubuntu0.13.04.1

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
-- Table structure for table `forum_reply`
--

DROP TABLE IF EXISTS `forum_reply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_reply` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `topic_id` int(10) NOT NULL DEFAULT '0',
  `reply_id` int(10) NOT NULL DEFAULT '0',
  `reply_name` varchar(32) NOT NULL,
  `reply_email` varchar(100) NOT NULL,
  `reply_detail` text NOT NULL,
  `reply_datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `a_id` (`reply_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_reply`
--

LOCK TABLES `forum_reply` WRITE;
/*!40000 ALTER TABLE `forum_reply` DISABLE KEYS */;
INSERT INTO `forum_reply` VALUES (1,1,1,'asdf','asdfasdf@asdf.com','besides apache, there is another web server called nginx.','2016-01-07 00:15:11'),(2,1,2,'asdf','asdfasdf@asdf.com','both apache and nginx are http server','2016-01-07 09:06:26'),(3,5,1,'aa','150667557@qq.com','ok','2016-01-07 21:09:36'),(4,13,1,'bb','1506675573@qq.com','if the reply will be deleted when you tpye the button of delete','2016-01-08 12:08:40');
/*!40000 ALTER TABLE `forum_reply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_topic`
--

DROP TABLE IF EXISTS `forum_topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_topic` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `view` int(10) NOT NULL DEFAULT '0',
  `reply` int(10) NOT NULL DEFAULT '0',
  `locked` tinyint(1) NOT NULL DEFAULT '0',
  `sticky` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_topic`
--

LOCK TABLES `forum_topic` WRITE;
/*!40000 ALTER TABLE `forum_topic` DISABLE KEYS */;
INSERT INTO `forum_topic` VALUES (1,'what is apache','apache is a popular web server.','asdf','asdfasdf@asdf.com','2016-01-07 00:13:35',13,2,0,1),(2,'what is javascript','please answer the question: what is javascript\r\n','asdf','asdfasdf@asdf.com','2016-01-07 00:17:36',5,0,0,0),(3,'read the php source code of this bbs website in VIM','try to understand :\r\nhow to implement function to register, login, logout, encrypted password, \r\n\r\nhave a good look at tables in the database of this bbs website. try to understand how to ´´½¨ÐÂÌù,\r\nhow to reply to a Ìû×Ó','asdf','asdfasdf@asdf.com','2016-01-07 08:53:35',4,0,0,0),(4,'read the html source code of this bbs website in browser','have a good look at html elements, such as form, table, div\r\n\r\nhave a good look at CSS style ','asdf','asdfasdf@asdf.com','2016-01-07 08:56:12',2,0,0,0),(5,'continue to practice with vimtutor','in linux terminal, type \"vimtutor\", ENTER, then practice with it. try to finish it in 30 minutes.','asdf','asdfasdf@asdf.com','2016-01-07 08:58:06',13,1,1,0),(7,'linux commands','get familiar with commands:\r\ngrep, find, ls\r\nps -ef\r\ntar\r\ncat\r\ntouch\r\necho\r\npwd\r\nmkdir\r\ncp\r\nscp\r\nssh\r\ncd\r\nrm\r\ntail  \r\n','aa','150667557@qq.com','2016-01-07 23:58:30',10,0,0,1),(8,'git commands','get familiar with git commands:\r\ngit init\r\ngit add\r\ngit commit\r\ngit log\r\ngit status\r\ngit push \r\ngit pull\r\ngit fetch\r\ngit remote -v\r\ngit branch \r\ngit checkout\r\ngit revert','aa','150667557@qq.com','2016-01-08 00:16:02',3,0,0,1),(9,'html+css+javascript','ÍøÒ³Ö÷ÒªÓÉÈý²¿·Ö×é³É£º½á¹¹£¨Structure£©¡¢±íÏÖ£¨Presentation£©ºÍÐÐÎª£¨Behavior£©¡£¶ÔÓ¦µÄ±ê×¼Ò²·ÖÈý·½Ãæ£º½á¹¹»¯±ê×¼ÓïÑÔÖ÷Òª°üÀ¨XHTMLºÍXML£¬±íÏÖ±ê×¼ÓïÑÔÖ÷Òª°üÀ¨CSS£¬ÐÐÎª±ê×¼Ö÷Òª°üÀ¨¶ÔÏóÄ£ÐÍ£¨ÈçW3C DOM£©¡¢ECMAScriptµÈ','asdf','asdfasdf@asdf.com','2016-01-08 00:19:41',1,0,0,0),(10,'vim plugin','in command mode\r\n:NERDTree\r\nmove the cusor to NERDTree, then type ?, you will get more detail about help.\r\n\r\nctrl+w h/j/k/l/ could move cursor between windows.\r\n\r\nhow to make use of register in vim:\r\nwhen copy: star with \", then type a character, then y\r\nwhen paster: start with \", then type the character that you typed before, then p.\r\n','asdf','asdfasdf@asdf.com','2016-01-08 00:27:53',4,0,0,0),(11,'form in html','the attribute of form\r\nthe attribute of input\r\ntextarea\r\nradio\r\ncheckbox\r\nbutton','asdf','asdfasdf@asdf.com','2016-01-08 00:46:27',1,0,0,0),(12,'MySQL client with GUI: MySQL Workbench','try to operate MySQL in tool:MySQL Workbench\r\n\r\npress windows key in keyboard, then input \"workbench\", you can see the icon of \"MySQL Workbench\", click it then you can open \"MySQL Workbench\"','asdf','asdfasdf@asdf.com','2016-01-08 08:32:33',3,0,0,0),(13,'delete','create a new topic to test the button of delete','bb','1506675573@qq.com','2016-01-08 12:04:07',8,1,0,0);
/*!40000 ALTER TABLE `forum_topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum_user`
--

DROP TABLE IF EXISTS `forum_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `realname` varchar(50) NOT NULL,
  `regdate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum_user`
--

LOCK TABLES `forum_user` WRITE;
/*!40000 ALTER TABLE `forum_user` DISABLE KEYS */;
INSERT INTO `forum_user` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','admin@webmaster.com','Administrator','2006-12-06 00:00:00'),(2,'asdf','6a204bd89f3c8348afd5c77c717a097a','asdfasdf@asdf.com','asdfasdf','2016-01-07 00:06:15'),(3,'alice','38af38435988f4525181aa273e2976e3','150667557@qq.com','alice','2016-01-07 00:09:30'),(4,'victoria','202cb962ac59075b964b07152d234b70','987083863@qq.com','zhu','2016-01-07 00:10:49'),(5,'aa','202cb962ac59075b964b07152d234b70','150667557@qq.com','aa','2016-01-07 20:47:14'),(6,'bb','202cb962ac59075b964b07152d234b70','1506675573@qq.com','bb','2016-01-08 12:03:09');
/*!40000 ALTER TABLE `forum_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-08 23:12:14
