-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2017 at 07:03 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `attent`
--

CREATE TABLE `attent` (
  `id` int(11) NOT NULL,
  `roll` int(6) NOT NULL,
  `attend` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attent`
--

INSERT INTO `attent` (`id`, `roll`, `attend`, `time`) VALUES
(19, 835429, 'present', '2017-09-05 22:37:08'),
(20, 835420, 'absent', '2017-09-05 22:37:09'),
(21, 835400, 'present', '2017-09-05 22:37:09'),
(22, 835429, 'absent', '2017-09-21 22:21:39'),
(23, 835420, 'present', '2017-09-21 22:21:39'),
(24, 835400, 'absent', '2017-09-21 22:21:39'),
(25, 134555, 'present', '2017-09-21 22:21:39'),
(26, 134557, 'present', '2017-09-21 22:21:39');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(266) COLLATE utf8_unicode_ci NOT NULL,
  `notice` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `notice`) VALUES
(1, '09/03/2017 Class open Notice', 'Class open.');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `roll` int(6) NOT NULL,
  `reg` int(6) NOT NULL,
  `depatment` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll`, `reg`, `depatment`, `password`) VALUES
(6, 'Hasan Sheikh', 835429, 744083, 'Computer', '123456'),
(7, 'Mohammad ', 835420, 744080, 'computer', '123456'),
(8, 'Hasan', 835400, 744000, 'Computer', '123456'),
(9, 'Atikur Rahman', 134555, 131272, 'Computer', '123456'),
(10, 'Md. Mozammel Haque', 134557, 141272, 'Computer', '123456'),
(11, 'Rofiq', 835490, 744099, 'Computer', '123456'),
(12, 'Zh Zaman', 835411, 744011, 'Computer', '123456'),
(13, 'Zahid', 835444, 744044, 'Computer', '123456'),
(14, 'Abu Rayhan', 134111, 131277, 'Computer', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `techers`
--

CREATE TABLE `techers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `depatment` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `techers`
--

INSERT INTO `techers` (`id`, `name`, `phone`, `email`, `depatment`, `password`) VALUES
(22, 'Mohammad Hasan Sheikh', 1775048782, 'hasan835429@gmail.com', 'Computer', '123456'),
(23, 'Mohammad ', 1775048782, 'hasan835429@gmail.com', 'Computer', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attent`
--
ALTER TABLE `attent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `techers`
--
ALTER TABLE `techers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attent`
--
ALTER TABLE `attent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `techers`
--
ALTER TABLE `techers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
