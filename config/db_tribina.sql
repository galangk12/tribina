-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2020 at 04:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tribina`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_agt_kelompok`
--

CREATE TABLE `tb_agt_kelompok` (
  `id_pe_kelompok` int(6) NOT NULL,
  `id_kelompok` int(6) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `kode_keluargaid` varchar(15) NOT NULL,
  `pelatihan` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_agt_kelompok`
--

INSERT INTO `tb_agt_kelompok` (`id_pe_kelompok`, `id_kelompok`, `nama_lengkap`, `jabatan`, `kode_keluargaid`, `pelatihan`, `tanggal`, `id_user`) VALUES
(7, 4, 'Adi Setiyawan', 'Ketua', '00012343', 'Sudah', '2017-06-20', 1),
(8, 4, 'Adi Prakoso', 'Sekertaris', '00012347', 'Belum', '2017-06-20', 1),
(9, 4, 'Teguh Sentosa', 'Bendahara', '00012346', 'Belum', '2017-06-20', 1),
(11, 5, 'Aldo Rivaldo', 'Ketua', '00013340', 'Sudah', '2017-06-20', 1),
(12, 2, 'Sekar Dina Mutiara', 'Ketua', '00014340', 'Belum', '2017-06-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_id_kelompok`
--

CREATE TABLE `tb_id_kelompok` (
  `id_kelompok` int(6) NOT NULL,
  `id_jenis_kelompok` varchar(3) NOT NULL,
  `nama_kelompok` varchar(50) NOT NULL,
  `jalan` varchar(50) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kabkot` varchar(30) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `nama_pembina` varchar(50) NOT NULL,
  `jabatan_pembina` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_id_kelompok`
--

INSERT INTO `tb_id_kelompok` (`id_kelompok`, `id_jenis_kelompok`, `nama_kelompok`, `jalan`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kabkot`, `provinsi`, `nama_pembina`, `jabatan_pembina`, `tanggal`, `id_user`) VALUES
(2, 'BKL', 'Mawar IV', 'Jl. Cempaka No 13', '04', '01', 'Ngadirejo', 'Sidorejo', 'Kota Salatiga', 'Jawa Tengah', 'Sukimin', 'PPLKB', '2020-06-20', 1),
(3, 'BKL', 'Teratai V', 'Jl. Monginsidi No 12', '02', '04', 'Ngadirejo', 'Sidorejo', 'Kota Salatiga', 'Jawa Tengah', 'Suradi', 'PPLKB', '2020-06-20', 1),
(4, 'BKB', 'Permata Hatimu', 'Jl. Pramuka No 2', '03', '04', 'Kumpulrejo', 'Argomulyo', 'Kota Salatiga', 'Jawa Tengah', 'Sudrajat', 'PPKBD', '2020-06-20', 1),
(5, 'BKR', 'Cemerlang', 'Jl. Kemiri No 2', '02', '01', 'Kemiri', 'Sidorejo', 'Kota Salatiga', 'Jawa Tengah', 'Sukimin', 'PKB/PLKB', '2020-06-20', 1),
(6, 'BKB', 'Kasih Ibu', 'Jl. Tingkir No.4', '06', '03', 'Tingkir', 'Tingkir', 'Kota Salatiga', 'Jawa Tengah', 'Suparidin', 'PPLKB', '2020-06-20', 1),
(7, 'BKR', 'Sido Waras', 'Jl. Sidowaras No 9', '01', '03', 'Sidomukti', 'Sidomukti', 'Kota Salatiga', 'Jawa Tengah', 'Anggi Agatha', 'PKB/PLKB', '2020-06-20', 1),
(8, 'BKB', 'Lestari II', 'Jl. Lestari ', '01', '04', 'Kutowinangun', 'Sidorejo', 'Kota Salatiga', 'Jawa Tengah', 'Astuti ', 'Lainnya', '2021-06-20', 1),
(9, 'BKR', 'Bima Kencana', 'Jl Bima Kencana', '01', '02', 'Sidomukti', 'Sidomukti', 'Kota Salatiga', 'Jawa Tengah', 'Arie Wibawa', 'PPLKB', '2021-06-20', 1),
(10, 'BKL', 'Gawe Rukun', 'Jl Gawe Rukun', '06', '02', 'Argomulyo', 'Argomulyo', 'Kota Salatiga', 'Jawa Tengah', 'Mukidi', 'PPLKB', '2021-06-20', 1),
(11, 'BKR', 'Mekar Arum', 'Jl Mekar Arum', '01', '01', 'Argomulyo', 'Argomulyo', 'Kota Salatiga', 'Jawa Tengah', 'Arum Sejati', 'Lainnya', '2021-06-20', 1),
(12, 'BKL', 'Kasih Sayang', 'Jl Kasih Sayang', '03', '02', 'Sidomukti', 'Sidomukti', 'Kota Salatiga', 'Jawa Tengah', 'Mirjan', 'PPKBD', '2021-06-20', 1),
(13, 'BKB', 'Kartini', 'Jl Kartini', '01', '02', 'Sidomukti', 'Sidomukti', 'Kota Salatiga', 'Jawa Tengah', 'Widi Astuti', 'PKB/PLKB', '2021-06-20', 1),
(14, 'BKL', 'Segar Waras', 'Jl Segar Waras', '02', '04', 'Tingkir', 'Tingkir', 'Kota Salatiga', 'Jawa Tengah', 'Sukini', 'PPKBD', '2021-06-20', 1),
(15, 'BKR', 'Kuncup Mekar', 'Jl Mekar', '03', '01', 'Tingkir', 'Tingkir', 'Kota Salatiga', 'Jawa Tengah', 'Ardhi Wijaya', 'PKB/PLKB', '2021-06-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_kelompok`
--

CREATE TABLE `tb_jenis_kelompok` (
  `id_jenis_kelompok` varchar(3) NOT NULL,
  `jenis_kelompok` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis_kelompok`
--

INSERT INTO `tb_jenis_kelompok` (`id_jenis_kelompok`, `jenis_kelompok`) VALUES
('BKB', 'Bina Keluarga Balita'),
('BKL', 'Bina Keluarga Lansia'),
('BKR', 'Bina Keluarga Remaja');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'Sebut Saja Mawar', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_agt_kelompok`
--
ALTER TABLE `tb_agt_kelompok`
  ADD PRIMARY KEY (`id_pe_kelompok`),
  ADD KEY `fk_id_kelompok` (`id_kelompok`),
  ADD KEY `fk_id_user_agt` (`id_user`);

--
-- Indexes for table `tb_id_kelompok`
--
ALTER TABLE `tb_id_kelompok`
  ADD PRIMARY KEY (`id_kelompok`),
  ADD KEY `fk_jns_kelompok` (`id_jenis_kelompok`),
  ADD KEY `fk_id_users_idk` (`id_user`);

--
-- Indexes for table `tb_jenis_kelompok`
--
ALTER TABLE `tb_jenis_kelompok`
  ADD PRIMARY KEY (`id_jenis_kelompok`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_agt_kelompok`
--
ALTER TABLE `tb_agt_kelompok`
  MODIFY `id_pe_kelompok` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_id_kelompok`
--
ALTER TABLE `tb_id_kelompok`
  MODIFY `id_kelompok` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_agt_kelompok`
--
ALTER TABLE `tb_agt_kelompok`
  ADD CONSTRAINT `fk_id_kelompok` FOREIGN KEY (`id_kelompok`) REFERENCES `tb_id_kelompok` (`id_kelompok`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_user_agt` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `tb_id_kelompok`
--
ALTER TABLE `tb_id_kelompok`
  ADD CONSTRAINT `fk_id_users_idk` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `fk_jns_kelompok` FOREIGN KEY (`id_jenis_kelompok`) REFERENCES `tb_jenis_kelompok` (`id_jenis_kelompok`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
