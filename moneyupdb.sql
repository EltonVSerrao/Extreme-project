-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2017 at 01:25 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moneyupdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `tip_id` int(11) NOT NULL,
  `tip_title` varchar(255) NOT NULL,
  `tip_content` varchar(255) NOT NULL,
  `tip_accepted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`tip_id`, `tip_title`, `tip_content`, `tip_accepted`) VALUES
(7, 'Text', 'Text', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tip_category`
--

CREATE TABLE `tip_category` (
  `tip_category_id` int(11) NOT NULL,
  `tip_category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_joindate` datetime NOT NULL,
  `user_lastlogin` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_permissions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `uid` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `permissions` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`uid`, `username`, `email`, `password`, `name`, `permissions`) VALUES
(2, 'William', 'william@gmail.com', 'e3d13a22d164db55758b1f0566cd93c63cfb12cb8c79590e585ca6b01396a480', 'William', 2),
(3, 'Elton', 'eltonvs@gmail.com', '5121e4960a1d0152761141c907ae0ad8c4fa61773c158307d381f7f79c2de1a5', 'Elton', 1),
(4, 'Collin', 'collinxwijnnobel@gmail.com', '8b807aa0505a00b3ef49e26a2ade8e31fcd6c700d1a3aeee971b49d73da8e8ff', 'Collin', 1),
(5, 'Kishan', 'kishan@gmail.com', '64cfdb6578566d1e638b43d6ec4d5ede5da5db75b85589548251e45f641796c3', 'Kishan', 1),
(7, 'test', 'test@test.nl', 'ecd71870d1963316a97e3ac3408c9835ad8cf0f3c1bc703527c30265534f75ae', 'test', 1),
(10, 'JanTest', 'Jantest@lijf.be', '2e0e339c8d5f9772c21a9111e1269ec004e9d93fa9cdde48c654b59033f20bb5', 'Jantje Tester', 1),
(11, 'FoxyBoy', 'tijnvdsluis@gmail.com', '056c9d26b3903afdad9bc0086d0cd7b5d4982caa95935f66f1b7a5320e2c842f', 'Tijn van der Sluis', 1),
(12, 'Jantesty', '1024429@idcollege.nl', 'ecd71870d1963316a97e3ac3408c9835ad8cf0f3c1bc703527c30265534f75ae', 'Jantje', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`tip_id`);

--
-- Indexes for table `tip_category`
--
ALTER TABLE `tip_category`
  ADD PRIMARY KEY (`tip_category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `tip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tip_category`
--
ALTER TABLE `tip_category`
  MODIFY `tip_category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
