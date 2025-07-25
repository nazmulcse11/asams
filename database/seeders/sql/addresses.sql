-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2025 at 09:40 AM
-- Server version: 8.0.32
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asams`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint UNSIGNED NOT NULL,
  `addressable_id` bigint UNSIGNED NOT NULL,
  `addressable_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` bigint UNSIGNED DEFAULT NULL,
  `address_line1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `addressable_id`, `addressable_type`, `type_id`, `address_line1`, `address_line2`, `city`, `state`, `zip_code`, `country`, `is_primary`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'App\\Models\\Agent', 1, 'BTTC Building', 'Tejgaon', 'Dhaka', 'Dhaka', '1200', 'Bangladesh', 1, '2025-05-04 01:09:48', '2025-05-04 01:09:48', NULL),
(2, 3, 'App\\Models\\Agent', 1, '770 Hague Road', 'Recusandae Magna ma', 'Dhaka', 'Dhaka', '24727', 'Bangladesh', 0, '2025-05-31 12:05:38', '2025-05-31 12:05:38', NULL),
(3, 4, 'App\\Models\\Agent', 1, '770 Hague Road', 'Recusandae Magna ma', 'Dhaka', 'Dhaka', '24727', 'Bangladesh', 0, '2025-05-31 12:08:32', '2025-05-31 12:08:32', NULL),
(4, 5, 'App\\Models\\Agent', 2, '81 West Clarendon Lane', 'Blanditiis sunt eius', 'Dhaka', 'Dhaka', '19117', 'Bangladesh', 0, '2025-06-01 06:06:50', '2025-06-01 06:06:50', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_type_id_foreign` (`type_id`),
  ADD KEY `addresses_addressable_id_addressable_type_index` (`addressable_id`,`addressable_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `address_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
