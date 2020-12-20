-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 04:58 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

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
  `ID` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `user_name`, `pass`, `mail`) VALUES
(1, 'admin', 'admin', 'onlysw9@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `college_list`
--

CREATE TABLE `college_list` (
  `college_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip_code` int(7) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `college_mail` varchar(50) NOT NULL,
  `it` int(2) NOT NULL,
  `cm` int(2) NOT NULL,
  `entc` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college_list`
--

INSERT INTO `college_list` (`college_name`, `address`, `city`, `zip_code`, `contact_no`, `college_mail`, `it`, `cm`, `entc`) VALUES
('goverment polytechnic solapur', 'solapur', 'solapur', 413401, 1010101010, 'abc@gmail.com', 0, 1, 1),
('pccoe', 'pune', 'pune', 413401, 123144, 'abc@gmail.com', 1, 0, 1),
('pict', 'pune', 'pune', 1, 1234567889, 'abc@gmail.com', 1, 1, 1),
('scoe', 'vadgav', 'pune', 413401, 1010101010, 'abc@gmail.com', 1, 1, 1),
('viit', 'at post .Bhatambare tal.Barshi Dist.Solapur', 'Solapur', 413401, 1010101010, 'asda@gmail.com', 1, 1, 1),
('vit', 'at post .Bhatambare tal.Barshi Dist.Solapur', 'Solapur', 413401, 1010101010, 'abc@gmail.com', 1, 1, 1),
('wit', 'sangali', 'sangli', 123456, 1010101010, 'abc@gmail.com', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cutoff`
--

CREATE TABLE `cutoff` (
  `id` int(11) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `stream` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `cutoff` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cutoff`
--

INSERT INTO `cutoff` (`id`, `college_name`, `stream`, `year`, `cutoff`) VALUES
(1, 'pccoe', 'it', '2020', 80),
(2, 'pict', 'cm', '2020', 97),
(3, 'scoe', 'cm', '2010', 50);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `feedback`, `Time`) VALUES
(1, 'suresh', 'good....', '2020-12-13 08:50:43'),
(2, 'suresh', 'chan..', '2020-12-13 08:57:34'),
(3, 'suvi', 'veryyyyyyyyyyyyyyyyyyyyyyyyyyyy goooog.......', '2020-12-13 09:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_profile`
--

CREATE TABLE `student_profile` (
  `username` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `mobile_num` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_profile`
--

INSERT INTO `student_profile` (`username`, `id`, `student_name`, `mobile_num`, `email`, `address`, `mark`) VALUES
('suresh', 2, 'suresh manik waghmode', 1010101010, 'onlysw9@gmail.com', 'at post .Bhatambare tal.Barshi Dist.Solapur', 88),
('sagar', 3, 'sagar waghmode', 1010101010, 'onlysw9@gmail.com', 'at post .Bhatambare tal.Barshi Dist.Solapur', 88),
('dumy', 4, 'suresh', 1010101010, 'onlysw9@gmail.com', 'at post .Bhatambare tal.Barshi Dist.Solapur', 88),
('suvi', 5, 'suvidya ubale', 1010101010, 'suvi@gmail.com', 'at post .Bhatambare tal.Barshi Dist.Solapur', 85);

-- --------------------------------------------------------

--
-- Table structure for table `student_user`
--

CREATE TABLE `student_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_user`
--

INSERT INTO `student_user` (`id`, `username`, `pass`) VALUES
(5, 'suresh', '123'),
(8, 'sagar', '123'),
(9, 'dumy', '123'),
(10, 'suvi', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `college_list`
--
ALTER TABLE `college_list`
  ADD UNIQUE KEY `college_name` (`college_name`);

--
-- Indexes for table `cutoff`
--
ALTER TABLE `cutoff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_profile`
--
ALTER TABLE `student_profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `student_user`
--
ALTER TABLE `student_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cutoff`
--
ALTER TABLE `cutoff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_profile`
--
ALTER TABLE `student_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_user`
--
ALTER TABLE `student_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
