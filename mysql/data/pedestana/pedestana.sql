-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2018 pada 04.35
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pedestana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bnpb`
--

CREATE TABLE `bnpb` (
  `ID_bnpb` int(100) NOT NULL,
  `Nama_bnpb` varchar(50) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Umur` int(100) DEFAULT NULL,
  `Pendidikan` varchar(50) DEFAULT NULL,
  `No_Hp` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bnpb`
--

INSERT INTO `bnpb` (`ID_bnpb`, `Nama_bnpb`, `Tanggal_Lahir`, `Umur`, `Pendidikan`, `No_Hp`) VALUES
(0, 'Belum', '1997-02-27', 20, 'SMA', 787878),
(1, 'Axel Christiant', '2000-12-27', 100, 'SD', 33333333),
(2, 'Budi', '1997-11-27', 20, 'S2', 777777),
(3, 'Bambang', '1990-12-27', 19, 'S3', 33333333),
(4, 'hahah', '6222-02-26', 80, 'SD', 213),
(6, 'tes', '1998-12-27', 8, 'SD', 27),
(7, 'oke', '0006-02-17', 22, 'SD', 33);

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `ID_desa` int(11) NOT NULL,
  `Nama_desa` varchar(50) DEFAULT NULL,
  `Lokasi` varchar(50) DEFAULT NULL,
  `Kategori` varchar(50) DEFAULT NULL,
  `ID_BNPB` int(100) DEFAULT NULL,
  `ID_FASILITATOR` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`ID_desa`, `Nama_desa`, `Lokasi`, `Kategori`, `ID_BNPB`, `ID_FASILITATOR`) VALUES
(2, 'Desa Sukrawetan', 'SD', 'Bagus', 2, 2),
(3, 'Desa manalagi', 'SD', 'Belum', 3, 3),
(4, 'Desa Sukrawetan', 'SMA', 'Belum', 0, 9),
(5, 'desa baciro', 'SD', 'Bagus', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitator`
--

