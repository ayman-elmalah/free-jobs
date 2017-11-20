-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 06:32 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `free-jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category` tinyint(4) NOT NULL,
  `experience` tinyint(4) NOT NULL,
  `location` tinyint(4) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `email_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `company_name`, `category`, `experience`, `location`, `description`, `email_address`, `created_at`) VALUES
(1, ' مصور فوتوغرافر ', ' selfie ', 22, 2, 13, ' مطلوب مصور حفلات له خبره فى تغطيه الحفلات الكبيره والندوات ', 'hr@selfie.com', 1510597014),
(2, ' مبرمج مواقع ', ' techtalk ', 11, 1, 11, ' مطلوب مبرمج', 'hr@techtalk.com', 1510926231),
(3, ' مبرمج مواقع ', ' techtalk ', 11, 1, 11, ' مطلوب مبرمج مواقع يعمل بلارافيل وله قدره على العمل وفق متطلبات التصميم ', 'hr@techtalk.com', 1510926232),
(4, ' مبرمج مواقع ', ' techtalk ', 11, 1, 11, ' مطلوب مبرمج مواقع يعمل بلارافيل وله قدره على العمل وفق متطلبات التصميم  مطلوب مبرمج مواقع يعمل بلارافيل وله قدره على العمل وفق متطلبات التصميم ', 'hr@techtalk.com', 1510926233),
(5, ' مبرمج مواقع ', ' techtalk ', 11, 1, 11, ' مطلوب مبرمج مواقع يعمل بلارافيل وله قدره على العمل وفق متطلبات التصميم ', 'hr@techtalk.com', 1510926235),
(6, ' مبرمج مواقع ', ' techtalk ', 11, 1, 11, ' مطلوب مبرمج مواقع يعمل بلارافيل وله قدره على العمل وفق متطلبات التصميم  مطلوب مبرمج مواقع يعمل بلارافيل وله قدره على العمل وفق متطلبات التصميم ', 'hr@techtalk.com', 1510926236),
(7, ' مبرمج مواقع ', ' techtalk ', 11, 1, 11, ' مطلوب مبرمج', 'hr@techtalk.com', 1510926237),
(8, ' مبرمج مواقع ', ' techtalk ', 11, 1, 11, ' مطلوب مبرمج مواقع يعمل بلارافيل وله قدره على العمل وفق متطلبات التصميم ', 'hr@techtalk.com', 1510926238),
(9, 'مهندس ديكور', 'touch', 21, 2, 37, '<p>مطلوب مهندس ديكور له خبره فى العمل ضمن مجموعات كبيره لتهيئة الشكل للحفلات الكبيره</p>\r\n\r\n<ol>\r\n	<li>ان يكون عمره لا يتجاوز 30 عام</li>\r\n	<li>ان يكون حاصل على مؤهل عالى</li>\r\n	<li>ان يكون منضبط فى مواعيده</li>\r\n</ol>\r\n', 'ahmehr@touch.com', 1511185921),
(10, 'اطباء للعمل فى مستشفى خاصه', 'egy doctors', 19, 1, 11, '<p>مطلوب اطباء حديثى التخرج للعمل فى مستششفى خاصه فى جميع التخصصات</p>\r\n', 'doctor-mohamed@egydocors.com', 1511189808),
(11, 'مطلوب كيميائيين للعمل كمندوب توزيع', 'egy medical', 17, 1, 12, '<h1>وظائف كيميائيين</h1>\r\n\r\n<p>موقع الشركه :&nbsp;<a href=\"http://elmalah.esy.es\" target=\"_blank\">Ayman Elmalah</a></p>\r\n\r\n<h2>مطلوب عدد كيميائيين 3 للعمل فى الشركه كمندوبين&nbsp;</h2>\r\n\r\n<h3>ان كنت من سكان محافظات اخرى غير الجيزه يوجد لدينا سكن بمواصفات ممتازه</h3>\r\n', 'hr@egymedical.com', 1511197328);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `view` tinyint(1) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `view`, `created_at`) VALUES
(1, 'محمد', 'm@free-jobs.com', 'اعجاب', 'الموقع رائع', 0, 1511199150);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_11_13_133330_create_jobs_table', 2),
('2017_11_13_133335_create_messages_table', 2),
('2017_11_13_194628_create_reports_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `report` text COLLATE utf8_unicode_ci NOT NULL,
  `view` tinyint(1) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `job_id`, `name`, `report`, `view`, `created_at`) VALUES
(1, 1, ' احمد محمد ', ' هذه الوظيفه غير صحيحه والناشر نصاب ', 1, 1510597346);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Support', 'support@free-jobs.com', '$2y$10$QJ806rojanqzEmCZFIhu/.bfhK2D1r7rKwnSh0nk/vGZ9oDyNdPWa', 'HsCtvkcnXzUfC2ybs0vpykQ4OzFCJOyQ5RatVk5tyff0pVPwmGX2aQ2ss9yv', '2017-11-12 22:00:00', '2017-11-16 21:53:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_job_id_foreign` (`job_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
