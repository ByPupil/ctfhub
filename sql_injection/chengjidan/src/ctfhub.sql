-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 05 月 14 日 02:37
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `web1`
--

-- --------------------------------------------------------

--
-- 表的结构 `fl4g`
--

CREATE TABLE IF NOT EXISTS `fl4g` (
  `ctfhub_flag` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `fl4g`
--

INSERT INTO `fl4g` (`ctfhub_flag`) VALUES
('flag{1234567890}');

-- --------------------------------------------------------

--
-- 表的结构 `sc`
--

CREATE TABLE IF NOT EXISTS `sc` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `math` int(3) unsigned NOT NULL,
  `english` int(3) unsigned NOT NULL,
  `chinese` int(3) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `sc`
--

INSERT INTO `sc` (`id`, `name`, `math`, `english`, `chinese`) VALUES
(1, '龙龙龙', 60, 60, 70),
(2, '浩儿', 70, 84, 74),
(3, '静静', 80, 85, 90);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
