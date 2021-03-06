-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table xemngaymuangay.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.categories: ~12 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Hoa tươi', 'hoa-tuoi', '2017-03-15 14:25:38', '2017-03-19 07:51:18'),
	(2, 'Cưới hỏi', 'cuoi-hoi', '2017-03-16 00:00:00', '2017-03-19 07:51:27'),
	(3, 'Sinh nhật', 'sinh-nhat', '2017-03-18 05:54:15', '2017-03-19 07:51:34'),
	(4, 'Khai trương', 'khai-truong-hoi-nghi', '2017-03-18 05:54:20', '2017-05-01 13:26:49'),
	(5, 'Chúc mừng', 'chuc-mung', '2017-03-19 07:51:57', '2017-03-19 07:51:57'),
	(6, 'Chia buồn', 'chia-buon', '2017-03-19 07:52:04', '2017-03-19 07:52:04'),
	(7, 'Lan hồ điệp', 'lan-ho-diep', '2017-03-19 07:52:20', '2017-03-19 07:52:20'),
	(8, 'Bó hoa', 'bo-hoa', '2017-03-21 05:56:16', '2017-03-21 05:56:16'),
	(9, 'Giỏ hoa', 'gio-hoa', '2017-03-21 05:56:25', '2017-03-21 05:56:25'),
	(10, 'Màn hình samsung', 'han-hinh-samsung', '2017-05-12 21:24:41', '2017-05-12 21:24:41'),
	(11, 'Màn hình LG', 'man-hinh-lg', '2017-05-12 21:24:41', '2017-05-12 21:24:41'),
	(12, 'Màn hinh Oppel', 'man-hinh-oppel', '2017-05-12 21:27:01', '2017-05-12 21:27:01');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.category_product
DROP TABLE IF EXISTS `category_product`;
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

