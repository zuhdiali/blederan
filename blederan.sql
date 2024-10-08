-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 08, 2024 at 09:02 AM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `akomodasis`
--

CREATE TABLE `akomodasis` (
  `id` int NOT NULL,
  `nama_akomodasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `harga` int NOT NULL,
  `stok` int DEFAULT NULL,
  `url_gambar` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nama_pemilik` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `kontak_pemilik` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(5, '2024_10_05_051950_create_admins_table', 1),
(6, '2024_10_07_041943_nambah_user_admin', 2),
(7, '2024_10_08_002812_tambah_tabel_tabulasis', 2);

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
  `id` int NOT NULL,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `harga` int NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `stok` int NOT NULL,
  `url_gambar` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nama_penjual` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `kontak_penjual` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabulasis`
--

CREATE TABLE `tabulasis` (
  `id` int NOT NULL,
  `judul_tabel` varchar(255) NOT NULL,
  `data` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `kategori` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabulasis`
--

INSERT INTO `tabulasis` (`id`, `judul_tabel`, `data`, `tanggal`, `kategori`) VALUES
(1, 'Jumlah Penduduk Menurut Kelompok Umur di Desa/Kelurahan BLEDERAN Tahun 2024', '[{\"Kelompok Umur\":\"0-4 Tahun\",\"Laki-Laki\":41,\"Perempuan\":30,\"Jumlah\":71},{\"Kelompok Umur\":\"5-9 Tahun\",\"Laki-Laki\":143,\"Perempuan\":115,\"Jumlah\":258},{\"Kelompok Umur\":\"10-14 Tahun\",\"Laki-Laki\":155,\"Perempuan\":143,\"Jumlah\":298},{\"Kelompok Umur\":\"15-19 Tahun\",\"Laki-Laki\":139,\"Perempuan\":108,\"Jumlah\":248},{\"Kelompok Umur\":\"20-24 Tahun\",\"Laki-Laki\":138,\"Perempuan\":112,\"Jumlah\":250},{\"Kelompok Umur\":\"25-29 Tahun\",\"Laki-Laki\":128,\"Perempuan\":125,\"Jumlah\":256},{\"Kelompok Umur\":\"30-34 Tahun\",\"Laki-Laki\":119,\"Perempuan\":129,\"Jumlah\":248},{\"Kelompok Umur\":\"35-39 Tahun\",\"Laki-Laki\":136,\"Perempuan\":118,\"Jumlah\":256},{\"Kelompok Umur\":\"40-44 Tahun\",\"Laki-Laki\":130,\"Perempuan\":119,\"Jumlah\":249},{\"Kelompok Umur\":\"45-49 Tahun\",\"Laki-Laki\":116,\"Perempuan\":109,\"Jumlah\":225},{\"Kelompok Umur\":\"50-54 Tahun\",\"Laki-Laki\":107,\"Perempuan\":92,\"Jumlah\":200},{\"Kelompok Umur\":\"55-59 Tahun\",\"Laki-Laki\":91,\"Perempuan\":97,\"Jumlah\":188},{\"Kelompok Umur\":\"60-64 Tahun\",\"Laki-Laki\":76,\"Perempuan\":59,\"Jumlah\":135},{\"Kelompok Umur\":\"65-69 Tahun\",\"Laki-Laki\":51,\"Perempuan\":42,\"Jumlah\":93},{\"Kelompok Umur\":\"70-74 Tahun\",\"Laki-Laki\":40,\"Perempuan\":16,\"Jumlah\":57},{\"Kelompok Umur\":\"75+ Tahun\",\"Laki-Laki\":41,\"Perempuan\":36,\"Jumlah\":77},{\"Kelompok Umur\":\"Blederan\",\"Laki-Laki\":1651,\"Perempuan\":1450,\"Jumlah\":3109}]', '2024-10-07 04:25:57', 1),
(8, 'Status Penguasaan Bangunan Tempat Tinggal yang Ditempati di Desa/Kelurahan BLEDERAN Tahun 2024', '[{\"Status\":\"Milik Sendiri\",\"Jumlah\":665,\"Persen\":\"83,02\"},{\"Status\":\"Kontrak/Sewa\",\"Jumlah\":6,\"Persen\":\"0,75\"},{\"Status\":\"Bebas Sewa\",\"Jumlah\":130,\"Persen\":\"16,23\"},{\"Status\":\"Dinas\",\"Jumlah\":0,\"Persen\":\"-\"},{\"Status\":\"Lainnya\",\"Jumlah\":0,\"Persen\":\"-\"},{\"Status\":\"Blederan\",\"Jumlah\":801,\"Persen\":100}]', '2024-10-07 07:02:16', 2),
(9, 'Tabel 1 Jumlah Penduduk Menurut Suku di Desa/Kelurahan BLEDERAN Tahun 2024', '[\r\n    {\r\n        \"Suku\": \"\'(1)\",\r\n        \"Jumlah\": \"\'(2)\"\r\n    },\r\n    {\r\n        \"Suku\": \"Arab\",\r\n        \"Jumlah\": 1\r\n    },\r\n    {\r\n        \"Suku\": \"India\",\r\n        \"Jumlah\": 2\r\n    },\r\n    {\r\n        \"Suku\": \"Jawa\",\r\n        \"Jumlah\": 3095\r\n    },\r\n    {\r\n        \"Suku\": \"Madura\",\r\n        \"Jumlah\": 8\r\n    },\r\n    {\r\n        \"Suku\": \"Melayu\",\r\n        \"Jumlah\": 1\r\n    },\r\n    {\r\n        \"Suku\": \"Minang\",\r\n        \"Jumlah\": 1\r\n    },\r\n    {\r\n        \"Suku\": \"Sunda\",\r\n        \"Jumlah\": 1\r\n    },\r\n    {\r\n        \"Suku\": \"Blederan\",\r\n        \"Jumlah\": 3109\r\n    }\r\n]', '2024-10-07 07:30:32', 1),
(10, 'Tabel 1 Jumlah Penduduk Menurut Agama di Desa/Kelurahan BLEDERAN Tahun 2024', '[\r\n    {\r\n        \"Agama\": -1,\r\n        \"Jumlah\": -2\r\n    },\r\n    {\r\n        \"Agama\": \"Islam\",\r\n        \"Jumlah\": 3102\r\n    },\r\n    {\r\n        \"Agama\": \"Kristen\",\r\n        \"Jumlah\": 2\r\n    },\r\n    {\r\n        \"Agama\": \"Katolik\",\r\n        \"Jumlah\": 5\r\n    },\r\n    {\r\n        \"Agama\": \"Blederan\",\r\n        \"Jumlah\": 3109\r\n    }\r\n]', '2024-10-07 07:29:43', 1),
(11, 'Tabel 18 Jumlah Penduduk Wanita Umur 10-49 Tahun yang Berstatus Kawin Menurut Penggunaan Alat KB di Desa/Kelurahan BLEDERAN Tahun 2024', '[\r\n    {\r\n        \"PenggunaanAlatKB\": \"*(1)\",\r\n        \"Jumlah\": \"*(2)\",\r\n        \"Persentase\": \"*(3)\"\r\n    },\r\n    {\r\n        \"PenggunaanAlatKB\": \"MOW/Tubektomi\",\r\n        \"Jumlah\": 10,\r\n        \"Persentase\": \"3,88%\"\r\n    },\r\n    {\r\n        \"PenggunaanAlatKB\": \"MOP/Vasektomi\",\r\n        \"Jumlah\": 9,\r\n        \"Persentase\": \"3,49%\"\r\n    },\r\n    {\r\n        \"PenggunaanAlatKB\": \"AKDR/IUD/Spiral\",\r\n        \"Jumlah\": 35,\r\n        \"Persentase\": \"13,57%\"\r\n    },\r\n    {\r\n        \"PenggunaanAlatKB\": \"Suntikan KB\",\r\n        \"Jumlah\": 124,\r\n        \"Persentase\": \"48,06%\"\r\n    },\r\n    {\r\n        \"PenggunaanAlatKB\": \"Susuk KB/Norplan/Implanon/Alwalit\",\r\n        \"Jumlah\": 53,\r\n        \"Persentase\": \"20,54%\"\r\n    },\r\n    {\r\n        \"PenggunaanAlatKB\": \"Pil KB\",\r\n        \"Jumlah\": 10,\r\n        \"Persentase\": \"3,88%\"\r\n    },\r\n    {\r\n        \"PenggunaanAlatKB\": \"Kondom/Karet KB\",\r\n        \"Jumlah\": 9,\r\n        \"Persentase\": \"3,49%\"\r\n    },\r\n    {\r\n        \"PenggunaanAlatKB\": \"Intraveg/Tisue/Kondom Wanita\",\r\n        \"Jumlah\": 0,\r\n        \"Persentase\": \"0,00%\"\r\n    },\r\n    {\r\n        \"PenggunaanAlatKB\": \"Cara Tradisional\",\r\n        \"Jumlah\": 8,\r\n        \"Persentase\": \"3,10%\"\r\n    },\r\n    {\r\n        \"PenggunaanAlatKB\": \"Blederan\",\r\n        \"Jumlah\": 258,\r\n        \"Persentase\": \"100,00%\"\r\n    }\r\n]', '2024-10-07 07:36:57', 3),
(12, 'Tabel 19 Jumlah Penduduk Menurut Jenis Cacat di Desa/Kelurahan BLEDERAN Tahun 2024', '[\r\n    {\r\n        \"JenisCacat\": \"*(1)\",\r\n        \"Jumlah\": \"*(2)\",\r\n        \"Persentase\": \"*(3)\"\r\n    },\r\n    {\r\n        \"JenisCacat\": \"Tuna daksa/cacat tubuh\",\r\n        \"Jumlah\": 20,\r\n        \"Persentase\": \"68,97%\"\r\n    },\r\n    {\r\n        \"JenisCacat\": \"Tuna netra/buta\",\r\n        \"Jumlah\": 3,\r\n        \"Persentase\": \"10,34%\"\r\n    },\r\n    {\r\n        \"JenisCacat\": \"Tuna rungu\",\r\n        \"Jumlah\": 0,\r\n        \"Persentase\": \"0,00%\"\r\n    },\r\n    {\r\n        \"JenisCacat\": \"Tuna wicara\",\r\n        \"Jumlah\": 1,\r\n        \"Persentase\": \"3,45%\"\r\n    },\r\n    {\r\n        \"JenisCacat\": \"Tuna rungu & wicara\",\r\n        \"Jumlah\": 0,\r\n        \"Persentase\": \"0,00%\"\r\n    },\r\n    {\r\n        \"JenisCacat\": \"Tuna netra & cacat tubuh\",\r\n        \"Jumlah\": 1,\r\n        \"Persentase\": \"3,45%\"\r\n    },\r\n    {\r\n        \"JenisCacat\": \"Tuna netra, rungu, & wicara\",\r\n        \"Jumlah\": 0,\r\n        \"Persentase\": \"0,00%\"\r\n    },\r\n    {\r\n        \"JenisCacat\": \"Tuna rungu, wicara, & cacat tubuh\",\r\n        \"Jumlah\": 1,\r\n        \"Persentase\": \"3,45%\"\r\n    },\r\n    {\r\n        \"JenisCacat\": \"Tuna rungu, wicara, netra, & cacat tubuh\",\r\n        \"Jumlah\": 0,\r\n        \"Persentase\": \"0,00%\"\r\n    },\r\n    {\r\n        \"JenisCacat\": \"Cacat mental retardasi\",\r\n        \"Jumlah\": 2,\r\n        \"Persentase\": \"6,90%\"\r\n    },\r\n    {\r\n        \"JenisCacat\": \"Mantan penderita gangguan jiwa\",\r\n        \"Jumlah\": 0,\r\n        \"Persentase\": \"0,00%\"\r\n    },\r\n    {\r\n        \"JenisCacat\": \"Cacat fisik & mental\",\r\n        \"Jumlah\": 1,\r\n        \"Persentase\": \"3,45%\"\r\n    },\r\n    {\r\n        \"JenisCacat\": \"Blederan\",\r\n        \"Jumlah\": 29,\r\n        \"Persentase\": \"100,00%\"\r\n    }\r\n]', '2024-10-07 07:41:11', 3),
(13, 'Tabel 3 Jumlah Keluarga Menurut Luas Lantai di Desa/Kelurahan BLEDERAN Tahun 2024', '[\n    {\n        \"JenisDinding\": \"*(1)\",\n        \"Jumlah\": \"*(2)\",\n        \"Persen\": -2\n    },\n    {\n        \"JenisDinding\": \"Tembok\",\n        \"Jumlah\": 715,\n        \"Persen\": 88.6\n    },\n    {\n        \"JenisDinding\": \"Plesteran Anyaman Bambu/Kawat\",\n        \"Jumlah\": 4,\n        \"Persen\": 0.5\n    },\n    {\n        \"JenisDinding\": \"Kayu\",\n        \"Jumlah\": 87,\n        \"Persen\": 10.78\n    },\n    {\n        \"JenisDinding\": \"Anyaman Bambu\",\n        \"Jumlah\": 0,\n        \"Persen\": \" -   \"\n    },\n    {\n        \"JenisDinding\": \"Batang Kayu\",\n        \"Jumlah\": 0,\n        \"Persen\": \" -   \"\n    },\n    {\n        \"JenisDinding\": \"Bambu\",\n        \"Jumlah\": 0,\n        \"Persen\": \" -   \"\n    },\n    {\n        \"JenisDinding\": \"Lainnya\",\n        \"Jumlah\": 1,\n        \"Persen\": 0.12\n    },\n    {\n        \"JenisDinding\": \"Blederan\",\n        \"Jumlah\": 807,\n        \"Persen\": 100\n    }\n]', '2024-10-07 07:34:28', 2),
(14, 'Tabel 5 Jumlah Keluarga Menurut Jenis Dinding Terluas di Desa/Kelurahan BLEDERAN Tahun 2024', '[\r\n    {\r\n        \"JenisDinding\": \"*(1)\",\r\n        \"Jumlah\": \"*(2)\",\r\n        \"Persen\": \"*(2)\"\r\n    },\r\n    {\r\n        \"JenisDinding\": \"Tembok\",\r\n        \"Jumlah\": 715,\r\n        \"Persen\": 88.6\r\n    },\r\n    {\r\n        \"JenisDinding\": \"Plesteran Anyaman Bambu/Kawat\",\r\n        \"Jumlah\": 4,\r\n        \"Persen\": 0.5\r\n    },\r\n    {\r\n        \"JenisDinding\": \"Kayu\",\r\n        \"Jumlah\": 87,\r\n        \"Persen\": 10.78\r\n    },\r\n    {\r\n        \"JenisDinding\": \"Anyaman Bambu\",\r\n        \"Jumlah\": 0,\r\n        \"Persen\": \" -   \"\r\n    },\r\n    {\r\n        \"JenisDinding\": \"Batang Kayu\",\r\n        \"Jumlah\": 0,\r\n        \"Persen\": \" -   \"\r\n    },\r\n    {\r\n        \"JenisDinding\": \"Bambu\",\r\n        \"Jumlah\": 0,\r\n        \"Persen\": \" -   \"\r\n    },\r\n    {\r\n        \"JenisDinding\": \"Lainnya\",\r\n        \"Jumlah\": 1,\r\n        \"Persen\": 0.12\r\n    },\r\n    {\r\n        \"JenisDinding\": \"Blederan\",\r\n        \"Jumlah\": 807,\r\n        \"Persen\": 100\r\n    }\r\n]', '2024-10-07 07:43:01', 2),
(15, 'Tabel 22 Jumlah Penduduk Usia 5 Tahun ke Atas Menurut Partisipasi Sekolah di Desa/Kelurahan BLEDERAN Tahun 2024', '[{\r\n        \"PartisipasiSekolah\": \"*(1)\",\r\n        \"Jumlah\": \"*(2)\",\r\n        \"Persentase\": \"*(3)\"\r\n    },\r\n    {\r\n        \"PartisipasiSekolah\": \"Tidak/belum pernah sekolah\",\r\n        \"Jumlah\": 93,\r\n        \"Persentase\": \"3,68%\"\r\n    },\r\n    {\r\n        \"PartisipasiSekolah\": \"Masih sekolah\",\r\n        \"Jumlah\": 612,\r\n        \"Persentase\": \"24,19%\"\r\n    },\r\n    {\r\n        \"PartisipasiSekolah\": \"Tidak bersekolah lagi\",\r\n        \"Jumlah\": 1825,\r\n        \"Persentase\": \"72,13%\"\r\n    },\r\n    {\r\n        \"PartisipasiSekolah\": \"Blederan\",\r\n        \"Jumlah\": 2530,\r\n        \"Persentase\": \"100,00%\"\r\n    }\r\n]', '2024-10-07 07:42:53', 4),
(16, 'Tabel 23 Jumlah Penduduk Usia 5 Tahun ke Atas Menurut Ijazah Tertinggi yang Dimiliki di Desa/Kelurahan BLEDERAN Tahun 2024', '[{\r\n        \"IjazahTertinggiyangDimiliki\": \"*(1)\",\r\n        \"Jumlah\": \"*(2)\",\r\n        \"Persentase\": \"*(3)\"\r\n    },\r\n    {\r\n        \"IjazahTertinggiyangDimiliki\": \"Tidak punya ijazah\",\r\n        \"Jumlah\": 368,\r\n        \"Persentase\": \"15,29%\"\r\n    },\r\n    {\r\n        \"IjazahTertinggiyangDimiliki\": \"SD/sederajat\",\r\n        \"Jumlah\": 1006,\r\n        \"Persentase\": \"41,79%\"\r\n    },\r\n    {\r\n        \"IjazahTertinggiyangDimiliki\": \"SMP/sederajat\",\r\n        \"Jumlah\": 451,\r\n        \"Persentase\": \"18,74%\"\r\n    },\r\n    {\r\n        \"IjazahTertinggiyangDimiliki\": \"SMA/sederajat\",\r\n        \"Jumlah\": 434,\r\n        \"Persentase\": \"18,03%\"\r\n    },\r\n    {\r\n        \"IjazahTertinggiyangDimiliki\": \"D1/D2/D3\",\r\n        \"Jumlah\": 26,\r\n        \"Persentase\": \"1,08%\"\r\n    },\r\n    {\r\n        \"IjazahTertinggiyangDimiliki\": \"D4/S1\",\r\n        \"Jumlah\": 117,\r\n        \"Persentase\": \"4,86%\"\r\n    },\r\n    {\r\n        \"IjazahTertinggiyangDimiliki\": \"S2/S3\",\r\n        \"Jumlah\": 5,\r\n        \"Persentase\": \"0,21%\"\r\n    },\r\n    {\r\n        \"IjazahTertinggiyangDimiliki\": \"Blederan\",\r\n        \"Jumlah\": 2407,\r\n        \"Persentase\": \"100,00%\"\r\n    }]', '2024-10-07 08:02:18', 4),
(17, 'Tabel 4 Jumlah Keluarga Menurut Jenis Lantai Terluas di Desa/Kelurahan BLEDERAN Tahun 2024\r\n\r\n    \r\n\r\n  \r\n    \r\n', '[\r\n    {\r\n        \"JenisLantai\": \"*(1)\",\r\n        \"Jumlah\": \"*(2)\",\r\n        \"Persen\": \"*(3)\"\r\n    },\r\n    {\r\n        \"JenisLantai\": \"Marmer/Granit\",\r\n        \"Jumlah\": 8,\r\n        \"Persen\": 0.99\r\n    },\r\n    {\r\n        \"JenisLantai\": \"Keramik\",\r\n        \"Jumlah\": 404,\r\n        \"Persen\": 50.12\r\n    },\r\n    {\r\n        \"JenisLantai\": \"Parket/Vinil/Permadani\",\r\n        \"Jumlah\": 0,\r\n        \"Persen\": \" -   \"\r\n    },\r\n    {\r\n        \"JenisLantai\": \"Ubin/Tegel/Teraso\",\r\n        \"Jumlah\": 70,\r\n        \"Persen\": 8.68\r\n    },\r\n    {\r\n        \"JenisLantai\": \"Kayu/Papan Kualitas Tinggi\",\r\n        \"Jumlah\": 0,\r\n        \"Persen\": \" -   \"\r\n    },\r\n    {\r\n        \"JenisLantai\": \"Semen/Bata Merah\",\r\n        \"Jumlah\": 308,\r\n        \"Persen\": 38.21\r\n    },\r\n    {\r\n        \"JenisLantai\": \"Bambu\",\r\n        \"Jumlah\": 0,\r\n        \"Persen\": \" -   \"\r\n    },\r\n    {\r\n        \"JenisLantai\": \"Kayu/Papan Kualitas Rendah\",\r\n        \"Jumlah\": 0,\r\n        \"Persen\": \" -   \"\r\n    },\r\n    {\r\n        \"JenisLantai\": \"Tanah\",\r\n        \"Jumlah\": 12,\r\n        \"Persen\": 1.49\r\n    },\r\n    {\r\n        \"JenisLantai\": \"Lainnya\",\r\n        \"Jumlah\": 4,\r\n        \"Persen\": 0.5\r\n    },\r\n    {\r\n        \"JenisLantai\": \"Blederan\",\r\n        \"Jumlah\": 806,\r\n        \"Persen\": 100\r\n    }\r\n]', '2024-10-07 07:46:28', 2),
(18, 'Tabel 24 Jumlah Penduduk Usia 5 Tahun ke Atas Menurut Lapangan Usaha di Desa/Kelurahan BLEDERAN Tahun 2024', '\r\n    [{\r\n        \"PekerjaanMenurutLapanganUsaha\": \"*(1)\",\r\n        \"Jumlah\": \"*(2)\"\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Pertanian tanaman padi & palawija\",\r\n        \"Jumlah\": 73\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Hortikultura\",\r\n        \"Jumlah\": 174\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Perkebunan\",\r\n        \"Jumlah\": 5\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Perikanan tangkap\",\r\n        \"Jumlah\": 6\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Perikanan budidaya\",\r\n        \"Jumlah\": 1\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Peternakan\",\r\n        \"Jumlah\": 13\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Kehutanan & pertanian lainnya\",\r\n        \"Jumlah\": 0\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Pertambangan/penggalian\",\r\n        \"Jumlah\": 12\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Industri pengolahan\",\r\n        \"Jumlah\": 60\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Listrik & gas\",\r\n        \"Jumlah\": 7\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Bangunan/kontruksi\",\r\n        \"Jumlah\": 121\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Perdagangan\",\r\n        \"Jumlah\": 321\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Hotel & rumah makan\",\r\n        \"Jumlah\": 9\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Transportasi & pergudangan\",\r\n        \"Jumlah\": 75\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Informasi & komunikasi\",\r\n        \"Jumlah\": 11\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Keuangan & asuransi\",\r\n        \"Jumlah\": 15\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Jasa pendidikan\",\r\n        \"Jumlah\": 59\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Jasa kesehatan\",\r\n        \"Jumlah\": 8\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Jasa kemasyarakatan, pemerintah, & perorangan\",\r\n        \"Jumlah\": 33\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Pemulung\",\r\n        \"Jumlah\": 3\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"TKI\",\r\n        \"Jumlah\": 3\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Lainnya\",\r\n        \"Jumlah\": 170\r\n    },\r\n    {\r\n        \"PekerjaanMenurutLapanganUsaha\": \"Blederan\",\r\n        \"Jumlah\": 1179\r\n    }\r\n]', '2024-10-07 08:03:50', 5),
(19, 'Tabel 6 Jumlah Keluarga Menurut Jenis Atap Terluas di Desa/Kelurahan BLEDERAN Tahun 2024', '[{\r\n        \"JenisAtap\": \"*(1)\",\r\n        \"Jumlah\": \"*(2)\",\r\n        \"Persen\": \"*(2)\"\r\n    },\r\n    {\r\n        \"JenisAtap\": \"Beton/Genteng Beton\",\r\n        \"Jumlah\": 4,\r\n        \"Persen\": 0.5\r\n    },\r\n    {\r\n        \"JenisAtap\": \"Genteng Keramik\",\r\n        \"Jumlah\": 1,\r\n        \"Persen\": 0.12\r\n    },\r\n    {\r\n        \"JenisAtap\": \"Genteng Metal\",\r\n        \"Jumlah\": 3,\r\n        \"Persen\": 0.37\r\n    },\r\n    {\r\n        \"JenisAtap\": \"Genteng Tanah Liat\",\r\n        \"Jumlah\": 5,\r\n        \"Persen\": 0.62\r\n    },\r\n    {\r\n        \"JenisAtap\": \"Asbes\",\r\n        \"Jumlah\": 6,\r\n        \"Persen\": 0.74\r\n    },\r\n    {\r\n        \"JenisAtap\": \"Seng\",\r\n        \"Jumlah\": 788,\r\n        \"Persen\": 97.65\r\n    },\r\n    {\r\n        \"JenisAtap\": \"Sirap\",\r\n        \"Jumlah\": 0,\r\n        \"Persen\": \" -   \"\r\n    },\r\n    {\r\n        \"JenisAtap\": \"Bambu\",\r\n        \"Jumlah\": 0,\r\n        \"Persen\": \" -   \"\r\n    },\r\n    {\r\n        \"JenisAtap\": \"Jerami/Ijuk/Daun Daunan/Rumbia\",\r\n        \"Jumlah\": 0,\r\n        \"Persen\": \" -   \"\r\n    },\r\n    {\r\n        \"JenisAtap\": \"Lainnya\",\r\n        \"Jumlah\": 0,\r\n        \"Persen\": \" -   \"\r\n    },\r\n    {\r\n        \"JenisAtap\": \"Blederan\",\r\n        \"Jumlah\": 807,\r\n        \"Persen\": 100\r\n    }\r\n]', '2024-10-07 08:04:33', 2),
(20, 'Tabel 12 Jumlah Keluarga Menurut Penggunaan Fasilitas Tempat Buang Air Besar di Desa/Kelurahan BLEDERAN Tahun 2024', '[\n    {\n        \"FasilitasBAB\": \"Sendiri\",\n        \"Jumlah\": 735,\n        \"Persen\": 91.53\n    },\n    {\n        \"FasilitasBAB\": \"Bersama\",\n        \"Jumlah\": 43,\n        \"Persen\": 5.35\n    },\n    {\n        \"FasilitasBAB\": \"Umum\",\n        \"Jumlah\": 25,\n        \"Persen\": 3.11\n    },\n    {\n        \"FasilitasBAB\": \"Tidak Ada\",\n        \"Jumlah\": 0,\n        \"Persen\": \" -   \"\n    },\n    {\n        \"FasilitasBAB\": \"Blederan\",\n        \"Jumlah\": 803,\n        \"Persen\": 100\n    }\n]', '2024-10-07 08:12:21', 2),
(21, 'Tabel 13 Jumlah Keluarga Menurut Jenis Kloset di Desa/Kelurahan BLEDERAN Tahun 2024', '[\r\n    {\r\n        \"JenisKloset\": \"*(1)\",\r\n        \"Jumlah\": \"*(2)\",\r\n        \"Persen\": \"*(2)\"\r\n    },\r\n    {\r\n        \"JenisKloset\": \"Leher Angsa\",\r\n        \"Jumlah\": 621,\r\n        \"Persen\": 78.51\r\n    },\r\n    {\r\n        \"JenisKloset\": \"Plengsengan\",\r\n        \"Jumlah\": 133,\r\n        \"Persen\": 16.81\r\n    },\r\n    {\r\n        \"JenisKloset\": \"Cemplung/Cubluk\",\r\n        \"Jumlah\": 33,\r\n        \"Persen\": 4.17\r\n    },\r\n    {\r\n        \"JenisKloset\": \"Tidak Pakai\",\r\n        \"Jumlah\": 4,\r\n        \"Persen\": 0.51\r\n    },\r\n    {\r\n        \"JenisKloset\": \"Blederan\",\r\n        \"Jumlah\": 791,\r\n        \"Persen\": 100\r\n    }\r\n]', '2024-10-07 08:14:31', 2);

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
(1, 'Admin', 'admin@admin.com', NULL, '$2y$12$6ekc3z.Bjm8BEgs6Y7GXS.ofik70Fp8I5qo/rrOVcbWAOTCow0nKe', NULL, '2024-10-06 21:14:03', '2024-10-06 21:14:03'),
(2, 'Zuhdi Ali Hisyam', 'zuhdi@zuhdi.com', NULL, '$2y$12$3SwXpH/c.aor2A0Lnk4D/.chRnc/XYrdVEqoYEf0GFUbJ1bEGiouu', NULL, '2024-10-08 01:44:52', '2024-10-08 01:44:52'),
(3, 'Fahmi Saputra', 'fahmi@fahmi.com', NULL, '$2y$12$NcKYTMiCPDKh3.SuohWBwuwtE5P/BuLU3wLxnrzj6qPJ9bZJyqHSy', NULL, '2024-10-08 01:45:12', '2024-10-08 01:45:12'),
(4, 'Zuhdi Ali Hisyam', 'hisyam@hisyam.com', NULL, '$2y$12$JihDdw6CRqxB94L1QZbhYujk53LIuF7eLXeIX0nXlBSEcOCsDcqw.', NULL, '2024-10-08 01:45:25', '2024-10-08 01:45:25'),
(5, 'Novi Hardianto', 'novi@novi.com', NULL, '$2y$12$vCydnD6SuEtEM3cUcr7CAOeFU86lEQWyHVl/DQnstlIAIb2UeN/V.', NULL, '2024-10-08 01:45:36', '2024-10-08 01:45:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akomodasis`
--
ALTER TABLE `akomodasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `akomodasis`
--
ALTER TABLE `akomodasis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabulasis`
--
ALTER TABLE `tabulasis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
