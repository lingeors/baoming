-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2016 �?03 �?12 �?03:14
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `wuxie`
--

-- --------------------------------------------------------

--
-- 表的结构 `baoming`
--

CREATE TABLE IF NOT EXISTS `baoming` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` char(20) NOT NULL,
  `member_name` char(10) NOT NULL,
  `college` char(15) NOT NULL COMMENT '学院',
  `professional` char(20) NOT NULL COMMENT '专业',
  `class` varchar(10) NOT NULL,
  `dormitory` char(10) NOT NULL,
  `phone` char(20) NOT NULL COMMENT '电话，长号/短号',
  `is_members` char(1) NOT NULL COMMENT '是否会员',
  `is_captain` char(1) NOT NULL COMMENT '是否队长',
  `team_type` char(3) NOT NULL COMMENT '队伍类别。创意组/技术组',
  `secret_key` varchar(40) NOT NULL COMMENT '修改报名信息秘钥',
  `uniqid` char(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='15无线杯线上报名表' AUTO_INCREMENT=350 ;

--
-- 转存表中的数据 `baoming`
--

INSERT INTO `baoming` (`id`, `team_name`, `member_name`, `college`, `professional`, `class`, `dormitory`, `phone`, `is_members`, `is_captain`, `team_type`, `secret_key`, `uniqid`) VALUES
(335, '队名', '蓝伟滨', '华工', '信工', '信四', '北三907', '1326106479/665852', '1', '1', 'yes', '1232323', ''),
(336, '队名', '蓝伟滨', '华工', '信工', '信四', '北三907', '1326106479/665852', '1', '1', 'yes', '1232323', ''),
(337, '队名', '蓝伟滨', '华工', '信工', '信四', '北三907', '1326106479/665852', '1', '1', 'yes', '1232323', ''),
(338, '队名', '蓝伟滨', '华工', '信工', '信四', '北三907', '1326106479/665852', '1', '1', 'yes', '1232323', ''),
(339, '队名', '蓝伟滨', '华工', '信工', '信四', '北三907', '1326106479/665852', '1', '1', 'yes', '1232323', ''),
(340, '队名', '蓝伟滨', '华工', '信工', '信四', '北三907', '1326106479/665852', '1', '1', 'yes', '1232323', ''),
(341, '队名', '蓝伟滨', '华工', '信工', '信四', '北三907', '1326106479/665852', '1', '1', 'yes', '1232323', ''),
(342, '队名', '蓝伟滨', '华工', '信工', '信四', '北三907', '1326106479/665852', '1', '1', 'yes', '1232323', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
