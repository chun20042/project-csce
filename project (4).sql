-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生日期: 2013 年 12 月 18 日 02:47
-- 伺服器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `project`;

-- --------------------------------------------------------

--
-- 表的結構 `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `username` varchar(32) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `name` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '勇者',
  `email` varchar(32) COLLATE utf8_bin NOT NULL,
  `joinme` int(10) NOT NULL DEFAULT '10',
  `studying` int(10) NOT NULL DEFAULT '0',
  `us` int(10) NOT NULL DEFAULT '0',
  `ch1` int(10) NOT NULL DEFAULT '0',
  `ch2` int(10) NOT NULL DEFAULT '0',
  `story` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 轉存資料表中的資料 `member`
--

INSERT INTO `member` (`username`, `password`, `name`, `email`, `joinme`, `studying`, `us`, `ch1`, `ch2`, `story`) VALUES
('2222', '11', '44', '444', 0, 0, 0, 0, 0, 0),
('aaasa', '111', 'sdaas', 'asdasassa', 10, 10, 10, 0, 0, 10),
('admin', '1234', 'admin', 'cccccccc', 10, 10, 10, 0, 0, 10),
('baby', '456', 'Goodbye', 'chun_20042@hotmail.com', 0, 0, 0, 0, 0, 0),
('我是啦啦', 'lalala', '啦啦', 's1012743@gmail.com', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的結構 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `nid` int(3) NOT NULL AUTO_INCREMENT,
  `type` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `constant` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`nid`),
  UNIQUE KEY `nid` (`nid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- 轉存資料表中的資料 `news`
--

INSERT INTO `news` (`nid`, `type`, `title`, `constant`, `update_time`) VALUES
(1, '公告', '系統公告', '目前系統測試中。', '2013-11-19 18:20:00'),
(2, '更新', '教學系統更新。', '目前版本：0.0.1\r\n上次更新：2013.11.19', '2013-11-19 21:13:00'),
(3, '測試', '測試', '測試', '2013-11-19 20:34:29'),
(4, '聯絡', '聯絡我們', '聯絡我們：ETYUWOYUO@gmail.com', '2013-11-19 18:51:52'),
(5, '創站', '網站創始', '網站創始日：2013.11.19', '2013-11-18 21:54:46');

-- --------------------------------------------------------

--
-- 表的結構 `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `question` varchar(64) COLLATE utf8_bin NOT NULL,
  `ans1` varchar(64) COLLATE utf8_bin NOT NULL,
  `ans2` varchar(64) COLLATE utf8_bin NOT NULL,
  `ans3` varchar(64) COLLATE utf8_bin NOT NULL,
  `ans4` varchar(64) COLLATE utf8_bin NOT NULL,
  `q1` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 轉存資料表中的資料 `question`
--

INSERT INTO `question` (`question`, `ans1`, `ans2`, `ans3`, `ans4`, `q1`) VALUES
('An empty linked list consists of _______.', 'a null head pointer', 'two nodes', 'a node ', 'data and a link', 0),
('An array that consists of just rows and columns is a ____ array.', 'two-dimensional', 'one-dimensional', 'three-dimensional', 'multidimensional', 0),
('In a linked list, each element contains _______.\r\n', 'data', 'a link', 'a record', 'data and a link', 0),
('________ is a  pictorial representation of an algorithm.', 'A UML digram', 'A program', 'Pseudocode', 'An algorithm', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
