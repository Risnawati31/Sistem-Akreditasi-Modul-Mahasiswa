-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 02:18 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modulmhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `idEdu` int(20) NOT NULL,
  `namaEdu` varchar(50) DEFAULT NULL,
  `Tahun` date NOT NULL,
  `Kota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leadershipex`
--

CREATE TABLE `leadershipex` (
  `idLex` int(20) NOT NULL,
  `Nama_kegiatan` varchar(30) NOT NULL,
  `Posisi` varchar(30) NOT NULL,
  `Tahun` date NOT NULL,
  `Deskripsi` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personaldt`
--

CREATE TABLE `personaldt` (
  `id` int(20) NOT NULL,
  `NIM` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `TempatLahir` varchar(30) NOT NULL,
  `TanggalLahir` date NOT NULL,
  `NoHp` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Alamat` tinytext NOT NULL,
  `StatusPernikahan` enum('Menikah','Belum Menikah') NOT NULL,
  `Prodi` enum('Ilmu Komputer','Sistem Informasi','Management Bisnis') DEFAULT NULL,
  `Angkatan` enum('2013','2014','2015','2016','2017','2018','2019','2020') NOT NULL,
  `Sosmed` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_sertification`
--

CREATE TABLE `personal_sertification` (
  `idPS` int(20) NOT NULL,
  `Nama_sert` varchar(30) NOT NULL,
  `Nama_lem` varchar(30) NOT NULL,
  `UploadFilePs` longblob NOT NULL,
  `Tahun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectex`
--

CREATE TABLE `projectex` (
  `idPex` int(20) NOT NULL,
  `Nama_pro` varchar(30) NOT NULL,
  `Tahun` date NOT NULL,
  `Use_technologi` varchar(30) NOT NULL,
  `Deskripsi` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `research_outcome`
--

CREATE TABLE `research_outcome` (
  `idRo` int(20) NOT NULL,
  `Nama_res` varchar(30) NOT NULL,
  `Tahun` date NOT NULL,
  `Deskripsi` tinytext NOT NULL,
  `UploadFileRo` longblob NOT NULL,
  `Kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `idsk` int(20) NOT NULL,
  `Nama_skill` varchar(30) NOT NULL,
  `Nama_tool` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training_seminar_workshop`
--

CREATE TABLE `training_seminar_workshop` (
  `idTSW` int(20) NOT NULL,
  `Nama_keg` varchar(30) NOT NULL,
  `Posisi` varchar(30) NOT NULL,
  `Tahun` date NOT NULL,
  `Lokasi` varchar(50) NOT NULL,
  `UploadFileTWS` longblob NOT NULL,
  `Kategori` enum('Training','Seminar','Workshop') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workingex`
--

CREATE TABLE `workingex` (
  `idWex` int(20) NOT NULL,
  `Nama_per` varchar(30) NOT NULL,
  `Posisi` varchar(30) NOT NULL,
  `Tahun_masuk` date NOT NULL,
  `Tahun_berakhir` date NOT NULL,
  `UploadFileWex` longblob NOT NULL,
  `deskripsi` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `writing`
--

CREATE TABLE `writing` (
  `idW` int(20) NOT NULL,
  `Judul_Karya` varchar(30) NOT NULL,
  `Nama_dosen` varchar(30) NOT NULL,
  `Nama_Jurnal` varchar(30) NOT NULL,
  `Tahun` date NOT NULL,
  `Volume` varchar(20) NOT NULL,
  `Halaman` varchar(20) NOT NULL,
  `link` varchar(20) NOT NULL,
  `UploadFileWr` longblob NOT NULL,
  `Kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`idEdu`);

--
-- Indexes for table `leadershipex`
--
ALTER TABLE `leadershipex`
  ADD PRIMARY KEY (`idLex`);

--
-- Indexes for table `personaldt`
--
ALTER TABLE `personaldt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_sertification`
--
ALTER TABLE `personal_sertification`
  ADD PRIMARY KEY (`idPS`);

--
-- Indexes for table `projectex`
--
ALTER TABLE `projectex`
  ADD PRIMARY KEY (`idPex`);

--
-- Indexes for table `research_outcome`
--
ALTER TABLE `research_outcome`
  ADD PRIMARY KEY (`idRo`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`idsk`);

--
-- Indexes for table `training_seminar_workshop`
--
ALTER TABLE `training_seminar_workshop`
  ADD PRIMARY KEY (`idTSW`);

--
-- Indexes for table `workingex`
--
ALTER TABLE `workingex`
  ADD PRIMARY KEY (`idWex`);

--
-- Indexes for table `writing`
--
ALTER TABLE `writing`
  ADD PRIMARY KEY (`idW`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `idEdu` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leadershipex`
--
ALTER TABLE `leadershipex`
  MODIFY `idLex` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personaldt`
--
ALTER TABLE `personaldt`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_sertification`
--
ALTER TABLE `personal_sertification`
  MODIFY `idPS` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projectex`
--
ALTER TABLE `projectex`
  MODIFY `idPex` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research_outcome`
--
ALTER TABLE `research_outcome`
  MODIFY `idRo` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `idsk` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training_seminar_workshop`
--
ALTER TABLE `training_seminar_workshop`
  MODIFY `idTSW` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workingex`
--
ALTER TABLE `workingex`
  MODIFY `idWex` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `writing`
--
ALTER TABLE `writing`
  MODIFY `idW` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`idEdu`) REFERENCES `personaldt` (`id`);

--
-- Constraints for table `leadershipex`
--
ALTER TABLE `leadershipex`
  ADD CONSTRAINT `leadershipex_ibfk_1` FOREIGN KEY (`idLex`) REFERENCES `personaldt` (`id`);

--
-- Constraints for table `personal_sertification`
--
ALTER TABLE `personal_sertification`
  ADD CONSTRAINT `personal_sertification_ibfk_1` FOREIGN KEY (`idPS`) REFERENCES `personaldt` (`id`);

--
-- Constraints for table `projectex`
--
ALTER TABLE `projectex`
  ADD CONSTRAINT `projectex_ibfk_1` FOREIGN KEY (`idPex`) REFERENCES `personaldt` (`id`);

--
-- Constraints for table `research_outcome`
--
ALTER TABLE `research_outcome`
  ADD CONSTRAINT `research_outcome_ibfk_1` FOREIGN KEY (`idRo`) REFERENCES `personaldt` (`id`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`idsk`) REFERENCES `personaldt` (`id`);

--
-- Constraints for table `training_seminar_workshop`
--
ALTER TABLE `training_seminar_workshop`
  ADD CONSTRAINT `training_seminar_workshop_ibfk_1` FOREIGN KEY (`idTSW`) REFERENCES `personaldt` (`id`);

--
-- Constraints for table `workingex`
--
ALTER TABLE `workingex`
  ADD CONSTRAINT `workingex_ibfk_1` FOREIGN KEY (`idWex`) REFERENCES `personaldt` (`id`);

--
-- Constraints for table `writing`
--
ALTER TABLE `writing`
  ADD CONSTRAINT `writing_ibfk_1` FOREIGN KEY (`idW`) REFERENCES `personaldt` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
