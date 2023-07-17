-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 02:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`) VALUES
(1, 123, 213),
(2, 123, 313),
(3, 123, 313),
(20, 1, 8),
(21, 1, 9),
(22, 1, 14),
(23, 1, 14),
(24, 1, 14),
(25, 1, 14),
(26, 1, 14),
(27, 1, 9),
(28, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'T-shirt', 'Short Sleeve T-Shirt', 152.00, './assets/products/product-1.jpg', '2020-03-28 11:08:57'),
(2, 'shoes', 'Black shoes for Men', 122.00, './assets/products/product-2.jpg', '2020-03-28 11:08:57'),
(3, 'Accessories', 'Grey Sports trousser.', 122.00, './assets/products/product-3.jpg', '2020-03-28 11:08:57'),
(4, 'T-shirt', 'Blue Halfs sleaves shirt', 122.00, './assets/products/product-4.jpg', '2020-03-28 11:08:57'),
(5, 'shoes', 'Grey Sports shoes for men', 122.00, './assets/products/product-5.jpg', '2020-03-28 11:08:57'),
(6, 'T-shirt', 'Black regular Shirt', 122.00, './assets/products/product-6.jpg', '2020-03-28 11:08:57'),
(7, 'Accessories', 'Casual souckes for sports', 122.00, './assets/products/product-7.jpg', '2020-03-28 11:08:57'),
(8, 'Accessories', 'Fancy wrist watch', 122.00, './assets/products/product-8.jpg', '2020-03-28 11:08:57'),
(9, 'Accessories', 'Black Glossy watch for men ', 152.00, './assets/products/product-9.jpg', '2020-03-28 11:08:57'),
(10, 'shoes', 'stylish d=shoes for men', 152.00, './assets/products/product-10.jpg', '2020-03-28 11:08:57'),
(11, 'shoes', 'regular sports shoes for men', 152.00, './assets/products/product-11.jpg', '2020-03-28 11:08:57'),
(12, 'Accessories', 'Regular Trouser for men', 152.00, './assets/products/product-12.jpg', '2020-03-28 11:08:57'),
(13, 'T-shirt', 'Fancy Shirts for men', 152.00, './assets/products/product-13.jpg', '2020-03-28 11:08:57'),
(14, 'T-shirt', 'Stylish shirts for men', 123.00, './assets/products/product-14.jpg', '2021-12-28 18:53:24'),
(15, 'T-shirt', 'Stylish Shirt for men', 150.00, './assets/products/product-15.jpg', '2021-12-28 18:57:23'),
(16, 'T-shirt', 'Regular designer shirt', 230.00, './assets/products/product-16.jpg', '2021-12-28 18:59:15'),
(17, 'T-shirt', 'Designer shirts for men', 290.00, './assets/products/product-17.jpg', '2021-12-28 19:00:10'),
(18, 'T-shirt', 'Half sleves shirt for men', 300.00, './assets/products/product-18.jpg', '2021-12-28 19:00:10'),
(19, 'T-shirt', 'Designer shirt for men', 200.00, './assets/products/product-19.jpg', '2021-12-28 19:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Daily', 'Tuition', '2020-03-28 13:07:17'),
(2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `username` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `date`, `username`) VALUES
(25, 'hadi27767@gmail.com', 'hadi3532', '2021-12-25 07:03:23', 'hadi'),
(26, 'hadi27767@gmail.com', 'hadi3532', '2021-12-25 07:04:00', 'hadi'),
(27, 'hhh@gmail.com', '$2y$10$4K31XWNrguDeSoSLS76lq.GPs1UtTNiTNiaaiVWTiu6xaWCsjGqyS', '2021-12-25 07:43:44', 'kamal'),
(28, 'jj@gmail.com', '$2y$10$9.ya/p6YlfOu/KQKij0LYuOeF6FfIAHfgI.DgsIwWDWnxhrcwjLd2', '2021-12-26 23:00:14', 'abdul hadi');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`cart_id`, `user_id`, `item_id`) VALUES
(16, 1, 2),
(17, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
