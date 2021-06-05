-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 05:27 PM
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
-- Database: `db_app_inventaris_two`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_ac`
--

CREATE TABLE `tb_ac` (
  `id` int(11) NOT NULL,
  `label` varchar(50) NOT NULL,
  `wing` varchar(100) NOT NULL,
  `lantai` varchar(100) NOT NULL,
  `ruangan` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `tgl_pemasangan` varchar(255) NOT NULL,
  `refrigerant` varchar(100) NOT NULL,
  `kapasitas` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `tgl_maintenance` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL,
  `arus` varchar(50) NOT NULL,
  `phasa` varchar(100) NOT NULL,
  `pipa` varchar(100) NOT NULL,
  `btu` varchar(100) DEFAULT NULL,
  `tegangan_kerja` varchar(50) NOT NULL,
  `jenis_kerusakan` varchar(300) DEFAULT NULL,
  `status_kompresor` varchar(500) NOT NULL,
  `insert_by` varchar(255) NOT NULL,
  `update_by` varchar(100) NOT NULL,
  `updated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ac`
--

INSERT INTO `tb_ac` (`id`, `label`, `wing`, `lantai`, `ruangan`, `merk`, `model`, `jenis`, `tgl_pemasangan`, `refrigerant`, `kapasitas`, `product`, `tgl_maintenance`, `status`, `arus`, `phasa`, `pipa`, `btu`, `tegangan_kerja`, `jenis_kerusakan`, `status_kompresor`, `insert_by`, `update_by`, `updated`) VALUES
(64, '01', 'W-A', 'Lt1', 'Staff', 'Daikin', 'Splite', 'Inverter', '06/04/2021', 'R410', '1,5pk', 'Thailand', '06/04/2021 - 06/04/2021', 'Rusak', '6', '1 phasa', '3/8 - 1/2', '2,300', '220', 'error pada modul', 'sudah ganti', 'Di tambahkan tanggal, 04/Jun/2021 oleh admin pukul 21:41', 'Di ubah tanggal, 04/Jun/2021  oleh Rinto Harahap pukul 22:22', '1622816552'),
(65, '05', 'W-B', 'Lt1', 'Manager', 'Mitsubhisi', 'Cassette', 'Standar', '06/17/2021', 'R22', '3pk', 'Malaysia', '06/09/2021 - 10/22/2021', 'Normal', '9', '3 phasa', '3/8 - 1/2', '8,800', '380', NULL, 'ori', 'Di tambahkan tanggal, 04/Jun/2021 oleh admin pukul 21:42', 'Di ubah tanggal, 04/Jun/2021  oleh Rinto Harahap pukul 22:23', '1622816584');

-- --------------------------------------------------------

--
-- Table structure for table `tb_apart`
--

CREATE TABLE `tb_apart` (
  `id` int(11) NOT NULL,
  `no_apart` int(3) NOT NULL,
  `wing` varchar(255) NOT NULL,
  `lantai` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `berat` varchar(255) NOT NULL,
  `tgl_expired` varchar(255) NOT NULL,
  `tgl_pengadaan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT current_timestamp(),
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_apart`
--

INSERT INTO `tb_apart` (`id`, `no_apart`, `wing`, `lantai`, `lokasi`, `merk`, `jenis`, `berat`, `tgl_expired`, `tgl_pengadaan`, `status`, `created_by`, `updated_by`, `created_at`, `catatan`) VALUES
(15, 7, 'W-A', 'Lt2', 'area toilet', 'Ghunnebo', 'Foam', '8kg', '2021-06-15', '2021-06-30', 'Rusak', 'Di tambahkan tanggal, 05/Jun/2021 oleh admin pukul 21:36', 'Di ubah tanggal, 05/Jun/2021  oleh Rinto Harahap pukul 23:22', 1622900219, 'dfdf'),
(16, 9, 'W-B', 'Lt3', 'area toilet', 'Chubb', 'Powder', '2kg', '2021-06-09', '2021-06-25', 'Normal', 'Di tambahkan tanggal, 05/Jun/2021 oleh admin pukul 21:43', 'Di ubah tanggal, 05/Jun/2021  oleh Rinto Harahap pukul 23:21', 1622900586, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daftar_barang`
--

CREATE TABLE `tb_daftar_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `merk` varchar(100) NOT NULL,
  `tgl_pengadaan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `daya` varchar(255) NOT NULL,
  `berat` varchar(255) NOT NULL,
  `update_by` varchar(255) NOT NULL,
  `insert_by` varchar(255) NOT NULL,
  `updated` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_daftar_barang`
--

INSERT INTO `tb_daftar_barang` (`id`, `nama_barang`, `catatan`, `merk`, `tgl_pengadaan`, `status`, `daya`, `berat`, `update_by`, `insert_by`, `updated`) VALUES
(31, 'bor beton', 'rusaki', 'bosch', '2021-06-04', 'rusak', '22', '4', 'Di ubah tanggal, 02/Jun/2021  oleh Rinto Harahap pukul 23:25', 'Di tambahkan tanggal, 01/Jun/2021 oleh Rinto Harahap pukul 21:55', '1622647515'),
(33, 'mesin las', NULL, 'lakoni', '2021-06-23', 'normal', '900 watt ', '3 kg', '', 'Di tambahkan tanggal, 02/Jun/2021 oleh admin pukul 23:48', '1622648892');

-- --------------------------------------------------------

--
-- Table structure for table `tb_details`
--

CREATE TABLE `tb_details` (
  `id` int(11) NOT NULL,
  `detail_id` int(11) NOT NULL,
  `label` int(100) NOT NULL,
  `tegangan_kerja` varchar(100) NOT NULL,
  `arus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nik` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `user_login` varchar(255) NOT NULL,
  `login_time` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nik`, `image`, `password`, `role`, `is_active`, `user_login`, `login_time`, `created_at`) VALUES
(24, 'Rinto Harahap', 'ryntooh@gmail.com', 15920011, 'avatar24.png', '$2y$10$f1rUv4I7XqVhX7Chln7tL..FxuhrNGUsit9lCMjzvO9CgvA.WYcSW', 'admin', 1, 'online', '05/Jun/2021 | 22:42', 1615117910),
(28, 'ryan', 'ryanmax798@gmail.com', 15920002, 'avatar42.png', '$2y$10$1haBySyNcwa11svG3VuxTuK43eKI6CVAZpFEAutfVr0azSaewktrm', 'user', 1, 'offline', '01/Jun/2021 | 23:01', 1616161068),
(29, 'john doe', 'jhon@gmail.com', 15920001, 'default.png', '$2y$10$1R0IGvIHaWQmRsTjB9my5O/Z4K1bwDZxcomcdhR5942adEQfhZMQO', 'user', 1, 'offline', '05/Jun/2021 | 20:45', 1622520015);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_ac`
--
ALTER TABLE `tb_ac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_apart`
--
ALTER TABLE `tb_apart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_daftar_barang`
--
ALTER TABLE `tb_daftar_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_details`
--
ALTER TABLE `tb_details`
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
-- AUTO_INCREMENT for table `tb_ac`
--
ALTER TABLE `tb_ac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tb_apart`
--
ALTER TABLE `tb_apart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_daftar_barang`
--
ALTER TABLE `tb_daftar_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_details`
--
ALTER TABLE `tb_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
