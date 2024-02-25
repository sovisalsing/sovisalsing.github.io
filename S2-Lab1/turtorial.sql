-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 25, 2024 at 04:01 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turtorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

DROP TABLE IF EXISTS `crud`;
CREATE TABLE IF NOT EXISTS `crud` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `reason` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `lastname`, `firstname`, `gender`, `status`, `reason`, `date`) VALUES
(1, 'Susu', 'Sisi', 'Female', 'P', 'Sick', '2024-02-25 00:00:00'),
(2, 'Molin', 'Nana', 'Female', 'A', '', '0000-00-00 00:00:00'),
(3, 'Hensy', 'Bill', 'Male', '✓', '', '0000-00-00 00:00:00'),
(4, 'Vieng', 'Sai', 'Male', 'P', 'Sick', '2024-02-25 00:00:00'),
(5, 'Sai', 'Siphon', 'Male', '✓', '', '0000-00-00 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
