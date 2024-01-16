-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2023 at 01:28 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(30) DEFAULT NULL,
  `department` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `department`) VALUES
(1, 'A', 'transport'),
(2, 'B', 'marketing'),
(4, 'C', 'marketing'),
(34, 'D', 'accounts'),
(38, 'E', 'hardware'),
(39, 'F', 'transport');

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
(39, 'transport', 'junagadh', 'vivek', '20/02/2023'),
(42, 'marketing', 'rajkot', 'vivek', '20/02/2023'),
(52, 'accounts', 'surat', 'darshan', '20/02/2023'),
(53, 'IT', 'bhavnagar', 'raj', '22/02/2023'),
(55, 'hardware', 'rajkot', 'vivek', '22/02/2023'),
(56, 'designing', 'rajkot', 'parth', '22/02/2023');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `category` varchar(30) DEFAULT NULL,
  `images` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `category`, `images`) VALUES
(1, 'B', 'images/simon-berger-aZjw7xI3QAA-unsplash.jpg'),
(2, 'B', 'images/lina-loos-04-C1NZk1hE-unsplash.jpg'),
(3, 'C', 'images/photo-1636246441747-7d7f83f4629c.jpeg'),
(4, 'C', 'images/photo-1606567595334-d39972c85dbe.jpeg'),
(5, 'C', 'images/photo-1574068468668-a05a11f871da.jpeg'),
(6, 'D', 'images/photo-1542362567-b07e54358753.jpeg'),
(7, 'D', 'images/pexels-mike-b-170811.jpg'),
(8, 'D', 'images/lovepik-truck-picture_501544719.jpg'),
(9, 'D', 'images/istockphoto-1316147129-170667a.jpg'),
(18, 'E', 'images/istockphoto-1093110112-170667a.jpg'),
(19, 'E', 'images/637979.jpg'),
(20, 'E', 'images/637969.jpg'),
(21, 'E', 'images/637967.jpg'),
(22, 'E', 'images/13206.jpg');

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
(6, 'user', 'darshan', 'vyas', '20 streat virpur', 'rajkot', 'gujrat', 'india', 7412369850, 'darshan@gmail.com', 'male', '2023-02-02', '2023-03-01', '../upload/abhishek-prasad-ii0oWs5abCo-unsplash.jpg', 'it', 'darshan89', 'Da$123456'),
(17, 'admin', 'vivek', 'khunt', 'sdgsdf scdghsdf', 'ahmedabad', 'UttarPradesh', 'india', 1234569877, 'vivek123@gmail.com', 'male', '2023-02-08', '2023-02-23', '../upload/637967.jpg', 'services', 'vivek35', 'Dinesh@123'),
(19, 'admin', 'raj', 'khunt', '40 rode rajkot', 'rajkot', 'gujrat', 'india', 7412589630, 'raj@gmail.com', 'male', '2023-02-10', '2023-02-26', '../upload/637969.jpg', 'services', 'raj36', '$Ra123456'),
(20, 'user', 'vishal', 'vekarya', '150 rode rajkot', 'rajkot', 'gujrat', 'india', 7456981230, 'vishal@gmail.com', 'male', '2023-02-08', '2023-03-04', '../upload/637979.jpg', 'services', 'visahl35', '$Vs123456'),
(22, 'user', 'parth', 'limbani', '40 rode rajkot', 'rajkot', 'gujrat', 'india', 7412589630, 'parth@gmail.com', 'male', '2023-02-03', '2023-02-23', '../upload/simon-berger-aZjw7xI3QAA-unsplash.jpg', 'accounts', 'parth23', '$Pa123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `Department`
--
ALTER TABLE `Department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `Registration`
--
ALTER TABLE `Registration`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
