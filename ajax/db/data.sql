-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 10, 2023 at 04:07 PM
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
(1, 'user', 'vivek', 'gohel', 'st-60 360311', 'rajkot', 'gujrat', 'india', 12588, 'hgik@gmail.com', 'male', '2023-02-09', '2023-02-26', '/var/www/html/lina-loos-04-C1NZk1hE-unsplash.jpg', 'it', 'vivek35', '123456'),
(2, 'user', 'vivek', 'gohel', 'st-60 360311', 'rajkot', 'gujrat', 'india', 12588, 'vivek@gmail.com', 'male', '2023-02-09', '2023-02-26', '/var/www/html/joss-woodhead-3wFRlwS91yk-unsplash.jpg', 'it', 'vivek35', '123456'),
(3, 'user', 'vivek', 'gohel', 'st-60 360311', 'rajkot', 'gujrat', 'india', 12588, 'vivek@gmail.com', 'male', '2023-02-02', '2023-02-19', '/var/www/html/johnson-martin-zpq2DMidOY0-unsplash.jpg', 'it', 'vivek35', '123456'),
(4, 'user', 'darshan', 'vyas', 'gholgj', 'rajkot', 'gujrat', 'india', 12588, 'email@gmail.com', 'male', '2023-02-09', '2023-02-18', '/var/www/html/clement-fusil-Fpqx6GGXfXs-unsplash.jpg', 'it', 'vivek35', '123456'),
(5, 'user', 'darshan', 'vyas', 'gholgj', 'rajkot', 'gujrat', 'india', 12588, 'email@gmail.com', 'male', '2023-02-09', '2023-02-18', '/var/www/html/clement-fusil-Fpqx6GGXfXs-unsplash.jpg', 'it', 'vivek35', '123456'),
(6, 'user', 'vivek', 'gohel', 'st-60 360311', 'rajkot', 'gujrat', 'india', 12588, 'vivek@gmail.com', 'male', '2023-02-09', '2023-02-25', '/var/www/html/abhishek-prasad-ii0oWs5abCo-unsplash.jpg', 'it', 'vivek35', '123456');

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
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
