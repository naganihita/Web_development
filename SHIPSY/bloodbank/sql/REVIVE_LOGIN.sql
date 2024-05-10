-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2023 at 12:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `REVIVE_LOGIN`
--

-- --------------------------------------------------------

--
-- Table structure for table `revivelogin`
--

CREATE TABLE `revivelogin` (
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `revivelogin`
--

INSERT INTO `revivelogin` (`email`, `password`) VALUES
('nngamechanger@gmail.com', 'nihi123'),
('nngamechanger@gmail.com', 'nihita1234'),
('', ''),
('naganihita@gmail.com', '123'),
('r190021@rguktrkv.ac.in', 'cherry'),
('r190022@rguktrkv.ac.in', 'cherry'),
('r190023@rguktrkv.ac.in', 'cherry'),
('asha@gmail.com', 'asha123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
