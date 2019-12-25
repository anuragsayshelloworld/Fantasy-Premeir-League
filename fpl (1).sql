-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2019 at 12:03 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `adityacule`
--

CREATE TABLE `adityacule` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `availability` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adityacule`
--

INSERT INTO `adityacule` (`id`, `name`, `position`, `price`, `points`, `availability`) VALUES
(2, 'Hugo Lloris', 'GK', 7, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `Anishcule`
--

CREATE TABLE `Anishcule` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `availability` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Anishcule`
--

INSERT INTO `Anishcule` (`id`, `name`, `position`, `price`, `points`, `availability`) VALUES
(3, 'Antonio Rudiger', 'DEF', 8, 0, 'A/V'),
(4, 'Sergio Ramos', 'DEF', 2, 0, 'A/V'),
(5, 'Rio Ferdinand', 'DEF', 9, 0, 'A/V'),
(6, 'Aaron Ramsey', 'MID', 12, 0, 'A/V'),
(7, 'Oliver Giroud', 'FWD', 5, 0, 'A/V');

-- --------------------------------------------------------

--
-- Table structure for table `anuragironside`
--

CREATE TABLE `anuragironside` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `availability` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bimochan`
--

CREATE TABLE `bimochan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `price` decimal(11,0) NOT NULL,
  `points` int(11) NOT NULL,
  `availability` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bimochan`
--

INSERT INTO `bimochan` (`id`, `name`, `position`, `price`, `points`, `availability`) VALUES
(30, 'Sunil Chettri', 'ST', '4', 2, ''),
(32, 'Zlatan Ibrahimovic', 'ST', '7', 0, ''),
(33, 'Lionel Messi', 'LW', '10', 7, ''),
(34, 'Gigi Buffon', 'GK', '6', 3, ''),
(35, 'Bimal G. Magar', 'ST', '5', 12, ''),
(36, 'Neymar Jr.', 'RW', '7', 1, ''),
(37, 'Marco Reus', 'CAM', '6', 3, ''),
(38, 'Phillipe Coutinho', 'CAM', '6', 0, ''),
(39, 'Gerrard Pique', 'CB', '5', 0, ''),
(40, 'John Terry', 'CD', '8', 0, ''),
(41, 'Carlos Puyol', 'CB', '7', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `leaderboard`
--

CREATE TABLE `leaderboard` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaderboard`
--

INSERT INTO `leaderboard` (`id`, `name`, `points`) VALUES
(24, 'Reddevilmanish', 6),
(25, 'anuragironside', 0),
(26, 'Anishcule', 0),
(27, 'bimochan', 28);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `price` decimal(11,0) NOT NULL,
  `points` int(11) NOT NULL,
  `availability` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `position`, `price`, `points`, `availability`) VALUES
(17, 'Iker Cassilas', 'GK', '6', 22, 'A/V'),
(18, 'Hugo Lloris', 'GK', '7', 13, 'A/V'),
(25, 'Mason Mount', 'FWD', '13', 6, 'A/V'),
(28, 'Antonio Rudiger', 'DEF', '8', -1, 'A/V'),
(29, 'David Luiz', 'DEF', '2', 6, 'A/V'),
(30, 'Thiabut Courtouis', 'GK', '1', 3, 'A/V'),
(32, 'Sergio Ramos', 'DEF', '2', 8, 'N/A'),
(33, 'Vincent Kompany', 'DEF', '10', 0, 'A/V'),
(34, 'Rio Ferdinand', 'DEF', '9', 0, 'A/V'),
(35, 'Branaslav Ivanovic', 'DEF', '9', 0, 'A/V'),
(37, 'Aaron Ramsey', 'MID', '12', 0, 'A/V'),
(38, 'Fabinho', 'MID', '7', 0, 'A/V'),
(39, 'Sadio Mane', 'MID', '9', 0, 'A/V'),
(40, 'Christian Erikson', 'MID', '12', 0, 'A/V'),
(41, 'Jorginho', 'MID', '8', 0, 'A/V'),
(42, 'Oliver Giroud', 'FWD', '5', 0, 'A/V'),
(43, 'Harry Kane', 'FWD', '10', 0, 'A/V'),
(44, 'Tammy Abraham', 'FWD', '9', 0, 'A/V'),
(45, 'Pukki', 'FWD', '9', 0, 'A/V'),
(46, 'Ramires', 'MID', '12', 0, 'A/V'),
(47, 'Mesut Ozil', 'MID', '10', 0, 'A/V'),
(49, 'Clint Dempsey', 'FWD', '10', 3, 'A/V'),
(50, 'Ngolo Kante', 'MID', '10', 0, 'A/V'),
(51, 'Kelvin Mirallas', 'MID', '10', 0, 'A/V'),
(52, 'Shishir Khanal', 'GK', '9', 0, 'A/V');

-- --------------------------------------------------------

--
-- Table structure for table `Reddevilmanish`
--

CREATE TABLE `Reddevilmanish` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `availability` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Reddevilmanish`
--

INSERT INTO `Reddevilmanish` (`id`, `name`, `position`, `price`, `points`, `availability`) VALUES
(53, 'Pukki', 'FWD', 9, 0, 'A/V'),
(54, 'David Luiz', 'DEF', 2, 0, 'A/V'),
(56, 'Sergio Ramos', 'DEF', 2, 0, 'A/V'),
(57, 'Branaslav Ivanovic', 'DEF', 9, 0, 'A/V'),
(58, 'Aaron Ramsey', 'MID', 12, 0, 'A/V'),
(59, 'Rio Ferdinand', 'DEF', 9, 0, 'A/V'),
(62, 'Mason Mount', 'FWD', 13, 6, 'A/V');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `recog` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `photo`, `recog`) VALUES
(1, 'Anurag Acharya', 'anuragironside', 'clfa5d52c0', 'image/anuragironside.jpg', 0),
(2, 'Bimochan Shrestha', 'bimochan', 'shrestha', 'image/bimochan.jpg', 0),
(3, 'admin admin', 'admin', 'admin', 'image/admin.jpg', 1),
(5, 'Manish Kharel', 'Reddevilmanish', 'manchester', 'image/manish.jpg', 0),
(6, 'Anish Poudel', 'anishcules', 'lionel', 'images/a.jpg', 0),
(7, 'Anmol Ojha', 'gunneranmol', 'arsene', 'images/a.jpg', 0),
(8, 'aditya paudyal', 'adityacule', 'lionel', 'images/a.jpg', 0),
(9, 'Anish Poudel', 'Anishcule', 'lionelmessi', 'image/anish.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adityacule`
--
ALTER TABLE `adityacule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Anishcule`
--
ALTER TABLE `Anishcule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anuragironside`
--
ALTER TABLE `anuragironside`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bimochan`
--
ALTER TABLE `bimochan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Reddevilmanish`
--
ALTER TABLE `Reddevilmanish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adityacule`
--
ALTER TABLE `adityacule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Anishcule`
--
ALTER TABLE `Anishcule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `anuragironside`
--
ALTER TABLE `anuragironside`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `bimochan`
--
ALTER TABLE `bimochan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `leaderboard`
--
ALTER TABLE `leaderboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `Reddevilmanish`
--
ALTER TABLE `Reddevilmanish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
