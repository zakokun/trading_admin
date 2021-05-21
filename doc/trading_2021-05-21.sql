# ************************************************************
# Sequel Ace SQL dump
# 版本号： 3030
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# 主机: 127.0.0.1 (MySQL 8.0.21)
# 数据库: trading
# 生成时间: 2021-05-21 03:56:40 +0000
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
  `item_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
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
  `symbol` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `open` decimal(8,2) NOT NULL,
  `close` decimal(8,2) NOT NULL,
  `low` decimal(8,2) NOT NULL,
  `high` decimal(8,2) NOT NULL,
  `volume` varchar(100) NOT NULL DEFAULT '',
  `ts` int NOT NULL DEFAULT '0',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_symbol_ts` (`symbol`,`ts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `stock_daily` WRITE;
/*!40000 ALTER TABLE `stock_daily` DISABLE KEYS */;

INSERT INTO `stock_daily` (`id`, `symbol`, `open`, `close`, `low`, `high`, `volume`, `ts`, `ctime`)
VALUES
	(1,'btc',49636.30,50681.28,47000.00,50802.48,'1616691471.2927034',1620921600,'2021-05-14 17:38:42'),
	(2,'eos',10.44,11.24,9.43,11.49,'556729356.7414348',1620921600,'2021-05-14 17:38:42');

/*!40000 ALTER TABLE `stock_daily` ENABLE KEYS */;
UNLOCK TABLES;


# 转储表 stocks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `stocks`;

CREATE TABLE `stocks` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `symbol` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `open` decimal(8,2) NOT NULL DEFAULT '0.00',
  `close` decimal(8,2) NOT NULL DEFAULT '0.00',
  `low` decimal(8,2) NOT NULL DEFAULT '0.00',
  `high` decimal(8,2) NOT NULL DEFAULT '0.00',
  `volume` varchar(100) NOT NULL DEFAULT '0.00',
  `ts` int NOT NULL DEFAULT '0',
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uk_symbol_ts` (`symbol`,`ts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `stocks` WRITE;
/*!40000 ALTER TABLE `stocks` DISABLE KEYS */;

INSERT INTO `stocks` (`id`, `symbol`, `open`, `close`, `low`, `high`, `volume`, `ts`, `ctime`)
VALUES
	(1,'btc',49636.30,50681.28,47000.00,50802.48,'1617115247.5521057',1620921600,'2021-05-14 16:28:51'),
	(2,'eos',10.44,11.24,9.43,11.49,'556896551.5305012',1620921600,'2021-05-14 16:28:55');

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




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
