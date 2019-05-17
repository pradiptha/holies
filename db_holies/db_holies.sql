-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2019 at 06:02 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_holies`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` varchar(5) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `nama_customer` varchar(50) NOT NULL,
  `j_kelamin` enum('pria','wanita') NOT NULL,
  `alamat_customer` varchar(100) NOT NULL,
  `telp_customer` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_favorit`
--

CREATE TABLE `tb_favorit` (
  `id_customer` varchar(10) NOT NULL,
  `id_produk` varchar(10) NOT NULL,
  `tgl_favorit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_gmbproduk`
--

CREATE TABLE `tb_gmbproduk` (
  `id_produk` varchar(10) NOT NULL,
  `gambar_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategoriproduk`
--

CREATE TABLE `tb_kategoriproduk` (
  `id_kategori` varchar(10) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_keranjang` varchar(10) NOT NULL,
  `id_produk` varchar(10) NOT NULL,
  `quantity` int(6) NOT NULL,
  `total_harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_seller` varchar(5) NOT NULL,
  `id_customer` varchar(10) NOT NULL,
  `isi_pesan` varchar(300) NOT NULL,
  `waktu_terkirim` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `stok_produk` int(5) NOT NULL,
  `harga_produk` int(9) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk_kategori`
--

CREATE TABLE `tb_produk_kategori` (
  `id_produk` varchar(10) NOT NULL,
  `id_kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sellerproduk`
--

CREATE TABLE `tb_sellerproduk` (
  `id_produk` varchar(10) NOT NULL,
  `id_seller` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_slide`
--

CREATE TABLE `tb_slide` (
  `id_slide` varchar(5) NOT NULL,
  `judul_slide` varchar(30) NOT NULL,
  `gambar_slide` varchar(30) NOT NULL,
  `link` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `id_keranjang` varchar(10) NOT NULL,
  `status` enum('pending','checkout') NOT NULL,
  `tgl_transaksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto_profil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `td_admin`
--

CREATE TABLE `td_admin` (
  `id_admin` varchar(5) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `j_kelamin` enum('pria','wanita') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `td_seller`
--

CREATE TABLE `td_seller` (
  `id_seller` varchar(5) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `nama_seller` varchar(50) NOT NULL,
  `j_kelamin` enum('pria','wanita') NOT NULL,
  `alamat_seller` varchar(100) NOT NULL,
  `telp_seller` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_favorit`
--
ALTER TABLE `tb_favorit`
  ADD KEY `id_customer` (`id_customer`,`id_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tb_gmbproduk`
--
ALTER TABLE `tb_gmbproduk`
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tb_kategoriproduk`
--
ALTER TABLE `tb_kategoriproduk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_barang` (`id_produk`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD KEY `id_seller` (`id_seller`,`id_customer`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_produk_kategori`
--
ALTER TABLE `tb_produk_kategori`
  ADD KEY `id_produk` (`id_produk`,`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_sellerproduk`
--
ALTER TABLE `tb_sellerproduk`
  ADD KEY `id_produk` (`id_produk`,`id_seller`),
  ADD KEY `id_seller` (`id_seller`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_transaksi` (`id_keranjang`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `td_admin`
--
ALTER TABLE `td_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `td_seller`
--
ALTER TABLE `td_seller`
  ADD PRIMARY KEY (`id_seller`),
  ADD KEY `id_user` (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD CONSTRAINT `tb_customer_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_favorit`
--
ALTER TABLE `tb_favorit`
  ADD CONSTRAINT `tb_favorit_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `tb_customer` (`id_customer`),
  ADD CONSTRAINT `tb_favorit_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`);

--
-- Constraints for table `tb_gmbproduk`
--
ALTER TABLE `tb_gmbproduk`
  ADD CONSTRAINT `tb_gmbproduk_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`);

--
-- Constraints for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD CONSTRAINT `tb_pesan_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `tb_customer` (`id_customer`),
  ADD CONSTRAINT `tb_pesan_ibfk_2` FOREIGN KEY (`id_seller`) REFERENCES `td_seller` (`id_seller`);

--
-- Constraints for table `tb_produk_kategori`
--
ALTER TABLE `tb_produk_kategori`
  ADD CONSTRAINT `tb_produk_kategori_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`),
  ADD CONSTRAINT `tb_produk_kategori_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategoriproduk` (`id_kategori`);

--
-- Constraints for table `tb_sellerproduk`
--
ALTER TABLE `tb_sellerproduk`
  ADD CONSTRAINT `tb_sellerproduk_ibfk_1` FOREIGN KEY (`id_seller`) REFERENCES `td_seller` (`id_seller`),
  ADD CONSTRAINT `tb_sellerproduk_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_keranjang`) REFERENCES `tb_keranjang` (`id_keranjang`);

--
-- Constraints for table `td_admin`
--
ALTER TABLE `td_admin`
  ADD CONSTRAINT `td_admin_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `td_seller`
--
ALTER TABLE `td_seller`
  ADD CONSTRAINT `td_seller_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
