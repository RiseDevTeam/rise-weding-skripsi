-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2022 pada 17.34
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wedding_skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank_mitra`
--

CREATE TABLE `bank_mitra` (
  `id_bank` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `nama_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atas_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_rekening` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bank_mitra`
--

INSERT INTO `bank_mitra` (`id_bank`, `id_user`, `nama_bank`, `atas_nama`, `nomor_rekening`, `created_at`, `updated_at`) VALUES
(1, 2, 'Bank BRI', 'Putri Lara Elitra', '2323232433453453', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_galeri_foto`
--

CREATE TABLE `biodata_galeri_foto` (
  `id_galeri_foto` bigint(20) UNSIGNED NOT NULL,
  `galeri_foto1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_galeri_foto`
--

INSERT INTO `biodata_galeri_foto` (`id_galeri_foto`, `galeri_foto1`, `galeri_foto2`, `galeri_foto3`, `galeri_foto4`, `galeri_foto5`, `galeri_foto6`, `galeri_foto7`, `galeri_foto8`, `galeri_foto9`, `galeri_foto10`, `created_at`, `updated_at`) VALUES
(1, '165806561560.jpg', '165806561592.png', '165806561558.jpg', '165806561527.jpg', '165806561578.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '165806589155.png', '165806589118.jpg', '165806589127.png', '165806589181.jpg', '165806589176.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '165807875465.jpg', '165807875426.jpg', '165807875410.jpg', '165807875425.jpg', '165807875421.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '165807907355.jpg', '165807907365.jpg', '165807907398.jpg', '165807907338.jpg', '165807907345.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '165807950462.jpg', '165807950489.jpg', '16580795043.jpg', '165807950431.jpg', '165807950456.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '165807990013.png', '165807990089.png', '165807990016.jpg', '165807990028.jpg', '165807990068.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '165810418457.jpg', '165810418459.jpg', '165810418459.jpg', '165810418495.jpg', '165810418493.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '165810448370.jpg', '16581044834.jpg', '165810448343.jpg', '165810448366.jpg', '16581044835.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '165821722482.png', '165821722460.png', '165821722448.png', '165821722421.png', '165821722485.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_home_page`
--

CREATE TABLE `biodata_home_page` (
  `id_biodata_home_page` bigint(20) UNSIGNED NOT NULL,
  `nama_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_panggilan_pria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_panggilan_wanita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kata_pembuka` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_mempelai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_home_page`
--

INSERT INTO `biodata_home_page` (`id_biodata_home_page`, `nama_link`, `title`, `nama_panggilan_pria`, `nama_panggilan_wanita`, `kata_pembuka`, `foto_mempelai`, `created_at`, `updated_at`) VALUES
(1, '', 'Undangan Pernikahan', 'Andi', 'Ani', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', '165806561527.png', NULL, NULL),
(2, '', 'Undangan Pernikahan', 'Zaki', 'Cahaya', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', '165806589191.png', NULL, NULL),
(3, '', 'Undangan Pernikahan', 'zainul', 'sri', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', '165807875449.png', NULL, NULL),
(4, '', 'Undangan Pernikahan', 'Heru', 'Ilfa', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', '165807907396.jpeg', NULL, NULL),
(5, '', 'Undangan Pernikahan', 'zainul', 'sri', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', '165807950476.png', NULL, NULL),
(6, '', 'Undangan Pernikahan', 'Heru', 'Ilfa', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', '165807990074.png', NULL, NULL),
(7, '', 'Undangan Pernikahan', 'zainul', 'sri', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', '165810418441.jpeg', NULL, NULL),
(8, '', 'Undangan pernikahan', 'Heru', 'Ilfa', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', '165810448337.png', NULL, NULL),
(9, '', 'Undangan Pernikahan', 'Heru', 'Ilfa', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', '16582172246.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_jadwal_akad`
--

CREATE TABLE `biodata_jadwal_akad` (
  `id_jadwal_akad` bigint(20) UNSIGNED NOT NULL,
  `jam_mulai_akad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_akad` date NOT NULL,
  `waktu_wilayah_akad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_akad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_jadwal_akad`
--

INSERT INTO `biodata_jadwal_akad` (`id_jadwal_akad`, `jam_mulai_akad`, `tanggal_akad`, `waktu_wilayah_akad`, `lokasi_akad`, `created_at`, `updated_at`) VALUES
(1, '21:45', '2022-07-20', 'WIB', 'Kota Padang', NULL, NULL),
(2, '21:49', '2022-07-19', 'WIB', 'Kota Padang', NULL, NULL),
(3, '01:24', '2022-07-18', 'WIB', 'Padang', NULL, NULL),
(4, '01:29', '2022-07-19', 'WIB', 'Kota Padang', NULL, NULL),
(5, '01:37', '2022-07-18', 'WIB', 'Kota Padang', NULL, NULL),
(6, '01:43', '2022-07-19', 'WIB', 'Kota Padang', NULL, NULL),
(7, '08:25', '2022-07-18', 'WIB', 'Kota Padang', NULL, NULL),
(8, '08:33', '2022-07-19', 'WIB', 'Kota Padang', NULL, NULL),
(9, '16:52', '2022-07-20', 'WIB', 'Kota Padang', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_jadwal_resepsi`
--

CREATE TABLE `biodata_jadwal_resepsi` (
  `id_jadwal_resepsi` bigint(20) UNSIGNED NOT NULL,
  `jam_mulai_resepsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_resepsi` date NOT NULL,
  `waktu_wilayah_resepsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_resepsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_jadwal_resepsi`
--

INSERT INTO `biodata_jadwal_resepsi` (`id_jadwal_resepsi`, `jam_mulai_resepsi`, `tanggal_resepsi`, `waktu_wilayah_resepsi`, `lokasi_resepsi`, `created_at`, `updated_at`) VALUES
(1, '21:46', '2022-07-20', 'WIB', 'Kota Padang', NULL, NULL),
(2, '21:50', '2022-07-19', 'WIB', 'Kota Padang', NULL, NULL),
(3, '01:25', '2022-07-19', 'WIB', 'Kota Padang', NULL, NULL),
(4, '01:30', '2022-07-20', 'WIB', 'Kota Padang', NULL, NULL),
(5, '01:37', '2022-07-19', 'WIB', 'Kota Padang', NULL, NULL),
(6, '01:44', '2022-07-20', 'WIB', 'Kota Padang', NULL, NULL),
(7, '08:25', '2022-07-19', 'WIB', 'Kota Padang', NULL, NULL),
(8, '08:34', '2022-07-20', 'WIB', 'Kota Padang', NULL, NULL),
(9, '15:52', '2022-07-20', 'WIB', 'Kota Padang', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_jadwal_resepsi_2`
--

CREATE TABLE `biodata_jadwal_resepsi_2` (
  `id_jadwal_resepsi_2` bigint(20) UNSIGNED NOT NULL,
  `jam_mulai_resepsi_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_resepsi_2` date DEFAULT NULL,
  `waktu_wilayah_resepsi_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_resepsi_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_jadwal_resepsi_2`
--

INSERT INTO `biodata_jadwal_resepsi_2` (`id_jadwal_resepsi_2`, `jam_mulai_resepsi_2`, `tanggal_resepsi_2`, `waktu_wilayah_resepsi_2`, `lokasi_resepsi_2`, `created_at`, `updated_at`) VALUES
(1, '20:47', '2022-07-20', 'WIB', 'Kota Padang', NULL, NULL),
(2, '20:52', '2022-07-19', 'WIB', 'Kota Padang', NULL, NULL),
(3, '01:25', '2022-07-19', 'WIB', 'Kota Padang', NULL, NULL),
(4, '02:30', '2022-07-20', 'WIB', 'Kota Padang', NULL, NULL),
(5, '01:37', '2022-07-20', 'WIB', 'Kota Padang', NULL, NULL),
(6, '03:44', '2022-07-20', 'WIB', 'Kota Padang', NULL, NULL),
(7, '08:29', '2022-07-19', 'WIB', 'Kota Padang', NULL, NULL),
(8, '08:34', '2022-07-19', 'WIB', 'Kota Padang', NULL, NULL),
(9, '15:53', '2022-07-20', 'WIB', 'Kota Padang', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_keluarga_besar_pria`
--

CREATE TABLE `biodata_keluarga_besar_pria` (
  `id_keluarga_besar_pria` bigint(20) UNSIGNED NOT NULL,
  `mengundang_pria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_keluarga_pria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_keluarga_besar_wanita`
--

CREATE TABLE `biodata_keluarga_besar_wanita` (
  `id_keluarga_besar_wanita` bigint(20) UNSIGNED NOT NULL,
  `mengundang_wanita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_keluarga_wanita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_kutipan_ayat`
--

CREATE TABLE `biodata_kutipan_ayat` (
  `id_kutipan_ayat` bigint(20) UNSIGNED NOT NULL,
  `kutipan_ayat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_kutipan_ayat`
--

INSERT INTO `biodata_kutipan_ayat` (`id_kutipan_ayat`, `kutipan_ayat`, `created_at`, `updated_at`) VALUES
(1, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n    \r\n ', NULL, NULL),
(2, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n    \r\n ', NULL, NULL),
(3, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n    \r\n ', NULL, NULL),
(4, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n    \r\n ', NULL, NULL),
(5, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n    \r\n ', NULL, NULL),
(6, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n    \r\n ', NULL, NULL),
(7, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n    \r\n ', NULL, NULL),
(8, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n    \r\n ', NULL, NULL),
(9, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n    \r\n ', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_musik`
--

CREATE TABLE `biodata_musik` (
  `id_musik` bigint(20) UNSIGNED NOT NULL,
  `musik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_musik`
--

INSERT INTO `biodata_musik` (`id_musik`, `musik`, `created_at`, `updated_at`) VALUES
(1, '16580656155.mp3', NULL, NULL),
(2, '165806589198.mp3', NULL, NULL),
(3, '165807875494.mp3', NULL, NULL),
(4, '165807907350.mp3', NULL, NULL),
(5, '165807950436.mp3', NULL, NULL),
(6, '16580799007.mp3', NULL, NULL),
(7, '165810418450.mp3', NULL, NULL),
(8, '165810448392.mp3', NULL, NULL),
(9, '16582172245.mp3', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_pasangan_pria`
--

CREATE TABLE `biodata_pasangan_pria` (
  `id_pasangan_pria` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `putra_dari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_mempelai_pria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bapak_pria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu_pria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_pasangan_pria`
--

INSERT INTO `biodata_pasangan_pria` (`id_pasangan_pria`, `nama_lengkap`, `putra_dari`, `gambar_mempelai_pria`, `nama_bapak_pria`, `nama_ibu_pria`, `created_at`, `updated_at`) VALUES
(1, 'Andi Sofian', 'Putra Ketiga Dari', '165806561596.jpg', 'Khairul Nasri', 'Mursyida', NULL, NULL),
(2, 'Zakianto', 'Putra Ketiga Dari', '165806589190.jpg', 'Khairul Nasri', 'Mursyida', NULL, NULL),
(3, 'Zainul Abidin', 'Putra Ketiga Dari', '165807875422.jpg', 'Khairul Nasri', 'Mursyida', NULL, NULL),
(4, 'Heru Syahputra', 'Putra Ketiga Dari', '165807907314.png', 'Khairul Nasri', 'Mursyida', NULL, NULL),
(5, 'Yoga Tri Wahyudi', 'Putra Ketiga Dari', '16580795041.jpg', 'Khairul Nasri', 'Mursyida', NULL, NULL),
(6, 'Heru Syahputra', 'Putra Ketiga Dari', '165807990093.jpg', 'Khairul Nasri', 'Mursyida', NULL, NULL),
(7, 'Zainul Abidin', 'Putra Ketiga Dari', '165810418414.png', 'Khairul Nasri', 'Mursyida', NULL, NULL),
(8, 'Heru Syahputra', 'Putra Ketiga Dari', '165810448338.png', 'Khairul Nasri', 'Mursyida', NULL, NULL),
(9, 'Heru Syaputra', 'Anak Ketiga', '16582172245.png', 'Khairul Nasri', 'Mursyida', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_pasangan_wanita`
--

CREATE TABLE `biodata_pasangan_wanita` (
  `id_pasangan_wanita` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `putri_dari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_mempelai_wanita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bapak_wanita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu_wanita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_pasangan_wanita`
--

INSERT INTO `biodata_pasangan_wanita` (`id_pasangan_wanita`, `nama_lengkap`, `putri_dari`, `gambar_mempelai_wanita`, `nama_bapak_wanita`, `nama_ibu_wanita`, `created_at`, `updated_at`) VALUES
(1, 'Ani Julia', 'Putri Pertama Dari', '165806561535.png', 'Etra Daswar', 'Irmalinda', NULL, NULL),
(2, 'Cahaya Murni', 'Putri Pertama Dari', '165806589185.jpg', 'Etra Daswar', 'Irmalinda', NULL, NULL),
(3, 'Sri Ratu Ningsih', 'Putri Pertama Dari', '165807875437.jpg', 'Etra Daswar', 'Irmalinda', NULL, NULL),
(4, 'Ilfa Stevani', 'Putri Pertama Dari', '165807907379.png', 'Etra Daswar', 'Irmalinda', NULL, NULL),
(5, 'Putri Lara Elitra', 'Putri Pertama Dari', '165807950497.jpg', 'Etra Daswar', 'Irmalinda', NULL, NULL),
(6, 'Ilfa Stevani', 'Putri Pertama Dari', '165807990077.jpg', 'Etra Daswar', 'Irmalinda', NULL, NULL),
(7, 'Sri Ratu Ningsih', 'Putri Pertama Dari', '165810418439.png', 'Etra Daswar', 'Irmalinda', NULL, NULL),
(8, 'Ilfa Stevani', 'Putri Pertama Dari', '165810448337.png', 'Etra Daswar', 'Irmalinda', NULL, NULL),
(9, 'Ilfa Stevani', 'Anak Pertama', '165821722464.png', 'Etra Daswar', 'Irmalinda', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_pelanggan`
--

CREATE TABLE `biodata_pelanggan` (
  `id_biodata_pelanggan` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `id_biodata_home_page` bigint(20) NOT NULL,
  `id_kutipan_ayat` bigint(20) NOT NULL,
  `id_pasangan_pria` bigint(20) NOT NULL,
  `id_pasangan_wanita` bigint(20) NOT NULL,
  `id_galeri_foto` bigint(20) NOT NULL,
  `id_jadwal_akad` bigint(20) DEFAULT NULL,
  `id_jadwal_resepsi` bigint(20) DEFAULT NULL,
  `id_jadwal_resepsi_2` bigint(20) DEFAULT NULL,
  `id_keluarga_besar_pria` bigint(20) DEFAULT NULL,
  `id_keluarga_besar_wanita` bigint(20) DEFAULT NULL,
  `id_musik` bigint(20) DEFAULT NULL,
  `nomor_telepon` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_pelanggan`
--

INSERT INTO `biodata_pelanggan` (`id_biodata_pelanggan`, `id_user`, `id_biodata_home_page`, `id_kutipan_ayat`, `id_pasangan_pria`, `id_pasangan_wanita`, `id_galeri_foto`, `id_jadwal_akad`, `id_jadwal_resepsi`, `id_jadwal_resepsi_2`, `id_keluarga_besar_pria`, `id_keluarga_besar_wanita`, `id_musik`, `nomor_telepon`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, 1, 81237645667, NULL, NULL),
(2, 4, 2, 2, 2, 2, 2, 2, 2, 2, NULL, NULL, 2, 85276546367, NULL, NULL),
(3, 4, 3, 3, 3, 3, 3, 3, 3, 3, NULL, NULL, 3, 82288219746, NULL, NULL),
(4, 4, 4, 4, 4, 4, 4, 4, 4, 4, NULL, NULL, 4, 85272621908, NULL, NULL),
(5, 4, 5, 5, 5, 5, 5, 5, 5, 5, NULL, NULL, 5, 82288219746, NULL, NULL),
(6, 4, 6, 6, 6, 6, 6, 6, 6, 6, NULL, NULL, 6, 8123456789, NULL, NULL),
(7, 4, 7, 7, 7, 7, 7, 7, 7, 7, NULL, NULL, 7, 8123456789, NULL, NULL),
(8, 4, 8, 8, 8, 8, 8, 8, 8, 8, NULL, NULL, 8, 82288219746, NULL, NULL),
(9, 4, 9, 9, 9, 9, 9, 9, 9, 9, NULL, NULL, 9, 8123456789, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_blog` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cash_out`
--

CREATE TABLE `cash_out` (
  `id_cash_out` bigint(20) UNSIGNED NOT NULL,
  `id_pembayaran` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `tanggal_cashout` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_cashout` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cash_out`
--

INSERT INTO `cash_out` (`id_cash_out`, `id_pembayaran`, `id_user`, `total`, `tanggal_cashout`, `status`, `bukti_cashout`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 17000, '2022-07-18', 'konfirmasi', '1658119517.jpg', '2022-07-18 04:44:34', '2022-07-18 04:44:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cash_out_sementara`
--

CREATE TABLE `cash_out_sementara` (
  `id_cash_out_sementara` bigint(20) UNSIGNED NOT NULL,
  `id_pembayaran` bigint(20) NOT NULL,
  `id_pemesanan` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cash_out_sementara`
--

INSERT INTO `cash_out_sementara` (`id_cash_out_sementara`, `id_pembayaran`, `id_pemesanan`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 20000, NULL, NULL),
(2, 2, 2, 20000, NULL, NULL),
(3, 1, 1, 20000, NULL, NULL),
(4, 2, 2, 20000, NULL, NULL),
(5, 1, 1, 20000, NULL, NULL),
(6, 2, 2, 20000, NULL, NULL),
(7, 1, 1, 20000, NULL, NULL),
(8, 2, 2, 20000, NULL, NULL),
(9, 3, 3, 20000, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pembayaran_invitation`
--

CREATE TABLE `detail_pembayaran_invitation` (
  `id_detail_pembayaran` bigint(20) UNSIGNED NOT NULL,
  `id_pembayaran` bigint(20) NOT NULL,
  `tipe_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` bigint(20) NOT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_pembayaran_invitation`
--

INSERT INTO `detail_pembayaran_invitation` (`id_detail_pembayaran`, `id_pembayaran`, `tipe_pembayaran`, `kode_transaksi`, `total`, `bukti_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 1, 'Transfer', '202207184', 20000, '165810426683.jpg', NULL, NULL),
(2, 2, 'Transfer', '202207184', 20000, '165810459570.jpg', NULL, NULL),
(3, 3, 'Transfer', '202207194', 20000, '165821729994.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemesanan_invitation`
--

CREATE TABLE `detail_pemesanan_invitation` (
  `id_detail_pemesanan` bigint(20) UNSIGNED NOT NULL,
  `id_pemesanan` bigint(20) NOT NULL,
  `id_video` bigint(20) DEFAULT NULL,
  `file_template` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_vidio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_pemesanan_invitation`
--

INSERT INTO `detail_pemesanan_invitation` (`id_detail_pemesanan`, `id_pemesanan`, `id_video`, `file_template`, `file_vidio`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '165806459729.html', NULL, NULL, NULL),
(2, 1, NULL, '165806462989.html', NULL, NULL, NULL),
(3, 1, NULL, '165806466982.html', NULL, NULL, NULL),
(4, 1, NULL, '165806471723.html', NULL, NULL, NULL),
(5, 1, NULL, '165806475040.html', NULL, NULL, NULL),
(6, 1, NULL, '165806477741.html', NULL, NULL, NULL),
(7, 1, NULL, '165806488383.html', NULL, NULL, NULL),
(8, 1, NULL, '165806491378.html', NULL, NULL, NULL),
(9, 2, NULL, '165806507713.html', NULL, NULL, NULL),
(10, 2, NULL, '165806510241.html', NULL, NULL, NULL),
(11, 2, NULL, '165806512710.html', NULL, NULL, NULL),
(12, 2, NULL, '165806522848.html', NULL, NULL, NULL),
(13, 2, NULL, '165806525337.html', NULL, NULL, NULL),
(14, 2, NULL, '165806528166.html', NULL, NULL, NULL),
(15, 2, NULL, '165806530519.html', NULL, NULL, NULL),
(16, 2, NULL, '16580653339.html', NULL, NULL, NULL),
(17, 3, NULL, '165806507713.html', NULL, NULL, NULL),
(18, 3, NULL, '165806510241.html', NULL, NULL, NULL),
(19, 3, NULL, '165806512710.html', NULL, NULL, NULL),
(20, 3, NULL, '165806522848.html', NULL, NULL, NULL),
(21, 3, NULL, '165806525337.html', NULL, NULL, NULL),
(22, 3, NULL, '165806528166.html', NULL, NULL, NULL),
(23, 3, NULL, '165806530519.html', NULL, NULL, NULL),
(24, 3, NULL, '16580653339.html', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_preview_template`
--

CREATE TABLE `detail_preview_template` (
  `id_detail_preview` bigint(20) UNSIGNED NOT NULL,
  `id_preview_template_pemesanan` bigint(20) NOT NULL,
  `file_template` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `file_template`
--

CREATE TABLE `file_template` (
  `id_file_template` bigint(20) UNSIGNED NOT NULL,
  `id_template` bigint(20) NOT NULL,
  `id_sub_kategori` bigint(20) NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_template` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `file_template`
--

INSERT INTO `file_template` (`id_file_template`, `id_template`, `id_sub_kategori`, `file`, `gambar_template`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '165806459729.html', '165806459799.png', '2022-07-17 06:29:57', '2022-07-17 06:29:57'),
(2, 2, 2, '165806462989.html', '165806462924.png', '2022-07-17 06:30:29', '2022-07-17 06:30:29'),
(3, 2, 3, '165806466982.html', '165806466945.png', '2022-07-17 06:31:09', '2022-07-17 06:31:09'),
(4, 2, 4, '165806471723.html', '165806471788.png', '2022-07-17 06:31:57', '2022-07-17 06:31:57'),
(5, 2, 5, '165806475040.html', '165806475036.png', '2022-07-17 06:32:30', '2022-07-17 06:32:30'),
(6, 2, 6, '165806477741.html', '165806477744.png', '2022-07-17 06:32:57', '2022-07-17 06:32:57'),
(7, 2, 7, '165806488383.html', '165806488328.png', '2022-07-17 06:34:43', '2022-07-17 06:34:43'),
(8, 2, 8, '165806491378.html', '165806491391.png', '2022-07-17 06:35:13', '2022-07-17 06:35:13'),
(9, 3, 1, '165806507713.html', '165806507732.png', '2022-07-17 06:37:57', '2022-07-17 06:37:57'),
(10, 3, 2, '165806510241.html', '16580651023.png', '2022-07-17 06:38:22', '2022-07-17 06:38:22'),
(11, 3, 3, '165806512710.html', '165806512757.png', '2022-07-17 06:38:47', '2022-07-17 06:38:47'),
(12, 3, 4, '165806522848.html', '165806522843.png', '2022-07-17 06:40:28', '2022-07-17 06:40:28'),
(13, 3, 5, '165806525337.html', '165806525374.png', '2022-07-17 06:40:53', '2022-07-17 06:40:53'),
(14, 3, 6, '165806528166.html', '165806528180.png', '2022-07-17 06:41:21', '2022-07-17 06:41:21'),
(15, 3, 7, '165806530519.html', '165806530525.png', '2022-07-17 06:41:45', '2022-07-17 06:41:45'),
(16, 3, 8, '16580653339.html', '165806533388.png', '2022-07-17 06:42:13', '2022-07-17 06:42:13'),
(17, 4, 1, '165821804515.html', '165821804595.png', '2022-07-19 01:07:25', '2022-07-19 01:07:25'),
(18, 4, 2, '165821812675.html', '165821812637.png', '2022-07-19 01:08:46', '2022-07-19 01:08:46'),
(19, 4, 3, '165821816681.html', '165821816668.png', '2022-07-19 01:09:26', '2022-07-19 01:09:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_template`
--

CREATE TABLE `kategori_template` (
  `id_kategori_template` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_template`
--

INSERT INTO `kategori_template` (`id_kategori_template`, `kategori`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Basic', 20000, '2022-07-17 06:07:10', '2022-07-17 06:07:10'),
(2, 'Premium', 50000, '2022-07-17 06:07:22', '2022-07-17 06:07:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_20_153627_create_kategori_template_table', 1),
(6, '2022_03_20_153807_create_rincian_kategori_template_table', 1),
(7, '2022_03_20_154001_create_sub_kategori_table', 1),
(8, '2022_03_24_080945_create_template_invitation_table', 1),
(9, '2022_04_03_152420_create_file_template_table', 1),
(10, '2022_04_14_042148_create_blog_table', 1),
(11, '2022_04_30_165420_create_preview_template_pemesanan_table', 1),
(12, '2022_06_01_181946_create_biodata_home_page_table', 1),
(13, '2022_06_01_182347_create_biodata_kutipan_ayat_table', 1),
(14, '2022_06_01_182446_create_biodata_pasangan_pria_table', 1),
(15, '2022_06_01_182623_create_biodata_pasangan_wanita_table', 1),
(16, '2022_06_01_183012_create_biodata_galeri_foto_table', 1),
(17, '2022_06_01_183100_create_biodata_jadwal_akad_table', 1),
(18, '2022_06_01_183306_create_biodata_jadwal_resepsi_table', 1),
(19, '2022_06_01_183342_create_biodata_jadwal_resepsi_2_table', 1),
(20, '2022_06_01_183456_create_biodata_keluarga_besar_pria_table', 1),
(21, '2022_06_01_183544_create_biodata_keluarga_besar_wanita_table', 1),
(22, '2022_06_01_183650_create_biodata_musik_table', 1),
(23, '2022_06_01_183734_create_biodata_pelanggan_table', 1),
(24, '2022_06_06_073432_create_musik_template_table', 1),
(25, '2022_06_08_043758_create_detail_preview_template_table', 1),
(26, '2022_06_20_062459_create_pemesanan_invitation_table', 1),
(27, '2022_06_20_062626_create_detail_pemesanan_invitation_table', 1),
(28, '2022_06_22_152938_create_pembayaran_invitation_table', 1),
(29, '2022_06_22_153254_create_detail_pembayaran_invitation_table', 1),
(30, '2022_07_13_041908_create_mitra_table', 1),
(31, '2022_07_15_071414_create_cash_out_table', 1),
(32, '2022_07_15_071635_create_bank_mitra_table', 1),
(33, '2022_07_17_071244_create_cash_out_sementara_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `id_mitra` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `nomor_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telepon` bigint(20) NOT NULL,
  `foto_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`id_mitra`, `id_user`, `nomor_ktp`, `nomor_telepon`, `foto_ktp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 2, '9286493643461', 85272621908, '165806448168.jpg', 'Padang', '2022-07-17 06:28:01', '2022-07-17 06:28:01'),
(2, 3, '9286493643461', 8128343653, '165806498469.jpg', 'Padang', '2022-07-17 06:36:24', '2022-07-17 06:36:24'),
(3, 5, '861491364913', 131398619, '16582178754.png', 'Padang', '2022-07-19 01:04:35', '2022-07-19 01:04:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `musik_template`
--

CREATE TABLE `musik_template` (
  `id_musik_template` bigint(20) UNSIGNED NOT NULL,
  `judul_musik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `musik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `musik_template`
--

INSERT INTO `musik_template` (`id_musik_template`, `judul_musik`, `musik`, `created_at`, `updated_at`) VALUES
(1, 'Sezairi Sezali - It\'s You', '16580641559.mp3', NULL, NULL),
(2, 'Rey Mbayang \"Di Sepertiga Malam\"', '165806416864.mp3', NULL, NULL),
(3, 'Lets Get Merried', '165806420177.mp3', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_invitation`
--

CREATE TABLE `pembayaran_invitation` (
  `id_pembayaran` bigint(20) UNSIGNED NOT NULL,
  `id_pemesanan` bigint(20) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `tanggal_pembayaran` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembayaran_invitation`
--

INSERT INTO `pembayaran_invitation` (`id_pembayaran`, `id_pemesanan`, `status`, `tanggal_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 1, 'lunas', '2022-07-18', NULL, NULL),
(2, 2, 'lunas', '2022-07-18', NULL, NULL),
(3, 3, 'pending', '2022-07-19', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_invitation`
--

CREATE TABLE `pemesanan_invitation` (
  `id_pemesanan` bigint(20) UNSIGNED NOT NULL,
  `id_template` bigint(20) NOT NULL,
  `id_biodata_pelanggan` bigint(20) NOT NULL,
  `kategori_template` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_hosting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemesanan_invitation`
--

INSERT INTO `pemesanan_invitation` (`id_pemesanan`, `id_template`, `id_biodata_pelanggan`, `kategori_template`, `email`, `link_hosting`, `tanggal_pemesanan`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 7, 'Basic', 'yogawahyudi22@gmail.com', NULL, '2022-07-18', 'selesai', NULL, NULL),
(2, 3, 8, 'Basic', 'yogawahyudi22@gmail.com', NULL, '2022-07-18', 'selesai', NULL, NULL),
(3, 3, 9, 'Basic', 'yogawahyudi22@gmail.com', NULL, '2022-07-19', 'sudah bayar', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `preview_template_pemesanan`
--

CREATE TABLE `preview_template_pemesanan` (
  `id_preview_template_pemesanan` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `id_template` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rincian_kategori_template`
--

CREATE TABLE `rincian_kategori_template` (
  `id_rincian_kategori` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) NOT NULL,
  `rincian_kategori_template` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rincian_kategori_template`
--

INSERT INTO `rincian_kategori_template` (`id_rincian_kategori`, `id_kategori`, `rincian_kategori_template`, `created_at`, `updated_at`) VALUES
(1, 1, '<p>Preset/Design standar</p><p>Quotes</p><p>Detail Info Acara</p><p>Profil Pasangan</p><p>Protokol Kesehatan</p><p>Navigasi Lokasi</p><p>Ucapan dan Doa</p><p>Love Stories</p><p>Tampilan Gallery (Max 10)</p>', '2022-07-17 06:09:14', '2022-07-17 06:09:14'),
(2, 2, '<p>Semua yang ada di Paket Free</p><p>Tampilkan Gallery (Max 20)</p><p>Tampilkan tombol Live sreaming</p><p>Share Personal - Nama Tamu (Unlimited)</p><p>Background Music List Custom</p><p>Costum Text</p><p>Tampilkan Rekening Amplop Digital</p><p>Bebas Memilih Tema Premium</p><p>Protokol Kesehatan</p><p>Masa aktif 1 tahun</p>', '2022-07-17 06:09:54', '2022-07-17 06:09:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kategori`
--

CREATE TABLE `sub_kategori` (
  `id_sub_kategori` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sub_kategori`
--

INSERT INTO `sub_kategori` (`id_sub_kategori`, `id_kategori`, `icon`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, '16580636266.png', 'section 1', '2022-07-17 06:13:46', '2022-07-17 06:13:46'),
(2, 1, '165806364644.png', 'section 2', '2022-07-17 06:14:06', '2022-07-17 06:14:06'),
(3, 1, '165806366480.png', 'section 3', '2022-07-17 06:14:24', '2022-07-17 06:14:24'),
(4, 1, '165806367838.png', 'section 4', '2022-07-17 06:14:38', '2022-07-17 06:15:01'),
(5, 1, '165806372111.png', 'section 5', '2022-07-17 06:15:21', '2022-07-17 06:15:21'),
(6, 1, '165806373837.png', 'section 6', '2022-07-17 06:15:38', '2022-07-17 06:15:38'),
(7, 1, '165806382194.png', 'section 7', '2022-07-17 06:17:01', '2022-07-17 06:17:01'),
(8, 1, '165806384144.png', 'section 8', '2022-07-17 06:17:21', '2022-07-17 06:17:21'),
(9, 2, '165806388637.png', 'section 1', '2022-07-17 06:18:06', '2022-07-17 06:18:06'),
(10, 2, '165806392070.png', 'section 2', '2022-07-17 06:18:40', '2022-07-17 06:18:40'),
(11, 2, '165806393550.png', 'section 3', '2022-07-17 06:18:55', '2022-07-17 06:18:55'),
(12, 2, '165806399680.png', 'section 4', '2022-07-17 06:19:56', '2022-07-17 06:19:56'),
(13, 2, '165806402675.png', 'section 5', '2022-07-17 06:20:26', '2022-07-17 06:20:26'),
(14, 2, '165806404148.png', 'section 6', '2022-07-17 06:20:41', '2022-07-17 06:20:41'),
(15, 2, '165806405556.png', 'section 7', '2022-07-17 06:20:55', '2022-07-17 06:20:55'),
(16, 2, '165806408550.png', 'section 8', '2022-07-17 06:21:25', '2022-07-17 06:21:25'),
(17, 2, '165806410014.png', 'section 9', '2022-07-17 06:21:40', '2022-07-17 06:21:40'),
(18, 2, '165806411634.png', 'section 10', '2022-07-17 06:21:56', '2022-07-17 06:21:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `template_invitation`
--

CREATE TABLE `template_invitation` (
  `id_template` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `link_hosting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `template_invitation`
--

INSERT INTO `template_invitation` (`id_template`, `id_kategori`, `id_user`, `link_hosting`, `gambar_cover`, `created_at`, `updated_at`) VALUES
(2, 1, 2, 'template-basic-1.risedevteam.com', '165806454750.png', '2022-07-17 06:29:07', '2022-07-17 06:29:07'),
(3, 1, 3, 'template-basic-2.risedevteam.com', '165806503767.png', '2022-07-17 06:37:17', '2022-07-17 06:37:17'),
(4, 1, 5, 'http://template-undangan-4.risedevteam.com/', '165821797579.png', '2022-07-19 01:06:15', '2022-07-19 01:06:15'),
(5, 1, 1, 'http://template-undangan-4.risedevteam.com/', '165839735847.png', '2022-07-21 02:55:58', '2022-07-21 02:55:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `foto`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rise Development', 'risedevelopmentteam@gmail.com', NULL, 'admin', NULL, '$2y$10$1WyvpZtbBSJCoRCUMFOT/OpTzjOoZnjVZoSsTS26YC/cYQRbGU0cW', NULL, NULL, NULL),
(2, 'Putri Lara Elitra', 'elitraputrilara@gmail.com', '165806448194.jpg', 'mitra', NULL, 'eyJpdiI6ImN0WTVUbHlkRk9tTGpzZGJRR2VIUFE9PSIsInZhbHVlIjoic3ZQbUxpQ3drcTJzNS82MEFlK3ZFQT09IiwibWFjIjoiYjJhNmM3NzVhNzllNmVkYTlmOWNmYzM0MDBmMjMwNjM4NTlmOGY5YzIyZmQ4MDZkNDcyMzhiYzdkNTliZWFmNSIsInRhZyI6IiJ9', NULL, '2022-07-17 06:28:01', '2022-07-17 06:28:01'),
(3, 'Andini Safir', 'andini@gmail.com', '165806498423.jpg', 'mitra', NULL, 'eyJpdiI6ImtXclRSaWRaREE3ZkFKRWhmWUpZdEE9PSIsInZhbHVlIjoiYit0cFduV0VGQm91Vm0rOGpaazRYdz09IiwibWFjIjoiODJmNDAxMTM3MmE0NzljOGFiZGIyNzI1MTJkOGViNWVmNTQ0OGM4NDA5NDZjZTI2NGIyYjBlZWYyMjA0ZmI5NSIsInRhZyI6IiJ9', NULL, '2022-07-17 06:36:24', '2022-07-17 06:36:24'),
(4, 'Yoga Wahyudi', 'yogawahyudi22@gmail.com', 'https://lh3.googleusercontent.com/a-/AFdZucr75__CcwojqgCAGjsRwAcrkQUrWSqtv0bBlM7c2Q=s96-c', 'pelanggan', NULL, '$2y$10$4CR5WfbkMTXe5qCavqzSMuhHO9JuCbeUFlnQ8CAgYyJHPvEsNTRUi', NULL, '2022-07-17 06:43:10', '2022-07-17 06:43:10'),
(5, 'Ago wirabakti', 'ago@gmail.com', '165821787563.png', 'mitra', NULL, 'eyJpdiI6ImMzREpZSXNjNWRHQXZGWnZ3ckEzL2c9PSIsInZhbHVlIjoiaXhBanBTbXl2dlJoRC9FeFNsdHJIZz09IiwibWFjIjoiOTk1NDQ2YWIxMTU0MjNiYTliZDE5OTNiNmMxNjhhNWIwMmEzNmE3ODlkMGU1NjkyYTA5MjIwN2YwMzQzNTI3ZSIsInRhZyI6IiJ9', NULL, '2022-07-19 01:04:35', '2022-07-19 01:04:35');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bank_mitra`
--
ALTER TABLE `bank_mitra`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indeks untuk tabel `biodata_galeri_foto`
--
ALTER TABLE `biodata_galeri_foto`
  ADD PRIMARY KEY (`id_galeri_foto`);

--
-- Indeks untuk tabel `biodata_home_page`
--
ALTER TABLE `biodata_home_page`
  ADD PRIMARY KEY (`id_biodata_home_page`);

--
-- Indeks untuk tabel `biodata_jadwal_akad`
--
ALTER TABLE `biodata_jadwal_akad`
  ADD PRIMARY KEY (`id_jadwal_akad`);

--
-- Indeks untuk tabel `biodata_jadwal_resepsi`
--
ALTER TABLE `biodata_jadwal_resepsi`
  ADD PRIMARY KEY (`id_jadwal_resepsi`);

--
-- Indeks untuk tabel `biodata_jadwal_resepsi_2`
--
ALTER TABLE `biodata_jadwal_resepsi_2`
  ADD PRIMARY KEY (`id_jadwal_resepsi_2`);

--
-- Indeks untuk tabel `biodata_keluarga_besar_pria`
--
ALTER TABLE `biodata_keluarga_besar_pria`
  ADD PRIMARY KEY (`id_keluarga_besar_pria`);

--
-- Indeks untuk tabel `biodata_keluarga_besar_wanita`
--
ALTER TABLE `biodata_keluarga_besar_wanita`
  ADD PRIMARY KEY (`id_keluarga_besar_wanita`);

--
-- Indeks untuk tabel `biodata_kutipan_ayat`
--
ALTER TABLE `biodata_kutipan_ayat`
  ADD PRIMARY KEY (`id_kutipan_ayat`);

--
-- Indeks untuk tabel `biodata_musik`
--
ALTER TABLE `biodata_musik`
  ADD PRIMARY KEY (`id_musik`);

--
-- Indeks untuk tabel `biodata_pasangan_pria`
--
ALTER TABLE `biodata_pasangan_pria`
  ADD PRIMARY KEY (`id_pasangan_pria`);

--
-- Indeks untuk tabel `biodata_pasangan_wanita`
--
ALTER TABLE `biodata_pasangan_wanita`
  ADD PRIMARY KEY (`id_pasangan_wanita`);

--
-- Indeks untuk tabel `biodata_pelanggan`
--
ALTER TABLE `biodata_pelanggan`
  ADD PRIMARY KEY (`id_biodata_pelanggan`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indeks untuk tabel `cash_out`
--
ALTER TABLE `cash_out`
  ADD PRIMARY KEY (`id_cash_out`);

--
-- Indeks untuk tabel `cash_out_sementara`
--
ALTER TABLE `cash_out_sementara`
  ADD PRIMARY KEY (`id_cash_out_sementara`);

--
-- Indeks untuk tabel `detail_pembayaran_invitation`
--
ALTER TABLE `detail_pembayaran_invitation`
  ADD PRIMARY KEY (`id_detail_pembayaran`);

--
-- Indeks untuk tabel `detail_pemesanan_invitation`
--
ALTER TABLE `detail_pemesanan_invitation`
  ADD PRIMARY KEY (`id_detail_pemesanan`);

--
-- Indeks untuk tabel `detail_preview_template`
--
ALTER TABLE `detail_preview_template`
  ADD PRIMARY KEY (`id_detail_preview`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `file_template`
--
ALTER TABLE `file_template`
  ADD PRIMARY KEY (`id_file_template`);

--
-- Indeks untuk tabel `kategori_template`
--
ALTER TABLE `kategori_template`
  ADD PRIMARY KEY (`id_kategori_template`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id_mitra`);

--
-- Indeks untuk tabel `musik_template`
--
ALTER TABLE `musik_template`
  ADD PRIMARY KEY (`id_musik_template`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembayaran_invitation`
--
ALTER TABLE `pembayaran_invitation`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pemesanan_invitation`
--
ALTER TABLE `pemesanan_invitation`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `preview_template_pemesanan`
--
ALTER TABLE `preview_template_pemesanan`
  ADD PRIMARY KEY (`id_preview_template_pemesanan`);

--
-- Indeks untuk tabel `rincian_kategori_template`
--
ALTER TABLE `rincian_kategori_template`
  ADD PRIMARY KEY (`id_rincian_kategori`);

--
-- Indeks untuk tabel `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD PRIMARY KEY (`id_sub_kategori`);

--
-- Indeks untuk tabel `template_invitation`
--
ALTER TABLE `template_invitation`
  ADD PRIMARY KEY (`id_template`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bank_mitra`
--
ALTER TABLE `bank_mitra`
  MODIFY `id_bank` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `biodata_galeri_foto`
--
ALTER TABLE `biodata_galeri_foto`
  MODIFY `id_galeri_foto` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `biodata_home_page`
--
ALTER TABLE `biodata_home_page`
  MODIFY `id_biodata_home_page` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `biodata_jadwal_akad`
--
ALTER TABLE `biodata_jadwal_akad`
  MODIFY `id_jadwal_akad` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `biodata_jadwal_resepsi`
--
ALTER TABLE `biodata_jadwal_resepsi`
  MODIFY `id_jadwal_resepsi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `biodata_jadwal_resepsi_2`
--
ALTER TABLE `biodata_jadwal_resepsi_2`
  MODIFY `id_jadwal_resepsi_2` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `biodata_keluarga_besar_pria`
--
ALTER TABLE `biodata_keluarga_besar_pria`
  MODIFY `id_keluarga_besar_pria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `biodata_keluarga_besar_wanita`
--
ALTER TABLE `biodata_keluarga_besar_wanita`
  MODIFY `id_keluarga_besar_wanita` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `biodata_kutipan_ayat`
--
ALTER TABLE `biodata_kutipan_ayat`
  MODIFY `id_kutipan_ayat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `biodata_musik`
--
ALTER TABLE `biodata_musik`
  MODIFY `id_musik` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `biodata_pasangan_pria`
--
ALTER TABLE `biodata_pasangan_pria`
  MODIFY `id_pasangan_pria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `biodata_pasangan_wanita`
--
ALTER TABLE `biodata_pasangan_wanita`
  MODIFY `id_pasangan_wanita` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `biodata_pelanggan`
--
ALTER TABLE `biodata_pelanggan`
  MODIFY `id_biodata_pelanggan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `cash_out`
--
ALTER TABLE `cash_out`
  MODIFY `id_cash_out` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `cash_out_sementara`
--
ALTER TABLE `cash_out_sementara`
  MODIFY `id_cash_out_sementara` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `detail_pembayaran_invitation`
--
ALTER TABLE `detail_pembayaran_invitation`
  MODIFY `id_detail_pembayaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `detail_pemesanan_invitation`
--
ALTER TABLE `detail_pemesanan_invitation`
  MODIFY `id_detail_pemesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `detail_preview_template`
--
ALTER TABLE `detail_preview_template`
  MODIFY `id_detail_preview` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `file_template`
--
ALTER TABLE `file_template`
  MODIFY `id_file_template` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `kategori_template`
--
ALTER TABLE `kategori_template`
  MODIFY `id_kategori_template` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id_mitra` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `musik_template`
--
ALTER TABLE `musik_template`
  MODIFY `id_musik_template` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembayaran_invitation`
--
ALTER TABLE `pembayaran_invitation`
  MODIFY `id_pembayaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pemesanan_invitation`
--
ALTER TABLE `pemesanan_invitation`
  MODIFY `id_pemesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `preview_template_pemesanan`
--
ALTER TABLE `preview_template_pemesanan`
  MODIFY `id_preview_template_pemesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rincian_kategori_template`
--
ALTER TABLE `rincian_kategori_template`
  MODIFY `id_rincian_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sub_kategori`
--
ALTER TABLE `sub_kategori`
  MODIFY `id_sub_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `template_invitation`
--
ALTER TABLE `template_invitation`
  MODIFY `id_template` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
