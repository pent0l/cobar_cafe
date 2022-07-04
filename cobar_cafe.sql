-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2022 pada 05.47
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cobar_cafe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_menu`
--

CREATE TABLE `jenis_menu` (
  `id_jenis_menu` int(3) NOT NULL,
  `jenis_menu` varchar(30) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_menu`
--

INSERT INTO `jenis_menu` (`id_jenis_menu`, `jenis_menu`, `status`, `created_at`) VALUES
(1, 'Makanan', 0, '2022-05-21 01:45:01'),
(2, 'Minuman', 0, '2022-05-21 01:45:01'),
(3, 'Makanan', 1, '2022-05-21 01:46:01'),
(4, 'Minuman', 2, '2022-05-21 01:46:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(3) NOT NULL,
  `id_jenis_menu` int(3) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `stok` int(3) NOT NULL,
  `harga` double NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `id_jenis_menu`, `nama_menu`, `stok`, `harga`, `created_at`) VALUES
(3, 3, 'nasi goreng', 12, 15000, '2022-05-21 01:51:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `level` enum('Kasir','Manajer') NOT NULL,
  `username` varchar(39) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `level`, `username`, `password`) VALUES
(1, 'Haikal Chandrakuma T.', 'Manajer', 'tamu', '74be16979710d4c4e7c6647856088456'),
(2, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(4, 'Haikal Chandrakuma T.', 'Manajer', 'tamu', '0320116b2af221a6f673f93925b3fc62');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_menu`
--
ALTER TABLE `jenis_menu`
  ADD PRIMARY KEY (`id_jenis_menu`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `fk_menu` (`id_jenis_menu`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_menu`
--
ALTER TABLE `jenis_menu`
  MODIFY `id_jenis_menu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_menu` FOREIGN KEY (`id_jenis_menu`) REFERENCES `jenis_menu` (`id_jenis_menu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
