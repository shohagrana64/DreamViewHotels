-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2019 at 05:38 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreamview hotels`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `email`, `password`) VALUES
('tanjuma', 'tanju', 'admin@dreamview.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `creditcard` varchar(20) NOT NULL,
  `reservedroomsl` int(3) NOT NULL,
  `price` int(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `address`, `age`, `email`, `password`, `creditcard`, `reservedroomsl`, `price`, `date`) VALUES
('mubashhira', 'erkhkwje', 20, 'mubashhira@gmail.com', '12345', '2342342', 101, 0, '0000-00-00'),
('tanjuma', 'shabda labada', 20, 'shabadalabada@gmail.com', '12345', '123123', 201, 3000, '2019-08-31'),
('rana', 'laba', 18, 'shohagrana64@gmail.com', 'whatpass', '1231321', 101, 5000, '2019-08-16'),
('suchi', 'malibag', 22, 'suchicute@gmail.com', 'suchicute', 'efvdrveq2', 121, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `Serial_Number` int(2) NOT NULL,
  `id` int(3) NOT NULL,
  `location` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`Serial_Number`, `id`, `location`, `type`, `price`) VALUES
(1, 101, 'dhaka', 'family', 5000),
(2, 101, 'sylhet', 'family', 5000),
(3, 102, 'dhaka', 'family', 5000),
(4, 102, 'sylhet', 'family', 5000),
(5, 103, 'dhaka', 'family', 5000),
(6, 103, 'sylhet', 'family', 5000),
(7, 104, 'dhaka', 'family', 5000),
(8, 104, 'sylhet', 'family', 5000),
(9, 105, 'dhaka', 'family', 5000),
(10, 105, 'sylhet', 'family', 5000),
(11, 106, 'dhaka', 'family', 5000),
(12, 106, 'sylhet', 'family', 5000),
(13, 107, 'dhaka', 'family', 5000),
(14, 201, 'dhaka', 'double', 3000),
(15, 201, 'sylhet', 'double', 3000),
(16, 202, 'dhaka', 'double', 3000),
(17, 202, 'sylhet', 'double', 3000),
(18, 203, 'dhaka', 'double', 3000),
(19, 203, 'sylhet', 'double', 3000),
(20, 204, 'dhaka', 'double', 3000),
(21, 204, 'sylhet', 'double', 3000),
(22, 205, 'dhaka', 'double', 3000),
(23, 205, 'sylhet', 'double', 3000),
(24, 206, 'dhaka', 'double', 3000),
(25, 206, 'sylhet', 'double', 3000),
(26, 207, 'dhaka', 'double', 3000),
(27, 301, 'dhaka', 'single', 1000),
(28, 301, 'sylhet', 'single', 1000),
(29, 302, 'dhaka', 'single', 1000),
(30, 302, 'sylhet', 'single', 1000),
(31, 303, 'dhaka', 'single', 1000),
(32, 303, 'sylhet', 'single', 1000),
(33, 304, 'dhaka', 'single', 1000),
(34, 304, 'sylhet', 'single', 1000),
(35, 305, 'dhaka', 'single', 1000),
(36, 305, 'sylhet', 'single', 1000),
(37, 306, 'dhaka', 'single', 1000),
(38, 306, 'sylhet', 'single', 1000),
(42, 307, 'USA', 'single', 9999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`,`location`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
