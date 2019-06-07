-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2016 at 11:06 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopping2`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `brandid` int(20) NOT NULL AUTO_INCREMENT,
  `brandname` varchar(50) NOT NULL,
  PRIMARY KEY (`brandid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brandid`, `brandname`) VALUES
(1, 'Raymonds'),
(2, 'Reebok'),
(4, 'Nike'),
(5, 'Designer wedding sharee'),
(6, 'Puma'),
(7, 'Lakeme'),
(8, 'Oriflame'),
(9, 'Designer ornaments'),
(10, 'Designer gold/diamond ring'),
(11, 'Titan'),
(12, 'First track'),
(13, 'Sonata'),
(14, ' Designer Bangles'),
(15, 'Bata'),
(16, 'shrilathers'),
(17, 'Designer wedding sheroyani'),
(18, 'sood'),
(19, 'Designer pagry');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `catid` int(20) NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`) VALUES
(1, 'Shoe'),
(2, 'Shirt'),
(3, 'Trouser'),
(4, 'weddindg sharee'),
(5, 'Ring'),
(6, 'ornaments'),
(7, 'Make-up'),
(8, 'Ladies watch'),
(9, 'Male watch'),
(10, 'Bangles'),
(11, 'Ladies shoes'),
(12, 'wedding sheroyani'),
(13, 'wedding pagry');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `contactid` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`contactid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `subject`, `message`, `emailid`, `contactid`) VALUES
('swarna', 'product quality', 'good', 's@gmail.com', 2),
('anita', 'design', 'very stylish', 'a@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `emailid` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `contactno` int(10) NOT NULL,
  PRIMARY KEY (`emailid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`emailid`, `password`, `name`, `address`, `city`, `contactno`) VALUES
('a@gmail.com', 'aa', 'Abhinava', 'Nagerbazar', 'kolkata', 8965334),
('ar@gmail.com', 'ar', 'arup', 'amnh', 'kolkata', 987655),
('b@gmail.com', 'bb', 'Bhaskar', 'Kolkata-16', 'Mumbai', 2147483647),
('i@gmail.com', 'ii', 'Ishita', 'Laketown', 'Delhi', 4781546),
('p@gmail.com', 'pp', 'Puja', 'comilla', 'Dhaka', 98765),
('r@gmail.com', 'rr', 'Riya', 'Park-street', 'Canada', 4573289),
('s@gmail.com', 'ss', 'Swarna', 'Madhyamgram', 'kolkata', 53876123),
('suparna@gmail.com', '1234', 'suparna', 'hatibagan', 'kolkata', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `orderid` int(20) NOT NULL,
  `custid` varchar(200) NOT NULL,
  `totalAmount` double NOT NULL,
  `orderdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `transactionid` varchar(50) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderid`, `custid`, `totalAmount`, `orderdate`, `transactionid`) VALUES
(1, 'b@gmail.com', 1443, '2016-01-28 08:00:00', '4'),
(2, 'b@gmail.com', 888, '2016-01-28 08:00:00', '5'),
(3, 's@gmail.com', 500, '2016-02-02 08:00:00', '7'),
(4, 'i@gmail.com', 666, '2016-02-02 08:00:00', '8'),
(5, 'i@gmail.com', 777, '2016-02-02 08:00:00', '9'),
(6, 'a@gmail.com', 555, '2016-02-02 08:00:00', '10'),
(7, 'p@gmail.com', 500, '2016-02-02 08:00:00', '11'),
(8, 'suparna@gmail.com', 777, '2016-02-02 08:00:00', '12'),
(9, 'suparna@gmail.com', 888, '2016-02-02 08:00:00', '13'),
(10, 'i@gmail.com', 155600, '2016-02-03 08:00:00', '14'),
(11, 'i@gmail.com', 2442, '2016-04-23 07:00:00', '15'),
(12, 'i@gmail.com', 8800, '2016-04-24 07:00:00', '16'),
(13, 'i@gmail.com', 8000, '2016-05-03 07:00:00', '17'),
(14, 'p@gmail.com', 10800, '2016-05-04 07:00:00', '18'),
(15, 's@gmail.com', 107000, '2016-05-10 07:00:00', '19');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
  `orderdetailsid` int(20) NOT NULL AUTO_INCREMENT,
  `orderid` int(20) NOT NULL,
  `pcode` int(20) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(10) NOT NULL,
  PRIMARY KEY (`orderdetailsid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderdetailsid`, `orderid`, `pcode`, `price`, `quantity`) VALUES
