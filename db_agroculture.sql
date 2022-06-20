-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 07:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_agroculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_access`
--

CREATE TABLE `tbl_access` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_access`
--

INSERT INTO `tbl_access` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'cashier'),
(3, 'customer'),
(4, 'carrier');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gender`
--

CREATE TABLE `tbl_gender` (
  `id` int(11) NOT NULL,
  `gender` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gender`
--

INSERT INTO `tbl_gender` (`id`, `gender`) VALUES
(1, 'male'),
(2, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory`
--

CREATE TABLE `tbl_inventory` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_inventory`
--

INSERT INTO `tbl_inventory` (`id`, `product_id`, `qty`) VALUES
(1, 1, 1000),
(2, 2, 1000),
(3, 3, 1000),
(4, 4, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `id` int(11) NOT NULL,
  `invoice` varchar(45) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`id`, `invoice`, `customer_id`, `date_created`) VALUES
(1, '1655401570', 8, '2022-06-17 01:46:10'),
(2, '1655403210', 8, '2022-06-17 02:13:30'),
(3, '1655405509', 8, '2022-06-17 02:51:49'),
(4, '1655405523', 8, '2022-06-17 02:52:03'),
(5, '1655487346', 8, '2022-06-18 01:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice_status`
--

CREATE TABLE `tbl_invoice_status` (
  `id` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT 0.00,
  `date_created` datetime DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `description`, `image`, `price`, `date_created`, `created_by`) VALUES
(1, 'Male quail', 'Kal', 'male_quail.jpg', '15.00', '2022-06-11 14:31:01', NULL),
(2, 'Female quail', 'Laying Eggs', 'female_quail.png', '25.00', '2022-06-11 14:31:01', NULL),
(3, 'Quail Egg', 'Egg', 'quail_egg.jpg', '1.15', '2022-06-12 21:41:20', NULL),
(4, 'Female quail', '8 - 12 Months Kal', 'Quail8months.png', '15.00', '2022-06-20 13:56:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id`, `status`) VALUES
(1, 'draft'),
(2, 'order placed'),
(3, 'to shipped'),
(4, 'order shipped'),
(5, 'cancelled'),
(6, 'rejected'),
(7, 'received');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_history`
--

CREATE TABLE `tbl_status_history` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status_history`
--

INSERT INTO `tbl_status_history` (`id`, `transaction_id`, `status_id`, `created_by`, `date_created`) VALUES
(1, 2, 1, 8, '2022-06-16 18:52:37'),
(11, 12, 1, 8, '2022-06-16 19:05:16'),
(16, 17, 1, 8, '2022-06-16 19:44:58'),
(17, 18, 1, 8, '2022-06-16 19:45:39'),
(18, 19, 1, 8, '2022-06-16 23:49:20'),
(19, 20, 1, 8, '2022-06-16 23:51:42'),
(20, 21, 1, 8, '2022-06-16 23:54:55'),
(21, 22, 1, 8, '2022-06-16 23:54:56'),
(22, 23, 1, 8, '2022-06-16 23:54:56'),
(23, 24, 1, 8, '2022-06-17 00:04:07'),
(24, 25, 1, 8, '2022-06-17 00:05:19'),
(25, 26, 1, 8, '2022-06-17 00:05:21'),
(26, 27, 1, 8, '2022-06-17 00:05:36'),
(27, 28, 1, 8, '2022-06-17 00:07:06'),
(28, 29, 1, 8, '2022-06-17 00:07:07'),
(29, 30, 1, 8, '2022-06-17 00:10:13'),
(30, 31, 1, 8, '2022-06-17 00:13:48'),
(31, 32, 1, 8, '2022-06-17 00:14:49'),
(32, 33, 1, 8, '2022-06-17 00:14:50'),
(33, 34, 1, 8, '2022-06-17 00:14:51'),
(34, 35, 1, 8, '2022-06-17 00:41:55'),
(35, 36, 1, 8, '2022-06-17 00:41:56'),
(36, 37, 1, 8, '2022-06-17 00:41:57'),
(37, 38, 1, 8, '2022-06-17 00:52:32'),
(38, 39, 1, 8, '2022-06-17 00:52:32'),
(39, 40, 1, 8, '2022-06-17 00:52:33'),
(40, 41, 1, 8, '2022-06-17 01:04:59'),
(41, 42, 1, 8, '2022-06-17 01:04:59'),
(42, 43, 1, 8, '2022-06-17 01:05:00'),
(43, 41, 2, 8, '2022-06-17 01:34:44'),
(44, 42, 2, 8, '2022-06-17 01:34:44'),
(45, 43, 2, 8, '2022-06-17 01:34:44'),
(46, 41, 2, 8, '2022-06-17 01:36:21'),
(47, 42, 2, 8, '2022-06-17 01:36:21'),
(48, 43, 2, 8, '2022-06-17 01:36:21'),
(49, 41, 2, 8, '2022-06-17 01:38:19'),
(50, 42, 2, 8, '2022-06-17 01:38:19'),
(51, 43, 2, 8, '2022-06-17 01:38:19'),
(52, 44, 1, 8, '2022-06-17 01:46:07'),
(53, 45, 1, 8, '2022-06-17 01:46:07'),
(54, 46, 1, 8, '2022-06-17 01:46:08'),
(55, 44, 2, 8, '2022-06-17 01:46:10'),
(56, 45, 2, 8, '2022-06-17 01:46:10'),
(57, 46, 2, 8, '2022-06-17 01:46:10'),
(58, 47, 1, 8, '2022-06-17 02:13:26'),
(59, 48, 1, 8, '2022-06-17 02:13:27'),
(60, 49, 1, 8, '2022-06-17 02:13:27'),
(61, 47, 2, 8, '2022-06-17 02:13:30'),
(62, 48, 2, 8, '2022-06-17 02:13:30'),
(63, 49, 2, 8, '2022-06-17 02:13:30'),
(64, 50, 1, 8, '2022-06-17 02:39:36'),
(65, 50, 2, 8, '2022-06-17 02:51:49'),
(66, 51, 1, 8, '2022-06-17 02:51:56'),
(67, 52, 1, 8, '2022-06-17 02:51:57'),
(68, 53, 1, 8, '2022-06-17 02:51:58'),
(69, 51, 2, 8, '2022-06-17 02:52:03'),
(70, 52, 2, 8, '2022-06-17 02:52:03'),
(71, 53, 2, 8, '2022-06-17 02:52:03'),
(72, 54, 1, 8, '2022-06-17 02:58:40'),
(73, 55, 1, 8, '2022-06-17 02:58:40'),
(74, 56, 1, 8, '2022-06-17 02:58:41'),
(75, 54, 2, 8, '2022-06-18 01:35:46'),
(76, 55, 2, 8, '2022-06-18 01:35:46'),
(77, 56, 2, 8, '2022-06-18 01:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transactions`
--

CREATE TABLE `tbl_transactions` (
  `id` int(11) NOT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT 1,
  `date_created` datetime DEFAULT current_timestamp(),
  `is_deleted` int(11) DEFAULT 0,
  `date_updated` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transactions`
--

INSERT INTO `tbl_transactions` (`id`, `invoice_id`, `price`, `qty`, `product_id`, `buyer_id`, `seller_id`, `status_id`, `date_created`, `is_deleted`, `date_updated`) VALUES
(2, NULL, '3200.00', 16, 1, 8, NULL, 1, '2022-06-16 18:52:37', 1, '2022-06-18 18:24:14'),
(17, NULL, '900.00', 3, 2, 8, NULL, 1, '2022-06-16 19:44:58', 1, '2022-06-18 18:24:14'),
(18, NULL, '350.00', 7, 3, 8, NULL, 1, '2022-06-16 19:45:39', 1, '2022-06-18 18:24:14'),
(19, NULL, '50.00', 1, 3, 8, NULL, 1, '2022-06-16 23:49:20', 1, '2022-06-18 18:24:14'),
(20, NULL, '200.00', 1, 1, 8, NULL, 1, '2022-06-16 23:51:42', 1, '2022-06-18 18:24:14'),
(21, NULL, '200.00', 1, 1, 8, NULL, 1, '2022-06-16 23:54:55', 1, '2022-06-18 18:24:14'),
(22, NULL, '300.00', 1, 2, 8, NULL, 1, '2022-06-16 23:54:56', 1, '2022-06-18 18:24:14'),
(23, NULL, '50.00', 1, 3, 8, NULL, 1, '2022-06-16 23:54:56', 1, '2022-06-18 18:24:14'),
(24, NULL, '1000.00', 5, 1, 8, NULL, 1, '2022-06-17 00:04:07', 1, '2022-06-18 18:24:14'),
(25, NULL, '300.00', 1, 2, 8, NULL, 1, '2022-06-17 00:05:19', 1, '2022-06-18 18:24:14'),
(26, NULL, '150.00', 3, 3, 8, NULL, 1, '2022-06-17 00:05:21', 1, '2022-06-18 18:24:14'),
(27, NULL, '600.00', 2, 2, 8, NULL, 1, '2022-06-17 00:05:36', 1, '2022-06-18 18:24:14'),
(28, NULL, '150.00', 3, 3, 8, NULL, 1, '2022-06-17 00:07:06', 1, '2022-06-18 18:24:14'),
(29, NULL, '1800.00', 6, 2, 8, NULL, 1, '2022-06-17 00:07:07', 1, '2022-06-18 18:24:14'),
(30, NULL, '1400.00', 7, 1, 8, NULL, 1, '2022-06-17 00:10:13', 1, '2022-06-18 18:24:14'),
(31, NULL, '200.00', 1, 1, 8, NULL, 1, '2022-06-17 00:13:48', 1, '2022-06-18 18:24:14'),
(32, NULL, '300.00', 1, 2, 8, NULL, 1, '2022-06-17 00:14:49', 1, '2022-06-18 18:24:14'),
(33, NULL, '50.00', 1, 3, 8, NULL, 1, '2022-06-17 00:14:50', 1, '2022-06-18 18:24:14'),
(34, NULL, '200.00', 1, 1, 8, NULL, 1, '2022-06-17 00:14:51', 1, '2022-06-18 18:24:14'),
(35, NULL, '50.00', 1, 3, 8, NULL, 1, '2022-06-17 00:41:55', 1, '2022-06-18 18:24:14'),
(36, NULL, '600.00', 2, 2, 8, NULL, 1, '2022-06-17 00:41:56', 1, '2022-06-18 18:24:14'),
(37, NULL, '200.00', 1, 1, 8, NULL, 1, '2022-06-17 00:41:57', 1, '2022-06-18 18:24:14'),
(38, NULL, '300.00', 1, 2, 8, NULL, 1, '2022-06-17 00:52:32', 1, '2022-06-18 18:24:14'),
(39, NULL, '1150.00', 23, 3, 8, NULL, 1, '2022-06-17 00:52:32', 1, '2022-06-18 18:24:14'),
(40, NULL, '200.00', 1, 1, 8, NULL, 1, '2022-06-17 00:52:33', 1, '2022-06-18 18:24:14'),
(41, NULL, '200.00', 1, 1, 8, NULL, 2, '2022-06-17 01:04:59', 0, '2022-06-18 18:24:14'),
(42, NULL, '300.00', 1, 2, 8, NULL, 2, '2022-06-17 01:04:59', 0, '2022-06-18 18:24:14'),
(43, NULL, '50.00', 1, 3, 8, NULL, 2, '2022-06-17 01:05:00', 0, '2022-06-18 18:24:14'),
(44, 1, '200.00', 1, 1, 8, NULL, 5, '2022-06-17 01:46:07', 0, '2022-06-18 12:48:26'),
(45, 1, '300.00', 1, 2, 8, NULL, 5, '2022-06-17 01:46:07', 0, '2022-06-18 12:48:13'),
(46, 1, '50.00', 1, 3, 8, NULL, 2, '2022-06-17 01:46:08', 0, '2022-06-18 18:24:14'),
(47, 2, '200.00', 1, 1, 8, NULL, 2, '2022-06-17 02:13:26', 0, '2022-06-18 18:24:14'),
(48, 2, '300.00', 1, 2, 8, NULL, 2, '2022-06-17 02:13:27', 0, '2022-06-18 18:24:14'),
(49, 2, '50.00', 1, 3, 8, NULL, 2, '2022-06-17 02:13:27', 0, '2022-06-18 18:24:14'),
(50, 3, '300.00', 1, 2, 8, NULL, 2, '2022-06-17 02:39:36', 0, '2022-06-18 18:24:14'),
(51, 4, '600.00', 3, 1, 8, NULL, 2, '2022-06-17 02:51:56', 0, '2022-06-18 18:24:14'),
(52, 4, '600.00', 2, 2, 8, NULL, 5, '2022-06-17 02:51:57', 0, '2022-06-18 18:24:14'),
(53, 4, '50.00', 1, 3, 8, NULL, 5, '2022-06-17 02:51:58', 0, '2022-06-18 18:24:14'),
(54, 5, '2200.00', 11, 1, 8, NULL, 2, '2022-06-17 02:58:40', 0, '2022-06-18 18:24:14'),
(55, 5, '2100.00', 7, 2, 8, NULL, 5, '2022-06-17 02:58:40', 0, '2022-06-18 18:24:14'),
(56, 5, '10050.00', 201, 3, 8, NULL, 2, '2022-06-17 02:58:41', 0, '2022-06-18 18:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `access_id` int(11) DEFAULT 3,
  `date_created` datetime DEFAULT current_timestamp(),
  `is_deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `access_id`, `date_created`, `is_deleted`) VALUES
(2, 'admin', '$2y$10$Y3ksPARb0uYJFuetdyGuaeRa.jOpIR.8KAxNlVvij4ZQNaZ1KmVm6', 'jimenez.carlo.llabor@gmail.com', 1, '2022-06-12 02:42:14', 0),
(7, 'cashier', '$2y$10$Y3ksPARb0uYJFuetdyGuaeRa.jOpIR.8KAxNlVvij4ZQNaZ1KmVm6', 'cashier@gmail.com', 2, '2022-06-12 10:10:09', 0),
(8, 'customer', '$2y$10$oAudgvpauxhyTxyhDOvo7.Geu/ddVWPU/TIq690SwRXOySZa81Iry', 'customer@gmail.com', 3, '2022-06-12 10:23:27', 0),
(9, 'carrier', '$2y$10$Y3ksPARb0uYJFuetdyGuaeRa.jOpIR.8KAxNlVvij4ZQNaZ1KmVm6', 'carrier@gmail.com', 4, '2022-06-15 22:14:36', 0),
(10, 'admin2', '$2y$10$/wkSAVsPPi.ooWYWZodyoeio4Xs9gPjEZCm4MMdG.LDlRGAEOxN82', 'admin2@gmail.com', 1, '2022-06-18 19:38:27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_info`
--

CREATE TABLE `tbl_users_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `contact_no` int(11) DEFAULT NULL,
  `gender_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users_info`
--

INSERT INTO `tbl_users_info` (`id`, `first_name`, `last_name`, `address`, `contact_no`, `gender_id`) VALUES
(2, 'Carlo', 'jimenez', 'poblaction sur bayambang pangasinan', 2147483647, 1),
(7, 'Carlo', 'jimenez', 'poblaction sur bayambang pangasinan', 2147483647, 1),
(8, 'customer', 'customer', 'poblaction sur bayambang pangasinan', 2147483647, 1),
(9, 'Carlo', 'jimenez', 'poblaction sur bayambang pangasinan', 2147483647, 1),
(10, 'admin2', 'admin2', 'poblaction sur bayambang pangasinan', 2147483647, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_access`
--
ALTER TABLE `tbl_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gender`
--
ALTER TABLE `tbl_gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_invoice_status`
--
ALTER TABLE `tbl_invoice_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_status_history`
--
ALTER TABLE `tbl_status_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users_info`
--
ALTER TABLE `tbl_users_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_access`
--
ALTER TABLE `tbl_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_gender`
--
ALTER TABLE `tbl_gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_invoice_status`
--
ALTER TABLE `tbl_invoice_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_status_history`
--
ALTER TABLE `tbl_status_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_users_info`
--
ALTER TABLE `tbl_users_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
