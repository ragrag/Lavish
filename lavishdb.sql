-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2018 at 06:55 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lavishdb`
--
CREATE DATABASE IF NOT EXISTS `lavishdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lavishdb`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `A_id` text NOT NULL,
  `A_username` text NOT NULL,
  `A_password` text NOT NULL,
  PRIMARY KEY (`A_id`(6)),
  UNIQUE KEY `A_id` (`A_id`(7))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_id`, `A_username`, `A_password`) VALUES
('1', 'raggi', '123'),
('2', 'ahmed', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `c_user_id` varchar(20) NOT NULL,
  `p_id` varchar(20) NOT NULL,
  `quantity` int(2) NOT NULL,
  PRIMARY KEY (`c_user_id`,`p_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `colour`
--

CREATE TABLE IF NOT EXISTS `colour` (
  `c_id` varchar(30) NOT NULL,
  `fk_p_id` varchar(20) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  PRIMARY KEY (`c_id`),
  KEY `fk_p_id` (`fk_p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `i_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `i_url` varchar(200) NOT NULL,
  `fk_p_id` int(11) NOT NULL,
  `fk_c_id` int(11) NOT NULL,
  PRIMARY KEY (`i_id`),
  UNIQUE KEY `i_url` (`i_url`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `O_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_U_id` varchar(20) NOT NULL,
  `O_date` date NOT NULL,
  `O_status` varchar(10) NOT NULL,
  PRIMARY KEY (`O_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `p_id` varchar(20) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_type` varchar(15) NOT NULL,
  `p_brand` varchar(15) NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `p_description` varchar(700) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE IF NOT EXISTS `product_order` (
  `fk_p_id` varchar(20) NOT NULL,
  `fk_o_id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`fk_p_id`,`fk_o_id`),
  KEY `fk_o_id` (`fk_o_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `r_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `description` varchar(1000) NOT NULL,
  `rating` int(11) NOT NULL,
  `confirmed` tinyint(1) NOT NULL,
  `fk_p_id` varchar(20) NOT NULL,
  `fk_u_id` varchar(20) NOT NULL,
  PRIMARY KEY (`r_id`),
  UNIQUE KEY `fk_u_id` (`fk_u_id`),
  KEY `fk_p_id` (`fk_p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `U_id` varchar(20) NOT NULL,
  `U_username` varchar(20) NOT NULL,
  `U_password` varchar(20) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(40) NOT NULL,
  `D_Address` varchar(150) NOT NULL,
  `B_Address` varchar(150) NOT NULL,
  `Mobile_number` int(11) NOT NULL,
  PRIMARY KEY (`U_id`),
  UNIQUE KEY `U_username` (`U_username`,`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE IF NOT EXISTS `user_order` (
  `fk_u_id` varchar(20) NOT NULL,
  `fk_o_id` bigint(20) NOT NULL,
  PRIMARY KEY (`fk_u_id`,`fk_o_id`),
  KEY `fk_o_id` (`fk_o_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`),
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`c_user_id`) REFERENCES `user` (`U_id`);

--
-- Constraints for table `colour`
--
ALTER TABLE `colour`
  ADD CONSTRAINT `colour_ibfk_1` FOREIGN KEY (`fk_p_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `product_order_ibfk_2` FOREIGN KEY (`fk_p_id`) REFERENCES `product` (`p_id`),
  ADD CONSTRAINT `product_order_ibfk_1` FOREIGN KEY (`fk_o_id`) REFERENCES `order` (`O_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`fk_p_id`) REFERENCES `product` (`p_id`),
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`fk_u_id`) REFERENCES `user` (`U_id`);

--
-- Constraints for table `user_order`
--
ALTER TABLE `user_order`
  ADD CONSTRAINT `user_order_ibfk_2` FOREIGN KEY (`fk_o_id`) REFERENCES `order` (`O_id`),
  ADD CONSTRAINT `user_order_ibfk_1` FOREIGN KEY (`fk_u_id`) REFERENCES `user` (`U_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
