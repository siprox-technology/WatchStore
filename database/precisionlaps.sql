-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 08:51 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `precisionlaps`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_info` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `company_info`, `created_at`, `updated_at`) VALUES
(1, 'Casio', 'Casio watches hinge on the philosophy of \'creativity and contribution\' – innovation pulses through each of the brand\'s designs. After the launch of the first Casio timepiece in the 1970s, the Japanese company became a leader in the digital watch world.The Casio empire has only grown . Today, the brand creates pieces that defy gravity, challenge the elements, and push the boundaries of both style and technology. From ultra-sporty, feature-packed designs to retro-inspired fashion timepieces,the Casio range has something for everyone. ', '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(2, 'Tissot', 'Paving the way for Swiss watch brands since 1853, Tissot was founded in the Swiss mountains and continues to pioneer craftsmanship with its innovative state of mind. Constantly staying true to its slogan ‘Innovators by Tradition’, Tissot respect their heritage by refusing to compromise on the unquestionable quality of Swiss watchmaking. Tissot has been named Official Timekeeper and Partner of many disciplines, including Basketball with the NBA, Cycling with the Tour de France and Motorsports with MotoGP to name a few. Thanks to its continuous ability to innovate and to reach all types of audience, every year Tissot sells more than four million watches worldwide.', '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(3, 'Swatch', 'Swatch, launched in 1983 by Nicolas G. Hayek, is a leading Swiss watch maker and one of the world\'s most popular brands. The first Swatch watches surprised everyone with their revolutionary concept, creative design and provocative spirit. Today Swatch continues to innovate and surprise with new models, collections and special editions. The brand maintains a strong presence in the world of sports with its commitment to snowboarding, freeskiing, surfing, volleyball, drone racing and MTB slopestyle. Right from the start, Swatch connected with art and artists. Swatch watches remain a prominent canvas for artists from a broad range of disciplines.', '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(4, 'Fossil', 'An American watch and lifestyle company creatively rooted in authentic, vintage and classic design. With each signature watch, leather accessory and other product, Fossil strives to create high-quality designs that preserve the best of the past while updating it for today. When the clean lines of the mid-century meet today\'s modern looks, the result is key items that represent the best of what Fossil stands for traditional watches created in fresh hues and materials and timeless accessories that are up for the job of accompanying you wherever you travel.', '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(5, 'Garmin', 'The world leader in GPS sports watches, Garmin has led the charge in development of multisport watches, with intuitive design features.', '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(6, 'Citizen', 'Citizen, a pioneer in watchmaking and innovative technology, promotes excellence and creativity with a deep-rooted respect for craftsmanship. In 1976, Citizen invented Eco-Drive Technology, a simple yet revolutionary concept, harnessing the power of light from natural or artificial light and converting to energy. Not only does this create a watch that never needs a battery, it uses a renewable natural resource that doesn’t fill our landfills with discarded watch batteries. Our name speaks to our belief of inclusion with a multi-cultural mindset to create timepieces that can be enjoyed by citizens all over the world. ', '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(7, 'Gucci', 'In 1972, Gucci became one of the first fashion Houses to branch into timepieces, creating successful, iconic models that combined contemporary spirit and tradition, innovation and craftsmanship, fashion and elegance. Since that time, Gucci timepieces have been made in Switzerland, assembled at the company’s watchmaking atelier in La Chaux-de-Fonds. It is this marriage of Swiss manufacturing traditions using high quality components together with Gucci detailing and Italian flair that has enabled the brand to enjoy over 40 years of watchmaking history. Today, Gucci watches are synonymous with fine quality as they bring a fresh, innovative perspective to the watch industry.', '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(8, 'Seiko', 'Established in 1881 as a watch and clock repair shop in Ginza, Tokyo, Seiko has grown and diversified over the years, but remains best known for its world-leading brands and expertise in fusing intricate watchmaking skill with elegant design. Renowned for horological innovation with a stream of world firsts including the first TV watches, Seiko created the first ever quartz watch in 1969. Seiko timepieces deliver precisely beautiful Japanese aesthetics, brought to life through total in-house manufacture.', '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(9, 'Armani Exchange', 'AX Armani Exchange is the youthful label created in 1991 by iconic Italian designer Giorgio Armani, offering men\'s and women\'s clothing and accessories that are inspired by the designer\'s codes of style. AX Armani Exchange captures the heritage of the Armani brand through a modern sensibility.', '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(10, 'BOSS', 'BOSS watches are immaculately tailored to lifestyles where style navigates and precision counts. Sharp cuts, clean design and quality materials are always on the agenda. These distinctive timepieces, with their intrinsic air of elegant sophistication, create beautiful bridges connecting classic, modern and sporty. Reliable reminders of individual signatures of ambition and success, they express confidence and refinement in carefully balanced proportions. Uncompromising attention to detail turns looks into statements and aspirations into happenings.', '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(11, 'Bulova', 'Since 1875 Bulova has been at the forefront of watch technology, innovation and industry firsts. Having opened its first store in Manhattan, Bulova has become internationally recognised for high quality materials, high accuracy and unique designs. This year Bulova heritages its past through its Archive series and re-introduces Computron, one of the world’s first LED quartz watches from the 1970’s. Equally stunning is Precisionist, with a 262 khz High Performance Quartz movement, which is 8 times more accurate than standard quartz, a 1/1000th of a second chronograph and elegant sweep motion second hand all topped off with 300m water resistance. One of Bulova’s headline collections is Curv, with the world’s first curved chronograph movement, bringing 262khz accuracy, slimline elegance this year shown in vivid blue within a PVD plated black case. Stunning and Unique.', '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(12, 'Certina', 'Certina sport watches have all the same qualities that make a great athlete - endurance, strength, precision, performance and reliability. As a serious sports watch brand, Certina crafts timepieces that meet the highest demands of quality and design, with precision engineering and comprehensive protective features built in.Certina is part of the Swatch group, which also includes Flik Flak children\'s watches.This collection of Certina watches embraces the brand philosophy for excellence, using traditional, proven watchmaking techniques alongside innovative new technologies across a full range of disciplines. Certina men\'s watches and ladies\' watches come in both mechanical and quartz and express many individualities from classic to urban.', '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(13, 'TOMMY HILFIGER', 'TOMMY HILFIGER is one of the world’s leading designer lifestyle brands and is internationally recognised for celebrating the essence of classic American cool style. The Spring Summer 2020 men’s and women’s watch and jewellery collection features minimalist feminine silhouettes and rustic leather details, putting a modern twist on timeless classics.', '2021-02-09 09:33:30', '2021-02-09 09:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `delivery_price` double(4,2) NOT NULL,
  `delivery_address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_state` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_country` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_postal_code` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` double(12,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `status`, `delivery_price`, `delivery_address`, `delivery_city`, `delivery_state`, `delivery_country`, `delivery_postal_code`, `total_price`, `user_id`, `created_at`, `updated_at`) VALUES
