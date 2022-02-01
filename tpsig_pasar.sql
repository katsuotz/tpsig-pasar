-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Feb 2022 pada 19.31
-- Versi server: 8.0.27-0ubuntu0.20.04.1
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpsig-pasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasar`
--

CREATE TABLE `pasar` (
  `id` int NOT NULL,
  `nama_pasar` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data untuk tabel `pasar`
--

INSERT INTO `pasar` (`id`, `nama_pasar`, `latitude`, `longitude`) VALUES
(1, 'Pasar Kosambi', -6.919251405258115, 107.62213149456703),
(2, 'Pasar Kiaracondong', -6.926351893219662, 107.64501282762963),
(3, 'Pasar Antapani', -6.912511407305529, 107.6568292330178),
(4, 'Pasar Sukahaji', -6.927997062256401, 107.58591941379484),
(5, 'Pasar Saerun', -6.931086276844508, 107.64099171956711),
(6, 'Pasar Wastukencana', -6.9047510158945276, 107.60736954758836),
(7, 'Pasar Gempol', -6.903061046683859, 107.61549757464184),
(8, 'Pasar Simpang Dago', -6.884903067970937, 107.6140582438686),
(9, 'Pasar Sadang Serang', -6.892018185063442, 107.62508864304577),
(10, 'Pasar Baru Trade Center', -6.917572189332371, 107.60407331841502);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pasar`
--
ALTER TABLE `pasar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pasar`
--
ALTER TABLE `pasar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
