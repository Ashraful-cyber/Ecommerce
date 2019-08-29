-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2019 at 11:27 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buytech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', '$2y$10$LA2vOSXQF/UPIFfxAVJGgeyB//rvLWFZ0iaKOkUKvl62KX0Ty73cK', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `des` text NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `brand`, `name`, `des`, `stock`, `price`, `img_name`) VALUES
(701, 'Xbox', 'Xbox One', 'good', 10, 130000, '15611517452181253325d0d490120ef6.jpg'),
(702, 'Xbox', 'Xbox Driver', 'good', 11, 120000, '156115177919106281125d0d492312053.jpg'),
(703, 'PS4', 'PS3', 'good', 10, 110000, '15611518016314828575d0d49392094e.jpg'),
(704, 'PS4', 'PS4', 'good', 11, 130000, '15611518214054378005d0d494d4b481.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `des` text NOT NULL,
  `stock` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `brand`, `name`, `des`, `stock`, `price`, `img_name`) VALUES
(39, 'Apple', 'MacBook Pro 2019', 'One Of the Poweful Laptop Ever', 13, 1550000, '15619061244502817825d18cbcca45c6.jpg'),
(40, 'Hp', 'Specture X360', 'One of the best', 10, 120000, '15606237069996877595d053a5a473ab.jpg'),
(41, 'Dell', 'XPS 13', 'Best For Student', 12, 130000, '15606237373473232495d053a79eb5c7.jpg'),
(42, 'Assus', 'ROG', 'Best for gamming', 5, 110000, '15606239528182245035d053b50b9199.jpg'),
(43, 'Accer', 'Nitro', 'Best for gamming', 4, 700000, '15606239856416007435d053b714e185.jpg'),
(44, 'Lenevo', 'Lenevo Yoga', 'good', 12, 90000, '156365298319756992095d3373778f2c7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `id` int(11) NOT NULL,
  `order_number` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `item` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(30) NOT NULL,
  `date_time` datetime NOT NULL,
  `type` int(11) NOT NULL,
  `shipment` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `des` text NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `brand`, `name`, `des`, `stock`, `price`, `img_name`) VALUES
(501, 'iPhone', 'iPhone XS', 'Best Phone Ever', 10, 130000, '15611505931528133495d0d44815f741.jpg'),
(502, 'Samsung', 'Samsung Galaxy S10', 'Best Phone Ever', 12, 100000, '1561150655765186195d0d44bf750ed.jpg'),
(503, 'Xiomi', 'Mi9', 'Best Phone Ever', 3, 30000, '156115069317523093125d0d44e50f02f.jpg'),
(504, 'OnePlus', 'OnePlus 7 Pro', 'Best Phone Ever', 5, 70000, '15611503165362008025d0d436c6cbcf.jpg'),
(505, 'Huawei', 'Huawei P30 Pro', 'good', 3, 80000, '156365547319688007285d337d312f016.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` int(30) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `address`, `phone`, `zipcode`, `type`) VALUES
(1, 'Md. Abu Horyra', 'Pranto', 'pranto', 'mahpranto@outlook.com', '$2y$10$/mwCn9fPLFBOLaJYNIqoguW.Wmg7ZexFAC.hPDMwRWEe5tmWybcA6', 'Bashundhara Residential Area', 1629710423, '1229', 'public'),
(2, 'Shakib', 'Rahman', 'shakib', 'shakib@gmail.com', '$2y$10$Nx64OxTNaFlvdqOHFayGzeCmg9gl/lobMV1d9PeoG/ppflGBXkf/S', 'Bashundhara R/A', 1732533232, '1229', 'public'),
(3, 'sdg', 'sdg', 'dgfhd', 'dsg@gfs', '$2y$10$7tDemzaZXHwywPziWG35POBlCHtbQQXiloJwKMnVhYB4AkIfILmq2', 'sfdghsdh', 537357, '78547', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `tab`
--

CREATE TABLE `tab` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `des` text NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab`
--

INSERT INTO `tab` (`id`, `brand`, `name`, `des`, `stock`, `price`, `img_name`) VALUES
(601, 'iPad', 'iPad Pro', 'good', 11, 130000, '156115098416798782495d0d4608895a6.jpg'),
(602, 'iPad', 'iPad Mini', 'good', 10, 150000, '15611510231557869125d0d462f38e7e.jpg'),
(603, 'Samsung', 'Samsung Galaxy Tab S', 'good', 3, 45000, '156115109013030193475d0d46725f153.jpg'),
(604, 'Samsung', 'Samsung Galaxy Tab S4', 'good', 5, 65000, '15611511162953102805d0d468c49ab1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tv`
--

CREATE TABLE `tv` (
  `id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `des` text NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tv`
--

INSERT INTO `tv` (`id`, `brand`, `name`, `des`, `stock`, `price`, `img_name`) VALUES
(1001, 'Sony', 'Sony Bravia Android TV 4K', 'good', 12, 110000, '156115144020269277295d0d47d071b00.jpg'),
(1002, 'Sony', 'Sony Bravia R520', 'good', 3, 70000, '156115146812290166405d0d47ecec9a1.jpg'),
(1003, 'Samsung', 'Samsung Smart TV', 'good', 3, 130000, '15611515016132144035d0d480d371d7.jpg'),
(1004, 'Lg', 'LG QLED', 'good', 13, 130000, '156115153287281755d0d482c94afc.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab`
--
ALTER TABLE `tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tv`
--
ALTER TABLE `tv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=705;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=506;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tab`
--
ALTER TABLE `tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=605;

--
-- AUTO_INCREMENT for table `tv`
--
ALTER TABLE `tv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
