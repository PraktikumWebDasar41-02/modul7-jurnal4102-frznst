-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 05.14
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `profl`
--

CREATE TABLE `profl` (
  `nama` varchar(50) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `fakultas` varchar(5) NOT NULL,
  `asal` text NOT NULL,
  `moto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profl`
--

INSERT INTO `profl` (`nama`, `nim`, `tanggal`, `jk`, `prodi`, `fakultas`, `asal`, `moto`) VALUES
('firza', '6701174082', '2018-10-19', 'pria', 'MI', 'FIT', 'Medan', 'sdssss'),
('elisa', '6701174086', '2018-10-20', 'pria', 'MI', 'FIK', 'Jakarta', 'ASkuuu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `profl`
--
ALTER TABLE `profl`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
