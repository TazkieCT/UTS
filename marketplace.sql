-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 04:09 AM
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
  `size` varchar(5) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` enum('baru','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`idpenjualan`, `time`, `nama`, `jumlah`, `total`, `produk`, `size`, `alamat`, `status`) VALUES
(1013, '2022-11-01 10:16:07pm', 'Inner Journey Tazkie Ciputra Tangguh', 4, 1960000, 'Hoodie - Yellow Pastel', 'L', 'Jl. Tebet timur dalam III B no. 30 rt/07 rw/04, Jakarta Selatan, Indonesia.', 'baru'),
(1014, '2022-11-02 09:21:11am', 'Muhammad Hilmi Musyaffa', 3, 1470000, 'Hoodie - Yellow Pastel', 'L', 'Jl. Tebet timur dalam III B no. 30 rt/07 rw/04, Jakarta Selatan, Indonesia.', 'baru');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_barang` int(11) NOT NULL,
  `namaproduk` varchar(150) NOT NULL,
  `stok` int(11) NOT NULL,
  `color` text DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `gender` enum('men','women') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_barang`, `namaproduk`, `stok`, `color`, `harga`, `foto`, `gender`) VALUES
(3, 'Leather Jacket - Black', 115, 'Color: Black', 688000, '_1666508522pria1_.jpg', 'men'),
(6, 'Hoodie - Yellow Pastel', 29, 'Color: Yellow Pastel', 490000, '_1666509863pria3_.jpg', 'men'),
(9, 'Teddy Ritzhoodie', 29, 'Warm Hoodie', 695000, '_1666509296Perempuan_.jpg', 'women'),
(10, 'Sweater Pullover', 80, 'Color Purple', 289000, '_1666509824Perempuan1_.jpg', 'women'),
(13, 'Oversize Shacked', 26, 'Color: Blue and Black', 349000, '_1666509803Perempuan4_.jpg', 'women'),
(14, 'Flare Jeans', 4, 'Color: Black\r\nLeather Jeans', 879000, '_1666513005Perempuan3_.jpg', 'women'),
(15, 'Wool Blend Trousers', 14, 'Wool trousers', 499000, '_1666513398pria6_.jpg', 'men'),
(16, 'Warm Hoodie - Black', 20, 'Color: Black', 499000, '_1666530859pria4_.jpg', 'men'),
(17, 'Relaxed Wool Blend Trousers', 14, 'Blend Wool Trousers\r\nColor: Dark Yellow', 499000, '_1666531296pria5_.jpg', 'men'),
(18, 'Oxford Slim Fit Shirt', 34, 'Color: Blue Sky', 179000, '_1666531447pria2_.jpg', 'men'),
(19, 'Double Breasted Blazer', 9, 'Color: Black', 779000, '_1666531609Perempuan6_.jpg', 'women'),
(20, 'Essentials The Blazer', 7, 'Color: Navy Blue', 1179000, '_1666531782pria_.jpg', 'men'),
(21, 'Canvas Cargo Trousers', 18, 'Color: Like Khaki Green', 449000, '_1666531909Perempuan2_.jpg', 'women'),
(22, 'High-waisted Trousers', 19, 'Color: Navy', 779000, '_1666532012Perempuan5_.jpg', 'women'),
(23, 'Hoodie Black/Chicago', 9, 'Color: Black/Chicago', 649000, '_1666532607Perempuan7_.jpg', 'women'),
(24, 'Jacket Slim Fit', 4, 'Color: Steel Blue', 1279000, '_1666532667pria7_.jpg', 'men');

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
  MODIFY `idpenjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1015;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
