-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2023 at 12:15 PM
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
-- Database: `REVIVE_DONORS`
--

-- --------------------------------------------------------

--
-- Table structure for table `DONOR_DETAILS`
--

CREATE TABLE `DONOR_DETAILS` (
  `name` varchar(100) DEFAULT NULL,
  `locationpincode` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `bloodgroup` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `DONOR_DETAILS`
--

INSERT INTO `DONOR_DETAILS` (`name`, `locationpincode`, `phone`, `bloodgroup`, `date`) VALUES
('p naga nihita', '516390', '8008959817', 'O+', '2023-08-14'),
('P Lingamma', '516390', '9502975654', 'O+', '2023-08-14'),
('p suryanarayanaReddy', '516390', '8328553393', 'AB-', '2023-08-15'),
('p latha', '516390', '8790073878', 'AB-', '2023-08-15'),
('PASALA VINEETH KUMAR REDDY', '516390', '7207854386', 'AB-', '2023-08-15'),
('Devamani', '516390', '8008959817', 'O+', '2023-08-14'),
('mounika', '516238', '8009765432', 'A1+', '2023-08-15'),
('p rushita', '500001', '9756464512', 'O+', '2023-08-14'),
('M MADHAVI', '517582', '9550546601', 'A+', '2023-08-15'),
('challa supriya', '513660', '9876543219', 'O+', '2023-08-23'),
('SAKE NEELIMA', '516390', '8765456712', 'A+', '2023-08-16'),
('p teju', '516380', '8008959817', 'A1+', '2023-08-10'),
('p teju', '516380', '8008959817', 'A1+', '2023-08-10'),
('ASHA', '516217', '9775543543', 'O+', '2023-08-16'),
('p naga nihita', '516390', '8008959817', 'O+', '2023-08-18'),
('JAYANTHI', '513456', '9876543219', 'O-', '2023-08-18'),
('PASALA NAGA NIHITA', '516390', '6678899073', 'Bombay Bloodgroup', '2023-08-25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
