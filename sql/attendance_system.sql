-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2017 at 07:02 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `AttID` int(20) NOT NULL,
  `EmpID` int(10) NOT NULL,
  `Prensent` int(1) NOT NULL,
  `AttDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`AttID`, `EmpID`, `Prensent`, `AttDate`) VALUES
(1495, 23, 1, '2013-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `employee_detail`
--

CREATE TABLE `employee_detail` (
  `EmpID` int(10) NOT NULL,
  `EmpName` varchar(255) NOT NULL,
  `EmpAddress` text NOT NULL,
  `EmpMobile` varchar(15) NOT NULL,
  `EmpEmail` varchar(50) NOT NULL,
  `EmpBirthdate` date NOT NULL,
  `EmpBloodGroup` varchar(5) NOT NULL,
  `EmpTechnology` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_detail`
--

INSERT INTO `employee_detail` (`EmpID`, `EmpName`, `EmpAddress`, `EmpMobile`, `EmpEmail`, `EmpBirthdate`, `EmpBloodGroup`, `EmpTechnology`) VALUES
(23, 'jayvik kashipara', 'rajkot', '9426666226', 'info@kashipara.in', '2013-05-23', 'A+', 'php'),
(24, 'Hasan', 'Faridpur Dhaka bangladesh', '0197837434', 'hasa@gmail.com', '2017-09-01', 'A-', 'php');

-- --------------------------------------------------------

--
-- Table structure for table `increment_detail`
--

CREATE TABLE `increment_detail` (
  `IncID` int(20) NOT NULL,
  `EmpID` int(20) NOT NULL,
  `Salary` int(20) NOT NULL,
  `IncrementDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary_detail`
--

CREATE TABLE `salary_detail` (
  `SalaryID` int(20) NOT NULL,
  `EmpID` int(20) NOT NULL,
  `JoinDate` date NOT NULL,
  `EmpType` varchar(20) NOT NULL,
  `CurrentSalary` int(10) NOT NULL,
  `IncrementAmount` int(10) NOT NULL,
  `IncrementAfter` int(5) NOT NULL,
  `IncrementDate` date NOT NULL,
  `LastSalary` int(10) NOT NULL,
  `LastIncrement` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(10) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Password`) VALUES
(2, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`AttID`),
  ADD KEY `EmpID` (`EmpID`);

--
-- Indexes for table `employee_detail`
--
ALTER TABLE `employee_detail`
  ADD PRIMARY KEY (`EmpID`);

--
-- Indexes for table `increment_detail`
--
ALTER TABLE `increment_detail`
  ADD PRIMARY KEY (`IncID`),
  ADD KEY `EmpID` (`EmpID`),
  ADD KEY `EmpID_2` (`EmpID`);

--
-- Indexes for table `salary_detail`
--
ALTER TABLE `salary_detail`
  ADD PRIMARY KEY (`SalaryID`),
  ADD KEY `EmpID` (`EmpID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `AttID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1496;
--
-- AUTO_INCREMENT for table `employee_detail`
--
ALTER TABLE `employee_detail`
  MODIFY `EmpID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `increment_detail`
--
ALTER TABLE `increment_detail`
  MODIFY `IncID` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salary_detail`
--
ALTER TABLE `salary_detail`
  MODIFY `SalaryID` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`EmpID`) REFERENCES `employee_detail` (`EmpID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `increment_detail`
--
ALTER TABLE `increment_detail`
  ADD CONSTRAINT `increment_detail_ibfk_1` FOREIGN KEY (`EmpID`) REFERENCES `employee_detail` (`EmpID`) ON DELETE CASCADE;

--
-- Constraints for table `salary_detail`
--
ALTER TABLE `salary_detail`
  ADD CONSTRAINT `salary_detail_ibfk_1` FOREIGN KEY (`EmpID`) REFERENCES `employee_detail` (`EmpID`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
