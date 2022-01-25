-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 01:42 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turk`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_imgs`
--

CREATE TABLE `client_imgs` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `client_imgs`
--

INSERT INTO `client_imgs` (`id`, `img`, `created_at`, `updated_at`) VALUES
(3, 'upload/client/164311148561efe43d38b00.webp', '2022-01-25 12:51:25', '2022-01-25 12:51:25'),
(4, 'upload/client/164311148561efe43d3fd24.webp', '2022-01-25 12:51:25', '2022-01-25 12:51:25'),
(5, 'upload/client/164311148561efe43d4b18a.webp', '2022-01-25 12:51:25', '2022-01-25 12:51:25'),
(6, 'upload/client/164311148561efe43d5f1a6.webp', '2022-01-25 12:51:25', '2022-01-25 12:51:25'),
(7, 'upload/client/164311148561efe43d67d0e.webp', '2022-01-25 12:51:25', '2022-01-25 12:51:25'),
(8, 'upload/client/164311148561efe43d79fad.webp', '2022-01-25 12:51:25', '2022-01-25 12:51:25'),
(9, 'upload/client/164311148561efe43d89a73.webp', '2022-01-25 12:51:25', '2022-01-25 12:51:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_imgs`
--
ALTER TABLE `client_imgs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_imgs`
--
ALTER TABLE `client_imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
