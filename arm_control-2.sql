-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2021 at 07:11 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arm control`
--

-- --------------------------------------------------------

--
-- Table structure for table `butoon`
--

CREATE TABLE `butoon` (
  `save` int(6) NOT NULL,
  `on` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `control`
--

CREATE TABLE `control` (
  `motor1` int(4) NOT NULL,
  `motor2` int(4) NOT NULL,
  `motor3` int(4) NOT NULL,
  `motor4` int(4) NOT NULL,
  `motor5` int(4) NOT NULL,
  `motor6` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `control`
--

INSERT INTO `control` (`motor1`, `motor2`, `motor3`, `motor4`, `motor5`, `motor6`) VALUES
(34, 34, 61, 42, 37, 37),
(52, 82, 93, 85, 86, 83),
(73, 93, 82, 82, 89, 101),
(82, 92, 91, 88, 75, 90),
(88, 110, 104, 92, 88, 88),
(89, 89, 89, 89, 89, 89),
(90, 90, 90, 90, 90, 0),
(108, 101, 96, 86, 105, 0),
(176, 174, 171, 172, 171, 172),
(177, 175, 177, 178, 173, 180),
(180, 180, 180, 180, 180, 180);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`motor1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `control`
--
ALTER TABLE `control`
  MODIFY `motor1` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
