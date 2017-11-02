-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.22-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for aromacology
CREATE DATABASE IF NOT EXISTS `aromacology` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `aromacology`;

-- Dumping structure for table aromacology.banners
CREATE TABLE IF NOT EXISTS `banners` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_name` varchar(100) NOT NULL,
  `banner_image` varchar(100) NOT NULL,
  `banner_link` varchar(100) NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table aromacology.banners: ~2 rows (approximately)
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
REPLACE INTO `banners` (`banner_id`, `banner_name`, `banner_image`, `banner_link`) VALUES
	(4, 'main_jumbotron', 'mini jumbotron.png', '');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;

-- Dumping structure for table aromacology.cart
CREATE TABLE IF NOT EXISTS `cart` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table aromacology.cart: ~0 rows (approximately)
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
REPLACE INTO `cart` (`user_id`, `product_id`, `quantity`) VALUES
	(1, 19, 1);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;

-- Dumping structure for table aromacology.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(100) NOT NULL,
  `contact_details` varchar(100) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table aromacology.contact: ~5 rows (approximately)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
REPLACE INTO `contact` (`contact_id`, `contact_name`, `contact_details`) VALUES
	(1, 'facebook', 'https://www.facebook.com/AromacologySensiPhilippines/'),
	(2, 'twitter', 'https://twitter.com/aromacologyph'),
	(3, 'instagram', 'https://www.instagram.com/basicorganic/'),
	(4, 'phone_1', '2003115'),
	(5, 'phone_2', '222003'),
	(6, 'email', 'cplasabas.2013@gmail.co');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table aromacology.main_products
CREATE TABLE IF NOT EXISTS `main_products` (
  `main_product_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table aromacology.main_products: ~2 rows (approximately)
/*!40000 ALTER TABLE `main_products` DISABLE KEYS */;
REPLACE INTO `main_products` (`main_product_id`, `product_id`) VALUES
	(1, 19),
	(2, 19);
/*!40000 ALTER TABLE `main_products` ENABLE KEYS */;

-- Dumping structure for table aromacology.main_slider
CREATE TABLE IF NOT EXISTS `main_slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_image` varchar(100) NOT NULL,
  `slider_name` varchar(100) NOT NULL,
  `slider_link` varchar(100) NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table aromacology.main_slider: ~2 rows (approximately)
/*!40000 ALTER TABLE `main_slider` DISABLE KEYS */;
REPLACE INTO `main_slider` (`slider_id`, `slider_image`, `slider_name`, `slider_link`) VALUES
	(3, 'main-banner-2.jpg', 'Doctor', 'about-info.php?id=3'),
	(5, 'main-banner-1.jpg', 'discounts', 'about-info.php?id=3');
/*!40000 ALTER TABLE `main_slider` ENABLE KEYS */;

-- Dumping structure for table aromacology.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT '1',
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_completed` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`order_id`),
  KEY `order_id` (`order_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table aromacology.orders: ~1 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
