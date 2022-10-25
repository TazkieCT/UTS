-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 08:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `email`, `pass`, `level`) VALUES
(1, 'inner', 'innerjtct@gmail.com', 'admin', 'admin'),
(2, 'tazkie', 'tazkiect@gmail.com', '123', 'user'),
(18, 'Raffi', 'tazkiect25@gmail.com', '123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `datadiri`
--

CREATE TABLE `datadiri` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgllahir` date NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text DEFAULT NULL,
  `noHP` bigint(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datadiri`
--

INSERT INTO `datadiri` (`no`, `nama`, `tgllahir`, `jk`, `alamat`, `noHP`) VALUES
(1, 'Inner Journey Tazkie Ciputra Tangguh', '2005-07-25', 'Laki-laki', 'Tebet Timur, Jakarta Selatan', 81282805860);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `idpenjualan` int(11) NOT NULL,
  `time` varchar(100) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` bigint(20) NOT NULL,
  `produk` varchar(150) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`idpenjualan`, `time`, `nama`, `jumlah`, `total`, `produk`, `alamat`) VALUES
(1002, '2022-10-02 10:45:59pm', 'Inner Journey Tazkie Ciputra', 2, 96000, 'Nivea', 'Jakarta Selatan'),
(1003, '2022-10-02 05:45:59pm', 'Naufal Aulia Huda', 3, 150000, 'Dairy Milk', 'Jakarta Barat'),
(1004, '2022-10-02 10:48:13pm', 'Muhammad Hilmi Musyaffa', 10, 20000, 'Permen', 'Pasar Minggu'),
(1005, '2022-10-03 11:15:57am', 'tazkie', 10, 120000, 'SASa', 'Jakarta selatan'),
(1006, '2022-10-03 12:12:03pm', 'raffi', 2, 96000, 'Nivea', 'jalan sman');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_barang` int(11) NOT NULL,
  `namaproduk` varchar(150) NOT NULL,
  `stok` int(11) NOT NULL,
  `desbarang` text DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_barang`, `namaproduk`, `stok`, `desbarang`, `harga`, `foto`) VALUES
(1, 'Facial Wash', 60, 'Ini aalah kue', 44900, '_1664411261VALORANT   2022-09-09 20-36-13_Moment.jpg.png'),
(3, 'Nivea', 115, 'Ini Nivea\r\n', 48000, '_1664343232Valorant Chill video.png'),
(6, 'Dairy Milk', 37, 'Ini coklat enak hahaha\r\n', 50000, '_1664343302VL3Valorant_Moment.jpg'),
(9, 'M&M', 29, 'Ini coklat enak', 15000, '_1664343232Valorant Chill video.png'),
(10, 'Permen', 190, 'Ini apa ya', 2000, '_1664769174World Smallest Violin.jpg'),
(13, 'SASa', 26, 'Ini sasa', 12000, '_1664770511Valorant Chill video.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `datadiri`
--
ALTER TABLE `datadiri`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`idpenjualan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `datadiri`
--
ALTER TABLE `datadiri`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `idpenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
