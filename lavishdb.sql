-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2018 at 09:45 PM
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
('2', 'ahmed', '123'),
('3', 'Maha.Riad', '123'),
('4', 'Amira.Gamal', '123'),
('5', 'Mohamed.Diab', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `c_user_id` varchar(20) NOT NULL,
  `p_id` varchar(20) NOT NULL,
  `quantity` int(2) NOT NULL,
  PRIMARY KEY (`c_user_id`,`p_id`),
  KEY `cart_ibfk_2` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `i_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `i_url` varchar(200) NOT NULL,
  `fk_p_id` varchar(11) NOT NULL,
  PRIMARY KEY (`i_id`),
  UNIQUE KEY `i_id` (`i_id`),
  KEY `pfk` (`fk_p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=143 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`i_id`, `i_url`, `fk_p_id`) VALUES
(1, 'images/metal_stila.jpg', 'es_1'),
(2, 'images/metal_stila.jpg', 'es_1'),
(3, 'images/perfect_stila.jpg', 'es_3'),
(4, 'images/perfect_stila.jpg', 'es_3'),
(5, 'images/window_stila.jpg', 'es_2'),
(6, 'images/nars_vss.jpg', 'es_4'),
(7, 'images/nars_eyepaint.jpg', 'es_5'),
(47, 'images/aa4.jpg', 'stila_2'),
(48, 'images/aa5.jpg', 'stila_2'),
(49, 'images/aa6.jpg', 'stila_2'),
(104, 'images/aa1.jpg', 'stila_1'),
(105, 'images/aa2.jpg', 'stila_1'),
(106, 'images/aa3.jpg', 'stila_1'),
(134, 'images/ab4.jpg', 'stila_4'),
(135, 'images/ab5.jpg', 'stila_4'),
(136, 'images/ab6.jpg', 'stila_4'),
(137, 'images/ab1.jpg', 'stila_3'),
(138, 'images/ab2.jpg', 'stila_3'),
(139, 'images/ab3.jpg', 'stila_3'),
(140, 'images/ab1.jpg', 'stila_3'),
(141, 'images/ab2.jpg', 'stila_3'),
(142, 'images/ab3.jpg', 'stila_3');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`email`) VALUES
('ahmed@yahoo.com'),
('ragy_desigdadn@ta.com'),
('ragy_design@ta.com');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `O_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_U_id` varchar(20) NOT NULL,
  `O_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `O_status` varchar(10) NOT NULL,
  PRIMARY KEY (`O_id`),
  KEY `fk_U_id` (`fk_U_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`O_id`, `fk_U_id`, `O_date`, `O_status`) VALUES
