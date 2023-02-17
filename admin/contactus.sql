-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 12:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactus`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

CREATE TABLE `contactdetails` (
  `id` bigint(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactNumber` bigint(20) NOT NULL,
  `whatsappNumber` bigint(20) NOT NULL,
  `skype` varchar(120) NOT NULL,
  `address` varchar(200) NOT NULL,
  `projectBudget` int(11) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactdetails`
--

INSERT INTO `contactdetails` (`id`, `name`, `email`, `contactNumber`, `whatsappNumber`, `skype`, `address`, `projectBudget`, `message`) VALUES
(1, 'shetesaurabh872@gmail.com', 'shetesaurabh872@gmail.com', 9156969424, 4532342, 'dsfdcdscds', 'Pohale Road Kushire , Pohale Turf Alate , Ambewadi K', 46404, 'csancshjgxjksabjhxgsa'),
(2, 'shetesaurabh872@gmail.com', 'shetesaurabh872@gmail.com', 9156969424, 1234567890, '1234567890', 'Pohale Road Kushire , Pohale Turf Alate , Ambewadi K', 55438, 'djsagdbsabjhx'),
(3, 'shetesaurabh872@gmail.com', 'shetesaurabh872@gmail.com', 9156969424, 1234567890, '1234567890', 'Pohale Road Kushire , Pohale Turf Alate , Ambewadi K', 53061, 'csn nc sajcka scjks'),
(4, 'abasa', 'abcd@gmail.com', 9823219121, 1234567890, 'hsajdhsnda', 'asukjnsq', 52585, 'mnsdjkkjsadhsai'),
(5, 'shetesaurabh872@gmail.com', 'shetesaurabh872@gmail.com', 9156969424, 1234567890, 'dhisadasu', 'Pohale Road Kushire , Pohale Turf Alate , Ambewadi K', 59480, 'cskjsabxbab'),
(6, 'shetesaurabh872@gmail.com', 'shetesaurabh872@gmail.com', 9156969424, 1234567890, 'dhisadasu', 'Pohale Road Kushire , Pohale Turf Alate , Ambewadi K', 59480, 'cskjsabxbab'),
(7, 'shetesaurabh872@gmail.com', 'shetesaurabh872@gmail.com', 9156969424, 2233232, '2343432', 'Pohale Road Kushire , Pohale Turf Alate , Ambewadi K', 49495, 'vdsddscds'),
(8, 'shetesaurabh872@gmail.com', 'shetesaurabh872@gmail.com', 9156969424, 2233232, '2343432', 'Pohale Road Kushire , Pohale Turf Alate , Ambewadi K', 49495, 'vdsddscds');

-- --------------------------------------------------------

--
-- Table structure for table `yourrequirements`
--

CREATE TABLE `yourrequirements` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `companyName` varchar(30) NOT NULL,
  `pincode` int(11) NOT NULL,
  `recieveUpdates` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `yourrequirements`
--

INSERT INTO `yourrequirements` (`id`, `email`, `phone`, `name`, `companyName`, `pincode`, `recieveUpdates`) VALUES
(0, 'shetesaurabh872@gmail.com', 9156969424, 'Saurabh Shivaji Shete', 'NA', 416229, 0),
(0, 'shetesaurabh872@gmail.com', 9156969424, 'Saurabh', 'NA', 416229, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactdetails`
--
ALTER TABLE `contactdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactdetails`
--
ALTER TABLE `contactdetails`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
