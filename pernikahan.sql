-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 03:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pernikahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tamu_pernikahan`
--

CREATE TABLE `tamu_pernikahan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi_amplop` int(11) DEFAULT NULL,
  `waktu_datang` datetime NOT NULL DEFAULT current_timestamp(),
  `no_telp` varchar(20) DEFAULT NULL,
  `souvenir` varchar(10) NOT NULL,
  `Alamat` text DEFAULT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `ucapan_selamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tamu_pernikahan`
--

INSERT INTO `tamu_pernikahan` (`id`, `nama`, `isi_amplop`, `waktu_datang`, `no_telp`, `souvenir`, `Alamat`, `jenis_kelamin`, `ucapan_selamat`) VALUES
(13, 'raihan', 50000, '2023-10-18 11:19:04', '123123123', 'kipas', 'Wahyu', 'pria', 'selamat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'raihan', 'raihan'),
(3, 'raihan', 'raihan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tamu_pernikahan`
--
ALTER TABLE `tamu_pernikahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tamu_pernikahan`
--
ALTER TABLE `tamu_pernikahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
