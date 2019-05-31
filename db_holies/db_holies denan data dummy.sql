-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2019 at 05:52 AM
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
-- Table structure for table `detail_user`
--

CREATE TABLE `detail_user` (
  `id_detailuser` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` enum('Pria','Wanita') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto_profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_user`
--

INSERT INTO `detail_user` (`id_detailuser`, `id_user`, `nama`, `jk`, `alamat`, `telp`, `email`, `foto_profil`) VALUES
(1, 1, 'ayut', 'Wanita', 'denpasar,bali', '082247030198 ', 'ayutari16@gmail.com', '5cf09b46a6613.jpg'),
(2, 2, 'Hendra Pradiptha', 'Pria', 'Jalan Tukad banyu Poh no 95', '+6282146576580 ', 'adehendra141299@gmail.com', '5cf09bb2b36ec.jpg'),
(3, 3, 'ternak abadi', 'Pria', 'Jalan Tukad banyu Poh no 95', '+6282146576580', 'ternakabadi@mail.com', 'nophoto.png'),
(4, 4, 'Ayu Sherly', 'Wanita', 'Amlapura, Bali', '+6282146576580', 'hendrapradiptha98@gmail.com', 'nophoto.png'),
(5, 5, 'Adi Saputro', 'Pria', 'Denpasar, Bali', '+6282146576580', 'adehendra141299@gmail.com', 'nophoto.png'),
(6, 6, 'Made Nesha', 'Pria', 'Amlapura, Bali', '+6282146576580', 'adehendra141299@gmail.com', 'nophoto.png'),
(7, 7, 'Rio Putra', 'Pria', 'Jimbaran, Bali', '+6282146576580', 'adehendra141299@gmail.com', 'nophoto.png'),
(8, 8, 'Yukti Trisna', 'Wanita', 'Renon, Denpasar', '+6282146576580', 'adehendra141299@gmail.com', 'nophoto.png'),
(9, 9, 'admin', 'Pria', 'Jalan Tukad banyu Poh no 95', '+6282146576580', 'adehendra141299@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `favorit`
--

CREATE TABLE `favorit` (
  `id_customer` int(5) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `tanggal_favorit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gmbr_produk`
--

CREATE TABLE `gmbr_produk` (
  `id_produk` int(10) NOT NULL,
  `gambar_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gmbr_produk`
--

INSERT INTO `gmbr_produk` (`id_produk`, `gambar_produk`) VALUES
(2, '5cf007921f916.jpg'),
(3, '5cf0111649116.jpg'),
(4, '5cf01143a1b04.jpg'),
(7, '5cf0a06a7a757.png'),
(8, '5cf0a097b4b5a.png'),
(9, '5cf0a0e65fab8.png'),
(10, '5cf0a12d22b0a.jpg'),
(11, '5cf0a1815825c.png'),
(12, '5cf0a1abdd594.png'),
(13, '5cf0a200e49a2.png'),
(14, '5cf0a31f911fc.png'),
(15, '5cf0a352a03ae.png'),
(16, '5cf0a37fe7f53.png'),
(17, '5cf0a3b5d4faa.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'ternak'),
(2, 'pakan'),
(3, 'Alat');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(10) NOT NULL,
  `id_customer` int(5) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `quantity` int(8) NOT NULL,
  `total_harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_customer`, `id_produk`, `quantity`, `total_harga`) VALUES
(1, 2, 1, 4, 20000),
(17, 2, 2, 1, 35000);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(40) NOT NULL,
  `from_id` int(5) NOT NULL,
  `to_id` int(5) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order` int(10) NOT NULL,
  `id_keranjang` int(10) NOT NULL,
  `id_customer` int(5) NOT NULL,
  `total_harga` int(8) NOT NULL,
  `status` enum('Lunas','Belum Lunas') NOT NULL,
  `tgl_transaksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) NOT NULL,
  `id_seller` int(5) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `quantity` int(8) NOT NULL,
  `harga_satuan` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_seller`, `nama_produk`, `deskripsi`, `quantity`, `harga_satuan`) VALUES
(1, 1, 'telur ayam', 'telur ayam kampung', 50, 5000),
(2, 1, 'anak ayam', 'anak ayam umur 2 minggu', 50, 35000),
(3, 1, 'anak kerbau', 'Kerbau Asal Cianjur Ras Bali', 5, 1500000),
(4, 1, 'telur bebek', 'Telur Bebek Bengil', 25, 5000),
(7, 5, 'Pakan Ayam Super', 'Pakan ayam untuk ayam super.', 100, 10000),
(8, 5, 'Ayam Tajen', 'Sudah menang 10 kali', 8, 600000),
(9, 5, 'Anak Ayam Lucu', 'Lucu banget, kamu aja kalah', 100, 5000),
(10, 5, 'Telur Ayam', 'Persediaan untuk lebaran', 200, 7000),
(11, 4, 'Anak Kambing Lucu', 'Cocok dijadikan sate', 3, 500000),
(12, 4, 'Kambing Dewasa', 'Untuk kurban', 7, 2000000),
(13, 4, 'Kambing Belang', 'Kambing dengan bulu hitam', 4, 1500000),
(14, 3, 'Kalung Sapi', 'Kalung sapi legendaris yang sangat dicari-cari. Edisi terbatas!!!', 8, 80000),
(15, 3, 'Tali Pengikat Sapi', 'Pengikat sapi yang amat kuat, tidak bisa diputuskan', 80, 70000),
(16, 3, 'Pakan Ayam Standar', 'Murah meriah', 100, 5000),
(17, 3, 'Nutrisi Sapi', 'Buat sapi kuat', 50, 90000);

-- --------------------------------------------------------

--
-- Table structure for table `produk_kategori`
--

CREATE TABLE `produk_kategori` (
  `id_produk` int(10) NOT NULL,
  `id_kategori` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_kategori`
--

INSERT INTO `produk_kategori` (`id_produk`, `id_kategori`) VALUES
(2, 1),
(3, 1),
(4, 1),
(7, 2),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 3),
(15, 3),
(16, 2),
(17, 2);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id_seller` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `foto_ktp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id_seller`, `id_user`, `foto_ktp`) VALUES
(1, 1, ''),
(2, 3, ''),
(3, 4, ''),
(4, 7, ''),
(5, 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tingkatan` enum('admin','customer','seller','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `tingkatan`) VALUES
(1, 'ayut', 'ayut', 'seller'),
(2, 'pradiptha', 'pradiptha', 'customer'),
(3, 'ternakabadi', 'abcd', 'seller'),
(4, 'ayu', 'ayu', 'seller'),
(5, 'wadis', 'wadis', 'customer'),
(6, 'md', 'md', 'customer'),
(7, 'km', 'km', 'seller'),
(8, 'yukti', 'yukti', 'seller'),
(9, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD PRIMARY KEY (`id_detailuser`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `favorit`
--
ALTER TABLE `favorit`
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `gmbr_produk`
--
ALTER TABLE `gmbr_produk`
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_customer` (`id_customer`,`id_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `from_id` (`from_id`,`to_id`),
  ADD KEY `to_id` (`to_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_keranjang` (`id_keranjang`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_seller` (`id_seller`);

--
-- Indexes for table `produk_kategori`
--
ALTER TABLE `produk_kategori`
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id_seller`),
  ADD KEY `id_customer` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_user`
--
ALTER TABLE `detail_user`
  MODIFY `id_detailuser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id_order` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id_seller` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD CONSTRAINT `detail_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `favorit`
--
ALTER TABLE `favorit`
  ADD CONSTRAINT `favorit_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `detail_user` (`id_detailuser`),
  ADD CONSTRAINT `favorit_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `gmbr_produk`
--
ALTER TABLE `gmbr_produk`
  ADD CONSTRAINT `gmbr_produk_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `keranjang_ibfk_3` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`from_id`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`to_id`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`id_keranjang`) REFERENCES `keranjang` (`id_keranjang`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_seller`) REFERENCES `seller` (`id_seller`);

--
-- Constraints for table `produk_kategori`
--
ALTER TABLE `produk_kategori`
  ADD CONSTRAINT `produk_kategori_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `produk_kategori_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `detail_user` (`id_detailuser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
