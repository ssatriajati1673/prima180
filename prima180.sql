-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2025 at 12:14 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prima180`
--

-- --------------------------------------------------------

--
-- Table structure for table `csv_uploads`
--

CREATE TABLE `csv_uploads` (
  `id` int(11) NOT NULL,
  `triwulan` tinyint(1) NOT NULL,
  `tahun` year(4) NOT NULL,
  `NIP` char(9) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `HK` int(2) DEFAULT NULL,
  `HD` int(2) DEFAULT NULL,
  `TK` int(2) DEFAULT NULL,
  `TL` int(2) DEFAULT NULL,
  `TB` int(2) DEFAULT NULL,
  `PD` int(2) DEFAULT NULL,
  `DK` int(2) DEFAULT NULL,
  `KN` int(2) DEFAULT NULL,
  `PSW` int(2) DEFAULT NULL,
  `PSW1` int(2) DEFAULT NULL,
  `PSW2` int(2) DEFAULT NULL,
  `PSW3` int(2) DEFAULT NULL,
  `PSW4` int(2) DEFAULT NULL,
  `HT` int(2) DEFAULT NULL,
  `TL1` int(2) DEFAULT NULL,
  `TL2` int(2) DEFAULT NULL,
  `TL3` int(2) DEFAULT NULL,
  `TL4` int(2) DEFAULT NULL,
  `CB` int(2) DEFAULT NULL,
  `CL` int(2) DEFAULT NULL,
  `CM` int(2) DEFAULT NULL,
  `CP` int(2) DEFAULT NULL,
  `CS` int(2) DEFAULT NULL,
  `CT10` int(2) DEFAULT NULL,
  `CT11` int(2) DEFAULT NULL,
  `CT12` int(2) DEFAULT NULL,
  `CST1` int(2) DEFAULT NULL,
  `CST2` int(2) DEFAULT NULL,
  `KJK_HT` int(2) DEFAULT NULL,
  `KJK_PC` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `csv_uploads`
--

INSERT INTO `csv_uploads` (`id`, `triwulan`, `tahun`, `NIP`, `Nama`, `HK`, `HD`, `TK`, `TL`, `TB`, `PD`, `DK`, `KN`, `PSW`, `PSW1`, `PSW2`, `PSW3`, `PSW4`, `HT`, `TL1`, `TL2`, `TL3`, `TL4`, `CB`, `CL`, `CM`, `CP`, `CS`, `CT10`, `CT11`, `CT12`, `CST1`, `CST2`, `KJK_HT`, `KJK_PC`) VALUES
(101, 1, 2024, '340013722', 'Sukerik', 20, 5, 0, 0, 0, 7, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 4, 0, 0, 0, 0),
(102, 1, 2024, '340013723', 'Luprianto', 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(103, 1, 2024, '340017498', 'Andi Imanullah', 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(104, 1, 2024, '340018737', 'Adi Rosadi', 20, 19, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(105, 1, 2024, '340019697', 'Hardiyansah', 20, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0),
(106, 1, 2024, '340019741', 'Zulfikri', 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(107, 1, 2024, '340020400', 'Aidil Putra', 20, 13, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 0, 0, 3, 0),
(108, 1, 2024, '340020444', 'Sutri Apri Rahadi', 20, 17, 0, 0, 0, 2, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(109, 1, 2024, '340020561', 'Ony Kurniawan', 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(110, 1, 2024, '340054715', 'Ummi Suciati', 20, 10, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 4, 0, 0, 0, 0),
(111, 1, 2024, '340054720', 'Yetri Yudarni', 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(112, 1, 2024, '340056609', 'Hendra Gunawan', 20, 19, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(113, 1, 2024, '340056693', 'Pray Putra Hasianro Nadeak', 20, 0, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(114, 1, 2024, '340056925', 'Armula Pratama', 20, 13, 0, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(115, 1, 2024, '340059499', 'Eka Nurhidayati', 20, 13, 0, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(116, 1, 2024, '340060349', 'Wahyu Dwi Hayati', 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(117, 1, 2024, '340060904', 'Salim Satriajati', 20, 19, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(118, 1, 2024, '340062009', 'Rani Aprilia Putri', 20, 19, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(119, 1, 2024, '340062144', 'Dessy Kurniati', 20, 16, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(120, 1, 2024, '340062881', 'Muhammad Muammar', 20, 18, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(121, 2, 2024, '340013722', 'Sukerik', 20, 5, 0, 0, 0, 7, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 4, 0, 0, 0, 0),
(122, 2, 2024, '340013723', 'Luprianto', 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(123, 2, 2024, '340017498', 'Andi Imanullah', 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(124, 2, 2024, '340018737', 'Adi Rosadi', 20, 19, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(125, 2, 2024, '340019697', 'Hardiyansah', 20, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0),
(126, 2, 2024, '340019741', 'Zulfikri', 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(127, 2, 2024, '340020400', 'Aidil Putra', 20, 13, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, 0, 0, 3, 0),
(128, 2, 2024, '340020444', 'Sutri Apri Rahadi', 20, 17, 0, 0, 0, 2, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(129, 2, 2024, '340020561', 'Ony Kurniawan', 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(130, 2, 2024, '340054715', 'Ummi Suciati', 20, 10, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 4, 0, 0, 0, 0),
(131, 2, 2024, '340054720', 'Yetri Yudarni', 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(132, 2, 2024, '340056609', 'Hendra Gunawan', 20, 19, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(133, 2, 2024, '340056693', 'Pray Putra Hasianro Nadeak', 20, 0, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(134, 2, 2024, '340056925', 'Armula Pratama', 20, 13, 0, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(135, 2, 2024, '340059499', 'Eka Nurhidayati', 20, 13, 0, 0, 0, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(136, 2, 2024, '340060349', 'Wahyu Dwi Hayati', 20, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(137, 2, 2024, '340060904', 'Salim Satriajati', 20, 19, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(138, 2, 2024, '340062009', 'Rani Aprilia Putri', 20, 19, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0),
(139, 2, 2024, '340062144', 'Dessy Kurniati', 20, 16, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(140, 2, 2024, '340062881', 'Muhammad Muammar', 20, 18, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `jabatan`, `email`, `created_at`) VALUES
(1, 'Ahmad Fauzi', 'Staff IT', 'ahmad.fauzi@example.com', '2024-12-19 09:31:54'),
(2, 'Dewi Sartika', 'HRD', 'dewi.sartika@example.com', '2024-12-19 09:31:54'),
(3, 'Budi Setiawan', 'Manager', 'budi.setiawan@example.com', '2024-12-19 09:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `rekap_chart_final`
--

CREATE TABLE `rekap_chart_final` (
  `id` int(11) NOT NULL,
  `rekap_` decimal(15,2) NOT NULL,
  `chart_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` int(11) NOT NULL,
  `penilai_id` int(11) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `nilai_1` int(2) DEFAULT NULL,
  `nilai_2` int(2) DEFAULT NULL,
  `nilai_3` int(2) DEFAULT NULL,
  `nilai_4` int(2) DEFAULT NULL,
  `nilai_5` int(2) DEFAULT NULL,
  `nilai_6` int(2) DEFAULT NULL,
  `nilai_7` int(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `penilai_id`, `pegawai_id`, `nilai_1`, `nilai_2`, `nilai_3`, `nilai_4`, `nilai_5`, `nilai_6`, `nilai_7`, `created_at`) VALUES
(3, 17, 4, 10, 10, 10, 10, 10, 9, 10, '2024-12-19 11:58:34'),
(4, 17, 5, 9, 9, 8, 10, 8, 8, 8, '2024-12-19 11:59:50'),
(5, 17, 10, 8, 8, 7, 9, 10, 10, 10, '2024-12-19 12:02:26'),
(6, 17, 2, 10, 10, 10, 9, 10, 9, 10, '2024-12-19 12:11:47'),
(7, 8, 4, 10, 10, 10, 10, 10, 9, 10, '2024-12-20 05:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nip` varchar(9) DEFAULT NULL,
  `role` varchar(15) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id`, `username`, `password`, `nama`, `nip`, `role`, `created_at`) VALUES
(1, 'admin', 'admin', 'Administrator', NULL, 'Administrator', '2024-12-19 11:52:15'),
(2, 'sukerik', '123456', 'Sukerik', '340013722', 'Kepala BPS', '2024-12-19 11:52:15'),
(3, 'luprianto', '123456', 'Luprianto', '340013723', 'Pegawai', '2024-12-19 11:52:15'),
(4, 'andi_imanullah', '123456', 'Andi Imanullah', '340017498', 'Pegawai', '2024-12-19 11:52:15'),
(5, 'adi.rosadi', '123456', 'Adi Rosadi', '340018737', 'Pegawai', '2024-12-19 11:52:15'),
(6, 'hardifiz', '123456', 'Hardiyansah', '340019697', 'Pegawai', '2024-12-19 11:52:15'),
(7, 'zulfikri', '123456', 'Zulfikri', '340019741', 'Pegawai', '2024-12-19 11:52:15'),
(8, 'aidilputra', '123456', 'Aidil Putra', '340020400', 'Kasubbag Umum', '2024-12-19 11:52:15'),
(9, 'sutri', '123456', 'Sutri Apri Rahadi', '340020444', 'Pegawai', '2024-12-19 11:52:15'),
(10, 'ony', '123456', 'Ony Kurniawan', '340020561', 'Pegawai', '2024-12-19 11:52:15'),
(11, 'ummi.suciati', '123456', 'Ummi Suciati', '340054715', 'Pegawai', '2024-12-19 11:52:15'),
(12, 'yetri_yudarni', '123456', 'Yetri Yudarni', '340054720', 'Pegawai', '2024-12-19 11:52:15'),
(13, 'gunawan.hendra', '123456', 'Hendra Gunawan', '340056609', 'Pegawai', '2024-12-19 11:52:15'),
(14, 'armula', '123456', 'Armula Pratama', '340056925', 'Pegawai', '2024-12-19 11:52:15'),
(15, 'eka.nurhidayati', '123456', 'Eka Nurhidayati', '340059499', 'Pegawai', '2024-12-19 11:52:15'),
(16, 'dwi.hayati', '123456', 'Wahyu Dwi Hayati', '340060349', 'Pegawai', '2024-12-19 11:52:15'),
(17, 'salim.satriajati', '123456', 'Salim Satriajati', '340060904', 'Pegawai', '2024-12-19 11:52:15'),
(18, 'aprilrani', '123456', 'Rani Aprilia Putri', '340062009', 'Pegawai', '2024-12-19 11:52:15'),
(19, 'dessykurniati', '123456', 'Dessy Kurniati', '340062144', 'Pegawai', '2024-12-19 11:52:15'),
(20, 'muhmuammar-pppk', '123456', 'Muhammad Muammar', '340062881', 'Pegawai', '2024-12-19 11:52:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `csv_uploads`
--
ALTER TABLE `csv_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `rekap_chart_final`
--
ALTER TABLE `rekap_chart_final`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penilai_id` (`penilai_id`),
  ADD KEY `pegawai_id` (`pegawai_id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `csv_uploads`
--
ALTER TABLE `csv_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rekap_chart_final`
--
ALTER TABLE `rekap_chart_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `surveys`
--
ALTER TABLE `surveys`
  ADD CONSTRAINT `surveys_ibfk_1` FOREIGN KEY (`penilai_id`) REFERENCES `table_user` (`id`),
  ADD CONSTRAINT `surveys_ibfk_2` FOREIGN KEY (`pegawai_id`) REFERENCES `table_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
