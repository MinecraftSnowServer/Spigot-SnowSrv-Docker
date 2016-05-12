# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.48-MariaDB)
# Database: authme
# Generation Time: 2016-05-12 14:46:27 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table authme
# ------------------------------------------------------------

CREATE TABLE `authme` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `lastlogin` bigint(24) NOT NULL,
  `x` double NOT NULL DEFAULT '0',
  `y` double NOT NULL DEFAULT '0',
  `z` double NOT NULL DEFAULT '0',
  `world` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'world',
  `nick` varchar(40) COLLATE utf8_unicode_ci NOT NULL COMMENT '暱稱',
  `bbs` varchar(40) COLLATE utf8_unicode_ci NOT NULL COMMENT 'BBS ID',
  `ref` varchar(40) COLLATE utf8_unicode_ci NOT NULL COMMENT '介紹人',
  `intro` text COLLATE utf8_unicode_ci NOT NULL COMMENT '自我介紹',
  `skin_data` longblob COMMENT '皮膚檔案',
  `skin_custom` tinyint(1) NOT NULL DEFAULT '0' COMMENT '自訂皮膚',
  `skin_cloak_data` longblob COMMENT '披風檔案',
  `skin_cloak_custom` tinyint(1) NOT NULL DEFAULT '0' COMMENT '自訂披風',
  `op` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table register
# ------------------------------------------------------------

CREATE TABLE `register` (
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '帳號',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '密碼',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(40) COLLATE utf8_unicode_ci NOT NULL COMMENT '註冊使用IP',
  `time` bigint(24) NOT NULL COMMENT '註冊時間',
  `nick` varchar(40) COLLATE utf8_unicode_ci NOT NULL COMMENT '暱稱',
  `bbs` varchar(40) COLLATE utf8_unicode_ci NOT NULL COMMENT 'BBS',
  `ref` varchar(40) COLLATE utf8_unicode_ci NOT NULL COMMENT '介紹人',
  `intro` text COLLATE utf8_unicode_ci NOT NULL COMMENT '自我介紹',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '註冊單狀態',
  `lastedit` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '最後變動者',
  `edittime` bigint(24) DEFAULT NULL COMMENT '最後變動時間',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='註冊單';




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
