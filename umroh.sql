-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2018 at 01:48 AM
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
(6, 'mal', '2018-07-15 21:23:20', '::1', 'berhasil');

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
('mal', 'mal', 'mal@mal.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `kode_pendaftaran` int(11) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `status_berkas` int(11) NOT NULL,
  `ket_status_berkas` text NOT NULL,
  `status_pembayaran` int(11) NOT NULL,
  `ket_status_pembayaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`kode_pendaftaran`, `ktp`, `kode_produk`, `status_berkas`, `ket_status_berkas`, `status_pembayaran`, `ket_status_pembayaran`) VALUES
(1, '123', 'umroh001', 0, '', 0, '');

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
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `kode_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
