-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 04:52 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pupsiportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(255) NOT NULL,
  `studno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `webmail` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `modeoflearn` varchar(255) NOT NULL,
  `scholastic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `studno`, `name`, `webmail`, `contact`, `modeoflearn`, `scholastic`) VALUES
(29, '2019 - 15081 - MN - 0 ', ' Ammen, Ralph Julius R.', 'rjrammen@iskolarngbayan.pup.edu.ph', ' 123456789', 'Correspondence', 'Regular'),
(30, ' 2019 - 15218 - MN -0', ' Bautista, Jinniel', 'jibbautista@iskolarngbayan.pup.edu.ph', ' 123456789', 'Online', 'Regular'),
(31, ' 2019 - 15082 - MN - 0', ' CeÃ±idoza, Ma.rishelle Denisse B.', 'mrdbcenidoza@iskolarngbayan.pup.edu.ph', ' 123456789', 'Correspondence', 'Regular'),
(32, ' 2019-15942-MN-0', ' Constantino, Jercy', 'jhconstantino@iskolarngbayan.pup.edu.ph', ' 123456789', 'Online', 'Regular'),
(33, ' 2019-15174-MN-0', ' Lantin, Raven Giane', 'rgdlantin@iskolarngbayan.pup.edu.ph', ' 123456789', 'Online', 'Regular'),
(34, ' 2019-16846-MN-0 ', ' Martirez Foress Duane', 'fdmmartirez@iskolarngbayan.pup.edu.ph', ' 123456789', 'Online', 'Irregular'),
(35, ' 2019-16216-MN-0 ', ' Puyo, Jhon Zedric', 'jzopuyo@iskolarngbayan.pup.edu.ph', ' 123456789', 'Online', 'Regular'),
(36, ' 2019-15865-MN-0', ' Reyes, Michaela Joy', 'michaelajoybreyes@iskolarngbayan.pup.edu.ph', ' 123456789', 'Online', 'Regular'),
(37, ' 2019-15187-MN-0 ', ' Tolentino, Patricia Anne May B.', 'pambtolentino@iskolarngbayan.pup.edu.ph', ' 123456789', 'Online', 'Regular'),
(38, ' 2019-15163-MN-0', ' Zabala, Jericho Andrei B', 'jabzabala@iskolarngbayan.pup.edu.ph', ' 123456789', 'Correspondence', 'Regular');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
