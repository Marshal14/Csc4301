-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 09:03 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_csc3411`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

CREATE TABLE IF NOT EXISTS `tbl_data` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`id`, `fname`, `mname`, `sname`, `address`, `dob`, `gender`, `phone`, `email`, `username`, `password`) VALUES
(1, 'Adam', 'Saleh', 'Adam', 'Malari', '2019-04-02', 'male', '08123456789', 'adam@me.com', 'adams', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data`
--
ALTER TABLE `tbl_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
