-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 09:34 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `access_en`
--

-- --------------------------------------------------------

--
-- Table structure for table `en_aboutuscontents`
--

CREATE TABLE `en_aboutuscontents` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `detail` text NOT NULL,
  `status` int(11) NOT NULL,
  `deleted` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `aboutuscontents_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `en_aboutuscontents`
--

INSERT INTO `en_aboutuscontents` (`id`, `name`, `detail`, `status`, `deleted`, `created_at`, `updated_at`, `aboutuscontents_id`) VALUES
(1, 'Our Vision', 'The bit of code below does return the proper images, but I am also getting aThe bit of code below does return the proper images, but I am also getting aThe bit of code below does return the proper images, but I am also getting aThe bit of code below does return the proper images, but I am also getting a', 1, 2, '2019-05-02 13:24:38', '2019-04-30 19:43:52', 1),
(2, 'Our Mission', 'Итак, когда я звоню в mysiteapp.local/beds, я должен вернуть композитный массив с данными о кровати и, если есть оговорка, или если эта кровать занята в данный момент, информация о пребывании и информация о гостях. dasdasdadas', 1, 2, '2019-05-02 13:24:42', '2019-04-30 19:43:57', 2),
(3, '333', '333', 1, 2, '2019-05-12 06:33:44', '2019-05-12 06:33:44', 3);

-- --------------------------------------------------------

--
-- Table structure for table `en_addresses`
--

CREATE TABLE `en_addresses` (
  `id` int(11) NOT NULL,
  `brunch` varchar(150) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `deleted` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `addresses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `en_addresses`
--

INSERT INTO `en_addresses` (`id`, `brunch`, `address`, `status`, `deleted`, `created_at`, `updated_at`, `addresses_id`) VALUES
(1, 'rab3a el estsmary', '70 Nozha Street', 1, 2, '2019-05-02 13:25:17', '2019-04-28 20:06:17', 1),
(2, 'nasr city', 'youssef abbas from awel abbas', 1, 2, '2019-05-02 13:25:20', '2019-04-28 20:09:22', 2),
(3, 'el salam brunch', 'el salaaam awel 3asheer', 1, 1, '2019-05-04 23:22:30', '2019-05-04 21:22:30', 3);

-- --------------------------------------------------------

--
-- Table structure for table `en_counters`
--

CREATE TABLE `en_counters` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `counters_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `en_counters`
--

INSERT INTO `en_counters` (`id`, `name`, `status`, `deleted`, `created_at`, `updated_at`, `counters_id`) VALUES
(1, 'PROJECT ANNLYSS', 1, 2, '2019-04-30 21:03:31', '2019-04-28 08:59:10', 1),
(2, 'PROJECT ANNLYSS', 1, 2, '2019-04-30 21:03:34', '2019-04-28 08:59:57', 2),
(3, 'PROJECT ANNLYSS', 1, 2, '2019-04-30 21:03:38', '2019-04-28 09:00:25', 3),
(4, 'PROJECT ANNLYSS', 1, 2, '2019-04-30 21:03:41', '2019-04-28 09:00:47', 4),
(5, 'ggg', 1, 1, '2019-05-06 11:15:47', '2019-05-06 09:15:47', 5);

-- --------------------------------------------------------

--
-- Table structure for table `en_projects`
--

CREATE TABLE `en_projects` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `mini_detail` text,
  `detail` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `projects_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `en_projects`
--

