-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2023 at 05:20 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pin_bike`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_title` varchar(100) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'TVS'),
(2, 'Duke'),
(3, 'Bajaj'),
(4, 'Hero'),
(5, 'Yamaha'),
(6, 'Royal Enfield'),
(7, 'Honda'),
(8, 'Kawasaki'),
(9, 'BMW'),
(10, 'Suzuki'),
(11, 'Benelli'),
(12, 'Keeway'),
(13, 'Triumph'),
(14, 'abC');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE IF NOT EXISTS `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES
(14, '127.0.0.1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_title` varchar(100) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Road Bikes'),
(2, 'Electric bikes'),
(3, 'Mountain Bikes'),
(4, 'Sports'),
(5, 'Bullet'),
(6, 'Ninja'),
(7, 'Cruiser'),
(8, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_title` varchar(50) NOT NULL,
  `product_description` varchar(300) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `prodect_image1` varchar(255) NOT NULL,
  `prodect_image2` varchar(255) NOT NULL,
  `prodect_image3` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `stat` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `prodect_image1`, `prodect_image2`, `prodect_image3`, `product_price`, `dates`, `stat`) VALUES
(1, 'Bajaj Chetak', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'Electric, Bajaj, New, good, motorcycle, scooter', 2, 2, 'bajaj_chetak1.jpg', 'bajaj_chetak_1.jfif', 'bajaj_chetak3.webp', 152000, '2023-04-28 19:42:17', 0),
(2, 'TVS iQube Electric', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'tvs, electric, good', 2, 2, 'TVS_iqube-electric.jpg', 'tvs_iqube_2.jpg', 'b3.png', 163000, '2023-04-28 19:43:41', 0),
(4, 'Hero Xpulse 200', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'mountain, comfort, best, new, adventure', 3, 3, 'Hero_Xpluse.jpg', 'hero2.webp', 'hero2.webp', 240000, '2023-04-28 19:47:31', 0),
(5, 'Yamaha Tracer 900 GT', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'Yamaha, red, best, look, new, attractive', 3, 4, 'Yamaha_tracer.jpg', 'yamaha1.jpg', 'yamaha1.jpg', 1350000, '2023-04-28 19:51:49', 0),
(6, ' BMW R 1250 GS', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'bmw, new, best, blue, comfort,mountain', 3, 9, 'bmw.jpg', 'bmw.jpg', 'bmw.jpg', 2079740, '2023-04-28 20:25:36', 0),
(7, 'Suzuki V-Strom 650XT', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'suzuki, blue, mountain', 3, 10, 'suzuki_vstorm.jpg', 'suzuki_vstorm.jpg', 'suzuki_vstorm.jpg', 1923400, '2023-04-28 20:26:14', 0),
(8, 'Kawasaki Versys 1000', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'orange, black, mountain, kawasaki', 3, 8, 'Kawasaki-Versys-1000.jpg', 'Kawasaki-Versys-1000.jpg', 'Kawasaki-Versys-1000.jpg', 234000, '2023-04-28 20:26:49', 0),
(9, 'Yamaha R15S', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'Yamaha, sports, black, new', 4, 5, 'yamaha1.jpg', 'yamaha1.jpg', 'yamaha1.jpg', 230000, '2023-04-28 20:27:16', 0),
(10, 'Yamaha FZS-FI V3T', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'Yamaha, sports, blue, red', 4, 5, 'yamaha_fz1.webp', 'yamaha_fz2.avif', 'yamaha_fz2.avif', 128000, '2023-04-28 20:27:21', 0),
(11, 'TVS Raider', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'tvs, sports, good, new', 4, 1, 'tvsRaider.jpg', 'tvsRaider.jpg', 'b3.png', 134080, '2023-04-28 20:27:50', 0),
(12, 'Bajaj Pulsur 150', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'bajaj,pulsur,good,comfort', 4, 3, 'bajaj_pulsur_150.png', 'bajaj_pulsur_150.png', 'bajaj_pulsur_150.png', 129000, '2023-04-28 20:28:05', 0),
(13, 'TVS Radeon', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'tvs, road,blue, black', 1, 1, 'TVS_radeon.jpg', 'TVS_radeon.jpg', 'TVS_radeon.jpg', 129000, '2023-04-28 20:28:15', 0),
(14, 'honda Xt10', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'honda, mountain', 3, 7, 'honda.jpg', 'honda.jpg', 'honda.jpg', 124980, '2023-04-28 20:30:04', 0),
(15, 'Royal Enfield Him', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'Bullet, blue, black, royal', 5, 6, 'Royal_Enfield_Himalayan.webp', 'Royal_Enfield_Himalayan.webp', 'Royal_Enfield_Himalayan.webp', 189060, '2023-04-28 21:01:19', 0),
(16, 'RE Glacier', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'royal, bullet', 5, 6, 'Royal_Enfield_hunter_350.jpg', 'Royal_Enfield_hunter_350.jpg', 'Royal_Enfield_hunter_350.jpg', 230000, '2023-04-28 21:01:34', 0),
(17, 'Royal Enfield Glacier', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'glacier, blue, royal', 1, 6, 'Royal_Enfield_Himalayan_Glacier_Blue.jpg', 'Royal_Enfield_Himalayan_Glacier_Blue.jpg', 'Royal_Enfield_Himalayan_Glacier_Blue.jpg', 234000, '2023-04-28 20:29:01', 0),
(18, 'KTM 390', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'ktm, duke, new, orange, black', 1, 2, 'ktm390_1.jpg', 'ktm390_2.jpg', 'ktm390_2.jpg', 234560, '2023-04-28 20:31:06', 0),
(19, 'Hero Splender plus', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'splender, hero, black, new', 1, 4, 'hero_splender_plus.jpg', 'hero_splender_plus.jpg', 'hero_splender_plus.jpg', 190000, '2023-04-28 20:31:20', 0),
(20, 'Kawasaki Ninja', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'ninja, new', 6, 8, 'Kawasaki_Ninja_650.jpg', 'Kawasaki_Ninja_650.jpg', 'Kawasaki_Ninja_650.jpg', 189000, '2023-04-28 20:31:32', 0),
(21, 'Benelli TRK 502X', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'bike, benelli, sports', 4, 11, 'benelli_trk_2.jpg', 'benelli_1.jpg', 'benelli_brand.png', 262000, '2023-04-29 21:07:38', 0),
(22, 'Keeway K300 R', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'sports,black,red,bike,new,good', 4, 12, 'keeway_300.webp', 'keeway_3002.gif', 'keeway_300.webp', 265056, '2023-04-29 21:07:55', 0),
(23, 'Triump 1200 RS', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'sports, black, adventure', 4, 13, 'triumph_1200.webp', 'triumph_1200.webp', 'triumph_1200.webp', 179500, '2023-04-29 21:08:12', 0),
(24, 'Triump 1200 RS', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'sports, black, adventure', 4, 13, 'triumph_1200.webp', 'triumph_1200.webp', 'triumph_1200.webp', 179500, '2023-04-29 21:08:18', 0),
(25, 'Honda CB500F', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads. ', 'honda,black,shine,good,comfort', 1, 7, 'honda-cb500f.webp', 'honda-cb500f_3.webp', 'honda-cb500f_side.webp', 479000, '2023-04-29 21:08:35', 0),
(26, 'Royal Enfield Bullet 350', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'bullet, royal, new, black', 5, 6, 're_bullet_350.webp', 're_bullet_350_2.webp', 're_bullet_350.webp', 172000, '2023-04-29 21:08:46', 0),
(27, 'RE Bullet 30x 52c', 'This motorcycle will surely be a good choice for adventurers who want comfort in adventures and off roads.', 'bullet, royal, black', 5, 6, 're_bullet1.jfif', 're_bullet_350_2.webp', 're_bullet1.jfif', 189000, '2023-04-29 21:08:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(70) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` varchar(10) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_city` varchar(24) NOT NULL,
  `user_state` varchar(23) NOT NULL,
  `user_pincode` int(6) NOT NULL,
  `user_ip` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_email`, `user_phone`, `user_password`, `user_city`, `user_state`, `user_pincode`, `user_ip`) VALUES
(1, 'hello', 'as@hello.com', '23456', 'aaaaaaaaaaaa', '4', '3', 1234, '127.0.0.1'),
(8, 'shweta', 'sj@gmail.com', '234567890', 'dsf', '4', '2', 123456, '127.0.0.1'),
(23, 'shhwetagfhbj', 'gBBNDCC@GMAncdcj', '345678', 'dsfgh', '1', '1', 34567, '127.0.0.1'),
(24, 'radhika@gmail.com', '23456@gmail.com', '0987654', '23er', '4', '2', 345678, '127.0.0.1');
