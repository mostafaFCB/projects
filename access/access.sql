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
-- Database: `access`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutuscontents`
--

CREATE TABLE `aboutuscontents` (
  `id` int(11) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(150) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aboutuscontents`
--

INSERT INTO `aboutuscontents` (`id`, `image`, `status`, `deleted`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'images/H2TU8n0a8EMMMxvgp73X29WMkACJlA6Fi6omt2EA.jpeg', 1, 2, '2019-05-02 13:16:36', NULL, '2019-04-30 19:43:52', NULL),
(2, 'images/I5hKcezJ43BFi3SsfMYmgmFJFuUCLNUmU8f14Bhc.jpeg', 1, 2, '2019-05-02 13:16:40', NULL, '2019-04-30 19:43:56', NULL),
(3, 'images/dNt8ugVbt016GjmcbEU0aAE3PnJCODIDk7E4gWOd.jpeg', 1, 2, '2019-05-12 08:33:44', 'osamaa hamdi', '2019-05-12 06:33:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `phone` varchar(150) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(150) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `phone`, `status`, `deleted`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '1222222 - 555555 - 555555', 1, 2, '2019-05-02 13:16:08', NULL, '2019-04-28 20:06:17', NULL),
(2, '2222222 - 4444444', 1, 2, '2019-05-02 13:16:11', NULL, '2019-04-28 20:09:22', NULL),
(3, '2427587578 - 255875752', 1, 1, '2019-05-04 23:22:30', NULL, '2019-05-04 21:22:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` int(11) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `counter` int(111) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(150) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `image`, `counter`, `status`, `deleted`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'images/Uuh4flWHcHmnrQCILDHhBaFIVHNx4qaHiba9DmWT.png', 1000, 1, 2, '2019-05-02 13:15:48', NULL, '2019-04-28 08:59:10', NULL),
(2, 'images/tzBzb1ikAldm5EUOfE1VQn4YOmlTAB78QM4g0qhW.png', 500, 1, 2, '2019-05-02 13:15:51', NULL, '2019-04-28 08:59:57', NULL),
(3, 'images/rIKQ6srxzkzoTcI9kM0rnIG4lPC39s6h2y2fkM1X.png', 700, 1, 2, '2019-05-02 13:15:56', NULL, '2019-04-28 09:00:24', NULL),
(4, 'images/HuenVCfDeeGLBYTdDmyBRgcx1pSINHP0Xj68tYxi.png', 600, 1, 2, '2019-05-02 13:15:59', NULL, '2019-04-28 09:00:46', NULL),
(5, 'images/lOtzzBOSq1vb3lNsa14B2D9CAe7uAoqzGhreYvJV.png', 5555, 1, 1, '2019-05-06 11:15:47', 'Mostafa Hamdi', '2019-05-06 09:15:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `first_name`, `last_name`, `email`, `phone`, `description`, `created_at`, `updated_at`) VALUES
(1, 'ewqeqwe', 'qweqewqw', 'ewqewq', '0122222555', 'qweqeqewqwe', '2019-04-19 13:32:59', '2019-04-19 13:32:59'),
(2, 'dsadsad', 'dasdasd', 'dsadasda', '444444', 'fffffffffffffffffffff', '2019-04-19 13:43:29', '2019-04-19 13:43:29'),
(3, 'dasdasd', 'dsadsadas', 'dasdasdsa', '7777777', 'dadasdads', '2019-04-19 13:46:38', '2019-04-19 13:46:38'),
(4, 'dsadas', 'dsadas', 'sadasd', 'dsadas', 'dsadsadsa', '2019-04-22 08:23:26', '2019-04-22 08:23:26'),
(5, 'eee', 'eee', 'eee', 'eeee', 'eeee', '2019-05-05 12:58:55', '2019-05-05 12:58:55'),
(6, 'ddads', 'dsadsadas', 'dsad', 'dsa', 'dadsada', '2019-05-05 12:59:42', '2019-05-05 12:59:42'),
(7, 'mmm', 'mmm', 'ffff', 'dddd', 'dddd', '2019-05-18 14:05:29', '2019-05-18 14:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `slider_image` varchar(255) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(150) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `slider_image`, `type`, `status`, `deleted`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'images/f9Ck1oI1Y2gyEMDlyknYmJjaarE8cGK62bWebIVF.jpeg', 'images/1CRLTDUj0AEoW2bpBWNjAZDYzRSdwTKYMnXhEEIm.jpeg', '2', 1, 2, '2019-05-19 01:06:26', NULL, '2019-05-11 21:20:04', 'Mostafa Hamdi'),
(2, 'images/x3wBmgVXgkImo5a2XbAgv9fXGSkaYgrWbtQR0H8Y.jpeg', 'images/TVAgayXF8fvFqDJ3qPpPMBsrkmztBOJ3N4OVKyiJ.jpeg', '1', 1, 2, '2019-05-02 13:15:38', NULL, '2019-04-30 06:53:40', NULL),
(3, 'images/SzXgDvHwd1TepFoxdVxKXcfReMFk9PnOy58VgLAP.jpeg', 'images/JMYkJNtFDGQhsA1kDQgfWiTFwmlFP3jIrtzZVcP4.jpeg', '1', 1, 2, '2019-05-05 11:30:26', 'osamaa hamdi', '2019-05-05 09:30:26', 'osamaa hamdi'),
(4, 'images/rKMc18OOIToEPObjoJROe7yhmU458PjXUQwXdjEo.jpeg', 'images/We5z70LA8Z12zvi8PQqNvXO9XuDYpbrtjaNqPPKR.jpeg', '1', 1, 2, '2019-05-06 10:01:56', 'Mostafa Hamdi', '2019-05-06 10:01:56', NULL),
(5, 'images/Ua9oGyPLuFFzBtE3ewCCOB1pSIhaFpOxpj7m70sp.png', 'images/CFaAswVvtET08cnbsHylnJ5ebpJnNWtXSfyyeIZH.jpeg', '1', 1, 1, '2019-05-06 12:28:39', 'Mostafa Hamdi', '2019-05-06 10:28:39', NULL),
(6, 'images/QFog3h09juk9fjnytI8H7ZT29uuyWiyAMXCba2gU.jpeg', 'images/p-6.jpeg', '1', 1, 1, '2019-05-06 12:28:32', 'Mostafa Hamdi', '2019-05-06 10:28:32', NULL),
(7, 'images/9vqbr4Gzp2Sb9ZspPhL5e9JTqbTQS4wZi6tQRMRi.jpeg', 'images/project-3.jpeg', '1', 1, 1, '2019-05-06 12:27:02', 'Mostafa Hamdi', '2019-05-06 10:27:02', NULL),
(8, 'images/gno9aq3iJ5C8QJi89RLagopsPlhDt73GlTow1Wmc.jpeg', 'images/project-3.jpeg', '1', 1, 1, '2019-05-06 12:26:19', 'Mostafa Hamdi', '2019-05-06 10:26:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instegram` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `google_map` varchar(255) DEFAULT NULL,
  `whatisapp` varchar(150) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(150) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `image`, `facebook`, `instegram`, `twitter`, `google_map`, `whatisapp`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'images/RCzoKbZ0lBGNwlEB48z8fFL9XcsYbikMqrleyJZw.png', 'https://www.facebook.com/mostafa.hamdi.338', 'https://www.Instagram.com', 'https://www.twitter.com', 'https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d13810.787610415055!2d31.337007199999995!3d30.074221400000003!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1551339416862', 'https://www.whatsapp.com', 1, '2019-05-06 10:53:14', 'Mostafa Hamdi', '2019-05-06 08:53:14', 'Mostafa Hamdi');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(150) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `status`, `deleted`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'images/g8wvXa0LprF50nVtFZGPvY43W8mmCMGZ4D2BqtkV.jpeg', 1, 1, '2019-05-02 13:13:52', NULL, '2019-04-30 19:10:00', NULL),
(2, 'images/i2QYebwUByDylTCDrMZ7woIX7k1FeNy9Kte7je3n.jpeg', 1, 2, '2019-05-02 13:14:21', NULL, '2019-04-29 05:31:33', NULL),
(3, 'images/o9sSzuId7cL4H6KwfdsQfqY8sxjkieTlmgzLCn3x.jpeg', 1, 2, '2019-05-06 11:09:00', NULL, '2019-05-06 09:09:00', 'Mostafa Hamdi'),
(4, 'images/TWoFL0ryIBcPkIroff1RV9ydssY8Uq2lCWY0FIZD.jpeg', 1, 2, '2019-05-02 13:14:21', 'Mostafa Hamdi', '2019-04-30 19:59:12', NULL),
(5, 'images/39XqU2HJu2lTH6jnEqAJpuGiN9FN8QiuKDXeiD7M.jpeg', 1, 2, '2019-05-02 13:14:21', 'Mostafa Hamdi', '2019-05-01 08:45:37', NULL),
(6, 'images/63NQrZzchKvoRVipdgE4lkfB4SBk2JJkvPVHI5vy.jpeg', 1, 2, '2019-05-02 13:14:21', 'Mostafa Hamdi', '2019-05-01 08:46:21', NULL),
(7, 'images/4S6fsPFCY07cH3Mm6GH5caHUiFfBAu76hCjFaEpH.jpeg', 2, 1, '2019-05-05 10:35:40', 'Mostafa Hamdi', '2019-05-05 08:35:40', NULL),
(8, 'images/FDdXxzz6V1UjJw4lq8Sp5ieMXRTItVhWo78dRLkh.jpeg', 1, 2, '2019-05-05 10:29:53', 'osamaa hamdi', '2019-05-05 10:29:53', NULL),
(9, 'images/Vh9UxXPfO8FtFATshuFt50kFRGb8XPQPpj642uyy.jpeg', 2, 2, '2019-05-06 11:09:17', 'osamaa hamdi', '2019-05-06 09:09:17', 'Mostafa Hamdi'),
(10, 'images/hxEIUk9yeDZ6bsrv03DAhr3rYdKvwV9lYV0qaL7G.jpeg', 2, 1, '2019-05-11 23:05:05', 'osamaa hamdi', '2019-05-11 21:05:05', 'Mostafa Hamdi'),
(11, 'images/BwcpiUPqH0gv3kpzNDjXfFs9gIEKeTXIxQ4BOXsn.jpeg', 1, 1, '2019-05-05 15:01:36', 'osamaa hamdi', '2019-05-05 13:01:36', NULL),
(12, 'images/happy.png', 1, 1, '2019-05-09 17:25:13', NULL, '2019-05-09 15:25:13', NULL),
(13, 'images/happy.png', 1, 1, '2019-05-09 17:25:06', 'osamaa hamdi', '2019-05-09 15:25:06', NULL),
(14, 'images/quotes.png', 1, 1, '2019-05-09 17:24:59', 'osamaa hamdi', '2019-05-09 15:24:59', NULL),
(15, 'images/558_erau.jpg', 1, 2, '2019-05-10 10:40:07', 'osamaa hamdi', '2019-05-10 08:40:07', NULL);

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
(12, 'Mostafa Hamdi', 'mostafah@yahoo.com', '$2y$10$wbppo3zeOrSmMb/btm4E6u4m7/ko4TpA5zBcoog.DK84JsOLi8vOe', 'mdpdDyQC8E6GQcFzfeOuGrG0szVxH4ayoEQdIGB02fytMPKDKK4G0SaPZokx', '2019-03-17 10:57:28', '2019-03-17 10:57:28'),
(13, 'osamaa hamdi', 'osamahamdi@yahoo.com', '$2y$10$cdeRY.ssyk8ZH6cdHoMvsuyqrwy5v29bnGpWIUgOrDhGldZz5lXkK$2y$10$wbppo3zeOrSmMb/btm4E6u4m7/ko4TpA5zBcoog.DK84JsOLi8vOe', 'RPZkbQ3euY4BdKX7QjPzBx6rRNIoopPiuGo1Fg3vedEw30qMgnhR5dLxRLYY', '2019-03-17 10:57:28', '2019-03-17 10:57:28'),
(14, 'ahmed', 'ahmed@yahoo.com', '$2y$10$wbppo3zeOrSmMb/btm4E6u4m7/ko4TpA5zBcoog.DK84JsOLi8vOe', 'n9YNsuL7jxGzUCITad9UX9Vwc8Q0bDqFU3GP9glaxR0NqDqqFJknQ58ECUrd', '2019-05-18 13:57:26', '2019-05-18 13:57:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutuscontents`
--
ALTER TABLE `aboutuscontents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `aboutuscontents`
--
ALTER TABLE `aboutuscontents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
