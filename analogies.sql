-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 06, 2018 at 11:21 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pgh`
--

-- --------------------------------------------------------

--
-- Table structure for table `analogies`
--

CREATE TABLE `analogies` (
  `id` int(3) NOT NULL,
  `title` varchar(500) NOT NULL,
  `analogy1` varchar(500) NOT NULL,
  `analogy2` varchar(500) NOT NULL,
  `analogy3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analogies`
--

INSERT INTO `analogies` (`id`, `title`, `analogy1`, `analogy2`, `analogy3`) VALUES
(1, 'Loops in General', 'Round-a-bouts: keep going around until your exit, then break out of the loop', 'Conveyor Belts: when nothing breaks the motion sensor, keep turning, when something breaks the sensor, stop.', 'Ferris Wheels: while there is power, keep spinning, if power turns off(off switch) stop.'),
(2, 'html', 'HTML is like the frame of a house.  Provides the structure that websites are build on.', 'Document Outline: like an outline for a document, it provides structure for content.', 'Tupperware: HTML holds content like tupperware holds food.  ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analogies`
--
ALTER TABLE `analogies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analogies`
--
ALTER TABLE `analogies`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