REPLACE INTO `orders` (`order_id`, `user_id`, `order_status`, `order_date`, `order_completed`) VALUES
	(2, 3, 1, '2017-09-26 01:10:22', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table aromacology.order_product
CREATE TABLE IF NOT EXISTS `order_product` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table aromacology.order_product: ~11 rows (approximately)
/*!40000 ALTER TABLE `order_product` DISABLE KEYS */;
REPLACE INTO `order_product` (`order_id`, `product_id`, `quantity`) VALUES
	(1, 19, 1),
	(1, 18, 3),
	(2, 19, 1),
	(3, 19, 1),
	(4, 19, 1),
	(4, 20, 1),
	(5, 19, 1),
	(6, 19, 2),
	(6, 20, 1),
	(7, 19, 1),
	(8, 19, 1),
	(9, 19, 1),
	(10, 19, 1),
	(1, 19, 1),
	(2, 20, 1);
/*!40000 ALTER TABLE `order_product` ENABLE KEYS */;

-- Dumping structure for table aromacology.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(100) NOT NULL,
  `page_body` longtext NOT NULL,
  `page_image` varchar(100) NOT NULL,
  `page_category` int(11) NOT NULL,
  `page_link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Dumping data for table aromacology.pages: ~12 rows (approximately)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
REPLACE INTO `pages` (`id`, `page_name`, `page_body`, `page_image`, `page_category`, `page_link`) VALUES
	(9, 'about', '', '', 0, 'about-info.php?id=1'),
	(10, 'history', '', '', 0, 'about-info.php?id=2'),
	(11, 'mission', '', '', 0, 'about-info.php?id=3'),
	(12, 'vision', '', '', 0, 'about-info.php?id=4'),
	(13, 'hair_Care', 'Whether you need to give your hair a thicker, fuller appearance or enhance its shine, that\'s easy, if you give your hair the natural treatment with Aromacology Sensi Hair Care Products to make your hair grow healthy, lustrous and full of life!', '', 2, 'product-info.php?id=1'),
	(14, 'face_care', 'asdadas', '', 3, 'product-info.php?id=2'),
	(15, 'foot_care', 'asda', '', 4, 'product-info.php?id=3'),
	(16, 'body_care', 'test', '', 5, 'product-info.php?id=4'),
	(17, 'food', 'TEST', '', 6, 'product-info.php?id=5'),
	(18, 'aromatherapy', 'TEST2', 'Jumbotron.png', 7, 'product-info.php?id=6'),
	(19, 'opportunity', '', '', 0, 'opportunity.php'),
	(20, 'lifestyle\r\n', '', '', 0, 'lifestyle.php');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- Dumping structure for table aromacology.post
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(100) NOT NULL,
  `post_subtitle` varchar(100) NOT NULL,
  `post_body` longtext NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_image` varchar(100) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `post_title` (`post_title`),
  KEY `post_date` (`post_date`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table aromacology.post: ~3 rows (approximately)
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
REPLACE INTO `post` (`post_id`, `post_title`, `post_subtitle`, `post_body`, `post_date`, `post_image`) VALUES
	(1, 'the art of aromatherapy', 'aromatherapy at it\'s finest', 'Aromacology bath and body care collection pampers your skin and excites your senses. We\'ve search the world for benefit-rich botanicals to create natural bath and body care products that gently cleanse, condition and hydrate your skin.\r\n\r\nOur Body Butters, Body Scrubs, Whitening formula are rich, luxurious and scented with wonderful aromas with NO harsh chemicals.', '2017-09-25 09:36:42', 'pineapple soap.png'),
	(2, 'Moringa Cholocate', 'Chocolate infused with moringa\'s extract', 'Chocolate infused with moringa\'s extract.', '2017-09-25 09:36:14', 'moringa-chocolate.png'),
	(3, 'Match', 'Match', 'Sample Body of blog', '2017-09-25 10:07:38', 'matcha-tea.png');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;

-- Dumping structure for table aromacology.product
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_description` longtext NOT NULL,
  `product_price` decimal(11,2) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '1',
  `is_featured` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Dumping data for table aromacology.product: ~1 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
REPLACE INTO `product` (`product_id`, `product_name`, `product_description`, `product_price`, `product_image`, `category_id`, `is_new`, `is_featured`) VALUES
	(19, 'soyas scrub', 'scrub made of soya', 500.00, 'soyascrub lavender.png', 2, 1, 1),
	(20, 'pineapple soap', 'soap made of pinapples', 520.00, 'pineapple soap.png', 2, 1, 1),
	(21, 'H Cream', 'Cream', 200.00, 'h-cream.png', 5, 1, 1);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping structure for table aromacology.product_category
CREATE TABLE IF NOT EXISTS `product_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `category_description` varchar(100) NOT NULL,
  PRIMARY KEY (`category_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table aromacology.product_category: ~6 rows (approximately)
/*!40000 ALTER TABLE `product_category` DISABLE KEYS */;
REPLACE INTO `product_category` (`category_id`, `category_name`, `category_description`) VALUES
	(1, 'all', ''),
	(2, 'hair care\r\n', ''),
	(3, 'face care', ''),
	(4, 'foot care', ''),
	(5, 'body care', ''),
	(6, 'food', ''),
	(7, 'aromatherapy', '');
/*!40000 ALTER TABLE `product_category` ENABLE KEYS */;

-- Dumping structure for table aromacology.product_social
CREATE TABLE IF NOT EXISTS `product_social` (
  `product_id` int(11) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table aromacology.product_social: ~2 rows (approximately)
/*!40000 ALTER TABLE `product_social` DISABLE KEYS */;
REPLACE INTO `product_social` (`product_id`, `facebook`, `twitter`, `instagram`) VALUES
	(17, 'facebook.com/secret', '', 'instagram.com/secretthree'),
	(18, 'https://www.facebook.com/?ref=logo', 'https://www.facebook.com/?ref=logo', 'https://www.facebook.com/?ref=logo'),
	(19, '', '', ''),
	(20, '', '', ''),
	(21, '', '', '');
/*!40000 ALTER TABLE `product_social` ENABLE KEYS */;

-- Dumping structure for table aromacology.social
CREATE TABLE IF NOT EXISTS `social` (
  `social_id` int(11) NOT NULL,
  `social_name` varchar(100) NOT NULL,
  `social_link` int(11) NOT NULL,
  PRIMARY KEY (`social_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table aromacology.social: ~0 rows (approximately)
/*!40000 ALTER TABLE `social` DISABLE KEYS */;
/*!40000 ALTER TABLE `social` ENABLE KEYS */;

-- Dumping structure for table aromacology.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table aromacology.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`user_id`, `username`, `password`, `type`) VALUES
	(1, 'admin', 'admin', 0),
	(2, 'customer1', 'customer1', 1),
	(3, 'cplasabas', '042895Ced!', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table aromacology.user_detail
CREATE TABLE IF NOT EXISTS `user_detail` (
  `user_detail_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` int(11) NOT NULL,
  `birthday` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table aromacology.user_detail: ~2 rows (approximately)
/*!40000 ALTER TABLE `user_detail` DISABLE KEYS */;
REPLACE INTO `user_detail` (`user_detail_id`, `first_name`, `last_name`, `address`, `gender`, `birthday`, `email`, `phone`) VALUES
	(1, 'Administrator 1', 'Administrator 1', 'secret', 1, '2017-09-18 02:38:00', '', 0),
	(2, 'cedric angelo', 'plasabas', 'block 22 lot 7 calle de teresita, fuente de villa-abrille,matina, davao city,philippines', 1, '2017-09-23 04:11:35', 'cplasabas.destinydavao', 2239563),
	(3, 'Cedric', 'Plasabas', 'BLock 22, cedric Id, matina, davao city', 0, '2017-09-25 03:57:36', 'cplasabas.destinydavao@gmail.com', 29568899);
/*!40000 ALTER TABLE `user_detail` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
