-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2020 pada 18.09
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `score`
--

CREATE TABLE `score` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `score` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `score`
--

INSERT INTO `score` (`id`, `nama`, `email`, `score`) VALUES
(1, 'Aldo', 'aldo@gmail.com', 80),
(2, 'Shella', 'shella@gmail.com', 90),
(3, 'tiara', 'tiara@gmail.com', 80),
(4, 'Candra', 'candra@gmail.com', 90),
(5, 'Doni', 'doni@gmail.com', 70),
(6, 'Dewi', 'dewi@gmail.com', 60),
(7, 'Budi', 'budi@gmail.com', 100),
(8, 'Andi', 'andi@gmail.com', 90),
(9, 'Kayla', 'kayla@gmail.com', 90),
(10, 'Ferdi', 'ferdi@gmail.com', 50);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `score`
--
ALTER TABLE `score`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
