-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 25, 2019 at 11:33 PM
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
-- Table structure for table `anuragironside`
--

CREATE TABLE `anuragironside` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `reg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anuragironside`
--

INSERT INTO `anuragironside` (`id`, `name`, `position`, `price`, `points`, `availability`, `reg`) VALUES
(264, 'Antonio Rudiger', 'DEF', 8, 5, 'A/V', 1),
(266, 'Sergio Ramos', 'DEF', 2, 8, 'A/V', 0),
(267, 'Harry Kane', 'FWD', 10, 0, 'A/V', 0),
(269, 'Sadio Mane', 'MID', 9, 0, 'A/V', 1),
(270, 'David Luiz', 'DEF', 2, 12, 'A/V', 1),
(272, 'Pukki', 'FWD', 9, 0, 'A/V', 1),
(273, 'Jorginho', 'MID', 8, 0, 'A/V', 1),
(274, 'Tammy Abraham', 'FWD', 9, 0, 'A/V', 1),
(277, 'Thiabut Courtouis', 'GK', 1, 3, 'A/V', 1),
(278, 'Oliver Giroud', 'FWD', 5, 0, 'A/V', 1),
(279, 'Nemanja Vidic', 'DEF', 8, 0, 'A/V', 1),
(280, 'Fabinho', 'MID', 7, 0, 'A/V', 0),
(281, 'Rio Ferdinand', 'DEF', 9, 3, 'A/V', 1),
(282, 'Branaslav Ivanovic', 'DEF', 9, -3, 'A/V', 0);

-- --------------------------------------------------------

--
-- Table structure for table `arpit`
--

CREATE TABLE `arpit` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `reg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `arpit`
--

INSERT INTO `arpit` (`id`, `name`, `position`, `price`, `points`, `availability`, `reg`) VALUES
(1, 'David Luiz', 'DEF', 2, 12, 'A/V', 1),
(2, 'Antonio Rudiger', 'DEF', 8, 5, 'A/V', 1),
(3, 'Mason Mount', 'FWD', 13, 6, 'A/V', 1),
(4, 'Rio Ferdinand', 'DEF', 9, 0, 'A/V', 1),
(5, 'Vincent Kompany', 'DEF', 10, 0, 'A/V', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctony`
--

CREATE TABLE `doctony` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `reg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctony`
--

INSERT INTO `doctony` (`id`, `name`, `position`, `price`, `points`, `availability`, `reg`) VALUES
(1, 'Iker Cassilas', 'GK', 6, 30, 'A/V', 0),
(2, 'Antonio Rudiger', 'DEF', 8, 8, 'A/V', 1),
(3, 'David Luiz', 'DEF', 2, 12, 'A/V', 1),
(5, 'Sergio Ramos', 'DEF', 2, 8, 'A/V', 1),
(6, 'Ramires', 'MID', 12, 0, 'A/V', 1),
(7, 'Mesut Ozil', 'MID', 10, 0, 'A/V', 1),
(8, 'Ngolo Kante', 'MID', 10, 0, 'A/V', 1),
(9, 'Kelvin Mirallas', 'MID', 10, 0, 'A/V', 1),
(10, 'Tammy Abraham', 'FWD', 9, 0, 'A/V', 1),
(11, 'Oliver Giroud', 'FWD', 5, 0, 'A/V', 1),
(12, 'Clint Dempsey', 'FWD', 10, 3, 'A/V', 1),
(13, 'Fabinho', 'MID', 7, 0, 'A/V', 0),
(14, 'Pukki', 'FWD', 9, 0, 'A/V', 1);

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
(25, 'anuragironside', 23),
(29, 'arpit', 23),
(30, 'nihard', 39),
(31, 'doctony', 31),
(32, 'manish', 30);

-- --------------------------------------------------------

--
-- Table structure for table `manish`
--

CREATE TABLE `manish` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `reg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manish`
--

INSERT INTO `manish` (`id`, `name`, `position`, `price`, `points`, `availability`, `reg`) VALUES
(1, 'Iker Cassilas', 'GK', 6, 30, 'A/V', 1),
(3, 'Mason Mount', 'FWD', 13, 6, 'A/V', 0),
(4, 'Antonio Rudiger', 'DEF', 8, 8, 'A/V', 0),
(5, 'David Luiz', 'DEF', 2, 12, 'A/V', 0),
(7, 'Vincent Kompany', 'DEF', 10, 0, 'A/V', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news` text NOT NULL,
  `postedby` varchar(255) NOT NULL,
  `likecount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `postedby`, `likecount`) VALUES
