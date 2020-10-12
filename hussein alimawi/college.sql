-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 20 يونيو 2020 الساعة 14:37
-- إصدار الخادم: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- بنية الجدول `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` int(20) NOT NULL,
  `std_name` text COLLATE utf8_bin NOT NULL,
  `major` text COLLATE utf8_bin NOT NULL,
  `birthdate` varchar(20) COLLATE utf8_bin NOT NULL,
  `telephone` int(10) NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- إرجاع أو استيراد بيانات الجدول `students`
--

INSERT INTO `students` (`id`, `std_id`, `std_name`, `major`, `birthdate`, `telephone`, `email`) VALUES
(18, 1946111012, 'hussein fathi hussein alimawi', 'ØªØ·ÙˆÙŠØ± ÙˆØªØµÙ…ÙŠÙ… Ù…ÙˆØ§Ù‚Ø¹ ÙˆÙŠØ¨', '11/9/1993', 595328807, 'hussein.alimawi@gmail.com'),
(17, 1946111035, 'Ø­Ø³Ù† Ø±Ø§ÙØª ÙŠÙˆØ³Ù Ø§Ù„Ø§Ø³ØªØ§Ø°', 'ØªØµÙ…ÙŠÙ… ÙˆØªØ·ÙˆÙŠØ± Ù…ÙˆØ§Ù‚Ø¹ ÙˆÙŠØ¨', '3/3/2001', 568336889, 'hasanralostad@gmail.com'),
(16, 1946111007, 'Ø£Ù…Ø¬Ø¯ ÙƒÙ…Ø§Ù„ Ø­Ø³Ù† Ø§Ø¨Ùˆ Ù†Ø§ØµØ±', 'ØªØµÙ…ÙŠÙ… ÙˆØªØ·ÙˆÙŠØ± Ù…ÙˆØ§Ù‚Ø¹ ÙˆÙŠØ¨', '26/8/2001', 597522684, 'amjdabwbydt762@gmail.com');

-- --------------------------------------------------------

--
-- بنية الجدول `userss`
--

DROP TABLE IF EXISTS `userss`;
CREATE TABLE IF NOT EXISTS `userss` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `Is_active` int(2) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- إرجاع أو استيراد بيانات الجدول `userss`
--

INSERT INTO `userss` (`user_id`, `username`, `password`, `Is_active`) VALUES
(7, 'ABC', '123', 1),
(3, 'hussein', '123', 1),
(6, 'ali', '123', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
