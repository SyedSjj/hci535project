-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2014 at 05:42 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hcigroup_fbp`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(5) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(20) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Rent'),
(2, 'Food'),
(3, 'Health'),
(4, 'Education'),
(5, 'Gas');

-- --------------------------------------------------------

--
-- Table structure for table `cst_category`
--

CREATE TABLE IF NOT EXISTS `cst_category` (
  `cst_category_id` int(5) NOT NULL AUTO_INCREMENT,
  `cst_category_name` varchar(25) NOT NULL,
  `user_id` int(5) NOT NULL,
  PRIMARY KEY (`cst_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cst_category`
--

INSERT INTO `cst_category` (`cst_category_id`, `cst_category_name`, `user_id`) VALUES
(1, 'test', 1),
(2, 'testt', 1),
(3, 'damn', 1),
(4, 'xa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE IF NOT EXISTS `expense` (
  `expense_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `financial_id` int(3) NOT NULL,
  `month_id` int(3) NOT NULL,
  `expense_amount` int(10) NOT NULL,
  `expense_date` varchar(20) NOT NULL,
  `category_id` int(5) NOT NULL,
  `expense_description` varchar(500) NOT NULL,
  `expense_file` varchar(100) NOT NULL,
  PRIMARY KEY (`expense_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`expense_id`, `user_id`, `financial_id`, `month_id`, `expense_amount`, `expense_date`, `category_id`, `expense_description`, `expense_file`) VALUES
(1, 1, 1, 1, 500, '0000-00-00', 1, '', ''),
(2, 1, 1, 2, 533, '11/25/2014', 3, '', ''),
(3, 1, 1, 1, 0, '12/01/2014', 1, '', ''),
(4, 1, 1, 1, 0, '12/03/2014', 4, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `financial_year`
--

CREATE TABLE IF NOT EXISTS `financial_year` (
  `financial_id` int(3) NOT NULL DEFAULT '0',
  `financial_year` varchar(10) NOT NULL,
  PRIMARY KEY (`financial_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial_year`
--

INSERT INTO `financial_year` (`financial_id`, `financial_year`) VALUES
(1, '2010-2011'),
(2, '2011-2012'),
(3, '2012-2013'),
(4, '2013-2014'),
(5, '2014-2015'),
(6, '2015-2016'),
(7, '2016-2017');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE IF NOT EXISTS `income` (
  `income_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `financial_id` int(5) NOT NULL,
  `month_id` int(5) NOT NULL,
  `income_amount` int(10) NOT NULL,
  PRIMARY KEY (`income_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`income_id`, `user_id`, `financial_id`, `month_id`, `income_amount`) VALUES
(1, 1, 1, 1, 2500);

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE IF NOT EXISTS `month` (
  `month_id` int(3) NOT NULL AUTO_INCREMENT,
  `month_title` varchar(10) NOT NULL,
  PRIMARY KEY (`month_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`month_id`, `month_title`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_typeid` int(3) NOT NULL DEFAULT '1',
  `user_name` varchar(10) NOT NULL,
  `user_firstname` varchar(15) NOT NULL,
  `user_lastname` varchar(10) NOT NULL,
  `user_email` varchar(1024) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_typeid`, `user_name`, `user_firstname`, `user_lastname`, `user_email`, `user_password`) VALUES
(1, 1, 'jaradehr1', 'Riad', 'Jaradeh', 'riadjerade89@hotmail.com', '1c0b76fce779f78f51be339c49445c49'),
(2, 1, 'sajjad', 'Sayyed', 'Sajjad', 'sajjad@mail.edu', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 1, 'parekh', 'pritesh', 'parekh', 'parekh@parekh.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `user_typeid` int(3) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(10) NOT NULL,
  PRIMARY KEY (`user_typeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_typeid`, `user_type`) VALUES
(1, 'Primary'),
(2, 'Secondary'),
(3, 'Tertiary');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
