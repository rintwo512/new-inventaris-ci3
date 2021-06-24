-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 07:23 PM
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
  `aset` varchar(100) NOT NULL,
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
  `petugas` varchar(255) NOT NULL,
  `updated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ac`
--

INSERT INTO `tb_ac` (`id`, `label`, `aset`, `wing`, `lantai`, `ruangan`, `merk`, `model`, `jenis`, `tgl_pemasangan`, `refrigerant`, `kapasitas`, `product`, `tgl_maintenance`, `status`, `arus`, `phasa`, `pipa`, `btu`, `tegangan_kerja`, `jenis_kerusakan`, `status_kompresor`, `insert_by`, `update_by`, `petugas`, `updated`) VALUES
(101, 'A1.01', 'TELKOM', 'W-A', 'Lt1', 'osm', 'Daikin', 'Splite', 'Inverter', '06/01/2021', 'R410', '1pk', 'Indonesia', '', 'Rusak', '3 amper', '1 phasa', '1/4 - 1/2', '3,333', '220', 'eror pada pcb', 'original', 'Di tambahkan tanggal, 24/Jun/2021 oleh admin pukul 23:10', 'Di ubah tanggal, 24/Jun/2021  oleh Rinto Harahap pukul 23:43', 'rinto', '1624549411'),
(102, 'B1.02', 'GSD', 'W-B', 'Lt1', 'baruga', 'Daikin', 'Cassette', 'Inverter', '', 'R410', '2,5pk', 'Thailand', '', 'Normal', '12 amper', '1 phasa', '1/4 - 5/8', '', '220', NULL, 'original', 'Di tambahkan tanggal, 24/Jun/2021 oleh admin pukul 23:16', '', '', '1624547794'),
(103, 'A2.01', 'CC', 'W-A', 'Lt2', 'staff', 'Panasonic', 'Splite', 'Inverter', '06/01/2021', 'R410', '1pk', 'Jepang', '', 'Normal', '2 amper', '1 phasa', '1/4 - 1/2', '', '220', NULL, 'original', 'Di tambahkan tanggal, 24/Jun/2021 oleh admin pukul 23:26', 'Di ubah tanggal, 24/Jun/2021  oleh Rinto Harahap pukul 23:34', 'rinto,rahmat,andre', '1624548859'),
(104, 'D1.01', 'T.A', 'W-D', 'Lt1', 'ruang staff', 'Daikin', 'Splite', 'Standar', '', 'R410', '2pk', 'Thailand', '', 'Normal', '1 amper', '1 phasa', '1/4 - 5/8', '', '220', NULL, 'original', 'Di tambahkan tanggal, 24/Jun/2021 oleh admin pukul 23:36', '', '', '1624548998'),
(105, 'A1.02', 'TELKOM', 'W-A', 'Lt1', 'ruang staff', 'Daikin', 'Cassette', 'Inverter', '', 'R410', '2,5pk', 'Indonesia', '', 'Normal', '10 amper', '3 phasa', '1/4 - 5/8', '', '380', NULL, 'original', 'Di tambahkan tanggal, 24/Jun/2021 oleh admin pukul 23:39', '', '', '1624549140'),
(106, 'C1.01', 'TELKOM', 'W-C', 'Lt1', 'ruang staff', 'Daikin', 'Cassette', 'Inverter', '', 'R410', '3pk', 'Thailand', '', 'Normal', '10 amper', '3 phasa', '3/8 - 5/8', '9,900', '380', NULL, 'sudah di ganti dengan kompresor 1,5 pk merk panasonic r22', 'Di tambahkan tanggal, 24/Jun/2021 oleh admin pukul 23:52', '', '', '1624549924');

-- --------------------------------------------------------

--
-- Table structure for table `tb_apart`
--

CREATE TABLE `tb_apart` (
  `id` int(11) NOT NULL,
  `no_apart` varchar(100) NOT NULL,
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
  `catatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_cctv`
--

CREATE TABLE `tb_cctv` (
  `id` int(11) NOT NULL,
  `no_camera` varchar(255) NOT NULL,
  `wing` varchar(255) NOT NULL,
  `lantai` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `pwr_supplay` varchar(255) NOT NULL,
  `sensor_gambar` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `catatan` varchar(300) DEFAULT NULL,
  `tgl_pengadaan` varchar(255) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_charts`
--

CREATE TABLE `tb_charts` (
  `id` int(11) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_charts`
--

INSERT INTO `tb_charts` (`id`, `tahun`, `bulan`, `unit`) VALUES
(161, '2021', 'Januari', '3'),
(165, '2021', 'Februari', '3');

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
(24, 'Rinto Harahap', 'ryntooh@gmail.com', 15920011, 'avatar24.png', '$2y$10$f1rUv4I7XqVhX7Chln7tL..FxuhrNGUsit9lCMjzvO9CgvA.WYcSW', 'admin', 1, 'online', '25/Jun/2021 | 0:36', 1615117910),
(29, 'john doe', 'jhon@gmail.com', 15920001, 'default.png', '$2y$10$1R0IGvIHaWQmRsTjB9my5O/Z4K1bwDZxcomcdhR5942adEQfhZMQO', 'user', 1, 'offline', '24/Jun/2021 | 1:51', 1622520015);

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
-- Indexes for table `tb_cctv`
--
ALTER TABLE `tb_cctv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_charts`
--
ALTER TABLE `tb_charts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_daftar_barang`
--
ALTER TABLE `tb_daftar_barang`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `tb_apart`
--
ALTER TABLE `tb_apart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_cctv`
--
ALTER TABLE `tb_cctv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_charts`
--
ALTER TABLE `tb_charts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `tb_daftar_barang`
--
ALTER TABLE `tb_daftar_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
