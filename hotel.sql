-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 12:53 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_hotel`
--

CREATE TABLE `fasilitas_hotel` (
  `id_fasilitas_hotel` int(10) NOT NULL,
  `nama_fasilitas` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas_hotel`
--

INSERT INTO `fasilitas_hotel` (`id_fasilitas_hotel`, `nama_fasilitas`, `deskripsi`, `foto`) VALUES
(18, 'kolam renang', 'Kolam Renang yang sangat nyaman ', 'kolam renang_5.png'),
(20, 'Gym', 'nyaman , luas , lengkap', 'gym_1.jpg'),
(21, 'restaurant', 'tersedia banyak menu ', 'restaurant_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_kamar`
--

CREATE TABLE `fasilitas_kamar` (
  `id_fasilitas_kamar` int(10) NOT NULL,
  `nama_fasilitas` varchar(50) NOT NULL,
  `tipe_kamar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas_kamar`
--

INSERT INTO `fasilitas_kamar` (`id_fasilitas_kamar`, `nama_fasilitas`, `tipe_kamar`) VALUES
(1, 'Wi-fii , AC , TV, Sofa , Kulkas, Bathub, Hairdryer', 'Superior'),
(4, 'Wi-fii, AC, Kulkas, Buthub , TV, Sofa', 'Deluxe'),
(6, '2 Kasur , TV , Buthub , Wi-fii', 'Twinss');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(10) NOT NULL,
  `id_fasilitas_kamar` int(10) NOT NULL,
  `no_kamar` varchar(10) NOT NULL,
  `tipe_kamar` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `tarif` double NOT NULL,
  `foto` varchar(50) NOT NULL,
  `jumlah_kamar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `id_fasilitas_kamar`, `no_kamar`, `tipe_kamar`, `deskripsi`, `tarif`, `foto`, `jumlah_kamar`) VALUES
(2, 1, '1A', 'SUPERIOR', 'Kamar Superior mewah yang tersedia di Hotel Hebat , tipe kamar ini menawarkan kenyaman dan ketenangan yang anda harapkan di hotel kami. ', 800000, 'superior_4.jpeg', 12),
(9, 4, '2A', 'DELUX', 'Kamar Deluxe mewah yang tersedia di Hotel Hebat , tipe kamar ini menawarkan kenyaman dan ketenangan yang anda harapkan di hotel kami.', 500000, 'kmr deluxe_9.jpg', 12),
(10, 6, '3A', 'Twinss', 'Kamar Twinss mewah yang tersedia di Hotel Hebat , tipe kamar ini menawarkan kenyaman dan ketenangan yang anda harapkan di hotel kami.', 300000, 'twinss_6.jpeg', 15);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `level` enum('admin','resepsionis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Ria ', 'admin'),
(4, 'Resepsionis', 'caf1a3dfb505ffed0d024130f58c5cfa', 'RIA AYU', 'resepsionis'),
(5, 'admin2', '202cb962ac59075b964b07152d234b70', 'Ayu', 'admin'),
(7, 'diana', '202cb962ac59075b964b07152d234b70', 'diana', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(10) NOT NULL,
  `nama_pemesan` varchar(30) NOT NULL,
  `no_tlp` char(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `id_kamar` int(10) NOT NULL,
  `tgl_cek_in` date NOT NULL,
  `tgl_cek_out` date NOT NULL,
  `jumlah_kamar_dipesan` int(10) NOT NULL,
  `status` enum('reservasi','cek-in','cek-out','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `nama_pemesan`, `no_tlp`, `email`, `nama_tamu`, `id_kamar`, `tgl_cek_in`, `tgl_cek_out`, `jumlah_kamar_dipesan`, `status`) VALUES
(1, 'Ria', '081324867900', 'ria1324@gmail.com', 'ayu', 2, '2022-05-20', '2022-05-21', 1, 'selesai'),
(33, 'Ria', '087843027813', 'admin@gmail.com', 'Ria', 2, '2022-05-28', '2022-05-29', 2, 'selesai'),
(34, 'adi', '082896543120', 'adi@gmail.com', 'adi', 2, '2022-05-28', '2022-05-30', 2, 'cek-in'),
(35, 'Dini', '087123446788', 'dinii@gmail.com', 'rina', 2, '2022-05-28', '2022-05-29', 1, 'cek-out'),
(39, 'Ria', '089973849178', 'ria111@gmail.com', 'Diana', 2, '2022-05-28', '2022-05-29', 1, 'reservasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  ADD PRIMARY KEY (`id_fasilitas_hotel`);

--
-- Indexes for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD PRIMARY KEY (`id_fasilitas_kamar`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas_hotel`
--
ALTER TABLE `fasilitas_hotel`
  MODIFY `id_fasilitas_hotel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  MODIFY `id_fasilitas_kamar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
