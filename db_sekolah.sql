-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 10:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nisn`, `nama_siswa`, `jenis_kelamin`, `foto`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '112233', 'Molly', 'Perempuan', 'img1.jpg', 'Jl. Beverly Hills, Kamangta', NULL, NULL),
(2, '4567', 'Bleu', 'Laki-laki', 'img2.jpg', 'Jl. San Andreas, Tombulu', NULL, NULL),
(3, '101', 'Kate', 'Perempuan', 'img3.jpg', 'Buckingham Palace, Mayondi', NULL, NULL),
(4, '0987', 'King', 'Laki-laki', 'img4.jpg', 'White House, Perkamil', NULL, NULL),
(5, '7651', 'Shiro', 'Laki-laki', 'img5.jpg', 'Tokyo, Calaca', NULL, NULL),
(6, '839485', 'Boston', 'Laki-laki', 'img6.jpg', 'New York, Paniki', NULL, NULL),
(7, '34073', 'Mickey', 'Perempuan', 'img7.jpg', 'Westminster Abbey, Wonasa', NULL, NULL),
(11, '89348', 'Ceria', 'Perempuan', 'img8.jpg', 'Seoul, Parigi Tujuh', NULL, NULL),
(12, '2938', 'Coci', 'Perempuan', 'img9.jpg', 'Bangkok, Paal 2', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
