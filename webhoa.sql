-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for webhoa
CREATE DATABASE IF NOT EXISTS `webhoa` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `webhoa`;


-- Dumping structure for table webhoa.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.categories: ~1 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Hoa', '2017-03-15 14:25:38', '2017-03-15 14:25:41'),
	(2, 'Quà tặng', '2017-03-16 00:00:00', '2017-03-16 00:00:00');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;


-- Dumping structure for table webhoa.category_product
CREATE TABLE IF NOT EXISTS `category_product` (
  `category_id` int(10) unsigned NOT NULL DEFAULT '0',
  `product_id` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`,`product_id`),
  KEY `category_id_product_id` (`category_id`,`product_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `category_product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `category_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.category_product: ~8 rows (approximately)
/*!40000 ALTER TABLE `category_product` DISABLE KEYS */;
INSERT INTO `category_product` (`category_id`, `product_id`, `created_at`, `updated_at`) VALUES
	(1, 83, NULL, NULL),
	(1, 91, '2017-03-16 00:53:57', '2017-03-16 00:53:57'),
	(1, 94, '2017-03-16 01:47:03', '2017-03-16 01:47:03'),
	(2, 92, '2017-03-16 00:55:26', '2017-03-16 00:55:26'),
	(2, 93, '2017-03-16 00:57:07', '2017-03-16 00:57:07'),
	(2, 94, '2017-03-16 01:47:03', '2017-03-16 01:47:03'),
	(2, 95, '2017-03-16 02:08:07', '2017-03-16 02:08:07'),
	(2, 96, '2017-03-16 02:27:41', '2017-03-16 02:27:41');
/*!40000 ALTER TABLE `category_product` ENABLE KEYS */;


-- Dumping structure for table webhoa.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.contacts: ~3 rows (approximately)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `name`, `email`, `text`, `seen`, `created_at`, `updated_at`) VALUES
	(1, 'Dupont', 'dupont@la.fr', 'Lorem ipsum inceptos malesuada leo fusce tortor sociosqu semper, facilisis semper class tempus faucibus tristique duis eros, cubilia quisque habitasse aliquam fringilla orci non. Vel laoreet dolor enim justo facilisis neque accumsan, in ad venenatis hac per dictumst nulla ligula, donec mollis massa porttitor ullamcorper risus. Eu platea fringilla, habitasse.', 0, '2017-03-11 08:34:21', '2017-03-11 08:34:21'),
	(2, 'Durand', 'durand@la.fr', ' Lorem ipsum erat non elit ultrices placerat, netus metus feugiat non conubia fusce porttitor, sociosqu diam commodo metus in. Himenaeos vitae aptent consequat luctus purus eleifend enim, sollicitudin eleifend porta malesuada ac class conubia, condimentum mauris facilisis conubia quis scelerisque. Lacinia tempus nullam felis fusce ac potenti netus ornare semper molestie, iaculis fermentum ornare curabitur tincidunt imperdiet scelerisque imperdiet euismod.', 0, '2017-03-11 08:34:21', '2017-03-11 08:34:21'),
	(3, 'Martin', 'martin@la.fr', 'Lorem ipsum tempor netus aenean ligula habitant vehicula tempor ultrices, placerat sociosqu ultrices consectetur ullamcorper tincidunt quisque tellus, ante nostra euismod nec suspendisse sem curabitur elit. Malesuada lacus viverra sagittis sit ornare orci, augue nullam adipiscing pulvinar libero aliquam vestibulum, platea cursus pellentesque leo dui. Lectus curabitur euismod ad, erat.', 1, '2017-03-11 08:34:21', '2017-03-11 08:34:21');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;


