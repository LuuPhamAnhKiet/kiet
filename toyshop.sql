-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 04:37 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinyl_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat_ID` varchar(10) NOT NULL,
  `Cat_Name` varchar(30) NOT NULL,
  `Cat_Des` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_ID`, `Cat_Name`, `Cat_Des`) VALUES
('C001', 'Vinyl', 'Vinyl'),
('C002', 'Audio', 'Audio'),
('C003', 'Cassette', 'Cassette');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `CustName` varchar(30) NOT NULL,
  `gender` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `CusDate` int(11) NOT NULL,
  `CusMonth` int(11) NOT NULL,
  `CusYear` int(11) NOT NULL,
  `SSN` varchar(10) DEFAULT NULL,
  `ActiveCode` varchar(100) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Username`, `Password`, `CustName`, `gender`, `Address`, `telephone`, `email`, `CusDate`, `CusMonth`, `CusYear`, `SSN`, `ActiveCode`, `state`) VALUES
('abc', 'e10adc3949ba59abbe56e057f20f883e', 'NguyenBaLoc', 0, '160/4 30/4', '0123456789', '456@gmail.com', 1, 2, 1970, '', '', 0),
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 0, 'admin', '1234567890', 'admin@gmail.com', 3, 3, 2000, '', '', 1),
('sieu123', 'e10adc3949ba59abbe56e057f20f883e', 'NguyenSieu', 0, '160/4 30/4', '1234567890', '123@gmail.com', 1, 3, 1970, '', '', 0),
('sieu2001', '25f9e794323b453885f5181f1b624d0b', 'NguyenSieu', 0, '160/4 30/4', '0123456789', 'locnbgcc18053@fpt.edu.vn', 30, 3, 2000, '', '', 0),
('sieu2001ct', 'e10adc3949ba59abbe56e057f20f883e', 'NguyenSieu', 0, '160/4 30/4 12311231', '0123456789', '123@gmail.commmm', 3, 4, 1971, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` varchar(6) NOT NULL,
  `OrderDate` datetime NOT NULL,
  `DeliveryDate` datetime NOT NULL,
  `Delivery_loca` varchar(200) NOT NULL,
  `Payment` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Product_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `OrderDetail_ID` int(11) NOT NULL,
  `Product_ID` varchar(10) NOT NULL,
  `Order_ID` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` varchar(10) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Price` bigint(20) NOT NULL,
  `oldPrice` decimal(12,2) NOT NULL,
  `SmallDesc` varchar(1000) NOT NULL,
  `DetailDesc` text NOT NULL,
  `ProDate` datetime NOT NULL,
  `Pro_qty` int(11) NOT NULL,
  `Pro_image` varchar(200) NOT NULL,
  `Cat_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Price`, `oldPrice`, `SmallDesc`, `DetailDesc`, `ProDate`, `Pro_qty`, `Pro_image`, `Cat_ID`) VALUES
