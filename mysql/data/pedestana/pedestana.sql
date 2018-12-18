-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2018 pada 06.23
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
  `Pendidikan` varchar(50) DEFAULT NULL,
  `No_Hp` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bnpb`
--

INSERT INTO `bnpb` (`ID_bnpb`, `Nama_bnpb`, `Tanggal_Lahir`, `Pendidikan`, `No_Hp`) VALUES
(0, 'Belum', '1997-02-27', 'SMA', 787878),
(1, 'Axel Christiant', '2000-12-27', 'SD', 33333333),
(2, 'Budi', '1997-11-27', 'S2', 777777),
(3, 'Bambang', '1990-12-27', 'S3', 33333333),
(4, 'hahaha', '6222-02-26', 'SD', 213),
(6, 'tes', '1998-12-27', 'SD', 27),
(7, 'oke', '0006-02-17', 'SD', 33);

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `ID_desa` int(11) NOT NULL,
  `Nama_desa` varchar(50) DEFAULT NULL,
  `Daerah` varchar(50) DEFAULT NULL,
  `Kategori` varchar(50) DEFAULT NULL,
  `ID_BNPB` int(100) DEFAULT NULL,
  `ID_FASILITATOR` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`ID_desa`, `Nama_desa`, `Daerah`, `Kategori`, `ID_BNPB`, `ID_FASILITATOR`) VALUES
(4, 'Desa Sukrawetan', 'SMA', 'Belum', 0, 9),
(5, 'desa baciro', 'SD', 'Utama', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitator`
--

