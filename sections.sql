-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 01:43 PM
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
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title1_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name1_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name1_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content1_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content1_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content2_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content2_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name3_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name3_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content3_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content3_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_content_en` text COLLATE utf8mb4_unicode_ci,
  `last_content_ar` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_content_ar` text COLLATE utf8mb4_unicode_ci,
  `contact_content_en` text COLLATE utf8mb4_unicode_ci,
  `qoute1_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qoute1_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qoute2_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qoute2_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product1_name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product1_name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product1_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product1_title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product1_content_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product1_content_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products_title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posts_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posts_title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contacts_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contacts_title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `blog_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `title1_ar`, `title1_en`, `name1_ar`, `name1_en`, `content1_ar`, `content1_en`, `title2_en`, `title2_ar`, `content2_ar`, `content2_en`, `title3_ar`, `title3_en`, `name3_ar`, `name3_en`, `content3_ar`, `content3_en`, `last_name_ar`, `last_name_en`, `last_title_en`, `last_title_ar`, `last_content_en`, `last_content_ar`, `img`, `contact_name_ar`, `contact_name_en`, `contact_content_ar`, `contact_content_en`, `qoute1_ar`, `qoute1_en`, `qoute2_ar`, `qoute2_en`, `product1_name_en`, `product1_name_ar`, `product1_title_en`, `product1_title_ar`, `product1_content_en`, `product1_content_ar`, `products_title_en`, `products_title_ar`, `posts_title_en`, `posts_title_ar`, `about_title_en`, `about_title_ar`, `contacts_title_en`, `contacts_title_ar`, `description_en`, `blog_title_en`, `blog_title_ar`, `created_at`, `updated_at`) VALUES
(1, 'تكنولوجيا الثلج الجاف', 'DRY ICE TECHNOLOGIES:', 'نحن نقدم حلول خاصة', 'we produce special solutions', 'كربون؛ يلبي احتياجات خدمة تنظيف الثلج الجاف والجليد الجاف في الوقت المحدد ويوفر لك ووقت عملك.', 'Carbon; meets your dry ice and dry ice cleaning service needs on time and saves you and your business time.', 'To Your Business', 'من اجل عملك', 'نحن نقدم حلول خاصة', 'we produce special solutions', 'منتجات وخدمات الجليد الجاف:', 'DRY ICE PRODUCTS AND SERVICES:', 'نظام تنظيف سريع وصديق للبيئة', 'An environmentally friendly and fast cleaning system', 'التنظيف بالثلج الجاف هو نظام التنظيف اليوم وغدًا. هذا النظام ، الذي لا يضر بالبيئة والطبيعة ، يضيف قيمة الوقت والربح لعملك.', 'Dry ice cleaning is the cleaning system of today and tomorrow. This system, which is not harmful to the environment and nature, adds time and profit value to your business.', 'نحن نخدم تركيا كلها', 'We serve all of Turkey', 'OUR DRY ICE SERVICE AND SUPPLY CHANNELS:', 'قنوات التوريد وخدمة الثلج الجاف لدينا:', 'It is important for us to provide solutions to the needs of our customers. We carry quality and service all over our country. We aim for faster solutions for you.', 'من المهم بالنسبة لنا تقديم حلول لاحتياجات عملائنا. نحمل الجودة والخدمة في جميع أنحاء بلدنا. نحن نهدف إلى حلول أسرع لك.', 'uploads/sections/images//164307159410117.webp', 'contact_name_ar', 'contact_name_en', 'contact_content_ar', 'contact_content_en', 'qoute1_ar', 'qoute1_en', 'qoute2_ar', 'qoute2_en', 'product1_name_en', 'product1_name_ar', 'product1_title_en', 'product1_title_ar', 'product1_content_en', 'product1_content_ar', 'products_title_en', 'products_title_ar', 'posts_title_en', 'posts_title_ar', 'about_title_en', 'about_title_ar', 'contacts_title_en', 'contacts_title_ar', NULL, NULL, NULL, '2022-01-25 00:50:19', '2022-01-25 01:46:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
