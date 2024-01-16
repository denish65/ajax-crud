-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2023 at 07:20 PM
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
(34, 'ghvggj', 'accounts'),
(35, 'rtfgkty', 'IT'),
(38, 'gnblhgy', 'hardware'),
(39, 'tuiedtyo', 'transport'),
(40, 'rtfgkty', 'IT');

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
(56, 'designing', 'rajkot', 'parth', '22/02/2023'),
(57, 'fgjkh', 'surat', 'vivek', '22/02/2023');

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
(1, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(2, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(3, '', 'images/joss-woodhead-3wFRlwS91yk-unsplash.jpg'),
(4, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(5, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(6, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(7, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(8, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(9, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(10, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(11, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(12, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(13, '', 'images/joss-woodhead-3wFRlwS91yk-unsplash.jpg'),
(14, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(15, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(16, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(17, '', 'images/joss-woodhead-3wFRlwS91yk-unsplash.jpg'),
(18, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(19, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(20, '', 'images/joss-woodhead-3wFRlwS91yk-unsplash.jpg'),
(21, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(22, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(23, '', 'images/lina-loos-04-C1NZk1hE-unsplash.jpg'),
(24, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(25, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(26, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(27, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(28, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(29, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(30, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(31, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(32, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(33, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(34, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(35, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(36, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(37, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(38, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(39, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(40, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(41, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(42, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(43, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(44, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(45, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(46, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(47, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(48, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(49, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(50, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(51, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(52, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(53, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(54, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(55, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(56, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(57, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(58, '', 'images/johnson-martin-zpq2DMidOY0-unsplash.jpg'),
(59, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(60, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(61, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(62, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(63, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(64, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(65, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(66, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(67, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(68, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(69, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(70, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(71, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(72, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(73, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(74, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(75, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(76, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(77, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(78, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(79, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(80, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(81, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(82, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(83, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(84, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(85, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(86, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(87, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(88, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(89, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(90, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(91, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(92, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(93, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(94, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(95, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(96, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(97, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(98, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(99, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(100, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(101, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(102, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(103, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(104, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(105, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(106, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(107, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(108, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(109, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(110, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(111, '', 'images/joss-woodhead-3wFRlwS91yk-unsplash.jpg'),
(112, '', 'images/joss-woodhead-3wFRlwS91yk-unsplash.jpg'),
(113, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(114, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(115, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(116, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(117, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(118, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(119, '', 'images/joss-woodhead-3wFRlwS91yk-unsplash.jpg'),
(120, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(121, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(122, '', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(123, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(124, '', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(125, 'ghvggj', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(126, 'tuiedtyo', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(127, 'tuiedtyo', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(128, 'tuiedtyo', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(129, 'tuiedtyo', 'images/abhishek-prasad-ii0oWs5abCo-unsplash.jpg'),
(130, 'rtfgkty', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(131, 'rtfgkty', 'images/clement-fusil-Fpqx6GGXfXs-unsplash.jpg'),
(132, 'gnblhgy', 'images/joss-woodhead-3wFRlwS91yk-unsplash.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `Department`
--
ALTER TABLE `Department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

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
