-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 04:36 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devicemart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_number` bigint(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `p_id` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `u_name`, `p_id`, `qty`) VALUES
(928, 'Janak godhaviya', '100', 1),
(929, 'Janak godhaviya', '1', 3),
(930, 'Janak godhaviya', '3', 1),
(931, 'Janak godhaviya', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `computer_accessories`
--

CREATE TABLE `computer_accessories` (
  `product_id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model_name/number` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `display` varchar(20) NOT NULL,
  `os_supported` varchar(15) NOT NULL,
  `color` varchar(15) NOT NULL,
  `power_features` varchar(15) NOT NULL,
  `memory` varchar(15) NOT NULL,
  `frequency` varchar(30) NOT NULL,
  `capacity` varchar(15) NOT NULL,
  `speed` varchar(30) NOT NULL,
  `connectivity` varchar(30) NOT NULL,
  `features` varchar(100) NOT NULL,
  `form_factor` varchar(100) NOT NULL,
  `warranty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer_accessories`
--

INSERT INTO `computer_accessories` (`product_id`, `brand`, `model_name/number`, `price`, `type`, `display`, `os_supported`, `color`, `power_features`, `memory`, `frequency`, `capacity`, `speed`, `connectivity`, `features`, `form_factor`, `warranty`) VALUES
(201, '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gaming`
--

