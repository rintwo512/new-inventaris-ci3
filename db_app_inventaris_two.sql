-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2021 at 07:17 PM
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
(113, 'A1.01', 'GSD', 'W-A', 'Lt1', 'staff', 'Daikin', 'Splite', 'Inverter', '01/01/2015', 'R410', '1pk', 'Jepang', '04/01/2021', 'Normal', '3,2', '1 phasa', '1/4 - 3/8', '', '220', NULL, 'ori', 'Di tambahkan tanggal, 08/Aug/2021 oleh super admin pukul 5:22', 'Di ubah tanggal, 09/Aug/2021  oleh rinto pukul 1:08', 'vendor', '1628442528'),
(114, 'FDS', 'DSD', 'W-B', 'Lt1', 'staff', 'Daikin', 'Sentral', 'Inverter', '08/03/2020', 'R410', '8pk', 'Jepang', '', 'Rusak', '432', '1 phasa', '1/4 - 3/8', '', '220', 'A4', 'ori', 'Di tambahkan tanggal, 08/Aug/2021 oleh super admin pukul 5:30', 'Di ubah tanggal, 09/Aug/2021  oleh john doe pukul 0:52', '', '1628441532'),
(117, 'SFF', 'TA', 'W-B', 'Lt1', 'staff', 'Panasonic', 'Sentral', 'Standar', '08/01/2010', 'R22', '8pk', 'Jepang', '08/01/2021', 'Normal', 'sa', '1 phasa', '', '', '220', NULL, '', 'Di tambahkan tanggal, 08/Aug/2021 oleh super admin pukul 22:47', 'Di ubah tanggal, 08/Aug/2021  oleh rinto pukul 22:53', '', '1628434429');

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
(183, '2021', 'Januari', '5'),
(184, '2021', 'Februari', '4');

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
(41, 'bor', 'hilang', 'bosch', '2021-05-31', 'hilang', '900 watt', '4kg', 'Di ubah tanggal, 11/Jul/2021  oleh rinto pukul 1:37', 'Di tambahkan tanggal, 25/Jun/2021 oleh admin pukul 20:48', '1625938626');

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
(44, 'E3', 'Aktuasi High Pressure Switch(HPS)', 'Penukar panas unit outdoor yang kotor dan filter hisap,cacat High Pressure Switch (HPS),pipa pendingin tersumbat,cacat konektor kontak'),
(45, 'E4', 'Aktuasi Low Pressure Switch(LPS)', 'Pipa refrigeran tersumbat,kekurangan gas,cacat konektor penghubung,cacat PCB unit outdoor'),
(46, 'E5', 'Kompresor inventer terlalu panas', 'Kekurangan jumlah refrigeran,cacat konektor kontak,kobocoran katup 4 arah'),
(47, 'E5', 'Motor kompresor inventer terkunci', 'Kabel kompresor inventer salah'),
(48, 'E6', 'Motor kompresor STD arus lebih/terkunci', 'Motor kompresor STD katup berhenti tertutup'),
(49, 'E6', 'Motor kompresor kelebihan arus', 'Cacat katup ekspansi,cacat motor kompresor,kekurangan jumlah refrigeran'),
(50, 'E7', 'Kerusakan motor kipas unit outdoor', 'Kontak yang salah dari konektor motor kipas,cacat motor kipas,cacat driver motor kipas'),
(51, 'E8', 'Arus lebih dari motor kompresor inventer', 'Cacat kompresor,cacat PCB pada unit outdoor,cacat kapasitor sirkuit utama inventer,cacat transistor daya'),
(52, 'E9', 'Kerusakan koil katup ekspansi elektronik', 'Cacat katup ekspansi elektronik,cacat kontak konektor,cacat PCB pada unit outdoor'),
(53, 'EA', 'Kerusakan katup 4 arah', 'Cacat katup 4 arah,cacat PCB unit outdoor,kekurangan gas,cacat termistor'),
(54, 'EC', 'Kerusakan memasuki suhu air', 'Kerusakan suhu air pendingin,cacat termistor,cacat PCB pada unit outdoor'),
(55, 'EF', 'Kerusakan unit penyimpanan termal', 'Cacat katup ekspansi elektronik unit penyimpanan termal,cacat PCB penyimpanan termal'),
(56, 'F3', 'Kerusakan suhu pipa pembuangan', 'Kekurangan gas,cacat kontak konektor,pipa refrigeran tersumbat,cacat termistor pipa pembuangan'),
(57, 'F6', 'Tekanan tinggi yang tidak normal dalam pendinginan\r\n\r\n', 'Cacat motor kipas unit outdoor,cacat katup ekspansi elektronik,cacat termistor penukar panas,cacat PCB unit outdoor'),
(58, 'F6', ' Kelebihan refrigeran', 'Kelebihan refrigeran,pemutusan termsitor penukar panas,pemutusan termsitor udara luar,pemutusan termistor pipa cair'),
(59, 'H0', 'Kerusakan system sensor kompresor', 'Harness terputus atau koneksi rusak,cacat PCB'),
(60, 'H1', 'Kerusakan peredam unit pelembab udara', 'Cacat saklar batas,cacat peredam'),
(61, 'H3', 'Kerusakan High Pressure Switch(HPS)', 'Cacat High Pressure Switch(HPS),kabel putus,cacat kontak konektor,cacat PCB unit outdoor'),
(62, 'H4', ' Kerusakan Low Pressure Switch(LPS)', 'Cacat  Low Pressure Switch(LPS),kabel putus,cacat kontak konektor,cacat PCB unit outdoor'),
(63, 'H5', 'Kerusakan termistor kelebihan beban motor kompresor', 'Cacat konektor kontak,cacat termistor kelebiahan beban pada motor kompresor'),
(64, 'H6', 'Kerusakan sensor deteksi posisi', 'Kontak kompresor atau kabel yang salah,cacat kompresor,cacat PCB unit outdoor'),
(65, 'H7', 'Kerusakan sinyal motor kipas luar ruangan', 'Kontak yang salah dari kabel kipas,cacat driver motor kipas,cacat motor kipas'),
(66, 'H8', 'Kerusakan sistem input kompresor (CT)', 'Cacat transistor daya,cacat reaktor,kabel sistem inverter rusak,cacat PCB unit outdoor'),
(67, 'H9', 'Kerusakan termistor udara luar ruangan', 'Cacat kontak konektor,cacat termistor untuk udara luar'),
(68, 'HC', 'Kerusakan termistor suhu air (panas)', 'Cacat kontak konektor,cacat PCB unit outdoor,cacat termistor untuk suhu air'),
(69, 'HF', 'Alarm di unit penyimpanan termal dengan es', 'Grup penyimpanan termal kabel rusak,cacat pengaturan,kelebihan nomor tangki penyimpanan termal'),
(70, 'HJ', 'Kerusakan level air tangki penyimpanan termal', 'Ketinggian air rendah,cacat pengaturan sakelar,kegagalan sensor pendeteksi ketinggian air,cacat kontak konektor'),
(71, 'J1', 'Kerusakan sensor tekanan', 'Cacat kontak konektor sensor tekanan,cacat sensor tekanan,cacat PCB unit outdoor'),
(72, 'J2', 'Kerusakan sensor arus kompresor', 'Cacat sensor arus,cacat PCB unit outdoor,cacat kompresor'),
(73, 'J3', 'Kerusakan termistor pipa pembuangan', 'Cacat kontak konektor,cacat PCB unit outdoor,cacat termistor pipa pembuangan'),
(74, 'J4', 'Kerusakan sistem sensor suhu jenuh setara tekanan rendah', 'Cacat kontak konektor,cacat termistor,cacat  PCB unit outdoor (Multi-split, Super-multi)'),
(75, 'J5', 'Kerusakan termistor pipa hisap', 'Cacat kontak konektor,cacat PCB unit outdoor,cacat termistor pipa hisap'),
(76, 'J6', 'Kerusakan termistor penukar panas', 'Cacat kontak konektor,cacat PCB unit outdoor,cacat termistor penukar panas'),
(77, 'J7', 'Kerusakan termistor pipa cair (sirkuit pendingin dan lain-lain)', 'Cacat kontak konektor,cacat PCB unit outdoor,cacat termistor pipa cair'),
(78, 'J8', 'Kerusakan termistor pipa cair (sirkuit pendingin dan lain-lain)', 'Cacat kontak konektor,cacat PCB unit outdoor,cacat termistor pipa cair'),
(79, 'J9', 'Kerusakan termistor pipa gas (sirkuit Refrigeran dan lain-lain)', 'Cacat kontak konektor,cacat PCB unit outdoor,cacat termistor pipa gas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_elektronik`
--

CREATE TABLE `tb_elektronik` (
  `id` int(11) NOT NULL,
  `aset` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `wing` varchar(255) NOT NULL,
  `lantai` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tegangan` varchar(255) NOT NULL,
  `watt` varchar(255) NOT NULL,
  `catatan` varchar(300) NOT NULL,
  `created_by` varchar(300) NOT NULL,
  `updated_by` varchar(300) NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_elektronik`
--

INSERT INTO `tb_elektronik` (`id`, `aset`, `nama`, `merk`, `wing`, `lantai`, `lokasi`, `tegangan`, `watt`, `catatan`, `created_by`, `updated_by`, `created_at`) VALUES
(6, 'TELKOM', 'kompor listrik', 'miyako', 'W-C', 'Lt2', 'pantry', '220 Volt', '450 watt', 'sudah tidak di gunakan', 'Di tambahkan tanggal, 29/Jun/2021 oleh super admin pukul 23:53', 'Di ubah tanggal, 30/Jun/2021  oleh rinto harahap pukul 1:20', 1624982016);

-- --------------------------------------------------------

--
-- Table structure for table `tb_panasonic_kode`
--

CREATE TABLE `tb_panasonic_kode` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `kerusakan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_panasonic_kode`
--

INSERT INTO `tb_panasonic_kode` (`id`, `kode`, `kerusakan`) VALUES
(12, 'F11', 'kegagalan katup pembalik (katup pembalik rusak, koil atau PCB unit outdoor)'),
(13, 'F17', 'Kebocoran katup ekspansi'),
(14, 'F90', 'kegagalan pfc (masalah dengan inverter atau kompresor)'),
(15, 'F91', 'masalah siklus refrigeran (gas rendah atau penyumbatan)'),
(16, 'F93', 'kompresor revolusi abnormal (kompresor berjalan salah)'),
(17, 'F95', 'koil luar lebih panas [mode dingin] (koil kondensor kotor, gas rendah atau penyumbatan)'),
(18, 'F96', 'ipm atau kompresor terlalu panas (biaya gas berlebih atau rendah atau penukar panas kotor)'),
(19, 'F97', 'debit tinggi / suhu kompresor (biaya gas rendah atau kompresor gagal)'),
(20, 'F98', 'lebih dari perlindungan saat ini (masalah penukar panas luar ruangan. kelebihan gas)'),
(21, 'F99', 'Perlindungan arus lebih DC (pcb unit outdoor, transistor daya atau kegagalan kompresor)'),
(22, 'H11', 'Kegagalan komunikasi (kabel rusak atau masalah lain dengan komunikasi Id/OD)'),
(23, 'H12', 'Masalah kompatibilitas ID/OD (di atas atau di bawah multi sistem yang diindeks)'),
(24, 'H14', 'sensor udara dalam ruangan rusak (sensor terputus, rusak atau kontak kotor)'),
(25, 'H15', 'Sensor kompresor rusak (sensor terputus, rusak atau kontak kotor)'),
(26, 'H16', 'masalah transformator saat ini (modul transisitor daya atau PCB unit outdoor rusak, atau gas rendah)'),
(27, 'H19', 'motor kipas dalam ruangan terkunci (motor kipas dalam kegagalan PCB unit indoor)'),
(28, 'H21', 'float switch dioperasikan (cek drainase)'),
(29, 'H23', 'sensor pipa dalam ruangan rusak (sensor terputus, rusak atau kontak kotor)'),
(30, 'H27', 'sensor udara luar rusak (sensor terputus, rusak atau kontak kotor)'),
(31, 'H28', 'sensor pipa luar rusak (sensor terputus, rusak atau kontak kotor)'),
(32, 'H30', 'sensor pelepasan luar 1 rusak (sensor terputus, rusak atau kontak kotor)'),
(33, 'H32', 'sensor pelepasan luar ruangan 2 rusak (sensor terputus, rusak atau kontak kotor)'),
(34, 'H33', 'tegangan koneksi yang salah (kabel indoor atau outdoor ruangan yang salah atau rusak)'),
(35, 'H34', 'sensor heatsink luar rusak (sensor terputus, rusak atau kontak kotor)'),
(36, 'H36', 'sensor gas outdor rusak (sensor terputus, rusak atau kontak kotor)'),
(37, 'H37', 'sensor cairan outdoor rusak (sensor terputus, rusak atau kontak kotor)'),
(38, 'H39', 'operasi abnormal indoor (perpipaan salah atau masalah katup ekspansi)'),
(39, 'H41', 'perkabelan atau perpipaan abnormal (pengkabelan atau perpipaan bersilangan pada sistem kembar)'),
(40, 'H97', 'kegagalan kipas outdoor (motor kipas outdoor atau kegagalan PCB)'),
(41, 'H98', 'koil indoor terlalu panas [mode panas] (filter kotor koil indoor suhu kamar sangat tinggi)'),
(42, 'H99', 'de-es koil indoor [mode dingin] (filter kotor koil indoor. muatan gas rendah atau suhu lingkungan rendah)');

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
(32, 'rinto', 'ryntooh@example.com', 15920011, 'rinto3.jpg', '$2y$10$/wcHjFcHESqkpQnfWy.iSOKZ1FkHcvA/qdzJqxnEcqarKme0B99hO', 'super admin', 1, 'offline', '2021-08-09 01:16:54', 1624793799),
(33, 'john doe', 'engineering@gmail.com', 15920001, 'avatar41.png', '$2y$10$be3jsnIrmkPFIGQdjOJrc.C05YbybjX6UVs190Q7A5B1CP73SuRSW', 'admin', 1, 'offline', '2021-08-09 00:57:11', 1624795623),
(35, 'coding', 'engineering@gmail.com', 15920002, 'avatar61.png', '$2y$10$XkFj7UVyUq.akMzPEad6u...7STjQIJLlkAS6/9d9ulYlcgYF7xn.', 'user', 1, 'offline', '2021-08-07 05:30:51', 1624797495),
(38, 'jhen doe', 'engineering@gmail.com', 15920003, 'default.png', '$2y$10$MNHrIjMK/x94wB./cCPQ/OWqF1advlN9orkS66fjL2jAWNgdw1wL.', 'user', 1, 'offline', '2021-08-09 00:47:41', 1628437704);

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
-- Indexes for table `tb_elektronik`
--
ALTER TABLE `tb_elektronik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_panasonic_kode`
--
ALTER TABLE `tb_panasonic_kode`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `tb_daftar_barang`
--
ALTER TABLE `tb_daftar_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tb_daikin_kode`
--
ALTER TABLE `tb_daikin_kode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `tb_elektronik`
--
ALTER TABLE `tb_elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_panasonic_kode`
--
ALTER TABLE `tb_panasonic_kode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
