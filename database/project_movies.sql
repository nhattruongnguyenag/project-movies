-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 19, 2023 at 01:46 AM
-- Server version: 8.0.16
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_BlogUser` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '11111211111111111111bbbbc', '2023-05-18 10:11:18', '2023-05-18 10:07:51'),
(2, 'Phim lẻ 11111', '2023-05-18 10:11:18', '2023-05-18 10:46:24'),
(3, 'Phim lẻ', '2023-05-18 10:11:18', NULL),
(4, 'Phim lẻ', '2023-05-18 10:11:18', NULL),
(5, 'Phim lẻ', '2023-05-18 10:11:18', NULL),
(6, 'Phim lẻ', '2023-05-18 10:11:18', NULL),
(7, 'Phim lẻ', '2023-05-18 10:11:18', NULL),
(8, 'Phim lẻ', '2023-05-18 10:11:18', NULL),
(9, 'abc', '2023-05-18 05:06:10', '2023-05-18 05:06:10'),
(10, '111111', '2023-05-18 05:45:02', '2023-05-18 05:45:02'),
(11, '111111', '2023-05-18 05:47:04', '2023-05-18 05:47:04'),
(12, 'aaaaaaaaaaaa', '2023-05-18 06:04:31', '2023-05-18 06:04:31'),
(13, 'aaaaaaaa', '2023-05-18 06:04:46', '2023-05-18 06:04:46'),
(14, '11', '2023-05-18 09:22:07', '2023-05-18 09:22:07'),
(15, 'aaaaaaaaaaaa', '2023-05-18 09:38:48', '2023-05-18 09:38:48'),
(16, '333333333333333', '2023-05-18 10:46:32', '2023-05-18 10:46:32'),
(17, '11111111', '2023-05-18 10:47:33', '2023-05-18 10:47:33'),
(18, '111', '2023-05-18 11:02:56', '2023-05-18 11:02:56');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `move_id` int(11) NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `episode` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_UserTable` (`user_id`),
  KEY `FK_MovieTable` (`move_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

DROP TABLE IF EXISTS `episodes`;
CREATE TABLE IF NOT EXISTS `episodes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `move_id` int(11) NOT NULL,
  `link` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `episode` int(11) NOT NULL,
  `trailer` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_EpisodeMovie` (`move_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genreses`
--

DROP TABLE IF EXISTS `genreses`;
CREATE TABLE IF NOT EXISTS `genreses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genreses`
--

INSERT INTO `genreses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(8, '22222222222222', '2023-05-18 14:49:50', '2023-05-18 14:49:50'),
(4, '44444444', '2023-05-18 11:18:11', '2023-05-18 11:18:11'),
(5, '55555555555', '2023-05-18 11:18:17', '2023-05-18 11:18:17'),
(7, '3333333333333333333', '2023-05-18 14:49:44', '2023-05-18 14:49:44');

-- --------------------------------------------------------

--
-- Table structure for table `genreses_movies`
--

DROP TABLE IF EXISTS `genreses_movies`;
CREATE TABLE IF NOT EXISTS `genreses_movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genres_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_GenresTable` (`genres_id`),
  KEY `FK_MoviesTable` (`movie_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genreses_movies`
--

INSERT INTO `genreses_movies` (`id`, `genres_id`, `movie_id`) VALUES
(14, 5, 3),
(50, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `actor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_year` int(11) DEFAULT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_CategoryMovie` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `actor`, `director`, `name`, `description`, `status`, `image`, `category_id`, `country`, `duration`, `publish_year`, `view_count`, `created_at`, `updated_at`) VALUES
(1, 'Donnie Yen, Takeshi Kaneshiro, Tang Wei, Jimmy Wan', 'Peter Chan', 'aaaaaaaaaaaa', '11111111111111111111111111', 'Full', NULL, 4, 'Mỹ', '115 Phút', 2011, 0, '2023-05-18 12:53:22', '2023-05-18 14:53:49'),
(2, 'Donnie Yen, Takeshi Kaneshiro, Tang Wei, Jimmy Wan', 'Peter Chan', 'DRAGON', 'aaaaaaaaaaaaaaa', 'Full', NULL, 1, 'Mỹ', '115 Phút', 2011, 0, '2023-05-18 13:38:33', '2023-05-18 13:38:33'),
(3, 'Donnie Yen, Takeshi Kaneshiro, Tang Wei, Jimmy Wan', 'Peter Chan', 'DRAGON', 'aaaaaaaaaaaaaaa', 'Full', NULL, 3, 'Mỹ', '115 Phút', 2011, 0, '2023-05-18 13:40:23', '2023-05-18 14:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

DROP TABLE IF EXISTS `users_roles`;
CREATE TABLE IF NOT EXISTS `users_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_UserTable` (`user_id`),
  KEY `FK_RoleTable` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
