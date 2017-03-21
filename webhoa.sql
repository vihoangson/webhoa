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
DROP DATABASE IF EXISTS `webhoa`;
CREATE DATABASE IF NOT EXISTS `webhoa` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `webhoa`;


-- Dumping structure for table webhoa.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.categories: ~15 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Hoa tươi', '2017-03-15 14:25:38', '2017-03-19 07:51:18'),
	(2, 'Cưới hỏi', '2017-03-16 00:00:00', '2017-03-19 07:51:27'),
	(3, 'Sinh nhật', '2017-03-18 05:54:15', '2017-03-19 07:51:34'),
	(4, 'Khai trương hội nghị', '2017-03-18 05:54:20', '2017-03-19 07:51:46'),
	(5, 'Chúc mừng', '2017-03-19 07:51:57', '2017-03-19 07:51:57'),
	(6, 'Chia buồn', '2017-03-19 07:52:04', '2017-03-19 07:52:04'),
	(7, 'Lan hồ điệp', '2017-03-19 07:52:20', '2017-03-19 07:52:20'),
	(8, 'Bó hoa', '2017-03-21 05:56:16', '2017-03-21 05:56:16'),
	(9, 'Giỏ hoa', '2017-03-21 05:56:25', '2017-03-21 05:56:25'),
	(10, 'Bình hoa', '2017-03-21 05:56:33', '2017-03-21 05:56:33'),
	(11, 'Hộp hoa', '2017-03-21 05:56:41', '2017-03-21 05:56:41'),
	(12, 'Loại khác', '2017-03-21 05:56:49', '2017-03-21 05:56:49'),
	(13, 'Từ 1 đến 4 cành', '2017-03-21 05:59:52', '2017-03-21 05:59:52'),
	(14, 'Từ 5 đến 10 cành', '2017-03-21 05:59:59', '2017-03-21 05:59:59'),
	(15, 'Trên 10 cành', '2017-03-21 06:00:05', '2017-03-21 06:00:05');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;


-- Dumping structure for table webhoa.category_product
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

-- Dumping data for table webhoa.category_product: ~0 rows (approximately)
/*!40000 ALTER TABLE `category_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_product` ENABLE KEYS */;


-- Dumping structure for table webhoa.contacts
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

-- Dumping data for table webhoa.contacts: ~3 rows (approximately)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `name`, `email`, `text`, `seen`, `created_at`, `updated_at`) VALUES
	(1, 'Dupont', 'dupont@la.fr', 'Lorem ipsum inceptos malesuada leo fusce tortor sociosqu semper, facilisis semper class tempus faucibus tristique duis eros, cubilia quisque habitasse aliquam fringilla orci non. Vel laoreet dolor enim justo facilisis neque accumsan, in ad venenatis hac per dictumst nulla ligula, donec mollis massa porttitor ullamcorper risus. Eu platea fringilla, habitasse.', 0, '2017-03-11 08:34:21', '2017-03-11 08:34:21'),
	(2, 'Durand', 'durand@la.fr', ' Lorem ipsum erat non elit ultrices placerat, netus metus feugiat non conubia fusce porttitor, sociosqu diam commodo metus in. Himenaeos vitae aptent consequat luctus purus eleifend enim, sollicitudin eleifend porta malesuada ac class conubia, condimentum mauris facilisis conubia quis scelerisque. Lacinia tempus nullam felis fusce ac potenti netus ornare semper molestie, iaculis fermentum ornare curabitur tincidunt imperdiet scelerisque imperdiet euismod.', 0, '2017-03-11 08:34:21', '2017-03-11 08:34:21'),
	(3, 'Martin', 'martin@la.fr', 'Lorem ipsum tempor netus aenean ligula habitant vehicula tempor ultrices, placerat sociosqu ultrices consectetur ullamcorper tincidunt quisque tellus, ante nostra euismod nec suspendisse sem curabitur elit. Malesuada lacus viverra sagittis sit ornare orci, augue nullam adipiscing pulvinar libero aliquam vestibulum, platea cursus pellentesque leo dui. Lectus curabitur euismod ad, erat.', 1, '2017-03-11 08:34:21', '2017-03-11 08:34:21');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;


-- Dumping structure for table webhoa.currencies
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

