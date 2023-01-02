-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 09:54 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uncovercampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlist`
--

CREATE TABLE `adminlist` (
  `id` int(11) NOT NULL,
  `admin` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlist`
--

INSERT INTO `adminlist` (`id`, `admin`, `password`) VALUES
(2, 'a', 'a'),
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pg`
--

CREATE TABLE `pg` (
  `id` int(11) NOT NULL,
  `pr_name` varchar(200) DEFAULT NULL,
  `rent` int(11) DEFAULT NULL,
  `last_entry` varchar(200) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `owner_name` varchar(200) DEFAULT NULL,
  `owner_ph` bigint(20) DEFAULT NULL,
  `owner_mail` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `room_no` int(11) DEFAULT NULL,
  `bed_no` int(11) DEFAULT NULL,
  `room_facilities` varchar(200) DEFAULT NULL,
  `house_rules` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT 'off',
  `pg_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pg`
--

INSERT INTO `pg` (`id`, `pr_name`, `rent`, `last_entry`, `gender`, `owner_name`, `owner_ph`, `owner_mail`, `location`, `room_no`, `bed_no`, `room_facilities`, `house_rules`, `status`, `pg_img`) VALUES
(2, 'Sarthak Mansion', 3000, '3 am', 'male', 'sarthak bakshi', 9076782112, 'sar@gmail.com', 'Maswanpur,kanpur', 2, 2, 'fan,girls,aiyashi', 'no study,no praying', 'on', 'Screenshot (6).png'),
(3, 'Anikesh jhopri', 100, '3 am', 'female', 'Anikesh Sharma', 858585858, 'ani@gmail.com', '116/89a,anandnagar,rawatpur gaon,kanpur', 1, 1, 'nothing', 'nothing', 'on', 'Screenshot (5).png'),
(4, ',jhksf', 5454, '21', 'both', ',nmb', 15454, 'ani@gmail.com', 'dwedw', 3, 2, ' ', '', 'on', 'Screenshot (5).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlist`
--
ALTER TABLE `adminlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pg`
--
ALTER TABLE `pg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlist`
--
ALTER TABLE `adminlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pg`
--
ALTER TABLE `pg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
