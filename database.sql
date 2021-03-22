-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 22, 2021 at 02:41 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `fish_r_us`
--
CREATE DATABASE IF NOT EXISTS `fish_r_us` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fish_r_us`;

-- --------------------------------------------------------

--
-- Table structure for table `credential`
--

DROP TABLE IF EXISTS `credential`;
CREATE TABLE `credential` (
  `user_id` varchar(32) NOT NULL,
  `role` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `credential`
--

INSERT INTO `credential` (`user_id`, `role`, `password`) VALUES
('bsmith', 'user', '$2y$10$AbXqg2C7a5gpuiQP08flJeq46YNrmVPFSogx6C0VlIEpdfo3TYToO'),
('cjohnson', 'user', '$2y$10$Rrgemjs/DOWl4W3hcXtL0.Bp5ECpxDFWX1OYg7kPZZGN.18wyIoqe'),
('hbrown', 'user', '$2y$10$yDsyahnXyRbmgO7JOagPIe/hyEJPxC.Z8B9wfoyvljQ9d.CQhgSve'),
('mjones', 'user', '$2y$10$KGSS.DLTD5mdUTCY1bgcXO9c9DXzGQwKWQIx0.vhkJHO0WsGMZtr2'),
('jgarcia', 'user', '$2y$10$mc6ydP4IVVMK3bOppizdTOuuWpPyUmvo4l4V75KxkFG3CxILsM6.C'),
('cmiller', 'user', '$2y$10$zXKou2l61MODioJVNAz/1.6jN.bnmrZZEea5bt0sTImeAugyCbdTC'),
('ndavis', 'user', '$2y$10$/pyIidWexACX75G8A9Nr6.vbRtdkXZoHFJMSErWXjtPyo5X4ZKLXW'),
('jrodriguez', 'user', '$2y$10$P6Ks4Kr5/FghUw6nKTE/3.oiO7tMRZvMXtrjCkth13Gtr9Yudz8F.'),
('pmartinez', 'user', '$2y$10$CFJWygVce3ovpTJ36wLNi.c9Zfis2WZcpD9h4bfYjKYvSE1Ngnpty'),
('pbar', 'user', '$2y$10$TNLLy8EKl7cO.65ZgtP/d.9NaOv4hFd8AECmPDnsuAWU87mf5OBMm'),
('tlabine', 'user', '$2y$10$WdvdQHeBhfIAv1MgamfYfuJAaVKQEbWJV9R1rxagPNNEEVRENC7Sy'),
('vtabor', 'user', '$2y$10$lm0h2j5OgTWmn.dtTMq8NutOhkMzmk1KYJlT5ln0Iwydz.Gsm5TxC'),
('ctahir', 'user', '$2y$10$DUiNA4uLyDyigdTIQzRys.E4HnbrUyhxBcG0wxlT.EEO0eSqnminq'),
('wvaccari', 'user', '$2y$10$VH1p9R37MemFftKLJAxoN.KqkUjyGpreTBFyyv0bNral2H3A657je'),
('ssmith', 'user', '$2y$10$4ERx05VepUh33YLEhXStoOVjUd11wF8taK2bwGJ8Wwi9T7PLh9ep.'),
('pdavis', 'user', '$2y$10$DKGRDIgiaklX6o9aqi2PnOQmTuDV.IYk8voDg/hzHNyI3cudY5Yo2'),
('abartholio', 'user', '$2y$10$NrtXYdXhVXooE6lPEUjr0uqL509Ro1yafZ9jg.v22hS7fABNu82lO'),
('sponder', 'user', '$2y$10$sCbPLIW/CjF8EV89g6mabOMIcmuepz8y8w5paQlLcy1E6ly8nt7My'),
('jherman', 'user', '$2y$10$F85qTwjI5w6ZXLJnDwA4XOnppBsq6MwnR0G3grZqoL0xDcv3SXsp.'),
('dcamit', 'user', '$2y$10$uiWobRPFF.OafcRuLFWHdeWxFuUgoY.X7Dao7Rfda8h9NXPAHsHk6'),
('readie', 'user', '$2y$10$8hh59eMQ7sov5nucQr/XUeKpig8f.6lOJg/TbkRG4jYr0Cr0/iOB2'),
('admin', 'admin', '$2y$10$8eI0XPlZCev5wnlKDumHBOf1UJdZX9tO9FHN7TGP72N1/C73HodTq');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE `employee` (
  `employee_id` varchar(100) NOT NULL,
  `last_name` text NOT NULL,
  `first_name` text NOT NULL,
  `employee_title` text NOT NULL,
  `store_id` varchar(100) NOT NULL,
  `user_id` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `last_name`, `first_name`, `employee_title`, `store_id`, `user_id`) VALUES
('1', 'Franks', 'Erik', 'Manager', '101', ''),
('10', 'Siedel', 'Natalie', 'Stocker', '105', ''),
('11', 'Carson', 'Kenny', 'Cashier', '101', ''),
('12', 'Fredericks', 'Ethan', 'Cashier', '102', ''),
('13', 'Graves', 'Micheal', 'Cashier', '103', ''),
('14', 'Griffin', 'Preston', 'Cashier', '104', ''),
('15', 'Bell', 'Ashley', 'Cashier', '105', ''),
('16', 'Barnes', 'Paul', 'Sales Floor', '101', ''),
('17', 'Bauer', 'Nicholas', 'Sales Floor', '102', ''),
('18', 'Gardner', 'Brian', 'Sales Floor', '103', ''),
('19', 'Lawrence', 'Karen', 'Sales Floor', '104', ''),
('2', 'Smith', 'Mitchell', 'Manager', '102', ''),
('20', 'Lyle', 'Gray', 'Sales Floor', '105', ''),
('3', 'Brown', 'Karly', 'Manager', '103', ''),
('4', 'Ballard', 'Jim', 'Manager', '104', ''),
('5', 'Johnson', 'Jessica', 'Manager', '105', ''),
('6', 'Carr', 'Michelle', 'Stocker', '101', ''),
('7', 'Kolbe', 'Kyle', 'Stocker', '102', ''),
('8', 'Waterlynn', 'Jake', 'Stocker', '103', ''),
('9', 'Colpa', 'Katlyn', 'Stocker', '104', '');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE `inventory` (
  `inventory_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `store_id` varchar(100) NOT NULL,
  `stock_date` date NOT NULL,
  `stock_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `product_id`, `store_id`, `stock_date`, `stock_quantity`) VALUES
('10000', '1000', '101', '2021-03-14', 3),
('10001', '1001', '101', '2021-03-14', 6),
('10002', '1002', '101', '2021-03-14', 1),
('10003', '1003', '101', '2021-03-14', 4),
('10004', '1004', '101', '2021-03-14', 8),
('10005', '1005', '101', '2021-03-14', 7),
('10006', '1006', '101', '2021-03-14', 6),
('10007', '1007', '101', '2021-03-14', 12),
('10008', '1008', '101', '2021-03-14', 16),
('10009', '1009', '101', '2021-03-14', 3),
('10010', '1010', '101', '2021-03-14', 9),
('10011', '1011', '101', '2021-03-14', 6),
('10012', '1012', '101', '2021-03-14', 7),
('10013', '1013', '101', '2021-03-14', 8),
('10014', '1014', '101', '2021-03-14', 4),
('10015', '1015', '101', '2021-03-14', 2),
('10016', '1016', '101', '2021-03-14', 1),
('10017', '1017', '101', '2021-03-14', 0),
('10018', '1018', '101', '2021-03-14', 9),
('10019', '1019', '101', '2021-03-14', 6),
('10020', '1020', '101', '2021-03-14', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orderline`
--

