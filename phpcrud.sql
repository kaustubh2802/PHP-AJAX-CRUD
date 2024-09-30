-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 30, 2024 at 10:50 AM
-- Server version: 8.2.0
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

DROP TABLE IF EXISTS `stud`;
CREATE TABLE IF NOT EXISTS `stud` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint NOT NULL,
  `course` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`id`, `name`, `email`, `phone`, `course`) VALUES
(1, 'kaustubh', 'kb@gmail.com', 5544226644, 'Designing'),
(3, 'Roshan', 'rosh38@gmail.com', 5599887744, 'B. Sc. (Computer Sci');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `class` varchar(15) NOT NULL,
  `section` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `class`, `section`) VALUES
(1, 'Aarav', 'Sharma', '1', 'A'),
(2, 'Ananya', 'Patel', '2', 'B'),
(3, 'Bhavesh', 'Mehta', '3', 'A'),
(4, 'Chirag', 'Gupta', '4', 'C'),
(5, 'Divya', 'Nair', '5', 'A'),
(6, 'Esha', 'Kumar', '6', 'B'),
(7, 'Farhan', 'Deshmukh', '7', 'C'),
(8, 'Gauri', 'Reddy', '8', 'A'),
(9, 'Harini', 'Bhatt', '9', 'B'),
(10, 'Ishaan', 'Joshi', '10', 'A'),
(11, 'Jaya', 'Sharma', '1', 'C'),
(12, 'Kunal', 'Patel', '2', 'A'),
(13, 'Lavanya', 'Mehta', '3', 'B'),
(14, 'Madhav', 'Gupta', '4', 'C'),
(15, 'Nisha', 'Nair', '5', 'A'),
(16, 'Ojas', 'Kumar', '6', 'B'),
(17, 'Pooja', 'Deshmukh', '7', 'C'),
(18, 'Qasim', 'Reddy', '8', 'A'),
(19, 'Riya', 'Bhatt', '9', 'B'),
(20, 'Aarav', 'Sharma', '1', 'A'),
(21, 'Ananya', 'Patel', '2', 'B'),
(22, 'Bhavesh', 'Mehta', '3', 'A'),
(23, 'Chirag', 'Gupta', '4', 'C'),
(24, 'Divya', 'Nair', '5', 'A'),
(25, 'Esha', 'Kumar', '6', 'B'),
(26, 'Farhan', 'Deshmukh', '7', 'C'),
(27, 'Gauri', 'Reddy', '8', 'A'),
(28, 'Harini', 'Bhatt', '9', 'B'),
(29, 'Ishaan', 'Joshi', '10', 'A'),
(30, 'Jaya', 'Sharma', '1', 'C'),
(31, 'Kunal', 'Patel', '2', 'A'),
(32, 'Lavanya', 'Mehta', '3', 'B'),
(33, 'Madhav', 'Gupta', '4', 'C'),
(34, 'Nisha', 'Nair', '5', 'A'),
(35, 'Ojas', 'Kumar', '6', 'B'),
(36, 'Pooja', 'Deshmukh', '7', 'C'),
(37, 'Qasim', 'Reddy', '8', 'A'),
(38, 'Riya', 'Bhatt', '9', 'B'),
(39, 'aa', 'bb', 'c', 's'),
(40, 'aa', 'vv', 'd', 'e'),
(41, 'aa', 'bb', 'c', 'd'),
(42, 'vv', 'cc', 'dd', 's');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
