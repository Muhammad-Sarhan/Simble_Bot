-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 10:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `massages_bot`
--

CREATE TABLE `massages_bot` (
  `id` int(11) NOT NULL,
  `mass` varchar(255) NOT NULL,
  `mass_sender` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `massages_bot`
--

INSERT INTO `massages_bot` (`id`, `mass`, `mass_sender`, `mail`, `id_user`) VALUES
(36, 'Mr', 'HELLO', 'NULL', 0),
(37, 'Mr', 'HELLO', 'NULL', 0),
(38, 'Mr', 'HELLO', 'NULL', 0),
(39, 'Hamed', 'Mr Dark', 'NULL', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `image`) VALUES
(28, 'Hamed', 'Hamed@gmail.com', '76f0e811d7a8ba9388bfecaeae2b7940', 'user', 'androidchrome192x192.png'),
(29, 'Black Crow', 'Hamed1@gmail.com', 'd251ccf7acde85b6e04542874ec656c0', 'user', 'OIP (1).jpeg'),
(30, 'Dark', 'Dark1233#@Hamed.com', '412855486f41ba608531342879600d16', 'admin', '2-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `users_sessions`
--

CREATE TABLE `users_sessions` (
  `id` int(11) NOT NULL,
  `State` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_sessions`
--

INSERT INTO `users_sessions` (`id`, `State`, `username`, `pass`, `Email`) VALUES
(1, 'Active', 'TEST', '123', 'TEST@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `massages_bot`
--
ALTER TABLE `massages_bot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_sessions`
--
ALTER TABLE `users_sessions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `massages_bot`
--
ALTER TABLE `massages_bot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users_sessions`
--
ALTER TABLE `users_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
