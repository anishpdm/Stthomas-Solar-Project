-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2020 at 10:45 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solar`
--

-- --------------------------------------------------------

--
-- Table structure for table `solarpanels`
--

CREATE TABLE `solarpanels` (
  `Id` int(11) NOT NULL,
  `PanelId` bigint(20) NOT NULL,
  `Address` varchar(234) NOT NULL,
  `Latitude` varchar(222) NOT NULL,
  `Longitude` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solarpanels`
--

INSERT INTO `solarpanels` (`Id`, `PanelId`, `Address`, `Latitude`, `Longitude`) VALUES
(1, 12, 'Test Address', '1.2222', '1.222');

-- --------------------------------------------------------

--
-- Table structure for table `Values`
--

CREATE TABLE `Values` (
  `Id` int(11) NOT NULL,
  `PanelId` bigint(20) NOT NULL,
  `Value` int(11) NOT NULL,
  `Datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `solarpanels`
--
ALTER TABLE `solarpanels`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Values`
--
ALTER TABLE `Values`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `solarpanels`
--
ALTER TABLE `solarpanels`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Values`
--
ALTER TABLE `Values`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
