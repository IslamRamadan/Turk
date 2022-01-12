-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 03:02 PM
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
-- Database: `kokart`
--

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
(8, '2021-08-01 15:13:43', '2021-08-01 15:13:43', 'Adria Chandler', '+1 (843) 30', 'maranulivo@mailinator.com', 'Distinctio Quia exc');

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
(11, '2021_07_27_102511_create_foreign_keys', 1);

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
  `img` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title_ar`, `title_en`, `content_ar`, `content_en`, `img`, `created_at`, `updated_at`) VALUES
(1, 'تنظيف المنزل', 'Companies cleaning', 'نحن متواجدون طوال اليوم طوال الأسبوع. يمكنك حجز التنظيف في أي وقت وسنقوم بإنجاز المهمة لك في أسرع وقت ممكن.', 'The House Is A Place Where We Spend Most Of Our Time. We Eat, Relax, And Sleep In The House. It Needs To Be In A Certain Way To Serve The Purpose. One Of The Most Important Things We Want In ', 'upload/posts/162772447061051ab624e3a.jpg', '2021-07-29 18:55:40', '2021-07-31 10:41:10');

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
  `name_en` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `content_en` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_ar` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `created_at`, `updated_at`, `name_en`, `name_ar`, `title_en`, `title_ar`, `type`, `content_en`, `content_ar`, `img`) VALUES
(58, '2021-08-01 14:27:39', '2021-08-01 14:27:39', 'Eve Todd', 'تنظيف المنزل المحترف', 'Earum rem in sed omn', 'التوفر السريع', 1, 'The House Is A Place Where We Spend Most Of Our Time. We Eat, Relax, And Sleep In The Hous', 'نحن متواجدون طوال اليوم طوال الأسبوع. يمكنك حجز التنظيف في أي وقت وسنقوم بإنجاز المهمة لك ', 'qD46iGHma0SmZfGHB5kd6ztYFomHf1VbWaK9Jxwo.jpg'),
(64, '2021-08-05 08:52:36', '2021-08-05 08:52:36', 'Iola Lynch', 'Lucy Blair', 'Qui voluptatibus qui', 'Ut qui facere tempor', 1, 'Corporis quod ea eaq', 'Assumenda eu soluta', 'upload/sliders/1628149956610b98c4a732d.jpg'),
(65, '2021-08-05 08:53:23', '2021-08-05 08:53:23', 'eslam', 'اسلام', 'eslam', 'اسلام', 1, 'eslam eslam eslam eslam eslam eslam eslam eslam eslam', 'لعب لعب لعب لعب لعب لعب لعب لعب لعب لعب لعب', 'upload/sliders/1628150003610b98f37a467.jpg'),
(66, '2021-08-05 08:53:59', '2021-08-05 08:53:59', 'Freya Jones', 'Gisela Clark', 'Aut nobis ad repudia', 'Quia amet in elit', 3, 'Labore aliquam sint', 'Occaecat aut rem qui', 'upload/sliders/1628150039610b991746e44.jpg'),
(67, '2021-08-05 09:01:29', '2021-08-05 09:01:29', 'Cassady Taylor', 'Dylan Buchanan', 'Nesciunt sed et quo', 'Tenetur ex non minim', 2, 'Incididunt magna eaq', 'Adipisci quidem saep', 'upload/sliders/1628150489610b9ad94a764.jpg');

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
(155, '2021-08-01 14:27:40', '2021-08-01 14:27:40', 58, 'qD46iGHma0SmZfGHB5kd6ztYFomHf1VbWaK9Jxwo.jpg'),
(156, '2021-08-01 14:27:40', '2021-08-01 14:27:40', 58, 'EKLe9reVJEBVtS9ShOjowW5tj0nttqb5LlPukMKC.jpg'),
(157, '2021-08-01 14:27:40', '2021-08-01 14:27:40', 58, 'Qw9i5TR5QhWj99fVF0EcJhPASNP6Xg5nuZ4YDPOp.jpg'),
(158, '2021-08-01 14:27:40', '2021-08-01 14:27:40', 58, 'bGvNln4hdxHgOSmlXbY6Nuec0PgUua0i66kRgWao.jpg'),
(159, '2021-08-01 14:27:40', '2021-08-01 14:27:40', 58, 'y0Ya6FFgskLOzABCLYd2C7vmvAz4tvKnDciBuUJZ.jpg'),
(160, '2021-08-01 14:27:40', '2021-08-01 14:27:40', 58, 'IZkAETtedwiGLl1Keqoro9KKk3AInjzGRXA2QOPf.jpg'),
(180, '2021-08-05 08:52:36', '2021-08-05 08:52:36', 64, 'jRegw1xTSlKULfzK5j92vAUROvcCm5hbOJhnHVeC.jpg'),
(181, '2021-08-05 08:53:23', '2021-08-05 08:53:23', 65, 'nvAesRSQ4dCoGLfjpmTNg1d7FXVtH6aeYO1PbpHA.jpg'),
(182, '2021-08-05 08:53:23', '2021-08-05 08:53:23', 65, 'T9dSRll39xAcLyUDHWhvwnwJyOpQhOpYZanEo4DR.jpg'),
(183, '2021-08-05 08:53:23', '2021-08-05 08:53:23', 65, 'MgT8chQVv1xP42KtGGT47g0R5nw7pziYHBcljvks.jpg'),
(184, '2021-08-05 08:53:23', '2021-08-05 08:53:23', 65, 'bm1HcHrPtdCb6ih7ntmwjk9RqxXFTw5EJs4wkEFx.jpg'),
(185, '2021-08-05 08:53:59', '2021-08-05 08:53:59', 66, 'sLd8mXvT2hSWNNTVp0dR28PQ4Zm8VY6B8abRzslY.jpg'),
(186, '2021-08-05 09:01:29', '2021-08-05 09:01:29', 67, 'bSZ4xdnFAeQY7Nmd5Jp9ZR4k25zYdmLsF1ODFY2r.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wats` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_app` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `dolar` double DEFAULT NULL,
  `egypt` double DEFAULT NULL,
  `color` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_key` text COLLATE utf8mb4_unicode_ci,
  `link` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `strategy` text COLLATE utf8mb4_unicode_ci,
  `strategy_en` text COLLATE utf8mb4_unicode_ci,
  `color2` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_brand` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `created_at`, `updated_at`, `wats`, `about_app`, `contact_phone`, `contact_email`, `fb_link`, `tw_link`, `insta_link`, `yt_link`, `android`, `ios`, `name`, `logo`, `status`, `address`, `name_en`, `about_app_en`, `address_en`, `dolar`, `egypt`, `color`, `app_key`, `link`, `text`, `currency`, `strategy`, `strategy_en`, `color2`, `is_brand`) VALUES
