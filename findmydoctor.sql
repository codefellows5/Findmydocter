-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2021 at 04:43 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findmydoctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

CREATE TABLE `doctor_details` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `experience` int(255) NOT NULL,
  `expertise` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `time_from` time NOT NULL,
  `time_till` time NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_details`
--

INSERT INTO `doctor_details` (`id`, `name`, `experience`, `expertise`, `city`, `hospital`, `contact`, `time_from`, `time_till`, `image`) VALUES
(1, 'Dr Anand Subramaniam Iyer', 15, 'Pediatric Neurology', 'Gandhinagar', 'Apollo Hospital, Gandhinagar', 9999999999, '11:30:00', '13:30:00', 'Form_images/imagenotfound.png'),
(2, 'Dr Anshul Warman', 10, 'Demetologist', 'Gandhinagar', 'Apollo Hospital, Gandhinagar', 9999999999, '14:30:00', '18:30:00', 'Form_images/imagenotfound.png'),
(3, 'Dr Apurva Shah', 7, 'Gastroenterology', 'Gandhinagar', 'Apollo Hospital, Gandhinagar', 9999999999, '10:00:00', '12:30:00', 'Form_images/imagenotfound.png'),
(4, 'Dr Alpesh Patel', 10, 'MS (General Surgery), DNB (Cardiothoracic Surgery)', 'Ahmedabad', 'Narayana Multispeciality Hospital, Ahmedabad', 9999999999, '10:30:00', '03:30:00', 'Form_images/Dr. Alpesh Patel_0_0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `terms` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `hospital`, `email`, `password`, `terms`) VALUES
(1, 'abcd', 'ppatel2832@gmail.com', 'Poonam28', 1),
(2, 'abcd', 'rukaiyamemon2220@gmail.com', 'r123r123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_details`
--
ALTER TABLE `doctor_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_details`
--
ALTER TABLE `doctor_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
