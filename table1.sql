-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 11, 2018 at 06:49 AM
-- Server version: 10.2.12-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6731452_sourav`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` int(100) NOT NULL,
  `Name` text NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Complain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`, `Name`, `Mobile`, `Email`, `Complain`) VALUES
(1, 'cxvxv', 656, 'ffvdc@dfgfsg', 'fdbff'),
(2, 'Deba', 55775, 'debankurdas2013.dd@gmail.com', 'Baal Cher'),
(3, 'Sayanti', 4654654, 'sn_8793@yahoo.com', 'Ei suor er baccha'),
(4, 'dg', 55, 'debankurdas2013.dd@gmail.com', 'ei kutta'),
(5, 'Deba', 957005313, 'debankurdas2013.dd@gmail.com', 'Suor'),
(6, 'asasasas', 1234567892, 'debankurdas2013.dd@gmail.com', 'asasa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
