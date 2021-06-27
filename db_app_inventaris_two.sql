-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 03:54 PM
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
(101, 'A1.01', 'TELKOM', 'W-A', 'Lt1', 'osm', 'Daikin', 'Splite', 'Inverter', '06/01/2021', 'R410', '1pk', 'Malaysia', '', 'Normal', '3 amper', '1 phasa', '1/4 - 1/2', '3,333', '220', NULL, 'original', 'Di tambahkan tanggal, 24/Jun/2021 oleh admin pukul 23:10', 'Di ubah tanggal, 27/Jun/2021  oleh Rinto Harahap pukul 17:23', 'rinto', '1624785839'),
(102, 'B1.02', 'GSD', 'W-B', 'Lt1', 'baruga', 'Daikin', 'Cassette', 'Inverter', '', 'R410', '2,5pk', 'Thailand', '', 'Normal', '12 amper', '1 phasa', '1/4 - 5/8', '', '220', NULL, 'original', 'Di tambahkan tanggal, 24/Jun/2021 oleh admin pukul 23:16', '', '', '1624547794'),
(103, 'A2.01', 'CC', 'W-A', 'Lt2', 'staff', 'Panasonic', 'Splite', 'Inverter', '06/01/2021', 'R410', '1pk', 'Jepang', '', 'Normal', '2 amper', '1 phasa', '1/4 - 1/2', '', '220', NULL, 'original', 'Di tambahkan tanggal, 24/Jun/2021 oleh admin pukul 23:26', 'Di ubah tanggal, 24/Jun/2021  oleh Rinto Harahap pukul 23:34', 'rinto,rahmat,andre', '1624548859'),
(104, 'D1.01', 'T.A', 'W-D', 'Lt1', 'ruang staff', 'Daikin', 'Splite', 'Standar', '', 'R410', '2pk', 'Thailand', '', 'Normal', '1 amper', '1 phasa', '1/4 - 5/8', '', '220', NULL, 'original', 'Di tambahkan tanggal, 24/Jun/2021 oleh admin pukul 23:36', '', '', '1624548998'),
(105, 'A1.02', 'TELKOM', 'W-A', 'Lt1', 'ruang staff', 'Daikin', 'Cassette', 'Inverter', '01/01/2020', 'R410', '2,5pk', 'Indonesia', '01/01/2021 - 04/01/2021', 'Normal', '10 amper', '3 phasa', '1/4 - 5/8', '9,000', '380', NULL, 'sudah di ganti dengan compresor 1pk r32', 'Di tambahkan tanggal, 24/Jun/2021 oleh admin pukul 23:39', 'Di ubah tanggal, 27/Jun/2021  oleh Rinto Harahap pukul 17:14', 'vendor', '1624785255'),
(106, 'C1.01', 'TELKOM', 'W-C', 'Lt1', 'ruang staff', 'Daikin', 'Cassette', 'Inverter', '', 'R410', '3pk', 'Thailand', '', 'Normal', '10 amper', '3 phasa', '3/8 - 5/8', '9,900', '380', NULL, 'sudah di ganti dengan kompresor 1,5 pk merk panasonic r22', 'Di tambahkan tanggal, 24/Jun/2021 oleh admin pukul 23:52', '', '', '1624549924'),
(107, 'A1.03', 'TELKOM', 'W-A', 'Lt1', 'staff', 'Daikin', 'Cassette', 'Inverter', '', 'R410', '2,5pk', 'Thailand', '', 'Rusak', '3 amper', '1 phasa', '1/4 - 5/8', '', '220', 'A3 dan kompresor over heat', 'original', 'Di tambahkan tanggal, 25/Jun/2021 oleh admin pukul 21:16', '', '', '1624626983'),
(108, 'A1.04', '', 'W-A', 'Lt1', 'staff', 'Panasonic', 'Cassette', 'Inverter', '', 'R410', '1,5pk', '', '', 'Normal', '', '1 phasa', '', '', '220', NULL, '', 'Di tambahkan tanggal, 25/Jun/2021 oleh admin pukul 22:31', 'Di ubah tanggal, 26/Jun/2021  oleh Rinto Harahap pukul 0:21', '', '1624638094');

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

