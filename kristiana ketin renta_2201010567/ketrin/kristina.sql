-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2023 pada 15.13
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kristina`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `title`, `name`, `gambar`, `deskripsi`) VALUES
(1, 'BLENDED TO PERFECTION', 'COFFEES & TEAS', 'products-01.jpg', 'Kami juga menawarkan beragam hidangan yang lezat dan inovatif, mulai dari sarapan lezat yang memikat selera, hidangan ringan yang menggoda selera untuk menemani ngobrol santai, hingga hidangan utama yang memukau lidah Anda. Setiap hidangan kami disiapkan dengan cinta dan menggunakan bahan-bahan segar dari petani lokal dan produsen terpercaya.'),
(2, 'DELICIOUS TREATS, GOOD EATS', 'BAKERY & KITCHEN', 'products-02.jpg', 'Indulge in our delightful treats and savor the goodness of our mouthwatering eats.'),
(3, 'Indulge in a decadent treat with our marshmallow', 'chocolate waffles with chocolate ice cream', 'wafle.png', 'Nikmati waffle kami dalam berbagai variasi yang menggoda selera. Tambahkan siraman maple yang manis atau saus cokelat yang lezat untuk memperkaya rasa. ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
