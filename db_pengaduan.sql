-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 31 Mar 2021 pada 04.50
-- Versi server: 5.7.24
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengaduan`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ambil_pengaduan` ()  NO SQL
SELECT * FROM pengaduan$$

--
-- Fungsi
--
CREATE DEFINER=`root`@`localhost` FUNCTION `totaltanggapan` () RETURNS INT(20) NO SQL
    DETERMINISTIC
BEGIN
DECLARE jml_tanggapan int;

SELECT COUNT(*) as jmlh_tanggapan
INTO jml_tanggapan
FROM tanggapan
WHERE tanggapan = tanggapan;

RETURN jml_tanggapan;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
('123', 'indra', 'indra', '12345', '111111'),
('124', 'indrajaya', 'indrajaya', '12345', '12938'),
('125', 'radika', 'radika', '12345', '124143424'),
('126', 'pantera', 'pantera', '12345', '11111111111'),
('127', 'test #127', 'test#127', '12345', '1234587654'),
('128', 'Wisnu Arya', 'Wisnu Arya', '12345', '0812938472'),
('129', 'Indra', 'indrajaya', '12345', '0182637482'),
('130', 'pantera', 'pantera Jaya', '12345', '018239366793');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` char(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES
(241302396, '2021-03-30', '123', 'ada orang yang terinfeksi coorona', 'corona.jpg', 'selesai'),
(724877881, '2021-03-30', '126', 'Ada Maling di jalan tukad balian', 'back.jpg', 'selesai'),
(984746911, '2021-03-30', '124', 'Ada Pohon Kelapa Yang Mengganggu', 'back.jpg', 'selesai'),
(1110491709, '2021-03-31', '130', 'Ada Banjir Di renon', '1banjir.jpg', 'selesai'),
(1384313529, '2021-03-31', '128', 'Ada Pohon Tebang di jalan Yeh aya', '1pohon tebang.jpg', 'selesai'),
(1549472641, '2021-03-31', '129', 'Ada Kebakaran di jalan tukad balian', '1Kebakaran.jpg', 'selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'petugas', 'petugas', '12345', '0812937492734', 'petugas'),
(2, 'admin', 'admin', '12345', '111111111', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(253625073, 724877881, '2021-03-30', 'Baik, kami segera mengirim personel', 1),
(773062662, 1110491709, '2021-03-31', 'Baik kami mengirim personel', 1),
(1399490138, 1384313529, '2021-03-31', 'Baik, kami akan mengirim Personel ', 1),
(1425694820, 984746911, '2021-03-30', 'Kami Akan mengirim Pemotong Pohon', 1),
(1599099701, 1549472641, '2021-03-31', 'Baik kami akan mengirim personel', 1),
(1659072169, 241302396, '2021-03-30', 'baik, kami akan mengirim tim medis segera', 1);

--
-- Trigger `tanggapan`
--
DELIMITER $$
CREATE TRIGGER `status_porses` AFTER INSERT ON `tanggapan` FOR EACH ROW UPDATE pengaduan SET 
status ='proses'
WHERE pengaduan .id_pengaduan = NEW.id_pengaduan
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_pengaduan` (`id_pengaduan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1117326650;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1659072170;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`);

--
-- Ketidakleluasaan untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`),
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
