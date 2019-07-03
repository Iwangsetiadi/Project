-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 04:52 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad4`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `NIP` int(11) NOT NULL,
  `Nama_Guru` varchar(100) NOT NULL,
  `Tempat_Lahir` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Alamat` text NOT NULL,
  `JK` enum('L','P') NOT NULL,
  `Kode_Mapel_Guru` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `Kode_Jenjang` varchar(10) NOT NULL,
  `Nama_Jenjang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`Kode_Jenjang`, `Nama_Jenjang`) VALUES
('JJG10', 'X'),
('JJG11', 'XI'),
('JJG12', 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `Kode_Jurusan` varchar(10) NOT NULL,
  `Nama_Jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`Kode_Jurusan`, `Nama_Jurusan`) VALUES
('JRS01', 'Teknik Komputer dan Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `Kode_Kelas` varchar(10) NOT NULL,
  `Kode_Jenjang_Kelas` varchar(10) NOT NULL,
  `Kode_Jurusan_Kelas` varchar(10) NOT NULL,
  `Kode_Rombel_Kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`Kode_Kelas`, `Kode_Jenjang_Kelas`, `Kode_Jurusan_Kelas`, `Kode_Rombel_Kelas`) VALUES
('KLS01', 'JJG10', 'JRS01', 'RBL01');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Andhika', 'Andi@gmail.com', 'apsps', 'Sangat Bagus'),
(2, 'Iwang', 'Iwangsetiady28@gmail.com', 'Bagus', 'Sangat Bermanfaat'),
(4, 'Tito', 'Titopii@gmail.cpm', 'Rating', 'Saya coba dulu, kalau bagus nanti gak saya kasih bintang.');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `Kode_Mapel` varchar(10) NOT NULL,
  `Nama_Mapel` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`Kode_Mapel`, `Nama_Mapel`) VALUES
('MPL02', 'Bahasa Indonesia'),
('MPL01', 'Matematika'),
('M0003', 'Seni Budaya');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `Kode_Mapel_Nilai` varchar(10) NOT NULL,
  `Kode_Siswa_Nilai` int(11) NOT NULL,
  `Nilai` int(100) NOT NULL,
  `Bab` varchar(100) NOT NULL,
  `Kode_Guru` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `Kode_Mapel_Nilai`, `Kode_Siswa_Nilai`, `Nilai`, `Bab`, `Kode_Guru`) VALUES
(32, 'MPL01', 12121212, 80, 'Logaritma', 0),
(33, 'MPL01', 12121212, 80, 'Logaritma', 0),
(34, 'MPL01', 12121212, 80, '1', 98),
(35, 'MPL01', 12121212, 34, 'Aksara Jawa', 98);

-- --------------------------------------------------------

--
-- Table structure for table `rombel`
--

CREATE TABLE `rombel` (
  `Kode_Rombel` varchar(10) NOT NULL,
  `Nama_Rombel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rombel`
--

INSERT INTO `rombel` (`Kode_Rombel`, `Nama_Rombel`) VALUES
('RBL01', '1'),
('RBL02', '2'),
('RBL03', '3'),
('RBL04', '4');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NIS` int(11) NOT NULL,
  `Nama_Siswa` varchar(100) NOT NULL,
  `Tempat_Lahir` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Alamat` text NOT NULL,
  `JK` enum('L','P') NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `Kode_Kelas_Siswa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIS`, `Nama_Siswa`, `Tempat_Lahir`, `Tanggal_Lahir`, `Alamat`, `JK`, `Agama`, `Kode_Kelas_Siswa`) VALUES
(12121212, 'I', 'P', '3300-05-31', 'Petarukanf', 'L', 'Islam', 'KLS01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_User` int(11) NOT NULL,
  `Id_Usergroup_User` int(11) NOT NULL,
  `Id_Guru` int(11) NOT NULL,
  `Id_Siswa` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Foto` varchar(150) NOT NULL DEFAULT 'ids.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `Id_Usergroup_User`, `Id_Guru`, `Id_Siswa`, `Username`, `Password`, `Foto`) VALUES
(1, 1, 0, 0, 'admin', '$2y$10$oDAYrv0ENhQDeBbbV35FJOU4PLQkQibeRCt49IyoR6fxbY2DYI97G', 'admin.png'),
(60, 3, 0, 12121212, '12121212', '$2y$10$8.LHu/Gxo94q.YGiokCLDeN2SCuMcW2pbg9K9Edh1zPV3/j6m7REW', 'ids.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `Id_Usergroup` int(11) NOT NULL,
  `Nama_Usergroup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`Id_Usergroup`, `Nama_Usergroup`) VALUES
(1, 'Administrator'),
(2, 'Guru'),
(3, 'Siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`),
  ADD KEY `Kode_Mapel_Guru` (`Kode_Mapel_Guru`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`Kode_Jenjang`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`Kode_Jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`Kode_Kelas`),
  ADD KEY `Kode_Jenjang_Kelas` (`Kode_Jenjang_Kelas`),
  ADD KEY `Kode_Jurusan_Kelas` (`Kode_Jurusan_Kelas`),
  ADD KEY `Kode_Rombel_Kelas` (`Kode_Rombel_Kelas`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`Kode_Mapel`),
  ADD KEY `Nama_Mapel` (`Nama_Mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rombel`
--
ALTER TABLE `rombel`
  ADD PRIMARY KEY (`Kode_Rombel`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`),
  ADD KEY `Kode_Mapel_Guru` (`Kode_Kelas_Siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`),
  ADD KEY `FK_user_usergroup` (`Id_Usergroup_User`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`Id_Usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `Id_Usergroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
