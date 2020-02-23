-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 09:20 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `Id` varchar(10) NOT NULL,
  `Name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`Id`, `Name`) VALUES
('CL001', 'Java Web Development'),
('CL001', 'Java Web Development'),
('CL001', 'Java Web Development'),
('CL001', 'Java Web Development'),
('CL001', 'Java Web Development'),
('CL001', 'Java Web Development'),
('CL001', 'Java Web Development'),
('CL001', 'Java Web Development'),
('CL001', 'Java Web Development');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_Id` varchar(10) NOT NULL,
  `Student_name` varchar(45) NOT NULL,
  `Class_name` varchar(45) NOT NULL,
  `Register_date` varchar(45) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_Id`, `Student_name`, `Class_name`, `Register_date`, `Status`) VALUES
('STU0001', 'sithuwin', '', '2016.01.01', 'Attending'),
('STU0001', 'sithuwin', 'Java Web Development', '2016.01.01', 'Attending'),
('STU0001', 'hi', 'Java Web Development', '2016.02.01', 'Attending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` varchar(10) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Password`) VALUES
('1', 'Sithuwin', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
