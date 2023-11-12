-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2023 at 02:46 PM
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
-- Database: `petshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_product`
--

CREATE TABLE `table_product` (
  `id` int NOT NULL,
  `roomName` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `roomPrice` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `roomImg` blob NOT NULL,
  `roomDescription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `roomHeart` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_product`
--

INSERT INTO `table_product` (`id`, `roomName`, `roomPrice`, `roomImg`, `roomDescription`, `roomHeart`) VALUES
(1, 'Double Suite', '1500.00', 0x51756172746f2d5477696e2d322e6a7067, 'Two double beds into a wide windowed room.', 2),
(6, 'Normal Room', '1050.00', 0x70726f647563742d312e6a7067, 'Perfect for a simple trip with someone special', 0),
(7, 'Dog Food (Var B)', '200.00', 0x70726f647563742d342e706e67, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_register`
--

CREATE TABLE `table_register` (
  `id` int NOT NULL,
  `username` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `usertype` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_register`
--

INSERT INTO `table_register` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(8, 'serariie123', 'alcantarachynna1237@gmail.com', '$2y$10$3k9.Bg/myu4SIMAcYVu40.mrxe9VNf31aB3e.nH2ZfJtQb7z6lEIy', 'admin'),
(9, 'yna1234', 'gleambean96@gmail.com', '$2y$10$qstzlcmHcWBbRriZsnbks.IjAmGhJHlFtAf/eX9a1Vpc.DEP9ITRq', 'user'),
(10, 'jfdhjf', 'anbbhgfhh@hotmail.com', '$2y$10$OPIxifekcLp6pVWYS390BODklsSeq0Q8Bk11i9CQx1y5swXyHMLSS', 'user'),
(11, 'yna12345', 'alcantarachynna123@gmail.com', '$2y$10$sseZdku0csBlhwY53GQ6g.TnVqbgFdJKnFpWSKQSjJkGiH3pF15QO', 'admin'),
(12, 'chynna', 'alcantarachynna1234@gmail.com', '$2y$10$oyVS5rvc.fPDR5I/9gqfjOM2LbNksq8QQaeNSj5LtnzabxMtNi8Om', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_product`
--
ALTER TABLE `table_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_register`
--
ALTER TABLE `table_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_product`
--
ALTER TABLE `table_product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `table_register`
--
ALTER TABLE `table_register`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
