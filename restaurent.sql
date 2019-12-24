-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 10:33 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurent`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Id`, `Name`, `Phone`, `Type`) VALUES
(1, 'Galib', '0215698', 'Bsc'),
(2, 'Sourov', '4764646', 'BBA'),
(3, 'Sadik', '01782065131', 'FCPS'),
(4, 'SNP Sujon', '01782065131', 'FCPS');

-- --------------------------------------------------------

--
-- Table structure for table `empl_account`
--

CREATE TABLE `empl_account` (
  `id` int(11) NOT NULL,
  `empl_name` varchar(50) NOT NULL,
  `empl_user_name` varchar(50) NOT NULL,
  `empl_pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empl_account`
--

INSERT INTO `empl_account` (`id`, `empl_name`, `empl_user_name`, `empl_pass`) VALUES
(1, 'Shourov', 'shourov', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Tamanna', 'tamanna', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `empl_info`
--

CREATE TABLE `empl_info` (
  `id` int(11) NOT NULL,
  `empl_id` int(11) NOT NULL,
  `empl_name` varchar(50) NOT NULL,
  `empl_desi` varchar(30) NOT NULL,
  `empl_addr` varchar(50) NOT NULL,
  `empl_phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empl_info`
--

INSERT INTO `empl_info` (`id`, `empl_id`, `empl_name`, `empl_desi`, `empl_addr`, `empl_phone`) VALUES
(0, 154, 'Shourov', 'A', 'B', '017');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Id`, `Name`, `Phone`, `Address`) VALUES
(1, 'ahsudfy', '3246', 'sahmndf'),
(2, 'dfgsaj', 'dsakjfh', 'sdlakf'),
(3, 'Sadik', '544646', 'AIDS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `empl_account`
--
ALTER TABLE `empl_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empl_account`
--
ALTER TABLE `empl_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
