-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 19, 2018 at 12:27 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uv_advanced_discussion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'imgavatar3.png',
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `avatar`, `about`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed', 'ahmed@gmail.com', 'img\\avatar\\3.png', 'im admin', '$2y$10$5ByvgvB6EP/9rFsi3mcPB.HOVidzj1XcxgAPcbuh13YY6Ww1T8gzu', 'lB4z6ITb417gZLLfdvA52usS6st4mO76TKG9e61XgGkqRCpNfk42Rv9nnS07', '2018-08-18 17:23:25', '2018-08-18 17:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

DROP TABLE IF EXISTS `channels`;
CREATE TABLE IF NOT EXISTS `channels` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'laravel 5', 'laravel', '2018-08-18 17:23:24', '2018-08-18 19:56:38'),
(2, 'angular js', 'angular-js', '2018-08-18 17:23:24', '2018-08-18 17:23:24'),
(3, 'bootstrap', 'bootstrap', '2018-08-18 17:23:24', '2018-08-18 17:23:24'),
(4, 'vue js', 'vue-js', '2018-08-18 17:23:24', '2018-08-18 17:23:24'),
(5, 'react js', 'react-js', '2018-08-18 17:23:24', '2018-08-18 17:23:24'),
(6, 'codeliguinter', 'codeliguinter', '2018-08-18 17:23:24', '2018-08-18 17:23:24'),
(7, 'asda', 'asda', '2018-08-18 19:56:28', '2018-08-18 19:56:28');

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

