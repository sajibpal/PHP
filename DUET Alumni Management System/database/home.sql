-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 08:20 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ok`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(12) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `student_id` int(20) NOT NULL,
  `number` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `department` varchar(25) NOT NULL,
  `degree` varchar(25) NOT NULL,
  `passing_year` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `birth` varchar(20) NOT NULL,
  `orgination` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `paddress` varchar(300) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `batch` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `fullname`, `name`, `email`, `password`, `student_id`, `number`, `gender`, `department`, `degree`, `passing_year`, `address`, `birth`, `orgination`, `designation`, `location`, `paddress`, `blood`, `batch`) VALUES
(23, 'sajib pal', 'sajib', 'sajibpal@gmail.com', '852369', 154045, 192640189, 'Male', 'CSE', 'B.SC', 2018, ' gazipur', '21/10/1995', 'DUET,', 'asistance engineer', 'DUET,gazipur', 'shariatpur', '', ''),
(24, 'fdsf', 'dsfsdfsd', 'fgdgdfgg@gmail.com', '741258', 154066, 746768776, 'Male', 'CSE', 'B.SC', 2014, ' ghfdhg', '746768776', 'dfg', 'hghfgh', 'fgfhf', 'ghfgh', 'AB+', '2nd'),
(25, 'bisu das', 'bisu das', 'basu@gmail.com', '789456', 154046, 1988489489, 'male', 'EEE', '', 0, '', '', 'desko', 'engineer', 'dinajpur', '', '', ''),
(26, 'raton pal', 'raton', '', '', 124026, 1984489, 'male', 'CSE', 'B.sc', 2018, '', '', '', '', '', '', '', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
