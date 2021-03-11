-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Mar 2021 pada 18.50
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

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
-- Struktur dari tabel `tb_ac`
--

CREATE TABLE `tb_ac` (
  `id` int(11) NOT NULL,
  `wing` varchar(100) NOT NULL,
  `lantai` varchar(100) NOT NULL,
  `ruangan` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `tgl_pemasangan` varchar(255) NOT NULL,
  `refrigerant` varchar(100) NOT NULL,
  `kapasitas` varchar(100) NOT NULL,
  `negara_pembuat` varchar(100) NOT NULL,
  `tgl_maintenance` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL,
  `jenis_kerusakan` varchar(300) DEFAULT NULL,
  `updated` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ac`
--

INSERT INTO `tb_ac` (`id`, `wing`, `lantai`, `ruangan`, `merk`, `type`, `jenis`, `tgl_pemasangan`, `refrigerant`, `kapasitas`, `negara_pembuat`, `tgl_maintenance`, `status`, `jenis_kerusakan`, `updated`) VALUES
(14, 'W-B', 'Lt1', 'osm', 'Daikin', 'Cassette', 'Inverter', '01/01/2015', 'R22', '1pk', 'Thailand', '01/01/2021 - 05/14/2021', 'Normal', NULL, 1615397677),
(15, 'W-D', 'Lt2', 'ruang staff', 'Panasonic', 'Portable', 'Standar', '01/01/2012', 'R22', '3pk', 'Jepang', '08/01/2012 - 02/18/2016', 'Rusak', 'kompresor rusak', 1615399440);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ac_details`
--

CREATE TABLE `tb_ac_details` (
  `id` int(11) NOT NULL,
  `no` int(100) NOT NULL,
  `amper` varchar(100) NOT NULL,
  `arus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ac_details`
--

INSERT INTO `tb_ac_details` (`id`, `no`, `amper`, `arus`) VALUES
(1, 30, '4 amper', '220 volt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
  `created_at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nik`, `image`, `password`, `role`, `is_active`, `created_at`) VALUES
(24, 'Rinto Harahap', 'engineering@gmail.com', 15920011, 'default.png', '$2y$10$ti.4imTN2a9EBA6OmOTfMukK0xNypXaYI8ihQp0StPYopbkNAsgcq', 'admin', 1, 1615117910),
(25, 'daeng', 'engineering@gmail.com', 15920001, 'default.png', '$2y$10$vUEqHDGVZ0i/92v8pT8EqOYioQW.9nEN9PczqWA/K1Zjz0vQ0kDNe', 'user', 1, 1615118970),
(26, 'Harahap', 'engineering@gmail.com', 15920002, 'default.png', '$2y$10$Zh4dlI58FUitTBfkFic3f.H.l/SVIDYslgYqErazMJGLtHNQH56i.', 'user', 0, 1615399140);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_ac`
--
ALTER TABLE `tb_ac`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ac_details`
--
ALTER TABLE `tb_ac_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_ac`
--
ALTER TABLE `tb_ac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_ac_details`
--
ALTER TABLE `tb_ac_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
