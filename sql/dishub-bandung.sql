-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Sep 2020 pada 14.29
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dishub-bandung`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pwd` longtext NOT NULL,
  `ID_detail-admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID_admin`, `username`, `pwd`, `ID_detail-admin`) VALUES
(1, 'shendi', 'ac95297dea1af2d00ce781eb899dda9b', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail-admin`
--

CREATE TABLE `detail-admin` (
  `ID_detail-admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail-admin`
--

INSERT INTO `detail-admin` (`ID_detail-admin`, `nama`, `email`, `no_hp`, `alamat`) VALUES
(1, 'shendi permana', 'shendi@gmail.com', '085283584219', 'antapani kota bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `ID_dokumentasi` int(11) NOT NULL,
  `judul-dokumentasi` varchar(30) NOT NULL,
  `img-cover` varchar(250) NOT NULL,
  `text_dokumentasi` text NOT NULL,
  `waktu-upload` datetime NOT NULL,
  `ID_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokumentasi`
--

INSERT INTO `dokumentasi` (`ID_dokumentasi`, `judul-dokumentasi`, `img-cover`, `text_dokumentasi`, `waktu-upload`, `ID_admin`) VALUES
(2, 'Operasi Penertiban Parkir Liar', 'tilang', 'Bandung kerap dilanda kemacetan. Parkir liar dituding menjadi salah satu dalang utama kemacetan kota kembang. Sementara aktivitas lalu lintas dengan kain meningkatkan volume kendaraan di Kota Bandung memang semakin padat. Tak pelak, kemacetan pun banyak terjadi beberapa titik pusat perbelanjaan maupun jalan protokol di Kota Bandung. Penegakan Perda terkait pelanggaran parkir liar dilakukan Dishub bersama Polrestabes Kota Bandung untuk dapat menciptakan kondisi kondusif di ruas jalan Kota Bandung.', '2020-09-08 21:49:05', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto-kegiantan`
--

CREATE TABLE `foto-kegiantan` (
  `ID_foto-kegiatan` int(11) NOT NULL,
  `foto-kegiatan` varchar(250) NOT NULL,
  `ID_dokumentasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `ID_informasi` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `judul_informasi` varchar(60) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `text_informasi` text NOT NULL,
  `waktu-upload` datetime NOT NULL,
  `ID_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`ID_informasi`, `img`, `judul_informasi`, `kategori`, `text_informasi`, `waktu-upload`, `ID_admin`) VALUES
(3, 'dishub1', 'Kota Bandung Akan Aktifkan Check Point Lagi', 'Informasi Berkala', 'Posko check point di Kota Bandung direncanakan akan kembali diaktifkan guna pencegahan penyebaran Covid-19.\r\n\r\nPemerintah Kota (Pemkot) Bandung melalui Dinas Perhubungan (Dishub) direncanakan mengaktifkan lagi check point di sejumlah jalur perbatasan Kota ataupun Kabupaten di ring 2 dan ring 3.\r\n\r\nMengenai pengaktifan kembali check point di Kota Bandung hal ini akan terlebih dahulu dilakukan pembahasan dalam forum lalu lintas angkutan jalan yang melibatkan banyak pihak.', '2020-09-10 18:41:21', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_admin`),
  ADD KEY `ID_detail-admin` (`ID_detail-admin`);

--
-- Indeks untuk tabel `detail-admin`
--
ALTER TABLE `detail-admin`
  ADD PRIMARY KEY (`ID_detail-admin`);

--
-- Indeks untuk tabel `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`ID_dokumentasi`),
  ADD KEY `ID_admin` (`ID_admin`);

--
-- Indeks untuk tabel `foto-kegiantan`
--
ALTER TABLE `foto-kegiantan`
  ADD PRIMARY KEY (`ID_foto-kegiatan`),
  ADD KEY `ID_dokumentasi` (`ID_dokumentasi`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`ID_informasi`),
  ADD KEY `ID_admin` (`ID_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `detail-admin`
--
ALTER TABLE `detail-admin`
  MODIFY `ID_detail-admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `ID_dokumentasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `foto-kegiantan`
--
ALTER TABLE `foto-kegiantan`
  MODIFY `ID_foto-kegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `ID_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`ID_detail-admin`) REFERENCES `detail-admin` (`ID_detail-admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD CONSTRAINT `dokumentasi_ibfk_1` FOREIGN KEY (`ID_admin`) REFERENCES `admin` (`ID_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `foto-kegiantan`
--
ALTER TABLE `foto-kegiantan`
  ADD CONSTRAINT `foto-kegiantan_ibfk_1` FOREIGN KEY (`ID_dokumentasi`) REFERENCES `dokumentasi` (`ID_dokumentasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `informasi_ibfk_1` FOREIGN KEY (`ID_admin`) REFERENCES `admin` (`ID_admin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
