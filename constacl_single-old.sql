-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2018 at 08:05 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

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
  `constacl_single_config_id` int(10) NOT NULL,
  `constacl_single_config_category` varchar(255) NOT NULL,
  `constacl_single_config_attribute_title` varchar(255) NOT NULL,
  `constacl_single_config_attribute_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `constacl_single_organization_id` int(10) NOT NULL,
  `constacl_single_organization_name` varchar(255) NOT NULL,
  `constacl_single_organization_email` varchar(255) NOT NULL,
  `constacl_single_organization_logo` varchar(255) NOT NULL,
  `constacl_single_organization_address` text NOT NULL,
  `constacl_single_organization_contactno` varchar(20) NOT NULL,
  `constacl_single_organization_isactive` varchar(1) NOT NULL,
  `constacl_single_organization_isdeleted` varchar(1) NOT NULL,
  `constacl_single_organization_created_time` datetime NOT NULL,
  `constacl_single_organization_updated_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constacl_single_organization`
--

INSERT INTO `constacl_single_organization` (`constacl_single_organization_id`, `constacl_single_organization_name`, `constacl_single_organization_email`, `constacl_single_organization_logo`, `constacl_single_organization_address`, `constacl_single_organization_contactno`, `constacl_single_organization_isactive`, `constacl_single_organization_isdeleted`, `constacl_single_organization_created_time`, `constacl_single_organization_updated_time`) VALUES
(25, 'dfdsf', 'dsfdf@yahoo.com', '', 'sdfdsf', '12345', '1', '1', '2018-12-08 10:55:44', '2018-12-08 13:50:40');

-- --------------------------------------------------------

--
-- Table structure for table `constacl_single_passwords`
--

CREATE TABLE `constacl_single_passwords` (
  `constacl_single_passwords_id` int(10) NOT NULL,
  `constacl_single_passwords_users_id` int(10) NOT NULL COMMENT 'It will be the constacl_subscri_users_id',
  `constacl_single_users_password` varchar(255) NOT NULL,
  `constacl_single_users_password_status` varchar(1) NOT NULL COMMENT 'It will be 0 for inactive and 1 for active',
  `constacl_single_users_password_created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `constacl_single_users`
--

CREATE TABLE `constacl_single_users` (
  `constacl_single_users_id` int(10) NOT NULL,
  `constacl_single_users_name` varchar(255) NOT NULL,
  `constacl_single_users_userid` varchar(255) NOT NULL,
  `constacl_single_users_email` varchar(255) NOT NULL,
  `constacl_single_users_contactno` varchar(20) NOT NULL,
  `constacl_single_users_category` varchar(25) NOT NULL COMMENT 'It Will Be users/admin/superadmin',
  `constacl_single_users_password` varchar(255) NOT NULL,
  `constacl_single_users_belongs_to` int(10) NOT NULL COMMENT 'It will be organization id to which the user/super admin belongs too',
  `constacl_single_users_created_at` datetime NOT NULL,
  `constacl_single_users_updated_at` datetime NOT NULL,
  `constacl_single_users_created_by` int(10) NOT NULL,
  `constacl_single_users_updated_by` int(10) NOT NULL,
  `constacl_single_users_forget_password_requested` varchar(1) NOT NULL COMMENT '0 if not request raised and 1 if the request raised by users',
  `constacl_single_users_forget_password_link` varchar(255) NOT NULL,
  `constacl_single_users_forget_password_link_status` varchar(1) NOT NULL COMMENT '0 for inactive and 1 for active',
  `constacl_single_users_forget_password_link_expiration_time` datetime NOT NULL,
  `constacl_single_users_isactive` varchar(1) NOT NULL,
  `constacl_single_users_isdeleted` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constacl_single_users`
--

INSERT INTO `constacl_single_users` (`constacl_single_users_id`, `constacl_single_users_name`, `constacl_single_users_userid`, `constacl_single_users_email`, `constacl_single_users_contactno`, `constacl_single_users_category`, `constacl_single_users_password`, `constacl_single_users_belongs_to`, `constacl_single_users_created_at`, `constacl_single_users_updated_at`, `constacl_single_users_created_by`, `constacl_single_users_updated_by`, `constacl_single_users_forget_password_requested`, `constacl_single_users_forget_password_link`, `constacl_single_users_forget_password_link_status`, `constacl_single_users_forget_password_link_expiration_time`, `constacl_single_users_isactive`, `constacl_single_users_isdeleted`) VALUES
(1, 'Constacloud test', 'constacloudtest@constacloud.com', 'constacloudtest@constacloud.com', '4343656', 'users', 'MFErNkhvRTJ5YVZMU3BKazRsUitVdz09', 0, '2018-12-07 17:52:46', '2018-12-07 17:52:46', 0, 0, '', '', '', '0000-00-00 00:00:00', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `constacl_single_users_logged_data`
--

CREATE TABLE `constacl_single_users_logged_data` (
  `constacl_single_users_logged_data_id` int(10) NOT NULL,
  `constacl_single_users_id` int(11) NOT NULL COMMENT 'It will be constacl_single_users_id',
  `constacl_single_users_logged_in_time` datetime NOT NULL,
  `constacl_single_users_logged_out_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `constacl_single_users_roles_access`
--

CREATE TABLE `constacl_single_users_roles_access` (
  `constacl_single_users_roles_access_id` int(10) NOT NULL,
  `constacl_single_users_id` int(10) NOT NULL COMMENT 'It will be constacl_subscri_users_id',
  `constacl_single_users_role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`constacl_single_passwords_id`);

--
-- Indexes for table `constacl_single_users`
--
ALTER TABLE `constacl_single_users`
  ADD PRIMARY KEY (`constacl_single_users_id`);

--
-- Indexes for table `constacl_single_users_logged_data`
--
ALTER TABLE `constacl_single_users_logged_data`
  ADD PRIMARY KEY (`constacl_single_users_logged_data_id`);

--
-- Indexes for table `constacl_single_users_roles_access`
--
ALTER TABLE `constacl_single_users_roles_access`
  ADD PRIMARY KEY (`constacl_single_users_roles_access_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `constacl_single_config`
--
ALTER TABLE `constacl_single_config`
  MODIFY `constacl_single_config_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `constacl_single_organization`
--
ALTER TABLE `constacl_single_organization`
  MODIFY `constacl_single_organization_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `constacl_single_passwords`
--
ALTER TABLE `constacl_single_passwords`
  MODIFY `constacl_single_passwords_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `constacl_single_users`
--
ALTER TABLE `constacl_single_users`
  MODIFY `constacl_single_users_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `constacl_single_users_logged_data`
--
ALTER TABLE `constacl_single_users_logged_data`
  MODIFY `constacl_single_users_logged_data_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `constacl_single_users_roles_access`
--
ALTER TABLE `constacl_single_users_roles_access`
  MODIFY `constacl_single_users_roles_access_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
