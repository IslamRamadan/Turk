-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 04:25 PM
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
-- Table structure for table `basic_categories`
--

CREATE TABLE `basic_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(191) NOT NULL,
  `name_en` varchar(191) NOT NULL,
  `title_en` varchar(191) NOT NULL,
  `title_ar` varchar(191) NOT NULL,
  `content_ar` text NOT NULL,
  `content_en` text NOT NULL,
  `img` varchar(191) NOT NULL,
  `background_img` varchar(191) NOT NULL,
  `section1_en` text,
  `section1_ar` text,
  `section2_title_en` varchar(191) DEFAULT NULL,
  `section2_title_ar` varchar(191) DEFAULT NULL,
  `section2_content_ar` varchar(191) DEFAULT NULL,
  `section2_content_en` varchar(191) DEFAULT NULL,
  `section2_img` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_ar`, `name_en`, `title_en`, `title_ar`, `content_ar`, `content_en`, `img`, `background_img`, `section1_en`, `section1_ar`, `section2_title_en`, `section2_title_ar`, `section2_content_ar`, `section2_content_en`, `section2_img`, `created_at`, `updated_at`) VALUES
(3, 'ثلج جاف', 'Dry Ice Cleaning System', 'Dry Ice Technologies1', 'منتجات الثلج الجاف1', 'ينظف التنظيف بالثلج الجاف جميع أنواع الإنتاج والمعدات المساعدة دون الإضرار بالأسطح ، دون التسبب في نفايات ثانوية ، ودون الإضرار بالعاملين والبيئة.', 'Dry ice cleaning cleans all kinds of production and auxiliary equipment without damaging the surfaces, without creating secondary waste, and without harming the employees and the environment.', 'uploads/categories/images/16426338524165.webp', 'uploads/categories/images/164263385280827.webp', '<h2>RELATED AREAS OF USAGE:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>Degreasing equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>electric motors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Conveyors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Hydraulic parts and equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>cooling fans</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n</ul>', '<h2>مجالات الاستخدام ذات الصلة:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>معدات إزالة الشحوم</h3>\r\n	</li>\r\n	<li>\r\n	<h3>محركات كهربائية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الناقلون</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الأجزاء والمعدات الهيدروليكية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>مراوح التبريد</h3>\r\n	</li>\r\n	<li>\r\n	<h3>لوحات التحكم</h3>\r\n	</li>\r\n	<li>مركبات النقل البلدية</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'DRY ICE CLEANING BENEFITS:', 'فوائد التنظيف بالجليد الجاف:', 'مع التنظيف بالثلج الجاف ، لا تقوم بالتنظيف فحسب ، بل تقوم أيضًا بتحسين عمليات الإنتاج الخاصة بك.', 'With dry ice cleaning, you not only clean, you also improve your production operations.', 'uploads/categories/images/164263385382128.webp', '2022-01-20 00:10:54', '2022-01-20 00:10:54'),
(4, 'ثلج جاف', 'Dry Ice Cleaning System', 'Dry Ice Technologies', 'منتجات الثلج الجاف', 'ينظف التنظيف بالثلج الجاف جميع أنواع الإنتاج والمعدات المساعدة دون الإضرار بالأسطح ، دون التسبب في نفايات ثانوية ، ودون الإضرار بالعاملين والبيئة.', 'Dry ice cleaning cleans all kinds of production and auxiliary equipment without damaging the surfaces, without creating secondary waste, and without harming the employees and the environment.', 'uploads/categories/images/16426343944846.webp', 'uploads/categories/images/164263439473127.webp', '<h2>RELATED AREAS OF USAGE:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>Degreasing equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>electric motors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Conveyors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Hydraulic parts and equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>cooling fans</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n</ul>', '<h2>مجالات الاستخدام ذات الصلة:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>معدات إزالة الشحوم</h3>\r\n	</li>\r\n	<li>\r\n	<h3>محركات كهربائية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الناقلون</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الأجزاء والمعدات الهيدروليكية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>مراوح التبريد</h3>\r\n	</li>\r\n	<li>\r\n	<h3>لوحات التحكم</h3>\r\n	</li>\r\n	<li>مركبات النقل البلدية</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'DRY ICE CLEANING BENEFITS:', 'فوائد التنظيف بالجليد الجاف:', 'مع التنظيف بالثلج الجاف ، لا تقوم بالتنظيف فحسب ، بل تقوم أيضًا بتحسين عمليات الإنتاج الخاصة بك.', 'With dry ice cleaning, you not only clean, you also improve your production operations.', 'uploads/categories/images/164263385382128.webp', '2022-01-20 00:19:55', '2022-01-20 00:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories_images`
--

CREATE TABLE `categories_images` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `img` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `categories_images`
--

INSERT INTO `categories_images` (`id`, `category_id`, `img`, `created_at`, `updated_at`) VALUES
(12, 2, 'upload/categories/164263331861e8986653fd4.jpg', '2022-01-20 00:01:58', '2022-01-20 00:01:58'),
(13, 3, 'upload/categories/164263385461e89a7e454b5.jpg', '2022-01-20 00:10:54', '2022-01-20 00:10:54'),
(14, 3, 'upload/categories/164263385461e89a7e874b2.jpg', '2022-01-20 00:10:54', '2022-01-20 00:10:54'),
(15, 4, 'upload/categories/164263439561e89c9b6f279.jpg', '2022-01-20 00:19:55', '2022-01-20 00:19:55'),
(16, 4, 'upload/categories/164263439561e89c9bbad4d.jpg', '2022-01-20 00:19:56', '2022-01-20 00:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `item_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `created_at`, `updated_at`, `name`, `phone`, `email`, `comment`) VALUES
(4, '2021-07-29 22:25:45', '2021-07-29 22:25:45', 'Inez Figueroa', '+1 (269) 30', 'maxode@mailinator.com', 'Placeat sint atque'),
(5, '2021-07-29 22:27:19', '2021-07-29 22:27:19', 'Islam Ramadan', '01100618113', 'eslam.iniesta@gmail.com', 'Islam Ramadan Islam Ramadan Islam Ramadan Islam Ramadan'),
(6, '2021-08-01 15:13:00', '2021-08-01 15:13:00', 'Eagan Brock', '+1 (835) 44', 'nucaquny@mailinator.com', 'Quo blanditiis ut re'),
(7, '2021-08-01 15:13:32', '2021-08-01 15:13:32', 'Eagan Brock', '+1 (835) 44', 'nucaquny@mailinator.com', 'Quo blanditiis ut re'),
(8, '2021-08-01 15:13:43', '2021-08-01 15:13:43', 'Adria Chandler', '+1 (843) 30', 'maranulivo@mailinator.com', 'Distinctio Quia exc'),
(9, '2022-01-20 14:51:03', '2022-01-20 14:51:03', 'احمد', '01100618113', 'eslam.iniestaa@gmail.com', 'ok'),
(10, '2022-01-20 15:06:03', '2022-01-20 15:06:03', 'Deborah', '0325215412', 'xipufa@mailinator.com', 'asjldkm'),
(11, '2022-01-20 15:07:41', '2022-01-20 15:07:41', 'Deborah', '0325215412', 'xipufa@mailinator.com', 'asjldkm');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_05_23_173524_laratrust_setup_tables', 1),
(2, '2020_12_29_173353_create_colors_table', 1),
(3, '2020_12_29_173353_create_notifications_table', 1),
(4, '2020_12_29_173353_create_overs_table', 1),
(5, '2020_12_29_173353_create_sliders_table', 1),
(6, '2020_12_29_173353_create_tokens_table', 1),
(7, '2021_07_27_102501_create_contacts_table', 1),
(8, '2021_07_27_102501_create_services_images_table', 1),
(9, '2021_07_27_102501_create_services_table', 1),
(10, '2021_07_27_102501_create_works_table', 1),
(11, '2021_07_27_102511_create_foreign_keys', 1),
(12, '2021_08_18_031802_create_products_table', 2),
(13, '2021_08_18_120544_create_prod_imgs_table', 2),
(14, '2021_08_15_040324_create_basic_categories_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` int(11) NOT NULL,
  `read` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `overs`
--

CREATE TABLE `overs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `activity` tinyint(4) DEFAULT '1',
  `num` int(11) DEFAULT NULL,
  `img` varchar(400) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `routes` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`, `routes`) VALUES
(1, 'ادارة الاقسام', 'ادارة الاقسام', 'ادارة الاقسام', NULL, NULL, 'categories.index,categories.edit,categories.create,categories.destroy'),
(2, 'ادارة الاقسام الفرعية', 'ادارة الاقسام الفرعية', 'ادارة الاقسام الفرعية', NULL, NULL, 'subCategories.index,subCategories.edit,subCategories.create,subCategories.destroy'),
(3, 'ادارة التصنيفات', 'ادارة التصنيفات', 'ادارة التصنيفات', NULL, NULL, 'subSubCategories.index,subSubCategories.edit,subSubCategories.create,subSubCategories.destroy'),
(4, 'ادارة الماركات', 'ادارة الماركات', 'ادارة الماركات', NULL, NULL, 'brands.index,brands.edit,brands.create,brands.destroy'),
(7, 'ادارة السليدر', 'ادارة السليدر', 'ادارة السليدر', NULL, NULL, 'sliders.index,sliders.edit,sliders.create,sliders.destroy'),
(8, 'ادارة المنتجات', 'ادارة المنتجات', 'ادارة  المنتجات ', NULL, NULL, 'items.index,items.edit,items.create,items.destroy,items.size,galaries.index,galaries.destroy,items.add.size,items.add.color,items.update.color,items.edit.size,items.update.size,items.destroy.size,galaries.store,galaries.destroy'),
(9, 'عرض الطلبات ', 'عرض الطلبات ', 'عرض الطلبات ', NULL, NULL, 'orders.index,order.item'),
(10, 'ادارة حالة الطلب', 'ادارة حالة الطلب', 'ادارة حالة الطلب', NULL, NULL, 'orders.update,order.edit'),
(11, 'حذف الطلبات', 'حذف الطلبات', 'حذف الطلبات', NULL, NULL, 'orders.destroy'),
(12, 'ادارة المشرفين', 'ادارة المشرفين', 'ادارة المشرفين', NULL, NULL, 'users.index,users.edit,users.create,users.destroy'),
(13, 'ادارة الصلاحيات', 'ادارة الصلاحيات', 'ادارة الصلاحيات', NULL, NULL, 'roles.index,roles.edit,roles.create,roles.destroy');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(2, 2),
(3, 1),
(4, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(90) NOT NULL,
  `title_en` varchar(90) NOT NULL,
  `content_ar` text NOT NULL,
  `content_en` text NOT NULL,
  `brief_en` text,
  `brief_ar` text,
  `img` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title_ar`, `title_en`, `content_ar`, `content_en`, `brief_en`, `brief_ar`, `img`, `created_at`, `updated_at`) VALUES
(2, 'صندوق الستايروفومم', 'Styrofoam Box', '<p>الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل.&nbsp;كما أنها تستخدم على نطاق واسع في إنتاج مواد الستايروفوم التي تستخدم لمرة واحدة (أكواب بلاستيكية ، شوك ، ملاعق ، إلخ) المستخدمة لأغراض الحماية.&nbsp;تحتل مكانة مهمة في إنتاج قطع غيار السيارات ومواد الديكور.</p>\r\n\r\n<hr />\r\n<p>بعد إنتاج منتجات مختلفة دون الإضرار بالمستهلك وهي عبارة عن مادة تعبئة توفر الخصائص الفيزيائية ليتم نقلها دون تشويه.&nbsp;لها مجموعة واسعة من الاستخدامات بما في ذلك الآيس كريم والمأكولات البحرية وصناعة الفاكهة والخضروات واللحوم ومنتجات اللحوم ومنتجات الألبان ، حيث إنها مقاومة للضغط والصدمات والسقوط والصدمات وخاصية العزل الحراري والضوء ويمكن تصميمها لكل منها شكل المنتج.</p>\r\n\r\n<p>&nbsp;</p>', '<p>Styrofoam is a class of plastics, the main ingredient of which is crude oil. It is generally used in heat and insulation systems. It is also widely used in the production of styrofoam disposable (plastic cups, forks, spoons, etc.) materials used for protection purposes. It occupies an important place in the production of automotive spare parts and decorative materials.</p>\r\n\r\n<hr />\r\n<p>After the production of different products without damage to the consumer and is a packaging material that provides the physical characteristics to be transmitted without distortion. It has a wide range of uses including ice cream and seafood, fruit and vegetable industry, meat and meat products, dairy products, as it is resistant to pressure, bumps, falls and jolts, heat and light insulation feature and can be designed for each product form.</p>', 'Styrofoam is a class of plastics, the main ingredient of which is crude oil. It is generally used in heat and insulation systems.', 'الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام. يستخدم بشكل عام في أنظمة التدفئة والعزل', 'upload/posts/1642345167.webp', '2022-01-16 15:59:27', '2022-01-19 13:27:56'),
(3, 'صندوق الستايروفومم', 'Styrofoam Box', '<p>الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل&nbsp;الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل&nbsp;الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل&nbsp;&nbsp;الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل&nbsp;الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل</p>', '<p>Styrofoam is a class of plastics, the main ingredient of which is crude oil. It is generally used in heat and insulation systems. It is also widely used in the production of styrofoam disposable (plastic cups, forks, spoons, etc.) materials used for protection purposes. It occupies an important place in the production of automotive spare parts and decorative materials.</p>\r\n\r\n<hr />\r\n<p>After the production of different products without damage to the consumer and is a packaging material that provides the physical characteristics to be transmitted without distortion. It has a wide range of uses including ice cream and seafood, fruit and vegetable industry, meat and meat products, dairy products, as it is resistant to pressure, bumps, falls and jolts, heat and light insulation feature and can be designed for each product form.</p>', 'Styrofoam is a class of plastics, the main ingredient of which is crude oil. It is generally used in heat and insulation systems.', 'الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام. يستخدم بشكل عام في أنظمة التدفئة والعزل', 'upload/posts/1642434212.webp', '2022-01-17 16:43:32', '2022-01-19 13:28:28'),
(4, 'صندوق الستايروفومم', 'Styrofoam Box', '<p>الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل&nbsp;الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل&nbsp;الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل&nbsp;&nbsp;الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل&nbsp;الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل</p>', '<p>Styrofoam is a class of plastics, the main ingredient of which is crude oil. It is generally used in heat and insulation systems. It is also widely used in the production of styrofoam disposable (plastic cups, forks, spoons, etc.) materials used for protection purposes. It occupies an important place in the production of automotive spare parts and decorative materials.</p>\r\n\r\n<hr />\r\n<p>After the production of different products without damage to the consumer and is a packaging material that provides the physical characteristics to be transmitted without distortion. It has a wide range of uses including ice cream and seafood, fruit and vegetable industry, meat and meat products, dairy products, as it is resistant to pressure, bumps, falls and jolts, heat and light insulation feature and can be designed for each product form.</p>', 'Styrofoam is a class of plastics, the main ingredient of which is crude oil. It is generally used in heat and insulation systems.', 'الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام. يستخدم بشكل عام في أنظمة التدفئة والعزل', 'upload/posts/1642434602.webp', '2022-01-17 16:50:02', '2022-01-17 16:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `post_imgs`
--

CREATE TABLE `post_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_imgs`
--

INSERT INTO `post_imgs` (`id`, `description_en`, `description_ar`, `img`, `post_id`, `created_at`, `updated_at`) VALUES
(4, NULL, NULL, 'upload/advertising/164243650361e597977b747.webp', 4, '2022-01-17 17:21:43', '2022-01-17 17:21:43'),
(5, NULL, NULL, 'upload/advertising/164259720561e80b55c5664.webp', 2, '2022-01-19 14:00:07', '2022-01-19 14:00:07'),
(6, NULL, NULL, 'upload/advertising/164259720761e80b5733ffd.webp', 2, '2022-01-19 14:00:07', '2022-01-19 14:00:07'),
(7, NULL, NULL, 'upload/advertising/164259720761e80b574f8d6.webp', 2, '2022-01-19 14:00:07', '2022-01-19 14:00:07'),
(8, NULL, NULL, 'upload/advertising/164259720761e80b576dd50.webp', 2, '2022-01-19 14:00:07', '2022-01-19 14:00:07'),
(9, NULL, NULL, 'upload/advertising/164259723461e80b72a29f5.webp', 3, '2022-01-19 14:00:34', '2022-01-19 14:00:34'),
(10, NULL, NULL, 'upload/advertising/164259723461e80b72bf06a.webp', 3, '2022-01-19 14:00:34', '2022-01-19 14:00:34'),
(11, NULL, NULL, 'upload/advertising/164259723461e80b72d3ed1.webp', 3, '2022-01-19 14:00:34', '2022-01-19 14:00:34'),
(12, NULL, NULL, 'upload/advertising/164259723461e80b72ee410.webp', 3, '2022-01-19 14:00:35', '2022-01-19 14:00:35'),
(13, NULL, NULL, 'upload/advertising/164259726461e80b90c68db.webp', 4, '2022-01-19 14:01:04', '2022-01-19 14:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `appearance` tinyint(1) DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title_en`, `title_ar`, `description_en`, `description_ar`, `appearance`, `img`, `height_img`, `created_at`, `updated_at`) VALUES
(3, 'Olivo Container', 'حاوية أوليفو', '<p>Styrofoam is a class of plastics, the main ingredient of which is crude oil. It is generally used in heat and insulation systems. It is also widely used in the production of styrofoam disposable (plastic cups, forks, spoons, etc.) materials used for protection purposes. It occupies an important place in the production of automotive spare parts and decorative materials.</p>\r\n\r\n<p>After the production of different products without damage to the consumer and is a packaging material that provides the physical characteristics to be transmitted without distortion. It has a wide range of uses including ice cream and seafood, fruit and vegetable industry, meat and meat products, dairy products, as it is resistant to pressure, bumps, falls and jolts, heat and light insulation feature and can be designed for each product form.</p>', '<p>الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل.&nbsp;كما أنها تستخدم على نطاق واسع في إنتاج مواد الستايروفوم التي تستخدم لمرة واحدة (أكواب بلاستيكية ، شوك ، ملاعق ، إلخ) المستخدمة لأغراض الحماية.&nbsp;تحتل مكانة مهمة في إنتاج قطع غيار السيارات ومواد الديكور.</p>\r\n\r\n<p>بعد إنتاج منتجات مختلفة دون الإضرار بالمستهلك وهي عبارة عن مادة تعبئة توفر الخصائص الفيزيائية ليتم نقلها دون تشويه.&nbsp;لها مجموعة واسعة من الاستخدامات بما في ذلك الآيس كريم والمأكولات البحرية وصناعة الفاكهة والخضروات واللحوم ومنتجات اللحوم ومنتجات الألبان ، حيث إنها مقاومة للضغط والصدمات والسقوط والصدمات وخاصية العزل الحراري والضوء ويمكن تصميمها لكل منها شكل المنتج.</p>\r\n\r\n<p>&nbsp;</p>', 1, 'uploads/products/images/16425480798477.webp', NULL, '2022-01-19 00:08:18', '2022-01-19 00:21:20'),
(4, 'Olivo Container', 'حاوية أوليفو', '<p>Styrofoam is a class of plastics, the main ingredient of which is crude oil. It is generally used in heat and insulation systems. It is also widely used in the production of styrofoam disposable (plastic cups, forks, spoons, etc.) materials used for protection purposes. It occupies an important place in the production of automotive spare parts and decorative materials.</p>\r\n\r\n<p>After the production of different products without damage to the consumer and is a packaging material that provides the physical characteristics to be transmitted without distortion. It has a wide range of uses including ice cream and seafood, fruit and vegetable industry, meat and meat products, dairy products, as it is resistant to pressure, bumps, falls and jolts, heat and light insulation feature and can be designed for each product form.</p>', '<p>الستايروفوم هو فئة من البلاستيك ، ومكونه الرئيسي النفط الخام.&nbsp;يستخدم بشكل عام في أنظمة التدفئة والعزل.&nbsp;كما أنها تستخدم على نطاق واسع في إنتاج مواد الستايروفوم التي تستخدم لمرة واحدة (أكواب بلاستيكية ، شوك ، ملاعق ، إلخ) المستخدمة لأغراض الحماية.&nbsp;تحتل مكانة مهمة في إنتاج قطع غيار السيارات ومواد الديكور.</p>\r\n\r\n<p>بعد إنتاج منتجات مختلفة دون الإضرار بالمستهلك وهي عبارة عن مادة تعبئة توفر الخصائص الفيزيائية ليتم نقلها دون تشويه.&nbsp;لها مجموعة واسعة من الاستخدامات بما في ذلك الآيس كريم والمأكولات البحرية وصناعة الفاكهة والخضروات واللحوم ومنتجات اللحوم ومنتجات الألبان ، حيث إنها مقاومة للضغط والصدمات والسقوط والصدمات وخاصية العزل الحراري والضوء ويمكن تصميمها لكل منها شكل المنتج.</p>\r\n\r\n<p>&nbsp;</p>', 1, 'uploads/products/images/16425473594008.webp', NULL, '2022-01-19 00:09:19', '2022-01-19 00:09:19');

-- --------------------------------------------------------

--
-- Table structure for table `prod_imgs`
--

CREATE TABLE `prod_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `description_ar` text COLLATE utf8mb4_unicode_ci,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prod_imgs`
--

INSERT INTO `prod_imgs` (`id`, `img`, `description_en`, `description_ar`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'upload/advertising/164254729861e74862bd5a9.webp', 'Body and cover are made of one piece (monoblock) rotomoulded polyethylene.\r\nBody and cover are made of one piece (monoblock) rotomoulded polyethylene.\r\nBody and cover are made of one piece (monoblock) rotomoulded polyethylene.\r\nBody and cover are made of one piece (monoblock) rotomoulded polyethylene.\r\nBody and cover are made of one piece (monoblock) rotomoulded polyethylene.', 'الجسم والغطاء مصنوعان من قطعة واحدة (قطعة واحدة) من البولي إيثيلين الدوار.\r\nالجسم والغطاء مصنوعان من قطعة واحدة (قطعة واحدة) من البولي إيثيلين الدوار.\r\nالجسم والغطاء مصنوعان من قطعة واحدة (قطعة واحدة) من البولي إيثيلين الدوار.\r\nالجسم والغطاء مصنوعان من قطعة واحدة (قطعة واحدة) من البولي إيثيلين الدوار.', 3, '2022-01-19 00:08:18', '2022-01-19 00:08:18'),
(2, 'upload/advertising/164254735961e7489fb0070.webp', 'Body and cover are made of one piece (monoblock) rotomoulded polyethylene.\r\nBody and cover are made of one piece (monoblock) rotomoulded polyethylene.\r\nBody and cover are made of one piece (monoblock) rotomoulded polyethylene.\r\nBody and cover are made of one piece (monoblock) rotomoulded polyethylene.\r\nBody and cover are made of one piece (monoblock) rotomoulded polyethylene.', 'الجسم والغطاء مصنوعان من قطعة واحدة (قطعة واحدة) من البولي إيثيلين الدوار.\r\nالجسم والغطاء مصنوعان من قطعة واحدة (قطعة واحدة) من البولي إيثيلين الدوار.\r\nالجسم والغطاء مصنوعان من قطعة واحدة (قطعة واحدة) من البولي إيثيلين الدوار.\r\nالجسم والغطاء مصنوعان من قطعة واحدة (قطعة واحدة) من البولي إيثيلين الدوار.', 4, '2022-01-19 00:09:19', '2022-01-19 00:09:19');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'مدير', 'مدير', 'كل الصلاحيات', '2021-01-28 11:47:43', '2021-01-28 11:47:43'),
(2, 'محرر', 'محرر', 'محرر', '2021-01-30 15:02:42', '2021-01-30 15:02:42');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 0, ''),
(2, 1, ''),
(1, 12, '');

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
  `category_id` int(11) NOT NULL,
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