(1, '1', '2018-04-09 22:00:00', 'Confirmed');

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
  `price` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_type`, `p_brand`, `p_quantity`, `p_description`, `price`) VALUES
('es_1', 'Matte n'' metal', 'Eyes', 'Stila', 5, 'Create eye-catching color combos with just the right mix of matte and shimmer. Featuring six modern matte and six mega metallic shades in range of pink rose golds, cool-toned pewters and golden bronzes that flatter all skin tones, it''s the one color palette you need to design eyes that truly dazzle.', 890),
('es_2', 'Window Shadow ', 'Eyes', 'Stila', 1, 'This year, Stila celebrates 20 years of infinite style. Create endless looks with our new Eyes Are The Window™ shadow palettes. Inspired by the spiritual notion that true beauty is revealed from within, each palette is curated with 12 luxurious eye shadows to illuminate your inner beauty. Encased in exquisite, jewelry-inspired compacts-a precious mix of rose, yellow and white golds-the shadows will inspire intrigue and delight.', 670),
('es_3', 'Perfect Me, Perfect Hue', 'Eyes', 'Stila', 3, 'The Perfect Hue for the Perfect You!\r\n\r\nEasy to use eye and cheek palettes filled with neutral hues that are just perfect…for you!  Long-wearing, one swipe eye and cheek colors expertly curated to work with your skin tone to create the perfect neutral look.  Choose from four distinct palettes that house five eyeshadows and two blushes in matte, shimmer and pearl finishes; customizable to create the look or looks you want. ', 865),
('es_4', 'Velvet Shadow Stick', 'Eyes', 'Nars', 2, 'A CREAMY, BLENDABLE EYESHADOW IN A CONVENIENT, PORTABLE STICK.', 525),
('es_5', 'Eye Paint', 'Eyes', 'Nars', 5, 'HIGH-IMPACT PIGMENTS IN AN INNOVATIVE SILKY, WEIGHTLESS GEL FORMULA. CAN BE USED AS AN EYELINER OR EYESHADOW. ', 500),
('stila_1', 'Shimmer - Stay All DayÂ® Liquid Lipstick', 'Lips', 'Stila', 10, 'Stilaâ€™s iconic Stay All DayÂ® Liquid Lipstick gets a makeover! NEW Stay All DayÂ® Shimmer Liquid Lipstick has the same comfortable, all day staying power as the original matte formula, but now in a subtle metallic, shimmering finish! ', 390),
('stila_2', 'Stay All DayÂ® Lip Liner', 'Lips', 'Stila', 20, 'Contour your most kissable lip. Stilaâ€™s new long-lasting, color-full lip liner shapes, lines and defines to perfection. The creamy formula glides on to deliver a semi-matte finish that wonâ€™t transfer or budge. The perfect companion to our STAY ALL DAYÂ® LIQUID LIPSTICK and MATTEâ€™IFICENT LIPSTICK. In a range of wine-inspired shades. ', 160),
('stila_3', 'Heaven''s Hue Highlighting Kit', 'Face', 'Stila', 10, 'Get the Glitter & Glow Highlighting Kit featuring all 5 shades of water-infused, glittering highlighters. This limited-edition kit is exclusive to Stila''s official site.', 2566),
('stila_4', 'One Step Prime', 'Face', 'Stila', 50, 'Our innovative, swirled, helix serum primer combines a crystal clear base with the perfect balance of skin-conditioning silicones. It fills in pores and fine lines, creating a smooth canvas that allows your foundation to apply effortlessly and enhances the wear time.  ', 640);

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE IF NOT EXISTS `product_order` (
  `fk_p_id` varchar(20) NOT NULL,
  `fk_o_id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`fk_p_id`,`fk_o_id`),
  KEY `product_order_ibfk_1` (`fk_o_id`)
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
  `review_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`r_id`),
  UNIQUE KEY `fk_u_id` (`fk_u_id`),
  KEY `fk_p_id` (`fk_p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`r_id`, `description`, `rating`, `confirmed`, `fk_p_id`, `fk_u_id`, `review_date`) VALUES
(5, 'asd', 4, 0, 'es_2', '1', '2018-04-20 15:31:31');

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
('2', 'yasmine123', '123', 'Yasmine', 'Mohamed', '1994-04-03', 'yasmine53213@yahoo.com', 'ELHaram', 'ElHaram', 100213322),
('3', 'ahmedismail13', '123', 'Ahmed', 'Ismail', '1997-03-13', 'ahmed150842@bue.edu.eg', '34 Hegaz street', '34 Hegaz Street', 1111147691),
('4', 'root', '', 'root', 'root', '1990-01-01', 'root@root.com', 'root', 'root', 114995678);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`c_user_id`) REFERENCES `user` (`U_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `pfk` FOREIGN KEY (`fk_p_id`) REFERENCES `product` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `ufk` FOREIGN KEY (`fk_U_id`) REFERENCES `user` (`U_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `product_order_ibfk_1` FOREIGN KEY (`fk_o_id`) REFERENCES `order` (`O_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_order_ibfk_2` FOREIGN KEY (`fk_p_id`) REFERENCES `product` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`fk_u_id`) REFERENCES `user` (`U_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`fk_p_id`) REFERENCES `product` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
