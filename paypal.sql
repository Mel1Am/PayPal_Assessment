-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 02:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paypal`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` int(191) NOT NULL,
  `zipcode` int(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `qty` int(191) NOT NULL,
  `price` int(191) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `timestamps` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `name`, `email`, `phone`, `zipcode`, `address`, `qty`, `price`, `payment_id`, `timestamps`) VALUES
(1, 'Muhammad Shoaib khan', 'ayesha@gmail.com', 2147483647, 0, 'heeman mehrooka', 0, 0, '2U973799U5451374M', '2023-02-03 18:00:45'),
(2, 'Muhammad Shoaib khan', 'ayesha@gmail.com', 2147483647, 57480, 'heeman mehrooka', 0, 0, '5VU06415TG4086520', '2023-02-03 18:18:55'),
(3, 'Muhammad Shoaib khan', 'sh@gmail.com', 2147483647, 57480, 'heeman mehrooka', 3, 0, '0KK403889G9622021', '2023-02-03 18:21:48'),
(4, 'Muhammad Shoaib khan', 'bobbykhan2334@gmail.com', 2147483647, 57480, 'heeman mehrooka', 3, 75, '1SX28157JR188132L', '2023-02-03 18:26:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