(24, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 817.06, 1, '2021-02-25 09:10:46', '2021-02-27 08:29:40'),
(25, 'completed', 19.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 744.67, 1, '2021-02-27 05:52:39', '2021-02-27 08:27:24'),
(26, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 787.36, 1, '2021-02-27 08:42:54', '2021-02-27 08:46:00'),
(27, 'completed', 19.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 174.87, 1, '2021-02-27 08:48:01', '2021-02-27 08:49:03'),
(28, 'completed', 19.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 500.48, 1, '2021-02-27 08:50:36', '2021-02-27 08:52:09'),
(29, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 502.68, 1, '2021-02-27 09:04:57', '2021-02-27 09:06:08'),
(30, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 1020.77, 1, '2021-02-27 09:41:05', '2021-02-27 09:41:54'),
(31, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 1223.18, 1, '2021-02-27 09:44:32', '2021-02-27 09:45:00'),
(32, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 62.68, 1, '2021-02-27 09:46:40', '2021-02-27 09:47:09'),
(33, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 415.78, 1, '2021-02-27 09:50:30', '2021-02-27 09:52:23'),
(34, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 216.68, 1, '2021-02-27 10:04:13', '2021-02-27 10:05:17'),
(35, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 430.07, 1, '2021-02-28 06:33:54', '2021-02-28 06:35:50'),
(36, 'completed', 19.99, 'No 85 Farhad St', 'Mashhad', 'Khorasan Razavi', 'USA', '22066', 295.88, 1, '2021-02-28 06:49:06', '2021-02-28 07:34:01'),
(39, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 405.86, 1, '2021-02-28 08:55:36', '2021-03-01 07:12:20'),
(43, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 595.07, 1, '2021-03-01 06:58:11', '2021-03-01 07:10:14'),
(44, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 233.17, 1, '2021-03-01 07:53:31', '2021-03-01 07:54:18'),
(47, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 307.97, 1, '2021-03-02 09:26:48', '2021-03-03 06:19:29'),
(48, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 182.58, 1, '2021-03-03 06:18:29', '2021-03-03 06:18:29'),
(49, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 216.68, 1, '2021-03-03 06:34:17', '2021-03-03 06:34:17'),
(50, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 85.78, 1, '2021-03-03 06:43:44', '2021-03-03 06:47:50'),
(51, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 1117.55, 1, '2021-03-03 06:56:41', '2021-03-05 07:48:59'),
(53, 'completed', 19.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 1234.18, 1, '2021-03-06 07:15:43', '2021-03-06 07:20:23'),
(54, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 210.08, 1, '2021-03-06 08:24:48', '2021-03-06 08:52:30'),
(56, 'completed', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 382.57, 1, '2021-03-07 06:01:22', '2021-03-07 06:07:36'),
(57, 'pending', 9.99, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', 382.57, 1, '2021-03-24 06:51:59', '2021-03-24 06:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `quantity`, `price`, `order_id`, `product_id`, `created_at`, `updated_at`) VALUES
(54, 1, 337.80, 24, 1, '2021-02-25 09:10:46', '2021-02-25 09:10:46'),
(55, 1, 394.99, 24, 2, '2021-02-25 09:10:46', '2021-02-25 09:10:46'),
(56, 1, 384.99, 25, 19, '2021-02-27 05:52:39', '2021-02-27 05:52:39'),
(57, 1, 271.99, 25, 24, '2021-02-27 05:52:39', '2021-02-27 05:52:39'),
(58, 1, 337.80, 26, 1, '2021-02-27 08:42:54', '2021-02-27 08:42:54'),
(59, 1, 367.99, 26, 5, '2021-02-27 08:42:54', '2021-02-27 08:42:54'),
(60, 1, 80.99, 27, 29, '2021-02-27 08:48:01', '2021-02-27 08:48:01'),
(61, 1, 57.99, 27, 31, '2021-02-27 08:48:01', '2021-02-27 08:48:01'),
(62, 1, 434.99, 28, 21, '2021-02-27 08:50:36', '2021-02-27 08:50:36'),
(63, 1, 446.99, 29, 20, '2021-02-27 09:04:57', '2021-02-27 09:04:57'),
(64, 1, 572.99, 30, 17, '2021-02-27 09:41:05', '2021-02-27 09:41:05'),
(65, 1, 344.99, 30, 23, '2021-02-27 09:41:05', '2021-02-27 09:41:05'),
(66, 1, 1101.99, 31, 18, '2021-02-27 09:44:32', '2021-02-27 09:44:32'),
(67, 1, 46.99, 32, 28, '2021-02-27 09:46:40', '2021-02-27 09:46:40'),
(68, 1, 367.99, 33, 5, '2021-02-27 09:50:30', '2021-02-27 09:50:30'),
(69, 1, 186.99, 34, 9, '2021-02-27 10:04:13', '2021-02-27 10:04:13'),
(70, 1, 299.99, 35, 16, '2021-02-28 06:33:54', '2021-02-28 06:33:54'),
(71, 1, 80.99, 35, 29, '2021-02-28 06:33:54', '2021-02-28 06:33:54'),
(72, 1, 248.99, 36, 22, '2021-02-28 06:49:06', '2021-02-28 06:49:06'),
(79, 1, 134.99, 39, 6, '2021-02-28 08:55:36', '2021-02-28 08:55:36'),
(80, 1, 155.99, 39, 8, '2021-02-28 08:55:36', '2021-02-28 08:55:36'),
(81, 1, 67.99, 39, 12, '2021-02-28 08:55:36', '2021-02-28 08:55:36'),
(88, 1, 384.99, 43, 19, '2021-03-01 06:58:11', '2021-03-01 06:58:11'),
(89, 1, 145.99, 43, 11, '2021-03-01 06:58:11', '2021-03-01 06:58:11'),
(90, 1, 120.99, 44, 27, '2021-03-01 07:53:31', '2021-03-01 07:53:31'),
(91, 1, 80.99, 44, 29, '2021-03-01 07:53:31', '2021-03-01 07:53:31'),
(94, 2, 269.98, 47, 13, '2021-03-02 09:26:48', '2021-03-02 09:26:48'),
(95, 1, 155.99, 48, 8, '2021-03-03 06:18:29', '2021-03-03 06:18:29'),
(96, 1, 186.99, 49, 9, '2021-03-03 06:34:17', '2021-03-03 06:34:17'),
(97, 1, 67.99, 50, 12, '2021-03-03 06:43:44', '2021-03-03 06:43:44'),
(98, 2, 735.98, 51, 5, '2021-03-03 06:56:41', '2021-03-03 06:56:41'),
(99, 2, 269.98, 51, 6, '2021-03-03 06:56:41', '2021-03-03 06:56:41'),
(101, 1, 1101.99, 53, 18, '2021-03-06 07:15:43', '2021-03-06 07:15:43'),
(102, 1, 180.99, 54, 26, '2021-03-06 08:24:48', '2021-03-06 08:24:48'),
(104, 1, 337.80, 56, 1, '2021-03-07 06:01:22', '2021-03-07 06:01:22'),
(105, 1, 337.80, 57, 1, '2021-03-24 06:51:59', '2021-03-24 06:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(12,2) NOT NULL,
  `payment_method` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_four_digit` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_ref` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `amount`, `payment_method`, `last_four_digit`, `payment_ref`, `order_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 744.67, 'visa', '4242', 'ch_1IPO90GzZBtnGj1lDJrfU9LX', 25, 1, '2021-02-27 08:27:24', '2021-02-27 08:27:24'),
(2, 817.06, 'visa', '4242', 'ch_1IPOBDGzZBtnGj1lTexTaOHX', 24, 1, '2021-02-27 08:29:40', '2021-02-27 08:29:40'),
(3, 787.36, 'visa', '4242', 'ch_1IPOR1GzZBtnGj1lmuA6u7aa', 26, 1, '2021-02-27 08:46:00', '2021-02-27 08:46:00'),
(4, 174.87, 'visa', '4242', 'ch_1IPOTyGzZBtnGj1lS5Lo9OyQ', 27, 1, '2021-02-27 08:49:03', '2021-02-27 08:49:03'),
(5, 500.48, 'visa', '4242', 'ch_1IPOWxGzZBtnGj1l8MPAqTjP', 28, 1, '2021-02-27 08:52:08', '2021-02-27 08:52:08'),
(6, 502.68, 'visa', '4242', 'ch_1IPOkVGzZBtnGj1lRTVvC1K7', 29, 1, '2021-02-27 09:06:08', '2021-02-27 09:06:08'),
(7, 1020.77, 'visa', '4242', 'ch_1IPPJ6GzZBtnGj1lHT2Sm5K0', 30, 1, '2021-02-27 09:41:54', '2021-02-27 09:41:54'),
(8, 1223.18, 'visa', '4242', 'ch_1IPPM7GzZBtnGj1l0Fm8yjbH', 31, 1, '2021-02-27 09:45:00', '2021-02-27 09:45:00'),
(9, 62.68, 'visa', '4242', 'ch_1IPPOCGzZBtnGj1lFMZvvcmR', 32, 1, '2021-02-27 09:47:09', '2021-02-27 09:47:09'),
(10, 415.78, 'visa', '4242', 'ch_1IPPTFGzZBtnGj1lChHNEt78', 33, 1, '2021-02-27 09:52:22', '2021-02-27 09:52:22'),
(11, 216.68, 'visa', '4242', 'ch_1IPPfkGzZBtnGj1lOzJqa5ci', 34, 1, '2021-02-27 10:05:17', '2021-02-27 10:05:17'),
(12, 430.07, 'visa', '4242', 'ch_1IPisbGzZBtnGj1lucoWBDTt', 35, 1, '2021-02-28 06:35:50', '2021-02-28 06:35:50'),
(13, 295.88, 'visa', '4242', 'ch_1IPjmuGzZBtnGj1lzY06N0xX', 36, 1, '2021-02-28 07:34:01', '2021-02-28 07:34:01'),
(14, 595.07, 'visa', '4242', 'ch_1IQ5tSGzZBtnGj1lfKynI5A3', 43, 1, '2021-03-01 07:10:14', '2021-03-01 07:10:14'),
(15, 405.86, 'visa', '4242', 'ch_1IQ5vUGzZBtnGj1l3cFL7RsT', 39, 1, '2021-03-01 07:12:20', '2021-03-01 07:12:20'),
(16, 233.17, 'visa', '4242', 'ch_1IQ6a5GzZBtnGj1lnb7cmvh7', 44, 1, '2021-03-01 07:54:17', '2021-03-01 07:54:17'),
(17, 307.97, 'visa', '4242', 'ch_1IQo3RGzZBtnGj1lblHulpSD', 47, 1, '2021-03-03 06:19:29', '2021-03-03 06:19:29'),
(18, 182.58, 'visa', '4242', 'ch_1IQoEkGzZBtnGj1lYxNOu0yw', 48, 1, '2021-03-03 06:31:09', '2021-03-03 06:31:09'),
(19, 216.68, 'visa', '4242', 'ch_1IQoIZGzZBtnGj1lz5dTuYHe', 49, 1, '2021-03-03 06:35:07', '2021-03-03 06:35:07'),
(20, 85.78, 'visa', '4242', 'ch_1IQoUsGzZBtnGj1l32kRt9ol', 50, 1, '2021-03-03 06:47:50', '2021-03-03 06:47:50'),
(44, 1117.55, 'visa', '4242', 'ch_1IRYP9GzZBtnGj1lsLkpcPKR', 51, 1, '2021-03-05 07:48:59', '2021-03-05 07:48:59'),
(52, 1234.18, 'visa', '4242', 'ch_1IRuR0GzZBtnGj1lnLzsaRZ3', 53, 1, '2021-03-06 07:20:23', '2021-03-06 07:20:23'),
(56, 210.08, 'visa', '4242', 'ch_1IRvs9GzZBtnGj1l5RTJQ8ig', 54, 1, '2021-03-06 08:52:30', '2021-03-06 08:52:30'),
(57, 382.57, 'visa', '4242', 'ch_1ISFm8GzZBtnGj1lS4ZJmU9a', 56, 1, '2021-03-07 06:07:36', '2021-03-07 06:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `sub_brand` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_number` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `discount` int(11) NOT NULL,
  `color` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `specification` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `sale_number` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `sub_brand`, `model_number`, `name`, `category`, `feature`, `gender`, `price`, `discount`, `color`, `description`, `specification`, `stock`, `sale_number`, `created_at`, `updated_at`) VALUES
