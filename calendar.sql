-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 09:07 AM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `birthdays`
--

CREATE TABLE IF NOT EXISTS `birthdays` (
  `birthday_id` int(11) NOT NULL,
  `birthday_firstname` varchar(255) NOT NULL,
  `birthday_day` tinyint(4) NOT NULL,
  `birthday_month` tinyint(4) NOT NULL,
  `birthday_year` smallint(6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthdays`
--

INSERT INTO `birthdays` (`birthday_id`, `birthday_firstname`, `birthday_day`, `birthday_month`, `birthday_year`) VALUES
(20, 'Quinten', 26, 11, 1995),
(22, 'Linda', 4, 12, 1963),
(23, 'Ruud', 11, 7, 1962),
(24, 'Menno', 2, 1, 1990),
(25, 'Gabriëlla', 13, 12, 1997),
(26, 'Fokko', 23, 1, 1963),
(27, 'Carolien', 23, 1, 1964),
(28, 'Laurens', 23, 2, 1996),
(30, 'bert', 20, 2, 1965);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birthdays`
--
ALTER TABLE `birthdays`
  ADD PRIMARY KEY (`birthday_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birthdays`
--
ALTER TABLE `birthdays`
  MODIFY `birthday_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
