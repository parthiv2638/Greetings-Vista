-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2014 at 06:59 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `greetingsvista`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `A_UName` varchar(20) NOT NULL,
  `A_FName` varchar(20) NOT NULL,
  `A_LName` varchar(20) NOT NULL,
  `A_Address` varchar(50) NOT NULL,
  `City_Id` int(5) NOT NULL,
  `A_Contactno` varchar(13) NOT NULL,
  `A_EmailId` varchar(30) NOT NULL,
  `Gender` tinyint(1) NOT NULL,
  `A_DOB` date NOT NULL,
  `A_Img` varchar(50) NOT NULL,
  `A_Pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`A_UName`),
  KEY `City_Id` (`City_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_UName`, `A_FName`, `A_LName`, `A_Address`, `City_Id`, `A_Contactno`, `A_EmailId`, `Gender`, `A_DOB`, `A_Img`, `A_Pwd`) VALUES
('parthivpatel', 'parthiv', 'patel', '11,B Badapark Society,Naranpura,Ahmedabad-13.', 1, '+919662982638', 'parthivpatel_20_08@yahoo.com', 1, '1993-01-13', 'avatar-19.png', 'parthiv100');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Category_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Category_Name` varchar(20) NOT NULL,
  `Category_Img` varchar(50) NOT NULL,
  PRIMARY KEY (`Category_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Category_Id`, `Category_Name`, `Category_Img`) VALUES
