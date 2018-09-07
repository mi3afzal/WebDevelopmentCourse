-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 07, 2018 at 07:20 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-class`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `status` enum('pending','completed') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task`, `status`) VALUES
(1, 'build database schema', 'completed'),
(5, 'a way to insert task into database', 'completed'),
(6, 'get list of tasks and show them to user', 'completed'),
(8, 'allow user to mark a task as completed', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`) VALUES
(1, 'Ali', 'Mumtaz', 'ali_mumtaz@gmail.com'),
(2, 'Muhammad Irfan', 'Afzal', 'irfan@gmail.com'),
(4, 'Usman 2', 'Afzal', 'usman@gmail.com'),
(5, 'Stefan', 'Mumtaz', 'Stefan@gmail.com'),
(6, 'Stefan', 'Mumtaz', 'Stefan@gmail.com'),
(7, 'Stefan', 'Mumtaz', 'Stefan@gmail.com'),
(8, 'Stefan', 'Mumtaz', 'Stefan@gmail.com'),
(9, 'Stefan', 'Mumtaz', 'Stefan@gmail.com'),
(10, 'Muhammad Irfan', 'Afzal', 'mi4afzal@gmail.com'),
(11, 'Muhammad Irfan', 'Afzal', 'mi44afzal@gmail.com'),
(12, 'Muhammad Irfan', 'Afzal', 'mi44afzal@gmail.com'),
(13, 'Muhammad Irfan', 'Afzal', 'mi44afzal@gmail.com'),
(14, 'Muhammad Irfan', 'Afzal', 'mi44afzal@gmail.com'),
(15, 'Muhammad Irfan 2', 'Afzal 2', 'mi442afzal@gmail.com'),
(16, 'Muhammad Irfan 2', 'Afzal 2', 'mi442afzal@gmail.com'),
(17, 'Muhammad Irfan 2', 'Afzal 2', 'mi442afzal@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
