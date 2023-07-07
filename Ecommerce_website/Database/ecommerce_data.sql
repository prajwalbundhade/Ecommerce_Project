-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 07:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(239) NOT NULL,
  `banner _name` varchar(240) NOT NULL,
  `heading1` varchar(249) NOT NULL,
  `heading2` varchar(250) NOT NULL,
  `btn_txt` varchar(250) NOT NULL,
  `btn-link` varchar(240) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner _name`, `heading1`, `heading2`, `btn_txt`, `btn-link`, `image`) VALUES
(7, 'pssxkj', 'puma', 'drtyu', 'ertyu', 'jrtyu', 'puma.jpg'),
(12, 'sdfghj', 'fghj', 'rtyhj', 'fghj', 'frtyu', 'logoM.jpg'),
(14, '', 'addidas', 'sdf', 'asdf', 'asd', 'adidas.jpg'),
(16, 'prajwal', '', '', '', '', 'Default.jpg'),
(17, 'prajwal', 'h1', 'h2', '', '', 'Default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(250) NOT NULL,
  `brand_name` varchar(250) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `image`) VALUES
(11, 'Nike', 'nike.jpg'),
(12, 'Chinu@', 'card.png'),
(13, 'puma', 'white-shirt.jpg'),
(14, 'Nike34', 'card.webp'),
(15, 'OP', 'card.webp');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `image`) VALUES
(29, 'Mens', 'mens.jpg'),
(32, 'Kids', 'white-shirt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

CREATE TABLE `login_data` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_data`
--

INSERT INTO `login_data` (`id`, `name`, `password`, `cpassword`) VALUES
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(250) NOT NULL,
  `category_id` int(250) NOT NULL,
  `sub_catid` int(250) NOT NULL,
  `ssub_catid` int(250) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mrp` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `long_desc` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `best_seller` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute`
--

CREATE TABLE `product_attribute` (
  `id` int(250) NOT NULL,
  `pid` int(250) NOT NULL,
  `sizeid` int(250) NOT NULL,
  `colorid` int(250) NOT NULL,
  `mrp` varchar(255) NOT NULL,
  `price` varchar(250) NOT NULL,
  `qty` varchar(250) NOT NULL,
  `sku` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(250) NOT NULL,
  `pid` int(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register_data`
--

CREATE TABLE `register_data` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(240) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_data`
--

INSERT INTO `register_data` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(1, '$name', '$mobile', '$email', '$password'),
(2, 'Admin', '8975974094', 'harry@harry.com', '12345678'),
(3, 'Pawan Prajapti', '8975974094', 'brickbuddy678@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f'),
(4, 'admin panel', '898989', 'connectreformers@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'praj', '8989898', 'bundhadesami21@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'prajwal', '898765678', 'praj@praj.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'admin', '8975974094', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(250) NOT NULL,
  `size` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `size`) VALUES
(10, '8 UK'),
(11, 'M'),
(12, 'S');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(250) NOT NULL,
  `sub_cat` varchar(255) NOT NULL,
  `image` varchar(240) NOT NULL,
  `get_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `sub_cat`, `image`, `get_id`) VALUES
(12, ' gfgh', 'mens.jpg', 0),
(14, ' Kids Shoes', 'login.jpg', 0),
(15, ' Kids Shoes', 'login.jpg', 0),
(17, ' Shoes', 'mens.jpg', 0),
(19, ' Kids Shoes', 'login.jpg', 0),
(20, ' fashion', 'Default.jpg', 0),
(21, ' fashion', 'photo1654006840.jpeg', 29);

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_category`
--

CREATE TABLE `sub_sub_category` (
  `sscid` int(250) NOT NULL,
  `sub_sub_cat` varchar(240) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_sub_category`
--

INSERT INTO `sub_sub_category` (`sscid`, `sub_sub_cat`, `image`) VALUES
(1, 'Mens', 'img'),
(2, 'Womens kurti', 'womens.jpg'),
(3, 'abc', 'womens.jpg'),
(4, 'abc', 'womens.jpg'),
(5, 'Womens kurti', 'mens.jpg'),
(6, 'Womens kurti', 'mens.jpg'),
(7, 'Womens kurti', 'mens.jpg'),
(8, 'abc', 'white-shirt.jpg'),
(9, 'abc', 'nike.jpg'),
(10, 'abc', 'shoes.jpg'),
(11, 'abc', 'cat-1.jpg'),
(12, 'abc', 'mens.jpg'),
(13, 'Womens kurti', 'nike.png'),
(14, 'Womens kurti', 'nike.jpg'),
(15, 'new mens shoes', 'womens.jpg'),
(16, 'Latest Stock', 'card.webp'),
(17, 'Latest Stock', 'card.webp'),
(18, 'new Exclusive shoes', 'nike.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_data`
--
ALTER TABLE `login_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `ForeignKey` (`category_id`),
  ADD KEY `ForeignKey1` (`sub_catid`),
  ADD KEY `ForeignKey2` (`ssub_catid`);

--
-- Indexes for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_data`
--
ALTER TABLE `register_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_category`
--
ALTER TABLE `sub_sub_category`
  ADD PRIMARY KEY (`sscid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(239) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `login_data`
--
ALTER TABLE `login_data`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_attribute`
--
ALTER TABLE `product_attribute`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register_data`
--
ALTER TABLE `register_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sub_sub_category`
--
ALTER TABLE `sub_sub_category`
  MODIFY `sscid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `ForeignKey` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `ForeignKey1` FOREIGN KEY (`sub_catid`) REFERENCES `sub_category` (`id`),
  ADD CONSTRAINT `ForeignKey2` FOREIGN KEY (`ssub_catid`) REFERENCES `sub_sub_category` (`sscid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
