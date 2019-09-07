-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2019 at 02:55 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `queue`
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
(1, 'Ahmed', 'ahmed@gmail.com', 'img\\avatar\\3.png', 'im admin', '$2y$10$CIOQuuuGE4sk/wbXPV06/OnQD5gjJVnlqJoIRfCilRHDZNHlwmc2q', NULL, '2019-03-26 09:53:12', '2019-03-26 09:53:12');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'laravel', 'laravel', '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(2, 'angular js', 'angular-js', '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(3, 'bootstrap', 'bootstrap', '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(4, 'vue js', 'vue-js', '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(5, 'react js', 'react-js', '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(6, 'codeliguinter', 'codeliguinter', '2019-03-26 09:53:12', '2019-03-26 09:53:12');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`id`, `user_id`, `title`, `content`, `slug`, `approval`, `comments`, `views`, `channel_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'This is Introdiction to Laravel', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 'this-is-introdiction-to-laravel', 0, 0, 0, 1, '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(2, 2, 'Css3 Custimaization with LESS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 'css3-custimaization-with-less', 0, 3, 0, 2, '2019-03-26 09:53:12', '2019-03-26 09:53:36'),
(3, 2, 'Adding Notification To Laravel project', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 'adding-notification-to-laravel-project', 0, 1, 0, 3, '2019-03-26 09:53:12', '2019-03-26 09:53:36'),
(4, 2, 'Introdiction To bootstrap 4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 'introdiction-to-bootstrap-4', 0, 2, 0, 4, '2019-03-26 09:53:12', '2019-03-26 09:53:36'),
(5, 2, 'Angular Route & Firebase ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 'angular-route-firebase', 0, 2, 0, 5, '2019-03-26 09:53:12', '2019-03-26 09:53:36'),
(6, 2, 'Sass Synchronous Awsome Stylesheet', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 'sass-synchronous-awsome-stylesheet', 0, 0, 0, 4, '2019-03-26 09:53:12', '2019-03-26 09:53:12');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=293 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(280, '2014_10_12_000000_create_users_table', 1),
(281, '2014_10_12_100000_create_password_resets_table', 1),
(282, '2018_04_08_163240_create_oauth_identities_table', 1),
(283, '2018_04_08_174754_create_channels_table', 1),
(284, '2018_04_08_174842_create_discussions_table', 1),
(285, '2018_04_08_174925_create_replies_table', 1),
(286, '2018_04_10_073539_create_profiles_table', 1),
(287, '2018_04_12_123704_create_likes_table', 1),
(288, '2018_04_12_180959_create_watchers_table', 1),
(289, '2018_08_13_201644_create_tags_table', 1),
(290, '2018_08_15_191109_create_admins_table', 1),
(291, '2018_08_15_192622_create_settings_table', 1),
(292, '2018_08_18_180053_create_discussion_tag_table', 1);

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
(1, 'Replay 1 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 0, 1, 2, '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(2, 'Replay 2 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 0, 2, 2, '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(3, 'Replay 3 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 0, 1, 3, '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(4, 'Replay 4 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 0, 2, 4, '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(5, 'Replay 5 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 0, 1, 5, '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(6, 'Replay 6 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 0, 1, 5, '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(7, 'Replay 7 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 0, 1, 2, '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(8, 'Replay 8 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?', 0, 2, 4, '2019-03-26 09:53:12', '2019-03-26 09:53:12');

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
  `vistores` int(11) NOT NULL DEFAULT '200',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `contact_number`, `contact_email`, `address`, `about`, `vistores`, `created_at`, `updated_at`) VALUES
(1, 'Book Store', '+20 0111 783 5451', 'ahemdhegazy214@gmail.com', 'Eqy - Sohag - gehena', 'This is my lorm text ', 202, '2019-03-26 09:53:12', '2019-03-26 09:53:49');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(2, 'Php', '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(3, 'Framwork', '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(4, 'Angular', '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(5, 'Javascript', '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(6, 'VueJs', '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(7, 'ReactJS', '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(8, 'Codeginter', '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(9, 'Ionic', '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(10, 'Cerdova', '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(11, 'Semantics', '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(12, 'Design', '2019-03-26 09:53:12', '2019-03-26 09:53:12');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `points`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 30, 'img\\avatar\\3.png', '$2y$10$dCO5VhySaUbyLFevk2yY/.mBRPLUNUnsWvAppwfwtZnBdpqV1aQhS', NULL, '2019-03-26 09:53:12', '2019-03-26 09:53:12'),
(2, 'ahmed', 'ahmed@gmail.com', 30, 'img\\avatar\\3.png', '$2y$10$pt.51U.Sl6Q2qDLlHfAkOeJoDGnqTSxtRnfyOsmc4gxp8OxSYsDim', NULL, '2019-03-26 09:53:12', '2019-03-26 09:53:12');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
