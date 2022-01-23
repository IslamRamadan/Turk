-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 23, 2022 at 07:10 AM
-- Server version: 10.2.40-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bluezo11_carbon`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` int(11) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `job_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'carbon', 'bazar.alkuwait@gmail.com', 1, NULL, '$2y$10$QTM.k94404dKoTOI.zWFBeikoOAxHr2RSJBf3uz4R2RCKAzXLLDG.', 'bMz1EAYTm3obKULvTSdRfNXTWYUSuQEnnBE2bPV7cE3No7rLCXWfguMaPCOJ', '2020-05-19 14:45:57', '2022-01-23 20:24:55'),
(12, 'easyshop', 'info@easyshop-qa.com', 1, NULL, '$2y$10$SuJ4PFPsPpRQ3w3Io1mLc.YgIcfcuqqJ.KXLa2/LYu29lcageWO6y', 'MTVBvW3BMPMW1scNd9Evtp1fKWT7rVjtFK35sz9d4n9PWXEPgymeiK5ZeU40', '2021-01-30 15:01:40', '2021-06-21 00:03:04'),
(0, 'islam', 'i@gmail.com', 1, NULL, '$2y$10$xn4eWvX.2MQTh.cymIX4reMbNVysexu3q/rpMRCeii3vBG1/w3Yri', NULL, NULL, '2022-01-24 02:10:07'),
(0, 'islam', 'i@gmail.com', 1, NULL, '$2y$10$xn4eWvX.2MQTh.cymIX4reMbNVysexu3q/rpMRCeii3vBG1/w3Yri', NULL, NULL, '2022-01-24 02:10:07'),
(0, 'dd', 'dd@gmail.com', 1, NULL, '$2y$10$xn4eWvX.2MQTh.cymIX4reMbNVysexu3q/rpMRCeii3vBG1/w3Yri', NULL, NULL, '2022-01-24 02:10:07'),
(0, 'dd', 'dd@gmail.com', 1, NULL, '$2y$10$xn4eWvX.2MQTh.cymIX4reMbNVysexu3q/rpMRCeii3vBG1/w3Yri', NULL, NULL, '2022-01-24 02:10:07'),
(0, 'Ahmed', 'eslam.iniesta@gmail.com', 1, NULL, '$2y$10$xn4eWvX.2MQTh.cymIX4reMbNVysexu3q/rpMRCeii3vBG1/w3Yri', NULL, '2021-07-27 13:14:56', '2022-01-24 02:10:07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