-- Dumping structure for table webhoa.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.images: ~0 rows (approximately)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `title`, `url`, `created_at`, `updated_at`) VALUES
	(114, 'img 1', 'son.jpg', NULL, NULL),
	(115, 'img 1', 'son.jpg', NULL, NULL),
	(116, '', '1489653621.jpg', '2017-03-16 08:40:21', '2017-03-16 08:40:21'),
	(117, '', '1489653621.jpg', '2017-03-16 08:40:21', '2017-03-16 08:40:21'),
	(118, '1489653763.jpg', 'uploads/1489653763.jpg', '2017-03-16 08:42:43', '2017-03-16 08:42:43'),
	(119, '', '', '2017-03-16 08:45:59', '2017-03-16 08:45:59'),
	(120, '', '', '2017-03-16 08:46:29', '2017-03-16 08:46:29'),
	(121, '', '', '2017-03-16 08:46:29', '2017-03-16 08:46:29'),
	(122, '1489654074.jpg', 'uploads/1489654074.jpg', '2017-03-16 08:47:54', '2017-03-16 08:47:54'),
	(123, '1489654085.jpg', 'uploads/1489654085.jpg', '2017-03-16 08:48:05', '2017-03-16 08:48:05'),
	(124, '1489654117.jpg', 'uploads/1489654117.jpg', '2017-03-16 08:48:37', '2017-03-16 08:48:37'),
	(125, '1489654117.jpg', 'uploads/1489654117.jpg', '2017-03-16 08:48:37', '2017-03-16 08:48:37'),
	(126, '1489654138.jpg', 'uploads/1489654138.jpg', '2017-03-16 08:48:58', '2017-03-16 08:48:58'),
	(127, '1489654139.jpg', 'uploads/1489654139.jpg', '2017-03-16 08:48:59', '2017-03-16 08:48:59'),
	(128, '1489654139.jpg', 'uploads/1489654139.jpg', '2017-03-16 08:48:59', '2017-03-16 08:48:59'),
	(129, '1489654139.jpg', 'uploads/1489654139.jpg', '2017-03-16 08:48:59', '2017-03-16 08:48:59'),
	(130, '1489654139.jpg', 'uploads/1489654139.jpg', '2017-03-16 08:48:59', '2017-03-16 08:48:59'),
	(131, '1489654139.jpg', 'uploads/1489654139.jpg', '2017-03-16 08:48:59', '2017-03-16 08:48:59');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;