(6, 1, 2, 777, 1),
(7, 1, 7, 666, 1),
(8, 2, 3, 888, 1),
(9, 3, 11, 555, 1),
(10, 4, 12, 666, 1),
(11, 3, 25, 500, 1),
(12, 4, 12, 666, 1),
(13, 5, 2, 777, 1),
(14, 6, 11, 555, 1),
(15, 7, 25, 500, 1),
(16, 8, 2, 777, 1),
(17, 9, 3, 888, 1),
(18, 10, 40, 150000, 1),
(19, 10, 52, 5600, 1),
(20, 11, 3, 888, 2),
(21, 11, 7, 666, 1),
(22, 12, 13, 1300, 1),
(23, 12, 28, 7500, 1),
(24, 13, 26, 7000, 1),
(25, 13, 33, 1000, 1),
(26, 14, 55, 5000, 2),
(27, 14, 76, 800, 1),
(28, 15, 26, 7000, 1),
(29, 15, 39, 100000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `transactionid` int(50) NOT NULL,
  `paymentmode` varchar(50) NOT NULL,
  `amountpaid` double NOT NULL,
  `cardno` varchar(20) NOT NULL,
  `cvv` varchar(20) NOT NULL,
  PRIMARY KEY (`transactionid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`transactionid`, `paymentmode`, `amountpaid`, `cardno`, `cvv`) VALUES
(1, 'Debit Card', 777, '78798', '432'),
(2, 'Debit Card', 1443, '7877887878787', '776'),
(3, 'Debit Card', 1443, '7877887878787', '776'),
(4, 'Debit Card', 1443, '7877887878787', '776'),
(5, 'Debit Card', 888, '3493849389', '33'),
(6, 'Debit Card', 555, '85434', '6487'),
(7, 'Debit Card', 500, '456', '8767'),
(8, 'Credit Card', 666, '5467', '097'),
(9, 'Debit Card', 777, '4369', '987'),
(10, 'Debit Card', 555, '9765', '456'),
(11, 'Debit Card', 500, '9876', '765'),
(12, 'Debit Card', 777, '435', '6744'),
(13, 'Debit Card', 888, '12378', ''),
(14, 'Debit Card', 155600, '345', '876'),
(15, 'Debit Card', 2442, '7654', '987'),
(16, 'Debit Card', 8800, '8745', '9765'),
(17, 'Credit Card', 8000, '47664', '876546'),
(18, 'Debit Card', 10800, '976544', '87543'),
(19, 'Debit Card', 107000, '648966', '67895');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pcode` int(20) NOT NULL AUTO_INCREMENT,
  `pname` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(100) NOT NULL,
  `catid` int(20) NOT NULL,
  `brandid` int(20) NOT NULL,
  `productpic_filename` varchar(500) NOT NULL,
  PRIMARY KEY (`pcode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pcode`, `pname`, `price`, `description`, `catid`, `brandid`, `productpic_filename`) VALUES
(2, 'formal shirt', 777, 'Pure cotton', 2, 1, '1440748999shirt1.jpg'),
(3, 'formal shirt', 888, 'Semi cotton', 2, 1, '1440751688shirt2.jpg'),
(7, 'formal shirt', 666, 'T-shirt', 2, 1, '1440752037gallery2.jpg'),
(12, 'sports shoe', 666, ' size are available', 1, 2, '1440753338reebok5.jpg'),
(13, 'sports shoe', 1300, ' size are available', 1, 2, '1440753403reebok4.jpg'),
(14, 'Formal trouser', 888, 'cotton', 3, 1, '1440784116trouser1.jpeg'),
(19, 'Formal trouser', 1100, 'Cotton', 3, 1, '1440786555trouser2.jpeg'),
(20, 'Formal trouser', 1200, 'Pure cotton', 3, 1, '1440786585trouser4.jpeg'),
(26, 'sharee', 7000, 'comfort ware', 4, 5, '1454483862wddrs1.jpg'),
(27, 'sharee', 8000, 'nice design', 4, 5, '1454484073wddrs2.jpg'),
(28, 'sharee', 7500, 'beautifully design', 4, 5, '1454484219wddrs8.jpg'),
(29, 'white gown', 6000, 'nice', 4, 5, '1454484346wddrs7.jpg'),
(32, 'sharee', 12000, 'two parts with dopatta', 4, 5, '1454484602wddrs3.jpg'),
(33, 'shoe', 1000, ' size are available', 1, 4, '1454484949boy4.jpg'),
(34, 'shoe', 999, ' size are available', 1, 4, '1454485120boy3.jpg'),
(35, 'shoe', 889, ' size are available', 1, 6, '1454485572boy1.jpg'),
(36, 'shoe', 1000, ' size are available', 1, 6, '1454485664boy5.jpg'),
(37, 'shoe', 1200, ' size are available', 1, 4, '1454485748boy2.jpg'),
(38, 'Ornament', 90000, 'Gold', 6, 9, '1454486001ar6.jpg'),
(39, 'ornament', 100000, 'Gold', 6, 9, '1454486115ar3.jpg'),
(40, 'ornament', 150000, 'Gold', 6, 9, '1454486227ar4.jpg'),
(41, 'ornament', 90999, 'south indian', 6, 9, '1454486488ar1.jpg'),
(42, 'ornament', 120000, 'Gold with diamond', 6, 9, '1454486701ar8.jpg'),
(43, 'ornament', 80000, 'Gold', 6, 9, '1454487011ar7.jpg'),
(44, 'make-up set', 5000, 'complete set of make-up', 7, 7, '1454487285lkcs4.jpg'),
(45, 'make-up set', 4000, 'complete set of make-up', 7, 7, '1454487371lkcs3.jpg'),
(46, 'make-up set', 5999, 'complete set', 7, 7, '1454487504lkcs1.jpg'),
(47, 'make-up set', 4000, 'complete set', 7, 8, '1454487685cs1.jpg'),
(48, 'make-up set', 6000, 'complete set', 7, 8, '1454487770orcs6.jpg'),
(49, 'make-up set', 5000, 'complete set', 7, 8, '1454487830orcs1.jpg'),
(50, 'Ring', 10000, 'wedding ring', 5, 10, '1454488015rng2.jpg'),
(51, 'ring', 4000, 'wedding ring', 5, 10, '1454488079rng7.jpg'),
(52, 'Ring', 5600, 'wedding ring', 5, 10, '1454488145rng4.jpg'),
(53, 'Ring', 7000, 'wedding ring', 5, 10, '1454488202rng1.jpg'),
(54, 'Ring', 7000, 'wedding ring', 5, 10, '1454488256rng3.jpg'),
(55, 'Ring', 5000, 'wedding ring', 5, 10, '1454488304rng5.jpg'),
(56, 'watch', 800, 'waterproof', 8, 11, '1454488905ld7.jpg'),
(57, 'watch', 999, 'waterproof', 8, 11, '1454488977ld4.jpg'),
(58, 'watch', 888, 'casual', 8, 11, '1454489051ld2.jpg'),
(59, 'watch', 1500, 'waterproof', 9, 12, '1454489171bw5.jpg'),
(60, 'watch', 2000, 'waterproof', 9, 12, '1454489245bw3.jpg'),
(61, 'watch', 1999, 'watweproof', 9, 12, '1454489294bw1.jpg'),
(62, 'watch', 899, 'casual', 9, 11, '1454489341bw4.jpg'),
(63, 'watch', 999, 'casual', 9, 11, '1454489373bw2.jpg'),
(64, 'watch', 1200, 'waterproof', 9, 11, '1454489444bw3.jpg'),
(65, 'watch', 500, 'casual', 8, 13, '1454489721ld1.jpg'),
(66, 'watch', 650, 'casual', 8, 13, '1454489767ld3.jpg'),
(67, 'watch', 850, 'waterproof', 8, 13, '1454489845ld5.jpg'),
(68, 'bangle', 60000, 'gold', 10, 14, '1454490133bndl1.jpg'),
(69, 'bangle', 79999, 'gold', 10, 14, '1454490235bndl2.jpeg'),
(70, 'bangle', 50000, 'gold', 10, 14, '1454490275bndl2.jpg'),
(71, 'bangle', 45000, 'gold', 10, 14, '1454490340bndl6.jpg'),
(72, 'bangle', 40000, 'gold', 10, 14, '1454490423bndl8.jpg'),
(73, 'bangle', 30000, 'gold', 10, 14, '1454490477bndl5.jpg'),
(74, 'bangle', 50000, 'gold', 10, 14, '1454490577bndl7.jpg'),
(75, 'shoe', 1000, 'long lasting,size-7', 11, 15, '1454521684Branded-ladies-footwear.jpg'),
(76, 'shoe', 800, 'well designed, size are available ', 11, 15, '1454521941ladies2.jpg'),
(78, 'shoe', 899, 'well designed, size are available \r\n', 11, 15, '1454522173ladies3.jpg'),
(79, 'shoe', 999, 'well designed, size are available ', 11, 16, '1454522325ladies4.jpg'),
(80, 'shoe', 1050, 'well designed, size are available ', 11, 16, '1454522504ladies5.jpg'),
(81, 'shoe', 1199, 'well designed, size are available ', 11, 16, '1454522693Branded-ladies-footwear.jpg'),
(82, 'sheroyani', 10000, 'well designed', 12, 17, '1454523684drsboy1.jpg'),
(83, 'sheroyani', 9000, 'well designed', 12, 17, '1454523796drsboy2.jpg'),
(84, 'sheroyani', 15000, 'well designed', 12, 17, '1454523957drsboy3.jpg'),
(85, 'sheroyani', 20000, 'well desined', 12, 18, '1454524026drsboy4.jpg'),
(86, 'sheroyani', 16000, 'well desined', 12, 18, '1454524070drsboy5.jpg'),
(87, 'sheroyani', 19000, 'well designed', 12, 18, '1454524115drsboy6.jpg'),
(88, 'sheroyani', 20000, 'well designed', 12, 18, '1454524178drsboy7.jpg'),
(89, 'sharee', 35000, 'well designed', 4, 18, '1454524410wddrs5.jpg'),
(90, 'sharee', 25000, 'well designed', 4, 18, '1454524470wddrs4.jpg'),
(92, 'sharee', 40000, 'well designed', 4, 18, '1454524761wddrs6.jpg'),
(93, 'pagry', 1000, 'comfortable', 13, 19, '1454525105pg2.jpg'),
(94, 'pagry', 3000, 'comfortable', 13, 19, '1454525162pg4.jpg'),
(95, 'pagry', 3500, 'comfortable', 13, 19, '1454525206pg1.jpg'),
(96, 'pagry', 2000, 'comfortable', 13, 19, '1454525256pg3.jpg'),
(97, 'pagry', 3000, 'comfortable', 13, 19, '1454525314pg5.jpg'),
(98, 'pagry', 3000, 'comfortable', 13, 19, '1454525376pg6.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
