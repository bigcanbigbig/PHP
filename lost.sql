-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 建立日期: 2016 年 04 月 10 日 02:42
-- 伺服器版本: 5.5.47-0ubuntu0.14.04.1
-- PHP 版本: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `lost`
--

-- --------------------------------------------------------

--
-- 資料表結構 `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `no` int(4) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Picture` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Class` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Place` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PickPerson` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PickPhone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TakePerson` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TakePhone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

--
-- 資料表的匯出資料 `record`
--

INSERT INTO `record` (`no`, `Name`, `Picture`, `Class`, `Place`, `PickPerson`, `PickPhone`, `TakePerson`, `TakePhone`) VALUES
(2, 'å¤§ç½å­', 'picture/543047_414571991898522_470962042_n.jpg', 'sport', 'M01', 'é­šç½è‚‰', '12354532', '', ''),
(4, 'å¥½ã„˜çš„è‚‰ä¹¾', 'picture/10aad538-44f7-495f-8480-ddf653f3bf06.jpg', 'electronic', 'C02', 'æ„›ã„˜è‚‰ä¹¾çš„äºº', '888888', 'ä¹Ÿæ„›ã„˜è‚‰ä¹¾çš„äºº', '7777777');

-- --------------------------------------------------------

--
-- 資料表結構 `supervisor`
--

CREATE TABLE IF NOT EXISTS `supervisor` (
  `id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `supervisor`
--

INSERT INTO `supervisor` (`id`, `pwd`) VALUES
('supervisor', 'hahaha77');

-- --------------------------------------------------------

--
-- 資料表結構 `thing`
--

CREATE TABLE IF NOT EXISTS `thing` (
  `no` int(4) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Picture` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Class` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Place` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PickPerson` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PickPhone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=8 ;

--
-- 資料表的匯出資料 `thing`
--

INSERT INTO `thing` (`no`, `Name`, `Picture`, `Class`, `Place`, `PickPerson`, `PickPhone`) VALUES
(2, 'å¤§ç½å­', 'picture/543047_414571991898522_470962042_n.jpg', 'sport', 'M01', 'é­šç½è‚‰', '12354532'),
(3, 'é¦™è•‰å…ˆç”Ÿ', 'picture/', 'other', 'M01', 'å—¨ä½ å¥½', '098765432'),
(4, 'å¥½ã„˜çš„è‚‰ä¹¾', 'picture/10aad538-44f7-495f-8480-ddf653f3bf06.jpg', 'electronic', 'C02', 'æ„›ã„˜è‚‰ä¹¾çš„äºº', '888888'),
(5, 'å­¸ç”Ÿè­‰', 'picture/IMG_20160309_200420.jpg', 'cash', 'A', 'å¤§ç½å­', '0955648555'),
(6, 'èŠ±æœµ', 'picture/flower.jpg', 'other', 'L01', 'æˆ‘æ’¿åˆ°äº†', '12354532'),
(7, 'å¨œå¨œ', 'picture/IMAG0126.jpg', 'sport', 'M01', '+Ã—', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
