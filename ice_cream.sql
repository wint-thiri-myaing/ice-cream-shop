-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 22, 2020 at 08:31 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ice_cream`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(9) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pic_location` varchar(30) NOT NULL,
  `price` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `pic_location`, `price`) VALUES
(1, 'Waffle Bowl ', '/img/waffle-bowl.png', 12),
(2, 'Hot Fudge Brownie ', '/img/hot-fudge-brownie.png', 4),
(3, 'Peanut Butter Cup', '/img/peanut-butter-cup.png', 5),
(4, 'Banana Split', '/img/banana-split.png', 7),
(5, 'Strawberry Shortcake', '/img/strawberry-short-cake.png', 10),
(6, 'Apple Dumpling', '/img/apple-dumpling.png ', 8);

-- --------------------------------------------------------

--
-- Table structure for table `save_mail`
--

CREATE TABLE `save_mail` (
  `id` int(9) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `save_mail`
--

INSERT INTO `save_mail` (`id`, `name`, `mail`, `msg`) VALUES
(1, 'nn', 'nn@gmail.com', 'Hello nn'),
(2, 'hanna', 'hyi@gmil.com', 'hanna'),
(3, 'U aung', 'aa@gmail.com', 'gmf'),
(4, 'maymay', 'popo@gmail.com', 'fdd'),
(5, 'kst', 'kst@gmail.com', ''),
(6, 'maymay', 'popo@gmail.com', 'kjhgfdsakjhgf'),
(8, 'than', 'than@gmail.com', 'Hi Than'),
(9, 'adf', 'aa@gmail.com', 'zsvdh'),
(10, 'adf', 'aa@gmail.com', 'zsvdh'),
(11, 'naing', 'aa@gmail.com', 'bn,mnvbc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_mail`
--
ALTER TABLE `save_mail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `save_mail`
--
ALTER TABLE `save_mail`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
