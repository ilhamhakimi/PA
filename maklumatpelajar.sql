-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 16, 2022 at 11:59 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maklumatpelajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `UserID` varchar(11) NOT NULL,
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

DROP TABLE IF EXISTS `pelajar`;
CREATE TABLE IF NOT EXISTS `pelajar` (
  `StudentID` varchar(11) NOT NULL,
  `StudentName` varchar(50) NOT NULL,
  `ICNum` varchar(14) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `City` varchar(1000) NOT NULL,
  `State` varchar(1000) NOT NULL,
  `Postcode` varchar(10) NOT NULL,
  `TelNum` varchar(15) NOT NULL,
  PRIMARY KEY (`StudentID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`StudentID`, `StudentName`, `ICNum`, `Address`, `City`, `State`, `Postcode`, `TelNum`) VALUES
('K131HKPD007', 'Ilham Hakimi Bin Kamarzaman', '031113-10-0115', 'C-12A-02, Prima Duta Condo, 12, Jalan Dutamas Raya, Taman Segambut SPPK, 51200 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur', 'Kuala Lumpur', 'Wilayah Persekutuan Kuala Lumpur', '51200', '+601111912889');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
