-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 04:47 PM
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
  `greeting_id` int(11) NOT NULL,
  `greeting_color` varchar(7) NOT NULL,
  `custom_greeting` varchar(600) NOT NULL,
  `message_color` varchar(7) NOT NULL,
  `bg_image` varchar(600) DEFAULT NULL,
  `bg_color` varchar(7) DEFAULT NULL,
  `url` varchar(600) DEFAULT NULL,
  `card_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ecard`
--

INSERT INTO `ecard` (`card_id`, `user_id`, `greeting_id`, `greeting_color`, `custom_greeting`, `message_color`, `bg_image`, `bg_color`, `url`, `card_name`) VALUES
(36, 36, 2, '#9b2222', 'blaahlkj;k;alkjd;lfkja;lkj;lkjdf', '#d71d1d', 'http://localhost/6.11.2020/e-card-generator/img/white-network-jj-ying-unsplash.jpg', 'none', 'http://localhost/6.11.2020/e-card-generator/card-viewer.php?card=5eea932f5e097', 'Lucy\'s Birthday'),
(42, 36, 3, '#9b2222', 'blaahlkj;k;alkjd;lfkja;lkj;lkjdf', '#d71d1d', 'http://localhost/6.11.2020/e-card-generator/img/white-network-jj-ying-unsplash.jpg', 'none', 'http://localhost/6.11.2020/e-card-generator/card-viewer.php?card=5eeaa7ffc61fc', 'Lucy'),
(46, 36, 2, '#066026', 'hope you feel better soon!', '#082e00', 'http://localhost/6.11.2020/e-card-generator/img/white-splash-henry-co-unsplash.jpg', 'none', 'http://localhost/6.11.2020/e-card-generator/card-viewer.php?card=5eeaaca7bb6ad', 'Untitled5eeaaca7bb6a'),
(47, 36, 4, '#e52e2e', 'hope you feel better soon!', '#6e0202', 'http://localhost/6.11.2020/e-card-generator/img/white-network-jj-ying-unsplash.jpg', 'none', 'http://localhost/6.11.2020/e-card-generator/card-viewer.php?card=5eeacc2673ab6', 'Untitled5eeacc2673aa'),
(48, 37, 2, '#000000', '', '#000000', 'none', 'none', 'http://localhost/6.11.2020/e-card-generator/card-viewer.php?card=5eead884c0003', 'Untitled5eead884bfd1'),
(49, 37, 2, '#000000', 'Hope you feel better soon!', '#000000', 'none', '#ffffff', 'http://localhost/6.11.2020/e-card-generator/card-viewer.php?card=5eeada38cbf79', 'Feel Better Card'),
(50, 38, 2, '#ae1e1e', 'why is this stuff glitching???', '#610000', 'http://localhost/6.11.2020/e-card-generator/img/feathers-evie-s-unsplash.jpg', 'none', 'http://localhost/6.11.2020/e-card-generator/card-viewer.php?card=5eeaf1ec3b11e', 'Testing'),
(52, 38, 4, '#000000', 'Please work!', '#000000', 'http://localhost/6.11.2020/e-card-generator/img/white-network-jj-ying-unsplash.jpg', 'none', 'http://localhost/6.11.2020/e-card-generator/card-viewer.php?card=5eeaf582decbd', 'Here we go again'),
(53, 38, 5, '#612323', 'coolness', '#b23434', 'none', '#b70606', 'http://localhost/6.11.2020/e-card-generator/card-viewer.php?card=5eeaf65588fed', 'ugly card');

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
(5, 'Happy Anniversary!');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `template_id` int(11) NOT NULL,
  `greeting_id` int(11) NOT NULL,
  `greeting_color` varchar(7) NOT NULL,
  `custom_greeting` varchar(600) NOT NULL,
  `message_color` varchar(7) NOT NULL,
  `bg_image` varchar(600) DEFAULT NULL,
  `bg_color` varchar(7) DEFAULT NULL,
  `template_url` varchar(600) NOT NULL
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
(3, 'templateMaker', 'Template', 'Maker', 'admin@templateMaker.com', 'password'),
(36, 'lricardo', 'Lucy', 'Ricardo', 'lucy@ricardo.com', '78b9f986b7d8241e7800b7278e75258a17a0fe58d324fa1cf936d998916c1fc8db24350ef0fd380985c3aea8ded7cafbc637baad88b5ea0b65a7eff221bc47a8'),
(37, 'rricardo', 'Ricky', 'Ricardo', 'ricky@ricardo.com', 'af9512eb8c2d39bc22ad5040890b2099d0c49553056d1ed597355d01da259a964da1ea742f2df792e3c143ccb009cb14465591c9d32a97de973f8a513547c613'),
(38, 'opilipchuk', 'Oleg', 'Pilipchuk', 'pilipchukoleg@gmail.com', '0512b035ee7b9b9fd95dd2e7a2b7a6a80edcace540e770ce5b096e3be15d194cae8f44c9d6ff6f0166ae734f8e75582cfb363cb227858881208d86b47ae2eff5'),
(39, 'rpetrie', 'Rob', 'Petrie', 'rob@petrie.com', '9161edeaaca6415e49c5fbd435530cb4033ccb28c0129c3a4bdd9e62d72ee4402852ad7d14d26a8d0af13deed12839e58999a1672238a8639519988540f16975');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ecard`
--
ALTER TABLE `ecard`
  ADD PRIMARY KEY (`card_id`),
  ADD UNIQUE KEY `card_name` (`card_name`),
  ADD UNIQUE KEY `url` (`url`),
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
  ADD UNIQUE KEY `template_url` (`template_url`),
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
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
