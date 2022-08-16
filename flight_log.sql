-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2022 at 11:08 PM
-- Server version: 8.0.29
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flight_log`
--

-- --------------------------------------------------------

--
-- Table structure for table `actual`
--

CREATE TABLE `actual` (
  `id` int NOT NULL,
  `date` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `departure` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `arrival` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `aircraft` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `aircraft_type` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `day` decimal(2,1) NOT NULL,
  `night` decimal(2,1) NOT NULL,
  `instrument` decimal(2,1) NOT NULL,
  `pic` decimal(2,1) NOT NULL,
  `total_hours` decimal(2,1) NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actual`
--

INSERT INTO `actual` (`id`, `date`, `departure`, `arrival`, `aircraft`, `aircraft_type`, `day`, `night`, `instrument`, `pic`, `total_hours`, `comments`, `last_modified`) VALUES
(4, '2017-07-22', 'KCBE', 'KORF', 'N2646G', 'C172', '3.0', '0.0', '0.0', '3.0', '3.0', 'Test Data', '2022-07-01 22:54:47'),
(5, '2017-07-22', 'KORF', 'KCBE', 'N2646G', 'C172', '2.0', '2.0', '0.0', '3.0', '3.0', 'Test Data', '2022-07-01 22:56:33'),
(15, '2022-07-05', 'KCBE', 'KCBE', 'N2646G', 'C172', '1.0', '0.2', '1.0', '1.2', '1.2', 'Test Data', '2022-07-07 02:32:49'),
(16, '2022-07-05', 'KCBE', 'KCBE', 'N2646G', 'C172', '1.0', '0.2', '1.0', '1.2', '1.2', 'Test Data', '2022-07-07 02:38:52'),
(17, '2022-07-06', 'KCBE', 'KCBE', 'N2646G', 'C172', '1.3', '0.6', '0.0', '1.9', '1.9', 'Test Data', '2022-07-07 21:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `simulated`
--

CREATE TABLE `simulated` (
  `id` int NOT NULL,
  `date` date NOT NULL,
  `departure` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `arrival` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `aircraft` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `aircraft_type` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `day` decimal(3,1) NOT NULL,
  `night` decimal(3,1) NOT NULL,
  `instrument` decimal(3,1) NOT NULL,
  `pic` decimal(3,1) NOT NULL,
  `total_hours` decimal(3,1) NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `simulated`
--

INSERT INTO `simulated` (`id`, `date`, `departure`, `arrival`, `aircraft`, `aircraft_type`, `day`, `night`, `instrument`, `pic`, `total_hours`, `comments`, `last_modified`) VALUES
(3, '2022-06-07', 'KDCA', 'KSAN', 'N376JL', 'B738', '5.8', '0.0', '0.6', '5.8', '5.8', 'Test Data', '2022-07-01 23:23:37'),
(4, '2022-06-07', 'KSAN', 'KDEN', 'N376JL', 'B738', '2.1', '0.0', '0.6', '2.1', '2.1', 'Test Data', '2022-07-01 23:24:16'),
(5, '2022-06-13', 'KDEN', 'KDCA', 'N6234J', 'B737', '3.2', '0.0', '0.2', '3.2', '3.2', 'Test Data', '2022-07-01 23:28:56'),
(6, '2022-06-13', 'KDCA', 'KDEN', 'N8362J', 'B737', '3.6', '0.0', '0.2', '3.6', '3.6', 'Test Data', '2022-07-01 23:29:18'),
(7, '2022-06-24', 'KDCA', 'KORF', 'N32987', 'B737', '0.5', '0.0', '0.0', '0.5', '0.5', 'Test Data', '2022-07-01 23:30:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actual`
--
ALTER TABLE `actual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `simulated`
--
ALTER TABLE `simulated`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actual`
--
ALTER TABLE `actual`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `simulated`
--
ALTER TABLE `simulated`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