('AB001', 'The Abbey Road', 30, '0.00', 'The Abbey Road-The Beatles', '', '2020-07-30 06:29:32', 2, 'the_abbey_road.jpg', 'C001'),
('AT001', 'AUDIO-TECHNICA LP120XUSB', 500, '0.00', 'LP120XUSB', '', '2020-07-28 04:29:16', 2, 'audio_technica_1.jpg', 'C002'),
('AT002', 'AUDIO-TECHNICA LP60BK', 400, '0.00', 'FULLY AUTOMATIC', 'AT-LP60BK FULLY AUTOMATIC BELT-DRIVE STEREO TURNTABLE', '2020-07-28 04:34:57', 2, 'audio_technica_2.jpg', 'C002'),
('AT003', 'AUDIO-TECHNICA LP60BK0', 200, '0.00', 'AT-LP60BK FULLY AUTOMATIC', '', '2020-07-28 07:09:41', 2, 'audio_technica_3.jpg', 'C002'),
('BFS001', 'Beatles For Sale', 30, '0.00', 'Beatles For Sale-The Beatles', 'Beatles For Sale-The Beatles', '2020-07-28 04:46:36', 2, 'thebeatles_fs.jpg', 'C001'),
('CP001', 'CASSETTE PLAYER HANDY', 30, '0.00', 'CASSETTE PLAYER HANDY', 'CASSETTE PLAYER HANDY', '2020-07-28 04:25:33', 2, 'cassette_player_1.jpg', 'C002'),
('ED01', 'Diamonds', 40, '0.00', 'Diamonds', '', '2020-07-27 18:01:12', 2, 'eltonjohn_diamonds.jpg', 'C001'),
('EJ001', 'Made In England', 30, '0.00', 'Made In England-Elton John', 'Made In England-Elton John', '2020-07-28 06:05:07', 2, 'eltonjohnalbum.jpg', 'C001'),
('EON01', 'One Night Only', 35, '0.00', 'One Night Only', 'One Night Only- Elton John', '2020-07-28 04:36:21', 3, 'eltonjohn_onenight.jpg', 'C001'),
('EYB01', 'Goodbye Yellow Brick Road', 35, '0.00', 'Goodbye Yellow Brick Road', 'Goodbye Yellow Brick Road', '2020-07-28 04:24:17', 3, 'eltonjohn_yellowbrick.jpg', 'C001'),
('LIB001', 'LET IT BE', 35, '0.00', 'LET IT BE', 'LET IT BE', '2020-07-28 03:26:46', 3, 'letitbe.jpg', 'C001'),
('MJCA001', 'Bad', 15, '0.00', 'Bad- Michael Jackson', 'Bad- Michael Jackson', '2020-07-28 04:37:28', 3, 'mjbadcass.jpg', 'C003'),
('MJCA002', 'Thriller', 20, '0.00', 'Thriller- Michael Jackson', 'Thriller- Michael Jackson', '2020-07-28 04:42:22', 3, 'mjthirllcass.jpg', 'C003'),
('MJV001', 'THRILLER 25', 45, '0.00', 'MICHAEL JACKSON - THRILLER 25 ', '', '2020-07-28 09:09:06', 2, 'thriller_mj.jpg', 'C001'),
('MMT001', 'Magical Mystery Tour', 40, '0.00', 'Magical Mystery Tour-The Beatles', 'Magical Mystery Tour-The Beatles', '2020-07-28 04:44:17', 2, 'mmt.jpg', 'C001'),
('PF001', 'The Final Cut', 40, '0.00', 'The Final Cut- Pink Floyd', 'The Final Cut- Pink Floyd', '2020-07-28 04:52:08', 2, 'pf_finalcut.jpg', 'C001'),
('PF002', 'The Wall', 35, '0.00', 'The Wall- Pink Floyd', 'The Wall- Pink Floyd', '2020-07-28 04:52:33', 2, 'pf_wall.jpg', 'C001'),
('PF003', 'The Dark Side of the Moon', 45, '0.00', 'The Darkside of the Moon- Pink Floyd', 'The Darkside of the Moon- Pink Floyd', '2020-07-28 04:53:26', 2, 'pf_dsom.jpg', 'C001'),
('Q001', 'Queen II', 35, '0.00', 'QueenII - Queen', 'QueenII - Queen', '2020-07-28 04:55:58', 2, 'queen.jpg', 'C001'),
('Q002', 'Queen Greatest Hits I', 40, '0.00', 'Queen Greatest Hits I- Queen', 'Queen Greatest Hits I- Queen', '2020-07-28 04:56:36', 2, 'queen_gr.jpg', 'C001'),
('Q003', 'Queen Greatest Hits II', 45, '0.00', 'Queen Greatest Hits II- Queen', '', '2020-07-28 05:49:01', 2, 'queen_gr2.jpg', 'C001'),
('QCA003', 'Bohemian Rhapsody', 20, '0.00', 'Bohemian Rhapsody- Queen', 'Bohemian Rhapsody- Queen', '2020-07-28 04:43:40', 2, 'queenbr_cass.jpg', 'C003'),
('TBC001', 'Revolver', 15, '0.00', 'Revolver-The Beatles', 'Revolver-The Beatles', '2020-07-28 04:50:22', 2, 'revolver.jpg', 'C003'),
('TBC002', 'Yellow Submarine', 15, '0.00', 'Yellow Submarine-The Beatles', 'Yellow Submarine-The Beatles', '2020-07-28 04:51:01', 2, 'yellowsub.jpg', 'C003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `username` (`username`),
  ADD KEY `Product_ID` (`Product_ID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`OrderDetail_ID`),
  ADD KEY `Product_ID` (`Product_ID`),
  ADD KEY `Order_ID` (`Order_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Cat_ID` (`Cat_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `OrderDetail_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`Username`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`Product_ID`) REFERENCES `product` (`Product_ID`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`Order_ID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`Product_ID`) REFERENCES `product` (`Product_ID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Cat_ID`) REFERENCES `category` (`Cat_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
