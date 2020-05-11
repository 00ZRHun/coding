-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2020 at 10:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `society_year`
--

CREATE TABLE `society_year` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp(),
  `update_time` datetime NOT NULL DEFAULT current_timestamp(),
  `delmode` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `society_year`
--

INSERT INTO `society_year` (`id`, `name`, `post_date`, `update_time`, `delmode`) VALUES
(1, 'Hun', '2020-04-22 17:31:19', '2020-04-22 17:31:19', 1),
(2, 'Hun1', '2020-04-22 17:46:53', '2020-04-22 17:46:53', 1),
(3, 'Hun2', '2020-04-23 05:22:11', '2020-04-23 05:22:11', 1),
(6, 'Hun6', '2020-04-23 06:13:36', '2020-04-23 06:13:36', 1),
(7, 'abc123', '2020-04-23 07:53:43', '2020-04-23 07:53:43', 1),
(8, 'abc123', '2020-04-23 08:17:42', '2020-04-23 08:17:42', 1),
(9, 'Hun123', '2020-04-23 08:30:12', '2020-04-23 08:30:12', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `society_year`
--
ALTER TABLE `society_year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `society_year`
--
ALTER TABLE `society_year`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
