-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 03:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cateogory`
--

CREATE TABLE `cateogory` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(70) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cateogory`
--

INSERT INTO `cateogory` (`cat_id`, `cat_name`, `image_path`) VALUES
(2, 'Bags', 'catimages/1838711029download (14).jpg'),
(3, 'Mobile Phones', 'catimages/61887113Samsung-Galaxy-A51-Yehchez-pk.jpg'),
(14, 'Laptops', 'catimages/439752061laptoadImage.jpg'),
(17, 'Head Phones', 'catimages/1919161477H20-BT-Headphones-Main.jpg'),
(18, 'Helmate', 'catimages/293365228parachute-mcr-mtb-helmet-BB1-grid.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `totalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`id`, `name`, `address`, `city`, `country`, `phone`, `email`, `totalPrice`) VALUES
(1, 'admin', '11B', 'Karachi', 'Pakistan', '123456789', 'admin@gmail.com', 121300),
(2, 'admin', '11B', 'Karachi', 'Pakistan', '658348358636', 'admin@gmail.com', 121300),
(3, 'admin', '11B', 'Karachi', 'Pakistan', '673764376347', 'admin@gmail.com', 121300),
(4, 'admin', '11B', 'Karachi', 'Pakistan', '7543785684568', 'admin@gmail.com', 121300),
(5, 'Ahsan', '11B', 'Lahore', 'Pakistan', '53674372356257', 'ahsan@gmail.com', 121300),
(6, 'admin', '11B', 'Karachi', 'Pakistan', '5764378568534', 'admin@gmail.com', 439200);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(70) DEFAULT NULL,
  `pro_price` int(11) DEFAULT NULL,
  `pro_desc` varchar(255) DEFAULT NULL,
  `pro_image` varchar(255) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_price`, `pro_desc`, `pro_image`, `cat_id`) VALUES
(5, 'Laptop', 35000, 'This is a Laptop.', 'proimages/98593482HNNQ2_AV1.jpg', 14),
(6, 'Bag', 4000, 'This is a Bag.', 'proimages/680423056download (17).jpg', 2),
(7, 'Mobile Phone', 56000, 'This is a Mobile Phone.', 'proimages/61887113Samsung-Galaxy-A51-Yehchez-pk.jpg', 3),
(8, 'Head Phone', 5000, 'This is a Head Phone.', 'proimages/1919161477H20-BT-Headphones-Main.jpg', 17),
(9, 'Samsung Mobile', 55000, 'This is a Samsung Mobile.', 'proimages/521883198samsung-galaxy-a50-pakistan-priceoye-j79s3.jpg', 3),
(11, 'Helmate', 5300, 'This is a Helmate.', 'proimages/293365228parachute-mcr-mtb-helmet-BB1-grid.jpg', 18);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id`, `name`, `email`, `age`, `gender`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 25, 'male', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cateogory`
--
ALTER TABLE `cateogory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cateogory`
--
ALTER TABLE `cateogory`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `cateogory` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
