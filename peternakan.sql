-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2018 at 06:44 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peternakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_kandang`
--

CREATE TABLE `kondisi_kandang` (
  `id` int(11) NOT NULL,
  `kd_peternak` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `waktu` time NOT NULL,
  `suhu_1` smallint(6) NOT NULL,
  `kelembapan_1` smallint(6) NOT NULL,
  `suhu_2` smallint(6) NOT NULL,
  `kelembapan_2` smallint(6) NOT NULL,
  `suhu_3` smallint(6) NOT NULL,
  `kelembapan_3` smallint(6) NOT NULL,
  `jml_ayam` int(11) NOT NULL,
  `foto_ayam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi_kandang`
--

INSERT INTO `kondisi_kandang` (`id`, `kd_peternak`, `tgl`, `waktu`, `suhu_1`, `kelembapan_1`, `suhu_2`, `kelembapan_2`, `suhu_3`, `kelembapan_3`, `jml_ayam`, `foto_ayam`) VALUES
(1, 'alang', '2017-05-08', '16:14:04', 20, 90, 30, 20, 20, 14, 2000, 'download.jpg'),
(2, 'alang', '2017-05-08', '16:14:50', 10, 20, 15, 12, 40, 14, 100000, 'download.jpg'),
(3, 'alang', '2017-05-09', '20:53:28', 40, 20, 30, 30, 50, 10, 10000, 'download.jpg'),
(4, 'alang', '2017-05-10', '00:52:39', 10, 30, 40, 20, 20, 60, 20000, 'download.jpg'),
(5, '', '2017-05-10', '00:59:37', 0, 0, 0, 0, 0, 0, 0, '../img/ayam_20170509195937.jpg'),
(6, '', '2017-05-10', '00:59:51', 0, 0, 0, 0, 0, 0, 0, '../img/ayam_20170509195951.jpg'),
(7, '', '2017-05-10', '01:00:40', 0, 0, 0, 0, 0, 0, 0, '../img/ayam_20170509200040.jpg'),
(8, '', '2017-05-10', '01:00:58', 0, 0, 0, 0, 0, 0, 0, '../img/ayam_20170509200058.jpg'),
(9, '', '2017-05-10', '01:01:45', 0, 0, 0, 0, 0, 0, 0, '../img/ayam_20170509200145.jpg'),
(10, '', '2017-05-10', '01:11:21', 20, 0, 0, 0, 0, 0, 0, '../img/ayam_20170509201121.jpg'),
(11, '', '2017-05-10', '01:11:36', 20, 0, 0, 0, 0, 0, 0, '../img/ayam_20170509201136.jpg'),
(12, '', '2017-05-10', '01:12:47', 20, 0, 0, 0, 0, 0, 0, '../img/ayam_20170509201247.jpg'),
(13, '', '2017-05-10', '01:13:03', 20, 0, 0, 0, 0, 0, 0, '../img/ayam_20170509201303.jpg'),
(14, '20', '2017-05-10', '01:13:15', 20, 0, 0, 0, 0, 0, 0, '../img/ayam_20170509201315.jpg'),
(15, '20', '2017-05-10', '01:13:27', 20, 0, 0, 0, 0, 0, 0, '../img/ayam_20170509201327.jpg'),
(17, 'alang', '2017-05-10', '01:21:53', 10, 70, 30, 40, 15, 30, 3000, 'download.jpg'),
(20, 'alang', '2017-12-10', '21:14:52', 20, 20, 30, 30, 20, 20, 123, 'b800057b3be309e407f7de2e17678ca8.jpg'),
(21, 'alang', '2017-12-11', '14:17:38', 10, 10, 10, 10, 10, 10, 100, ''),
(22, 'alang', '2017-12-11', '14:18:04', 20, 20, 20, 20, 20, 20, 100, ''),
(23, 'alang', '2017-12-11', '14:18:30', 30, 30, 30, 30, 30, 30, 100, ''),
(24, 'alang', '2017-12-11', '14:19:01', 40, 40, 40, 40, 40, 40, 100, '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_grup` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `last_login` datetime NOT NULL,
  `create_login` datetime NOT NULL,
  `stok` int(50) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `id_grup`, `nama`, `alamat`, `kota`, `telepon`, `email`, `last_login`, `create_login`, `stok`, `harga`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Sofiani', '', '', '', '', '2017-12-11 10:53:27', '2017-05-01 00:00:00', 0, 0),
