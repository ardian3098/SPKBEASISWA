-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 07, 2021 at 09:36 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spkbeasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE IF NOT EXISTS `beasiswa` (
`kd_beasiswa` int(9) NOT NULL,
  `thn_ajaran` varchar(9) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`kd_beasiswa`, `thn_ajaran`) VALUES
(1, '2021');

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE IF NOT EXISTS `bobot` (
`id_kriteria` int(9) NOT NULL,
  `jenis` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `thn_ajaran` varchar(9) NOT NULL,
  `weight` double NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id_kriteria`, `jenis`, `nama`, `thn_ajaran`, `weight`) VALUES
(1, 'Cost', 'Penghasilan Orang Tua', '2021', 0.4),
(2, 'Benefit', 'Nilai Rapor', '2021', 0.3),
(3, 'Benefit', 'Presensi', '2021', 0.1),
(4, 'Benefit', 'Kepribadian', '2021', 0.2);

-- --------------------------------------------------------

--
-- Table structure for table `dt_siswa`
--

CREATE TABLE IF NOT EXISTS `dt_siswa` (
`id_dtsiswa` int(9) NOT NULL,
  `id_user` int(9) NOT NULL,
  `thn_ajaran` varchar(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nis` varchar(9) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no` varchar(15) NOT NULL,
  `scanr` varchar(500) NOT NULL,
  `scans` varchar(500) NOT NULL,
  `gaji` int(15) NOT NULL,
  `rapor` double NOT NULL,
  `presensi` int(9) NOT NULL,
  `kepribadian` int(9) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `dt_siswa`
--

INSERT INTO `dt_siswa` (`id_dtsiswa`, `id_user`, `thn_ajaran`, `nama`, `nis`, `jk`, `alamat`, `no`, `scanr`, `scans`, `gaji`, `rapor`, `presensi`, `kepribadian`) VALUES
(1, 3, '2021', 'Marlin Bimantoro', '1234', 'Laki-laki', 'Karanganyar, Jawa Tengah', '0895283839', 'EMA_1606826320905.jpg', '1111.JPG', 1200000, 86.3, 100, 5),
(2, 4, '2021', 'Julian Victor', '1234', 'Laki-laki', 'Karanganyar, Jawa Tengah', '08584765389', '1111.JPG', '2222.JPG', 1000000, 82, 100, 5),
(3, 5, '2021', 'Martin Garix', '1234', 'Laki-laki', 'Karanganyar, Jawa Tengah', '08753823793', '1111.JPG', '2222.JPG', 1950000, 87.5, 100, 5),
(4, 6, '2021', 'Ananda Fio', '1234', 'Laki-laki', 'Karanganyar, Jawa Tengah', '08285674959', '1111.JPG', '2222.JPG', 1500000, 82.5, 100, 5),
(5, 7, '2021', 'kevin julio', '1234', 'Laki-laki', 'Karanganyar, Jawa Tengah', '08953839832', '1111.JPG', '2222.JPG', 1400000, 90, 100, 5),
(6, 8, '2021', 'galuh pangestu', '1234', 'Laki-laki', 'Karanganyar, Jawa Tengah', '08742838098', '1111.JPG', '2222.JPG', 2000000, 78, 95, 5),
(7, 9, '2021', 'Vanesa Rahmawati', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '08953793796', '1111.JPG', '2222.JPG', 1100000, 80.3, 100, 5),
(8, 10, '2021', 'laurin kusumawati', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '0828346839', '1111.JPG', '2222.JPG', 900000, 85, 100, 5),
(9, 11, '2021', 'Wulan Hestiningsih', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '08735723989', '1111.JPG', '2222.JPG', 1750000, 77.5, 100, 5),
(10, 12, '2021', 'Jamaludin Mustofa', '1234', 'Laki-laki', 'Karanganyar, Jawa Tengah', '08735472896', '1111.JPG', '2222.JPG', 1250000, 88, 100, 5),
(11, 13, '2021', 'Mufade Prasetyo Adi', '1234', 'Laki-laki', 'Karanganyar, Jawa Tengah', '08747634489', '1111.JPG', '2222.JPG', 1800000, 76, 100, 5),
(12, 14, '2021', 'Aura Rosmania', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '089538737290', '1111.JPG', '2222.JPG', 1500000, 83, 100, 5),
(13, 15, '2021', 'Adela Rita Permata', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '087427638997', '1111.JPG', '2222.JPG', 1600000, 89, 100, 5),
(14, 16, '2021', 'nurma kumalasari', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '089527823683', '1111.JPG', '2222.JPG', 1750000, 79, 100, 5),
(15, 17, '2021', 'Refangga Gumelar', '1234', 'Laki-laki', 'Karanganyar, Jawa Tengah', '0853218290', '1111.JPG', '2222.JPG', 1200000, 85.5, 100, 5),
(16, 18, '2021', 'Wahyu Kurniawan', '1234', 'Laki-laki', 'Karanganyar, Jawa Tengah', '087473648079', 'img20210407_17061002.jpg', 'img20210407_17061002.jpg', 1500000, 84.3, 100, 5),
(17, 19, '2021', 'Windi Tri Purweni', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '089574739273', 'img20210407_17061002.jpg', 'img20210407_17061002.jpg', 1800000, 78.3, 100, 5),
(18, 20, '2021', 'nurul nur pertiwi', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '087584493977', 'img20210407_17061002.jpg', 'img20210407_17061002.jpg', 2000000, 80.5, 100, 5),
(19, 21, '2021', 'putri pertiwi', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '085848379200', 'img20210407_17061002.jpg', 'img20210407_17061002.jpg', 1700000, 81.75, 95, 5),
(20, 22, '2021', 'arisa ayu wardani', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '08283749340', 'img20210407_17061002.jpg', 'img20210407_17061002.jpg', 1250000, 92.5, 100, 5),
(21, 23, '2021', 'vegi ivanova`', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '083584589979', 'img20210407_17061002.jpg', 'img20210407_17061002.jpg', 1750000, 79.3, 100, 5),
(22, 24, '2021', 'triana sulistyowati', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '089572937249', 'img20210407_17061002.jpg', 'img20210407_17061002.jpg', 1400000, 89.5, 100, 5),
(23, 25, '2021', 'yoni permadani putra', '1234', 'Laki-laki', 'Karanganyar, Jawa Tengah', '08956394723', 'img20210407_17061002.jpg', 'img20210407_17061002.jpg', 900000, 77.8, 100, 5),
(24, 26, '2021', 'wilya wismawati', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '08743723688', 'img20210407_17061002.jpg', 'img20210407_17061002.jpg', 1500000, 86.5, 100, 5),
(25, 27, '2021', 'ade pratiwi', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '0874537382654', 'img20210407_17061002.jpg', 'img20210407_17061002.jpg', 2000000, 87.3, 100, 5),
(26, 28, '2021', 'dessy kusma astuti', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '087452367387', 'img20210407_17061002.jpg', 'img20210407_17061002.jpg', 1750000, 83.5, 80, 5),
(27, 29, '2021', 'nuva diansari', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '085329746897', 'img20210407_17061002.jpg', 'img20210407_17061002.jpg', 1100000, 85.3, 100, 5),
(28, 30, '2021', 'Khalila aya markatin', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '', 'img20210407_17061002.jpg', 'img20210407_17061002.jpg', 2500000, 77.7, 100, 5),
(29, 31, '2021', 'martha maria sari', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '08538468329', 'img20210407_17061002.jpg', 'img20210407_17061002.jpg', 1650000, 87.3, 100, 5),
(30, 32, '2021', 'sri rahayu', '1234', 'Perempuan', 'Karanganyar, Jawa Tengah', '08952876389', 'img20210407_17061002.jpg', 'img20210407_17061002.jpg', 1200000, 85, 100, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(9) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'ardian', 'admin', 'Admin'),
(2, 'Christian', '12345', 'Operator'),
(3, 'marlin', '123', 'Siswa'),
(4, 'julian', '123', 'Siswa'),
(5, 'martin', '123', 'Siswa'),
(6, 'fio', '123', 'Siswa'),
(7, 'kevin', '123', 'Siswa'),
(8, 'galuh', '123', 'Siswa'),
(9, 'vanesa', '123', 'Siswa'),
(10, 'laurin', '123', 'Siswa'),
(11, 'wulan', '123', 'Siswa'),
(12, 'jamaludin', '123', 'Siswa'),
(13, 'fade', '123', 'Siswa'),
(14, 'aura', '123', 'Siswa'),
(15, 'adela', '123', 'Siswa'),
(16, 'nurma', '123', 'Siswa'),
(17, 'angga', '123', 'Siswa'),
(18, 'wahyu', '123', 'Siswa'),
(19, 'windi', '123', 'Siswa'),
(20, 'nurul', '123', 'Siswa'),
(21, 'putri', '123', 'Siswa'),
(22, 'arisa', '123', 'Siswa'),
(23, 'vegi', '123', 'Siswa'),
(24, 'triana', '123', 'Siswa'),
(25, 'yoni', '123', 'Siswa'),
(26, 'wilya', '123', 'Siswa'),
(27, 'ade', '123', 'Siswa'),
(28, 'dessy', '123', 'Siswa'),
(29, 'nuva', '123', 'Siswa'),
(30, 'khalila', '123', 'Siswa'),
(31, 'martha', '123', 'Siswa'),
(32, 'sri', '123', 'Siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
 ADD PRIMARY KEY (`kd_beasiswa`);

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
 ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `dt_siswa`
--
ALTER TABLE `dt_siswa`
 ADD PRIMARY KEY (`id_dtsiswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beasiswa`
--
ALTER TABLE `beasiswa`
MODIFY `kd_beasiswa` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
MODIFY `id_kriteria` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dt_siswa`
--
ALTER TABLE `dt_siswa`
MODIFY `id_dtsiswa` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
