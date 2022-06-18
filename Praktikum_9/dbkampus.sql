-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 10:00 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(250) NOT NULL,
  `nidn` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `kampus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nidn`, `nama`, `pendidikan`, `kampus`) VALUES
(1, 414047101, 'Sirojul Munir', 'S2', ' Universitas Budi Luhur'),
(2, 413128601, 'Ahmad Rio Adriansyah', 'S2', 'ITB/Kanazawa University Sains Komputasi'),
(4, 410089103, 'Tubagus Rizky Dharmawan', 'S2', 'Delft University Of Technology,Embedded Systems'),
(8, 19279137, 'Jodi Alhadi', 'S2', 'Universitas Mercu Buana'),
(11, 19279137, 'Gugun Gunawan', 'S2', 'Universitas Mercu Buana'),
(14, 19279137, 'Nelan', 'S3', 'Universitas Mercu Buana');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` int(9) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `ipk` double DEFAULT NULL,
  `prodi_kode` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `gender`, `ipk`, `prodi_kode`) VALUES
(1, 110221189, 'Nelan', 'L', 3.9, 'TI'),
(3, 110221189, 'Rizki Hutabarat', 'L', 3.9, 'TI'),
(4, 110221189, 'Naura Hasanah', 'P', 4, 'TI'),
(16, 110221189, 'Susi Sulastri', 'P', 3.6, 'TI'),
(21, 9879247, 'Nida Naurah', 'P', 3.6, 'BD');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `kode` varchar(2) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `kaprodi` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`kode`, `nama`, `kaprodi`) VALUES
('BD', 'Bisnis Digital', 'David Panji'),
('SI', 'Sistem Informasi', 'Misna Azqia'),
('TI', 'Teknik Informatika', 'Tifani Nabarian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodi_kode` (`prodi_kode`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`prodi_kode`) REFERENCES `prodi` (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
