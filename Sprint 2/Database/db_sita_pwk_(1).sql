-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2019 at 06:27 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sita_pwk`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `Nama` int(25) NOT NULL,
  `NIP` int(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `Email` int(25) NOT NULL,
  `No_telepon` int(15) NOT NULL,
  `Alamat` int(30) NOT NULL,
  `Tempat_lahir` int(15) NOT NULL,
  `Tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kosong`
--

CREATE TABLE `jadwal_kosong` (
  `Id` int(20) NOT NULL,
  `Nama_dosen` varchar(30) NOT NULL,
  `Gedung` varchar(15) NOT NULL,
  `Tanggal` date NOT NULL,
  `Jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_penting`
--

CREATE TABLE `jadwal_penting` (
  `Id` int(20) NOT NULL,
  `NIM` int(20) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `NIM` int(20) NOT NULL,
  `Aksi` varchar(50) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Tanggal` date NOT NULL,
  `Judul_TA` varchar(50) NOT NULL,
  `File` varchar(20) NOT NULL,
  `Keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `id` int(3) NOT NULL,
  `Nama_dosen` varchar(25) NOT NULL,
  `Keterangan` varchar(100) NOT NULL,
  `Nama_mahasiswa` varchar(25) NOT NULL,
  `NIM` int(15) NOT NULL,
  `Deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Nama` varchar(25) NOT NULL,
  `NIM` int(15) NOT NULL,
  `password` varchar(35) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `No_telepon` varchar(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Judul_TA` varchar(50) NOT NULL,
  `Nama_dosen` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `referensi`
--

CREATE TABLE `referensi` (
  `Id` int(20) NOT NULL,
  `Judul_TA` varchar(50) NOT NULL,
  `Penulis` varchar(30) NOT NULL,
  `Tahun` int(5) NOT NULL,
  `Asal_Referensi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `jadwal_kosong`
--
ALTER TABLE `jadwal_kosong`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `jadwal_penting`
--
ALTER TABLE `jadwal_penting`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`) USING BTREE;

--
-- Indexes for table `referensi`
--
ALTER TABLE `referensi`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
