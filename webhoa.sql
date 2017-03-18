-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.5-10.1.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2017-03-18 22:15:20
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.categories: ~4 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Hoa', '2017-03-15 14:25:38', '2017-03-18 05:46:10'),
	(2, 'Quà tặng', '2017-03-16 00:00:00', '2017-03-16 00:00:00'),
	(3, 'Quần áo', '2017-03-18 05:54:15', '2017-03-18 05:59:19'),
	(4, 'Giày dép', '2017-03-18 05:54:20', '2017-03-18 05:59:26');
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

-- Dumping data for table webhoa.category_product: ~7 rows (approximately)
/*!40000 ALTER TABLE `category_product` DISABLE KEYS */;
INSERT INTO `category_product` (`category_id`, `product_id`, `created_at`, `updated_at`) VALUES
	(1, 155, '2017-03-16 17:13:43', '2017-03-16 17:13:43'),
	(2, 155, '2017-03-16 17:00:16', '2017-03-16 17:00:16'),
	(2, 156, '2017-03-16 15:55:27', '2017-03-16 15:55:27'),
	(2, 157, '2017-03-16 16:51:49', '2017-03-16 16:51:49'),
	(3, 155, '2017-03-18 05:59:10', '2017-03-18 05:59:10'),
	(4, 155, '2017-03-18 05:59:10', '2017-03-18 05:59:10'),
	(4, 160, '2017-03-18 09:17:03', '2017-03-18 09:17:03');
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


