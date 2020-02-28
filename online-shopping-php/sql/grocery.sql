-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 01:24 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `image`, `description`) VALUES
(1, 'About Us', '', 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy. \r\n\r\nA product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'sharmin', 'sharmin@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'rafi', 'rafi@gmail.com', '900150983cd24fb0d6963f7d28e17f72'),
(3, 'rafi', 'rafi@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'sharmin', '123@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `pro_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `tack_id` int(11) NOT NULL,
  `on_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `subject`, `email`, `message`, `status`) VALUES
(1, 'sharmin sultana', 'subject', 'email', 'message', 1),
(2, 'sharmin sultana', 'subject', 'email', 'message', 1),
(3, 'kmkm', 'subject', 'email', 'message', 0),
(4, 'New13-1', 'checking for dhasboard', 'simple@imp.com', 'Grocery\r\nFruits\r\nSoft Drinks\r\nDishwashers\r\nBiscuits & Cookies\r\nBaby Diapers\r\nSnacks & Beverages\r\nBread & Bakery\r\nSweets\r\nChocolates & Biscuits\r\nPersonal Care\r\nDried Fruits & Nuts\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_price` int(11) NOT NULL,
  `new_price` int(11) NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `name`, `stock`, `category`, `old_price`, `new_price`, `description`, `image`) VALUES
(6, 'Yippee noodles', 45, 'Rice, Flour & Pulses', 800, 400, 'adghkl; adgh', 'mk7.jpg'),
(7, 'Almonds', 75, 'Fruits & Vegetables', 0, 140, 'hh', 'm1.jpg'),
(8, 'dgh', 10, 'Rice, Flour & Pulses', 0, 450, 'adgh', 'k2.jpg'),
(9, 'vim', 38, 'Kitchen', 0, 50, 'aghkl', 'a1.jpg'),
(10, 'ghh', 40, 'Household', 700, 200, 'eryt yguybh', 'a8.jpg'),
(11, 'adgh', 80, 'Rice, Flour & Pulses', 0, 850, 'gh rgvhbn', 's2.jpg'),
(12, 'db', 10, 'Household', 500, 10, 'b', 'a9.jpg'),
(13, 'Sample', 7, 'Special Offers', 100, 90, 'Product simple description', 'bag.jpg'),
(14, 'Spoon set', 200, 'Kitchen', 700, 600, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'spoon.jpg'),
(15, 'Microwave Oven ', 20, 'Kitchen', 7000, 5000, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'microwave.jpg'),
(16, 'Juicer ', 29, 'Kitchen', 0, 2200, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'juicer.jpg'),
(17, 'Surf Excel ', 200, 'Household', 0, 30, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 's3.jpg'),
(18, 'Air Freshener', 300, 'Household', 0, 500, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'air freshner.jpg'),
(20, 'ZERO Milk Chocolate', 160, 'Snacks & Beverages', 0, 200, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download.jpg'),
(21, 'Lays Chips', 498, 'Snacks & Beverages', 0, 90, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'chips.jpg'),
(22, 'M&M\'s', 60, 'Snacks & Beverages', 0, 600, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'images.jpg'),
(23, 'Tresemee Shampoo', 300, 'Personal Care', 0, 180, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (1).jpg'),
(24, 'Olay Facewash', 320, 'Personal Care', 200, 150, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'images (1).jpg'),
(25, 'Olay Moisturizer', 150, 'Personal Care', 0, 780, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (2).jpg'),
(26, 'Onion ', 500, 'Fruits & Vegetables', 0, 30, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (3).jpg'),
(27, 'Strawberry', 100, 'Fruits & Vegetables', 0, 600, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (4).jpg'),
(28, 'Johnson Baby Lotion', 60, 'Baby Care', 600, 400, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (5).jpg'),
(29, 'Pampers', 100, 'Baby Care', 1500, 1200, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (6).jpg'),
(30, 'Baby Wipes', 50, 'Baby Care', 0, 200, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (7).jpg'),
(31, 'Coca-Cola', 500, 'Soft Drinks & Juices', 0, 30, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'Coke_330mL_1024x1024.png'),
(32, 'Pran Mango Juice', 180, 'Soft Drinks & Juices', 0, 20, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (8).jpg'),
(33, 'Apple Juice', 75, 'Soft Drinks & Juices', 0, 120, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (9).jpg'),
(34, 'Chicken', 60, 'Frozen Food', 0, 250, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (10).jpg'),
(35, 'Lobster', 30, 'Frozen Food', 0, 900, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (11).jpg'),
(36, 'Beef', 30, 'Frozen Food', 0, 700, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (12).jpg'),
(37, 'Cupcake', 40, 'Bread & Bakery', 280, 250, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (13).jpg'),
(38, 'Birthday Cake', 20, 'Bread & Bakery', 0, 1600, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (14).jpg'),
(39, 'Bread', 70, 'Bread & Bakery', 0, 50, 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they\'re compelled to buy.', 'download (15).jpg'),
(42, 'Digital camera', 10, 'Special Offers', 80000, 7000, 'Digital camera to capture the real pictures.', 'digital camera.jpg'),
(43, 'DSLR Camera', 10, 'Special Offers', 50000, 48000, 'DSLR camera new brand', 'dslr.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pro_order`
--

CREATE TABLE `pro_order` (
  `order_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(15) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_qty` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `method` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trxid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `track_id` int(11) NOT NULL,
  `on_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ordr_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pro_order`
--

INSERT INTO `pro_order` (`order_id`, `name`, `user_id`, `user_email`, `mobile`, `pro_id`, `pro_name`, `pro_qty`, `amount`, `method`, `trxid`, `address`, `track_id`, `on_date`, `ordr_status`) VALUES
(3, 'New12-2', 1, 'user1@mail.com', 123456789, 7, 'Almonds', 5, 700, 'bkash', 'TX151515151td', 'uttara', 53195529, '2019-12-12 17:39:50', 1),
(4, 'New12-2', 1, 'user1@mail.com', 123456789, 6, 'Yippee noodles', 5, 2000, 'bkash', 'TX151515151td', 'uttara', 84578450, '2019-12-12 17:39:50', 2),
(5, 'New13-1', 1, 'user1@mail.com', 123456789, 9, 'vim', 10, 500, 'bkash', 'Trxid123456789', 'uttara,dhaka', 64895290, '2019-12-13 15:22:29', 1),
(6, 'New13-1', 1, 'user1@mail.com', 123456789, 10, 'ghh', 10, 2000, 'bkash', 'Trxid123456789', 'uttara,dhaka', 47352430, '2019-12-13 15:22:30', 0),
(7, 'New13-2', 1, 'user1@mail.com', 14569875, 13, 'Sample', 2, 180, 'bkash', 'Trxid123456789', 'utara', 39310908, '2019-12-13 19:20:23', 0),
(8, 'New13-3', 1, 'user1@mail.com', 22354987, 13, 'Sample', 1, 90, 'cod', '', 'dhaka', 28018449, '2019-12-13 19:23:04', 0),
(9, 'sharmin sultana', 3, 'sharmin@gmail.com', 123, 9, 'vim', 2, 100, 'bkash', '123456', 'Dhaka, Bangladesh', 82603480, '2019-12-23 18:58:04', 0),
(10, 'New13-1', 1, 'user1@mail.com', 1677163339, 16, 'Juicer ', 1, 2200, 'bkash', 'Trxid123456789', 'house 36 road 6 kamarpara turag', 91181074, '2019-12-25 02:13:12', 0),
(11, 'New13-1', 1, 'user1@mail.com', 1677163339, 21, 'Lays Chips', 2, 180, 'bkash', 'Trxid123456789', 'house 36 road 6 kamarpara turag', 22426467, '2019-12-25 02:13:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `credit` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `title`, `facebook`, `twitter`, `credit`) VALUES
(1, 'Grocery Shopping', '0', 'sharmin', 'Company name');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'User1', 'user1@mail.com', '6ad14ba9986e3615423dfca256d04e3f'),
(2, 'sharmin sultana', 'sharmin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'sharmin sultana', 'sharmin@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `pro_order`
--
ALTER TABLE `pro_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pro_order`
--
ALTER TABLE `pro_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
