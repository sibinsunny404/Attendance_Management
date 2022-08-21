-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2022 at 06:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(10) NOT NULL,
  `admin_uname` varchar(10) NOT NULL,
  `passwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_uname`, `passwd`) VALUES
('1', 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `usn` varchar(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `attend` varchar(10) NOT NULL,
  `sem` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`usn`, `subject`, `attend`, `sem`) VALUES
('4vp21mc007', 'cyber security', 'present', 2),
('4vp21mc037', 'cyber security', 'absent', 2),
('4vp21mc047', 'cyber security', 'present', 2);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `usn` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(10) NOT NULL,
  `sem` int(3) NOT NULL,
  `dob` date NOT NULL,
  `mbno` varchar(12) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`usn`, `name`, `class`, `sem`, `dob`, `mbno`, `district`, `state`, `address`) VALUES
('4vp21mc007', 'Deeksha v', 'mca', 2, '2000-12-09', '9148063499', 'dk', 'karnataka', 'harje house'),
('4vp21mc037', 'sajith thomas', 'mca', 2, '2000-08-05', '7410123513', 'dk', 'karnataka', ''),
('4vp21mc047', 'Sibin Sunny', 'mca', 2, '2000-12-07', '8217896431', 'dk', 'karnatala', 'dekk house');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sub_name` varchar(20) NOT NULL,
  `sub_code` varchar(7) NOT NULL,
  `sem` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_name`, `sub_code`, `sem`) VALUES
('Dbms', '123', 2),
('cyber security', '124', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD KEY `usn` (`usn`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sub_code`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendence`
--
ALTER TABLE `attendence`
  ADD CONSTRAINT `usn` FOREIGN KEY (`usn`) REFERENCES `students` (`usn`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
