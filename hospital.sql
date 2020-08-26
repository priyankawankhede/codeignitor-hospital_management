-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 12:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'drpatel', 'drpatel');

-- --------------------------------------------------------

--
-- Table structure for table `follow_up`
--

CREATE TABLE `follow_up` (
  `id` int(11) NOT NULL,
  `patients_id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(100) DEFAULT NULL,
  `mobile` varchar(36) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `weight` varchar(36) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `diagnosis` text DEFAULT NULL,
  `prescription` text DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `occupation` varchar(500) DEFAULT NULL,
  `present_co` text DEFAULT NULL,
  `mental` text DEFAULT NULL,
  `apetite` text DEFAULT NULL,
  `thirst` text DEFAULT NULL,
  `bowel` text DEFAULT NULL,
  `urine` text DEFAULT NULL,
  `sleep` text DEFAULT NULL,
  `menses` text DEFAULT NULL,
  `habits` text DEFAULT NULL,
  `bp` text DEFAULT NULL,
  `pulse` text DEFAULT NULL,
  `temperature` text DEFAULT NULL,
  `dreams` text DEFAULT NULL,
  `tongue` text DEFAULT NULL,
  `fees` text DEFAULT NULL,
  `past_ho` text DEFAULT NULL,
  `family_ho` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `mother` text DEFAULT NULL,
  `father` text DEFAULT NULL,
  `grandfather` text DEFAULT NULL,
  `grandfather1` text DEFAULT NULL,
  `grandmother` text DEFAULT NULL,
  `grandmother1` text DEFAULT NULL,
  `type` varchar(100) DEFAULT 'Follow-up'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(100) DEFAULT NULL,
  `mobile` varchar(36) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `weight` varchar(36) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `diagnosis` text DEFAULT NULL,
  `prescription` text DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `occupation` varchar(500) DEFAULT NULL,
  `present_co` text DEFAULT NULL,
  `mental` text DEFAULT NULL,
  `apetite` text DEFAULT NULL,
  `thirst` text DEFAULT NULL,
  `bowel` text DEFAULT NULL,
  `urine` text DEFAULT NULL,
  `sleep` text DEFAULT NULL,
  `menses` text DEFAULT NULL,
  `habits` text DEFAULT NULL,
  `bp` text DEFAULT NULL,
  `pulse` text DEFAULT NULL,
  `temperature` text DEFAULT NULL,
  `dreams` text DEFAULT NULL,
  `tongue` text DEFAULT NULL,
  `fees` text DEFAULT NULL,
  `past_ho` text DEFAULT NULL,
  `family_ho` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `mother` text DEFAULT NULL,
  `father` text DEFAULT NULL,
  `grandfather` text DEFAULT NULL,
  `grandfather1` text DEFAULT NULL,
  `grandmother` text DEFAULT NULL,
  `grandmother1` text DEFAULT NULL,
  `type` varchar(100) DEFAULT 'New',
  `photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `patients_id` text DEFAULT NULL,
  `patients_name` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `quantity` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `daily_fees` varchar(36) DEFAULT NULL,
  `total` varchar(36) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `patients_id` int(11) DEFAULT NULL,
  `patient_name` text DEFAULT NULL,
  `image1` text DEFAULT NULL,
  `image2` text DEFAULT NULL,
  `image3` text DEFAULT NULL,
  `image4` text DEFAULT NULL,
  `image5` text DEFAULT NULL,
  `image6` text DEFAULT NULL,
  `image7` text DEFAULT NULL,
  `image8` text DEFAULT NULL,
  `image9` text DEFAULT NULL,
  `image10` text DEFAULT NULL,
  `image11` text DEFAULT NULL,
  `image12` text DEFAULT NULL,
  `image13` text DEFAULT NULL,
  `image14` text DEFAULT NULL,
  `image15` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow_up`
--
ALTER TABLE `follow_up`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `follow_up`
--
ALTER TABLE `follow_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
