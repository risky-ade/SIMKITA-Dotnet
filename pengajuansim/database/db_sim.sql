-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2022 at 06:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sim`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pengajuan`
--

CREATE TABLE `jenis_pengajuan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_pengajuan`
--

INSERT INTO `jenis_pengajuan` (`id`, `nama`) VALUES
(1, 'Daftar SIM Baru'),
(2, 'Perpanjang SIM');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_sim`
--

CREATE TABLE `jenis_sim` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_sim`
--

INSERT INTO `jenis_sim` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'SIM A', '2022-06-19 23:01:56', '2022-06-19 23:01:56'),
(2, 'SIM B1', '2022-06-19 23:04:19', '2022-06-19 23:04:19'),
(3, 'SIM B2', '2022-06-19 23:04:51', '2022-06-19 23:04:51'),
(4, 'SIM C', '2022-06-19 23:04:51', '2022-06-19 23:04:51'),
(5, 'SIM D', '2022-06-19 23:06:32', '2022-06-19 23:06:32'),
(6, 'SIM A UMUM', '2022-06-19 23:06:32', '2022-06-19 23:06:32'),
(7, 'SIM B1 UMUM', '2022-06-19 23:07:45', '2022-06-19 23:07:45'),
(8, 'SIM B2 UMUM', '2022-06-19 23:07:45', '2022-06-19 23:07:45');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `id_jenis_sim` int(11) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT '1',
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `sim` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id`, `tanggal`, `id_jenis_sim`, `status`, `id_user`, `created_at`, `updated_at`, `foto`, `sim`) VALUES
(1, '2022-06-20', 1, '2', 0, NULL, NULL, NULL, NULL),
(2, '2022-06-21', 4, '1', 1, '2022-06-20 17:33:35', '2022-06-20 17:33:35', NULL, NULL),
(3, '2022-06-21', 1, '1', 0, '2022-06-21 07:36:37', '2022-06-21 07:36:37', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_foto`
--

CREATE TABLE `pengajuan_foto` (
  `id` int(11) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nama`) VALUES
('admin', 'ADMIN'),
('masyarakat', 'MASYARAKAT');

-- --------------------------------------------------------

--
-- Table structure for table `status_pengajuan`
--

CREATE TABLE `status_pengajuan` (
  `id` int(2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_pengajuan`
--

INSERT INTO `status_pengajuan` (`id`, `status`) VALUES
(1, 'PROSES'),
(2, 'DITINDAKLANJUTI'),
(3, 'PENDING'),
(4, 'SELESAI');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `id_role` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nomor_sim` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `email`, `password`, `nik`, `telepon`, `alamat`, `status`, `id_role`, `created_at`, `updated_at`, `nomor_sim`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `pekerjaan`, `desa`, `kecamatan`, `kota`, `provinsi`) VALUES
(4, 'test', 'test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '12345', '09876', 'sby', 1, 'masyarakat', '2022-06-21 04:32:17', '2022-06-21 04:32:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'ade', 'ade', 'ade@gmail.com', 'a562cfa07c2b1213b3a5c99b756fc206', '33333', '090909', 'sidoarjo', 1, 'masyarakat', '2022-06-25 20:36:20', '2022-06-25 20:36:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Risky ade sucahyo', 'risky', 'risky@gmail.com', '123', '123', NULL, NULL, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Dian Zur Indah ', 'dianindah', 'dian@gmail.com', '123', '1234', NULL, NULL, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_pengajuan`
--
ALTER TABLE `jenis_pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_sim`
--
ALTER TABLE `jenis_sim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan_foto`
--
ALTER TABLE `pengajuan_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_pengajuan`
--
ALTER TABLE `status_pengajuan`
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
-- AUTO_INCREMENT for table `jenis_pengajuan`
--
ALTER TABLE `jenis_pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_sim`
--
ALTER TABLE `jenis_sim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengajuan_foto`
--
ALTER TABLE `pengajuan_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_pengajuan`
--
ALTER TABLE `status_pengajuan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
