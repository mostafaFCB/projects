-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 05:12 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `client_name` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `client_count` int(11) DEFAULT NULL,
  `price_unit` int(11) NOT NULL,
  `status` int(11) DEFAULT '1',
  `deleted` int(11) DEFAULT '1',
  `product_id` int(11) DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_name`, `address`, `client_count`, `price_unit`, `status`, `deleted`, `product_id`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'ahmed emad', 'vvvvvvvvvvvvvvvvvvvv', 3, 0, 2, 1, 1, 'يسيس', '2019-05-14 19:23:23', NULL, '2019-05-14 19:24:13'),
(2, 'aaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaa', 22, 0, 2, 2, 2, 'يسيس', '2019-05-17 13:23:14', NULL, '2019-05-17 13:23:14'),
(3, 'mmmmm', 'mmmmmmm', 30, 0, 2, 2, 11, 'يسيس', '2019-05-17 13:24:20', NULL, '2019-05-17 13:24:20'),
(4, 'mostafa hamdi', 'ddddddddddddd', 100, 0, 2, 2, 8, 'يسيس', '2019-05-17 13:51:11', 'يسيس', '2019-05-17 17:29:53'),
(5, 'ahmed emad', 'ddddd', 100, 0, 2, 2, 20, 'يسيس', '2019-05-19 13:33:30', 'يسيس', '2019-05-19 13:34:37'),
(6, 'yousef ahmed', 'aaaaaaaaaaaaaaaaaaaaaaa', 30, 0, 2, 2, 26, 'يسيس', '2019-05-20 12:49:59', NULL, '2019-05-20 12:49:59'),
(7, 'mosa', 'aaaaa', 100, 120, 2, 2, 26, 'يسيس', '2019-05-20 13:02:50', NULL, '2019-05-20 13:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `deleted` int(11) DEFAULT '1',
  `created_by` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `name`, `address`, `status`, `deleted`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'mostafa hamdi', 'cccccccccccccccc', 1, 1, 'يسيس', '2019-05-14 20:06:51', 'يسيس', '2019-05-21 12:46:48'),
(2, 'mostafa hamdi', 'teta', 2, 1, 'يسيس', '2019-05-19 12:29:26', NULL, '2019-05-21 12:46:51'),
(3, 'bassem sdddd', 'mmmmmdddddd', 2, 1, 'يسيس', '2019-05-19 13:34:58', 'يسيس', '2019-05-21 12:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pro_name` varchar(200) DEFAULT NULL,
  `description` text,
  `image` varchar(200) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `description`, `image`, `price`, `count`, `status`, `deleted`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'ddddddd', 'dddddddd123', 'images/zsRYwPcXBnGmWFCnxxxLb2oU5X86bkhJpCrWoV1O.jpeg', '123', 123123, 2, 2, 'يسيس', '2019-05-08 14:06:29', 'يسيس', '2019-05-08 19:06:26'),
