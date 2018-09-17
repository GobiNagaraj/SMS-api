-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 08:15 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `send_sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `sms_details`
--

CREATE TABLE `sms_details` (
  `id` int(11) NOT NULL,
  `sms_user` varchar(50) NOT NULL,
  `sms_password` varchar(50) NOT NULL,
  `sms_sender_id` varchar(20) NOT NULL,
  `sms_api` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_details`
--

INSERT INTO `sms_details` (`id`, `sms_user`, `sms_password`, `sms_sender_id`, `sms_api`) VALUES
(1, 'EdCloud01', '1234567890', 'EdClud', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `ip_addr` varchar(255) NOT NULL,
  `doj` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `mobile_number` bigint(20) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ip_addr`, `doj`, `user_name`, `mobile_number`, `email_id`, `address`, `status`) VALUES
(1, '::1', '17-Sep-2018 11:29 AM', 'asdasd', 979789787, 'asda54@asdad.asdasd', 'asdads', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sms_details`
--
ALTER TABLE `sms_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sms_details`
--
ALTER TABLE `sms_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