DROP TABLE IF EXISTS `discussions`;
CREATE TABLE IF NOT EXISTS `discussions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval` tinyint(1) NOT NULL DEFAULT '0',
  `comments` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `channel_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `discussions_channel_id_foreign` (`channel_id`),
  KEY `discussions_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`id`, `user_id`, `title`, `content`, `slug`, `approval`, `comments`, `views`, `channel_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'This is Introdiction to Laravel', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 'this-is-introdiction-to-laravel', 1, 0, 6, 1, '2018-08-18 17:23:24', '2018-08-18 20:57:50'),
(2, 2, 'Css3 Custimaization with LESS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 'css3-custimaization-with-less', 1, 3, 3, 2, '2018-08-18 17:23:24', '2018-08-18 18:50:41'),
(3, 2, 'Adding Notification To Laravel project', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 'adding-notification-to-laravel-project', 1, 1, 0, 3, '2018-08-18 17:23:24', '2018-08-18 18:24:18'),
(4, 2, 'Introdiction To bootstrap 4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 'introdiction-to-bootstrap-4', 1, 2, 2, 4, '2018-08-18 17:23:24', '2018-08-18 19:54:50'),
(5, 2, 'Angular Route & Firebase ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 'angular-route-firebase', 1, 2, 1, 5, '2018-08-18 17:23:24', '2018-08-18 18:24:19'),
(6, 2, 'Sass Synchronous Awsome Stylesheet', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 'sass-synchronous-awsome-stylesheet', 1, 0, 1, 4, '2018-08-18 17:23:24', '2018-08-18 18:24:38'),
(13, 3, 'dasdasd', 'dsadasdas', 'dasdasd', 0, 0, 2, 1, '2018-08-18 19:57:03', '2018-08-18 21:20:40'),
(12, 3, 'dsadasda', 'asdasdas', 'dsadasda', 0, 0, 1, 1, '2018-08-18 19:55:49', '2018-08-18 19:55:49'),
(14, 3, 'fasdfsf', 'sdafsadfasdfds', 'fasdfsf', 0, 0, 32, 1, '2018-08-18 19:58:16', '2018-08-18 20:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `discussion_tag`
--

DROP TABLE IF EXISTS `discussion_tag`;
CREATE TABLE IF NOT EXISTS `discussion_tag` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `discussion_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `discussion_tag_discussion_id_foreign` (`discussion_id`),
  KEY `discussion_tag_tag_id_foreign` (`tag_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discussion_tag`
--

INSERT INTO `discussion_tag` (`id`, `discussion_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 7, 2, NULL, NULL),
(2, 7, 3, NULL, NULL),
(3, 8, 2, NULL, NULL),
(4, 9, 2, NULL, NULL),
(5, 9, 3, NULL, NULL),
(6, 10, 2, NULL, NULL),
(7, 10, 3, NULL, NULL),
(8, 11, 2, NULL, NULL),
(9, 11, 3, NULL, NULL),
(10, 12, 2, NULL, NULL),
(11, 13, 2, NULL, NULL),
(12, 14, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `reply_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `likes_reply_id_foreign` (`reply_id`),
  KEY `likes_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=280 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(267, '2014_10_12_000000_create_users_table', 1),
(268, '2014_10_12_100000_create_password_resets_table', 1),
(269, '2018_04_08_163240_create_oauth_identities_table', 1),
(270, '2018_04_08_174754_create_channels_table', 1),
(271, '2018_04_08_174842_create_discussions_table', 1),
(272, '2018_04_08_174925_create_replies_table', 1),
(273, '2018_04_10_073539_create_profiles_table', 1),
(274, '2018_04_12_123704_create_likes_table', 1),
(275, '2018_04_12_180959_create_watchers_table', 1),
(276, '2018_08_13_201644_create_tags_table', 1),
(277, '2018_08_15_191109_create_admins_table', 1),
(278, '2018_08_15_192622_create_settings_table', 1),
(279, '2018_08_18_180053_create_discussion_tag_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_identities`
--

DROP TABLE IF EXISTS `oauth_identities`;
CREATE TABLE IF NOT EXISTS `oauth_identities` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider_user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profiles_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

DROP TABLE IF EXISTS `replies`;
CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `best_answer` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED NOT NULL,
  `discussion_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `replies_discussion_id_foreign` (`discussion_id`),
  KEY `replies_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `content`, `best_answer`, `user_id`, `discussion_id`, `created_at`, `updated_at`) VALUES
(1, 'Replay 1 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 0, 1, 2, '2018-08-18 17:23:24', '2018-08-18 17:23:24'),
(2, 'Replay 2 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 0, 2, 2, '2018-08-18 17:23:24', '2018-08-18 17:23:24'),
(3, 'Replay 3 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 0, 1, 3, '2018-08-18 17:23:24', '2018-08-18 17:23:24'),
(4, 'Replay 4 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 0, 2, 4, '2018-08-18 17:23:24', '2018-08-18 17:23:24'),
(5, 'Replay 5 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 0, 1, 5, '2018-08-18 17:23:24', '2018-08-18 17:23:24'),
(6, 'Replay 6 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 0, 1, 5, '2018-08-18 17:23:24', '2018-08-18 17:23:24'),
(7, 'Replay 7 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 0, 1, 2, '2018-08-18 17:23:24', '2018-08-18 17:23:24'),
(8, 'Replay 8 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 0, 2, 4, '2018-08-18 17:23:24', '2018-08-18 17:23:24');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `site_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `contact_number`, `contact_email`, `address`, `about`, `created_at`, `updated_at`) VALUES
(1, 'Book Store', '+20 0111 783 5451', 'ahemdhegazy214@gmail.com', 'Eqy - Sohag - gehena', 'This is my lorm text ', '2018-08-18 17:23:25', '2018-08-18 17:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`, `created_at`, `updated_at`) VALUES
(2, 'Laravel', '2018-08-18 17:29:39', '2018-08-18 17:29:39'),
(3, 'Angular', '2018-08-18 18:40:46', '2018-08-18 18:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` bigint(20) NOT NULL DEFAULT '30',
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'img/avatar/3.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `points`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 30, 'img\\avatar\\3.png', '$2y$10$mlpsVDZ3URtCLn.2mhRMG.ooy0l2avrFAAE4Fqnnsk7YAug92HvIy', NULL, '2018-08-18 17:23:24', '2018-08-18 17:23:24'),
(2, 'ahmed', 'ahmed@gmail.com', 30, 'img\\avatar\\3.png', '$2y$10$/6DA.yjc5iMnIxnAwQAjfe8Ys0/y2TfXevTKm6KkZrKg7RdXlBrt2', NULL, '2018-08-18 17:23:24', '2018-08-18 17:23:24'),
(3, 'Amira', 'amira@gmail.com', 30, 'img/avatar/3.png', '$2y$10$FmM/38L0jZfFXi8gRdTye.gWgi0O/GE9RaVMl/W4t1T/833/T1mM.', 'qMCNN7q0zoaxLqASlUeVNXoNOyopOOgxwWs9spDjrTxHSrYoSnyn4BLBMNzb', '2018-08-18 18:25:09', '2018-08-18 18:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `watchers`
--

DROP TABLE IF EXISTS `watchers`;
CREATE TABLE IF NOT EXISTS `watchers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `discussion_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `watchers_user_id_foreign` (`user_id`),
  KEY `watchers_discussion_id_foreign` (`discussion_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
