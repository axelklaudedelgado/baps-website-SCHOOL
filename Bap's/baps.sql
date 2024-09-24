-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 04:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baps`
--
CREATE DATABASE IF NOT EXISTS `baps` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `baps`;

-- --------------------------------------------------------

--
-- Table structure for table `registrationbaps`
--

CREATE TABLE `registrationbaps` (
  `firstName` text NOT NULL,
  `middleName` text NOT NULL,
  `lastName` text NOT NULL,
  `streetNumber` text NOT NULL,
  `barangayName` text NOT NULL,
  `cityName` text NOT NULL,
  `provinceName` text NOT NULL,
  `postalCode` int(11) NOT NULL,
  `contactNumber` text NOT NULL,
  `userName` text NOT NULL,
  `passwordInput` text NOT NULL,
  `reviewInput` text NOT NULL,
  `messageReview` text DEFAULT NULL,
  `emailAddress` text NOT NULL,
  `messageQuestion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrationbaps`
--

INSERT INTO `registrationbaps` (`firstName`, `middleName`, `lastName`, `streetNumber`, `barangayName`, `cityName`, `provinceName`, `postalCode`, `contactNumber`, `userName`, `passwordInput`, `reviewInput`, `messageReview`, `emailAddress`, `messageQuestion`) VALUES
('Juan', 'Dela', 'Cruz', 'Anywhere', 'Brgy.Here', 'San Fernando', 'Pampanga', 2016, '09123456789', 'seytooth', 'seytooth123', '5', 'sheesh', 'thewarriors2612@gmail.com', 'This is cool'),
('Juan', 'Aguinaldo', 'Dela Cruz', '12 Maginhawa Street', 'San Pedro', 'Santa Ana', 'Pampanga', 2022, '09123456788', 'juan', 'qwe123', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
