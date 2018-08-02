-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 07:49 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umroh`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `kode_berkas` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`kode_berkas`, `nama`) VALUES
('berkas001', 'Kartu Tanda Penduduk'),
('berkas002', 'Kartu Keluarga'),
('berkas003', 'Passport'),
('berkas004', 'Bukti Pembayaran');

-- --------------------------------------------------------

--
-- Table structure for table `berkas_upload`
--

CREATE TABLE `berkas_upload` (
  `kode_upload` int(11) NOT NULL,
  `kode_berkas` varchar(20) NOT NULL,
  `kode_pendaftaran` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas_upload`
--

INSERT INTO `berkas_upload` (`kode_upload`, `kode_berkas`, `kode_pendaftaran`, `nama_file`) VALUES
(18, 'berkas001', 11, 'back-to-school.jpg'),
(19, 'berkas002', 11, 'banner_iklan.png'),
(20, 'berkas003', 11, 'bisnis-online.jpg'),
(21, 'berkas001', 12, 'back-to-school1.jpg'),
(22, 'berkas002', 12, 'sancu-frozen.jpg'),
(23, 'berkas003', 12, 'logo.jpg'),
(24, 'berkas001', 16, 'trunade1.png'),
(25, 'berkas001', 16, 'trunade11.png'),
(26, 'berkas001', 16, 'trunade11.png'),
(27, 'berkas002', 16, 'tsunade21.jpeg'),
(28, 'berkas001', 16, 'trunade13.png'),
(29, 'berkas002', 16, 'tsunade22.jpeg'),
(30, 'berkas001', 16, 'trunade15.png'),
(31, 'berkas002', 16, 'tsunade23.jpeg'),
(32, 'berkas001', 16, 'trunade1.png'),
(33, 'berkas002', 16, 'tsunade2.jpeg'),
(34, 'berkas001', 16, 'trunade1.png'),
(35, 'berkas002', 16, 'tsunade2.jpeg'),
(36, 'berkas003', 16, 'tsunade3.jpg'),
(37, 'berkas001', 16, 'trunade11.png'),
(38, 'berkas002', 16, 'tsunade21.jpeg'),
(39, 'berkas001', 16, 'trunade12.png'),
(40, 'berkas002', 16, 'tsunade22.jpeg'),
(41, 'berkas003', 16, 'tsunade31.jpg'),
(42, 'berkas001', 16, 'trunade1.png'),
(43, 'berkas002', 16, 'tsunade2.jpeg'),
(44, 'berkas003', 16, 'tsunade3.jpg'),
(45, 'berkas001', 16, 'trunade1.png'),
(46, 'berkas002', 16, 'tsunade2.jpeg'),
(47, 'berkas003', 16, 'tsunade3.jpg'),
(48, 'berkas001', 15, 'jiraiya2.jpg'),
(49, 'berkas002', 15, 'jiraiya3.jpg'),
(50, 'berkas003', 15, 'jiraiya31.jpg'),
(51, 'berkas001', 18, 'tobirama11.jpg'),
(52, 'berkas002', 18, 'tobirama2.png'),
(53, 'berkas003', 18, 'tobirama3.jpg'),
(54, 'berkas001', 20, 'back-to-school2.jpg'),
(55, 'berkas002', 20, 'jiraiya32.jpg'),
(56, 'berkas003', 20, 'kakashi3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_keberangkatan`
--

CREATE TABLE `jadwal_keberangkatan` (
  `kode_jadwal_keberangkatan` int(11) NOT NULL,
  `kode_pendaftaran` int(11) NOT NULL,
  `tanggal_berangkat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_keberangkatan`
--

INSERT INTO `jadwal_keberangkatan` (`kode_jadwal_keberangkatan`, `kode_pendaftaran`, `tanggal_berangkat`) VALUES
(1, 20, '2018-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `jamaah`
--

CREATE TABLE `jamaah` (
  `username` varchar(100) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `namaayah` varchar(255) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tanggallahir` date NOT NULL,
  `kelamin` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(5) NOT NULL,
  `alamat` text NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `kodepos` varchar(10) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `pengalamanhaji` varchar(30) DEFAULT NULL,
  `namamahram` varchar(255) DEFAULT NULL,
  `hubunganmahram` varchar(20) DEFAULT '-',
  `nomorpendaftarmahram` varchar(40) DEFAULT NULL,
  `golongandarah` varchar(10) NOT NULL,
  `rambut` varchar(255) NOT NULL,
  `alis` varchar(255) NOT NULL,
  `hidung` varchar(255) NOT NULL,
  `tinggi` varchar(255) NOT NULL,
  `berat` varchar(255) NOT NULL,
  `muka` varchar(255) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jamaah`
--

INSERT INTO `jamaah` (`username`, `ktp`, `nama`, `namaayah`, `tempatlahir`, `tanggallahir`, `kelamin`, `kewarganegaraan`, `alamat`, `kelurahan`, `kecamatan`, `kabupaten`, `propinsi`, `kodepos`, `telepon`, `hp`, `pendidikan`, `pekerjaan`, `pengalamanhaji`, `namamahram`, `hubunganmahram`, `nomorpendaftarmahram`, `golongandarah`, `rambut`, `alis`, `hidung`, `tinggi`, `berat`, `muka`, `foto`) VALUES
('mal', '11111111111111111111', 'Tsunade', 'Hashirama Senjuu', 'konoha', '2018-07-02', 'Laki-laki', 'WNI', 'JALAN KELAPA DUA WETAN III NO 29', 'Kelapa dua wetan', '13730', 'jakarta timur', 'Indonesia — DKI Jakarta', '', '+622187704765', '+622187704765', 'S3', 'Swasta', NULL, NULL, NULL, NULL, 'o', 'jabrik', 'Tebal', 'Mancung', '180', '80', 'Tampan', ''),
('mal', '12000000000000000000', 'Tobirama Senju', 'Senju', 'konoha', '2018-07-27', 'Laki-laki', 'WNI', 'JALAN KELAPA DUA WETAN III NO 29', 'Kelapa dua wetan', '13730', 'jakarta timur', 'Indonesia — DKI Jakarta', '', '+622187704765', '+622187704765', 'S3', 'TNI/Polri', NULL, NULL, NULL, NULL, 'o', 'jabrik', 'Tebal', 'Mancung', '180', '80', 'Tampan', 'tobirama1.jpg'),
('mal', '123', 'Malmahsyar', 'Wisynu Djama', 'Jakarta', '2018-07-15', 'Laki-laki', 'WNI', 'Jalan Kelapa dua wetan III no 29 RT 06/RW 01', 'Kelapa dua wetan', 'Ciracas', 'Jakarta Timur', 'DKI Jakarta', '', '02187704765', '08568734259', 'S1', 'Swasta', 'Belum Pernah', '', NULL, '', 'o', 'lurus', 'Tebal', 'Mancung', '165cm', '60kg', 'Bulat', ''),
('wisnu', '123123123', 'Son Goku', 'bardock', 'jakarta timur', '2018-07-20', 'Laki-laki', 'WNI', 'qweqweq', 'Kelapa dua wetan', 'Ciracas', 'Jakarta Timur', 'DKI Jakarta', '', '02187704765', '08122340253092', 'S3', 'PNS', NULL, NULL, NULL, NULL, 'o', 'jabrik', 'Tebal', 'Mancung', '180', '80', 'Tampan', ''),
('wisnu', '1233444', 'wwww', 'wwww', 'basf', '2018-07-19', 'Laki-laki', 'WNI', 'jnjnoiuniuhnpiu', 'Kelapa dua wetan', 'Ciracas', 'Jakarta Timur', 'DKI Jakarta', '', '02187704765', '08122340253092', 'S3', 'Tani/NElayan', NULL, '', NULL, '', 'o', 'jabrik', 'Tebal', 'Mancung', '180', '80', 'Tampan', ''),
('mal', '18239817298371928739', 'Kania', 'Wisynu Djama', 'Jakarta', '2018-08-02', 'Perempuan', 'WNA', 'JALAN KELAPA DUA WETAN III NO 29', 'Kelapa dua wetan', '13730', 'jakarta timur', 'Indonesia — DKI Jakarta', '', '+622187704765', '+622187704765', 'SLTA', 'Pelajar', NULL, NULL, NULL, NULL, 'o', 'lurus', 'Tebal', 'Mancung', '180', '80', 'Tampan', 'gal-gadot.jpg'),
('mal', '22222222222222222222', 'Jiraiya', 'Jiji', 'Tokyo', '2018-07-01', 'Laki-laki', 'WNA', 'Kyoto', 'Kelapa dua wetan', '13730', 'jakarta timur', 'Indonesia — DKI Jakarta', '', '+622187704765', '+622187704765', 'S3', 'Lainnya', 'Belum Pernah', 'Naruto', 'Saudara Kandung', '1312312', 'o', 'jabrik', 'Tebal', 'Mancung', '180', '80', 'Tampan', ''),
('wisnu', '22364565321546542', 'Son Goku', 'bardock', 'saiyan', '2018-07-27', 'Laki-laki', 'WNI', 'asd', 'Kelapa dua wetan', 'Ciracas', 'Jakarta Timur', 'DKI Jakarta', '', '+622187704765', '08122340253092', 'S3', 'Pengusaha', NULL, NULL, NULL, NULL, 'o', 'jabrik', 'Tebal', 'Mancung', '180', '80', 'Tampan', ''),
('user001', '31230124012458013', 'Malmahsyar', 'Teddy', 'Jakarta', '2018-07-19', 'Laki-laki', 'WNI', 'asd', 'bogor', 'bogor', 'bogor', 'Jawa Barat', '', '02187704765', '08568734259', 'SD', 'PNS', NULL, '', NULL, '', 'o', 'lurus', 'tebal', 'mancung', '165', '60', 'bulat', ''),
('mal', '40100000000000000000', 'Umi', 'Abah', 'Jakarta', '2018-07-28', 'Perempuan', 'WNA', 'dasdasdas', 'Kelapa dua wetan', '13730', 'jakarta timur', 'Indonesia — DKI Jakarta', '', '+622187704765', '+622187704765', 'S1', 'Ibu Rumah Tangga', NULL, NULL, NULL, NULL, 'o', 'lurus', 'Tebal', 'Mancung', '180', '80', 'Tampan', ''),
('mal', '55555555555555555555', 'hatake kakashi', 'Shiro Kiba', 'jakarta timur', '2018-07-12', 'Laki-laki', 'WNI', 'asd', 'Kelapa dua wetan', '13730', 'jakarta timur', 'Indonesia — DKI Jakarta', '', '+622187704765', '+622187704765', 'S2', 'Tani/NElayan', 'Pernah', 'asd', 'Orang Tua', '1312312', 'o', 'jabrik', 'Tebal', 'Mancung', '180', '80', 'Tampan', 'kakashi1.png'),
('mal', '99999999999999999999', 'Daud', 'Firman', 'Jakarta', '2018-07-31', 'Laki-laki', 'WNI', 'JALAN KELAPA DUA WETAN III NO 29', 'Kelapa dua wetan', '13730', 'jakarta timur', 'Indonesia — DKI Jakarta', '', '+622187704765', '+622187704765', 'S3', 'Swasta', NULL, NULL, NULL, NULL, 'o', 'jabrik', 'Tebal', 'Mancung', '180', '80', 'Tampan', 'kakashi2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `kode_log` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`kode_log`, `username`, `tanggal`, `ip`, `status`) VALUES
(1, 'mal', '2018-07-13 20:20:21', '::1', 'berhasil'),
(2, 'mal', '2018-07-13 20:36:26', '::1', 'berhasil'),
(3, 'mal', '2018-07-14 13:27:52', '::1', 'berhasil'),
(4, 'mal', '2018-07-15 21:03:43', '::1', 'berhasil'),
(5, 'mal', '2018-07-15 21:04:06', '::1', 'berhasil'),
(6, 'mal', '2018-07-15 21:23:20', '::1', 'berhasil'),
(7, 'mal', '2018-07-16 17:48:19', '::1', 'berhasil'),
(8, 'mal', '2018-07-17 00:29:30', '::1', 'berhasil'),
(9, 'mal', '2018-07-17 01:13:19', '::1', 'berhasil'),
(10, 'mal', '2018-07-17 20:21:54', '::1', 'berhasil'),
(11, 'mal', '2018-07-18 11:56:55', '::1', 'berhasil'),
(12, 'mal', '2018-07-18 13:59:22', '::1', 'berhasil'),
(13, 'admin', '2018-07-18 14:21:12', '::1', 'berhasil'),
(14, 'admin', '2018-07-18 16:01:12', '::1', 'berhasil'),
(15, 'mal', '2018-07-18 16:45:04', '::1', 'berhasil'),
(16, 'admin', '2018-07-18 19:06:05', '::1', 'berhasil'),
(17, 'mal', '2018-07-18 19:06:57', '::1', 'berhasil'),
(18, 'admin', '2018-07-18 22:40:15', '::1', 'berhasil'),
(19, 'mal', '2018-07-18 22:41:43', '::1', 'berhasil'),
(20, 'user001', '2018-07-19 15:02:28', '::1', 'berhasil'),
(21, 'admin', '2018-07-19 15:13:31', '::1', 'berhasil'),
(22, 'admin', '2018-07-19 15:50:57', '::1', 'berhasil'),
(23, 'admin', '2018-07-19 15:51:03', '::1', 'berhasil'),
(24, 'mal', '2018-07-19 16:12:31', '::1', 'berhasil'),
(25, 'mal', '2018-07-19 16:46:48', '::1', 'berhasil'),
(26, 'wisnu', '2018-07-19 17:54:20', '::1', 'berhasil'),
(27, 'admin', '2018-07-19 18:01:08', '::1', 'berhasil'),
(28, 'wisnu', '2018-07-19 18:02:03', '::1', 'berhasil'),
(29, 'admin', '2018-07-19 18:05:14', '::1', 'berhasil'),
(30, 'mal', '2018-07-25 21:04:35', '::1', 'berhasil'),
(31, 'admin', '2018-07-25 22:33:07', '::1', 'berhasil'),
(32, 'frontoffice', '2018-07-25 22:35:04', '::1', 'berhasil'),
(33, 'admin', '2018-07-25 23:02:00', '::1', 'berhasil'),
(34, 'admin', '2018-07-25 23:02:35', '::1', 'berhasil'),
(35, 'keuangan', '2018-07-26 00:38:02', '::1', 'gagal'),
(36, 'keungan', '2018-07-26 00:38:07', '::1', 'gagal'),
(37, 'keuangan', '2018-07-26 00:38:21', '::1', 'berhasil'),
(38, 'keuangan', '2018-07-26 00:38:45', '::1', 'berhasil'),
(39, 'mal', '2018-07-26 00:40:38', '::1', 'berhasil'),
(40, 'keuangan', '2018-07-27 08:25:50', '::1', 'gagal'),
(41, 'keuangan', '2018-07-27 08:25:57', '::1', 'berhasil'),
(42, 'mal', '2018-07-27 08:51:17', '::1', 'berhasil'),
(43, 'frontoffice', '2018-07-27 08:56:56', '::1', 'berhasil'),
(44, 'frontoffice', '2018-07-27 09:10:02', '::1', 'berhasil'),
(45, 'keuangan', '2018-07-27 09:10:10', '::1', 'berhasil'),
(46, 'mal', '2018-07-27 09:10:22', '::1', 'berhasil'),
(47, 'mal', '2018-07-27 09:26:07', '::1', 'berhasil'),
(48, 'mal', '2018-07-27 09:51:11', '::1', 'berhasil'),
(49, 'frontoffice', '2018-07-27 09:52:50', '::1', 'berhasil'),
(50, 'mal', '2018-07-27 09:55:19', '::1', 'berhasil'),
(51, 'keuangan', '2018-07-27 10:17:57', '::1', 'berhasil'),
(52, 'mal', '2018-07-27 10:33:06', '::1', 'berhasil'),
(53, 'keuangan', '2018-07-27 10:34:41', '::1', 'gagal'),
(54, 'keuangan', '2018-07-27 10:34:46', '::1', 'berhasil'),
(55, 'mal', '2018-07-27 10:45:11', '::1', 'berhasil'),
(56, 'admin', '2018-07-27 10:51:55', '::1', 'berhasil'),
(57, 'keuangan', '2018-07-27 10:52:06', '::1', 'berhasil'),
(58, 'mal', '2018-07-27 10:52:51', '::1', 'berhasil'),
(59, 'keuangan', '2018-07-27 10:53:47', '::1', 'berhasil'),
(60, 'mal', '2018-07-27 10:53:53', '::1', 'berhasil'),
(61, 'frontoffice', '2018-07-27 17:58:21', '::1', 'berhasil'),
(62, 'wisnu', '2018-07-27 17:59:14', '::1', 'gagal'),
(63, 'wisnu', '2018-07-27 17:59:18', '::1', 'gagal'),
(64, 'wisnu', '2018-07-27 17:59:24', '::1', 'gagal'),
(65, 'wisnu', '2018-07-27 17:59:46', '::1', 'berhasil'),
(66, 'keuangan', '2018-07-27 18:01:18', '::1', 'berhasil'),
(67, 'wisnu', '2018-07-27 18:01:51', '::1', 'berhasil'),
(68, 'keuangan', '2018-07-27 18:02:25', '::1', 'berhasil'),
(69, 'keuangan', '2018-07-27 18:02:25', '::1', 'berhasil'),
(70, 'direktur', '2018-07-27 18:02:56', '::1', 'gagal'),
(71, 'bos', '2018-07-27 18:03:27', '::1', 'berhasil'),
(72, 'mal', '2018-07-28 20:12:07', '::1', 'berhasil'),
(73, 'admin', '2018-07-28 21:06:16', '::1', 'berhasil'),
(74, 'frontoffice', '2018-07-28 21:06:47', '::1', 'berhasil'),
(75, 'mal', '2018-07-28 21:13:22', '::1', 'berhasil'),
(76, 'admin', '2018-07-28 23:27:55', '::1', 'berhasil'),
(77, 'frontoffice', '2018-07-28 23:28:18', '::1', 'berhasil'),
(78, 'mal', '2018-07-29 21:16:47', '::1', 'berhasil'),
(79, 'admin', '2018-07-29 21:51:32', '::1', 'berhasil'),
(80, 'frontoffice', '2018-07-29 21:51:45', '::1', 'berhasil'),
(81, 'mal', '2018-07-29 22:10:18', '::1', 'berhasil'),
(82, 'frontoffice', '2018-07-29 22:10:50', '::1', 'berhasil'),
(83, 'mal', '2018-07-29 22:11:21', '::1', 'berhasil'),
(84, 'keuangan', '2018-07-29 22:44:49', '::1', 'berhasil'),
(85, 'mal', '2018-07-29 23:25:20', '::1', 'berhasil'),
(86, 'mal', '2018-07-29 23:26:02', '::1', 'berhasil'),
(87, 'frontoffice', '2018-07-29 23:51:29', '::1', 'berhasil'),
(88, 'mal', '2018-07-29 23:58:37', '::1', 'berhasil'),
(89, 'frontoffice', '2018-07-30 00:05:14', '::1', 'berhasil'),
(90, 'mal', '2018-07-30 21:31:18', '::1', 'berhasil'),
(91, 'mal', '2018-07-30 23:08:35', '::1', 'berhasil'),
(92, 'mal', '2018-07-31 06:06:29', '::1', 'berhasil'),
(93, 'mal', '2018-07-31 20:19:53', '::1', 'berhasil'),
(94, 'keuangan', '2018-07-31 20:25:51', '::1', 'berhasil'),
(95, 'mal', '2018-07-31 20:40:21', '::1', 'berhasil'),
(96, 'keuangan', '2018-07-31 20:41:48', '::1', 'berhasil'),
(97, 'mal', '2018-07-31 21:11:35', '::1', 'berhasil'),
(98, 'frontoffice', '2018-07-31 21:13:41', '::1', 'berhasil'),
(99, 'keuangan', '2018-07-31 21:21:24', '::1', 'berhasil'),
(100, 'mal', '2018-07-31 21:28:01', '::1', 'berhasil'),
(101, 'keuangan', '2018-07-31 21:29:06', '::1', 'berhasil'),
(102, 'mal', '2018-07-31 21:36:59', '::1', 'berhasil'),
(103, 'keuangan', '2018-07-31 21:37:40', '::1', 'berhasil'),
(104, 'frontoffice', '2018-07-31 21:38:31', '::1', 'berhasil'),
(105, 'mal', '2018-07-31 23:03:40', '::1', 'berhasil'),
(106, 'frontoffice', '2018-07-31 23:06:24', '::1', 'berhasil'),
(107, 'mal', '2018-07-31 23:06:41', '::1', 'berhasil'),
(108, 'bos', '2018-07-31 23:23:55', '::1', 'berhasil'),
(109, 'mal', '2018-08-01 20:17:52', '::1', 'berhasil'),
(110, 'frontoffice', '2018-08-01 20:35:49', '::1', 'berhasil'),
(111, 'mal', '2018-08-01 22:41:20', '::1', 'berhasil'),
(112, 'frontoffice', '2018-08-01 22:42:16', '::1', 'berhasil'),
(113, 'mal', '2018-08-01 22:49:52', '::1', 'berhasil'),
(114, 'frontoffice', '2018-08-02 00:11:57', '::1', 'berhasil'),
(115, 'mal', '2018-08-02 00:12:32', '::1', 'berhasil'),
(116, 'frontoffice', '2018-08-02 00:49:23', '::1', 'berhasil'),
(117, 'frontoffice', '2018-08-02 22:29:56', '::1', 'berhasil'),
(118, 'mal', '2018-08-03 00:40:21', '::1', 'berhasil'),
(119, 'frontoffice', '2018-08-03 00:41:03', '::1', 'berhasil'),
(120, 'mal', '2018-08-03 00:41:30', '::1', 'berhasil'),
(121, 'keuangan', '2018-08-03 00:42:07', '::1', 'berhasil'),
(122, 'frontoffice', '2018-08-03 00:42:44', '::1', 'berhasil'),
(123, 'mal', '2018-08-03 00:42:59', '::1', 'berhasil');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `email`, `level`) VALUES
('admin', 'admin', 'admin@admin.com', 1),
('bos', 'bos', 'bos@bos.com', 3),
('frontoffice', 'frontoffice', 'front@office.com', 5),
('keuangan', 'keuangan', 'keuangan@keuangan.com', 2),
('mal', 'mal', 'mal@mal.com', 4),
('user001', 'user001', 'user@gmaiil.com', 4),
('wisnu', '12345', 'wisnuwinz@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pembatalan`
--

CREATE TABLE `pembatalan` (
  `kode_pembatalan` int(11) NOT NULL,
  `kode_pendaftaran` int(11) NOT NULL,
  `metode_pembatalan` int(11) NOT NULL,
  `pewaris` varchar(100) NOT NULL,
  `status_pembatalan` int(11) NOT NULL,
  `alasan_pembatalan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembatalan`
--

INSERT INTO `pembatalan` (`kode_pembatalan`, `kode_pendaftaran`, `metode_pembatalan`, `pewaris`, `status_pembatalan`, `alasan_pembatalan`) VALUES
(1, 20, 1, '0', 0, 'jamaah sakit dan tidak bisa melanjutkan umroh'),
(2, 18, 1, '0', 1, 'saya perlu uang nya untuk kebutuhan lain yang sangat amat mendesak'),
(3, 17, 2, '18239817298371928739', 1, 'saya berangkat tahun depan aja, sekarang temen saya aja dlu yang umroh karena dia tahun depan mau kerja di luar negri jadi waktunya ga ada lagi');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kode_pembayaran` int(11) NOT NULL,
  `kode_pendaftaran` int(11) NOT NULL,
  `status_pembayaran` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nominal_pembayaran` int(11) NOT NULL,
  `file_bukti_pembayaran` text NOT NULL,
  `invoice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`kode_pembayaran`, `kode_pendaftaran`, `status_pembayaran`, `tanggal`, `nominal_pembayaran`, `file_bukti_pembayaran`, `invoice`) VALUES
(7, 11, '1', '2018-07-27 09:51:43', 31200000, 'boncu-owl.jpg', ''),
(8, 12, '0', '2018-07-27 17:53:40', 31200000, 'logo1.jpg', ''),
(9, 13, '1', '2018-07-27 17:57:00', 25500000, 'slide-sancu2.jpg', ''),
(10, 14, '0', '2018-07-28 20:50:02', 31200000, '', ''),
(11, 15, '0', '2018-07-28 20:53:25', 250000000, '', ''),
(12, 16, '1', '2018-07-28 20:59:28', 5000000, 'logo2.jpg', 'dp'),
(13, 16, '0', '2018-07-28 20:59:28', 20500000, '', 'sisa'),
(14, 17, '1', '2018-07-29 23:49:27', 250000000, 'logo-bank-mandiri.png', 'full'),
(15, 18, '1', '2018-07-30 00:04:50', 5000000, 'tobirama1.jpg', 'dp'),
(16, 18, '1', '2018-07-30 00:04:50', 26200000, 'tobirama21.png', 'sisa'),
(17, 20, '1', '2018-07-31 23:05:17', 31200000, 'logo-bank-mandiri1.png', 'full');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `kode_pendaftaran` int(11) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `status_berkas_ktp` varchar(30) NOT NULL,
  `status_berkas_kk` varchar(30) NOT NULL,
  `status_berkas_passport` varchar(30) NOT NULL,
  `ket_status_berkas` text NOT NULL,
  `status_pembayaran` varchar(30) NOT NULL,
  `ket_status_pembayaran` text NOT NULL,
  `tanggaldaftar` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(100) NOT NULL,
  `metodepembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`kode_pendaftaran`, `ktp`, `kode_produk`, `status_berkas_ktp`, `status_berkas_kk`, `status_berkas_passport`, `ket_status_berkas`, `status_pembayaran`, `ket_status_pembayaran`, `tanggaldaftar`, `username`, `metodepembayaran`) VALUES
(11, '31230124012458013', 'umrah003', 'valid', 'valid', 'valid', 'valid', 'Lunas', '', '2018-07-27 09:51:43', 'mal', ''),
(12, '22364565321546542', 'umrah003', 'valid', 'valid', 'sedang diperiksa', '', 'sedang diperiksa', '', '2018-07-27 17:53:40', 'wisnu', ''),
(13, '123123123', 'umrah002', 'tidak ada berkas', 'tidak ada berkas', 'tidak ada berkas', '', 'Lunas', '', '2018-07-27 17:57:00', 'wisnu', ''),
(14, '40100000000000000000', 'umrah003', 'tidak ada berkas', 'tidak ada berkas', 'tidak ada berkas', '', 'tidak ada berkas', '', '2018-07-28 20:50:02', 'mal', ''),
(15, '22222222222222222222', 'haji001', 'valid', 'valid', 'valid', 'valid', 'tidak ada berkas', '', '2018-07-28 20:53:25', 'mal', ''),
(16, '11111111111111111111', 'umrah002', 'valid', 'valid', 'valid', 'valid', 'Belum Lunas', '', '2018-07-28 20:59:28', 'mal', 'dp'),
(17, '55555555555555555555', 'haji001', 'tidak ada berkas', 'tidak ada berkas', 'tidak ada berkas', '', 'Lunas', 'Lunas', '2018-07-29 23:49:27', 'mal', 'full'),
(18, '12000000000000000000', 'umrah003', 'valid', 'valid', 'valid', 'valid', 'Lunas', 'Lunas', '2018-07-30 00:04:49', 'mal', 'dp'),
(19, '99999999999999999999', 'umrah003', 'tidak ada berkas', 'tidak ada berkas', 'tidak ada berkas', '', 'tidak ada berkas', '', '2018-07-31 23:04:48', 'mal', 'full'),
(20, '99999999999999999999', 'umrah003', 'valid', 'valid', 'valid', 'valid', 'Lunas', 'Lunas', '2018-07-31 23:05:17', 'mal', 'full');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kode_produk`, `nama_produk`) VALUES
('haji001', 'Haji Plus +'),
('umrah002', 'Marwah'),
('umrah003', 'Safa'),
('umroh001', 'Zam Zam');

-- --------------------------------------------------------

--
-- Table structure for table `produk_detail`
--

CREATE TABLE `produk_detail` (
  `kode_produk_detail` int(11) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `hotel` varchar(255) NOT NULL,
  `hari` int(11) NOT NULL,
  `kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_detail`
--

INSERT INTO `produk_detail` (`kode_produk_detail`, `kode_produk`, `harga`, `hotel`, `hari`, `kuota`) VALUES
(1, 'umroh001', 24900000, 'Bintang 5', 9, 500),
(2, 'umrah002', 25500000, 'Bintang 5', 9, 500),
(3, 'umrah003', 31200000, 'Bintang 5', 9, 498),
(4, 'haji001', 250000000, 'Bintang 5', 20, 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`kode_berkas`);

--
-- Indexes for table `berkas_upload`
--
ALTER TABLE `berkas_upload`
  ADD PRIMARY KEY (`kode_upload`);

--
-- Indexes for table `jadwal_keberangkatan`
--
ALTER TABLE `jadwal_keberangkatan`
  ADD PRIMARY KEY (`kode_jadwal_keberangkatan`);

--
-- Indexes for table `jamaah`
--
ALTER TABLE `jamaah`
  ADD PRIMARY KEY (`ktp`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`kode_log`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pembatalan`
--
ALTER TABLE `pembatalan`
  ADD PRIMARY KEY (`kode_pembatalan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kode_pembayaran`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`kode_pendaftaran`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indexes for table `produk_detail`
--
ALTER TABLE `produk_detail`
  ADD PRIMARY KEY (`kode_produk_detail`),
  ADD KEY `kode_produk` (`kode_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas_upload`
--
ALTER TABLE `berkas_upload`
  MODIFY `kode_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `jadwal_keberangkatan`
--
ALTER TABLE `jadwal_keberangkatan`
  MODIFY `kode_jadwal_keberangkatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `kode_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `pembatalan`
--
ALTER TABLE `pembatalan`
  MODIFY `kode_pembatalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `kode_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `kode_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `produk_detail`
--
ALTER TABLE `produk_detail`
  MODIFY `kode_produk_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk_detail`
--
ALTER TABLE `produk_detail`
  ADD CONSTRAINT `produk_foreign` FOREIGN KEY (`kode_produk`) REFERENCES `produk` (`kode_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
