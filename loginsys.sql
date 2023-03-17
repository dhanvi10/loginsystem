-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 04:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mono` int(10) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `cpass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `mono`, `addr`, `pass`, `cpass`) VALUES
(1, 'dsg ', 'dfg', 0, 'fgfgs', '123', '123'),
(2, 'dhanvi ', 'bhadiyadra', 2147483647, 'surat', '123', '123'),
(3, 'drashti ', 'bhayani', 2147483647, 'vip', '456', '456'),
(4, 'dhanvi ', 'bhadiyadra', 2147483647, 'surat', '123', '123'),
(5, 'pri ', 'chahar', 789412141, 'mumbai', '456', '456'),
(6, 'kim ', 'tae', 2147483647, 'surat', '789', '789'),
(7, 'dhanvi ', 'bhadiyadra', 2147483647, 'surat', '345', '345'),
(8, 'golu ', 'fif', 2147483647, 'surat', '678', '678'),
(9, 'golu ', 'dsvs', 2147483647, 'surat', '11', '11'),
(10, 'dhanvi', 'bhadiyadra', 2147483647, 'surat', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `stuudent`
--

CREATE TABLE `stuudent` (
  `id` int(11) NOT NULL,
  `stuname` varchar(50) NOT NULL,
  `mobileno` int(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `bloodgroup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stuudent`
--

INSERT INTO `stuudent` (`id`, `stuname`, `mobileno`, `adress`, `bloodgroup`) VALUES
(38, 'golu', 2147483647, 'suratdfre', 'a'),
(39, 'dhanvi', 2147483647, 'surat', 'o'),
(40, 'grreg', 2147483647, 'vapi', 'ab'),
(41, 'grreg', 2147483647, 'vapi', 'ab'),
(42, 'bvbgbg', 2147483647, 'surat', 'b'),
(43, 'rdrfef', 2147483647, 'surat', 'a '),
(47, 'ads', 2147483647, 'ewds', 'o'),
(48, 'ewrw', 2147483647, 'surat', 'o');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stuudent`
--
ALTER TABLE `stuudent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stuudent`
--
ALTER TABLE `stuudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