-- Dumping data for table webhoa.currencies: ~1 rows (approximately)
/*!40000 ALTER TABLE `currencies` DISABLE KEYS */;
INSERT INTO `currencies` (`id`, `name`, `code`, `symbol`, `format`, `exchange_rate`, `active`, `created_at`, `updated_at`) VALUES
	(1, 'US Dollar', 'USD', '$', '$1,0.00', '0', 0, '2017-03-19 06:01:21', '2017-03-19 06:01:21');
/*!40000 ALTER TABLE `currencies` ENABLE KEYS */;


-- Dumping structure for table webhoa.customers
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.customers: ~24 rows (approximately)
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` (`id`, `name`, `address`, `tel`, `city`, `email`, `created_at`, `updated_at`) VALUES
	(1, '234', '234', '234', '', '', '2017-03-18 14:52:51', '2017-03-18 14:52:51'),
	(2, '234', '234', '234', '', '', '2017-03-18 15:01:37', '2017-03-18 15:01:37'),
	(3, '', '', '', '', '', '2017-03-18 15:01:51', '2017-03-18 15:01:51'),
	(4, '', '', '', '', '', '2017-03-18 15:03:50', '2017-03-18 15:03:50'),
	(5, '345', '345', '', '', '', '2017-03-18 15:11:14', '2017-03-18 15:11:14'),
	(6, '345', '345', '', '', '', '2017-03-18 15:12:34', '2017-03-18 15:12:34'),
	(7, '345', '345', '', '', '', '2017-03-18 15:13:20', '2017-03-18 15:13:20'),
	(8, '345', '345', '', '', '', '2017-03-18 15:13:30', '2017-03-18 15:13:30'),
	(9, '3456345', '34543', '54325', '', '', '2017-03-18 15:14:26', '2017-03-18 15:14:26'),
	(10, '2134124', '124', '124', '', '', '2017-03-18 15:15:41', '2017-03-18 15:15:41'),
	(11, '4234', '234234', '234', '', '', '2017-03-18 15:17:21', '2017-03-18 15:17:21'),
	(12, '123', '124124', '124', '', '', '2017-03-18 15:18:15', '2017-03-18 15:18:15'),
	(13, '123', '124124', '124', '', '', '2017-03-18 15:20:23', '2017-03-18 15:20:23'),
	(14, '123', '124124', '124', '', '', '2017-03-18 16:46:24', '2017-03-18 16:46:24'),
	(15, '123', '124124', '124', '', '', '2017-03-18 16:46:38', '2017-03-18 16:46:38'),
	(16, '', '', '', '', '', '2017-03-18 16:56:15', '2017-03-18 16:56:15'),
	(17, '123@alsdkfj.com', ';lkasjdf', 'l;kasjdf', '', '', '2017-03-19 07:15:25', '2017-03-19 07:15:25'),
	(18, 'Email@alkfj.com', ';lkajsdf', 'lkasjd', '', '', '2017-03-19 07:16:04', '2017-03-19 07:16:04'),
	(19, '222', '77', '66', '', '', '2017-03-19 07:17:41', '2017-03-19 07:17:41'),
	(20, '11', '123123', '123123', '', '', '2017-03-19 07:19:00', '2017-03-19 07:19:00'),
	(21, '11', '66', '555', '', '', '2017-03-19 07:20:46', '2017-03-19 07:20:46'),
	(22, '11', '66', '555', '77', '444', '2017-03-19 07:21:20', '2017-03-19 07:21:20'),
	(23, '11', '66', '555', '77', '444', '2017-03-19 07:21:39', '2017-03-19 07:21:39'),
	(24, '1', '4', '3', '5', '2@gmail.com', '2017-03-19 07:26:22', '2017-03-19 07:26:22');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;


-- Dumping structure for table webhoa.images
DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=194 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.images: ~25 rows (approximately)
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
	(193, '1490060231_96421.jpg', 'uploads/1490060231_96421.jpg', '2017-03-21 01:37:11', '2017-03-21 01:37:11');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;


-- Dumping structure for table webhoa.image_product
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

-- Dumping data for table webhoa.image_product: ~0 rows (approximately)
/*!40000 ALTER TABLE `image_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `image_product` ENABLE KEYS */;


