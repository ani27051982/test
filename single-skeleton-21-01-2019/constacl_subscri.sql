-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2019 at 05:47 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `constacl_subscri`
--

-- --------------------------------------------------------

--
-- Table structure for table `constacl_subscri_organization`
--

CREATE TABLE `constacl_subscri_organization` (
  `constacl_subscri_organization_id` int(10) NOT NULL,
  `constacl_subscri_organization_name` varchar(255) NOT NULL,
  `constacl_subscri_organization_email` varchar(255) NOT NULL,
  `constacl_subscri_organization_address` text NOT NULL,
  `constacl_subscri_organization_contactno` varchar(20) NOT NULL,
  `constacl_subscri_organization_isactive` varchar(1) NOT NULL,
  `constacl_subscri_organization_isdeleted` varchar(1) NOT NULL,
  `constacl_subscri_organization_created_time` datetime NOT NULL,
  `constacl_subscri_organization_updated_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constacl_subscri_organization`
--

INSERT INTO `constacl_subscri_organization` (`constacl_subscri_organization_id`, `constacl_subscri_organization_name`, `constacl_subscri_organization_email`, `constacl_subscri_organization_address`, `constacl_subscri_organization_contactno`, `constacl_subscri_organization_isactive`, `constacl_subscri_organization_isdeleted`, `constacl_subscri_organization_created_time`, `constacl_subscri_organization_updated_time`) VALUES
(25, 'dfdsf', 'dsfdf@yahoo.com', 'sdfdsf', '12345', '1', '1', '2018-12-08 10:55:44', '2018-12-08 13:50:40');

-- --------------------------------------------------------

--
-- Table structure for table `constacl_subscri_organization_subscription`
--

CREATE TABLE `constacl_subscri_organization_subscription` (
  `constacl_subscri_organization_subscription_id` int(10) NOT NULL,
  `constacl_subscri_organization_subscription_organization_id` int(10) NOT NULL COMMENT 'constacl_subscri_organization_id',
  `constacl_subscri_organization_subscription_type` varchar(25) DEFAULT NULL COMMENT 'subscribed/Trial',
  `constacl_subscri_organization_subscription_days` int(4) DEFAULT NULL,
  `constacl_subscri_organization_subscription_fees_amount` decimal(10,2) DEFAULT NULL,
  `constacl_subscri_organization_subscription_payment_status` varchar(255) DEFAULT NULL,
  `constacl_subscri_organization_subscription_transactionid` varchar(255) DEFAULT NULL,
  `constacl_subscri_organization_subscription_payer_id` varchar(255) DEFAULT NULL,
  `constacl_subscri_organization_subscription_start_date` datetime NOT NULL DEFAULT '1970-01-01 08:00:00',
  `constacl_subscri_organization_subscription_end_date` datetime NOT NULL DEFAULT '1970-01-01 08:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constacl_subscri_organization_subscription`
--

INSERT INTO `constacl_subscri_organization_subscription` (`constacl_subscri_organization_subscription_id`, `constacl_subscri_organization_subscription_organization_id`, `constacl_subscri_organization_subscription_type`, `constacl_subscri_organization_subscription_days`, `constacl_subscri_organization_subscription_fees_amount`, `constacl_subscri_organization_subscription_payment_status`, `constacl_subscri_organization_subscription_transactionid`, `constacl_subscri_organization_subscription_payer_id`, `constacl_subscri_organization_subscription_start_date`, `constacl_subscri_organization_subscription_end_date`) VALUES
(17, 25, 'Subscribed', 3, '1500.00', 'Cancelled', 'PAY-1LB54621LP446915DLQFVLYQ', 'undefined', '1970-01-01 08:00:00', '1970-01-01 08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `constacl_subscri_paypal_credentials`
--

CREATE TABLE `constacl_subscri_paypal_credentials` (
  `constacl_subscri_paypal_id` int(10) NOT NULL,
  `constacl_subscri_paypal_client_id` varchar(255) NOT NULL,
  `constacl_subscri_paypal_secret_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constacl_subscri_paypal_credentials`
--

INSERT INTO `constacl_subscri_paypal_credentials` (`constacl_subscri_paypal_id`, `constacl_subscri_paypal_client_id`, `constacl_subscri_paypal_secret_id`) VALUES
(1, 'AZglp837HvGGpVGBWuF3DgknhO0yyRCUqQS02_l28e5jcf0uG0aNwDeyVzf8RVNvpDBmeNtDIlMh-Gpk', 'EMPjhuk4O9UB5B18YS9_M9w76BtCezSkz2Bs1mwiyyteLuVvz5pO7heYn-dlIGYuqUvpeV6wL_mtnxd3');

-- --------------------------------------------------------

--
-- Table structure for table `constacl_subscri_subscriptions_type`
--

CREATE TABLE `constacl_subscri_subscriptions_type` (
  `constacl_subscri_subscription_type_id` int(10) NOT NULL,
  `constacl_subscri_subscription_type_display_name` varchar(255) NOT NULL,
  `constacl_subscri_subscription_type_value` int(3) NOT NULL,
  `constacl_subscri_fees_amount` decimal(10,2) NOT NULL,
  `constacl_subscri_subscription_type_isactive` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constacl_subscri_subscriptions_type`
--

INSERT INTO `constacl_subscri_subscriptions_type` (`constacl_subscri_subscription_type_id`, `constacl_subscri_subscription_type_display_name`, `constacl_subscri_subscription_type_value`, `constacl_subscri_fees_amount`, `constacl_subscri_subscription_type_isactive`) VALUES
(1, '3 Months', 3, '1500.00', '1'),
(2, '6 Months', 6, '2500.00', '1'),
(3, '1 Year', 12, '4500.00', '1'),
(4, '2 Year', 24, '7000.00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `constacl_subscri_users`
--

CREATE TABLE `constacl_subscri_users` (
  `constacl_subscri_users_id` int(10) NOT NULL,
  `constacl_subscri_users_name` varchar(255) NOT NULL,
  `constacl_subscri_users_email` varchar(255) NOT NULL,
  `constacl_subscri_users_contactno` varchar(20) NOT NULL,
  `constacl_subscri_users_category` varchar(25) NOT NULL COMMENT 'It Will Be users/superadminorganization/superadmin',
  `constacl_subscri_users_password` varchar(255) NOT NULL,
  `constacl_subscri_users_belongs_to` int(10) NOT NULL COMMENT 'It will be organization id to which the user/super admin belongs too',
  `constacl_subscri_users_created_at` datetime NOT NULL,
  `constacl_subscri_users_updated_at` datetime NOT NULL,
  `constacl_subscri_users_created_by` int(10) NOT NULL,
  `constacl_subscri_users_updated_by` int(10) NOT NULL,
  `constacl_subscri_users_isactive` varchar(1) NOT NULL,
  `constacl_subscri_users_isdeleted` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constacl_subscri_users`
--

INSERT INTO `constacl_subscri_users` (`constacl_subscri_users_id`, `constacl_subscri_users_name`, `constacl_subscri_users_email`, `constacl_subscri_users_contactno`, `constacl_subscri_users_category`, `constacl_subscri_users_password`, `constacl_subscri_users_belongs_to`, `constacl_subscri_users_created_at`, `constacl_subscri_users_updated_at`, `constacl_subscri_users_created_by`, `constacl_subscri_users_updated_by`, `constacl_subscri_users_isactive`, `constacl_subscri_users_isdeleted`) VALUES
(1, 'Constacloud test', 'constacloudtest@constacloud.com', '4343656', 'superadmin', 'UjUvUmsvMEF1VCsvZ09zL0JDajVuUT09', 0, '2018-12-07 17:52:46', '2018-12-07 17:52:46', 0, 0, '1', '0'),
(12, 'anim', 'anim@anim.com', '12345', 'superadminorganization', 'R3VSb0Q4TXFGUTRra3FFODBSNDBPUT09', 25, '2018-12-08 10:55:44', '2018-12-08 13:50:40', 1, 1, '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `constacl_subscri_organization`
--
ALTER TABLE `constacl_subscri_organization`
  ADD PRIMARY KEY (`constacl_subscri_organization_id`);

--
-- Indexes for table `constacl_subscri_organization_subscription`
--
ALTER TABLE `constacl_subscri_organization_subscription`
  ADD PRIMARY KEY (`constacl_subscri_organization_subscription_id`);

--
-- Indexes for table `constacl_subscri_paypal_credentials`
--
ALTER TABLE `constacl_subscri_paypal_credentials`
  ADD PRIMARY KEY (`constacl_subscri_paypal_id`);

--
-- Indexes for table `constacl_subscri_subscriptions_type`
--
ALTER TABLE `constacl_subscri_subscriptions_type`
  ADD PRIMARY KEY (`constacl_subscri_subscription_type_id`);

--
-- Indexes for table `constacl_subscri_users`
--
ALTER TABLE `constacl_subscri_users`
  ADD PRIMARY KEY (`constacl_subscri_users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `constacl_subscri_organization`
--
ALTER TABLE `constacl_subscri_organization`
  MODIFY `constacl_subscri_organization_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `constacl_subscri_organization_subscription`
--
ALTER TABLE `constacl_subscri_organization_subscription`
  MODIFY `constacl_subscri_organization_subscription_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `constacl_subscri_paypal_credentials`
--
ALTER TABLE `constacl_subscri_paypal_credentials`
  MODIFY `constacl_subscri_paypal_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `constacl_subscri_subscriptions_type`
--
ALTER TABLE `constacl_subscri_subscriptions_type`
  MODIFY `constacl_subscri_subscription_type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `constacl_subscri_users`
--
ALTER TABLE `constacl_subscri_users`
  MODIFY `constacl_subscri_users_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
