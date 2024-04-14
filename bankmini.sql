-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 15 Jun 2020 pada 09.39
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankmini`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayar_spp`
--

CREATE TABLE `bayar_spp` (
  `id_siswa` bigint(1) NOT NULL,
  `nisn` varchar(12) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `januari` varchar(11) NOT NULL,
  `februari` varchar(11) NOT NULL,
  `maret` varchar(11) NOT NULL,
  `april` varchar(11) NOT NULL,
  `mei` varchar(11) NOT NULL,
  `juni` varchar(11) NOT NULL,
  `juli` varchar(11) NOT NULL,
  `agustus` varchar(11) NOT NULL,
  `september` varchar(11) NOT NULL,
  `oktober` varchar(11) NOT NULL,
  `november` varchar(11) NOT NULL,
  `desember` varchar(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bayar_spp`
--

INSERT INTO `bayar_spp` (`id_siswa`, `nisn`, `nama`, `januari`, `februari`, `maret`, `april`, `mei`, `juni`, `juli`, `agustus`, `september`, `oktober`, `november`, `desember`, `total_bayar`, `tahun`) VALUES
(2, '8123912', 'Don Quixote', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 4200000, 0),
(3, '2131312', 'Nia Ramdhani', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 3850000, 0),
(4, '', '', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 4200000, 0),
(5, '', '', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 4200000, 0),
(11, '', '', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 3850000, 0),
(12, '', '', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 3850000, 0),
(13, '', '', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 4200000, 2021),
(14, '', '', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 4200000, 2021),
(15, '', '', 'Lunas', 'Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 'Belum Lunas', 3500000, 2021);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ki`
--

CREATE TABLE `ki` (
  `id` bigint(1) NOT NULL,
  `nisn` int(30) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `cicilan` int(11) NOT NULL,
  `petugas` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ki`
--

INSERT INTO `ki` (`id`, `nisn`, `nama`, `tanggal`, `tahun`, `nominal`, `cicilan`, `petugas`) VALUES
(9, 32502132, 'Andre Rafli', 1591882303, 2020, 1500000, 0, 'Kasir'),
(10, 2131232, 'Angga Cahyo', 1591947817, 2021, 1500000, 0, 'Kasir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seragam`
--

CREATE TABLE `seragam` (
  `id` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `cicilan` int(11) NOT NULL,
  `petugas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `seragam`
--

INSERT INTO `seragam` (`id`, `nisn`, `nama`, `tanggal`, `tahun`, `nominal`, `cicilan`, `petugas`) VALUES
(10, 32502132, 'Andre Rafli', 1591882285, 2020, 1500000, 0, 'Kasir'),
(11, 2131232, 'Angga Cahyo', 1591947774, 2021, 1000000, 500000, 'Kasir'),
(12, 2131232, 'Angga Cahyo', 1591947794, 2021, 500000, 0, 'Kasir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(30) NOT NULL,
  `nisn` int(30) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `date` int(4) NOT NULL,
  `tabungan` int(8) NOT NULL,
  `bayar_ki` int(8) NOT NULL,
  `ket_ki` varchar(11) NOT NULL,
  `bayar_seragam` int(8) NOT NULL,
  `ket_seragam` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `nama`, `jenis_kelamin`, `date`, `tabungan`, `bayar_ki`, `ket_ki`, `bayar_seragam`, `ket_seragam`) VALUES
(13, 32502132, 'Andre Rafli', 'Laki - laki', 2020, 14999000, 0, 'Lunas', 0, 'Lunas'),
(14, 32515115, 'Andre Saputra', 'Laki - laki', 2020, 0, 1500000, 'Belum Lunas', 1500000, 'Belum Lunas'),
(15, 2131232, 'Angga Cahyo', 'Laki - laki', 2021, 5000, 0, 'Lunas', 0, 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `id` int(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nisn` varchar(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `bulan` varchar(11) NOT NULL,
  `tahun` varchar(11) NOT NULL,
  `keterangan` varchar(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `petugas` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id`, `nama`, `nisn`, `tanggal`, `bulan`, `tahun`, `keterangan`, `nominal`, `petugas`) VALUES
(34, 'Andre Rafli', '32502132', 1591882235, 'januari', '2020', 'Lunas', 350000, 'Kasir'),
(35, 'Andre Rafli', '32502132', 1591882240, 'februari', '2020', 'Lunas', 350000, 'Kasir'),
(36, 'Andre Saputra', '32515115', 1591882251, 'februari', '2020', 'Lunas', 350000, 'Kasir'),
(37, 'Andre Saputra', '32515115', 1591882255, 'januari', '2020', 'Lunas', 350000, 'Kasir'),
(38, 'Angga Cahyo', '2131232', 1591947683, 'januari', '2021', 'Lunas', 350000, 'Kasir'),
(39, 'Angga Cahyo', '2131232', 1591947733, 'februari', '2021', 'Lunas', 350000, 'Kasir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE `tahun` (
  `id` bigint(1) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahun`
--

INSERT INTO `tahun` (`id`, `tahun`) VALUES
(2049, 2020),
(2050, 2021);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(125) NOT NULL,
  `name` varchar(35) NOT NULL,
  `image` varchar(125) NOT NULL,
  `jabatan` varchar(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `image`, `jabatan`, `date_created`) VALUES
(34, 'admin', '$2y$10$s.4KlHvmrCCD/KMowET0/eeWceV.awk47CRhNf8npCNvOimgiiK7S', 'Admin', 'cube-abstract-wallpaper-preview.jpg', 'admin', 1591880770),
(35, 'kasir', '$2y$10$wyrc2DsKDjWdM8Fs2afkaOCoNNeOnzS6xBFM23CqZjgeNLEHZN.FC', 'Kasir', 'default.jpg', 'kasir', 1591880791);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bayar_spp`
--
ALTER TABLE `bayar_spp`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `ki`
--
ALTER TABLE `ki`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `seragam`
--
ALTER TABLE `seragam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bayar_spp`
--
ALTER TABLE `bayar_spp`
  MODIFY `id_siswa` bigint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `ki`
--
ALTER TABLE `ki`
  MODIFY `id` bigint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `seragam`
--
ALTER TABLE `seragam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id` bigint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2051;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