('al', '87cb8cc8b2f8fd52e2c3c0a4d8e8185f', 'Penjual', 'Alang', 'tembalang', 'semarang', '085727743002', 'alang.gaul@gmail.com', '2017-05-02 00:00:00', '2017-05-03 00:00:00', 0, 0),
('alang', 'a0f9e70a16525cb0befa82f3ff59adfe', 'Peternak', 'Alang Mafuzakaria', 'Banyumanik', 'Semarang', '', 'alang.gaul@yahoo.co.id', '2017-12-11 07:28:55', '2017-04-13 09:46:32', 1082, 30000),
('alif', '099a147c0c6bcd34009896b2cc88633c', 'Peternak', 'Alif', '', '', '', '', '0000-00-00 00:00:00', '2017-05-05 16:26:57', 3000, 10000),
('anto', '2c946c0178ec72aaefa54f786540d301', 'Peternak', 'Anto sapi', 'Jl. Ayam Jago No.2', 'Semarang', '0812345678', 'anto_ayam@gmail.com', '2017-05-04 19:28:45', '2015-12-10 19:10:23', 10, 30000),
('darma', 'f90690e3c7de4452470c5f84120cd12f', 'Penjual', 'Darma', '', '', '', '', '2017-05-05 15:25:48', '2017-05-01 00:00:00', 1977, 30000),
('dmalvian', '1bcca6af9732ccb01be13f5c16ed0abf', 'Penjual', 'Malvian Dwi', 'Solo', 'Surakarta', '081226754357', 'dmalvian@aa.com', '0000-00-00 00:00:00', '2017-12-06 12:25:36', 100, 50000),
('gayoh', 'e9c0e183e66ac5187f38681c92225024', 'Peternak', 'Gayoh', '', '', '', '', '2017-05-04 21:08:56', '2017-05-04 01:40:06', 4500, 30000),
('wulan', 'aae79912250d18756900f742270de7e1', 'Penjual', 'WulanH', 'tembalang', 'semarang', '089999999999', 'alang.gaul@gmail.com', '0000-00-00 00:00:00', '2017-05-04 17:46:11', 50, 40000),
('yogi', '938e14c074c45c62eb15cc05a6f36d79', 'Penjual', 'Yogi Dwi', 'tembalang', 'semarang', '089999999999', 'tjahyo2000@gmail.com', '2017-12-09 17:41:37', '2017-05-04 21:49:37', 1977, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `kd_peternak` varchar(100) NOT NULL,
  `kd_penjual` varchar(100) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `waktu_transaksi` time NOT NULL,
  `jml` int(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `kd_peternak`, `kd_penjual`, `tgl_transaksi`, `waktu_transaksi`, `jml`, `harga`, `total`) VALUES
(3, 'anto', 'darma', '2017-05-04', '01:24:48', 50, 30000, 1500000),
(5, 'anto', 'darma', '2017-05-04', '18:50:40', 50, 30000, 1500000),
(6, 'gayoh', 'darma', '2017-05-04', '21:08:38', 500, 30000, 15000000),
(7, 'alang', 'yogi', '2017-05-08', '16:01:08', 20, 30000, 600000),
(8, 'alang', 'yogi', '2017-05-09', '22:35:13', 200, 30000, 6000000),
(10, 'anto', 'yogi', '2017-12-09', '12:01:29', 2, 30000, 60000),
(11, 'anto', 'yogi', '2017-12-09', '12:07:38', 4, 30000, 120000),
(12, 'anto', 'yogi', '2017-12-09', '12:09:27', 4, 30000, 120000),
(13, 'anto', 'yogi', '2017-12-09', '12:12:27', 4, 30000, 120000),
(14, 'anto', 'yogi', '2017-12-09', '12:13:09', 4, 30000, 120000),
(15, 'darma', 'yogi', '2017-12-09', '12:13:26', 3, 30000, 90000),
(16, 'darma', 'yogi', '2017-12-09', '12:13:57', 3, 30000, 90000);

-- --------------------------------------------------------

--
-- Table structure for table `treshold`
--

CREATE TABLE `treshold` (
  `kd_peternak` varchar(40) NOT NULL,
  `suhu_1` smallint(6) NOT NULL,
  `suhu_2` smallint(6) NOT NULL,
  `suhu_3` smallint(6) NOT NULL,
  `kelembapan_1` smallint(6) NOT NULL,
  `kelembapan_2` smallint(6) NOT NULL,
  `kelembapan_3` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treshold`
--

INSERT INTO `treshold` (`kd_peternak`, `suhu_1`, `suhu_2`, `suhu_3`, `kelembapan_1`, `kelembapan_2`, `kelembapan_3`) VALUES
('alang', 20, 30, 20, 30, 20, 30),
('anto', 50, 50, 50, 50, 50, 50),
('gayoh', 20, 20, 20, 20, 20, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kondisi_kandang`
--
ALTER TABLE `kondisi_kandang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treshold`
--
ALTER TABLE `treshold`
  ADD PRIMARY KEY (`kd_peternak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kondisi_kandang`
--
ALTER TABLE `kondisi_kandang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
