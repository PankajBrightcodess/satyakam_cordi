-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 12:14 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_orange`
--

-- --------------------------------------------------------

--
-- Table structure for table `org_member`
--

CREATE TABLE `org_member` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `contact` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `registration` varchar(20) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `org_member`
--

INSERT INTO `org_member` (`id`, `name`, `username`, `email`, `contact`, `password`, `registration`, `added_on`, `status`) VALUES
(1, 'Pankaj Mani Tiwari', 'Pankaj@123', 'pmt.pankaj29@gmail.com', '7845123695', 'Pankaj@123', 'on', '2022-05-21', '1'),
(2, 'Mohan Singh', 'mohan@123', 'mohan@gmail.com', '7485963652', 'Mohan@34567', 'on', '2022-05-21', '1'),
(3, 'Raju Shrivastava', 'Raju@123', 'raju@gmail.com', '7485963652', 'Pankaj@12345', 'on', '2022-05-21', '1'),
(4, 'Sneha', 'sneha@123', 'sneha@gmail.com', '7485963652', '12345', 'on', '2022-05-21', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `org_member`
--
ALTER TABLE `org_member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `org_member`
--
ALTER TABLE `org_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
