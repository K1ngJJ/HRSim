-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 01, 2023 at 06:25 AM
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
-- Database: `hms_db`
--

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
(1, '2023-01-24-132715', 'App\\Database\\Migrations\\AddRoom', 'default', 'App', 1698819384, 1),
(2, '2023-01-24-143746', 'App\\Database\\Migrations\\AddEvent', 'default', 'App', 1698819384, 1),
(3, '2023-02-12-225510', 'App\\Database\\Migrations\\CreateRoomCategoryTable', 'default', 'App', 1698819384, 1),
(4, '2023-02-12-230311', 'App\\Database\\Migrations\\CreateRoomFoodsTable', 'default', 'App', 1698819384, 1),
(5, '2023-02-12-231046', 'App\\Database\\Migrations\\CreateRoomCancelationChargesTable', 'default', 'App', 1698819384, 1);

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

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roomcancelationcharges`
--
ALTER TABLE `roomcancelationcharges`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roomcategories`
--
ALTER TABLE `roomcategories`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roomfoods`
--
ALTER TABLE `roomfoods`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