-- Dumping structure for table webhoa.image_product
CREATE TABLE IF NOT EXISTS `image_product` (
  `image_id` int(10) unsigned NOT NULL DEFAULT '0',
  `product_id` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`image_id`,`product_id`),
  KEY `image_id_product_id` (`image_id`,`product_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `image_product_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`),
  CONSTRAINT `image_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.image_product: ~0 rows (approximately)
/*!40000 ALTER TABLE `image_product` DISABLE KEYS */;
INSERT INTO `image_product` (`image_id`, `product_id`, `created_at`, `updated_at`) VALUES
	(114, 83, '2017-03-16 14:30:37', '2017-03-16 14:30:41'),
	(115, 83, '2017-03-16 14:30:37', '2017-03-16 14:30:41'),
	(124, 133, '2017-03-16 08:48:37', '2017-03-16 08:48:37'),
	(125, 133, '2017-03-16 08:48:37', '2017-03-16 08:48:37'),
	(126, 134, '2017-03-16 08:48:59', '2017-03-16 08:48:59'),
	(127, 134, '2017-03-16 08:48:59', '2017-03-16 08:48:59'),
	(128, 134, '2017-03-16 08:48:59', '2017-03-16 08:48:59'),
	(129, 134, '2017-03-16 08:48:59', '2017-03-16 08:48:59'),
	(130, 134, '2017-03-16 08:48:59', '2017-03-16 08:48:59'),
	(131, 134, '2017-03-16 08:48:59', '2017-03-16 08:48:59');
/*!40000 ALTER TABLE `image_product` ENABLE KEYS */;


-- Dumping structure for table webhoa.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.migrations: ~2 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2017_03_14_143420_create_categories_table', 1),
	('2017_03_15_054210_create_category_allocations_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Dumping structure for table webhoa.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Dumping structure for table webhoa.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.products: ~31 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `title`, `category_id`, `images`, `content`, `price`, `created_at`, `updated_at`) VALUES
	(83, '4124', '', '', '', 124, '2017-03-15 04:42:02', '2017-03-15 04:42:02'),
	(84, '14124', '', '', '', 1243, '2017-03-15 04:44:31', '2017-03-15 04:44:31'),
	(85, '', '', '', '', 0, '2017-03-15 04:45:50', '2017-03-15 04:45:50'),
	(86, '235', '', '', '', 2354, '2017-03-15 04:46:02', '2017-03-15 04:46:02'),
	(87, '5235', '', '', '', 235, '2017-03-15 04:46:07', '2017-03-15 04:46:07'),
	(88, '4124', '', '', '', 4124, '2017-03-15 04:48:43', '2017-03-15 04:48:43'),
	(89, '123', '', '', '', 123, '2017-03-15 05:36:13', '2017-03-15 05:36:13'),
	(90, '2`413414', '', '', '', 124123, '2017-03-15 07:30:02', '2017-03-15 07:30:02'),
	(91, '124', '', '', '', 12412, '2017-03-16 00:53:57', '2017-03-16 00:53:57'),
	(92, '12412', '', '', '', 51251, '2017-03-16 00:55:26', '2017-03-16 00:55:26'),
	(93, '12412', '', '', '', 51251, '2017-03-16 00:57:06', '2017-03-16 00:57:06'),
	(94, 'u-07890', '', '', '', 780789, '2017-03-16 01:47:03', '2017-03-16 01:47:03'),
	(95, 'fas', '', '', '', 0, '2017-03-16 02:08:06', '2017-03-16 02:08:06'),
	(96, '4124', '', '', '', 124, '2017-03-16 02:27:40', '2017-03-16 02:27:40'),
	(97, '3241', '', '', '', 1234, '2017-03-16 02:29:35', '2017-03-16 02:29:35'),
	(98, '3241', '', '', '1231 12<span style="font-weight: bold;">3123</span>', 1234, '2017-03-16 02:30:41', '2017-03-16 02:30:41'),
	(99, '2423', '', '', '1231asdf ádf', 234, '2017-03-16 02:38:31', '2017-03-16 02:38:31'),
	(100, '2423', '', '', '<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAAQABAAD/7QCcUGhvdG9zaG9wIDMuMAA4QklNBAQAAAAAAIAcAmcAFGhyYnQtTHJTWWVMYURZamV6cVJTHAIoAGJGQk1EMDEwMDBhYzAwMzAwMDA5MzBhMDAwMDBmMTYwMDAwNjUxODAwMDBiMzFhMDAwMDQyMjkwMDAwNmUzZjAwMDBjZDQwMDAwMDM5NDMwMDAwYWY0NT', 234, '2017-03-16 02:38:47', '2017-03-16 02:38:47'),
	(101, '2423', '', '', '<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAAQABAAD/7QCcUGhvdG9zaG9wIDMuMAA4QklNBAQAAAAAAIAcAmcAFGhyYnQtTHJTWWVMYURZamV6cVJTHAIoAGJGQk1EMDEwMDBhYzAwMzAwMDA5MzBhMDAwMDBmMTYwMDAwNjUxODAwMDBiMzFhMDAwMDQyMjkwMDAwNmUzZjAwMDBjZDQwMDAwMDM5NDMwMDAwYWY0NT', 234, '2017-03-16 03:01:50', '2017-03-16 03:01:50'),
	(102, 'asd', '', '', '12asdfasd', 0, '2017-03-16 05:46:55', '2017-03-16 05:46:55'),
	(103, 'asd', '', '', '<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAAQABAAD/7QCcUGhvdG9zaG9wIDMuMAA4QklNBAQAAAAAAIAcAmcAFDZVSm80cXdOc2JQcUlXNVNXa3UtHAIoAGJGQk1EMDEwMDBhOWMwZDAwMDAwYmMyMDAwMGM2MmEwMjAwZjk0MzAyMDA1YTc3MDIwMGUwYWUwMzAwZjllNTA1MDA0ZjBhMDYwMDkyNDUwNjAwYmY4Zj', 0, '2017-03-16 05:47:44', '2017-03-16 05:47:44'),
	(104, 'afas', '', '', '1231', 0, '2017-03-16 06:08:22', '2017-03-16 06:08:22'),
	(105, '4567456', '', '', '<p><img src="http://webhoa.vn/uploads/son.jpg">1231</p>', 45674567, '2017-03-16 06:28:57', '2017-03-16 06:28:57'),
	(106, '4567456', '', '', '<p><img src="http://webhoa.vn/uploads/son.jpg">1231</p>', 45674567, '2017-03-16 06:29:22', '2017-03-16 06:29:22'),
	(107, '6789', '', '', '<p><img src="/uploads/son.jpg">1231</p>', 67896789, '2017-03-16 06:29:33', '2017-03-16 06:29:33'),
	(108, '123', '', '', '<p>1231<img src="/uploads/1489647148_12722.jpg"></p>', 123, '2017-03-16 06:52:32', '2017-03-16 06:52:32'),
	(109, '123', '', '', '<p>1231<img src="/uploads/1489647148_12722.jpg"></p>', 123, '2017-03-16 06:53:20', '2017-03-16 06:53:20'),
	(110, '123', '', '', '<p>1231<img src="/uploads/1489647148_12722.jpg"></p>', 123, '2017-03-16 06:53:45', '2017-03-16 06:53:45'),
	(111, '67857', '', '', '<p><img src="/uploads/1489647941_39678.jpg"><img src="/uploads/1489647947_76475.jpg"><br></p>', 8558, '2017-03-16 07:05:52', '2017-03-16 07:05:52'),
	(112, 'asdf', '', '', '<p>asdfasdf</p>', 0, '2017-03-16 07:19:06', '2017-03-16 07:19:06'),
	(113, 'asdf', '', '', '<p><img src="/uploads/1489648753_22968.jpg"><br></p>', 0, '2017-03-16 07:19:16', '2017-03-16 07:19:16'),
	(114, 'asdaf', '', '', '<p><img src="/uploads/1489649893_13782.jpg"><br></p>', 0, '2017-03-16 07:38:16', '2017-03-16 07:38:16'),
	(115, 'ád', '', '', '<p>ầ</p>', 0, '2017-03-16 08:30:04', '2017-03-16 08:30:04'),
	(116, 'ád', '', '', '<p>ầ</p>', 0, '2017-03-16 08:30:26', '2017-03-16 08:30:26'),
	(117, 'ád', '', '', '<p>ầ</p>', 0, '2017-03-16 08:30:54', '2017-03-16 08:30:54'),
	(118, 'ád', '', '', '<p>ầ</p>', 0, '2017-03-16 08:31:04', '2017-03-16 08:31:04'),
	(119, 'ád', '', '', '<p>ầ</p>', 0, '2017-03-16 08:31:27', '2017-03-16 08:31:27'),
	(120, 'ád', '', '', '<p>ầ</p>', 0, '2017-03-16 08:32:25', '2017-03-16 08:32:25'),
	(121, 'ád', '', '', '<p>ầ</p>', 0, '2017-03-16 08:35:46', '2017-03-16 08:35:46'),
	(122, 'ád', '', '', '<p>ầ</p>', 0, '2017-03-16 08:37:43', '2017-03-16 08:37:43'),
	(123, 'ád', '', '', '<p>ầ</p>', 0, '2017-03-16 08:37:46', '2017-03-16 08:37:46'),
	(124, 'ád', '', '', '<p>ầ</p>', 0, '2017-03-16 08:38:40', '2017-03-16 08:38:40'),
	(125, 'ád', '', '', '<p>ầ</p>', 0, '2017-03-16 08:38:52', '2017-03-16 08:38:52'),
	(126, 'ád', '', '', '<p>ầ</p>', 0, '2017-03-16 08:40:21', '2017-03-16 08:40:21'),
	(127, '124', '', '', '<p>124</p>', 4124, '2017-03-16 08:42:43', '2017-03-16 08:42:43'),
	(128, '124', '', '', '<p>124</p>', 4124, '2017-03-16 08:45:47', '2017-03-16 08:45:47'),
	(129, '124', '', '', '<p>124</p>', 4124, '2017-03-16 08:45:59', '2017-03-16 08:45:59'),
	(130, '124', '', '', '<p>124</p>', 4124, '2017-03-16 08:46:29', '2017-03-16 08:46:29'),
	(131, '124124', '', '', '<p>124</p>', 4124, '2017-03-16 08:47:53', '2017-03-16 08:47:53'),
	(132, '124124', '', '', '<p>124</p>', 4124, '2017-03-16 08:48:05', '2017-03-16 08:48:05'),
	(133, '124124', '', '', '<p>124</p>', 4124, '2017-03-16 08:48:37', '2017-03-16 08:48:37'),
	(134, '346', '', '', '<p>4567</p>', 45635, '2017-03-16 08:48:58', '2017-03-16 08:48:58');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;


-- Dumping structure for table webhoa.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.roles: ~3 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Administrator', 'admin', '2017-03-11 08:34:20', '2017-03-11 08:34:20'),
	(2, 'Redactor', 'redac', '2017-03-11 08:34:20', '2017-03-11 08:34:20'),
	(3, 'User', 'user', '2017-03-11 08:34:20', '2017-03-11 08:34:20');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;


-- Dumping structure for table webhoa.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `valid` tinyint(1) NOT NULL DEFAULT '0',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.users: ~4 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`, `seen`, `valid`, `confirmed`, `confirmation_code`, `created_at`, `updated_at`, `remember_token`) VALUES
	(1, 'GreatAdmin', 'admin@la.fr', '$2y$10$YCzrrR/n8KebdLvDGkngr.uVV5N3oJLnCiD998F1551JrObQBojXm', 1, 1, 0, 1, NULL, '2017-03-11 08:34:20', '2017-03-11 08:34:20', NULL),
	(2, 'GreatRedactor', 'redac@la.fr', '$2y$10$L3ytEP7pFndg5gSeUIORbeQkln4BtA2fyg4SA3n.jNK8RJ.2XvEDG', 2, 1, 1, 1, NULL, '2017-03-11 08:34:20', '2017-03-11 09:29:18', 'FBVAKSyBvwyRf4BkEs1gfcpfVxrsCspuxexv0J8w9GZfsOD4WPDPMAqYq0XZ'),
	(3, 'Walker', 'walker@la.fr', '$2y$10$pLnINZxl1XqmZWEv94DBh.5y2wsxRI7jB3gLl54cd4YMldQFfY6sy', 3, 0, 0, 1, NULL, '2017-03-11 08:34:20', '2017-03-11 09:10:30', 'oxWicoBWufNOUBpYqimWqefHHfUZyL0Z73K9Jqxw0i2eNqiQu27PU4XxTnqd'),
	(4, 'Slacker', 'slacker@la.fr', '$2y$10$.0/UgSMYfaQLqDDpEWTIT.7fZuyZJbKNn5RfOZBrgn.Z3YH863VEK', 3, 0, 0, 1, NULL, '2017-03-11 08:34:21', '2017-03-11 08:34:21', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
