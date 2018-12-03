-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 10:02 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

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
-- Table structure for table `bnpb`
--

CREATE TABLE `bnpb` (
  `id_bnpb` int(11) NOT NULL,
  `nama_bnpb` varchar(50) NOT NULL,
  `tanggal_lahir_bnpb` date NOT NULL,
  `pendidikan_bnpb` varchar(30) NOT NULL,
  `email_bnpb` varchar(50) NOT NULL,
  `noHp_bnpb` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitator`
--

CREATE TABLE `fasilitator` (
  `id_fasilitator` int(11) NOT NULL,
  `nama_fasilitator` varchar(50) NOT NULL,
  `tanggal_lahir_fasilitator` date NOT NULL,
  `pendidikan_fasilitator` varchar(50) NOT NULL,
  `email_fasilitator` varchar(50) NOT NULL,
  `noHp_fasilitator` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `nama_laporan` varchar(50) NOT NULL,
  `pencapaian` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bnpb`
--
ALTER TABLE `bnpb`
  ADD PRIMARY KEY (`id_bnpb`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `fasilitator`
--
ALTER TABLE `fasilitator`
  ADD PRIMARY KEY (`id_fasilitator`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bnpb`
--
ALTER TABLE `bnpb`
  MODIFY `id_bnpb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitator`
--
ALTER TABLE `fasilitator`
  MODIFY `id_fasilitator` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
