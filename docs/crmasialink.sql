-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2017 at 03:28 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crmasialink`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` int(11) NOT NULL,
  `end_date` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `pricing_array` text COLLATE utf8_unicode_ci NOT NULL,
  `total_price` int(11) NOT NULL,
  `staff_create_id` int(11) NOT NULL,
  `status` enum('not_start','processing','end','') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `id_card` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `career` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `workplace` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('male','female','other','') CHARACTER SET latin1 NOT NULL,
  `birthday` int(11) NOT NULL,
  `marital_status` enum('single','married','divorced','separated','widow','widower','engaged') COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('new','old','lead','caring','reject') CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `staff_create_id` int(11) NOT NULL,
  `createdate` int(11) NOT NULL,
  `customer_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qrcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstname`, `lastname`, `avatar`, `alias`, `phone`, `id_card`, `address`, `address2`, `career`, `workplace`, `email`, `gender`, `birthday`, `marital_status`, `note`, `type`, `password`, `staff_create_id`, `createdate`, `customer_code`, `qrcode`) VALUES
(8, 'Hoang Viet', 'Ta', '', '8ef061a76a0a9834a3c6004fe6b785b2', '0904683491', '012767566', 'Thanh Xuan Bac - Thanh Xuan', 'Ha Noi', 'IT', 'Ha Noi', 'hoangviet11088@gmail.com', 'male', 591663600, 'single', '', 'new', '', 2, 1489994836, 'c9f0f895fb98ab9159f51fd0297e236d', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers_campaign`
--

CREATE TABLE `customers_campaign` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_campaign` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `implement_date` int(11) NOT NULL,
  `feedback` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers_media`
--

CREATE TABLE `customers_media` (
  `id` int(11) DEFAULT NULL,
  `id_customer` int(11) NOT NULL,
  `media` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers_product`
--

CREATE TABLE `customers_product` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `start_date` int(11) NOT NULL,
  `expire_date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers_product`
--

INSERT INTO `customers_product` (`id`, `id_customer`, `id_product`, `start_date`, `expire_date`) VALUES
(1, 1, 2, 1479530772, NULL),
(2, 1, 4, 1479530772, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `id_user_from` int(11) NOT NULL,
  `id_user_to` int(11) NOT NULL,
  `status` enum('new','pending','read') COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `order_id` int(11) NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `id_user_from`, `id_user_to`, `status`, `content`, `order_id`, `datetime`) VALUES
(1, 2, 1, 'read', 'gán đơn hàng cho bạn.', 8, 0),
(2, 2, 1, 'read', 'gán đơn hàng cho bạn.', 10, 0),
(3, 2, 1, 'read', 'gán đơn hàng cho bạn.', 8, 0),
(4, 2, 1, 'read', 'gán đơn hàng cho bạn.', 9, 0),
(5, 2, 1, 'read', 'tạo đơn hàng mới.', 11, 0),
(6, 2, 1, 'read', 'tạo đơn hàng mới.', 12, 0),
(7, 2, 1, 'read', 'gán đơn hàng cho bạn.', 12, 0),
(8, 2, 1, 'new', 'tạo đơn hàng mới.', 13, 0),
(9, 2, 4, 'new', 'tạo đơn hàng mới.', 13, 0),
(10, 2, 1, 'new', 'gán đơn hàng cho bạn.', 13, 0),
(11, 2, 1, 'new', 'gán đơn hàng cho bạn.', 8, 0),
(12, 2, 1, 'new', 'tạo đơn hàng mới.', 14, 0),
(13, 2, 4, 'new', 'tạo đơn hàng mới.', 14, 0),
(14, 2, 1, 'new', 'gán đơn hàng cho bạn.', 8, 0),
(15, 2, 1, 'new', 'gán đơn hàng cho bạn.', 9, 0),
(16, 2, 1, 'new', 'tạo đơn hàng mới.', 15, 0),
(17, 2, 4, 'new', 'tạo đơn hàng mới.', 15, 0),
(18, 2, 1, 'new', 'gán đơn hàng cho bạn.', 13, 0),
(19, 2, 1, 'new', 'gán đơn hàng cho bạn.', 10, 0),
(20, 2, 4, 'new', 'gán đơn hàng cho bạn.', 8, 0),
(21, 2, 1, 'new', 'gán đơn hàng cho bạn.', 8, 0),
(22, 2, 4, 'new', 'gán đơn hàng cho bạn.', 8, 0),
(23, 2, 1, 'new', 'tạo đơn hàng mới.', 16, 0),
(24, 2, 4, 'new', 'tạo đơn hàng mới.', 16, 0),
(25, 2, 4, 'new', 'gán đơn hàng cho bạn.', 16, 0),
(26, 2, 1, 'new', 'tạo đơn hàng mới.', 17, 0),
(27, 2, 4, 'new', 'tạo đơn hàng mới.', 17, 0),
(28, 2, 1, 'new', 'tạo đơn hàng mới.', 1, 0),
(29, 2, 4, 'new', 'tạo đơn hàng mới.', 1, 0),
(30, 2, 1, 'new', 'gán đơn hàng cho bạn.', 1, 0),
(31, 2, 1, 'new', 'gán đơn hàng cho bạn.', 1, 0),
(32, 2, 1, 'new', 'gán đơn hàng cho bạn.', 1, 0),
(33, 2, 4, 'new', 'gán đơn hàng cho bạn.', 1, 0),
(34, 2, 1, 'new', 'tạo đơn hàng mới.', 1, 0),
(35, 2, 4, 'new', 'tạo đơn hàng mới.', 1, 0),
(36, 2, 1, 'new', 'gán đơn hàng cho bạn.', 1, 0),
(37, 2, 1, 'new', 'tạo đơn hàng mới.', 2, 0),
(38, 2, 4, 'new', 'tạo đơn hàng mới.', 2, 0),
(39, 2, 4, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(40, 2, 1, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(41, 2, 4, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(42, 2, 4, 'new', 'gán đơn hàng cho bạn.', 1, 0),
(43, 2, 1, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(44, 2, 1, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(45, 2, 1, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(46, 2, 1, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(47, 2, 1, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(48, 2, 1, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(49, 2, 1, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(50, 2, 1, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(51, 2, 4, 'new', 'gán đơn hàng cho bạn.', 1, 0),
(52, 2, 4, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(53, 2, 1, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(54, 2, 4, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(55, 2, 1, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(56, 2, 1, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(57, 2, 4, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(58, 2, 1, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(59, 2, 1, 'new', 'gán đơn hàng cho bạn.', 1, 0),
(60, 2, 4, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(61, 2, 4, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(62, 2, 4, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(63, 2, 4, 'new', 'gán đơn hàng cho bạn.', 1, 0),
(64, 2, 1, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(65, 2, 1, 'new', 'gán đơn hàng cho bạn.', 1, 0),
(66, 2, 4, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(67, 2, 1, 'new', 'gán đơn hàng cho bạn.', 1, 0),
(68, 2, 4, 'new', 'gán đơn hàng cho bạn.', 1, 0),
(69, 2, 4, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(70, 2, 1, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(71, 2, 4, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(72, 2, 1, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(73, 2, 1, 'new', 'gán đơn hàng cho bạn.', 1, 0),
(74, 2, 4, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(75, 2, 1, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(76, 2, 4, 'new', 'gán đơn hàng cho bạn.', 2, 0),
(77, 2, 1, 'new', 'tạo đơn hàng mới.', 3, 0),
(78, 2, 2, 'read', 'tạo đơn hàng mới.', 3, 0),
(79, 2, 4, 'new', 'tạo đơn hàng mới.', 3, 0),
(80, 2, 1, 'new', 'tạo đơn hàng mới.', 4, 0),
(81, 2, 2, 'read', 'tạo đơn hàng mới.', 4, 0),
(82, 2, 4, 'new', 'tạo đơn hàng mới.', 4, 0),
(83, 2, 1, 'new', 'tạo đơn hàng mới.', 5, 0),
(84, 2, 4, 'new', 'tạo đơn hàng mới.', 5, 0),
(85, 2, 1, 'new', 'tạo đơn hàng mới.', 6, 0),
(86, 2, 4, 'new', 'tạo đơn hàng mới.', 6, 0),
(87, 2, 1, 'new', 'tạo đơn hàng mới.', 7, 0),
(88, 2, 4, 'new', 'tạo đơn hàng mới.', 7, 0),
(89, 2, 1, 'new', 'tạo đơn hàng mới.', 7, 0),
(90, 2, 4, 'new', 'tạo đơn hàng mới.', 7, 0),
(91, 2, 1, 'new', 'tạo đơn hàng mới.', 8, 0),
(92, 2, 4, 'new', 'tạo đơn hàng mới.', 8, 0),
(93, 2, 1, 'new', 'tạo đơn hàng mới.', 9, 0),
(94, 2, 4, 'new', 'tạo đơn hàng mới.', 9, 0),
(95, 2, 1, 'new', 'tạo đơn hàng mới.', 10, 0),
(96, 2, 4, 'new', 'tạo đơn hàng mới.', 10, 0),
(97, 2, 1, 'new', 'tạo đơn hàng mới.', 11, 0),
(98, 2, 4, 'new', 'tạo đơn hàng mới.', 11, 0),
(99, 2, 1, 'new', 'tạo đơn hàng mới.', 12, 0),
(100, 2, 4, 'new', 'tạo đơn hàng mới.', 12, 0),
(101, 2, 1, 'new', 'tạo đơn hàng mới.', 13, 0),
(102, 2, 4, 'new', 'tạo đơn hàng mới.', 13, 0),
(103, 2, 1, 'new', 'tạo đơn hàng mới.', 14, 0),
(104, 2, 4, 'new', 'tạo đơn hàng mới.', 14, 0),
(105, 2, 1, 'new', 'tạo đơn hàng mới.', 15, 0),
(106, 2, 4, 'new', 'tạo đơn hàng mới.', 15, 0),
(107, 2, 1, 'new', 'tạo đơn hàng mới.', 16, 0),
(108, 2, 4, 'new', 'tạo đơn hàng mới.', 16, 0),
(109, 2, 1, 'new', 'tạo đơn hàng mới.', 17, 0),
(110, 2, 4, 'new', 'tạo đơn hàng mới.', 17, 0),
(111, 2, 1, 'new', 'tạo đơn hàng mới.', 7, 0),
(112, 2, 4, 'new', 'tạo đơn hàng mới.', 7, 0),
(113, 2, 1, 'new', 'tạo đơn hàng mới.', 8, 0),
(114, 2, 4, 'new', 'tạo đơn hàng mới.', 8, 0),
(115, 2, 1, 'new', 'tạo đơn hàng mới.', 9, 0),
(116, 2, 4, 'new', 'tạo đơn hàng mới.', 9, 0),
(117, 2, 1, 'new', 'tạo đơn hàng mới.', 10, 0),
(118, 2, 4, 'new', 'tạo đơn hàng mới.', 10, 0),
(119, 2, 1, 'new', 'tạo đơn hàng mới.', 11, 0),
(120, 2, 4, 'new', 'tạo đơn hàng mới.', 11, 0),
(121, 2, 1, 'new', 'tạo đơn hàng mới.', 12, 0),
(122, 2, 4, 'new', 'tạo đơn hàng mới.', 12, 0),
(123, 2, 1, 'new', 'tạo đơn hàng mới.', 13, 0),
(124, 2, 4, 'new', 'tạo đơn hàng mới.', 13, 0),
(125, 2, 1, 'new', 'tạo đơn hàng mới.', 14, 0),
(126, 2, 4, 'new', 'tạo đơn hàng mới.', 14, 0),
(127, 2, 1, 'new', 'tạo đơn hàng mới.', 15, 0),
(128, 2, 4, 'new', 'tạo đơn hàng mới.', 15, 0),
(129, 2, 1, 'new', 'tạo đơn hàng mới.', 16, 0),
(130, 2, 4, 'new', 'tạo đơn hàng mới.', 16, 0),
(131, 2, 1, 'new', 'tạo đơn hàng mới.', 17, 0),
(132, 2, 4, 'new', 'tạo đơn hàng mới.', 17, 0),
(133, 2, 1, 'new', 'tạo đơn hàng mới.', 18, 0),
(134, 2, 4, 'new', 'tạo đơn hàng mới.', 18, 0),
(135, 2, 1, 'new', 'gán đơn hàng cho bạn.', 18, 0),
(136, 2, 1, 'new', 'gán đơn hàng cho bạn.', 18, 0),
(137, 2, 4, 'new', 'gán đơn hàng cho bạn.', 6, 0),
(138, 2, 6, 'new', 'báo hoãn đơn hàng tới bạn.', 6, 0),
(139, 2, 6, 'new', 'báo hoãn đơn hàng tới bạn.', 6, 0),
(140, 2, 1, 'new', 'gán đơn hàng cho bạn.', 18, 0),
(141, 2, 4, 'new', 'gán đơn hàng cho bạn.', 6, 0),
(142, 2, 18, 'new', 'báo hoãn đơn hàng tới bạn.', 18, 0),
(143, 2, 18, 'new', 'báo hoãn đơn hàng tới bạn.', 18, 0),
(144, 2, 18, 'new', 'báo hoãn đơn hàng tới bạn.', 18, 0),
(145, 2, 6, 'new', 'báo hoãn đơn hàng tới bạn.', 6, 0),
(146, 2, 1, 'new', 'gán đơn hàng cho bạn.', 6, 0),
(147, 2, 6, 'new', 'báo hoãn đơn hàng tới bạn.', 6, 0),
(148, 2, 1, 'new', 'gán đơn hàng cho bạn.', 6, 0),
(149, 2, 1, 'new', 'gán đơn hàng cho bạn.', 6, 0),
(150, 2, 6, 'new', 'báo hoãn đơn hàng tới bạn.', 6, 0),
(151, 2, 1, 'new', 'gán đơn hàng cho bạn.', 6, 0),
(152, 2, 6, 'new', 'báo hoãn đơn hàng tới bạn.', 6, 0),
(153, 2, 1, 'new', 'gán đơn hàng cho bạn.', 6, 0),
(154, 2, 6, 'new', 'báo hoãn đơn hàng tới bạn.', 6, 0),
(155, 2, 1, 'new', 'gán đơn hàng cho bạn.', 6, 0),
(156, 2, 6, 'new', 'báo hoãn đơn hàng tới bạn.', 6, 0),
(157, 2, 6, 'new', 'báo hoãn đơn hàng tới bạn.', 6, 0),
(158, 2, 6, 'new', 'báo hoãn đơn hàng tới bạn.', 6, 0),
(159, 2, 1, 'new', 'gán đơn hàng cho bạn.', 18, 0),
(160, 2, 18, 'new', 'báo hoãn đơn hàng tới bạn.', 18, 0),
(161, 2, 1, 'new', 'gán đơn hàng cho bạn.', 18, 0),
(162, 2, 4, 'new', 'gán đơn hàng cho bạn.', 6, 0),
(163, 2, 1, 'new', 'gán đơn hàng cho bạn.', 5, 0),
(164, 2, 5, 'new', 'báo hoãn đơn hàng tới bạn.', 5, 0),
(165, 2, 1, 'new', 'gán đơn hàng cho bạn.', 5, 0),
(166, 2, 5, 'new', 'báo hoãn đơn hàng tới bạn.', 5, 0),
(167, 2, 1, 'new', 'gán đơn hàng cho bạn.', 5, 0),
(168, 2, 5, 'new', 'báo hoãn đơn hàng tới bạn.', 5, 0),
(169, 2, 1, 'new', 'tạo đơn hàng mới.', 19, 0),
(170, 2, 4, 'new', 'tạo đơn hàng mới.', 19, 0),
(171, 2, 4, 'new', 'gán đơn hàng cho bạn.', 19, 0),
(172, 2, 1, 'new', 'tạo đơn hàng mới.', 20, 0),
(173, 2, 4, 'new', 'tạo đơn hàng mới.', 20, 0),
(174, 2, 4, 'new', 'gán đơn hàng cho bạn.', 20, 0),
(175, 2, 1, 'new', 'tạo đơn hàng mới.', 21, 0),
(176, 2, 4, 'new', 'tạo đơn hàng mới.', 21, 0),
(177, 2, 1, 'new', 'gán đơn hàng cho bạn.', 21, 0),
(178, 2, 1, 'new', 'tạo đơn hàng mới.', 21, 0),
(179, 2, 4, 'new', 'tạo đơn hàng mới.', 21, 0),
(180, 2, 1, 'new', 'tạo đơn hàng mới.', 22, 0),
(181, 2, 4, 'new', 'tạo đơn hàng mới.', 22, 0),
(182, 2, 1, 'new', 'gán đơn hàng cho bạn.', 22, 0),
(183, 2, 1, 'new', 'tạo đơn hàng mới.', 22, 0),
(184, 2, 4, 'new', 'tạo đơn hàng mới.', 22, 0),
(185, 2, 1, 'new', 'tạo đơn hàng mới.', 18, 0),
(186, 2, 4, 'new', 'tạo đơn hàng mới.', 18, 0),
(187, 2, 1, 'new', 'tạo đơn hàng mới.', 19, 0),
(188, 2, 4, 'new', 'tạo đơn hàng mới.', 19, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `staff_create_id` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  `implement_date` int(11) NOT NULL,
  `complete_date` int(11) NOT NULL,
  `close_date` int(11) NOT NULL,
  `staff_care_id` int(11) NOT NULL,
  `order_code` int(11) NOT NULL,
  `code_pax` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `geg_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact_date` int(11) NOT NULL,
  `visa_result` int(1) NOT NULL,
  `tls_result` int(1) NOT NULL,
  `source` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` enum('owe','paid') COLLATE utf8_unicode_ci NOT NULL,
  `delegation` int(11) NOT NULL,
  `extra_requirement` text COLLATE utf8_unicode_ci NOT NULL,
  `room_arrange` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pricing_array` text COLLATE utf8_unicode_ci NOT NULL,
  `profit` int(11) NOT NULL,
  `ticket_code` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tour_start` int(11) NOT NULL,
  `tour_end` int(11) NOT NULL,
  `free_cancel` int(11) NOT NULL,
  `tour_status` enum('not_start','processing','end','stay','escape') COLLATE utf8_unicode_ci NOT NULL,
  `total_price` int(11) NOT NULL,
  `status` enum('new','pending','confirm','closed','ask') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'new',
  `note` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qrcode`
--

CREATE TABLE `qrcode` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qrcode_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` enum('new','used','trash') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `qrcode`
--

INSERT INTO `qrcode` (`id`, `number`, `code`, `link`, `qrcode_image`, `customer_id`, `status`) VALUES
(1, 1, '6d6109be88dade78e2f98259de6a862d', 'http://locnuoccrm.dev/customer/6d6109be88dade78e2f98259de6a862d', 'http://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=http://locnuoccrm.dev/customer/6d6109be88dade78e2f98259de6a862d', 0, 'new'),
(2, 2, '0208b59157f5092eaadc18371ccd41a7', 'http://locnuoccrm.dev/customer/0208b59157f5092eaadc18371ccd41a7', 'http://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=http://locnuoccrm.dev/customer/0208b59157f5092eaadc18371ccd41a7', 0, 'new'),
(3, 3, 'dde1e0cb118009766da8d3e2ec3b79cf', 'http://locnuoccrm.dev/customer/dde1e0cb118009766da8d3e2ec3b79cf', 'http://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=http://locnuoccrm.dev/customer/dde1e0cb118009766da8d3e2ec3b79cf', 0, 'new'),
(4, 4, '7e557c3ab6d5078625acca7ff37f3520', 'http://locnuoccrm.dev/customer/7e557c3ab6d5078625acca7ff37f3520', 'http://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=http://locnuoccrm.dev/customer/7e557c3ab6d5078625acca7ff37f3520', 0, 'new'),
(5, 5, '80042dd631d9437f2c43df354808ea9d', 'http://locnuoccrm.dev/customer/80042dd631d9437f2c43df354808ea9d', 'http://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=http://locnuoccrm.dev/customer/80042dd631d9437f2c43df354808ea9d', 0, 'new'),
(6, 6, '1dde7dd4964ca7959d6de428666d40e0', 'http://locnuoccrm.dev/customer/1dde7dd4964ca7959d6de428666d40e0', 'http://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=http://locnuoccrm.dev/customer/1dde7dd4964ca7959d6de428666d40e0', 0, 'new'),
(7, 7, 'a6fa99e0789f06ca266f6652ae0f9853', 'http://locnuoccrm.dev/customer/a6fa99e0789f06ca266f6652ae0f9853', 'http://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=http://locnuoccrm.dev/customer/a6fa99e0789f06ca266f6652ae0f9853', 0, 'new'),
(8, 8, 'c78f6625b97aea448e5436bc60ca446b', 'http://locnuoccrm.dev/customer/c78f6625b97aea448e5436bc60ca446b', 'http://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=http://locnuoccrm.dev/customer/c78f6625b97aea448e5436bc60ca446b', 0, 'new'),
(9, 9, '4c41f52e279325f354f066933a6ce80e', 'http://locnuoccrm.dev/customer/4c41f52e279325f354f066933a6ce80e', 'http://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=http://locnuoccrm.dev/customer/4c41f52e279325f354f066933a6ce80e', 0, 'new');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `id_user` int(6) NOT NULL,
  `hard_salary` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `actual_salary` int(11) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(255) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_code` int(11) NOT NULL,
  `group_id` int(11) NOT NULL COMMENT '[1: Admin; 2: Sale; 3:Coordinator; 4: 2 + 3; 5: Technique Staff]',
  `id_warehouse` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone`, `address`, `avatar`, `position`, `password`, `user_code`, `group_id`, `id_warehouse`) VALUES
(1, 'Duong', 'Nguyen', 'duong48ptit@gmail.com', '0123456789', 'Hà Nội', 'assets/img/demo/user3-128x128.jpg', 1, 'df09a67551a4788b3b9ffe1b8a8b4d59', 1, 5, 1),
(2, 'Việt', 'Hoàng', 'hoangviet11088@gmail.com', '0904683491', 'Hà Nội', 'assets/uploads/users/avatar.png', 5, '72a02467e0aadcf0107a7ae3aeb79223', 1, 1, 1),
(3, 'Vinh', 'Lê Công', 'congvinh@gmail.com', '0904688888', 'Nghệ An', 'assets/img/demo/user7-128x128.jpg', 2, '72a02467e0aadcf0107a7ae3aeb79223', 1, 2, 3),
(4, 'Mạnh', 'Đinh Công', 'dinhmenh@gmail.com', '0904666666', 'Sầm Sơn, Thanh Hóa', 'assets/img/demo/user4-128x128.jpg', 3, '72a02467e0aadcf0107a7ae3aeb79223', 1, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users_cart`
--

CREATE TABLE `users_cart` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `product_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_cart`
--

INSERT INTO `users_cart` (`id`, `id_user`, `id_product`, `product_number`) VALUES
(1, 2, 2, 50),
(2, 2, 4, 41),
(3, 2, 5, 45),
(4, 5, 6, 50),
(5, 2, 6, 37);

-- --------------------------------------------------------

--
-- Table structure for table `users_cart_history`
--

CREATE TABLE `users_cart_history` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `action` enum('increase','decrease') COLLATE utf8_unicode_ci NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_cart_history`
--

INSERT INTO `users_cart_history` (`id`, `id_user`, `id_order`, `id_product`, `action`, `datetime`) VALUES
(1, 2, 2, 2, 'decrease', 1483917988),
(2, 2, 2, 4, 'decrease', 1483917988),
(3, 2, 3, 2, 'decrease', 1483918836),
(4, 2, 3, 5, 'decrease', 1483918836),
(5, 2, 1, 2, 'decrease', 1483962953),
(6, 2, 1, 2, 'decrease', 1483963023),
(7, 2, 3, 2, 'decrease', 1483963164),
(8, 2, 3, 5, 'decrease', 1483963164),
(9, 2, 20, 6, 'decrease', 1485024861),
(10, 2, 20, 5, 'decrease', 1485024861),
(11, 2, 22, 6, 'decrease', 1486050438),
(12, 2, 22, 4, 'decrease', 1486050438),
(13, 2, 18, 6, 'decrease', 1487431202),
(14, 2, 18, 4, 'decrease', 1487431202);

-- --------------------------------------------------------

--
-- Table structure for table `users_history`
--

CREATE TABLE `users_history` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_user_to` int(11) NOT NULL,
  `action` enum('create','assign','take','complete','closed','update','modify','delayed') COLLATE utf8_unicode_ci NOT NULL,
  `datetime` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_history`
--

INSERT INTO `users_history` (`id`, `id_user`, `id_order`, `id_user_to`, `action`, `datetime`, `type`) VALUES
(1, 2, 2, 3, 'complete', 1483917988, ''),
(2, 1, 3, 0, 'create', 1483918767, ''),
(3, 2, 3, 2, 'complete', 1483918837, ''),
(4, 2, 1, 2, 'complete', 1483962953, ''),
(5, 2, 1, 2, 'complete', 1483963023, ''),
(6, 2, 3, 2, 'complete', 1483963164, ''),
(7, 2, 4, 0, 'create', 1484053457, ''),
(8, 2, 5, 0, 'create', 1484678548, ''),
(9, 2, 6, 0, 'create', 1484678666, ''),
(10, 2, 6, 0, 'modify', 1484680755, ''),
(11, 2, 7, 0, 'create', 1484680794, ''),
(12, 2, 7, 0, 'modify', 1484680827, ''),
(13, 2, 7, 0, 'modify', 1484680839, ''),
(14, 2, 7, 0, 'modify', 1484680843, ''),
(15, 2, 7, 0, 'modify', 1484680856, ''),
(16, 2, 7, 0, 'modify', 1484680872, ''),
(17, 2, 7, 0, 'modify', 1484681073, ''),
(18, 2, 7, 0, 'modify', 1484681106, ''),
(19, 2, 7, 0, 'modify', 1484681124, ''),
(20, 2, 7, 0, 'modify', 1484681137, ''),
(21, 2, 7, 0, 'modify', 1484681824, ''),
(22, 2, 7, 0, 'modify', 1484687225, ''),
(23, 2, 4, 2, 'complete', 1484687353, ''),
(24, 2, 7, 0, 'create', 1484850991, ''),
(25, 2, 8, 0, 'create', 1484852362, ''),
(26, 2, 9, 0, 'create', 1484852612, ''),
(27, 2, 10, 0, 'create', 1484852742, ''),
(28, 2, 11, 0, 'create', 1484852789, ''),
(29, 2, 12, 0, 'create', 1484852821, ''),
(30, 2, 13, 0, 'create', 1484852837, ''),
(31, 2, 14, 0, 'create', 1484852872, ''),
(32, 2, 15, 0, 'create', 1484852885, ''),
(33, 2, 16, 0, 'create', 1484852896, ''),
(34, 2, 17, 0, 'create', 1484852914, ''),
(35, 2, 7, 0, 'create', 1484853055, ''),
(36, 2, 8, 0, 'create', 1484853064, ''),
(37, 2, 9, 0, 'create', 1484853085, ''),
(38, 2, 10, 0, 'create', 1484853095, ''),
(39, 2, 11, 0, 'create', 1484853117, ''),
(40, 2, 12, 0, 'create', 1484853125, ''),
(41, 2, 13, 0, 'create', 1484853181, ''),
(42, 2, 14, 0, 'create', 1484853192, ''),
(43, 2, 15, 0, 'create', 1484853207, ''),
(44, 2, 16, 0, 'create', 1484853230, ''),
(45, 2, 17, 0, 'create', 1484853259, ''),
(46, 2, 18, 0, 'create', 1484853645, ''),
(47, 2, 6, 0, 'modify', 1484853861, ''),
(48, 2, 6, 0, 'modify', 1484853873, ''),
(49, 2, 18, 3, 'delayed', 1484859139, ''),
(50, 2, 18, 1, 'assign', 1484939660, ''),
(51, 2, 18, 3, 'delayed', 1484859685, ''),
(52, 2, 6, 3, 'delayed', 1484859694, ''),
(53, 2, 6, 4, 'assign', 1484939673, ''),
(54, 2, 18, 3, 'delayed', 1484859764, ''),
(55, 2, 18, 3, 'delayed', 1484859856, ''),
(56, 2, 6, 3, 'delayed', 1484859877, ''),
(57, 2, 18, 3, 'delayed', 1484860152, ''),
(58, 2, 18, 3, 'delayed', 1484860496, ''),
(59, 2, 18, 3, 'delayed', 1484860514, ''),
(60, 2, 18, 3, 'delayed', 1484860573, ''),
(61, 2, 18, 3, 'delayed', 1484861127, ''),
(62, 2, 18, 3, 'delayed', 1484861169, ''),
(63, 2, 18, 3, 'delayed', 1484861172, ''),
(64, 2, 6, 3, 'delayed', 1484861189, ''),
(65, 2, 18, 3, 'delayed', 1484861216, ''),
(66, 2, 6, 3, 'delayed', 1484861236, ''),
(67, 2, 18, 3, 'delayed', 1484861312, ''),
(68, 2, 6, 6, 'delayed', 1484862333, ''),
(69, 2, 6, 6, 'delayed', 1484862378, ''),
(70, 2, 18, 18, 'delayed', 1484862820, ''),
(71, 2, 18, 18, 'delayed', 1484862872, ''),
(72, 2, 18, 18, 'delayed', 1484862922, ''),
(73, 2, 6, 6, 'delayed', 1484863889, ''),
(74, 2, 6, 6, 'delayed', 1484864070, ''),
(75, 2, 6, 6, 'delayed', 1484864482, ''),
(76, 2, 6, 6, 'delayed', 1484864552, ''),
(77, 2, 6, 6, 'delayed', 1484864757, ''),
(78, 2, 6, 6, 'delayed', 1484864819, ''),
(79, 2, 6, 6, 'delayed', 1484864862, ''),
(80, 2, 6, 6, 'delayed', 1484864870, ''),
(81, 2, 18, 18, 'delayed', 1484938882, ''),
(82, 2, 5, 1, 'assign', 1484939927, ''),
(83, 2, 5, 5, 'delayed', 1484939838, ''),
(84, 2, 5, 5, 'delayed', 1484939919, ''),
(85, 2, 5, 5, 'delayed', 1484939982, ''),
(86, 2, 19, 0, 'create', 1484949037, ''),
(87, 2, 19, 4, 'assign', 1484953179, ''),
(88, 2, 19, 0, 'modify', 1484953215, ''),
(89, 2, 19, 2, 'complete', 1485023351, ''),
(90, 2, 18, 3, 'complete', 1485024618, ''),
(91, 2, 20, 0, 'create', 1485024775, ''),
(92, 2, 20, 4, 'assign', 1485024842, ''),
(93, 2, 20, 2, 'complete', 1485024861, ''),
(94, 2, 21, 0, 'create', 1485025669, ''),
(95, 2, 21, 1, 'assign', 1485025673, ''),
(96, 2, 21, 2, 'complete', 1486048921, ''),
(97, 2, 21, 2, 'complete', 1486049053, ''),
(98, 2, 22, 0, 'create', 1486050260, ''),
(99, 2, 22, 1, 'assign', 1486050268, ''),
(100, 2, 22, 2, 'complete', 1486050438, ''),
(101, 2, 18, 3, 'complete', 1487431202, ''),
(102, 2, 19, 2, 'complete', 1489057442, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `name`, `permission`) VALUES
(1, 'Admin', '[]'),
(2, 'Sale', '[]'),
(3, 'Coordinator', '[]'),
(4, 'Manager', '[]'),
(5, 'Consultan', '[]'),
(6, 'Chief', '{"admins":["index","add"],"admingroups":["index","add"]}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_campaign`
--
ALTER TABLE `customers_campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_product`
--
ALTER TABLE `customers_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qrcode`
--
ALTER TABLE `qrcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_cart`
--
ALTER TABLE `users_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_cart_history`
--
ALTER TABLE `users_cart_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_history`
--
ALTER TABLE `users_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customers_campaign`
--
ALTER TABLE `customers_campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customers_product`
--
ALTER TABLE `customers_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qrcode`
--
ALTER TABLE `qrcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users_cart`
--
ALTER TABLE `users_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users_cart_history`
--
ALTER TABLE `users_cart_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users_history`
--
ALTER TABLE `users_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