CREATE TABLE `fasilitator` (
  `ID_fasilitator` int(11) NOT NULL,
  `Nama_fasilitator` varchar(50) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Umur` int(100) DEFAULT NULL,
  `Pendidikan` varchar(50) DEFAULT NULL,
  `No_Hp` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitator`
--

INSERT INTO `fasilitator` (`ID_fasilitator`, `Nama_fasilitator`, `Tanggal_Lahir`, `Umur`, `Pendidikan`, `No_Hp`) VALUES
(0, 'Belum', '0007-07-07', 7, 'SD', 72),
(1, 'bambang', '2000-12-27', 30, 'D3', 33333335),
(2, 'James', '1997-11-27', 20, 'S2', 777777),
(3, 'Bebe', '1990-12-27', 193, 'SD', 333333332),
(5, 'Bambang', '2007-12-15', 20, 'SMA', 71878),
(6, 'tes', '1945-08-17', 100, 'SD', 212),
(7, 'bambang', '1945-08-17', 70, 'SMA', 2662626),
(8, 'bagus', '1945-08-17', 0, 'SMA', 787878),
(9, 'tes', '7888-12-27', 6, 'SD', 788),
(10, 'bagus', '1990-09-27', 18, 'S1', 21312);

-- --------------------------------------------------------

--
-- Struktur dari tabel `indikator`
--

CREATE TABLE `indikator` (
  `No` int(100) NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `indikator`
--

INSERT INTO `indikator` (`No`, `Deskripsi`) VALUES
(1, 'Apakah telah ada upaya-upaya awal untuk menyusun kebijakan PRB di tingkat desa atau kelurahan? \r\n						(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 4, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(2, 'Apakah kebijakan PRB di tingkat desa atau kelurahan telah tersusun secara konsultatif dan					melibatkan seluruh pemangku kepentingan?\r\n \r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 4, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(3, 'Apakah kebijakan PRB di tingkat desa atau kelurahan telah dilegalkan dalam bentuk Perdes atau perangkat hukum serupa di kelurahan? (Lanjutkan ke pertanyaan selanjutnya)'),
(4, ' Apakah telah ada upaya-upaya awal untuk menyusun dokumen perencanaan penanggulangan bencana\r\n						seperti Rencana Penanggulangan Bencana, Rencana Aksi PRB atau Rencana Kontinjensi? (Bila ‘Tidak’ lanjutkan ke pertanyaan no. 7, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(5, 'Apakah dokumen perencanaan penanggulangan bencana seperti Rencana Penanggulangan Bencana,\r\n						Rencana Aksi PRB atau Rencana Kontinjensi telah tersusun? \r\n						(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 7, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `ID` int(11) NOT NULL,
  `Indikator` varchar(50) DEFAULT NULL,
  `ID_FASILITATOR` int(100) DEFAULT NULL,
  `ID_BNPB` int(100) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `ID_DESA` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`ID`, `Indikator`, `ID_FASILITATOR`, `ID_BNPB`, `Status`, `ID_DESA`) VALUES
(1, '21111111111111111111111111111111111111111111111111', 5, 7, 'Verified', 3),
(2, '11111', 8, 7, 'Verified', 2),
(3, '11111', 8, 7, 'Verified', 2),
(5, '22121', 8, 7, 'Verified', 5),
(6, '21211', 8, 7, 'Verified', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `ID_fasilitator` int(11) NOT NULL,
  `ID_bnpb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `job`, `ID_fasilitator`, `ID_bnpb`) VALUES
(1, 'axel@admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 0, 0),
(2, 'haha@fasilitator', '2988ea7aa60f0ad2b267830f2461b059', 'fasilitator', 0, 0),
(3, 'tes@fasilitator', 'fasilitator', '0de61e6b6e6df728c456b59604c89029', 0, 0),
(4, 'bambang@fasilitator', '0de61e6b6e6df728c456b59604c89029', 'fasilitator', 7, 0),
(5, 'bagus@fasilitator', '0de61e6b6e6df728c456b59604c89029', 'fasilitator', 8, 0),
(6, 'axel@bnpb', '7d3321956445b711dfd223656704e9fc', 'bnpb', 0, 0),
(7, 'tes@fasilitator', '0de61e6b6e6df728c456b59604c89029', 'fasilitator', 9, 0),
(8, 'tes@bnpb', '7d3321956445b711dfd223656704e9fc', 'bnpb', 0, 0),
(9, 'ya@fasilitator', '0de61e6b6e6df728c456b59604c89029', 'fasilitator', 10, 0),
(10, 'oke@bnpb', '7d3321956445b711dfd223656704e9fc', 'bnpb', 0, 7),
(11, 'bagus@fasilitator', '0de61e6b6e6df728c456b59604c89029', 'fasilitator', 10, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bnpb`
--
ALTER TABLE `bnpb`
  ADD PRIMARY KEY (`ID_bnpb`);

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`ID_desa`),
  ADD KEY `ID_FASILITATOR` (`ID_FASILITATOR`),
  ADD KEY `ID_BNPB` (`ID_BNPB`);

--
-- Indeks untuk tabel `fasilitator`
--
ALTER TABLE `fasilitator`
  ADD PRIMARY KEY (`ID_fasilitator`);

--
-- Indeks untuk tabel `indikator`
--
ALTER TABLE `indikator`
  ADD UNIQUE KEY `No` (`No`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_FASILITATOR` (`ID_FASILITATOR`),
  ADD KEY `ID_BNPB` (`ID_BNPB`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bnpb`
--
ALTER TABLE `bnpb`
  MODIFY `ID_bnpb` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `ID_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `fasilitator`
--
ALTER TABLE `fasilitator`
  MODIFY `ID_fasilitator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD CONSTRAINT `desa_ibfk_1` FOREIGN KEY (`ID_FASILITATOR`) REFERENCES `fasilitator` (`ID_fasilitator`),
  ADD CONSTRAINT `desa_ibfk_2` FOREIGN KEY (`ID_BNPB`) REFERENCES `bnpb` (`ID_bnpb`);

--
-- Ketidakleluasaan untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`ID_FASILITATOR`) REFERENCES `fasilitator` (`ID_fasilitator`),
  ADD CONSTRAINT `laporan_ibfk_2` FOREIGN KEY (`ID_BNPB`) REFERENCES `bnpb` (`ID_bnpb`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
