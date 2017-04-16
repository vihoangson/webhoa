-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.5-10.1.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2017-04-15 10:07:29
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for webhoa


-- Dumping structure for table webhoa.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.categories: ~15 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Hoa tươi', 'hoa-tuoi', '2017-03-15 14:25:38', '2017-03-19 07:51:18'),
	(2, 'Cưới hỏi', 'cuoi-hoi', '2017-03-16 00:00:00', '2017-03-19 07:51:27'),
	(3, 'Sinh nhật', 'sinh-nhat', '2017-03-18 05:54:15', '2017-03-19 07:51:34'),
	(4, 'Khai trương hội nghị', 'khai-truong-hoi-nghi', '2017-03-18 05:54:20', '2017-03-19 07:51:46'),
	(5, 'Chúc mừng', 'chuc-mung', '2017-03-19 07:51:57', '2017-03-19 07:51:57'),
	(6, 'Chia buồn', 'chia-buon', '2017-03-19 07:52:04', '2017-03-19 07:52:04'),
	(7, 'Lan hồ điệp', 'lan-ho-diep', '2017-03-19 07:52:20', '2017-03-19 07:52:20'),
	(8, 'Bó hoa', 'bo-hoa', '2017-03-21 05:56:16', '2017-03-21 05:56:16'),
	(9, 'Giỏ hoa', 'gio-hoa', '2017-03-21 05:56:25', '2017-03-21 05:56:25'),
	(10, 'Bình hoa', 'binh-hoa', '2017-03-21 05:56:33', '2017-03-21 05:56:33'),
	(11, 'Hộp hoa', 'hop-hoa', '2017-03-21 05:56:41', '2017-03-21 05:56:41'),
	(12, 'Loại khác', 'loai-khac', '2017-03-21 05:56:49', '2017-03-21 05:56:49'),
	(13, 'Từ 1 đến 4 cành', 'tu-1-den-4-canh', '2017-03-21 05:59:52', '2017-03-21 05:59:52'),
	(14, 'Từ 5 đến 10 cành', 'tu-5-den-10-canh', '2017-03-21 05:59:59', '2017-03-21 05:59:59'),
	(15, 'Trên 10 cành', 'tren-10-canh', '2017-03-21 06:00:05', '2017-03-21 06:00:05');
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

-- Dumping data for table webhoa.category_product: ~23 rows (approximately)
/*!40000 ALTER TABLE `category_product` DISABLE KEYS */;
INSERT INTO `category_product` (`category_id`, `product_id`, `created_at`, `updated_at`) VALUES
	(1, 176, '2017-03-25 15:41:29', '2017-03-25 15:41:29'),
	(1, 177, '2017-03-26 09:31:09', '2017-03-26 09:31:09'),
	(1, 178, '2017-03-25 15:42:17', '2017-03-25 15:42:17'),
	(1, 179, '2017-03-26 09:31:58', '2017-03-26 09:31:58'),
	(1, 180, '2017-04-08 11:29:02', '2017-04-08 11:29:02'),
	(2, 176, '2017-03-26 09:24:35', '2017-03-26 09:24:35'),
	(2, 180, '2017-04-08 11:29:02', '2017-04-08 11:29:02'),
	(3, 176, '2017-03-25 15:41:29', '2017-03-25 15:41:29'),
	(3, 177, '2017-03-26 09:31:09', '2017-03-26 09:31:09'),
	(4, 176, '2017-03-26 09:24:35', '2017-03-26 09:24:35'),
	(4, 177, '2017-03-26 09:31:09', '2017-03-26 09:31:09'),
	(4, 178, '2017-03-25 15:42:17', '2017-03-25 15:42:17'),
	(5, 177, '2017-03-26 09:31:09', '2017-03-26 09:31:09'),
	(5, 178, '2017-03-25 15:42:17', '2017-03-25 15:42:17'),
	(6, 177, '2017-03-26 09:31:09', '2017-03-26 09:31:09'),
	(8, 177, '2017-03-26 09:31:09', '2017-03-26 09:31:09'),
	(8, 179, '2017-03-26 09:31:58', '2017-03-26 09:31:58'),
	(9, 177, '2017-03-26 09:31:09', '2017-03-26 09:31:09'),
	(10, 177, '2017-03-26 09:31:09', '2017-03-26 09:31:09'),
	(10, 179, '2017-03-26 09:31:58', '2017-03-26 09:31:58'),
	(11, 177, '2017-03-26 09:31:09', '2017-03-26 09:31:09'),
	(11, 179, '2017-03-26 09:31:58', '2017-03-26 09:31:58'),
	(12, 177, '2017-03-26 09:31:09', '2017-03-26 09:31:09'),
	(13, 180, '2017-04-08 11:29:02', '2017-04-08 11:29:02'),
	(14, 177, '2017-03-26 09:31:09', '2017-03-26 09:31:09'),
	(14, 179, '2017-03-26 09:31:58', '2017-03-26 09:31:58');
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

