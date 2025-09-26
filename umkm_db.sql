-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2025 at 01:44 PM
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
-- Database: `umkm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `umkm_kuliner`
--

CREATE TABLE `umkm_kuliner` (
  `id` int(11) NOT NULL,
  `nama_pemilik` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `kategori_usaha` varchar(255) NOT NULL,
  `skala_usaha` enum('Mikro','Kecil','Menengah') NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `umkm_kuliner`
--

INSERT INTO `umkm_kuliner` (`id`, `nama_pemilik`, `username`, `password`, `jenis_kelamin`, `kategori_usaha`, `skala_usaha`, `deskripsi`, `created_at`) VALUES
(1, 'Sari Widyani', 'sariw', '$2y$10$HAFcy2NYXs44Wn5G6z.c4uHnZvfM4K9XdzNNMAlyuwFJoK6psFhgi', 'Perempuan', 'Makanan', 'Mikro', 'Warung nasi pecel khas Jawa dengan sambal kacang segar', '2025-09-26 11:37:14'),
(2, 'Rina Kartika', 'rina', '$2y$10$KuWOllV9YG.ZUcWWYQ5/o.TwN5tJt/hFrle3jLOzo5N2XHxCBAfme', 'Perempuan', 'Minuman', 'Kecil', 'Menjual es teh jumbo berbagai rasa di Pasar Sarwoasri', '2025-09-26 11:38:10'),
(3, 'Budi Santoso', 'budi_s', '$2y$10$a7sTb98OnaojH4T3xPbChOkYml.EiuOAEmXJeYjDci635.KSJhJj2', 'Laki-laki', 'Jasa', 'Menengah', 'Jasa katering untuk acara hajatan dengan menu tradisional', '2025-09-26 11:38:59'),
(4, 'Dewi Lestari', 'dewiles', '$2y$10$AuHGd67PiarikqAQMdDoG.kY04j/DP4JkNDZkkVr7i8s0t7k786k.', 'Perempuan', 'Barang', 'Kecil', 'Menjual kue kering kemasan untuk oleh-oleh pasar', '2025-09-26 11:40:09'),
(5, 'Agus Prasetyo', 'agus_p', '$2y$10$Q13RXbQw4.8PEVTdFCDphe7tHuSWRjzIq7cQDTOmk6HOrN/OkGXpi', 'Laki-laki', 'Makanan, Minuman', 'Mikro', 'Gerobak angkringan menjual nasi kucing, sate, dan wedang jahe', '2025-09-26 11:42:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `umkm_kuliner`
--
ALTER TABLE `umkm_kuliner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `umkm_kuliner`
--
ALTER TABLE `umkm_kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