(2, 'ewqe', 'fdsfds', 'images/BhHuZkGxQYlK107cbLn4o1fbTDMk7in9ARYhzgjp.jpeg', '111', 1203, 2, 2, 'يسيس', '2019-05-08 17:51:31', 'يسيس', '2019-05-17 13:23:15'),
(3, 'qew', 'ewqew', 'images/51648784_2028260007287866_1773246263983079424_n.jpg', '123', 1233, 2, 2, 'يسيس', '2019-05-11 11:07:02', NULL, '2019-05-11 11:07:02'),
(4, 'ewqe', 'qewqeeeeee', 'images/ملك-Malak.png', '11', 11, 2, 2, 'يسيس', '2019-05-11 11:14:26', NULL, '2019-05-11 11:14:26'),
(5, '123', '312313', 'images/IHV2ASJX4Z4MT4ptHbGlQxhS4A2uUQfbVgXYm29d.jpeg', '12', 3213, 2, 2, 'يسيس', '2019-05-11 11:17:41', NULL, '2019-05-11 11:17:42'),
(6, NULL, NULL, 'images/dyA6klNvVpABSvpPX4Ua0fQeaMJnHfhaSIVW3u5p.jpeg', NULL, NULL, NULL, NULL, NULL, '2019-05-11 13:34:43', NULL, '2019-05-11 13:34:43'),
(7, 'ddddddddd', '33333', 'images/E3KPnmrJBSW49KfsWg7bZLZIixceQBWLTYNiEnXY.jpeg', '1111', 111, 2, 2, 'يسيس', '2019-05-11 13:37:00', NULL, '2019-05-11 13:37:00'),
(8, 'ddddddddd', '33333', 'images/NC4qHAQ3W9P8ceQNVpAIfTDFdBx0gJiCf0YsL7lQ.jpeg', '1111', 11, 2, 2, 'يسيس', '2019-05-11 13:37:44', NULL, '2019-05-17 13:51:11'),
(9, 'mostafa', 'hamdi', 'images/4ZYyz06i9FXWE9VHdmzW8gRC9OoLIx9m8Cu69rl6.jpeg', '888', 7878, 2, 2, 'يسيس', '2019-05-11 13:52:09', NULL, '2019-05-11 13:52:09'),
(10, 'mostafa', 'hamdi', 'images/raV89bt0Kj6soRiKGMWaUQhtt3VMYhGgO8Vh1ipc.jpeg', '888', 7878, 2, 2, 'يسيس', '2019-05-11 13:53:03', NULL, '2019-05-11 13:53:03'),
(11, '66', '666', 'images/hpy9ozKiLbbtPNWyJzycRswgUzeUxbnUBKsZygMs.png', '66', 56, 2, 2, 'يسيس', '2019-05-11 14:09:52', NULL, '2019-05-18 11:25:49'),
(12, 'xxxxxxx', 'xxxxxxxxxxxxxxxx', 'images/vAWkVmapi4ExSbdnreCBV18V4EYsaZT3upjQtVAZ.jpeg', '8888', 88888, 2, 1, 'يسيس', '2019-05-11 17:08:07', NULL, '2019-05-11 17:08:07'),
(13, 'pepsi', 'dadsadad', 'images/txxu8W10E3pI0Uk6jPwPSMAPsvNEkOSfJFXqCtOj.jpeg', '200', 160, 2, 2, 'يسيس', '2019-05-18 12:08:24', NULL, '2019-05-20 12:30:17'),
(14, 'cocacola', 'soda', 'images/B3UyAx6MQpbTUc0byqrqg9ifseWBLoc8ucp1xPVY.jpeg', '100', 500, 1, 2, 'يسيس', '2019-05-19 12:33:57', NULL, '2019-05-19 13:11:03'),
(15, 'osama hamdi', 'sodaaa', NULL, '400', 200, 2, 1, 'يسيس', '2019-05-19 13:06:27', NULL, '2019-05-19 13:15:06'),
(16, 'osama hamdi', 'sodaaa', NULL, '400', 200, 2, 1, 'يسيس', '2019-05-19 13:09:25', NULL, '2019-05-19 13:15:15'),
(17, 'osama hamdi', 'sodaaa', NULL, '400', 200, 2, 1, 'يسيس', '2019-05-19 13:10:19', NULL, '2019-05-19 13:15:24'),
(18, 'coca cola large', 'ddddddddd', NULL, '200', 300, 2, 1, 'يسيس', '2019-05-19 13:13:59', NULL, '2019-05-19 13:15:32'),
(19, 'coca cola large', '3000', NULL, '200', 100, 2, 1, 'يسيس', '2019-05-19 13:17:31', NULL, '2019-05-19 13:28:23'),
(20, 'sola', 'basot', 'images/qxISkqeSrvF7HbT7yuDSDfuQRKvwmT0qQDpQKRDW.jpeg', '200', 400, 2, 2, 'يسيس', '2019-05-19 13:29:16', NULL, '2019-05-19 13:33:30'),
(21, 'ewqe', 'fdsfds', NULL, '111', NULL, 2, 1, 'يسيس', '2019-05-20 11:46:08', NULL, '2019-05-20 19:43:28'),
(22, 'qew', 'ewqew', NULL, '123', NULL, 2, 1, 'يسيس', '2019-05-20 11:46:26', NULL, '2019-05-20 19:43:37'),
(23, 'ewqe', 'fdsfds', NULL, '111', NULL, 2, 1, 'يسيس', '2019-05-20 11:47:37', NULL, '2019-05-20 19:43:42'),
(24, 'ewqe', 'fdsfds', NULL, '111', 1111, 2, 1, 'يسيس', '2019-05-20 11:55:48', NULL, '2019-05-20 19:43:51'),
(25, 'sola', 'basot', NULL, '200', 300, 2, 1, 'يسيس', '2019-05-20 12:09:02', NULL, '2019-05-20 19:44:05'),
(26, 'kalbz', '21ddddddddddddddddd', 'images/CfYNj4Y8itHWwlBoIdVSEjFChUc0IGTNsV73eAqz.png', '100', 110, 2, 2, 'يسيس', '2019-05-20 12:26:13', NULL, '2019-05-21 11:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `suplayer_products`
--

CREATE TABLE `suplayer_products` (
  `supplayers_id` int(11) DEFAULT NULL,
  `products_id` int(11) DEFAULT NULL,
  `product_count` int(11) NOT NULL,
  `deleted` int(11) DEFAULT NULL,
  `created_by` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suplayer_products`
--

INSERT INTO `suplayer_products` (`supplayers_id`, `products_id`, `product_count`, `deleted`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(5, 10, 0, NULL, NULL, '2019-05-11 13:53:03', NULL, '2019-05-11 13:53:03'),
(5, 11, 0, NULL, NULL, '2019-05-11 14:09:52', NULL, '2019-05-11 14:09:52'),
(6, 12, 0, NULL, NULL, '2019-05-11 17:08:07', NULL, '2019-05-11 17:08:07'),
(7, 11, 0, 2, NULL, '2019-05-11 18:03:49', NULL, '2019-05-11 18:03:49'),
(8, 2, 0, 2, NULL, '2019-05-11 18:31:19', NULL, '2019-05-11 18:31:19'),
(9, 11, 0, 2, NULL, '2019-05-18 11:25:49', NULL, '2019-05-18 11:25:49'),
(9, 13, 50, 2, NULL, '2019-05-18 12:08:24', NULL, '2019-05-18 12:08:24'),
(9, 14, 300, 2, NULL, '2019-05-19 12:33:57', NULL, '2019-05-19 12:33:57'),
(12, 17, 200, 2, NULL, '2019-05-19 13:10:19', NULL, '2019-05-19 13:10:19'),
(13, 14, 200, 2, NULL, '2019-05-19 13:11:03', NULL, '2019-05-19 13:11:03'),
(14, 18, 300, 2, NULL, '2019-05-19 13:13:59', NULL, '2019-05-19 13:13:59'),
(15, 19, 100, 2, NULL, '2019-05-19 13:17:31', NULL, '2019-05-19 13:17:31'),
(16, 20, 300, 2, NULL, '2019-05-19 13:29:16', NULL, '2019-05-19 13:29:16'),
(17, 20, 200, 2, NULL, '2019-05-19 13:30:25', NULL, '2019-05-19 13:30:25'),
(16, NULL, 500, 2, NULL, '2019-05-19 19:38:31', NULL, '2019-05-19 19:38:31'),
(9, NULL, 500, 2, NULL, '2019-05-19 19:42:14', NULL, '2019-05-19 19:42:14'),
(2, 25, 300, 2, NULL, '2019-05-20 12:09:02', NULL, '2019-05-20 12:09:02'),
(2, 13, 10, 2, NULL, '2019-05-20 12:21:31', NULL, '2019-05-20 12:21:31'),
(16, 26, 200, 2, NULL, '2019-05-20 12:26:14', NULL, '2019-05-20 12:26:14'),
(16, 13, 100, 2, NULL, '2019-05-20 12:30:17', NULL, '2019-05-20 12:30:17'),
(2, 26, 20, 2, NULL, '2019-05-21 11:03:52', NULL, '2019-05-21 11:03:52'),
(2, 26, 20, 2, NULL, '2019-05-21 11:06:38', NULL, '2019-05-21 11:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `supplayers`
--

CREATE TABLE `supplayers` (
  `id` int(11) NOT NULL,
  `sup_name` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `pro_count` int(11) NOT NULL,
  `status` int(11) DEFAULT '1',
  `deleted` int(11) DEFAULT '1',
  `created_by` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(200) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplayers`
--

INSERT INTO `supplayers` (`id`, `sup_name`, `address`, `pro_count`, `status`, `deleted`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, '22222', '213213123321', 0, 2, 2, NULL, NULL, 'يسيس', '2019-05-11 18:23:17'),
(2, 'sayed ahmed', '344324', 20, 2, 2, NULL, '2019-05-11 13:37:00', 'يسيس', '2019-05-21 11:06:38'),
(3, 'ddddddddd', 'ddddddddddddd', 0, 2, 1, NULL, '2019-05-11 13:37:44', NULL, '2019-05-11 18:23:29'),
(4, 'mostafa', 'hamdiiiiiiiiii', 0, 1, 1, NULL, '2019-05-11 13:52:09', 'يسيس', '2019-05-11 18:22:18'),
(5, 'mostafa', 'hamdididddddd', 0, 2, 1, NULL, '2019-05-11 13:53:03', NULL, '2019-05-11 18:22:13'),
(6, 'ahmed', 'dsasss', 0, 2, 1, NULL, '2019-05-11 17:08:07', NULL, '2019-05-11 18:21:50'),
(7, 'makkah', 'teta', 0, 2, 1, 'يسيس', '2019-05-11 18:03:49', NULL, '2019-05-11 18:21:21'),
(8, 'eeqwewq', 'ewqeedsadsa', 0, 2, 1, 'يسيس', '2019-05-11 18:31:18', NULL, '2019-05-12 10:58:53'),
(9, 'ahmed', 'dddddddadaasdasd', 20, 2, 2, 'يسيس', '2019-05-18 11:25:49', NULL, '2019-05-18 11:25:49'),
(10, 'osama hamdi', 'asdadadsad', 200, 2, 2, 'يسيس', '2019-05-19 13:06:27', NULL, '2019-05-19 13:06:27'),
(11, 'osama hamdi', 'asdadadsad', 200, 2, 2, 'يسيس', '2019-05-19 13:09:25', NULL, '2019-05-19 13:09:25'),
(12, 'osama hamdi', 'asdadadsad', 200, 2, 2, 'يسيس', '2019-05-19 13:10:19', NULL, '2019-05-19 13:10:19'),
(13, 'mostafa hamdi', 'teta', 200, 2, 2, 'يسيس', '2019-05-19 13:11:03', NULL, '2019-05-19 13:11:03'),
(14, 'ahmed 11111111', 'ddasddasd', 300, 2, 2, 'يسيس', '2019-05-19 13:13:59', NULL, '2019-05-19 13:13:59'),
(15, 'mostafa', 'mmmmm', 100, 2, 2, 'يسيس', '2019-05-19 13:17:31', NULL, '2019-05-19 13:17:31'),
(16, 'mostafa hamdi', 'sssssssssssss', 300, 2, 2, 'يسيس', '2019-05-19 13:29:16', NULL, '2019-05-19 13:29:16'),
(17, 'ddd', 'dddasd', 200, 2, 2, 'يسيس', '2019-05-19 13:30:25', NULL, '2019-05-19 13:30:25'),
(18, NULL, NULL, 500, 1, 1, NULL, '2019-05-19 18:59:31', NULL, '2019-05-19 18:59:31'),
(19, NULL, NULL, 500, 1, 1, NULL, '2019-05-19 19:01:09', NULL, '2019-05-19 19:01:09'),
(20, NULL, NULL, 500, 1, 1, NULL, '2019-05-19 19:01:39', NULL, '2019-05-19 19:01:39'),
(21, NULL, NULL, 500, 1, 1, NULL, '2019-05-19 19:02:20', NULL, '2019-05-19 19:02:20'),
(22, NULL, NULL, 500, 1, 1, NULL, '2019-05-19 19:10:03', NULL, '2019-05-19 19:10:03'),
(23, NULL, NULL, 500, 1, 1, NULL, '2019-05-19 19:16:31', NULL, '2019-05-19 19:16:31'),
(24, NULL, NULL, 500, 1, 1, NULL, '2019-05-19 19:36:41', NULL, '2019-05-19 19:36:41'),
(25, NULL, NULL, 500, 1, 1, NULL, '2019-05-19 19:38:31', NULL, '2019-05-19 19:38:31'),
(26, NULL, NULL, 500, 1, 1, NULL, '2019-05-19 19:42:14', NULL, '2019-05-19 19:42:14'),
(27, NULL, NULL, 0, 1, 1, NULL, '2019-05-20 11:42:44', NULL, '2019-05-20 11:42:44'),
(28, NULL, NULL, 0, 1, 1, NULL, '2019-05-20 11:43:48', NULL, '2019-05-20 11:43:48'),
(29, NULL, NULL, 0, 1, 1, NULL, '2019-05-20 11:44:46', NULL, '2019-05-20 11:44:46'),
(30, NULL, NULL, 0, 1, 1, NULL, '2019-05-20 11:46:08', NULL, '2019-05-20 11:46:08'),
(31, NULL, NULL, 0, 1, 1, NULL, '2019-05-20 11:46:26', NULL, '2019-05-20 11:46:26'),
(32, NULL, NULL, 300, 1, 1, NULL, '2019-05-20 12:09:02', NULL, '2019-05-20 12:09:02'),
(33, NULL, NULL, 10, 1, 1, NULL, '2019-05-20 12:21:31', NULL, '2019-05-20 12:21:31'),
(34, NULL, NULL, 200, 1, 1, NULL, '2019-05-20 12:26:13', NULL, '2019-05-20 12:26:13'),
(35, NULL, NULL, 100, 1, 1, NULL, '2019-05-20 12:30:17', NULL, '2019-05-20 12:30:17'),
(36, '2', '2', 2, 2, 2, 'يسيس', '2019-05-20 12:32:06', NULL, '2019-05-20 12:32:06'),
(37, '112123', '1', 1, 2, 2, 'يسيس', '2019-05-20 12:32:25', NULL, '2019-05-20 12:32:25'),
(38, NULL, NULL, 20, 1, 1, NULL, '2019-05-21 11:03:52', NULL, '2019-05-21 11:03:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 'Mostafa Hamdi', 'mostafah@yahoo.com', '$2y$10$cdeRY.ssyk8ZH6cdHoMvsuyqrwy5v29bnGpWIUgOrDhGldZz5lXkK', 'ppgLpPz0FjwyFBx4EIQXPFGAuOcQ4yEp3IOmDLJ9jk3SyWVRIv3btOer8hHD', '2019-03-17 10:57:28', '2019-03-17 10:57:28'),
(13, 'mostafa hamdi', 'mostafa@yahoo.com', '$2y$10$gQGYLUUWvCrO6JNdknk.ZuMpb.Ur28Xh9TvuiHnrUVU.0Sssj5L7G', 'DFokAyqwiNaP8xXGz4Ji2lKrpPRVkQb8HDzdq2cu2r5t0BiIsAwilP03uXJS', '2019-04-25 14:01:42', '2019-04-25 14:01:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suplayer_products`
--
ALTER TABLE `suplayer_products`
  ADD KEY `products_id` (`products_id`),
  ADD KEY `suppleyers_id` (`supplayers_id`);

--
-- Indexes for table `supplayers`
--
ALTER TABLE `supplayers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `supplayers`
--
ALTER TABLE `supplayers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `suplayer_products`
--
ALTER TABLE `suplayer_products`
  ADD CONSTRAINT `suplayer_products_ibfk_1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `suplayer_products_ibfk_2` FOREIGN KEY (`supplayers_id`) REFERENCES `supplayers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
