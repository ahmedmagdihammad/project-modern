-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 01:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(127) NOT NULL,
  `mobile` varchar(127) NOT NULL,
  `email` varchar(127) DEFAULT NULL,
  `password` varchar(1024) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mobile`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '01118763129', 'admin@gmail.com', '4297f44b13955235245b2497399d7a93', NULL, NULL),
(51, 'khalid', '01126410960', 'kha04008@gmail.com', '8b9c9b2b78f16a0c06a58552fb2748f8', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(127) DEFAULT NULL,
  `password` varchar(1024) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_products`
--

CREATE TABLE `customer_products` (
  `id` int(11) UNSIGNED NOT NULL,
  `customer_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `code` int(11) UNSIGNED NOT NULL,
  `customer_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` int(11) UNSIGNED NOT NULL,
  `order_code` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(127) NOT NULL,
  `img` varchar(1024) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(1024) DEFAULT NULL,
  `admin_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `price`, `category`, `admin_id`, `created_at`, `updated_at`) VALUES
(26, 'سيتامرت', '../assets/img/products/سيتامرت.jpg', 30, 'مركبات حشريه', 1, NULL, NULL),
(27, 'اسيتامور', '../assets/img/products/استامور.png', 25, 'مركبات حشريه', 1, NULL, NULL),
(28, 'اسيتاجرو', '../assets/img/products/اسيتاجرو.jpg', 30, 'مركبات حشريه', 1, NULL, NULL),
(29, 'ليبنويد', '../assets/img/products/ليبنويد.jpg2.jpg', 50, 'مركبات حشريه', 1, NULL, NULL),
(30, 'بيتاستار', '../assets/img/products/بيتاستار.jpg', 35, 'مركبات حشريه', 1, NULL, NULL),
(31, 'ميلاثيون بروبلت', '../assets/img/products/ميلاثيون بروبلت.jpg', 43, 'مركبات حشريه', 1, NULL, NULL),
(32, 'ايميستار', '../assets/img/products/ايميستار.jpg', 60, 'مركبات حشريه', 1, NULL, NULL),
(33, 'سوبركايد كزد', '../assets/img/products/سوبو كايد سوبر.jpg', 45, 'مركبات حشريه', 1, NULL, NULL),
(35, 'ميلاثيون57% ', '../assets/img/products/ميلاثون.jpg', 65, 'مركبات حشريه', 1, NULL, NULL),
(36, 'ليفوكيم', '../assets/img/products/ليفوكيم.jpg', 110, 'مركبات حشريه', 1, NULL, NULL),
(37, 'تاك 48%', '../assets/img/products/تاك.jpg', 150, 'مركبات حشريه', 1, NULL, NULL),
(38, 'لانت 90%', '../assets/img/products/لانت.jpg', 15, 'مركبات حشريه', 1, NULL, NULL),
(39, 'كونترادو 5%', '../assets/img/products/كونترادو.jpg', 125, 'مركبات حشريه', 1, NULL, NULL),
(40, 'بلندو اسبيشال', '../assets/img/products/بلندو اسبيشال.jpg', 40, 'مركبات حشريه', 1, NULL, NULL),
(41, 'زيت كزد اويل 95%', '../assets/img/products/زيت كزد اواويل.jpg', 45, 'مركبات حشريه', 1, NULL, NULL),
(42, 'كلوروفان 48%', '../assets/img/products/كلوروفان.jpg', 65, 'مركبات حشريه', 1, NULL, NULL),
(43, 'ايمي باور', '../assets/img/products/ايميباور.jpg', 45, 'مركبات حشريه', 1, NULL, NULL),
(44, 'تويست رايد  40%', '../assets/img/products/تويست رايد.jpg', 85, 'مركبات حشريه', 1, NULL, NULL),
(45, 'رومكتين', '../assets/img/products/رومكتين.jpg', 75, 'مركبات حشريه', 1, NULL, NULL),
(46, 'ايماكسي', '../assets/img/products/ايماكسي.jpg', 45, 'مركبات حشريه', 1, NULL, NULL),
(47, 'سایبرکل', '../assets/img/products/سايبر كل.jpg', 85, 'مركبات حشريه', 1, NULL, NULL),
(48, 'ديراكوميل', '../assets/img/products/ديراموكيل.jpeg', 85, 'مركبات حشريه', 1, NULL, NULL),
(49, 'لمبادا 5%', '../assets/img/products/لمبادا.png', 60, 'مركبات حشريه', 1, NULL, NULL),
(50, 'اكسلنت1.9', '../assets/img/products/اكسلنت.jpg', 75, 'مركبات حشريه', 1, NULL, NULL),
(51, 'مارشال بودر ٢٥%', '../assets/img/products/مارشال بورد.jpg', 70, 'مركبات حشريه', 1, NULL, NULL),
(52, 'جيست', '../assets/img/products/جيست.jpg', 290, 'مركبات الحشائش', 1, NULL, NULL),
(53, ' جليفوسات48%', '../assets/img/products/جليفوسات.jpg', 240, 'مركبات الحشائش', 1, NULL, NULL),
(54, 'كلورزان', '../assets/img/products/كلورزان.jpg', 80, 'مركبات الحشائش', 1, NULL, NULL),
(55, 'ميلاثين57%', '../assets/img/products/ميلاثين.jpg', 79, 'مركبات الحشائش', 1, NULL, NULL),
(56, 'ميتا دور مبيدات الفطريات للنباتات', '../assets/img/products/ميتا دور مبيدات الفطريات للنباتات.jpg', 178, 'مركبات الحشائش', 1, NULL, NULL),
(57, 'انجر', '../assets/img/products/انجر.jpg', 206, 'مركبات الاكاروسيه', 1, NULL, NULL),
(58, 'اورتس', '../assets/img/products/اورتس.png', 190, 'مركبات الاكاروسيه', 1, NULL, NULL),
(59, 'اورتس سوبر', '../assets/img/products/اورتسسوبر.jpg', 121, 'مركبات الاكاروسيه', 1, NULL, NULL),
(60, 'بيومكتين', '../assets/img/products/بيومكتين.jpg', 79, 'مركبات الاكاروسيه', 1, NULL, NULL),
(61, 'دانيسرابا', '../assets/img/products/دانيسرابا.jpg', 143, 'مركبات الاكاروسيه', 1, NULL, NULL),
(62, 'كبريتات نحاس بركه', '../assets/img/products/كبريتات نحاس بركه.jpg', 65, 'المركبات الفطريه', 1, NULL, NULL),
(63, 'كبريت زراعي بركه فيرت', '../assets/img/products/كبريت زراعي بركه فيرت.jpg', 35, 'المركبات الفطريه', 1, NULL, NULL),
(64, 'تراي جولد', '../assets/img/products/تراي جولد.jpg', 210, 'المركبات الفطريه', 1, NULL, NULL),
(65, 'كاربندازيم', '../assets/img/products/كاربندازيم.jpg', 77, 'المركبات الفطريه', 1, NULL, NULL),
(66, 'جلايفوهيرب', '../assets/img/products/جلايفوهيرب.jpg', 130, 'مركبات الحشائش', 1, NULL, NULL),
(67, 'روفوسیت', '../assets/img/products/روفيست.jpg', 140, 'مركبات الحشائش', 1, NULL, NULL),
(68, 'اکاری زد', '../assets/img/products/اكاريزد.jpg', 65, 'مركبات الاكاروسيه', 1, NULL, NULL),
(69, 'سبيروتكس', '../assets/img/products/سبيروتكس.jpg', 45, 'مركبات الاكاروسيه', 1, NULL, NULL),
(70, 'انتي مايت ', '../assets/img/products/انتي مايت.jpg', 340, 'مركبات الاكاروسيه', 1, NULL, NULL),
(71, 'اجريميك', '../assets/img/products/اجريمك.jpg', 110, 'مركبات الاكاروسيه', 1, NULL, NULL),
(72, 'جرينو', '../assets/img/products/جرينو.jpg', 85, 'مركبات الاكاروسيه', 1, NULL, NULL),
(73, 'أومايت بلس', '../assets/img/products/اومايت  بلس.jpg', 340, 'مركبات الاكاروسيه', 1, NULL, NULL),
(74, 'هیستا ۷۰ %', '../assets/img/products/هيستا.jpg', 75, 'المركبات الفطريه', 1, NULL, NULL),
(75, 'فنجي موث 69%', '../assets/img/products/فنجي مورث.jpg', 85, 'المركبات الفطريه', 1, NULL, NULL),
(76, 'لاندكبور ميكس ۷۲ %', '../assets/img/products/لاندكبور ميكس.jpg', 110, 'المركبات الفطريه', 1, NULL, NULL),
(77, 'كيروكسيد', '../assets/img/products/كيروكسيد.jpg', 90, 'المركبات الفطريه', 1, NULL, NULL),
(78, 'کیما زد', '../assets/img/products/كيمازد.jpg', 35, 'المركبات الفطريه', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_products`
--
ALTER TABLE `customer_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`code`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_code` (`order_code`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_products`
--
ALTER TABLE `customer_products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `code` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_products`
--
ALTER TABLE `customer_products`
  ADD CONSTRAINT `customer_products_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_ibfk_1` FOREIGN KEY (`order_code`) REFERENCES `orders` (`code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
