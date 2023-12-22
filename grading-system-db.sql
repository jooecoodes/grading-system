-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 08:57 AM
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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `minitial` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL,
  `adviser` varchar(50) DEFAULT NULL,
  `sem1_subjects` varchar(50) DEFAULT NULL,
  `sem2_subjects` varchar(50) DEFAULT NULL,
  `sem1_grades` varchar(50) DEFAULT NULL,
  `sem2_grades` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `contact_no` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `LRN`, `fname`, `minitial`, `lname`, `section`, `adviser`, `sem1_subjects`, `sem2_subjects`, `sem1_grades`, `sem2_grades`, `token`, `profile`, `gender`, `age`, `birthdate`, `contact_no`) VALUES
(1, '743827487348', 'Tatum', 'Et est esse provid', 'Cleveland', 'A', 'Nick Clarito', NULL, NULL, '', NULL, '658522e4525641.10604769', NULL, 'other', 31, '1978-09-07', NULL),
(2, '657325873657', 'Barry', 'Blanditiis porro odi', 'Moon', 'A', 'Nick Clarito', NULL, NULL, NULL, NULL, '658522e45b1da5.69709906', NULL, 'female', 98, '2007-04-08', NULL);

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
  `sem1_subjects` varchar(255) NOT NULL,
  `sem2_subjects` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `fname`, `lname`, `email`, `pwd`, `strand`, `section`, `grd_lvl`, `sem1_subjects`, `sem2_subjects`, `token`) VALUES
(66, 'Nick', 'Clarito', 'nickcharlesclarito@gmail.com', '123', 'humss', 'A', 11, 'Science,pr2', 'Dolore consectetur ,Reprehenderit veniam,Hic ex re', '986bcb997126bec18f36e09cb96ba298797133eb'),
(67, 'Maria', 'Clarito', 'Maria@gmail.com', '123', 'stem', 'B', 12, '', '', '7b602d003fae4fa9129eba1a06463284b2de7e1d'),
(68, 'Randy', 'Clarito', 'Randy@gmail.com', '123', 'humss', 'f', 12, '', '', 'efa06fde913a37d56de44784b5e1a9633c98c902'),
(70, 'Joe', 'Villacorta', 'Joe@gmail.com', '123', 'ict', 'b', 12, '', '', 'b2e4ca5aed0ea0985c98737ec73ade217868694c');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(15) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `token`) VALUES
(93, '808da696b4cabd56be918ce2dab42215f94fc39e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
