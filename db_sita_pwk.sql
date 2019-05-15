-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 05:10 PM
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
('Adm004', 'admin', '', '202cb962ac59075b964b07152d234b70', 'admin', '123', 'as3a', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `Nama` varchar(40) NOT NULL,
  `NIP` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `No_telepon` varchar(15) NOT NULL,
  `Alamat` varchar(60) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`Nama`, `NIP`, `password`, `Email`, `No_telepon`, `Alamat`, `foto`) VALUES
('Dosen S.T.,M.T.', '111', 'f499263a253447dd5cb68dafb9f13235', 'dosen1', '123232', '123asd', ''),
('Dosen2 S.T.,M.T.', '222', 'ac41c4e0e6ef7ac51f0c8f3895f82ce5', 'dosen2', '123', 'dosen2123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kosong`
--

CREATE TABLE `jadwal_kosong` (
  `Id_Jadwal` int(20) NOT NULL,
  `NIP` varchar(30) NOT NULL,
  `Gedung` varchar(15) NOT NULL,
  `Tanggal` date NOT NULL,
  `Jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_kosong`
--

INSERT INTO `jadwal_kosong` (`Id_Jadwal`, `NIP`, `Gedung`, `Tanggal`, `Jam`) VALUES
(4, '111', 'Gedung C', '2019-05-01', '07:01:00'),
(5, '111', 'Gedung C', '2019-05-01', '12:01:00');

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
(1, 14116150, 'E311', '03:23', '2019-05-11'),
(2, 14116150, 'E121', '22:23', '2323-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `Id_Konsul` int(11) NOT NULL,
  `NIM` int(15) NOT NULL,
  `Komentar` text,
  `NIP` varchar(30) NOT NULL,
  `Tanggal` date NOT NULL,
  `Tanggal_diperiksa` date DEFAULT NULL,
  `Judul_TA` varchar(50) NOT NULL,
  `File` varchar(20) NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Belum Diperiksa'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`Id_Konsul`, `NIM`, `Komentar`, `NIP`, `Tanggal`, `Tanggal_diperiksa`, `Judul_TA`, `File`, `Keterangan`, `Status`) VALUES
(1, 14116150, 'aselole', '111', '2019-04-24', '2019-05-06', 'Analisis Blabla....', 'file.docx', '-', 'Sudah Diperiksa'),
(2, 14116150, 'asdasd', '111', '2019-04-24', '2019-05-06', 'HAHAHAHA', 'file2.docx', 'Perbaikan Bab 100', 'Sudah Diperiksa'),
(3, 14116150, 'due tige sabun detol\nsa ae lu botol', '111', '2019-05-07', '2019-05-05', 'HAHAHAHA', 'asd.pdf', 'Perbaikan Bab 1000', 'Sudah Diperiksa'),
(4, 14116150, 'sdkfskdfksd', '111', '2019-05-06', '2019-05-06', 'asdasd', '14116150_M_Ragil_Tri', 'sdsdf', 'Sudah Diperiksa'),
(6, 14116150, 'aksdsaldlasld', '111', '2019-05-01', '2019-05-06', 'kljljlj', 'jjhjh', 'jkjkjkj', 'Sudah Diperiksa'),
(7, 14116150, 'bagus', '111', '2019-05-07', '2019-05-07', 'asdasd', '14116150_M_Ragil_Tri', 'ASYAPP', 'Sudah Diperiksa'),
(8, 14116150, 'sadasd', '111', '2019-05-07', '2019-05-07', 'asdasd', 'Skenario_1.pdf', 'asdsa', 'Sudah Diperiksa');

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `Id_Log` int(3) NOT NULL,
  `NIP` varchar(30) NOT NULL,
  `Keterangan` varchar(100) NOT NULL,
  `NIM` int(15) NOT NULL,
  `Deskripsi` varchar(100) NOT NULL,
  `Tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`Id_Log`, `NIP`, `Keterangan`, `NIM`, `Deskripsi`, `Tanggal`) VALUES
(2, '111', 'narasumber nya', 14116150, 'Wawancara', '2019-05-06');

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
('Mahasiswa1', 14116150, '8eac357684eb8c36513235c7e77bfdfb', '321', '123', 'mahasiswa1', NULL, '', '0000-00-00', '222', '111', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `referensi`
--

CREATE TABLE `referensi` (
  `Id_Referensi` int(20) NOT NULL,
  `Judul_TA` varchar(300) NOT NULL,
  `Penulis` varchar(30) NOT NULL,
  `Tahun` int(5) NOT NULL,
  `Asal_Referensi` varchar(50) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `Id_admin` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referensi`
--

INSERT INTO `referensi` (`Id_Referensi`, `Judul_TA`, `Penulis`, `Tahun`, `Asal_Referensi`, `file`, `Id_admin`) VALUES
(1, 'ANALISIS DAMPAK EKONOMI DESA WISATA WUKIRSARI KECAMATAN IMOGIRI, KABUPATEN BANTUL, DAERAH ISTIMEWA YOGYAKARTA', 'Nazovah Ummudiyah', 2016, 'Universitas Muhammadiyah Yogyakarta ', '', 'Adm001'),
(2, 'ANALISIS DAMPAK EKONOMI WISATA BAHARI TERHADAP PENDAPATAN MASYARAKAT LOKAL STUDI KASUS PANTAI BANDULU KABUPATEN SERANG PROVINSI BANTEN ', 'Meita Amanda', 2009, 'Institut Pertanian Bogor', NULL, 'Adm001'),
(3, 'ANALISI PENGARUH SEKTOR PARIWISATA TERHADAP PENYERAPAN TENAGA KERJA DI 5 KABUPATEN / KOTA DAERAH ISTIMEWA YOGYAKARTA', 'M. Zukfi Rahadi', 2018, 'Universitas Muhammadiyah Surakarta', NULL, 'Adm001'),
(4, 'DAMPAK EKONOMI PENGEMBANGAN KAWASAN EKOWISATA KEPULAUAN SERIBU', 'Hanny Aryunda', 2011, 'Institut Teknologi Bandung', NULL, 'Adm001'),
(5, 'LOCAL ECONOMIC IMPACTS OF DRAGON TORISM IN INDONESIA', 'Mtthew J. Walpole', 2000, 'University of Kent', NULL, 'Adm001'),
(6, 'TA KE ENAM', 'Muhammad', 2016, 'ITERA', NULL, 'Adm001'),
(7, 'TA KE TUJUH', 'Ragil', 2017, 'ITERA', NULL, 'Adm001'),
(8, 'TA KE DELAPAN', 'Trireza', 2018, 'ITERA', NULL, 'Adm001'),
(9, 'TA KE SEMBILAN', 'Ramadhan', 2018, 'ITERA', NULL, ''),
(10, 'TA TA AN', 'penulisa TA', 2019, 'ITERA', 'Contoh_Nota.pdf', 'Adm004');

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
-- AUTO_INCREMENT for table `jadwal_kosong`
--
ALTER TABLE `jadwal_kosong`
  MODIFY `Id_Jadwal` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwal_penting`
--
ALTER TABLE `jadwal_penting`
  MODIFY `Id_Jadwal` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `Id_Konsul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `Id_Log` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `referensi`
--
ALTER TABLE `referensi`
  MODIFY `Id_Referensi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
