-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 22, 2023 at 03:26 AM
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
-- Database: `pelanggaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

DROP TABLE IF EXISTS `auth_activation_attempts`;
CREATE TABLE IF NOT EXISTS `auth_activation_attempts` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36 Edg/113.0.1774.42', '9607c433f718589e84099c0388349de7', '2023-05-16 16:26:32'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36 Edg/113.0.1774.50', 'c507bc409c18061bb08297ff79c73419', '2023-05-24 02:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

DROP TABLE IF EXISTS `auth_groups`;
CREATE TABLE IF NOT EXISTS `auth_groups` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `description` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'administrator', 'Administrator'),
(2, 'bk', 'Bimbingan Konseling'),
(3, 'kesiswaan', 'Kesiswaan');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

DROP TABLE IF EXISTS `auth_groups_permissions`;
CREATE TABLE IF NOT EXISTS `auth_groups_permissions` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0',
  KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  KEY `group_id_permission_id` (`group_id`,`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

DROP TABLE IF EXISTS `auth_groups_users`;
CREATE TABLE IF NOT EXISTS `auth_groups_users` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  KEY `auth_groups_users_user_id_foreign` (`user_id`),
  KEY `group_id_user_id` (`group_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(1, 13),
(1, 22),
(3, 14);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

DROP TABLE IF EXISTS `auth_logins`;
CREATE TABLE IF NOT EXISTS `auth_logins` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'isyaau@gmail.com', 1, '2023-05-04 08:27:52', 1),
(2, '::1', 'isyaau@gmail.com', NULL, '2023-05-04 15:01:55', 0),
(3, '::1', 'isyaau@gmail.com', 1, '2023-05-04 15:02:07', 1),
(4, '::1', 'isyaau@gmail.com', 1, '2023-05-05 04:43:08', 1),
(5, '::1', 'isyaau@gmail.com', 1, '2023-05-05 04:47:48', 1),
(6, '::1', 'isyaau@gmail.com', 1, '2023-05-05 04:49:35', 1),
(7, '::1', 'isyaau@gmail.com', 1, '2023-05-05 08:39:04', 1),
(8, '::1', 'isyaau@gmail.com', 1, '2023-05-11 02:39:58', 1),
(9, '::1', 'isyaau@gmail.com', 1, '2023-05-11 14:17:46', 1),
(10, '::1', 'isyaau@gmail.com', 1, '2023-05-11 20:25:24', 1),
(11, '::1', 'isyaau@gmail.com', 1, '2023-05-11 20:41:59', 1),
(12, '::1', 'alfia@gmail.com', 11, '2023-05-11 20:52:17', 1),
(13, '::1', 'isyaau@gmail.com', 1, '2023-05-12 03:56:58', 1),
(14, '::1', 'alfia@gmail.com', 11, '2023-05-12 04:19:09', 1),
(15, '::1', 'isyaau@gmail.com', 1, '2023-05-12 05:03:21', 1),
(16, '::1', 'isyaau@gmail.com', 1, '2023-05-15 07:59:12', 1),
(17, '::1', 'admin@gmail.com', 0, '2023-05-15 08:59:34', 1),
(18, '::1', 'admin@gmail.com', 0, '2023-05-15 08:59:54', 1),
(19, '::1', 'admin@gmail.com', 0, '2023-05-15 09:00:16', 1),
(20, '::1', 'admin@gmail.com', NULL, '2023-05-15 09:01:02', 0),
(21, '::1', 'admin@gmail.com', 0, '2023-05-15 09:01:25', 1),
(22, '::1', 'admin@gmail.com', 0, '2023-05-15 09:03:28', 1),
(23, '::1', 'admin@gmail.com', 0, '2023-05-15 09:03:55', 1),
(24, '::1', 'alfia@gmail.com', 11, '2023-05-15 09:04:27', 1),
(25, '::1', 'admin@gmail.com', NULL, '2023-05-15 09:05:41', 0),
(26, '::1', 'admin@gmail.com', 0, '2023-05-15 09:05:59', 1),
(27, '::1', 'admin@gmail.com', 0, '2023-05-16 06:03:09', 1),
(28, '::1', 'isyaau@gmail.com', 1, '2023-05-16 06:03:19', 1),
(29, '::1', 'admin', NULL, '2023-05-16 06:27:23', 0),
(30, '::1', 'admin@gmail.com', 13, '2023-05-16 06:27:39', 1),
(31, '::1', 'fuadiazhar12@gmail.com', NULL, '2023-05-16 16:27:08', 0),
(32, '::1', 'fuadiazhar12@gmail.com', 14, '2023-05-16 16:27:18', 1),
(33, '::1', 'admin@gmail.com', NULL, '2023-05-16 16:35:41', 0),
(34, '::1', 'admin@gmail.com', 13, '2023-05-16 16:35:50', 1),
(35, '::1', 'fuadiazhar12@gmail.com', NULL, '2023-05-16 16:38:15', 0),
(36, '::1', 'fuadiazhar12@gmail.com', 14, '2023-05-16 16:38:31', 1),
(37, '::1', 'admin@gmail.com', 13, '2023-05-16 16:39:03', 1),
(38, '::1', 'fuadiazhar12@gmail.com', 14, '2023-05-16 16:42:41', 1),
(39, '::1', 'admin@gmail.com', NULL, '2023-05-16 16:45:35', 0),
(40, '::1', 'admin@gmail.com', NULL, '2023-05-16 16:45:44', 0),
(41, '::1', 'admin@gmail.com', 13, '2023-05-16 16:45:52', 1),
(42, '::1', 'fuadiazhar12@gmail.com', 14, '2023-05-16 16:48:26', 1),
(43, '::1', 'isyaau@gmail.com', NULL, '2023-05-17 12:35:16', 0),
(44, '::1', 'isyaau@gmail.com', 1, '2023-05-17 12:35:26', 1),
(45, '::1', 'isyaau#gmail.com', NULL, '2023-05-19 12:39:44', 0),
(46, '::1', 'iyaau@gmail.com', NULL, '2023-05-19 12:40:00', 0),
(47, '::1', 'isyaau@gmail.com', 1, '2023-05-19 12:40:16', 1),
(48, '::1', 'isyaau@gmailcom', NULL, '2023-05-20 19:15:48', 0),
(49, '::1', 'isyaau@gmail.com', 1, '2023-05-20 19:16:02', 1),
(50, '::1', 'isyaau@gmail.com', 1, '2023-05-22 14:22:46', 1),
(51, '::1', 'isyaau@gmail.com', 1, '2023-05-24 01:21:52', 1),
(52, '::1', 'admin@gmail.com', NULL, '2023-05-24 01:32:45', 0),
(53, '::1', 'admin', NULL, '2023-05-24 01:32:58', 0),
(54, '::1', 'isyaau@gmail.com', 1, '2023-05-24 01:33:03', 1),
(55, '::1', 'admin@gmail.com', NULL, '2023-05-24 01:33:42', 0),
(56, '::1', 'admin@gmail.com', NULL, '2023-05-24 01:34:28', 0),
(57, '::1', 'admin@gmail.com', NULL, '2023-05-24 01:34:49', 0),
(58, '::1', 'isyaau@gmail.com', 1, '2023-05-24 01:35:01', 1),
(59, '::1', 'admin@gmail.com', NULL, '2023-05-24 01:36:05', 0),
(60, '::1', 'isyaau@gmail.com', 1, '2023-05-24 01:40:11', 1),
(61, '::1', 'admin@gmail.com', 13, '2023-05-24 01:40:57', 1),
(62, '::1', 'andi00@afpeterg.com', 15, '2023-05-24 02:05:39', 1),
(63, '::1', 'andi00@afpeterg.com', 15, '2023-05-24 02:10:36', 1),
(64, '::1', 'admin@gmail.com', 13, '2023-05-24 02:16:08', 1),
(65, '::1', 'isyaau@gmail.com', 1, '2023-05-24 15:30:04', 1),
(66, '::1', 'isyaau@gmail.com', 1, '2023-06-19 03:08:22', 1),
(67, '::1', 'isyaau@gmail.com', 1, '2023-06-19 11:46:53', 1),
(68, '::1', 'isyaau@gmail.com', 1, '2023-06-20 06:53:12', 1),
(69, '::1', 'isyaau@gmail.com', 1, '2023-06-20 08:38:52', 1),
(70, '::1', 'isyaau@gmail.com', 1, '2023-06-20 08:41:00', 1),
(71, '::1', 'isyaau@gmail.com', 1, '2023-06-20 08:41:57', 1),
(72, '::1', 'isyaau@gmail.com', 1, '2023-06-20 08:43:25', 1),
(73, '::1', 'isyaau@gmail.com', 1, '2023-06-20 08:44:13', 1),
(74, '::1', 'isyaau@gmail.com', 1, '2023-06-20 08:46:02', 1),
(75, '::1', 'isyaau@gmail.com', 1, '2023-06-20 08:47:07', 1),
(76, '::1', 'isyaau@gmail.com', 1, '2023-06-20 08:49:48', 1),
(77, '::1', 'isyaau@gmail.com', 1, '2023-06-20 08:51:35', 1),
(78, '::1', 'isyaau@gmail.com', 1, '2023-06-20 08:52:44', 1),
(79, '::1', 'isyaau@gmail.com', 1, '2023-06-20 08:55:17', 1),
(80, '::1', 'isyaau@gmail.com', 1, '2023-06-20 08:55:41', 1),
(81, '::1', 'isyaau@gmail.com', 1, '2023-06-20 09:00:41', 1),
(82, '::1', 'isyaau@gmail.com', 1, '2023-06-20 13:06:05', 1),
(83, '::1', 'isyaau@gmail.com', 1, '2023-06-20 13:26:41', 1),
(84, '::1', 'isyaau@gmail.com', 1, '2023-06-20 13:48:44', 1),
(85, '::1', 'isyaau@gmail.com', 1, '2023-06-20 13:53:15', 1),
(86, '::1', 'isyaau@gmail.com', 1, '2023-06-20 13:57:11', 1),
(87, '::1', 'isyaau@gmail.com', 1, '2023-06-20 13:59:28', 1),
(88, '::1', 'isyaau@gmail.com', 1, '2023-06-20 14:02:53', 1),
(89, '::1', 'isyaau@gmail.com', 1, '2023-06-20 14:03:25', 1),
(90, '::1', 'isyaau@gmail.com', 1, '2023-06-20 14:03:37', 1),
(91, '::1', 'isyaau@gmail.com', 1, '2023-06-20 14:07:11', 1),
(92, '::1', 'isyaau@gmail.com', 1, '2023-06-20 14:08:52', 1),
(93, '::1', 'isyaau@gmail.com', 1, '2023-06-20 14:12:08', 1),
(94, '::1', 'isyaau@gmail.com', 1, '2023-06-20 20:50:15', 1),
(95, '::1', 'isyaau@gmail.com', 1, '2023-06-20 21:14:45', 1),
(96, '::1', 'isyaau@gmail.com', 1, '2023-06-20 21:20:39', 1),
(97, '::1', 'isyaau@gmail.com', 1, '2023-06-21 03:04:22', 1),
(98, '::1', 'isyaau@gmail.com', 1, '2023-06-21 03:13:59', 1),
(99, '::1', 'kepsek@gmail.com', 16, '2023-06-21 05:07:42', 1),
(100, '::1', 'isyaau@gmail.com', 1, '2023-06-21 05:34:15', 1),
(101, '::1', 'alfia@gmail.com', 14, '2023-06-21 05:53:11', 1),
(102, '::1', 'alfia@gmail.com', 14, '2023-06-21 06:09:49', 1),
(103, '::1', 'isyaau@gmail.com', 1, '2023-06-21 06:11:21', 1),
(104, '::1', 'kepsek@gmail.com', 16, '2023-06-21 06:21:18', 1),
(105, '::1', 'alfia@gmail.com', 14, '2023-06-21 06:23:14', 1),
(106, '::1', 'isyaau@gmail.com', 1, '2023-06-21 06:27:33', 1),
(107, '::1', 'isyaau@gmail.com', 1, '2023-06-22 01:03:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

DROP TABLE IF EXISTS `auth_permissions`;
CREATE TABLE IF NOT EXISTS `auth_permissions` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

DROP TABLE IF EXISTS `auth_reset_attempts`;
CREATE TABLE IF NOT EXISTS `auth_reset_attempts` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_reset_attempts`
--

INSERT INTO `auth_reset_attempts` (`id`, `email`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, 'fuadiazhar12@gmail.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36 Edg/113.0.1774.42', '546029a3c08ed689fbfb765d11bc0ae4', '2023-05-16 16:38:00'),
(2, 'andi00@afpeterg.com', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36 Edg/113.0.1774.50', '6d30588243b3a4501f63163ae0aa88f0', '2023-05-24 02:13:04');

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

DROP TABLE IF EXISTS `auth_tokens`;
CREATE TABLE IF NOT EXISTS `auth_tokens` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auth_tokens_user_id_foreign` (`user_id`),
  KEY `selector` (`selector`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

DROP TABLE IF EXISTS `auth_users_permissions`;
CREATE TABLE IF NOT EXISTS `auth_users_permissions` (
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0',
  KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  KEY `user_id_permission_id` (`user_id`,`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pelanggaran`
--

DROP TABLE IF EXISTS `jenis_pelanggaran`;
CREATE TABLE IF NOT EXISTS `jenis_pelanggaran` (
  `id_jenis` int NOT NULL AUTO_INCREMENT,
  `id_kategori` int NOT NULL,
  `nama_jenis` varchar(255) NOT NULL,
  `bobot` int NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jenis_pelanggaran`
--

INSERT INTO `jenis_pelanggaran` (`id_jenis`, `id_kategori`, `nama_jenis`, `bobot`) VALUES
(2, 1, 'Rambut Diwarnai', 2),
(3, 2, 'Telat Masuk', 10);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pelanggaran`
--

DROP TABLE IF EXISTS `kategori_pelanggaran`;
CREATE TABLE IF NOT EXISTS `kategori_pelanggaran` (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori_pelanggaran`
--

INSERT INTO `kategori_pelanggaran` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Kerapian Badan'),
(2, 'Kesopanan');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(20) NOT NULL,
  `wali_kelas` varchar(50) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jk_wali` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `wali_kelas`, `nip`, `jk_wali`) VALUES
(1, 'IX A', 'Titik, S.Pd', '9991092019012', 'Perempuan'),
(3, 'IX C', 'Anis S.Pd', '12332211', 'Perempuan'),
(4, '7A', 'Hadi', '1905101010', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(6, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1683085034, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

DROP TABLE IF EXISTS `pelanggaran`;
CREATE TABLE IF NOT EXISTS `pelanggaran` (
  `id_pelanggaran` int NOT NULL AUTO_INCREMENT,
  `id_siswa` int NOT NULL,
  `id_jenis` int NOT NULL,
  `pelapor` varchar(30) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `foto_pelanggaran` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pelanggaran`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id_pelanggaran`, `id_siswa`, `id_jenis`, `pelapor`, `catatan`, `foto_pelanggaran`, `waktu`) VALUES
(2, 1, 2, 'Guru Wali', ' POint', '1687257103_34b8b04b23ea299348f5.png', 'Tuesday, 20 June 2023, 10:31:18 AM');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

DROP TABLE IF EXISTS `prestasi`;
CREATE TABLE IF NOT EXISTS `prestasi` (
  `id_prestasi` int NOT NULL AUTO_INCREMENT,
  `id_siswa` int NOT NULL,
  `nama_prestasi` varchar(255) NOT NULL,
  `tgl_prestasi` varchar(50) NOT NULL,
  `tingkat_prestasi` varchar(50) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `foto_prestasi` varchar(255) NOT NULL,
  PRIMARY KEY (`id_prestasi`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `id_siswa`, `nama_prestasi`, `tgl_prestasi`, `tingkat_prestasi`, `keterangan`, `foto_prestasi`) VALUES
(1, 2, 'Juara 1 Lomba Mewarnai', '2023-06-20', 'Lokal', 'Juara 1', '1687258608_53f8cbc05238fc059e54.png');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

DROP TABLE IF EXISTS `setting`;
CREATE TABLE IF NOT EXISTS `setting` (
  `id_setting` int NOT NULL,
  `judul_setting` varchar(255) NOT NULL,
  `keterangan_setting` varchar(255) NOT NULL,
  `alamat_sekolah` varchar(255) NOT NULL,
  `tlp_sekolah` varchar(255) NOT NULL,
  `website_sekolah` varchar(255) NOT NULL,
  `logo` varchar(200) NOT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `judul_setting`, `keterangan_setting`, `alamat_sekolah`, `tlp_sekolah`, `website_sekolah`, `logo`) VALUES
(1, 'Pelanggaran dan Prestasi', 'Web tentang pelanggaran dan prestasi', 'Jl. A', '09090', 'www.www.www', '1686893566_4f9e127793d748a3e4ae.png');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(255) NOT NULL,
  `id_kelas` int NOT NULL,
  `no_induk` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `id_kelas`, `no_induk`, `jenis_kelamin`, `tgl_lahir`, `alamat`) VALUES
(1, 'Lukas', 1, '12131', 'Laki-Laki', '2015-06-17', 'Kec. Mangunharjo Kota Madiun'),
(2, 'Gatot', 4, '1905101009', 'Laki-Laki', '2023-06-01', 'Ngawi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `jenis_kelamin` int DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT 'default-avatar.jpg',
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `fullname`, `jenis_kelamin`, `alamat`, `foto`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'isyaau@gmail.com', 'Isyaau Akhsanil Khakim', 1, 'Jalan Nongo Karangjati Ngawi', '1685089606_d58746089014b1d12f97.jpg', 'isyaau', '$2y$10$aNuFBFe/qEbds36lgWtsFOTSwoj3IkTr6WujcDLcnF78mlfDVVOBy', NULL, NULL, NULL, NULL, '1', NULL, 1, 0, '2023-05-03 03:40:35', '2023-05-11 06:57:44', NULL),
(13, 'admin@gmail.com', 'Administrator', NULL, NULL, 'default-avatar.jpg', 'admin', '$2y$10$LXB4QRo3pzNUkx.fXzgrSOHc6E9ZKWPLl0mm6Ap8LRr9gCsQGXj56', NULL, NULL, NULL, NULL, '1', NULL, 1, 0, '2023-05-16 06:25:49', '2023-05-16 06:26:00', NULL),
(14, 'fuadiazhar12@gmail.com', 'Mita', 1, 'sdfsd', 'default-avatar.jpg', 'mita', '$2y$10$811QpF.gC/p/YxdlLfts6eECSZky0YW9b2GW58U3C8NbvyCl76B5y', NULL, '2023-05-16 16:38:02', NULL, NULL, '3', NULL, 1, 0, '2023-05-16 16:24:01', '2023-06-22 02:06:25', NULL),
(22, 'alfia@gmail.com', 'alfia', NULL, NULL, 'default-avatar.jpg', 'alfia', '$2y$10$5371XwwyPmboD7d90G/0DuyQGl.plM9.UvZsPDBkXUOWe8KWfhBlO', NULL, NULL, NULL, NULL, '1', NULL, 1, 0, '2023-06-22 02:24:37', '2023-06-22 02:24:51', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
