-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 21, 2023 at 07:20 PM
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
(1, 'hfkgh', 'transport'),
(2, 'rtfgkty', 'marketing'),
(4, 'wetgr', 'marketing'),
(6, 'gnblhgy', 'marketing'),
(27, 'rtfgkty', 'marketing');

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
(52, 'transport', 'surat', 'darshan', '20/02/2023');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `category` varchar(30) DEFAULT NULL,
  `images` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `t2`
--

CREATE TABLE `t2` (
  `id` int(11) NOT NULL,
  `category` varchar(30) DEFAULT NULL,
  `images` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t2`
--

INSERT INTO `t2` (`id`, `category`, `images`) VALUES
(1, 'wetgr', 'upload/istockphoto-1093110112-170667a.jpg'),
(4, 'rtfgkty', 'media/'),
(5, 'rtfgkty', 'media/'),
(6, 'wetgr', 'media/'),
(7, 'wetgr', 'upload/'),
(8, 'wetgr', 'upload/Array'),
(9, 'rtfgkty', 'upload/Array'),
(10, 'rtfgkty', 'upload/Array'),
(11, 'wetgr', 'upload/Array'),
(12, 'wetgr', 'upload/Array'),
(13, 'wetgr', 'upload/istockphoto-1093110112-170667a.jpg'),
(14, 'wetgr', 'media/'),
(15, 'rtfgkty', 'media/'),
(16, '', 'media/'),
(17, '', 'media/'),
(18, '', 'media/'),
(19, '', 'media/'),
(20, '', 'media/');

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
-- Indexes for table `t2`
--
ALTER TABLE `t2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `Department`
--
ALTER TABLE `Department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Registration`
--
ALTER TABLE `Registration`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `t2`
--
ALTER TABLE `t2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