DROP TABLE IF EXISTS `orderline`;
CREATE TABLE `orderline` (
  `order_id` varchar(100) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderline`
--

INSERT INTO `orderline` (`order_id`, `product_id`, `quantity`) VALUES
('2000', '1000', 1),
('2000', '1003', 2),
('2000', '1017', 1),
('2001', '1015', 1),
('2001', '1019', 1),
('2002', '1010', 1),
('2003', '1008', 4),
('2003', '1004', 1),
('2004', '1016', 1),
('2004', '1014', 1),
('2005', '1011', 1),
('2006', '1009', 3),
('2006', '1000', 1),
('2007', '1020', 3),
('2007', '1013', 3),
('2008', '1000', 1),
('2008', '1017', 2),
('2008', '1008', 2),
('2008', '1004', 1),
('2008', '1005', 1),
('2009', '1010', 3),
('2009', '1012', 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

DROP TABLE IF EXISTS `order_table`;
CREATE TABLE `order_table` (
  `user_id` varchar(100) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `store_id` varchar(100) NOT NULL,
  `purchase_date` date NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `invoice_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`user_id`, `employee_id`, `store_id`, `purchase_date`, `order_id`, `invoice_id`) VALUES
('10000', '3', '103', '2021-02-14', '2000', '1000001'),
('10005', '14', '104', '2021-02-17', '2001', '1000002'),
('10014', '15', '105', '2021-02-24', '2002', '1000003'),
('10019', '16', '101', '2021-02-25', '2003', '1000004'),
('10008', '17', '102', '2021-02-27', '2004', '1000005'),
('10009', '19', '104', '2021-03-01', '2005', '1000006'),
('10020', '19', '104', '2021-03-04', '2006', '1000007'),
('10013', '20', '105', '2021-03-09', '2007', '1000008'),
('10001', '1', '101', '2021-03-10', '2008', '1000009'),
('10011', '1', '101', '2021-03-10', '2009', '1000010');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `vendor_id` varchar(100) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `sales_price` decimal(10,2) NOT NULL,
  `imagepath` varchar(256) DEFAULT NULL,
  `product_desc` varchar(512) NOT NULL,
  `featured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_type`, `vendor_id`, `cost`, `sales_price`, `imagepath`, `product_desc`, `featured`) VALUES
