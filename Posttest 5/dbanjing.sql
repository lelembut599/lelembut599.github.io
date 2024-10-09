-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 04:16 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbanjing`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_anjing`
--

CREATE TABLE `data_anjing` (
  `id` int NOT NULL,
  `nama` varchar(30) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data_anjing`
--

INSERT INTO `data_anjing` (`id`, `nama`, `deskripsi`, `tanggal`, `foto`) VALUES
(2, 'soni', 'asu', '2024-10-11', 'malamute.png'),
(3, 'sss', 'asu lagi', '2024-10-11', 'shih tzu.png'),
(4, 'GERGSGSRG', 'asu terus', '2024-10-03', 'akita.png'),
(5, 'a', 'asuuuu', '2024-10-09', 'pomeranian.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_anjing`
--
ALTER TABLE `data_anjing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_anjing`
--
ALTER TABLE `data_anjing`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
