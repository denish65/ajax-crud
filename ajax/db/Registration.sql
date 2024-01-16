-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2023 at 07:37 PM
-- Server version: 5.7.40-0ubuntu0.18.04.1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `Registration`
--

CREATE TABLE `Registration` (
  `rid` int(11) NOT NULL,
  `role` varchar(10) DEFAULT NULL,
  `fristname` varchar(40) DEFAULT NULL,
  `lastname` varchar(40) DEFAULT NULL,
  `streat` varchar(40) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `contact_no` bigint(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `date_of_brith` varchar(10) DEFAULT NULL,
  `joining_date` varchar(10) DEFAULT NULL,
  `images` varchar(200) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Registration`
--

INSERT INTO `Registration` (`rid`, `role`, `fristname`, `lastname`, `streat`, `city`, `state`, `country`, `contact_no`, `email`, `gender`, `date_of_brith`, `joining_date`, `images`, `department`, `user_name`, `password`) VALUES
(1, 'admin', 'vivek', 'gohel', 'st-60 360311', 'rajkot', 'gujrat', 'india', 12588, 'vivek@gmail.com', 'male', '2023-02-01', '2023-02-12', '../upload/clement-fusil-Fpqx6GGXfXs-unsplash.jpg', 'it', 'vivek35', '123456789'),
(8, 'user', 'vishal', 'khunt', 'st-60 360311', 'rajkot', 'gujrat', 'india', 2963542987, 'vishal@gmail.com', 'male', '2023-02-02', '2023-02-15', '../upload/clement-fusil-Fpqx6GGXfXs-unsplash.jpg', 'it', 'visahl31', '123456789'),
(12, 'user', 'dhaval', 'thummar', '150 rode rajkot', 'rajkot', 'gujrat', 'india', 7896543210, 'dhval@gmail.com', 'male', '2023-02-08', '2023-02-25', '../upload/johnson-martin-zpq2DMidOY0-unsplash.jpg', 'it', 'dhaval56', '123456789'),
(15, 'user', 'mihir', 'vora', '20 rode utavad', 'rajkot', 'gujrat', 'india', 8523697410, 'mihir@gmail.com', 'male', '2023-02-04', '2023-02-26', '../upload/johnson-martin-zpq2DMidOY0-unsplash.jpg', 'it', 'mihir63', 'Mi123456$');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Registration`
--
ALTER TABLE `Registration`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Registration`
--
ALTER TABLE `Registration`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