-- Dumping data for table webhoa.currencies: ~0 rows (approximately)
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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.customers: ~5 rows (approximately)
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` (`id`, `name`, `address`, `tel`, `city`, `email`, `created_at`, `updated_at`) VALUES
	(27, 'hoangson', 'safasf adf', '01218851146', '684a6', 'hoangson@gmail.com', '2017-04-08 01:27:31', '2017-04-08 01:27:31'),
	(28, 'hoang son', '23432', '13421', '234', 'hoangson@gmail.com', '2017-04-08 01:36:45', '2017-04-08 01:36:45'),
	(29, 'hoang son', 'ádflkjh', '01218851144', 'l;ákjdf', 'vihoangson@gmail.com', '2017-04-08 08:46:19', '2017-04-08 08:46:19'),
	(30, 'hson', 'sadflk', 'saldfkj', 'laskdfj', 'sasf@fasd.com', '2017-04-08 09:38:45', '2017-04-08 09:38:45'),
	(31, '123', ';lksadjf', 'lwaekfj', ';lkjas', 'eqw@gmailc.om', '2017-04-08 09:42:48', '2017-04-08 09:42:48'),
	(32, '345345', 'lksj', 'lkaesrjf', ';lkj', 'ss@fgad.com', '2017-04-08 09:46:20', '2017-04-08 09:46:20');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;


-- Dumping structure for table webhoa.groups
DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(10) unsigned NOT NULL,
  `sequence` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.groups: ~5 rows (approximately)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `parent_id`, `sequence`, `created_at`, `updated_at`) VALUES
	(1, 'asdafas222222222224124', 0, 0, '2017-03-30 11:22:07', '2017-03-30 13:04:16'),
	(2, '424523433134', 0, 3, '2017-03-30 11:22:11', '2017-03-30 13:03:33'),
	(3, 'ưerwer', 2, 4, '2017-03-30 12:02:06', '2017-03-30 13:03:44'),
	(4, 'tưer21512541', 1, 1, '2017-03-30 12:02:09', '2017-04-08 01:46:15'),
	(5, 'wrtwrt4124123', 1, 2, '2017-03-30 12:57:44', '2017-04-08 01:46:15');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;


-- Dumping structure for table webhoa.group_post
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

-- Dumping data for table webhoa.group_post: ~0 rows (approximately)
/*!40000 ALTER TABLE `group_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `group_post` ENABLE KEYS */;


-- Dumping structure for table webhoa.images
DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=202 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.images: ~31 rows (approximately)
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
	(197, '1490456489_14617.png', 'uploads/1490456489_14617.png', '2017-03-25 15:41:29', '2017-03-25 15:41:29'),
	(198, '1490456512_39503.png', 'uploads/1490456512_39503.png', '2017-03-25 15:41:52', '2017-03-25 15:41:52'),
	(199, '1490456537_77296.png', 'uploads/1490456537_77296.png', '2017-03-25 15:42:17', '2017-03-25 15:42:17'),
	(200, '1490520718_23238.png', 'uploads/1490520718_23238.png', '2017-03-26 09:31:58', '2017-03-26 09:31:58'),
	(201, '1491650942_66258.png', 'uploads/1491650942_66258.png', '2017-04-08 11:29:02', '2017-04-08 11:29:02');
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

