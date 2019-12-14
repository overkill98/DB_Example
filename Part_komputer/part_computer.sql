-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2019 at 06:11 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `part_komputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `spare_part`
--

CREATE TABLE `spare_part` (
  `id` int(5) NOT NULL,
  `nama_produk` varchar(25) NOT NULL,
  `vendor` varchar(15) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spare_part`
--

INSERT INTO `spare_part` (`id`, `nama_produk`, `vendor`, `stok`, `harga`) VALUES
(1, 'RTX2080 GPU', 'NVIDIA', 5, 10000),
(2, 'Core i7 8000M', 'INTEL', 6, 20000),
(3, 'AMD A8', 'AMD', 10, 4000),
(4, 'GTX1080 GPU', 'NVIDIA', 8, 7000),
(5, 'Radeon 260x GPU', 'AMD', 5, 5000),
(6, 'GTX 1050 Ti', 'NVIDIA', 2, 5000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spare_part`
--
ALTER TABLE `spare_part`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spare_part`
--
ALTER TABLE `spare_part`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
