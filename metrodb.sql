-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 03:29 PM
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
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
(1, '12345');

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
(2, 'Ain-Shams', '5678', 'Cairo'),
(3, 'Helwan', '5678', 'Cairo'),
(4, 'Cairo', '7899', 'Cairo'),
(6, 'Modern-Academy', '12345', 'Cairo');

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
(4, 'El-Zahraa', 1, 12345),
(5, 'Sadat', 1, 557);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(100) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `national_id` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(17) NOT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `birthdate` int(11) DEFAULT NULL,
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
  `request_status` varchar(100) NOT NULL DEFAULT 'Under education authority review'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `full_name`, `password`, `confirm_password`, `national_id`, `email`, `phone`, `gender`, `birthdate`, `address`, `edu_stage`, `edu_level`, `edu_auth`, `near_station`, `personal_img`, `identity_img`, `id_card_img`, `start_station`, `end_station`, `request_status`) VALUES
(22, 'Mohamed Mamdouh', '12345', '', '12345678912345', 'mohamed@gmail.com', '01091690063', 'male', 0, '3 Mohamed Abdelsalam St. Zahraa Masr El Qadima', 'University', '1', 'Ain-Shams', ' El-Zahraa ', 'MESSI.jpg', 'MESSI.jpg', 'MESSI.jpg', 'Helwan', 'Helwan', 'Aceepted'),
(23, 'ahmed eldeab', '12345', '', '12345678912345', 'ahmedEldeab@gamail.com', '01091690063', 'male', 2001, '3 Mohamed Abdelsalam St. Zahraa Masr El Qadima', 'University', '1', 'Ain-Shams', ' El-Zahraa ', '22769bee-83a3-46f7-b01a-c123c7da21b5.jpg', '109950374_130458072049095_8689121197571222964_n.jpg', '244648968_10225981919349909_6912782102088236243_n.jpg', 'Helwan', 'Helwan', 'Aceepted');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `metro_office`
--
ALTER TABLE `metro_office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
