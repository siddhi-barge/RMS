-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 06:15 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `acaccept`
--

CREATE TABLE `acaccept` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `request` varchar(20) NOT NULL,
  `stock_count` varchar(20) NOT NULL,
  `pn` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acaccept`
--

INSERT INTO `acaccept` (`id`, `name`, `request`, `stock_count`, `pn`, `email`) VALUES
(55, 'nita', 'chalk', '22', '1234567890', 'nita@gmail.com'),
(55, 'nita', 'chalk', '22', '1234567890', 'nita@gmail.com'),
(23, 'gautam', 'chalk', '10', '2147483647', 'gautam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE `accountant` (
  `acusername` varchar(20) NOT NULL,
  `acpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`acusername`, `acpassword`) VALUES
('hp', '456');

-- --------------------------------------------------------

--
-- Table structure for table `acnotifications`
--

CREATE TABLE `acnotifications` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acnotifications`
--

INSERT INTO `acnotifications` (`id`, `message`, `status`, `date`) VALUES
(1, 'Accountant has ordered the request of ID No.1', 'read', '2019-04-22 02:46:55'),
(4, 'Accountant has ordered the request of ID No.4', 'read', '2019-04-20 20:51:33'),
(5, 'Accountant has ordered the request of ID No.5', 'read', '2019-04-20 22:02:16'),
(8, 'Accountant has ordered the request of ID No.8', 'read', '2019-04-22 17:09:17'),
(9, 'Accountant has ordered the request of ID No.9', 'read', '2019-04-20 20:52:51'),
(10, 'Hi crush', 'read', '2018-02-09 00:21:21'),
(11, '', 'read', '2018-02-09 00:21:34'),
(12, '', 'read', '2018-02-09 00:22:25'),
(23, 'Accountant has ordered the request of ID No.23', 'read', '2019-04-26 12:36:58'),
(55, 'Accountant has ordered the request of ID No.55', 'read', '2019-04-25 23:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `adaccept`
--

CREATE TABLE `adaccept` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `request` varchar(20) NOT NULL,
  `stock_count` varchar(20) NOT NULL,
  `pn` int(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ausername` varchar(20) NOT NULL,
  `apassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ausername`, `apassword`) VALUES
('avgadmin', 'avg@123');

-- --------------------------------------------------------

--
-- Table structure for table `allacaccept`
--

CREATE TABLE `allacaccept` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `request` varchar(20) NOT NULL,
  `stock_count` varchar(20) NOT NULL,
  `pn` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allacaccept`
--

INSERT INTO `allacaccept` (`id`, `name`, `request`, `stock_count`, `pn`, `email`) VALUES
(1, 'gautam', 'ddfefwr', '10', '789456321', 'darshan29sable@gmail.com'),
(1, 'gautam', 'ddfefwr', '10', '789456321', 'darshan29sable@gmail.com'),
(21, 'gautam', 'srfdg', '22', '753159852', 'darshan29sable@gmail.com'),
(8, 'akash', '152', 'aa', '4562', '45'),
(55, 'nita', 'chalk', '22', '1234567890', 'nita@gmail.com'),
(55, 'nita', 'chalk', '22', '1234567890', 'nita@gmail.com'),
(23, 'gautam', 'chalk', '10', '2147483647', 'gautam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `alladaccept`
--

CREATE TABLE `alladaccept` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `request` varchar(10) NOT NULL,
  `stock_count` varchar(20) NOT NULL,
  `pn` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alladaccept`
--

