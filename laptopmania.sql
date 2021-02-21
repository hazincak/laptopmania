-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2021 at 02:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptopmania`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE `laptops` (
  `laptop_id` int(11) NOT NULL,
  `laptop_name` varchar(100) NOT NULL,
  `laptop_screenSize` double NOT NULL,
  `laptop_OS` varchar(100) NOT NULL,
  `laptop_CPU` varchar(100) NOT NULL,
  `laptop_RAM` varchar(100) NOT NULL,
  `laptop_storage` varchar(100) NOT NULL,
  `laptop_graphicsCard` varchar(100) NOT NULL,
  `laptop_price` double NOT NULL,
  `laptop_type` varchar(100) NOT NULL,
  `old_price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`laptop_id`, `laptop_name`, `laptop_screenSize`, `laptop_OS`, `laptop_CPU`, `laptop_RAM`, `laptop_storage`, `laptop_graphicsCard`, `laptop_price`, `laptop_type`, `old_price`) VALUES
(1, 'LENOVO IdeaPad C340', 14, 'Windows 10', 'AMD Ryzen 3 3200U', '8 GB', '128 GB SSD', 'Radeon Vega 3', 539.99, 'Discounted laptop', 600),
(2, 'DELL Inspiron 15 3000', 15.6, 'Windows 10', 'Intel® Pentium® Gold 5405U', '4 GB', '128 GB SSD', 'Integrated graphics card', 419.99, 'Discounted laptop', 450),
(3, 'ASUS E203MA', 11.6, 'Windows 10', 'Intel® Celeron® N4000 Processor', '4 GB', '64 GB eMMC', 'Integrated graphics card', 279.99, 'Discounted laptop', 300),
(4, 'HP Pavilion x360', 14, 'Windows 10', 'Intel® Pentium® Gold 5405U Processor', '4 GB', '128 GB SSD', 'Integrated graphics card', 539, 'Discounted laptop', 550),
(5, 'ASUS ZenBook Duo', 14, 'Windows 10', 'Intel® Core™ i7-10510U processor', '16 GB', '1 TB SSD', ' NVIDIA® GeForce® MX250', 1799.99, 'Discounted laptop', 2020),
(6, 'ASUS VivoBook S15', 15.6, 'Windows 10', 'Intel® Core™ i7-8565U processor', '16 GB', '1 TB SSD', ' NVIDIA® GeForce® MX250', 1149, 'Discounted laptop', 1350),
(7, 'HP ENVY', 13.3, 'Windows 10', 'Intel® Core™ i7-10510U processor', '16 GB', '1 TB SSD', ' NVIDIA® GeForce® MX250', 1299, 'Discounted laptop', 1400),
(8, 'LENOVO Legion Y740', 15.6, 'Windows 10', 'Intel® Core™ i7-9750H', '16 GB', '512 GB SSD', ' NVIDIA GeForce RTX 2060', 1920.99, 'Gaming laptop', NULL),
(9, 'MSI GL63', 15.6, 'Windows 10', 'Intel® Core™ i7-9750H', '8 GB', '512 GB SSD', 'NVIDIA GeForce GTX 1660', 1560, 'Gaming laptop', NULL),
(10, 'ASUS ROG Zephyrus G', 15.6, 'Windows 10', 'AMD Ryzen 7 3750H', '16 GB', '512 GB SSD', 'NVIDIA GeForce GTX 1660 Ti', 1439.99, 'Gaming laptop', NULL),
(11, 'DELL G3 15', 15.6, 'Windows 10', 'Intel® Core™ i7-9750H', '8 GB', '1 TB HDD & 256 GB SSD', 'NVIDIA GeForce GTX 1660', 1379, 'Gaming laptop', NULL),
(12, 'DELL G7', 15.6, 'Windows 10', 'Intel® Core™ i7-9750H', '8 GB', '1 TB HDD & 256 GB SSD', 'NVIDIA GeForce RTX 2060', 1559.99, 'Gaming laptop', NULL),
(13, 'RAZER Blade', 15.6, 'Windows 10', 'Intel® Core™ i7-9750H', '16 GB', '1 TB HDD & 128 GB SSD', 'NVIDIA GeForce GTX 1660', 2039.99, 'Gaming laptop', NULL),
(14, 'MSI P65 Creator', 15.6, 'Windows 10', 'Intel® Core™ i7-9750H', '16 GB', '512 GB SSD', 'NVIDIA GeForce RTX 2060', 2159.99, 'Gaming laptop', NULL),
(15, 'ALIENWARE m15 R2', 15.6, 'Windows 10', 'Intel® Core™ i7-9750H', '16 GB', '512 GB SSD', 'NVIDIA GeForce RTX 2070', 2639.99, 'Gaming laptop', NULL),
(16, 'GIGABYTE AERO', 15.6, 'Windows 10', 'Intel® Core™ i7-9750H', '16 GB', '512 GB SSD', 'NVIDIA GeForce RTX 2060', 2399.99, 'Gaming laptop', NULL),
(17, 'ALIENWARE Area 51m', 17.6, 'Windows 10', 'Intel® Core™ i7-9700', '16 GB', '1 TB HDD & 512 GB SSD', 'NVIDIA GeForce RTX 2070', 3299.99, 'Gaming laptop', NULL),
(18, 'ACER Predator Helios 300', 17.6, 'Windows 10', 'Intel® Core™ i7-9750H', '8 GB', '1 TB HDD & 258 GB SSD', 'NVIDIA GeForce GTX 1660', 1619.99, 'Gaming laptop', NULL),
(19, 'LENOVO IdeaPad S145', 15.6, 'Windows 10', 'AMD A4-9125', '4 GB', '128 GB SSD', ' Integrated graphics card', 339, 'Laptop', NULL),
(20, 'DELL Inspiron 15 5590', 15.6, 'Windows 10', 'Intel® Core™ i7-10510U', '8 GB', '512 GB SSD', 'NVIDIA GeForce MX250', 1019, 'Laptop', NULL),
(21, 'DELL XPS 15 7590', 15.6, 'Windows 10', 'Intel® Core™ i7-9750H', '16 GB', '512 GB SSD', 'NVIDIA GeForce GTX 1650', 1849, 'Laptop', NULL),
(22, 'HUAWEI MateBook D', 15.6, 'Windows 10', 'AMD Ryzen 5 3500U', '8 GB', '256 GB SSD', 'Integrated graphics card', 719, 'Laptop', NULL),
(23, 'DELL Inspiron 17 3793', 17.3, 'Windows 10', 'Intel® Core™ i5-1035G1', '8 GB', '1 TB HDD & 128 GB SSD', 'NVIDIA GeForce MX230', 839, 'Laptop', NULL),
(24, 'Apple MacBook Air', 13.3, 'macOS Catalina', 'Intel® Core™ i3', '8 GB', '256 GB SSD', 'Integrated graphics card', 1199, 'MacBook', NULL),
(25, 'Apple MacBook Pro', 13.3, 'macOS Catalina', 'Intel® Core™ i5', '8 GB', '128 GB SSD', 'Intel Iris Plus Graphics 645', 1650, 'MacBook', NULL),
(26, 'DELL Inspiron 15 5593', 15.6, 'Windows 10', 'Intel® Core™ i5-1035G1', '8 GB', '512 GB SSD', 'Integrated graphics card', 659, 'Laptop', NULL),
(27, 'ACER Aspire 3', 15.6, 'Windows 10', 'Intel® Core™ i5-1035G1', '8 GB', '1 TB HDD', 'Integrated graphics card', 599, 'Laptop', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orderproducts`
--

CREATE TABLE `orderproducts` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `card_type` varchar(50) NOT NULL,
  `exp_date` varchar(50) NOT NULL,
  `card_ending` int(50) NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `eircode` varchar(50) DEFAULT NULL,
  `county` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `card_type` varchar(50) DEFAULT NULL,
  `card_number` varchar(50) DEFAULT NULL,
  `registered` tinyint(1) NOT NULL,
  `expiration_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`laptop_id`),
  ADD UNIQUE KEY `laptop_name` (`laptop_name`);

--
-- Indexes for table `orderproducts`
--
ALTER TABLE `orderproducts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laptops`
--
ALTER TABLE `laptops`
  MODIFY `laptop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orderproducts`
--
ALTER TABLE `orderproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderproducts`
--
ALTER TABLE `orderproducts`
  ADD CONSTRAINT `orderproducts_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderproducts_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `laptops` (`laptop_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
