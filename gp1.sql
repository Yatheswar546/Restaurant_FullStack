-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 01:58 PM
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
-- Database: `gp1`
--

-- --------------------------------------------------------

--
-- Table structure for table `gp1`
--

CREATE TABLE `gp1` (
  `S_No` int(11) NOT NULL,
  `Cust_Name` text DEFAULT NULL,
  `Cust_email` text DEFAULT NULL,
  `No_of_Seats` int(11) DEFAULT NULL,
  `Instructions` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gp1`
--

INSERT INTO `gp1` (`S_No`, `Cust_Name`, `Cust_email`, `No_of_Seats`, `Instructions`) VALUES
(1, 'Ravi Teja Devarapu', 'ravitejadevarapu8979@gmail.com', 3, NULL),
(2, 'Rishika Devarapu', 'rishi@02EFJbrjb', 4, NULL),
(3, 'Ravi T', 'ravitejadevarapu8979@gmail.com', 4, ''),
(4, 'ravi', 'ra2@gmail.com', 6, 'i perfer corner view.'),
(5, 'rishi', 'rishi_02@gmail.com', 3, ''),
(6, 'Ravi Teja Devarapu', 'rvt1602@gmail.com', 5, 'i want a good view'),
(7, 'Ravi Teja Devarapu', 'ravitejadevarapu8979@gmail.com', 3, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gp1`
--
ALTER TABLE `gp1`
  ADD PRIMARY KEY (`S_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gp1`
--
ALTER TABLE `gp1`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
