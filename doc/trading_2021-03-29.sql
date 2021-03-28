# ************************************************************
# Sequel Ace SQL dump
# 版本号： 3024
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# 主机: 127.0.0.1 (MySQL 5.5.5-10.5.9-MariaDB)
# 数据库: trading
# 生成时间: 2021-03-28 16:18:53 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# 转储表 admin_users
# ------------------------------------------------------------

CREATE TABLE `admin_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# 转储表 orders
# ------------------------------------------------------------

CREATE TABLE `orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `stock_id` int(11) NOT NULL DEFAULT 0,
  `symbol` varchar(50) NOT NULL DEFAULT '',
  `price` decimal(5,2) NOT NULL DEFAULT 0.00,
  `num` decimal(5,2) NOT NULL DEFAULT 0.00,
  `state` int(11) NOT NULL DEFAULT 0,
  `ctime` timestamp NOT NULL DEFAULT current_timestamp(),
  `mtime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# 转储表 stock_daily
# ------------------------------------------------------------

CREATE TABLE `stock_daily` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `stock_id` int(11) NOT NULL DEFAULT 0,
  `symbol` varchar(50) NOT NULL DEFAULT '',
  `open` decimal(5,2) NOT NULL,
  `close` decimal(5,2) NOT NULL,
  `low` decimal(5,2) NOT NULL,
  `high` decimal(5,2) NOT NULL,
  `volume` decimal(5,2) NOT NULL,
  `ctime` timestamp NOT NULL DEFAULT current_timestamp(),
  `mtime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# 转储表 stocks
# ------------------------------------------------------------

CREATE TABLE `stocks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `symbol` varchar(11) NOT NULL DEFAULT '',
  `open` decimal(5,2) NOT NULL DEFAULT 0.00,
  `close` decimal(5,2) NOT NULL DEFAULT 0.00,
  `low` decimal(5,2) NOT NULL DEFAULT 0.00,
  `high` decimal(5,2) NOT NULL DEFAULT 0.00,
  `ctime` timestamp NOT NULL DEFAULT current_timestamp(),
  `volume` decimal(5,2) NOT NULL DEFAULT 0.00,
  `ftime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# 转储表 user_stock_stars
# ------------------------------------------------------------

CREATE TABLE `user_stock_stars` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT 0 COMMENT '用户id',
  `stock_id` int(11) NOT NULL DEFAULT 0,
  `symbol` varchar(50) NOT NULL DEFAULT '' COMMENT '股票',
  `ctime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_user_id_symbol` (`user_id`,`symbol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# 转储表 users
# ------------------------------------------------------------

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(255) NOT NULL DEFAULT '' COMMENT '密码',
  `state` int(11) NOT NULL DEFAULT 0 COMMENT '状态',
  `last_login_time` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '上次登录时间',
  `ctime` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '创建时间',
  `mtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '编辑时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
