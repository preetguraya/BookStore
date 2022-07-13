-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2020 at 05:07 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(100) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `image`, `status`, `created_at`, `modified_at`) VALUES
(2, 'MY POST 1', 'Donec vitae hendrerit arcu, sit amet faucibus nisl. Crastoup pretium arcu ex. Aenean posuere libero eu augue rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti. Proin consectetur aliquam odio nec fringilla. Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit amet ligula condimentum sagittis.  Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor deo incididunt labo dolor magna aliqua. Ut enim ad minim veniam quis nostrud geolans work. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of to magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehnderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dser mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.', '7.jpg', 1, '2020-01-23 07:23:13', '2020-01-22 23:25:50'),
(3, 'MY POST 2', 'Donec vitae hendrerit arcu, sit amet faucibus nisl. Crastoup pretium arcu ex. Aenean posuere libero eu augue rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti. Proin consectetur aliquam odio nec fringilla. Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit amet ligula condimentum sagittis.  Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor deo incididunt labo dolor magna aliqua. Ut enim ad minim veniam quis nostrud geolans work. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of to magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehnderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dser mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.', 'myimage.jpg', 1, '2020-01-23 07:23:13', '2020-01-22 21:43:21'),
(4, 'MY POST 3', 'Donec vitae hendrerit arcu, sit amet faucibus nisl. Crastoup pretium arcu ex. Aenean posuere libero eu augue rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti. Proin consectetur aliquam odio nec fringilla. Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit amet ligula condimentum sagittis.  Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor deo incididunt labo dolor magna aliqua. Ut enim ad minim veniam quis nostrud geolans work. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of to magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehnderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dser mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.', 'kids.jpg', 1, '2020-01-23 07:23:13', '2020-01-22 23:27:25'),
(6, 'MY POST 5', 'Donec vitae hendrerit arcu, sit amet faucibus nisl. Crastoup pretium arcu ex. Aenean posuere libero eu augue rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti. Proin consectetur aliquam odio nec fringilla. Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit amet ligula condimentum sagittis.  Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor deo incididunt labo dolor magna aliqua. Ut enim ad minim veniam quis nostrud geolans work. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of to magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehnderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dser mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.', 'images.jpg', 1, '2020-01-23 09:58:58', '2020-01-22 23:29:55'),
(7, 'MY POST 6', 'Donec vitae hendrerit arcu, sit amet faucibus nisl. Crastoup pretium arcu ex. Aenean posuere libero eu augue rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti. Proin consectetur aliquam odio nec fringilla. Sed interdum at justo in efficitur. Vivamus gravida volutpat sodales. Fusce ornare sit amet ligula condimentum sagittis.  Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor deo incididunt labo dolor magna aliqua. Ut enim ad minim veniam quis nostrud geolans work. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendrit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore of to magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehnderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dser mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.', 'images (19).jpg', 1, '2020-01-23 11:42:18', '2020-01-23 11:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(255) NOT NULL,
  `Parent_ID` int(255) NOT NULL,
  `Name` text NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Status` int(10) NOT NULL,
  `Created At` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_At` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `Parent_ID`, `Name`, `Description`, `Image`, `Status`, `Created At`, `Modified_At`) VALUES
