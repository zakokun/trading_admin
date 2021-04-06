# ************************************************************
# Sequel Ace SQL dump
# 版本号： 3024
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# 主机: 127.0.0.1 (MySQL 8.0.21)
# 数据库: trading
# 生成时间: 2021-04-06 03:30:20 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# 转储表 orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL DEFAULT '0',
  `stock_id` int NOT NULL DEFAULT '0',
  `symbol` varchar(50) NOT NULL DEFAULT '',
  `price` decimal(5,2) NOT NULL DEFAULT '0.00',
  `num` decimal(5,2) NOT NULL DEFAULT '0.00',
  `state` int NOT NULL DEFAULT '0',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



# 转储表 stock_daily
# ------------------------------------------------------------

DROP TABLE IF EXISTS `stock_daily`;

CREATE TABLE `stock_daily` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `stock_id` int NOT NULL DEFAULT '0',
  `symbol` varchar(50) NOT NULL DEFAULT '',
  `intro` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `info` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `open` decimal(5,2) NOT NULL,
  `close` decimal(5,2) NOT NULL,
  `low` decimal(5,2) NOT NULL,
  `high` decimal(5,2) NOT NULL,
  `volume` decimal(5,2) NOT NULL,
  `ptime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



# 转储表 stocks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `stocks`;

CREATE TABLE `stocks` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `symbol` varchar(11) NOT NULL DEFAULT '',
  `open` decimal(5,2) NOT NULL DEFAULT '0.00',
  `close` decimal(5,2) NOT NULL DEFAULT '0.00',
  `low` decimal(5,2) NOT NULL DEFAULT '0.00',
  `high` decimal(5,2) NOT NULL DEFAULT '0.00',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `volume` decimal(5,2) NOT NULL DEFAULT '0.00',
  `ftime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `stocks` WRITE;
/*!40000 ALTER TABLE `stocks` DISABLE KEYS */;

INSERT INTO `stocks` (`id`, `symbol`, `open`, `close`, `low`, `high`, `ctime`, `volume`, `ftime`)
VALUES
	(1,'btcusdt',1.00,2.00,3.00,4.00,'2021-03-29 17:23:06',0.00,'2021-03-29 17:23:06');

/*!40000 ALTER TABLE `stocks` ENABLE KEYS */;
UNLOCK TABLES;


# 转储表 user_stock_stars
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_stock_stars`;

CREATE TABLE `user_stock_stars` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL DEFAULT '0' COMMENT '用户id',
  `stock_id` int NOT NULL DEFAULT '0',
  `star_price` decimal(5,2) NOT NULL DEFAULT '0.00',
  `symbol` varchar(50) NOT NULL DEFAULT '' COMMENT '股票',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_user_id_symbol` (`user_id`,`symbol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `user_stock_stars` WRITE;
/*!40000 ALTER TABLE `user_stock_stars` DISABLE KEYS */;

INSERT INTO `user_stock_stars` (`id`, `user_id`, `stock_id`, `star_price`, `symbol`, `ctime`)
VALUES
	(1,1,1,3.33,'btcusdt','2021-03-29 17:12:05');

/*!40000 ALTER TABLE `user_stock_stars` ENABLE KEYS */;
UNLOCK TABLES;


# 转储表 users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(255) NOT NULL DEFAULT '' COMMENT '密码',
  `state` int NOT NULL DEFAULT '0' COMMENT '状态',
  `last_login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '上次登录时间',
  `app_key` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `secret` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '编辑时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `state`, `last_login_time`, `app_key`, `secret`, `ctime`, `mtime`)
VALUES
	(1,'zhang','d0cd2693b3506677e4c55e91d6365bff',0,'2021-03-29 08:29:18','','','2021-03-29 16:29:18','2021-04-01 16:22:05');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
