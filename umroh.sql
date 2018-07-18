-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 11:57 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

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
('berkas003', 'Passport');

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
(1, 'berkas001', 1, 'back-to-school2.jpg'),
(2, 'berkas002', 1, 'xtreme-gunung-merah.jpg'),
(3, 'berkas003', 1, 'slide-sancu2.jpg'),
(4, 'berkas001', 1, 'back-to-school.jpg'),
(5, 'berkas002', 1, 'slide-sancu21.jpg'),
(6, 'berkas003', 1, 'xtreme-gunung-merah1.jpg'),
(7, 'berkas001', 1, 'back-to-school.jpg'),
(8, 'berkas002', 1, 'banner-sancu-fb.jpg'),
(9, 'berkas003', 1, 'bisnis-online.jpg');

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
  `pengalamanhaji` varchar(30) NOT NULL,
  `namamahram` varchar(255) NOT NULL,
  `hubunganmahram` varchar(20) DEFAULT '-',
  `nomorpendaftarmahram` varchar(40) NOT NULL,
  `golongandarah` varchar(10) NOT NULL,
  `rambut` varchar(255) NOT NULL,
  `alis` varchar(255) NOT NULL,
  `hidung` varchar(255) NOT NULL,
  `tinggi` varchar(255) NOT NULL,
  `berat` varchar(255) NOT NULL,
  `muka` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jamaah`
--

INSERT INTO `jamaah` (`username`, `ktp`, `nama`, `namaayah`, `tempatlahir`, `tanggallahir`, `kelamin`, `kewarganegaraan`, `alamat`, `kelurahan`, `kecamatan`, `kabupaten`, `propinsi`, `kodepos`, `telepon`, `hp`, `pendidikan`, `pekerjaan`, `pengalamanhaji`, `namamahram`, `hubunganmahram`, `nomorpendaftarmahram`, `golongandarah`, `rambut`, `alis`, `hidung`, `tinggi`, `berat`, `muka`) VALUES
('mal', '123', 'Malmahsyar', 'Wisynu Djama', 'Jakarta', '2018-07-15', 'Laki-laki', 'WNI', 'Jalan Kelapa dua wetan III no 29 RT 06/RW 01', 'Kelapa dua wetan', 'Ciracas', 'Jakarta Timur', 'DKI Jakarta', '', '02187704765', '08568734259', 'S1', 'Swasta', 'Belum Pernah', '', NULL, '', 'o', 'lurus', 'Tebal', 'Mancung', '165cm', '60kg', 'Bulat');

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
(15, 'mal', '2018-07-18 16:45:04', '::1', 'berhasil');

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
('mal', 'mal', 'mal@mal.com', 4);

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
  `ket_status_pembayaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`kode_pendaftaran`, `ktp`, `kode_produk`, `status_berkas_ktp`, `status_berkas_kk`, `status_berkas_passport`, `ket_status_berkas`, `status_pembayaran`, `ket_status_pembayaran`) VALUES
(1, '123', 'umroh001', 'valid', 'tidak valid', 'valid', '', 'tidak ada berkas', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kode_produk` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kode_produk`, `nama`) VALUES
('haji001', 'Haji Plus'),
('umrah002', 'Minah'),
('umrah003', 'Safa'),
('umroh001', 'Arafah');

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
(1, 'umroh001', 31200000, 'Bintang 5', 9, 500),
(2, 'umrah002', 25500000, 'Bintang 4', 9, 500),
(3, 'umrah003', 24900000, 'Bintang 4', 9, 500),
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
  MODIFY `kode_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `kode_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `kode_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
