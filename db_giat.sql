-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2020 pada 18.28
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_giat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_home`
--

CREATE TABLE `tbl_home` (
  `id` int(3) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_home`
--

INSERT INTO `tbl_home` (`id`, `judul`, `isi`) VALUES
(1, 'Rental', 'Rental isi'),
(2, 'Pengiriman Barang', 'Jasa isi'),
(3, 'Testi', 'Testi isi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jasa`
--

CREATE TABLE `tbl_jasa` (
  `id_jasa` int(3) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `vendor_cde` varchar(50) NOT NULL,
  `vendor_cdd` varchar(50) NOT NULL,
  `ex_cde` varchar(100) NOT NULL,
  `ex_cdd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jasa`
--

INSERT INTO `tbl_jasa` (`id_jasa`, `tujuan`, `vendor_cde`, `vendor_cdd`, `ex_cde`, `ex_cdd`) VALUES
(1, 'Semarang', '50', '60', '70', '80');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jasa_konten`
--

CREATE TABLE `tbl_jasa_konten` (
  `id_jasa_konten` int(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jasa_konten`
--

INSERT INTO `tbl_jasa_konten` (`id_jasa_konten`, `judul`, `foto`) VALUES
(1, 'Tessssq', '4b41dadb4f9326b667199ecbd642ae7e.jpg'),
(4, 'Tessssq', '4b41dadb4f9326b667199ecbd642ae7e.jpg'),
(5, 'Tessssq', '4b41dadb4f9326b667199ecbd642ae7e.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id_kontak`, `nama`, `isi`) VALUES
(1, 'Nomor telp/wa', '83866290458'),
(2, 'Alamat', 'Semarangg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_landing`
--

CREATE TABLE `tbl_landing` (
  `id_landing` int(3) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `isi` varchar(500) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_landing`
--

INSERT INTO `tbl_landing` (`id_landing`, `judul`, `isi`, `foto`) VALUES
(1, 'Giat Sanjaya', 'isi', 'hero_2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_layanan`
--

CREATE TABLE `tbl_layanan` (
  `id_layanan` int(3) NOT NULL,
  `judul_1` varchar(100) DEFAULT NULL,
  `judul_2` varchar(100) DEFAULT NULL,
  `judul_3` varchar(100) DEFAULT NULL,
  `isi_1` varchar(500) DEFAULT NULL,
  `isi_2` varchar(500) DEFAULT NULL,
  `isi_3` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_layanan`
--

INSERT INTO `tbl_layanan` (`id_layanan`, `judul_1`, `judul_2`, `judul_3`, `isi_1`, `isi_2`, `isi_3`) VALUES
(1, 'Layanan tes', 'Pengiriman', 'Rental', 'Isi Layanan', 'Isi Pengiriman', 'Isi Rental');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_moto` varchar(100) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_tentang` text DEFAULT NULL,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_facebook` varchar(35) DEFAULT NULL,
  `pengguna_twitter` varchar(35) DEFAULT NULL,
  `pengguna_linkdin` varchar(35) DEFAULT NULL,
  `pengguna_google_plus` varchar(35) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT 1,
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT current_timestamp(),
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_moto`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_tentang`, `pengguna_email`, `pengguna_nohp`, `pengguna_facebook`, `pengguna_twitter`, `pengguna_linkdin`, `pengguna_google_plus`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(1, 'Administrator', 'Just do it', 'L', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '-', 'fikrifiver97@gmail.com', '', '', '', '', '', 1, '1', '2016-09-03 06:07:55', '0f050fb938257f539cc72fffd9c5777a.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rental`
--

CREATE TABLE `tbl_rental` (
  `id_rental` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_rental`
--

INSERT INTO `tbl_rental` (`id_rental`, `nama`, `harga`, `foto`) VALUES
(1, 'Mobil', '500000', 'img_1.jpg'),
(3, 'Movil vv', '30000', 'e633cbbc31480578b850e94ced3e6f01.jpg'),
(4, 'Movil vv', '30000', 'e633cbbc31480578b850e94ced3e6f01.jpg'),
(5, 'Movil vv', '30000', 'e633cbbc31480578b850e94ced3e6f01.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_testi`
--

CREATE TABLE `tbl_testi` (
  `id_testi` int(3) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `testi` varchar(500) DEFAULT NULL,
  `foto` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_testi`
--

INSERT INTO `tbl_testi` (`id_testi`, `nama`, `testi`, `foto`) VALUES
(1, 'wahid', 'test', 'avatar1.jpg'),
(2, 'wahids', 'tests', 'avatar1.jpg'),
(3, 'wahidss', 'testss', 'avatar1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_welcome`
--

CREATE TABLE `tbl_welcome` (
  `id_welcome` int(3) NOT NULL,
  `judul_1` varchar(100) DEFAULT NULL,
  `isi_1` varchar(500) DEFAULT NULL,
  `judul_2` varchar(100) DEFAULT NULL,
  `isi_2` varchar(500) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_welcome`
--

INSERT INTO `tbl_welcome` (`id_welcome`, `judul_1`, `isi_1`, `judul_2`, `isi_2`, `foto`) VALUES
(1, 'Selamat Datang di Giat Sanjaya', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in,', 'Lorem impsum dolor', 'Lorem ipsum dolor s\r\n                        ', 'hero_2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_jasa`
--
ALTER TABLE `tbl_jasa`
  ADD PRIMARY KEY (`id_jasa`);

--
-- Indeks untuk tabel `tbl_jasa_konten`
--
ALTER TABLE `tbl_jasa_konten`
  ADD PRIMARY KEY (`id_jasa_konten`);

--
-- Indeks untuk tabel `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `tbl_landing`
--
ALTER TABLE `tbl_landing`
  ADD PRIMARY KEY (`id_landing`);

--
-- Indeks untuk tabel `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indeks untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indeks untuk tabel `tbl_rental`
--
ALTER TABLE `tbl_rental`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indeks untuk tabel `tbl_testi`
--
ALTER TABLE `tbl_testi`
  ADD PRIMARY KEY (`id_testi`);

--
-- Indeks untuk tabel `tbl_welcome`
--
ALTER TABLE `tbl_welcome`
  ADD PRIMARY KEY (`id_welcome`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_jasa`
--
ALTER TABLE `tbl_jasa`
  MODIFY `id_jasa` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_jasa_konten`
--
ALTER TABLE `tbl_jasa_konten`
  MODIFY `id_jasa_konten` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_landing`
--
ALTER TABLE `tbl_landing`
  MODIFY `id_landing` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  MODIFY `id_layanan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_rental`
--
ALTER TABLE `tbl_rental`
  MODIFY `id_rental` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_testi`
--
ALTER TABLE `tbl_testi`
  MODIFY `id_testi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_welcome`
--
ALTER TABLE `tbl_welcome`
  MODIFY `id_welcome` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
