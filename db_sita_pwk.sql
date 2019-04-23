-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 02:13 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

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
  `password` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `email`, `no_telp`, `alamat`, `foto`) VALUES
('Adm001', 'Muhammad Ragil Trireza R', 'mragil', '202cb962ac59075b964b07152d234b70', 'mragill98@gmail.com', '1234567890', 'asdasd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `Nama` varchar(40) NOT NULL,
  `NIP` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `No_telepon` int(15) NOT NULL,
  `Alamat` varchar(60) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`Nama`, `NIP`, `password`, `Email`, `No_telepon`, `Alamat`, `foto`) VALUES
('Raagil', '111', '202cb962ac59075b964b07152d234b70', 'ragil.takuga@gmail.com', 123123, 'aasd', NULL),
('Muhammad Ragil', '11111', '202cb962ac59075b964b07152d234b70', 'ragil', 123, 'askd', NULL),
('Febri', '123456', '202cb962ac59075b964b07152d234b70', 'febri', 12312, 'aksdka', NULL),
('Muhammad Ragil', '145', '7363a0d0604902af7b70b271a0b96480', 'mragil@gsd.com', 202, 'alsld', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kosong`
--

CREATE TABLE `jadwal_kosong` (
  `Id_Jadwal` varchar(20) NOT NULL,
  `NIP` varchar(30) NOT NULL,
  `Gedung` varchar(15) NOT NULL,
  `Tanggal` date NOT NULL,
  `Jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_kosong`
--

INSERT INTO `jadwal_kosong` (`Id_Jadwal`, `NIP`, `Gedung`, `Tanggal`, `Jam`) VALUES
('1', '111', 'E113', '2019-04-01', '14:04:00');

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

--
-- Dumping data for table `jadwal_penting`
--

INSERT INTO `jadwal_penting` (`Id_Jadwal`, `NIM`, `Ruangan`, `Waktu`, `Tanggal`) VALUES
(1, 14116068, 'E311', '10:00', '2019-04-24'),
(3, 14116150, 'C102', '10:10', '1998-02-21'),
(4, 14116105, 'D102', '11:11', '2019-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `Id_Konsul` varchar(11) NOT NULL,
  `NIM` int(15) NOT NULL,
  `Komentar` text NOT NULL,
  `NIP` varchar(30) NOT NULL,
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
  `NIP` varchar(30) NOT NULL,
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
  `password` varchar(255) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `No_telepon` varchar(15) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Judul_TA` varchar(50) DEFAULT NULL,
  `Tempat_Lahir` varchar(40) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Pembimbing` varchar(30) DEFAULT NULL,
  `Pembimbing2` varchar(30) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`Nama`, `NIM`, `password`, `Alamat`, `No_telepon`, `Email`, `Judul_TA`, `Tempat_Lahir`, `Tanggal_Lahir`, `Pembimbing`, `Pembimbing2`, `foto`) VALUES
('Atun', 14116068, '202cb962ac59075b964b07152d234b70', 'Indonesia', '123', 'atun@itera.ac.id', NULL, 'Indonesia', '1998-12-12', NULL, NULL, ''),
('fahmi', 14116105, '202cb962ac59075b964b07152d234b70', 'kemiling', '08123456789', 'fahmi@gmail.com', 'apa ya', 'Indonesia', '2012-12-12', NULL, NULL, ''),
('Muhammad Ragil', 14116150, '202cb962ac59075b964b07152d234b70', 'Gunter', '123', 'mragiltrirezar@gmail', NULL, 'Indonesia', '2222-02-22', NULL, NULL, '');

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
('5', 'LOCAL ECONOMIC IMPACTS OF DRAGON TORISM IN INDONESIA', 'Mtthew J. Walpole', 2000, 'University of Kent', 'Adm001'),
('6', 'TA KE ENAM', 'Muhammad', 2016, 'ITERA', 'Adm001'),
('7', 'TA KE TUJUH', 'Ragil', 2017, 'ITERA', 'Adm001'),
('8', 'TA KE DELAPAN', 'Trireza', 2018, 'ITERA', 'Adm001'),
('9', 'TA KE SEMBILAN', 'Ramadhan', 2015, 'ITERA', 'Adm001');

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
  ADD PRIMARY KEY (`Id_Jadwal`),
  ADD KEY `Dosen` (`NIP`);

--
-- Indexes for table `jadwal_penting`
--
ALTER TABLE `jadwal_penting`
  ADD PRIMARY KEY (`Id_Jadwal`),
  ADD KEY `Mahasiswa` (`NIM`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`Id_Konsul`),
  ADD KEY `Dsn` (`NIP`),
  ADD KEY `Mhs` (`NIM`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`Id_Log`),
  ADD KEY `Log_Dosen` (`NIP`),
  ADD KEY `Log_Mahasiswa` (`NIM`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`) USING BTREE,
  ADD KEY `Pembimbing` (`Pembimbing`),
  ADD KEY `Pembimbing2` (`Pembimbing2`);

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
-- AUTO_INCREMENT for table `jadwal_penting`
--
ALTER TABLE `jadwal_penting`
  MODIFY `Id_Jadwal` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `Id_Log` int(3) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_kosong`
--
ALTER TABLE `jadwal_kosong`
  ADD CONSTRAINT `Dosen` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal_penting`
--
ALTER TABLE `jadwal_penting`
  ADD CONSTRAINT `Mahasiswa` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `Dsn` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Mhs` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logbook`
--
ALTER TABLE `logbook`
  ADD CONSTRAINT `Log_Dosen` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Log_Mahasiswa` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `Pembimbing` FOREIGN KEY (`Pembimbing`) REFERENCES `dosen` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Pembimbing2` FOREIGN KEY (`Pembimbing2`) REFERENCES `dosen` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
