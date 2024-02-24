-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 02:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakso_mercon`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `komentar_id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`komentar_id`, `nama`, `email`, `pesan`, `date`) VALUES
(5, 'Cinta', 'cinta@gmail.com', 'Webiste ini sangat bagus', '2024-02-22 12:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `makanan_id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` text NOT NULL,
  `alamat` text NOT NULL,
  `jenis_bakso` varchar(50) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `harga` text NOT NULL,
  `metode_pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`makanan_id`, `nama`, `no_hp`, `alamat`, `jenis_bakso`, `jumlah`, `harga`, `metode_pembayaran`) VALUES
(1, 'Budi', '081376445763', 'Medan', 'Bakkso', '1', '15000', 'COD'),
(2, 'Juan', '08128097344', 'kutilang', 'Mie Ayam Bakso dan Ceker', '2', '40000', 'COD'),
(4, 'Juan', '12', 'sa', 'Bakso Urat Jumbo', '1', '25000', 'Transfer'),
(5, 'Juan', '321', 'asa', 'Bakso Kuah', '1', '10000', 'COD'),
(7, 'Mita Purnama Sari', '08126876846', 'Jl. Setia Budi, No. 15', 'Mie Ayam Pangsit', '2', '30000', 'Transfer');

-- --------------------------------------------------------

--
-- Table structure for table `minuman`
--

CREATE TABLE `minuman` (
  `minuman_id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` text NOT NULL,
  `alamat` text NOT NULL,
  `jenis_minuman` varchar(50) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `harga` text NOT NULL,
  `metode_pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `minuman`
--

INSERT INTO `minuman` (`minuman_id`, `nama`, `no_hp`, `alamat`, `jenis_minuman`, `jumlah`, `harga`, `metode_pembayaran`) VALUES
(1, 'Juan', '0812684639', 'Jl. Seibatang hari, no 124', 'Aneka Jus Buah', '1', '10000', 'COD'),
(2, 'Juan', '1111111111111', 'fesgvrd', 'Sop Buah Premium', '1', '16000', 'COD'),
(3, 'Juan', '11111111111111', '1324', 'Aneka Jus Buah', '999', '9990000', 'COD'),
(4, 'Putra Arianto', '08128689465', 'Jl. Seibatang Hari, No. 4', 'Sop Buah Premium', '1', '16000', 'COD'),
(5, 'Cinta', '08214325436', 'Jl. Kutilang, No 2', 'Teh Manis Dingin', '1', '10000', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(254) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` char(128) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `foto` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `token`, `status`, `foto`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'anitadewi@gmail.com', 'c0e024d9200b5705bc4804722636378a', '1', '2023-12-13-2-15-06.png', '2024-02-22 19:03:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`komentar_id`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`makanan_id`);

--
-- Indexes for table `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`minuman_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `komentar_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `makanan_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `minuman`
--
ALTER TABLE `minuman`
  MODIFY `minuman_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
