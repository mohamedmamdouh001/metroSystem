-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 07:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metrodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `password`) VALUES
(1, 'Amin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `education_athourity`
--

CREATE TABLE `education_athourity` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education_athourity`
--

INSERT INTO `education_athourity` (`id`, `name`, `password`, `region`) VALUES
(8, 'Helwan', '12345', 'Cairo');

-- --------------------------------------------------------

--
-- Table structure for table `metro_office`
--

CREATE TABLE `metro_office` (
  `id` int(11) NOT NULL,
  `metro_station_name` varchar(255) NOT NULL,
  `line_number` int(11) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metro_office`
--

INSERT INTO `metro_office` (`id`, `metro_station_name`, `line_number`, `password`) VALUES
(7, 'Safaa Hegazy', 3, 45678);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(100) NOT NULL,
  `request_id` int(100) NOT NULL,
  `payment_method` varchar(100) DEFAULT 'No payment exist',
  `is_payed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `request_id`, `payment_method`, `is_payed`) VALUES
(9, 14, 'VISA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reqeust`
--

CREATE TABLE `reqeust` (
  `request_id` int(100) NOT NULL,
  `phone` varchar(17) NOT NULL,
  `address` varchar(100) NOT NULL,
  `edu_stage` varchar(100) NOT NULL,
  `edu_level` varchar(100) NOT NULL,
  `edu_auth` varchar(100) NOT NULL,
  `near_station` varchar(100) NOT NULL,
  `personal_img` varchar(255) NOT NULL,
  `identity_img` varchar(255) NOT NULL,
  `id_card_img` varchar(100) NOT NULL,
  `start_station` varchar(100) NOT NULL,
  `end_station` varchar(100) NOT NULL,
  `request_status` varchar(100) NOT NULL DEFAULT 'Under education authority review',
  `student_id` int(100) NOT NULL,
  `edu_id` int(100) NOT NULL,
  `metro_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reqeust`
--

INSERT INTO `reqeust` (`request_id`, `phone`, `address`, `edu_stage`, `edu_level`, `edu_auth`, `near_station`, `personal_img`, `identity_img`, `id_card_img`, `start_station`, `end_station`, `request_status`, `student_id`, `edu_id`, `metro_id`) VALUES
(14, '01091690063', '3 Mohamed Abdelsalam St. Zahraa Masr El Qadima', 'University', '1', 'Helwan', 'Safaa Hegazy', 'MESSI.jpg', 'download.jpeg', 'Son-Heung-Min.jpg', 'Helwan', 'Helwan', 'You can recieve your card from Safaa Hegazy Metro Station.', 11, 8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `national_id` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `full_name`, `email`, `password`, `national_id`, `birthdate`, `gender`) VALUES
(11, 'Mohamed Mamdouh', 'mohamed@gmail.com', '12345', '12345678973123', '', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_athourity`
--
ALTER TABLE `education_athourity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metro_office`
--
ALTER TABLE `metro_office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `fk_request_id` (`request_id`);

--
-- Indexes for table `reqeust`
--
ALTER TABLE `reqeust`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `FK_edu_id` (`edu_id`),
  ADD KEY `FK_metro_id` (`metro_id`),
  ADD KEY `FK_student_id` (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education_athourity`
--
ALTER TABLE `education_athourity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `metro_office`
--
ALTER TABLE `metro_office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reqeust`
--
ALTER TABLE `reqeust`
  MODIFY `request_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_request_id` FOREIGN KEY (`request_id`) REFERENCES `reqeust` (`request_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reqeust`
--
ALTER TABLE `reqeust`
  ADD CONSTRAINT `FK_edu_id` FOREIGN KEY (`edu_id`) REFERENCES `education_athourity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_metro_id` FOREIGN KEY (`metro_id`) REFERENCES `metro_office` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_student_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