(1, 1, 'G Shock', 'GST-B100-1AER', 'Mens Casio G-Steel Bluetooth Triple Connect Chronograph Radio Controlled Watch', 'G-Steel', 'Bluetooth Chronograph Radio Controlled', 'Mens', 337.80, 25, 'grey/black', 'Designed for maximum toughness, the Mens Casio G-Steel Bluetooth Triple Connect Chronograph Radio Controlled Watch is bursting with features ideal for men with active lifestyles.\n\n                First up, it’s water resistant to 200 metres, so it will stay in perfect condition when you’re scuba diving or enjoying intense water-sports action. It’s also shock and low-temperature resistant. Bluetooth connectivity means you can hook it up to your smartphone for highly accurate timekeeping, and there’s also a phone finder tool should you mislay it. A 24-hour stopwatch and countdown timer are handy extras, and there’s also an alarm function, date display and chronograph feature. It’s also solar powered, so no need to buy expensive replacement batteries.\n\n                As befits its name, the G-Steel is a seriously hardwearing watch, with an uncompromising stainless-steel case held in place with six metal screws. The durable black resin strap will handle the toughest of adventures, while the feature-packed dial includes a multi-function jet-engine-style disc at 9 o’clock, as well as chunky hour baton markers, chronograph dial and date function. A bold watch that looks great and is always ready for your next adventure.\n                Water resistant to 200 metres, so ideal for scuba diving and water sports\n                Bluetooth compatible, allowing you to pair the watch with your smartphone\n                Phone finder feature – if you misplace your phone, one button press and your phone will sound an alarm\n                Shock, vibration and low-temperature resistant, so it can handle tough outdoor activity\n                Chronograph function for elapsed time measurement, adding functionality ', 'Brand,Casio,Alarm,Yes,Analogue/Digital,Analogue,Backlight,Yes,Case depth approx.,14.00mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,48.00mm,Chronograph,Yes,Clasp type,Strap buckle,Dial Colour,Grey,Multiple Time Zones Display,Dual Time,Gender,Gents,Glass,Acrylic,Model Name,G-Steel,Movement Source,Japan,Movement,Tough solar,Radio Controlled,Yes,Strap colour,Black,Strap Type,Rubber Strap,Water Resistance,200 metres,Weight (g),101.00,BARCODE,4549526168178,Guarantee,2 years', 49, 836, '2021-02-09 09:33:30', '2021-03-07 06:07:36'),
(2, 1, 'G Shock', 'GST-B100D-1AER', 'Mens Casio G-Steel Bluetooth Triple Connect Chronograph Watch', 'G-Steel', 'Bluetooth Chronograph', 'Mens', 394.99, 25, 'grey/grey', 'Casio G-Steel Bluetooth Triple Connect GST-B100D-1AER is a very impressive Gents watch. The case is Stainless Steel, which stands for a high quality item while the dial colour is Grey. The features of the watch include (among others) a chronograph and date function. This model is 200 metres water resistant - it can be used for professional marine activity, skin diving and high impact water sports, but not deep sea or mixed gas diving.\n\n                This watch is shipped with an official presentation box and manufacturer\'s warranty.', 'Brand,Casio,Alarm,Yes,Analogue/Digital,Analogue,Backlight,Yes,Case depth approx.,15.00mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,54.00mm,Chronograph,Yes,Clasp type,Deployment,Dial Colour,Grey,Multiple Time Zones Display,Dual Time,Gender,Gents,Glass,Acrylic,Model Name,G-Steel,Movement Source,Japan,Movement,Tough solar,Strap colour,Silver,Water Resistance,200 metres,Weight (g),190.00,BARCODE,4549526168222,Guarantee,2 years', 60, 300, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(3, 1, 'G Shock', 'GG-B100-1AER', 'Casio G-Shock Mudmaster Watch', 'Masters of G', 'Mudmaster', 'Mens', 369.99, 25, 'grey/black', 'The Mudmaster is an iconic member of the Masters of G collection by G Shock.\n\n                Boasting an impressive range of functions, this watch includes a quad sensor with compass, altimeter, thermometer and barometer, as well as an accelerometer and step tracker.\n                \n                Designed with toughness and durability in mind, the Mudmaster has carbon-reinforced casing and a woven carbon fibre bezel, which is lighter and tougher than ever before, as well as being dust, mud and shock resistant. This is the ultimate timepiece for anyone with an adventurous lifestyle.\n                \n                Water-resistant to 200m, great for swimming and water sports\n                Stress-resistant 53mm carbon-reinforced resin case with a durable and flexible resin band\n                Powered by a quartz watch movement for superb time accuracy\n                Other features include: stopwatch, sunrise and sunset tracker, countdown timer, auto calendar\n                Connect to your smartphone using Bluetooth, enabling access to a wide range of functions\n                Track mission logs using your phones GPS ', 'Brand,Casio,Alarm,Yes,Analogue/Digital,Combination,Backlight,Yes,Case depth approx.,15.00mm,Primary Material,Plastic/Resin,Case Shape,Circle,Case width approx.,45.00mm,Chronograph,Yes,Clasp type,Strap buckle,Dial Colour,Grey,Multiple Time Zones Display,None,Gender,Gents,Glass,Mineral,Luminescent hands,Yes,Model Collection,G-Shock,Model Name,G-Shock Mudmaster,Movement Source,Japan,Movement,Quartz,Strap colour,Black,Strap Type,Plastic/Resin Strap,Water Resistance,200 metres,Weight (g),92.00,BARCODE,4549526235504,Guarantee,2 years\n            ', 150, 566, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(4, 1, 'G Shock', 'GWG-1000-1A3ER', 'Casio G-Shock Mudmaster Premium Compass Mens Watch', 'Masters of G', 'Mudmaster', 'Mens', 745.99, 25, 'black/khaki', 'This new MUDMASTER model was created especially for this whose work takes it into areas where piles of rubble, dirt, and debris are present. A special vibration-resistant construction lets them stand up to wear while operating cutters, crushers, drills and other heavy machinery to clear way large obstacles. This is CASIO\'s first analog watch to come with Mud Resist construction, which helps to ensure that nothing gets into the watch when down and dirty work takes you deep into the dirt and sludge. Multiple gaskets are used on the pipes that guide buttons and shafts, which keeps mud out. These pipes not only act to protect buttons from impact, they also enhance button operation. The screw-in force of the screw lock bezel on an internal gasket further increases mud resistance. A new bezel structure lets you visually check whether the bezel has been screwed in adequately. In addition, Triple Sensor Version 3 capabilities provide instant access to direction, barometric pressure, and temperature information when needed under tough conditions. The face of the watch is marked with large Arabian numerals as 12, 3, 6, and 9 o\'clock for easy reading. The face is illuminated by a double LED light and protected by a sapphire crystal to ensure high visibility under virtually any conditions imaginable. The band surface is processed to resemble a cloth band texture, and the hour and minute hands are shaped with points that make them resemble warning markers. All buttons have a checkered surface for surer operation and grip even when wet, and the overall design is tough and rugged. Vibration Resistant Structure Digital compass, barometric pressure/altitude, temperature readings Double LED light illuminates the face and digital display for outstanding readability. Screw-in Crown Multiband 6 (Automatically adjusts time settings based on reception of one of six time calibration signals around the globe: Japan (2), China, United States, England, Germany.) Tough Solar', 'Brand,Casio,Alarm,Yes,Analogue/Digital,Combination,Backlight,Yes,Case depth approx.,15.00mm,Primary Material,Plastic/Resin,Case Shape,Circle,Case width approx.,51.00mm,Chronograph,Yes,Clasp type,Strap buckle,Dial Colour,Black,Multiple Time Zones Display,Dual Time,Gender,Gents,Glass,Sapphire,Hour Markers,Batons,Luminescent hands,Yes,Model Name,G-Shock Premium Mudmaster Compass,Movement Source,Japan,Movement,Tough solar,Radio Controlled,Yes,Strap colour,Khaki,Strap Type,Rubber Strap,Water Resistance,200 metres,Weight (g),119.00,BARCODE,4971850028345,Guarantee,2 years', 75, 629, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(5, 1, 'G Shock', 'GG-B100-1A9ER', 'Casio G-Shock Watch', 'Bluetooth', 'Bluetooth', 'Mens', 367.99, 30, 'grey/orange', 'Casio G-Shock GG-B100-1A9ER is an amazing and handsome Gents watch from G-Shock collection. Material of the case is Plastic/Resin while the dial colour is Grey. The features of the watch include (among others) a chronograph and date function as well as an alarm. This model has got 200 metres water resistancy - it can be used for professional marine activity, skin diving and high impact water sports, but not deep sea or mixed gas diving. We ship it with an original box and a guarantee from the manufacturer.', 'Brand,Casio,Alarm,Yes,Analogue/Digital,Combination,Backlight,Yes,Case depth approx.,15.00mm,Primary Material,Plastic/Resin,Case Shape,Circle,Case width approx.,45.00mm,Chronograph,Yes,Clasp type,Strap buckle,Dial Colour,Grey,Multiple Time Zones Display,World Time,Gender,Gents,Glass,Mineral,Luminescent hands,Yes,Model Collection,G-Shock,Model Name,G-Shock,Movement,Quartz,Radio Controlled,Yes,Strap colour,Orange,Water Resistance,200 metres,BARCODE,4549526235450,Guarantee,2 years\n            ', 51, 656, '2021-02-09 09:33:30', '2021-03-05 07:48:59'),
(6, 1, 'G Shock', 'GBA-800-9AER', 'Casio G-Shock Bluetooth Step Tracker Watch', 'Bluetooth', 'Step Tracker', 'Mens', 134.99, 25, 'black/yellow', 'Bold, bright and with all the practicality you would expect from an iconic G-Shock, the G-Squad GBA-800-9AER will add a pop of colour to your wrist plus unforgettable functionality to your life.\n\n                With Bluetooth technology, you can easily link the G-Squad with your phone and use it alongside the G-Shock Bluetooth® Connected phone app, which gives you access to functions that will enhance your workout, including: a step-counter, a multi-timer and the ability to keep up to 200 lap records. The app also allows you to maintain step count logs, calculate calories burnt and set a daily step count that will be sure to keep you stomping those feet for longer.\n                \n                The robust design makes the G-Squad super durable, but this no way limits its daring style. With an eye catching yellow-lime case and strap, juxtaposed by a midnight black face and luminous hands, the G-Squad is perfect for the fashion-forward and acute athletes alike. If you like standing out from the crowd, the GBA-800-9AER is for you.\n                \n                Auto LED Lights so you can workout with your G-Shock in areas of low light\n                Resin strap and case to protect watch mechanism from heavy duty activity\n                Water resistant up to 200m; suitable from anything to a casual swim to a professional dive\n                Automatic calendar that always displays the correct date', 'Brand,Casio,Alarm,Yes,Analogue/Digital,Combination,Backlight,Yes,Case depth approx.,16.00mm,Primary Material,Plastic/Resin,Case Shape,Circle,Case width approx.,54.00mm,Chronograph,Yes,Dial Colour,Black,Gender,Gents,Model Collection,G-Squad,Model Name,G-Squad,Movement Source,Japanese,Movement,Quartz,Radio Controlled,Yes,Strap colour,Yellow,Strap Type,Rubber Strap,Water Resistance,200 metres,BARCODE,4549526179358,Guarantee,2 years', 31, 226, '2021-02-09 09:33:30', '2021-03-05 07:48:59'),
(7, 1, 'G Shock', 'GMW-B5000D-1ER', 'Casio G-Shock Full Metal Silver Watch', '35th Anniversary', 'Full Metal', 'Mens', 508.99, 0, 'silver/silver', 'Since the 1983 release of the original G-SHOCK DW-5000C, the 5000 series has stayed true to the square-shaped pedigree which has become a style icon. 35 years later, the limited edition GMW-B5000 nods to the heritage of that first ever G-SHOCK while pushing new boundaries in every way from its materials to the construction and features.\n                The outer components, including the watch band, case and bezel are entirely made from Stainless Steel while the interior employs a new shock-resistant construction. Complete with Radio Controlled timekeeping and a Bluetooth smart link, this collectors G-Shock is sure to make it\'s mark in the G-Shock Hall Of Fame.', 'Brand,Casio,Alarm,Yes,Analogue/Digital,Digital,Backlight,Yes,Bezel Type,Fixed,Case depth approx.,13.00mm,Primary Material,Stainless Steel,Case Shape,Rectangle,Case width approx.,49.00mm,Chronograph,Yes,Clasp type,Push-button Deployment,Dial Colour,LCD,Multiple Time Zones Display,None,Gender,Gents,Glass,Mineral,Model Collection,G-Shock,Model Name,G-Shock,Movement Source,Japan,Movement,Tough solar,Radio Controlled,Yes,Strap colour,Silver,Strap Type,Metal bracelet,Water Resistance,200 metres,Weight (g),167.00,BARCODE,4549526187681,Guarantee,2 years,Chronometer,Yes', 85, 59, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(8, 1, 'Edifice', 'EFR-570DB-1BVUEF', 'Casio Chronograph Watch', 'Chronograph', 'Chronograph', 'Mens', 155.99, 10, 'black/silver', 'From the Edifice Collection comes the Gents Casio Edifice Chronograph Watch, a stylish fashion accessory that looks great and is packed with cool features.\n\n                A great choice for swimmers and water sports fans, the Edifice is water resistant to 100 metres. There’s also a stopwatch function and a multi-dial chronograph for keeping perfect track of your training runs. The neo-display ensures the watch lights up after dark, while the tough mineral glass coating keeps it looking as good as new.\n                \n                Scoring top marks for style, splashes of blue contrast brilliantly with the stainless steel bracelet. The blue bezel has minute markers, while the patterned black dial has chunky silver-toned baton hour markers and luminous hands for easy viewing. A great-looking timepiece, the Gents Casio Edifice Chronograph Watch makes a big style statement.\n                Water-resistant to 100m, great for swimming and water sports\n                Chronograph function for elapsed time measurement, adding functionality\n                Powered by a quartz watch movement for superb time accuracy\n                Long lasting and rust-resistant stainless steel case ', 'Brand,Casio,Alarm,Yes,Analogue/Digital,Analogue,Case depth approx.,13.00mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,45.00mm,Chronograph,Yes,Clasp type,Clasp,Dial Colour,Black,Multiple Time Zones Display,None,Gender,Gents,Glass,Mineral,Luminescent hands,Yes,Model Collection,Edifice,Model Name,Chronograph,Movement Source,Japan,Movement,Quartz,Strap colour,Silver,Strap Type,Metal bracelet,Water Resistance,100 metres,Weight (g),151.00,BARCODE,4549526252433,Guarantee,2 YEARS', 85, 308, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(9, 1, 'Edifice', 'EFR-569DB-1AVUEF', 'Casio Edifice Racing Design Chronograph Watch', 'Chronograph', 'Racing', 'Mens', 186.99, 20, 'black/silver', 'From Casio\'s mult-function chronograph collection, Edifice, comes the Casio Edifice Racing Design Chronograph Watch EFR-569DB-1AVUEF. Combining elaborate design and exceptional technology, this chronograph watch is perfect for lovers of sporty aesthetics and functionality freaks alike.\n\n                With chronograph technology, this Edifice also doubles as a stopwatch, with three subdials characteristic of a chronograph watch. Also featured on the dial is a handy date window at 4 o\'clock.\n                \n                The Edifice racing design features a brushed stainless steel bracelet strap with a contrasting black metal case and screws. Blue detailing adorns the black dial, giving the watch a sporty edge along with a pop of colour. Baton hour markers along with matching colour hands complement the three subdials and detailed bezel\n                Chronograph technology so doubles as a stopwatch\n                Rust resistant and durable stainless steel strap and case\n                Date window so you always have the date right at your wrist\n                Japanese watch movement for ultimate precision and efficiency\n                Water resistant to 100m so suitable for everything from a casual swim to a deep dive', 'Brand,Casio,Analogue/Digital,Analogue,Backlight,Yes,Bezel Type,Plain,Case depth approx.,12.10mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,51.00mm,Chronograph,Yes,Clasp type,Clasp,Dial Colour,Black,Multiple Time Zones Display,None,Gender,Gents,Glass,Mineral,Hour Markers,Batons,Luminescent hands,Yes,Model Collection,Edifice,Model Name,Racing,Movement Source,Japanese,Movement,Quartz,Strap colour,Silver,Strap Type,Metal bracelet,Water Resistance,100 metres,Weight (g),172.00,BARCODE,4549526249358,Guarantee,2 years', 95, 511, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(10, 1, 'Edifice', 'ECB-10DB-1AEF', 'Casio Edifice Chronograph Watch', 'Chronograph', 'Bluetooth', 'Mens', 179.99, 30, 'black/silver', 'Part of the Edifice Collection, the Gents Casio Edifice Chronograph Watch delivers strong looks with an array of cool features.\n\n                A watch for the modern age, Bluetooth compatibility means you can connect it up with your smartphone to transfer data at the touch of a button – and if you lose your phone, you can use your Edifice watch to find it with just the press of a button. The powerful stopwatch measures times up to 24 hours, with 1/1000th of a second accuracy, while the 24-hour countdown timer and five daily alarms mean you’ll always be on time, whatever your schedule. The Super-Auto LED Light function lights up the watch with just a flick of the wrist, and it’s also water resistant to 100 metres, so it’s fine to take it for a dip.\n                \n                The eight-sided bezel and four screws accentuate the industrial chic of the Gents Casio Edifice Chronograph Watch, which features a patterned dial with silver hour marker batons, chronograph dial and analogue-digital display. Tough mineral glass and a stylish metal bracelet complete the package of this hardwearing, on-trend timepiece.\n                Water-resistant to 100m, great for swimming and water sports\n                Bluetooth compatible, enabling you to upload training data to your smartphone\n                Luminous hands and illuminator light up your watch in poor light\n                Five alarms, countdown timer, stopwatch and world time functions ', 'Brand,Casio,Alarm,Yes,Analogue/Digital,Combination,Backlight,Yes,Bezel Type,Fixed,Case depth approx.,12.50mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,48.50mm,Chronograph,Yes,Clasp type,Deployment,Dial Colour,Black,Multiple Time Zones Display,None,Gender,Gents,Glass,Mineral,Hour Markers,Batons,Luminescent hands,Yes,Movement Source,Japanese,Movement,Quartz,Strap colour,Silver,Strap Type,Metal bracelet,Water Resistance,100 metres,Weight (g),167.00,BARCODE,4549526252693,Guarantee,2 years', 65, 769, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(11, 1, 'Edifice', 'EFR-570BL-1AVUEF', ' Casio Edifice Collection Mens Chronograph Watch ', 'Chronograph', 'chronograph', 'Mens', 145.99, 25, 'black/yellow', 'Part of the Casio Edifice Collection, the Mens Casio Edifice Chronograph Watch is a luxurious accessory with plenty of cool features to match its obvious style.\n\n                Water resistant to 100 metres, it’ll handle getting wet with ease, while the three-dial chronograph is great for keeping accurate timing. There’s also a stopwatch for timing your workouts, and a date function on the dial, while tough mineral glass keeps everything looking fantastic.\n                \n                The scratch-resistant numbered bezel surrounds the stylish dark dial, which features chunky hour baton markers and luminous hands for great visibility. The high-quality navy leather band ensures comfort while you’re wearing it. A versatile watch that combines luxe styling and great looks, the Mens Casio Edifice Chronograph Watch is a highly desirable timepiece.\n                Water-resistant to 100m, great for swimming and water sports\n                Chronograph function for elapsed time measurement, adding functionality\n                Leather strap for maximum comfort\n                Powered by a quartz watch movement for superb time accuracy', 'Brand,Casio,Analogue/Digital,Analogue,Case depth approx.,12.40mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,44.60mm,Chronograph,Yes,Clasp type,Strap buckle,Dial Colour,Black,Multiple Time Zones Display,None,Gender,Gents,Glass,Acrylic,Movement Source,Japan,Movement,Quartz,Strap colour,Navy,Strap Type,Leather strap,Water Resistance,100 metres,Weight (g),84.00,BARCODE,4549526252457,Guarantee,2 years', 105, 103, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(12, 1, 'Wave Ceptor', 'WV-58DU-1AVES', 'Mens Casio Wave Ceptor Alarm Chronograph Radio Controlled Watch', 'Radio Controlled', 'Alarm Chronograph', 'Mens', 67.99, 25, 'grey/silver', 'Casio never disappoint, high end features at budget prices. This Casio wave ceptor is no different, no need to worry about adjusting the time - the wave ceptor technology does it for you. Also includes world time, backlight, countdown timer, chronograph and auto-calendar date. The case is a mix of steel and resin, and water resistant to 50 metres, and fastens on a silver steel bracelet with push button deployment clasp.', 'Brand,Casio,Alarm,Yes,Analogue/Digital,Digital,Backlight,Yes,Case depth approx.,11.00mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,43.00mm,Chronograph,Yes,Clasp type,Push-button Deployment,Dial Colour,Grey,Multiple Time Zones Display,None,Gender,Gents,Glass,Acrylic,Model Name,Wave Ceptor,Movement Source,Japanese,Movement,Quartz,Radio Controlled,Yes,Strap colour,Silver,Strap Type,Metal bracelet,Water Resistance,50 metres,Weight (g),88.00,BARCODE,4971850436690,Guarantee,2 years', 75, 810, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(13, 1, 'Wave Ceptor', 'WVA-M640-1AER', 'Mens Casio Waveceptor Alarm Chronograph Radio Controlled Watch', 'Radio Controlled', 'Solar Powered', 'Mens', 134.99, 25, 'black/black', 'A seamless blend of style and function; the Casio Waveceptor is an ideal everyday watch.\n\n                Notable features of the timepiece include a daily alarm, countdown timer and stopwatch with 1/100th second accuracy; perfect for athletes or those who want to measure time periods with the utmost precision.\n                \n                A black dial is embellished with white baton indices and hands, encased in a polished stainless steel bezel and paired with a flexible black rubber strap.\n                \n                Water resistant to 100m, perfect for swimming and snorkelling\n                Never need to change the battery with Solar Powered time keeping\n                Multiband 6 Radio Control for accurate time keeping\n                LED backlight with selectable duration and afterglow for easy reading in any situation\n                39mm long lasting and rust resistant stainless steel case ', 'Brand,Casio,Alarm,Yes,Analogue/Digital,Combination,Backlight,Yes,Bezel Type,Fixed,Case depth approx.,12.00mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,39.00mm,Chronograph,Yes,Clasp type,Strap buckle,Dial Colour,Black,Multiple Time Zones Display,GMT,Gender,Gents,Glass,Acrylic,Hour Markers,Batons,Luminescent hands,Yes,Model Name,Waveceptor,Movement Source,Japanese,Movement,Tough solar,Radio Controlled,Yes,Stone type,None,Strap colour,Black,Strap Type,Rubber Strap,Water Resistance,100 metres,Weight (g),45.00,BARCODE,4971850924159,Guarantee,2 years', 125, 404, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(14, 2, 'Tissot', 'T66171233', 'Mens Tissot Heritage 1948 Automatic Chronograph Watch', 'Heritage', 'Automatic Chronograph', 'Mens', 1406.99, 0, 'cornsilk/brown', 'This is not a conventional watch. When purchasing this model, you own a piece of Tissot\'s Heritage. This automatic chronograph incorporates the very best of past and present technology. While the leather strap versions are more classical, the milanese bracelet gives it a contemporary touch - a Must have for watch lovers and collectors.', 'Brand,Tissot,Analogue/Digital,Analogue,Case depth approx.,13.00mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,39.00mm,Chronograph,Yes,Dial Colour,Cream,Gender,Gents,Glass,Sapphire,Model Collection,Heritage,Model Name,Heritage 1948,Movement Source,Swiss,Movement,Automatic,Strap colour,Brown,Strap Type,Leather strap,Water Resistance,30 metres,BARCODE,7611608282236,Guarantee,2 years', 65, 527, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(15, 2, 'Tissot', 'T0194301104100', 'Gents Tissot Visodate Automatic Watch', 'Heritage', 'Automatic', 'Mens', 632.99, 0, 'blue/silver', 'A beautiful blend of vintage and modern, the Gents Tissot Visodate Automatic Watch is an eye-catching style accessory.\n\n                    This stylish timepiece is splash proof thanks to 30 metres of water resistance, and it won’t come to any harm if you’re caught out in an unexpected downpour. Automatic timing means that it’s powered by the natural movement of your wrist, so no more expensive replacement batteries. Scratch-resistant sapphire crystal keeps the watch looking sharp, too.\n                    \n                    The rich blue tones on the dial contrast beautifully with the case and stainless-steel strap. The dial also features elegant silver hour baton markers and hands, and there’s a day and date window at 3 o’clock. The mesh metal bracelet is an extra stylish touch. The Gents Tissot Visodate Automatic Watch is smart enough for work and stylish enough for play.\n                    Water-resistant to 30m so you don’t have to remove it when washing your hands\n                    Automatic timing means no more costly battery replacements ', 'Brand,Tissot,Analogue/Digital,Analogue,Case depth approx.,12.00mm,Case Shape,Circle,Case width approx.,40.00mm,Dial Colour,Blue,Gender,Gents,Glass,Sapphire,Model Collection,Heritage,Model Name,Visodate,Movement Source,Swiss,Movement,Automatic,Strap colour,Silver,Water Resistance,30 metres,BARCODE,7611608287736,Guarantee,2 years', 66, 193, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(16, 2, 'Tissot', 'T1184101605701', 'Tissot Heritage Visodate Watch', 'Heritage', 'Quartz', 'Mens', 299.99, 5, 'black/black', 'Tissot Heritage Visodate Watch', 'Brand,Tissot,Analogue/Digital,Analogue,Case depth approx.,10.00mm,Case Shape,Circle,Case width approx.,40.00mm,Dial Colour,Black,Gender,Gents,Glass,Sapphire,Model Collection,Heritage,Model Name,Heritage Visodate,Movement Source,Swiss,Movement,Quartz,Strap colour,Black,Strap Type,Leather strap,Water Resistance,30 metres,BARCODE,7611608286357,Guarantee,2 years', 125, 160, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(17, 2, 'Tissot', 'T0194301605101', 'Mens Tissot Visodate Automatic Watch ', 'Heritage', 'Automatic', 'Mens', 572.99, 25, 'black/black', 'Mens Tissot Visodate watch in stainless steel and leather, centred on a chic black dial with day and date functions, and baton hour markers.', 'Brand,Tissot,Analogue/Digital,Analogue,Case depth approx.,12.00mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,40.00mm,Clasp type,Fold-over Deployment,Dial Colour,Black,Gender,Gents,Glass,Sapphire,Model Collection,T-Classic,Model Name,Visodate,Movement Source,Swiss,Movement,Automatic,Strap colour,Black,Strap Type,Leather strap,Water Resistance,30 metres,BARCODE,7611608249222,Guarantee,2 years', 120, 80, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(18, 2, 'Tissot', 'T1214204405100', 'Tissot T-Touch Connect Solar Watch', 'T-Touch Connect', 'Solar Powered', 'Mens', 1101.99, 0, 'black/silver', 'The long-awaited T-Touch Connect Solar comes from a long line of tactile watches, namely the successive generations of T-Touch since 1999. As a connected watch it is ahead of its time, just like 2004’s High-T, created in association with Microsoft.\n\n                    By injecting its know-how into the interface between the wristwatch and mobile app environment, Tissot has created a connected watch that has a multitude of functions, is highly durable, and can be recharged by solar power. It is first and foremost a watch for experiencing and wearing, with a sophisticated design.\n                    \n                    Lightweight titanium case with an extremely scratch-resistant ceramic bezel.\n                    Water-resistant to 100 metres, so is perfect not only for everyday wear, but also swimming and water sports\n                    Powered by solar energy, it is able to run almost indefinitely in connected mode, and for several months depending on its usage and exposure to the sun\n                    Compatible with iOS, Android and Harmony mobile operating systems ', 'Brand,Tissot,Analogue/Digital,Digital Quartz,Primary Material,Titanium,Case Shape,Circle,Case width approx.,47.50mm,Dial Colour,Black,Gender,Gents,Glass,Sapphire,Model Collection,T-Touch Connect,Model Name,T-Touch Connect Solar,Movement,Solar,Strap colour,Silver,Strap Type,Mesh Bracelet,Water Resistance,10 ATM,Weight (g),140.00,BARCODE,7611608293560,Guarantee,2 years,NFC,Yes,Step Tracking,Yes', 63, 317, '2021-02-09 09:33:30', '2021-03-06 07:20:23'),
(19, 2, 'Tissot', 'T1016171605100', 'Tissot Watch', 'Chronograph', 'Quartz', 'Mens', 384.99, 0, 'black/black', 'Tissot Watch Chronograph', 'Brand,Tissot,Analogue/Digital,Analogue,Case Shape,Circle,Chronograph,Yes,Dial Colour,Black,Gender,Gents,Movement Source,Swiss,Movement,Quartz,Guarantee,2 years', 104, 635, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(20, 2, 'Tissot', 'T1256172105100', 'Tissot Supersport Watch', 'Supersport', 'chronograph', 'Mens', 446.99, 0, 'black/silver', 'Tissot Supersport T1256172105100 is a practical and special Gents watch from Supersport collection. Case is made out of Stainless Steel while the dial colour is Black. The features of the watch include (among others) a chronograph. In regards to the water resistance, the watch has a water resistance of 100 metres. This makes it suitable for swimming, but not high impact water sports. We ship it with an original box and a guarantee from the manufacturer.', 'Brand,Tissot,Analogue/Digital,Analogue,Case depth approx.,45.50mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,45.50mm,Chronograph,Yes,Clasp type,Butterfly with push buttons,Dial Colour,Black,Gender,Gents,Glass,Sapphire,Model Collection,Supersport,Model Name,Supersport,Movement Source,Swiss,Movement,Quartz,Strap colour,Silver,Strap Type,Metal bracelet,Water Resistance,100 metres,BARCODE,7611608294307,Guarantee,2 years', 55, 259, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(21, 2, 'Tissot', 'T1256173605101', 'Tissot Supersport Watch', 'Supersport', 'chronograph', 'Mens', 434.99, 0, 'black/silver', 'Tissot Supersport T1256172105100 is a practical and special Gents watch from Supersport collection. Case is made out of Stainless Steel while the dial colour is Black. The features of the watch include (among others) a chronograph. In regards to the water resistance, the watch has a water resistance of 100 metres. This makes it suitable for swimming, but not high impact water sports. We ship it with an original box and a guarantee from the manufacturer.', 'Brand,Tissot,Analogue/Digital,Analogue,Case depth approx.,45.50mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,45.50mm,Chronograph,Yes,Clasp type,Butterfly with push buttons,Dial Colour,Black,Gender,Gents,Glass,Sapphire,Model Collection,Supersport,Model Name,Supersport,Movement Source,Swiss,Movement,Quartz,Strap colour,Silver,Strap Type,Metal bracelet,Water Resistance,100 metres,BARCODE,7611608294307,Guarantee,2 years', 55, 590, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(22, 2, 'Tissot', 'T1092103603300', 'Tissot ladies Everytime Watch', 'T-Classic', 'Quartz', 'Ladies', 248.99, 0, 'white/black', 'Tissot ladies Everytime Watch', 'Brand,Tissot,Analogue/Digital,Analogue,Case Shape,Circle,Dial Colour,White,Gender,Ladies,Glass,Sapphire,Model Collection,T-Classic,Model Name,Everytime,Movement Source,Swiss,Movement,Quartz,Strap Type,Leather strap,BARCODE,7611608284292,Guarantee,2 years', 85, 260, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(23, 2, 'Tissot', 'T1122101111300', 'Tissot T-Wave Watch', 'T-Lady', 'Quartz', 'Ladies', 344.99, 0, 'white/silver', 'Tissot T-Wave Ladies Watch', 'Brand,Tissot,Analogue/Digital,Analogue,Case Shape,Circle,Dial Colour,Mother of pearl,Gender,Ladies,Glass,Sapphire,Model Collection,T-Lady,Model Name,T-Wave,Movement Source,Swiss,Movement,Quartz,Strap Type,Metal bracelet,BARCODE,7611608291412,Guarantee,2 years', 65, 195, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(24, 2, 'Tissot', 'T0581091104100', 'Ladies Tissot Lovely Square Watch', 'T-Lady', 'Quartz', 'Ladies', 271.99, 0, 'blue/silver', 'Ladies Tissot T-Lady Lovely Square Watch', 'Brand,Tissot,Analogue/Digital,Analogue,Case depth approx.,7.00mm,Case Shape,Square,Case width approx.,20.00mm,Dial Colour,Blue,Gender,Ladies,Glass,Sapphire,Model Collection,T-Lady,Model Name,Lovely Square,Movement Source,Swiss,Movement,Quartz,Strap colour,Silver,Strap Type,Metal Bracelet,Water Resistance,30 metres,BARCODE,7611608288269,Guarantee,2 years', 51, 818, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(25, 2, 'Tissot', 'T0581091603100', 'Ladies Tissot T-Lady Lovely Square Watch', 'T-Lady', 'Quartz', 'Ladies', 248.99, 0, 'white/blue', 'Ladies Tissot T-Lady Lovely Square Watch', 'Brand,Tissot,Analogue/Digital,Analogue,Case depth approx.,7.00mm,Case Shape,Square,Case width approx.,20.00mm,Dial Colour,White,Gender,Ladies,Glass,Sapphire,Model Collection,T-Lady,Model Name,Lovely Square,Movement Source,Swiss,Movement,Quartz,Strap colour,Blue,Strap Type,Leather strap,Water Resistance,30 metres,BARCODE,7611608288245,Guarantee,2 years', 55, 529, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(26, 3, 'Swatch', 'SS07Z102', 'Unisex Swatch 2Q Watch', 'Skin Irony Special 2Q', 'Quartz', 'Unisex', 180.99, 25, 'blue/brown', 'Unisex Swatch Skin Irony Special 2Q Watch', 'Brand,Swatch,Analogue/Digital,Analogue,Case depth approx.,7.00mm,Primary Material,Stainless Steel,Case Shape,Circle,Case width approx.,42.00mm,Clasp type,Strap buckle,Dial Colour,Skeleton,Multiple Time Zones Display,None,Gender,Unisex,Glass,Acrylic,Limited Edition,Yes,Model Collection,Skin Irony Special,Model Name,2Q,Movement Source,Swiss,Movement,Quartz,Strap colour,Brown,Strap Type,Leather strap,Water Resistance,Water resistant,Weight (g),159.00,BARCODE,7610522831230,Guarantee,24 months', 91, 568, '2021-02-09 09:33:30', '2021-03-06 08:52:30'),
(27, 3, 'Swatch', 'SB02B401', 'Mens Swatch Checkpoint Blue Chronograph Watch', 'Big Bold', 'Chronograph', 'Mens', 120.99, 0, 'black/black', 'Swatch Checkpoint Blue SB02B401 is a practical and handsome Gents watch from Big Bold collection. Material of the case is Plastic/Resin, which stands for a high quality of the item while the dial colour is Black. The features of the watch include (among others) a chronograph. This watch is market as water resistant. It means it can withstand slight splashes and rain, but is NOT to be immersed in water. The watch is shipped with an original box and a guarantee from the manufacturer.', 'Brand,Swatch,Analogue/Digital,Analogue,Case depth approx.,14.00mm,Primary Material,Plastic/Resin,Case Shape,Circle,Case width approx.,47.00mm,Chronograph,Yes,Clasp type,Strap buckle,Dial Colour,Black,Multiple Time Zones Display,None,Gender,Gents,Glass,Acrylic,Luminescent hands,Yes,Model Collection,Big Bold,Model Name,Checkpoint Blue,Movement Source,Swiss,Movement,Quartz,Strap colour,Black,Strap Type,Rubber Strap,Water Resistance,Water resistant,Weight (g),143.00,BARCODE,7610522832190,Guarantee,24months', 120, 734, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(28, 3, 'Swatch', 'GB743', 'Swatch Once Again Watch', 'Original Gent', 'Quartz', 'Mens', 46.99, 0, 'white/black', 'The ever popular Swatch Once Again watch for men, proving that simple is always effective. This time piece in monochrome style comes with a water resistant resin case, with a reliable Swiss quartz movement with day / date function embedded into it, and an easy change battery cover. It has a minimal white dial with easy to read numeral hour markers in black, and a date magnification bubble in the acrylic glass. This model fastens with a black plastic strap. ', 'Brand,Swatch,Analogue/Digital,Analogue,Case depth approx.,9.00mm,Primary Material,Plastic/Resin,Case Shape,Circle,Case width approx.,34.00mm,Clasp type,Strap buckle,Dial Colour,White,Gender,Gents,Model Collection,Original Gent,Model Name,Once Again,Movement Source,Swiss,Movement,Quartz,Strap colour,Black,Water Resistance,30 metres,BARCODE,7610522115385,Guarantee,2 years', 85, 141, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(29, 3, 'Swatch', 'SO27M102', 'Mens Swatch Bbblanco Watch', 'BIG BOLD', 'Quartz', 'Mens', 80.99, 25, 'khaki/black', 'Swatch Bbblanco SO27M102 is a practical and special Gents watch from SS19 Big Bold collection. Case is made out of Plastic/Resin while the dial colour is Khaki. This model has got 30 metres water resistancy - it can be worn in scenarios where it is likely to be splashed but not immersed in water. It can be worn while washing your hands and will be fine in rain. We ship it with an original box and a guarantee from the manufacturer.', 'Brand,Swatch,Analogue/Digital,Analogue,Case depth approx.,11.00mm,Primary Material,Plastic/Resin,Case Shape,Circle,Case width approx.,47.00mm,Dial Colour,Khaki,Gender,Gents,Model Collection,BIG BOLD,Model Name,Bbblanco,Movement Source,Swiss,Movement,Quartz,Strap colour,Two tone,Strap Type,Rubber Strap,Water Resistance,30 metres,BARCODE,7610522811720,Guarantee,2 years', 89, 838, '2021-02-09 09:33:30', '2021-03-06 07:13:06'),
(30, 3, 'Swatch', 'SUON700', 'Unisex Swatch Blue Rebel Watch', 'ORIGINALS', 'Quartz', 'Unisex', 66.99, 0, 'blue/blue', 'The Swatch Blue Rebel SUON700 is a amazing Unisex watch from New Gent collection. The material of the case is Plastic/Resin and the dial colour is Blue. The features of the watch include (among others) a date function. This watch is marked as water resistant. It means it can withstand slight splashes and rain, but is NOT to be immersed in water. We ship it with an original box and a guarantee from the manufacturer.', 'Brand,Swatch,Analogue/Digital,Analogue,Case depth approx.,10.00mm,Primary Material,Plastic/Resin,Case Shape,Circle,Case width approx.,41.00mm,Clasp type,Strap buckle,Dial Colour,Blue,Gender,Unisex,Model Collection,ORIGINALS,Model Name,Blue Rebel,Movement Source,Swiss,Movement,Quartz,Strap colour,Blue,Strap Type,Rubber Strap,Water Resistance,30 metres,BARCODE,7610522252608,Guarantee,2 years', 120, 841, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(31, 3, 'Swatch', 'GN254', 'Swatch Blue Ben Watch', 'Original Gent', 'Quartz', 'Unisex', 57.99, 25, 'blue/blue', 'Swatch Blue Ben GN254 is an attractive Unisex watch from Original Gent collection. Case material is Plastic/Resin while the dial colour is Blue. In regards to the water resistance, the watch has got a resistancy up to 30 metres. It means it can be worn in scenarios where it is likely to be splashed but not immersed in water. It can be worn while washing your hands and will be fine in rain. We ship it with an original box and a guarantee from the manufacturer.', 'Brand,Swatch,Analogue/Digital,Analogue,Case depth approx.,9.00mm,Primary Material,Plastic/Resin,Case Shape,Circle,Case width approx.,34.00mm,Dial Colour,Blue,Gender,Unisex,Model Collection,Original Gent,Model Name,Blue Ben,Movement Source,Swiss,Movement,Quartz,Strap colour,Blue,Strap Type,Rubber Strap,Water Resistance,30 metres,BARCODE,7610522776388,Guarantee,2 years', 95, 794, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(32, 3, 'Swatch', 'GP171', 'Swatch Watch', 'Original Gent', 'Quartz', 'Ladies', 67.24, 5, 'white/red', 'Swatch Botanicose GP171 is an incredible eye-catching Ladies watch from Original Gent collection. Material of the case is Plastic/Resin and the White dial gives the watch that unique look. This model has got 30 metres water resistancy - it can be worn in scenarios where it is likely to be splashed but not immersed in water. It can be worn while washing your hands and will be fine in rain. We ship it with an original box and a guarantee from the manufacturer.', 'Brand,Swatch,Analogue/Digital,Analogue,Case depth approx.,9.00mm,Primary Material,Plastic/Resin,Case Shape,Circle,Case width approx.,34.00mm,Clasp type,Strap buckle,Dial Colour,White,Multiple Time Zones Display,None,Gender,Ladies,Glass,Acrylic,Model Collection,Original Gent,Model Name,Botanicose,Movement Source,Swiss,Movement,Quartz,Strap colour,Multicolour,Strap Type,Rubber Strap,Water Resistance,30 metres,BARCODE,7610522834996,Guarantee,24 months', 125, 275, '2021-03-25 06:37:18', '2021-03-25 06:37:18'),
(33, 3, 'Swatch', 'SUOZ334', 'Swatch Watch', 'MoMa', 'Quartz', 'Ladies', 96.22, 10, 'black/red', 'Swatch The City And Design, The Wonders Of Life SUOZ334 is a great Unisex watch from MoMa collection. Case material is Plastic/Resin while the dial colour is MultiColour. 30 metres water resistancy will protect the watch and allows it to be worn in scenarios where it is likely to be splashed but not immersed in water. It can be worn while washing your hands and will be fine in rain. The watch is shipped with an original box and a guarantee from the manufacturer.', 'Brand,Swatch,Analogue/Digital,Analogue,Case depth approx.,10.00mm,Primary Material,Plastic/Resin,Case Shape,Circle,Case width approx.,41.00mm,Clasp type,Strap buckle,Dial Colour,MultiColour,Multiple Time Zones Display,None,Gender,Unisex,Glass,Acrylic,Limited Edition,Yes,Model Collection,MoMa,Model Name,The City And Design,Movement Source,Swiss,Movement,Quartz,Strap colour,Multicolour,Strap Type,Plastic/Resin Strap,Water Resistance,30 metres,BARCODE,7610522833050,Guarantee,24 months', 125, 715, '2021-03-25 06:37:18', '2021-03-25 06:37:18'),
(34, 3, 'Swatch', 'GR185', 'Swatch Watch', 'Original Gent', 'Quartz', 'Ladies', 71.88, 10, 'red/orange', 'Swatch Retro-Rosso GR185 is an amazing Unisex watch from Original Gent collection. Case is made out of Plastic/Resin while the dial colour is Yellow. This model has got 30 metres water resistancy - it can be worn in scenarios where it is likely to be splashed but not immersed in water. It can be worn while washing your hands and will be fine in rain. The watch is shipped with an original box and a guarantee from the manufacturer.', 'Brand,Swatch,Analogue/Digital,Analogue,Case depth approx.,9.00mm,Primary Material,Plastic/Resin,Case Shape,Circle,Case width approx.,34.00mm,Clasp type,Strap buckle,Dial Colour,Yellow,Multiple Time Zones Display,None,Gender,Unisex,Glass,Acrylic,Model Collection,Original Gent,Model Name,Retro-Rosso,Movement Source,Swiss,Movement,Quartz,Strap colour,Red,Strap Type,Rubber Strap,Water Resistance,30 metres,BARCODE,7610522837270,Guarantee,24 months', 125, 60, '2021-03-25 06:37:18', '2021-03-25 06:37:18'),
(35, 3, 'Swatch', 'LN157', 'Swatch Watch', 'March Monthly Drop', 'Quartz', 'Ladies', 62.60, 5, 'blue/green', 'Swatch #Greentouche LN157 is a beautiful and interesting Ladies watch from March Monthly Drop collection. Case material is Plastic/Resin, which stands for a high quality of the item while the dial colour is Blue. This model has got 30 metres water resistancy - it can be worn in scenarios where it is likely to be splashed but not immersed in water. It can be worn while washing your hands and will be fine in rain. We ship it with an original box and a guarantee from the manufacturer.', 'Brand,Swatch,Analogue/Digital,Analogue,Case depth approx.,7.00mm,Primary Material,Plastic/Resin,Case Shape,Circle,Case width approx.,25.00mm,Clasp type,Strap buckle,Dial Colour,Blue,Multiple Time Zones Display,None,Gender,Ladies,Glass,Acrylic,Model Collection,March Monthly Drop,Model Name,#Greentouche,Movement Source,Swiss,Movement,Quartz,Strap colour,Multicolour,Strap Type,Rubber Strap,Water Resistance,30 metres,BARCODE,7610522833067,Guarantee,24 months', 125, 99, '2021-03-25 06:37:18', '2021-03-25 06:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `star_number` smallint(6) NOT NULL,
  `text` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `star_number`, `text`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(403, 4, 'very nice and stylish. I would recommend this', 2, 1, '2021-03-19 06:16:44', '2021-03-19 06:16:44'),
(604, 4, 'very nice and stylish. I would recommend this', 1, 1, '2021-03-21 07:35:13', '2021-03-21 07:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_pref` tinyint(4) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `city`, `state`, `country`, `post_code`, `password`, `contact_pref`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Soroosh Modarresi 1366', 'siproxtech@gmail.com', 333333, '11813 Brockman ln', 'Halifax', 'NS', 'United Kingdom', 'B3H 1W9', '$2y$10$5wT6yjhkAWcqezmEyvAuGe1E/Et9tWniwhx54uVkyHFPLYxcAW8bm', 1, '2021-02-09 09:35:33', NULL, '2021-02-09 09:33:30', '2021-04-07 05:39:49'),
(2, 'Jonh Doe', 'email@email.com', 9484516582, NULL, NULL, NULL, NULL, NULL, '$2y$10$wzDFxNKcMqjp6po0Il1RsOjyfG8y/WMuaCqkxd0rvrUE19n2Wo2MW', 1, NULL, NULL, '2021-02-09 09:33:30', '2021-02-09 09:33:30'),
(3, 'ahmad Doe', 'ahmad@email.com', 8986180741, NULL, NULL, NULL, NULL, NULL, '$2y$10$iNqjMcQ3wfnqCz/MljLnIu2B0mdBv4uvcY84soPwcBvFHiRIFBY.6', 1, NULL, NULL, '2021-02-09 09:33:30', '2021-02-09 09:33:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_order_id_foreign` (`order_id`),
  ADD KEY `payments_user_id_foreign` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=805;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
