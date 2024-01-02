-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 12:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloglaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `super_admin` tinyint(4) DEFAULT 0,
  `password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `status`, `super_admin`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', '8889997778', 0, 1, '1234'),
(2, 'agent', 'agent@gmail.com', '6546546546', 0, 0, '1234'),
(5, 'ali', 'ali@ali.com', '01164534715', 0, 0, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) NOT NULL,
  `room_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `checkin` datetime NOT NULL,
  `checkout` datetime NOT NULL,
  `price` varchar(191) NOT NULL,
  `payment_mode` varchar(191) DEFAULT NULL,
  `booking_status` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `room_id`, `user_id`, `checkin`, `checkout`, `price`, `payment_mode`, `booking_status`, `created_at`, `Status`) VALUES
(5, 1, 1, '2024-01-01 20:29:00', '2024-01-01 21:29:00', '3299', 'Cash', 0, '2024-01-01 20:29:49', 'Approved'),
(6, 1, 1, '2024-01-01 20:54:00', '2024-01-01 23:54:00', '3299', 'Cash', 0, '2024-01-01 20:54:29', 'Denied'),
(7, 1, 3, '2024-01-01 22:30:00', '2024-01-01 23:30:00', '3299', 'Cash', 0, '2024-01-01 22:30:56', 'Approved'),
(8, 1, 3, '2024-01-02 21:20:00', '2024-01-02 21:20:00', '3299', 'Cash', 0, '2024-01-02 19:21:29', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) NOT NULL,
  `room_name` varchar(191) NOT NULL,
  `no_of_beds` tinyint(4) NOT NULL,
  `room_qty` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(191) NOT NULL,
  `room_image` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_name`, `no_of_beds`, `room_qty`, `description`, `price`, `room_image`, `status`, `created_at`) VALUES
(1, 'Delux rooms', 2, 3, '<p>Best in class rooms with the following amenities</p><ul><li>Wi-fi</li><li>AC</li><li>2 Large size Beds </li></ul>', '3299', 'delux.jpg', 0, '2021-05-09 13:54:20'),
(2, 'Premium', 3, 2, '<p>Premuim rooms with Wi-Fi and AC.</p>', '5999', 'premium.jpg', 0, '2021-05-09 13:55:49'),
(3, 'Royal', 3, 5, '<p>Royal rooms have the best quality furnitures and comfort.&nbsp;</p>', '5999', 'royal.jpg', 0, '2021-05-10 13:22:08'),
(5, 'test', 12, 2, 'test', '12', '43891582151_8efbf67293_b.jpg', 0, '2024-01-01 09:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(11) NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` char(191) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `phone`, `gender`, `email`, `password`, `status`, `created_at`) VALUES
(1, 'ali', 'elhefnawy', '9156456456', 'Male', 'ali@ali.com', '1234', 0, '2024-01-01 10:21:57'),
(2, 'li', 'lhefnawy', '9123456789', 'Male', 'li@ali.com', '1234', 0, '2024-01-01 10:23:49'),
(3, 'Ali Mohamed Mohamed Elhefnawy', 'AI210028', '01164534715', 'Male', 'alihefnawey@gmail.com', '1234', 0, '2024-01-01 14:27:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
