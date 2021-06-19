-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 02:16 PM
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
  `bookAdultQuantity` int(20) NOT NULL,
  `bookChildQuantity` int(20) NOT NULL,
  `bookSetDate` varchar(255) NOT NULL,
  `bookDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bookFirstName` varchar(20) NOT NULL,
  `bookLastName` varchar(20) NOT NULL,
  `bookBirthDate` varchar(10) NOT NULL,
  `bookNric` varchar(13) NOT NULL,
  `bookPhoneNumber` varchar(10) NOT NULL,
  `bookAddress` text NOT NULL,
  `bookPaymentMethod` varchar(20) NOT NULL,
  `bookApprove` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tourpackage`
--

CREATE TABLE `tourpackage` (
  `id` int(11) NOT NULL,
  `pkgTitle` varchar(30) NOT NULL,
  `pkgOverview` text NOT NULL,
  `pkgPrice` varchar(20) NOT NULL,
  `pkgChildPrice` varchar(20) NOT NULL,
  `pkgImageSrc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourpackage`
--

INSERT INTO `tourpackage` (`id`, `pkgTitle`, `pkgOverview`, `pkgPrice`, `pkgChildPrice`, `pkgImageSrc`) VALUES
(1, '2 Day 1 Night Bagan Datuk Sky ', 'To shed more light on Bagan Datuk and to give it the attention it deserves, here are some of its hidden treasures uncovered for tourists looking to find themselves transported to another country while immersing themselves in the local ambiance of one of Malaysia\'s most underrated destination.', '67.00', '57.00', '../assets/bagandatok.jpg'),
(2, '2 Days 1 Night Malacca - Muar', 'Malacca is a hotchpotch of Malay, Chinese, Indian, European and sundry influences. Malaysians laud Malacca’s laidback atmosphere and lost-in-time feel, stores close early here, traffic goes by at leisurely pace and city life is a languid affair. Between the scattered historic spots are atmospheric Chinese shop fronts and traditional Malay kampongs. Though the state may not boast a white-sand shoreline reminiscent of its East Coast cousins, Malacca is noteworthy for its heritage hotspots.\r\nA good-looking spot on the river, with plenty of heritage architecture and an infectiously languorous mood, the royal town of Muar (once known as Bandar Maharani, or \'Empress Town\') was historically a very important commercial centre. Central Chinatown sees most of the action, showing off its handsome pre-war architecture, temples and a handful of good restaurants and Chinese teahouses. Muar makes for an intriguing and rewarding off-the-beaten-track stop between Melaka and Johor Bahru.\r\n', '70.00', '60.00', '../assets/malacca.jpg'),
(3, '4 Days 2 Nights Pulau Langkawi', 'The island is especially recognised for its excellent diving opportunities and this tropical gem hides a treasure trove of other exciting holiday opportunities. Surrounded by turquoise sea, the interior of the main island is a mixture of picturesque paddy fields and jungle-clad hills. If you’re intent on carting off duty-free alcohol, cigarettes and chocolate, then this is the place to be. Still, nature lovers will find the island just as agreeable as the shoreline is fringed by powder-fine sand and swaying coconut trees.', '598.00', '578.00', '../assets/pulau-langkawi.jpg');

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
(1, 'test', 'test@test', '123'),
(4, 'admin', 'admin@admin.com', 'admin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tourpackage`
--
ALTER TABLE `tourpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
