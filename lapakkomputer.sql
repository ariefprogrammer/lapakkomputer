-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jun 2019 pada 05.25
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapakkomputer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `coba`
--

CREATE TABLE `coba` (
  `coba_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kondisi_products`
--

CREATE TABLE `kondisi_products` (
  `kondisi_id` int(11) NOT NULL,
  `nama_kondisi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kondisi_products`
--

INSERT INTO `kondisi_products` (`kondisi_id`, `nama_kondisi`) VALUES
(1, 'Baru'),
(2, 'Bekas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelanggan_id` int(10) NOT NULL,
  `nama_store` varchar(255) DEFAULT NULL,
  `alamat_store` varchar(255) DEFAULT NULL,
  `email_store` varchar(255) DEFAULT NULL,
  `telepon_store` decimal(13,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `nama_store`, `alamat_store`, `email_store`, `telepon_store`) VALUES
(5, 'Abid Alfatir Comp', 'Sleman, Yogyakarta', 'abid@gmail.com', '81308130813'),
(6, 'Ahmad Subarjo Comp', 'Jl Tengiri V No 43 Minosarmoni, Ngaglagia, Slemus, Yogyakarta', 'ahmadsubarjo@gmail.com', '81308130813'),
(7, 'Surya Kencana Comp', 'Jl AM Sangaji, Yogyakarta', 'suryakencana@gmail.com', '81308130813'),
(8, 'Ardi Comp', 'Jl Tirowardi, Raman Utara, Lampung Tengah.', 'ardicom78@gmail.com', '81346538756'),
(9, 'Arief Store', 'Jl Wahid Hasyim', 'hdt@gmail.com', '81308130813'),
(10, 'Suryana Comp', 'Jl Tenggolong raya, No 43. Sleman, Yogyakarta', 'suryana@gmail.com', '81308130813');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `pembelian_id` int(64) NOT NULL,
  `product_id` int(64) DEFAULT NULL,
  `pelanggan_id` int(64) DEFAULT NULL,
  `jumlah_pembelian` int(15) DEFAULT NULL,
  `tanggal_pembelian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`pembelian_id`, `product_id`, `pelanggan_id`, `jumlah_pembelian`, `tanggal_pembelian`) VALUES
(1, 3, 5, 1, '2019-05-10'),
(2, 4, 6, 12, '2019-05-14'),
(6, 5, 5, 22222, '2019-06-06'),
(13, 5, 7, 12, '2017-12-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `nama_product` varchar(255) DEFAULT NULL,
  `brand_product` varchar(255) DEFAULT NULL,
  `harga_product` int(15) DEFAULT NULL,
  `minimal_beli` int(10) DEFAULT NULL,
  `qty_product` int(10) DEFAULT NULL,
  `warna_tersedia` varchar(255) DEFAULT NULL,
  `kondisi_id` varchar(10) DEFAULT NULL,
  `berat_product` int(11) DEFAULT NULL,
  `foto_product` varchar(255) DEFAULT NULL,
  `deskripsi_product` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`product_id`, `nama_product`, `brand_product`, `harga_product`, `minimal_beli`, `qty_product`, `warna_tersedia`, `kondisi_id`, `berat_product`, `foto_product`, `deskripsi_product`) VALUES
(3, 'LENOVO IdeaPad 720S 13IKB - I5 8250 8GB', 'Lenovo', 9500000, 6, 62, 'Grey, Hitam', '1', 2310, '3.png', 'Lenovo product description'),
(4, 'Xiaomi Mi Notebook Pro i7 16GB 256GB', 'xiaomi', 12500000, 12, 75, 'Merah, Hitam, Silver', '1', 1356, '.jpg', 'Xiaomi description'),
(5, 'Macbook Pro 2018 256 GB', 'Apple', 28325000, 12, 86, 'grey', '1', 1250, '5.jpg', 'Macbook pro 2018 ini adalah laptop yang memiliki kapasitas RAM 8GB dan mempunyai kecepatan tinggi dalam melakukan banyak operasi.'),
(9, 'Asus ROG 520 GB RAM', 'Asus', 28575000, 12, 45, 'Hitam', '1', 1234, 'Asus_ROG_520_GB_RAM.jpg', 'Asus ROG adalah laptop yang memiliki RAM 8 GB, lorem ipsum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kondisi_products`
--
ALTER TABLE `kondisi_products`
  ADD PRIMARY KEY (`kondisi_id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`pembelian_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kondisi_products`
--
ALTER TABLE `kondisi_products`
  MODIFY `kondisi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `pelanggan_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `pembelian_id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