--
-- Dumping data for table `tb_apart`
--

INSERT INTO `tb_apart` (`id`, `no_apart`, `wing`, `lantai`, `lokasi`, `merk`, `jenis`, `berat`, `tgl_expired`, `tgl_pengadaan`, `status`, `created_by`, `updated_by`, `created_at`, `catatan`) VALUES
(23, '01', 'W-A', 'Lt1', 'area toilet', 'Chubb', 'Powder', '3 kg', '2021-06-01', '2021-06-03', 'Normal', 'Di tambahkan tanggal, 25/Jun/2021 oleh admin pukul 21:06', '', 1624626407, NULL);

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

--
-- Dumping data for table `tb_cctv`
--

INSERT INTO `tb_cctv` (`id`, `no_camera`, `wing`, `lantai`, `lokasi`, `merk`, `jenis`, `pwr_supplay`, `sensor_gambar`, `status`, `catatan`, `tgl_pengadaan`, `created_by`, `updated_by`, `created_at`) VALUES
(7, '01', 'W-A', 'Lt1', 'jalan menuju salemba', 'Hikvision', 'Analog', '12VDC', '2MP', 'Normal', NULL, '2021-06-01', 'Di tambahkan tanggal, 25/Jun/2021 oleh admin pukul 20:57', '', 1624625869);

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
(166, '2021', 'Januari', '6'),
(167, '2021', 'Februari', '2');

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
(41, 'bor', NULL, 'bosch', '2021-05-31', 'normal', '900 watt', '4kg', 'Di ubah tanggal, 25/Jun/2021  oleh Rinto Harahap pukul 21:02', 'Di tambahkan tanggal, 25/Jun/2021 oleh admin pukul 20:48', '1624626166');

-- --------------------------------------------------------

--
-- Table structure for table `tb_daikin_kode`
--