INSERT INTO `alladaccept` (`id`, `name`, `request`, `stock_count`, `pn`, `email`) VALUES
(1, 'gautam', 'ddfefwr', '10', '789456321', 'darshan29sable@gmail.com'),
(21, 'gautam', 'srfdg', '22', '753159852', 'darshan29sable@gmail.com'),
(19, 'gautam', 'chalk', '22', '123654789', '$	aemail'),
(11, 'shweta', '178', 'ff', '1478', '9'),
(55, 'nita', 'chalk', '22', '1234567890', 'nita@gmail.com'),
(22, 'gautam', 'keyboard', '2', '7894561232', 'gautam@gmail.com'),
(23, 'gautam', 'chalk', '10', '7894561232', 'gautam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `allnotifications`
--

CREATE TABLE `allnotifications` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `allnotifications`
--

INSERT INTO `allnotifications` (`id`, `message`, `status`, `date`) VALUES
(1, 'Pricipal has accepted the request of ID No.1', 'unread', '2019-04-22 02:32:49'),
(11, 'Pricipal has accepted the request of ID No.11', 'unread', '2019-04-22 16:59:04'),
(19, 'Pricipal has accepted the request of ID No.19', 'unread', '2019-04-22 02:36:43'),
(21, 'Pricipal has accepted the request of ID No.21', 'unread', '2019-04-22 02:33:01'),
(22, 'Pricipal has accepted the request of ID No.22', 'unread', '2019-04-23 12:44:45'),
(23, 'Pricipal has accepted the request of ID No.23', 'unread', '2019-04-26 12:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `allpaccept`
--

CREATE TABLE `allpaccept` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `request` varchar(20) NOT NULL,
  `stock_count` varchar(20) NOT NULL,
  `pn` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allpaccept`
--

INSERT INTO `allpaccept` (`id`, `name`, `request`, `stock_count`, `pn`, `email`) VALUES
(1, 'gautam', 'ddfefwr', '10', '789456321', 'darshan29sable@gmail.com'),
(1, 'gautam', 'ddfefwr', '10', '789456321', 'darshan29sable@gmail.com'),
(21, 'gautam', 'srfdg', '22', '753159852', 'darshan29sable@gmail.com'),
(19, 'gautam', 'chalk', '22', '123654789', '$	aemail'),
(11, 'shweta', '178', 'ff', '1478', '9'),
(22, 'gautam', 'keyboard', '2', '7894561232', 'gautam@gmail.com'),
(23, 'gautam', 'chalk', '10', '7894561232', 'gautam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `allrequests`
--

CREATE TABLE `allrequests` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `request` varchar(20) NOT NULL,
  `stock_count` varchar(20) NOT NULL,
  `pn` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allrequests`
--

INSERT INTO `allrequests` (`id`, `name`, `request`, `stock_count`, `pn`, `email`) VALUES
(0, 'gautam', '345', 'jj', '3567', '45'),
(0, 'gautam', 'chalk', '22', '123654789', 'darshan29sable@gmail'),
(0, 'gautam', 'asdfg', '33', '456987123', 'darshan29sable@gmail'),
(0, 'gautam', 'srfdg', '22', '753159852', 'darshan29sable@gmail'),
(0, 'gautam', 'keyboard', '2', '7894561232', 'gautam@gmail.com'),
(0, 'gautam', 'chalk', '10', '7894561232', 'gautam@gmail.com'),
(3, 'gautam', 'chalk', '20', '7894561232', 'gautam@gmail.com'),
(3, 'gautam', 'keyboard', '1', '7894561232', 'gautam@gmail.com'),
(3, 'gautam', 'asdfg', '22', '7894561232', 'gautam@gmail.com'),
(3, 'gautam', 'chalk', '22', '7894561232', 'gautam@gmail.com'),
(0, 'gautam', 'srfdg', '22', '7894561232', 'gautam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `anotifications`
--

CREATE TABLE `anotifications` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anotifications`
--

INSERT INTO `anotifications` (`id`, `message`, `status`, `date`) VALUES
(1, 'Aministartor has accepted the request of ID No.1', 'read', '2019-04-20 16:51:14'),
(19, 'Aministartor has accepted the request of ID No.19', 'read', '2019-04-22 02:37:13'),
(21, 'Aministartor has accepted the request of ID No.21', 'read', '2019-04-20 17:00:49'),
(22, 'Aministartor has accepted the request of ID No.22', 'read', '2019-04-23 12:45:58'),
(23, 'Aministartor has accepted the request of ID No.23', 'read', '2019-04-26 12:32:27'),
(55, 'Aministartor has accepted the request of ID No.55', 'read', '2019-04-22 17:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `available`
--

CREATE TABLE `available` (
  `sr` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `stock_count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available`
--

INSERT INTO `available` (`sr`, `name`, `stock_count`) VALUES
(1, 'duster', 10),
(2, 'chalk box', 20);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `request` varchar(20) NOT NULL,
  `stock_count` varchar(20) NOT NULL,
  `pn` int(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `request`, `stock_count`, `pn`, `email`) VALUES
(55, 'nita', 'chalk', '10', 123456789, 'nita@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `paccept`
--

CREATE TABLE `paccept` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `request` varchar(20) NOT NULL,
  `stock_count` varchar(20) NOT NULL,
  `pn` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pricipal`
--

CREATE TABLE `pricipal` (
  `pusername` varchar(20) NOT NULL,
  `ppassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricipal`
--

INSERT INTO `pricipal` (`pusername`, `ppassword`) VALUES
('harshala', '789');

-- --------------------------------------------------------

--
-- Table structure for table `toy`
--

CREATE TABLE `toy` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `request` varchar(20) NOT NULL,
  `stock_count` varchar(20) NOT NULL,
  `pn` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toy`
--

INSERT INTO `toy` (`id`, `name`, `request`, `stock_count`, `pn`, `email`) VALUES
(24, 'gautam', 'chalk', '20', '7894561232', 'gautam@gmail.com'),
(25, 'gautam', 'keyboard', '1', '7894561232', 'gautam@gmail.com'),
(27, 'gautam', 'chalk', '22', '7894561232', 'gautam@gmail.com'),
(28, 'gautam', 'srfdg', '22', '7894561232', 'gautam@gmail.com'),
(29, 'gautam', 'asdfg', '22', '7894561232', 'gautam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`) VALUES
('darshan', 'darshan29sable@gmail.com', '1234'),
('gautam', 'gautam123@gmail.com', '1234'),
('nita', 'nitu148@gmail.com', '7894'),
('rohit', 'rohit001@gmail.com', '4561'),
('vishal', 'vishal03@gmail.com', '1598'),
('vaibhav', 'vaibhavs189@gmail.com', '7532'),
('smita', 'smita234@gmail.com', '4562'),
('shweta', 'shweta09@gmail.com', '1379');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acnotifications`
--
ALTER TABLE `acnotifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allnotifications`
--
ALTER TABLE `allnotifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anotifications`
--
ALTER TABLE `anotifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `available`
--
ALTER TABLE `available`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `toy`
--
ALTER TABLE `toy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acnotifications`
--
ALTER TABLE `acnotifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `allnotifications`
--
ALTER TABLE `allnotifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `anotifications`
--
ALTER TABLE `anotifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `available`
--
ALTER TABLE `available`
  MODIFY `sr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `toy`
--
ALTER TABLE `toy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
