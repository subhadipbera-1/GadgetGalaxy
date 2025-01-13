-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2024 at 03:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `pin` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `user_id`, `address`, `pin`, `city`, `state`) VALUES
(10, 67, 'contai,East Medinipur', 721402, 'contai', 'West Bengal'),
(12, 66, 'contai,Jalalkhanbar', 721401, 'Contai', 'West Bengal'),
(14, 66, 'contai', 721401, 'digha', 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'subhadip', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `u_id`, `p_id`, `quantity`) VALUES
(72, 81, 43, 1),
(73, 81, 33, 1),
(74, 81, 32, 1),
(79, 66, 24, 1),
(80, 66, 48, 1);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `status`, `name`, `description`, `image`, `active`) VALUES
(4, 1, 'Headphone', 'All thpes of hedphone', 'Category_1732893270.jpg', 1),
(5, 1, 'Laptop', 'All Types of Laptptop', '15.jpg', 1),
(6, 1, 'Smartphone', 'All Types of smartphone', '1.jpg', 1),
(7, 1, 'TV', 'All Types of TV', '18.jpg', 1),
(8, 1, 'MicrowaveOvens', 'All Types of MicrowaveOven', 'Samsung-MC28M6036CC-MicrowaveOvens-(CP).jpg', 1),
(9, 1, 'Speaker', 'All Types of Speaker', '17.jpg', 1),
(11, 1, 'AC', 'All types of AC', '11.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `image` text NOT NULL,
  `otp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `email`, `password`, `image`, `otp`) VALUES
(66, 'Subhadip Bera', 'bsubhadip054@gmail.com', '654321', 'flipkartlogin.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `featured_products`
--

CREATE TABLE `featured_products` (
  `fp_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `mrp` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `featured_products`
--

INSERT INTO `featured_products` (`fp_id`, `p_name`, `status`, `description`, `category`, `mrp`, `discount`, `price`, `quantity`, `image`) VALUES
(1, 'ipad', 1, 'Apple ipad', 'Electronics', 89090.00, 90.00, 89000.00, 40, 'iPad-Air-5thGen-WiFi-Starlight-(FP).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `f_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delevery_date` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Processing',
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `p_id`, `address_id`, `payment_method`, `order_date`, `delevery_date`, `status`, `amount`) VALUES
(196, 66, 46, 14, 'Cash on Delivery', '2024-12-24 13:22:43', '29-12-24', 'Processing', 22119),
(197, 66, 50, 14, 'online', '2024-12-24 13:25:11', '29-12-24', 'Processing', 24745),
(198, 66, 47, 14, 'online', '2024-12-24 13:45:40', '29-12-24', 'Processing', 17001);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `mrp` float NOT NULL,
  `discount` float NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` int(5) NOT NULL,
  `sales_package` varchar(255) NOT NULL,
  `model_number` varchar(255) NOT NULL,
  `color` varchar(55) NOT NULL,
  `p_brand` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `c_id`, `product_name`, `description`, `category`, `mrp`, `discount`, `price`, `quantity`, `image`, `active`, `sales_package`, `model_number`, `color`, `p_brand`) VALUES
(23, 4, 'Boult Mustang Torq with 50 Hrs Battery', 'Boult Mustang Torq with 50 Hrs Battery, App Support, 4 Mic ENC, Breathable LEDs, 5.4v Bluetooth  (Torq, In the Ear)', 'Headphone', 5999, 70, 1799, 0, 'earbud2.jpeg', 1, 'TWS 1N, Type C charging cable 1N, user manual 1N, Extra Earbuds 2N, Mustang Collectibles.', ' Mustang Torq', 'Torq', 'Boult'),
(24, 5, 'Apple MLY33HNA MacBook Air (Apple M2 Chip)', 'Apple MLY33HNA MacBook Air (Apple M2 Chip/8GB/256GB SSD/macOS/Liquid Retina), 34.46 cm (13.6 inch), Midnight', '', 99900, 20, 79920, 0, 'Apple-Laptop-492850656-i-1-1200Wx1200H.jpg', 1, '30 Watt USB-C Power Adapter, USB-C to MagSafe 3 Cable', 'MLY33HNA', 'Midnight', 'Apple'),
(25, 6, 'SAMSUNG Galaxy S24 5G (Amber Yellow)', 'SAMSUNG Galaxy S24 5G (Amber Yellow, 256 GB)  (8 GB RAM)', '', 79999, 26, 59199, 0, 'Samsung-S24.jpeg', 1, 'USB Cable, SIM Tray Ejector, Warranty 1 Year', 'S24', 'Amber Yellow', 'Samsung'),
(26, 7, 'SONY Bravia 108 cm (43 inch) Ultra HD', 'SONY Bravia 108 cm (43 inch) Ultra HD (4K) LED Smart Google TV  (KD-43X80J)', '', 82990, 30, 58093, 0, 'tv2.jpeg', 1, '1 Warranty Card, 1 AC Adapter, 1 AC Power Cord, 1 Remote Control, 1 Table-Top Stand, 1 User Manual, 2 AAA Batteries', 'KD-43X75L', 'Black', 'Sony'),
(27, 9, 'boAt PartyPal 400 160-Watt Bluetooth Wireless', 'boAt PartyPal 400 160-Watt Bluetooth Wireless Speaker with Mic for karaoke,(Black)', '', 34999, 54, 16099, 0, 'Boat-160W-Partypal-speaker.jpg', 1, '1N Charging Cable, 1N User Manual, 1N Catalogue, 1N Warranty Card, 1N Audio Cable, 2N Wired Microphone', 'PartyPal 400', 'Black', 'boAt'),
(28, 8, 'Samsung MC28M6036CC/TL 28 Litres Convection', 'Samsung MC28M6036CC/TL 28 Litres Convection Microwave Oven, Multiple Cooking Modes, Black - Flower Pattern', '', 23500, 17, 19505, 0, 'Samsung-MC28M6036CC-MicrowaveOvens-(CP).jpg', 1, 'Instruction Booklet, Glass Turntable, Wire Rack, Crusty Plate, Multi Spit, Warranty 1 Year', 'MC28M6036CC/TL', 'Black', 'Samsung'),
(29, 6, 'Google Pixel 9 (Wintergreen, 256 GB)  (12 GB RAM)', 'Google Pixel 9 256 GB, 12 GB RAM, Wintergreen, Mobile Phone', '', 79999, 10, 71999, 0, 'Google-Pix-9.jpg', 1, '1 N Charging Cable, 1 N Warranty Booklet, 1 N SIM Tool, 1 N Quick Start Guide', 'Pixel 9', ' Wintergreen', 'Google'),
(30, 4, 'realme Buds T300 with 12.4mm Driver, 30dB ANC', 'realme Buds T300 with 12.4mm Driver, 30dB ANC, 360 Spatial Audio and 40 hours Playback Bluetooth  (Stylish Black, True Wireless)', '', 3999, 55, 1799, 0, 'earbud4.jpeg', 1, ' 1 Pair of Earbuds, Charging Case, Charging Cable, User Manual, Warranty Card, Extra Ear Tips', ' Buds T300', ' Stylish Black', 'realme'),
(31, 4, 'Boult W20 with Zen ENC Mic, 35H Battery Life', 'Boult W20 with Zen ENC Mic, 35H Battery Life, Low Latency Gaming, Made in India, 5.3v Bluetooth  (Glacier Blue, True Wireless)', '', 2499, 56, 1099, 0, 'earbud1.jpeg', 1, ' 1 Pair of Earbuds, Charging Case, Charging Cable, User Manual, Warranty Card, Additional Pair of Ear Tips', ' W20', ' Glacier Blue', 'Boult'),
(32, 11, 'Lloyd 1.5 Ton 3 star 5-in-1 Convertible Inverter Split AC', 'Lloyd 1.5 Ton 3 star 5-in-1 Convertible Inverter Split AC, GLS18I3FWBBV/3LWBBA (PM 2.5 Filter, 4 Way Swing, Cools at 52 degreeC, 100 Per. Copper, Wifi Ready, Turbo Cool, Golden Fin Evaporator, 2023 launch)', '', 60990, 36, 39033, 0, '11.png', 1, '1 N Remote, 1 N Battery, 1 N User Manual, 1 N Drain Pipe, 1 N Installation Accessory Kit, 1 N Connecting Wire, 1 N Installation Pipe PCB', 'GLS18V3KOBBV', 'White', 'LLOYD'),
(33, 6, 'Apple iPhone 15 (Blue, 128 GB) 15.49 cm (6.1 inch)', 'Apple iPhone 15 (128GB Blue) 15.49 cm (6.1 inch) Super Retina XDR Display', '', 69900, 9, 63609, 0, 'Apple-iPhone-15-128GB-Blue-493839312-i-1-1200Wx1200H-300Wx300H.jpg', 1, 'USB-C Charge cable, Documentation, Warranty 1 Year', 'iPhone 15', 'Blue', 'Apple'),
(35, 5, 'HP Victus 15-fa0186TX Gaming Laptop (12th Gen Intel)', 'HP Victus 15-fa0186TX Gaming Laptop (12th Gen Intel Core i5-12450H/16GB/1 TB SSD/Nvidia RTX Graphics/Windows 11 Home/MSO/FHD), 39.6cm (15.6 inch)', '', 93804, 21, 74105, 0, 'hp-victus-15-fa0186tx-gaming-Laptop-i-1-1200Wx1200H-300Wx300H.jpg', 1, '65 W Smart AC Power Adapter and Laptop,Warranty 1 Year', '15-fa0186TX', 'Mica Silver', 'HP'),
(43, 9, 'Marshall Stockwell II Bluetooth Speaker, More than 20 Hours', 'Marshall Stockwell II Bluetooth Speaker, More than 20 Hours of playtime, IPX4 Water Resistant, Bluetooth v5.0, Upto 30 feet Range, Black & Brass', '', 24999, 12, 21999, 0, 'Marshall-Stockwell-II-Bluetooth-Speaker-491694750-i-1-1200Wx1200H-300Wx300H.png', 1, 'User Manual, USB-C Cable, Quick Start Guide, Legal And Safety Information', 'Stockwell II', 'Black and Brass', 'Marshall'),
(44, 6, 'Poco C series C 51 64 GB, 4 GB RAM, Royal Blue, Mobile Phone', 'Poco C series C 51 64 GB, 4 GB RAM, Royal Blue, Mobile Phone', '', 9999, 25, 7499, 0, 'Poco-C-51-Smart-Phone-493666208-i-1-1200Wx1200H-300Wx300H.jpg', 1, '10W Adapter, USB Cable, SIM Eject Tool, Quick Start Guide and Warranty Card', 'C 51', 'Royal Blue', 'POCO'),
(45, 9, 'Saregama Carvaan Premium Hindi - Portable Music Player', 'Saregama Carvaan Premium Hindi - Portable Music Player with 5000 Preloaded Songs, FM/BT/AUX, Up to 5 hrs playtime,With an Interactive App (Royal Blue)', '', 7390, 4, 7094, 0, 'Saregama-Carvaan-Premium-Multimedia-Speaker-491431169-i-1-1200Wx1200H-300Wx300H.jpeg', 1, 'Warranty 1 Year', 'Carvaan', 'Royal Blue', 'SAREGAMA'),
(46, 7, 'OnePlus 100 cm (40 inch) Full HD LED Smart TV, Y Series 40Y1', 'OnePlus 100 cm (40 inch) Full HD LED Smart TV, Y Series 40Y1', '', 27999, 21, 22119, 0, 'OnePlus-40Y1-Television-492338486-i-1-1200Wx1200H-300Wx300H.jpg', 1, '2 Table Stand Base, User Manual, Warranty Card, Remote Control, AC Cord, 2 AAA Battery, AV Adapter', '40Y1', 'Black', 'One Plus'),
(47, 8, 'IFB 30 litres Rotisserie Convection Microwave Oven, 30FRC2', 'IFB 30 litres Rotisserie Convection Microwave Oven, 30FRC2', '', 20990, 19, 17001, 0, 'IFB-30-litres-30FRC2-491391946-i-1-1200Wx1200H-300Wx300H.jpeg', 1, 'Roller ring, Glass tray, User manual, Leaflet, High rack, Low rack, Baking plate, Turn grill bracket, Turn grill rack', '30FRC2', 'Black', 'IFB'),
(48, 5, 'Dell Insprion 3520 Laptop (12th Gen Intel Core i3-1215U/8GB RAM)', 'Dell Insprion 3520 Laptop (12th Gen Intel Core i3-1215U/8GB RAM/512 GB/Intel Integrated Graphics/Windows 11//MSO/FHD)', '', 54249, 33, 36346, 0, 'Dell-Inspiron-3520-Laptop-493837881-i-1-1200Wx1200H-300Wx300H.jpeg', 1, 'Charger Warranty 1 Year', 'D560896WIN9B', 'Carbon Black', 'Dell'),
(49, 11, 'SAMSUNG 1.5 Ton 4 Star 5 in 1 convertible inverter split AC)', 'SAMSUNG 1.5 Ton 4 Star 5 in 1 convertible inverter split AC, AR18CYMZAWK (HD filter, wifi, 100 Percent copper, 2023 launch)', '', 62990, 35, 40943, 0, 'Samsung-AR18CYMZAWK-Air-Conditioner-581110404-i-1-1200Wx1200H-300Wx300H.jpeg', 1, 'Indoor Unit, Outdoor Unit, 2 x AAA battery, Remote Control, User Manual, Copper Piping (3 meter standard)', 'AR18CYMZAWK', 'White', 'Samsung'),
(50, 7, 'TCL 109.22 cm (43 Inch) Ultra HD (4K) Google TV, 43P755, Black', 'TCL 109.22 cm (43 Inch) Ultra HD (4K) Google TV, 43P755, Black', '', 54990, 55, 24745, 0, 'TCL-43-4K-UHD-SMART-GOOGLE-TV-494410490-i-1-1200Wx1200H-300Wx300H.jpeg', 1, '1 N Remote, 1 N Batteries, 1 N Adapter, Warranty 2 Years', '43P755', 'Black', 'TCL');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(30, '1.jpg'),
(31, '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `u_id`, `p_id`) VALUES
(32, 66, 50),
(33, 66, 49),
(34, 66, 48),
(35, 66, 24),
(36, 66, 47);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_products`
--
ALTER TABLE `featured_products`
  ADD PRIMARY KEY (`fp_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `featured_products`
--
ALTER TABLE `featured_products`
  MODIFY `fp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
