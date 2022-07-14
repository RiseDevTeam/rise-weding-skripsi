-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2022 pada 19.03
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
(1, '165779157073.jpg', '165779157041.jpg', '165779157098.jpg', '165779157098.jpg', '165779157073.jpg', '165779157089.jpg', '165779157031.jpg', '165779157087.jpg', '165779157010.jpg', '165779157088.jpg', NULL, NULL);

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
(1, '', 'Undangan Pernikahan', 'Yoga', 'Lara', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', '165779157041.jpg', NULL, NULL);

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
(1, '17:38', '2022-07-16', 'WIB', 'Kota Padang', NULL, NULL);

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
(1, '18:38', '2022-07-16', 'WIB', 'Kota Padang', NULL, NULL);

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
(1, '17:38', '2022-07-16', 'WIB', 'Kota Padang', NULL, NULL);

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

--
-- Dumping data untuk tabel `biodata_keluarga_besar_pria`
--

INSERT INTO `biodata_keluarga_besar_pria` (`id_keluarga_besar_pria`, `mengundang_pria`, `nama_keluarga_pria`, `created_at`, `updated_at`) VALUES
(1, 'Keluarga Besar Mempelai Pria', 'Ibu', NULL, NULL);

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

--
-- Dumping data untuk tabel `biodata_keluarga_besar_wanita`
--

INSERT INTO `biodata_keluarga_besar_wanita` (`id_keluarga_besar_wanita`, `mengundang_wanita`, `nama_keluarga_wanita`, `created_at`, `updated_at`) VALUES
(1, 'Keluarga Besar Mempelai Wanita', 'Ayah', NULL, NULL);

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
(1, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n    \r\n ', NULL, NULL);

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
(1, '165779137020.mp3', NULL, NULL);

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
(1, 'Yoga Tri Wahyudi', 'Putra Ketiga Dari', '16577915706.jpg', 'Khairul Nasri', 'Mursyida', NULL, NULL);

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
(1, 'Putri Lara Elitra', 'Putri Pertama Dari', '165779157022.jpg', 'Etra Daswar', 'Irmalinda', NULL, NULL);

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
(1, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 82288219746, NULL, NULL);

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
(1, 1, 'Transfer', '202207143', 199000, '165779180380.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemesanan_invitation`
--

CREATE TABLE `detail_pemesanan_invitation` (
  `id_detail_pemesanan` bigint(20) UNSIGNED NOT NULL,
  `id_pemesanan` bigint(20) NOT NULL,
  `id_template` bigint(20) DEFAULT NULL,
  `id_video` bigint(20) DEFAULT NULL,
  `file_template` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_vidio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_pemesanan_invitation`
--

INSERT INTO `detail_pemesanan_invitation` (`id_detail_pemesanan`, `id_pemesanan`, `id_template`, `id_video`, `file_template`, `file_vidio`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, '165778784367.html', NULL, NULL, NULL),
(2, 1, 3, NULL, '165778790046.html', NULL, NULL, NULL),
(3, 1, 3, NULL, '165778793818.html', NULL, NULL, NULL),
(4, 1, 3, NULL, '165778796527.html', NULL, NULL, NULL),
(5, 1, 3, NULL, '165778805697.html', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_preview_template`
--

CREATE TABLE `detail_preview_template` (
  `id_detail_preview` bigint(20) UNSIGNED NOT NULL,
  `id_preview_template_pemesanan` bigint(20) NOT NULL,
  `id_template` bigint(20) NOT NULL,
  `file_template` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_preview_template`
--

INSERT INTO `detail_preview_template` (`id_detail_preview`, `id_preview_template_pemesanan`, `id_template`, `file_template`) VALUES
(1, 1, 3, '165778784367.html'),
(2, 1, 3, '165778790046.html'),
(3, 1, 3, '165778793818.html'),
(4, 1, 3, '165778796527.html'),
(5, 1, 3, '165778805697.html');

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
(1, 3, 6, '165778784367.html', '165778784384.png', '2022-07-14 01:37:23', '2022-07-14 01:37:23'),
(2, 3, 7, '165778790046.html', '165778790034.png', '2022-07-14 01:38:20', '2022-07-14 01:38:20'),
(3, 3, 8, '165778793818.html', '165778793841.png', '2022-07-14 01:38:58', '2022-07-14 01:38:58'),
(4, 3, 9, '165778796527.html', '165778796571.png', '2022-07-14 01:39:25', '2022-07-14 01:39:25'),
(5, 3, 10, '165778805697.html', '165778805692.png', '2022-07-14 01:40:56', '2022-07-14 01:40:56');

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
(1, 'Basic', 0, '2022-07-14 00:54:12', '2022-07-14 00:54:12'),
(2, 'Premium', 199000, '2022-07-14 01:00:47', '2022-07-14 01:00:47');

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
(30, '2022_07_13_041908_create_mitra_table', 1);

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
(1, 2, '9286493643461', 85272621908, '165778606279.jpg', 'Padang', '2022-07-14 01:07:42', '2022-07-14 01:07:42');

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
(1, 'Sezairi Sezali - It\'s You', '165779137020.mp3', NULL, NULL);

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
(1, 1, 'lunas', '2022-07-14', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_invitation`
--

CREATE TABLE `pemesanan_invitation` (
  `id_pemesanan` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `pemesanan_invitation` (`id_pemesanan`, `id_biodata_pelanggan`, `kategori_template`, `email`, `link_hosting`, `tanggal_pemesanan`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Premium', 'yogawahyudi22@gmail.com', NULL, '2022-07-14', 'selesai', NULL, NULL);

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
  `id_user` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `preview_template_pemesanan`
--

INSERT INTO `preview_template_pemesanan` (`id_preview_template_pemesanan`, `id_user`) VALUES
(1, 3);

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
(1, 1, '<p>Preset/Design standar</p><p>Quotes</p><p>Detail Info Acara</p><p>Profil Pasangan</p><p>Protokol Kesehatan</p><p>Navigasi Lokasi</p><p>Ucapan dan Doa</p><p>Love Stories</p><p>Tampilan Gallery (Max 10)</p>', '2022-07-14 00:55:41', '2022-07-14 00:55:41'),
(2, 2, '<p>Semua yang ada di Paket Free</p><p>Tampilkan Gallery (Max 20)</p><p>Tampilkan tombol Live sreaming</p><p>Share Personal - Nama Tamu (Unlimited)</p><p>Background Music List Custom</p><p>Costum Text</p><p>Tampilkan Rekening Amplop Digital</p><p>Bebas Memilih Tema Premium</p><p>Protokol Kesehatan</p><p>Masa aktif 1 tahun</p>', '2022-07-14 01:01:10', '2022-07-14 01:01:10');

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
(1, 1, '165778539491.png', 'session 1', '2022-07-14 00:56:34', '2022-07-14 00:56:34'),
(2, 1, '165778540923.png', 'session 2', '2022-07-14 00:56:49', '2022-07-14 00:56:49'),
(3, 1, '165778542410.png', 'session 3', '2022-07-14 00:57:04', '2022-07-14 00:57:04'),
(4, 1, '16577854385.png', 'session 4', '2022-07-14 00:57:18', '2022-07-14 00:57:18'),
(5, 1, '165778545359.png', 'session 5', '2022-07-14 00:57:33', '2022-07-14 00:57:33'),
(6, 2, '165778572784.png', 'session 1', '2022-07-14 01:02:07', '2022-07-14 01:02:07'),
(7, 2, '16577857989.png', 'session 2', '2022-07-14 01:03:18', '2022-07-14 01:03:18'),
(8, 2, '165778581235.png', 'session 3', '2022-07-14 01:03:32', '2022-07-14 01:03:32'),
(9, 2, '165778583374.png', 'session 4', '2022-07-14 01:03:53', '2022-07-14 01:03:53'),
(10, 2, '16577858463.png', 'session 5', '2022-07-14 01:04:06', '2022-07-14 01:04:06');

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
(1, 1, 1, 'http://template-basic-1.risedevteam.com/', '165778561868.png', '2022-07-14 01:00:18', '2022-07-14 01:00:18'),
(3, 2, 2, 'http://template-undangan-2.risedevteam.com/', '165778615526.png', '2022-07-14 01:09:15', '2022-07-14 01:09:15');

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
(1, 'Rise Development', 'risedevelopmentteam@gmail.com', NULL, 'admin', NULL, '$2y$10$vhyK0JvK6hLahI/tDhoOQ.jwOIkxrIBP7YWvlZG217xCEiLrq04lW', NULL, NULL, NULL),
(2, 'Putri Lara Elitra', 'elitraputrilara@gmail.com', '16577860621.jpg', 'mitra', NULL, 'eyJpdiI6Ik84dWhoM0NaandVV2Z3TmdpbXZqY0E9PSIsInZhbHVlIjoiRWpvY3FMbGNWVkE4SFhrV2JBQVlKQT09IiwibWFjIjoiNTUzMTg4ZWE1NTY0ZjE2M2E5MmFkOWFhNGE4NDcwYTBjNGUwMzJkNTk2NTkyMzJlNjQyOGIwZGMzMjIzNzczMiIsInRhZyI6IiJ9', NULL, '2022-07-14 01:07:42', '2022-07-14 01:07:42'),
(3, 'Yoga Wahyudi', 'yogawahyudi22@gmail.com', 'https://lh3.googleusercontent.com/a-/AFdZucr75__CcwojqgCAGjsRwAcrkQUrWSqtv0bBlM7c2Q=s96-c', 'pelanggan', NULL, '$2y$10$k0fuqU8TgkjvPtGtcezz.eDAofY9oMuY7BGfVJVcNtO/kqqFNnDVe', NULL, '2022-07-14 01:42:06', '2022-07-14 01:42:06');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT untuk tabel `biodata_galeri_foto`
--
ALTER TABLE `biodata_galeri_foto`
  MODIFY `id_galeri_foto` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `biodata_home_page`
--
ALTER TABLE `biodata_home_page`
  MODIFY `id_biodata_home_page` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `biodata_jadwal_akad`
--
ALTER TABLE `biodata_jadwal_akad`
  MODIFY `id_jadwal_akad` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `biodata_jadwal_resepsi`
--
ALTER TABLE `biodata_jadwal_resepsi`
  MODIFY `id_jadwal_resepsi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `biodata_jadwal_resepsi_2`
--
ALTER TABLE `biodata_jadwal_resepsi_2`
  MODIFY `id_jadwal_resepsi_2` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `biodata_keluarga_besar_pria`
--
ALTER TABLE `biodata_keluarga_besar_pria`
  MODIFY `id_keluarga_besar_pria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `biodata_keluarga_besar_wanita`
--
ALTER TABLE `biodata_keluarga_besar_wanita`
  MODIFY `id_keluarga_besar_wanita` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `biodata_kutipan_ayat`
--
ALTER TABLE `biodata_kutipan_ayat`
  MODIFY `id_kutipan_ayat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `biodata_musik`
--
ALTER TABLE `biodata_musik`
  MODIFY `id_musik` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `biodata_pasangan_pria`
--
ALTER TABLE `biodata_pasangan_pria`
  MODIFY `id_pasangan_pria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `biodata_pasangan_wanita`
--
ALTER TABLE `biodata_pasangan_wanita`
  MODIFY `id_pasangan_wanita` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `biodata_pelanggan`
--
ALTER TABLE `biodata_pelanggan`
  MODIFY `id_biodata_pelanggan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_pembayaran_invitation`
--
ALTER TABLE `detail_pembayaran_invitation`
  MODIFY `id_detail_pembayaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `detail_pemesanan_invitation`
--
ALTER TABLE `detail_pemesanan_invitation`
  MODIFY `id_detail_pemesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `detail_preview_template`
--
ALTER TABLE `detail_preview_template`
  MODIFY `id_detail_preview` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `file_template`
--
ALTER TABLE `file_template`
  MODIFY `id_file_template` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori_template`
--
ALTER TABLE `kategori_template`
  MODIFY `id_kategori_template` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id_mitra` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `musik_template`
--
ALTER TABLE `musik_template`
  MODIFY `id_musik_template` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pembayaran_invitation`
--
ALTER TABLE `pembayaran_invitation`
  MODIFY `id_pembayaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pemesanan_invitation`
--
ALTER TABLE `pemesanan_invitation`
  MODIFY `id_pemesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `preview_template_pemesanan`
--
ALTER TABLE `preview_template_pemesanan`
  MODIFY `id_preview_template_pemesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rincian_kategori_template`
--
ALTER TABLE `rincian_kategori_template`
  MODIFY `id_rincian_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sub_kategori`
--
ALTER TABLE `sub_kategori`
  MODIFY `id_sub_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `template_invitation`
--
ALTER TABLE `template_invitation`
  MODIFY `id_template` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
