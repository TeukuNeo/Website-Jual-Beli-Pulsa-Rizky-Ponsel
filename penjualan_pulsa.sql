-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2025 pada 04.07
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan_pulsa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `carousel`
--

INSERT INTO `carousel` (`id`, `title`, `sub_title`, `gambar`) VALUES
(1, 'Diskon Akhir Tahun!', 'Dapatkan diskon hingga 50% untuk semua aksesoris ponsel dan gadget terbaru.', 'gambar-promo-1.jpg'),
(2, 'Paket Data Unlimited', 'Internetan tanpa batas! Tersedia paket harian, mingguan, dan bulanan.', 'gambar-promo-2.jpg'),
(3, 'Servis Cepat dan Garansi', 'Layanan perbaikan ponsel profesional dengan garansi resmi. Cepat, aman, dan terpercaya.', 'gambar-promo-3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `operator` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` decimal(10,2) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `nama_produk`, `operator`, `deskripsi`, `harga`, `stok`, `gambar`) VALUES
(1, 'Pulsa 5.000', 'Telkomsel', 'Pulsa reguler untuk nomor Telkomsel', 6000.00, 999, 'gambar-telkomsel.png'),
(2, 'Pulsa 10.000', 'Telkomsel', 'Pulsa reguler untuk nomor Telkomsel', 11000.00, 999, 'gambar-telkomsel.png'),
(3, 'Pulsa 25.000', 'Indosat', 'Pulsa reguler untuk nomor Indosat Ooredoo', 26000.00, 500, 'indosat-gambar.jpg'),
(4, 'Pulsa 50.000', 'XL Axiata', 'Pulsa reguler untuk nomor XL/AXIS', 51000.00, 750, 'gambar-xl.png'),
(5, 'Kuota Data 5GB', 'Telkomsel', 'Internet 5GB, masa aktif 30 hari', 45000.00, 800, 'gambar-telkomsel.png'),
(6, 'Kuota Data 10GB', 'Indosat', 'Internet 10GB + bonus kuota malam, masa aktif 30 hari', 55000.00, 600, 'indosat-gambar.jpg'),
(7, 'Kuota Data 3GB', 'XL Axiata', 'XTRA Kuota 3GB, masa aktif 7 hari', 25000.00, 900, 'gambar-xl.png'),
(8, 'Kuota Data 1GB Harian', 'Smartfren', 'Kuota Internet 1GB, masa aktif 1 hari', 10000.00, 400, 'gambar-smartfren.jpg'),
(9, 'Paket Nelpon 30 Hari', 'Telkomsel', 'Nelpon GRATIS ke sesama Telkomsel selama 30 hari', 35000.00, 200, 'gambar-telkomsel.png'),
(10, 'Paket SMS 1000', 'Indosat', '1000 SMS ke semua operator, masa aktif 30 hari', 15000.00, 300, 'indosat-gambar.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `nomor_tujuan` varchar(15) DEFAULT NULL,
  `jumlah_beli` int(11) DEFAULT NULL,
  `total_harga` decimal(10,2) DEFAULT NULL,
  `status_pembayaran` enum('pending','processed','completed') DEFAULT NULL,
  `tanggal_transaksi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `nomor_hp` varchar(15) DEFAULT NULL,
  `role` enum('admin','customer') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `nama_lengkap`, `nomor_hp`, `role`, `created_at`) VALUES
(1, 'Rizky Ponsel', '$2y$12$Bsobnxp8/VrtOR49mByYwuBzmhCe6yCj505ua2McpX2.4poNQN86W', 'rizky@gmail.com', 'Rizky Haqim', '1233123123', 'admin', '2025-12-06 02:01:56'),
(2, 'haliim irsyad', '$2y$12$sbk2BAqeEB0cZBwa7eq/S./OPjOwuziS7G2xZC5uHB2COqyKAWEjO', 'haliim@gmail.com', 'Haliim Irsyad', '123123123', 'customer', '2025-12-06 02:08:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
