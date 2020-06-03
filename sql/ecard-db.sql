-- Author: Allison Drake
-- version 1.0.0
-- 6/3/2020

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSCATION;
SET time_zone
= "+00:00";

-- Database: `ecards`

-- Table structre for tables `user`
--
CREATE TABLE `user`
(
    `user_id` int
(11) NOT NULL,
    `username` varchar
(20) NOT NULL,
    `first_name` varchar
(20) NOT NULL,
    `last_name` varchar
(20) NOT NULL,
    `email` varchar
(60) NOT NULL,
    `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET = latin1;

-- Data dump for table `user`

INSERT INTO `user`
    (`user_id`,`username
`,`first_name`,`last_name`,`email`,`password`) VALUES
(1, 'drake','Allison', 'Drake', 'adrake@test.com','password'),
(2, 'chuk','Regina','Pilipchuk','chuk@test.com','password'),
(3, 'templateMaker', 'Template', 'Maker', 'admin@templateMaker.com','password');
-- Indexes for table `user`
ALTER TABLE `user`
ADD PRIMARY KEY
(`user_id`),
ADD UNIQUE KEY `username`
(`username`),
ADD UNIQUE KEY `email`
(`email`);

-- AUTO_INCREMENT for table `user`

ALTER TABLE `user`
MODIFY `user_id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

-- Create table and load data for Greeting
CREATE TABLE `greeting`
(
    `greeting_id` int
(11) NOT NULL, `greeting_option` varchar
(60) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- data dump for greeting options into table `greeting`

INSERT INTO `greeting` (`
greeting_id`,`greeting_option
`) VALUES
(1, 'Happy Birthday!'),
(2, 'Get Well'),
(3, 'Thinking of You'),
(4, 'Thank You!'),
(5, 'Shove Off!'),
(6, 'Happy Anniversary!'),
(7, 'Get Bent');

-- make unique key for table `greeting`
ALTER TABLE `greeting`
ADD PRIMARY KEY
(`greeting_id`);

-- auto increment new greetings added
ALTER TABLE `greeting`
MODIFY `greeting_id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

-- create the template_card table
-- greeting color and hex colors will require # at the front of the variable call or insert
CREATE TABLE `ecard`
(
    `card_id` int
(11) NOT NULL, 
`user_id` int
(11) NOT NULL,  `card_name` text NOT NULL, `greeting_id` int
(11)NOT NULL, `greeting_color` varchar
(6)NOT NULL, `custom_greeting` text NOT NULL, `message_color` varchar
(6)NOT NULL, `bg_image` text NOT NULL, `bg_color` varchar
(6)NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `ecard`
ADD PRIMARY KEY
(`card_id`),
ADD UNIQUE KEY `card_name`
(`card_name`);

ALTER TABLE `ecard` MODIFY `card_id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

ALTER TABLE `ecard`
ADD FOREIGN KEY
(greeting_id) REFERENCES `greet








