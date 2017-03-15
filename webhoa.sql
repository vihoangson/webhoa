-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.5-10.1.13-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2017-03-14 22:39:40
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

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


-- Dumping structure for table webhoa.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.migrations: ~0 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table webhoa.products: ~0 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `title`, `category_id`, `images`, `content`, `price`, `created_at`, `updated_at`) VALUES
	(1, 'title', '', '', '', 0, NULL, NULL),
	(2, 'title', '', '', '', 0, NULL, NULL),
	(3, 'title', '', '', '', 0, NULL, NULL),
	(4, 'title', '', '', '', 0, NULL, NULL),
	(5, 'title', '', '', '', 0, NULL, NULL),
	(6, 'title', '', '', '', 0, NULL, NULL),
	(7, 'title', '', '', '', 0, NULL, NULL),
	(8, 'title', '', '', '', 0, NULL, NULL),
	(9, 'title', '', '', '', 0, NULL, NULL),
	(10, 'title', '', '', '', 0, NULL, NULL),
	(11, 'title', '', '', '', 0, NULL, NULL),
	(12, 'title', '', '', '', 0, NULL, NULL),
	(13, 'title', '', '', '', 0, NULL, NULL),
	(14, 'title', '', '', '', 0, NULL, NULL),
	(15, 'title', '', '', '', 0, NULL, NULL),
	(16, 'title', '', '', '', 0, NULL, NULL),
	(17, 'title', '', '', '', 0, NULL, NULL),
	(18, 'title', '', '', '', 0, NULL, NULL),
	(19, 'title', '', '', '', 0, NULL, NULL),
	(20, 'title', '', '', '', 0, NULL, NULL),
	(21, 'title', '', '', '', 0, NULL, NULL),
	(22, 'title', '', '', '', 0, NULL, NULL),
	(23, 'title', '', '', '', 0, NULL, NULL),
	(24, 'title', '', '', '', 0, NULL, NULL),
	(25, 'title', '', '', '', 0, NULL, NULL),
	(26, 'title', '', '', '', 0, NULL, NULL),
	(27, 'title', '', '', '', 0, NULL, NULL),
	(28, 'title', '', '', '', 0, NULL, NULL),
	(29, 'title', '', '', '', 0, NULL, NULL),
	(30, 'title', '', '', '', 0, NULL, NULL),
	(31, 'title', '', '', '', 0, NULL, NULL),
	(32, 'title', '', '', '', 0, NULL, NULL),
	(33, 'title', '', '', '', 0, NULL, NULL),
	(34, 'title', '', '', '', 0, NULL, NULL),
	(35, 'title', '', '', '', 0, NULL, NULL),
	(36, 'title', '', '', '', 0, NULL, NULL),
	(37, 'title', '', '', '', 0, NULL, NULL),
	(38, 'title', '', '', '', 0, NULL, NULL),
	(39, 'title', '', '', '', 0, NULL, NULL),
	(40, 'title', '', '', '', 0, NULL, NULL),
	(41, 'title', '', '', '', 0, NULL, NULL),
	(42, 'title', '', '', '', 0, NULL, NULL),
	(43, 'title', '', '', '', 0, NULL, NULL),
	(44, 'title', '', '', '', 0, NULL, NULL),
	(45, 'title', '', '', '', 0, NULL, NULL),
	(46, 'title', '', '', '', 0, NULL, NULL),
	(47, 'title', '', '', '', 0, NULL, NULL),
	(48, 'title', '', '', '', 0, NULL, NULL),
	(49, 'title', '', '', '', 0, NULL, NULL),
	(50, 'title', '', '', '', 0, NULL, NULL),
	(51, 'title', '', '', '', 0, NULL, NULL),
	(52, 'title', '', '', '', 0, NULL, NULL),
	(53, 'title', '', '', '', 0, NULL, NULL),
	(54, 'title', '', '', '', 0, NULL, NULL),
	(55, 'title', '', '', '', 0, NULL, NULL),
	(56, 'title', '', '', '', 0, NULL, NULL),
	(57, 'title', '', '', '', 0, NULL, NULL),
	(58, 'title', '', '', '', 0, NULL, NULL),
	(59, 'title', '', '', '', 0, NULL, NULL),
	(60, 'title', '', '', '', 0, NULL, NULL),
	(61, 'title', '', '', '', 0, NULL, NULL),
	(62, 'title', '', '', '', 0, NULL, NULL),
	(63, 'title', '', '', '', 0, NULL, NULL),
	(64, 'title', '', '', '', 0, NULL, NULL),
	(65, 'title', '', '', '', 0, NULL, NULL),
	(66, 'title', '', '', '', 0, NULL, NULL),
	(67, 'title', '', '', '', 0, NULL, NULL),
	(68, 'title', '', '', '', 0, NULL, NULL),
	(69, 'title', '', '', '', 0, NULL, NULL),
	(70, 'title', '', '', '', 0, NULL, NULL),
	(71, 'title', '', '', '', 0, NULL, NULL),
	(72, 'title', '', '', '', 0, NULL, NULL),
	(73, 'title', '', '', '', 0, NULL, NULL),
	(74, 'title', '', '', '', 0, NULL, NULL),
	(75, 'title', '', '', '', 0, NULL, NULL),
	(76, 'title', '', '', '', 0, NULL, NULL),
	(77, 'title', '', '', '', 0, NULL, NULL),
	(78, 'title', '', '', '', 0, NULL, NULL),
	(79, 'title', '', '', '', 0, NULL, NULL),
	(80, 'title', '', '', '', 0, NULL, NULL),
	(81, 'title', '', '', '', 0, NULL, NULL),
	(82, 'title', '', '', '', 0, NULL, NULL);
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
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
