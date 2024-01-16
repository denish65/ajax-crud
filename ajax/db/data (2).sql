-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2023 at 07:01 PM
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
-- Table structure for table `Department`
--

CREATE TABLE `Department` (
  `id` int(11) NOT NULL,
  `depart_name` varchar(50) DEFAULT NULL,
  `depart_location` varchar(225) DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `careated_date` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Department`
--

INSERT INTO `Department` (`id`, `depart_name`, `depart_location`, `user_name`, `careated_date`) VALUES
(5, 'fhkj fgurtu', 'fhk  fyie6i', 'erfhtry dfuhery', '17/02/2023 17:56:52 pm'),
(6, 'xcvjggfj', 'kbhjkrtjg', 'gdurtfgj ', '17/02/2023 18:15:16 pm');

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
(6, 'user', 'darshan', 'vyas', '20 streat virpur', 'rajkot', 'gujrat', 'india', 7412369850, 'darshan@gmail.com', 'male', '2023-02-02', '2023-03-01', '../upload/johnson-martin-zpq2DMidOY0-unsplash.jpg', 'it', 'darshan89', 'Da$123456'),
(17, 'admin', 'vivek', 'khunt', 'sdgsdf scdghsdf', 'ahmedabad', 'UttarPradesh', 'india', 1234569877, 'vivek123@gmail.com', 'male', '2023-02-08', '2023-02-23', '../upload/637967.jpg', 'services', 'vivek35', 'Dinesh@123'),
(19, 'admin', 'raj', 'khunt', '40 rode rajkot', 'rajkot', 'gujrat', 'india', 7412589630, 'raj@gmail.com', 'male', '2023-02-10', '2023-02-26', '../upload/637969.jpg', 'services', 'raj36', '$Ra123456'),
(20, 'user', 'vishal', 'vekarya', '150 rode rajkot', 'rajkot', 'gujrat', 'india', 7456981230, 'vishal@gmail.com', 'male', '2023-02-08', '2023-03-04', '../upload/637979.jpg', 'services', 'visahl35', '$Vs123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Registration`
--
ALTER TABLE `Registration`
  ADD PRIMARY KEY (`rid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Department`
--
ALTER TABLE `Department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Registration`
--
ALTER TABLE `Registration`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