-- Dumping data for table webhoa.image_product: ~4 rows (approximately)
/*!40000 ALTER TABLE `image_product` DISABLE KEYS */;
INSERT INTO `image_product` (`image_id`, `product_id`, `created_at`, `updated_at`) VALUES
	(197, 176, '2017-03-25 15:41:29', '2017-03-25 15:41:29'),
	(198, 177, '2017-03-25 15:41:52', '2017-03-25 15:41:52'),
	(199, 178, '2017-03-25 15:42:17', '2017-03-25 15:42:17'),
	(200, 179, '2017-03-26 09:31:58', '2017-03-26 09:31:58'),
	(201, 180, '2017-04-08 11:29:02', '2017-04-08 11:29:02');
/*!40000 ALTER TABLE `image_product` ENABLE KEYS */;


-- Dumping structure for table webhoa.menus
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

-- Dumping data for table webhoa.menus: ~17 rows (approximately)
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
	(18, 'Từ 1 đến 4 cành', 'category/tu-1-den-4-canh', 17, 'MainMenu', 2, '2017-04-07 12:21:49', '2017-04-07 12:23:11'),
	(19, 'Từ 5 đến 10 cành', 'category/tu-5-den-10-canh', 17, 'MainMenu', 3, '2017-04-07 12:22:04', '2017-04-07 12:23:12'),
	(20, 'Trên 10 cành', 'category/tren-10-canh', 17, 'MainMenu', 4, '2017-04-07 12:22:19', '2017-04-07 12:23:14'),
	(21, 'Chăm sóc hoa', 'post/177-cham-soc-hoa', 0, 'MainMenu', 5, '2017-04-07 12:22:33', '2017-04-07 12:23:04'),
	(22, 'Liên hệ', 'contact', 0, 'MainMenu', 6, '2017-04-07 12:22:46', '2017-04-07 12:23:04'),
	(23, 'Bó hoa', 'category/bo-hoa', 0, 'LeftMenu', 0, '2017-04-07 12:56:38', '2017-04-07 12:56:38'),
	(24, 'Giỏ hoa', 'category/gio-hoa', 0, 'LeftMenu', 0, '2017-04-07 12:57:00', '2017-04-07 12:57:00'),
	(25, 'Bình hoa', 'category/binh-hoa', 0, 'LeftMenu', 0, '2017-04-07 12:57:22', '2017-04-07 12:57:22'),
	(26, 'Hộp hoa', 'category/hop-hoa', 0, 'LeftMenu', 0, '2017-04-07 12:57:46', '2017-04-07 12:57:46'),
	(27, 'Loại khác', 'category/loai-khac', 0, 'LeftMenu', 0, '2017-04-07 12:58:07', '2017-04-07 12:58:07');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;


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


-- Dumping structure for table webhoa.options
DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.options: ~2 rows (approximately)
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
	(1, 'template_name', 'hoa', '2017-03-27 14:05:35', '2017-03-31 16:02:23');
/*!40000 ALTER TABLE `options` ENABLE KEYS */;


-- Dumping structure for table webhoa.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_detail_id` int(10) unsigned NOT NULL DEFAULT '0',
  `customer_id` int(255) NOT NULL,
  `data_cache` text COLLATE utf8_unicode_ci NOT NULL,
  `total_sum` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`order_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.orders: ~2 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `order_detail_id`, `customer_id`, `data_cache`, `total_sum`, `created_at`, `updated_at`) VALUES
	(8, 0, 31, '{"eaebb1fe89298729c0c37ee8b0388d71":{"rowId":"eaebb1fe89298729c0c37ee8b0388d71","id":176,"name":"HOA0002","qty":"10","price":90000,"options":{"img_url":"uploads\\/1490456489_14617.png"},"tax":0,"subtotal":900000}}', 900000, '2017-04-08 09:42:48', '2017-04-08 09:42:48'),
	(9, 0, 32, '{"eaebb1fe89298729c0c37ee8b0388d71":{"rowId":"eaebb1fe89298729c0c37ee8b0388d71","id":176,"name":"HOA0002","qty":"1","price":90000,"options":{"img_url":"uploads\\/1490456489_14617.png"},"tax":0,"subtotal":90000},"c8c5a307d2bfc756c445c29b99b9e794":{"rowId":"c8c5a307d2bfc756c445c29b99b9e794","id":177,"name":"HOA0003","qty":"1","price":1300000,"options":{"img_url":"uploads\\/1490456512_39503.png"},"tax":0,"subtotal":1300000},"f47087958a44d94b37169fb5b0679f2c":{"rowId":"f47087958a44d94b37169fb5b0679f2c","id":178,"name":"HOA0004","qty":"5","price":50000,"options":{"img_url":"uploads\\/1490456537_77296.png"},"tax":0,"subtotal":250000}}', 1640000, '2017-04-08 09:46:20', '2017-04-08 09:46:20');
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
  `slug` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=179 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.posts: ~2 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `title`, `summary`, `main_img`, `content`, `active`, `slug`, `created_at`, `updated_at`) VALUES
	(177, '221491618429', 'Cách chăm sóc hoa', 0, '<p><img src="/uploads/1490534255_61116.png"><br></p>', 1, '221491618371_1491618371_1491618373_1491618374_1491618429', '2017-03-26 06:50:10', '2017-04-08 02:27:09'),
	(178, '221491618429', 'Cách chăm sóc hoa', 0, '<p><img src="/uploads/1490534255_61116.png"><br></p>', 1, '221491618429_1491618429_1491618429', '2017-04-08 02:27:09', '2017-04-08 02:27:09');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;