-- Dumping structure for table webhoa.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.migrations: ~4 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2017_03_14_143420_create_categories_table', 1),
	('2017_03_15_054210_create_category_allocations_table', 2),
	('0000_00_00_000000_create_shoppingcart_table', 3),
	('2013_11_26_161501_create_currency_table', 4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Dumping structure for table webhoa.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_detail_id` int(10) unsigned NOT NULL DEFAULT '0',
  `customer_id` int(255) NOT NULL,
  `data_cache` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`order_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.orders: ~12 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `order_detail_id`, `customer_id`, `data_cache`, `created_at`, `updated_at`) VALUES
	(1, 0, 7, '{"6eb486082e2834b35e3d97fcfd7c5d35":{"rowId":"6eb486082e2834b35e3d97fcfd7c5d35","id":155,"name":"1341 241 2422 22222222 22","qty":1,"price":100000,"options":[],"tax":21000,"subtotal":100000}}', '2017-03-18 15:13:20', '2017-03-18 15:13:20'),
	(2, 0, 8, '{"6eb486082e2834b35e3d97fcfd7c5d35":{"rowId":"6eb486082e2834b35e3d97fcfd7c5d35","id":155,"name":"1341 241 2422 22222222 22","qty":1,"price":100000,"options":[],"tax":21000,"subtotal":100000}}', '2017-03-18 15:13:30', '2017-03-18 15:13:30'),
	(4, 0, 10, '{"6eb486082e2834b35e3d97fcfd7c5d35":{"rowId":"6eb486082e2834b35e3d97fcfd7c5d35","id":155,"name":"1341 241 2422 22222222 22","qty":1,"price":100000,"options":[],"tax":21000,"subtotal":100000}}', '2017-03-18 15:15:41', '2017-03-18 15:15:41'),
	(5, 0, 11, '{"3c142ef00899696a0f01d4466754ca37":{"rowId":"3c142ef00899696a0f01d4466754ca37","id":160,"name":"4tw2","qty":1,"price":3452345,"options":[],"tax":724992.45,"subtotal":3452345}}', '2017-03-18 15:17:21', '2017-03-18 15:17:21'),
	(6, 0, 15, '{"6eb486082e2834b35e3d97fcfd7c5d35":{"rowId":"6eb486082e2834b35e3d97fcfd7c5d35","id":155,"name":"1341 241 2422 22222222 22","qty":1,"price":100000,"options":[],"tax":21000,"subtotal":100000}}', '2017-03-18 16:46:38', '2017-03-18 16:46:38'),
	(7, 0, 16, '{"6eb486082e2834b35e3d97fcfd7c5d35":{"rowId":"6eb486082e2834b35e3d97fcfd7c5d35","id":155,"name":"1341 241 2422 22222222 22","qty":1,"price":100000,"options":[],"tax":21000,"subtotal":100000}}', '2017-03-18 16:56:15', '2017-03-18 16:56:15'),
	(8, 0, 17, '{"64c0f00d428dbd52ef0bd8caa284adf4":{"rowId":"64c0f00d428dbd52ef0bd8caa284adf4","id":155,"name":"1341 241 2422 22222222 22","qty":"1","price":100000,"options":{"img_url":"uploads\\/1489760252_10392.jpg"},"tax":21000,"subtotal":100000},"b4524141fe7984a9fdde038b88b95686":{"rowId":"b4524141fe7984a9fdde038b88b95686","id":157,"name":"4tw2","qty":"1","price":3452345,"options":{"img_url":"uploads\\/1489799159_10409.jpg"},"tax":724992.45,"subtotal":3452345}}', '2017-03-19 07:15:25', '2017-03-19 07:15:25'),
	(9, 0, 18, '{"80e09d8fbf17105de12b1777d6060802":{"rowId":"80e09d8fbf17105de12b1777d6060802","id":156,"name":"4tw2","qty":1,"price":3452345,"options":{"img_url":"uploads\\/1489808407_26303.jpg"},"tax":0,"subtotal":3452345}}', '2017-03-19 07:16:04', '2017-03-19 07:16:04'),
	(10, 0, 19, '{"64c0f00d428dbd52ef0bd8caa284adf4":{"rowId":"64c0f00d428dbd52ef0bd8caa284adf4","id":155,"name":"1341 241 2422 22222222 22","qty":1,"price":100000,"options":{"img_url":"uploads\\/1489760252_10392.jpg"},"tax":0,"subtotal":100000}}', '2017-03-19 07:17:41', '2017-03-19 07:17:41'),
	(11, 0, 20, '{"80e09d8fbf17105de12b1777d6060802":{"rowId":"80e09d8fbf17105de12b1777d6060802","id":156,"name":"4tw2","qty":1,"price":3452345,"options":{"img_url":"uploads\\/1489808407_26303.jpg"},"tax":0,"subtotal":3452345}}', '2017-03-19 07:19:00', '2017-03-19 07:19:00'),
	(12, 0, 23, '{"80e09d8fbf17105de12b1777d6060802":{"rowId":"80e09d8fbf17105de12b1777d6060802","id":156,"name":"4tw2","qty":1,"price":3452345,"options":{"img_url":"uploads\\/1489808407_26303.jpg"},"tax":0,"subtotal":3452345}}', '2017-03-19 07:21:39', '2017-03-19 07:21:39'),
	(13, 0, 24, '{"80e09d8fbf17105de12b1777d6060802":{"rowId":"80e09d8fbf17105de12b1777d6060802","id":156,"name":"4tw2","qty":1,"price":3452345,"options":{"img_url":"uploads\\/1489808407_26303.jpg"},"tax":0,"subtotal":3452345},"90985c92d3f69f7995d1591eaef7fcce":{"rowId":"90985c92d3f69f7995d1591eaef7fcce","id":160,"name":"4tw2","qty":1,"price":3452345,"options":{"img_url":"uploads\\/1489828623_77983.jpg"},"tax":0,"subtotal":3452345}}', '2017-03-19 07:26:22', '2017-03-19 07:26:22');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;


