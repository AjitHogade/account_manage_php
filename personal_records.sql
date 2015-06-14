-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2015 at 09:33 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `personal_records`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `c_sub` varchar(255) NOT NULL,
  `c_body` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `user_id`, `c_sub`, `c_body`) VALUES
(1, 0, 'Garbage collection guy miss behaves ', '<p>Garbage collection guy miss behaves&nbsp;</p>\r\n<p>Garbage collection guy miss behaves&nbsp;</p>'),
(2, 0, 'ghdgcdgchj', '<p>hdsagdysagchjdgchdahk</p>');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `fname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `flat_no` int(255) NOT NULL,
  `wing` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `flat_area` int(255) NOT NULL,
  `amt_calculated` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`fname`, `username`, `password`, `email`, `flat_no`, `wing`, `mobile_no`, `flat_area`, `amt_calculated`, `created_at`, `updated_at`) VALUES
('Swati Katre', 's_katre', '7815696ecbf1c96e6894b779456d330e', 'swati.260890@gmail.com', 202, 'A', '+919594026086', 580, 870, '2015-06-14 18:13:44', '0000-00-00 00:00:00'),
('Lipika Shah', 'l_shah', NULL, 'lipikashah88@gmail.com', 303, 'D', '+919004796886', 800, 1200, '2015-06-14 18:36:55', '0000-00-00 00:00:00'),
('Avinash Kaushik', 'avinash_k', NULL, 'avinashkaushik0@gmail.com', 302, 'D', '+919870037095', 800, 1200, '2015-06-14 18:40:04', '0000-00-00 00:00:00'),
('Ajit Vijay Hogade', 'aju_h', '7815696ecbf1c96e6894b779456d330e', 'aju.260890@gmail.com', 201, 'D', '+919004588982', 580, 1200, '2015-06-14 18:41:16', '0000-00-00 00:00:00'),
('Amit Vijay Hogade', 'amit_h', NULL, 'amit_hogade@rediffmail.com', 302, 'D', '+919967936888', 680, 1200, '2015-06-14 18:45:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_name`, `password`) VALUES
(1, 'Ajit', 'Ajit_Hogade', '409c2a98906715757459eed262204fb0'),
(2, 'Avinash', 'Avi_Kaushik', '3fca379b3f0e322b7b7967bfcfb948ad'),
(3, 'Lipika', 'Lipik_shah', 'f1e5b08e4609b7380a577594d95b9cde');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
