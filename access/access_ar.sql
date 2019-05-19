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
-- Database: `access_ar`
--

-- --------------------------------------------------------

--
-- Table structure for table `ar_aboutuscontents`
--

CREATE TABLE `ar_aboutuscontents` (
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
-- Dumping data for table `ar_aboutuscontents`
--

INSERT INTO `ar_aboutuscontents` (`id`, `name`, `detail`, `status`, `deleted`, `created_at`, `updated_at`, `aboutuscontents_id`) VALUES
(1, 'روئيتنا', 'جاح بالنسبة لنا أكثر من مجرد إحصاءات، فهو يتولد من حماسنا وشغفنا بالتميز، فنحن نعمل من خلال كل شركة من شركاتنا على تحديد وتطبيق الممارسات الأمثل على مستوى الصناعة في المنطقة، وعلى إيجاد معايير للسوق تضاهي المعايير الدولية. كما أننا نؤمن بالعلاقات التجارية طويلة الأمد،', 1, 2, '2019-05-02 13:17:42', '2019-04-30 19:43:52', 1),
(2, 'مهمتنا', 'جاح بالنسبة لنا أكثر من مجرد إحصاءات، فهو يتولد من حماسنا وشغفنا بالتميز، فنحن نعمل من خلال كل شركة من شركاتنا على تحديد وتطبيق الممارسات الأمثل على مستوى الصناعة في المنطقة، وعلى إيجاد معايير للسوق تضاهي المعايير الدولية. كما أننا نؤمن بالعلاقات التجارية طويلة الأمد،ddd', 1, 2, '2019-05-02 13:17:46', '2019-04-30 19:43:57', 2),
(3, '333', '33', 1, 2, '2019-05-12 06:33:44', '2019-05-12 06:33:44', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ar_addresses`
--

CREATE TABLE `ar_addresses` (
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
-- Dumping data for table `ar_addresses`
--

INSERT INTO `ar_addresses` (`id`, `brunch`, `address`, `status`, `deleted`, `created_at`, `updated_at`, `addresses_id`) VALUES
(1, 'رابعه الاسثمارى', '70 شارع النزهه', 1, 2, '2019-05-02 13:18:41', '0000-00-00 00:00:00', 1),
(2, 'مدينه نصر', 'يوسف عباس من اول عباس', 1, 2, '2019-05-02 13:18:47', '0000-00-00 00:00:00', 2),
(3, 'فرع السلام', 'السلاممممم', 1, 1, '2019-05-04 23:22:30', '2019-05-04 21:22:30', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ar_counters`
--

CREATE TABLE `ar_counters` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `deleted` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `counters_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ar_counters`
--

INSERT INTO `ar_counters` (`id`, `name`, `status`, `deleted`, `created_at`, `updated_at`, `counters_id`) VALUES
(1, 'تحليل المشروع', 1, 2, '2019-05-02 13:20:14', '2019-04-28 08:59:10', 1),
(2, 'تحليل المشروع', 1, 2, '2019-05-02 13:20:17', '2019-04-28 08:59:57', 2),
(3, 'تحليل المشروع', 1, 2, '2019-05-02 13:20:20', '2019-04-28 09:00:25', 3),
(4, 'تحليل المشروع', 1, 2, '2019-05-02 13:20:24', '2019-04-28 09:00:47', 4),
(5, 'gggg', 1, 1, '2019-05-06 11:15:48', '2019-05-06 09:15:48', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ar_projects`
--

CREATE TABLE `ar_projects` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `mini_detail` text,
  `detail` text,
  `status` int(11) NOT NULL,
  `deleted` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `projects_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ar_projects`
--

INSERT INTO `ar_projects` (`id`, `name`, `mini_detail`, `detail`, `status`, `deleted`, `created_at`, `updated_at`, `projects_id`) VALUES
(1, 'مشروع تحت الانشاء 1', 'كومي الاعدام غير مكترث بالاعمال الارهابيه التي وقعت في منازلهم حفاظ على البلاد ووفاء لها فريق القوة الخاصة الكلف بملاحقه محكومي الاعدام غير مكترث بالاعمال الارهابيه التي وقعت في منازلهم حفاظ على البلاد ووفاء له', 'فريق القوة الخاصة الكلف بملاحقه محكومي الاعدام غير مكترث بالاعمال الارهابيه التي وقعت في منازلهم حفاظ على البلاد ووفاء لها فريق القوة الخاصة الكلف بملاحقه محكومي الاعدام غير مكترث بالاعمال الارهابيه التي وقعت في منازلهم حفاظ على البلاد ووفاء لها فريق القوة الخاصة الكلف بملاحقه محكومي الاعدام غير مكترث بالاعمال الارهابيه التي وقعت في منازلهم حفاظ على البلاد ووفاء لها', 1, 2, '2019-05-19 01:06:17', '2019-05-11 21:20:04', 1),
(2, 'مشروع منتهى 1', 'فريق القوة الخاصة الكلف بملاحقه محكومي الاعدام غير مكترث بالاعمال الارهابيه التي وقعت في منازلهم حفاظ على البلاد ووفاء لها', 'فريق القوة الخاصة الكلف بملاحقه محكومي الاعدام غير مكترث بالاعمال الارهابيه التي وقعت في منازلهم حفاظ على البلاد ووفاء لها فريق القوة الخاصة الكلف بملاحقه محكومي الاعدام غير مكترث بالاعمال الارهابيه التي وقعت في منازلهم حفاظ على البلاد ووفاء لها فريق القوة الخاصة الكلف بملاحقه محكومي الاعدام غير مكترث بالاعمال الارهابيه التي وقعت في منازلهم حفاظ على البلاد ووفاء لها فريق القوة الخاصة الكلف بملاحقه محكومي الاعدام غير مكترث بالاعمال الارهابيه التي وقعت في منازلهم حفاظ على البلاد ووفاء لها', 1, 2, '2019-05-02 13:21:32', '2019-04-30 06:53:40', 2),
(3, 'بيسبيسب', 'بيسبببسيبسيبس', 'بيسبسبسبيسبيسبسبسيب', 1, 2, '2019-05-05 11:26:35', '0000-00-00 00:00:00', 3),
(4, 'dsadasd', 'adasda', 'dsads', 1, 2, '2019-05-06 10:01:56', '2019-05-06 10:01:56', 4),
(5, 'weqe', 'ewq', 'ewqe', 1, 1, '2019-05-06 12:28:39', '2019-05-06 10:28:39', 5),
(6, 'fdsf', 'dsfsd', 'fdsfds', 1, 1, '2019-05-06 12:28:32', '2019-05-06 10:28:32', 6),
(7, 'ddddd', 'ddd', 'ddd', 1, 1, '2019-05-06 12:27:02', '2019-05-06 10:27:02', 7),
(8, 're', 'e', 'e', 1, 1, '2019-05-06 12:26:48', '2019-05-06 10:26:48', 8);

-- --------------------------------------------------------

--
-- Table structure for table `ar_settings`
--

CREATE TABLE `ar_settings` (
  `id` int(11) NOT NULL,
  `aboutus_detail` mediumtext,
  `web_name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `settings_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ar_settings`
--

INSERT INTO `ar_settings` (`id`, `aboutus_detail`, `web_name`, `created_at`, `updated_at`, `settings_id`) VALUES
(1, 'ddddبليلبيلبيليليبليبلؤءئلاؤرؤرىت', 'اكسس', '2019-05-04 08:19:32', '2019-05-04 06:19:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ar_sliders`
--

CREATE TABLE `ar_sliders` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `deleted` int(11) DEFAULT NULL,
  `sliders_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ar_sliders`
--

INSERT INTO `ar_sliders` (`id`, `name`, `detail`, `status`, `deleted`, `sliders_id`, `created_at`, `updated_at`) VALUES
(1, 'البالبابلابلا', 'بالبابلابالبابل', 1, 1, 1, '2019-05-02 13:23:37', '2019-04-30 19:10:55'),
(2, 'تتتتتتتتتتتتتتتتتتتتتتتت', 'تتتتتتتتتتتتتت', 1, 2, 2, '2019-05-02 13:23:37', '2019-04-28 05:20:32'),
(3, 'حححححححححححححح', 'ححححححححححححححح', 1, 2, 3, '2019-05-06 11:09:00', '2019-05-06 09:09:00'),
(4, 'اكسس 4', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae officiis doloribus assumenda perferendis inventore accusantium ullam distinctio eius veritatis modi.', 1, 2, 4, '2019-05-02 13:23:37', '2019-04-30 19:59:13'),
(5, 'sdadsads', 'sdadsad', 1, 2, 5, '2019-05-02 13:23:37', '2019-05-01 08:45:37'),
(6, 'aaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 1, 2, 6, '2019-05-02 13:23:37', '2019-05-01 08:46:21'),
(7, 'dasddasd', 'asdadasd', 2, 1, 7, '2019-05-05 10:35:40', '2019-05-05 08:35:40'),
(8, 'ccccccccc', 'cccccccccccccccccccc', 1, 2, 8, '2019-05-05 10:29:54', '2019-05-05 10:29:54'),
(9, 'bbbbbbbbb', 'bbbbbbbbbbbbbbbb', 2, 2, 9, '2019-05-06 11:09:17', '2019-05-06 09:09:17'),
(10, 'dasd', 'dadsad', 2, 1, 10, '2019-05-11 23:05:05', '2019-05-11 21:05:05'),
(11, 'ddd', 'dddd', 1, 1, 11, '2019-05-05 15:01:37', '2019-05-05 13:01:37'),
(12, 'dsa', 'dsadsa', 1, 1, 12, '2019-05-09 17:25:13', '2019-05-09 15:25:13'),
(13, 'dasda', 'dsadasd', 1, 1, 13, '2019-05-09 17:25:06', '2019-05-09 15:25:06'),
(14, 'ewqe', 'wwqe', 1, 1, 14, '2019-05-09 17:24:59', '2019-05-09 15:24:59'),
(15, 'dsad', 'dsadasd', 1, 2, 15, '2019-05-10 08:40:07', '2019-05-10 08:40:07');

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
-- Indexes for table `ar_aboutuscontents`
--
ALTER TABLE `ar_aboutuscontents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aboutuscontents_id` (`aboutuscontents_id`);

--
-- Indexes for table `ar_addresses`
--
ALTER TABLE `ar_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_id` (`addresses_id`);

--
-- Indexes for table `ar_counters`
--
ALTER TABLE `ar_counters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `counters_id` (`counters_id`);

--
-- Indexes for table `ar_projects`
--
ALTER TABLE `ar_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_id` (`projects_id`);

--
-- Indexes for table `ar_settings`
--
ALTER TABLE `ar_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_id` (`settings_id`);

--
-- Indexes for table `ar_sliders`
--
ALTER TABLE `ar_sliders`
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
-- AUTO_INCREMENT for table `ar_aboutuscontents`
--
ALTER TABLE `ar_aboutuscontents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ar_addresses`
--
ALTER TABLE `ar_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ar_counters`
--
ALTER TABLE `ar_counters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ar_projects`
--
ALTER TABLE `ar_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ar_settings`
--
ALTER TABLE `ar_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ar_sliders`
--
ALTER TABLE `ar_sliders`
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
-- Constraints for table `ar_aboutuscontents`
--
ALTER TABLE `ar_aboutuscontents`
  ADD CONSTRAINT `ar_aboutuscontents_ibfk_1` FOREIGN KEY (`aboutuscontents_id`) REFERENCES `access`.`aboutuscontents` (`id`);

--
-- Constraints for table `ar_addresses`
--
ALTER TABLE `ar_addresses`
  ADD CONSTRAINT `ar_addresses_ibfk_1` FOREIGN KEY (`addresses_id`) REFERENCES `access`.`addresses` (`id`);

--
-- Constraints for table `ar_counters`
--
ALTER TABLE `ar_counters`
  ADD CONSTRAINT `ar_counters_ibfk_1` FOREIGN KEY (`counters_id`) REFERENCES `access`.`counters` (`id`);

--
-- Constraints for table `ar_projects`
--
ALTER TABLE `ar_projects`
  ADD CONSTRAINT `ar_projects_ibfk_1` FOREIGN KEY (`projects_id`) REFERENCES `access`.`projects` (`id`);

--
-- Constraints for table `ar_settings`
--
ALTER TABLE `ar_settings`
  ADD CONSTRAINT `ar_settings_ibfk_1` FOREIGN KEY (`settings_id`) REFERENCES `access`.`settings` (`id`);

--
-- Constraints for table `ar_sliders`
--
ALTER TABLE `ar_sliders`
  ADD CONSTRAINT `ar_sliders_ibfk_1` FOREIGN KEY (`sliders_id`) REFERENCES `access`.`sliders` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
