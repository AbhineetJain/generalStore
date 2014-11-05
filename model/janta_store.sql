-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2014 at 08:10 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `janta_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy_log`
--

CREATE TABLE IF NOT EXISTS `buy_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wholesaler_id` int(11) NOT NULL,
  `date_of_purchase` varchar(15) NOT NULL,
  `commodity` varchar(30) NOT NULL,
  `price` varchar(15) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `buy_log`
--

INSERT INTO `buy_log` (`id`, `wholesaler_id`, `date_of_purchase`, `commodity`, `price`, `quantity`) VALUES
(1, 1, '11/1/2014', 'Sasti Raand', '100', 6);

-- --------------------------------------------------------

--
-- Table structure for table `cleaners`
--

CREATE TABLE IF NOT EXISTS `cleaners` (
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commodities`
--

CREATE TABLE IF NOT EXISTS `commodities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `location_in_shop` varchar(30) NOT NULL,
  `qty_in_shop` int(11) NOT NULL,
  `qty_in_godown` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `confectioneries`
--

CREATE TABLE IF NOT EXISTS `confectioneries` (
  `commodity_id` int(11) NOT NULL,
  `batch_no` varchar(15) NOT NULL,
  `date_of_expiry` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_of_joining` varchar(15) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `number_of_leaves` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `salary`, `address`, `date_of_joining`, `contact`, `number_of_leaves`) VALUES
(2, 'Saksham Aggarwal', '10000', 'E-117', '1/11/2014', '7569156769', 0),
(3, 'Abhineet Jain', '1000', 'E-128', '5/11/2014', '100', 0);

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE IF NOT EXISTS `managers` (
  `employee_id` int(11) NOT NULL,
  `educational_qualifications` varchar(50) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`employee_id`),
  UNIQUE KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`employee_id`, `educational_qualifications`, `user_id`, `password`) VALUES
(2, 'BTech CSE 2nd Year', 'saksham', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `miscellaneous`
--

CREATE TABLE IF NOT EXISTS `miscellaneous` (
  `commodity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salespersons`
--

CREATE TABLE IF NOT EXISTS `salespersons` (
  `employee_id` int(11) NOT NULL,
  `educational_qualifications` varchar(50) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`employee_id`),
  UNIQUE KEY `employee_id_2` (`employee_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sell_log`
--

CREATE TABLE IF NOT EXISTS `sell_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `discount` varchar(10) NOT NULL,
  `billing_amount` varchar(15) NOT NULL,
  `timestamp` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sell_log`
--

INSERT INTO `sell_log` (`id`, `discount`, `billing_amount`, `timestamp`) VALUES
(1, '10', '504', '2014-11-05 18:46:50'),
(2, '10', '504', '2014-11-05 18:48:07');

-- --------------------------------------------------------

--
-- Table structure for table `sold_items`
--

CREATE TABLE IF NOT EXISTS `sold_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sell_log_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_price` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sold_items`
--

INSERT INTO `sold_items` (`id`, `sell_log_id`, `item_id`, `qty`, `total_price`) VALUES
(1, 1, 0, 5, '100'),
(2, 1, 0, 3, '20'),
(3, 2, 0, 5, '100'),
(4, 2, 0, 3, '20');

-- --------------------------------------------------------

--
-- Table structure for table `stationary`
--

CREATE TABLE IF NOT EXISTS `stationary` (
  `commodity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `toiletries`
--

CREATE TABLE IF NOT EXISTS `toiletries` (
  `commodity_id` int(11) NOT NULL,
  `batch_no` varchar(15) NOT NULL,
  `date_of_expiry` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wholesalers`
--

CREATE TABLE IF NOT EXISTS `wholesalers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `transportation_cost` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `wholesalers`
--

INSERT INTO `wholesalers` (`id`, `name`, `transportation_cost`) VALUES
(1, 'AbhineetRandiKhaana', '5.5'),
(2, 'Nirmal Baba', '10'),
(4, 'Reezig Inc.', '1.25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