(19, 0, 'History', 'Non-fiction', 'images (4).jpg', 1, '2019-12-30 10:03:13', '2020-01-23 04:46:10pm'),
(21, 0, 'Drama', 'Fiction', 'images (1).jpg', 1, '2019-12-30 10:12:29', '2020-01-23 04:43:16pm'),
(23, 0, 'Science', 'Scientific facts', 'images (5).jpg', 1, '2019-12-30 11:31:16', '2020-01-09 03:39:49pm'),
(24, 0, 'CookBooks', 'For Cooking', 'images (2).jpg', 1, '2019-12-30 11:32:02', '2020-01-02 11:22:18am'),
(25, 0, 'Biography', 'Non-fiction', 'images (3).jpg', 1, '2019-12-30 11:32:57', '2020-01-03 01:52:56pm'),
(26, 19, 'Indian History', 'History of India', 'images (6).jpg', 1, '2019-12-30 11:34:06', '2020-01-02 04:51:33pm'),
(27, 19, 'Europe History', 'History of European nations', 'download.jpg', 1, '2019-12-30 11:34:47', '2020-01-23 04:59:40pm'),
(28, 23, 'Physics', 'Physical Sciences', 'images (5).jpg', 1, '2019-12-30 11:35:58', '2019-12-30 05:06:12pm'),
(30, 23, 'Chemistry', 'chemical Science', 'download (1).jpg', 1, '2020-01-02 10:56:25', '2020-01-02 04:52:37pm'),
(31, 21, 'English Drama', 'English plays', 'images (1).jpg', 1, '2020-01-02 10:57:07', NULL),
(32, 21, 'Hindi Drama', 'Hindi plays', 'images (19).jpg', 1, '2020-01-02 10:57:30', '2020-01-02 05:02:10pm'),
(33, 24, 'Indian dishes', 'Made in India', 'images (13).jpg', 1, '2020-01-02 10:58:11', '2020-01-02 04:52:56pm'),
(34, 24, 'Italian Food', 'Italy', 'images (16).jpg', 1, '2020-01-02 10:58:50', '2020-01-02 04:53:12pm'),
(35, 25, 'Religious', 'Biographies of saints', 'images (18).jpg', 1, '2020-01-02 10:59:54', '2020-01-02 04:55:24pm'),
(36, 25, 'Autobiographies', 'Self-written Bios', 'images (22).jpg', 1, '2020-01-02 11:00:34', '2020-01-03 11:06:15am'),
(37, 0, 'Kids', 'Books for Kids', 'kids.jpg', 1, '2020-01-17 08:24:08', NULL),
(38, 37, 'Fairy Tales', 'Tales', 'kids1.jpg', 1, '2020-01-17 08:26:09', '2020-01-17 02:11:15pm'),
(39, 37, 'Comics', 'Comic books', 'kids4.jpg', 1, '2020-01-17 08:35:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `discount` int(100) NOT NULL,
  `status` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `code`, `discount`, `status`, `created_at`) VALUES