('1000', 'Large Fish Tank', 'Aquarium', '1', '29.00', '49.99', 'product.jpeg', 'really awesome product', 1),
('1001', 'Small Fish Tank', 'Aquarium', '1', '19.99', '39.99', 'product.jpeg', 'this is also an awesome product', 0),
('1002', 'Beta Fish', 'Fish', '2', '2.00', '5.00', 'betta.jpg', 'you should definitely purchase this small fish', 0),
('1003', 'Piranha', 'Fish', '2', '10.00', '14.99', 'piranha.jpg', 'dangerous but also awesome', 0),
('1004', 'Clown Fish', 'Fish', '2', '4.00', '7.99', 'clownfish.jpg', 'a lovely looking fish', 0),
('1005', 'Blue Tang', 'Fish', '2', '7.00', '10.99', 'blue_tang.jpg', 'this is a lovely blue fish', 0),
('1006', 'Octupus', 'Fish', '2', '10.00', '15.99', 'octopus.jpg', 'this one has many arms', 0),
('1007', 'Tank Filter and Pump', 'Supplies', '3', '15.00', '34.99', 'filter.jpg', 'to keep your fishies nice and clean', 0),
('1008', 'Fish Food', 'Supplies', '3', '1.50', '3.99', 'fish_food.jpg', 'for the fish bellies', 0),
('1009', 'Trout', 'Fish', '2', '3.00', '9.99', 'trout.jpg', 'can also be caught in the lake', 0),
('1010', 'Great White Shark', 'Fish', '2', '150.00', '399.99', 'shark.jpg', 'be careful with the teeth', 0),
('1011', 'Orca Whale', 'Fish', '2', '250.00', '599.99', 'orca.jpg', 'technically a mammal, but I digress', 0),
('1012', 'Lesser White Shark', 'Fish', '2', '100.00', '149.99', 'lesser_shark.jpg', 'not as great as the other one', 0),
('1013', 'Fish Bowl', 'Aquarium', '1', '10.00', '25.99', 'fishbowl.jpg', 'not for sharks', 0),
('1014', 'Aquarium Castle', 'Supplies', '3', '15.00', '29.99', 'castle.jpg', 'for royal fishes', 0),
('1015', 'Faux Coral', 'Supplies', '3', '10.00', '15.00', 'coral.jpg', 'the fish will not know it is fake', 0),
('1016', 'Treasure Chest', 'Supplies', '3', '5.00', '7.00', 'chest.jpg', 'so you can pretend your fish are pirates', 0),
('1017', 'Fish Gravel', 'Supplies', '3', '3.00', '6.99', 'gravel.jpg', 'it would be weird if you there was no base in your aquarium', 0),
('1018', 'Medium Fish Tank', 'Aquarium', '1', '24.99', '44.99', 'product.jpeg', 'another awesome product', 0),
('1019', 'Faux Plants', 'Supplies', '3', '5.00', '8.99', 'plants.jpg', 'believe it or not, the fish do not know', 0),
('1020', 'Windex', 'Supplies', '3', '1.50', '2.99', 'windex.jpg', 'because fish tanks are made of glass', 0);

