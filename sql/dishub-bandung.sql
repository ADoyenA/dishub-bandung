-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2021 pada 04.21
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

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
  `ID_detail_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID_admin`, `username`, `pwd`, `ID_detail_admin`) VALUES
(2, 'shendi', 'ac95297dea1af2d00ce781eb899dda9b', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_admin`
--

CREATE TABLE `detail_admin` (
  `ID_detail_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_admin`
--

INSERT INTO `detail_admin` (`ID_detail_admin`, `nama`, `email`, `alamat`, `no_hp`) VALUES
(1, 'shendi permana', 'shendi@gmail.com', 'jalan antapani lama', '085276894019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `ID_dokumentasi` int(11) NOT NULL,
  `judul_dokumentasi` varchar(30) NOT NULL,
  `img_cover` varchar(250) NOT NULL,
  `text_dokumentasi` text NOT NULL,
  `waktu_upload` date NOT NULL,
  `ID_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokumentasi`
--

INSERT INTO `dokumentasi` (`ID_dokumentasi`, `judul_dokumentasi`, `img_cover`, `text_dokumentasi`, `waktu_upload`, `ID_admin`) VALUES
(4, 'Operasi Penertiban Parkir Liar', '', 'Bandung kerap dilanda kemacetan. Parkir liar dituding menjadi salah satu dalang utama kemacetan kota kembang. Sementara aktivitas lalu lintas dengan kain meningkatkan volume kendaraan di Kota Bandung memang semakin padat. Tak pelak, kemacetan pun banyak terjadi beberapa titik pusat perbelanjaan maupun jalan protokol di Kota Bandung. Penegakan Perda terkait pelanggaran parkir liar dilakukan Dishub bersama Polrestabes Kota Bandung untuk dapat menciptakan kondisi kondusif di ruas jalan Kota Bandung.', '2020-09-14', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_kegiatan`
--

CREATE TABLE `foto_kegiatan` (
  `ID_foto_kegiatan` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
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
  `waktu_upload` date NOT NULL,
  `ID_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`ID_informasi`, `img`, `judul_informasi`, `kategori`, `text_informasi`, `waktu_upload`, `ID_admin`) VALUES
(4, '', 'Kota Bandung Akan Aktifkan Check Point Lagi', 'Informasi Berkala', 'Posko check point di Kota Bandung direncanakan akan kembali diaktifkan guna pencegahan penyebaran Covid-19.\r\n\r\nPemerintah Kota (Pemkot) Bandung melalui Dinas Perhubungan (Dishub) direncanakan mengaktifkan lagi check point di sejumlah jalur perbatasan Kota ataupun Kabupaten di ring 2 dan ring 3.\r\n\r\nMengenai pengaktifan kembali check point di Kota Bandung hal ini akan terlebih dahulu dilakukan pembahasan dalam forum lalu lintas angkutan jalan yang melibatkan banyak pihak.', '2020-09-14', 2),
(12, '', 'Bus Bandros BandungBus Bandros Bandung', 'Informasi Berkala', 'Bandros atau Bandung tour on bus adalah bus yang ditujukan untuk wisatawan. Tampilan bus ini tak sama dengan bus pada umumnya, karena bus Bandros memiliki warna-warni permen dengan tema art deco.\r\n\r\nSaat naik bus Bandros kamu nggak cuma diajak berkeliling Bandung, tapi kamu juga akan diajak “mengenal Bandung lebih dalam”. Pasalnya di setiap Bandros ada pemandu wisatanya yang akan bercerita asal-usul jalan, kisah di setiap tempat wisata hingga beragam cerita lainnya.', '2020-12-27', 2),
(13, 'update lewat postman', 'Kota Bandung Akan Aktifkan Check Point Lagi update lewat pos', 'Informasi Berkala', 'Posko check point di Kota Bandung direncanakan akan kembali diaktifkan guna pencegahan penyebaran Covid-19.\r\n\r\nPemerintah Kota (Pemkot) Bandung melalui Dinas Perhubungan (Dishub) direncanakan mengaktifkan lagi check point di sejumlah jalur perbatasan Kota ataupun Kabupaten di ring 2 dan ring 3.\r\n\r\nMengenai pengaktifan kembali check point di Kota Bandung hal ini akan terlebih dahulu dilakukan pembahasan dalam forum lalu lintas angkutan jalan yang melibatkan banyak pihak.', '2020-09-14', 2),
(14, 'update lewat postman', 'Kota Bandung Akan Aktifkan Check Point Lagi update lewat pos', 'Informasi Berkala', 'Posko check point di Kota Bandung direncanakan akan kembali diaktifkan guna pencegahan penyebaran Covid-19.\r\n\r\nPemerintah Kota (Pemkot) Bandung melalui Dinas Perhubungan (Dishub) direncanakan mengaktifkan lagi check point di sejumlah jalur perbatasan Kota ataupun Kabupaten di ring 2 dan ring 3.\r\n\r\nMengenai pengaktifan kembali check point di Kota Bandung hal ini akan terlebih dahulu dilakukan pembahasan dalam forum lalu lintas angkutan jalan yang melibatkan banyak pihak.', '2020-09-14', 2),
(15, 'update lewat postman', 'Kota Bandung Akan Aktifkan Check Point Lagi update lewat pos', 'Informasi Berkala', 'Posko check point di Kota Bandung direncanakan akan kembali diaktifkan guna pencegahan penyebaran Covid-19.\r\n\r\nPemerintah Kota (Pemkot) Bandung melalui Dinas Perhubungan (Dishub) direncanakan mengaktifkan lagi check point di sejumlah jalur perbatasan Kota ataupun Kabupaten di ring 2 dan ring 3.\r\n\r\nMengenai pengaktifan kembali check point di Kota Bandung hal ini akan terlebih dahulu dilakukan pembahasan dalam forum lalu lintas angkutan jalan yang melibatkan banyak pihak.', '2020-09-14', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_admin`),
  ADD KEY `ID_detail-admin` (`ID_detail_admin`);

--
-- Indeks untuk tabel `detail_admin`
--
ALTER TABLE `detail_admin`
  ADD PRIMARY KEY (`ID_detail_admin`);

--
-- Indeks untuk tabel `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`ID_dokumentasi`),
  ADD KEY `ID_admin` (`ID_admin`);

--
-- Indeks untuk tabel `foto_kegiatan`
--
ALTER TABLE `foto_kegiatan`
  ADD PRIMARY KEY (`ID_foto_kegiatan`),
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
  MODIFY `ID_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `detail_admin`
--
ALTER TABLE `detail_admin`
  MODIFY `ID_detail_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `ID_dokumentasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `foto_kegiatan`
--
ALTER TABLE `foto_kegiatan`
  MODIFY `ID_foto_kegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `ID_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`ID_detail_admin`) REFERENCES `detail_admin` (`ID_detail_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD CONSTRAINT `dokumentasi_ibfk_1` FOREIGN KEY (`ID_admin`) REFERENCES `admin` (`ID_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `foto_kegiatan`
--
ALTER TABLE `foto_kegiatan`
  ADD CONSTRAINT `foto_kegiatan_ibfk_1` FOREIGN KEY (`ID_dokumentasi`) REFERENCES `dokumentasi` (`ID_dokumentasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `informasi_ibfk_1` FOREIGN KEY (`ID_admin`) REFERENCES `admin` (`ID_admin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
