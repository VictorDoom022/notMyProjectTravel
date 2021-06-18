-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 07:24 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nanotravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinglist`
--

CREATE TABLE `bookinglist` (
  `id` int(11) NOT NULL,
  `pkgID` int(255) NOT NULL,
  `userID` int(255) NOT NULL,
  `bookDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookinglist`
--

INSERT INTO `bookinglist` (`id`, `pkgID`, `userID`, `bookDate`) VALUES
(6, 1, 1, '2021-06-18 05:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `tourpackage`
--

CREATE TABLE `tourpackage` (
  `id` int(11) NOT NULL,
  `pkgTitle` varchar(30) NOT NULL,
  `pkgOverview` varchar(255) NOT NULL,
  `pkgPrice` varchar(20) NOT NULL,
  `pkgImageSrc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourpackage`
--

INSERT INTO `tourpackage` (`id`, `pkgTitle`, `pkgOverview`, `pkgPrice`, `pkgImageSrc`) VALUES
(1, '2 Day 1 Night Bagan Datuk Sky ', 'N Nano Travel started as a tour and travel company in 2017. The company is a professional organizer and travel planner. N Nano Travel expert in selling both group (GIT) and individual (FIT) worldwide tour packages. The company provides the experience outb', '67.00', '../assets/bagandatok.jpg'),
(2, '2 Days 1 Night Malacca - Muar', 'N Nano Travel started as a tour and travel company in 2017. The company is a professional organizer and travel planner. N Nano Travel expert in selling both group (GIT) and individual (FIT) worldwide tour packages. The company provides the experience outb', '70.00', '../assets/malacca.jpg'),
(3, '4 Days 2 Nights Pulau Langkawi', 'N Nano Travel started as a tour and travel company in 2017. The company is a professional organizer and travel planner. N Nano Travel expert in selling both group (GIT) and individual (FIT) worldwide tour packages. The company provides the experience outb', '598.00', '../assets/pulau-langkawi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'test', 'test@test', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinglist`
--
ALTER TABLE `bookinglist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourpackage`
--
ALTER TABLE `tourpackage`
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
-- AUTO_INCREMENT for table `bookinglist`
--
ALTER TABLE `bookinglist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tourpackage`
--
ALTER TABLE `tourpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
