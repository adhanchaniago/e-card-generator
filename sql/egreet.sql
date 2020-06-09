-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 05:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egreet`
--

-- --------------------------------------------------------

--
-- Table structure for table `ecard`
--

CREATE TABLE `ecard` (
  `card_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `card_name` text NOT NULL,
  `greeting_id` int(11) NOT NULL,
  `greeting_color` varchar(6) NOT NULL,
  `custom_greeting` text NOT NULL,
  `message_color` varchar(6) NOT NULL,
  `bg_image` text NOT NULL,
  `bg_color` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `greeting`
--

CREATE TABLE `greeting` (
  `greeting_id` int(11) NOT NULL,
  `greeting_option` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `greeting`
--

INSERT INTO `greeting` (`greeting_id`, `greeting_option`) VALUES
(1, 'Happy Birthday!'),
(2, 'Get Well'),
(3, 'Thinking of You'),
(4, 'Thank You!'),
(5, 'Shove Off!'),
(6, 'Happy Anniversary!'),
(7, 'Get Bent');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `template_id` int(11) NOT NULL,
  `card_name` text NOT NULL,
  `greeting_id` int(11) NOT NULL,
  `greeting_color` varchar(6) NOT NULL,
  `custom_greeting` text NOT NULL,
  `message_color` varchar(6) NOT NULL,
  `bg_image` text NOT NULL,
  `bg_color` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'drake', 'Allison', 'Drake', 'adrake@test.com', 'password'),
(2, 'chuk', 'Regina', 'Pilipchuk', 'chuk@test.com', 'password'),
(3, 'templateMaker', 'Template', 'Maker', 'admin@templateMaker.com', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ecard`
--
ALTER TABLE `ecard`
  ADD PRIMARY KEY (`card_id`),
  ADD UNIQUE KEY `card_name` (`card_name`) USING HASH,
  ADD KEY `greeting_id` (`greeting_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `greeting`
--
ALTER TABLE `greeting`
  ADD PRIMARY KEY (`greeting_id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`template_id`),
  ADD KEY `template_ibfk_1` (`greeting_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ecard`
--
ALTER TABLE `ecard`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `greeting`
--
ALTER TABLE `greeting`
  MODIFY `greeting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `template_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ecard`
--
ALTER TABLE `ecard`
  ADD CONSTRAINT `ecard_ibfk_1` FOREIGN KEY (`greeting_id`) REFERENCES `greeting` (`greeting_id`),
  ADD CONSTRAINT `ecard_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `template`
--
ALTER TABLE `template`
  ADD CONSTRAINT `template_ibfk_1` FOREIGN KEY (`greeting_id`) REFERENCES `greeting` (`greeting_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
