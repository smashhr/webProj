-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 06:38 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odhp`
--

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `un` varchar(8) NOT NULL,
  `pw` varchar(9) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gen` varchar(8) NOT NULL,
  `num` int(9) NOT NULL,
  `age` int(3) NOT NULL,
  `ex` int(2) NOT NULL,
  `dt` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`un`, `pw`, `name`, `gen`, `num`, `age`, `ex`, `dt`) VALUES
('MOH', 'GTR', 'GTR34', 'Male', 34, 34, 4, 'automatic'),
('ha', '123', 'Hawwea', 'Female', 909333, 35, 5, 'automatic'),
('w', 's', 'de', 'cd', 6, 65, 65, 'automatic'),
('N', 'n', 'Nissan', 'Male', 944, 94, 9, 'automatic');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;