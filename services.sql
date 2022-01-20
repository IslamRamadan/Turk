-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 07:20 PM
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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `content_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section1_en` text COLLATE utf8mb4_unicode_ci,
  `section1_ar` text COLLATE utf8mb4_unicode_ci,
  `section2_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section2_title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section2_content_en` text COLLATE utf8mb4_unicode_ci,
  `section2_content_ar` text COLLATE utf8mb4_unicode_ci,
  `section2_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `created_at`, `updated_at`, `name_en`, `name_ar`, `title_en`, `title_ar`, `type`, `content_en`, `content_ar`, `img`, `background_img`, `section1_en`, `section1_ar`, `section2_title_en`, `section2_title_ar`, `section2_content_en`, `section2_content_ar`, `section2_img`) VALUES
(85, '2022-01-18 15:58:42', '2022-01-19 18:22:57', 'General Equipment cleaning1', 'تنظيف المعدات العامة1', 'cleaner working equipment 1', 'معدات عمل أنظف 1', 0, 'Dry ice cleaning cleans all kinds of production and auxiliary equipment without damaging the surfaces, without creating secondary waste, and without harming the employees and the environment.1', 'ينظف التنظيف بالثلج الجاف جميع أنواع الإنتاج والمعدات المساعدة دون الإضرار بالأسطح ، دون ا1', 'uploads/services/images/16426129765164.webp', 'uploads/services/images/164261297622827.webp', '<h2>RELATED AREAS OF USAGE:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>Degreasing equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>electric motors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Conveyors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Hydraulic parts and equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>cooling fans</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n	<li>1</li>\r\n</ul>', '<h2>مجالات الاستخدام ذات الصلة:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>معدات إزالة الشحوم</h3>\r\n	</li>\r\n	<li>\r\n	<h3>محركات كهربائية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الناقلون</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الأجزاء والمعدات الهيدروليكية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>مراوح التبريد</h3>\r\n	</li>\r\n	<li>\r\n	<h3>لوحات التحكم</h3>\r\n	</li>\r\n	<li>مركبات النقل البلدية</li>\r\n	<li>1</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'DRY ICE CLEANING BENEFITS:1', 'فوائد التنظيف بالجليد الجاف:1', 'With dry ice cleaning, you not only clean, you also improve your production operations.1', 'مع التنظيف بالثلج الجاف ، لا تقوم بالتنظيف فحسب ، بل تقوم أيضًا بتحسين عمليات الإنتاج الخاصة بك.1', 'uploads/services/images/164261297638628.webp'),
(86, '2022-01-18 16:01:35', '2022-01-19 18:23:28', 'General Equipment cleaning', 'تنظيف المعدات العامة', 'cleaner working equipment', 'معدات عمل أنظف', 0, 'Dry ice cleaning cleans all kinds of production and auxiliary equipment without damaging the surfaces, without creating secondary waste, and without harming the employees and the environment.', 'ينظف التنظيف بالثلج الجاف جميع أنواع الإنتاج والمعدات المساعدة دون الإضرار بالأسطح ، دون ا', 'uploads/services/images/16426130079693.webp', 'uploads/services/images/164261300780727.webp', '<h2>RELATED AREAS OF USAGE:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>Degreasing equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>electric motors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Conveyors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Hydraulic parts and equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>cooling fans</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n</ul>', '<h2>مجالات الاستخدام ذات الصلة:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>معدات إزالة الشحوم</h3>\r\n	</li>\r\n	<li>\r\n	<h3>محركات كهربائية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الناقلون</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الأجزاء والمعدات الهيدروليكية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>مراوح التبريد</h3>\r\n	</li>\r\n	<li>\r\n	<h3>لوحات التحكم</h3>\r\n	</li>\r\n	<li>مركبات النقل البلدية</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'DRY ICE CLEANING BENEFITS:', 'فوائد التنظيف بالجليد الجاف:', 'With dry ice cleaning, you not only clean, you also improve your production operations.', 'مع التنظيف بالثلج الجاف ، لا تقوم بالتنظيف فحسب ، بل تقوم أيضًا بتحسين عمليات الإنتاج الخاصة بك.', 'uploads/services/images/164261300836428.webp'),
(87, '2022-01-18 16:21:51', '2022-01-19 18:24:23', 'General Equipment cleaning', 'تنظيف المعدات العامة', 'cleaner working equipment', 'معدات عمل أنظف', 0, 'Dry ice cleaning cleans all kinds of production and auxiliary equipment without damaging the surfaces, without creating secondary waste, and without harming the employees and the environment.', 'ينظف التنظيف بالثلج الجاف جميع أنواع الإنتاج والمعدات المساعدة دون الإضرار بالأسطح ، دون ا', 'uploads/services/images/16426130622362.webp', 'uploads/services/images/164261306287627.webp', '<h2>RELATED AREAS OF USAGE:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>Degreasing equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>electric motors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Conveyors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Hydraulic parts and equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>cooling fans</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n</ul>', '<h2>مجالات الاستخدام ذات الصلة:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>معدات إزالة الشحوم</h3>\r\n	</li>\r\n	<li>\r\n	<h3>محركات كهربائية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الناقلون</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الأجزاء والمعدات الهيدروليكية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>مراوح التبريد</h3>\r\n	</li>\r\n	<li>\r\n	<h3>لوحات التحكم</h3>\r\n	</li>\r\n	<li>مركبات النقل البلدية</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'DRY ICE CLEANING BENEFITS:', 'فوائد التنظيف بالجليد الجاف:', 'With dry ice cleaning, you not only clean, you also improve your production operations.', 'مع التنظيف بالثلج الجاف ، لا تقوم بالتنظيف فحسب ، بل تقوم أيضًا بتحسين عمليات الإنتاج الخاصة بك.', 'uploads/services/images/164261306238328.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
