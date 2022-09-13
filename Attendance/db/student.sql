-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 06:23 PM
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
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `usn` varchar(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `attend` varchar(10) NOT NULL,
  `sem` int(3) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`usn`, `subject`, `attend`, `sem`, `date`) VALUES
('4vp21mc007', 'Dbms', 'absent', 2, '2022-09-01'),
('4vp21mc016', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc017', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc023', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc036', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc037', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc039', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc047', 'Dbms', 'absent', 2, '2022-09-01'),
('4vp21mc053', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc062', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc007', 'cyber security', 'absent', 2, '2022-09-01'),
('4vp21mc016', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc017', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc023', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc036', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc037', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc039', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc047', 'cyber security', 'absent', 2, '2022-09-01'),
('4vp21mc053', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc062', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc007', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc016', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc017', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc023', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc036', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc037', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc039', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc047', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc053', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc062', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc007', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc016', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc017', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc023', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc036', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc037', 'Dbms', 'absent', 2, '2022-09-01'),
('4vp21mc039', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc047', 'Dbms', 'absent', 2, '2022-09-01'),
('4vp21mc053', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc062', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc007', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc016', 'Dbms', 'absent', 2, '2022-09-01'),
('4vp21mc017', 'Dbms', 'absent', 2, '2022-09-01'),
('4vp21mc023', 'Dbms', 'absent', 2, '2022-09-01'),
('4vp21mc036', 'Dbms', 'absent', 2, '2022-09-01'),
('4vp21mc037', 'Dbms', 'absent', 2, '2022-09-01'),
('4vp21mc039', 'Dbms', 'absent', 2, '2022-09-01'),
('4vp21mc047', 'Dbms', 'present', 2, '2022-09-01'),
('4vp21mc053', 'Dbms', 'absent', 2, '2022-09-01'),
('4vp21mc062', 'Dbms', 'absent', 2, '2022-09-01'),
('4vp21mc007', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc016', 'cyber security', 'absent', 2, '2022-09-01'),
('4vp21mc017', 'cyber security', 'absent', 2, '2022-09-01'),
('4vp21mc023', 'cyber security', 'absent', 2, '2022-09-01'),
('4vp21mc036', 'cyber security', 'absent', 2, '2022-09-01'),
('4vp21mc037', 'cyber security', 'absent', 2, '2022-09-01'),
('4vp21mc039', 'cyber security', 'absent', 2, '2022-09-01'),
('4vp21mc047', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc053', 'cyber security', 'absent', 2, '2022-09-01'),
('4vp21mc062', 'cyber security', 'absent', 2, '2022-09-01'),
('4vp21mc007', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc016', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc017', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc023', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc036', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc037', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc039', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc047', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc053', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc062', 'cyber security', 'present', 2, '2022-09-01'),
('4vp21mc007', 'Dbms', 'present', 2, '2022-09-03'),
('4vp21mc016', 'Dbms', 'present', 2, '2022-09-03'),
('4vp21mc017', 'Dbms', 'present', 2, '2022-09-03'),
('4vp21mc023', 'Dbms', 'present', 2, '2022-09-03'),
('4vp21mc032', 'Dbms', 'present', 2, '2022-09-03'),
('4vp21mc036', 'Dbms', 'present', 2, '2022-09-03'),
('4vp21mc037', 'Dbms', 'present', 2, '2022-09-03'),
('4vp21mc039', 'Dbms', 'present', 2, '2022-09-03'),
('4vp21mc047', 'Dbms', 'present', 2, '2022-09-03'),
('4vp21mc053', 'Dbms', 'present', 2, '2022-09-03'),
('4vp21mc062', 'Dbms', 'present', 2, '2022-09-03'),
('4vp21mc007', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc016', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc017', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc021', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc023', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc032', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc036', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc037', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc039', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc043', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc047', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc053', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc062', 'Dbms', 'absent', 2, '2022-09-08'),
('4vp21mc007', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc016', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc017', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc021', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc023', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc032', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc036', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc037', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc039', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc043', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc047', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc053', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc062', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc007', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc016', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc017', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc021', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc023', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc032', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc036', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc037', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc039', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc043', 'Dbms', 'absent', 2, '2022-09-08'),
('4vp21mc047', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc053', 'Dbms', 'present', 2, '2022-09-08'),
('4vp21mc062', 'Dbms', 'present', 2, '2022-09-08');

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
  `address` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`usn`, `name`, `class`, `sem`, `dob`, `mbno`, `district`, `state`, `address`, `password`, `image`) VALUES
('4vp21mc007', 'Deeksha v', 'mca', 2, '2000-12-09', '9148063499', 'dk', 'karnataka', 'harje house', 'CDF49BD06DBE326007D35B8F89D0B416', 'DEEKSHA V.jpg'),
('4vp21mc016', 'Jaifin PC', 'mca', 2, '2000-08-21', '1234567890', 'dk', 'karnataka', 'kokada', 'D87A2C09935FE88282726A95B1CB26C5', 'JAIFIN P C.jpg'),
('4vp21mc017', 'Dennis Thomas', 'mca', 2, '2000-06-15', '7894561230', 'dk', 'karnataka', 'dharmastala', '4A4F60AF91AB0CCF38707AF640598F06', 'DENNIS THOMAS.jpg'),
('4vp21mc021', 'Manisha', 'mca', 2, '2022-09-04', '1478523690', 'dk', 'karnataka', 'puttur', '', 'MANISHA.jpg'),
('4vp21mc023', 'Geethanjali', 'mca', 2, '2022-08-17', '64948181', 'dk', 'karnataka', 'Puttur', '9DEE148F0091BBC7794076F936AD387A', 'GEETHANJALI.jpg'),
('4vp21mc032', 'Kavya S Bhat', 'mca', 2, '2000-09-02', '74107458', 'dk', 'karnataka', 'puttur', '33162A0402169943EA5CE3E163BFF072', 'KAVYA BHAT P S.jpg'),
('4vp21mc036', 'Puneeth', 'mca', 2, '2022-08-05', '7445565', 'dk', 'karnataka', 'puttur', 'C75CFE6C9CF6174BAE57F691C1964792', 'PUNEETHRAJ K.jpg'),
('4vp21mc037', 'Sajith Thomas', 'mca', 2, '2000-08-05', '7410123513', 'dk', 'karnataka', 'kayarthadka', '4D9BF4165B28C5FED9395CD52319C910', 'SAJITH THOMAS.jpg'),
('4vp21mc039', 'Rashmi K', 'mca', 2, '2022-08-25', '7412589633', 'dk', 'karnataka', 'puttur', '3E67705545D24F2D064A281A6335D878', 'RASHMI V.jpg'),
('4vp21mc043', 'Shradha A S', 'mca', 2, '2022-09-07', '47445521255', 'dk', 'karnataka', 'puttur', '4da03d535e28b14a9af062fcd5eb1d18', 'SHRADDHA A S.jpg'),
('4vp21mc047', 'Sibin Sunny', 'mca', 2, '2000-12-07', '8217896431', 'dk', 'karnatala', 'dekk house', '438A15560C9D3BCDA7FC33D49D94C96D', 'SibinSunny.jpg'),
('4vp21mc053', 'Vridhi M', 'mca', 2, '2022-08-04', '1237894560', 'dk', 'karnataka', 'puttur', '192F2805A1D6E527364F03CDBAC85B3D', 'VRIDDHI M.jpg'),
('4vp21mc062', 'Deepak Lobo', 'mca', 2, '2022-08-11', '741258963', 'dk', 'karnataka', 'Belthangady', '102B80427BB6362781E9003B28C6C0E1', 'DEEPAK CLAUD LOBO.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `auth_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `auth_type`) VALUES
(1, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, '4vp21mc007', 'CDF49BD06DBE326007D35B8F89D0B416', 'student'),
(3, '4vp21mc021', '77e95a9ef7ed0d80aed3903101bbf521', 'student');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