-- Dumping structure for table webhoa.products
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.products: ~5 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `title`, `summary`, `slug`, `main_img`, `content`, `price`, `price_sale`, `date_begin_sale`, `date_end_sale`, `active`, `created_at`, `updated_at`) VALUES
	(176, 'HOA000233', '', 'hoa0002', 197, '', 1200000, 90000, '2017-03-02 11:22:38', '2017-05-01 11:22:38', 1, '2017-03-25 15:41:29', '2017-04-08 11:22:38'),
	(177, 'HOA0003', '', 'hoa0003', 198, '', 1300000, 0, '2017-03-10 15:41:52', '2017-03-30 15:41:52', 1, '2017-03-25 15:41:52', '2017-03-25 15:41:52'),
	(178, 'HOA0004', '', 'hoa0004', 199, '', 1600000, 50000, '2017-03-11 10:29:00', '2017-03-27 10:29:00', 1, '2017-03-25 15:42:17', '2017-03-26 10:29:00'),
	(179, 'HOA0001', '', 'hoa0001', 200, '', 100000, 99000, '2017-03-23 09:31:58', '2017-03-31 09:31:58', 1, '2017-03-26 09:31:58', '2017-03-26 09:32:22'),
	(180, 'HOA0010', '', 'hoa0010', 201, '', 100000, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '2017-04-08 11:29:02', '2017-04-08 11:37:11');
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
	(1, 'GreatAdmin', 'admin@la.fr', '$2y$10$YCzrrR/n8KebdLvDGkngr.uVV5N3oJLnCiD998F1551JrObQBojXm', 1, 1, 0, 1, NULL, '2017-03-11 08:34:20', '2017-03-27 14:54:22', 'ASsozGobUBrZKG1a5C4lo36Z4mOjTOrN2acqeRALGMlFCw6UwYHP1qhrXaGp'),
	(2, 'GreatRedactor', 'redac@la.fr', '$2y$10$L3ytEP7pFndg5gSeUIORbeQkln4BtA2fyg4SA3n.jNK8RJ.2XvEDG', 2, 1, 1, 1, NULL, '2017-03-11 08:34:20', '2017-03-11 09:29:18', 'FBVAKSyBvwyRf4BkEs1gfcpfVxrsCspuxexv0J8w9GZfsOD4WPDPMAqYq0XZ'),
	(3, 'Walker', 'walker@la.fr', '$2y$10$pLnINZxl1XqmZWEv94DBh.5y2wsxRI7jB3gLl54cd4YMldQFfY6sy', 3, 0, 0, 1, NULL, '2017-03-11 08:34:20', '2017-03-11 09:10:30', 'oxWicoBWufNOUBpYqimWqefHHfUZyL0Z73K9Jqxw0i2eNqiQu27PU4XxTnqd'),
	(4, 'Slacker', 'slacker@la.fr', '$2y$10$.0/UgSMYfaQLqDDpEWTIT.7fZuyZJbKNn5RfOZBrgn.Z3YH863VEK', 3, 0, 0, 1, NULL, '2017-03-11 08:34:21', '2017-03-11 08:34:21', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
