-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 10:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `created_date_time` datetime NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=>Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_date_time`, `status`) VALUES
(1, 'Mubeena', 'mubeenavm98@gmail.com', '1234567890', '2022-03-28 09:56:00', 0),
(2, 'dfsadgf', '', '9befed651d541aafa36e5c5dfb91280b', '0000-00-00 00:00:00', 0),
(3, 'dfsadgf', 'sgsg@sdg.vzxb', '9befed651d541aafa36e5c5dfb91280b', '0000-00-00 00:00:00', 0),
(4, 'afasgas', 'sag@dsg.gag', 'c2b4943e2b0089b7f90a8aca762a91df', '2022-03-28 10:27:05', 0),
(5, 'afasgas', 'sag@dsg.gag', 'c2b4943e2b0089b7f90a8aca762a91df', '2022-03-28 10:30:34', 0),
(6, 'mubeena', 'mubeenavm@gmail.com', 'f1b708bba17f1ce948dc979f4d7092bc', '2022-03-28 10:33:50', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
