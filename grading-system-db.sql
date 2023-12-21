-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 07:47 AM
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
  `section` varchar(50) NOT NULL,
  `adviser` varchar(50) DEFAULT NULL,
  `sem1_subjects` varchar(50) DEFAULT NULL,
  `sem2_subjects` varchar(50) DEFAULT NULL,
  `sem1_grades` varchar(50) DEFAULT NULL,
  `sem2_grades` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `gender` varchar(50),
  `age` int(3),
  `birthdate`date,
  `contact_no` int(20)

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
  `section` varchar(50) NOT NULL,
  `adviser` varchar(50) DEFAULT NULL,
  `sem1_subjects` varchar(50) DEFAULT NULL,
  `sem2_subjects` varchar(50) DEFAULT NULL,
  `sem1_grades` varchar(50) DEFAULT NULL,
  `sem2_grades` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `gender` varchar(50),
  `age` int(3),
  `birthdate`date,
  `contact_no` int(20)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `grd_lvl` varchar(50) NOT NULL,
  `strand` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `adviser` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `fname`, `lname`, `grd_lvl`, `strand`, `section`, `adviser`, `date`) VALUES
(1, 'Harvey123', 'Clarito', '11', 'humss', 'A', 'Nick Clarito', '2023-12-18 14:35:28'),
(2, 'please nick', 'good', '12', 'stem', 'B', 'Maria Clarito', '2023-12-18 14:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `eim_students_11`
--

CREATE TABLE `eim_students_11` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL,
  `adviser` varchar(50) DEFAULT NULL,
  `sem1_subjects` varchar(50) DEFAULT NULL,
  `sem2_subjects` varchar(50) DEFAULT NULL,
  `sem1_grades` varchar(50) DEFAULT NULL,
  `sem2_grades` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `gender` varchar(50),
  `age` int(3),
  `birthdate`date,
  `contact_no` int(20)

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
  `section` varchar(50) NOT NULL,
  `adviser` varchar(50) DEFAULT NULL,
  `sem1_subjects` varchar(50) DEFAULT NULL,
  `sem2_subjects` varchar(50) DEFAULT NULL,
  `sem1_grades` varchar(50) DEFAULT NULL,
  `sem2_grades` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `gender` varchar(50),
  `age` int(3),
  `birthdate`date,
  `contact_no` int(20)

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
  `section` varchar(50) NOT NULL,
  `adviser` varchar(50) DEFAULT NULL,
  `sem1_subjects` varchar(50) DEFAULT NULL,
  `sem2_subjects` varchar(50) DEFAULT NULL,
  `sem1_grades` varchar(50) DEFAULT NULL,
  `sem2_grades` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `gender` varchar(50),
  `age` int(3),
  `birthdate`date,
  `contact_no` int(20)

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
  `section` varchar(50) NOT NULL,
  `adviser` varchar(50) DEFAULT NULL,
  `sem1_subjects` varchar(50) DEFAULT NULL,
  `sem2_subjects` varchar(50) DEFAULT NULL,
  `sem1_grades` varchar(50) DEFAULT NULL,
  `sem2_grades` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `gender` varchar(50),
  `age` int(3),
  `birthdate`date,
  `contact_no` int(20)

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
  `section` varchar(50) NOT NULL,
  `adviser` varchar(50) DEFAULT NULL,
  `sem1_subjects` varchar(50) DEFAULT NULL,
  `sem2_subjects` varchar(50) DEFAULT NULL,
  `sem1_grades` varchar(50) DEFAULT NULL,
  `sem2_grades` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `gender` varchar(50),
  `age` int(3),
  `birthdate`date,
  `contact_no` int(20)

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
  `section` varchar(50) NOT NULL,
  `adviser` varchar(50) DEFAULT NULL,
  `sem1_subjects` varchar(50) DEFAULT NULL,
  `sem2_subjects` varchar(50) DEFAULT NULL,
  `sem1_grades` varchar(50) DEFAULT NULL,
  `sem2_grades` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `gender` varchar(50),
  `age` int(3),
  `birthdate`date,
  `contact_no` int(20)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `humss_students_11`
--

CREATE TABLE `humss_students_11` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL,
  `adviser` varchar(50) DEFAULT NULL,
  `sem1_subjects` varchar(50) DEFAULT NULL,
  `sem2_subjects` varchar(50) DEFAULT NULL,
  `sem1_grades` varchar(50) DEFAULT NULL,
  `sem2_grades` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `gender` varchar(50),
  `age` int(3),
  `birthdate`date,
  `contact_no` int(20)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `humss_students_11`
--

INSERT INTO `humss_students_11` (`id`, `LRN`, `fname`, `lname`, `section`, `adviser`, `sem1_subjects`, `sem2_subjects`, `sem1_grades`, `sem2_grades`, `token`, `profile`) VALUES
(5, '405220150089', 'Nickoo', 'Destroyer', 'A', 'Nick Clarito', NULL, NULL, NULL, NULL, '657e7fd2b9ed79.95578812', 'Destroyer657fb59dcc6236.64271668.jpg'),
(6, '764236427647', 'Harvey123', 'Clarito', 'A', 'Nick Clarito', NULL, NULL, NULL, NULL, '657e847c67c692.51689700', 'Clarito657fc7d5b51c18.76678778.png'),
(7, '748374892274', 'roar', 'grape', 'A', 'Nick Clarito', NULL, NULL, NULL, NULL, '657fe995496d14.08612165', NULL),
(8, '476426476686', 'moro', 'last', 'A', 'Nick Clarito', NULL, NULL, NULL, NULL, '657fe995598149.18006206', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `humss_students_12`
--

CREATE TABLE `humss_students_12` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL,
  `adviser` varchar(50) DEFAULT NULL,
  `sem1_subjects` varchar(50) DEFAULT NULL,
  `sem2_subjects` varchar(50) DEFAULT NULL,
  `sem1_grades` varchar(50) DEFAULT NULL,
  `sem2_grades` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `gender` varchar(50),
  `age` int(3),
  `birthdate`date,
  `contact_no` int(20)

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
  `section` varchar(50) NOT NULL,
  `adviser` varchar(50) DEFAULT NULL,
  `sem1_subjects` varchar(50) DEFAULT NULL,
  `sem2_subjects` varchar(50) DEFAULT NULL,
  `sem1_grades` varchar(50) DEFAULT NULL,
  `sem2_grades` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `gender` varchar(50),
  `age` int(3),
  `birthdate`date,
  `contact_no` int(20)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ict_students_11`
--

INSERT INTO `ict_students_11` (`id`, `LRN`, `fname`, `lname`, `section`, `adviser`, `sem1_subjects`, `sem2_subjects`, `sem1_grades`, `sem2_grades`, `token`, `profile`) VALUES
(1, '2121', 'Nick', 'Clarito', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ict_students_12`
--

CREATE TABLE `ict_students_12` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL,
  `adviser` varchar(50) DEFAULT NULL,
  `sem1_subjects` varchar(50) DEFAULT NULL,
  `sem2_subjects` varchar(50) DEFAULT NULL,
  `sem1_grades` varchar(50) DEFAULT NULL,
  `sem2_grades` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `gender` varchar(50),
  `age` int(3),
  `birthdate`date,
  `contact_no` int(20)

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
  `section` varchar(50) NOT NULL,
  `adviser` varchar(50) DEFAULT NULL,
  `sem1_subjects` varchar(50) DEFAULT NULL,
  `sem2_subjects` varchar(50) DEFAULT NULL,
  `sem1_grades` varchar(50) DEFAULT NULL,
  `sem2_grades` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `gender` varchar(50),
  `age` int(3),
  `birthdate`date,
  `contact_no` int(20)

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
  `section` varchar(50) NOT NULL,
  `adviser` varchar(50) DEFAULT NULL,
  `sem1_subjects` varchar(50) DEFAULT NULL,
  `sem2_subjects` varchar(50) DEFAULT NULL,
  `sem1_grades` varchar(50) DEFAULT NULL,
  `sem2_grades` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `gender` varchar(50),
  `age` int(3),
  `birthdate`date,
  `contact_no` int(20)

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stem_students_12`
--

INSERT INTO `stem_students_12` (`id`, `LRN`, `fname`, `lname`, `section`, `adviser`, `sem1_subjects`, `sem2_subjects`, `sem1_grades`, `sem2_grades`, `token`, `profile`) VALUES
(1, '348274827482', 'please nick', 'good', 'B', 'Maria Clarito', NULL, NULL, NULL, NULL, '657fe9ec057e68.00013595', 'good657fea5e411c27.72678393.jpg'),
(2, '432746327462', 'rice', 'san', 'B', 'Maria Clarito', NULL, NULL, NULL, NULL, '657fe9ec128220.38832376', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(15) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
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

INSERT INTO `teachers` (`id`, `fname`, `lname`, `email`, `pwd`, `strand`, `section`, `grd_lvl`, `token`) VALUES
(66, 'Nick', 'Clarito', 'nickcharlesclarito@gmail.com', '123', 'humss', 'A', 11, '986bcb997126bec18f36e09cb96ba298797133eb'),
(67, 'Maria', 'Clarito', 'Maria@gmail.com', '123', 'stem', 'B', 12, '7b602d003fae4fa9129eba1a06463284b2de7e1d');

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
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
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
-- Indexes for table `humss_students_11`
--
ALTER TABLE `humss_students_11`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `humss_students_12`
--
ALTER TABLE `humss_students_12`
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
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `humss_students_11`
--
ALTER TABLE `humss_students_11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `humss_students_12`
--
ALTER TABLE `humss_students_12`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
