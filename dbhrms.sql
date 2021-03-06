-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 08:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `appliedcadidtes`
--

CREATE TABLE `appliedcadidtes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `jobid` int(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `cv` varchar(100) DEFAULT NULL,
  `application_status` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appliedcadidtes`
--

INSERT INTO `appliedcadidtes` (`id`, `name`, `jobid`, `email`, `phone`, `cv`, `application_status`, `created_at`, `updated_at`) VALUES
(1, 'Clare Rowland', 1, 'kiwisep@mailinator.com', '+1 (777) 801-5549', '150e4.jpg', 'Approved', '2020-06-23 06:23:11', '2020-06-23 06:23:11'),
(2, 'Mr Adeel', 1, 'jibyz@mailinator.com', '+1 (857) 904-1014', '841682b0.jpg', 'Not Approved', '2020-06-28 23:09:12', '2020-06-28 23:09:12'),
(3, 'Mr Adeel', 2, 'adeel@gmail.com', '0300', '534799blog4.jpg', 'Not Approved', '2020-07-09 03:07:49', '2020-07-09 03:07:49'),
(4, 'test', 2, 'malikshafiq7088@gmail.com', '23442', '386339e2.jpg', 'Approved', '2020-07-09 03:41:45', '2020-07-09 03:41:45'),
(5, 'adeel', 2, 'adeel@gmail.com', '0343-8499447', '461pof jobs.pdf', NULL, '2020-07-13 11:39:42', '2020-07-13 11:39:42'),
(6, 'waseem', 2, 'was@yahoo.com', '0345-098999876', '9842020-06-26 (7)--MOLAW APPLICATION.pdf', NULL, '2020-07-13 11:49:38', '2020-07-13 11:49:38'),
(7, 'ramiz', 2, 'ramiz@mail.com', '88888888', '63220px-COMSATS_new_logo.jpg', NULL, '2020-07-13 11:54:25', '2020-07-13 11:54:25'),
(8, 'waqas', 2, 'wiki@gmail.com', '676767676', '221form.png', NULL, '2020-07-13 11:56:42', '2020-07-13 11:56:42'),
(9, 'talha', 2, 'talha@gmail.com', '7876776', '934220px-COMSATS_new_logo.jpg', 'Not Approved', '2020-07-13 11:58:20', '2020-07-13 11:58:20'),
(10, 'adeel khan', 4, 'adeeljadoon947@gmail.com', '03333333', '678Waleed Khan Jadoon (1).docx', 'Approved', '2020-07-16 12:52:29', '2020-07-16 12:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `attendance_date` date NOT NULL,
  `attendance_status` tinyint(4) DEFAULT NULL,
  `leave_category_id` int(11) DEFAULT NULL,
  `check_in` time DEFAULT NULL,
  `check_out` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `created_by`, `user_id`, `attendance_date`, `attendance_status`, `leave_category_id`, `check_in`, `check_out`, `created_at`, `updated_at`) VALUES