CREATE TABLE `tb_daikin_kode` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `fault` varchar(300) NOT NULL,
  `cause` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_daikin_kode`
--

INSERT INTO `tb_daikin_kode` (`id`, `code`, `fault`, `cause`) VALUES
(19, 'A0', 'Perangkat perlindungan eksternal diaktifkan', 'Perangkat perlindungan eksternal yang terhubung ke strip terminal T1-T2 unit dalam-ruang diaktifkan'),
(20, 'A1', 'Kerusakan unit dalam ruangan PCB', 'Kerusakan karena kebisingan,PCB unit indoor mengalami kerusakan'),
(21, 'A3', 'Kerusakan sistem kontrol level saluran', 'Penyumbatan pipa pembuangan, pekerjaan pipa pembuangan yang tidak tepat,pompa pembuangan rusak,sakelar pelampung rusak'),
(22, 'A4', 'Kerusakan perlindungan pembekuan', 'Kekurangan volume air Pengaturan suhu air rendah Cacat 26WL Cacat termistor suhu air'),
(23, 'A5', 'Tekanan tinggi kontrol dalam pemanasan,perlindungan pembekuankontrol dalam pendinginan', 'Filter udara unit dalam ruangan tersumbat dan korsleting Cacat termistor penukar panas unit dalam ruangan'),
(24, 'A6', 'Motor kipas terkunci, kelebihan beban, arus lebih', 'Cacat kontak konektor Cacat unit dalam ruangan PCB Cacat motor kipas'),
(25, 'A7', 'Kerusakan motor penutup ayun', 'Kegagalan motor penutup ayun Cacat unit dalam-ruangan Mekanisme ayun/bilah PCB macet'),
(26, 'A8', 'Kerusakan catu daya', 'Arus lebih dari input AC\r\nCacat tegangan catu daya'),
(27, 'A9', 'Kerusakan penggerak katup ekspansi elektronik', 'Koil katup ekspansi elektronik rusak,PCB dalam ruangan rusak,konektor kontak rusak'),
(28, 'AA', 'Pemanas terlalu panas', '26WH diaktifkan'),
(29, 'AF', 'Kerusakan sistem pelembab udara', 'Kebocoran air humidifier,kegagalan sakelar pelampung ayun Kemiringan pipa pembuangan yang tidak benar'),
(30, 'AH', 'Kerusakan pengumpul debu pembersih udara', 'Cacat elemen pengumpul debu,cacat unit catu daya tegangan tinggi,bagian isolator bernoda dan cacat unit dalam ruangan PCB'),
(31, 'AJ', 'Kerusakan pengaturan kapasitas (PCB unit dalam ruangan)', 'Adaptor pengaturan kapasitas tidak dipasang saat mengganti PCB,cacat unit dalam ruangan PCB'),
(32, 'C1', 'Kegagalan transmisi (antara PCB unit dalam ruangan dan PCB kipas)', 'Cacat transmisi driver kontrol motor kipas'),
(33, 'C4', 'Kerusakan termistor pipa cair untuk penukar panas', 'Rusak kontak konektor,rusak termistor pipa cair untuk penukar panas'),
(34, 'C5', 'Kerusakan termistor pipa gas untuk penukar panas', 'Cacat kontak konektor,rusak termistor pipa gas untuk penukar panas'),
(35, 'C6', 'Kerusakan driver kontrol motor kipas', 'Rusak sistem sensor motor kipas,rusak driver kontrol motor kipas'),
(36, 'C7', 'Kesalahan motor penggerak panel depan', 'Rusak motor penggerak panel depan,rusak sakelar batas'),
(37, 'C9', 'Kerusakan termistor udara hisap', 'Rusak kontak konektor,rusak termistor untuk udara hisap'),
(38, 'CA', 'Kerusakan termistor udara pelepasan', 'Rusak kontak konektor,rusaktermistor untuk pembuangan udara'),
(39, 'CC', 'Kerusakan sistem sensor kelembaban', 'Rusak kontak konektor,rusak sensor kelembaban'),
(40, 'CJ', 'Kerusakan sensor termostat di remote kontrol', 'Rusak termistor pengendali jarak jauh,kerusakan akibat kebisingan,rusak PCB pengendali jarak jauh'),
(41, 'E0', 'Perlindungan perangkat diaktifkan', 'Perangkat perlindungan terhubung ke PCB luar ruangan yang digerakkan,rusak kontak konektor perangkat perlindungan'),
(42, 'E1', 'PCB unit luar rusak', 'Kerusakan karena kebisingan,cacat unit luar PCB'),
(43, 'E3', 'Aktuasi sakelar tekanan tinggi', 'Penukar panas unit luar yang kotor dan filter hisap,rusak HPS(High Pressure Switch),Pipa pendingin tersumbat,rusak kontak konektor');

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
(32, 'rinto harahap', 'engineering@gmail.com', 15920011, 'default.png', '$2y$10$hbnEhSQmMaTXjkQPMp2aT.bjze8bbPCR3vAdgtu3TTJVGhZ5zlhvy', 'super admin', 1, 'online', '27/Jun/2021 | 21:46', 1624793799),
(33, 'john doe', 'engineering@gmail.com', 15920001, 'avatar41.png', '$2y$10$be3jsnIrmkPFIGQdjOJrc.C05YbybjX6UVs190Q7A5B1CP73SuRSW', 'admin', 1, 'offline', '27/Jun/2021 | 21:22', 1624795623),
(35, 'coding', 'engineering@gmail.com', 15920002, 'avatar61.png', '$2y$10$XkFj7UVyUq.akMzPEad6u...7STjQIJLlkAS6/9d9ulYlcgYF7xn.', 'user', 1, 'offline', '27/Jun/2021 | 21:29', 1624797495);

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
-- Indexes for table `tb_daikin_kode`
--
ALTER TABLE `tb_daikin_kode`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `tb_apart`
--
ALTER TABLE `tb_apart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_cctv`
--
ALTER TABLE `tb_cctv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_charts`
--
ALTER TABLE `tb_charts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `tb_daftar_barang`
--
ALTER TABLE `tb_daftar_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tb_daikin_kode`
--
ALTER TABLE `tb_daikin_kode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
