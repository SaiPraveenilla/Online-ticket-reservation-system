-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 09:19 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` mediumint(9) NOT NULL,
  `user_id` mediumint(9) DEFAULT NULL,
  `reservation_timestamp_utc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `user_id`, `reservation_timestamp_utc`) VALUES
(42, 3, '1596210480'),
(43, 4, '1596210480'),
(46, 3, '1596210660'),
(47, 4, '1596210660');

-- --------------------------------------------------------

--
-- Table structure for table `restriction_setting`
--

CREATE TABLE `restriction_setting` (
  `id` int(11) NOT NULL,
  `n` int(11) DEFAULT NULL,
  `d` varchar(140) DEFAULT NULL,
  `g` enum('individual','group') DEFAULT 'group',
  `tz` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restriction_setting`
--

INSERT INTO `restriction_setting` (`id`, `n`, `d`, `g`, `tz`) VALUES
(1, 1, '2020-08-21T17:05', 'individual', '-06:00'),
(2, 2, '2020-07-31T14:02', 'individual', '-08:00'),
(3, 3, '2020-07-31T16:03', 'individual', '-08:00'),
(4, 4, '2020-08-06T14:03', 'individual', '-10:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(25) NOT NULL,
  `Lastname` varchar(25) NOT NULL,
  `USN` varchar(10) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `nor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Firstname`, `Lastname`, `USN`, `PASSWORD`, `Email`, `mobile`, `Gender`, `nor`) VALUES
(2, 'SAI PRAVEEN', 'ILLA', '112233', '123', 'saipraveenilla170398@gmail.com', '9441972072', 'male', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restriction_setting`
--
ALTER TABLE `restriction_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `restriction_setting`
--
ALTER TABLE `restriction_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
