-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 01:51 PM
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
-- Database: `grading-system-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `abm_students_11`
--

CREATE TABLE `abm_students_11` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `abm_students_12`
--

CREATE TABLE `abm_students_12` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eim_students_11`
--

CREATE TABLE `eim_students_11` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eim_students_12`
--

CREATE TABLE `eim_students_12` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gas_students_11`
--

CREATE TABLE `gas_students_11` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gas_students_12`
--

CREATE TABLE `gas_students_12` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `he_students_11`
--

CREATE TABLE `he_students_11` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `he_students_12`
--

CREATE TABLE `he_students_12` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `humms_students_11`
--

CREATE TABLE `humms_students_11` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `humms_students_12`
--

CREATE TABLE `humms_students_12` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ict_students_11`
--

CREATE TABLE `ict_students_11` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ict_students_11`
--

INSERT INTO `ict_students_11` (`id`, `LRN`, `fname`, `lname`, `section`) VALUES
(1, '2121', 'Nick', 'Clarito', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `ict_students_12`
--

CREATE TABLE `ict_students_12` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stem_students_11`
--

CREATE TABLE `stem_students_11` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stem_students_12`
--

CREATE TABLE `stem_students_12` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `strand` varchar(255) NOT NULL,
  `section` char(2) NOT NULL,
  `grd_lvl` int(12) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `email`, `pwd`, `strand`, `section`, `grd_lvl`, `token`) VALUES
(48, 'jefeljoevillacorta@gmail.com', '123123', 'ict', 'A', 11, ''),
(49, 'nickcharlesclarito@gmail.com', '0', 'ICT', 'IC', 0, ''),
(50, 'nickcharlesclarito@gmail.com', '0', 'ICT', 'IC', 0, ''),
(51, 'nickcharlesclarito@gmail.com', '0', 'ICT', 'IC', 0, ''),
(52, 'nickcharlesclarito@gmail.com', '0', 'ICT', 'IC', 0, ''),
(53, 'nickcharlesclarito@gmail.com', '0', 'ICT', 'IC', 0, ''),
(54, 'nickcharlesclarito@gmail.com', '0', 'ICT', 'IC', 0, ''),
(55, 'nickcharlesclarito@gmail.com', '0', 'ICT', 'IC', 0, ''),
(56, 'nickcharlesclarito@gmail.com', '0', 'ICT', 'IC', 0, ''),
(57, 'nickcharlesclarito@gmail.com', '0', 'ICT', 'IC', 0, ''),
(58, 'nickcharlesclarito@gmail.com', '0', 'ICT', 'IC', 0, ''),
(59, 'nickcharlesclarito@gmail.com', '0', 'ICT', 'IC', 0, ''),
(60, 'nickcharlesclarito@gmail.com', '0', 'ICT', 'IC', 0, ''),
(61, 'lolsniper@gmail.com', 'row', 'stem', 'A', 0, ''),
(62, 'more@gmail.com', 'pow', 'humss', 'B', 12, ''),
(63, 'blee@gmail.com', '123', 'abm', 'B', 12, ''),
(64, 'right@gmail.com', '123', 'abm', 'B', 12, '9c3d9d4d2318e5190c52fc66bda79608fe53dac5'),
(65, 'lolcool@gmail.com', '123', 'stem', 'B', 12, '44d4930d4b76438a23ef3a83a0c9ef1b7f89526a');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(15) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abm_students_11`
--
ALTER TABLE `abm_students_11`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `abm_students_12`
--
ALTER TABLE `abm_students_12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eim_students_11`
--
ALTER TABLE `eim_students_11`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eim_students_12`
--
ALTER TABLE `eim_students_12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gas_students_11`
--
ALTER TABLE `gas_students_11`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gas_students_12`
--
ALTER TABLE `gas_students_12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `he_students_11`
--
ALTER TABLE `he_students_11`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `he_students_12`
--
ALTER TABLE `he_students_12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `humms_students_11`
--
ALTER TABLE `humms_students_11`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `humms_students_12`
--
ALTER TABLE `humms_students_12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ict_students_11`
--
ALTER TABLE `ict_students_11`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ict_students_12`
--
ALTER TABLE `ict_students_12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stem_students_11`
--
ALTER TABLE `stem_students_11`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stem_students_12`
--
ALTER TABLE `stem_students_12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abm_students_11`
--
ALTER TABLE `abm_students_11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `abm_students_12`
--
ALTER TABLE `abm_students_12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eim_students_11`
--
ALTER TABLE `eim_students_11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eim_students_12`
--
ALTER TABLE `eim_students_12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gas_students_11`
--
ALTER TABLE `gas_students_11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gas_students_12`
--
ALTER TABLE `gas_students_12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `he_students_11`
--
ALTER TABLE `he_students_11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `he_students_12`
--
ALTER TABLE `he_students_12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `humms_students_11`
--
ALTER TABLE `humms_students_11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `humms_students_12`
--
ALTER TABLE `humms_students_12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ict_students_11`
--
ALTER TABLE `ict_students_11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ict_students_12`
--
ALTER TABLE `ict_students_12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stem_students_11`
--
ALTER TABLE `stem_students_11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stem_students_12`
--
ALTER TABLE `stem_students_12`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
