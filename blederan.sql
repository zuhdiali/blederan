-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 15, 2024 at 02:43 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blederan`
--

-- --------------------------------------------------------

--
-- Table structure for table `akomodasis`
--

CREATE TABLE `akomodasis` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_akomodasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint NOT NULL,
  `stok` int NOT NULL,
  `gambar_akomodasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_pemilik` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kontak_pemilik` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akomodasis`
--

INSERT INTO `akomodasis` (`id`, `nama_akomodasi`, `harga`, `stok`, `gambar_akomodasi`, `nama_pemilik`, `kontak_pemilik`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Penginapan Mas Hisyam', 200000, 50, '1728530242.jpg', 'Zuhdi Ali Hisyam', '082328839199', 'Penginapan Mantab', '2024-10-09 20:11:04', '2024-10-09 23:29:49'),
(2, 'Penginapan Mas Zuhdi', 200000, 50, '1728541892.jpg', 'Zuhdi Ali Hisyam', '082328839199', 'Penginapan Mantab', '2024-10-09 20:11:04', '2024-10-09 23:31:32'),
(3, 'Penginapan Mas Ali', 200000, 50, '1728541760.jpg', 'Zuhdi Ali Hisyam', '082328839199', 'Penginapan Mantab', '2024-10-09 20:11:04', '2024-10-09 23:29:20'),
(4, 'Penginapan Mas Hisyam', 200000, 50, '1728530242.jpg', 'Zuhdi Ali Hisyam', '082328839199', 'Penginapan Mantab', '2024-10-09 20:11:04', '2024-10-09 23:29:56'),
(5, 'Penginapan Mas Zuhdi', 200000, 50, '1728541905.jpg', 'Zuhdi Ali Hisyam', '082328839199', 'Penginapan Mantab', '2024-10-09 20:11:04', '2024-10-09 23:31:45'),
(6, 'Kos Mas Hisyam', 200000, 50, '1728530242.jpg', 'Zuhdi Ali Hisyam', '082328839199', 'Penginapan Mantab', '2024-10-09 20:11:04', '2024-10-09 23:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `text1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text2` text COLLATE utf8mb4_unicode_ci,
  `gambar2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text3` text COLLATE utf8mb4_unicode_ci,
  `gambar3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `informasis`
--

CREATE TABLE `informasis` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi_terlibat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` tinyint NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informasis`
--