(2, '2020-05-22 08:50:20', '2020-12-22 16:16:36', '+96597244282', 'نحن الشركة الرائدة في مجال خدمات التنظيف. نحن شركة مقرها تقدم جميع أنواع خدمات التنظيف للعملاء السكنيين والتجاريين. نحن نعلم مدى أهمية النظافة. لهذا نعمل من أجل التميز في خدمات التنظيف\r\n\r\nنحن الشركة الرائدة في مجال خدمات التنظيف. نحن شركة مقرها تقدم جميع أنواع خدمات التنظيف للعملاء السكنيين والتجاريين. نحن نعلم مدى أهمية النظافة. لهذا نعمل من أجل التميز في خدمات التنظيف', '01100618113', 'bluezone.adv@gmail.com', 'https://www.facebook.com/bluezone.web', 'https://twitter.com/bluezone_web', 'https://www.instagram.com/bluezone.web', 'https://www.youtube.com/channel/UCviNbZs5LKGOMYn30qYNo3w', 'https://play.google.com/store/apps/details?id=com.cusha.my_store', 'https://apps.apple.com/kw/app/kusha-%D9%83%D9%88%D8%B4%D8%A7/id1549487502?l=ar', 'easyShope', 'upload/1618635588607a6b44e2cbd.png', 1, 'الكويت شرق  قطعة 3 شارع عبدالمنعم رياض مبني 4 الدور 4', 'kusha store', 'We Are The Leading Cleaning Services Company In The UAE. We Are A Dubai Based Company Which Provides All Types Of Cleaning Services For Residential And Commercial Clients. At Clean It, We Know How Important The Cleanliness Is. That Is Why We Are Working For Excellence In Cleaning Services\r\n\r\nWe Are The Leading Cleaning Services Company In The UAE. We Are A Dubai Based Company Which Provides All Types Of Cleaning Services For Residential And Commercial Clients. At Clean It, We Know How Important The Cleanliness Is. That Is Why We Are Working For Excellence In Cleaning Services', 'Kuwait East, Block 3, Abdel Moneim Riad Street, Building 4, Floor 4', 0.2746, NULL, '#ffaa00', 'bvhvhvhh', 'https://easyshop-qa.com/api/v1/', 'متجر ملابس جاهزة واكسسورات', 'EUR', 'هذه الاتفاقية مبرومة بينك وبين تطبيق ايزي شوب فيما يتعلق بالمنتجات والخدمات التي نقدمها .\r\nالقواعد والسياسات، والإرشادات الموفرة من قبلنا فيما يتعلق بالخدمة، وسياسة الخصوصية الخاصة بـ easy shop  يشار إليها مجتمعة بـ \"الشروط\" وهي تحكم استخدام هذه الخدمة.\r\n\r\nعبر تحميل البرنامج، تصفحه، الدخول إليه، أو التسجيل فيه أو استخدام الخدمة، أنت توافق على هذه الشروط.\r\n\r\nشروط الاستخدام\r\n\r\nنحتفظ بحق تعديل الشروط والأحكام أدناه في أي وقت. إذا كنت لا توافق على أي من هذه الشروط والأحكام يجب عليك أن تتوقف حالاً عن الدخول إلى تطبيق easy shop وعن استخدامك للخدمات المقدمة من خلالهما. مواصلتك في استخدام تطبيق ايزي شوب سيعبر عن موافقتك لهذه الشروط والأحكام التي قد تتغير من وقت لآخر.\r\n\r\n2. المصطلحات     \r\n\r\nترد المصطلحات التالية في هذه الشروط والأحكام بما يفيد المعاني المبينة أدناه باستثناء الحالات التي يشير فيها السياق إلى غير ذلك:\r\n\r\n\"الحساب\" يعني حساب تم إنشاؤه من قبل المستخدم ضمن عملية التسجيل في التطبيق.\r\n\r\n\"البائع\" تشير إلى أي جهة يمكن شراء منتجاتها من خلال تطبيق ايزي شوب \r\n\r\nسياسة الخصوصية\" تعني سياسة الخصوصية المشار إليها في البند 14 من هذه الشروط والأحكام.\r\n\r\n\"الشراء\" يعني شراء منتجات البائع وفق هذه الشروط والأحكام. و \"عملية الشراء\" تعني فعل الشراء  مثل هذه المنتجات  المعروضة في ايزي شوب .\r\n\r\n\"التسجيل\" يعني إنشاء حساب على التطبيق، و\"عملية التسجيل\" تعني القيام بعملية إنشاء مثل هذا الحساب\r\n\r\nالنماذج\" تعني نماذج لمنتجات و/أو خدمات البائع، بما يشمل ولا يقتصر على أي كوبونات لشراء مثل هذه الخدمات، و \"نموذج\" يعني أي واحد منهم.\r\n\r\n\"الخدمات\" تعني كل الخدمات المقدمة للمستخدمين من قبل ايزي شوب وذلك من خلال تطبيق easyshop ، و \"الخدمة\" تعني أي واحدة منهم.\r\n\r\n\"المستخدمون\" تعني مستخدمي التطبيق بما فيهم أنت، و \"المستخدم\" يعني أي واحد منهم.', 'This agreement is concluded between you and the Easy Shop application in relation to the products and services that we offer.\r\nThe rules, policies, and guidelines provided by us in connection with the Service, and the easy shop privacy policy are collectively referred to as the \"Terms\" and govern the use of the Service.\r\n\r\nBy downloading, browsing, accessing, registering for, or using the Service, you agree to these Terms.\r\n\r\nterms of use\r\n\r\nWe reserve the right to amend the terms and conditions below at any time. If you do not agree to any of these terms and conditions, you must immediately stop accessing the easy shop application and your use of the services provided through them. Your continued use of the EasyShop application will signify your acceptance of these terms and conditions, which may change from time to time.\r\n\r\n2. Terminology\r\n\r\nThe following terms are included in these Terms and Conditions with the meanings set out below except where the context indicates otherwise:\r\n\r\n“Account” means an account created by the User within the application registration process.\r\n\r\n“Seller” refers to any party whose products can be purchased through the Easy Shop application\r\n\r\n“Privacy Policy” means the privacy policy referred to in Clause 14 of these Terms and Conditions.\r\n\r\n“Purchase” means the purchase of Seller\'s Products under these Terms and Conditions. and “purchase” means the act of purchasing such products offered in the EasyShop.\r\n\r\n“Registration” means creating an account on the Application, and “Registration process” means the process of creating such an account\r\n\r\n\"Forms\" means samples of Seller\'s products and/or services, including but not limited to any coupons for purchasing such services, and \"model\" means any one of them.\r\n\r\n“Services” means all services provided to users by Easyshop through the easyshop application, and “Service” means any one of them.\r\n\r\n“Users” means the users of the Application including you, and “User” means any one of them.', '#ff4040', 0);

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
(3, '2021-07-31 10:30:04', '2021-07-31 10:30:04', 1, 1, 'upload/sliders/16277238046105181cce0ec.jpg', 'slider1'),
(4, '2021-07-31 10:30:32', '2021-07-31 10:30:32', 1, 2, 'upload/sliders/1627723832610518386b14a.jpg', 'slider2'),
(5, '2021-07-31 10:30:54', '2021-07-31 10:30:54', 1, 3, 'upload/sliders/16277238546105184e1d2ff.jpg', 'slider3'),
(6, '2021-07-31 10:31:17', '2021-07-31 10:31:17', 1, 4, 'upload/sliders/162772387761051865ac27f.jpg', 'slider4');

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
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `services_images`
--
ALTER TABLE `services_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

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
-- Constraints for table `services_images`
--
ALTER TABLE `services_images`
  ADD CONSTRAINT `services_images_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