-- Dumping structure for table webhoa.order_products
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

-- Dumping data for table webhoa.order_products: ~0 rows (approximately)
/*!40000 ALTER TABLE `order_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_products` ENABLE KEYS */;


-- Dumping structure for table webhoa.password_resets
DROP TABLE IF EXISTS `password_resets`;
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


-- Dumping structure for table webhoa.posts
DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `main_img` int(4) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `active` int(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=176 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.posts: ~2 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `title`, `summary`, `main_img`, `content`, `active`, `created_at`, `updated_at`) VALUES
	(172, '423456785678', '', 0, '<p><img src="/uploads/1490061312_44525.jpg"><b>2<i style="background-color: rgb(255, 255, 0);">342</i>3</b></p>', 1, '2017-03-21 01:34:55', '2017-03-21 01:55:14'),
	(175, 'yur5673', '', 0, '<p>3456<img src="/uploads/1490061370_67358.png"></p>', 1, '2017-03-21 01:56:12', '2017-03-21 02:00:37');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;


-- Dumping structure for table webhoa.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `main_img` int(4) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `price_sale` int(11) NOT NULL,
  `date_begin_sale` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_end_sale` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` int(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=174 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.products: ~5 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `title`, `summary`, `main_img`, `content`, `price`, `price_sale`, `date_begin_sale`, `date_end_sale`, `active`, `created_at`, `updated_at`) VALUES
	(169, '4tw2', '2345', 180, '<p>2345</p>', 3452345, 2345, '2017-03-18 08:06:07', '2017-03-23 16:51:49', 1, '2017-03-16 16:51:49', '2017-03-18 01:06:07'),
	(170, 'ấấd', '', 0, '', 0, 0, '2017-03-01 01:21:47', '2017-03-28 01:21:47', 1, '2017-03-21 01:21:47', '2017-03-21 01:21:47'),
	(171, 'ấấd', '', 0, '', 0, 0, '2017-03-01 01:22:36', '2017-03-28 01:22:36', 1, '2017-03-21 01:22:36', '2017-03-21 01:22:36'),
	(172, 'ádf', 'ádf', 0, '<p>ádf</p>', 0, 0, '2017-03-21 08:33:24', '0000-00-00 00:00:00', 0, '2017-03-21 01:33:24', '2017-03-21 01:33:24'),
	(173, 'ádf', 'ádf', 0, '<p>ádf</p>', 0, 0, '2017-03-21 08:34:03', '0000-00-00 00:00:00', 0, '2017-03-21 01:34:03', '2017-03-21 01:34:03');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;


-- Dumping structure for table webhoa.roles
DROP TABLE IF EXISTS `roles`;
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


-- Dumping structure for table webhoa.shoppingcart
DROP TABLE IF EXISTS `shoppingcart`;
CREATE TABLE IF NOT EXISTS `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`identifier`,`instance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.shoppingcart: ~0 rows (approximately)
/*!40000 ALTER TABLE `shoppingcart` DISABLE KEYS */;
/*!40000 ALTER TABLE `shoppingcart` ENABLE KEYS */;


-- Dumping structure for table webhoa.users
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
