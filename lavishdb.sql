-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2018 at 10:14 PM
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

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`c_user_id`, `p_id`, `quantity`) VALUES
('1', 'es_2', 1);

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

--
-- Dumping data for table `colour`
--

INSERT INTO `colour` (`c_id`, `fk_p_id`, `c_name`) VALUES
('p1', 'es_3', ' Alluring '),
('p2', 'es_1', 'Vintage'),
('p3', 'es_1', 'Velvet'),
('w1', 'es_3', 'Breathtaking ');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `i_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `i_url` varchar(200) NOT NULL,
  `fk_p_id` varchar(11) NOT NULL,
  `fk_c_id` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`i_id`),
  UNIQUE KEY `i_id` (`i_id`),
  KEY `pfk` (`fk_p_id`),
  KEY `fk_col` (`fk_c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`i_id`, `i_url`, `fk_p_id`, `fk_c_id`) VALUES
(1, 'images/metal_stila.jpg', 'es_1', 'p2'),
(2, 'images/metal_stila.jpg', 'es_1', 'p3'),
(3, 'images/perfect_stila.jpg', 'es_3', 'p1'),
(4, 'images/perfect_stila.jpg', 'es_3', 'w1'),
(5, 'images/window_stila.jpg', 'es_2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `O_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_U_id` varchar(20) NOT NULL,
  `O_date` date NOT NULL,
  `O_status` varchar(10) NOT NULL,
  PRIMARY KEY (`O_id`),
  KEY `fk_U_id` (`fk_U_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`O_id`, `fk_U_id`, `O_date`, `O_status`) VALUES
(1, '1', '2018-04-10', 'Confirmed');

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

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_type`, `p_brand`, `p_quantity`, `p_description`) VALUES
('es_1', 'Matte n'' metal', ' Eye Shadow', 'Stila', 5, 'Create eye-catching color combos with just the right mix of matte and shimmer. Featuring six modern matte and six mega metallic shades in range of pink rose golds, cool-toned pewters and golden bronzes that flatter all skin tones, it''s the one color palette you need to design eyes that truly dazzle.'),
('es_2', 'Window Shadow ', 'Eye Shadow', 'Stila', 1, 'This year, Stila celebrates 20 years of infinite style. Create endless looks with our new Eyes Are The Window™ shadow palettes. Inspired by the spiritual notion that true beauty is revealed from within, each palette is curated with 12 luxurious eye shadows to illuminate your inner beauty. Encased in exquisite, jewelry-inspired compacts-a precious mix of rose, yellow and white golds-the shadows will inspire intrigue and delight.'),
('es_3', 'Perfect Me, Perfect Hue', 'Eye Shadow', 'Stila', 3, 'The Perfect Hue for the Perfect You!\r\n\r\nEasy to use eye and cheek palettes filled with neutral hues that are just perfect…for you!  Long-wearing, one swipe eye and cheek colors expertly curated to work with your skin tone to create the perfect neutral look.  Choose from four distinct palettes that house five eyeshadows and two blushes in matte, shimmer and pearl finishes; customizable to create the look or looks you want. ');

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

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`fk_p_id`, `fk_o_id`, `quantity`) VALUES
('es_1', 1, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`r_id`, `description`, `rating`, `confirmed`, `fk_p_id`, `fk_u_id`) VALUES
(1, 'Very good product!', 4, 1, 'es_1', '1');

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

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_id`, `U_username`, `U_password`, `Fname`, `Lname`, `DOB`, `Email`, `D_Address`, `B_Address`, `Mobile_number`) VALUES
('1', 'ragy96', '123', 'Raggi', 'Hosni', '1996-08-18', 'ragy_design@yahoo.com', '21 Ammar Ibn Yasser', '21 Ammar Ibn Yasser', 1001042218),
('2', 'yasmine123', '123', 'Yasmine', 'Mohamed', '1994-04-03', 'yasmine53213@yahoo.com', 'ELHaram', 'ElHaram', 100213322);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`c_user_id`) REFERENCES `user` (`U_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `colour`
--
ALTER TABLE `colour`
  ADD CONSTRAINT `colour_ibfk_1` FOREIGN KEY (`fk_p_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `c_id` FOREIGN KEY (`fk_c_id`) REFERENCES `colour` (`c_id`),
  ADD CONSTRAINT `pfk` FOREIGN KEY (`fk_p_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `ufk` FOREIGN KEY (`fk_U_id`) REFERENCES `user` (`U_id`);

--
-- Constraints for table `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `product_order_ibfk_1` FOREIGN KEY (`fk_o_id`) REFERENCES `order` (`O_id`),
  ADD CONSTRAINT `product_order_ibfk_2` FOREIGN KEY (`fk_p_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`fk_u_id`) REFERENCES `user` (`U_id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`fk_p_id`) REFERENCES `product` (`p_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
