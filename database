-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2025 at 05:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ubaquatic_center`
--
CREATE DATABASE IF NOT EXISTS `ubaquatic_center` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ubaquatic_center`;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE IF NOT EXISTS `invoices` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_userID` int(11) NOT NULL,
  `invoice_venueID` int(11) NOT NULL,
  `invoice_amount` decimal(10,0) NOT NULL,
  `invoice_payment_type` varchar(300) NOT NULL,
  `invoice_status` enum('paid','unpaid') NOT NULL,
  `invoice_dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `invoice_reference` varchar(300) NOT NULL,
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `invoices`
--

TRUNCATE TABLE `invoices`;
-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(300) NOT NULL,
  `role_description` varchar(300) NOT NULL,
  `role_status` enum('active','suspended','deleted') NOT NULL DEFAULT 'active',
  `role_dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `roles`
--

TRUNCATE TABLE `roles`;
--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `role_description`, `role_status`, `role_dateCreated`) VALUES
(1, 'admin', 'manage everything', 'active', '2025-03-18 17:04:37'),
(2, 'customer', 'submits bookings', 'active', '2025-03-18 17:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_names` varchar(300) NOT NULL,
  `user_surname` varchar(300) NOT NULL,
  `user_cellphone` varchar(20) NOT NULL,
  `user_email` varchar(300) NOT NULL,
  `user_password` varchar(300) NOT NULL,
  `user_status` enum('active','deleted','blocked','waiting_for_approval') NOT NULL,
  `user_roleId` int(11) NOT NULL,
  `user_dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `user_key` varchar(300) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_names`, `user_surname`, `user_cellphone`, `user_email`, `user_password`, `user_status`, `user_roleId`, `user_dateCreated`, `user_key`) VALUES
(1, 'Setso', 'Kabomo', '7567564', 'setso@gmail.com', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 'active', 1, '2025-03-18 17:05:26', 'ryertghfhtrjtrtururet');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

