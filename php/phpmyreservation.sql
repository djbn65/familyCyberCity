-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb4.biz.nf
-- Generation Time: Jan 06, 2017 at 07:34 AM
-- Server version: 5.7.16-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2219560_17dburr`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `user_id` tinyint(10) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `comments` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `first_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phpmyreservation_configuration`
--

CREATE TABLE `phpmyreservation_configuration` (
  `id` int(10) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phpmyreservation_configuration`
--

INSERT INTO `phpmyreservation_configuration` (`id`, `price`) VALUES
(1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `phpmyreservation_reservations`
--

CREATE TABLE `phpmyreservation_reservations` (
  `reservation_id` int(10) NOT NULL,
  `reservation_made_time` datetime NOT NULL,
  `reservation_year` smallint(4) NOT NULL,
  `reservation_week` tinyint(2) NOT NULL,
  `reservation_day` tinyint(1) NOT NULL,
  `reservation_time` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reservation_price` float NOT NULL,
  `reservation_user_id` int(10) NOT NULL,
  `reservation_user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `reservation_user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phpmyreservation_reservations`
--

INSERT INTO `phpmyreservation_reservations` (`reservation_id`, `reservation_made_time`, `reservation_year`, `reservation_week`, `reservation_day`, `reservation_time`, `reservation_price`, `reservation_user_id`, `reservation_user_email`, `reservation_user_name`) VALUES
(57, '2016-12-22 05:53:44', 2016, 51, 3, '11 AM - 12 AM', 25, 10, '17dburr@stu.sgdragons.org', 'Dylan Burr'),
(56, '2016-12-22 05:53:09', 2016, 51, 3, '9 AM - 10 AM', 25, 10, '17dburr@stu.sgdragons.org', 'Dylan Burr');

-- --------------------------------------------------------

--
-- Table structure for table `phpmyreservation_users`
--

CREATE TABLE `phpmyreservation_users` (
  `user_id` int(10) NOT NULL,
  `user_is_admin` tinyint(1) NOT NULL,
  `user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_reservation_reminder` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phpmyreservation_users`
--

INSERT INTO `phpmyreservation_users` (`user_id`, `user_is_admin`, `user_email`, `user_password`, `user_name`, `user_reservation_reminder`) VALUES
(10, 1, '17dburr@stu.sgdragons.org', '$1$jfidue84$zda3mdOvm1SGHp2Ck3FeB0', 'Dylan Burr', 0),
(11, 0, 'grass.caitlin@yahoo.com', '$1$jfidue84$ecTAazdLMaw3b2e.9NimG/', 'Caitlin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`email`(100));

--
-- Indexes for table `phpmyreservation_configuration`
--
ALTER TABLE `phpmyreservation_configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phpmyreservation_reservations`
--
ALTER TABLE `phpmyreservation_reservations`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `phpmyreservation_users`
--
ALTER TABLE `phpmyreservation_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `user_id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `phpmyreservation_configuration`
--
ALTER TABLE `phpmyreservation_configuration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `phpmyreservation_reservations`
--
ALTER TABLE `phpmyreservation_reservations`
  MODIFY `reservation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `phpmyreservation_users`
--
ALTER TABLE `phpmyreservation_users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
