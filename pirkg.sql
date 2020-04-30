-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 04:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

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
(4, 'Ketahuilah Cara Merawat Gigi Palsu', 'Pengguna gigi palsu yang tidak diimbangi dengan perawatan yang benar bisa berisiko buruk untuk kesehatan gigi dan mulut. Oleh sebeb itu, penting bagi para penggunanya mengetahui cara merawat gigi palsu yang baik dan benar. Seperti halnya dengan gigi asli,gigi palsu juga harus dirawat agar bakteri dan plak tidak menumpuk dan menimbulkan masalah pada kesehatan mulut.', '2020-04-03 13:20:33', ''),
(11, 'Artikel', 'Lorem ipsum dolor sit amet, eu aeterno numquam mei, no appareat efficiendi eos. Sit no aeterno vivendo, in exerci postea vulputate eam. Deserunt pertinacia vituperatoribus eum ea, sumo primis an usu. Vide ludus consequuntur quo eu, dicat mediocrem elaboraret his id. Quo labore deleniti et.\r\n\r\nNo quo debet utamur, vix eu odio dicat appellantur. Eum ad modus harum disputationi, quem alterum euismod ea eam, saepe democritum efficiendi his eu. Et duo antiopam mediocrem periculis, justo deleniti cu qui, facer consequat interesset nam et. Eos ne luptatum sapientem voluptatibus, dicit lobortis necessitatibus ex cum, eam id errem bonorum.\r\n\r\nVix aperiri persius eleifend ne. Fuisset dignissim qui ea, te eius everti reformidans has, ne quo interesset interpretaris. Et audire referrentur sit. Qui an eirmod similique, epicuri invidunt ex vix.\r\n\r\nNe purto vidisse percipit mei, inani labore ut qui. Eu noluisse intellegebat vim, veri deseruisse necessitatibus ex mel. Te simul utroque gloriatur has, suas sint commune te vis, has ex quod eirmod regione. Posse nobis percipitur te mel, eu quod nisl has, elit altera docendi vel in.\r\n\r\nAn vel oratio quaeque, ut vero porro labores sed, an mea salutatus expetendis. Mei cu omittam noluisse signiferumque, vidit integre appareat te nam. Sint omnis nec an, deleniti eleifend theophrastus mei ne. Eu mediocrem definitionem vix, at vis reque sanctus comprehensam. Cum rebum molestie facilisi eu, cu sit idque persius senserit. Atqui indoctum voluptaria ad pro, modus appellantur ad nam, et sea affert possim molestiae.', '2020-04-29 15:20:06', '');

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
  `no_tlp` varchar(255) NOT NULL,
  `admin_dokter` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `password`, `email`, `waktu`, `no_tlp`, `admin_dokter`) VALUES
(9, 'joshua', '202cb962ac59075b964b07152d234b70', 'joshua.anrico30@gmail.com', '2020-04-04 15:41:58', '123', NULL),
(10, 's', '202cb962ac59075b964b07152d234b70', 'joshua.anrico3@gmail.com', '2020-04-09 03:12:59', '123', NULL),
(11, 'j', '202cb962ac59075b964b07152d234b70', 'joshua.anrico@gmail.com', '2020-04-09 04:07:31', '123', NULL),
(12, 'josh', '202cb962ac59075b964b07152d234b70', 'joshua@gmail.com', '2020-04-11 06:44:28', '123', NULL),
(14, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'joshuaanrico@yahoo.com', '2020-04-14 06:17:16', 'admin', 'hadir');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` int(2) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `ket_reservasi` text NOT NULL,
  `waktu_reservasi` varchar(255) NOT NULL,
  `konfirmasi` varchar(20) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `keterangan_reservasi` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `nama`, `umur`, `jenis_kelamin`, `ket_reservasi`, `waktu_reservasi`, `konfirmasi`, `id_pengguna`, `keterangan_reservasi`, `slug`) VALUES
(15, 'joshua', 21, 'Laki-Laki', 'teeeeeeeeeeeeeeeeeest', '04/23/2020 7:24 AM', 'Menunggu Konfirmasi', 9, 'Belum Dilayani', ''),
(16, 'Jooo', 32, 'Laki-Laki', 'uqewyi uqweyiuqw yeiuqw yeiuqy ew', '04/23/2020 12:37 PM', 'Diterima', 9, 'Belum Dilayani', ''),
(17, 'Laurensius Joshua Anrico Agustinus', 20, 'Laki-Laki', 'test test test test test test test test  test test test test test  test test test test test  test test test test test  test test test test test ', '04/22/2020 3:04 PM', 'Menunggu Konfirmasi', 9, 'Belum Dilayani', '');

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
