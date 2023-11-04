-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2023 at 06:26 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int UNSIGNED NOT NULL,
  `customer_id` int NOT NULL,
  `roomcategory_id` int DEFAULT NULL,
  `total_members` int DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `arival_date` date NOT NULL,
  `departure_date` date NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int UNSIGNED NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_phone_number` int NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` int DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int UNSIGNED NOT NULL,
  `event_date` date NOT NULL,
  `event_title` varchar(200) NOT NULL,
  `event_slug` varchar(255) NOT NULL,
  `event_created_at` datetime NOT NULL,
  `event_updated_at` datetime NOT NULL,
  `event_deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-01-24-132715', 'App\\Database\\Migrations\\AddRoom', 'default', 'App', 1699076183, 1),
(2, '2023-01-24-140225', 'App\\Database\\Migrations\\AddUser', 'default', 'App', 1699076183, 1),
(3, '2023-01-24-142659', 'App\\Database\\Migrations\\AddContact', 'default', 'App', 1699076183, 1),
(4, '2023-01-24-143746', 'App\\Database\\Migrations\\AddEvent', 'default', 'App', 1699076183, 1),
(5, '2023-02-12-225510', 'App\\Database\\Migrations\\CreateRoomCategoryTable', 'default', 'App', 1699076183, 1),
(6, '2023-02-12-230311', 'App\\Database\\Migrations\\CreateRoomFoodsTable', 'default', 'App', 1699076183, 1),
(7, '2023-02-12-231046', 'App\\Database\\Migrations\\CreateRoomCancelationChargesTable', 'default', 'App', 1699076183, 1),
(8, '2023-02-13-124119', 'App\\Database\\Migrations\\CreateBookingTable', 'default', 'App', 1699076183, 1),
(9, '2023-02-13-130018', 'App\\Database\\Migrations\\CreateCustomerTable', 'default', 'App', 1699076183, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roomcancelationcharges`
--

CREATE TABLE `roomcancelationcharges` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `roomcancelationcharges`
--

INSERT INTO `roomcancelationcharges` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Free', '2023-11-04 00:36:41', '2023-11-04 00:36:41', '0000-00-00 00:00:00'),
(2, '5% Before 24hours', '2023-11-04 00:36:41', '2023-11-04 00:36:41', '0000-00-00 00:00:00'),
(3, 'No Cancelation allow', '2023-11-04 00:36:41', '2023-11-04 00:36:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roomcategories`
--

CREATE TABLE `roomcategories` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `roomcategories`
--

INSERT INTO `roomcategories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Single', '2023-11-04 00:36:41', '2023-11-04 00:36:41', '0000-00-00 00:00:00'),
(2, 'Double', '2023-11-04 00:36:41', '2023-11-04 00:36:41', '0000-00-00 00:00:00'),
(3, 'Quad', '2023-11-04 00:36:41', '2023-11-04 00:36:41', '0000-00-00 00:00:00'),
(4, 'King', '2023-11-04 00:36:41', '2023-11-04 00:36:41', '0000-00-00 00:00:00'),
(5, 'Suite', '2023-11-04 00:36:41', '2023-11-04 00:36:41', '0000-00-00 00:00:00'),
(6, 'Villa', '2023-11-04 00:36:41', '2023-11-04 00:36:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roomfoods`
--

CREATE TABLE `roomfoods` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `roomfoods`
--

INSERT INTO `roomfoods` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Free Breakfast', '2023-11-04 00:36:41', '2023-11-04 00:36:41', '0000-00-00 00:00:00'),
(2, 'Free Launch', '2023-11-04 00:36:41', '2023-11-04 00:36:41', '0000-00-00 00:00:00'),
(3, 'Free Dinner', '2023-11-04 00:36:41', '2023-11-04 00:36:41', '0000-00-00 00:00:00'),
(4, 'Free Breakfast and Dinner', '2023-11-04 00:36:41', '2023-11-04 00:36:41', '0000-00-00 00:00:00'),
(5, 'Free Welcome Drink', '2023-11-04 00:36:41', '2023-11-04 00:36:41', '0000-00-00 00:00:00'),
(6, 'No Free Food', '2023-11-04 00:36:41', '2023-11-04 00:36:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int UNSIGNED NOT NULL,
  `number` varchar(100) NOT NULL,
  `roomcategory_id` int DEFAULT NULL,
  `ac` enum('AC','NO AC') NOT NULL,
  `roomfood_id` int DEFAULT NULL,
  `bedcount` int NOT NULL,
  `roomcancelationcharges_id` int DEFAULT NULL,
  `price` int NOT NULL,
  `status` enum('unavailable','available') NOT NULL DEFAULT 'unavailable',
  `image` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int UNSIGNED NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_role` enum('admin','customer') NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_created_at` datetime NOT NULL,
  `user_updated_at` datetime NOT NULL,
  `user_deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_role`, `user_password`, `user_created_at`, `user_updated_at`, `user_deleted_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', '$2y$10$stZ6Oegz4VgJUxrmmu8SeOV5YH5f3LgAwPkygQEPQ4ncOJc4NRevG', '2023-11-04 00:36:41', '2023-11-04 00:36:41', '0000-00-00 00:00:00'),
(2, 'Customer', 'customer@gmail.com', 'customer', '$2y$10$CbDlreF5TewAVcLYJoDVlOmCJw3AyBczpUBNNkfzwMm9aPabtpxCK', '2023-11-04 00:36:41', '2023-11-04 00:36:41', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomcancelationcharges`
--
ALTER TABLE `roomcancelationcharges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomcategories`
--
ALTER TABLE `roomcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomfoods`
--
ALTER TABLE `roomfoods`
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
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roomcancelationcharges`
--
ALTER TABLE `roomcancelationcharges`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roomcategories`
--
ALTER TABLE `roomcategories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roomfoods`
--
ALTER TABLE `roomfoods`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
