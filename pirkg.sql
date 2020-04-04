-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 06:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pirkg`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp(),
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `waktu`, `slug`) VALUES
(1, 'Cara Menggosok Gigi yang Benar', 'Sering kali tanpa kita sadari dalam mengosok gigi ,kita masih menggunakan cara yang masih salah. Hal tersebut berdampak dengan kesehatan gigi kita. Adapun teknik dalam menggosok gigi yang baik dan benar. Pertama kali kita siapkan sikat gigi, disarankan menggunakan sikat gigi yang memiliki bulu halus dan fleksibel sehingga tidak merusak gusi dan gigi.', '2020-04-03 13:20:06', ''),
(2, 'Cara Jitu Menangani Gigi Ngilu', 'Pernah mengalami gigi ngilu saat menyatantap es krim atau menyikat gigi? Bisa jadi anda mengalami gigi sensitif. yuk, obati dan cegah gigi ngilu dengan cara-cara dibawah ini. pada gigi sensitif, aktivitas sederhana seperti makan,minum,dan menyikat gigi dapat menyebabkan gigi terasa ngilu.Namun dengan mendeteksi penyebab giginya,kondisi ini dapat diatasi.', '2020-04-03 13:20:06', ''),
(3, 'Obat Kumur Tidak Hanya untuk Bau Gigi', 'Obat Kumur telah lama menjadi teman andalan untuk mencegah bau mulut yang menggangu rasa percaya diri. Tetapi ternyata selain itu, obat kumur berperan menjaga kesehatan mulut. Obat kumur adalah cairan antiseptik yang digunakan untuk membersihkan sela-sela gigi,permukaaan lidah dan gusi, serta mulut bagian belakang atau tenggorokan.', '2020-04-03 13:20:33', ''),
(4, 'Ketahuilah Cara Merawat Gigi Palsu', 'Pengguna gigi palsu yang tidak diimbangi dengan perawatan yang benar bisa berisiko buruk untuk kesehatan gigi dan mulut. Oleh sebeb itu, penting bagi para penggunanya mengetahui cara merawat gigi palsu yang baik dan benar. Seperti halnya dengan gigi asli,gigi palsu juga harus dirawat agar bakteri dan plak tidak menumpuk dan menimbulkan masalah pada kesehatan mulut.', '2020-04-03 13:20:33', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp(),
  `no_tlp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `password`, `email`, `waktu`, `no_tlp`) VALUES
(9, 'joshua', '202cb962ac59075b964b07152d234b70', 'joshua.anrico30@gmail.com', '2020-04-04 15:41:58', '123');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `waktu_reservasi` datetime NOT NULL,
  `ket_reservasi` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `pk` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`pk`, `ket`, `judul`, `waktu`, `slug`) VALUES
(1, 'etetet tettt tetetete tet etetet', 'teest', '2020-03-11 21:36:23', ''),
(2, 'bababab babbababba baabab', 'baba', '2020-03-11 21:40:51', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`pk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