CREATE TABLE `gaming` (
  `product_id` int(11) NOT NULL,
  `brand` varchar(15) NOT NULL,
  `model_name/number` varchar(50) NOT NULL,
  `sales_package` varchar(100) NOT NULL,
  `color` varchar(15) NOT NULL,
  `interface` varchar(30) NOT NULL,
  `features` varchar(100) NOT NULL,
  `warranty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gaming`
--

INSERT INTO `gaming` (`product_id`, `brand`, `model_name/number`, `sales_package`, `color`, `interface`, `features`, `warranty`) VALUES
(401, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE `laptops` (
  `product_id` int(11) NOT NULL,
  `brand` varchar(15) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `model_number` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `offer_price` int(11) NOT NULL,
  `os` varchar(20) NOT NULL,
  `ram` int(30) NOT NULL,
  `processor` varchar(30) NOT NULL,
  `size` varchar(20) NOT NULL,
  `graphics` varchar(30) NOT NULL,
  `hdd` varchar(20) NOT NULL,
  `ssd` varchar(11) NOT NULL DEFAULT 'No',
  `cache` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `color` varchar(20) NOT NULL,
  `weight` float NOT NULL,
  `warranty` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`product_id`, `brand`, `model_name`, `model_number`, `price`, `offer_price`, `os`, `ram`, `processor`, `size`, `graphics`, `hdd`, `ssd`, `cache`, `image`, `color`, `weight`, `warranty`, `description`) VALUES
(1, 'Acer', 'Acer Aspire 3', 'A315-33', 18990, 0, 'Windows 10 Home', 4, 'Pentium Quad Core', '15.6 inch', 'Intel Integrated HD', '500 GB', 'No', '2 MB', 'acer-aspire-3', 'Black', 2.1, '1 Year International Travelers Warranty (ITW)', 'Meet the Acer Aspire 3 - a laptop that\'s designed to impress. Equipped with a powerful Intel Pentium Quad Core processor and 4 GB of DDR3 RAM, this laptop will let you toggle between multiple tabs effortlessly. To top it off, its Li-ion battery offers a battery backup of 7 hours, so you can discover hilarious YouTube videos or complete multiple work-assignments in one sitting.'),
(2, 'Acer', 'Acer Predator Helios 300', 'PH315-51 / PH315-51-51V7', 67999, 0, 'Windows 10 Home', 8, 'Core i5', '15.6 inch', 'NVIDIA Geforce GTX 1050Ti', '1 TB', '128 GB', '8 MB', 'acer-predator-helios-300', 'Black', 3.1, '1 Year International Travelers Warranty (ITW)', ''),
(3, 'Lenovo', 'Lenovo Ideapad 130', '130-14IKB ', 34990, 0, 'Windows 10 Home', 4, 'Intel Core i5', '14 inch', 'Intel Integrated UHD 620', '1 TB', 'No', '6 MB', 'lenovo-ideapad-130', 'Black', 2, '1 Year Onsite Warranty', ''),
(4, 'Lenovo', 'Lenovo Ideapad 520', '520-15IKB', 64499, 0, 'Windows 10 Home', 8, 'Intel Core i5', '15.6 inch', 'NVIDIA Geforce MX150', '2 TB', 'No', '6 MB', 'lenovo-ideapad-520', 'Silver', 2.1, '1 Year Onsite Warranty', ''),
(5, 'Dell', 'Dell Inspiron 13 5000', '5370', 64990, 0, 'Windows 10 Home', 8, 'Intel Core i5', '13 inch', 'Intel Integrated UHD 620', 'No', '256 GB', '6 MB', 'dell-inspiron-13-5000', 'Black', 2.3, '1 Year Limited Hardware Warranty, InHome Service After Remote Diagnosis', ''),
(6, 'Dell', 'Dell Inspiron 14 3000', 'inspiron 3467 ', 25990, 0, 'Linux', 4, 'Intel Core i3 7th Gen', '14 inch', 'Intel Integrated HD 620', '1 TB', 'No', '3 MB', 'dell-inspiron-14-3000', 'Black', 2, '1 Year Limited Hardware Warranty, InHome Service After Remote Diagnosis', ''),
(7, 'HP', 'HP 15q', '15q-by002AX', 23490, 0, 'Windows 10 Home', 4, 'APU Dual Core A9', '15.6 inch', 'AMD Radeon 520', '1 TB', 'No', '1 MB', 'hp-15q', 'Silver', 2.3, '1 Year Onsite Warranty', '');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offer_id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `offer` varchar(50) NOT NULL,
  `brands` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `page` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`offer_id`, `category`, `offer`, `brands`, `image`, `page`) VALUES
(601, 'Home Use Laptops', 'From Rs.10,999', 'Acer,Dell,HP,Lenovo', 'laptop-original.jpeg', 'laptops.php'),
(602, 'Projectors', 'For Home & Office Use', 'Epson, Acer, Dell ', 'epson-original.jpeg', 'peripherals.php'),
(603, 'Top-Selling Printers', 'For Home & Office Use', 'HP, Canon, Epson', 'all-in-one-original.jpeg', 'peripherals.php'),
(604, 'Top-Selling Monitors ', 'Best Sellers', 'HP,Samsung, LG ', 'samsung-original.jpeg', 'computer_accessories.php'),
(605, 'Microsoft Surface Go', 'NCE | Best Sellers', 'Laptop Perf ', 'microsoft-laptop-original.jpeg', 'laptops.php');

-- --------------------------------------------------------

--
-- Table structure for table `peripherals`
--

CREATE TABLE `peripherals` (
  `product_id` int(11) NOT NULL,
  `brand` varchar(15) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `model_series` varchar(50) NOT NULL,
  `color` varchar(15) NOT NULL,
  `type` varchar(50) NOT NULL,
  `refill_type` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `connectivity_features` varchar(100) NOT NULL,
  `weight` varchar(15) NOT NULL,
  `image` varchar(80) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peripherals`
--

INSERT INTO `peripherals` (`product_id`, `brand`, `model_name`, `model_series`, `color`, `type`, `refill_type`, `price`, `connectivity_features`, `weight`, `image`, `description`) VALUES
(100, 'Canon', 'Canon Pixma G 2000', 'Refillable Ink Tank All-In-One', 'Black', 'Multi-function', 'Refillable Ink Tank', '8799', 'USB 2.0', '5.8 kg', 'canon-pixma-g2000-original', ''),
(101, 'Epson', 'Epson L3150', 'EcoTank', 'Black', 'Multi-function', 'Refillable Ink Tank', '12549', 'USB 2.0,Wireless Supported', '3.9 kg', 'epson-l3150-original', ''),
(102, 'HP', 'HP LaserJet Pro M1136', 'LaserJet', 'Black', 'Multi-function', 'Toner Cartridge', '12799', 'USB 2.0', '9.4 kg', 'hp-m1136-original', 'Manage your everyday office printing requirements seamlessly with the HP M1136 Multi-function Printer. This multipurpose laser printer will let you print, copy and scan with maximum efficiency and will help you reduce your carbon footprint.');

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`product_id`, `product_name`, `product_price`, `product_image`) VALUES
(801, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `product_id` int(11) NOT NULL,
  `brand` varchar(15) NOT NULL,
  `model_name/number` varchar(50) NOT NULL,
  `sales_package` varchar(100) NOT NULL,
  `number_of_pc` varchar(15) NOT NULL,
  `type` varchar(30) NOT NULL,
  `subscription_validity` varchar(30) NOT NULL,
  `system_requirement` varchar(30) NOT NULL,
  `architecture` varchar(50) NOT NULL,
  `media_format` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`product_id`, `brand`, `model_name/number`, `sales_package`, `number_of_pc`, `type`, `subscription_validity`, `system_requirement`, `architecture`, `media_format`) VALUES
(501, '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `mobile_number` bigint(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `country` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`user_id`, `full_name`, `mobile_number`, `email`, `password`, `gender`, `address`, `city`, `state`, `postal_code`, `country`) VALUES
(701, 'Janak godhaviya', 70432514528, 'janak@gmail.com', '123', '', '', '', '', 0, ''),
(702, 'harsh', 7418520963, 'harsh@gmail.com', '8520', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `wireless`
--

CREATE TABLE `wireless` (
  `product_id` int(11) NOT NULL,
  `brand` varchar(15) NOT NULL,
  `model_name/number` varchar(50) NOT NULL,
  `sales_package` varchar(100) NOT NULL,
  `speed` varchar(15) NOT NULL,
  `capacity` varchar(15) NOT NULL,
  `color` varchar(15) NOT NULL,
  `network_features` varchar(30) NOT NULL,
  `connectivity` varchar(15) NOT NULL,
  `features` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `power` varchar(15) NOT NULL,
  `warranty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wireless`
--

INSERT INTO `wireless` (`product_id`, `brand`, `model_name/number`, `sales_package`, `speed`, `capacity`, `color`, `network_features`, `connectivity`, `features`, `type`, `power`, `warranty`) VALUES
(301, '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer_accessories`
--
ALTER TABLE `computer_accessories`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `gaming`
--
ALTER TABLE `gaming`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `peripherals`
--
ALTER TABLE `peripherals`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_id` (`product_id`),
  ADD KEY `product_id_2` (`product_id`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `wireless`
--
ALTER TABLE `wireless`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=932;

--
-- AUTO_INCREMENT for table `computer_accessories`
--
ALTER TABLE `computer_accessories`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `gaming`
--
ALTER TABLE `gaming`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;

--
-- AUTO_INCREMENT for table `laptops`
--
ALTER TABLE `laptops`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=601;

--
-- AUTO_INCREMENT for table `peripherals`
--
ALTER TABLE `peripherals`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=802;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=703;

--
-- AUTO_INCREMENT for table `wireless`
--
ALTER TABLE `wireless`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