(4, 'Mason Mount scores 500th goal for chelsea at age of 27. He is a scary myth, Simply a legend!', 'anuragironside', 30),
(16, 'post', 'anuragironside', 0),
(17, 'Hi! I am new to this app guys.. Anyone cares to explain about this one?\r\n', 'doctony', 20);

-- --------------------------------------------------------

--
-- Table structure for table `nihard`
--

CREATE TABLE `nihard` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `reg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nihard`
--

INSERT INTO `nihard` (`id`, `name`, `position`, `price`, `points`, `availability`, `reg`) VALUES
(1, 'Sergio Ramos', 'DEF', 2, 8, 'A/V', 1),
(3, 'David Luiz', 'DEF', 2, 12, 'A/V', 1),
(4, 'Mason Mount', 'FWD', 13, 6, 'A/V', 1),
(5, 'Hugo Lloris', 'GK', 7, 13, 'A/V', 1),
(6, 'Branaslav Ivanovic', 'DEF', 9, 0, 'A/V', 0),
(8, 'Pukki', 'FWD', 9, 0, 'A/V', 0),
(9, 'Tammy Abraham', 'FWD', 9, 0, 'A/V', 0);

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
(17, 'Iker Cassilas', 'GK', '6', 30, 'A/V'),
(18, 'Hugo Lloris', 'GK', '7', 13, 'A/V'),
(25, 'Mason Mount', 'FWD', '13', 6, 'A/V'),
(28, 'Antonio Rudiger', 'DEF', '8', 8, 'N/A'),
(29, 'David Luiz', 'DEF', '2', 12, 'N/A'),
(30, 'Thiabut Courtouis', 'GK', '1', 3, 'A/V'),
(32, 'Sergio Ramos', 'DEF', '2', 8, 'N/A'),
(33, 'Vincent Kompany', 'DEF', '10', 0, 'A/V'),
(34, 'Rio Ferdinand', 'DEF', '9', 3, 'A/V'),
(35, 'Branaslav Ivanovic', 'DEF', '9', -3, 'A/V'),
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
(55, 'Nemanja Vidic', 'DEF', '8', 0, 'A/V'),
(56, 'Tomori', 'DEF', '6', 0, 'A/V'),
(57, 'Nathan Ake', 'DEF', '5', 0, 'A/V'),
(58, 'Juan Mata', 'MID', '6', 0, 'A/V'),
(59, 'Hueng min Son', 'FWD', '7', 0, 'A/V'),
(60, 'Lucas Moura', 'MID', '7', 0, 'A/V');

-- --------------------------------------------------------

--
-- Table structure for table `root`
--

CREATE TABLE `root` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `reg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, 'admin admin', 'admin', 'admin', 'image/admin.jpg', 1),
(13, 'Arpit Raj Satyal', 'arpit', 'satyal', 'image/52977695_1595811043895647_3396099442028314624_o.jpg', 0),
(14, 'Nihard Bhattrai', 'nihard', 'bhattrai', 'image/67702257_2485486205053985_4800749714293129216_o.jpg', 0),
(15, 'Tony Tony Chopper', 'doctony', 'rasengan', 'image/tony.png', 0),
(16, 'manish kharel', 'manish', '123456', 'image/Screen Shot 2019-12-24 at 5.42.33 PM.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anuragironside`
--
ALTER TABLE `anuragironside`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arpit`
--
ALTER TABLE `arpit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctony`
--
ALTER TABLE `doctony`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaderboard`
--
ALTER TABLE `leaderboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manish`
--
ALTER TABLE `manish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nihard`
--
ALTER TABLE `nihard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `root`
--
ALTER TABLE `root`
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
-- AUTO_INCREMENT for table `anuragironside`
--
ALTER TABLE `anuragironside`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT for table `arpit`
--
ALTER TABLE `arpit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctony`
--
ALTER TABLE `doctony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `leaderboard`
--
ALTER TABLE `leaderboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `manish`
--
ALTER TABLE `manish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `nihard`
--
ALTER TABLE `nihard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `root`
--
ALTER TABLE `root`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
