-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 09:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `acts`
--

CREATE TABLE `acts` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acts`
--

INSERT INTO `acts` (`id`, `username`, `activity`, `time`) VALUES
(28, 'ADMIN', 'LogIn', '2021-06-26 05:03:02'),
(29, 'ADMIN', 'LogOut', '2021-06-26 05:05:00'),
(30, 'ADMIN', 'ChangePassword', '2021-06-26 05:06:25'),
(31, 'ADMIN', 'LogIn', '2021-06-26 05:07:27'),
(32, 'ADMIN', 'ChangePassword', '2021-06-26 05:29:00'),
(33, 'ADMIN', 'LogIn', '2021-06-27 03:37:41'),
(34, 'ADMIN', 'LogOut', '2021-06-27 03:40:28'),
(35, 'asher', 'LogIn', '2021-06-27 03:44:57'),
(36, 'asher', 'LogOut', '2021-06-27 03:45:27'),
(37, 'asher', 'ChangePassword', '2021-06-27 03:48:05'),
(38, 'asher', 'LogIn', '2021-06-27 03:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `authent`
--

CREATE TABLE `authent` (
  `id` int(10) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `otp` int(10) NOT NULL,
  `curdate` varchar(50) CHARACTER SET latin1 NOT NULL,
  `endate` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authent`
--

INSERT INTO `authent` (`id`, `username`, `otp`, `curdate`, `endate`) VALUES
(1, 'cjpm', 410380, '2021-06-26 04:38:08', '2021-06-26 04:43:08'),
(2, 'ADMIN', 316543, '2021-06-26 04:40:00', '2021-06-26 04:45:00'),
(3, 'ADMIN', 280701, '2021-06-26 04:40:35', '2021-06-26 04:45:35'),
(4, 'ADMIN', 542225, '2021-06-26 04:45:43', '2021-06-26 04:50:43'),
(5, 'ADMIN', 196202, '2021-06-26 05:02:39', '2021-06-26 05:07:39'),
(6, 'ADMIN', 429147, '2021-06-26 05:07:22', '2021-06-26 05:12:22'),
(7, 'ADMIN', 89672, '2021-06-27 03:36:54', '2021-06-27 03:41:54'),
(8, 'asher', 506699, '2021-06-27 03:44:52', '2021-06-27 03:49:52'),
(9, 'asher', 114936, '2021-06-27 03:48:57', '2021-06-27 03:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(49, 'ADMIN', 'ADMIN', ''),
(50, 'asher', 'Asher123@', 'asher@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acts`
--
ALTER TABLE `acts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authent`
--
ALTER TABLE `authent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acts`
--
ALTER TABLE `acts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `authent`
--
ALTER TABLE `authent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
