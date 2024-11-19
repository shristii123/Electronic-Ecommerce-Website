-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 04:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronic`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `user_id`, `ip_address`, `quantity`) VALUES
(10, 0, '::1', 0),
(18, 0, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `producttable`
--

CREATE TABLE `producttable` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_categories` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttable`
--

INSERT INTO `producttable` (`product_id`, `product_title`, `product_description`, `product_categories`, `product_image`, `product_price`, `date`) VALUES
(10, 'Anker Soundcore', '40hr playback time', 'Headphone', 'ankerheadphome.jpg', '17999', '2023-02-08 03:08:54.000000'),
(11, 'DJI Osmo Action', 'Adventure Combo Camera', 'Camera', 'dji camera.jpg', '65000', '2023-02-08 03:09:47.000000'),
(12, 'Asus VivoBook', '4GB RAM/256GB SSD', 'laptop', 'asus.jpg', '49400', '2023-02-08 03:27:18.976192'),
(13, 'GoPro HERO11', '27MP Photos,HD video', 'Camera', 'gopro.jpg', '74500', '2023-02-08 03:11:38.000000'),
(14, 'Realme C31', 'Octa-core Processor', 'Smartphone', 'realme C31.jpg', '17799', '2023-02-09 11:49:05.380398'),
(15, 'Realme 9 Pro ', 'Snapdragon 695 5G', 'Smartphone', 'realme 9 pro with snapdragon.jpg', '36999', '2023-02-09 11:45:14.000000'),
(16, 'Lenovo V140', '4 GB  RAM/ 128GB', 'Laptop', 'laptoplenovo.jpg', '45000', '2023-02-09 11:53:03.000000'),
(17, 'Sony Alpa ', '16-50mm Lens', 'Camera', 'sonycamera.jpg', '63700', '2023-02-09 11:54:06.000000'),
(18, 'JBL LIVE 500BT', 'Wireless Over-Ear', 'Headphone', 'jbl headphones.jpg', '14500', '2023-02-09 11:56:14.000000'),
(19, 'iphone 11', 'A13 Bionic SoC', 'Smartphone', 'apple-iphone-11.jpg', '89990', '2023-02-09 12:06:37.000000'),
(20, 'iphone 13 Pro Max', '6.7 inch,ProRes vid', 'Smartphone', 'iphone13.png', '99999', '2023-02-09 12:07:53.000000'),
(21, 'Samsung Tab A8', 'Long Lasting Battery', 'Tablets', 'samsung-galaxy-tab8.jpg', '35499', '2023-02-09 12:09:05.000000'),
(22, 'Samsung Tab A7', '10.4 LTE', 'Tablets', 'samsung-tab-a7.jpg', '34999', '2023-02-09 12:09:58.000000'),
(23, 'Apple iPad', '10.9-inch', 'Tablets', 'ipad-air-5th-gen.jpg', '99000', '2023-02-09 12:10:51.000000');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`user_id`, `username`, `user_email`, `user_password`, `user_address`, `user_phone`) VALUES
(1, 'John ', 'john34@gmail.com', ' 8585', 'Dallu', '9852365412'),
(2, 'Rita ', 'rita123@gmail.com', ' 9898', 'Kalimati', '9852365244');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `producttable`
--
ALTER TABLE `producttable`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producttable`
--
ALTER TABLE `producttable`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