INSERT INTO `informasis` (`id`, `judul`, `instansi_terlibat`, `jumlah`, `tanggal`, `kategori`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Kolaborasi untuk memberikan data yang akurat', 'BPS, Diskominfo', 11, '2024-10-08', 'kabar', 'Kolaborasi Desa Blederan, BPS Wonosobo, dan Diskominfo Wonosobo utk mewujukan basis data desa yg akurat dan terupdate 👍👍😊', '1728956038.jpg', '2024-10-13 21:37:34', '2024-10-14 18:33:58'),
(3, 'Outing Class', 'SD N Pagerkukuh', 40, '2024-09-21', 'eduwisata', 'Belajar tentang budidaya sayuran, main ke kandang kambing, dan melihat kolam ikan', '1728884922.jpg', '2024-10-13 15:48:42', '2024-10-13 18:19:33'),
(4, 'Outing Class', 'SD Hafiz Quran MAF', 30, '2024-09-06', 'eduwisata', '', '1728885706.jpg', '2024-10-13 16:01:47', '2024-10-13 18:20:14'),
(5, 'Study Tour', 'DLH Bandung', 50, '2024-07-17', 'eduwisata', '', '1728887337.jpg', '2024-10-13 16:28:57', '2024-10-13 16:28:57'),
(8, 'Kunjungan Belajar', 'Kab.Banyumas', 16, '2024-07-28', 'eduwisata', '', '1728887688.jpg', '2024-10-13 16:34:48', '2024-10-13 16:34:48'),
(9, 'Pencanangan Desa Cantik', 'BPS, Pak Setda, Diskominfo, Bappeda', 32, '2024-08-05', 'kabar', 'Pencanangan Desa Cinta Statistik Desa Blederan Bersama Bapak Setda Wonosobo, BPS Wonosobo, Diskominfo Wonosobo, Bappeda Wonosobo dan Dinsospermades Wonosobo 👍', '1728955965.jpeg', '2024-10-14 01:28:29', '2024-10-14 18:32:45'),
(10, 'Pertemuan TP PKK Desa Blederan', 'PKK', 25, '2024-09-19', 'kabar', 'Pertemuan TP PKK Desa Blederan 👍👍', '1728956127.jpg', '2024-10-14 18:35:27', '2024-10-14 18:35:27'),
(11, 'Pemberdayaan Perempuan', 'LPTP', 25, '2024-09-19', 'kabar', 'Pemberdayaan perempuan di Desa Blederan Kecamatan Mojotengah Kabupaten Wonosobo \r\nTema pertemuan hari ini yaitu cara menjadi pemandu wisata untuk anak sekolah. \r\nDampingan @lptp.id \r\n @wonosobo_tangkaslestari \r\n@aqualestari \r\n@danoneindonesia', '1728956620.jpg', '2024-10-14 18:43:40', '2024-10-14 18:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_10_08_085845_tambah_tabel_produk', 1),
(6, '2024_10_09_015531_tambah_tabel_tabulasis', 1),
(7, '2024_10_09_015814_tambah_tabel_akomodasis', 1),
(8, '2024_10_14_012905_tambah_tabel_kabar', 2),
(10, '2024_10_14_012905_tambah_tabel_artikel', 3),
(11, '2024_10_14_012911_tambah_tabel_informasi', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint NOT NULL,
  `satuan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` bigint NOT NULL,
  `gambar_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_penjual` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kontak_penjual` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `nama_produk`, `harga`, `satuan`, `stok`, `gambar_produk`, `nama_penjual`, `kontak_penjual`, `deskripsi`, `created_at`, `updated_at`) VALUES
(4, 'Padi', 10000, 'gabah', 100, '1728446680.jpg', 'Zuhdi Ali Hisyamn', '082328839199', 'Padi Segar Berkualitas', '2024-10-08 21:04:40', '2024-10-08 21:04:40'),
(5, 'Jagung', 10000, 'kg', 100, '1728446716.jpg', 'Zuhdi Ali Hisyam', '082328839199', NULL, '2024-10-08 21:05:16', '2024-10-08 21:05:16'),
(6, 'Kol', 10000, 'kg', 100, '1728446814.jpg', 'Zuhdi Ali Hisyam', '082328839199', NULL, '2024-10-08 21:06:54', '2024-10-08 21:06:54'),
(7, 'Selada', 10000, 'kg', 100, '1728446838.jpg', 'Zuhdi Ali Hisyam', '082328839199', NULL, '2024-10-08 21:07:18', '2024-10-08 21:07:18'),
(8, 'Sawi', 10000, 'kg', 100, '1728446874.jpg', 'Zuhdi Ali Hisyam', '082328839199', NULL, '2024-10-08 21:07:54', '2024-10-08 21:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `tabulasis`
--

CREATE TABLE `tabulasis` (
  `id` bigint UNSIGNED NOT NULL,
  `judul_tabel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `metadata` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_table` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` timestamp NULL DEFAULT NULL,
  `kategori` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabulasis`
--

INSERT INTO `tabulasis` (`id`, `judul_tabel`, `data`, `metadata`, `id_table`, `tanggal`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Jumlah Penduduk Wanita Umur 10-49 Tahun yang Berstatus Kawin Menurut Penggunaan Alat KB di Desa/Kelurahan BLEDERAN 2024', '[{\"Penggunaan_Alat_KB\":\"1\",\"Jumlah\":10,\"Persentase\":\"3.88\"},{\"Penggunaan_Alat_KB\":\"2\",\"Jumlah\":9,\"Persentase\":\"3.49\"},{\"Penggunaan_Alat_KB\":\"3\",\"Jumlah\":35,\"Persentase\":\"13.57\"},{\"Penggunaan_Alat_KB\":\"4\",\"Jumlah\":124,\"Persentase\":\"48.06\"},{\"Penggunaan_Alat_KB\":\"5\",\"Jumlah\":53,\"Persentase\":\"20.54\"},{\"Penggunaan_Alat_KB\":\"6\",\"Jumlah\":10,\"Persentase\":\"3.88\"},{\"Penggunaan_Alat_KB\":\"7\",\"Jumlah\":9,\"Persentase\":\"3.49\"},{\"Penggunaan_Alat_KB\":\"9\",\"Jumlah\":8,\"Persentase\":\"3.10\"}]', '[{\"id\":51,\"var\":\"b4k11\",\"value\":\"1\",\"nama\":\"MOW\\/Tubektomi\"},{\"id\":52,\"var\":\"b4k11\",\"value\":\"2\",\"nama\":\"MOP\\/Vasektomi\"},{\"id\":53,\"var\":\"b4k11\",\"value\":\"3\",\"nama\":\"AKDR\\/IUD\\/Spiral\"},{\"id\":54,\"var\":\"b4k11\",\"value\":\"4\",\"nama\":\"Suntikan KB\"},{\"id\":55,\"var\":\"b4k11\",\"value\":\"5\",\"nama\":\"Susuk KB\\/Norplan\\/Implanon\\/Alwalit\"},{\"id\":56,\"var\":\"b4k11\",\"value\":\"6\",\"nama\":\"Pil KB\"},{\"id\":57,\"var\":\"b4k11\",\"value\":\"7\",\"nama\":\"Kondom\\/Karet KB\"},{\"id\":58,\"var\":\"b4k11\",\"value\":\"8\",\"nama\":\"Intravag\\/Tisue\\/Kondom Wanita\"},{\"id\":59,\"var\":\"b4k11\",\"value\":\"9\",\"nama\":\"Cara Tradisional\"}]', 'b4k11', '2024-10-13 18:38:14', 3, '2024-10-13 18:38:14', '2024-10-13 18:38:14'),
(2, 'Jumlah Penduduk Menurut Jenis Cacat di Desa/Kelurahan BLEDERAN 2024', '[{\"Jenis_Cacat\":\"01\",\"Jumlah\":20,\"Persentase\":\"68.97\"},{\"Jenis_Cacat\":\"02\",\"Jumlah\":3,\"Persentase\":\"10.34\"},{\"Jenis_Cacat\":\"04\",\"Jumlah\":1,\"Persentase\":\"3.45\"},{\"Jenis_Cacat\":\"06\",\"Jumlah\":1,\"Persentase\":\"3.45\"},{\"Jenis_Cacat\":\"08\",\"Jumlah\":1,\"Persentase\":\"3.45\"},{\"Jenis_Cacat\":\"10\",\"Jumlah\":2,\"Persentase\":\"6.90\"},{\"Jenis_Cacat\":\"12\",\"Jumlah\":1,\"Persentase\":\"3.45\"}]', '[{\"id\":60,\"var\":\"b4k12\",\"value\":\"00\",\"nama\":\"Tidak cacat\"},{\"id\":61,\"var\":\"b4k12\",\"value\":\"01\",\"nama\":\"Tuna daksa\\/cacat tubuh\"},{\"id\":62,\"var\":\"b4k12\",\"value\":\"02\",\"nama\":\"Tuna netra\\/buta\"},{\"id\":63,\"var\":\"b4k12\",\"value\":\"03\",\"nama\":\"Tuna rungu\"},{\"id\":64,\"var\":\"b4k12\",\"value\":\"04\",\"nama\":\"Tuna wicara\"},{\"id\":65,\"var\":\"b4k12\",\"value\":\"05\",\"nama\":\"Tuna rungu & wicara\"},{\"id\":66,\"var\":\"b4k12\",\"value\":\"06\",\"nama\":\"Tuna netra & cacat tubuh\"},{\"id\":67,\"var\":\"b4k12\",\"value\":\"07\",\"nama\":\"Tuna netra, rungu, & wicara\"},{\"id\":68,\"var\":\"b4k12\",\"value\":\"08\",\"nama\":\"Tuna rungu, wicara, & cacat tubuh\"},{\"id\":69,\"var\":\"b4k12\",\"value\":\"09\",\"nama\":\"Tuna rungu, wicara, netra, & cacat tubuh\"},{\"id\":70,\"var\":\"b4k12\",\"value\":\"10\",\"nama\":\"Cacat mental retardasi\"},{\"id\":71,\"var\":\"b4k12\",\"value\":\"11\",\"nama\":\"Mantan penderita gangguan jiwa\"},{\"id\":72,\"var\":\"b4k12\",\"value\":\"12\",\"nama\":\"Cacat fisik & mental\"}]', 'b4k12', '2024-10-13 18:38:14', 3, '2024-10-13 18:38:14', '2024-10-13 18:38:14'),
(3, 'Jumlah Penduduk Usia 5 Tahun ke Atas Menurut Partisipasi Sekolah di Desa/Kelurahan BLEDERAN 2024', '[{\"Partisipasi_Sekolah\":\"0\",\"Jumlah\":93,\"Persentase\":\"3.68\"},{\"Partisipasi_Sekolah\":\"1\",\"Jumlah\":612,\"Persentase\":\"24.19\"},{\"Partisipasi_Sekolah\":\"2\",\"Jumlah\":1825,\"Persentase\":\"72.13\"}]', '[{\"id\":73,\"var\":\"b4k15\",\"value\":\"0\",\"nama\":\"Tidak\\/belum pernah sekolah\"},{\"id\":74,\"var\":\"b4k15\",\"value\":\"1\",\"nama\":\"Masih sekolah\"},{\"id\":75,\"var\":\"b4k15\",\"value\":\"2\",\"nama\":\"Tidak bersekolah lagi\"}]', 'b4k15', '2024-10-13 18:38:14', 4, '2024-10-13 18:38:14', '2024-10-13 18:38:14'),
(4, 'Jumlah Penduduk Usia 5 Tahun ke Atas Menurut Ijazah Tertinggi yang Dimiliki di Desa/Kelurahan BLEDERAN 2024', '[{\"Ijazah_Tertinggi_yang_Dimiliki\":\"0\",\"Jumlah\":368,\"Persentase\":\"15.29\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"1\",\"Jumlah\":1006,\"Persentase\":\"41.79\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"2\",\"Jumlah\":451,\"Persentase\":\"18.74\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"3\",\"Jumlah\":434,\"Persentase\":\"18.03\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"4\",\"Jumlah\":26,\"Persentase\":\"1.08\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"5\",\"Jumlah\":117,\"Persentase\":\"4.86\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"6\",\"Jumlah\":5,\"Persentase\":\"0.21\"}]', '[{\"id\":76,\"var\":\"b4k18\",\"value\":\"0\",\"nama\":\"Tidak punya ijazah\"},{\"id\":77,\"var\":\"b4k18\",\"value\":\"1\",\"nama\":\"SD\\/sederajat\"},{\"id\":78,\"var\":\"b4k18\",\"value\":\"2\",\"nama\":\"SMP\\/sederajat\"},{\"id\":79,\"var\":\"b4k18\",\"value\":\"3\",\"nama\":\"SMA\\/sederajat\"},{\"id\":80,\"var\":\"b4k18\",\"value\":\"4\",\"nama\":\"D1\\/D2\\/D3\"},{\"id\":81,\"var\":\"b4k18\",\"value\":\"5\",\"nama\":\"D4\\/S1\"},{\"id\":82,\"var\":\"b4k18\",\"value\":\"6\",\"nama\":\"S2\\/S3\"}]', 'b4k18', '2024-10-13 18:38:14', 4, '2024-10-13 18:38:14', '2024-10-13 18:38:14'),
(5, 'Jumlah Penduduk Usia 5 Tahun ke Atas Menurut Lapangan Usaha di Desa/Kelurahan BLEDERAN 2024', '[{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"01\",\"Jumlah\":73},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"02\",\"Jumlah\":174},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"03\",\"Jumlah\":5},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"04\",\"Jumlah\":6},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"05\",\"Jumlah\":1},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"06\",\"Jumlah\":13},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"08\",\"Jumlah\":12},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"09\",\"Jumlah\":60},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"10\",\"Jumlah\":7},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"11\",\"Jumlah\":121},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"12\",\"Jumlah\":321},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"13\",\"Jumlah\":9},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"14\",\"Jumlah\":75},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"15\",\"Jumlah\":11},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"16\",\"Jumlah\":15},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"17\",\"Jumlah\":59},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"18\",\"Jumlah\":8},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"19\",\"Jumlah\":33},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"20\",\"Jumlah\":3},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"21\",\"Jumlah\":3},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"22\",\"Jumlah\":170}]', '[{\"id\":83,\"var\":\"b4k21\",\"value\":\"01\",\"nama\":\"Pertanian tanaman padi & palawija\"},{\"id\":84,\"var\":\"b4k21\",\"value\":\"02\",\"nama\":\"Hortikultura\"},{\"id\":85,\"var\":\"b4k21\",\"value\":\"03\",\"nama\":\"Perkebunan\"},{\"id\":86,\"var\":\"b4k21\",\"value\":\"04\",\"nama\":\"Perikanan tangkap\"},{\"id\":87,\"var\":\"b4k21\",\"value\":\"05\",\"nama\":\"Perikanan budidaya\"},{\"id\":88,\"var\":\"b4k21\",\"value\":\"06\",\"nama\":\"Peternakan\"},{\"id\":89,\"var\":\"b4k21\",\"value\":\"07\",\"nama\":\"Kehutanan & pertanian lainnya\"},{\"id\":90,\"var\":\"b4k21\",\"value\":\"08\",\"nama\":\"Pertambangan\\/penggalian\"},{\"id\":91,\"var\":\"b4k21\",\"value\":\"09\",\"nama\":\"Industri pengolahan\"},{\"id\":92,\"var\":\"b4k21\",\"value\":\"10\",\"nama\":\"Listrik & gas\"},{\"id\":93,\"var\":\"b4k21\",\"value\":\"11\",\"nama\":\"Bangunan\\/kontruksi\"},{\"id\":94,\"var\":\"b4k21\",\"value\":\"12\",\"nama\":\"Perdagangan\"},{\"id\":95,\"var\":\"b4k21\",\"value\":\"13\",\"nama\":\"Hotel & rumah makan\"},{\"id\":96,\"var\":\"b4k21\",\"value\":\"14\",\"nama\":\"Transportasi & pergudangan\"},{\"id\":97,\"var\":\"b4k21\",\"value\":\"15\",\"nama\":\"Informasi & komunikasi\"},{\"id\":98,\"var\":\"b4k21\",\"value\":\"16\",\"nama\":\"Keuangan & asuransi\"},{\"id\":99,\"var\":\"b4k21\",\"value\":\"17\",\"nama\":\"Jasa pendidikan\"},{\"id\":100,\"var\":\"b4k21\",\"value\":\"18\",\"nama\":\"Jasa kesehatan\"},{\"id\":101,\"var\":\"b4k21\",\"value\":\"19\",\"nama\":\"Jasa kemasyarakatan, pemerintah, & perorangan\"},{\"id\":102,\"var\":\"b4k21\",\"value\":\"20\",\"nama\":\"Pemulung\"},{\"id\":103,\"var\":\"b4k21\",\"value\":\"21\",\"nama\":\"TKI\"},{\"id\":104,\"var\":\"b4k21\",\"value\":\"22\",\"nama\":\"Lainnya\"}]', 'b4k21', '2024-10-13 18:38:14', 5, '2024-10-13 18:38:14', '2024-10-13 18:38:14'),
(6, 'Status Penguasaan Bangunan Tempat Tinggal yang Ditempati di Desa/Kelurahan BLEDERAN 2024', '[{\"Status\":\"1\",\"Jumlah\":665,\"Persentase\":\"83.02\"},{\"Status\":\"2\",\"Jumlah\":6,\"Persentase\":\"0.75\"},{\"Status\":\"3\",\"Jumlah\":130,\"Persentase\":\"16.23\"}]', '[{\"id\":1,\"var\":\"b3r1a\",\"value\":\"1\",\"nama\":\"Milik sendiri\"},{\"id\":2,\"var\":\"b3r1a\",\"value\":\"2\",\"nama\":\"Kontrak\\/sewa\"},{\"id\":3,\"var\":\"b3r1a\",\"value\":\"3\",\"nama\":\"Bebas sewa\"},{\"id\":4,\"var\":\"b3r1a\",\"value\":\"4\",\"nama\":\"Dinas\"},{\"id\":5,\"var\":\"b3r1a\",\"value\":\"5\",\"nama\":\"Lainnya\"}]', 'b3r1a', '2024-10-13 18:38:14', 2, '2024-10-13 18:38:14', '2024-10-13 18:38:14'),
(7, 'Jumlah Keluarga Menurut Luas Lantai di Desa/Kelurahan BLEDERAN 2024', '[{\"Jenis_Lantai\":\"01\",\"Jumlah\":8,\"Persentase\":\"0.99\"},{\"Jenis_Lantai\":\"02\",\"Jumlah\":404,\"Persentase\":\"50.12\"},{\"Jenis_Lantai\":\"04\",\"Jumlah\":70,\"Persentase\":\"8.68\"},{\"Jenis_Lantai\":\"06\",\"Jumlah\":308,\"Persentase\":\"38.21\"},{\"Jenis_Lantai\":\"09\",\"Jumlah\":12,\"Persentase\":\"1.49\"},{\"Jenis_Lantai\":\"10\",\"Jumlah\":4,\"Persentase\":\"0.50\"}]', '[{\"id\":6,\"var\":\"b3r3\",\"value\":\"01\",\"nama\":\"Marmer\\/granit\"},{\"id\":7,\"var\":\"b3r3\",\"value\":\"02\",\"nama\":\"Keramik\"},{\"id\":8,\"var\":\"b3r3\",\"value\":\"03\",\"nama\":\"Parket\\/vinil\\/permadani\"},{\"id\":9,\"var\":\"b3r3\",\"value\":\"04\",\"nama\":\"Ubin\\/tegel\\/teraso\"},{\"id\":10,\"var\":\"b3r3\",\"value\":\"05\",\"nama\":\"Kayu\\/papan kualitas tinggi\"},{\"id\":11,\"var\":\"b3r3\",\"value\":\"06\",\"nama\":\"Semen\\/bata merah\"},{\"id\":12,\"var\":\"b3r3\",\"value\":\"07\",\"nama\":\"Bambu\"},{\"id\":13,\"var\":\"b3r3\",\"value\":\"08\",\"nama\":\"Kayu\\/papan kualitas rendah\"},{\"id\":14,\"var\":\"b3r3\",\"value\":\"09\",\"nama\":\"Tanah\"},{\"id\":15,\"var\":\"b3r3\",\"value\":\"10\",\"nama\":\"Lainnya\"}]', 'b3r3', '2024-10-13 18:38:14', 2, '2024-10-13 18:38:14', '2024-10-13 18:38:14'),
(8, 'Jumlah Keluarga Menurut Jenis Dinding Terluas di Desa/Kelurahan BLEDERAN 2024', '[{\"Jenis_Dinding\":\"1\",\"Jumlah\":715,\"Persentase\":\"88.60\"},{\"Jenis_Dinding\":\"2\",\"Jumlah\":4,\"Persentase\":\"0.50\"},{\"Jenis_Dinding\":\"3\",\"Jumlah\":87,\"Persentase\":\"10.78\"},{\"Jenis_Dinding\":\"7\",\"Jumlah\":1,\"Persentase\":\"0.12\"}]', '[{\"id\":26,\"var\":\"b3r4a\",\"value\":\"1\",\"nama\":\"Tembok\"},{\"id\":27,\"var\":\"b3r4a\",\"value\":\"2\",\"nama\":\"Plesteran anyaman bambu\\/kawat\"},{\"id\":28,\"var\":\"b3r4a\",\"value\":\"3\",\"nama\":\"Kayu\"},{\"id\":29,\"var\":\"b3r4a\",\"value\":\"4\",\"nama\":\"Anyaman bambu\"},{\"id\":30,\"var\":\"b3r4a\",\"value\":\"5\",\"nama\":\"Batang kayu\"},{\"id\":31,\"var\":\"b3r4a\",\"value\":\"6\",\"nama\":\"Bambu\"},{\"id\":32,\"var\":\"b3r4a\",\"value\":\"7\",\"nama\":\"Lainnya\"}]', 'b3r4a', '2024-10-13 18:38:14', 2, '2024-10-13 18:38:14', '2024-10-13 18:38:14'),
(9, 'Jumlah Keluarga Menurut Jenis Atap Terluas di Desa/Kelurahan BLEDERAN 2024', '[{\"Jenis_Atap\":\"01\",\"Jumlah\":4,\"Persentase\":\"0.50\"},{\"Jenis_Atap\":\"02\",\"Jumlah\":1,\"Persentase\":\"0.12\"},{\"Jenis_Atap\":\"03\",\"Jumlah\":3,\"Persentase\":\"0.37\"},{\"Jenis_Atap\":\"04\",\"Jumlah\":5,\"Persentase\":\"0.62\"},{\"Jenis_Atap\":\"05\",\"Jumlah\":6,\"Persentase\":\"0.74\"},{\"Jenis_Atap\":\"06\",\"Jumlah\":787,\"Persentase\":\"97.52\"},{\"Jenis_Atap\":\"07\",\"Jumlah\":1,\"Persentase\":\"0.12\"}]', '[{\"id\":16,\"var\":\"b3r5a\",\"value\":\"01\",\"nama\":\"Beton\\/genteng beton\"},{\"id\":17,\"var\":\"b3r5a\",\"value\":\"02\",\"nama\":\"Genteng keramik\"},{\"id\":18,\"var\":\"b3r5a\",\"value\":\"03\",\"nama\":\"Genteng metal\"},{\"id\":19,\"var\":\"b3r5a\",\"value\":\"04\",\"nama\":\"Genteng tanah liat\"},{\"id\":20,\"var\":\"b3r5a\",\"value\":\"05\",\"nama\":\"Asbes\"},{\"id\":21,\"var\":\"b3r5a\",\"value\":\"06\",\"nama\":\"Seng\"},{\"id\":22,\"var\":\"b3r5a\",\"value\":\"07\",\"nama\":\"Sirap\"},{\"id\":23,\"var\":\"b3r5a\",\"value\":\"08\",\"nama\":\"Bambu\"},{\"id\":24,\"var\":\"b3r5a\",\"value\":\"09\",\"nama\":\"Jerami\\/ijuk\\/daun daunan\\/rumbia\"},{\"id\":25,\"var\":\"b3r5a\",\"value\":\"10\",\"nama\":\"Lainnya\"},{\"id\":33,\"var\":\"b3r5a\",\"value\":\"01\",\"nama\":\"Beton\\/genteng beton\"},{\"id\":34,\"var\":\"b3r5a\",\"value\":\"02\",\"nama\":\"Genteng keramik\"},{\"id\":35,\"var\":\"b3r5a\",\"value\":\"03\",\"nama\":\"Genteng metal\"},{\"id\":36,\"var\":\"b3r5a\",\"value\":\"04\",\"nama\":\"Genteng tanah liat\"},{\"id\":37,\"var\":\"b3r5a\",\"value\":\"05\",\"nama\":\"Asbes\"},{\"id\":38,\"var\":\"b3r5a\",\"value\":\"06\",\"nama\":\"Seng\"},{\"id\":39,\"var\":\"b3r5a\",\"value\":\"07\",\"nama\":\"Sirap\"},{\"id\":40,\"var\":\"b3r5a\",\"value\":\"08\",\"nama\":\"Bambu\"},{\"id\":41,\"var\":\"b3r5a\",\"value\":\"09\",\"nama\":\"Jerami\\/ijuk\\/daun daunan\\/rumbia\"},{\"id\":42,\"var\":\"b3r5a\",\"value\":\"10\",\"nama\":\"Lainnya\"}]', 'b3r5a', '2024-10-13 18:38:14', 2, '2024-10-13 18:38:14', '2024-10-13 18:38:14'),
(10, 'Jumlah Keluarga Menurut Penggunaan Fasilitas Tempat Buang Air Besar di Desa/Kelurahan BLEDERAN 2024', '[{\"Fasilitas_BAB\":\"1\",\"Jumlah\":735,\"Persentase\":\"91.53\"},{\"Fasilitas_BAB\":\"2\",\"Jumlah\":43,\"Persentase\":\"5.35\"},{\"Fasilitas_BAB\":\"3\",\"Jumlah\":25,\"Persentase\":\"3.11\"}]', '[{\"id\":43,\"var\":\"b3r11a\",\"value\":\"1\",\"nama\":\"Sendiri\"},{\"id\":44,\"var\":\"b3r11a\",\"value\":\"2\",\"nama\":\"Bersama\"},{\"id\":45,\"var\":\"b3r11a\",\"value\":\"3\",\"nama\":\"Umum\"},{\"id\":46,\"var\":\"b3r11a\",\"value\":\"4\",\"nama\":\"Tidak ada\"}]', 'b3r11a', '2024-10-13 18:38:14', 2, '2024-10-13 18:38:14', '2024-10-13 18:38:14'),
(11, 'Jumlah Keluarga Menurut Jenis Kloset di Desa/Kelurahan BLEDERAN 2024', '[{\"Jenis_Kloset\":\"1\",\"Jumlah\":621,\"Persentase\":\"78.51\"},{\"Jenis_Kloset\":\"2\",\"Jumlah\":133,\"Persentase\":\"16.81\"},{\"Jenis_Kloset\":\"3\",\"Jumlah\":33,\"Persentase\":\"4.17\"},{\"Jenis_Kloset\":\"4\",\"Jumlah\":4,\"Persentase\":\"0.51\"}]', '[{\"id\":47,\"var\":\"b3r11b\",\"value\":\"1\",\"nama\":\"Leher angsa\"},{\"id\":48,\"var\":\"b3r11b\",\"value\":\"2\",\"nama\":\"Plengsengan\"},{\"id\":49,\"var\":\"b3r11b\",\"value\":\"3\",\"nama\":\"Cemplung\\/cubluk\"},{\"id\":50,\"var\":\"b3r11b\",\"value\":\"4\",\"nama\":\"Tidak pakai\"}]', 'b3r11b', '2024-10-13 18:38:14', 2, '2024-10-13 18:38:14', '2024-10-13 18:38:14'),
(12, 'Jumlah Penduduk Wanita Umur 10-49 Tahun yang Berstatus Kawin Menurut Penggunaan Alat KB di Desa/Kelurahan BLEDERAN 2024', '[{\"Penggunaan_Alat_KB\":\"1\",\"Jumlah\":10,\"Persentase\":\"3.88\"},{\"Penggunaan_Alat_KB\":\"2\",\"Jumlah\":9,\"Persentase\":\"3.49\"},{\"Penggunaan_Alat_KB\":\"3\",\"Jumlah\":35,\"Persentase\":\"13.57\"},{\"Penggunaan_Alat_KB\":\"4\",\"Jumlah\":124,\"Persentase\":\"48.06\"},{\"Penggunaan_Alat_KB\":\"5\",\"Jumlah\":53,\"Persentase\":\"20.54\"},{\"Penggunaan_Alat_KB\":\"6\",\"Jumlah\":10,\"Persentase\":\"3.88\"},{\"Penggunaan_Alat_KB\":\"7\",\"Jumlah\":9,\"Persentase\":\"3.49\"},{\"Penggunaan_Alat_KB\":\"9\",\"Jumlah\":8,\"Persentase\":\"3.10\"}]', '[{\"id\":51,\"var\":\"b4k11\",\"value\":\"1\",\"nama\":\"MOW\\/Tubektomi\"},{\"id\":52,\"var\":\"b4k11\",\"value\":\"2\",\"nama\":\"MOP\\/Vasektomi\"},{\"id\":53,\"var\":\"b4k11\",\"value\":\"3\",\"nama\":\"AKDR\\/IUD\\/Spiral\"},{\"id\":54,\"var\":\"b4k11\",\"value\":\"4\",\"nama\":\"Suntikan KB\"},{\"id\":55,\"var\":\"b4k11\",\"value\":\"5\",\"nama\":\"Susuk KB\\/Norplan\\/Implanon\\/Alwalit\"},{\"id\":56,\"var\":\"b4k11\",\"value\":\"6\",\"nama\":\"Pil KB\"},{\"id\":57,\"var\":\"b4k11\",\"value\":\"7\",\"nama\":\"Kondom\\/Karet KB\"},{\"id\":58,\"var\":\"b4k11\",\"value\":\"8\",\"nama\":\"Intravag\\/Tisue\\/Kondom Wanita\"},{\"id\":59,\"var\":\"b4k11\",\"value\":\"9\",\"nama\":\"Cara Tradisional\"}]', 'b4k11', '2024-10-13 18:39:31', 3, '2024-10-13 18:39:31', '2024-10-13 18:39:31'),
(13, 'Jumlah Penduduk Menurut Jenis Cacat di Desa/Kelurahan BLEDERAN 2024', '[{\"Jenis_Cacat\":\"01\",\"Jumlah\":20,\"Persentase\":\"68.97\"},{\"Jenis_Cacat\":\"02\",\"Jumlah\":3,\"Persentase\":\"10.34\"},{\"Jenis_Cacat\":\"04\",\"Jumlah\":1,\"Persentase\":\"3.45\"},{\"Jenis_Cacat\":\"06\",\"Jumlah\":1,\"Persentase\":\"3.45\"},{\"Jenis_Cacat\":\"08\",\"Jumlah\":1,\"Persentase\":\"3.45\"},{\"Jenis_Cacat\":\"10\",\"Jumlah\":2,\"Persentase\":\"6.90\"},{\"Jenis_Cacat\":\"12\",\"Jumlah\":1,\"Persentase\":\"3.45\"}]', '[{\"id\":60,\"var\":\"b4k12\",\"value\":\"00\",\"nama\":\"Tidak cacat\"},{\"id\":61,\"var\":\"b4k12\",\"value\":\"01\",\"nama\":\"Tuna daksa\\/cacat tubuh\"},{\"id\":62,\"var\":\"b4k12\",\"value\":\"02\",\"nama\":\"Tuna netra\\/buta\"},{\"id\":63,\"var\":\"b4k12\",\"value\":\"03\",\"nama\":\"Tuna rungu\"},{\"id\":64,\"var\":\"b4k12\",\"value\":\"04\",\"nama\":\"Tuna wicara\"},{\"id\":65,\"var\":\"b4k12\",\"value\":\"05\",\"nama\":\"Tuna rungu & wicara\"},{\"id\":66,\"var\":\"b4k12\",\"value\":\"06\",\"nama\":\"Tuna netra & cacat tubuh\"},{\"id\":67,\"var\":\"b4k12\",\"value\":\"07\",\"nama\":\"Tuna netra, rungu, & wicara\"},{\"id\":68,\"var\":\"b4k12\",\"value\":\"08\",\"nama\":\"Tuna rungu, wicara, & cacat tubuh\"},{\"id\":69,\"var\":\"b4k12\",\"value\":\"09\",\"nama\":\"Tuna rungu, wicara, netra, & cacat tubuh\"},{\"id\":70,\"var\":\"b4k12\",\"value\":\"10\",\"nama\":\"Cacat mental retardasi\"},{\"id\":71,\"var\":\"b4k12\",\"value\":\"11\",\"nama\":\"Mantan penderita gangguan jiwa\"},{\"id\":72,\"var\":\"b4k12\",\"value\":\"12\",\"nama\":\"Cacat fisik & mental\"}]', 'b4k12', '2024-10-13 18:39:31', 3, '2024-10-13 18:39:31', '2024-10-13 18:39:31'),
(14, 'Jumlah Penduduk Usia 5 Tahun ke Atas Menurut Partisipasi Sekolah di Desa/Kelurahan BLEDERAN 2024', '[{\"Partisipasi_Sekolah\":\"0\",\"Jumlah\":93,\"Persentase\":\"3.68\"},{\"Partisipasi_Sekolah\":\"1\",\"Jumlah\":612,\"Persentase\":\"24.19\"},{\"Partisipasi_Sekolah\":\"2\",\"Jumlah\":1825,\"Persentase\":\"72.13\"}]', '[{\"id\":73,\"var\":\"b4k15\",\"value\":\"0\",\"nama\":\"Tidak\\/belum pernah sekolah\"},{\"id\":74,\"var\":\"b4k15\",\"value\":\"1\",\"nama\":\"Masih sekolah\"},{\"id\":75,\"var\":\"b4k15\",\"value\":\"2\",\"nama\":\"Tidak bersekolah lagi\"}]', 'b4k15', '2024-10-13 18:39:31', 4, '2024-10-13 18:39:31', '2024-10-13 18:39:31'),
(15, 'Jumlah Penduduk Usia 5 Tahun ke Atas Menurut Ijazah Tertinggi yang Dimiliki di Desa/Kelurahan BLEDERAN 2024', '[{\"Ijazah_Tertinggi_yang_Dimiliki\":\"0\",\"Jumlah\":368,\"Persentase\":\"15.29\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"1\",\"Jumlah\":1006,\"Persentase\":\"41.79\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"2\",\"Jumlah\":451,\"Persentase\":\"18.74\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"3\",\"Jumlah\":434,\"Persentase\":\"18.03\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"4\",\"Jumlah\":26,\"Persentase\":\"1.08\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"5\",\"Jumlah\":117,\"Persentase\":\"4.86\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"6\",\"Jumlah\":5,\"Persentase\":\"0.21\"}]', '[{\"id\":76,\"var\":\"b4k18\",\"value\":\"0\",\"nama\":\"Tidak punya ijazah\"},{\"id\":77,\"var\":\"b4k18\",\"value\":\"1\",\"nama\":\"SD\\/sederajat\"},{\"id\":78,\"var\":\"b4k18\",\"value\":\"2\",\"nama\":\"SMP\\/sederajat\"},{\"id\":79,\"var\":\"b4k18\",\"value\":\"3\",\"nama\":\"SMA\\/sederajat\"},{\"id\":80,\"var\":\"b4k18\",\"value\":\"4\",\"nama\":\"D1\\/D2\\/D3\"},{\"id\":81,\"var\":\"b4k18\",\"value\":\"5\",\"nama\":\"D4\\/S1\"},{\"id\":82,\"var\":\"b4k18\",\"value\":\"6\",\"nama\":\"S2\\/S3\"}]', 'b4k18', '2024-10-13 18:39:31', 4, '2024-10-13 18:39:31', '2024-10-13 18:39:31'),
(16, 'Jumlah Penduduk Usia 5 Tahun ke Atas Menurut Lapangan Usaha di Desa/Kelurahan BLEDERAN 2024', '[{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"01\",\"Jumlah\":73},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"02\",\"Jumlah\":174},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"03\",\"Jumlah\":5},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"04\",\"Jumlah\":6},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"05\",\"Jumlah\":1},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"06\",\"Jumlah\":13},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"08\",\"Jumlah\":12},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"09\",\"Jumlah\":60},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"10\",\"Jumlah\":7},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"11\",\"Jumlah\":121},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"12\",\"Jumlah\":321},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"13\",\"Jumlah\":9},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"14\",\"Jumlah\":75},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"15\",\"Jumlah\":11},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"16\",\"Jumlah\":15},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"17\",\"Jumlah\":59},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"18\",\"Jumlah\":8},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"19\",\"Jumlah\":33},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"20\",\"Jumlah\":3},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"21\",\"Jumlah\":3},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"22\",\"Jumlah\":170}]', '[{\"id\":83,\"var\":\"b4k21\",\"value\":\"01\",\"nama\":\"Pertanian tanaman padi & palawija\"},{\"id\":84,\"var\":\"b4k21\",\"value\":\"02\",\"nama\":\"Hortikultura\"},{\"id\":85,\"var\":\"b4k21\",\"value\":\"03\",\"nama\":\"Perkebunan\"},{\"id\":86,\"var\":\"b4k21\",\"value\":\"04\",\"nama\":\"Perikanan tangkap\"},{\"id\":87,\"var\":\"b4k21\",\"value\":\"05\",\"nama\":\"Perikanan budidaya\"},{\"id\":88,\"var\":\"b4k21\",\"value\":\"06\",\"nama\":\"Peternakan\"},{\"id\":89,\"var\":\"b4k21\",\"value\":\"07\",\"nama\":\"Kehutanan & pertanian lainnya\"},{\"id\":90,\"var\":\"b4k21\",\"value\":\"08\",\"nama\":\"Pertambangan\\/penggalian\"},{\"id\":91,\"var\":\"b4k21\",\"value\":\"09\",\"nama\":\"Industri pengolahan\"},{\"id\":92,\"var\":\"b4k21\",\"value\":\"10\",\"nama\":\"Listrik & gas\"},{\"id\":93,\"var\":\"b4k21\",\"value\":\"11\",\"nama\":\"Bangunan\\/kontruksi\"},{\"id\":94,\"var\":\"b4k21\",\"value\":\"12\",\"nama\":\"Perdagangan\"},{\"id\":95,\"var\":\"b4k21\",\"value\":\"13\",\"nama\":\"Hotel & rumah makan\"},{\"id\":96,\"var\":\"b4k21\",\"value\":\"14\",\"nama\":\"Transportasi & pergudangan\"},{\"id\":97,\"var\":\"b4k21\",\"value\":\"15\",\"nama\":\"Informasi & komunikasi\"},{\"id\":98,\"var\":\"b4k21\",\"value\":\"16\",\"nama\":\"Keuangan & asuransi\"},{\"id\":99,\"var\":\"b4k21\",\"value\":\"17\",\"nama\":\"Jasa pendidikan\"},{\"id\":100,\"var\":\"b4k21\",\"value\":\"18\",\"nama\":\"Jasa kesehatan\"},{\"id\":101,\"var\":\"b4k21\",\"value\":\"19\",\"nama\":\"Jasa kemasyarakatan, pemerintah, & perorangan\"},{\"id\":102,\"var\":\"b4k21\",\"value\":\"20\",\"nama\":\"Pemulung\"},{\"id\":103,\"var\":\"b4k21\",\"value\":\"21\",\"nama\":\"TKI\"},{\"id\":104,\"var\":\"b4k21\",\"value\":\"22\",\"nama\":\"Lainnya\"}]', 'b4k21', '2024-10-13 18:39:31', 5, '2024-10-13 18:39:31', '2024-10-13 18:39:31'),
(17, 'Status Penguasaan Bangunan Tempat Tinggal yang Ditempati di Desa/Kelurahan BLEDERAN 2024', '[{\"Status\":\"1\",\"Jumlah\":665,\"Persentase\":\"83.02\"},{\"Status\":\"2\",\"Jumlah\":6,\"Persentase\":\"0.75\"},{\"Status\":\"3\",\"Jumlah\":130,\"Persentase\":\"16.23\"}]', '[{\"id\":1,\"var\":\"b3r1a\",\"value\":\"1\",\"nama\":\"Milik sendiri\"},{\"id\":2,\"var\":\"b3r1a\",\"value\":\"2\",\"nama\":\"Kontrak\\/sewa\"},{\"id\":3,\"var\":\"b3r1a\",\"value\":\"3\",\"nama\":\"Bebas sewa\"},{\"id\":4,\"var\":\"b3r1a\",\"value\":\"4\",\"nama\":\"Dinas\"},{\"id\":5,\"var\":\"b3r1a\",\"value\":\"5\",\"nama\":\"Lainnya\"}]', 'b3r1a', '2024-10-13 18:39:31', 2, '2024-10-13 18:39:31', '2024-10-13 18:39:31'),
(18, 'Jumlah Keluarga Menurut Luas Lantai di Desa/Kelurahan BLEDERAN 2024', '[{\"Jenis_Lantai\":\"01\",\"Jumlah\":8,\"Persentase\":\"0.99\"},{\"Jenis_Lantai\":\"02\",\"Jumlah\":404,\"Persentase\":\"50.12\"},{\"Jenis_Lantai\":\"04\",\"Jumlah\":70,\"Persentase\":\"8.68\"},{\"Jenis_Lantai\":\"06\",\"Jumlah\":308,\"Persentase\":\"38.21\"},{\"Jenis_Lantai\":\"09\",\"Jumlah\":12,\"Persentase\":\"1.49\"},{\"Jenis_Lantai\":\"10\",\"Jumlah\":4,\"Persentase\":\"0.50\"}]', '[{\"id\":6,\"var\":\"b3r3\",\"value\":\"01\",\"nama\":\"Marmer\\/granit\"},{\"id\":7,\"var\":\"b3r3\",\"value\":\"02\",\"nama\":\"Keramik\"},{\"id\":8,\"var\":\"b3r3\",\"value\":\"03\",\"nama\":\"Parket\\/vinil\\/permadani\"},{\"id\":9,\"var\":\"b3r3\",\"value\":\"04\",\"nama\":\"Ubin\\/tegel\\/teraso\"},{\"id\":10,\"var\":\"b3r3\",\"value\":\"05\",\"nama\":\"Kayu\\/papan kualitas tinggi\"},{\"id\":11,\"var\":\"b3r3\",\"value\":\"06\",\"nama\":\"Semen\\/bata merah\"},{\"id\":12,\"var\":\"b3r3\",\"value\":\"07\",\"nama\":\"Bambu\"},{\"id\":13,\"var\":\"b3r3\",\"value\":\"08\",\"nama\":\"Kayu\\/papan kualitas rendah\"},{\"id\":14,\"var\":\"b3r3\",\"value\":\"09\",\"nama\":\"Tanah\"},{\"id\":15,\"var\":\"b3r3\",\"value\":\"10\",\"nama\":\"Lainnya\"}]', 'b3r3', '2024-10-13 18:39:31', 2, '2024-10-13 18:39:31', '2024-10-13 18:39:31'),
(19, 'Jumlah Keluarga Menurut Jenis Dinding Terluas di Desa/Kelurahan BLEDERAN 2024', '[{\"Jenis_Dinding\":\"1\",\"Jumlah\":715,\"Persentase\":\"88.60\"},{\"Jenis_Dinding\":\"2\",\"Jumlah\":4,\"Persentase\":\"0.50\"},{\"Jenis_Dinding\":\"3\",\"Jumlah\":87,\"Persentase\":\"10.78\"},{\"Jenis_Dinding\":\"7\",\"Jumlah\":1,\"Persentase\":\"0.12\"}]', '[{\"id\":26,\"var\":\"b3r4a\",\"value\":\"1\",\"nama\":\"Tembok\"},{\"id\":27,\"var\":\"b3r4a\",\"value\":\"2\",\"nama\":\"Plesteran anyaman bambu\\/kawat\"},{\"id\":28,\"var\":\"b3r4a\",\"value\":\"3\",\"nama\":\"Kayu\"},{\"id\":29,\"var\":\"b3r4a\",\"value\":\"4\",\"nama\":\"Anyaman bambu\"},{\"id\":30,\"var\":\"b3r4a\",\"value\":\"5\",\"nama\":\"Batang kayu\"},{\"id\":31,\"var\":\"b3r4a\",\"value\":\"6\",\"nama\":\"Bambu\"},{\"id\":32,\"var\":\"b3r4a\",\"value\":\"7\",\"nama\":\"Lainnya\"}]', 'b3r4a', '2024-10-13 18:39:31', 2, '2024-10-13 18:39:31', '2024-10-13 18:39:31'),
(20, 'Jumlah Keluarga Menurut Jenis Atap Terluas di Desa/Kelurahan BLEDERAN 2024', '[{\"Jenis_Atap\":\"01\",\"Jumlah\":4,\"Persentase\":\"0.50\"},{\"Jenis_Atap\":\"02\",\"Jumlah\":1,\"Persentase\":\"0.12\"},{\"Jenis_Atap\":\"03\",\"Jumlah\":3,\"Persentase\":\"0.37\"},{\"Jenis_Atap\":\"04\",\"Jumlah\":5,\"Persentase\":\"0.62\"},{\"Jenis_Atap\":\"05\",\"Jumlah\":6,\"Persentase\":\"0.74\"},{\"Jenis_Atap\":\"06\",\"Jumlah\":787,\"Persentase\":\"97.52\"},{\"Jenis_Atap\":\"07\",\"Jumlah\":1,\"Persentase\":\"0.12\"}]', '[{\"id\":16,\"var\":\"b3r5a\",\"value\":\"01\",\"nama\":\"Beton\\/genteng beton\"},{\"id\":17,\"var\":\"b3r5a\",\"value\":\"02\",\"nama\":\"Genteng keramik\"},{\"id\":18,\"var\":\"b3r5a\",\"value\":\"03\",\"nama\":\"Genteng metal\"},{\"id\":19,\"var\":\"b3r5a\",\"value\":\"04\",\"nama\":\"Genteng tanah liat\"},{\"id\":20,\"var\":\"b3r5a\",\"value\":\"05\",\"nama\":\"Asbes\"},{\"id\":21,\"var\":\"b3r5a\",\"value\":\"06\",\"nama\":\"Seng\"},{\"id\":22,\"var\":\"b3r5a\",\"value\":\"07\",\"nama\":\"Sirap\"},{\"id\":23,\"var\":\"b3r5a\",\"value\":\"08\",\"nama\":\"Bambu\"},{\"id\":24,\"var\":\"b3r5a\",\"value\":\"09\",\"nama\":\"Jerami\\/ijuk\\/daun daunan\\/rumbia\"},{\"id\":25,\"var\":\"b3r5a\",\"value\":\"10\",\"nama\":\"Lainnya\"},{\"id\":33,\"var\":\"b3r5a\",\"value\":\"01\",\"nama\":\"Beton\\/genteng beton\"},{\"id\":34,\"var\":\"b3r5a\",\"value\":\"02\",\"nama\":\"Genteng keramik\"},{\"id\":35,\"var\":\"b3r5a\",\"value\":\"03\",\"nama\":\"Genteng metal\"},{\"id\":36,\"var\":\"b3r5a\",\"value\":\"04\",\"nama\":\"Genteng tanah liat\"},{\"id\":37,\"var\":\"b3r5a\",\"value\":\"05\",\"nama\":\"Asbes\"},{\"id\":38,\"var\":\"b3r5a\",\"value\":\"06\",\"nama\":\"Seng\"},{\"id\":39,\"var\":\"b3r5a\",\"value\":\"07\",\"nama\":\"Sirap\"},{\"id\":40,\"var\":\"b3r5a\",\"value\":\"08\",\"nama\":\"Bambu\"},{\"id\":41,\"var\":\"b3r5a\",\"value\":\"09\",\"nama\":\"Jerami\\/ijuk\\/daun daunan\\/rumbia\"},{\"id\":42,\"var\":\"b3r5a\",\"value\":\"10\",\"nama\":\"Lainnya\"}]', 'b3r5a', '2024-10-13 18:39:31', 2, '2024-10-13 18:39:31', '2024-10-13 18:39:31'),
(21, 'Jumlah Keluarga Menurut Penggunaan Fasilitas Tempat Buang Air Besar di Desa/Kelurahan BLEDERAN 2024', '[{\"Fasilitas_BAB\":\"1\",\"Jumlah\":735,\"Persentase\":\"91.53\"},{\"Fasilitas_BAB\":\"2\",\"Jumlah\":43,\"Persentase\":\"5.35\"},{\"Fasilitas_BAB\":\"3\",\"Jumlah\":25,\"Persentase\":\"3.11\"}]', '[{\"id\":43,\"var\":\"b3r11a\",\"value\":\"1\",\"nama\":\"Sendiri\"},{\"id\":44,\"var\":\"b3r11a\",\"value\":\"2\",\"nama\":\"Bersama\"},{\"id\":45,\"var\":\"b3r11a\",\"value\":\"3\",\"nama\":\"Umum\"},{\"id\":46,\"var\":\"b3r11a\",\"value\":\"4\",\"nama\":\"Tidak ada\"}]', 'b3r11a', '2024-10-13 18:39:31', 2, '2024-10-13 18:39:31', '2024-10-13 18:39:31'),
(22, 'Jumlah Keluarga Menurut Jenis Kloset di Desa/Kelurahan BLEDERAN 2024', '[{\"Jenis_Kloset\":\"1\",\"Jumlah\":621,\"Persentase\":\"78.51\"},{\"Jenis_Kloset\":\"2\",\"Jumlah\":133,\"Persentase\":\"16.81\"},{\"Jenis_Kloset\":\"3\",\"Jumlah\":33,\"Persentase\":\"4.17\"},{\"Jenis_Kloset\":\"4\",\"Jumlah\":4,\"Persentase\":\"0.51\"}]', '[{\"id\":47,\"var\":\"b3r11b\",\"value\":\"1\",\"nama\":\"Leher angsa\"},{\"id\":48,\"var\":\"b3r11b\",\"value\":\"2\",\"nama\":\"Plengsengan\"},{\"id\":49,\"var\":\"b3r11b\",\"value\":\"3\",\"nama\":\"Cemplung\\/cubluk\"},{\"id\":50,\"var\":\"b3r11b\",\"value\":\"4\",\"nama\":\"Tidak pakai\"}]', 'b3r11b', '2024-10-13 18:39:31', 2, '2024-10-13 18:39:31', '2024-10-13 18:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$12$RygIqKHsMsXai1FVDmEspO3HSlIEolSyJVo1HD/2d7rHvtZgMV70S', NULL, NULL, NULL),
(2, 'Zuhdi Ali Hisyam', 'hisyam@hisyam.com', NULL, '$2y$12$aE3uKVbAE4DiiQeTWDV6JunhQ333p.lcKhVf26BWEspUgJSjgf9ia', NULL, NULL, NULL),
(3, 'Fahmi Saputra', 'fahmi@fahmi.com', NULL, '$2y$12$oVWvMrkH1CTlMSj2rZ6JQ.RjX9MLgLS.r87KKAsHPJBls3j4b28ci', NULL, NULL, NULL),
(4, 'Novi Hardianto', 'novi@novi.com', NULL, '$2y$12$XEDS2ZNXnWrwJ0FeeGEv.eXA/x/Xen2ypg90gNxWwl5AqToaXG8A6', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akomodasis`
--
ALTER TABLE `akomodasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `informasis`
--
ALTER TABLE `informasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabulasis`
--
ALTER TABLE `tabulasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akomodasis`
--
ALTER TABLE `akomodasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasis`
--
ALTER TABLE `informasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tabulasis`
--
ALTER TABLE `tabulasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