(1, 'ABC123', 10, 1, '2020-01-09 09:41:16'),
(2, 'AAA111', 20, 0, '2020-01-23 06:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `coupon_applied` varchar(100) NOT NULL,
  `coupon_code` varchar(100) NOT NULL,
  `discount` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `b_phone` int(11) NOT NULL,
  `b_street` text NOT NULL,
  `b_area` text NOT NULL,
  `b_city` text NOT NULL,
  `b_state` text NOT NULL,
  `b_pincode` varchar(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_phone` int(11) NOT NULL,
  `s_street` text NOT NULL,
  `s_area` text NOT NULL,
  `s_city` text NOT NULL,
  `s_state` text NOT NULL,
  `s_pincode` varchar(100) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `sub_total`, `coupon_applied`, `coupon_code`, `discount`, `total`, `customer_id`, `email`, `b_name`, `b_phone`, `b_street`, `b_area`, `b_city`, `b_state`, `b_pincode`, `s_name`, `s_phone`, `s_street`, `s_area`, `s_city`, `s_state`, `s_pincode`, `order_date`) VALUES
(7, 'IM-000001', 226, '0', 'null', 0, 226, 6, '', 'Gurpreet', 987876554, '12', 'Urban-Estate', 'Patiala', 'Punjab', '122321', 'Gurpreet', 987876554, '12', 'Urban-Estate', 'Patiala', 'Punjab', '122321', '2020-01-16 10:57:58'),
(10, 'IM-000002', 131, '0', 'null', 0, 131, 39, 'gkguraya5@gmail.com', 'Preet', 889456456, '56', '67-town', 'nabha', 'Punjab', '143211', 'Preet', 889456456, '56', '67-town', 'nabha', 'Punjab', '143211', '2020-01-16 10:56:31'),
(11, 'IM-000003', 210, '0', 'null', 0, 210, 39, 'gkguraya5@gmail.com', 'Reet', 778767654, '21', 'aaa', 'bbb', 'ccc', '123432', 'Reet', 778767654, '21', 'aaa', 'bbb', 'ccc', '123432', '2020-01-16 10:54:10'),
(12, 'IM-000004', 49, '0', 'null', 0, 49, 39, 'gkguraya5@gmail.com', 'xxx', 0, 'cxc', 'xx', 'xx', 'xx', 'xx', 'xxx', 0, 'cxc', 'xx', 'xx', 'xx', 'xx', '2020-01-16 11:05:57'),
(14, 'IM-000005', 98, '0', 'null', 0, 98, 39, 'gkguraya5@gmail.com', 'eddd', 3445, 'rfg', 'ff', 'ff', 'ff', '44', 'eddd', 3445, 'rfg', 'ff', 'ff', 'ff', '44', '2020-01-16 11:37:18'),
(15, 'IM-000007', 385, '0', 'null', 0, 385, 39, 'gkguraya5@gmail.com', 'dd', 0, 'dsds', 'ss', 'ss', 's', 'sds', 'dd', 0, 'dsds', 'ss', 'ss', 's', 'sds', '2020-01-16 11:42:43'),
(16, 'IM-000008', 56, '0', 'null', 0, 56, 39, 'gkguraya5@gmail.com', 'ffg', 44, 'ff', 'ffd', 'vcv', 'cvvc', '43', 'ffg', 44, 'ff', 'ffd', 'vcv', 'cvvc', '43', '2020-01-16 11:46:28'),
(17, 'IM-000009', 96, '1', 'ABC123', 10, 86, 6, '', 'John Doe', 2147483647, '542 West Street', 'Sector 12', 'Delhi', 'Delhi', '131232', 'John Doe', 2147483647, '542 West Street', 'Sector 12', 'Delhi', 'Delhi', '131232', '2020-01-17 05:35:13'),
(18, 'IM-000010', 385, '0', 'null', 0, 385, 43, 'gbc@gmail.com', 'Baljeet', 2147483647, '12', 'Sector-14', 'Nabha', 'Punjab', '112321', 'Baljeet', 2147483647, '12', 'Sector-14', 'Nabha', 'Punjab', '112321', '2020-01-17 06:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `total`, `order_date`) VALUES
(8, 'IM-000001', 10, 2, 85, 170, '2020-01-16 10:21:19'),
(9, 'IM-000001', 8, 1, 56, 56, '2020-01-16 10:21:19'),
(10, 'IM-000001', 5, 1, 49, 49, '2020-01-16 10:24:36'),
(11, 'IM-000002', 5, 2, 49, 98, '2020-01-16 10:35:13'),
(12, 'IM-000002', 7, 1, 33, 33, '2020-01-16 10:35:14'),
(13, 'IM-000003', 12, 1, 210, 210, '2020-01-16 10:38:37'),
(14, 'IM-000004', 5, 1, 49, 49, '2020-01-16 10:58:58'),
(15, 'IM-000005', 5, 1, 49, 49, '2020-01-16 11:08:20'),
(17, 'IM-000007', 17, 1, 385, 385, '2020-01-16 11:42:43'),
(18, 'IM-000008', 8, 1, 56, 56, '2020-01-16 11:46:28'),
(19, 'IM-000009', 6, 2, 48, 96, '2020-01-17 05:35:13'),
(20, 'IM-000010', 17, 1, 385, 385, '2020-01-17 06:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `regular_price` bigint(20) NOT NULL,
  `sales_price` bigint(20) NOT NULL,
  `status` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `subcat_id`, `name`, `description`, `image`, `regular_price`, `sales_price`, `status`, `created_at`, `modified_at`) VALUES
(3, 23, 28, 'Motion', 'motion facts', 'physics-in-motion-logo400sq.png', 400, 399, 1, '2020-01-02 05:19:19', '2020-01-03 10:57:01am'),
(4, 23, 28, 'Optics', 'Reflection and Refraction', 'images (20).jpg', 444, 430, 1, '2020-01-02 05:28:02', '2020-01-03 10:58:51am'),
(5, 19, 26, 'Mughal Empire', 'Life of Mughals', 'mughal.jpg', 50, 49, 1, '2020-01-02 11:02:15', '2020-01-03 11:00:54am'),
(6, 23, 30, 'Atoms & Structure', 'Atomic structure', 'images (8).jpg', 50, 48, 1, '2020-01-02 11:03:15', '2020-01-02 05:05:34pm'),
(7, 23, 30, 'Biomolecules', 'Theory of biomolecules', 'images (9).jpg', 35, 33, 1, '2020-01-02 11:04:09', '2020-01-02 05:05:00pm'),
(8, 21, 31, 'Julies Ceaser', 'Assassination of Caeser', 'images (10).jpg', 59, 56, 1, '2020-01-02 11:05:05', '2020-01-02 05:04:32pm'),
(10, 21, 32, 'Atithi Kab Jaoge?', 'funny drama', 'maxresdefault.jpg', 90, 85, 1, '2020-01-02 11:07:47', '2020-01-03 10:52:26am'),
(11, 24, 33, 'Punjabi dishes', 'Made in punjab', 'images (14).jpg', 312, 300, 1, '2020-01-02 11:09:35', '2020-01-02 05:04:06pm'),
(12, 24, 34, 'Learn to cook Italian', 'made in italy', 'images (15).jpg', 215, 210, 1, '2020-01-02 11:10:23', '2020-01-09 02:05:31pm'),
(15, 25, 36, 'William Shakespeare', 'Autobiography', 'images (21).jpg', 150, 140, 1, '2020-01-02 11:13:04', '2020-01-23 04:44:03pm'),
(16, 25, 35, 'Jesus Christ', 'Life of jesus', 'images (12).jpg', 270, 250, 1, '2020-01-02 11:14:21', '2020-01-02 05:09:22pm'),
(17, 19, 27, 'Gandhiji', 'Life of Mahatma gandhi', 'images (3).jpg', 395, 385, 1, '2020-01-16 09:13:42', ''),
(18, 37, 38, 'Cinderella', 'Fairy Tale', 'kids2.jpg', 210, 200, 1, '2020-01-17 08:29:57', '2020-01-17 02:13:00pm'),
(20, 37, 38, 'Snow White', 'Fairy Tale', 'kids3.jpg', 140, 115, 1, '2020-01-17 08:33:30', '2020-01-17 02:12:31pm'),
(21, 37, 39, 'Superman', 'Comic', 'shopping.webp', 150, 135, 1, '2020-01-17 08:37:26', ''),
(22, 37, 39, 'Batman', 'Comic', 'shopping (1).webp', 100, 98, 1, '2020-01-17 08:39:03', ''),
(23, 23, 30, 'Physical Chemistry', 'Chemistry', 'download (2).jpg', 100, 95, 1, '2020-01-18 09:38:36', '');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(100) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` text NOT NULL,
  `msg` text NOT NULL,
  `dated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `email`, `subject`, `msg`, `dated`) VALUES
(1, '$name', '$email', '$subject', '$msg', '2020-01-17 10:30:51'),
(2, 'Priya Sharma', 'gkguraya5@gmail.com', 'dd', 'ddd', '2020-01-17 10:34:18'),
(3, 'Gurpreet Kaur', 'gkguraya5@gmail.com', '', '', '2020-01-17 10:34:39'),
(4, 'Gurpreet Kaur', 'gkguraya5@gmail.com', 'Price', 'Books are expensive', '2020-01-17 10:34:57'),
(5, 'Gurpreet', 'gkguraya@gmail.com', 'hg', 'gg', '2020-01-17 10:35:24'),
(6, 'Gurpreet Kaur', 'gkguraya5@gmail.com', '', '', '2020-01-17 10:38:20'),
(7, 'Gurpreet Kaur', 'gkguraya5@gmail.com', '', '', '2020-01-17 10:38:28'),
(8, 'Gurpreet Kaur', 'gkguraya5@gmail.com', 'xc', 'cc', '2020-01-17 10:39:21'),
(9, 'Gurpreet Kaur', 'gkguraya5@gmail.com', 'xx', 'xx', '2020-01-17 10:40:29'),
(10, 'Gurpreet Kaur', 'gkguraya5@gmail.com', 'xcx', 'cc', '2020-01-17 10:41:08'),
(11, 'Gurpreet Kaur', 'gkguraya5@gmail.com', 'ff', 'fgf', '2020-01-17 10:41:28'),
(12, 'Gurpreet Kaur', 'gkguraya5@gmail.com', 'xz', 'zz', '2020-01-17 10:44:08'),
(13, 'Gurpreet Kaur', 'gkguraya5@gmail.com', 'xz', 'zz', '2020-01-17 10:44:27'),
(14, 'Gurpreet Kaur', 'gkguraya5@gmail.com', 's', 'ssa', '2020-01-17 10:44:42'),
(15, 'Gurpreet Kaur', 'gkguraya5@gmail.com', 'Price', 'The price of kids books is way higher.', '2020-01-17 10:54:07'),
(16, 'Gurpreet Kaur', 'gkguraya5@gmail.com', 'xx', 'sxds', '2020-01-17 10:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `register_admin`
--

CREATE TABLE `register_admin` (
  `ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `OTP` int(10) NOT NULL,
  `Created At` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_admin`
--

INSERT INTO `register_admin` (`ID`, `Name`, `Email`, `Password`, `OTP`, `Created At`) VALUES
(6, 'Gurpreet', 'kaur@gmail.com', '5b1b68a9abf4d2cd155c81a9225fd158', 632800, '2020-01-24 09:35:50');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `OTP` int(10) NOT NULL,
  `Verified` int(10) NOT NULL,
  `Active_Status` int(10) NOT NULL,
  `Created At` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`ID`, `Name`, `Email`, `Password`, `OTP`, `Verified`, `Active_Status`, `Created At`) VALUES
(35, 'Gunreet', 'kaur5@gmail.com', '4cbbbf6686eeec37bf095f3a07954a90', 825815, 1, 1, '2019-12-30 07:54:43'),
(36, 'Navjot', 'nav@gmail.com', '8f6cd5b936b4a6a6e56784078a2af645', 870349, 1, 1, '2019-12-25 12:37:25'),
(37, 'Gurpreet', 'kaur55@gmail.com', 'f9c734d3f893f298195c3c73a61d628b', 131811, 1, 1, '2020-01-09 08:35:10'),
(39, 'Gurpreet Kaur', 'gkguraya5@gmail.com', '5b1b68a9abf4d2cd155c81a9225fd158', 714483, 1, 1, '2019-12-25 10:51:29'),
(41, 'Priya Sharma', 'priya6@gmail.com', '5b1b68a9abf4d2cd155c81a9225fd158', 679963, 1, 1, '2019-12-25 10:54:23'),
(42, 'Preet Kaur', 'kaurff@gmail.com', 'eed8cdc400dfd4ec85dff70a170066b7', 951086, 1, 1, '2019-12-25 10:30:36'),
(43, 'Preet Guraya', 'gbc@gmail.com', '5b1b68a9abf4d2cd155c81a9225fd158', 376520, 1, 1, '2019-12-25 10:57:41'),
(45, 'Navneet Kaur', 'nav5@gmail.com', '5b1b68a9abf4d2cd155c81a9225fd158', 320016, 1, 1, '2019-12-25 11:10:40'),
(47, 'Gurpreet Kaur', 'gkguraya5@gmail.com', 'b53b3a3d6ab90ce0268229151c9bde11', 0, 0, 1, '2019-12-25 11:11:57'),
(49, 'Jashan', 'jas5@gmail.com', '5b1b68a9abf4d2cd155c81a9225fd158', 0, 0, 1, '2019-12-30 07:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `dated`) VALUES
(1, 'gkguraya5@gmail.com', '2020-01-18 10:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id` int(100) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `title`, `image`, `status`, `created_at`, `modified_at`) VALUES
(5, 'Logo', 'logo.png', 1, '2020-01-24 10:30:17', '2020-01-23 22:52:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_admin`
--
ALTER TABLE `register_admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `register_admin`
--
ALTER TABLE `register_admin`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