CREATE TABLE `fasilitator` (
  `ID_fasilitator` int(11) NOT NULL,
  `Nama_fasilitator` varchar(50) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Pendidikan` varchar(50) DEFAULT NULL,
  `No_Hp` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitator`
--

INSERT INTO `fasilitator` (`ID_fasilitator`, `Nama_fasilitator`, `Tanggal_Lahir`, `Pendidikan`, `No_Hp`) VALUES
(0, 'Belum', '0007-07-07', 'SD', 72),
(1, 'bambang', '2000-12-27', 'D3', 33333335),
(2, 'James', '1997-11-27', 'S2', 777777),
(3, 'Bebe', '1990-12-27', 'SD', 333333332),
(5, 'Bambang', '2007-12-15', 'SMA', 71878),
(8, 'bagus', '1945-08-17', 'SMA', 787878),
(9, 'tes', '7888-12-27', 'SD', 788),
(10, 'matamu', '1990-09-27', 'S1', 21312),
(11, 'susanto', '1998-11-16', 'S2', 812344321);

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
(5, 'Apakah dokumen perencanaan penanggulangan bencana seperti Rencana Penanggulangan Bencana,\r\n						Rencana Aksi PRB atau Rencana Kontinjensi telah tersusun? \r\n						(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 7, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(6, 'Apakah dokumen perencanaan penanggulangan bencana seperti Rencana Penanggulangan Bencana\r\n						dan Rencana Aksi PRB yang tersusun telah dipadukan ke dalam Rencana Pembangunan Desa atau\r\n						Kelurahan? \r\n						(Lanjutkan ke pertanyaan selanjutnya)'),
(7, 'Apakah telah ada upaya-upaya awal untuk membentuk forum PRB? \r\n						(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 10, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(8, 'Apakah forum PRB yang beranggotakan wakil-wakil dari masyarakat dan pemerintah, termasuk kelompok perempuan dan kelompok rentan telah terbentuk dan mulai berfungsi walau belum terlalu aktif? \r\n						(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 10, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(9, 'Apakah forum PRB yang terbentuk telah berfungsi aktif dengan program-program pengurangan risiko yang terencana dan diimplementasikan dengan baik? \r\n						(Lanjutkan ke pertanyaan selanjutnya)'),
(10, 'Apakah telah ada upaya-upaya awal untuk membentuk tim relawan/siaga PB Desa/Kelurahan yang terutama akan terlibat dalam tanggap darurat bencana, PRB dan pendidikan kebencanaan? \r\n						(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 13, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(11, 'Apakah tim relawan/siaga PB Desa/Kelurahan telah terbentuk dan memiliki kelengkapan personil dan peralatan yang memadai untuk melaksanakan tugasnya?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 13, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(12, 'Apakah tim relawan/siaga PB Desa/Kelurahan telah secara rutin melakukan kegiatan pelatihan, praktik simulasi, dan geladi respons tanggap darurat bagi para anggotanya dan masyarakat, melalui kegiatan-kegiatan yang terencana dan terprogram dengan baik?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(13, 'Dalam upaya pengurangan risiko bencana, apakah sudah ada pembicaraan untuk menjalin kerjasama dengan desa/kelurahan lain, kecamatan, kabupaten, pihak swasta, organisasi sosial dll?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 16, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(14, 'Apakah sudah ada perjanjian kerjasama yang disepakati bersama dengan desa/kelurahan lain, kecamatan, kabupaten, pihak swasta, organisasi sosial, dll?\r\n\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 16, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(15, 'Apakah sudah ada kegiatan-kegiatan pengurangan risiko bencana yang dilakukan dengan cara bekerjasama dengan desa/kelurahan lain, kecamatan, kabupaten, pihak swasta, organisasi sosial dll?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(16, 'Apakah sudah ada upaya-upaya untuk mengumpulkan dan mengalokasikan dana khusus yang akan digunakan untuk upaya tanggap darurat?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no.19, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(17, 'Apakah sudah ada dana khusus yang dikumpulkan baik dari masyarakat, kelompok-kelompok di desa, atau pemerintah desa/kelurahan yang dialokasikan untuk tanggap darurat ketika terjadi bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no.19, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(18, 'Apakah sudah ada pengelola dan mekanisme penggunaan dana khusus tersebut untuk tanggap darurat?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(19, 'Apakah ada upaya-upaya untuk mengalokasikan anggaran desa/kelurahan untuk kegiatan-kegiatan pengurangan risiko bencana, seperti pembangunan tanggul sungai, pemecah gelombang, penanaman pohon, pelatihan kebencanaan, penataan pemukiman, dll?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 22, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(20, 'Apakah sudah ada alokasi anggaran desa/kelurahan yang ditetapkan untuk kegiatan-kegiatan pengurangan risiko bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 22, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(21, 'Apakah sudah ada pengelola dan mekanisme penggunaan anggaran tersebut untuk kegiatan-kegiatan pengurangan risiko bencana?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(22, 'Apakah ada upaya-upaya bagi pemerintah desa/kelurahan untuk melaksanakan/mengikuti pelatihan kebencanaan bagi aparatnya, dan menyediakan perlengkapan dan peralatan, sarana dan pra-sarana, logistik, dan personil untuk penanggulangan bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 25, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(23, 'Apakah pemerintah desa/kelurahan sudah memiliki personil terlatih, perlengkapan dan peralatan, sarana dan pra-sarana, dan logistik untuk melaksanakan upaya pengurangan risiko bencana, operasi tanggap darurat, dan pemulihan paska bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 25, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(24, 'Apakah pemerintah desa/kelurahan sudah memiliki mekanisme pemeliharaan, pemakaian, dan pengembangan personil terlatih, perlengkapan dan peralatan, sarana dan pra-sarana, dan logistik untuk melaksanakan upaya pengurangan risiko bencana, operasi tanggap darurat, dan pemulihan paska bencana?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(25, 'pakah ada upaya-upaya awal untuk memberikan pengetahuan dan kemampuan, kepada tim relawan/siaga bencana desa/kelurahan, tentang analisis risiko, manajemen bencana, kesiapsiagaan, operasi tanggap darurat, dll?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 28, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(26, 'Apakah sudah ada pelatihan-pelatihan yang diberikan kepada tim relawan/siaga bencana desa tentang analisis risiko, manajemen bencana, kesiapsiagaan, operasi tanggap darurat, dan pengurangan risiko bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 28, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(27, 'Apakah ada praktik-praktik evakuasi dan operasi tanggap darurat bencana yang dilakukan oleh tim relawan/siaga bencana desa?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(28, 'Apakah ada upaya-upaya memberikan pengetahuan dan kemampuan dalam bentuk penyuluhan dan penyebaran informasi, kepada warga desa tentang risiko bencana, tanda-tanda ancaman bencana, upaya penyelamatan diri, evakuasi, dan upaya pengurangan risiko bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 31, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(29, 'Apakah ada pelatihan-pelatihan yang diberikan kepada masyarakat tentang risiko bencana, penyelamatan darurat dan upaya pengurangan risiko bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 31, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(30, 'Apakah sudah ada praktik simulasi rutin untuk evakuasi dan penyelamatan darurat yang dilakukan oleh masyarakat bersama dengan tim relawan dan siaga bencana desa?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(31, 'Apakah ada upaya-upaya untuk melibatkan warga desa/kelurahan (selain aparat desa/kelurahan) dalam tim relawan/siaga bencana serta kelompok-kelompok untuk tanggap bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 34, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(32, 'Apakah ada lebih dari 30 warga yang menjadi anggota tim relawan/siaga bencana desa/kelurahan, dan terlibat aktif dalam kegiatan-kegiatan simulasi peringatan dini, evakuasi, dan operasi tanggap darurat?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 34, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(33, 'Apakah ada kelompok-kelompok masyarakat, baik di tingkat RT atau RW atau kelompok lainnya, seperti Karang Taruna dll, yang menyatakan diri sebagai relawan siaga bencana dan melibatkan diri dalam kegiatan-kegiatan simulasi peringatan dini, evakuasi, dan operasi tanggap darurat?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(34, 'Apakah ada upaya-upaya untuk melibatkan perempuan dalam tim relawan/siaga bencana serta kelompok-kelompok untuk tanggap bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 37, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(35, 'Apakah ada lebih dari 15 perempuan yang menjadi anggota tim relawan/siaga bencana desa/kelurahan, dan terlibat aktif dalam kegiatan-kegiatan simulasi peringatan dini, evakuasi, dan operasi tanggap darurat?\r\n\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 37, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(36, 'Apakah ada kelompok-kelompok perempuan di desa/kelurahan seperti kelompok PKK, dasa wisma, kader posyandu dll, yang menyatakan diri sebagai relawan siaga bencana dan melibatkan diri dalam kegiatan-kegiatan simulasi peringatan dini, evakuasi, dan operasi tanggap darurat?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(37, 'Apakah ada upaya-upaya untuk melakukan pemetaan dan analisis ancaman, kerentanan, dan kapasitas desa/kelurahan untuk melihat risiko di desa/kelurahan tersebut?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 40, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(38, 'Apakah ada dokumen hasil analisis risiko di desa/kelurahan yang dibangun berdasarkan keterlibatan seluruh masyarakat, termasuk kelompok rentan seperti orang tua, anak-anak, penyandang cacat, ibu hamil, dll?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 40, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(39, 'Apakah ada kegiatan-kegiatan di desa/kelurahan yang dilaksanakan berdasarkan hasil analisis risiko tersebut, yang kemudian berdampak pada berkurangnya risiko?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(40, 'Apakah sudah ada rencana untuk membuat peta dan jalur evakuasi, dan menyediakan tempat evakuasi khusus untuk tempat pengungsian ketika terjadi bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 43, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(41, 'Apakah peta dan jalur evakuasi sudah dibuat, dan tempat evakuasi untuk tempat pengungsian sudah ditentukan dan dilengkapi dengan perlengkapan dasar seperti P3K, obat-obatan, penerangan darurat dll?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 43, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(42, 'Apakah sudah sering dilakukan praktik simulasi evakuasi dan penyelamatan diri bersama warga desa/kelurahan?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(43, 'Apakah ada upaya-upaya untuk membangun sistem peringatan dini yang berbasis masyarakat untuk memberikan waktu penyelamatan diri dan aset bagi masyarakat?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 46, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(44, 'Apakah sistem peringatan dini sudah dilengkapi dengan data/informasi, peralatan dan personil yang memadai untuk menjalankan fungsinya, serta mekanisme penyampaian informasi yang cepat, akurat dan jelas kepada seluruh warga?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 46, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(45, 'Apakah sudah sering dilakukan praktik simulasi pelaksanaan sistem peringatan dini bersama warga desa/kelurahan?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(46, 'Apakah sudah ada rencana untuk melakukan pembangunan fisik (mitigasi) untuk mengurangi risiko bencana di desa/kelurahan, seperti memperkuat tanggul sungai, pemecah gelombang, bangunan tahan gempa, dll?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 49, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(47, 'Apakah sudah ada kegiatan pembangunan fisik (mitigasi) yang dilaksanakan untuk mengurangi risiko bencana di desa/kelurahan, seperti memperkuat tanggul sungai, pemecah gelombang, bangunan tahan gempa dll?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 49, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(48, 'pakah ada mekanisme pengelolaan dan pemeliharaan pembangunan fisik tersebut untuk menjamin kelestariannya serta upaya untuk menyebar-luaskannya?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(49, 'Apakah ada rencana pengembangan ekonomi untuk mengurangi kerentanan masyarakat, baik berupa meningkatkan produksi, memperluas akses pasar, maupun membuat sumber ekonomi lain yang lebih aman dari ancaman bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 52, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(50, 'Apakah sudah ada kegiatan-kegiatan pengembangan ekonomi yang dilaksanakan untuk mengurangi kerentanan masyarakat, baik berupa meningkatkan produksi, memperluas akses pasar, maupun membuat sumber ekonomi lain yang lebih aman dari ancaman bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 52, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(51, 'Apakah ada mekanisme untuk menjamin keberlanjutan pengembangan ekonomi tersebut dan upaya untuk memperluas pelaku ekonomi sampai pada seluruh warga desa/kelurahan?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(52, 'Apakah ada rencana untuk memberikan perlindungan kesehatan kepada kelompok-kelompok rentan seperti orang tua, penyandang cacat, anak kecil, ibu hamil dll, terhadap akibat dari bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 55, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(53, 'Apakah sudah ada skema program perlindungan kesehatan dan santunan sosial kepada kelompokkelompok rentan seperti orang tua, penyandang cacat, anak kecil, ibu hamil dll, terhadap akibat dari bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 55, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(54, 'Apakah sudah ada pengelola, mekanisme dan prosedur pelaksanaan program perlindungan kesehatan dan santunan sosial kepada kelompok-kelompok rentan seperti orang tua, penyandang cacat, anak kecil, ibu hamil dll, terhadap akibat dari bencana?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(55, 'Apakah ada rencana untuk pengelolaan sumber daya alam, seperti hutan, sungai, pantai dll, untuk upaya pengurangan risiko bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 58, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(56, 'Apakah sudah ada kegiatan-kegiatan pengelolaan sumber daya alam, seperti pengelolaan hutan, sungai, pantai dll, yang dilaksanakan untuk upaya pengurangan risiko bencana?\r\n\r\n(Bila ‘Tidak’ lanjutkan ke pertanyaan no. 58, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(57, 'Apakah sudah ada mekanisme untuk menjamin keberlanjutan pengelolaan sumber daya alam untuk pengurangan risiko bencana dalam kurun waktu yang panjang?\r\n\r\n(Lanjutkan ke pertanyaan selanjutnya)'),
(58, 'Apakah ada upaya-upaya untuk melakukan perlindungan aset-aset produktif utama masyarakat dari dampak bencana?\r\n\r\n(Bila ‘Tidak’ pertanyaan selesai, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(59, 'Apakah ada kegiatan yang jelas untuk melakukan perlindungan aset produktif masyarakat seperti asuransi komunitas, gudang bersama, dll?\r\n\r\n(Bila ‘Tidak’ pertanyaan selesai, bila ‘Ya’ lanjutkan ke pertanyaan selanjutnya)'),
(60, 'Apakah ada pengelola dan mekanisme yang jelas untuk menjalankan dan memelihara perlindungan aset produktif masyarakat?\r\n\r\n(Pertanyaan selesai)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `ID` int(11) NOT NULL,
  `Indikator` varchar(100) DEFAULT NULL,
  `ID_FASILITATOR` int(100) DEFAULT NULL,
  `ID_BNPB` int(100) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `ID_DESA` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`ID`, `Indikator`, `ID_FASILITATOR`, `ID_BNPB`, `Status`, `ID_DESA`) VALUES
(5, '22121', 8, 7, 'Verified', 5),
(6, '21211', 8, 7, 'Verified', 5),
(8, '', 1, 0, 'Proses Pelaporan', 5),
(10, '3223232323', 10, 7, 'Verified', 5),
(11, '1111111111', 11, 0, 'Waiting', 6),
(13, '11111111111111111111111111111111111111111111111111', 11, 0, 'Waiting', 6),
(14, '11111111111111111111111111111111111111111111111111', 11, 0, 'Waiting', 6),
(16, '111111111111111111111111111111111111111111111111111111111111', 11, 0, 'Waiting', 4);

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
(11, 'matamu@fasilitator', '0de61e6b6e6df728c456b59604c89029', 'fasilitator', 10, 0),
(12, 'Joko@bnpb', '7d3321956445b711dfd223656704e9fc', 'bnpb', 0, 8),
(13, 'susanto@fasilitator', '0de61e6b6e6df728c456b59604c89029', 'fasilitator', 11, 0);

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
  MODIFY `ID_fasilitator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