DROP TABLE IF EXISTS `venues`;
CREATE TABLE IF NOT EXISTS `venues` (
  `venue_id` int(11) NOT NULL AUTO_INCREMENT,
  `venue_name` varchar(300) NOT NULL,
  `venue_address` varchar(300) NOT NULL,
  `venue_image_url` varchar(300) NOT NULL,
  `venue_email` varchar(300) NOT NULL,
  `venue_cellphone` varchar(300) NOT NULL,
  `venue_max_capacity` int(11) NOT NULL,
  `venue_latitude` varchar(300) NOT NULL,
  `venue_longitude` varchar(300) NOT NULL,
  `venue_status` enum('active','deleted','suspended') NOT NULL DEFAULT 'active',
  `venue_dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `venue_createdBy` int(11) NOT NULL,
  `venue_lastEditDate` datetime NOT NULL DEFAULT current_timestamp(),
  `venue_about` longtext NOT NULL,
  `venue_ratings` double NOT NULL DEFAULT 0,
  `venue_discount_price` decimal(10,0) NOT NULL,
  `venue_sale_price` decimal(10,0) NOT NULL,
  PRIMARY KEY (`venue_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `venues`
--

TRUNCATE TABLE `venues`;
--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`venue_id`, `venue_name`, `venue_address`, `venue_image_url`, `venue_email`, `venue_cellphone`, `venue_max_capacity`, `venue_latitude`, `venue_longitude`, `venue_status`, `venue_dateCreated`, `venue_createdBy`, `venue_lastEditDate`, `venue_about`, `venue_ratings`, `venue_discount_price`, `venue_sale_price`) VALUES
(1, 'Test Venue', ' Kogppa ward Plot 4685 ', 'team-3.jpg', 'Test@Venue.com', '54677543754754', 15, 'X', 'X', 'deleted', '2025-03-18 17:30:22', 1, '2025-03-18 17:30:22', 'rt fh', 0, 900, 850),
(2, 'ewfwerfwg', 'gregre', 'assets/img/480813627_1819471452170147_1111810925302107315_n.jpg', 'mukundieldridge@gmail.com', '0607541983', 5, 're', 'gfhgf', 'active', '2025-03-18 18:04:34', 1, '2025-03-18 18:04:34', 'fghgfhgfh', 1, 111, 222),
(3, 'Setso Venue', 'Ext 25 Rosewood Rd, Fourways, Johannesburg, 2191', 'assets/img/476807702_1136610011597124_6858968711811450590_n.jpg', 'mukundieldridge@gmail.com', '0607541983', 45, '43t34', '34t3', 'active', '2025-03-18 18:17:32', 1, '2025-03-18 18:17:32', 'fghgfhgfhh df hsd hfd hs', 54375, 45, 7543),
(4, 'Setso Venue', 'Ext 25 Rosewood Rd, Fourways, Johannesburg, 2191', 'assets/img/476807702_1136610011597124_6858968711811450590_n.jpg', 'mukundieldridge@gmail.com', '0607541983', 45, '43t34', '34t3', 'active', '2025-03-18 18:19:15', 1, '2025-03-18 18:19:15', 'fghgfhgfhh df hsd hfd hs', 54375, 45, 7543),
(5, 'Setso Venue', 'Ext 25 Rosewood Rd, Fourways, Johannesburg, 2191', 'assets/img/476807702_1136610011597124_6858968711811450590_n.jpg', 'mukundieldridge@gmail.com', '0607541983', 45, '43t34', '34t3', 'active', '2025-03-18 18:20:21', 1, '2025-03-18 18:20:21', 'fghgfhgfhh df hsd hfd hs', 54375, 45, 7543),
(6, 'KabomoVenue', 'Ext 25 Rosewood Rd, Fourways, Johannesburg, 2191', 'assets/img/', 'mukundieldridge@gmail.com', '0607541983', 45, '43t34', '34t3', 'deleted', '2025-03-18 18:34:12', 1, '2025-03-18 18:34:12', 'fghgfhgfhh df hsd hfd hs', 54375, 45, 7543),
(7, 'KabomoVenue', 'Ext 25 Rosewood Rd, Fourways, Johannesburg, 2191', 'assets/img/481083421_9161819930580454_4552058503220796247_n.jpg', 'mukundieldridge@gmail.com', '0607541983', 45, '43t34', '34t3', 'active', '2025-03-18 18:35:08', 1, '2025-03-18 18:35:08', 'fghgfhgfhh df hsd hfd hs', 54375, 45, 7543),
(8, 'Kgopa Venue', 'Ext 25 Rosewood Rd, Fourways, Johannesburg, 2191', 'assets/img/', 'mukundieldridge@gmail.com', '0607541983', 45, '43t34', '34t3', 'deleted', '2025-03-18 18:35:21', 1, '2025-03-18 18:35:21', 'fghgfhgfhh df hsd hfd hs', 54375, 45, 7543),
(9, 'Test V', 'gregre', 'assets/img/', 'mukundieldridge@gmail.com', '0607541983', 5, 're', 'gfhgf', 'deleted', '2025-03-18 18:36:05', 1, '2025-03-18 18:36:05', 'fghgfhgfh', 1, 111, 222),
(10, 'KabomoVenue22', 'Ext 25 Rosewood Rd, Fourways, Johannesburg, 2191', 'assets/img/', 'mukundieldridge@gmail.com', '0607541983', 45, '43t34', '34t3', 'deleted', '2025-03-18 18:37:42', 1, '2025-03-18 18:37:42', 'fghgfhgfhh df hsd hfd hs', 54375, 45, 7543),
(11, 'KabomoVenue ', 'Ext 25 Rosewood Rd, Fourways, Johannesburg, 2191', 'assets/img/man-looking-inside-microwave_511044-1735.avif', 'mukundieldridge@gmail.com', '0607541983', 45, '43t34', '34t3', 'active', '2025-03-18 18:38:00', 1, '2025-03-18 18:38:00', 'fghgfhgfhh df hsd hfd hs', 54375, 45, 7543),
(12, 'Gaborone', 'gregre', 'assets/img/', 'mukundieldridge@gmail.com', '0607541983', 5, 're', 'gfhgf', 'active', '2025-03-18 18:42:56', 1, '2025-03-18 18:42:56', 'fghgfhgfh', 1, 111, 222),
(13, 'RRRRR', 'gregre', 'assets/img/', 'mukundieldridge@gmail.com', '0607541983', 5, 're', 'gfhgf', 'deleted', '2025-03-18 18:43:16', 1, '2025-03-18 18:43:16', 'fghgfhgfh', 1, 111, 222);

-- --------------------------------------------------------

--
-- Table structure for table `venue_bookings`
--

DROP TABLE IF EXISTS `venue_bookings`;
CREATE TABLE IF NOT EXISTS `venue_bookings` (
  `venue_booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `venue_booking_userID` int(11) NOT NULL,
  `venue_booking_venueID` int(11) NOT NULL,
  `venue_booking_date_booked` datetime NOT NULL DEFAULT current_timestamp(),
  `venue_booking_status` enum('approved','cancelled','deleted','waiting_approval') NOT NULL DEFAULT 'waiting_approval',
  `venue_booking_reference_number` varchar(300) NOT NULL,
  PRIMARY KEY (`venue_booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `venue_bookings`
--

TRUNCATE TABLE `venue_bookings`;
--
-- Dumping data for table `venue_bookings`
--

INSERT INTO `venue_bookings` (`venue_booking_id`, `venue_booking_userID`, `venue_booking_venueID`, `venue_booking_date_booked`, `venue_booking_status`, `venue_booking_reference_number`) VALUES
(1, 23, 1, '2025-03-18 17:39:18', 'waiting_approval', 'gfjhjhgfdgfhjjdfg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