(1, 1, 6, '2019-08-27', 1, 1, '10:11:00', NULL, '2019-08-31 23:32:02', '2019-08-31 23:32:02'),
(2, 1, 4, '2019-08-27', 1, 0, '10:10:00', NULL, '2019-08-31 23:32:02', '2019-08-31 23:32:02'),
(3, 1, 5, '2019-08-27', 1, 0, '10:11:00', NULL, '2019-08-31 23:32:02', '2019-08-31 23:32:02'),
(4, 1, 3, '2019-08-27', 1, 0, '10:10:00', NULL, '2019-08-31 23:32:03', '2019-08-31 23:32:03'),
(5, 1, 11, '2019-08-27', 1, 0, '10:10:00', NULL, '2019-08-31 23:32:03', '2019-08-31 23:32:03'),
(6, 1, 2, '2019-08-27', 1, 0, '10:10:00', NULL, '2019-08-31 23:32:03', '2019-08-31 23:32:03'),
(7, 1, 13, '2019-09-07', 1, 0, '09:12:00', '17:12:00', '2019-09-07 03:18:30', '2019-09-07 05:26:26'),
(8, 1, 6, '2019-09-07', 0, 0, '09:12:00', '17:12:00', '2019-09-07 03:18:30', '2019-09-07 05:27:44'),
(9, 1, 4, '2019-09-07', 0, 1, '09:12:00', '17:12:00', '2019-09-07 03:18:30', '2019-09-07 05:07:56'),
(10, 1, 5, '2019-09-07', 0, 1, '09:12:00', '17:12:00', '2019-09-07 03:18:30', '2019-09-07 05:07:56'),
(11, 1, 3, '2019-09-07', 0, 0, '09:12:00', '17:12:00', '2019-09-07 03:18:30', '2019-09-07 05:07:56'),
(12, 1, 11, '2019-09-07', 0, 0, '09:12:00', '17:12:00', '2019-09-07 03:18:30', '2019-09-07 05:07:56'),
(13, 1, 2, '2019-09-07', 0, 0, '09:12:00', '17:12:00', '2019-09-07 03:18:30', '2019-09-07 05:07:56'),
(14, 1, 13, '2019-09-08', 1, 0, NULL, NULL, '2019-09-07 03:20:39', '2019-09-07 03:20:39'),
(15, 1, 6, '2019-09-08', 1, 0, NULL, NULL, '2019-09-07 03:20:39', '2019-09-07 03:20:39'),
(16, 1, 4, '2019-09-08', 1, 0, NULL, NULL, '2019-09-07 03:20:39', '2019-09-07 03:20:39'),
(17, 1, 5, '2019-09-08', 0, 1, NULL, NULL, '2019-09-07 03:20:39', '2019-09-07 03:20:39'),
(18, 1, 3, '2019-09-08', 0, 1, NULL, NULL, '2019-09-07 03:20:39', '2019-09-07 03:20:39'),
(19, 1, 11, '2019-09-08', 0, 0, NULL, NULL, '2019-09-07 03:20:39', '2019-09-07 03:20:39'),
(20, 1, 2, '2019-09-08', 0, 0, NULL, NULL, '2019-09-07 03:20:39', '2019-09-07 03:20:39'),
(21, 1, 13, '2019-09-01', 1, 0, '09:12:00', '17:12:00', '2019-09-07 07:08:48', '2019-09-07 07:23:50'),
(22, 1, 6, '2019-09-01', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:08:48', '2019-09-07 07:23:51'),
(23, 1, 4, '2019-09-01', 1, 1, '09:12:00', '17:12:00', '2019-09-07 07:08:48', '2019-09-07 07:23:51'),
(24, 1, 5, '2019-09-01', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:08:48', '2019-09-07 07:23:51'),
(25, 1, 3, '2019-09-01', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:08:48', '2019-09-07 07:23:51'),
(26, 1, 11, '2019-09-01', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:08:48', '2019-09-07 07:23:51'),
(27, 1, 2, '2019-09-01', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:08:48', '2019-09-07 07:23:51'),
(28, 1, 13, '2019-09-03', 0, 0, '10:12:00', '18:05:00', '2019-09-07 07:09:44', '2019-09-07 07:09:44'),
(29, 1, 6, '2019-09-03', 0, 0, '10:12:00', '18:05:00', '2019-09-07 07:09:44', '2019-09-07 07:09:44'),
(30, 1, 4, '2019-09-03', 0, 0, '10:12:00', '18:05:00', '2019-09-07 07:09:44', '2019-09-07 07:09:44'),
(31, 1, 5, '2019-09-03', 0, 0, '10:12:00', '18:05:00', '2019-09-07 07:09:44', '2019-09-07 07:09:44'),
(32, 1, 3, '2019-09-03', 0, 0, '10:12:00', '18:05:00', '2019-09-07 07:09:44', '2019-09-07 07:09:44'),
(33, 1, 11, '2019-09-03', 0, 0, '10:12:00', '18:05:00', '2019-09-07 07:09:44', '2019-09-07 07:09:44'),
(34, 1, 2, '2019-09-03', 0, 0, '10:12:00', '18:05:00', '2019-09-07 07:09:44', '2019-09-07 07:09:44'),
(35, 1, 13, '2019-09-02', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:10:01', '2019-09-07 07:24:10'),
(36, 1, 6, '2019-09-02', 1, 0, '09:12:00', '17:12:00', '2019-09-07 07:10:01', '2019-09-07 07:24:10'),
(37, 1, 4, '2019-09-02', 1, 0, '09:12:00', '17:12:00', '2019-09-07 07:10:01', '2019-09-07 07:24:10'),
(38, 1, 5, '2019-09-02', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:10:01', '2019-09-07 07:24:10'),
(39, 1, 3, '2019-09-02', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:10:01', '2019-09-07 07:24:10'),
(40, 1, 11, '2019-09-02', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:10:01', '2019-09-07 07:24:10'),
(41, 1, 2, '2019-09-02', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:10:01', '2019-09-07 07:24:10'),
(42, 1, 13, '2019-09-04', 1, 0, '09:12:00', '17:12:00', '2019-09-07 07:24:31', '2019-09-07 07:24:45'),
(43, 1, 6, '2019-09-04', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:24:31', '2019-09-07 07:24:45'),
(44, 1, 4, '2019-09-04', 0, 0, '09:12:00', '17:12:00', '2019-09-07 07:24:31', '2019-09-07 07:24:45'),
(45, 1, 5, '2019-09-04', 1, 0, '09:12:00', '17:12:00', '2019-09-07 07:24:31', '2019-09-07 07:24:45'),
(46, 1, 3, '2019-09-04', 1, 0, '09:12:00', '17:12:00', '2019-09-07 07:24:31', '2019-09-07 07:24:45'),
(47, 1, 11, '2019-09-04', 1, 0, '09:12:00', '17:12:00', '2019-09-07 07:24:31', '2019-09-07 07:24:45'),
(48, 1, 2, '2019-09-04', 1, 0, '09:12:00', '17:12:00', '2019-09-07 07:24:31', '2019-09-07 07:24:45'),
(49, 1, 13, '2019-09-09', 0, 0, '10:12:00', '18:05:00', '2019-09-07 07:29:18', '2019-09-07 07:29:18'),
(50, 1, 6, '2019-09-09', 0, 0, '11:12:00', '18:05:00', '2019-09-07 07:29:18', '2019-09-07 07:29:18'),
(51, 1, 4, '2019-09-09', 1, 0, '10:12:00', '18:05:00', '2019-09-07 07:29:18', '2019-09-07 07:29:18'),
(52, 1, 5, '2019-09-09', 1, 1, '10:12:00', '18:05:00', '2019-09-07 07:29:18', '2019-09-07 07:29:18'),
(53, 1, 3, '2019-09-09', 0, 1, '10:12:00', '18:05:00', '2019-09-07 07:29:18', '2019-09-07 07:29:18'),
(54, 1, 11, '2019-09-09', 1, 0, '10:12:00', '18:05:00', '2019-09-07 07:29:18', '2019-09-07 07:29:18'),
(55, 1, 2, '2019-09-09', 1, 0, '10:12:00', '18:05:00', '2019-09-07 07:29:18', '2019-09-07 07:29:18'),
(56, 1, 13, '2019-09-10', 1, 0, '10:12:00', '18:05:00', '2019-09-07 07:50:20', '2019-09-07 07:50:20'),
(57, 1, 6, '2019-09-10', 1, 0, '11:12:00', '18:05:00', '2019-09-07 07:50:20', '2019-09-07 07:50:20'),
(58, 1, 4, '2019-09-10', 1, 0, '11:12:00', '18:05:00', '2019-09-07 07:50:20', '2019-09-07 07:50:20'),
(59, 1, 5, '2019-09-10', 1, 0, '11:12:00', '18:05:00', '2019-09-07 07:50:20', '2019-09-07 07:50:20'),
(60, 1, 3, '2019-09-10', 1, 0, '11:12:00', '18:05:00', '2019-09-07 07:50:20', '2019-09-07 07:50:20'),
(61, 1, 11, '2019-09-10', 1, 0, '11:12:00', '18:05:00', '2019-09-07 07:50:20', '2019-09-07 07:50:20'),
(62, 1, 2, '2019-09-10', 1, 0, '11:12:00', '18:05:00', '2019-09-07 07:50:20', '2019-09-07 07:50:20'),
(63, 1, 13, '2020-06-13', 1, 1, '11:12:00', '18:05:00', '2020-06-14 00:24:45', '2020-06-14 00:24:45'),
(64, 1, 14, '2020-06-13', 1, 1, '11:12:00', '18:05:00', '2020-06-14 00:24:45', '2020-06-14 00:24:45'),
(65, 1, 11, '2020-06-13', 1, 1, '11:12:00', '18:05:00', '2020-06-14 00:24:45', '2020-06-14 00:24:45'),
(66, 1, 13, '2020-06-27', 0, 0, '11:12:00', '18:05:00', '2020-06-28 19:17:25', '2020-06-28 19:17:25'),
(67, 1, 14, '2020-06-27', 0, 0, '11:12:00', '18:05:00', '2020-06-28 19:17:25', '2020-06-28 19:17:25'),
(68, 1, 15, '2020-06-27', 1, 1, '11:12:00', '18:05:00', '2020-06-28 19:17:25', '2020-06-28 19:17:25'),
(69, 1, 11, '2020-06-27', 0, 0, '11:12:00', '18:05:00', '2020-06-28 19:17:25', '2020-06-28 19:17:25'),
(70, 1, 13, '2020-06-28', 1, 1, '11:12:00', '18:05:00', '2020-06-28 23:37:46', '2020-06-28 23:37:46'),
(71, 1, 14, '2020-06-28', 0, 0, '11:12:00', '18:05:00', '2020-06-28 23:37:46', '2020-06-28 23:37:46'),
(72, 1, 16, '2020-06-28', 0, 0, '11:12:00', '18:05:00', '2020-06-28 23:37:46', '2020-06-28 23:37:46'),
(73, 1, 15, '2020-06-28', 0, 0, '11:12:00', '18:05:00', '2020-06-28 23:37:46', '2020-06-28 23:37:46'),
(74, 1, 11, '2020-06-28', 0, 0, '11:12:00', '18:05:00', '2020-06-28 23:37:46', '2020-06-28 23:37:46'),
(75, 1, 13, '2020-07-12', 1, 0, '11:12:00', '18:05:00', '2020-07-12 17:22:11', '2020-07-12 17:22:11'),
(76, 1, 14, '2020-07-12', 1, 0, '11:12:00', '18:05:00', '2020-07-12 17:22:11', '2020-07-12 17:22:11'),
(77, 1, 20, '2020-07-12', 1, 0, '11:12:00', '18:05:00', '2020-07-12 17:22:11', '2020-07-12 17:22:11'),
(78, 1, 16, '2020-07-12', 0, 0, '11:12:00', '18:05:00', '2020-07-12 17:22:11', '2020-07-12 17:22:11'),
(79, 1, 15, '2020-07-12', 1, 0, '11:12:00', '18:05:00', '2020-07-12 17:22:11', '2020-07-12 17:22:11'),
(80, 1, 17, '2020-07-12', 1, 0, '11:12:00', '18:05:00', '2020-07-12 17:22:11', '2020-07-12 17:22:11'),
(81, 1, 11, '2020-07-12', 1, 0, '11:12:00', '18:05:00', '2020-07-12 17:22:11', '2020-07-12 17:22:11'),
(82, 1, 13, '2020-07-13', 0, 1, '09:00:00', '17:00:00', '2020-07-13 12:44:20', '2020-07-13 12:44:20'),
(83, 1, 14, '2020-07-13', 1, 0, '09:00:00', '17:00:00', '2020-07-13 12:44:20', '2020-07-13 12:44:20'),
(84, 1, 20, '2020-07-13', 1, 0, '09:00:00', '17:00:00', '2020-07-13 12:44:20', '2020-07-13 12:44:20'),
(85, 1, 16, '2020-07-13', 1, 0, '09:00:00', '17:00:00', '2020-07-13 12:44:20', '2020-07-13 12:44:20'),
(86, 1, 15, '2020-07-13', 1, 0, '09:00:00', '17:00:00', '2020-07-13 12:44:20', '2020-07-13 12:44:20'),
(87, 1, 17, '2020-07-13', 1, 0, '09:00:00', '17:00:00', '2020-07-13 12:44:20', '2020-07-13 12:44:20'),
(88, 1, 11, '2020-07-13', 1, 0, '09:00:00', '17:00:00', '2020-07-13 12:44:20', '2020-07-13 12:44:20'),
(89, 1, 23, '2020-07-13', 1, 0, '09:00:00', '17:00:00', '2020-07-13 12:44:20', '2020-07-13 12:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `award_categories`
--

CREATE TABLE `award_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `award_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `award_categories`
--

INSERT INTO `award_categories` (`id`, `created_by`, `award_title`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Best Seller', 1, 0, '2019-08-31 23:30:17', '2019-09-25 03:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `bonuses`
--

CREATE TABLE `bonuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bonus_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bonus_month` date NOT NULL,
  `bonus_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bonus_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bonuses`
--

INSERT INTO `bonuses` (`id`, `created_by`, `user_id`, `bonus_name`, `bonus_month`, `bonus_amount`, `bonus_description`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 'Eid', '2019-07-01', '7000', '<p>dfgvfdgfd<br></p>', 0, '2019-09-03 12:42:34', '2019-09-03 12:42:34'),
(2, 1, 11, 'Working Perf.', '2019-09-01', '4000', '<p>vnbvnvbn<br></p>', 0, '2019-09-03 12:53:31', '2019-09-03 12:53:31'),
(3, 1, 11, 'DDR', '2019-10-01', '5000', 'bnbbvnbvn', 0, '2019-09-03 12:54:36', '2019-09-25 02:43:26'),
(4, 1, 15, 'test', '2020-06-01', '20', 'afsafa', 0, '2020-06-28 19:22:17', '2020-06-28 19:22:17'),
(5, 1, 15, 'eidi', '2020-12-01', '3000', 'test', 0, '2020-06-28 23:32:13', '2020-06-28 23:32:13'),
(6, 1, 13, 'eid', '2020-07-01', '2000', 'happy eid', 0, '2020-07-13 12:36:18', '2020-07-13 12:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `client_types`
--

CREATE TABLE `client_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `client_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_type_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_types`
--

INSERT INTO `client_types` (`id`, `created_by`, `client_type`, `client_type_description`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Potential Client', 'The Potential Paul is a type of customer that is on the very beginning of your sales', 1, 0, '2018-04-12 06:25:15', '2019-09-24 10:14:19'),
(2, 1, 'New Client', 'fresh customer that just bought something from you', 1, 0, '2018-04-12 06:25:15', '2019-09-25 02:25:36'),
(3, 1, 'Impulsive Client', 'This is the type of customer that can make a buying decision in an instant, provided that the conditions are right.', 1, 0, '2018-04-12 06:25:15', '2019-09-24 10:14:36'),
(4, 1, 'Discount Client', 'type of customer that sees value in your product but won’t buy it at full price.', 1, 0, '2018-04-12 06:25:15', '2019-09-25 02:27:38'),
(5, 1, 'Loyal Client', 'This type of customers keeps coming back for more. Apart from having a significant impact on your revenue, he will be also your brand’s ambassador.', 1, 0, '2018-04-12 06:25:15', '2018-04-12 06:25:15');

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `deduction_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deduction_month` date NOT NULL,
  `deduction_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deduction_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`id`, `created_by`, `user_id`, `deduction_name`, `deduction_month`, `deduction_amount`, `deduction_description`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 13, 'Absence', '2019-09-01', '34', 'hjkjjjhk', 0, '2019-09-24 11:02:50', '2019-09-25 02:43:47'),
(2, 1, 15, 'Macon Sims', '2020-07-01', '73', 'Proident molestias', 0, '2020-06-28 19:23:09', '2020-06-28 19:23:09'),
(3, 1, 15, 'Funds deductions', '2020-06-01', '400', 'testts', 0, '2020-06-28 23:34:25', '2020-06-28 23:34:25'),
(4, 1, 13, 'absentee', '2020-07-01', '1000', 'absentee deduction', 0, '2020-07-13 12:37:19', '2020-07-13 12:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `created_by`, `department`, `department_description`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Administration', 'An Administrator provides office and administrative support to either a team or individual. This role is vital for the smooth-running of a business. Duties may include fielding telephone calls, receiving and directing visitors, word processing, creating spreadsheets and presentations, and filing.\r\n', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:22:22'),
(2, 1, 'IT services', 'The information technology department in an organization is responsible for the architecture, hardware, software and networking of computers in the company. As an IT professional, you perform a number of duties to ensure that employees have full access to the computer systems.', 1, 0, '2018-04-12 06:25:16', '2018-04-12 06:25:16'),
(3, 1, 'Product Development', 'Product development, also called new product management, is a series of steps that includes the conceptualization, design, development and marketing of newly created or newly rebranded goods or services', 1, 0, '2018-04-12 06:25:16', '2018-04-12 06:25:16'),
(4, 1, 'Research and Development', 'Research and development (R&D) includes activities that companies undertake to innovate and introduce new products and services. It is often the first stage in the development process. The goal is typically to take new products and services to market and add to the company\'s bottom line', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:22:27'),
(5, 1, 'HR', 'An HR department is tasked with maximizing employee productivity and protecting the company from any issues that may arise within the workforce. HR responsibilities include compensation and benefits, recruitment, firing, and keeping up to date with any laws that may affect the company and its employees.', 1, 0, '2018-04-12 06:25:16', '2018-04-12 06:25:16'),
(6, 1, 'Accounts and Finance', 'The accounting and finance department is at the centre of any organization and is responsible for ensuring the efficient financial management and financial controls necessary to support all business activities.', 1, 0, '2019-08-31 11:04:47', '2019-08-31 11:04:47');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `created_by`, `department_id`, `designation`, `designation_description`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Chief Executive Officer', 'A chief executive officer (CEO) is the highest-ranking executive in a company, whose primary responsibilities include making major corporate decisions, managing the overall operations and resources of a company', 1, 0, '2018-04-12 06:25:16', '2019-09-24 09:59:43'),
(2, 1, 3, 'Project Leader', 'The project leader engages the team, motivating them, taking care of their needs and maintaining a friendly and productive work environment. Some of their primary responsibilities include: Attending meetings with other leaders. Developing progress reports regarding projects they\'re working on', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:24:15'),
(3, 1, 4, 'Senior Software Engineer', 'Develops information systems by studying operations; designing, developing, and installing software solutions; supports and develops software team', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:24:03'),
(4, 1, 4, 'Software Engineer', ' Improving system quality by identifying issues and common patterns, and developing standard operating procedures. Enhancing applications by identifying opportunities for improvement, making recommendations and designing and implementing systems', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:23:52'),
(5, 1, 2, 'Software Developer', 'Researching, designing, implementing and managing software programs. Testing and evaluating new programs. ... Working closely with other developers, UX designers, business and systems analysts.', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:24:25'),
(6, 1, 2, 'Junior Software Developer', 'A junior software developer works on a development team writing and maintaining code for computer applications. As a junior software developer, your primary responsibilities are to learn the codebase, work on small bug fixes, and participate in paired programming with mid-level and senior developers.', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:23:58'),
(7, 1, 2, 'Quality Testing Officer', 'QA engineer responsibilities include designing and implementing tests, debugging and defining corrective actions.', 1, 0, '2018-04-12 06:25:16', '2018-04-12 06:25:16'),
(8, 1, 2, 'Software  Testing Officer', 'Software Testers are responsible for the quality of software development and deployment. They are involved in performing automated and manual tests to ensure the software created by developers is fit for purpose. Some of the duties include analysis of software, and systems, mitigate risk and prevent software issues.', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:24:20'),
(9, 1, 5, 'HR officer', 'Human resources (HR) officers are responsible for hiring, developing and looking after employees. This involves functions such as training and monitoring performance. Some employers offer financial assistance and study leave to enable employees to gain an approved CIPD qualification.', 1, 0, '2018-04-12 06:25:16', '2018-04-12 06:25:16'),
(10, 1, 1, 'Staff', 'An office staff is an individual employed as a clerical worker in an office. ... The role of the office staff also includes filing document and performing office machine operations. Other duties and responsibilities include stenography, word processing and typing, bookkeeping, and answering of telephones.', 1, 0, '2018-04-12 06:25:16', '2019-09-24 10:24:09'),
(11, 1, 6, 'Sales Executive', 'Identifies business opportunities by identifying prospects and evaluating their position in the industry; researching and analyzing sales options. Sells products by establishing contact and developing relationships with prospects; recommending solutions', 1, 0, '2019-08-31 11:02:32', '2019-08-31 11:02:32'),
(12, 1, 1, 'Office Boy', 'Office boys perform various basic administrative duties, such as serving beverages to the guests or staff, handling electronic files and papers, greeting visitors and so on. ... Coordinating the maintenance and repair of office equipment', 1, 0, '2019-08-31 11:05:14', '2019-08-31 11:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `employee_awards`
--

CREATE TABLE `employee_awards` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `award_category_id` int(11) NOT NULL,
  `gift_item` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `select_month` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_awards`
--

INSERT INTO `employee_awards` (`id`, `created_by`, `employee_id`, `award_category_id`, `gift_item`, `select_month`, `description`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 1, '20000', '2019-09-25', 'nice performance', 1, 0, '2019-08-31 23:30:53', '2019-09-25 02:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `expence_managements`
--

CREATE TABLE `expence_managements` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchased_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchased_date` date NOT NULL,
  `amount_spent` int(11) NOT NULL,
  `purchased_details` text COLLATE utf8mb4_unicode_ci,
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expence_managements`
--

INSERT INTO `expence_managements` (`id`, `created_by`, `employee_id`, `item_name`, `purchased_from`, `purchased_date`, `amount_spent`, `purchased_details`, `deletion_status`, `created_at`, `updated_at`) VALUES
(2, 1, 11, '1', 'wer', '2019-09-04', 34, '<p>vfvx<br></p>', 0, '2019-09-04 05:41:23', '2019-09-04 05:41:23'),
(3, 1, 11, 'Marketing', NULL, '2019-09-04', 567, '<p>fgdgdf<br></p>', 0, '2019-09-04 06:53:32', '2019-09-04 06:53:32'),
(4, 1, 11, 'Purchase', 're', '2019-09-04', 34, '<p>reter<br></p>', 0, '2019-09-04 11:02:50', '2019-09-04 11:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `exp_purposes`
--

CREATE TABLE `exp_purposes` (
  `id` int(11) NOT NULL,
  `exp_name` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exp_purposes`
--

INSERT INTO `exp_purposes` (`id`, `exp_name`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Purchase', 1, '2019-09-04 06:09:43', '2019-09-04 06:51:04'),
(2, 'Marketing', 1, '2019-09-04 06:40:01', '2019-09-04 06:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `folder_id` int(11) NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) DEFAULT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `created_by`, `folder_id`, `caption`, `file_name`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Test', '1567309252.png', 1, 0, '2019-09-01 14:40:52', '2019-09-01 14:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `folders`
--

CREATE TABLE `folders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `folder_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `folders`
--

INSERT INTO `folders` (`id`, `created_by`, `folder_name`, `folder_description`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'My File', '<p>sdfsdfsdfsdfsdfs<br></p>', 1, 0, '2019-09-01 14:40:24', '2019-09-01 14:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `updated_by` int(11) NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_two` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `holiday_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `created_by`, `holiday_name`, `date`, `description`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'asoraa', '2019-09-25', 'Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora Office Holidays for Ashora', 1, 0, '2019-08-31 23:35:41', '2019-09-25 03:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `increments`
--

CREATE TABLE `increments` (
  `id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `incr_purpose` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `increments`
--

INSERT INTO `increments` (`id`, `created_by`, `amount`, `emp_id`, `date`, `incr_purpose`, `created_at`, `updated_at`) VALUES
(2, 1, 12, 11, '2019-09', 'sffd', '2019-09-04 08:34:19', '2019-09-04 08:34:19'),
(3, 1, 12, 11, '2019-09', 'sffd', '2019-09-04 08:34:34', '2019-09-04 08:34:34'),
(12, 1, 56, 11, '2019-09', NULL, '2019-09-04 09:06:14', '2019-09-04 09:06:14'),
(13, 1, 55, 11, '2019-12', 'h', '2019-09-04 09:06:55', '2019-09-04 09:06:55'),
(14, 1, 60, 11, '2019-10', 'ggfhggf', '2019-09-04 10:01:54', '2019-09-04 10:01:54'),
(15, 1, 60, 11, '2019-09', 'ggfhggf', '2019-09-04 10:04:29', '2019-09-04 10:04:29'),
(16, 1, 60, 11, '2019-09', 'ggfhggf', '2019-09-04 10:08:24', '2019-09-04 10:08:24'),
(17, 1, 2000, 11, '2019-09', 'Yearly', '2019-09-04 10:09:14', '2019-09-04 10:09:14'),
(18, 1, 3000, 11, '2019-10', 'Performance', '2019-09-04 11:01:14', '2019-09-04 11:01:14'),
(19, 1, 20, 14, '2020-06', NULL, '2020-06-13 23:50:16', '2020-06-13 23:50:16'),
(20, 1, 20, 13, '2020-06', NULL, '2020-06-14 00:22:14', '2020-06-14 00:22:14'),
(21, 1, 20, 15, '2020-06', 'test', '2020-06-28 19:20:34', '2020-06-28 19:20:34'),
(22, 1, 200, 14, '2020-07', 'something', '2020-06-28 23:22:46', '2020-06-28 23:22:46'),
(23, 1, 200, 13, '2020-07', 'somethng', '2020-06-28 23:23:35', '2020-06-28 23:23:35'),
(24, 1, 2000, 15, '2020-08', 'Best perfornace end of the year', '2020-06-28 23:24:19', '2020-06-28 23:24:19'),
(25, 1, 8000, 13, '2020-07', 'annual', '2020-07-13 12:34:31', '2020-07-13 12:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `Location` text,
  `JobType` varchar(100) NOT NULL DEFAULT 'Fulltime',
  `Category` varchar(100) DEFAULT NULL,
  `WorkShift` varchar(100) DEFAULT NULL,
  `NoOfOpenings` varchar(100) DEFAULT NULL,
  `Joblevel` varchar(100) DEFAULT NULL,
  `JobExperience` varchar(100) DEFAULT NULL,
  `JobDescription` text,
  `Responsibilities` text,
  `SkillSet` text,
  `Salary_start` varchar(100) DEFAULT NULL,
  `Salary_end` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `Location`, `JobType`, `Category`, `WorkShift`, `NoOfOpenings`, `Joblevel`, `JobExperience`, `JobDescription`, `Responsibilities`, `SkillSet`, `Salary_start`, `Salary_end`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Illo eiusmod dolore', 'Expedita suscipit ve', 'Halftime', 'Dolores dolores dolo', 'Day Shift', '1', 'Manager', 'Iusto obcaecati solu', 'Maiores minim volupt', 'Praesentium exceptur', 'Quis cumque impedit', 'Qui sunt nihil bland', 'Cumque velit volupt', '2020-06-22 04:11:01', '2020-06-21 21:11:01', 'Publish'),
(2, 'Node JS developer', 'Islamabad', 'Fulltime', 'Information Technology', 'Day Shift', '5', 'Associate', '3', 'test', 'test', 'test', '20000', '400000', '2020-06-28 23:45:26', '2020-06-28 16:45:26', 'Publish'),
(3, 'Laravel Developer', 'Lahore', 'Fulltime', 'Developer', 'Day Shift', '5', 'Staff', 'No', 'Laravel Developer', 'To manage daily development needs', 'laravel\r\nvue\r\nhtml\r\ncss', '40000', '50000', '2020-07-13 12:54:58', '2020-07-13 17:54:58', 'Publish'),
(4, 'Frontend Developer', 'Islamabad', 'Fulltime', 'Development', 'Night Shift', '35', 'Staff', '1 year as Junior Frontend Developer', 'As a Front End Developer, you will be responsible for implementing visual elements that are visible from the computer users vantage point within a web application. You will combine the art of design with the science of programming. You will be responsible for the translation of UI/UX design wireframes to actual code.', 'You will be responsible for the translation of UI/UX design wireframes to actual code.', 'Html\r\nCSS\r\nJavascript', '20000', '25000', '2020-07-14 14:15:45', '2020-07-14 19:15:45', 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `leave_applications`
--

CREATE TABLE `leave_applications` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `leave_category_id` int(11) NOT NULL,
  `last_leave_category_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_leave_period` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `leave_address` text COLLATE utf8mb4_unicode_ci,
  `last_leave_date` text COLLATE utf8mb4_unicode_ci,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `during_leave` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '0',
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_applications`
--

INSERT INTO `leave_applications` (`id`, `created_by`, `leave_category_id`, `last_leave_category_id`, `last_leave_period`, `start_date`, `end_date`, `leave_address`, `last_leave_date`, `reason`, `during_leave`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', 'ddfgfdg', '2019-09-16', '2019-09-23', 'fdgfdgfg', '2019-09-13', 'dfgdfgdfg', 'gdfgdfgd', 1, 0, '2019-09-24 11:24:12', '2020-07-12 17:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `leave_categories`
--

CREATE TABLE `leave_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `leave_category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_categories`
--

INSERT INTO `leave_categories` (`id`, `created_by`, `leave_category`, `leave_category_description`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sick', 'Sick leave is time off given by the company to allow employees to recover from an illness and take care of their health. Sick leaves are crucial to allow employees to get the rest they need without worrying about losing pay. Sick leave is a mandatory requirement in many countries to ensure the wellbeing of the employee. ', 1, 0, '2019-08-31 11:50:01', '2019-09-24 10:28:23'),
(2, 1, 'Annual', 'Annual leave is paid time off work granted by employers to employees to be used for whatever the employee wishes', 1, 0, '2020-06-28 23:40:58', '2020-06-28 23:40:58'),
(3, 1, 'Maternity Leave', 'This leave will be permissible to:\r\n1)Those women having 6 month pregnancy (Leave duration:3 months)\r\n2)Those men whose spouse have 8 month pregnancy(Leave duration: 1 month)', 1, 0, '2020-07-08 04:00:23', '2020-07-12 17:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `loan_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_installments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remaining_installments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loan_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `created_by`, `user_id`, `loan_name`, `loan_amount`, `number_of_installments`, `remaining_installments`, `loan_description`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 'Install', '100', '5', '1', '<p>dfgdf<br></p>', 0, '2019-08-31 11:38:58', '2020-06-28 19:19:59'),
(2, 1, 13, 'Md Mohosin Iqbal', '500', '4', '3', 'hfghfhfg', 0, '2019-09-01 00:12:40', '2020-07-13 12:35:08'),
(3, 1, 15, 'Channing Tyson', '25', '1000', '998', 'Ex voluptatum dicta', 0, '2020-06-28 19:19:18', '2020-06-28 23:28:35'),
(4, 1, 13, 'for home rent', '20', '3', '2', 'test', 0, '2020-06-28 23:35:24', '2020-07-13 12:35:08'),
(5, 1, 13, 'marraige loan', '100000', '12', '12', 'marraige grant loan', 0, '2020-07-13 12:39:17', '2020-07-13 12:39:17');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_16_064138_create_client_types_table', 1),
(4, '2017_10_16_072245_create_designations_table', 1),
(5, '2017_11_11_090618_create_general_settings_table', 1),
(6, '2017_11_17_083029_create_files_table', 1),
(7, '2017_11_17_083147_create_folders_table', 1),
(8, '2017_12_29_092609_create_departments_table', 1),
(9, '2017_12_29_114115_create_leave_categories_table', 1),
(10, '2017_12_29_124702_create_attendances_table', 1),
(11, '2017_12_29_185757_create_working_days_table', 1),
(12, '2017_12_29_215610_create_holidays_table', 1),
(13, '2017_12_29_233919_create_personal_events_table', 1),
(14, '2017_12_30_161317_create_payrolls_table', 1),
(15, '2017_12_30_174811_create_notices_table', 1),
(16, '2017_12_31_185730_create_leave_applications_table', 1),
(17, '2018_01_03_081227_create_bonuses_table', 1),
(18, '2018_01_03_104224_create_deductions_table', 1),
(19, '2018_01_03_114151_create_loans_table', 1),
(20, '2018_01_03_153120_create_expence_managements_table', 1),
(21, '2018_01_04_061104_create_salary_payments_table', 1),
(22, '2018_01_04_173403_create_award_categories_table', 1),
(23, '2018_01_05_164319_create_employee_awards_table', 1),
(24, '2018_02_03_073729_entrust_setup_tables', 1),
(25, '2018_03_24_100116_create_salary_payment_details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `notice_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `created_by`, `notice_title`, `description`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(4, 1, 'corona virus precaution', 'sanitize your hands\r\nkeep safe distance', 0, 0, '2020-07-13 12:50:46', '2020-07-14 14:01:18'),
(5, 1, 'Eid Holidays', 'Eid holidays will be observed from 29 july to 4 august . Happy Eid', 1, 0, '2020-07-14 13:13:51', '2020-07-14 13:13:51'),
(6, 1, 'eid bonus', 'eid bonus of rs 2000 for all employees', 1, 0, '2020-07-16 16:50:32', '2020-07-16 16:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payrolls`
--

CREATE TABLE `payrolls` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `employee_type` tinyint(4) NOT NULL COMMENT '1 for Provision & 2 for Permanent',
  `basic_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_rent_allowance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medical_allowance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_allowance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provident_fund_contribution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_allowance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_deduction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provident_fund_deduction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_deduction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activation_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payrolls`
--

INSERT INTO `payrolls` (`id`, `created_by`, `user_id`, `employee_type`, `basic_salary`, `house_rent_allowance`, `medical_allowance`, `special_allowance`, `provident_fund_contribution`, `other_allowance`, `tax_deduction`, `provident_fund_deduction`, `other_deduction`, `activation_status`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 3, '8080', '44', '444', '44', '44', '444', '2', '4', '50', 0, '2019-08-31 11:29:21', '2019-09-04 11:01:14'),
(2, 1, 6, 3, '55000', '210', '254', '200', '300', '580', '250', '500', '200', 0, '2019-09-01 00:11:01', '2019-09-01 00:11:01'),
(3, 1, 4, 2, '15000', '5000', NULL, NULL, '1000', '500', '2500', NULL, NULL, 0, '2019-09-01 23:28:10', '2019-09-01 23:28:10'),
(4, 1, 13, 3, '27000', '5500', '8760', '5670', '5430', '4560', '567', '6547', '565', 0, '2019-09-25 02:03:44', '2020-07-13 12:34:31'),
(5, 1, 15, 3, '2040', NULL, NULL, NULL, '50', NULL, NULL, '20', NULL, 0, '2020-06-28 19:15:18', '2020-06-28 23:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'hrm-setting', 'HRM Setting', 'HRM Setting', '2018-04-12 06:29:04', '2018-04-12 06:29:04'),
(2, 'role', 'Role Setting', 'Role Setting Details', '2018-04-12 06:29:04', '2018-04-12 06:29:04'),
(3, 'people', 'People', 'People', '2018-04-12 06:29:04', '2018-04-12 06:29:04'),
(4, 'manage-employee', 'Manage employee', 'Manage employee', '2018-04-12 06:29:04', '2018-04-12 06:29:04'),
(5, 'manage-clients', 'Manage clients', 'Manage clients', '2018-04-12 06:29:04', '2018-04-12 06:29:04'),
(6, 'manage-references', 'Manage references', 'Manage references', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(7, 'file-upload', 'File Upload', 'File Upload', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(8, 'sms', 'SMS', 'SMS', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(9, 'payroll-management', 'Payroll Management', 'Payroll Management', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(10, 'manage-salary', 'Manage Salary', 'Manage Salary', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(11, 'salary-list', 'Salary List', 'Salary List', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(12, 'make-payment', 'Make Payment', 'Make Payment', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(13, 'generate-payslip', 'Generate Payslip', 'Generate Payslip', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(14, 'manage-bonus', 'Manage Bonus', 'Manage Bonus', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(15, 'manage-deduction', 'Manage Deduction', 'Manage Deduction', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(16, 'loan-management', 'Loan Management', 'Loan Management', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(17, 'provident-fund', 'Provident Fund', 'Provident Fund', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(18, 'attendance-management', 'Attendance Management', 'Attendance Management', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(19, 'manage-attendance', 'Manage Attendance ', 'Manage Attendance', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(20, 'attendance-report', 'Attendance Report', 'Attendance Report', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(21, 'manage-expense', 'Manage Expense', 'Manage Expense', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(22, 'manage-award', 'Manage Award', 'Manage Award', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(23, 'leave-application', 'Leave Application', 'Leave Application', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(24, 'manage-leave-application', 'Manage Leave Application List', 'Application List', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(25, 'my-leave-application', 'My Leave Application List', 'Application List', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(26, 'notice', 'Notice', 'Notice', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(27, 'manage-notice', 'Manage Notice', 'Manage Notice', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(28, 'notice-board', 'Notice Board', 'Notice Board', '2018-04-12 06:29:05', '2018-04-12 06:29:05'),
(29, 'leave-reports', 'Leave Reports', 'Leave Reports', NULL, NULL),
(30, 'job-reports', 'job', 'job', '2020-06-21 07:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(23, 2),
(24, 1),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(28, 1),
(28, 2),
(29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_events`
--

CREATE TABLE `personal_events` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `personal_event` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_event_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_events`
--

INSERT INTO `personal_events` (`id`, `created_by`, `personal_event`, `personal_event_description`, `start_date`, `end_date`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Office Party', 'details...', '2019-09-25', '2019-09-25', 1, 0, '2018-04-16 05:45:40', '2019-09-25 03:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'Superadmin', 'Superadmin Details', '2018-04-12 06:35:05', '2018-04-12 06:35:05'),
(2, 'employee', 'Employee', 'Employee Details...', '2018-04-16 05:47:29', '2018-04-16 05:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(11, 1),
(13, 2),
(14, 1),
(15, 2),
(16, 2),
(17, 2),
(20, 1),
(23, 2);

-- --------------------------------------------------------

--
-- Table structure for table `salary_payments`
--

CREATE TABLE `salary_payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gross_salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_deduction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `net_salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provident_fund` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_month` date NOT NULL,
  `payment_type` tinyint(4) NOT NULL COMMENT '1 for cash payment, 2 for chaque payment & 3 for bank payment',
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salary_payments`
--

INSERT INTO `salary_payments` (`id`, `created_by`, `user_id`, `gross_salary`, `total_deduction`, `net_salary`, `provident_fund`, `payment_amount`, `payment_month`, `payment_type`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 11, '3976.00', '56.00', '3920', '48', '3920', '2019-09-01', 1, 'gdfg', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(2, 1, 11, '3976.00', '56.00', '3920', '48', '3920', '2019-05-01', 1, 'fgdfg', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(3, 1, 11, '3976.00', '56.00', '3920', '48', '3920', '2019-06-01', 3, 'rgdfgfdgd', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(4, 1, 11, '3976.00', '56.00', '3920', '48', '3920', '2019-07-01', 2, 'dfgdggg', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(5, 1, 11, '3976.00', '56.00', '3920', '48', '3920', '2019-07-01', 2, 'dfgdggg', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(6, 1, 11, '3976.00', '56.00', '3920', '48', '3920', '2019-01-01', 1, 'gdfgdf', '2019-08-31 11:37:10', '2019-08-31 11:37:10'),
(7, 1, 11, '3976.00', '56.00', '3920', '48', '3920', '2019-01-01', 1, 'gdfgdf', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(8, 1, 11, '3976.00', '76.00', '3900', '48', '3900', '2019-03-01', 1, 'dgdfgdfgdg', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(10, 1, 11, '3976.00', '76.00', '3900', '48', '3900', '2019-08-01', 1, NULL, '2019-09-01 00:13:27', '2019-09-01 00:13:27'),
(11, 1, 11, '8976.00', '76.00', '8900', '48', '8900', '2019-10-01', 1, 'sdfdfsdf', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(12, 1, 15, '20.00', '0.00', '20', '0', '20', '2020-06-01', 1, NULL, '2020-06-28 19:18:15', '2020-06-28 19:18:15'),
(13, 1, 15, '20.00', '0.00', '20', '0', '20', '2020-06-01', 1, NULL, '2020-06-28 19:18:28', '2020-06-28 19:18:28'),
(14, 1, 11, '9056.00', '76.00', '8980', '48', '8980', '2020-06-01', 1, NULL, '2020-06-28 19:19:59', '2020-06-28 19:19:59'),
(15, 1, 15, '2040.00', '93.03', '1946.97', '70', '1946.97', '2020-07-01', 1, NULL, '2020-06-28 23:27:30', '2020-06-28 23:27:30'),
(16, 1, 15, '2040.00', '20.03', '2019.97', '70', '2019.97', '2020-11-01', 3, NULL, '2020-06-28 23:28:35', '2020-06-28 23:28:35'),
(17, 1, 13, '51490.00', '7810.67', '43679.33', '11977', '43679.33', '2020-07-01', 1, NULL, '2020-07-13 12:35:08', '2020-07-13 12:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `salary_payment_details`
--

CREATE TABLE `salary_payment_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `salary_payment_id` int(10) UNSIGNED NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salary_payment_details`
--

INSERT INTO `salary_payment_details` (`id`, `salary_payment_id`, `item_name`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Basic Salary', 3000, 'credits', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(2, 1, 'House Rent Allowance', 44, 'credits', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(3, 1, 'Medical Allowance', 444, 'credits', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(4, 1, 'Special Allowance', 44, 'credits', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(5, 1, 'Provident Fund Contribution', 44, 'credits', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(6, 1, 'Other Allowance', 444, 'credits', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(7, 1, 'Tax Deduction', 2, 'debits', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(8, 1, 'Provident Fund Deduction', 4, 'debits', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(9, 1, 'Other Deduction', 50, 'debits', '2019-08-31 11:29:48', '2019-08-31 11:29:48'),
(10, 2, 'Basic Salary', 3000, 'credits', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(11, 2, 'House Rent Allowance', 44, 'credits', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(12, 2, 'Medical Allowance', 444, 'credits', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(13, 2, 'Special Allowance', 44, 'credits', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(14, 2, 'Provident Fund Contribution', 44, 'credits', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(15, 2, 'Other Allowance', 444, 'credits', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(16, 2, 'Tax Deduction', 2, 'debits', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(17, 2, 'Provident Fund Deduction', 4, 'debits', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(18, 2, 'Other Deduction', 50, 'debits', '2019-08-31 11:30:09', '2019-08-31 11:30:09'),
(19, 3, 'Basic Salary', 3000, 'credits', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(20, 3, 'House Rent Allowance', 44, 'credits', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(21, 3, 'Medical Allowance', 444, 'credits', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(22, 3, 'Special Allowance', 44, 'credits', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(23, 3, 'Provident Fund Contribution', 44, 'credits', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(24, 3, 'Other Allowance', 444, 'credits', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(25, 3, 'Tax Deduction', 2, 'debits', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(26, 3, 'Provident Fund Deduction', 4, 'debits', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(27, 3, 'Other Deduction', 50, 'debits', '2019-08-31 11:31:38', '2019-08-31 11:31:38'),
(28, 4, 'Basic Salary', 3000, 'credits', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(29, 4, 'House Rent Allowance', 44, 'credits', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(30, 4, 'Medical Allowance', 444, 'credits', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(31, 4, 'Special Allowance', 44, 'credits', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(32, 4, 'Provident Fund Contribution', 44, 'credits', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(33, 4, 'Other Allowance', 444, 'credits', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(34, 4, 'Tax Deduction', 2, 'debits', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(35, 4, 'Provident Fund Deduction', 4, 'debits', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(36, 4, 'Other Deduction', 50, 'debits', '2019-08-31 11:32:40', '2019-08-31 11:32:40'),
(37, 5, 'Basic Salary', 3000, 'credits', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(38, 5, 'House Rent Allowance', 44, 'credits', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(39, 5, 'Medical Allowance', 444, 'credits', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(40, 5, 'Special Allowance', 44, 'credits', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(41, 5, 'Provident Fund Contribution', 44, 'credits', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(42, 5, 'Other Allowance', 444, 'credits', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(43, 5, 'Tax Deduction', 2, 'debits', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(44, 5, 'Provident Fund Deduction', 4, 'debits', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(45, 5, 'Other Deduction', 50, 'debits', '2019-08-31 11:35:00', '2019-08-31 11:35:00'),
(46, 6, 'Basic Salary', 3000, 'credits', '2019-08-31 11:37:10', '2019-08-31 11:37:10'),
(47, 6, 'House Rent Allowance', 44, 'credits', '2019-08-31 11:37:11', '2019-08-31 11:37:11'),
(48, 6, 'Medical Allowance', 444, 'credits', '2019-08-31 11:37:11', '2019-08-31 11:37:11'),
(49, 6, 'Special Allowance', 44, 'credits', '2019-08-31 11:37:11', '2019-08-31 11:37:11'),
(50, 6, 'Provident Fund Contribution', 44, 'credits', '2019-08-31 11:37:11', '2019-08-31 11:37:11'),
(51, 6, 'Other Allowance', 444, 'credits', '2019-08-31 11:37:11', '2019-08-31 11:37:11'),
(52, 6, 'Tax Deduction', 2, 'debits', '2019-08-31 11:37:11', '2019-08-31 11:37:11'),
(53, 6, 'Provident Fund Deduction', 4, 'debits', '2019-08-31 11:37:11', '2019-08-31 11:37:11'),
(54, 6, 'Other Deduction', 50, 'debits', '2019-08-31 11:37:11', '2019-08-31 11:37:11'),
(55, 7, 'Basic Salary', 3000, 'credits', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(56, 7, 'House Rent Allowance', 44, 'credits', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(57, 7, 'Medical Allowance', 444, 'credits', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(58, 7, 'Special Allowance', 44, 'credits', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(59, 7, 'Provident Fund Contribution', 44, 'credits', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(60, 7, 'Other Allowance', 444, 'credits', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(61, 7, 'Tax Deduction', 2, 'debits', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(62, 7, 'Provident Fund Deduction', 4, 'debits', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(63, 7, 'Other Deduction', 50, 'debits', '2019-08-31 11:38:23', '2019-08-31 11:38:23'),
(64, 8, 'Basic Salary', 3000, 'credits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(65, 8, 'House Rent Allowance', 44, 'credits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(66, 8, 'Medical Allowance', 444, 'credits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(67, 8, 'Special Allowance', 44, 'credits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(68, 8, 'Provident Fund Contribution', 44, 'credits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(69, 8, 'Other Allowance', 444, 'credits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(70, 8, 'Tax Deduction', 2, 'debits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(71, 8, 'Provident Fund Deduction', 4, 'debits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(72, 8, 'Other Deduction', 50, 'debits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(73, 8, 'Install', 20, 'debits', '2019-08-31 11:39:46', '2019-08-31 11:39:46'),
(74, 9, 'Basic Salary', 55000, 'credits', '2019-09-01 00:11:27', '2019-09-01 00:11:27'),
(75, 9, 'House Rent Allowance', 210, 'credits', '2019-09-01 00:11:27', '2019-09-01 00:11:27'),
(76, 9, 'Medical Allowance', 254, 'credits', '2019-09-01 00:11:27', '2019-09-01 00:11:27'),
(77, 9, 'Special Allowance', 200, 'credits', '2019-09-01 00:11:28', '2019-09-01 00:11:28'),
(78, 9, 'Provident Fund Contribution', 300, 'credits', '2019-09-01 00:11:28', '2019-09-01 00:11:28'),
(79, 9, 'Other Allowance', 580, 'credits', '2019-09-01 00:11:28', '2019-09-01 00:11:28'),
(80, 9, 'Tax Deduction', 250, 'debits', '2019-09-01 00:11:28', '2019-09-01 00:11:28'),
(81, 9, 'Provident Fund Deduction', 500, 'debits', '2019-09-01 00:11:28', '2019-09-01 00:11:28'),
(82, 9, 'Other Deduction', 200, 'debits', '2019-09-01 00:11:28', '2019-09-01 00:11:28'),
(83, 10, 'Basic Salary', 3000, 'credits', '2019-09-01 00:13:27', '2019-09-01 00:13:27'),
(84, 10, 'House Rent Allowance', 44, 'credits', '2019-09-01 00:13:27', '2019-09-01 00:13:27'),
(85, 10, 'Medical Allowance', 444, 'credits', '2019-09-01 00:13:27', '2019-09-01 00:13:27'),
(86, 10, 'Special Allowance', 44, 'credits', '2019-09-01 00:13:27', '2019-09-01 00:13:27'),
(87, 10, 'Provident Fund Contribution', 44, 'credits', '2019-09-01 00:13:28', '2019-09-01 00:13:28'),
(88, 10, 'Other Allowance', 444, 'credits', '2019-09-01 00:13:28', '2019-09-01 00:13:28'),
(89, 10, 'Tax Deduction', 2, 'debits', '2019-09-01 00:13:28', '2019-09-01 00:13:28'),
(90, 10, 'Provident Fund Deduction', 4, 'debits', '2019-09-01 00:13:28', '2019-09-01 00:13:28'),
(91, 10, 'Other Deduction', 50, 'debits', '2019-09-01 00:13:28', '2019-09-01 00:13:28'),
(92, 10, 'Install', 20, 'debits', '2019-09-01 00:13:28', '2019-09-01 00:13:28'),
(93, 11, 'Basic Salary', 3000, 'credits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(94, 11, 'House Rent Allowance', 44, 'credits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(95, 11, 'Medical Allowance', 444, 'credits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(96, 11, 'Special Allowance', 44, 'credits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(97, 11, 'Provident Fund Contribution', 44, 'credits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(98, 11, 'Other Allowance', 444, 'credits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(99, 11, 'Tax Deduction', 2, 'debits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(100, 11, 'Provident Fund Deduction', 4, 'debits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(101, 11, 'Other Deduction', 50, 'debits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(102, 11, 'DDR', 5000, 'credits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(103, 11, 'Install', 20, 'debits', '2019-09-03 12:55:10', '2019-09-03 12:55:10'),
(104, 12, 'Basic Salary', 20, 'credits', '2020-06-28 19:18:15', '2020-06-28 19:18:15'),
(105, 13, 'Basic Salary', 20, 'credits', '2020-06-28 19:18:28', '2020-06-28 19:18:28'),
(106, 14, 'Basic Salary', 8080, 'credits', '2020-06-28 19:19:59', '2020-06-28 19:19:59'),
(107, 14, 'House Rent Allowance', 44, 'credits', '2020-06-28 19:19:59', '2020-06-28 19:19:59'),
(108, 14, 'Medical Allowance', 444, 'credits', '2020-06-28 19:19:59', '2020-06-28 19:19:59'),
(109, 14, 'Special Allowance', 44, 'credits', '2020-06-28 19:19:59', '2020-06-28 19:19:59'),
(110, 14, 'Provident Fund Contribution', 44, 'credits', '2020-06-28 19:19:59', '2020-06-28 19:19:59'),
(111, 14, 'Other Allowance', 444, 'credits', '2020-06-28 19:19:59', '2020-06-28 19:19:59'),
(112, 14, 'Tax Deduction', 2, 'debits', '2020-06-28 19:19:59', '2020-06-28 19:19:59'),
(113, 14, 'Provident Fund Deduction', 4, 'debits', '2020-06-28 19:19:59', '2020-06-28 19:19:59'),
(114, 14, 'Other Deduction', 50, 'debits', '2020-06-28 19:19:59', '2020-06-28 19:19:59'),
(115, 14, 'Install', 20, 'debits', '2020-06-28 19:19:59', '2020-06-28 19:19:59'),
(116, 15, 'Basic Salary', 2040, 'credits', '2020-06-28 23:27:30', '2020-06-28 23:27:30'),
(117, 15, 'Provident Fund Contribution', 50, 'credits', '2020-06-28 23:27:30', '2020-06-28 23:27:30'),
(118, 15, 'Provident Fund Deduction', 20, 'debits', '2020-06-28 23:27:30', '2020-06-28 23:27:30'),
(119, 15, 'Macon Sims', 73, 'debits', '2020-06-28 23:27:30', '2020-06-28 23:27:30'),
(120, 15, 'Channing Tyson', 0, 'debits', '2020-06-28 23:27:30', '2020-06-28 23:27:30'),
(121, 16, 'Basic Salary', 2040, 'credits', '2020-06-28 23:28:35', '2020-06-28 23:28:35'),
(122, 16, 'Provident Fund Contribution', 50, 'credits', '2020-06-28 23:28:35', '2020-06-28 23:28:35'),
(123, 16, 'Provident Fund Deduction', 20, 'debits', '2020-06-28 23:28:35', '2020-06-28 23:28:35'),
(124, 16, 'Channing Tyson', 0, 'debits', '2020-06-28 23:28:35', '2020-06-28 23:28:35'),
(125, 17, 'Basic Salary', 27000, 'credits', '2020-07-13 12:35:08', '2020-07-13 12:35:08'),
(126, 17, 'House Rent Allowance', 5500, 'credits', '2020-07-13 12:35:08', '2020-07-13 12:35:08'),
(127, 17, 'Medical Allowance', 8760, 'credits', '2020-07-13 12:35:08', '2020-07-13 12:35:08'),
(128, 17, 'Special Allowance', 5670, 'credits', '2020-07-13 12:35:08', '2020-07-13 12:35:08'),
(129, 17, 'Provident Fund Contribution', 5430, 'credits', '2020-07-13 12:35:08', '2020-07-13 12:35:08'),
(130, 17, 'Other Allowance', 4560, 'credits', '2020-07-13 12:35:08', '2020-07-13 12:35:08'),
(131, 17, 'Tax Deduction', 567, 'debits', '2020-07-13 12:35:08', '2020-07-13 12:35:08'),
(132, 17, 'Provident Fund Deduction', 6547, 'debits', '2020-07-13 12:35:08', '2020-07-13 12:35:08'),
(133, 17, 'Other Deduction', 565, 'debits', '2020-07-13 12:35:08', '2020-07-13 12:35:08'),
(134, 17, 'Md Mohosin Iqbal', 125, 'debits', '2020-07-13 12:35:08', '2020-07-13 12:35:08'),
(135, 17, 'for home rent', 7, 'debits', '2020-07-13 12:35:08', '2020-07-13 12:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `set_times`
--

CREATE TABLE `set_times` (
  `id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `in_time` time DEFAULT NULL,
  `out_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `set_times`
--

INSERT INTO `set_times` (`id`, `created_by`, `in_time`, `out_time`, `created_at`, `updated_at`) VALUES
(1, 1, '09:00:00', '17:00:00', '2019-09-07 06:49:45', '2020-07-13 12:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `task_end_date` varchar(200) DEFAULT NULL,
  `task_detail` text,
  `task_status` varchar(100) DEFAULT NULL,
  `task_count` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `task_end_date`, `task_detail`, `task_status`, `task_count`, `created_at`, `updated_at`) VALUES
(1, 13, NULL, 'Magnam reprehenderit', 'Completed', '1', '2020-06-24 20:10:53', '2020-06-24 13:10:53'),
(2, 13, NULL, 'hello do work on task management', 'Pending', '0', '2020-06-28 23:54:15', '2020-06-28 16:54:15'),
(3, 16, NULL, 'test', 'Completed', '1', '2020-07-08 04:08:55', '2020-07-07 21:08:55'),
(4, 20, NULL, 'bvvvvv', 'Pending', NULL, '2020-07-12 18:04:56', '2020-07-12 23:04:56'),
(5, 13, NULL, 'backend work on hrms project', 'Pending', NULL, '2020-07-13 13:16:20', '2020-07-13 18:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `academic_qualification` text COLLATE utf8mb4_unicode_ci,
  `professional_qualification` text COLLATE utf8mb4_unicode_ci,
  `joining_date` date DEFAULT NULL,
  `experience` text COLLATE utf8mb4_unicode_ci,
  `reference` text COLLATE utf8mb4_unicode_ci,
  `id_name` tinyint(4) DEFAULT NULL COMMENT '1 for NID, 2 Passport, 3 for Driving License',
  `id_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no_one` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no_two` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_contact` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `marital_status` tinyint(4) DEFAULT NULL COMMENT '1 for Married, Single, 3 for Divorced, 4 for Separated, 5 for Widowed',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_type_id` int(11) DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `joining_position` int(11) DEFAULT NULL,
  `access_label` tinyint(4) NOT NULL COMMENT '1 for superadmin, 2 for associates, 3 for employees, 4 for references and 5 for clients',
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activation_status` tinyint(4) NOT NULL DEFAULT '0',
  `deletion_status` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_by`, `employee_id`, `name`, `father_name`, `mother_name`, `spouse_name`, `email`, `password`, `present_address`, `permanent_address`, `home_district`, `academic_qualification`, `professional_qualification`, `joining_date`, `experience`, `reference`, `id_name`, `id_number`, `contact_no_one`, `contact_no_two`, `emergency_contact`, `web`, `gender`, `date_of_birth`, `marital_status`, `avatar`, `client_type_id`, `designation_id`, `joining_position`, `access_label`, `role`, `activation_status`, `deletion_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Super Admin user', NULL, NULL, NULL, 'admin@admin.com', '$2y$10$OmtABDs4QZBLns9YMjxzdOgPCTxzQ.Ivv4lhV5KN.6N7DkFvrg6o2', 'Islamabad', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '03001234567', NULL, NULL, NULL, 'm', '2020-07-13', NULL, '1594642900.png', 9, 8, NULL, 1, '1', 1, 0, 'jT6a2vzSfFAx2sEWJZ1XUbuFKRH2jVIUh5mAF0b9kFsEpIzzSfhz2f2h2bf7', '2019-09-07 06:25:15', '2020-07-13 13:23:22'),
(8, 1, NULL, 'Dr. Wasi', NULL, NULL, NULL, 'emaggio@example.org', '$2y$10$Y17jCoozWQAi0i5jDK65D.JSAyd0JbvznZ4vp3lnZC3Ck6CIVLGBu', '86384 Helga LakesCormierton, GA 99066', '6460 Kieran Place Suite 387\nLake Einar, UT 11733-9184', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1-624-402-9842', NULL, NULL, 'http://pfannerstill.com/', 'm', '2020-06-13', NULL, NULL, 3, 1, NULL, 4, NULL, 1, 0, 'uetBpPUya9', '2018-04-12 06:25:15', '2020-06-14 00:21:39'),
(11, 1, 11, 'Wali', 'gfdfg', 'fggfdgfd', 'gfdgdgd', 'wali@gmail.com', '$2y$10$w93wheuYN9zvhZlI9Ul0WOoBqcfaCknDNyOk4rNzZhAnrA5M1QNJO', 'dfgdfg', 'fdgfdgdf', 'dfgdfgd', 'gujg', 'gjhjghjghj', '2018-08-29', 'jghjghjg', 'jghjghj', 1, '223214414', '6546454', NULL, '455', NULL, 'm', '2019-08-31', 1, NULL, NULL, 12, 6, 2, '1', 0, 0, 'tPBMNlNYmrQn4L9gl5f5V2fN5DGWIBLMMq0XxZQZ3w05reZbOrietXRqT9Cy', '2019-08-31 11:28:18', '2019-09-18 02:38:18'),
(12, 1, NULL, 'Md Mohosin Iqbal', NULL, NULL, NULL, 'mohosin.iqbal@gmail.com', '$2y$10$gzyjCI1Hn0f1ZqPIuxleS.43GZcVW3sar8bdmumg.GTGSJU4fp1K.', '225/1 New Elephant Road', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123', NULL, NULL, '', 'm', '2020-06-13', NULL, NULL, 11, NULL, NULL, 5, NULL, 0, 0, NULL, '2019-09-01 00:58:00', '2020-06-14 00:21:09'),
(13, 1, 12, 'Aslam Khan', 'Mojibur Rahman', 'Baharun Nesa', 'Farzana Papia', 'test@test.com', '$2y$10$w93wheuYN9zvhZlI9Ul0WOoBqcfaCknDNyOk4rNzZhAnrA5M1QNJO', 'Islamabad', 'Islamabad', 'None', 'hgjggj', 'jhgjhjg', '2018-08-01', 'ghjghjh', 'Dr. Wasi', 1, '3213423534543645645', '01921588567', NULL, '01921588567', NULL, 'm', '2020-07-14', 1, '1594746678.jpeg', NULL, 12, 6, 2, '2', 0, 0, '2oTEWYjcbJvege4LOsqaxm0R8m4WgJZ7pmyYs5X9FtQczD3VuhDPoyGcJHj0', '2019-09-07 02:16:25', '2020-07-14 18:11:18'),
(14, 1, 13, 'Maria', 'Ahmad', 'test', 'test', 'test@test2.com', '$2y$10$YoJWhb15v1XyW5KF.2msCemoAfJREuNAyQKH93l1m6RIibG1zDYAG', 'Rawalpindi', 'Rawalpindi', 'None', NULL, NULL, NULL, NULL, NULL, 1, 'test', '03001234567', NULL, '0300', NULL, 'f', '2020-05-30', 2, NULL, NULL, 7, 2, 2, 'superadmin', 0, 0, NULL, '2020-05-31 01:09:05', '2020-05-31 01:09:05'),
(15, 1, 14, 'New test1', 'Iola Nichols', 'Sharon Bowman', 'Tate Knowles', 'gumibak@mailinator.com', '$2y$10$tP7IKzsZdDm3buEEMQkXMeCXaR4EFIeBiIEiFXTYEMLdhPnRUaZKq', 'Suscipit nihil nemo', 'Culpa aut vel tenet', 'None', 'Quae ullam voluptate', 'Vel possimus sint', NULL, 'Enim minim est aperi', 'Dr. Wasi', 1, '590', 'Eveniet et labore t', NULL, 'Quo consequatur Eli', NULL, 'm', '2020-06-27', 2, NULL, NULL, 9, 7, 2, 'employee', 0, 0, NULL, '2020-06-28 19:14:31', '2020-06-28 19:14:31'),
(16, 1, 15, 'MR Ali', 'Desiree Gilbert', 'Christopher Small', 'Felix Charles', 'levenet@mailinator.com', '$2y$10$EqwEKnqTYAcT4bSBSa7BgePjV7anv0nhdMtPS5.Kpuxqw3.VbJkD2', 'Est consectetur mai', 'Quia dicta voluptate', 'None', 'In eu occaecat magni', 'Ad maxime elit cons', NULL, 'Cum voluptatem aute', 'Dr. Wasi', 2, '588', 'Quod enim doloremque', NULL, 'Ut labore nisi dolor', NULL, 'm', '2020-06-28', 4, NULL, NULL, 2, 6, 2, '2', 0, 0, NULL, '2020-06-28 23:12:05', '2020-06-28 23:12:57'),
(17, 1, 16, 'Odessa Mcknight', 'Alec Lynn', 'Courtney Navarro', 'Samuel Ewing', 'lugakux@mailinator.com', '$2y$10$0gE8Zz5zd0l.kE2KCRdCeuLjzGvwGhzSrDFosWKMf1fpfy5nCHsJ.', 'At dolorem deserunt', 'Aliquam ut qui maxim', 'None', 'Sunt Nam excepturi e', 'Exercitationem illo', NULL, 'Minus labore numquam', 'Dr. Wasi', 2, '174', 'Soluta in et mollit', NULL, 'Numquam id amet vel', NULL, 'm', '2020-07-07', 5, NULL, NULL, 5, 3, 2, 'employee', 0, 0, NULL, '2020-07-08 03:46:27', '2020-07-08 03:46:27'),
(18, 1, NULL, 'Cecilia Taylor', NULL, NULL, NULL, 'meky@mailinator.com', '$2y$10$7tSo1fan8YxFdEYWub4DNe4uV9hIQwpTJR857G9.SocdMrweNNrUi', 'Consequat Consectet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '35', '45', NULL, NULL, 'm', '2020-07-20', NULL, NULL, NULL, NULL, NULL, 4, NULL, 0, 0, NULL, '2020-07-08 03:55:47', '2020-07-08 03:55:47'),
(19, 1, NULL, 'Colleen Nicholson', NULL, NULL, NULL, 'haqykyci@mailinator.com', '$2y$10$yrl0xdJiWK0RMVzyMPd1purJNnzUkBVX2Xb2v/3OLwPrLeJRiMOly', 'Cumque laboriosam e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '412412', '23234', NULL, NULL, 'm', '2020-07-20', NULL, NULL, 6, NULL, NULL, 5, NULL, 0, 0, NULL, '2020-07-08 03:59:39', '2020-07-08 03:59:39'),
(20, 1, 19, 'MR Adeel', 'Khan', NULL, 'Velma Ashley', 'nikegoto@mailinator.com', '$2y$10$Zs.SyAEDjcr6bCdOJqvhw.kaY5u88v.3HM9KEWC2fEIbcIIkG6FXS', 'islamabad', 'islamabad', 'None', 'Quasi eligendi in sa', 'Quo ad ab nobis irur', '2020-07-15', 'Molestias et eveniet', 'Cecilia Taylor', 2, '129', 'Dignissimos qui plac', NULL, 'Velit quae alias vi', NULL, 'm', '2020-07-15', 2, NULL, NULL, 12, 6, 2, 'superadmin', 0, 0, NULL, '2020-07-09 03:05:24', '2020-07-09 03:05:24'),
(21, 1, NULL, 'Gary Thompson', NULL, NULL, NULL, 'qulo@mailinator.com', '$2y$10$Y4RA8CHnRt8HRZ8kqogbX.JdmoQ0PTA4oaD1XXECJvboGifcmFvR6', 'Odio unde nulla eius', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '23423423', '2324', NULL, NULL, 'm', '2020-07-23', NULL, NULL, 11, NULL, NULL, 5, NULL, 0, 0, NULL, '2020-07-09 03:06:26', '2020-07-09 03:06:26'),
(22, 1, NULL, 'Jenette Giles', NULL, NULL, NULL, 'zazemapuf@mailinator.com', '$2y$10$b7gWEQcHWxpQkhlTeDShQ./4eDEMZKJj.HrOyuBadE8UDzOMQ4NLG', 'Molestiae atque ut s', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '234234', '2423', NULL, NULL, 'f', '2020-07-13', NULL, NULL, NULL, NULL, NULL, 4, NULL, 0, 0, NULL, '2020-07-09 03:06:49', '2020-07-09 03:06:49'),
(23, 1, 22, 'Waseem', 'Abdul Haq', 'Yasmeen', NULL, 'waseem@was.com', '$2y$10$GgKv401WqA/reC3312HRgevuLh4jZyZjOYDKxzSEO9zVReL7AoSK6', 'G7-islamabad', 'village khamki', 'None', 'BS-IT', '3 year DB Aministrator at PTCL', '2020-07-08', '3', 'Dr. Wasi', 1, '37406-3471776-9', '03439087654', NULL, NULL, NULL, 'm', '1991-03-07', 2, NULL, NULL, 7, 7, 2, 'employee', 0, 0, NULL, '2020-07-13 12:26:01', '2020-07-13 12:26:01'),
(24, 1, NULL, 'Aashir', NULL, NULL, NULL, 'ashir78@gmail.com', '$2y$10$2tI/vhzX0l71oHukqZrkWORmYP4ZzpFXCrBJY09pvmjtFBJC0mpQG', 'Wah Cantt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8787654', NULL, NULL, NULL, 'm', '2020-07-13', NULL, NULL, 6, NULL, NULL, 5, NULL, 0, 0, NULL, '2020-07-13 12:29:38', '2020-07-13 12:29:38'),
(25, 1, NULL, 'Khan Alam', NULL, NULL, NULL, 'alamkhan@yaho.com', '$2y$10$LkfHL3hBOLUOmBcEenOHx.tBcZutIEiKKgrTkHdbI7vW5.0EZqMWa', 'b16-b67 south islamabad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '78787654', NULL, NULL, NULL, 'm', '1990-02-06', NULL, NULL, NULL, NULL, NULL, 4, NULL, 0, 0, NULL, '2020-07-13 12:31:44', '2020-07-13 12:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `working_days`
--

CREATE TABLE `working_days` (
  `id` int(10) UNSIGNED NOT NULL,
  `updated_by` int(11) NOT NULL,
  `day` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_status` tinyint(4) NOT NULL COMMENT '0 for holiday & 1 for working day',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `working_days`
--

INSERT INTO `working_days` (`id`, `updated_by`, `day`, `working_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Fri', 0, '2018-04-12 06:25:16', '2019-09-01 16:08:46'),
(2, 1, 'Sat', 1, '2018-04-12 06:25:16', '2019-09-01 16:08:47'),
(3, 1, 'Sun', 1, '2018-04-12 06:25:17', '2019-09-01 16:08:47'),
(4, 1, 'Mon', 1, '2018-04-12 06:25:17', '2019-09-01 16:08:47'),
(5, 1, 'Tue', 1, '2018-04-12 06:25:17', '2019-09-01 16:08:47'),
(6, 1, 'Wed', 1, '2018-04-12 06:25:17', '2019-09-01 16:08:47'),
(7, 1, 'Thu', 1, '2018-04-12 06:25:17', '2019-09-01 16:08:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appliedcadidtes`
--
ALTER TABLE `appliedcadidtes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `award_categories`
--
ALTER TABLE `award_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonuses`
--
ALTER TABLE `bonuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_types`
--
ALTER TABLE `client_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `client_types_client_type_unique` (`client_type`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_department_unique` (`department`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `designations_designation_unique` (`designation`);

--
-- Indexes for table `employee_awards`
--
ALTER TABLE `employee_awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expence_managements`
--
ALTER TABLE `expence_managements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exp_purposes`
--
ALTER TABLE `exp_purposes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `increments`
--
ALTER TABLE `increments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_applications`
--
ALTER TABLE `leave_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_categories`
--
ALTER TABLE `leave_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `leave_categories_leave_category_unique` (`leave_category`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payrolls`
--
ALTER TABLE `payrolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `personal_events`
--
ALTER TABLE `personal_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `salary_payments`
--
ALTER TABLE `salary_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_payment_details`
--
ALTER TABLE `salary_payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `set_times`
--
ALTER TABLE `set_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `working_days`
--
ALTER TABLE `working_days`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appliedcadidtes`
--
ALTER TABLE `appliedcadidtes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `award_categories`
--
ALTER TABLE `award_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bonuses`
--
ALTER TABLE `bonuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client_types`
--
ALTER TABLE `client_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee_awards`
--
ALTER TABLE `employee_awards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expence_managements`
--
ALTER TABLE `expence_managements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `exp_purposes`
--
ALTER TABLE `exp_purposes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `increments`
--
ALTER TABLE `increments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leave_applications`
--
ALTER TABLE `leave_applications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leave_categories`
--
ALTER TABLE `leave_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payrolls`
--
ALTER TABLE `payrolls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_events`
--
ALTER TABLE `personal_events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salary_payments`
--
ALTER TABLE `salary_payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `salary_payment_details`
--
ALTER TABLE `salary_payment_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `set_times`
--
ALTER TABLE `set_times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `working_days`
--
ALTER TABLE `working_days`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
