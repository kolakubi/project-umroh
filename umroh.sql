-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2018 at 02:13 AM
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
(1, 'berkas001', 1, 'ktp3.jpg'),
(2, 'berkas002', 1, 'kk3.JPG'),
(3, 'berkas003', 1, 'struk-bayar22.png'),
(4, 'berkas001', 2, 'ktp4.jpg'),
(5, 'berkas002', 2, 'kk4.JPG'),
(6, 'berkas003', 2, 'passport3.jpg'),
(7, 'berkas001', 3, 'ktp5.jpg'),
(8, 'berkas002', 3, 'kk5.JPG'),
(9, 'berkas003', 3, 'passport4.jpg');

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
(1, 1, '2018-11-15'),
(2, 2, '0000-00-00'),
(3, 3, '0000-00-00');

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
('wisnu', '11111111111111111111', 'wisnu', 'bardock', 'jakarta timur', '2018-08-03', 'Laki-laki', 'WNI', 'qweqweqweqw', 'Kelapa dua wetan', '13730', 'jakarta timur', 'Indonesia — DKI Jakarta', '', '+622187704765', '+622187704765', 'S1', 'TNI/Polri', NULL, NULL, NULL, NULL, 'o', 'jabrik', 'Tebal', 'Mancung', '180', '80', 'Tampan', 'johny-depp3.jpg'),
('wisnu', '22222222222222222222', 'gal gadot', 'Shiro Kiba', 'jakarta timur', '2018-08-03', 'Perempuan', 'WNA', 'asdasdasdas', 'Kelapa dua wetan', '13730', 'jakarta timur', 'Indonesia — DKI Jakarta', '', '+622187704765', '08770231023012', 'S2', 'Pengusaha', NULL, NULL, NULL, NULL, 'o', 'jabrik', 'Tebal', 'mancung', '180', '80', 'Tampan', 'gal-gadot3.jpg'),
('wisnu', '33333333333333333333', 'Ryan', 'Abah', 'Jakarta', '2018-08-03', 'Laki-laki', 'WNI', 'asdasdasdadasd', 'Kelapa dua wetan', '13730', 'jakarta timur', 'Indonesia — DKI Jakarta', '', '+622187704765', '+622187704765', 'S1', 'PNS', NULL, NULL, NULL, NULL, 'o', 'jabrik', 'Tebal', 'Mancung', '180', '80', 'Tampan', 'gal-gadot4.jpg'),
('wisnu', '44444444444444444444', 'Adam', 'Adim', 'Jakarta', '2018-08-04', 'Laki-laki', 'WNI', 'aaaaaa', 'Kelapa dua wetan', '13730', 'jakarta timur', 'Indonesia — DKI Jakarta', '', '+622187704765', '+622187704765', 'S3', 'PNS', 'Belum Pernah', '', NULL, '', 'o', 'jabrik', 'Tebal', 'Mancung', '180', '80', 'Tampan', 'johny-depp4.jpg');

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
(1, 'wisnu', '2018-08-03 18:51:36', '::1', 'berhasil'),
(2, 'frontoffice', '2018-08-03 18:53:32', '::1', 'berhasil'),
(3, 'keuangan', '2018-08-03 18:54:24', '::1', 'berhasil'),
(4, 'frontoffice', '2018-08-03 18:55:05', '::1', 'gagal'),
(5, 'frontoffice', '2018-08-03 18:55:11', '::1', 'berhasil'),
(6, 'wisnu', '2018-08-03 18:55:50', '::1', 'berhasil'),
(7, 'frontoffice', '2018-08-03 18:57:36', '::1', 'berhasil'),
(8, 'wisnu', '2018-08-03 18:57:57', '::1', 'berhasil'),
(9, 'frontoffice', '2018-08-03 18:58:52', '::1', 'berhasil'),
(10, 'admin', '2018-08-03 18:59:51', '::1', 'berhasil'),
(11, 'wisnu', '2018-08-03 19:02:42', '::1', 'berhasil'),
(12, 'frontoffice', '2018-08-03 19:04:34', '::1', 'berhasil'),
(13, 'keuangan', '2018-08-03 19:04:54', '::1', 'berhasil'),
(14, 'wisnu', '2018-08-03 19:05:04', '::1', 'berhasil'),
(15, 'frontoffice', '2018-08-03 19:07:34', '::1', 'berhasil'),
(16, 'direksi', '2018-08-03 19:09:34', '::1', 'berhasil'),
(17, 'direktur', '2018-08-03 21:43:58', '::1', 'gagal'),
(18, 'bos', '2018-08-03 21:44:03', '::1', 'gagal'),
(19, 'direktur', '2018-08-03 21:44:10', '::1', 'gagal'),
(20, 'direksi', '2018-08-03 21:46:03', '::1', 'berhasil'),
(21, 'direksi', '2018-08-04 19:10:00', '::1', 'berhasil'),
(22, 'direktir', '2018-08-04 19:23:10', '::1', 'gagal'),
(23, 'direksi', '2018-08-04 19:23:16', '::1', 'berhasil'),
(24, 'direksi', '2018-08-04 19:29:41', '::1', 'berhasil'),
(25, 'wisnu', '2018-08-04 20:25:31', '::1', 'berhasil'),
(26, 'direksi', '2018-08-04 20:27:07', '::1', 'berhasil'),
(27, 'wisnu', '2018-08-04 21:15:56', '::1', 'berhasil'),
(28, 'wisnu', '2018-08-04 21:16:40', '::1', 'berhasil'),
(29, 'frontoffice]', '2018-08-04 21:17:42', '::1', 'gagal'),
(30, 'frontoffice', '2018-08-04 21:17:49', '::1', 'berhasil'),
(31, 'keuangan', '2018-08-04 21:23:22', '::1', 'berhasil'),
(32, 'admin', '2018-08-04 21:26:50', '::1', 'gagal'),
(33, 'admin', '2018-08-04 21:26:54', '::1', 'berhasil'),
(34, 'user1', '2018-08-04 23:07:37', '::1', 'berhasil'),
(35, 'admin', '2018-08-04 23:07:43', '::1', 'berhasil'),
(36, 'admin', '2018-08-04 23:23:34', '::1', 'gagal'),
(37, 'admin', '2018-08-04 23:23:37', '::1', 'gagal'),
(38, 'admin', '2018-08-04 23:24:04', '::1', 'berhasil'),
(39, 'admin', '2018-08-04 23:24:33', '::1', 'berhasil');

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
('direksi', 'direksi', 'bos@bos.com', 3),
('frontoffice', 'frontoffice', 'front@office.com', 5),
('keuangan', 'keuangan', 'keuangan@keuangan.com', 2),
('test', 'test', 'test@test.com', 4),
('user1', 'user', 'user@user.com', 4),
('wisnu', 'wisnu', 'wisnuwinz@gmail.com', 4);

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
(1, 1, 2, '22222222222222222222', 1, 'orangnya meninggal bos'),
(2, 2, 1, '0', 0, 'butuh duit buat nikah');

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
(1, 1, '1', '2018-08-03 18:52:28', 5000000, 'struk-bayar23.png', 'dp'),
(2, 1, '1', '2018-08-03 18:52:28', 28000000, 'truk-bayar11.jpg', 'sisa'),
(3, 2, '1', '2018-08-03 19:03:35', 20000000, 'struk-bayar24.png', 'full'),
(4, 3, '0', '2018-08-04 20:26:50', 5000000, 'struk-bayar25.png', 'dp'),
(5, 3, '0', '2018-08-04 20:26:50', 245000000, 'truk-bayar12.jpg', 'sisa');

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
(1, '22222222222222222222', 'umroh001', 'valid', 'valid', 'valid', 'valid', 'Lunas', 'Lunas', '2018-08-03 18:52:28', 'wisnu', 'dp'),
(2, '33333333333333333333', 'umrah003', 'valid', 'valid', 'valid', 'valid', 'Lunas', 'Lunas', '2018-08-03 19:03:35', 'wisnu', 'full'),
(3, '44444444444444444444', 'haji001', 'valid', 'valid', 'valid', 'valid', 'sedang diperiksa', '', '2018-08-04 20:26:49', 'wisnu', 'dp');

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
('umrah002', 'Silver'),
('umrah003', 'Gold'),
('umroh001', 'Diamond');

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
(1, 'umroh001', 33000000, 'Bintang 5', 9, 59),
(2, 'umrah002', 25000000, 'Bintang 5', 9, 60),
(3, 'umrah003', 20000000, 'Bintang 5', 9, 60),
(4, 'haji001', 200000000, 'Bintang 5', 25, 60);

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
  MODIFY `kode_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `jadwal_keberangkatan`
--
ALTER TABLE `jadwal_keberangkatan`
  MODIFY `kode_jadwal_keberangkatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `kode_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `pembatalan`
--
ALTER TABLE `pembatalan`
  MODIFY `kode_pembatalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `kode_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `kode_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