-- Dumping structure for table webhoa.customers
DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.customers: ~9 rows (approximately)
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` (`id`, `name`, `address`, `tel`, `created_at`, `updated_at`) VALUES
	(1, '234', '234', '234', '2017-03-18 14:52:51', '2017-03-18 14:52:51'),
	(2, '234', '234', '234', '2017-03-18 15:01:37', '2017-03-18 15:01:37'),
	(3, '', '', '', '2017-03-18 15:01:51', '2017-03-18 15:01:51'),
	(4, '', '', '', '2017-03-18 15:03:50', '2017-03-18 15:03:50'),
	(5, '345', '345', '', '2017-03-18 15:11:14', '2017-03-18 15:11:14'),
	(6, '345', '345', '', '2017-03-18 15:12:34', '2017-03-18 15:12:34'),
	(7, '345', '345', '', '2017-03-18 15:13:20', '2017-03-18 15:13:20'),
	(8, '345', '345', '', '2017-03-18 15:13:30', '2017-03-18 15:13:30'),
	(9, '3456345', '34543', '54325', '2017-03-18 15:14:26', '2017-03-18 15:14:26');
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
) ENGINE=InnoDB AUTO_INCREMENT=192 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.images: ~23 rows (approximately)
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
	(191, '1489828623_96596.jpg', 'uploads/1489828623_96596.jpg', '2017-03-18 09:17:03', '2017-03-18 09:17:03');
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

-- Dumping data for table webhoa.image_product: ~23 rows (approximately)
/*!40000 ALTER TABLE `image_product` DISABLE KEYS */;
INSERT INTO `image_product` (`image_id`, `product_id`, `created_at`, `updated_at`) VALUES
	(162, 155, '2017-03-17 14:17:32', '2017-03-17 14:17:32'),
	(163, 155, '2017-03-17 14:17:32', '2017-03-17 14:17:32'),
	(164, 155, '2017-03-17 14:17:32', '2017-03-17 14:17:32'),
	(165, 155, '2017-03-17 14:17:32', '2017-03-17 14:17:32'),
	(166, 155, '2017-03-17 14:17:32', '2017-03-17 14:17:32'),
	(168, 155, '2017-03-17 15:04:56', '2017-03-17 15:04:56'),
	(169, 155, '2017-03-17 15:04:56', '2017-03-17 15:04:56'),
	(170, 155, '2017-03-17 15:04:56', '2017-03-17 15:04:56'),
	(177, 157, '2017-03-18 01:05:59', '2017-03-18 01:05:59'),
	(178, 157, '2017-03-18 01:05:59', '2017-03-18 01:05:59'),
	(179, 157, '2017-03-18 01:05:59', '2017-03-18 01:05:59'),
	(180, 157, '2017-03-18 01:05:59', '2017-03-18 01:05:59'),
	(181, 157, '2017-03-18 01:05:59', '2017-03-18 01:05:59'),
	(182, 157, '2017-03-18 01:05:59', '2017-03-18 01:05:59'),
	(183, 156, '2017-03-18 03:40:07', '2017-03-18 03:40:07'),
	(184, 156, '2017-03-18 03:40:07', '2017-03-18 03:40:07'),
	(185, 158, '2017-03-18 07:28:28', '2017-03-18 07:28:28'),
	(186, 158, '2017-03-18 07:28:28', '2017-03-18 07:28:28'),
	(187, 158, '2017-03-18 07:28:28', '2017-03-18 07:28:28'),
	(188, 158, '2017-03-18 07:28:28', '2017-03-18 07:28:28'),
	(189, 160, '2017-03-18 09:17:03', '2017-03-18 09:17:03'),
	(190, 160, '2017-03-18 09:17:03', '2017-03-18 09:17:03'),
	(191, 160, '2017-03-18 09:17:03', '2017-03-18 09:17:03');
/*!40000 ALTER TABLE `image_product` ENABLE KEYS */;


-- Dumping structure for table webhoa.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.migrations: ~3 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2017_03_14_143420_create_categories_table', 1),
	('2017_03_15_054210_create_category_allocations_table', 2),
	('0000_00_00_000000_create_shoppingcart_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Dumping structure for table webhoa.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `data_cache` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.orders: ~3 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `customer_id`, `product_id`, `data_cache`, `created_at`, `updated_at`) VALUES
	(1, 7, 0, '{"6eb486082e2834b35e3d97fcfd7c5d35":{"rowId":"6eb486082e2834b35e3d97fcfd7c5d35","id":155,"name":"1341 241 2422 22222222 22","qty":1,"price":100000,"options":[],"tax":21000,"subtotal":100000}}', '2017-03-18 15:13:20', '2017-03-18 15:13:20'),
	(2, 8, 0, '{"6eb486082e2834b35e3d97fcfd7c5d35":{"rowId":"6eb486082e2834b35e3d97fcfd7c5d35","id":155,"name":"1341 241 2422 22222222 22","qty":1,"price":100000,"options":[],"tax":21000,"subtotal":100000}}', '2017-03-18 15:13:30', '2017-03-18 15:13:30'),
	(3, 9, 0, '{"6eb486082e2834b35e3d97fcfd7c5d35":{"rowId":"6eb486082e2834b35e3d97fcfd7c5d35","id":155,"name":"1341 241 2422 22222222 22","qty":2,"price":100000,"options":[],"tax":21000,"subtotal":200000},"2f3ce7c0f15a10b494d8607241b0857c":{"rowId":"2f3ce7c0f15a10b494d', '2017-03-18 15:14:26', '2017-03-18 15:14:26');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;


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
  `date_begin_sale` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_end_sale` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` int(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.products: ~15 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `title`, `summary`, `main_img`, `content`, `price`, `price_sale`, `date_begin_sale`, `date_end_sale`, `active`, `created_at`, `updated_at`) VALUES
	(155, '1341 241 2422 22222222 22', 'Summary', 164, '<p>Nội <b>dung</b> </p><p><img src="/uploads/1489684420_62757.jpg"><br></p>', 100000, 10000, '2017-03-18 14:27:33', '2017-03-31 17:22:38', 1, '2017-03-16 15:53:05', '2017-03-18 07:27:33'),
	(156, '4tw2', '2345', 184, '<p>2345</p>', 3452345, 2345, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2017-03-16 15:55:27', '2017-03-18 06:30:57'),
	(157, '4tw2', '2345', 180, '<p>2345</p>', 3452345, 2345, '2017-03-18 08:06:07', '2017-03-23 16:51:49', 1, '2017-03-16 16:51:49', '2017-03-18 01:06:07'),
	(158, '4tw2', '2345', 186, '<p>2345</p>', 3452345, 2345, '2017-03-18 08:06:07', '2017-03-23 16:51:49', 1, '2017-03-16 16:51:49', '2017-03-18 07:28:35'),
	(159, '4tw2', '2345', 180, '<p>2345</p>', 3452345, 2345, '2017-03-18 08:06:07', '2017-03-23 16:51:49', 1, '2017-03-16 16:51:49', '2017-03-18 01:06:07'),
	(160, '4tw2', '2345', 190, '<p>2345</p>', 3452345, 2345, '2017-03-18 16:17:20', '2017-03-23 16:51:49', 1, '2017-03-16 16:51:49', '2017-03-18 09:17:20'),
	(161, '4tw2', '2345', 180, '<p>2345</p>', 3452345, 2345, '2017-03-18 08:06:07', '2017-03-23 16:51:49', 1, '2017-03-16 16:51:49', '2017-03-18 01:06:07'),
	(162, '4tw2', '2345', 180, '<p>2345</p>', 3452345, 2345, '2017-03-18 08:06:07', '2017-03-23 16:51:49', 1, '2017-03-16 16:51:49', '2017-03-18 01:06:07'),
	(163, '4tw2', '2345', 180, '<p>2345</p>', 3452345, 2345, '2017-03-18 08:06:07', '2017-03-23 16:51:49', 1, '2017-03-16 16:51:49', '2017-03-18 01:06:07'),
	(164, '4tw2', '2345', 180, '<p>2345</p>', 3452345, 2345, '2017-03-18 08:06:07', '2017-03-23 16:51:49', 1, '2017-03-16 16:51:49', '2017-03-18 01:06:07'),
	(165, '4tw2', '2345', 180, '<p>2345</p>', 3452345, 2345, '2017-03-18 08:06:07', '2017-03-23 16:51:49', 1, '2017-03-16 16:51:49', '2017-03-18 01:06:07'),
	(166, '4tw2', '2345', 180, '<p>2345</p>', 3452345, 2345, '2017-03-18 08:06:07', '2017-03-23 16:51:49', 1, '2017-03-16 16:51:49', '2017-03-18 01:06:07'),
	(167, '4tw2', '2345', 180, '<p>2345</p>', 3452345, 2345, '2017-03-18 08:06:07', '2017-03-23 16:51:49', 1, '2017-03-16 16:51:49', '2017-03-18 01:06:07'),
	(168, '4tw2', '2345', 180, '<p>2345</p>', 3452345, 2345, '2017-03-18 08:06:07', '2017-03-23 16:51:49', 1, '2017-03-16 16:51:49', '2017-03-18 01:06:07'),
	(169, '4tw2', '2345', 180, '<p>2345</p>', 3452345, 2345, '2017-03-18 08:06:07', '2017-03-23 16:51:49', 1, '2017-03-16 16:51:49', '2017-03-18 01:06:07');
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
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
