-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 09:19 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `constacl_single`
--

-- --------------------------------------------------------

--
-- Table structure for table `constacl_single_config`
--

CREATE TABLE `constacl_single_config` (
  `constacl_single_config_id` int(10) UNSIGNED NOT NULL,
  `constacl_single_config_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_config_attribute_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_config_attribute_value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `constacl_single_config`
--

INSERT INTO `constacl_single_config` (`constacl_single_config_id`, `constacl_single_config_category`, `constacl_single_config_attribute_title`, `constacl_single_config_attribute_value`) VALUES
(1, 'Mail', 'Mail Driver', 'smtp'),
(2, 'Mail', 'Mail Host', 'smtp.sendgrid.net'),
(3, 'Mail', 'Mail Port', '2525'),
(4, 'Mail', 'Mail Username', 'apikey'),
(5, 'Mail', 'Mail Password', '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'),
(6, 'Mail', 'Mail From Address', 'constacloud@constacloud.com'),
(7, 'Mail', 'Mail From Name', 'Constacloud Test');

-- --------------------------------------------------------

--
-- Table structure for table `constacl_single_organization`
--

CREATE TABLE `constacl_single_organization` (
  `constacl_single_organization_id` int(10) UNSIGNED NOT NULL,
  `constacl_single_organization_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_organization_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_organization_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_organization_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_organization_contactno` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_organization_isactive` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_organization_isdeleted` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_organization_created_time` datetime NOT NULL,
  `constacl_single_organization_updated_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `constacl_single_passwords`
--

CREATE TABLE `constacl_single_passwords` (
  `constacl_single_passwords_id` int(10) UNSIGNED NOT NULL,
  `constacl_single_passwords_users_id` int(10) UNSIGNED NOT NULL,
  `constacl_single_users_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_users_password_status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_users_password_created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `constacl_single_passwords`
--

INSERT INTO `constacl_single_passwords` (`constacl_single_passwords_id`, `constacl_single_passwords_users_id`, `constacl_single_users_password`, `constacl_single_users_password_status`, `constacl_single_users_password_created_at`) VALUES
(25, 156, 'OU92SENTQUpOMkZjRkF5NXZxSng5dz09', '0', '2019-01-15 06:08:56'),
(26, 157, 'OU92SENTQUpOMkZjRkF5NXZxSng5dz09', '0', '2019-01-15 06:08:56'),
(27, 158, 'OU92SENTQUpOMkZjRkF5NXZxSng5dz09', '0', '2019-01-17 07:15:59'),
(28, 158, 'bHJtcU9UaTkxanZlN1FTU3k3cjNnQT09', '1', '2019-01-18 07:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `constacl_single_users`
--

CREATE TABLE `constacl_single_users` (
  `constacl_subscri_users_id` int(10) UNSIGNED NOT NULL,
  `constacl_single_users_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_users_userid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_users_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_users_contactno` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_users_category` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_users_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_users_created_at` datetime NOT NULL,
  `constacl_single_users_updated_at` datetime NOT NULL,
  `constacl_single_users_created_by` int(11) NOT NULL,
  `constacl_single_users_updated_by` int(11) NOT NULL,
  `constacl_single_users_forget_password_requested` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_users_forget_password_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_users_forget_password_link_status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_users_forget_password_link_expiration_time` datetime DEFAULT NULL,
  `constacl_single_users_isactive` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `constacl_single_users_isdeleted` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `constacl_single_users`
--

INSERT INTO `constacl_single_users` (`constacl_subscri_users_id`, `constacl_single_users_name`, `constacl_single_users_userid`, `constacl_single_users_email`, `constacl_single_users_contactno`, `constacl_single_users_category`, `constacl_single_users_password`, `constacl_single_users_created_at`, `constacl_single_users_updated_at`, `constacl_single_users_created_by`, `constacl_single_users_updated_by`, `constacl_single_users_forget_password_requested`, `constacl_single_users_forget_password_link`, `constacl_single_users_forget_password_link_status`, `constacl_single_users_forget_password_link_expiration_time`, `constacl_single_users_isactive`, `constacl_single_users_isdeleted`) VALUES
(156, 'Mr. Price Batz', 'dmaggio@example.org', 'antonia76@example.com', 'ndVIBzqHrh', 'users', 'OU92SENTQUpOMkZjRkF5NXZxSng5dz09', '2019-01-15 06:08:56', '2019-01-15 06:08:56', 0, 0, '', '$2y$10$hlR2ZkQw7zvxpXONgIqx2uOCc7eQVLMqHajcBbm8XXBFp3ab/Uhvi', '', '2019-01-17 07:27:26', '1', '0'),
(157, 'Willa Considine', 'ksporer@example.net', 'lester.bednar@example.com', 'uKHLe1To6b', 'users', 'OU92SENTQUpOMkZjRkF5NXZxSng5dz09', '2019-01-15 06:08:56', '2019-01-15 06:08:56', 0, 0, '', '$2y$10$hlR2ZkQw7zvxpXONgIqx2uOCc7eQVLMqHajcBbm8XXBFp3ab/Uhvi', '', '2019-01-17 07:27:26', '1', '0'),
(158, 'Constacloud test', 'animesh27051982@gmail.com', 'animesh27051982@gmail.com', '4343656', 'superadmin', 'bHJtcU9UaTkxanZlN1FTU3k3cjNnQT09', '2019-01-17 07:15:59', '2019-01-18 07:31:40', 0, 0, '0', '', '0', '1970-01-01 00:00:00', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `constacl_single_users_logged_data`
--

CREATE TABLE `constacl_single_users_logged_data` (
  `constacl_single_users_logged_data_id` int(10) UNSIGNED NOT NULL,
  `constacl_single_users_id` int(10) UNSIGNED NOT NULL,
  `constacl_single_users_logged_in_time` datetime NOT NULL,
  `constacl_single_users_logged_out_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `constacl_single_users_roles_access`
--

CREATE TABLE `constacl_single_users_roles_access` (
  `constacl_single_users_roles_access_id` int(10) UNSIGNED NOT NULL,
  `constacl_single_users_id` int(10) UNSIGNED NOT NULL,
  `constacl_single_users_role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2019_01_14_061830_constacl_single_users', 6),
(8, '2019_01_14_063618_constacl_single_config', 7),
(9, '2019_01_14_100034_constacl_single_organization', 8),
(16, '2019_01_14_063950_constacl_single_passwords', 9),
(17, '2019_01_14_064549_constacl_single_users_logged_data', 9),
(18, '2019_01_14_064858_constacl_single_users_roles_access', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `constacl_single_config`
--
ALTER TABLE `constacl_single_config`
  ADD PRIMARY KEY (`constacl_single_config_id`);

--
-- Indexes for table `constacl_single_organization`
--
ALTER TABLE `constacl_single_organization`
  ADD PRIMARY KEY (`constacl_single_organization_id`);

--
-- Indexes for table `constacl_single_passwords`
--
ALTER TABLE `constacl_single_passwords`
  ADD PRIMARY KEY (`constacl_single_passwords_id`),
  ADD KEY `user_id_foreign_password` (`constacl_single_passwords_users_id`);

--
-- Indexes for table `constacl_single_users`
--
ALTER TABLE `constacl_single_users`
  ADD PRIMARY KEY (`constacl_subscri_users_id`),
  ADD UNIQUE KEY `constacl_single_users_constacl_single_users_email_unique` (`constacl_single_users_email`),
  ADD UNIQUE KEY `constacl_single_users_constacl_single_users_contactno_unique` (`constacl_single_users_contactno`);

--
-- Indexes for table `constacl_single_users_logged_data`
--
ALTER TABLE `constacl_single_users_logged_data`
  ADD PRIMARY KEY (`constacl_single_users_logged_data_id`),
  ADD KEY `user_id_foreign_key_logged` (`constacl_single_users_id`);

--
-- Indexes for table `constacl_single_users_roles_access`
--
ALTER TABLE `constacl_single_users_roles_access`
  ADD PRIMARY KEY (`constacl_single_users_roles_access_id`),
  ADD KEY `user_id_foreign_key_role` (`constacl_single_users_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `constacl_single_config`
--
ALTER TABLE `constacl_single_config`
  MODIFY `constacl_single_config_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `constacl_single_organization`
--
ALTER TABLE `constacl_single_organization`
  MODIFY `constacl_single_organization_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `constacl_single_passwords`
--
ALTER TABLE `constacl_single_passwords`
  MODIFY `constacl_single_passwords_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `constacl_single_users`
--
ALTER TABLE `constacl_single_users`
  MODIFY `constacl_subscri_users_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `constacl_single_users_logged_data`
--
ALTER TABLE `constacl_single_users_logged_data`
  MODIFY `constacl_single_users_logged_data_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `constacl_single_users_roles_access`
--
ALTER TABLE `constacl_single_users_roles_access`
  MODIFY `constacl_single_users_roles_access_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `constacl_single_passwords`
--
ALTER TABLE `constacl_single_passwords`
  ADD CONSTRAINT `user_id_foreign_password` FOREIGN KEY (`constacl_single_passwords_users_id`) REFERENCES `constacl_single_users` (`constacl_subscri_users_id`) ON DELETE CASCADE;

--
-- Constraints for table `constacl_single_users_logged_data`
--
ALTER TABLE `constacl_single_users_logged_data`
  ADD CONSTRAINT `user_id_foreign_key_logged` FOREIGN KEY (`constacl_single_users_id`) REFERENCES `constacl_single_users` (`constacl_subscri_users_id`) ON DELETE CASCADE;

--
-- Constraints for table `constacl_single_users_roles_access`
--
ALTER TABLE `constacl_single_users_roles_access`
  ADD CONSTRAINT `user_id_foreign_key_role` FOREIGN KEY (`constacl_single_users_id`) REFERENCES `constacl_single_users` (`constacl_subscri_users_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