INSERT INTO `services` (`id`, `created_at`, `updated_at`, `name_en`, `name_ar`, `title_en`, `title_ar`, `category_id`, `content_en`, `content_ar`, `img`, `background_img`, `section1_en`, `section1_ar`, `section2_title_en`, `section2_title_ar`, `section2_content_en`, `section2_content_ar`, `section2_img`) VALUES
(85, '2022-01-18 15:58:42', '2022-01-20 12:59:03', 'General Equipment cleaning1', 'تنظيف المعدات العامة1', 'cleaner working equipment 1', 'معدات عمل أنظف 1', 4, 'Dry ice cleaning cleans all kinds of production and auxiliary equipment without damaging the surfaces, without creating secondary waste, and without harming the employees and the environment.1', 'ينظف التنظيف بالثلج الجاف جميع أنواع الإنتاج والمعدات المساعدة دون الإضرار بالأسطح ، دون ا1', 'uploads/services/images/16426129765164.webp', 'uploads/services/images/164261297622827.webp', '<h2>RELATED AREAS OF USAGE:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>Degreasing equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>electric motors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Conveyors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Hydraulic parts and equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>cooling fans</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n</ul>', '<h2>مجالات الاستخدام ذات الصلة:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>معدات إزالة الشحوم</h3>\r\n	</li>\r\n	<li>\r\n	<h3>محركات كهربائية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الناقلون</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الأجزاء والمعدات الهيدروليكية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>مراوح التبريد</h3>\r\n	</li>\r\n	<li>\r\n	<h3>لوحات التحكم</h3>\r\n	</li>\r\n	<li>\r\n	<h3>مركبات النقل البلدية</h3>\r\n	</li>\r\n</ul>', 'DRY ICE CLEANING BENEFITS:', 'فوائد التنظيف بالجليد الجاف:', 'With dry ice cleaning, you not only clean, you also improve your production operations.', 'مع التنظيف بالثلج الجاف ، لا تقوم بالتنظيف فحسب ، بل تقوم أيضًا بتحسين عمليات الإنتاج الخاصة بك.', 'uploads/services/images/164261297638628.webp'),
(86, '2022-01-18 16:01:35', '2022-01-20 13:35:32', 'General Equipment cleaning', 'تنظيف المعدات العامة', 'cleaner working equipment', 'معدات عمل أنظف', 3, 'Dry ice cleaning cleans all kinds of production and auxiliary equipment without damaging the surfaces, without creating secondary waste, and without harming the employees and the environment.', 'ينظف التنظيف بالثلج الجاف جميع أنواع الإنتاج والمعدات المساعدة دون الإضرار بالأسطح ، دون ا', 'uploads/services/images/16426130079693.webp', 'uploads/services/images/164261300780727.webp', '<h2>RELATED AREAS OF USAGE:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>Degreasing equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>electric motors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Conveyors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Hydraulic parts and equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>cooling fans</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n</ul>', '<h2>مجالات الاستخدام ذات الصلة:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>معدات إزالة الشحوم</h3>\r\n	</li>\r\n	<li>\r\n	<h3>محركات كهربائية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الناقلون</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الأجزاء والمعدات الهيدروليكية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>مراوح التبريد</h3>\r\n	</li>\r\n	<li>\r\n	<h3>لوحات التحكم</h3>\r\n	</li>\r\n	<li>مركبات النقل البلدية</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'DRY ICE CLEANING BENEFITS:', 'فوائد التنظيف بالجليد الجاف:', 'With dry ice cleaning, you not only clean, you also improve your production operations.', 'مع التنظيف بالثلج الجاف ، لا تقوم بالتنظيف فحسب ، بل تقوم أيضًا بتحسين عمليات الإنتاج الخاصة بك.', 'uploads/services/images/164261300836428.webp'),
(87, '2022-01-18 16:21:51', '2022-01-19 18:24:23', 'General Equipment cleaning', 'تنظيف المعدات العامة', 'cleaner working equipment', 'معدات عمل أنظف', 3, 'Dry ice cleaning cleans all kinds of production and auxiliary equipment without damaging the surfaces, without creating secondary waste, and without harming the employees and the environment.', 'ينظف التنظيف بالثلج الجاف جميع أنواع الإنتاج والمعدات المساعدة دون الإضرار بالأسطح ، دون ا', 'uploads/services/images/16426130622362.webp', 'uploads/services/images/164261306287627.webp', '<h2>RELATED AREAS OF USAGE:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>Degreasing equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>electric motors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Conveyors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Hydraulic parts and equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>cooling fans</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n</ul>', '<h2>مجالات الاستخدام ذات الصلة:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>معدات إزالة الشحوم</h3>\r\n	</li>\r\n	<li>\r\n	<h3>محركات كهربائية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الناقلون</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الأجزاء والمعدات الهيدروليكية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>مراوح التبريد</h3>\r\n	</li>\r\n	<li>\r\n	<h3>لوحات التحكم</h3>\r\n	</li>\r\n	<li>مركبات النقل البلدية</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'DRY ICE CLEANING BENEFITS:', 'فوائد التنظيف بالجليد الجاف:', 'With dry ice cleaning, you not only clean, you also improve your production operations.', 'مع التنظيف بالثلج الجاف ، لا تقوم بالتنظيف فحسب ، بل تقوم أيضًا بتحسين عمليات الإنتاج الخاصة بك.', 'uploads/services/images/164261306238328.webp'),
(89, '2022-01-20 00:38:02', '2022-01-20 00:43:37', 'General Equipment cleaning', 'تنظيف المعدات العامة', 'cleaner working equipment', 'معدات عمل أنظف', 4, 'ينظف التنظيف بالثلج الجاف جميع أنواع الإنتاج والمعدات المساعدة دون الإضرار بالأسطح ، دون ا', 'ينظف التنظيف بالثلج الجاف جميع أنواع الإنتاج والمعدات المساعدة دون الإضرار بالأسطح ، دون ا', 'uploads/services/images/16426354801075.webp', 'uploads/services/images/16426354827095.webp', '<h2>RELATED AREAS OF USAGE:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>Degreasing equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>electric motors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Conveyors</h3>\r\n	</li>\r\n	<li>\r\n	<h3>Hydraulic parts and equipment</h3>\r\n	</li>\r\n	<li>\r\n	<h3>cooling fans</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n	<li>\r\n	<h3>control panels</h3>\r\n	</li>\r\n</ul>', '<h2>مجالات الاستخدام ذات الصلة:</h2>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>معدات إزالة الشحوم</h3>\r\n	</li>\r\n	<li>\r\n	<h3>محركات كهربائية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الناقلون</h3>\r\n	</li>\r\n	<li>\r\n	<h3>الأجزاء والمعدات الهيدروليكية</h3>\r\n	</li>\r\n	<li>\r\n	<h3>مراوح التبريد</h3>\r\n	</li>\r\n	<li>\r\n	<h3>لوحات التحكم</h3>\r\n	</li>\r\n	<li>مركبات النقل البلدية</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'DRY ICE CLEANING BENEFITS:', 'فوائد التنظيف بالجليد الجاف:', 'With dry ice cleaning, you not only clean, you also improve your production operations.', 'مع التنظيف بالثلج الجاف ، لا تقوم بالتنظيف فحسب ، بل تقوم أيضًا بتحسين عمليات الإنتاج الخاصة بك.', 'uploads/services/images/164261306238328.webp');

-- --------------------------------------------------------

--
-- Table structure for table `services_images`
--

CREATE TABLE `services_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `img` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_images`
--

INSERT INTO `services_images` (`id`, `created_at`, `updated_at`, `service_id`, `img`) VALUES
(199, '2022-01-18 16:01:35', '2022-01-18 16:01:35', 86, 'upload/services/164251931161e6db0f826f1.jpg'),
(200, '2022-01-18 16:21:51', '2022-01-18 16:21:51', 87, 'upload/services/164251931161e6db0f826f1.jpg'),
(201, '2022-01-18 16:21:52', '2022-01-18 16:21:52', 87, 'upload/services/164251931161e6db0fc42e0.jpg'),
(204, '2022-01-19 19:10:29', '2022-01-19 19:10:29', 85, 'upload/services/164261582861e85414f06e5.jpg'),
(208, '2022-01-20 00:38:02', '2022-01-20 00:38:02', 89, 'upload/services/164263548261e8a0daaf900.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wats` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_app_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_link` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tw_link` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insta_link` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yt_link` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `android` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ios` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT '1',
  `address` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_app_en` text COLLATE utf8mb4_unicode_ci,
  `address_en` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_en` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_ar` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_ar` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_key` text COLLATE utf8mb4_unicode_ci,
  `blog_en` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_en` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_ar` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `strategy` text COLLATE utf8mb4_unicode_ci,
  `strategy_en` text COLLATE utf8mb4_unicode_ci,
  `color2` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_brand` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `created_at`, `updated_at`, `wats`, `about_app_ar`, `contact_phone`, `contact_email`, `fb_link`, `tw_link`, `insta_link`, `yt_link`, `android`, `ios`, `name`, `logo`, `status`, `address`, `name_en`, `about_app_en`, `address_en`, `product_en`, `product_ar`, `blog_ar`, `app_key`, `blog_en`, `category_en`, `category_ar`, `contact_en`, `contact_ar`, `about_en`, `about_ar`, `home_en`, `home_ar`, `strategy`, `strategy_en`, `color2`, `is_brand`) VALUES
(2, '2020-05-22 08:50:20', '2020-12-22 16:16:36', '+96597244282', '<h2><strong>لماذا التنظيف بالثلج الجاف</strong></h2>\r\n\r\n<hr />\r\n<p>يسر شركة Carbon Dry Ice مشاركة معرفتها وخبرتها في التنظيف الصناعي مع عملائها الكرام لما يقرب من 10 سنوات.&nbsp;شركتنا ، التي تعمل في مجال التنظيف الجاف والتنظيف الصناعي منذ إنشائها ، لديها فريق عمل من الخبراء ؛&nbsp;يقدم لك حلولاً خاصة لإنتاج الثلج الجاف وأنواع الثلج الجاف وتنظيف الثلج الجاف ونقل الطعام بالثلج الجاف.</p>\r\n\r\n<p>تبيع حاويات الثلج الجاف OLIVO ، العلامة التجارية الرائدة في العالم ، وآلات التنظيف بالثلج الجاف البارد ، آلة التنظيف بالثلج الجاف الرائدة في العالم.</p>\r\n\r\n<p>على الرغم من أن Carbon Dry Ice هي مؤسسة متوسطة الحجم ، فقد تم الاعتراف بها في قطاع الثلج الجاف في وقت قصير بفضل تصميمها على النجاح في الجودة والصعوبات التي واجهتها منذ إنشائها ولم تتخل أبدًا عن هذه المبادئ .&nbsp;لطالما كانت المبادئ الثابتة لشركتنا هي الجودة والخدمة والتسليم في الوقت المناسب والأسعار المعقولة.</p>\r\n\r\n<p>سيستمر Carbon Dry Ice ، الذي يعمل بمبدأ الصدق والجودة في الخدمة ، في خدمتك اليوم وفي المستقبل من خلال شكرك على اهتمامك ودعمك الوثيقين.</p>\r\n\r\n<p>&nbsp;</p>', '01100618113', 'bluezone.adv@gmail.com', 'https://www.facebook.com/bluezone.web', 'https://twitter.com/bluezone_web', 'https://www.instagram.com/bluezone.web', 'https://www.youtube.com/channel/UCviNbZs5LKGOMYn30qYNo3w', 'https://play.google.com/store/apps/details?id=com.cusha.my_store', 'https://apps.apple.com/kw/app/kusha-%D9%83%D9%88%D8%B4%D8%A7/id1549487502?l=ar', 'كاربون', 'uploads/logos/images//1642341086767logo.png', 1, 'الكويت شرق  قطعة 3 شارع عبدالمنعم رياض مبني 4 الدور 4', 'Carbon', '<h1>WHY DRY ICE CLEANING</h1>\r\n\r\n<hr />\r\n<p>Carbon Dry Ice is excited to share its knowledge and experience in industrial cleaning with its valued customers for nearly 10 years. Our company, which has been serving in the field of Dry Cleaning and Industrial Cleaning since its establishment, has an expert staff; It offers you special solutions for dry ice production, dry ice types, dry ice cleaning and transportation of food with dry ice.</p>\r\n\r\n<p>It sells the OLIVO Dry Ice Containers, the world&#39;s leading brand, and the Cold Jet Dry ice cleaning machines, the world&#39;s leading dry ice cleaning machine.</p>\r\n\r\n<p>Although Carbon Dry Ice is a medium-sized enterprise, it has been recognized in the dry ice sector in a short time thanks to its determination to succeed in the quality and the difficulties it has given since its establishment and has never given up on these principles. The unchanging principles of our company have always been quality, service, timely delivery and reasonable prices.</p>\r\n\r\n<p>Carbon Dry Ice, which works with the principle of honesty and quality in service, will continue to serve you today and in the future by thanking you for your close attention and support.</p>', 'Kuwait East, Block 3, Abdel Moneim Riad Street, Building 4, Floor 4', 'our products', 'منتجاتنا', 'مدونتنا', 'bvhvhvhh', 'Blog', 'متجر ملابس جاهزة واكسسورات', 'EUR', 'Contact', 'اتصل', 'About', 'عنا', 'Home', 'الرئيسية', 'هذه الاتفاقية مبرومة بينك وبين تطبيق ايزي شوب فيما يتعلق بالمنتجات والخدمات التي نقدمها .\r\nالقواعد والسياسات، والإرشادات الموفرة من قبلنا فيما يتعلق بالخدمة، وسياسة الخصوصية الخاصة بـ easy shop  يشار إليها مجتمعة بـ \"الشروط\" وهي تحكم استخدام هذه الخدمة.\r\n\r\nعبر تحميل البرنامج، تصفحه، الدخول إليه، أو التسجيل فيه أو استخدام الخدمة، أنت توافق على هذه الشروط.\r\n\r\nشروط الاستخدام\r\n\r\nنحتفظ بحق تعديل الشروط والأحكام أدناه في أي وقت. إذا كنت لا توافق على أي من هذه الشروط والأحكام يجب عليك أن تتوقف حالاً عن الدخول إلى تطبيق easy shop وعن استخدامك للخدمات المقدمة من خلالهما. مواصلتك في استخدام تطبيق ايزي شوب سيعبر عن موافقتك لهذه الشروط والأحكام التي قد تتغير من وقت لآخر.\r\n\r\n2. المصطلحات     \r\n\r\nترد المصطلحات التالية في هذه الشروط والأحكام بما يفيد المعاني المبينة أدناه باستثناء الحالات التي يشير فيها السياق إلى غير ذلك:\r\n\r\n\"الحساب\" يعني حساب تم إنشاؤه من قبل المستخدم ضمن عملية التسجيل في التطبيق.\r\n\r\n\"البائع\" تشير إلى أي جهة يمكن شراء منتجاتها من خلال تطبيق ايزي شوب \r\n\r\nسياسة الخصوصية\" تعني سياسة الخصوصية المشار إليها في البند 14 من هذه الشروط والأحكام.\r\n\r\n\"الشراء\" يعني شراء منتجات البائع وفق هذه الشروط والأحكام. و \"عملية الشراء\" تعني فعل الشراء  مثل هذه المنتجات  المعروضة في ايزي شوب .\r\n\r\n\"التسجيل\" يعني إنشاء حساب على التطبيق، و\"عملية التسجيل\" تعني القيام بعملية إنشاء مثل هذا الحساب\r\n\r\nالنماذج\" تعني نماذج لمنتجات و/أو خدمات البائع، بما يشمل ولا يقتصر على أي كوبونات لشراء مثل هذه الخدمات، و \"نموذج\" يعني أي واحد منهم.\r\n\r\n\"الخدمات\" تعني كل الخدمات المقدمة للمستخدمين من قبل ايزي شوب وذلك من خلال تطبيق easyshop ، و \"الخدمة\" تعني أي واحدة منهم.\r\n\r\n\"المستخدمون\" تعني مستخدمي التطبيق بما فيهم أنت، و \"المستخدم\" يعني أي واحد منهم.', 'This agreement is concluded between you and the Easy Shop application in relation to the products and services that we offer.\r\nThe rules, policies, and guidelines provided by us in connection with the Service, and the easy shop privacy policy are collectively referred to as the \"Terms\" and govern the use of the Service.\r\n\r\nBy downloading, browsing, accessing, registering for, or using the Service, you agree to these Terms.\r\n\r\nterms of use\r\n\r\nWe reserve the right to amend the terms and conditions below at any time. If you do not agree to any of these terms and conditions, you must immediately stop accessing the easy shop application and your use of the services provided through them. Your continued use of the EasyShop application will signify your acceptance of these terms and conditions, which may change from time to time.\r\n\r\n2. Terminology\r\n\r\nThe following terms are included in these Terms and Conditions with the meanings set out below except where the context indicates otherwise:\r\n\r\n“Account” means an account created by the User within the application registration process.\r\n\r\n“Seller” refers to any party whose products can be purchased through the Easy Shop application\r\n\r\n“Privacy Policy” means the privacy policy referred to in Clause 14 of these Terms and Conditions.\r\n\r\n“Purchase” means the purchase of Seller\'s Products under these Terms and Conditions. and “purchase” means the act of purchasing such products offered in the EasyShop.\r\n\r\n“Registration” means creating an account on the Application, and “Registration process” means the process of creating such an account\r\n\r\n\"Forms\" means samples of Seller\'s products and/or services, including but not limited to any coupons for purchasing such services, and \"model\" means any one of them.\r\n\r\n“Services” means all services provided to users by Easyshop through the easyshop application, and “Service” means any one of them.\r\n\r\n“Users” means the users of the Application including you, and “User” means any one of them.', '#ff4040', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `activity` tinyint(4) DEFAULT '1',
  `num` int(11) NOT NULL,
  `img` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `created_at`, `updated_at`, `activity`, `num`, `img`, `text`) VALUES
(3, '2021-07-31 10:30:04', '2021-07-31 10:30:04', 1, 1, 'upload/sliders/19.webp', 'slider1'),
(4, '2021-07-31 10:30:32', '2021-07-31 10:30:32', 1, 2, 'upload/sliders/19.webp', 'slider2'),
(5, '2021-07-31 10:30:54', '2021-07-31 10:30:54', 1, 3, 'upload/sliders/18.webp', 'slider3'),
(6, '2021-07-31 10:31:17', '2021-07-31 10:31:17', 1, 4, 'upload/sliders/18.webp', 'slider4');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` int(11) NOT NULL DEFAULT '1',
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
(1, 'Islam web', 'bazar.alkuwait@gmail.com', 1, NULL, '$2y$10$QTM.k94404dKoTOI.zWFBeikoOAxHr2RSJBf3uz4R2RCKAzXLLDG.', 'bMz1EAYTm3obKULvTSdRfNXTWYUSuQEnnBE2bPV7cE3No7rLCXWfguMaPCOJ', '2020-05-19 14:45:57', '2021-07-27 13:13:00'),
(12, 'easyshop', 'info@easyshop-qa.com', 1, NULL, '$2y$10$SuJ4PFPsPpRQ3w3Io1mLc.YgIcfcuqqJ.KXLa2/LYu29lcageWO6y', 'MTVBvW3BMPMW1scNd9Evtp1fKWT7rVjtFK35sz9d4n9PWXEPgymeiK5ZeU40', '2021-01-30 15:01:40', '2021-06-21 00:03:04'),
(0, 'islam', 'i@gmail.com', 1, NULL, '1111', NULL, NULL, '2021-07-27 13:14:56'),
(0, 'islam', 'i@gmail.com', 1, NULL, '1111', NULL, NULL, '2021-07-27 13:14:56'),
(0, 'dd', 'dd@gmail.com', 1, NULL, '11111111', NULL, NULL, '2021-07-27 13:14:56'),
(0, 'dd', 'dd@gmail.com', 1, NULL, '11111111', NULL, NULL, '2021-07-27 13:14:56'),
(0, 'Ahmed', 'eslam.iniesta@gmail.com', 1, NULL, '$2y$10$S94e5tHJ3/2Bu9plZgff6uPz3mSClFCvEX40q5BBWoXiUilVu40OW', NULL, '2021-07-27 13:14:56', '2021-07-27 13:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ar` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `created_at`, `updated_at`, `icon`, `title_en`, `title_ar`, `content_en`, `content_ar`, `type`) VALUES
(3, '2021-07-27 15:22:05', '2021-07-27 15:22:05', 'fab fa-amilia', 'Ahmed', 'أحمد', 'Ahmed Ahmed Ahmed Ahmed Ahmed Ahmed', 'احمد احمد احمد احمد احمد احمد', 3),
(9, '2021-07-29 15:35:20', '2021-07-29 15:35:20', 'fas fa-arrow-circle-up', 'Consectetur ut est e', 'السلام عليكم', 'Ipsum earum ab atqu', 'السلام عليكم السلام عليكم السلام عليكم السلام عليكم', 3),
(10, '2021-07-29 15:37:03', '2021-07-29 15:37:03', 'Sint ad adipisicing', 'Nesciunt corrupti', 'التوفر السريع', 'Ipsa ea rem ullam a', 'نحن متواجدون طوال اليوم طوال الأسبوع. يمكنك حجز التنظيف في أي وقت وسنقوم بإنجاز المهمة لك ', 3),
(11, '2021-07-29 15:37:48', '2021-07-29 15:37:48', 'Sapiente rerum volup', 'Rerum saepe sint ac', 'التوفر السريع', 'Sed anim minim provi', 'نحن متواجدون طوال اليوم طوال الأسبوع. يمكنك حجز التنظيف في أي وقت وسنقوم بإنجاز المهمة لك ', 3),
(12, '2021-07-31 10:25:31', '2021-07-31 10:25:31', 'fab fa-airbnb', 'Book', 'احجز', 'Click On The Book Now Button. Select Your Date And Time For Your Professional Cleaner To C', 'انقر على زر الحجز الآن. حدد التاريخ والوقت ليأتي منظفك المحترف ويضيء مكانك.', 1),
(13, '2021-07-31 10:27:15', '2021-07-31 10:27:15', 'far fa-calendar-alt', 'Schedule', 'احجز', 'On Your Selected Timings Our Professional Cleaner Will Come, And Get The Job Done For You ', 'انقر على زر الحجز الآن. حدد التاريخ والوقت ليأتي منظفك المحترف ويضيء مكانك.', 1),
(14, '2021-07-31 10:27:56', '2021-07-31 11:01:27', 'far fa-user', 'Book', 'احجز', 'There Is No Such Third Step. Your Task Is Completed To Your Satisfaction. Have Fun.', 'انقر على زر الحجز الآن. حدد التاريخ والوقت ليأتي منظفك المحترف ويضيء مكانك.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_categories`
--
ALTER TABLE `basic_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories_images`
--
ALTER TABLE `categories_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overs`
--
ALTER TABLE `overs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_imgs`
--
ALTER TABLE `post_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod_imgs`
--
ALTER TABLE `prod_imgs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prod_imgs_product_id_foreign` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `services_images`
--
ALTER TABLE `services_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_images_service_id_foreign` (`service_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_categories`
--
ALTER TABLE `basic_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories_images`
--
ALTER TABLE `categories_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `overs`
--
ALTER TABLE `overs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_imgs`
--
ALTER TABLE `post_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prod_imgs`
--
ALTER TABLE `prod_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `services_images`
--
ALTER TABLE `services_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prod_imgs`
--
ALTER TABLE `prod_imgs`
  ADD CONSTRAINT `prod_imgs_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services_images`
--
ALTER TABLE `services_images`
  ADD CONSTRAINT `services_images_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