-- Dumping data for table xemngaymuangay.category_product: ~37 rows (approximately)
/*!40000 ALTER TABLE `category_product` DISABLE KEYS */;
INSERT INTO `category_product` (`category_id`, `product_id`, `created_at`, `updated_at`) VALUES
	(1, 264, '2017-05-18 21:37:42', '2017-05-18 21:37:42'),
	(1, 284, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(1, 296, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(2, 264, '2017-05-18 21:37:42', '2017-05-18 21:37:42'),
	(2, 273, '2017-05-12 22:07:44', '2017-05-12 22:07:44'),
	(2, 285, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(2, 297, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(3, 274, '2017-05-12 22:07:44', '2017-05-12 22:07:44'),
	(3, 286, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(3, 298, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(4, 275, '2017-05-12 22:07:44', '2017-05-12 22:07:44'),
	(4, 287, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(4, 299, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(5, 263, '2017-05-12 21:49:28', '2017-05-12 21:49:28'),
	(5, 276, '2017-05-12 22:07:44', '2017-05-12 22:07:44'),
	(5, 288, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(5, 300, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(6, 277, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(6, 289, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(6, 301, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(7, 278, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(7, 290, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(7, 302, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(8, 279, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(8, 291, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(8, 303, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(9, 280, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(9, 292, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(10, 270, '2017-05-12 21:49:28', '2017-05-12 21:49:28'),
	(10, 281, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(10, 293, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(11, 271, '2017-05-12 21:27:02', '2017-05-12 21:27:02'),
	(11, 282, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(11, 294, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(12, 258, '2017-05-12 21:49:28', '2017-05-12 21:49:28'),
	(12, 283, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(12, 295, '2017-05-12 22:07:45', '2017-05-12 22:07:45');
/*!40000 ALTER TABLE `category_product` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.contacts
DROP TABLE IF EXISTS `contacts`;
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

-- Dumping data for table xemngaymuangay.contacts: ~3 rows (approximately)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `name`, `email`, `text`, `seen`, `created_at`, `updated_at`) VALUES
	(1, 'Dupont', 'dupont@la.fr', 'Lorem ipsum inceptos malesuada leo fusce tortor sociosqu semper, facilisis semper class tempus faucibus tristique duis eros, cubilia quisque habitasse aliquam fringilla orci non. Vel laoreet dolor enim justo facilisis neque accumsan, in ad venenatis hac per dictumst nulla ligula, donec mollis massa porttitor ullamcorper risus. Eu platea fringilla, habitasse.', 0, '2017-03-11 08:34:21', '2017-03-11 08:34:21'),
	(2, 'Durand', 'durand@la.fr', ' Lorem ipsum erat non elit ultrices placerat, netus metus feugiat non conubia fusce porttitor, sociosqu diam commodo metus in. Himenaeos vitae aptent consequat luctus purus eleifend enim, sollicitudin eleifend porta malesuada ac class conubia, condimentum mauris facilisis conubia quis scelerisque. Lacinia tempus nullam felis fusce ac potenti netus ornare semper molestie, iaculis fermentum ornare curabitur tincidunt imperdiet scelerisque imperdiet euismod.', 0, '2017-03-11 08:34:21', '2017-03-11 08:34:21'),
	(3, 'Martin', 'martin@la.fr', 'Lorem ipsum tempor netus aenean ligula habitant vehicula tempor ultrices, placerat sociosqu ultrices consectetur ullamcorper tincidunt quisque tellus, ante nostra euismod nec suspendisse sem curabitur elit. Malesuada lacus viverra sagittis sit ornare orci, augue nullam adipiscing pulvinar libero aliquam vestibulum, platea cursus pellentesque leo dui. Lectus curabitur euismod ad, erat.', 1, '2017-03-11 08:34:21', '2017-03-11 08:34:21');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.coupon
DROP TABLE IF EXISTS `coupon`;
CREATE TABLE IF NOT EXISTS `coupon` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `starts_at` datetime NOT NULL,
  `ends_at` datetime NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.coupon: ~1 rows (approximately)
/*!40000 ALTER TABLE `coupon` DISABLE KEYS */;
INSERT INTO `coupon` (`id`, `code`, `discount`, `starts_at`, `ends_at`, `active`, `created_at`, `updated_at`) VALUES
	(1, '1234', 20, '2017-01-01 00:00:00', '2017-10-20 00:00:00', 0, NULL, NULL);
/*!40000 ALTER TABLE `coupon` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.currencies
DROP TABLE IF EXISTS `currencies`;
CREATE TABLE IF NOT EXISTS `currencies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `symbol` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `format` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `exchange_rate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `currencies_code_index` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.currencies: ~0 rows (approximately)
/*!40000 ALTER TABLE `currencies` DISABLE KEYS */;
INSERT INTO `currencies` (`id`, `name`, `code`, `symbol`, `format`, `exchange_rate`, `active`, `created_at`, `updated_at`) VALUES
	(1, 'US Dollar', 'USD', '$', '$1,0.00', '0', 0, '2017-03-19 06:01:21', '2017-03-19 06:01:21');
/*!40000 ALTER TABLE `currencies` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.customers
DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.customers: ~108 rows (approximately)
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` (`id`, `name`, `address`, `tel`, `city`, `email`, `created_at`, `updated_at`) VALUES
	(27, 'hoangson', 'safasf adf', '01218851146', '684a6', 'hoangson@gmail.com', '2017-04-08 01:27:31', '2017-04-08 01:27:31'),
	(28, 'hoang son', '23432', '13421', '234', 'hoangson@gmail.com', '2017-04-08 01:36:45', '2017-04-08 01:36:45'),
	(29, 'hoang son', 'ádflkjh', '01218851144', 'l;ákjdf', 'vihoangson@gmail.com', '2017-04-08 08:46:19', '2017-04-08 08:46:19'),
	(30, 'hson', 'sadflk', 'saldfkj', 'laskdfj', 'sasf@fasd.com', '2017-04-08 09:38:45', '2017-04-08 09:38:45'),
	(31, '123', ';lksadjf', 'lwaekfj', ';lkjas', 'eqw@gmailc.om', '2017-04-08 09:42:48', '2017-04-08 09:42:48'),
	(32, '345345', 'lksj', 'lkaesrjf', ';lkj', 'ss@fgad.com', '2017-04-08 09:46:20', '2017-04-08 09:46:20'),
	(33, '123', 'asdlkj', 'lskjdf', 'lkj', '123ldfkj@fm.com', '2017-04-22 17:25:32', '2017-04-22 17:25:32'),
	(34, '123', '12312', 'a2341234', '4124', 'rq@sfa.4qe', '2017-04-30 04:15:51', '2017-04-30 04:15:51'),
	(35, '123', '343', 'slf1', '2341', 'sfsad@ff.com', '2017-05-13 09:55:51', '2017-05-13 09:55:51'),
	(36, '222', '134', 'aslfk', '4213', 'fa@gmailc.om', '2017-05-13 09:57:14', '2017-05-13 09:57:14'),
	(37, 'eqwe', '12341', '31241', '1234', 'ee@gmail.com', '2017-05-13 09:58:23', '2017-05-13 09:58:23'),
	(38, '22', '22', '212', '1313', 'aaa@gm.com', '2017-05-13 10:02:50', '2017-05-13 10:02:50'),
	(39, '100', '123', '2313', '123', 'ssos@fa.com', '2017-05-13 10:05:31', '2017-05-13 10:05:31'),
	(40, '100', '123', '2313', '123', 'ssos@fa.com', '2017-05-13 10:07:18', '2017-05-13 10:07:18'),
	(41, 'sample text', 'sample text', '4124', 'sample text', 'sample@gmail.com', '2017-05-13 10:14:43', '2017-05-13 10:14:43'),
	(42, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-13 10:15:28', '2017-05-13 10:15:28'),
	(43, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-13 10:16:09', '2017-05-13 10:16:09'),
	(44, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-13 10:20:19', '2017-05-13 10:20:19'),
	(45, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-13 10:22:50', '2017-05-13 10:22:50'),
	(46, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-13 10:23:59', '2017-05-13 10:23:59'),
	(47, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-13 10:48:11', '2017-05-13 10:48:11'),
	(48, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-13 10:53:44', '2017-05-13 10:53:44'),
	(49, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-13 10:53:52', '2017-05-13 10:53:52'),
	(50, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-13 10:53:57', '2017-05-13 10:53:57'),
	(51, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-13 10:54:46', '2017-05-13 10:54:46'),
	(52, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-14 01:41:26', '2017-05-14 01:41:26'),
	(53, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-16 23:09:43', '2017-05-16 23:09:43'),
	(54, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-16 23:09:59', '2017-05-16 23:09:59'),
	(55, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-16 23:10:26', '2017-05-16 23:10:26'),
	(56, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-16 23:12:51', '2017-05-16 23:12:51'),
	(57, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-16 23:13:36', '2017-05-16 23:13:36'),
	(58, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-16 23:15:17', '2017-05-16 23:15:17'),
	(59, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-16 23:16:29', '2017-05-16 23:16:29'),
	(60, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 20:48:36', '2017-05-17 20:48:36'),
	(61, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 20:50:45', '2017-05-17 20:50:45'),
	(62, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 20:51:14', '2017-05-17 20:51:14'),
	(63, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 20:51:31', '2017-05-17 20:51:31'),
	(64, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 20:51:58', '2017-05-17 20:51:58'),
	(65, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 20:52:18', '2017-05-17 20:52:18'),
	(66, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 20:52:40', '2017-05-17 20:52:40'),
	(67, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 20:53:05', '2017-05-17 20:53:05'),
	(68, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 20:54:17', '2017-05-17 20:54:17'),
	(69, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 20:54:37', '2017-05-17 20:54:37'),
	(70, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 20:54:44', '2017-05-17 20:54:44'),
	(71, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 20:56:14', '2017-05-17 20:56:14'),
	(72, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 20:56:23', '2017-05-17 20:56:23'),
	(73, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:04:49', '2017-05-17 21:04:49'),
	(74, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:05:09', '2017-05-17 21:05:09'),
	(75, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:06:42', '2017-05-17 21:06:42'),
	(76, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:06:53', '2017-05-17 21:06:53'),
	(77, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:07:19', '2017-05-17 21:07:19'),
	(78, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:09:02', '2017-05-17 21:09:02'),
	(79, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:09:16', '2017-05-17 21:09:16'),
	(80, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:09:29', '2017-05-17 21:09:29'),
	(81, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:10:02', '2017-05-17 21:10:02'),
	(82, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:10:52', '2017-05-17 21:10:52'),
	(83, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:11:19', '2017-05-17 21:11:19'),
	(84, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:11:43', '2017-05-17 21:11:43'),
	(85, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:12:25', '2017-05-17 21:12:25'),
	(86, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:13:43', '2017-05-17 21:13:43'),
	(87, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:14:14', '2017-05-17 21:14:14'),
	(88, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:14:35', '2017-05-17 21:14:35'),
	(89, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:15:08', '2017-05-17 21:15:08'),
	(90, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:15:16', '2017-05-17 21:15:16'),
	(91, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:17:05', '2017-05-17 21:17:05'),
	(92, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:17:26', '2017-05-17 21:17:26'),
	(93, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:17:54', '2017-05-17 21:17:54'),
	(94, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:18:03', '2017-05-17 21:18:03'),
	(95, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:19:13', '2017-05-17 21:19:13'),
	(96, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:19:37', '2017-05-17 21:19:37'),
	(97, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:19:59', '2017-05-17 21:19:59'),
	(98, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:21:01', '2017-05-17 21:21:01'),
	(99, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:21:07', '2017-05-17 21:21:07'),
	(100, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:21:13', '2017-05-17 21:21:13'),
	(101, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:21:55', '2017-05-17 21:21:55'),
	(102, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:24:54', '2017-05-17 21:24:54'),
	(103, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:25:30', '2017-05-17 21:25:30'),
	(104, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:25:36', '2017-05-17 21:25:36'),
	(105, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:25:51', '2017-05-17 21:25:51'),
	(106, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:29:06', '2017-05-17 21:29:06'),
	(107, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:29:34', '2017-05-17 21:29:34'),
	(108, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:29:55', '2017-05-17 21:29:55'),
	(109, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:30:20', '2017-05-17 21:30:20'),
	(110, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:30:36', '2017-05-17 21:30:36'),
	(111, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:30:51', '2017-05-17 21:30:51'),
	(112, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:31:03', '2017-05-17 21:31:03'),
	(113, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:31:32', '2017-05-17 21:31:32'),
	(114, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:31:43', '2017-05-17 21:31:43'),
	(115, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:31:57', '2017-05-17 21:31:57'),
	(116, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:32:06', '2017-05-17 21:32:06'),
	(117, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:33:29', '2017-05-17 21:33:29'),
	(118, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:33:46', '2017-05-17 21:33:46'),
	(119, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:34:08', '2017-05-17 21:34:08'),
	(120, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:34:33', '2017-05-17 21:34:33'),
	(121, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:36:46', '2017-05-17 21:36:46'),
	(122, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:36:55', '2017-05-17 21:36:55'),
	(123, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:37:36', '2017-05-17 21:37:36'),
	(124, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:37:46', '2017-05-17 21:37:46'),
	(125, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:39:37', '2017-05-17 21:39:37'),
	(126, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:40:58', '2017-05-17 21:40:58'),
	(127, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:41:13', '2017-05-17 21:41:13'),
	(128, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:41:55', '2017-05-17 21:41:55'),
	(129, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:42:40', '2017-05-17 21:42:40'),
	(130, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:43:13', '2017-05-17 21:43:13'),
	(131, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:43:39', '2017-05-17 21:43:39'),
	(132, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:43:53', '2017-05-17 21:43:53'),
	(133, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:44:42', '2017-05-17 21:44:42'),
	(134, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:44:54', '2017-05-17 21:44:54'),
	(135, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:45:11', '2017-05-17 21:45:11'),
	(136, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:45:22', '2017-05-17 21:45:22'),
	(137, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:45:53', '2017-05-17 21:45:53'),
	(138, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:46:26', '2017-05-17 21:46:26'),
	(139, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:47:08', '2017-05-17 21:47:08'),
	(140, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:47:35', '2017-05-17 21:47:35'),
	(141, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:47:51', '2017-05-17 21:47:51'),
	(142, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:55:04', '2017-05-17 21:55:04'),
	(143, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-17 21:55:34', '2017-05-17 21:55:34'),
	(144, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-18 13:58:14', '2017-05-18 13:58:14'),
	(145, 'sample text', 'sample text', '01218851144', 'sample text', 'sample@gmail.com', '2017-05-18 13:58:34', '2017-05-18 13:58:34');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.groups
DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(10) unsigned NOT NULL,
  `sequence` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.groups: ~5 rows (approximately)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `slug`, `parent_id`, `sequence`, `created_at`, `updated_at`) VALUES
	(6, 'Tin thế giới', 'tin-the-gioi', 0, 0, '2017-05-02 02:50:37', '2017-05-02 03:00:18'),
	(7, 'Tin nam triều tiên', 'tin-nam-trieu-tien', 6, 1, '2017-05-02 02:50:46', '2017-05-02 03:00:19'),
	(8, 'Tin trong nước', 'tin-trong-nuoc', 0, 2, '2017-05-02 03:20:26', '2017-05-02 03:20:50'),
	(9, 'Tin quốc hội', 'tin-quoc-hoi', 8, 3, '2017-05-02 03:20:39', '2017-05-02 03:20:50'),
	(10, 'Pháp luật', 'phap-luat', 8, 4, '2017-05-02 03:20:47', '2017-05-02 03:20:51');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.group_post
DROP TABLE IF EXISTS `group_post`;
CREATE TABLE IF NOT EXISTS `group_post` (
  `group_id` int(10) unsigned NOT NULL DEFAULT '0',
  `post_id` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`group_id`,`post_id`),
  KEY `group_id_post_id` (`group_id`,`post_id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.group_post: ~15 rows (approximately)
/*!40000 ALTER TABLE `group_post` DISABLE KEYS */;
INSERT INTO `group_post` (`group_id`, `post_id`, `created_at`, `updated_at`) VALUES
	(6, 179, '2017-05-02 03:24:45', '2017-05-02 03:24:45'),
	(6, 180, '2017-05-02 04:19:34', '2017-05-02 04:19:34'),
	(6, 181, '2017-05-02 04:20:47', '2017-05-02 04:20:47'),
	(6, 184, '2017-05-02 04:23:03', '2017-05-02 04:23:03'),
	(7, 179, '2017-05-02 03:24:45', '2017-05-02 03:24:45'),
	(7, 180, '2017-05-02 04:19:34', '2017-05-02 04:19:34'),
	(7, 181, '2017-05-02 04:20:47', '2017-05-02 04:20:47'),
	(7, 184, '2017-05-02 04:23:03', '2017-05-02 04:23:03'),
	(8, 183, '2017-05-02 04:23:14', '2017-05-02 04:23:14'),
	(9, 179, '2017-05-02 04:15:23', '2017-05-02 04:15:23'),
	(9, 183, '2017-05-02 04:23:14', '2017-05-02 04:23:14'),
	(9, 185, '2017-05-02 07:06:17', '2017-05-02 07:06:17'),
	(10, 179, '2017-05-02 04:16:05', '2017-05-02 04:16:05'),
	(10, 183, '2017-05-02 04:23:14', '2017-05-02 04:23:14'),
	(10, 185, '2017-05-02 07:06:17', '2017-05-02 07:06:17');
/*!40000 ALTER TABLE `group_post` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.images
DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=348 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.images: ~116 rows (approximately)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `title`, `url`, `created_at`, `updated_at`) VALUES
	(162, '1489760252_64429.jpg', 'uploads/1489760252_64429.jpg', '2017-03-17 14:17:32', '2017-03-17 14:17:32'),
	(163, '1489760252_35263.jpg', 'uploads/1489760252_35263.jpg', '2017-03-17 14:17:32', '2017-03-17 14:17:32'),
	(164, '1489760252_10392.jpg', 'uploads/1489760252_10392.jpg', '2017-03-17 14:17:32', '2017-03-17 14:17:32'),
	(165, '1489760252_99373.jpg', 'uploads/1489760252_99373.jpg', '2017-03-17 14:17:32', '2017-03-17 14:17:32'),
	(166, '1489760252_71273.jpg', 'uploads/1489760252_71273.jpg', '2017-03-17 14:17:32', '2017-03-17 14:17:32'),
	(168, '1489763096_25938.jpg', 'uploads/1489763096_25938.jpg', '2017-03-17 15:04:56', '2017-03-17 15:04:56'),
	(169, '1489763096_89475.jpg', 'uploads/1489763096_89475.jpg', '2017-03-17 15:04:56', '2017-03-17 15:04:56'),
	(170, '1489763096_55442.jpg', 'uploads/1489763096_55442.jpg', '2017-03-17 15:04:56', '2017-03-17 15:04:56'),
	(177, '1489799159_98324.jpg', 'uploads/1489799159_98324.jpg', '2017-03-18 01:05:59', '2017-03-18 01:05:59'),
	(178, '1489799159_66598.jpg', 'uploads/1489799159_66598.jpg', '2017-03-18 01:05:59', '2017-03-18 01:05:59'),
	(179, '1489799159_38333.jpg', 'uploads/1489799159_38333.jpg', '2017-03-18 01:05:59', '2017-03-18 01:05:59'),
	(180, '1489799159_10409.jpg', 'uploads/1489799159_10409.jpg', '2017-03-18 01:05:59', '2017-03-18 01:05:59'),
	(181, '1489799159_70232.jpg', 'uploads/1489799159_70232.jpg', '2017-03-18 01:05:59', '2017-03-18 01:05:59'),
	(182, '1489799159_92691.jpg', 'uploads/1489799159_92691.jpg', '2017-03-18 01:05:59', '2017-03-18 01:05:59'),
	(183, '1489808407_75003.jpg', 'uploads/1489808407_75003.jpg', '2017-03-18 03:40:07', '2017-03-18 03:40:07'),
	(184, '1489808407_26303.jpg', 'uploads/1489808407_26303.jpg', '2017-03-18 03:40:07', '2017-03-18 03:40:07'),
	(185, '1489822108_47809.jpg', 'uploads/1489822108_47809.jpg', '2017-03-18 07:28:28', '2017-03-18 07:28:28'),
	(186, '1489822108_84198.jpg', 'uploads/1489822108_84198.jpg', '2017-03-18 07:28:28', '2017-03-18 07:28:28'),
	(187, '1489822108_55494.jpg', 'uploads/1489822108_55494.jpg', '2017-03-18 07:28:28', '2017-03-18 07:28:28'),
	(188, '1489822108_24669.jpg', 'uploads/1489822108_24669.jpg', '2017-03-18 07:28:28', '2017-03-18 07:28:28'),
	(189, '1489828623_74651.jpg', 'uploads/1489828623_74651.jpg', '2017-03-18 09:17:03', '2017-03-18 09:17:03'),
	(190, '1489828623_77983.jpg', 'uploads/1489828623_77983.jpg', '2017-03-18 09:17:03', '2017-03-18 09:17:03'),
	(191, '1489828623_96596.jpg', 'uploads/1489828623_96596.jpg', '2017-03-18 09:17:03', '2017-03-18 09:17:03'),
	(192, '1490060113_15229.jpg', 'uploads/1490060113_15229.jpg', '2017-03-21 01:35:13', '2017-03-21 01:35:13'),
	(193, '1490060231_96421.jpg', 'uploads/1490060231_96421.jpg', '2017-03-21 01:37:11', '2017-03-21 01:37:11'),
	(194, '1490104447_81913.jpg', 'uploads/1490104447_81913.jpg', '2017-03-21 13:54:07', '2017-03-21 13:54:07'),
	(195, '1490105795_64714.jpg', 'uploads/1490105795_64714.jpg', '2017-03-21 14:16:35', '2017-03-21 14:16:35'),
	(196, '1490456456_72380.png', 'uploads/1490456456_72380.png', '2017-03-25 15:40:56', '2017-03-25 15:40:56'),
	(203, '1492867101_58433.png', 'uploads/1492867101_58433.png', '2017-04-22 13:18:21', '2017-04-22 13:18:21'),
	(204, '1492867129_87950.png', 'uploads/1492867129_87950.png', '2017-04-22 13:18:49', '2017-04-22 13:18:49'),
	(205, '1492867147_88099.png', 'uploads/1492867147_88099.png', '2017-04-22 13:19:07', '2017-04-22 13:19:07'),
	(213, '1492867583_28476.png', 'uploads/1492867583_28476.png', '2017-04-22 13:26:23', '2017-04-22 13:26:23'),
	(214, '1492868593_95204.png', 'uploads/1492868593_95204.png', '2017-04-22 13:43:13', '2017-04-22 13:43:13'),
	(215, '1492869415_17168.png', 'uploads/1492869415_17168.png', '2017-04-22 13:56:55', '2017-04-22 13:56:55'),
	(216, '1492869415_57469.png', 'uploads/1492869415_57469.png', '2017-04-22 13:56:55', '2017-04-22 13:56:55'),
	(217, '1492869415_72578.png', 'uploads/1492869415_72578.png', '2017-04-22 13:56:55', '2017-04-22 13:56:55'),
	(218, '1494281501_69268.png', 'uploads/1494281501_69268.png', '2017-05-08 22:11:41', '2017-05-08 22:11:41'),
	(219, '1494281501_87453.png', 'uploads/1494281501_87453.png', '2017-05-08 22:11:41', '2017-05-08 22:11:41'),
	(220, '1494281501_60100.png', 'uploads/1494281501_60100.png', '2017-05-08 22:11:41', '2017-05-08 22:11:41'),
	(271, '', 'uploads/sp1.jpg', '2017-05-11 14:27:27', '2017-05-11 21:02:34'),
	(272, '', 'uploads/sp2.jpg', '2017-05-11 14:27:27', '2017-05-11 21:02:34'),
	(273, '', '/uploads/image3.jpg', '2017-05-11 14:27:27', '2017-05-11 20:48:30'),
	(274, '', '/uploads/image4.jpg', '2017-05-11 14:27:27', '2017-05-11 20:48:30'),
	(275, '', '/uploads/image5.jpg', '2017-05-11 14:27:27', '2017-05-11 20:48:30'),
	(276, '', '/uploads/image6.jpg', '2017-05-11 14:27:27', '2017-05-11 20:48:30'),
	(277, '', '/uploads/image7.jpg', '2017-05-11 14:27:27', '2017-05-11 20:48:30'),
	(278, '', '/uploads/image8.jpg', '2017-05-11 14:27:27', '2017-05-11 20:48:30'),
	(279, '', '/uploads/image9.jpg', '2017-05-11 14:27:27', '2017-05-11 20:48:30'),
	(280, '', '/uploads/image10.jpg', '2017-05-11 14:27:27', '2017-05-11 20:48:30'),
	(281, '', 'uploads/1492867147_88099.png', '2017-05-11 14:27:27', '2017-05-11 22:17:57'),
	(282, '', 'uploads/1492867171_98593.png', '2017-05-11 14:27:27', '2017-05-11 22:17:57'),
	(283, '', 'uploads/1492867101_58433.png', '2017-05-11 14:27:27', '2017-05-11 22:17:57'),
	(284, '', 'uploads/pexels-photo-30397.jpg', '2017-05-11 14:27:27', '2017-05-11 22:17:57'),
	(285, '', 'uploads/pexels-photo-116167.jpg', '2017-05-11 14:27:27', '2017-05-11 22:17:57'),
	(286, '', 'uploads/1492867129_87950.png', '2017-05-11 14:27:27', '2017-05-11 22:17:57'),
	(287, '', 'uploads/1492866072_63703.png', '2017-05-11 14:27:27', '2017-05-11 22:17:57'),
	(288, '', 'uploads/1492867147_88099.png', '2017-05-11 14:27:27', '2017-05-11 22:17:57'),
	(289, '', 'uploads/1492867171_98593.png', '2017-05-11 14:27:27', '2017-05-11 22:17:57'),
	(290, '', 'uploads/1492867101_58433.png', '2017-05-11 14:27:27', '2017-05-11 22:17:57'),
	(291, '', 'uploads/1492867129_87950.png', '2017-05-11 14:27:27', '2017-05-11 22:17:57'),
	(292, '', 'uploads/1492866072_63703.png', '2017-05-11 14:27:27', '2017-05-11 22:17:57'),
	(293, '', 'uploads/1492867147_88099.png', '2017-05-11 14:27:27', '2017-05-11 22:17:57'),
	(294, '', 'uploads/1492867171_98593.png', '2017-05-11 14:27:27', '2017-05-11 22:17:57'),
	(295, '', '/uploads/image25.jpg', '2017-05-11 14:27:27', '2017-05-11 20:48:30'),
	(296, '', 'uploads/pexels-photo-144346.jpg', '2017-05-11 21:04:37', '2017-05-11 22:17:57'),
	(297, '', 'uploads/pexels-photo-63914.jpg', '2017-05-11 21:05:59', '2017-05-11 22:17:57'),
	(298, '', 'uploads/pexels-photo-160073.jpg', '2017-05-11 21:08:59', '2017-05-11 22:17:57'),
	(299, '', 'uploads/pexels-photo-97107.jpg', '2017-05-11 21:08:59', '2017-05-11 22:17:57'),
	(300, '', 'uploads/pexels-photo-117366.jpg', '2017-05-11 21:09:00', '2017-05-11 22:17:57'),
	(301, '', 'uploads/pexels-photo-30397.jpg', '2017-05-11 21:09:00', '2017-05-11 22:17:57'),
	(302, '', 'uploads/pexels-photo-116167.jpg', '2017-05-11 21:09:00', '2017-05-11 22:17:57'),
	(303, '', 'uploads/1492867129_87950.png', '2017-05-11 21:09:00', '2017-05-11 22:17:57'),
	(304, '', 'uploads/1492866072_63703.png', '2017-05-11 21:09:00', '2017-05-11 22:17:57'),
	(305, '', 'uploads/pexels-photo-82528.jpg', '2017-05-11 21:09:00', '2017-05-11 22:17:57'),
	(306, '', 'uploads/pexels-photo-148933.jpg', '2017-05-11 21:09:00', '2017-05-11 22:17:57'),
	(307, '', 'uploads/pexels-photo-141727.jpg', '2017-05-11 21:09:00', '2017-05-11 22:17:57'),
	(308, '', 'uploads/pexels-photo-76784.jpg', '2017-05-11 21:09:00', '2017-05-11 22:17:57'),
	(309, '', 'uploads/sp2.jpg', '2017-05-11 21:09:00', '2017-05-11 22:17:57'),
	(310, '', 'uploads/pexels-photo-104801.jpg', '2017-05-11 21:09:00', '2017-05-11 22:17:57'),
	(311, '', 'uploads/sp1.jpg', '2017-05-11 21:46:07', '2017-05-11 22:17:56'),
	(313, '', 'uploads/pexels-photo-173408.jpg', '2017-05-11 21:46:08', '2017-05-11 22:17:57'),
	(314, '', 'uploads/pexels-photo-164948.jpg', '2017-05-11 21:46:08', '2017-05-11 22:17:57'),
	(315, '', 'uploads/sp1.jpg', '2017-05-12 22:07:44', '2017-05-12 22:07:44'),
	(316, '', 'uploads/pexels-photo-129925.jpg', '2017-05-12 22:07:44', '2017-05-12 22:07:44'),
	(317, '', 'uploads/pexels-photo-173408.jpg', '2017-05-12 22:07:44', '2017-05-12 22:07:44'),
	(318, '', 'uploads/pexels-photo-164948.jpg', '2017-05-12 22:07:44', '2017-05-12 22:07:44'),
	(319, '', 'uploads/pexels-photo-144346.jpg', '2017-05-12 22:07:44', '2017-05-12 22:07:44'),
	(320, '', 'uploads/pexels-photo-82528.jpg', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(321, '', 'uploads/pexels-photo-148933.jpg', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(322, '', 'uploads/pexels-photo-141727.jpg', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(323, '', 'uploads/pexels-photo-76784.jpg', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(324, '', 'uploads/sp2.jpg', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(325, '', 'uploads/pexels-photo-104801.jpg', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(326, '', 'uploads/pexels-photo-63914.jpg', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(327, '', 'uploads/pexels-photo-160073.jpg', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(328, '', 'uploads/pexels-photo-97107.jpg', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(329, '', 'uploads/pexels-photo-117366.jpg', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(330, '', 'uploads/pexels-photo-30397.jpg', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(331, '', 'uploads/pexels-photo-116167.jpg', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(332, '', 'uploads/1492867129_87950.png', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(333, '', 'uploads/1492866072_63703.png', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(334, '', 'uploads/1492867147_88099.png', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(335, '', 'uploads/1492867171_98593.png', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(336, '', 'uploads/1492867101_58433.png', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(337, '', 'uploads/pexels-photo-30397.jpg', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(338, '', 'uploads/pexels-photo-116167.jpg', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(339, '', 'uploads/1492867129_87950.png', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(340, '', 'uploads/1492866072_63703.png', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(341, '', 'uploads/1492867147_88099.png', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(342, '', 'uploads/1492867171_98593.png', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(343, '', 'uploads/1492867101_58433.png', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(344, '', 'uploads/1492867129_87950.png', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(345, '', 'uploads/1492866072_63703.png', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(346, '', 'uploads/1492867147_88099.png', '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(347, '', 'uploads/1492867171_98593.png', '2017-05-12 22:07:45', '2017-05-12 22:07:45');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.image_product
DROP TABLE IF EXISTS `image_product`;
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

-- Dumping data for table xemngaymuangay.image_product: ~36 rows (approximately)
/*!40000 ALTER TABLE `image_product` DISABLE KEYS */;
INSERT INTO `image_product` (`image_id`, `product_id`, `created_at`, `updated_at`) VALUES
	(297, 258, '2017-05-11 21:05:59', '2017-05-11 21:05:59'),
	(302, 263, '2017-05-11 21:09:00', '2017-05-11 21:09:00'),
	(303, 264, '2017-05-11 21:09:00', '2017-05-11 21:09:00'),
	(309, 270, '2017-05-11 21:09:00', '2017-05-11 21:09:00'),
	(310, 271, '2017-05-11 21:09:00', '2017-05-11 21:09:00'),
	(316, 273, '2017-05-12 22:07:44', '2017-05-12 22:07:44'),
	(317, 274, '2017-05-12 22:07:44', '2017-05-12 22:07:44'),
	(318, 275, '2017-05-12 22:07:44', '2017-05-12 22:07:44'),
	(319, 276, '2017-05-12 22:07:44', '2017-05-12 22:07:44'),
	(320, 277, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(321, 278, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(322, 279, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(323, 280, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(324, 281, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(325, 282, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(326, 283, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(327, 284, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(328, 285, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(329, 286, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(330, 287, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(331, 288, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(332, 289, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(333, 290, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(334, 291, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(335, 292, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(336, 293, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(337, 294, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(338, 295, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(339, 296, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(340, 297, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(341, 298, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(342, 299, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(343, 300, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(344, 301, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(345, 302, '2017-05-12 22:07:45', '2017-05-12 22:07:45'),
	(346, 303, '2017-05-12 22:07:45', '2017-05-12 22:07:45');
/*!40000 ALTER TABLE `image_product` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.menus
DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(10) unsigned NOT NULL,
  `group_name` text COLLATE utf8_unicode_ci NOT NULL,
  `sequence` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.menus: ~17 rows (approximately)
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id`, `name`, `link`, `parent_id`, `group_name`, `sequence`, `created_at`, `updated_at`) VALUES
	(10, 'Trang chủ', '', 0, 'MainMenu', 0, '2017-04-06 13:54:41', '2017-04-07 06:57:56'),
	(11, 'Hoa tươi', 'hoa-tuoi', 0, 'MainMenu', 7, '2017-04-07 06:58:16', '2017-04-07 12:23:04'),
	(12, 'Cưới hỏi', 'category/cuoi-hoi', 11, 'MainMenu', 11, '2017-04-07 12:19:50', '2017-04-07 12:22:58'),
	(13, 'Sinh nhật', 'category/sinh-nhat', 11, 'MainMenu', 12, '2017-04-07 12:20:24', '2017-04-07 12:22:58'),
	(14, 'Khai trương hội nghị', 'category/khai-truong-hoi-nghi', 11, 'MainMenu', 10, '2017-04-07 12:20:46', '2017-04-07 12:23:00'),
	(15, 'Chúc mừng', 'category/chuc-mung', 11, 'MainMenu', 9, '2017-04-07 12:21:03', '2017-04-07 12:23:02'),
	(16, 'Chia buồn', 'category/chia-buon', 11, 'MainMenu', 8, '2017-04-07 12:21:20', '2017-04-07 12:23:04'),
	(17, 'Lan hồ điệp', '', 0, 'MainMenu', 1, '2017-04-07 12:21:34', '2017-04-07 12:23:11'),
	(19, 'Từ 5 đến 10 cành', 'category/tu-5-den-10-canh', 17, 'MainMenu', 3, '2017-04-07 12:22:04', '2017-04-07 12:23:12'),
	(20, 'Trên 10 cành', 'category/tren-10-canh', 17, 'MainMenu', 4, '2017-04-07 12:22:19', '2017-04-07 12:23:14'),
	(21, 'Chăm sóc hoa', 'post/cach-trong-va-cham-soc-hoa-hong-ra-hoa-vuon', 0, 'MainMenu', 5, '2017-04-07 12:22:33', '2017-04-18 13:51:16'),
	(22, 'Liên hệ', 'contact', 0, 'MainMenu', 6, '2017-04-07 12:22:46', '2017-04-07 12:23:04'),
	(23, 'Bó hoa', 'category/bo-hoa', 0, 'LeftMenu', 0, '2017-04-07 12:56:38', '2017-04-07 12:56:38'),
	(24, 'Giỏ hoa', 'category/gio-hoa', 0, 'LeftMenu', 0, '2017-04-07 12:57:00', '2017-04-07 12:57:00'),
	(25, 'Bình hoa', 'category/binh-hoa', 0, 'LeftMenu', 0, '2017-04-07 12:57:22', '2017-04-07 12:57:22'),
	(26, 'Hộp hoa', 'category/hop-hoa', 0, 'LeftMenu', 0, '2017-04-07 12:57:46', '2017-04-07 12:57:46'),
	(27, 'Loại khác', 'category/loai-khac', 0, 'LeftMenu', 0, '2017-04-07 12:58:07', '2017-04-07 12:58:07');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.migrations: ~35 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('0000_00_00_000000_create_shoppingcart_table', 1),
	('2016_09_24_001251_create_setting_table', 1),
	('2017_05_02_075518_register_email', 1),
	('2017_05_02_213456_add_product', 1),
	('2017_05_04_215635_create_review', 2),
	('2017_05_10_150441_create_categories_table', 3),
	('2017_05_10_150441_create_category_product_table', 3),
	('2017_05_10_150441_create_contacts_table', 3),
	('2017_05_10_150441_create_currencies_table', 3),
	('2017_05_10_150441_create_customers_table', 3),
	('2017_05_10_150441_create_group_post_table', 3),
	('2017_05_10_150441_create_groups_table', 3),
	('2017_05_10_150441_create_image_product_table', 3),
	('2017_05_10_150441_create_images_table', 3),
	('2017_05_10_150441_create_menus_table', 3),
	('2017_05_10_150441_create_options_table', 3),
	('2017_05_10_150441_create_order_products_table', 3),
	('2017_05_10_150441_create_orders_table', 3),
	('2017_05_10_150441_create_password_resets_table', 3),
	('2017_05_10_150441_create_posts_table', 3),
	('2017_05_10_150441_create_products_table', 3),
	('2017_05_10_150441_create_register_emails_table', 3),
	('2017_05_10_150441_create_review_table', 3),
	('2017_05_10_150441_create_roles_table', 3),
	('2017_05_10_150441_create_shoppingcart_table', 4),
	('2017_05_10_150441_create_users_table', 4),
	('2017_05_10_150443_add_foreign_keys_to_category_product_table', 4),
	('2017_05_10_150443_add_foreign_keys_to_image_product_table', 4),
	('2017_05_10_150443_add_foreign_keys_to_users_table', 4),
	('2018_05_02_213456_add_product', 4),
	('2018_05_12_213456_add_product_brand', 5),
	('2017_05_12_225628_create_coupon', 6),
	('2017_05_13_095403_add_order', 7),
	('2017_05_13_105055_add_order_payment_method', 8),
	('2017_05_13_124421_add_order_status', 9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.options
DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.options: ~0 rows (approximately)
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
	(1, 'template_name', 'hotdeal', '2017-03-27 14:05:35', '2017-04-20 18:01:22');
/*!40000 ALTER TABLE `options` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_detail_id` int(10) unsigned NOT NULL DEFAULT '0',
  `customer_id` int(255) NOT NULL,
  `data_cache` text COLLATE utf8_unicode_ci NOT NULL,
  `total_sum` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `coupon_discount` int(11) DEFAULT NULL,
  `coupon_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`,`order_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.orders: ~104 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `order_detail_id`, `customer_id`, `data_cache`, `total_sum`, `created_at`, `updated_at`, `coupon_discount`, `coupon_code`, `payment_method`, `status`) VALUES
	(8, 0, 31, '{"eaebb1fe89298729c0c37ee8b0388d71":{"rowId":"eaebb1fe89298729c0c37ee8b0388d71","id":176,"name":"HOA0002","qty":"10","price":90000,"options":{"img_url":"uploads\\/1490456489_14617.png"},"tax":0,"subtotal":900000}}', 900000, '2017-04-08 09:42:48', '2017-05-15 22:35:19', NULL, NULL, '', 2),
	(9, 0, 32, '{"eaebb1fe89298729c0c37ee8b0388d71":{"rowId":"eaebb1fe89298729c0c37ee8b0388d71","id":176,"name":"HOA0002","qty":"1","price":90000,"options":{"img_url":"uploads\\/1490456489_14617.png"},"tax":0,"subtotal":90000},"c8c5a307d2bfc756c445c29b99b9e794":{"rowId":"c8c5a307d2bfc756c445c29b99b9e794","id":177,"name":"HOA0003","qty":"1","price":1300000,"options":{"img_url":"uploads\\/1490456512_39503.png"},"tax":0,"subtotal":1300000},"f47087958a44d94b37169fb5b0679f2c":{"rowId":"f47087958a44d94b37169fb5b0679f2c","id":178,"name":"HOA0004","qty":"5","price":50000,"options":{"img_url":"uploads\\/1490456537_77296.png"},"tax":0,"subtotal":250000}}', 1640000, '2017-04-08 09:46:20', '2017-05-15 22:35:18', NULL, NULL, '', 2),
	(10, 0, 33, '{"a4aef3d1c6b56d988851b194710649fc":{"rowId":"a4aef3d1c6b56d988851b194710649fc","id":177,"name":"HOA0003","qty":1,"price":50000,"options":{"img_url":"uploads\\/1492867101_58433.png"},"tax":0,"subtotal":50000}}', 50000, '2017-04-22 17:25:33', '2017-05-15 22:35:18', NULL, NULL, '', 2),
	(11, 0, 34, '{"3e98d59ae67308b8810ca42c6c700238":{"rowId":"3e98d59ae67308b8810ca42c6c700238","id":176,"name":"HOA000233","qty":1,"price":1200000,"options":{"img_url":"uploads\\/1492868593_95204.png"},"tax":0,"subtotal":1200000}}', 1200000, '2017-04-30 04:15:52', '2017-05-15 22:35:13', NULL, NULL, '', 2),
	(12, 0, 35, '{"b20f7f2131a492e248f74a98f5701bde":{"rowId":"b20f7f2131a492e248f74a98f5701bde","id":178,"name":"img_name_4","qty":"1","price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"cdaa956d4312b38c89ddb293aa21c11b":{"rowId":"cdaa956d4312b38c89ddb293aa21c11b","id":265,"name":"img_name_19","qty":"500","price":330000,"options":{"img_url":"uploads\\/1492866072_63703.png"},"tax":0,"subtotal":165000000}}', 165090000, '2017-05-13 09:55:51', '2017-05-15 21:24:36', NULL, NULL, '', 2),
	(13, 0, 36, '{"b20f7f2131a492e248f74a98f5701bde":{"rowId":"b20f7f2131a492e248f74a98f5701bde","id":178,"name":"img_name_4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-13 09:57:14', '2017-05-15 21:24:10', NULL, NULL, '', 3),
	(14, 0, 37, '{"27381140ed80b1c1067de72f89414499":{"rowId":"27381140ed80b1c1067de72f89414499","id":179,"name":"img_name_1","qty":1,"price":90000,"options":{"img_url":"uploads\\/sp1.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-13 09:58:23', '2017-05-15 21:21:14', NULL, NULL, '', 2),
	(15, 0, 38, '{"b20f7f2131a492e248f74a98f5701bde":{"rowId":"b20f7f2131a492e248f74a98f5701bde","id":178,"name":"img_name_4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-13 10:02:50', '2017-05-15 21:21:16', NULL, NULL, '', 2),
	(16, 0, 40, '{"b20f7f2131a492e248f74a98f5701bde":{"rowId":"b20f7f2131a492e248f74a98f5701bde","id":178,"name":"img_name_4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-13 10:07:18', '2017-05-15 21:21:11', 20, NULL, '', 2),
	(17, 0, 41, '{"b20f7f2131a492e248f74a98f5701bde":{"rowId":"b20f7f2131a492e248f74a98f5701bde","id":178,"name":"img_name_4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-13 10:14:43', '2017-05-15 21:20:45', NULL, NULL, '', 2),
	(18, 0, 42, '{"b20f7f2131a492e248f74a98f5701bde":{"rowId":"b20f7f2131a492e248f74a98f5701bde","id":178,"name":"img_name_4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-13 10:15:28', '2017-05-15 21:20:48', NULL, NULL, '', 2),
	(19, 0, 43, '{"b20f7f2131a492e248f74a98f5701bde":{"rowId":"b20f7f2131a492e248f74a98f5701bde","id":178,"name":"img_name_4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-13 10:16:09', '2017-05-15 21:23:02', 20, '1234', '', 3),
	(20, 0, 44, '{"cdaa956d4312b38c89ddb293aa21c11b":{"rowId":"cdaa956d4312b38c89ddb293aa21c11b","id":265,"name":"img_name_19","qty":1,"price":330000,"options":{"img_url":"uploads\\/1492866072_63703.png"},"tax":0,"subtotal":330000}}', 330000, '2017-05-13 10:20:19', '2017-05-15 21:23:00', 20, '1234', '', 3),
	(21, 0, 45, '{"b20f7f2131a492e248f74a98f5701bde":{"rowId":"b20f7f2131a492e248f74a98f5701bde","id":178,"name":"img_name_4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-13 10:22:50', '2017-05-15 21:22:58', 20, '1234', '', 3),
	(22, 0, 46, '{"984adf996ead46510a459113601f96a2":{"rowId":"984adf996ead46510a459113601f96a2","id":284,"name":"Img name 13","qty":"13","price":186000,"options":{"img_url":"uploads\\/pexels-photo-160073.jpg"},"tax":0,"subtotal":2418000}}', 2418000, '2017-05-13 10:23:59', '2017-05-15 21:22:56', 20, '1234', '', 3),
	(23, 0, 47, '{"27381140ed80b1c1067de72f89414499":{"rowId":"27381140ed80b1c1067de72f89414499","id":179,"name":"img_name_1","qty":1,"price":90000,"options":{"img_url":"uploads\\/sp1.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-13 10:48:11', '2017-05-15 21:22:26', NULL, NULL, '', 3),
	(24, 0, 50, '{"b20f7f2131a492e248f74a98f5701bde":{"rowId":"b20f7f2131a492e248f74a98f5701bde","id":178,"name":"img_name_4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-13 10:53:57', '2017-05-14 22:55:12', NULL, NULL, 'chuyenkhoan', 3),
	(25, 0, 51, '{"cdaa956d4312b38c89ddb293aa21c11b":{"rowId":"cdaa956d4312b38c89ddb293aa21c11b","id":265,"name":"img_name_19","qty":1,"price":330000,"options":{"img_url":"uploads\\/1492866072_63703.png"},"tax":0,"subtotal":330000}}', 330000, '2017-05-13 10:54:46', '2017-05-14 22:55:05', NULL, NULL, 'cod', 3),
	(26, 0, 52, '{"27381140ed80b1c1067de72f89414499":{"rowId":"27381140ed80b1c1067de72f89414499","id":179,"name":"img_name_1","qty":1,"price":90000,"options":{"img_url":"uploads\\/sp1.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-14 01:41:26', '2017-05-14 22:54:56', 20, '1234', 'chuyenkhoanw', 3),
	(27, 0, 53, '{"d214827ed0eb1ee9ba50e02fe2b63d31":{"rowId":"d214827ed0eb1ee9ba50e02fe2b63d31","id":287,"name":"Img name 16","qty":1,"price":258000,"options":{"img_url":"uploads\\/pexels-photo-30397.jpg"},"tax":0,"subtotal":258000}}', 258000, '2017-05-16 23:09:43', '2017-05-16 23:09:43', NULL, NULL, 'cod', 0),
	(28, 0, 54, '{"d214827ed0eb1ee9ba50e02fe2b63d31":{"rowId":"d214827ed0eb1ee9ba50e02fe2b63d31","id":287,"name":"Img name 16","qty":1,"price":258000,"options":{"img_url":"uploads\\/pexels-photo-30397.jpg"},"tax":0,"subtotal":258000}}', 258000, '2017-05-16 23:09:59', '2017-05-16 23:09:59', NULL, NULL, 'cod', 0),
	(29, 0, 55, '{"d214827ed0eb1ee9ba50e02fe2b63d31":{"rowId":"d214827ed0eb1ee9ba50e02fe2b63d31","id":287,"name":"Img name 16","qty":1,"price":258000,"options":{"img_url":"uploads\\/pexels-photo-30397.jpg"},"tax":0,"subtotal":258000}}', 258000, '2017-05-16 23:10:26', '2017-05-16 23:10:26', NULL, NULL, 'cod', 0),
	(30, 0, 56, '{"d214827ed0eb1ee9ba50e02fe2b63d31":{"rowId":"d214827ed0eb1ee9ba50e02fe2b63d31","id":287,"name":"Img name 16","qty":1,"price":258000,"options":{"img_url":"uploads\\/pexels-photo-30397.jpg"},"tax":0,"subtotal":258000}}', 258000, '2017-05-16 23:12:51', '2017-05-16 23:12:51', NULL, NULL, 'cod', 0),
	(31, 0, 57, '{"d214827ed0eb1ee9ba50e02fe2b63d31":{"rowId":"d214827ed0eb1ee9ba50e02fe2b63d31","id":287,"name":"Img name 16","qty":1,"price":258000,"options":{"img_url":"uploads\\/pexels-photo-30397.jpg"},"tax":0,"subtotal":258000}}', 258000, '2017-05-16 23:13:36', '2017-05-16 23:13:36', NULL, NULL, 'cod', 0),
	(32, 0, 58, '{"d214827ed0eb1ee9ba50e02fe2b63d31":{"rowId":"d214827ed0eb1ee9ba50e02fe2b63d31","id":287,"name":"Img name 16","qty":1,"price":258000,"options":{"img_url":"uploads\\/pexels-photo-30397.jpg"},"tax":0,"subtotal":258000}}', 258000, '2017-05-16 23:15:17', '2017-05-16 23:15:17', NULL, NULL, 'chuyenkhoanw', 0),
	(33, 0, 59, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-16 23:16:29', '2017-05-16 23:16:29', NULL, NULL, 'cod', 0),
	(34, 0, 60, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 20:48:37', '2017-05-17 20:48:37', NULL, NULL, 'cod', 0),
	(35, 0, 61, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 20:50:45', '2017-05-17 20:50:45', NULL, NULL, 'cod', 0),
	(36, 0, 62, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 20:51:14', '2017-05-17 20:51:14', NULL, NULL, 'cod', 0),
	(37, 0, 63, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 20:51:31', '2017-05-17 20:51:31', NULL, NULL, 'cod', 0),
	(38, 0, 64, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 20:51:58', '2017-05-17 20:51:58', NULL, NULL, 'cod', 0),
	(39, 0, 65, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 20:52:18', '2017-05-17 20:52:18', NULL, NULL, 'cod', 0),
	(40, 0, 66, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 20:52:40', '2017-05-17 20:52:40', NULL, NULL, 'cod', 0),
	(41, 0, 67, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 20:53:05', '2017-05-17 20:53:05', NULL, NULL, 'cod', 0),
	(42, 0, 68, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 20:54:17', '2017-05-17 20:54:17', NULL, NULL, 'cod', 0),
	(43, 0, 69, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 20:54:37', '2017-05-17 20:54:37', NULL, NULL, 'cod', 0),
	(44, 0, 70, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 20:54:44', '2017-05-17 20:54:44', NULL, NULL, 'cod', 0),
	(45, 0, 71, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 20:56:14', '2017-05-17 20:56:14', NULL, NULL, 'cod', 0),
	(46, 0, 72, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 20:56:23', '2017-05-17 20:56:23', NULL, NULL, 'cod', 0),
	(47, 0, 73, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:04:49', '2017-05-17 21:04:49', NULL, NULL, 'cod', 0),
	(48, 0, 74, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:05:09', '2017-05-17 21:05:09', NULL, NULL, 'cod', 0),
	(49, 0, 75, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:06:42', '2017-05-17 21:06:42', NULL, NULL, 'cod', 0),
	(50, 0, 76, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:06:53', '2017-05-17 21:06:53', NULL, NULL, 'cod', 0),
	(51, 0, 77, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:07:19', '2017-05-17 21:07:19', 20, '1234', 'cod', 0),
	(52, 0, 78, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:09:02', '2017-05-17 21:09:02', NULL, NULL, 'cod', 0),
	(53, 0, 79, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:09:16', '2017-05-17 21:09:16', NULL, NULL, 'cod', 0),
	(54, 0, 80, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:09:29', '2017-05-17 21:09:29', 20, '1234', 'cod', 0),
	(55, 0, 81, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:10:02', '2017-05-17 21:10:02', NULL, NULL, 'cod', 0),
	(56, 0, 82, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:10:52', '2017-05-17 21:10:52', 20, '1234', 'cod', 0),
	(57, 0, 83, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:11:19', '2017-05-17 21:11:19', 20, '1234', 'cod', 0),
	(58, 0, 84, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:11:43', '2017-05-17 21:11:43', 20, '1234', 'cod', 0),
	(59, 0, 85, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:12:25', '2017-05-17 21:12:25', 20, '1234', 'cod', 0),
	(60, 0, 86, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:13:43', '2017-05-17 21:13:43', 20, '1234', 'cod', 0),
	(61, 0, 87, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:14:14', '2017-05-17 21:14:14', 20, '1234', 'cod', 0),
	(62, 0, 88, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:14:35', '2017-05-17 21:14:35', 20, '1234', 'cod', 0),
	(63, 0, 89, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:15:08', '2017-05-17 21:15:08', 20, '1234', 'cod', 0),
	(64, 0, 90, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:15:16', '2017-05-17 21:15:16', 20, '1234', 'cod', 0),
	(65, 0, 91, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:17:05', '2017-05-17 21:17:05', 20, '1234', 'cod', 0),
	(66, 0, 92, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:17:26', '2017-05-17 21:17:26', 20, '1234', 'cod', 0),
	(67, 0, 93, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:17:54', '2017-05-17 21:17:54', 20, '1234', 'cod', 0),
	(68, 0, 94, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:18:03', '2017-05-17 21:18:03', 20, '1234', 'cod', 0),
	(69, 0, 95, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:19:13', '2017-05-17 21:19:13', 20, '1234', 'cod', 0),
	(70, 0, 96, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:19:37', '2017-05-17 21:19:37', 20, '1234', 'cod', 0),
	(71, 0, 97, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:19:59', '2017-05-17 21:19:59', 20, '1234', 'cod', 0),
	(72, 0, 98, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:21:01', '2017-05-17 21:21:01', 20, '1234', 'cod', 0),
	(73, 0, 99, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:21:07', '2017-05-17 21:21:07', 20, '1234', 'cod', 0),
	(74, 0, 100, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:21:13', '2017-05-17 21:21:13', 20, '1234', 'cod', 0),
	(75, 0, 101, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:21:55', '2017-05-17 21:21:55', 20, '1234', 'cod', 0),
	(76, 0, 102, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:24:54', '2017-05-17 21:24:54', 20, '1234', 'cod', 0),
	(77, 0, 103, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:25:30', '2017-05-17 21:25:30', 20, '1234', 'cod', 0),
	(78, 0, 104, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:25:36', '2017-05-17 21:25:36', 20, '1234', 'cod', 0),
	(79, 0, 105, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:25:51', '2017-05-17 21:25:51', 20, '1234', 'cod', 0),
	(80, 0, 106, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:29:06', '2017-05-17 21:29:06', 20, '1234', 'cod', 0),
	(81, 0, 107, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:29:34', '2017-05-17 21:29:34', 20, '1234', 'cod', 0),
	(82, 0, 108, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:29:55', '2017-05-17 21:29:55', 20, '1234', 'cod', 0),
	(83, 0, 109, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:30:20', '2017-05-17 21:30:20', 20, '1234', 'cod', 0),
	(84, 0, 110, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:30:36', '2017-05-17 21:30:36', 20, '1234', 'cod', 0),
	(85, 0, 111, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:30:51', '2017-05-17 21:30:51', 20, '1234', 'cod', 0),
	(86, 0, 112, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:31:04', '2017-05-17 21:31:04', 20, '1234', 'cod', 0),
	(87, 0, 113, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:31:32', '2017-05-17 21:31:32', 20, '1234', 'cod', 0),
	(88, 0, 114, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:31:43', '2017-05-17 21:31:43', 20, '1234', 'cod', 0),
	(89, 0, 115, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:31:57', '2017-05-17 21:31:57', 20, '1234', 'cod', 0),
	(90, 0, 116, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:32:06', '2017-05-17 21:32:06', 20, '1234', 'cod', 0),
	(91, 0, 117, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:33:29', '2017-05-17 21:33:29', 20, '1234', 'cod', 0),
	(92, 0, 118, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:33:46', '2017-05-17 21:33:46', 20, '1234', 'cod', 0),
	(93, 0, 119, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:34:09', '2017-05-17 21:34:09', 20, '1234', 'cod', 0),
	(94, 0, 120, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:34:33', '2017-05-17 21:34:33', 20, '1234', 'cod', 0),
	(95, 0, 121, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:36:46', '2017-05-17 21:36:46', 20, '1234', 'cod', 0),
	(96, 0, 122, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:36:55', '2017-05-17 21:36:55', 20, '1234', 'cod', 0),
	(97, 0, 123, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:37:36', '2017-05-17 21:37:36', 20, '1234', 'cod', 0),
	(98, 0, 124, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-17 21:37:46', '2017-05-17 21:37:46', 20, '1234', 'cod', 0),
	(99, 0, 125, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":1,"price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":114000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":1,"price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 342000, '2017-05-17 21:39:37', '2017-05-17 21:39:37', 20, '1234', 'cod', 0),
	(100, 0, 126, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":1,"price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":114000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":1,"price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 342000, '2017-05-17 21:40:58', '2017-05-17 21:40:58', 20, '1234', 'cod', 0),
	(101, 0, 127, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":1,"price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":114000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":1,"price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 342000, '2017-05-17 21:41:13', '2017-05-17 21:41:13', 20, '1234', 'cod', 0),
	(102, 0, 128, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":1,"price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":114000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":1,"price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 342000, '2017-05-17 21:41:55', '2017-05-17 21:41:55', 20, '1234', 'cod', 0),
	(103, 0, 129, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":1,"price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":114000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":1,"price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 342000, '2017-05-17 21:42:40', '2017-05-17 21:42:40', 20, '1234', 'cod', 0),
	(104, 0, 130, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":1,"price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":114000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":1,"price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 342000, '2017-05-17 21:43:13', '2017-05-17 21:43:13', 20, '1234', 'cod', 0),
	(105, 0, 131, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":1,"price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":114000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":1,"price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 342000, '2017-05-17 21:43:39', '2017-05-17 21:43:39', 20, '1234', 'cod', 0),
	(106, 0, 132, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":1,"price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":114000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":1,"price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 342000, '2017-05-17 21:43:53', '2017-05-17 21:43:53', 20, '1234', 'cod', 0),
	(107, 0, 133, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":1,"price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":114000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":1,"price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 342000, '2017-05-17 21:44:42', '2017-05-17 21:44:42', 20, '1234', 'cod', 0),
	(108, 0, 134, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":1,"price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":114000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":1,"price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 342000, '2017-05-17 21:44:54', '2017-05-17 21:44:54', 20, '1234', 'cod', 0),
	(109, 0, 135, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":1,"price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":114000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":1,"price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 342000, '2017-05-17 21:45:11', '2017-05-17 21:45:11', 20, '1234', 'cod', 0),
	(110, 0, 136, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":1,"price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":114000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":1,"price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 342000, '2017-05-17 21:45:22', '2017-05-17 21:45:22', 20, '1234', 'cod', 0),
	(111, 0, 137, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":"1","price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":"10","price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":1140000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":"1","price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 1368000, '2017-05-17 21:45:53', '2017-05-17 21:45:53', 20, '1234', 'cod', 0),
	(112, 0, 138, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":"1","price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":"10","price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":1140000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":"1","price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 1368000, '2017-05-17 21:46:26', '2017-05-17 21:46:26', 20, '1234', 'cod', 0),
	(113, 0, 139, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":"1","price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":"10","price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":1140000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":"1","price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 1368000, '2017-05-17 21:47:08', '2017-05-17 21:47:08', 20, '1234', 'cod', 0),
	(114, 0, 140, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":"1","price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":"10","price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":1140000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":"1","price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 1368000, '2017-05-17 21:47:35', '2017-05-17 21:47:35', 20, '1234', 'cod', 0),
	(115, 0, 141, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":"1","price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":"10","price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":1140000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":"1","price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 1368000, '2017-05-17 21:47:51', '2017-05-17 21:47:51', 20, '1234', 'cod', 0),
	(116, 0, 142, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":"1","price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":"10","price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":1140000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":"1","price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 1368000, '2017-05-17 21:55:04', '2017-05-17 21:55:04', 20, '1234', 'cod', 0),
	(117, 0, 143, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":"1","price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000},"514b5f88279d0d3f9b2590024f377c19":{"rowId":"514b5f88279d0d3f9b2590024f377c19","id":270,"name":"img_name_10","qty":"10","price":114000,"options":{"img_url":"uploads\\/sp2.jpg"},"tax":0,"subtotal":1140000},"5e9a84f34e6bf281e7d3519ae8728dff":{"rowId":"5e9a84f34e6bf281e7d3519ae8728dff","id":271,"name":"img_name_11","qty":"1","price":138000,"options":{"img_url":"uploads\\/pexels-photo-104801.jpg"},"tax":0,"subtotal":138000}}', 1368000, '2017-05-17 21:55:34', '2017-05-17 21:55:34', 20, '1234', 'cod', 0),
	(118, 0, 144, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-18 13:58:14', '2017-05-18 13:58:14', NULL, NULL, 'cod', 0),
	(119, 0, 145, '{"813ac02bc016dfbfc099567aeb325015":{"rowId":"813ac02bc016dfbfc099567aeb325015","id":275,"name":"Img name 4","qty":1,"price":90000,"options":{"img_url":"uploads\\/pexels-photo-164948.jpg"},"tax":0,"subtotal":90000}}', 90000, '2017-05-18 13:58:34', '2017-05-18 13:58:34', NULL, NULL, 'cod', 0);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.order_products
DROP TABLE IF EXISTS `order_products`;
CREATE TABLE IF NOT EXISTS `order_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL DEFAULT '0',
  `product_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.order_products: ~0 rows (approximately)
/*!40000 ALTER TABLE `order_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_products` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.posts
DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `main_img` int(4) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `active` int(4) NOT NULL DEFAULT '0',
  `slug` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.posts: ~2 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `title`, `summary`, `main_img`, `content`, `active`, `slug`, `created_at`, `updated_at`) VALUES
	(179, 'Cách trồng và chăm sóc hoa hồng ra hoa vườn', 'Hoa hồng thuộc cây thân gỗ bụi lâu năm, có thể trồng quanh năm nhưng tốt nhất là trồng vào mùa xuân và mùa thu. Là loài hoa rất đẹp và cực quyến rũ nhưng hoa hồng lại là một giống cây rất dễ bị sâu bệnh. Dưới đây là một vài cách hướng dẫn cách chăm sóc hoa hồng khá đơn giản nhưng bạn sẽ có được một vườn hồng như ý.', 0, '<p><span style="color: rgb(51, 51, 51); font-family: "Times New Roman"; font-size: 16px; -webkit-text-stroke: 0.1px rgba(255, 255, 255, 0.00784314);">Hoa hồng thuộc cây thân gỗ bụi lâu năm, có thể trồng quanh năm nhưng tốt nhất là trồng vào mùa xuân và mùa thu. Là loài hoa rất đẹp và cực quyến rũ nhưng hoa hồng lại là một giống cây rất dễ bị sâu bệnh. Dưới đây là một vài cách hướng dẫn </span><a href="http://afamily.vn/xu-huong/san-vuon-cuc-dep-voi-5-loai-hoa-hong-ngoai-de-trong-20150323104021655.chn" title="cách chăm sóc hoa hồng" target="_blank" style="margin: 0px; padding: 0px; outline: none; -webkit-appearance: none; font-family: "Times New Roman"; font-size: 16px; -webkit-text-stroke: 0.1px rgba(255, 255, 255, 0.00784314); background-color: rgb(255, 255, 255);"><span style="margin: 0px; padding: 0px; font-weight: bold;">cách chăm sóc hoa hồng</span></a><span style="color: rgb(51, 51, 51); font-family: "Times New Roman"; font-size: 16px; -webkit-text-stroke: 0.1px rgba(255, 255, 255, 0.00784314);"> khá đơn giản nhưng bạn sẽ có được một vườn hồng như ý.</span></p><div style="margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: "Times New Roman"; font-size: 16px; -webkit-text-stroke: 0.1px rgba(255, 255, 255, 0.00784314);"><br style="margin: 0px; padding: 0px;"></div><div style="margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: "Times New Roman"; font-size: 16px; -webkit-text-stroke: 0.1px rgba(255, 255, 255, 0.00784314);"><h2 style="margin-top: 10px; margin-right: 0px; margin-left: 0px; padding: 0px; font-size: 12pt;"><span style="margin: 0px; padding: 0px; font-weight: bold;">Chăm sóc hoa hồng</span></h2><div style="margin: 0px; padding: 0px;"><br style="margin: 0px; padding: 0px;"></div><div style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-style: italic;">Vị trí</span>: <a href="http://afamily.vn/hoa-hong.htm" title="Hoa hồng" target="_blank" style="margin: 0px; padding: 0px; outline: none; -webkit-appearance: none;">Hoa hồng</a> là loại cây thích hợp sống trong điều kiện thoáng gió và có nhiều nắng, nếu đủ nắng chiếu 8 tiếng 1 ngày cây sẽ sinh trưởng tốt và ít bị sâu bệnh gây hại, ra nhiều hoa và màu sắc của hoa cũng sáng đẹp, rực rỡ.</div><div style="margin: 0px; padding: 0px;"><br style="margin: 0px; padding: 0px;"></div><div style="margin: 0px; padding: 0px; text-align: center;"><div style="margin: 0px; padding: 0px;"><img src="http://afamilycdn.com/k:7CPxF2iCvBEUOqjlotLPyBQvcccccc/Image/2015/03/34/rose-garden-041-090a2/cham-soc-hoa-hong.jpg" w="" h="" alt="chăm sóc hoa hồng" title="chăm sóc hoa hồng" style="margin: 0px auto; padding: 0px; border-width: initial; border-style: none; outline: none; -webkit-appearance: none; max-width: 100%;"><br style="margin: 0px; padding: 0px;"></div><br style="margin: 0px; padding: 0px;"></div><div style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-style: italic;">Tưới nước</span>: Nếu trồng dưới đất vườn bạn cần tưới mỗi ngày 1 lần, trồng trong chậu thì mỗi ngày tưới nước 2 lần vào sáng sớm và chiều mát. Cây hoa hồng cần đủ nước để lá quang hợp, nếu cây khô thiếu nước sẽ xuất hiện nhện đỏ hại cây, vàng lá và rụng lá. Bạn hạn chế tưới nước vào buổi tối vì nước sẽ đọng trên lá cây khiến lá cây dễ bị nấm bệnh. </div></div>', 1, 'cach-trong-va-cham-soc-hoa-hong-ra-hoa-vuon', '2017-04-18 13:39:30', '2017-04-18 13:47:22'),
	(185, 'Kỹ thuật trồng hoa hồng leo đơn giản trong chậu', 'Một cánh cổng hay bức tường rào điểm xuyết những bông hông dây thanh lịch chắc chắn sẽ làm sáng bừng cả sân vườn, mang sức sống tràn ngập ngôi nhà.', 0, '<div class="content-detail" style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: 26px; clear: both; position: relative; text-align: justify;"><p style="margin-top: 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Hoa hồng leo hay<span style="font-variant-numeric: inherit; margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; line-height: inherit;">&nbsp;hoa hồng dây</span>, là cây leo thường được trồng để trang trí trong các sân vườn biệt thự hoặc các khuôn viên cây xanh. Cây cho rất nhiều hoa đặc biệt vào mùa hè, thường dễ trồng và chăm sóc hơn tại các tỉnh phía Bắc, nhưng nếu muốn, người chơi hoa cũng có thể trồng tại nhiều vùng miền khác trên cả nước. Hoa hồng leo có nhiều màu sắc khác nhau như đỏ thẫm, hồng phớt, hồng tím, trắng, vàng ,... hoa nở rộ vào cuối tháng 4, đầu tháng 5.</p><p style="margin-top: 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;"><img title="Hoa hồng leo  " src="http://img.khoahoc.tv/photos/image/2016/05/18/hong-leo-1.jpg" alt="Hoa hồng leo " width="650" height="475" data-i="0" class="lightbox" style="margin: 0px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; cursor: pointer; box-shadow: rgb(238, 238, 238) 0px 0px 1px; border-radius: 3px; max-width: 100%; height: auto; border-width: initial !important; border-style: none !important;"><br><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Hoa hồng leo là loài hoa thích hợp để trang trí cổng hoặc sân vườn. (Ảnh minh họa)</span></p><p style="margin-top: 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Loại hoa hồng này vừa đẹp vừa có hương thơm nên mọi người đều yêu thích. Cây phát triển khá nhanh nếu môi trường thích hợp, độ vươn xa cũng không bằng các loại dây leo khác, nên thường trồng ở những nơi có diện tích nhỏ: cột, cổng hay một khoảng vách nào đó hoặc có thể trồng trong bồn hoa trên cao để cho cây vươn xõa dài ra.</p><h2 style="margin-top: 10px; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Những kiến thức cần biết trước khi trồng hoa hồng leo</h2><p style="margin-top: 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Hoa hồng leo rất<span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">&nbsp;dễ trồng và chăm sóc</span>. Khi trồng hồng leo nên chọn những nơi có nhiều ánh sáng tự nhiên như vậy cây sẽ phát triển nhanh hơn và cho nhiều hoa hơn</p><p style="margin-top: 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Hoa hồng leo&nbsp;<span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">không ưa nhiệt độ, ẩm độ quá cao</span>, độ vươn của cành không bằng các loại dây leo khác nên cần có giàn để cây bám vào và leo lên, hoa hồng leo thường được trồng ở những nơi như: cột, cổng, hàng rào, hay một khoảng vách nào đó nhất là đoạn vách cạnh cửa sổ hoặc có thể trồng trong bồn hoa trên cao để cho cây vươn dài ra.</p><p style="margin-top: 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;"><img title="Hoa hồng leo là loài hoa đẹp, được nhiều người yêu thích. " src="http://img.khoahoc.tv/photos/image/2016/05/18/hong-leo-2.jpg" alt="Hoa hồng leo là loài hoa đẹp, được nhiều người yêu thích." width="650" height="488" data-i="1" class="lightbox" style="margin: 0px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; cursor: pointer; box-shadow: rgb(238, 238, 238) 0px 0px 1px; border-radius: 3px; max-width: 100%; height: auto; border-width: initial !important; border-style: none !important;"><br><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Hoa hồng leo là loài hoa đẹp, được nhiều người yêu thích. (Ảnh minh họa)</span></p><h2 style="margin-top: 10px; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Kỹ thuật trồng và chăm sóc hoa hồng leo</h2><p style="margin-top: 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;"><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Chọn hạt giống</span>: Chất lượng hạt giống ảnh hưởng rất nhiều tới chất lượng cây và hoa sau này</p><p style="margin-top: 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;"><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Ðất và nơi trồng</span>: Ðất sâu, xốp có thành phần đất sét, nhiều ánh mặt trời và những chố ẩm. Ðất cát thì nên trộn thêm phân phân hữu cơ và đất sét vào.</p><p style="margin-top: 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;"><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Giống trồng</span>: Các cây hồng dùng trồng vào tháng 10-12 chỉ nên cắt ngắn vừa phải. Những chồi quá yếu nên cắt bỏ hẳn. Những cây trồng vào mùa xuân (tháng 3 đến tháng 5) nên cắt còn lại một mắt có hướng quay ra ngoài. Cắt bỏ đi 1/3 rễ. Nếu trồng bằng hạt thì cây yếu, ko phát triển mạnh.</p><p style="margin-top: 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;"><img title="Trồng cây hồng leo nơi đất cao ráo, tránh úng, nếu trồng chậu, bồn cần có thể tích lớn.  " src="http://img.khoahoc.tv/photos/image/2016/05/18/hong-leo-3.jpg" alt="Trồng cây hồng leo nơi đất cao ráo, tránh úng, nếu trồng chậu, bồn cần có thể tích lớn. " width="650" height="367" data-i="2" class="lightbox" style="margin: 0px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; cursor: pointer; box-shadow: rgb(238, 238, 238) 0px 0px 1px; border-radius: 3px; max-width: 100%; height: auto; border-width: initial !important; border-style: none !important;"><br><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Trồng cây hồng leo nơi đất cao ráo, tránh úng, nếu trồng chậu, bồn cần có thể tích lớn. (Ảnh minh họa)</span></p><p style="margin-top: 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;"><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Cách trồng</span>: Nếu trồng theo cắt cành thì ngâm cây hồng khoảng 2 -3 tiếng vào nước sau đó trồng liền, nếu trời quá nắng nên che lại bằng vật ẩm ướt. Lỗ trồng nên đào sâu. Chôn khúc thân nổi u giữa rễ màu nâu và đoạn mầm xanh có gai chìm xuống mặt đất khoảng 3 ngón tay. Dùng đất trộn phân hữu cơ lấp và nhấn kỹ gốc lại. Tưới sơ nước cho vững cây. Vào mùa khô nên tưới mỗi sáng. Tránh tưới lên lá và hoa – có thể tạo ra nấm có hại cho hoa.</p><h2 style="margin-top: 10px; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Cách chăm sóc hoa hồng leo sau khi trồng</h2><p style="margin-top: 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;"><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Tưới nước</span>: Vào mùa khô nên tưới cho hoa vào mỗi sáng. Tránh tưới nước lên lá và hoa, có thể tạo điều kiện cho nấm có hại cho hoa phát triển.</p><p style="margin-top: 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;"><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Bón phân</span>: Vào mùa xuân nên bón phân hữu cơ cho cây, phân phải chứa nitơ, phosphor và Kali để tạo bông. Vào khoảng tháng 7 không nên bón phân có nitơ. Tháng 9 nên bón phân có nhiều kali để tạo thân gỗ.</p><p style="margin-top: 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;"><span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Cắt tỉa</span>: Đối với hồng leo chỉ cần tỉa một số cành nhỏ cho bớt cớm. Hoa tàn nên cắt bỏ 1 đoạn tầm 2 -3 đốt lá. Những mầm ở những đốt này sẽ làm yếu cây và tạo những bông hoa nhỏ. Ðối với hoa hồng leo nên tỉa bớt những mầm phụ để bông khỏi èo uột.</p><p style="margin-top: 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;"><img title="Trồng hoa hồng dây ngoài ban công " src="http://img.khoahoc.tv/photos/image/2016/05/18/hong-leo-4.jpg" alt="Trồng hoa hồng dây ngoài ban công " width="640" height="480" data-i="3" class="lightbox" style="margin: 0px; padding: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; cursor: pointer; box-shadow: rgb(238, 238, 238) 0px 0px 1px; border-radius: 3px; max-width: 100%; height: auto; border-width: initial !important; border-style: none !important;"></p><h2 style="margin-top: 10px; margin-right: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Thời điểm thích hợp trồng hoa hồng leo</h2><p style="margin-top: 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Hoa hồng leo tốt nhất nên trồng vào đầu mùa xuân, hè hoặc thu để cây hình thành bộ rễ khỏe mạnh trước khi mùa đông đến. Đặc biệt, hoa hồng leo trồng vào mùa xuân là tốt nhất giúp cây có sức đề kháng và sinh trưởng mạnh mẽ hơn nhiều so với 2 mùa còn lại.</p><p style="margin-top: 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Hoa hồng&nbsp;<span style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">ưa ánh nắng mặt trời</span>, vì vậy vị trí trồng cây phải được chiếu sáng ít nhất 6 tiếng một ngày. Nên trồng hướng Đông để cây đón được ánh sáng mặt trời buổi sáng . Nơi trồng cây cũng phải rộng rãi. Hồng leo có xu hướng chiếm nhiều không gian khi lớn lên, bạn không nên trồng hoa gần các loài cây khác trong vườn.</p></div><div class="author-info clearfix" style="margin: 0px 0px 10px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; clear: both;"><span class="date" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit; float: left;">Cập nhật: 18/05/2016</span><span class="author" style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-stretch: inherit; line-height: inherit;">Theo VietQ.vn</span></div>', 1, 'ky-thuat-trong-hoa-hong-leo-don-gian-trong-chau', '2017-05-02 07:06:17', '2017-05-02 07:06:17');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `main_img` int(4) DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `price_sale` int(11) NOT NULL,
  `date_begin_sale` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_end_sale` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` int(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `promotion` tinyint(1) NOT NULL,
  `homepage` tinyint(1) NOT NULL,
  `brand` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=304 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.products: ~36 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `title`, `summary`, `slug`, `main_img`, `content`, `price`, `price_sale`, `date_begin_sale`, `date_end_sale`, `active`, `created_at`, `updated_at`, `promotion`, `homepage`, `brand`) VALUES
	(258, 'img_name_12', '', 'img_name_2', 297, '', 270000, 162000, '2017-04-02 21:28:56', '2017-06-02 21:28:56', 1, '2017-05-11 21:05:59', '2017-05-18 21:28:56', 0, 1, 'Apple'),
	(263, 'img_name_17', '', 'img_name_7', 302, '', 470000, 282000, '2017-04-05 21:30:53', '2017-06-05 21:30:53', 1, '2017-05-11 21:09:00', '2017-05-18 21:30:53', 1, 0, 'Iphone'),
	(264, 'img_name_18', '', 'img_name_8', 303, '', 510000, 306000, '2017-04-05 21:38:05', '2017-06-05 21:38:05', 1, '2017-05-11 21:09:00', '2017-05-18 21:38:05', 1, 0, 'Iphone'),
	(270, 'img_name_10', '', 'img_name_14', 309, '', 190000, 114000, '2017-03-31 21:36:15', '2017-05-31 21:36:15', 1, '2017-05-11 21:09:00', '2017-05-18 21:36:15', 1, 1, 'LG'),
	(271, 'img_name_11', '', 'img_name_15', 310, '', 230000, 138000, '2017-04-01 13:15:07', '2017-06-01 13:15:07', 1, '2017-05-11 21:09:00', '2017-05-12 21:49:28', 0, 0, 'Iphone'),
	(273, 'Img name 2', '', 'img-name-2', 316, 'Sản phẩm đang cập nhật thông tin', 150000, 90000, '2017-03-23 13:15:07', '2017-05-23 13:15:07', 1, '2017-05-12 22:07:44', '2017-05-15 21:58:47', 0, 0, 'LG'),
	(274, 'Img name 3', '', 'img-name-3', 317, 'Sản phẩm đang cập nhật thông tin', 200001, 120000, '2017-03-24 13:15:07', '2017-05-24 13:15:07', 1, '2017-05-12 22:07:44', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(275, 'Img name 4', '', 'img-name-4', 318, 'Sản phẩm đang cập nhật thông tin', 150000, 90000, '2017-03-25 13:15:07', '2017-05-25 13:15:07', 1, '2017-05-12 22:07:44', '2017-05-15 21:58:47', 0, 0, 'Apple'),
	(276, 'Img name 5', '', 'img-name-5', 319, 'Sản phẩm đang cập nhật thông tin', 310000, 186000, '2017-03-26 13:15:07', '2017-05-26 13:15:07', 1, '2017-05-12 22:07:44', '2017-05-15 21:58:47', 0, 0, 'SamSung'),
	(277, 'Img name 6', '', 'img-name-6', 320, 'Sản phẩm đang cập nhật thông tin', 350000, 210000, '2017-03-27 13:15:07', '2017-05-27 13:15:07', 1, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'LG'),
	(278, 'Img name 7', '', 'img-name-7', 321, 'Sản phẩm đang cập nhật thông tin', 390000, 234000, '2017-03-28 13:15:07', '2017-05-28 13:15:07', 1, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(279, 'Img name 8', '', 'img-name-8', 322, 'Sản phẩm đang cập nhật thông tin', 430000, 258000, '2017-03-29 13:15:07', '2017-05-29 13:15:07', 1, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Apple'),
	(280, 'Img name 9', '', 'img-name-9', 323, 'Sản phẩm đang cập nhật thông tin', 150000, 90000, '2017-03-30 13:15:07', '2017-05-30 13:15:07', 1, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'SamSung'),
	(281, 'Img name 10', '', 'img-name-10', 324, 'Sản phẩm đang cập nhật thông tin', 190000, 114000, '2017-03-31 13:15:07', '2017-05-31 13:15:07', 1, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'LG'),
	(282, 'Img name 11', '', 'img-name-11', 325, 'Sản phẩm đang cập nhật thông tin', 230000, 138000, '2017-04-01 13:15:07', '2017-06-01 13:15:07', 1, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(283, 'Img name 12', '', 'img-name-12', 326, 'Sản phẩm đang cập nhật thông tin', 270000, 162000, '2017-04-02 13:15:07', '2017-06-02 13:15:07', 1, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Apple'),
	(284, 'Img name 13', '', 'img-name-13', 327, 'Sản phẩm đang cập nhật thông tin', 310000, 186000, '2017-04-03 13:15:07', '2017-06-03 13:15:07', 1, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'SamSung'),
	(285, 'Img name 14', '', 'img-name-14', 328, 'Sản phẩm đang cập nhật thông tin', 350000, 210000, '2017-04-04 13:15:07', '2017-06-04 13:15:07', 1, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'LG'),
	(286, 'Img name 15', '', 'img-name-15', 329, 'Sản phẩm đang cập nhật thông tin', 390000, 234000, '2017-04-05 13:15:07', '2017-06-05 13:15:07', 1, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(287, 'Img name 16', '', 'img-name-16', 330, 'Sản phẩm đang cập nhật thông tin', 430000, 258000, '2017-04-05 13:15:07', '2017-06-05 13:15:07', 1, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(288, 'Img name 17', '', 'img-name-17', 331, 'Sản phẩm đang cập nhật thông tin', 470000, 282000, '2017-04-05 13:15:07', '2017-06-05 13:15:07', 1, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(289, 'Img name 18', '', 'img-name-18', 332, 'Sản phẩm đang cập nhật thông tin', 510000, 306000, '2017-04-05 13:15:07', '2017-06-05 13:15:07', 1, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(290, 'Img name 19', '', 'img-name-19', 333, 'Sản phẩm đang cập nhật thông tin', 550000, 330000, '2017-04-05 13:15:07', '2017-06-05 13:15:07', 1, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(291, 'Img name 20', '', 'img-name-20', 334, 'Sản phẩm đang cập nhật thông tin', 590000, 354000, '2017-04-05 13:15:07', '2017-06-05 13:15:07', 1, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(292, 'Img name 21', '', 'img-name-21', 335, 'Sản phẩm đang cập nhật thông tin', 630000, 378000, '2017-04-05 13:15:07', '2017-06-05 13:15:07', 1, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(293, 'Img name 22', '', 'img-name-22', 336, 'Sản phẩm đang cập nhật thông tin', 670000, 402000, '2017-04-05 13:15:07', '2017-06-05 13:15:07', 1, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(294, 'Img name 23', '', 'img-name-23', 337, 'Sản phẩm đang cập nhật thông tin', 710000, 426000, '2017-04-05 13:15:07', '2017-06-05 13:15:07', 0, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(295, 'Img name 24', '', 'img-name-24', 338, 'Sản phẩm đang cập nhật thông tin', 750000, 450000, '2017-04-05 13:15:07', '2017-06-05 13:15:07', 0, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(296, 'Img name 25', '', 'img-name-25', 339, 'Sản phẩm đang cập nhật thông tin', 790000, 474000, '2017-04-05 13:15:07', '2017-06-05 13:15:07', 0, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(297, 'Img name 26', '', 'img-name-26', 340, 'Sản phẩm đang cập nhật thông tin', 830000, 498000, '2017-04-05 13:15:07', '2017-06-05 13:15:07', 0, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(298, 'Img name 27', '', 'img-name-27', 341, 'Sản phẩm đang cập nhật thông tin', 870000, 522000, '2017-04-05 13:15:07', '2017-06-05 13:15:07', 0, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(299, 'Img name 28', '', 'img-name-28', 342, 'Sản phẩm đang cập nhật thông tin', 910000, 546000, '2017-04-05 13:15:07', '2017-06-05 13:15:07', 0, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(300, 'Img name 29', '', 'img-name-29', 343, 'Sản phẩm đang cập nhật thông tin', 950000, 570000, '2017-04-05 13:15:07', '2017-06-05 13:15:07', 0, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(301, 'Img name 30', '', 'img-name-30', 344, 'Sản phẩm đang cập nhật thông tin', 990000, 594000, '2017-04-05 13:15:07', '2017-06-05 13:15:07', 0, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(302, 'Img name 31', '', 'img-name-31', 345, 'Sản phẩm đang cập nhật thông tin', 1030000, 618000, '2017-04-05 13:15:07', '2017-06-05 13:15:07', 0, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone'),
	(303, 'Img name 32', '', 'img-name-32', 346, 'Sản phẩm đang cập nhật thông tin', 1070000, 642000, '2017-04-05 13:15:07', '2017-06-05 13:15:07', 0, '2017-05-12 22:07:45', '2017-05-15 21:58:47', 0, 0, 'Iphone');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.register_emails
DROP TABLE IF EXISTS `register_emails`;
CREATE TABLE IF NOT EXISTS `register_emails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.register_emails: ~0 rows (approximately)
/*!40000 ALTER TABLE `register_emails` DISABLE KEYS */;
INSERT INTO `register_emails` (`id`, `email`, `created_at`, `updated_at`) VALUES
	(1, 'hoangson@gmail.com', '2017-05-12 22:38:56', '2017-05-12 22:38:56');
/*!40000 ALTER TABLE `register_emails` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.review
DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` smallint(6) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `star` smallint(6) NOT NULL,
  `note_review` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.review: ~0 rows (approximately)
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
/*!40000 ALTER TABLE `review` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.roles: ~3 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Administrator', 'admin', '2017-03-11 08:34:20', '2017-03-11 08:34:20'),
	(2, 'Redactor', 'redac', '2017-03-11 08:34:20', '2017-03-11 08:34:20'),
	(3, 'User', 'user', '2017-03-11 08:34:20', '2017-03-11 08:34:20');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.settings
DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `setting_key` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `setting_value` text COLLATE utf8_unicode_ci,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `setting_key` (`setting_key`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.settings: ~7 rows (approximately)
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `code`, `setting_key`, `setting_value`, `name`, `type`, `data`, `created_at`, `updated_at`) VALUES
	(13, 'general', 'contact_content', '<ul class="list-unstyled contact-details">\r\n                        <li class="clearfix">\r\n                            <i class="fa fa-home pull-left"></i>\r\n                            <span class="pull-left">Công ty TNHH<br>\r\n									1247 LB Nagar Road, Hyderabad, <br>\r\n									Telangana - 500 035\r\n								</span>\r\n                        </li>\r\n                        <li class="clearfix">\r\n                            <i class="fa fa-phone pull-left"></i>\r\n                            <span class="pull-left">\r\n									91 99887 74455 <br>\r\n									001 123 974 9856\r\n								</span>\r\n                        </li>\r\n                        <li class="clearfix">\r\n                            <i class="fa fa-envelope-o pull-left"></i>\r\n                            <span class="pull-left">\r\n									info@demolink.com <br>\r\n									admin@demolink.com <br>\r\n									support@demolink.com\r\n								</span>\r\n                        </li>\r\n                    </ul>', '', '', NULL, '2017-05-14 01:49:33', '2017-05-14 14:36:21'),
	(15, 'general', 'account_info', '<p>Ngân hàng đông á</p><p><br></p><p>Ngân hàng acb</p>', '', '', NULL, '2017-05-14 20:49:39', '2017-05-14 22:20:25'),
	(16, 'general', 'default_keyword', '<p>màn hình, điện thoai, màn hình lg, màn hình samsung, samsung, lg, man hinh</p>', '', '', NULL, '2017-05-15 22:11:08', '2017-05-15 22:11:08'),
	(17, 'general', 'default_description', '<p>description<br></p>', '', '', NULL, '2017-05-15 22:11:26', '2017-05-15 22:11:26'),
	(18, 'general', 'address_company', '<p>90 Hưng phú Q10 F10</p>', '', '', NULL, '2017-05-17 21:21:13', '2017-05-17 21:28:23'),
	(19, 'general', 'hotline', '<p>0121 885 1144</p>', '', '', NULL, '2017-05-17 21:29:06', '2017-05-17 21:29:28'),
	(20, 'general', 'default_title', '<p>Xem ngay mua ngay - trang web kinh doanh online</p>', '', '', NULL, '2017-05-18 21:43:54', '2017-05-18 21:44:33');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.shoppingcart
DROP TABLE IF EXISTS `shoppingcart`;
CREATE TABLE IF NOT EXISTS `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`identifier`,`instance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table xemngaymuangay.shoppingcart: ~0 rows (approximately)
/*!40000 ALTER TABLE `shoppingcart` DISABLE KEYS */;
/*!40000 ALTER TABLE `shoppingcart` ENABLE KEYS */;

-- Dumping structure for table xemngaymuangay.users
DROP TABLE IF EXISTS `users`;
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

-- Dumping data for table xemngaymuangay.users: ~4 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `email`, `password`, `role_id`, `seen`, `valid`, `confirmed`, `confirmation_code`, `created_at`, `updated_at`, `remember_token`) VALUES
	(1, 'GreatAdmin', 'admin@la.fr', '$2y$10$YCzrrR/n8KebdLvDGkngr.uVV5N3oJLnCiD998F1551JrObQBojXm', 1, 1, 0, 1, NULL, '2017-03-11 08:34:20', '2017-05-02 02:59:58', 'KyyI42xTt8ctBbybDeQH68MGgOXyohAaQqehnM5VciJ547hL97B2TzBo0ys4'),
	(2, 'GreatRedactor', 'redac@la.fr', '$2y$10$L3ytEP7pFndg5gSeUIORbeQkln4BtA2fyg4SA3n.jNK8RJ.2XvEDG', 2, 1, 1, 1, NULL, '2017-03-11 08:34:20', '2017-03-11 09:29:18', 'FBVAKSyBvwyRf4BkEs1gfcpfVxrsCspuxexv0J8w9GZfsOD4WPDPMAqYq0XZ'),
	(3, 'Walker', 'walker@la.fr', '$2y$10$pLnINZxl1XqmZWEv94DBh.5y2wsxRI7jB3gLl54cd4YMldQFfY6sy', 3, 0, 0, 1, NULL, '2017-03-11 08:34:20', '2017-03-11 09:10:30', 'oxWicoBWufNOUBpYqimWqefHHfUZyL0Z73K9Jqxw0i2eNqiQu27PU4XxTnqd'),
	(4, 'Slacker', 'slacker@la.fr', '$2y$10$.0/UgSMYfaQLqDDpEWTIT.7fZuyZJbKNn5RfOZBrgn.Z3YH863VEK', 3, 0, 0, 1, NULL, '2017-03-11 08:34:21', '2017-03-11 08:34:21', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
