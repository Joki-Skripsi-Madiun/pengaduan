-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2023 at 12:56 AM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_disposisi`
--

DROP TABLE IF EXISTS `tb_disposisi`;
CREATE TABLE IF NOT EXISTS `tb_disposisi` (
  `id_disposisi` int NOT NULL AUTO_INCREMENT,
  `jenis_disposisi` varchar(200) NOT NULL,
  `no_disposisi` varchar(200) NOT NULL,
  `tgl1_disposisi` varchar(200) NOT NULL,
  `perihal_disposisi` varchar(200) NOT NULL,
  `tgl2_disposisi` varchar(200) NOT NULL,
  `asal_disposisi` varchar(200) NOT NULL,
  `informasi_disposisi` varchar(200) NOT NULL,
  `catatan_disposisi` text NOT NULL,
  `tglselesai_disposisi` varchar(200) NOT NULL,
  `terusan_disposisi` varchar(300) NOT NULL,
  `status_disposisi` int NOT NULL,
  `id_jenis` int NOT NULL,
  PRIMARY KEY (`id_disposisi`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_disposisi`
--

INSERT INTO `tb_disposisi` (`id_disposisi`, `jenis_disposisi`, `no_disposisi`, `tgl1_disposisi`, `perihal_disposisi`, `tgl2_disposisi`, `asal_disposisi`, `informasi_disposisi`, `catatan_disposisi`, `tglselesai_disposisi`, `terusan_disposisi`, `status_disposisi`, `id_jenis`) VALUES
(2, 'Rahasia', '991019', '2023-05-01', 'Bansos', '2023-05-16', 'Dana Bansos', 'Untuk Mengambil dana Bansos<br>', 'Dibagikan ke masyarakat<br>', '2023-05-01', '1. Kepala Sekolah<br>2. Kepala Desa<br>', 1, 0),
(3, 'PENTING', '21', '2023-05-24', 'qwq', '2023-05-16', 'qwqw', '<p>qwqw</p>', 'qwqqw', '2023-05-17', '<p>qwqwwqqw</p>', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis`
--

DROP TABLE IF EXISTS `tb_jenis`;
CREATE TABLE IF NOT EXISTS `tb_jenis` (
  `id_jenis` int NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(200) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_jenis`
--

INSERT INTO `tb_jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Pengantar'),
(2, 'Tugas'),
(3, 'Disposisi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengantar`
--

DROP TABLE IF EXISTS `tb_pengantar`;
CREATE TABLE IF NOT EXISTS `tb_pengantar` (
  `id_pengantar` int NOT NULL AUTO_INCREMENT,
  `no_pengantar` varchar(100) NOT NULL,
  `tujuan_pengantar` varchar(200) NOT NULL,
  `isi_pengantar` text NOT NULL,
  `banyak_pengantar` varchar(200) NOT NULL,
  `keterangan_pengantar` varchar(500) NOT NULL,
  `unit_pengantar` varchar(200) NOT NULL,
  `penerima_pengantar` varchar(200) NOT NULL,
  `tgl_pengantar` varchar(200) NOT NULL,
  `nama_pengantar` varchar(100) NOT NULL,
  `nip_pengantar` varchar(50) NOT NULL,
  `status_pengantar` int NOT NULL,
  `id_jenis` int NOT NULL,
  PRIMARY KEY (`id_pengantar`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_pengantar`
--

INSERT INTO `tb_pengantar` (`id_pengantar`, `no_pengantar`, `tujuan_pengantar`, `isi_pengantar`, `banyak_pengantar`, `keterangan_pengantar`, `unit_pengantar`, `penerima_pengantar`, `tgl_pengantar`, `nama_pengantar`, `nip_pengantar`, `status_pengantar`, `id_jenis`) VALUES
(2, '200000', '<p>Kepala Sekolah<br></p>', '<p>Meminjam ruangan<br></p>', '1 Bandel<br>', '<p>Meminjam<br></p>', 'SMK Jetis', '<p>Kepala Sekolah<br></p>', '2023-09-01', 'Nur Laila S.Pd', '90918909109', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

DROP TABLE IF EXISTS `tb_surat`;
CREATE TABLE IF NOT EXISTS `tb_surat` (
  `id_surat` int NOT NULL AUTO_INCREMENT,
  `nama_surat` varchar(200) NOT NULL,
  `asal_surat` varchar(255) NOT NULL,
  `id_jenis` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `file_surat` varchar(200) NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id_surat`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_surat`
--

INSERT INTO `tb_surat` (`id_surat`, `nama_surat`, `asal_surat`, `id_jenis`, `file_surat`, `status`, `created_at`, `updated_at`) VALUES
(8, 'fgdgf', 'sdfsd', '2', '1684841711_87ed80a9eee8d5f95121.pdf', 2, '2023-05-23 04:35:11', '2023-05-23 04:35:11'),
(5, 'Gaji', 'Sekolah', '2', '1684839004_7512795fd0c3085a9482.pdf', 1, '2023-05-23 00:47:37', '2023-05-23 03:50:28'),
(7, 'dfd', 'dffd', '2', '1684841559_fb9a5ae92a2abc4ef1f2.pdf', 1, '2023-05-23 04:32:39', '2023-05-23 04:32:39');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas`
--

DROP TABLE IF EXISTS `tb_tugas`;
CREATE TABLE IF NOT EXISTS `tb_tugas` (
  `id_tugas` int NOT NULL AUTO_INCREMENT,
  `no_tugas` varchar(255) NOT NULL,
  `nama_tugas` varchar(255) NOT NULL,
  `nip_tugas` varchar(155) NOT NULL,
  `jabatan_tugas` varchar(255) NOT NULL,
  `unit_tugas` varchar(255) NOT NULL,
  `isi_tugas` varchar(500) NOT NULL,
  `tgl_tugas` varchar(20) NOT NULL,
  `hari_tugas` varchar(20) NOT NULL,
  `jam_tugas` varchar(20) NOT NULL,
  `tempat_tugas` varchar(100) NOT NULL,
  `status_tugas` int NOT NULL,
  `id_jenis` int NOT NULL,
  PRIMARY KEY (`id_tugas`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_tugas`
--

INSERT INTO `tb_tugas` (`id_tugas`, `no_tugas`, `nama_tugas`, `nip_tugas`, `jabatan_tugas`, `unit_tugas`, `isi_tugas`, `tgl_tugas`, `hari_tugas`, `jam_tugas`, `tempat_tugas`, `status_tugas`, `id_jenis`) VALUES
(1, '201920910', 'Gatot S.Pd', '89898088', 'Guru Kelas X A', 'SMK N 1 Jetis', '<p>Melakukan penelitian<br></p>', '2023-05-21', 'Minggu', '09:30-Selesai', '                Alun-alun Ponorogo<br>', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

DROP TABLE IF EXISTS `tb_users`;
CREATE TABLE IF NOT EXISTS `tb_users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `no_induk` varchar(255) NOT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` bigint NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `nama`, `no_induk`, `kelas`, `alamat`, `no_hp`, `email`, `username`, `password`, `role`, `foto`, `created_at`, `updated_at`) VALUES
(8, 'Dimas', '909090', 'A1', 'Madiun', 9012901, 'cha@gmail.com', 'dimas', '123456', 3, NULL, '2023-05-22 14:10:03', '2023-05-22 14:10:03'),
(4, 'admin', '9899898', '9D', 'Madiun', 989819891, 'wulandarichesiyanovia@gmail.com', 'admin1', '$2y$10$0zPhAJwvPaw7QRdGZQWQdu4mHKbLzDCq.M.1HNpytmE7AheXvuIza', 1, NULL, '2023-05-04 13:17:01', '2023-05-23 12:03:42'),
(5, 'chesiya', '19090', '10C', 'madiun', 9188181, 'madiun@gmail.com', 'chesiya', '$2y$10$fseBRncQ69p/RSJyhAmTke5UjF4uTQMM1zK.AqqjqzzRBQ.twbqvC', 3, NULL, '2023-05-17 00:58:31', '2023-05-23 12:10:55'),
(6, 'kepala sekolah', '90909', '-', 'maddiun', 9109109, 'a@gmail.com', 'kepala', '$2y$10$HDgdGHvn3ZKU4KleMNvTzu.WcYXc3Y/iR/8Z2XvP069MzSa5zeZMu', 2, 'default.jpg', '2023-05-17 01:04:51', '2023-05-17 01:04:51'),
(7, 'dimas1', '90909888', 'XI A', 'madiun', 989819891, 'wu@gmail.com', 'chesiya1', '$2y$10$voeArUOudciIY07Oe8qh5OxWwAbiHMMWk9v.9hGf4Rs1fV8TnQsAG', 3, 'default.jpg', '2023-05-22 12:30:34', '2023-05-22 12:30:34'),
(9, 'sdsds', '3232', 'sfs', 'dada', 32131, 'dadada@mail.com', 'qwertyuiopoiugfdfghj', '$2y$10$SYhK1xOU4kGlHcsXqqmuOu0/e6ZJdF2LXvLYqfm8JaJiUYWelYhqW', 3, 'default.jpg', '2023-05-23 12:07:54', '2023-05-23 12:07:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