(1, 'Business Cards', 'businesscard.jpg'),
(2, 'Marketing Products', 'marketing products.jpg'),
(3, 'Signage & Banners', 'signages.jpg'),
(4, 'Invitations & Announ', 'Invitations & Announcements.jpg'),
(5, 'Calendars', 'Calenders.jpg'),
(6, 'Stationery', 'Stationerys.jpg'),
(7, 'Clothing and Accesso', 'Clothing and Accessories.jpg'),
(8, 'Photo Gifts', 'Photo Gifts.jpg'),
(9, 'Labels & Stickers', 'Labels & Stickers.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `City_Id` int(11) NOT NULL AUTO_INCREMENT,
  `City_Name` varchar(20) NOT NULL,
  PRIMARY KEY (`City_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`City_Id`, `City_Name`) VALUES
(1, 'Ahmedabad'),
(2, 'Mumbai'),
(3, 'Udaipur'),
(4, 'Pune'),
(5, 'Anand'),
(6, 'Baroda'),
(7, 'Jaipur'),
(8, 'Rajkot'),
(9, 'Nadiad'),
(10, 'Delhi'),
(11, 'Kolkata'),
(12, 'Karnataka');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `C_UName` varchar(20) NOT NULL,
  `C_FName` varchar(20) NOT NULL,
  `C_LName` varchar(20) NOT NULL,
  `C_Address` varchar(50) NOT NULL,
  `City_Id` int(5) NOT NULL,
  `C_Contactno` varchar(13) NOT NULL,
  `C_EmailId` varchar(30) NOT NULL,
  `Gender` tinyint(1) NOT NULL,
  `C_DOB` date NOT NULL,
  `C_Img` varchar(50) NOT NULL,
  `C_Pwd` varchar(20) NOT NULL,
  `C_DOJ` date NOT NULL,
  PRIMARY KEY (`C_UName`),
  KEY `City_Id` (`City_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_UName`, `C_FName`, `C_LName`, `C_Address`, `City_Id`, `C_Contactno`, `C_EmailId`, `Gender`, `C_DOB`, `C_Img`, `C_Pwd`, `C_DOJ`) VALUES
('kishanpatel', 'kishan', 'patel', '11,B Badapark Soc', 1, '+919913191258', 'kishanpatel_20_08@yahoo.com', 1, '1993-08-15', 'avatar-19.png', 'kishan', '2014-08-02'),
('naityapatel', 'naitya', 'patel', '11Badapark Society', 1, '+91 966298263', 'naityapatel@yahoo.com', 1, '0000-00-00', '', 'naitya', '2014-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `Group_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Group_Name` varchar(20) NOT NULL,
  PRIMARY KEY (`Group_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`Group_Id`, `Group_Name`) VALUES
(1, 'Electronics'),
(2, 'Photography'),
(3, 'Computer'),
(4, 'Education'),
(5, 'Architecture'),
(6, 'Finance'),
(7, 'Jewellery');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `Order_Id` int(11) NOT NULL AUTO_INCREMENT,
  `C_UName` varchar(20) NOT NULL,
  `Order_Date` date NOT NULL,
  `Order_StatusId` int(11) NOT NULL,
  PRIMARY KEY (`Order_Id`),
  KEY `C_UName` (`C_UName`),
  KEY `Order_StatusId` (`Order_StatusId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_Id`, `C_UName`, `Order_Date`, `Order_StatusId`) VALUES
(1, 'kishanpatel', '2014-11-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `Order_DetailId` int(11) NOT NULL AUTO_INCREMENT,
  `Order_Id` int(11) NOT NULL,
  `Product_Name` varchar(20) NOT NULL,
  `Template_Name` varchar(20) NOT NULL,
  `Size_Description` varchar(20) NOT NULL,
  `Side_Description` varchar(20) NOT NULL,
  `Paper_Description` varchar(20) NOT NULL,
  `Group_Name` varchar(20) NOT NULL,
  `Rate` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Rateintoquantity` int(11) NOT NULL,
  `Template_Img` varchar(50) NOT NULL,
  `Product_Img` varchar(50) NOT NULL,
  `Data_File` varchar(50) NOT NULL,
  `Logo_File` varchar(50) NOT NULL,
  `Other_File` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Order_DetailId`),
  KEY `Order_Id` (`Order_Id`),
  KEY `Product_Id` (`Product_Name`),
  KEY `Template_Id` (`Template_Name`),
  KEY `Size_Id` (`Size_Description`),
  KEY `Side_Id` (`Side_Description`),
  KEY `Paper_TypeId` (`Paper_Description`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`Order_DetailId`, `Order_Id`, `Product_Name`, `Template_Name`, `Size_Description`, `Side_Description`, `Paper_Description`, `Group_Name`, `Rate`, `Quantity`, `Rateintoquantity`, `Template_Img`, `Product_Img`, `Data_File`, `Logo_File`, `Other_File`) VALUES
(14, 1, 'B1', 'Com 1', '91 X 53', 'One Side', 'Art', '', 200, 1000, 200, 'd1.jpg', 'BCard art.jpg', '4.jpg', '7.jpg', ''),
(15, 1, 'B1', 'Com 1', '91 X 53', 'One Side', 'Art', '', 200, 1000, 200, 'd1.jpg', 'BCard art.jpg', '', '', ''),
(16, 1, 'B1', 'Com 1', '91 X 53', 'One Side', 'Art', '', 200, 1000, 200, 'd1.jpg', 'BCard art.jpg', '4.jpg', '7.jpg', ''),
(17, 1, 'B1', 'Com 1', '91 X 53', 'One Side', 'Art', '', 200, 1000, 200, 'd1.jpg', 'BCard art.jpg', '', '', ''),
(18, 1, 'B1', 'Com 1', '91 X 53', 'One Side', 'Art', '', 200, 1000, 200, 'd1.jpg', 'BCard art.jpg', '', '', ''),
(19, 1, 'B1', 'Com 1', '91 X 53', 'One Side', 'Art', '', 200, 1000, 200, 'd1.jpg', 'BCard art.jpg', '4.jpg', '7.jpg', ''),
(20, 1, 'B1', '', '91 X 53', 'One Side', 'Art', '', 200, 1000, 200, '', '', '', '', ''),
(21, 1, 'B1', '', '91 X 53', 'One Side', 'Art', '', 200, 1000, 200, '', '', '', '', ''),
(22, 1, 'B1', '', '91 X 53', 'One Side', 'Art', '', 200, 1000, 200, '', '', '', '', ''),
(23, 1, 'B1', '', '91 X 53', 'One Side', 'Art', '', 200, 1000, 200, '', '', '', '', ''),
(24, 1, 'B1', '', '91 X 53', 'One Side', 'Art', '', 200, 1000, 200, '', '', '', '', ''),
(25, 1, 'B1', '', '91 X 53', 'One Side', 'Art', '', 200, 1000, 200, '', '', '6.jpg', '6.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE IF NOT EXISTS `order_status` (
  `Order_StatusId` int(11) NOT NULL AUTO_INCREMENT,
  `Order_StatusName` varchar(20) NOT NULL,
  PRIMARY KEY (`Order_StatusId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`Order_StatusId`, `Order_StatusName`) VALUES
(1, 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `paper_type`
--

CREATE TABLE IF NOT EXISTS `paper_type` (
  `Paper_TypeId` int(11) NOT NULL AUTO_INCREMENT,
  `Paper_Description` varchar(20) NOT NULL,
  PRIMARY KEY (`Paper_TypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `paper_type`
--

INSERT INTO `paper_type` (`Paper_TypeId`, `Paper_Description`) VALUES
(1, 'Glossy'),
(2, 'Art'),
(3, 'Matt Polish'),
(4, 'Bond 80gsm'),
(5, 'Bond 100gsm');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `Product_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Product_Name` varchar(20) NOT NULL,
  `Side_Id` int(11) NOT NULL,
  `Size_Id` int(11) NOT NULL,
  `Category_Id` int(11) NOT NULL,
  `Paper_TypeId` int(11) NOT NULL,
  `Rate` int(11) NOT NULL,
  `Product_Img` varchar(50) NOT NULL,
  PRIMARY KEY (`Product_Id`),
  KEY `Side_Id` (`Side_Id`),
  KEY `Size_Id` (`Size_Id`),
  KEY `Category_Id` (`Category_Id`),
  KEY `Paper_TypeId` (`Paper_TypeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_Id`, `Product_Name`, `Side_Id`, `Size_Id`, `Category_Id`, `Paper_TypeId`, `Rate`, `Product_Img`) VALUES
(1, 'B1', 1, 1, 1, 2, 200, 'BCard art.jpg'),
(14, 'B2', 2, 1, 1, 2, 350, 'BCard art-TS.jpg'),
(15, 'B3', 1, 1, 1, 1, 250, 'BCard glossy.jpg'),
(16, 'B4', 2, 1, 1, 1, 400, 'BCard glossy-TS.jpg'),
(17, 'B5', 1, 1, 1, 3, 280, 'BCard matt.jpg'),
(18, 'B6', 2, 1, 1, 3, 450, 'BCard matt-TS.jpg'),
(19, 'Invitations Cards 1', 2, 6, 4, 1, 199, 'Invitation 1.jpg'),
(20, 'Invitations Cards 2', 2, 5, 4, 1, 140, 'Invitation 2.jpg'),
(21, 'Invitations Cards 3', 2, 6, 4, 3, 149, 'Invitation 3.jpg'),
(22, 'Invitations Cards 4', 2, 5, 1, 3, 220, 'Invitation.jpg'),
(23, 'Letter Head 1', 1, 3, 6, 4, 525, 'letterhead1.png'),
(24, 'Letter Head 2', 1, 1, 6, 1, 650, 'letterhead2.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_template`
--

CREATE TABLE IF NOT EXISTS `product_template` (
  `Template_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Template_Name` varchar(20) NOT NULL,
  `Template_Img` varchar(50) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Group_Id` int(11) NOT NULL,
  PRIMARY KEY (`Template_Id`),
  KEY `Product_Id` (`Product_Id`),
  KEY `Group_Id` (`Group_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `product_template`
--

INSERT INTO `product_template` (`Template_Id`, `Template_Name`, `Template_Img`, `Product_Id`, `Group_Id`) VALUES
(1, 'Temp 1', '2.jpg', 1, 1),
(2, 'Temp 2', '5.jpg', 15, 1),
(3, 'Temp 3', '6.jpg', 19, 6),
(4, 'Temp 4', '6.jpg', 19, 3),
(10, 'Edu 1', 'c1.jpg', 1, 4),
(11, 'Edu 2', 'c2.jpg', 1, 4),
(12, 'Edu 3', 'c3.jpg', 1, 4),
(13, 'Com 1', 'd1.jpg', 1, 3),
(14, 'Com 2', 'd2.jpg', 1, 3),
(15, 'Com 3', 'd3.jpg', 15, 3);

-- --------------------------------------------------------

--
-- Table structure for table `side_master`
--

CREATE TABLE IF NOT EXISTS `side_master` (
  `Side_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Side_Description` varchar(20) NOT NULL,
  PRIMARY KEY (`Side_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `side_master`
--

INSERT INTO `side_master` (`Side_Id`, `Side_Description`) VALUES
(1, 'One Side'),
(2, 'Two SIde');

-- --------------------------------------------------------

--
-- Table structure for table `size_master`
--

CREATE TABLE IF NOT EXISTS `size_master` (
  `Size_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Size_Description` varchar(20) NOT NULL,
  PRIMARY KEY (`Size_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `size_master`
--

INSERT INTO `size_master` (`Size_Id`, `Size_Description`) VALUES
(1, '91 X 53'),
(2, '9.5 X 4.5'),
(3, 'A/4'),
(4, 'A/8'),
(5, 'A/2'),
(6, 'A/7');

-- --------------------------------------------------------

--
-- Table structure for table `tempcart`
--

CREATE TABLE IF NOT EXISTS `tempcart` (
  `Tempcart_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Product_Name` varchar(20) NOT NULL,
  `Side_Description` varchar(20) NOT NULL,
  `Size_Description` varchar(20) NOT NULL,
  `Paper_Description` varchar(20) NOT NULL,
  `Group_Name` varchar(20) NOT NULL,
  `Data_File` varchar(50) NOT NULL,
  `Logo_File` varchar(50) NOT NULL,
  `Other_File` varchar(50) DEFAULT NULL,
  `Rate` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Rateintoquantity` int(11) NOT NULL,
  `Session_Id` varchar(50) NOT NULL,
  `Template_Name` varchar(20) NOT NULL,
  `Template_Img` varchar(50) NOT NULL,
  `Product_Img` varchar(50) NOT NULL,
  PRIMARY KEY (`Tempcart_Id`),
  UNIQUE KEY `Tempcart_Id` (`Tempcart_Id`),
  KEY `Product_Id` (`Product_Name`),
  KEY `Side_Id` (`Side_Description`),
  KEY `Size_Id` (`Size_Description`),
  KEY `Paper_TypeId` (`Paper_Description`),
  KEY `Group_Id` (`Group_Name`),
  KEY `Template_Id` (`Template_Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `tempcart`
--

INSERT INTO `tempcart` (`Tempcart_Id`, `Product_Name`, `Side_Description`, `Size_Description`, `Paper_Description`, `Group_Name`, `Data_File`, `Logo_File`, `Other_File`, `Rate`, `Quantity`, `Rateintoquantity`, `Session_Id`, `Template_Name`, `Template_Img`, `Product_Img`) VALUES
(1, 'B1', 'One Side', '91 X 53', 'Art', 'Electronics', 'd4.jpg', 'd5.jpg', NULL, 200, 1000, 200, 'cg4f7m4g84r78c1rf8jpu7iju3', 'Com 1', 'd1.jpg', 'BCard art.jpg'),
(34, 'B1', 'One Side', '91 X 53', 'Art', '', 'd2.jpg', 'd2.jpg', NULL, 200, 1000, 200, 'pdh2d5cfpi8b2ibgv4i935si17', '', '', ''),
(35, 'B1', 'One Side', '91 X 53', 'Art', 'Electronics', 'd4.jpg', 'd2.jpg', NULL, 200, 1000, 200, 'pdh2d5cfpi8b2ibgv4i935si17', 'Com 1', 'd1.jpg', 'BCard art.jpg'),
(36, 'B1', 'One Side', '91 X 53', 'Art', '', 'd4.jpg', 'd2.jpg', NULL, 200, 1000, 200, 'pdh2d5cfpi8b2ibgv4i935si17', 'Com 1', 'd1.jpg', 'BCard art.jpg'),
(37, 'B1', 'One Side', '91 X 53', 'Art', '', 'd4.jpg', 'd2.jpg', NULL, 200, 1000, 200, 'pdh2d5cfpi8b2ibgv4i935si17', 'Com 1', 'd1.jpg', 'BCard art.jpg'),
(69, 'B1', 'One Side', '91 X 53', 'Art', '', '6.jpg', '4.jpg', NULL, 200, 1000, 200, 'audbdq5065m507lurg0g7r5pn2', 'Com 2', 'd2.jpg', 'BCard art.jpg'),
(70, 'B1', 'One Side', '91 X 53', 'Art', '', '9.png.png', '6.jpg', NULL, 200, 1000, 200, 'd44m5fbt0j84nk004lva41dbm2', 'Com 1', 'd1.jpg', 'BCard art.jpg'),
(71, 'B1', 'One Side', '91 X 53', 'Art', '', '9.png.png', '5.jpg', NULL, 200, 1000, 200, '89n5q9eipmsd5dg32vhvtu4006', 'Com 2', 'd2.jpg', 'BCard art.jpg'),
(72, 'B1', 'One Side', '91 X 53', 'Art', '', 'BCard glossy.jpg', 'BCard art.jpg', NULL, 200, 1000, 200, '3j4scevhbmio5nf8e4vrlcd274', 'Edu 1', 'c1.jpg', 'BCard art.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`City_Id`) REFERENCES `city` (`City_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`City_Id`) REFERENCES `city` (`City_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`C_UName`) REFERENCES `customer` (`C_UName`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`Order_StatusId`) REFERENCES `order_status` (`Order_StatusId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`Order_Id`) REFERENCES `orders` (`Order_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Side_Id`) REFERENCES `side_master` (`Side_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`Size_Id`) REFERENCES `size_master` (`Size_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`Category_Id`) REFERENCES `category` (`Category_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_ibfk_4` FOREIGN KEY (`Paper_TypeId`) REFERENCES `paper_type` (`Paper_TypeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_template`
--
ALTER TABLE `product_template`
  ADD CONSTRAINT `product_template_ibfk_1` FOREIGN KEY (`Product_Id`) REFERENCES `product` (`Product_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `product_template_ibfk_2` FOREIGN KEY (`Group_Id`) REFERENCES `groups` (`Group_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
