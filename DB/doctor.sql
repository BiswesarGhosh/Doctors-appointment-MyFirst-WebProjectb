-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 08:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(2, 'rana@gmail.com', 'rana');

-- --------------------------------------------------------

--
-- Table structure for table `admin_edit`
--

CREATE TABLE `admin_edit` (
  `id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `doctors` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_edit`
--

INSERT INTO `admin_edit` (`id`, `department`, `doctors`) VALUES
(8, 'Gynocology', 'Jagannath Pal'),
(9, 'Dental', 'Rana Ghosh'),
(10, 'Cardiology', 'Anirban Chatterjee'),
(11, 'Ent', 'Argha Modal'),
(12, 'Neurology', 'Malay Roy');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Time` enum('9 A.M','11 A.M','1 P.M','3 P.M','6 P.M') NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Doctors` varchar(255) NOT NULL,
  `booking_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `First_name`, `Last_name`, `Phone`, `Email`, `Date`, `Time`, `Department`, `Doctors`, `booking_time`) VALUES
(1, 'Jagannath', 'Pal', 654654121, 'jagannath@gmail.com', '2022-05-20', '1 P.M', 'ABCD', 'Rana Ghosh', '2022-06-11 16:30:04'),
(2, 'Rana', 'Ghosh', 2147483647, 'Biswesar@gmail.com', '2023-04-20', '9 A.M', 'Gynocology', 'Jagannath Pal', '2022-06-11 16:30:28'),
(3, 'Jagannath', 'Pal', 654654121, 'jagannath@gmail.com', '2022-08-20', '3 P.M', 'ABCD', 'ABCD', '2022-06-11 16:32:02');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Name`, `Mobile`, `Email`, `Message`) VALUES
(1, 'abcd', 12345, 'abcdh@gqa.com', 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(11) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Gardain_name` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `Address` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `First_name`, `Last_name`, `Gardain_name`, `DOB`, `Address`, `Email`, `Password`, `Mobile`, `time`) VALUES
(1, 'Rana', 'Ghosh', 'Susanta Ghosh', '2001-08-02', 'Mankar', 'biswesarghosh@gmail.com', '1', 2147483647, '2022-06-07 21:47:45'),
(2, 'abcd', 'defg', 'hijk', '2002-05-02', 'ahdbxjbsjdhxb', 'a@gmail.com', '1', 1234567887, '2022-06-10 22:53:29'),
(3, 'abcd', 'defg', 'hijk', '2002-05-02', 'hxghsagx', 'a@gmail.com', '1', 1234567890, '2022-06-10 22:54:25'),
(4, 'abcd', 'efgh', 'ijkl', '2002-05-02', 'dhghgbhxbd', 'a@gmail.com', '1', 1234567890, '2022-06-10 22:56:11'),
(5, 'jagannath', 'pal', 'mukta dhar pal', '2002-06-24', 'mankar', 'jagannath@gmail.com', '1', 654654121, '2022-06-11 16:26:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_edit`
--
ALTER TABLE `admin_edit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_edit`
--
ALTER TABLE `admin_edit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
