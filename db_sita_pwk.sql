-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 06:51 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(6) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(35) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `email`, `tempat_lahir`, `tanggal_lahir`, `no_telp`, `alamat`) VALUES
('Adm001', 'Muhammad Ragil', 'mragil', '202cb962ac59075b964b07152d234b70', 'mragill98@gmail.com', 'Kayu Agung', '2019-04-10', '1234567890', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `Nama` varchar(40) NOT NULL,
  `NIP` int(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `No_telepon` int(15) NOT NULL,
  `Alamat` varchar(60) NOT NULL,
  `Tempat_lahir` varchar(30) NOT NULL,
  `Tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`Nama`, `NIP`, `password`, `Email`, `No_telepon`, `Alamat`, `Tempat_lahir`, `Tanggal_lahir`) VALUES
('Pak Dosen', 123, '202cb962ac59075b964b07152d234b70', 'aksdkaskdk@gkaks.com', 129391293, 'kaskjdasdkasdj', 'asdkkaskd', '2019-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kosong`
--

CREATE TABLE `jadwal_kosong` (
  `Id_Jadwal` varchar(20) NOT NULL,
  `NIP/NRK` varchar(30) NOT NULL,
  `Gedung` varchar(15) NOT NULL,
  `Tanggal` date NOT NULL,
  `Jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_penting`
--

CREATE TABLE `jadwal_penting` (
  `Id_Jadwal` int(20) NOT NULL,
  `NIM` int(20) NOT NULL,
  `Ruangan` varchar(30) NOT NULL,
  `Waktu` varchar(20) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `Id_Konsul` varchar(11) NOT NULL,
  `NIM` int(20) NOT NULL,
  `Komentar` text NOT NULL,
  `NIP/NRK` varchar(30) NOT NULL,
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
  `Id_Log` int(3) NOT NULL,
  `NIP/NRK` varchar(25) NOT NULL,
  `Keterangan` varchar(100) NOT NULL,
  `NIM` int(15) NOT NULL,
  `Deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Nama` varchar(50) NOT NULL,
  `NIM` int(15) NOT NULL,
  `Password` varchar(35) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `No_telepon` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Judul_TA` varchar(50) DEFAULT NULL,
  `NIP/NRK` int(20) DEFAULT NULL,
  `Id_Referensi` varchar(10) DEFAULT NULL,
  `Reset_password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nama`, `NIM`, `Password`, `Alamat`, `No_telepon`, `Email`, `Judul_TA`, `NIP/NRK`, `Id_Referensi`, `Reset_password`) VALUES
('nurmeishy', 1223221, 'e807f1fcf82d132f9bb018ca6738a19f', 'way huwi', '081234567890', 'nurmeishy.1223221@stduent.itera.ac.id', NULL, NULL, NULL, NULL),
('Febri Dwi Putro', 14116020, 'e807f1fcf82d132f9bb018ca6738a19f', 'permata biru sukarame baru', '089677888558', 'febridwipoethro@gmail.com', NULL, NULL, NULL, NULL),
('fahmi', 14116105, '336b1b2d2d862956fc8f5eb8e130d4d6', 'kemiling', '08123456789', 'fahmi@gmail.com', 'apa ya', 0, '', NULL),
('Muhammad Ragil', 14116150, '202cb962ac59075b964b07152d234b70', 'ajsdkasjdk', '0808080', 'asdkskdk@kska.com', 'jasdjasjdj', 0, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `referensi`
--

CREATE TABLE `referensi` (
  `Id_Referensi` varchar(20) NOT NULL,
  `Judul_TA` varchar(300) NOT NULL,
  `Penulis` varchar(30) NOT NULL,
  `Tahun` int(5) NOT NULL,
  `Asal_Referensi` varchar(50) NOT NULL,
  `Id_admin` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referensi`
--

INSERT INTO `referensi` (`Id_Referensi`, `Judul_TA`, `Penulis`, `Tahun`, `Asal_Referensi`, `Id_admin`) VALUES
('1', 'ANALISIS DAMPAK EKONOMI DESA WISATA WUKIRSARI KECAMATAN IMOGIRI, KABUPATEN BANTUL, DAERAH ISTIMEWA YOGYAKARTA', 'Nazovah Ummudiyah', 2016, 'Universitas Muhammadiyah Yogyakarta ', 'Adm001'),
('2', 'ANALISIS DAMPAK EKONOMI WISATA BAHARI TERHADAP PENDAPATAN MASYARAKAT LOKAL STUDI KASUS PANTAI BANDULU KABUPATEN SERANG PROVINSI BANTEN ', 'Meita Amanda', 2009, 'Institut Pertanian Bogor', 'Adm001'),
('3', 'ANALISI PENGARUH SEKTOR PARIWISATA TERHADAP PENYERAPAN TENAGA KERJA DI 5 KABUPATEN / KOTA DAERAH ISTIMEWA YOGYAKARTA', 'M. Zukfi Rahadi', 2018, 'Universitas Muhammadiyah Surakarta', 'Adm001'),
('4', 'DAMPAK EKONOMI PENGEMBANGAN KAWASAN EKOWISATA KEPULAUAN SERIBU', 'Hanny Aryunda', 2011, 'Institut Teknologi Bandung', 'Adm001'),
('5', 'LOCAL ECONOMIC IMPACTS OF DRAGON TORISM IN INDONESIA', 'Mtthew J. Walpole', 2000, 'University of Kent', 'Adm001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `jadwal_kosong`
--
ALTER TABLE `jadwal_kosong`
  ADD PRIMARY KEY (`Id_Jadwal`);

--
-- Indexes for table `jadwal_penting`
--
ALTER TABLE `jadwal_penting`
  ADD PRIMARY KEY (`Id_Jadwal`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`Id_Konsul`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`Id_Log`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`) USING BTREE;

--
-- Indexes for table `referensi`
--
ALTER TABLE `referensi`
  ADD PRIMARY KEY (`Id_Referensi`),
  ADD KEY `Id_admin` (`Id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `Id_Log` int(3) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
