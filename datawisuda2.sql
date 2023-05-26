-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2022 at 01:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datawisuda2`
--

-- --------------------------------------------------------

--
-- Table structure for table `baa`
--

CREATE TABLE `baa` (
  `nik` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `kode_dosen` varchar(128) NOT NULL,
  `nama_dosen` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`kode_dosen`, `nama_dosen`) VALUES
('MA', 'Marjito'),
('AR', 'Asep Ririh'),
('MR', 'Miranti'),
('TW', 'Titi Widaretna'),
('SK', 'Siti Khodijah');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `role`) VALUES
(1, 'mahasiswa'),
(2, 'kaprodi'),
(3, 'baa');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `placeof_birth` varchar(128) NOT NULL,
  `dateof_birth` date NOT NULL,
  `addres` varchar(128) NOT NULL,
  `telp` varchar(128) NOT NULL,
  `prody_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `kode_prodi` varchar(128) NOT NULL,
  `nama_prodi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `nim` varchar(128) NOT NULL,
  `place_of_birth` varchar(128) NOT NULL,
  `date_of_birth` date NOT NULL,
  `addres` varchar(128) NOT NULL,
  `telp` varchar(128) NOT NULL,
  `prodi` varchar(128) NOT NULL,
  `kode_dosen` varchar(128) NOT NULL,
  `kode_prodi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `hak_akses`, `status`, `date_created`, `nim`, `place_of_birth`, `date_of_birth`, `addres`, `telp`, `prodi`, `kode_dosen`, `kode_prodi`) VALUES
(1, 'Rendi Sutendi', 'rendisutendi8@gmail.com', 'default.jpg', '$2y$10$duVYPgaGsm50060NsB1zROjQArzgXX9ZXED7rHIx6pAglcgZYfj.y', 1, 1, 1656313144, '21110856', 'Bandung', '2002-06-10', 'Jalan Arjuna Simpang', '085721451615', 'Teknik Informatika S1', '', ''),
(2, 'kaprodi', 'kaprodi@gmail.com', 'default.jpg', '$2y$10$FYI46yGKg/Hp8w5.esj2SeyyeUJDTXuICc0qBNtJ3u3m5M/eRuqYi', 2, 1, 1657186650, '', '', '0000-00-00', '', '', '', 'KP', 'ka'),
(3, 'baa', 'baa@gmail.com', 'default.jpg', '$2y$10$CUC0CbFlrDe9vLaIl5N5Kec/Nse/bUIXBYnM2YGwGFVHHB1LeG3NS', 3, 1, 1657193053, '', '', '0000-00-00', '', '', '', '', ''),
(16, 'Rendi Sutendi', 'rendisutendi10@gmail.com', 'default.jpg', '$2y$10$VNAd.jWvnvxgYQX2kh.tKeVqPLATRZSGdQN0QQagmSAV3hxRgo4ZK', 1, 1, 1657262353, '', '', '0000-00-00', '', '', '', '', ''),
(17, 'Rendi Sutendi', 'altheakim1410@gmail.com', 'default.jpg', '$2y$10$TV5z5nUenSYeYGJAB1j4TeP2Kd9nsoMYS8jcSGUZo2dMfPhKI/zYa', 1, 1, 1657367454, '21110856', 'Bandung', '2022-07-09', 'Jalan Arjuna Simpang', '085721451615', 'Teknik Informatika S1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wisuda`
--

CREATE TABLE `wisuda` (
  `id_pengajuan` int(11) NOT NULL,
  `NIM` varchar(128) NOT NULL,
  `Tanggal_Lulus` date NOT NULL,
  `IPK` double NOT NULL,
  `Judul_Tesis` varchar(128) NOT NULL,
  `Nilai_ta` float NOT NULL,
  `Dosen_Pembimbing` varchar(128) NOT NULL,
  `Bulan_Wisuda` varchar(128) NOT NULL,
  `Tahun_Wisuda` varchar(128) NOT NULL,
  `Tgl_Pengajuan` date NOT NULL,
  `Status_Pengajuan` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `program_studi` varchar(128) NOT NULL,
  `minat` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `predikat_kelulusan` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `lama_studi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisuda`
--

INSERT INTO `wisuda` (`id_pengajuan`, `NIM`, `Tanggal_Lulus`, `IPK`, `Judul_Tesis`, `Nilai_ta`, `Dosen_Pembimbing`, `Bulan_Wisuda`, `Tahun_Wisuda`, `Tgl_Pengajuan`, `Status_Pengajuan`, `nama`, `program_studi`, `minat`, `tempat_lahir`, `alamat`, `tanggal_lahir`, `predikat_kelulusan`, `email`, `lama_studi`) VALUES
(13, '21110856', '2022-07-09', 4, 'E-VOTING', 85, 'Asep Ririh', 'JANUARI', '2022', '2022-07-09', 'Tidak Disetujui', 'Rendi Sutendi', 'Teknik Informatika S1', 'S1', 'Bandung', 'Jalan Arjuna Simpang', '2022-07-09', 'Bagus', 'rendisutendi8@gmail.com', '4 tahun'),
(15, '21010031', '2022-07-09', 3, 'E-VOTING', 80, 'Miranti', 'JANUARI', '2022', '2022-07-09', 'Tidak Disetujui', 'Irsyad Husni Aqiila', 'Teknik Informatika S1', 'D3', 'Bandung', 'Jalan Arjuna Simpang', '2022-07-09', 'Bagus', 'asal@gmail.com', '4 tahun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `wisuda`
--
ALTER TABLE `wisuda`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `wisuda`
--
ALTER TABLE `wisuda`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`name`) REFERENCES `user` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
