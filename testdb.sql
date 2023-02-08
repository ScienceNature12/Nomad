-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 24, 2023 at 07:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `countryname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `countryname`) VALUES
(1, 'USA'),
(2, 'Spain'),
(3, 'France'),
(4, 'Italy'),
(5, 'Lebanon'),
(6, 'Germany'),
(7, 'Cuba');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(7) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `userid` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `price`, `userid`) VALUES
(4, 'product2', 200.22, 14),
(6, 'product 2 ', 666, 17),
(8, 'Product3', 174.52, 18);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `BirthDate` date DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `Country` int(10) DEFAULT NULL,
  `zip` int(7) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `language` varchar(30) DEFAULT NULL,
  `about` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `BirthDate`, `Address`, `Country`, `zip`, `email`, `gender`, `language`, `about`) VALUES
(10, 'user1', 'e10adc3949ba59abbe56e057f20f88', '2022-03-02', 'spokane', 1, 99218, 'aa@hh.com', 'female', 'english', 'no comment'),
(11, 'user1', 'e10adc3949ba59abbe56e057f20f88', '2022-03-01', 'spokane', 1, 99218, 'aa@hh.com', 'female', 'english', 'vvv'),
(12, 'user1', '81dc9bdb52d04dc20036dbd8313ed0', '2022-03-03', 'spokane', 1, 2222, 'aa@hh.com', 'female', 'english', 'gg'),
(13, 'user2', '81dc9bdb52d04dc20036dbd8313ed0', '2022-03-03', 'spokane', 1, 2222, 'aa@hh.com', 'female', 'english', 'fff'),
(14, 'user3', '81dc9bdb52d04dc20036dbd8313ed055', '2022-03-01', 'spokane', 1, 2222, 'aa@hh.com', 'female', 'english', 'ddd'),
(15, 'user5', '81dc9bdb52d04dc20036dbd8313ed055', '2022-03-09', 'spokane', 1, 8888, 'aa@hh.com', 'female', 'english', 'hhhh'),
(16, 'user5', '81dc9bdb52d04dc20036dbd8313ed055', '2022-03-03', 'spokane', 1, 6666, 'aa@hh.com', 'female', 'english', 'ggg'),
(17, 'username', '81dc9bdb52d04dc20036dbd8313ed055', '2022-03-02', 'spokane', 1, 6666, 'aa@hh.com', 'female', 'english', 'hhhhh'),
(18, 'Billy', 'd41d8cd98f00b204e9800998ecf8427e', '1994-02-07', '235 W Market St', 3, 43256, 'Billy@gmail.com', 'male', 'No English', 'Testing'),
(19, 'Tyler', '81d3b53c8ff28a92ad33aabf54f75e10', '1991-05-14', '711 w waverly pl', 1, 99205, 'tylermbolen@gmail.com', 'male', 'English', ''),
(20, 'Tyler', '512fecba2c41e1b82c7d9baefb5f31e2', '1997-02-04', '123 park pl', 1, 99206, 'Bill@gmail.com', 'male', 'English', ''),
(21, 'Tyler', '58b4e38f66bcdb546380845d6af27187', '1991-05-14', '711 w waverly pl', 1, 99205, 'tylermbolen@gmail.com', 'male', 'English', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign key` (`userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Country` (`Country`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Country`) REFERENCES `country` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
