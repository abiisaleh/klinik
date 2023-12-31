-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2023 pada 11.09
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
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_pasien`
--

CREATE TABLE `kode_pasien` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `asesmen` text NOT NULL,
  `diagnosa` text NOT NULL,
  `terapi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jk` enum('P','L') NOT NULL,
  `tempatlahir` varchar(25) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` text NOT NULL,
  `jenis` enum('Umum','Mahasiswa','Dosen') NOT NULL,
  `nim` varchar(25) NOT NULL,
  `gejala` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id`, `kode`, `nama`, `jk`, `tempatlahir`, `ttl`, `alamat`, `jenis`, `nim`, `gejala`) VALUES
(1, '2f45', 'riska comel', 'P', 'sunda', '2004-05-27', 'cibolang', 'Umum', '20220050112', 'terlalu kaya'),
(4, '1234333', 'riska', 'L', 'jayapura', '2000-02-07', 'maslakunnidzom', 'Dosen', '20220050112', 'banyak uang'),
(5, '1234333', 'riska', '', 'jayapura', '0000-00-00', 'maslakunnidzom', '', '20220050112', 'banyak uang'),
(6, '', '', '', '', '0000-00-00', '', '', '', ''),
(10, '1234', '', '', '', '0000-00-00', '', '', '', ''),
(11, '1234333', '', '', '', '0000-00-00', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kode_pasien`
--
ALTER TABLE `kode_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kode_pasien`
--
ALTER TABLE `kode_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
