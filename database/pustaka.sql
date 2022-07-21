-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2022 at 10:24 AM
-- Server version: 8.0.29-0ubuntu0.22.04.2
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pustaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbbuku`
--

CREATE TABLE `tbbuku` (
  `id` int NOT NULL,
  `kode_induk` int NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `jum_hal` int NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `tahun_terbit` int NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbbuku`
--

INSERT INTO `tbbuku` (`id`, `kode_induk`, `judul`, `penerbit`, `pengarang`, `jum_hal`, `isbn`, `tahun_terbit`, `tgl_masuk`) VALUES
(13, 1234, 'Senja Matahari', 'Erlangga', 'Kafara', 321, '21354534HG23', 2014, '2022-06-13'),
(18, 3434, 'hohoho', 'jojoj', 'dfrvg', 234, '34394HFDJFH', 2001, '2022-06-14'),
(49, 32, '24', '2425', '42', 5, '42', 42, '2003-02-02'),
(50, 32, '24', '2425', '42', 5, '42', 42, '2003-02-02'),
(51, 32, '24', '2425', '42', 5, '42', 42, '2003-02-02'),
(52, 32, '24', '2425', '42', 5, '42', 42, '2003-02-02'),
(53, 32, '24', '2425', '42', 5, '42', 42, '2003-02-02'),
(54, 2, '78', '7', '87', 87, '87', 87, '2220-02-22'),
(55, 2, '78', '7', '87', 87, '87', 87, '2220-02-22'),
(56, 343, '87', '78', '78', 78, '78', 7888, '2003-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'her1god', 'heripanca33@gmail.com', 'e4da3b7fbbce2345d7772b0674a318d5'),
(2, 'herikondk1', 'heri@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'heripopo', 'rere@gm.com', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbbuku`
--
ALTER TABLE `tbbuku`
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
-- AUTO_INCREMENT for table `tbbuku`
--
ALTER TABLE `tbbuku`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
