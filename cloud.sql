-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 07:09 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloud`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$5YF0eCvr3BOQsRcxS80AWuRucOwiLogGRIEeMq6rg9qSorj8qK0LK', '2018-12-03 12:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `container`
--

CREATE TABLE `container` (
  `cid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `container`
--

INSERT INTO `container` (`cid`, `name`, `status`) VALUES
(1, 'ML-001', 'Delevered'),
(2, 'ML-002', 'Delevered'),
(3, 'ML-003', 'Delevered'),
(4, 'ML-004', 'On route'),
(5, 'ML-005', 'Delevered');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shid` int(11) NOT NULL,
  `startpoint` varchar(40) NOT NULL,
  `endpoint` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL,
  `startDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `endDate` date DEFAULT NULL,
  `containerNo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shid`, `startpoint`, `endpoint`, `status`, `startDate`, `endDate`, `containerNo`) VALUES
(9, 'India', 'nepla', 'On route', '2018-11-22 00:02:59', '2018-11-25', 1),
(10, 'Nepal', 'Turkey', 'Delevered', '2018-11-22 09:31:16', '2018-11-27', 2),
(11, 'Nepal', 'Male', 'Delevered', '2018-11-22 09:37:40', '2018-11-29', 3),
(12, 'Nepal', 'Male', 'Delevered', '2018-11-22 09:38:01', '2018-12-03', 4),
(13, 'Nepal', 'Srilanka', 'Delevered', '2018-11-22 09:38:37', '2018-11-28', 1),
(22, 'Srilanka', 'Bangladesh', 'Delevered', '2018-11-25 23:11:22', '2018-11-28', 2),
(32, 'Korea', 'France', 'Delevered', '2018-11-29 00:16:40', '2018-12-03', 3),
(33, 'Germany', 'Ireland', 'On route', '2018-11-29 00:18:00', '0000-00-00', 4),
(34, 'Nepal', 'Bidesh', 'Delevered', '2018-11-29 08:48:00', '2018-12-03', 1),
(38, 'Azerbaijan', 'Kyrgystan', 'Delevered', '2018-11-29 12:36:52', '2018-12-01', 2),
(39, 'Russia', 'Philipines', 'Delevered', '2018-12-03 19:04:30', '2018-12-03', 1),
(40, 'England', 'France', 'Delevered', '2018-12-03 21:35:03', '2018-12-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'Alkazam', '$2y$10$wgE93zeDjuAmgWKyemPgO.W.Vfk5G3MKcV73Wnh.7eCfofZlz.Fj2', '2018-11-16 09:46:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `container`
--
ALTER TABLE `container`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shid`),
  ADD KEY `containerNo` (`containerNo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `container`
--
ALTER TABLE `container`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shipping`
--
ALTER TABLE `shipping`
  ADD CONSTRAINT `shipping_ibfk_1` FOREIGN KEY (`containerNo`) REFERENCES `container` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