INSERT INTO `en_projects` (`id`, `name`, `mini_detail`, `detail`, `status`, `deleted`, `created_at`, `updated_at`, `projects_id`) VALUES
(1, 'Current Project 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium atque consectetur consequuntur cupiditate deserunt dignissimos eligendi eos error es', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium atque consectetur consequuntur cupiditate deserunt dignissimos eligendi eos error est ex fuga illum, nemo nostrum nulla placeat repellendus sed soluta totam! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium atque consectetur consequuntur cupiditate deserunt dignissimos eligendi eos error est ex fuga illum, nemo nostrum nulla placeat', 1, 2, '2019-05-19 01:06:07', '2019-05-11 21:20:04', 1),
(2, 'Finished Project 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium atque consectetur consequuntur cupiditate deserunt dignissimos eligendi eos error est ex fuga illum,', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium atque consectetur consequuntur cupiditate deserunt dignissimos eligendi eos error est ex fuga illum, nemo nostrum nulla placeat repellendus sed soluta totam! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium atque consectetur consequuntur cupiditate deserunt dignissimos eligendi eos error est ex fuga illum, nemo nostrum nulla placeat', 1, 2, '2019-04-30 21:03:52', '2019-04-30 06:53:40', 2),
(3, 'ffffff', 'sadsaddasda', 'dsadsdadadasdd', 1, 2, '2019-05-05 09:21:05', '2019-05-05 09:21:05', 3),
(4, 'dsadsa', 'sadasd', 'dsad', 1, 2, '2019-05-06 10:01:56', '2019-05-06 10:01:56', 4),
(5, 'eee', 'qqweqew', 'ewqewq', 1, 1, '2019-05-06 12:28:39', '2019-05-06 10:28:39', 5),
(6, 'fsdf', 'dfsf', 'fdsfsd', 1, 1, '2019-05-06 12:28:32', '2019-05-06 10:28:32', 6),
(7, 'dd', 'dd', 'ddd', 1, 1, '2019-05-06 12:27:02', '2019-05-06 10:27:02', 7),
(8, 'e', 'e', 'e', 1, 1, '2019-05-06 12:26:48', '2019-05-06 10:26:48', 8);

-- --------------------------------------------------------

--
-- Table structure for table `en_settings`
--

CREATE TABLE `en_settings` (
  `id` int(11) NOT NULL,
  `aboutus_detail` mediumtext,
  `web_name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `settings_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `en_settings`
--

INSERT INTO `en_settings` (`id`, `aboutus_detail`, `web_name`, `created_at`, `updated_at`, `settings_id`) VALUES
(1, 'Итак, когда я звоню в mysiteapp.local/beds, я должен вернуть композитный массив с данными о кровати и, если есть оговорка, или если эта кровать занята в данный момент, информация о пребывании и информация о гостях.', 'access', '2019-05-06 10:53:14', '2019-05-06 08:53:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `en_sliders`
--

CREATE TABLE `en_sliders` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `deleted` int(11) DEFAULT NULL,
  `sliders_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `en_sliders`
--

INSERT INTO `en_sliders` (`id`, `name`, `detail`, `status`, `deleted`, `sliders_id`, `created_at`, `updated_at`) VALUES
(1, 'mostafa hamdi', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae officiis doloribus assumenda perferendis inventore accusantium ullam distinctio eius veritatis modi.', 1, 1, 1, '2019-04-30 21:10:55', '2019-04-30 19:10:55'),
(2, 'Access 2', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae officiis doloribus assumenda perferendis inventore accusantium ullam distinctio eius veritatis modi.', 1, 2, 2, '2019-04-30 21:04:04', '2019-04-29 05:33:39'),
(3, 'Access 3', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae officiis doloribus assumenda perferendis inventore accusantium ullam distinctio eius veritatis modi.', 1, 2, 3, '2019-05-06 11:09:00', '2019-05-06 09:09:00'),
(4, 'Access 4', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae officiis doloribus assumenda perferendis inventore accusantium ullam distinctio eius veritatis modi.', 1, 2, 4, '2019-04-30 19:59:12', '2019-04-30 19:59:12'),
(5, 'Our Vision', 'dsadasdsa', 1, 2, 5, '2019-05-01 08:45:37', '2019-05-01 08:45:37'),
(6, 'Our Mission', 'aaaaaaaaaaaaaaaaaaaaaaa', 1, 2, 6, '2019-05-01 08:46:21', '2019-05-01 08:46:21'),
(7, 'Project 1', 'bbbbbbbbbbbbbbbbbbbbbbbb', 2, 1, 7, '2019-05-05 10:35:40', '2019-05-05 08:35:40'),
(8, 'cccccccc', 'ccccccccccc', 1, 2, 8, '2019-05-05 10:29:53', '2019-05-05 10:29:53'),
(9, 'bbbbbbbb', 'bbbbbbbbbbdddd', 2, 2, 9, '2019-05-06 11:09:17', '2019-05-06 09:09:17'),
(10, 'dad', 'adasd', 2, 1, 10, '2019-05-11 23:05:05', '2019-05-11 21:05:05'),
(11, 'ddd', 'ddd', 1, 1, 11, '2019-05-05 15:01:37', '2019-05-05 13:01:37'),
(12, 'dsa', 'dsa', 1, 1, 12, '2019-05-09 17:25:13', '2019-05-09 15:25:13'),
(13, 'fdsdf', 'sdfsfdsf', 1, 1, 13, '2019-05-09 17:25:06', '2019-05-09 15:25:06'),
(14, 'ewqew', 'qewqewq', 1, 1, 14, '2019-05-09 17:24:59', '2019-05-09 15:24:59'),
(15, 'dasds', 'dasd', 1, 2, 15, '2019-05-10 08:40:07', '2019-05-10 08:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `en_aboutuscontents`
--
ALTER TABLE `en_aboutuscontents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aboutuscontents_id` (`aboutuscontents_id`);

--
-- Indexes for table `en_addresses`
--
ALTER TABLE `en_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_id` (`addresses_id`);

--
-- Indexes for table `en_counters`
--
ALTER TABLE `en_counters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `counters_id` (`counters_id`);

--
-- Indexes for table `en_projects`
--
ALTER TABLE `en_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_id` (`projects_id`);

--
-- Indexes for table `en_settings`
--
ALTER TABLE `en_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_id` (`settings_id`);

--
-- Indexes for table `en_sliders`
--
ALTER TABLE `en_sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_id` (`sliders_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `en_aboutuscontents`
--
ALTER TABLE `en_aboutuscontents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `en_addresses`
--
ALTER TABLE `en_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `en_counters`
--
ALTER TABLE `en_counters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `en_projects`
--
ALTER TABLE `en_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `en_settings`
--
ALTER TABLE `en_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `en_sliders`
--
ALTER TABLE `en_sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `en_aboutuscontents`
--
ALTER TABLE `en_aboutuscontents`
  ADD CONSTRAINT `en_aboutuscontents_ibfk_1` FOREIGN KEY (`aboutuscontents_id`) REFERENCES `access`.`aboutuscontents` (`id`);

--
-- Constraints for table `en_addresses`
--
ALTER TABLE `en_addresses`
  ADD CONSTRAINT `en_addresses_ibfk_1` FOREIGN KEY (`addresses_id`) REFERENCES `access`.`addresses` (`id`);

--
-- Constraints for table `en_counters`
--
ALTER TABLE `en_counters`
  ADD CONSTRAINT `en_counters_ibfk_1` FOREIGN KEY (`counters_id`) REFERENCES `access`.`counters` (`id`);

--
-- Constraints for table `en_projects`
--
ALTER TABLE `en_projects`
  ADD CONSTRAINT `en_projects_ibfk_1` FOREIGN KEY (`projects_id`) REFERENCES `access`.`projects` (`id`);

--
-- Constraints for table `en_settings`
--
ALTER TABLE `en_settings`
  ADD CONSTRAINT `en_settings_ibfk_1` FOREIGN KEY (`settings_id`) REFERENCES `access`.`settings` (`id`);

--
-- Constraints for table `en_sliders`
--
ALTER TABLE `en_sliders`
  ADD CONSTRAINT `en_sliders_ibfk_1` FOREIGN KEY (`sliders_id`) REFERENCES `access`.`sliders` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
