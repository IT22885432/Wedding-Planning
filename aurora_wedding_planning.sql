-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 09:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aurora_wedding_planning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(10) NOT NULL,
  `CID_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `qty` int(10) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `CID_id`, `date`, `qty`, `description`) VALUES
(1, 1, '2024-01-19', 100, 'I want to find venue ');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CID` int(10) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `CAddress` varchar(100) NOT NULL,
  `CPassword` varchar(8) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `status_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CID`, `Fname`, `Lname`, `CAddress`, `CPassword`, `Email`, `status_id`) VALUES
(1, 'Chirathi', 'Somadasa', 'No:95A,\r\nSouth lake road,\r\nKurunegala.', 'c@123', 'c@gmail.com', 1),
(2, 'fgjjk', 'tyui', 'bnmm', '12345', 'c@gmail.com', 1),
(3, 'jk', 'ty', 'No:1,\r\nKurunegala', '14789', 'h@gmail.com', 1),
(4, 'jk', 'ty', 'No:1,\r\nKurunegala', '12345', 'h@gmail.com', 1),
(5, 'dfgk', 'cvbnn', 'asdh', '12345', 'cus@gmail.com', 1),
(6, 'dfgk', 'cvbnn', 'asdh', '12369', 'cus@gmail.com', 1),
(7, 'dfgh', 's', 'hjkl', '12589', 'c@gmail.com', 1),
(8, 'dfgh', 's', 'hjkl', '12369', 'c@gmail.com', 1),
(9, 'asdvbn', 'vbnm', 'bnm', 'qw123', 'rtyu@gmail.com', 1),
(10, 'asdvbn', 'vbnm', 'bnm', '14789', 'rtyu@gmail.com', 1),
(11, 'dfgh', 's', 'hjkl', '12369', 'c@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pro_img`
--

CREATE TABLE `pro_img` (
  `code` varchar(50) NOT NULL,
  `customer_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(10) NOT NULL,
  `name` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `VID` int(10) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `VAddress` varchar(50) NOT NULL,
  `VPassword` varchar(8) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `busi_category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`VID`, `Fname`, `Lname`, `VAddress`, `VPassword`, `Email`, `busi_category`) VALUES
(1, 'piumi', 'udeshika', 'no:1,\r\nKuliyapitiya.\r\n', 'p@123', 'p@gmail.com', 'Wedding Venue'),
(2, 'vbnm', 'tyui', 'qwrgn', '14789', 'q@gmail.com', 'Wedding Venue');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_service`
--

CREATE TABLE `vendor_service` (
  `serviceID` int(10) NOT NULL,
  `S_name` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`VID`);

--
-- Indexes for table `vendor_service`
--
ALTER TABLE `vendor_service`
  ADD PRIMARY KEY (`serviceID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `VID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor_service`
--
ALTER TABLE `vendor_service`
  MODIFY `serviceID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
