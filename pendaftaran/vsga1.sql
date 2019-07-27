-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2019 at 01:58 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vsga1`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(13) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `id_mhs`, `nama`, `jenis_kelamin`, `jurusan`, `alamat`) VALUES
('MM0020001', 1, 'Muhammad Fuad Fachrudin', 'L', 'Rekayasa Perangkat Lunak', 'Klaten, Jawa Tengah'),
('MM0020002', 3, 'Ayu Liyawati', 'P', 'Seni Budaya', 'Klaten, Jawa Tengah'),
('MM0020003', 5, 'Muhamad Wahyu Hidayat', 'L', 'Teknik Energi Terbarukan', 'Klaten, Jawa Tengah, ID'),
('111', 7, 'Agung Nugroho', 'L', 'Sarjana Hukum', 'Lampung, Indonesia'),
('112', 8, 'Zanuar', 'L', 'Teknik Mesin Industri', 'Kota Yogyakarta, DIY'),
('113', 9, 'Test', 'L', 'aaa', 'aaa'),
('118', 13, 'Deni Nugroho', 'L', 'Rekayasa Perangkat Lunak', 'DIY Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftar` int(11) NOT NULL,
  `no_pendaftaran` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `agama` varchar(8) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftar`, `no_pendaftaran`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `asal_sekolah`) VALUES
(1, 'P323201', 'Fuad', 'Klaten', 'L', 'Islam', 'SMK Klaten'),
(2, 'MUGM190001', 'Islam', 'DI Yogyakarta', 'L', '', 'SMK Muhi'),
(3, 'MUGM190001', 'Islam', 'sss', 'L', '', 'sss'),
(5, '1', 'tffff', 'detiksadsad', 'L', 'Islam', 'detik'),
(10, 'MUGM19000', 'ayu', 'skh', 'P', 'Islam', 'skh'),
(11, '1', 'dd', 'ddd', 'L', 'Islam', 'dd'),
(12, 'MUGM19000', 'fdsf', 'fdgdfg', 'L', 'Islam', 'dsfdsf'),
(14, 'MUGM1914', 'Agus Santoso', 'Yogyakarta', 'L', 'Islam', 'SMK YKPN'),
(15, 'MUGM19141', 'Fuad123', 'fuad', 'L', 'Islam', 'fuad'),
(17, 'MUGM00151', 'assdd', 'ff', 'L', 'Islam', 'ddd'),
(18, 'MUGM00171', 'feesssfff', 'Klt', 'P', 'Hindu', 'PL'),
(19, 'MUGM00181', '111', '111', 'L', 'Islam', 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_merk` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_merk`, `warna`, `jumlah`) VALUES
(1, 'Alkaline', 'Hitam', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
