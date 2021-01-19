-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 19, 2021 at 03:26 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(1, 'Hatchbacks', 'laptops'),
(2, 'Sedan', 'desktop-pc'),
(3, 'SUV', 'tablets');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE IF NOT EXISTS `details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `sales_id`, `product_id`, `quantity`) VALUES
(16, 9, 3, 2),
(17, 9, 1, 3),
(20, 10, 19, 5),
(21, 11, 12, 1),
(22, 12, 1, 1),
(23, 13, 19, 1),
(24, 14, 3, 3),
(25, 14, 7, 1),
(26, 15, 20, 4),
(27, 15, 5, 2),
(28, 15, 10, 1),
(29, 15, 6, 2),
(30, 16, 7, 3),
(31, 17, 20, 2),
(32, 18, 5, 4),
(33, 19, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date_view` date NOT NULL,
  `counter` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `slug`, `price`, `photo`, `date_view`, `counter`) VALUES
(1, 1, 'Mercedes A class', '<p>Lorem Ipsum</p>\r\n', 'mercedes-class', 899, 'mercedes-class_1609114593.jpg', '2021-01-11', 3),
(3, 2, 'Audi A3', '<p>Lorem Ipsum</p>\r\n', 'audi-a3', 599, 'audi-a3_1609114171.jpg', '2020-12-29', 1),
(5, 3, 'BMW X3', '<p>Lorem Ipsu</p>\r\n', 'bmw-x3', 339, 'bmw-x3_1609111659.jpg', '2021-01-19', 2),
(6, 1, 'Audi A1', '<p>Lorem Ipsu,mdsf</p>\r\n', 'audi-a1', 449.99, 'audi-a1_1609113953.jpg', '2021-01-11', 1),
(7, 3, 'Audi Q2', '<p>Lorem Ipsu</p>\r\n', 'audi-q2', 619, 'audi-q2_1609111511.jpg', '2021-01-18', 2),
(8, 1, 'BMW 1 Series', '<p>Lorem Ipsum</p>\r\n', 'bmw-1-series', 549.99, 'bmw-1-series_1609113150.jpg', '2021-01-11', 1),
(10, 2, 'Mercedes C class', '<p>Lorem Ipsum</p>\r\n', 'mercedes-c-class', 599.99, 'mercedes-c-class_1609114734.jpg', '2021-01-12', 2),
(12, 2, 'Audi A8', '<p>lorem ipsum</p>\r\n', 'audi-a8', 749.99, 'audi-a8_1609106557.jpg', '2020-12-28', 1),
(17, 3, 'BMW X1', '<p>lorem ipsum</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'bmw-x1', 49.99, 'bmw-x1_1609106960.jpg', '2020-12-28', 1),
(18, 3, 'BMW X2', '<p>Lorem ipsum</p>\r\n', 'bmw-x2', 79.99, 'bmw-x2_1609109475.jpg', '2020-12-28', 1),
(19, 3, 'Audi Q7', '<p>Lorem Ipsum</p>\r\n', 'audi-q7', 99.99, 'audi-q7_1609110796.jpg', '2020-12-28', 2),
(20, 3, 'Audi Q3', '<p>Lorem Ipsum</p>\r\n', 'audi-q3', 339, 'audi-q3_1609111784.jpg', '2021-01-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pay_id` varchar(50) NOT NULL,
  `sales_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `pay_id`, `sales_date`) VALUES
(9, 9, 'PAY-1RT494832H294925RLLZ7TZA', '2020-12-10'),
(10, 9, 'PAY-21700797GV667562HLLZ7ZVY', '2020-12-15'),
(11, 9, 'PAYID-L7USZGY0U969226WG256822U', '2020-12-28'),
(12, 9, 'PAYID-L7UTUAQ5VG35913DG414191M', '2020-12-28'),
(13, 9, 'PAYID-L7VHBZI8N6599379N797383N', '2020-12-28'),
(14, 9, 'PAYID-L7VHEOQ1WY50698CT800870U', '2020-12-29'),
(15, 9, 'PAYID-L7VHICQ7YD02260M0892011G', '2020-12-29'),
(16, 9, 'PAYID-L76OD6Q1YS95101BR504552W', '2021-01-11'),
(17, 9, 'PAYID-L76OJAA0YX84173DG189830M', '2021-01-11'),
(18, 9, 'PAYID-L76ONKQ22T45870PD692562T', '2021-01-12'),
(19, 9, 'PAYID-MACPEIA1NJ82736B8757494B', '2021-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'admin@admin.com', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', 1, 'Madavkumar', 'Anburaj', '', '', 'facebook-profile-image.jpeg', 1, '', '', '2020-11-30'),
(9, 'amadavkumar@gmail.com', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', 0, 'Madavkumar', 'Anburaj', 'lorem ipis', '09092735719', 'facebook-profile-image.jpeg', 1, 'k8FBpynQfqsv', '9GbAs6V2hrfjZcH', '2020-11-30'),
(11, 'test@gmail.com', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', 0, 'test', 'test', 'test', 'test', '', 1, '', '', '2018-05-11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