-- --------------------------------------------------------

--
-- Table structure for table `return_table`
--

DROP TABLE IF EXISTS `return_table`;
CREATE TABLE `return_table` (
  `return_id` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `invoice_id` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `return_table`
--

INSERT INTO `return_table` (`return_id`, `date`, `order_id`, `invoice_id`, `quantity`) VALUES
('501', '2021-02-17', '2000', '1000001', 1),
('502', '2021-02-20', '2001', '1000002', 1),
('503', '2021-02-26', '2003', '1000003', 2),
('504', '2021-03-05', '2006', '1000005', 4),
('505', '2021-03-10', '2007', '1000006', 2);

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

DROP TABLE IF EXISTS `shipment`;
CREATE TABLE `shipment` (
  `shipment_id` varchar(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `ship_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`shipment_id`, `order_id`, `ship_date`) VALUES
('30001', '2000', '2021-02-15'),
('30002', '2001', '2021-02-18'),
('30003', '2002', '2021-02-25'),
('30004', '2003', '2021-02-26'),
('30005', '2004', '2021-02-28'),
('30006', '2005', '2021-03-02'),
('30007', '2006', '2021-03-05'),
('30008', '2007', '2021-03-10'),
('30009', '2008', '2021-03-11'),
('30010', '2009', '2021-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

DROP TABLE IF EXISTS `store`;
CREATE TABLE `store` (
  `store_id` varchar(100) NOT NULL,
  `store_address` varchar(100) NOT NULL,
  `store_hours` varchar(32) NOT NULL,
  `store_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `store_address`, `store_hours`, `store_type`) VALUES
('101', 'SaltLake City, UT', '9:30 AM - 5:30 PM', 'Physical'),
('102', 'Sandy, UT', '10:00 AM - 6:00 PM', 'Physical'),
('103', 'Provo, UT', '10:00 AM - 6:00 PM', 'Physical'),
('104', 'St George, UT', '9:30 AM - 5:30 PM', 'Physical'),
('105', 'American Fork, UT', '10:00 AM - 6:00 PM', 'Physical');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

DROP TABLE IF EXISTS `user_table`;
CREATE TABLE `user_table` (
  `username` varchar(128) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `user_role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`username`, `user_id`, `first_name`, `last_name`, `address`, `phone_number`, `password`, `user_role`) VALUES
('bsmith', '10000', 'Benjamin', 'Smith', '152 Yikes St Blanksville, UT', 555876954, '$2y$10$1rs6ZRXTRVj0burP41xlseXVzwYqT49tfVgHOs8Sao0DU7.3jtVae', 'user'),
('cjohnson', '10001', 'Clarice', 'Johnson', '524 Lilly Ave Alton, UT', 5556843210, '$2y$10$l0ibYFJYhH5JqKAYhui1du.Dmb8aoq8jcfxs7cRy8OL2zx8aNx5Sy', 'user'),
('jgarcia', '10004', 'Jane', 'Garcia', '525 W 452 S Clearly, UT', 5551597532, '$2y$10$QMefsjCvFAIlZzGpRBUCOuKiIsWWQJu7zmpUvZAbRz/BkjVP98fAm', 'user'),
('cmiller', '10005', 'Cory', 'Miller', '234 E 584 S SaltLake City, UT', 5554658741, '$2y$10$I4X.pwBSEJX3RrmoUAqxW.5gJ5b0XG35NLLLk073hd2Yj/dCIIcJe', 'user'),
('ndavis', '10006', 'Natashia', 'Davis', '125 E 14 W Sandy, UT', 5552589654, '$2y$10$POTKCPq2k0FfjLFwwYQHC.J9XtIXUAH4uMQ6bovoDzRTO6GxHRN9O', 'user'),
('jrodriguez', '10007', 'Jennifer', 'Rodriguez', '574 N 785E Lehi UT', 5551564232, '$2y$10$Y.fwvm4cMAKudt3Fs0pzUOXjKpHnwuhGbtOjlXYN0xb0VJyrbeSW.', 'user'),
('pmartinez', '10008', 'Paul', 'Martinez', '32 S 45 W Provo UT', 5557463298, '$2y$10$QKmIX7uvzBD4uQhcbTAL9uuTStgRdtdyJ3oxkHgs71NffQY.DnIOC', 'user'),
('tlabine', '10010', 'Thomas', 'Labine', '57 Downing ST Brigham City, UT', 5556876652, '$2y$10$bcIfR4DD5at3aFgs3NvtgOLFUJlzulhGFvE1VCumzO4bAVwWpYpZm', 'user'),
('vtabor', '10011', 'Vince', 'Tabor', '12 The Upside Ave Saltlake City, UT', 5553231784, '$2y$10$W0lQ6uZ/se.KwVq.OZjtl.zeA.mfkpHVPsp3.73UHZbr/P/x5kRAe', 'user'),
('ctahir', '10012', 'Carly', 'Tahir', '14 Here St Clearfield, UT', 5554689853, '$2y$10$VyLIaRDuQuE0zII2dXh46.1T/xzzh/bjC8/KSyq5G4HUgUscolHf2', 'user'),
('wvaccari', '10013', 'Westin', 'Vaccari', '25 Epic St American Fork, UT', 5553219658, '$2y$10$Cc8bPYntNz7KuWXp6oPsNOVZZcqFI9LAknJQuuJNEBu9JiBK8dU1u', 'user'),
('ssmith', '10014', 'Susan', 'Smith', '65 Sunny St St George, UT', 5557319468, '$2y$10$ywtsDoC9Jh9q6alen7CFt.ZpL3TU8wcG/HYfn3ZB3m5YLt9dOBOIu', 'user'),
('pdavis', '10015', 'Pam', 'Davis', '87 West St St George, UT', 5558462319, '$2y$10$8jp9dB74vCcGDoYbgTzLROFn5MD/Zi8.pJlH9WrDaE.fVK1Kt52re', 'user'),
('abartholio', '10016', 'Adam', 'Bartholio', '5 West N St Sandy, UT', 5551649731, '$2y$10$3We2by5ugT86I7Dk5ZQwHeRHOzWsrkjQp.oFp8ntPWSokPcL2pbti', 'user'),
('sponder', '10017', 'Steven', 'Ponder', '56 West Cir Saltlake City, UT', 5557985124, '$2y$10$gA3kChK4Sx7Kh6fADGlYdeLCRrvD6A4QjZmjsb.Nhu2ujvpqzmjES', 'user'),
('jherman', '10018', 'Jason', 'Herman', '68 Windy Way St George, UT', 5553965842, '$2y$10$9D4YGpVu1lHseH.VDoMYieeVX9WfCclNGC3uAErG2UITA0p/zxOG2', 'user'),
('dcamit', '10019', 'Daniel', 'Camit', '13 Humbolt Cir American Fork, UT', 5558789546, '$2y$10$6G/dDV0cPYSX5HJzDto4vex1y2mGU1OK820GGivamY6eQn0LfQ15O', 'user'),
('admin', '00000', 'Administrator', 'Jones', 'Headquarters', 0, '$2y$10$mCLupXx9qdoiSG.FjxdsueV.NjgC/15gsQRUVwRAlacBfW2MhZaoi', 'admin'),
('asun', '10021', 'Anna', 'Sun', '4 privet drive', 4355599558, '$2y$10$sXBjDzwyUrVsS4hq.dB9k.ywdMri7bML2eds.RVoeaYOczXCUVD0O', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

DROP TABLE IF EXISTS `vendor`;
CREATE TABLE `vendor` (
  `vendor_id` varchar(100) NOT NULL,
  `vendor_name` varchar(100) NOT NULL,
  `vendor_address` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_name`, `vendor_address`) VALUES
('1', 'Glass Box Supply Co.', ' 585 Main Street Los Angeles CA'),
('2', 'Fishmonger, Inc.', 'PO Box 30352 Hunstville AL'),
('3', 'Stuff 4 Fishes', ' 1950 S 4500 W Salt Lake City UT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `return_table`
--
ALTER TABLE `return_table`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`shipment_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);
