-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 03:14 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `main_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `studreg`
--

CREATE TABLE `studreg` (
  `id` int(11) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `mname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `homeadd` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `pix` longblob NOT NULL,
  `poi` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studreg`
--

INSERT INTO `studreg` (`id`, `fname`, `mname`, `lname`, `email`, `homeadd`, `password`, `pix`, `poi`) VALUES
(6, 'john paul', 'aasd', 'nofuente', 'asd', 'asd', 'asd', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teachregs`
--

CREATE TABLE `teachregs` (
  `id` int(11) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `mname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `cntc` bigint(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  `tl` longblob NOT NULL,
  `res` longblob NOT NULL,
  `socmed` varchar(1200) NOT NULL,
  `pwe` varchar(1200) NOT NULL,
  `about` varchar(1200) NOT NULL,
  `skill` varchar(1200) NOT NULL,
  `subject` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachregs`
--

INSERT INTO `teachregs` (`id`, `fname`, `mname`, `lname`, `email`, `cntc`, `password`, `tl`, `res`, `socmed`, `pwe`, `about`, `skill`, `subject`) VALUES
(24, 'John Paul asdasdasd', 'A', 'Nofuente', 'jpanofuente@gmail.com', 9123456789, 'qqqqqq', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studreg`
--
ALTER TABLE `studreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachregs`
--
ALTER TABLE `teachregs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studreg`
--
ALTER TABLE `studreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teachregs`
--
ALTER TABLE `teachregs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
