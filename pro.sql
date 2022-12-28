-- useless







-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2022 at 05:35 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `hours_no` varchar(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `start_date` varchar(45) NOT NULL,
  `end_date` varchar(45) NOT NULL,
  `Institution` varchar(45) NOT NULL,
  `Notes` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `hours_no`, `url`, `start_date`, `end_date`, `Institution`, `Notes`) VALUES
(1, 'Jolie Buckley', '73', 'https://www.wineqocyb.ca', '05-Jun-1985', '28-Aug-2021', 'Dignissimos magna Na', '    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora inventore temporibus ducimus magnam accusantium minus labore ex facilis voluptate sapiente debitis ipsam possimus rem, quia quidem eveniet illum hic fugiat!\r\n'),
(2, 'Jolie Buckley', '73', 'https://www.wineqocyb.ca', '05-Jun-1985', '28-Aug-2021', 'Dignissimos magna Na', '    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora inventore temporibus ducimus magnam accusantium minus labore ex facilis voluptate sapiente debitis ipsam possimus rem, quia quidem eveniet illum hic fugiat!\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `hour_no` int(11) NOT NULL,
  `start_date` varchar(45) NOT NULL,
  `end_date` varchar(45) NOT NULL,
  `Institution` varchar(45) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `name`, `hour_no`, `start_date`, `end_date`, `Institution`, `description`) VALUES
(1, 'Word press course', 11, '2007-11', '2003-05', 'Dolorum esse provide', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ab quia blanditiis debitis illum, natus vel, ratione commodi quam enim quibusdam ut recusandae sit ad, dignissimos aperiam fugiat totam itaque.\r\nPossimus quisquam libero rem aperiam labore, porro officiis dolor nemo aut et! Ex esse beatae iusto sed eum qui ipsa provident quidem, perferendis iure magnam facilis? Praesentium maiores ullam quis.\r\nAut similique, maxime possimus incidunt ea nesciunt sequi dicta repellendus. Et ducimus esse earum hic? Modi ad ipsum explicabo sit temporibus accusamus voluptas, dolore, fugit ducimus nobis, expedita quidem? Corporis.\r\nIpsam, ullam molestiae quibusdam incidunt architecto dolore veniam eos excepturi! Magnam quasi temporibus, quas pariatur expedita doloribus amet, esse praesentium ipsum asperiores quis qui veniam iusto ab possimus ipsam natus.\r\nHic, deleniti animi quibusdam nulla illum labore aspernatur. Ipsum maxime velit recusandae, inventore ipsam iusto quo, asperiores illum sit assumenda aspernatur ullam officiis incidunt mollitia nisi vel omnis voluptatem eos.'),
(2, 'full stack course', 75, '1991-05', '2010-11', 'Non est eligendi fu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ab quia blanditiis debitis illum, natus vel, ratione commodi quam enim quibusdam ut recusandae sit ad, dignissimos aperiam fugiat totam itaque.\r\nPossimus quisquam libero rem aperiam labore, porro officiis dolor nemo aut et! Ex esse beatae iusto sed eum qui ipsa provident quidem, perferendis iure magnam facilis? Praesentium maiores ullam quis.\r\nAut similique, maxime possimus incidunt ea nesciunt sequi dicta repellendus. Et ducimus esse earum hic? Modi ad ipsum explicabo sit temporibus accusamus voluptas, dolore, fugit ducimus nobis, expedita quidem? Corporis.\r\nIpsam, ullam molestiae quibusdam incidunt architecto dolore veniam eos excepturi! Magnam quasi temporibus, quas pariatur expedita doloribus amet, esse praesentium ipsum asperiores quis qui veniam iusto ab possimus ipsam natus.\r\nHic, deleniti animi quibusdam nulla illum labore aspernatur. Ipsum maxime velit recusandae, inventore ipsam iusto quo, asperiores illum sit assumenda aspernatur ullam officiis incidunt mollitia nisi vel omnis voluptatem eos.'),
(3, 'photoshop course', 27, '1973-06', '2011-12', 'Cupidatat est dolor', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ab quia blanditiis debitis illum, natus vel, ratione commodi quam enim quibusdam ut recusandae sit ad, dignissimos aperiam fugiat totam itaque.\r\nPossimus quisquam libero rem aperiam labore, porro officiis dolor nemo aut et! Ex esse beatae iusto sed eum qui ipsa provident quidem, perferendis iure magnam facilis? Praesentium maiores ullam quis.\r\nAut similique, maxime possimus incidunt ea nesciunt sequi dicta repellendus. Et ducimus esse earum hic? Modi ad ipsum explicabo sit temporibus accusamus voluptas, dolore, fugit ducimus nobis, expedita quidem? Corporis.\r\nIpsam, ullam molestiae quibusdam incidunt architecto dolore veniam eos excepturi! Magnam quasi temporibus, quas pariatur expedita doloribus amet, esse praesentium ipsum asperiores quis qui veniam iusto ab possimus ipsam natus.\r\nHic, deleniti animi quibusdam nulla illum labore aspernatur. Ipsum maxime velit recusandae, inventore ipsam iusto quo, asperiores illum sit assumenda aspernatur ullam officiis incidunt mollitia nisi vel omnis voluptatem eos.'),
(4, 'Motion-graphics course', 83, '1970-03', '2015-08', 'In cupiditate ut dol', 'Aliquam ducimus und');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

DROP TABLE IF EXISTS `personal_info`;
CREATE TABLE IF NOT EXISTS `personal_info` (
  `id` int(11) NOT NULL,
  `full_name` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `date_birth` varchar(45) NOT NULL,
  `nationality` varchar(45) NOT NULL,
  `birth_place` varchar(45) NOT NULL,
  `job_title` varchar(45) NOT NULL,
  `ex_year` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `full_name`, `gender`, `date_birth`, `nationality`, `birth_place`, `job_title`, `ex_year`) VALUES
(1, 'Mostfa  ', 'male', '8 May.2000', 'Palestinians', 'Gaza', 'Students', '1 years');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
