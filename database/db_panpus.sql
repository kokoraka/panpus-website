-- phpMyAdmin SQL Dump
-- version 3.5.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2015 at 07:46 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_panpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_coupon`
--

CREATE TABLE IF NOT EXISTS `tb_coupon` (
  `id_coupon` varchar(10) NOT NULL,
  `coupon_type` enum('VIP') NOT NULL,
  `coupon_amount` int(250) NOT NULL,
  PRIMARY KEY  (`id_coupon`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_download_application`
--

CREATE TABLE IF NOT EXISTS `tb_download_application` (
  `id_download_application` int(250) NOT NULL auto_increment,
  `application_release` datetime NOT NULL,
  `application_type` enum('INSTALLER','ZIP','SQL','REG') NOT NULL,
  `application_version` varchar(250) NOT NULL,
  `application_status` enum('BETA','NEW','OLD','STABLE') NOT NULL,
  `application_size` varchar(250) NOT NULL,
  `application_link` text NOT NULL,
  `application_downloaded` int(250) NOT NULL,
  PRIMARY KEY  (`id_download_application`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_download_application`
--

INSERT INTO `tb_download_application` (`id_download_application`, `application_release`, `application_type`, `application_version`, `application_status`, `application_size`, `application_link`, `application_downloaded`) VALUES
(1, '2014-10-07 00:00:00', 'INSTALLER', '1.0.0.206', 'BETA', '21.0 MB', 'http://adf.ly/sb9XC', 23),
(2, '2014-10-07 00:00:00', 'ZIP', '1.0.0.206', 'BETA', '21.0 MB', 'http://adf.ly/sb8xM', 41),
(3, '2014-10-08 19:42:00', 'SQL', '1.0.0.206', 'BETA', '3 KB', 'http://adf.ly/siPYP', 11),
(4, '2014-10-08 19:44:00', 'REG', '1.0.0.206', 'BETA', '1 KB', 'http://adf.ly/siPYO', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_download_manual`
--

CREATE TABLE IF NOT EXISTS `tb_download_manual` (
  `id_download_manual` int(250) NOT NULL auto_increment,
  `manual_language` varchar(250) NOT NULL,
  `manual_link` text NOT NULL,
  `manual_size` varchar(250) NOT NULL,
  `manual_downloaded` int(250) NOT NULL,
  PRIMARY KEY  (`id_download_manual`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_download_manual`
--

INSERT INTO `tb_download_manual` (`id_download_manual`, `manual_language`, `manual_link`, `manual_size`, `manual_downloaded`) VALUES
(1, 'INDONESIAN', 'media/download/panduan/panduan.pdf', '1.6 MB', 26),
(2, 'ENGLISH', '404.php', 'NOT AVAILABLE', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_review_application`
--

CREATE TABLE IF NOT EXISTS `tb_review_application` (
  `id_review_application` int(250) NOT NULL auto_increment,
  `review_customer_name` varchar(250) NOT NULL,
  `review_customer_contact` varchar(250) default NULL,
  `review_customer_think` text NOT NULL,
  `review_customer_date` datetime NOT NULL,
  `review_customer_rating` enum('EXCELLENT','VERY GOOD','GOOD','BAD','WORST') NOT NULL,
  PRIMARY KEY  (`id_review_application`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tb_review_application`
--

INSERT INTO `tb_review_application` (`id_review_application`, `review_customer_name`, `review_customer_contact`, `review_customer_think`, `review_customer_date`, `review_customer_rating`) VALUES
(7, 'Author', '<b><a href="http://www.facebook.com/Raka.S.W">Facebook Contact</a></b>', 'Please test this web site too, i would like to know where is the low security place is. I''ll say thank you with some little gift of course =))', '2014-10-07 00:00:00', 'EXCELLENT');

-- --------------------------------------------------------

--
-- Table structure for table `tb_source_code`
--

CREATE TABLE IF NOT EXISTS `tb_source_code` (
  `id_source_code` int(250) NOT NULL auto_increment,
  `source_release_date` datetime NOT NULL,
  `source_release_size` varchar(250) NOT NULL,
  `source_release_link` text NOT NULL,
  `source_release_downloaded` int(250) NOT NULL,
  PRIMARY KEY  (`id_source_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `tb_source_code`
--

INSERT INTO `tb_source_code` (`id_source_code`, `source_release_date`, `source_release_size`, `source_release_link`, `source_release_downloaded`) VALUES
(1, '2014-07-02 20:50:00', '1.6 MB', 'http://adf.ly/saZjP', 12),
(3, '2014-07-03 16:18:00', '1.6 MB', 'http://adf.ly/sacge', 9),
(4, '2014-07-03 19:45:00', '1.6 MB', 'http://adf.ly/sacgf', 5),
(5, '2014-07-04 16:04:00', '1.6 MB', 'http://adf.ly/sacgg', 10),
(6, '2014-07-07 16:15:00', '1.6 MB', 'http://adf.ly/sacgh', 8),
(7, '2014-07-07 21:07:00', '1.6 MB', 'http://adf.ly/sacgi', 8),
(8, '2014-07-08 16:05:00', '1.6 MB', 'http://adf.ly/sacgj', 6),
(9, '2014-07-10 15:48:00', '1.6 MB', 'http://adf.ly/sacgk', 11),
(10, '2014-08-10 22:16:00', '2.6 MB', 'http://adf.ly/sacgl', 8),
(11, '2014-09-10 06:00:00', '4.6 MB', 'http://adf.ly/sacgm', 4),
(12, '2014-07-11 16:14:00', '1.6 MB', 'http://adf.ly/sacph', 4),
(13, '2014-08-11 15:26:00', '2.6 MB', 'http://adf.ly/sacpi', 4),
(14, '2014-07-12 13:17:00', '1.6 MB', 'http://adf.ly/sacpj', 6),
(15, '2014-08-12 16:27:00', '2.7 MB', 'http://adf.ly/sacpk', 6),
(16, '2014-09-12 02:44:00', '4.6 MB', 'http://adf.ly/sacpl', 5),
(17, '2014-09-12 05:57:00', '4.8 MB', 'http://adf.ly/sacpn', 3),
(18, '2014-09-12 15:06:00', '4.8 MB', 'http://adf.ly/sacpo', 5),
(19, '2014-08-13 15:55:00', '2.7 MB', 'http://adf.ly/sacpp', 9),
(20, '2014-09-13 13:34:00', '5.1 MB', 'http://adf.ly/sacqV', 6),
(21, '2014-07-14 12:56:00', '1.6 MB', 'http://adf.ly/sacqW', 5),
(22, '2014-09-14 19:35:00', '5.1 MB', 'http://adf.ly/sacqX', 4),
(23, '2014-07-15 11:22:00', '1.6 MB', 'http://adf.ly/sacqY', 4),
(24, '2014-07-15 15:46:00', '1.6 MB', 'http://adf.ly/sacqZ', 6),
(25, '2014-07-16 15:27:00', '1.6 MB', 'http://adf.ly/sacqa', 11),
(26, '2014-07-16 15:27:00', '1.6 MB', 'http://adf.ly/sacqa', 6),
(27, '2014-09-16 16:31:00', '5.8 MB', 'http://adf.ly/sacqb', 7),
(28, '2014-09-16 20:00:00', '7.3 MB', 'http://adf.ly/sacqc', 10),
(29, '2014-07-17 16:26:00', '1.6 MB', 'http://adf.ly/sacrF', 9),
(30, '2014-07-18 11:11:00', '1.6 MB', 'http://adf.ly/sacrG', 6),
(31, '2014-07-18 14:48:00', '2.5 MB', 'http://adf.ly/sacrH', 9),
(32, '2014-09-18 06:14:00', '9.7 MB', 'http://adf.ly/sacrI', 6),
(33, '2014-07-19 14:39:00', '2.5 MB', 'http://adf.ly/sacrJ', 11),
(34, '2014-07-20 22:10:00', '2.5 MB', 'http://adf.ly/sacrK', 9),
(35, '2014-07-21 15:19:00', '2.5 MB', 'http://adf.ly/sacrL', 8),
(36, '2014-07-22 16:00:00', '2.5 MB', 'http://adf.ly/sacrM', 8),
(37, '2014-09-22 22:44:00', '14.4 MB', 'http://adf.ly/sacrN', 6),
(38, '2014-09-23 15:45:00', '18.0 MB', 'http://adf.ly/sactM', 7),
(39, '2014-09-24 05:37:00', '19.1 MB', 'http://adf.ly/sactN', 5),
(40, '2014-09-24 08:45:00', '19.1 MB', 'http://adf.ly/sactO', 6),
(41, '2014-09-24 09:53:00', '19.1 MB', 'http://adf.ly/sactP', 8),
(42, '2014-09-25 20:51:00', '51.0 MB', 'http://adf.ly/sactQ', 7),
(43, '2014-08-28 14:37:00', '2.7 MB', 'http://adf.ly/sactR', 4),
(44, '2014-07-29 09:37:00', '2.6 MB', 'http://adf.ly/sactS', 8),
(45, '2014-07-29 16:09:00', '2.6 MB', 'http://adf.ly/sactT', 5),
(46, '2014-07-31 21:04:00', '2.6 MB', 'http://adf.ly/sactU', 5),
(47, '2014-10-01 23:03:00', '84.0 MB', 'http://adf.ly/sagdv', 12),
(48, '2014-10-04 08:09:00', '101.0 MB', 'http://adf.ly/sagdw', 44),
(49, '2014-09-22 22:44:00', '14.4 MB', 'http://adf.ly/sacrN', 5),
(50, '2014-09-23 15:45:00', '18.0 MB', 'http://adf.ly/sactM', 3),
(51, '2014-09-24 05:37:00', '19.1 MB', 'http://adf.ly/sactN', 7),
(53, '2014-09-24 08:45:00', '19.1 MB', 'http://adf.ly/sactO', 6),
(54, '2014-09-24 09:53:00', '19.1 MB', 'http://adf.ly/sactP', 11),
(55, '2014-09-25 00:51:00', '51.8 MB', 'http://adf.ly/sactQ', 5),
(56, '2014-09-25 22:28:00', '52.7 MB', 'http://adf.ly/sagdx', 4),
(57, '2014-09-30 23:35:00', '56.5 MB', 'http://adf.ly/sagdy', 14),
(58, '2014-10-21 13:00:00', '107 MB', 'http://adf.ly/tfcV1', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(250) NOT NULL auto_increment,
  `user_name` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_real_name` varchar(250) NOT NULL,
  `user_contact` varchar(250) NOT NULL,
  `user_authority` enum('MEMBER','VIP','ADMIN') NOT NULL,
  `user_status` enum('REGISTERED','UNREGISTERED','UNACTIVE','BLACKLIST') NOT NULL,
  `user_date_join` datetime NOT NULL,
  `id_coupon` varchar(10) NOT NULL,
  PRIMARY KEY  (`id_user`),
  KEY `id_user` (`id_user`),
  KEY `id_coupon` (`id_coupon`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_activity`
--

CREATE TABLE IF NOT EXISTS `tb_user_activity` (
  `id_user_activity` int(250) NOT NULL auto_increment,
  `id_user` int(250) NOT NULL,
  `user_login_date` datetime NOT NULL,
  `user_login_ip` varchar(250) NOT NULL,
  `user_login_host` varchar(250) NOT NULL,
  `user_login_browser` varchar(250) NOT NULL,
  `user_login_os` varchar(250) NOT NULL,
  `user_total_login` int(250) NOT NULL,
  PRIMARY KEY  (`id_user_activity`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
