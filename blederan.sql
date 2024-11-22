-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2024 at 09:28 AM
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
  `id_desa` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_akomodasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint NOT NULL,
  `stok` int NOT NULL,
  `gambar_akomodasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_pemilik` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kontak_pemilik` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akomodasis`
--

INSERT INTO `akomodasis` (`id`, `id_desa`, `nama_akomodasi`, `harga`, `stok`, `gambar_akomodasi`, `nama_pemilik`, `kontak_pemilik`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, '110014', 'Penginapan Mas Hisyam', 200000, 50, '1728530242.jpg', 'Zuhdi Ali Hisyam', '082328839199', 'Penginapan Mantab', '2024-10-09 20:11:04', '2024-10-09 23:29:49'),
(2, '110014', 'Penginapan Mas Zuhdi', 200000, 50, '1728541892.jpg', 'Zuhdi Ali Hisyam', '082328839199', 'Penginapan Mantab', '2024-10-09 20:11:04', '2024-10-09 23:31:32'),
(3, '110014', 'Penginapan Mas Ali', 200000, 50, '1728541760.jpg', 'Zuhdi Ali Hisyam', '082328839199', 'Penginapan Mantab', '2024-10-09 20:11:04', '2024-10-09 23:29:20'),
(4, '110014', 'Penginapan Mas Hisyam', 200000, 50, '1728530242.jpg', 'Zuhdi Ali Hisyam', '082328839199', 'Penginapan Mantab', '2024-10-09 20:11:04', '2024-10-09 23:29:56'),
(5, '110014', 'Penginapan Mas Zuhdi', 200000, 50, '1728541905.jpg', 'Zuhdi Ali Hisyam', '082328839199', 'Penginapan Mantab', '2024-10-09 20:11:04', '2024-10-09 23:31:45'),
(6, '110014', 'Kos Mas Hisyam', 200000, 50, '1728530242.jpg', 'Zuhdi Ali Hisyam', '082328839199', 'Penginapan Mantab', '2024-10-09 20:11:04', '2024-10-09 23:30:33');

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
-- Table structure for table `environments`
--

CREATE TABLE `environments` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_desa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_desa` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna_font_logo` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#FFFFFF',
  `ada_sejarah` tinyint(1) NOT NULL DEFAULT '0',
  `sejarah` text COLLATE utf8mb4_unicode_ci,
  `ada_peta` tinyint(1) NOT NULL DEFAULT '0',
  `peta` text COLLATE utf8mb4_unicode_ci,
  `ada_publikasi` tinyint(1) NOT NULL DEFAULT '0',
  `ada_akomodasi` tinyint(1) NOT NULL DEFAULT '0',
  `ada_produk` tinyint(1) NOT NULL DEFAULT '0',
  `ada_eduwisata` tinyint(1) NOT NULL DEFAULT '0',
  `ada_jadwal` tinyint(1) NOT NULL DEFAULT '0',
  `bg_utama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'bg_utama.jpg',
  `bg_kabar_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'banner-01.jpg',
  `bg_kabar_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'banner-02.jpg',
  `bg_kabar_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'banner-03.jpg',
  `bg_kabar_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'banner-04.jpg',
  `bg_data_kependudukan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'banner-01.jpg',
  `bg_data_perumahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'banner-02.jpg',
  `bg_data_kesehatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'banner-03.jpg',
  `bg_data_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'banner-04.jpg',
  `facebook_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maps_desa` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maps_kantor_desa` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `environments`
--

INSERT INTO `environments` (`id`, `nama_desa`, `id_desa`, `tagline`, `gambar_logo`, `warna_font_logo`, `ada_sejarah`, `sejarah`, `ada_peta`, `peta`, `ada_publikasi`, `ada_akomodasi`, `ada_produk`, `ada_eduwisata`, `ada_jadwal`, `bg_utama`, `bg_kabar_1`, `bg_kabar_2`, `bg_kabar_3`, `bg_kabar_4`, `bg_data_kependudukan`, `bg_data_perumahan`, `bg_data_kesehatan`, `bg_data_pendidikan`, `facebook_username`, `instagram_username`, `twitter_username`, `youtube_username`, `facebook_url`, `instagram_url`, `twitter_url`, `youtube_url`, `maps_desa`, `maps_kantor_desa`, `created_at`, `updated_at`) VALUES
(1, 'Blederan', '110014', 'Kampung Sayur Organik', 'logo_blederan.svg', '#00A79D', 1, '            <div class=\"row\">\n                <div class=\"col\">\n                <div class=\"section-heading\">\n                    <h2>Sejarah Desa Blederan</h2>\n                        <ul class=\"nav\">\n                            <li class=\"nav-item px-2 text-secondary\">\n                                <i class=\"fa fa-user\"></i> Tim Pengembang\n                            </li>\n                            <li class=\"nav-item px-2 text-secondary\">\n                                <i class=\"fa fa-calendar\"></i> 3 Oktober 2024\n                            </li>\n                        </ul>\n                </div>\n                </div>\n            </div>\n\n            <div class=\"row\">\n                <div class=\"col-lg-6\">\n                    <img src=\"{{asset(\'images/sejarah.jpg\')}}\" class=\"img-fluid pb-5\" alt=\"image\">\n                </div>\n            </div>\n\n                <p>\n                    <strong>\n                        A. Asal Usul Pembentukan Desa\n                    </strong>\n                </p>\n\n                <br>\n                <p>\n                    Desa Blederan berdiri pada tahun yang tidak diketahui sejarahnya, diperkirakan berdiri setelah terjadi perang Diponegoro melawan Belanda dan sebelum Indonesia merdeka tahun 1945, hal ini berdasar dari cerita bahwa Lurah pertama di Desa Blederan di ketahui tahun 1912.\n                </p>\n\n                <br>\n                <p>\n                    Pemerintah Desa Blederan sampai saat ini belum menemukan dokumen dan bukti sejarah yang menyebutkan kapan tahun berdirinya Desa Blederan. Sejarah Desa Blederan hanya dapat di telusuri melalui cerita lisan yang berkembang secara turun temurun di tengah masyarakat khususnya tokoh sepuh masyarakat, bahwa Lurah pertama Desa Blederan berasal dari Yogyakarta.\n                </p>\n\n                <br>\n                <p>\n                    Menurut cerita dari Bapak Bahrudin selaku tokoh sepuh Desa Blederan dan juga mantan Bau/Kadus Dusun Blederan menerangkan bahwa Desa Blederan pada awalnya masuk wilayah Kecamatan Garung dan sejak tahun 1935 masuk wilayah Kecamatan Mojotengah. Di ceritakan pula bahwa Desa Blederan pada awalnya merupakan tempat musyawarah untuk menyusun strategi perang dan sebagai tempat untuk berlaga/perang adalah di Dusun Klesman.\n                </p>\n\n                <br>\n                <p>\n                    Sejarah ini ditulis berdasarkan cerita secara turun temurun, dan salah satu narasumber yang menjadi rujukan penulisan sejarah Desa Blederan adalah mantan Bau/Kadus Dusun Blederan periode 1972 – 2005 yaitu Bapak Bahrudin yang lahir di Wonosobo pada tanggal 5 April 1930, yang  menceritakan sejarah Desa Blederan kepada Sekdes Blederan periode sekarang yaitu Bapak Masrukhin.\n                </p>\n\n                <br>\n                <p>\n                    <strong>\n                        B. Pemimpin Desa\n                    </strong>\n                </p>\n\n                <br>\n                <p>\n                    <strong>\n                        1. RADEN KARTA DIMEJA : Periode Sampai Tahun 1912\n                    </strong>\n                </p>\n\n                <br>\n                <p>\n                    Raden Karta Dimeja berasal dari Yogyakarta keturunan bangsawan kraton, Beliau merupakan Lurah pertama Desa Blederan, pada masanya di Desa Blederan terdapat perwakilan Kantor Bank milik Negara, untuk kondisi desa belum tertata dengan baik.\n                </p>\n\n                <br>\n                <p>\n                    <strong>\n                        2. RADEN DANU SUWONDO : Periode 1912 – 1926\n                    </strong>\n                </p>\n\n                <br>\n                <p>\n                    Raden Danu Suwondo adalah putra dari Raden Karta Dimeja, Beliau menjadi Lurah karena menggantikan Ayahnya. Pada masa itu kondisi Desa Blederan juga belum tertata dengan baik. Adapun Carik pada waktu itu adalah Bapak Tarmorejo, Beliau adalah Ayah dari Bapak Bahrudin.\n                </p>\n\n                <br>\n                <p>\n                    <strong>\n                        3. NGARADI : Periode 1926 – 1930\n                    </strong>\n                </p>\n\n                <br>\n                <p>\n                    Pada waktu Lurah Ngaradi kondisi Desa Blederan juga belum tertata dengan baik dan untuk carik pada waktu itu masih di jabat oleh Bapak Tarmorejo.\n                </p>\n                <br>\n                <p>\n                    <strong>\n                        4. MINHAD : Periode 1930 – 1932\n                    </strong>\n                </p>\n\n                <br>\n                <p>\n                    Pada waktu Lurah Minhad kondisi Desa Blederan juga belum tertata dengan baik. Adapun Carik pada waktu itu masih di jabat oleh Bapak Tarmorejo.\n                </p>\n\n                <br>\n                <p>\n                    <strong>\n                        5. H. DAHLAN : Periode 1932 – 1950\n                    </strong>\n                </p>\n\n                <br>\n                <p>\n                    Pada waktu Lurah H. Dahlan kondisi Desa Blederan sudah mulai merintis pembangunan desa dengan mulai di rintis pembuatan jalan setapak. Adapun Carik masih di jabat oleh Bapak Tarmorejo.\n                </p>\n\n                <br>\n                <p>\n                    <strong>\n                        6. SAKDUN : Periode 1950 – 1959\n                    </strong>\n                </p>\n\n                <br>\n                <p>\n                    Lurah Sakdun lahir di Wonosobo pada tahun 1920, pada waktu Lurah Sakdun kondisi Desa Blederan melanjutkan program dari Lurah H. Dahlan yaitu pembuatan jalan setapak dan pelebaran dan pembuatan jalan lingkungan Dusun Klesman sebelah utara, dimulainya pembuatan lapangan desa dan secara bertahap Desa Blederan sudah mulai tertata dengan baik dan dimulainya pembuatan jembatan masuk Dusun Klesman Desa Blederan. Adapun Carik pada waktu itu di jabat oleh Bapak Muhtar.\n                </p>\n\n                <br>\n                <p>\n                    <strong>\n                        7. SAKDULLAH : Periode 1959 – 1976\n                    </strong>\n                </p>\n\n                <br>\n                <p>\n                    Lurah Sakdullah lahir di Wonosobo pada tahun 1929, kondisi Desa Blederan mulai tertata, hal tersebut dibuktikan dengan pembuatan jembatan yang dilanjutkan, hal ini bukti bahwa pembangunan desa sudah mulai di rencanakan. Pada jamannya mulai dirintis adanya Pasar Desa dan lokasinya masih di pinggir jalan. Adapun Carik pada waktu itu di jabat oleh Bapak Samsuhadi dan selanjutnya sejak tahun 1972 jabatan Carik di jabat oleh Bapak Safrudin.\n                </p>\n\n                <br>\n                <p>\n                    <strong>\n                        8. AHMAD AFANDI : Periode 1976 – 1989\n                    </strong>\n                </p>\n\n                <br>\n                <p>\n                    Kepala Desa Ahmad Afandi lahir di Wonosobo pada tanggal 2 Mei 1944 Kondisi Desa Blederan sudah mulai, perencanaan pembangunan sudah mulai tersusun dan musyawarah dijalankan, hal ini dibuktikan dengan di bangunnya Kantor Desa di Dusun Klesman sebagai pusat pemerintahan Desa Blederan, adanya Listrik masuk desa dan pembuatan jalan lingkungan yang menghubungkan antar Rukun Warga dalam satu wilayah dusun. Kondisi Pasar Desa pada waktu itu sudah menempati lokasi di tanah bengkok. Carik masih di jabat oleh Bapak Safrudin, Lurah dan Carik bahu membahu dalam merencanakan dan melaksanakan pembangunan di desa, pembuatan lapangan sepak bola di lanjutkan dengan cara swadaya dari masyarakat dan juga pembangunan-pembangunan seperti pelebaran jalan lingkungan.\n                </p>\n\n                <br>\n                <p>\n                    <strong>\n                        9. RETNO HARINI : Periode 1989 – 1998\n                    </strong>\n                </p>\n\n                <br>\n                <p>\n                    Kepala Desa Retno Harini lahir di Wonosobo pada tanggal 24 Juli 1959. Pada waktu itu perencanaan pembangunan mulai tersusun, kelembagaan desa sudah terbentuk seperti : LKMD, Karang Taruna, RT dan RW. Musyawarah pembangunan desa mulai di jalankan dengan melibatkan unsur-unsur masyarakat. Sekdes pada waktu itu masih di jabat oleh Bapak Safrudin. Pada masanya berdiri Pasar Desa yang berlokasi di Jawar sehingga sampai sekarang di sebut Pasar Jawar. Kegiatan desa seperti peringatan HUT RI dilakanakan secara meriah dengan melibatkan warga masyarakat.  Pada saat itu juga pernah dilaksanakan lomba desa tingkat kecamatan dan kabupaten.\n                </p>\n\n                <br>\n                <p>\n                    <strong>\n                        10. MUTTAQIN : Periode 1998 – 2006\n                    </strong>\n                </p>\n\n                <br>\n                <p>\n                    Kepala Desa Muttaqin lahir di Wonosobo pada tanggal 19 Nopember 1972 dan Sekdes masih di jabat oleh Bapak Safrudin dan tahun 1999 jabatan Sekdes di pegang oleh Bapak Masrukhin sampai sekarang. Pada masanya kondisi Desa Blederan mulai di tata mulai dari perenicanaan dan pelaksanaan pembangunan, kelembagaan desa di tumbuhkembangkan menjadi bagian yang berpartisipasi dalam pembangunan desa. Lahirnya Undang-Undang Nomor 32 Tahun 2004 membawa konsekuensi bagi Desa Blederan untuk melengkapi  segala hal yang terkait dengan penyelenggaraan jalannya Pemerintahan Desa, dimulai dari penataan Pemerintah Desa dan Kelembagaannya dan juga adanya Badan Permusyawaran Desa (BPD) sebagai satu kesatuan dengan pemerintah desa menjalankan pemerintahannya. Pembangunan mulai di galakkan dari mulai rollag dan betonisasi jalan lingkungan, perbaikan jalan rotocol, senderan jalan protocol, rehab kantor desa dan pembuatan gedung serba guna, rehab pasar desa, pembenahan saluran irigasi, pembuatan jembatan tembus dan pengadaan air bersih Dusn Klesman dan Dusun Blederan. Adapun prestasi yang diraih pada waktu itu adalah : Pelunasan PBB sebelum jatuh tempo, Juara 1 Lomba Kantor Desa tingkat kecamatan, Juara 2 Lomba Desa tingkat kabupaten.\n                </p>\n\n                <br>\n                <p>\n                    <strong>\n                        11. H.M.MUTTAQIN : Periode 2006 – 2012\n                    </strong>\n                </p>\n\n                <br>\n                <p>\n                    Kepala Desa H.M.Muttaqin merupakan mantan Kepala Desa yang mencalonkan kembali dan terpilih untuk periode yang kedua. Pada masa kepemimpinannya telah banyak perubahan yang terjadi dari mulai pengaspalan jalan protocol dan betonisasi jalan lingkungan. Adapun prestasi yang di raih dari tingkat kecamatan dan tingkat kabupaten diantaranya : Juara 2 lomba Kantor Desa tingkat Kecamatan, Juara 1 terbaik pengelolaan ADD tingkat Kecamatan, mewakili Kabupaten Wonosobo lomba desa tingkat propinsi dan lomba pengelolaan PUAP terbaik, pemasangan jaringan internet untuk masyarakat, Juara 2 Lomba perpustakan tingkat kabupaten, Juara 1 Lomba perpustakaan tingkat kabupaten, Juara 1 Lomba perpustakaan desa tingkat propinsi, dan berbagai piala hasil kejuaran sepak bola tingkat kabupaten . Selain prestasi tersebut pada masanya telah dikedepankan transparansi di bidang pemerintahan, di selenggarakannya musyawarah dari mulai tingkat dusun sampai ke tingkat desa dengan melibatkan unsur yang ada di masyarakat secara partisipatif dan apresiatif.\n                </p>\n\n                <br>\n                <p>\n                    <strong>\n                        12. YUDI CAHYADI : Periode 2012 – 2018\n                    </strong>\n                </p>\n\n                <br>\n                <p>\n                    Kepala Desa Yudi Cahyadi lahir di Wonosobo pada tanggal 2 Desember 1982, pada saat sekarang ini melanjutkan program kegiatan pembangunan desa dari pemerintahan sebelumnya. Adanya Undang-Undang Nomor 6 tahun 2014 tentang Desa yang mana salah satu amanat UUDesa adalah dana yang besar yang bersumber dari APBN langsung ke desa, sehingga dengan dana yang besar memungkinkan desa untuk berbuat lebih banyak lagi untuk meningkatkan penyelenggaraan pemerintahan dan melaksanakan pembangunan di segala bidang. Betonisasi jalan lingkungan, senderan jalan dan irigasi, rehab pasar desa, pembuatan gapura desa, hal tersebut merupakan wujud nyata pembangunan di desa. Dan di tahun 2013 meraih juara 1 bidang otonomi desa tingkat Kabupaten Wonosobo sebagai Desa Hebat 2013.\n                </p>', 1, '            <div class=\"row\">\r\n                <div class=\"col\">\r\n                <div class=\"section-heading\">\r\n                    <h2>Peta Desa Blederan</h2>\r\n                        <ul class=\"nav\">\r\n                            <li class=\"nav-item px-2 text-secondary\">\r\n                                <i class=\"fa fa-user\"></i> Tim Pengembang\r\n                            </li>\r\n                            <li class=\"nav-item px-2 text-secondary\">\r\n                                <i class=\"fa fa-calendar\"></i> 3 Oktober 2024\r\n                            </li>\r\n                        </ul>\r\n                </div>\r\n                </div>\r\n            </div>\r\n        \r\n            <div class=\"row\">\r\n                <div class=\"col-lg-6\">\r\n                    <img src=\"{{asset(\'images/peta.jpg\')}}\" class=\"img-fluid pb-5 \" alt=\"image\">\r\n                </div>\r\n                <div class=\"col-lg-6\">\r\n                    \r\n                    <strong>A. Batas Wilayah</strong>\r\n                    <br>\r\n                    Batas Wilayah Desa Blederan Kecamatan Mojotengah sebagai berikut :\r\n                    <br>\r\n                    1.   Sebelah Utara     : berbatasan dengan Desa Sendangsari Kecamatan Garung\r\n                    <br>\r\n                    2.   Sebelah Timur     : berbatasan dengan Desa Gemblengan Kecamatan Garung\r\n                    <br>\r\n                    3.   Sebelah Selatan  : berbatasan dengan Desa Bumirejo Kecamatan Mojotengah\r\n                    <br>\r\n                    4.   Sebelah Barat      : berbatasan dengan Desa Wonokromo Kecamatan Mojotengah\r\n                    <br>\r\n                    <strong>B.  Peruntukan Lahan</strong>\r\n                    <br>\r\n                    Wilayah Desa Blederan sebagian besar merupakan tanah garapan berupa tanah sawah seluas 67 ha, dan sebagian kecil berupa tanah tegalan seluas 18 ha, pemukiman 22 ha, dengan hasil utama berupa padi dan sebagian sayuran berupa kobis, tomat dan cabe.\r\n\r\n                    <div class=\"col-lg-12 mt-5\">\r\n                        <div id=\"map\">\r\n                            {{-- <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5596.571297101213!2d109.91171212253252!3d-7.311868896386512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700a8e33f22365%3A0xd8a8af392da67ea3!2sBalai%20Desa%20%2F%20Kantor%20Kepala%20Desa%20Blederan!5e0!3m2!1sen!2sid!4v1727836245361!5m2!1sen!2sid\" width=\"100%\" height=\"550px\" style=\"border:0; border-radius: 23px; \" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe> --}}\r\n                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7914.758709209982!2d109.90955559484267!3d-7.3112100207867865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700a91c52ab135%3A0x2507636147492a01!2sBlederan%2C%20Kec.%20Mojotengah%2C%20Kabupaten%20Wonosobo%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1728960130020!5m2!1sid!2sid\" width=\"100%\" height=\"550px\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n\r\n            </div>\r\n\r\n', 1, 0, 1, 1, 1, 'bg-blederan-1.jpg', 'bg-blederan-2.jpg', 'bg-blederan-1.jpg', 'bg-blederan-2.jpg', 'bg-blederan-1.jpg', 'bg-blederan-2.jpg', 'bg-blederan-1.jpg', 'bg-blederan-2.jpg', 'bg-blederan-1.jpg', 'Pesona Blederan', 'desa_blederan', 'Desa Blederan', '', 'https://www.facebook.com/pesona.blederan', 'https://www.instagram.com/desa_blederan?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==', 'https://x.com/DBlederan', '', '<iframe src=\'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7914.758709209982!2d109.90955559484267!3d-7.3112100207867865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700a91c52ab135%3A0x2507636147492a01!2sBlederan%2C%20Kec.%20Mojotengah%2C%20Kabupaten%20Wonosobo%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1728960130020!5m2!1sid!2sid\' width=\'100%\' height=\'550px\' style=\'border:0;\' allowfullscreen=\'\' loading=\'lazy\' referrerpolicy=\'no-referrer-when-downgrade\'></iframe>', '<iframe src=\'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5596.571297101213!2d109.91171212253252!3d-7.311868896386512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700a8e33f22365%3A0xd8a8af392da67ea3!2sBalai%20Desa%20%2F%20Kantor%20Kepala%20Desa%20Blederan!5e0!3m2!1sen!2sid!4v1727836245361!5m2!1sen!2sid\' width=\'100%\' height=\'550px\' style=\'border:0; border-radius: 23px; \' allowfullscreen=\'\' loading=\'lazy\' referrerpolicy=\'no-referrer-when-downgrade\'></iframe>', '2024-11-20 19:11:42', '2024-11-20 19:11:42'),
(2, 'Dummy 5656', '999999', 'Tagline Dummy', 'admin.svg', '#80CAEF', 1, 'Sejarah Dummy', 1, 'Peta Dummy', 0, 1, 1, 1, 1, 'dummy.jpg', 'dummy.jpg', 'dummy.jpg', 'dummy.jpg', 'dummy.jpg', 'dummy.jpg', 'dummy.jpg', 'dummy.jpg', 'dummy.jpg', 'dummy', 'dummy', 'dummy', 'dummy', 'https://facebook.com/dummy', 'https://instagram.com/dummy', 'https://twitter.com/dummy', 'https://youtube.com/dummy', 'https://maps.google.com/maps?q=-7.2769,112.7916', 'https://maps.google.com/maps?q=-7.2769,112.7916', '2024-11-20 19:11:42', '2024-11-22 00:34:04');

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
  `id_desa` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi_terlibat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` tinyint NOT NULL,
  `tanggal` datetime NOT NULL,
  `tanggal_selesai` datetime DEFAULT NULL,
  `kategori` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informasis`
--

INSERT INTO `informasis` (`id`, `id_desa`, `judul`, `instansi_terlibat`, `jumlah`, `tanggal`, `tanggal_selesai`, `kategori`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, '110014', 'Kolaborasi untuk memberikan data yang akurat', 'BPS, Diskominfo', 11, '2024-10-08 00:00:00', NULL, 'kabar', 'Kolaborasi Desa Blederan, BPS Wonosobo, dan Diskominfo Wonosobo utk mewujukan basis data desa yg akurat dan terupdate 👍👍😊', '1728956038.jpg', '2024-10-13 21:37:34', '2024-10-14 18:33:58'),
(3, '110014', 'Outing Class', 'SD N Pagerkukuh', 40, '2024-09-21 00:00:00', NULL, 'eduwisata', 'Belajar tentang budidaya sayuran, main ke kandang kambing, dan melihat kolam ikan', '1728884922.jpg', '2024-10-13 15:48:42', '2024-10-13 18:19:33'),
(4, '110014', 'Outing Class', 'SD Hafiz Quran MAF', 30, '2024-09-06 00:00:00', NULL, 'eduwisata', '', '1728885706.jpg', '2024-10-13 16:01:47', '2024-10-13 18:20:14'),
(5, '110014', 'Study Tour', 'DLH Bandung', 50, '2024-07-17 00:00:00', NULL, 'eduwisata', '', '1728887337.jpg', '2024-10-13 16:28:57', '2024-10-13 16:28:57'),
(8, '110014', 'Kunjungan Belajar', 'Kab.Banyumas', 16, '2024-07-28 00:00:00', NULL, 'eduwisata', '', '1728887688.jpg', '2024-10-13 16:34:48', '2024-10-13 16:34:48'),
(9, '110014', 'Pencanangan Desa Cantik', 'BPS, Pak Setda, Diskominfo, Bappeda', 32, '2024-08-05 00:00:00', NULL, 'kabar', 'Pencanangan Desa Cinta Statistik Desa Blederan Bersama Bapak Setda Wonosobo, BPS Wonosobo, Diskominfo Wonosobo, Bappeda Wonosobo dan Dinsospermades Wonosobo 👍', '1728955965.jpeg', '2024-10-14 01:28:29', '2024-10-14 18:32:45'),
(10, '110014', 'Pertemuan TP PKK Desa Blederan', 'PKK', 25, '2024-09-19 00:00:00', NULL, 'kabar', 'Pertemuan TP PKK Desa Blederan 👍👍', '1728956127.jpg', '2024-10-14 18:35:27', '2024-10-14 18:35:27'),
(11, '110014', 'Pemberdayaan Perempuan', 'LPTP', 25, '2024-09-19 00:00:00', NULL, 'kabar', 'Pemberdayaan perempuan di Desa Blederan Kecamatan Mojotengah Kabupaten Wonosobo \r\nTema pertemuan hari ini yaitu cara menjadi pemandu wisata untuk anak sekolah. \r\nDampingan @lptp.id \r\n @wonosobo_tangkaslestari \r\n@aqualestari \r\n@danoneindonesia', '1728956620.jpg', '2024-10-14 18:43:40', '2024-10-14 18:43:40'),
(16, '110014', 'Kunjungan Belajar P5', 'SMP TAKHASUS AL QURAN 2 WONOSOBO', 70, '2024-10-30 00:00:00', NULL, 'eduwisata', 'Kunjungan belajar dalam rangka kegiatan P5 (Projek Penguatan Profil Pelajar Pancasila) dengan tema budidaya sayur dan toga.', '1730776719.jpeg', '2024-11-05 03:18:39', '2024-11-05 03:18:39'),
(17, '110014', 'kunjungan Belajar', 'Desa Kemudo Klaten', 15, '2024-11-06 00:00:00', NULL, 'eduwisata', 'Kunjungan Belajar Budidaya tanaman Organik', '1730945111.jpeg', '2024-11-07 02:05:11', '2024-11-07 02:05:11'),
(18, '110014', 'Kunjungan Belajar P5', 'SD N 1 PAGERKUKUH WONOSOBO', 60, '2024-11-02 00:00:00', NULL, 'eduwisata', 'Kunjungan belajar P5 tentang budidaya tanaman sayuran organik', '1730945526.jpeg', '2024-11-07 02:10:28', '2024-11-07 02:12:06'),
(19, '110014', 'Bermain dan melihat ternak kambing', 'SD N 1 PAGERKUKUH WONOSOBO', 60, '2024-11-02 00:00:00', NULL, 'eduwisata', 'anak-anak terlihat senang bisa melihat, bermain dan memberi makan kambing', '1730945996.jpeg', '2024-11-07 02:19:56', '2024-11-07 02:19:56');

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
(11, '2024_10_14_012911_tambah_tabel_informasi', 3),
(12, '2024_11_21_012712_tambah_tabel_environments', 4);

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
  `id_desa` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint NOT NULL,
  `satuan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` bigint NOT NULL,
  `gambar_produk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_penjual` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kontak_penjual` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `id_desa`, `nama_produk`, `harga`, `satuan`, `stok`, `gambar_produk`, `nama_penjual`, `kontak_penjual`, `deskripsi`, `created_at`, `updated_at`) VALUES
(4, '110014', 'Padi', 6000, 'gabah', 100, '1730871794.png', 'Ida Indriwati', '085725777357', 'Padi Segar Berkualitas', '2024-10-08 21:04:40', '2024-11-06 05:43:14'),
(5, '110014', 'Jagung', 3500, 'kg', 100, '1728446716.jpg', 'Ida Indriwati', '085725777357', 'jagung manis', '2024-10-08 21:05:16', '2024-11-05 03:11:01'),
(6, '110014', 'Kol', 3000, 'kg', 100, '1728446814.jpg', 'Ida Indriwati', '085725777357', NULL, '2024-10-08 21:06:54', '2024-11-05 03:11:51'),
(7, '110014', 'Selada', 15000, 'kg', 100, '1728446838.jpg', 'Ida Indriwati', '085725777357', NULL, '2024-10-08 21:07:18', '2024-11-05 03:12:22'),
(8, '110014', 'Sawi', 3000, 'kg', 100, '1728446874.jpg', 'Ida Indriwati', '085725777357', NULL, '2024-10-08 21:07:54', '2024-11-05 03:12:45'),
(10, '110014', 'Tomat Segar', 8000, 'kg', 100, '1730871954.jpg', 'Ida Indriwati', '085725777357', NULL, '2024-11-05 03:13:54', '2024-11-06 05:45:54'),
(11, '110014', 'cabe besar', 20000, 'kg', 100, '1730872040.jpg', 'Ida Indriwati', '085725777357', NULL, '2024-11-05 03:15:15', '2024-11-06 05:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `tabulasis`
--

CREATE TABLE `tabulasis` (
  `id` bigint UNSIGNED NOT NULL,
  `id_desa` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_tabel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `metadata` text COLLATE utf8mb4_unicode_ci,
  `id_table` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `highlight` tinyint NOT NULL,
  `tanggal` date DEFAULT NULL,
  `kategori` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabulasis`
--

INSERT INTO `tabulasis` (`id`, `id_desa`, `judul_tabel`, `data`, `metadata`, `id_table`, `highlight`, `tanggal`, `kategori`, `created_at`, `updated_at`) VALUES
(23, '110014', 'Jumlah Penduduk Menurut Kelompok Umur di Desa/Kelurahan BLEDERAN Tahun 2024', '[\r\n    {\r\n        \"Kelompok_Umur\": 1,\r\n        \"Laki-Laki\": 41,\r\n        \"Perempuan\": 30,\r\n        \"Jumlah\": 71\r\n    },\r\n    {\r\n        \"Kelompok_Umur\": 2,\r\n        \"Laki-Laki\": 143,\r\n        \"Perempuan\": 115,\r\n        \"Jumlah\": 258\r\n    },\r\n    {\r\n        \"Kelompok_Umur\": 3,\r\n        \"Laki-Laki\": 155,\r\n        \"Perempuan\": 143,\r\n        \"Jumlah\": 298\r\n    },\r\n    {\r\n        \"Kelompok_Umur\": 4,\r\n        \"Laki-Laki\": 139,\r\n        \"Perempuan\": 108,\r\n        \"Jumlah\": 248\r\n    },\r\n    {\r\n        \"Kelompok_Umur\": 5,\r\n        \"Laki-Laki\": 138,\r\n        \"Perempuan\": 112,\r\n        \"Jumlah\": 250\r\n    },\r\n    {\r\n        \"Kelompok_Umur\": 6,\r\n        \"Laki-Laki\": 128,\r\n        \"Perempuan\": 125,\r\n        \"Jumlah\": 256\r\n    },\r\n    {\r\n        \"Kelompok_Umur\": 7,\r\n        \"Laki-Laki\": 119,\r\n        \"Perempuan\": 129,\r\n        \"Jumlah\": 248\r\n    },\r\n    {\r\n        \"Kelompok_Umur\": 8,\r\n        \"Laki-Laki\": 136,\r\n        \"Perempuan\": 118,\r\n        \"Jumlah\": 256\r\n    },\r\n    {\r\n        \"Kelompok_Umur\": 9,\r\n        \"Laki-Laki\": 130,\r\n        \"Perempuan\": 119,\r\n        \"Jumlah\": 249\r\n    },\r\n    {\r\n        \"Kelompok_Umur\": 10,\r\n        \"Laki-Laki\": 116,\r\n        \"Perempuan\": 109,\r\n        \"Jumlah\": 225\r\n    },\r\n    {\r\n        \"Kelompok_Umur\": 11,\r\n        \"Laki-Laki\": 107,\r\n        \"Perempuan\": 92,\r\n        \"Jumlah\": 200\r\n    },\r\n    {\r\n        \"Kelompok_Umur\": 12,\r\n        \"Laki-Laki\": 91,\r\n        \"Perempuan\": 97,\r\n        \"Jumlah\": 188\r\n    },\r\n    {\r\n        \"Kelompok_Umur\": 13,\r\n        \"Laki-Laki\": 76,\r\n        \"Perempuan\": 59,\r\n        \"Jumlah\": 135\r\n    },\r\n    {\r\n        \"Kelompok_Umur\": 14,\r\n        \"Laki-Laki\": 51,\r\n        \"Perempuan\": 42,\r\n        \"Jumlah\": 93\r\n    },\r\n    {\r\n        \"Kelompok_Umur\": 15,\r\n        \"Laki-Laki\": 40,\r\n        \"Perempuan\": 16,\r\n        \"Jumlah\": 57\r\n    },\r\n    {\r\n        \"Kelompok_Umur\": 16,\r\n        \"Laki-Laki\": 41,\r\n        \"Perempuan\": 36,\r\n        \"Jumlah\": 77\r\n    }\r\n]', '[\r\n    {\r\n        \"value\": 1,\r\n        \"nama\": \"0-4 Tahun\"\r\n    },\r\n    {\r\n        \"value\": 2,\r\n        \"nama\": \"5-9 Tahun\"\r\n    },\r\n    {\r\n        \"value\": 3,\r\n        \"nama\": \"10-14 Tahun\"\r\n    },\r\n    {\r\n        \"value\": 4,\r\n        \"nama\": \"15-19 Tahun\"\r\n    },\r\n    {\r\n        \"value\": 5,\r\n        \"nama\": \"20-24 Tahun\"\r\n    },\r\n    {\r\n        \"value\": 6,\r\n        \"nama\": \"25-29 Tahun\"\r\n    },\r\n    {\r\n        \"value\": 7,\r\n        \"nama\": \"30-34 Tahun\"\r\n    },\r\n    {\r\n        \"value\": 8,\r\n        \"nama\": \"35-39 Tahun\"\r\n    },\r\n    {\r\n        \"value\": 9,\r\n        \"nama\": \"40-44 Tahun\"\r\n    },\r\n    {\r\n        \"value\": 10,\r\n        \"nama\": \"45-49 Tahun\"\r\n    },\r\n    {\r\n        \"value\": 11,\r\n        \"nama\": \"50-54 Tahun\"\r\n    },\r\n    {\r\n        \"value\": 12,\r\n        \"nama\": \"55-59 Tahun\"\r\n    },\r\n    {\r\n        \"value\": 13,\r\n        \"nama\": \"60-64 Tahun\"\r\n    },\r\n    {\r\n        \"value\": 14,\r\n        \"nama\": \"65-69 Tahun\"\r\n    },\r\n    {\r\n        \"value\": 15,\r\n        \"nama\": \"70-74 Tahun\"\r\n    },\r\n    {\r\n        \"value\": 16,\r\n        \"nama\": \"75+ Tahun\"\r\n    }\r\n]', '0', 0, '2024-10-15', 1, NULL, NULL),
(112, '110014', 'Jumlah Penduduk Wanita Umur 10-49 Tahun yang Berstatus Kawin Menurut Penggunaan Alat KB di Desa/Kelurahan BLEDERAN 2024', '[{\"Penggunaan_Alat_KB\":\"1\",\"Jumlah\":10,\"Persentase\":\"3.88\"},{\"Penggunaan_Alat_KB\":\"2\",\"Jumlah\":9,\"Persentase\":\"3.49\"},{\"Penggunaan_Alat_KB\":\"3\",\"Jumlah\":35,\"Persentase\":\"13.57\"},{\"Penggunaan_Alat_KB\":\"4\",\"Jumlah\":124,\"Persentase\":\"48.06\"},{\"Penggunaan_Alat_KB\":\"5\",\"Jumlah\":53,\"Persentase\":\"20.54\"},{\"Penggunaan_Alat_KB\":\"6\",\"Jumlah\":10,\"Persentase\":\"3.88\"},{\"Penggunaan_Alat_KB\":\"7\",\"Jumlah\":9,\"Persentase\":\"3.49\"},{\"Penggunaan_Alat_KB\":\"9\",\"Jumlah\":8,\"Persentase\":\"3.10\"}]', '[{\"id\":51,\"var\":\"b4k11\",\"value\":\"1\",\"nama\":\"MOW\\/Tubektomi\"},{\"id\":52,\"var\":\"b4k11\",\"value\":\"2\",\"nama\":\"MOP\\/Vasektomi\"},{\"id\":53,\"var\":\"b4k11\",\"value\":\"3\",\"nama\":\"AKDR\\/IUD\\/Spiral\"},{\"id\":54,\"var\":\"b4k11\",\"value\":\"4\",\"nama\":\"Suntikan KB\"},{\"id\":55,\"var\":\"b4k11\",\"value\":\"5\",\"nama\":\"Susuk KB\\/Norplan\\/Implanon\\/Alwalit\"},{\"id\":56,\"var\":\"b4k11\",\"value\":\"6\",\"nama\":\"Pil KB\"},{\"id\":57,\"var\":\"b4k11\",\"value\":\"7\",\"nama\":\"Kondom\\/Karet KB\"},{\"id\":58,\"var\":\"b4k11\",\"value\":\"8\",\"nama\":\"Intravag\\/Tisue\\/Kondom Wanita\"},{\"id\":59,\"var\":\"b4k11\",\"value\":\"9\",\"nama\":\"Cara Tradisional\"}]', '1', 0, '2024-11-01', 3, '2024-11-12 02:01:25', '2024-11-22 00:50:06'),
(113, '110014', 'Jumlah Penduduk Menurut Jenis Cacat di Desa/Kelurahan BLEDERAN 2024', '[{\"Jenis_Cacat\":\"01\",\"Jumlah\":20,\"Persentase\":\"68.97\"},{\"Jenis_Cacat\":\"02\",\"Jumlah\":3,\"Persentase\":\"10.34\"},{\"Jenis_Cacat\":\"04\",\"Jumlah\":1,\"Persentase\":\"3.45\"},{\"Jenis_Cacat\":\"06\",\"Jumlah\":1,\"Persentase\":\"3.45\"},{\"Jenis_Cacat\":\"08\",\"Jumlah\":1,\"Persentase\":\"3.45\"},{\"Jenis_Cacat\":\"10\",\"Jumlah\":2,\"Persentase\":\"6.90\"},{\"Jenis_Cacat\":\"12\",\"Jumlah\":1,\"Persentase\":\"3.45\"}]', '[{\"id\":60,\"var\":\"b4k12\",\"value\":\"00\",\"nama\":\"Tidak cacat\"},{\"id\":61,\"var\":\"b4k12\",\"value\":\"01\",\"nama\":\"Tuna daksa\\/cacat tubuh\"},{\"id\":62,\"var\":\"b4k12\",\"value\":\"02\",\"nama\":\"Tuna netra\\/buta\"},{\"id\":63,\"var\":\"b4k12\",\"value\":\"03\",\"nama\":\"Tuna rungu\"},{\"id\":64,\"var\":\"b4k12\",\"value\":\"04\",\"nama\":\"Tuna wicara\"},{\"id\":65,\"var\":\"b4k12\",\"value\":\"05\",\"nama\":\"Tuna rungu & wicara\"},{\"id\":66,\"var\":\"b4k12\",\"value\":\"06\",\"nama\":\"Tuna netra & cacat tubuh\"},{\"id\":67,\"var\":\"b4k12\",\"value\":\"07\",\"nama\":\"Tuna netra, rungu, & wicara\"},{\"id\":68,\"var\":\"b4k12\",\"value\":\"08\",\"nama\":\"Tuna rungu, wicara, & cacat tubuh\"},{\"id\":69,\"var\":\"b4k12\",\"value\":\"09\",\"nama\":\"Tuna rungu, wicara, netra, & cacat tubuh\"},{\"id\":70,\"var\":\"b4k12\",\"value\":\"10\",\"nama\":\"Cacat mental retardasi\"},{\"id\":71,\"var\":\"b4k12\",\"value\":\"11\",\"nama\":\"Mantan penderita gangguan jiwa\"},{\"id\":72,\"var\":\"b4k12\",\"value\":\"12\",\"nama\":\"Cacat fisik & mental\"}]', '2', 0, '2024-11-01', 3, '2024-11-12 02:01:25', '2024-11-22 00:50:06'),
(114, '110014', 'Jumlah Penduduk Usia 5 Tahun ke Atas Menurut Partisipasi Sekolah di Desa/Kelurahan BLEDERAN 2024', '[{\"Partisipasi_Sekolah\":\"0\",\"Jumlah\":93,\"Persentase\":\"3.68\"},{\"Partisipasi_Sekolah\":\"1\",\"Jumlah\":612,\"Persentase\":\"24.19\"},{\"Partisipasi_Sekolah\":\"2\",\"Jumlah\":1825,\"Persentase\":\"72.13\"}]', '[{\"id\":73,\"var\":\"b4k15\",\"value\":\"0\",\"nama\":\"Tidak\\/belum pernah sekolah\"},{\"id\":74,\"var\":\"b4k15\",\"value\":\"1\",\"nama\":\"Masih sekolah\"},{\"id\":75,\"var\":\"b4k15\",\"value\":\"2\",\"nama\":\"Tidak bersekolah lagi\"}]', '3', 0, '2024-11-01', 4, '2024-11-12 02:01:25', '2024-11-22 00:50:06'),
(115, '110014', 'Jumlah Penduduk Usia 5 Tahun ke Atas Menurut Ijazah Tertinggi yang Dimiliki di Desa/Kelurahan BLEDERAN 2024', '[{\"Ijazah_Tertinggi_yang_Dimiliki\":\"0\",\"Jumlah\":368,\"Persentase\":\"15.29\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"1\",\"Jumlah\":1006,\"Persentase\":\"41.79\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"2\",\"Jumlah\":451,\"Persentase\":\"18.74\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"3\",\"Jumlah\":434,\"Persentase\":\"18.03\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"4\",\"Jumlah\":26,\"Persentase\":\"1.08\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"5\",\"Jumlah\":117,\"Persentase\":\"4.86\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"6\",\"Jumlah\":5,\"Persentase\":\"0.21\"}]', '[{\"id\":76,\"var\":\"b4k18\",\"value\":\"0\",\"nama\":\"Tidak punya ijazah\"},{\"id\":77,\"var\":\"b4k18\",\"value\":\"1\",\"nama\":\"SD\\/sederajat\"},{\"id\":78,\"var\":\"b4k18\",\"value\":\"2\",\"nama\":\"SMP\\/sederajat\"},{\"id\":79,\"var\":\"b4k18\",\"value\":\"3\",\"nama\":\"SMA\\/sederajat\"},{\"id\":80,\"var\":\"b4k18\",\"value\":\"4\",\"nama\":\"D1\\/D2\\/D3\"},{\"id\":81,\"var\":\"b4k18\",\"value\":\"5\",\"nama\":\"D4\\/S1\"},{\"id\":82,\"var\":\"b4k18\",\"value\":\"6\",\"nama\":\"S2\\/S3\"}]', '4', 0, '2024-11-01', 4, '2024-11-12 02:01:25', '2024-11-22 00:50:06'),
(116, '110014', 'Jumlah Penduduk Usia 5 Tahun ke Atas Menurut Lapangan Usaha di Desa/Kelurahan BLEDERAN 2024', '[{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"01\",\"Jumlah\":73},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"02\",\"Jumlah\":174},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"03\",\"Jumlah\":5},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"04\",\"Jumlah\":6},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"05\",\"Jumlah\":1},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"06\",\"Jumlah\":13},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"08\",\"Jumlah\":12},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"09\",\"Jumlah\":60},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"10\",\"Jumlah\":7},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"11\",\"Jumlah\":121},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"12\",\"Jumlah\":321},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"13\",\"Jumlah\":9},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"14\",\"Jumlah\":75},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"15\",\"Jumlah\":11},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"16\",\"Jumlah\":15},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"17\",\"Jumlah\":59},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"18\",\"Jumlah\":8},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"19\",\"Jumlah\":33},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"20\",\"Jumlah\":3},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"21\",\"Jumlah\":3},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"22\",\"Jumlah\":170}]', '[{\"id\":83,\"var\":\"b4k21\",\"value\":\"01\",\"nama\":\"Pertanian tanaman padi & palawija\"},{\"id\":84,\"var\":\"b4k21\",\"value\":\"02\",\"nama\":\"Hortikultura\"},{\"id\":85,\"var\":\"b4k21\",\"value\":\"03\",\"nama\":\"Perkebunan\"},{\"id\":86,\"var\":\"b4k21\",\"value\":\"04\",\"nama\":\"Perikanan tangkap\"},{\"id\":87,\"var\":\"b4k21\",\"value\":\"05\",\"nama\":\"Perikanan budidaya\"},{\"id\":88,\"var\":\"b4k21\",\"value\":\"06\",\"nama\":\"Peternakan\"},{\"id\":89,\"var\":\"b4k21\",\"value\":\"07\",\"nama\":\"Kehutanan & pertanian lainnya\"},{\"id\":90,\"var\":\"b4k21\",\"value\":\"08\",\"nama\":\"Pertambangan\\/penggalian\"},{\"id\":91,\"var\":\"b4k21\",\"value\":\"09\",\"nama\":\"Industri pengolahan\"},{\"id\":92,\"var\":\"b4k21\",\"value\":\"10\",\"nama\":\"Listrik & gas\"},{\"id\":93,\"var\":\"b4k21\",\"value\":\"11\",\"nama\":\"Bangunan\\/kontruksi\"},{\"id\":94,\"var\":\"b4k21\",\"value\":\"12\",\"nama\":\"Perdagangan\"},{\"id\":95,\"var\":\"b4k21\",\"value\":\"13\",\"nama\":\"Hotel & rumah makan\"},{\"id\":96,\"var\":\"b4k21\",\"value\":\"14\",\"nama\":\"Transportasi & pergudangan\"},{\"id\":97,\"var\":\"b4k21\",\"value\":\"15\",\"nama\":\"Informasi & komunikasi\"},{\"id\":98,\"var\":\"b4k21\",\"value\":\"16\",\"nama\":\"Keuangan & asuransi\"},{\"id\":99,\"var\":\"b4k21\",\"value\":\"17\",\"nama\":\"Jasa pendidikan\"},{\"id\":100,\"var\":\"b4k21\",\"value\":\"18\",\"nama\":\"Jasa kesehatan\"},{\"id\":101,\"var\":\"b4k21\",\"value\":\"19\",\"nama\":\"Jasa kemasyarakatan, pemerintah, & perorangan\"},{\"id\":102,\"var\":\"b4k21\",\"value\":\"20\",\"nama\":\"Pemulung\"},{\"id\":103,\"var\":\"b4k21\",\"value\":\"21\",\"nama\":\"TKI\"},{\"id\":104,\"var\":\"b4k21\",\"value\":\"22\",\"nama\":\"Lainnya\"}]', '5', 0, '2024-11-01', 5, '2024-11-12 02:01:25', '2024-11-22 00:50:06'),
(117, '110014', 'Status Penguasaan Bangunan Tempat Tinggal yang Ditempati di Desa/Kelurahan BLEDERAN 2024', '[{\"Status\":\"1\",\"Jumlah\":665,\"Persentase\":\"83.02\"},{\"Status\":\"2\",\"Jumlah\":6,\"Persentase\":\"0.75\"},{\"Status\":\"3\",\"Jumlah\":130,\"Persentase\":\"16.23\"}]', '[{\"id\":1,\"var\":\"b3r1a\",\"value\":\"1\",\"nama\":\"Milik sendiri\"},{\"id\":2,\"var\":\"b3r1a\",\"value\":\"2\",\"nama\":\"Kontrak\\/sewa\"},{\"id\":3,\"var\":\"b3r1a\",\"value\":\"3\",\"nama\":\"Bebas sewa\"},{\"id\":4,\"var\":\"b3r1a\",\"value\":\"4\",\"nama\":\"Dinas\"},{\"id\":5,\"var\":\"b3r1a\",\"value\":\"5\",\"nama\":\"Lainnya\"}]', '6', 0, '2024-11-01', 2, '2024-11-12 02:01:25', '2024-11-22 00:50:06'),
(118, '110014', 'Jumlah Keluarga Menurut Luas Lantai di Desa/Kelurahan BLEDERAN 2024', '[{\"Jenis_Lantai\":\"01\",\"Jumlah\":8,\"Persentase\":\"0.99\"},{\"Jenis_Lantai\":\"02\",\"Jumlah\":404,\"Persentase\":\"50.12\"},{\"Jenis_Lantai\":\"04\",\"Jumlah\":70,\"Persentase\":\"8.68\"},{\"Jenis_Lantai\":\"06\",\"Jumlah\":308,\"Persentase\":\"38.21\"},{\"Jenis_Lantai\":\"09\",\"Jumlah\":12,\"Persentase\":\"1.49\"},{\"Jenis_Lantai\":\"10\",\"Jumlah\":4,\"Persentase\":\"0.50\"}]', '[{\"id\":6,\"var\":\"b3r3\",\"value\":\"01\",\"nama\":\"Marmer\\/granit\"},{\"id\":7,\"var\":\"b3r3\",\"value\":\"02\",\"nama\":\"Keramik\"},{\"id\":8,\"var\":\"b3r3\",\"value\":\"03\",\"nama\":\"Parket\\/vinil\\/permadani\"},{\"id\":9,\"var\":\"b3r3\",\"value\":\"04\",\"nama\":\"Ubin\\/tegel\\/teraso\"},{\"id\":10,\"var\":\"b3r3\",\"value\":\"05\",\"nama\":\"Kayu\\/papan kualitas tinggi\"},{\"id\":11,\"var\":\"b3r3\",\"value\":\"06\",\"nama\":\"Semen\\/bata merah\"},{\"id\":12,\"var\":\"b3r3\",\"value\":\"07\",\"nama\":\"Bambu\"},{\"id\":13,\"var\":\"b3r3\",\"value\":\"08\",\"nama\":\"Kayu\\/papan kualitas rendah\"},{\"id\":14,\"var\":\"b3r3\",\"value\":\"09\",\"nama\":\"Tanah\"},{\"id\":15,\"var\":\"b3r3\",\"value\":\"10\",\"nama\":\"Lainnya\"}]', '7', 0, '2024-11-01', 2, '2024-11-12 02:01:25', '2024-11-22 00:50:06'),
(119, '110014', 'Jumlah Keluarga Menurut Jenis Dinding Terluas di Desa/Kelurahan BLEDERAN 2024', '[{\"Jenis_Dinding\":\"1\",\"Jumlah\":715,\"Persentase\":\"88.60\"},{\"Jenis_Dinding\":\"2\",\"Jumlah\":4,\"Persentase\":\"0.50\"},{\"Jenis_Dinding\":\"3\",\"Jumlah\":87,\"Persentase\":\"10.78\"},{\"Jenis_Dinding\":\"7\",\"Jumlah\":1,\"Persentase\":\"0.12\"}]', '[{\"id\":26,\"var\":\"b3r4a\",\"value\":\"1\",\"nama\":\"Tembok\"},{\"id\":27,\"var\":\"b3r4a\",\"value\":\"2\",\"nama\":\"Plesteran anyaman bambu\\/kawat\"},{\"id\":28,\"var\":\"b3r4a\",\"value\":\"3\",\"nama\":\"Kayu\"},{\"id\":29,\"var\":\"b3r4a\",\"value\":\"4\",\"nama\":\"Anyaman bambu\"},{\"id\":30,\"var\":\"b3r4a\",\"value\":\"5\",\"nama\":\"Batang kayu\"},{\"id\":31,\"var\":\"b3r4a\",\"value\":\"6\",\"nama\":\"Bambu\"},{\"id\":32,\"var\":\"b3r4a\",\"value\":\"7\",\"nama\":\"Lainnya\"}]', '8', 0, '2024-11-01', 2, '2024-11-12 02:01:25', '2024-11-22 00:50:06'),
(120, '110014', 'Jumlah Keluarga Menurut Jenis Atap Terluas di Desa/Kelurahan BLEDERAN 2024', '[{\"Jenis_Atap\":\"01\",\"Jumlah\":4,\"Persentase\":\"0.50\"},{\"Jenis_Atap\":\"02\",\"Jumlah\":1,\"Persentase\":\"0.12\"},{\"Jenis_Atap\":\"03\",\"Jumlah\":3,\"Persentase\":\"0.37\"},{\"Jenis_Atap\":\"04\",\"Jumlah\":5,\"Persentase\":\"0.62\"},{\"Jenis_Atap\":\"05\",\"Jumlah\":6,\"Persentase\":\"0.74\"},{\"Jenis_Atap\":\"06\",\"Jumlah\":787,\"Persentase\":\"97.52\"},{\"Jenis_Atap\":\"07\",\"Jumlah\":1,\"Persentase\":\"0.12\"}]', '[{\"id\":16,\"var\":\"b3r5a\",\"value\":\"01\",\"nama\":\"Beton\\/genteng beton\"},{\"id\":17,\"var\":\"b3r5a\",\"value\":\"02\",\"nama\":\"Genteng keramik\"},{\"id\":18,\"var\":\"b3r5a\",\"value\":\"03\",\"nama\":\"Genteng metal\"},{\"id\":19,\"var\":\"b3r5a\",\"value\":\"04\",\"nama\":\"Genteng tanah liat\"},{\"id\":20,\"var\":\"b3r5a\",\"value\":\"05\",\"nama\":\"Asbes\"},{\"id\":21,\"var\":\"b3r5a\",\"value\":\"06\",\"nama\":\"Seng\"},{\"id\":22,\"var\":\"b3r5a\",\"value\":\"07\",\"nama\":\"Sirap\"},{\"id\":23,\"var\":\"b3r5a\",\"value\":\"08\",\"nama\":\"Bambu\"},{\"id\":24,\"var\":\"b3r5a\",\"value\":\"09\",\"nama\":\"Jerami\\/ijuk\\/daun daunan\\/rumbia\"},{\"id\":25,\"var\":\"b3r5a\",\"value\":\"10\",\"nama\":\"Lainnya\"},{\"id\":33,\"var\":\"b3r5a\",\"value\":\"01\",\"nama\":\"Beton\\/genteng beton\"},{\"id\":34,\"var\":\"b3r5a\",\"value\":\"02\",\"nama\":\"Genteng keramik\"},{\"id\":35,\"var\":\"b3r5a\",\"value\":\"03\",\"nama\":\"Genteng metal\"},{\"id\":36,\"var\":\"b3r5a\",\"value\":\"04\",\"nama\":\"Genteng tanah liat\"},{\"id\":37,\"var\":\"b3r5a\",\"value\":\"05\",\"nama\":\"Asbes\"},{\"id\":38,\"var\":\"b3r5a\",\"value\":\"06\",\"nama\":\"Seng\"},{\"id\":39,\"var\":\"b3r5a\",\"value\":\"07\",\"nama\":\"Sirap\"},{\"id\":40,\"var\":\"b3r5a\",\"value\":\"08\",\"nama\":\"Bambu\"},{\"id\":41,\"var\":\"b3r5a\",\"value\":\"09\",\"nama\":\"Jerami\\/ijuk\\/daun daunan\\/rumbia\"},{\"id\":42,\"var\":\"b3r5a\",\"value\":\"10\",\"nama\":\"Lainnya\"}]', '9', 0, '2024-11-01', 2, '2024-11-12 02:01:25', '2024-11-22 00:50:06'),
(121, '110014', 'Jumlah Keluarga Menurut Penggunaan Fasilitas Tempat Buang Air Besar di Desa/Kelurahan BLEDERAN 2024', '[{\"Fasilitas_BAB\":\"1\",\"Jumlah\":735,\"Persentase\":\"91.53\"},{\"Fasilitas_BAB\":\"2\",\"Jumlah\":43,\"Persentase\":\"5.35\"},{\"Fasilitas_BAB\":\"3\",\"Jumlah\":25,\"Persentase\":\"3.11\"}]', '[{\"id\":43,\"var\":\"b3r11a\",\"value\":\"1\",\"nama\":\"Sendiri\"},{\"id\":44,\"var\":\"b3r11a\",\"value\":\"2\",\"nama\":\"Bersama\"},{\"id\":45,\"var\":\"b3r11a\",\"value\":\"3\",\"nama\":\"Umum\"},{\"id\":46,\"var\":\"b3r11a\",\"value\":\"4\",\"nama\":\"Tidak ada\"}]', '10', 0, '2024-11-01', 2, '2024-11-12 02:01:25', '2024-11-22 00:50:06'),
(122, '110014', 'Jumlah Keluarga Menurut Jenis Kloset di Desa/Kelurahan BLEDERAN 2024', '[{\"Jenis_Kloset\":\"1\",\"Jumlah\":621,\"Persentase\":\"78.51\"},{\"Jenis_Kloset\":\"2\",\"Jumlah\":133,\"Persentase\":\"16.81\"},{\"Jenis_Kloset\":\"3\",\"Jumlah\":33,\"Persentase\":\"4.17\"},{\"Jenis_Kloset\":\"4\",\"Jumlah\":4,\"Persentase\":\"0.51\"}]', '[{\"id\":47,\"var\":\"b3r11b\",\"value\":\"1\",\"nama\":\"Leher angsa\"},{\"id\":48,\"var\":\"b3r11b\",\"value\":\"2\",\"nama\":\"Plengsengan\"},{\"id\":49,\"var\":\"b3r11b\",\"value\":\"3\",\"nama\":\"Cemplung\\/cubluk\"},{\"id\":50,\"var\":\"b3r11b\",\"value\":\"4\",\"nama\":\"Tidak pakai\"}]', '11', 0, '2024-11-01', 2, '2024-11-12 02:01:25', '2024-11-22 00:50:06'),
(123, '110014', 'Populasi BLEDERAN 2024', '[{\"Populasi\":3116}]', NULL, '12', 1, '2024-11-01', 1, '2024-11-13 21:07:17', '2024-11-22 00:50:06'),
(124, '110014', 'Agama BLEDERAN 2024', '[{\"Agama\":\"1\",\"total\":2718,\"persentase\":\"99.74312\"}]', '[{\"id\":105,\"var\":\"b4k23\",\"value\":\"1\",\"nama\":\"Islam\"},{\"id\":106,\"var\":\"b4k23\",\"value\":\"2\",\"nama\":\"Protestan\"},{\"id\":107,\"var\":\"b4k23\",\"value\":\"3\",\"nama\":\"Katolik\"},{\"id\":108,\"var\":\"b4k23\",\"value\":\"4\",\"nama\":\"Hindu\"},{\"id\":109,\"var\":\"b4k23\",\"value\":\"5\",\"nama\":\"Budha\"},{\"id\":110,\"var\":\"b4k23\",\"value\":\"6\",\"nama\":\"Konghucu\"},{\"id\":111,\"var\":\"b4k23\",\"value\":\"7\",\"nama\":\"Lainnya\"}]', '13', 1, '2024-11-01', 1, '2024-11-13 21:07:17', '2024-11-22 00:50:06'),
(125, '110014', 'Suku Mayoritas BLEDERAN 2024', '[{\"Suku\":\"10\",\"total\":2709,\"persentase\":\"99.41284\"}]', '[{\"id\":112,\"var\":\"b4k24\",\"value\":\"01\",\"nama\":\"Arab\"},{\"id\":113,\"var\":\"b4k24\",\"value\":\"02\",\"nama\":\"Ambon\"},{\"id\":114,\"var\":\"b4k24\",\"value\":\"03\",\"nama\":\"Bali\"},{\"id\":115,\"var\":\"b4k24\",\"value\":\"04\",\"nama\":\"Batak\"},{\"id\":116,\"var\":\"b4k24\",\"value\":\"05\",\"nama\":\"Betawi\"},{\"id\":117,\"var\":\"b4k24\",\"value\":\"06\",\"nama\":\"Bugis\"},{\"id\":118,\"var\":\"b4k24\",\"value\":\"07\",\"nama\":\"China\"},{\"id\":119,\"var\":\"b4k24\",\"value\":\"08\",\"nama\":\"Dayak\"},{\"id\":120,\"var\":\"b4k24\",\"value\":\"09\",\"nama\":\"India\"},{\"id\":121,\"var\":\"b4k24\",\"value\":\"10\",\"nama\":\"Jawa\"},{\"id\":122,\"var\":\"b4k24\",\"value\":\"11\",\"nama\":\"Madura\"},{\"id\":123,\"var\":\"b4k24\",\"value\":\"12\",\"nama\":\"Melayu\"},{\"id\":124,\"var\":\"b4k24\",\"value\":\"13\",\"nama\":\"Minang\"},{\"id\":125,\"var\":\"b4k24\",\"value\":\"14\",\"nama\":\"Papua\"},{\"id\":126,\"var\":\"b4k24\",\"value\":\"15\",\"nama\":\"Sunda\"},{\"id\":127,\"var\":\"b4k24\",\"value\":\"16\",\"nama\":\"Timor\"},{\"id\":128,\"var\":\"b4k24\",\"value\":\"17\",\"nama\":\"Lainnya\"}]', '14', 1, '2024-11-01', 1, '2024-11-13 21:07:17', '2024-11-22 00:50:06'),
(126, '110014', 'Tempat Tinggal BLEDERAN 2024', '[{\"Tempat Tinggal\":\"1\",\"total\":665,\"persentase\":\"83.02122\"}]', '[{\"id\":1,\"var\":\"b3r1a\",\"value\":\"1\",\"nama\":\"Milik sendiri\"},{\"id\":2,\"var\":\"b3r1a\",\"value\":\"2\",\"nama\":\"Kontrak\\/sewa\"},{\"id\":3,\"var\":\"b3r1a\",\"value\":\"3\",\"nama\":\"Bebas sewa\"},{\"id\":4,\"var\":\"b3r1a\",\"value\":\"4\",\"nama\":\"Dinas\"},{\"id\":5,\"var\":\"b3r1a\",\"value\":\"5\",\"nama\":\"Lainnya\"}]', '15', 1, '2024-11-01', 2, '2024-11-13 21:07:17', '2024-11-22 00:50:06'),
(127, '110014', 'Lantai BLEDERAN 2024', '[{\"Lantai\":\"02\",\"total\":404,\"persentase\":\"50.12407\"}]', '[{\"id\":6,\"var\":\"b3r3\",\"value\":\"01\",\"nama\":\"Marmer\\/granit\"},{\"id\":7,\"var\":\"b3r3\",\"value\":\"02\",\"nama\":\"Keramik\"},{\"id\":8,\"var\":\"b3r3\",\"value\":\"03\",\"nama\":\"Parket\\/vinil\\/permadani\"},{\"id\":9,\"var\":\"b3r3\",\"value\":\"04\",\"nama\":\"Ubin\\/tegel\\/teraso\"},{\"id\":10,\"var\":\"b3r3\",\"value\":\"05\",\"nama\":\"Kayu\\/papan kualitas tinggi\"},{\"id\":11,\"var\":\"b3r3\",\"value\":\"06\",\"nama\":\"Semen\\/bata merah\"},{\"id\":12,\"var\":\"b3r3\",\"value\":\"07\",\"nama\":\"Bambu\"},{\"id\":13,\"var\":\"b3r3\",\"value\":\"08\",\"nama\":\"Kayu\\/papan kualitas rendah\"},{\"id\":14,\"var\":\"b3r3\",\"value\":\"09\",\"nama\":\"Tanah\"},{\"id\":15,\"var\":\"b3r3\",\"value\":\"10\",\"nama\":\"Lainnya\"}]', '16', 1, '2024-11-01', 2, '2024-11-13 21:07:17', '2024-11-22 00:50:06'),
(128, '110014', 'Dinding BLEDERAN 2024', '[{\"Dinding\":\"1\",\"total\":715,\"persentase\":\"88.59975\"}]', '[{\"id\":26,\"var\":\"b3r4a\",\"value\":\"1\",\"nama\":\"Tembok\"},{\"id\":27,\"var\":\"b3r4a\",\"value\":\"2\",\"nama\":\"Plesteran anyaman bambu\\/kawat\"},{\"id\":28,\"var\":\"b3r4a\",\"value\":\"3\",\"nama\":\"Kayu\"},{\"id\":29,\"var\":\"b3r4a\",\"value\":\"4\",\"nama\":\"Anyaman bambu\"},{\"id\":30,\"var\":\"b3r4a\",\"value\":\"5\",\"nama\":\"Batang kayu\"},{\"id\":31,\"var\":\"b3r4a\",\"value\":\"6\",\"nama\":\"Bambu\"},{\"id\":32,\"var\":\"b3r4a\",\"value\":\"7\",\"nama\":\"Lainnya\"}]', '17', 1, '2024-11-01', 2, '2024-11-13 21:07:17', '2024-11-22 00:50:06'),
(129, '110014', 'Fasilitas BAB BLEDERAN 2024', '[{\"Fasilitas BAB\":\"1\",\"total\":735,\"persentase\":\"91.53176\"}]', '[{\"id\":43,\"var\":\"b3r11a\",\"value\":\"1\",\"nama\":\"Sendiri\"},{\"id\":44,\"var\":\"b3r11a\",\"value\":\"2\",\"nama\":\"Bersama\"},{\"id\":45,\"var\":\"b3r11a\",\"value\":\"3\",\"nama\":\"Umum\"},{\"id\":46,\"var\":\"b3r11a\",\"value\":\"4\",\"nama\":\"Tidak ada\"}]', '18', 1, '2024-11-01', 2, '2024-11-13 21:07:17', '2024-11-22 00:50:06'),
(130, '110014', 'Wanita 10-49 Tahun KB BLEDERAN 2024', '[{\"Wanita 10-49 Tahun Ber-KB\":258}]', NULL, '19', 1, '2024-11-01', 3, '2024-11-13 21:07:17', '2024-11-22 00:50:06'),
(131, '110014', ' BLEDERAN 2024', '[{\"Jumlah Penduduk Cacat\":29}]', '[{\"id\":60,\"var\":\"b4k12\",\"value\":\"00\",\"nama\":\"Tidak cacat\"},{\"id\":61,\"var\":\"b4k12\",\"value\":\"01\",\"nama\":\"Tuna daksa\\/cacat tubuh\"},{\"id\":62,\"var\":\"b4k12\",\"value\":\"02\",\"nama\":\"Tuna netra\\/buta\"},{\"id\":63,\"var\":\"b4k12\",\"value\":\"03\",\"nama\":\"Tuna rungu\"},{\"id\":64,\"var\":\"b4k12\",\"value\":\"04\",\"nama\":\"Tuna wicara\"},{\"id\":65,\"var\":\"b4k12\",\"value\":\"05\",\"nama\":\"Tuna rungu & wicara\"},{\"id\":66,\"var\":\"b4k12\",\"value\":\"06\",\"nama\":\"Tuna netra & cacat tubuh\"},{\"id\":67,\"var\":\"b4k12\",\"value\":\"07\",\"nama\":\"Tuna netra, rungu, & wicara\"},{\"id\":68,\"var\":\"b4k12\",\"value\":\"08\",\"nama\":\"Tuna rungu, wicara, & cacat tubuh\"},{\"id\":69,\"var\":\"b4k12\",\"value\":\"09\",\"nama\":\"Tuna rungu, wicara, netra, & cacat tubuh\"},{\"id\":70,\"var\":\"b4k12\",\"value\":\"10\",\"nama\":\"Cacat mental retardasi\"},{\"id\":71,\"var\":\"b4k12\",\"value\":\"11\",\"nama\":\"Mantan penderita gangguan jiwa\"},{\"id\":72,\"var\":\"b4k12\",\"value\":\"12\",\"nama\":\"Cacat fisik & mental\"}]', '20', 1, '2024-11-01', 3, '2024-11-13 21:07:17', '2024-11-22 00:50:06'),
(132, '110014', ' BLEDERAN 2024', '[{\"Penduduk Tidak Bersekolah Lagi\":1828}]', '[{\"id\":73,\"var\":\"b4k15\",\"value\":\"0\",\"nama\":\"Tidak\\/belum pernah sekolah\"},{\"id\":74,\"var\":\"b4k15\",\"value\":\"1\",\"nama\":\"Masih sekolah\"},{\"id\":75,\"var\":\"b4k15\",\"value\":\"2\",\"nama\":\"Tidak bersekolah lagi\"}]', '21', 1, '2024-11-01', 4, '2024-11-13 21:07:17', '2024-11-22 00:50:06'),
(133, '110014', ' BLEDERAN 2024', '[{\"Penduduk Belum Pernah Sekolah\":94}]', '[{\"id\":73,\"var\":\"b4k15\",\"value\":\"0\",\"nama\":\"Tidak\\/belum pernah sekolah\"},{\"id\":74,\"var\":\"b4k15\",\"value\":\"1\",\"nama\":\"Masih sekolah\"},{\"id\":75,\"var\":\"b4k15\",\"value\":\"2\",\"nama\":\"Tidak bersekolah lagi\"}]', '22', 1, '2024-11-01', 4, '2024-11-13 21:07:17', '2024-11-22 00:50:06'),
(134, '110014', ' BLEDERAN 2024', '[{\"Ijazah Tertinggi SD\":1008}]', '[{\"id\":76,\"var\":\"b4k18\",\"value\":\"0\",\"nama\":\"Tidak punya ijazah\"},{\"id\":77,\"var\":\"b4k18\",\"value\":\"1\",\"nama\":\"SD\\/sederajat\"},{\"id\":78,\"var\":\"b4k18\",\"value\":\"2\",\"nama\":\"SMP\\/sederajat\"},{\"id\":79,\"var\":\"b4k18\",\"value\":\"3\",\"nama\":\"SMA\\/sederajat\"},{\"id\":80,\"var\":\"b4k18\",\"value\":\"4\",\"nama\":\"D1\\/D2\\/D3\"},{\"id\":81,\"var\":\"b4k18\",\"value\":\"5\",\"nama\":\"D4\\/S1\"},{\"id\":82,\"var\":\"b4k18\",\"value\":\"6\",\"nama\":\"S2\\/S3\"}]', '23', 1, '2024-11-01', 4, '2024-11-13 21:07:17', '2024-11-22 00:50:06'),
(135, '110014', ' BLEDERAN 2024', '[{\"Ijazah Tertinggi SMP\":452}]', '[{\"id\":76,\"var\":\"b4k18\",\"value\":\"0\",\"nama\":\"Tidak punya ijazah\"},{\"id\":77,\"var\":\"b4k18\",\"value\":\"1\",\"nama\":\"SD\\/sederajat\"},{\"id\":78,\"var\":\"b4k18\",\"value\":\"2\",\"nama\":\"SMP\\/sederajat\"},{\"id\":79,\"var\":\"b4k18\",\"value\":\"3\",\"nama\":\"SMA\\/sederajat\"},{\"id\":80,\"var\":\"b4k18\",\"value\":\"4\",\"nama\":\"D1\\/D2\\/D3\"},{\"id\":81,\"var\":\"b4k18\",\"value\":\"5\",\"nama\":\"D4\\/S1\"},{\"id\":82,\"var\":\"b4k18\",\"value\":\"6\",\"nama\":\"S2\\/S3\"}]', '24', 1, '2024-11-01', 4, '2024-11-13 21:07:17', '2024-11-22 00:50:06'),
(1000, '999999', 'Jumlah Penduduk Wanita Umur 10-49 Tahun yang Berstatus Kawin Menurut Penggunaan Alat KB di Desa/Kelurahan DESA DUMMY 2024', '[{\"Penggunaan_Alat_KB\":\"0\",\"Jumlah\":1,\"Persentase\":\"5.56\"},{\"Penggunaan_Alat_KB\":\"1\",\"Jumlah\":1,\"Persentase\":\"5.56\"},{\"Penggunaan_Alat_KB\":\"2\",\"Jumlah\":2,\"Persentase\":\"11.11\"},{\"Penggunaan_Alat_KB\":\"3\",\"Jumlah\":3,\"Persentase\":\"16.67\"},{\"Penggunaan_Alat_KB\":\"4\",\"Jumlah\":2,\"Persentase\":\"11.11\"},{\"Penggunaan_Alat_KB\":\"5\",\"Jumlah\":3,\"Persentase\":\"16.67\"},{\"Penggunaan_Alat_KB\":\"6\",\"Jumlah\":3,\"Persentase\":\"16.67\"},{\"Penggunaan_Alat_KB\":\"8\",\"Jumlah\":2,\"Persentase\":\"11.11\"},{\"Penggunaan_Alat_KB\":\"9\",\"Jumlah\":1,\"Persentase\":\"5.56\"}]', '[{\"id\":51,\"var\":\"b4k11\",\"value\":\"1\",\"nama\":\"MOW\\/Tubektomi\"},{\"id\":52,\"var\":\"b4k11\",\"value\":\"2\",\"nama\":\"MOP\\/Vasektomi\"},{\"id\":53,\"var\":\"b4k11\",\"value\":\"3\",\"nama\":\"AKDR\\/IUD\\/Spiral\"},{\"id\":54,\"var\":\"b4k11\",\"value\":\"4\",\"nama\":\"Suntikan KB\"},{\"id\":55,\"var\":\"b4k11\",\"value\":\"5\",\"nama\":\"Susuk KB\\/Norplan\\/Implanon\\/Alwalit\"},{\"id\":56,\"var\":\"b4k11\",\"value\":\"6\",\"nama\":\"Pil KB\"},{\"id\":57,\"var\":\"b4k11\",\"value\":\"7\",\"nama\":\"Kondom\\/Karet KB\"},{\"id\":58,\"var\":\"b4k11\",\"value\":\"8\",\"nama\":\"Intravag\\/Tisue\\/Kondom Wanita\"},{\"id\":59,\"var\":\"b4k11\",\"value\":\"9\",\"nama\":\"Cara Tradisional\"}]', '1', 0, '2024-11-01', 3, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1001, '999999', 'Jumlah Penduduk Menurut Jenis Cacat di Desa/Kelurahan DESA DUMMY 2024', '[{\"Jenis_Cacat\":\"01\",\"Jumlah\":13,\"Persentase\":\"7.10\"},{\"Jenis_Cacat\":\"02\",\"Jumlah\":17,\"Persentase\":\"9.29\"},{\"Jenis_Cacat\":\"03\",\"Jumlah\":7,\"Persentase\":\"3.83\"},{\"Jenis_Cacat\":\"04\",\"Jumlah\":13,\"Persentase\":\"7.10\"},{\"Jenis_Cacat\":\"05\",\"Jumlah\":18,\"Persentase\":\"9.84\"},{\"Jenis_Cacat\":\"06\",\"Jumlah\":11,\"Persentase\":\"6.01\"},{\"Jenis_Cacat\":\"07\",\"Jumlah\":20,\"Persentase\":\"10.93\"},{\"Jenis_Cacat\":\"08\",\"Jumlah\":19,\"Persentase\":\"10.38\"},{\"Jenis_Cacat\":\"09\",\"Jumlah\":18,\"Persentase\":\"9.84\"},{\"Jenis_Cacat\":\"10\",\"Jumlah\":21,\"Persentase\":\"11.48\"},{\"Jenis_Cacat\":\"11\",\"Jumlah\":12,\"Persentase\":\"6.56\"},{\"Jenis_Cacat\":\"12\",\"Jumlah\":14,\"Persentase\":\"7.65\"}]', '[{\"id\":60,\"var\":\"b4k12\",\"value\":\"00\",\"nama\":\"Tidak cacat\"},{\"id\":61,\"var\":\"b4k12\",\"value\":\"01\",\"nama\":\"Tuna daksa\\/cacat tubuh\"},{\"id\":62,\"var\":\"b4k12\",\"value\":\"02\",\"nama\":\"Tuna netra\\/buta\"},{\"id\":63,\"var\":\"b4k12\",\"value\":\"03\",\"nama\":\"Tuna rungu\"},{\"id\":64,\"var\":\"b4k12\",\"value\":\"04\",\"nama\":\"Tuna wicara\"},{\"id\":65,\"var\":\"b4k12\",\"value\":\"05\",\"nama\":\"Tuna rungu & wicara\"},{\"id\":66,\"var\":\"b4k12\",\"value\":\"06\",\"nama\":\"Tuna netra & cacat tubuh\"},{\"id\":67,\"var\":\"b4k12\",\"value\":\"07\",\"nama\":\"Tuna netra, rungu, & wicara\"},{\"id\":68,\"var\":\"b4k12\",\"value\":\"08\",\"nama\":\"Tuna rungu, wicara, & cacat tubuh\"},{\"id\":69,\"var\":\"b4k12\",\"value\":\"09\",\"nama\":\"Tuna rungu, wicara, netra, & cacat tubuh\"},{\"id\":70,\"var\":\"b4k12\",\"value\":\"10\",\"nama\":\"Cacat mental retardasi\"},{\"id\":71,\"var\":\"b4k12\",\"value\":\"11\",\"nama\":\"Mantan penderita gangguan jiwa\"},{\"id\":72,\"var\":\"b4k12\",\"value\":\"12\",\"nama\":\"Cacat fisik & mental\"}]', '2', 0, '2024-11-01', 3, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1002, '999999', 'Jumlah Penduduk Usia 5 Tahun ke Atas Menurut Partisipasi Sekolah di Desa/Kelurahan DESA DUMMY 2024', '[{\"Partisipasi_Sekolah\":\"0\",\"Jumlah\":66,\"Persentase\":\"34.02\"},{\"Partisipasi_Sekolah\":\"1\",\"Jumlah\":53,\"Persentase\":\"27.32\"},{\"Partisipasi_Sekolah\":\"2\",\"Jumlah\":75,\"Persentase\":\"38.66\"}]', '[{\"id\":73,\"var\":\"b4k15\",\"value\":\"0\",\"nama\":\"Tidak\\/belum pernah sekolah\"},{\"id\":74,\"var\":\"b4k15\",\"value\":\"1\",\"nama\":\"Masih sekolah\"},{\"id\":75,\"var\":\"b4k15\",\"value\":\"2\",\"nama\":\"Tidak bersekolah lagi\"}]', '3', 0, '2024-11-01', 4, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1003, '999999', 'Jumlah Penduduk Usia 5 Tahun ke Atas Menurut Ijazah Tertinggi yang Dimiliki di Desa/Kelurahan DESA DUMMY 2024', '[{\"Ijazah_Tertinggi_yang_Dimiliki\":\"1\",\"Jumlah\":31,\"Persentase\":\"16.06\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"2\",\"Jumlah\":29,\"Persentase\":\"15.03\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"3\",\"Jumlah\":32,\"Persentase\":\"16.58\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"4\",\"Jumlah\":34,\"Persentase\":\"17.62\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"5\",\"Jumlah\":29,\"Persentase\":\"15.03\"},{\"Ijazah_Tertinggi_yang_Dimiliki\":\"6\",\"Jumlah\":38,\"Persentase\":\"19.69\"}]', '[{\"id\":76,\"var\":\"b4k18\",\"value\":\"0\",\"nama\":\"Tidak punya ijazah\"},{\"id\":77,\"var\":\"b4k18\",\"value\":\"1\",\"nama\":\"SD\\/sederajat\"},{\"id\":78,\"var\":\"b4k18\",\"value\":\"2\",\"nama\":\"SMP\\/sederajat\"},{\"id\":79,\"var\":\"b4k18\",\"value\":\"3\",\"nama\":\"SMA\\/sederajat\"},{\"id\":80,\"var\":\"b4k18\",\"value\":\"4\",\"nama\":\"D1\\/D2\\/D3\"},{\"id\":81,\"var\":\"b4k18\",\"value\":\"5\",\"nama\":\"D4\\/S1\"},{\"id\":82,\"var\":\"b4k18\",\"value\":\"6\",\"nama\":\"S2\\/S3\"}]', '4', 0, '2024-11-01', 4, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1004, '999999', 'Jumlah Penduduk Usia 5 Tahun ke Atas Menurut Lapangan Usaha di Desa/Kelurahan DESA DUMMY 2024', '[{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"01\",\"Jumlah\":11},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"02\",\"Jumlah\":9},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"03\",\"Jumlah\":10},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"04\",\"Jumlah\":7},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"05\",\"Jumlah\":8},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"06\",\"Jumlah\":9},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"07\",\"Jumlah\":7},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"08\",\"Jumlah\":8},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"09\",\"Jumlah\":6},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"10\",\"Jumlah\":12},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"11\",\"Jumlah\":11},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"12\",\"Jumlah\":8},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"13\",\"Jumlah\":6},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"14\",\"Jumlah\":10},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"15\",\"Jumlah\":7},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"16\",\"Jumlah\":7},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"17\",\"Jumlah\":15},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"18\",\"Jumlah\":12},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"19\",\"Jumlah\":8},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"20\",\"Jumlah\":10},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"21\",\"Jumlah\":6},{\"Pekerjaan_Utama_Menurut_Lapangan_Usaha\":\"22\",\"Jumlah\":7}]', '[{\"id\":83,\"var\":\"b4k21\",\"value\":\"01\",\"nama\":\"Pertanian tanaman padi & palawija\"},{\"id\":84,\"var\":\"b4k21\",\"value\":\"02\",\"nama\":\"Hortikultura\"},{\"id\":85,\"var\":\"b4k21\",\"value\":\"03\",\"nama\":\"Perkebunan\"},{\"id\":86,\"var\":\"b4k21\",\"value\":\"04\",\"nama\":\"Perikanan tangkap\"},{\"id\":87,\"var\":\"b4k21\",\"value\":\"05\",\"nama\":\"Perikanan budidaya\"},{\"id\":88,\"var\":\"b4k21\",\"value\":\"06\",\"nama\":\"Peternakan\"},{\"id\":89,\"var\":\"b4k21\",\"value\":\"07\",\"nama\":\"Kehutanan & pertanian lainnya\"},{\"id\":90,\"var\":\"b4k21\",\"value\":\"08\",\"nama\":\"Pertambangan\\/penggalian\"},{\"id\":91,\"var\":\"b4k21\",\"value\":\"09\",\"nama\":\"Industri pengolahan\"},{\"id\":92,\"var\":\"b4k21\",\"value\":\"10\",\"nama\":\"Listrik & gas\"},{\"id\":93,\"var\":\"b4k21\",\"value\":\"11\",\"nama\":\"Bangunan\\/kontruksi\"},{\"id\":94,\"var\":\"b4k21\",\"value\":\"12\",\"nama\":\"Perdagangan\"},{\"id\":95,\"var\":\"b4k21\",\"value\":\"13\",\"nama\":\"Hotel & rumah makan\"},{\"id\":96,\"var\":\"b4k21\",\"value\":\"14\",\"nama\":\"Transportasi & pergudangan\"},{\"id\":97,\"var\":\"b4k21\",\"value\":\"15\",\"nama\":\"Informasi & komunikasi\"},{\"id\":98,\"var\":\"b4k21\",\"value\":\"16\",\"nama\":\"Keuangan & asuransi\"},{\"id\":99,\"var\":\"b4k21\",\"value\":\"17\",\"nama\":\"Jasa pendidikan\"},{\"id\":100,\"var\":\"b4k21\",\"value\":\"18\",\"nama\":\"Jasa kesehatan\"},{\"id\":101,\"var\":\"b4k21\",\"value\":\"19\",\"nama\":\"Jasa kemasyarakatan, pemerintah, & perorangan\"},{\"id\":102,\"var\":\"b4k21\",\"value\":\"20\",\"nama\":\"Pemulung\"},{\"id\":103,\"var\":\"b4k21\",\"value\":\"21\",\"nama\":\"TKI\"},{\"id\":104,\"var\":\"b4k21\",\"value\":\"22\",\"nama\":\"Lainnya\"}]', '5', 0, '2024-11-01', 5, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1005, '999999', 'Status Penguasaan Bangunan Tempat Tinggal yang Ditempati di Desa/Kelurahan DESA DUMMY 2024', '[{\"Status\":\"1\",\"Jumlah\":11,\"Persentase\":\"22.00\"},{\"Status\":\"2\",\"Jumlah\":13,\"Persentase\":\"26.00\"},{\"Status\":\"3\",\"Jumlah\":9,\"Persentase\":\"18.00\"},{\"Status\":\"4\",\"Jumlah\":6,\"Persentase\":\"12.00\"},{\"Status\":\"5\",\"Jumlah\":11,\"Persentase\":\"22.00\"}]', '[{\"id\":1,\"var\":\"b3r1a\",\"value\":\"1\",\"nama\":\"Milik sendiri\"},{\"id\":2,\"var\":\"b3r1a\",\"value\":\"2\",\"nama\":\"Kontrak\\/sewa\"},{\"id\":3,\"var\":\"b3r1a\",\"value\":\"3\",\"nama\":\"Bebas sewa\"},{\"id\":4,\"var\":\"b3r1a\",\"value\":\"4\",\"nama\":\"Dinas\"},{\"id\":5,\"var\":\"b3r1a\",\"value\":\"5\",\"nama\":\"Lainnya\"}]', '6', 0, '2024-11-01', 2, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1006, '999999', 'Jumlah Keluarga Menurut Luas Lantai di Desa/Kelurahan DESA DUMMY 2024', '[{\"Jenis_Lantai\":\"01\",\"Jumlah\":11,\"Persentase\":\"22.00\"},{\"Jenis_Lantai\":\"02\",\"Jumlah\":5,\"Persentase\":\"10.00\"},{\"Jenis_Lantai\":\"03\",\"Jumlah\":3,\"Persentase\":\"6.00\"},{\"Jenis_Lantai\":\"04\",\"Jumlah\":5,\"Persentase\":\"10.00\"},{\"Jenis_Lantai\":\"05\",\"Jumlah\":7,\"Persentase\":\"14.00\"},{\"Jenis_Lantai\":\"06\",\"Jumlah\":3,\"Persentase\":\"6.00\"},{\"Jenis_Lantai\":\"07\",\"Jumlah\":5,\"Persentase\":\"10.00\"},{\"Jenis_Lantai\":\"08\",\"Jumlah\":5,\"Persentase\":\"10.00\"},{\"Jenis_Lantai\":\"09\",\"Jumlah\":3,\"Persentase\":\"6.00\"},{\"Jenis_Lantai\":\"10\",\"Jumlah\":3,\"Persentase\":\"6.00\"}]', '[{\"id\":6,\"var\":\"b3r3\",\"value\":\"01\",\"nama\":\"Marmer\\/granit\"},{\"id\":7,\"var\":\"b3r3\",\"value\":\"02\",\"nama\":\"Keramik\"},{\"id\":8,\"var\":\"b3r3\",\"value\":\"03\",\"nama\":\"Parket\\/vinil\\/permadani\"},{\"id\":9,\"var\":\"b3r3\",\"value\":\"04\",\"nama\":\"Ubin\\/tegel\\/teraso\"},{\"id\":10,\"var\":\"b3r3\",\"value\":\"05\",\"nama\":\"Kayu\\/papan kualitas tinggi\"},{\"id\":11,\"var\":\"b3r3\",\"value\":\"06\",\"nama\":\"Semen\\/bata merah\"},{\"id\":12,\"var\":\"b3r3\",\"value\":\"07\",\"nama\":\"Bambu\"},{\"id\":13,\"var\":\"b3r3\",\"value\":\"08\",\"nama\":\"Kayu\\/papan kualitas rendah\"},{\"id\":14,\"var\":\"b3r3\",\"value\":\"09\",\"nama\":\"Tanah\"},{\"id\":15,\"var\":\"b3r3\",\"value\":\"10\",\"nama\":\"Lainnya\"}]', '7', 0, '2024-11-01', 2, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1007, '999999', 'Jumlah Keluarga Menurut Jenis Dinding Terluas di Desa/Kelurahan DESA DUMMY 2024', '[{\"Jenis_Dinding\":\"1\",\"Jumlah\":11,\"Persentase\":\"22.00\"},{\"Jenis_Dinding\":\"2\",\"Jumlah\":9,\"Persentase\":\"18.00\"},{\"Jenis_Dinding\":\"3\",\"Jumlah\":4,\"Persentase\":\"8.00\"},{\"Jenis_Dinding\":\"4\",\"Jumlah\":4,\"Persentase\":\"8.00\"},{\"Jenis_Dinding\":\"5\",\"Jumlah\":5,\"Persentase\":\"10.00\"},{\"Jenis_Dinding\":\"6\",\"Jumlah\":10,\"Persentase\":\"20.00\"},{\"Jenis_Dinding\":\"7\",\"Jumlah\":7,\"Persentase\":\"14.00\"}]', '[{\"id\":26,\"var\":\"b3r4a\",\"value\":\"1\",\"nama\":\"Tembok\"},{\"id\":27,\"var\":\"b3r4a\",\"value\":\"2\",\"nama\":\"Plesteran anyaman bambu\\/kawat\"},{\"id\":28,\"var\":\"b3r4a\",\"value\":\"3\",\"nama\":\"Kayu\"},{\"id\":29,\"var\":\"b3r4a\",\"value\":\"4\",\"nama\":\"Anyaman bambu\"},{\"id\":30,\"var\":\"b3r4a\",\"value\":\"5\",\"nama\":\"Batang kayu\"},{\"id\":31,\"var\":\"b3r4a\",\"value\":\"6\",\"nama\":\"Bambu\"},{\"id\":32,\"var\":\"b3r4a\",\"value\":\"7\",\"nama\":\"Lainnya\"}]', '8', 0, '2024-11-01', 2, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1008, '999999', 'Jumlah Keluarga Menurut Jenis Atap Terluas di Desa/Kelurahan DESA DUMMY 2024', '[{\"Jenis_Atap\":\"01\",\"Jumlah\":8,\"Persentase\":\"16.00\"},{\"Jenis_Atap\":\"02\",\"Jumlah\":3,\"Persentase\":\"6.00\"},{\"Jenis_Atap\":\"03\",\"Jumlah\":2,\"Persentase\":\"4.00\"},{\"Jenis_Atap\":\"04\",\"Jumlah\":2,\"Persentase\":\"4.00\"},{\"Jenis_Atap\":\"05\",\"Jumlah\":6,\"Persentase\":\"12.00\"},{\"Jenis_Atap\":\"06\",\"Jumlah\":4,\"Persentase\":\"8.00\"},{\"Jenis_Atap\":\"07\",\"Jumlah\":6,\"Persentase\":\"12.00\"},{\"Jenis_Atap\":\"08\",\"Jumlah\":5,\"Persentase\":\"10.00\"},{\"Jenis_Atap\":\"09\",\"Jumlah\":9,\"Persentase\":\"18.00\"},{\"Jenis_Atap\":\"10\",\"Jumlah\":5,\"Persentase\":\"10.00\"}]', '[{\"id\":16,\"var\":\"b3r5a\",\"value\":\"01\",\"nama\":\"Beton\\/genteng beton\"},{\"id\":17,\"var\":\"b3r5a\",\"value\":\"02\",\"nama\":\"Genteng keramik\"},{\"id\":18,\"var\":\"b3r5a\",\"value\":\"03\",\"nama\":\"Genteng metal\"},{\"id\":19,\"var\":\"b3r5a\",\"value\":\"04\",\"nama\":\"Genteng tanah liat\"},{\"id\":20,\"var\":\"b3r5a\",\"value\":\"05\",\"nama\":\"Asbes\"},{\"id\":21,\"var\":\"b3r5a\",\"value\":\"06\",\"nama\":\"Seng\"},{\"id\":22,\"var\":\"b3r5a\",\"value\":\"07\",\"nama\":\"Sirap\"},{\"id\":23,\"var\":\"b3r5a\",\"value\":\"08\",\"nama\":\"Bambu\"},{\"id\":24,\"var\":\"b3r5a\",\"value\":\"09\",\"nama\":\"Jerami\\/ijuk\\/daun daunan\\/rumbia\"},{\"id\":25,\"var\":\"b3r5a\",\"value\":\"10\",\"nama\":\"Lainnya\"},{\"id\":33,\"var\":\"b3r5a\",\"value\":\"01\",\"nama\":\"Beton\\/genteng beton\"},{\"id\":34,\"var\":\"b3r5a\",\"value\":\"02\",\"nama\":\"Genteng keramik\"},{\"id\":35,\"var\":\"b3r5a\",\"value\":\"03\",\"nama\":\"Genteng metal\"},{\"id\":36,\"var\":\"b3r5a\",\"value\":\"04\",\"nama\":\"Genteng tanah liat\"},{\"id\":37,\"var\":\"b3r5a\",\"value\":\"05\",\"nama\":\"Asbes\"},{\"id\":38,\"var\":\"b3r5a\",\"value\":\"06\",\"nama\":\"Seng\"},{\"id\":39,\"var\":\"b3r5a\",\"value\":\"07\",\"nama\":\"Sirap\"},{\"id\":40,\"var\":\"b3r5a\",\"value\":\"08\",\"nama\":\"Bambu\"},{\"id\":41,\"var\":\"b3r5a\",\"value\":\"09\",\"nama\":\"Jerami\\/ijuk\\/daun daunan\\/rumbia\"},{\"id\":42,\"var\":\"b3r5a\",\"value\":\"10\",\"nama\":\"Lainnya\"}]', '9', 0, '2024-11-01', 2, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1009, '999999', 'Jumlah Keluarga Menurut Penggunaan Fasilitas Tempat Buang Air Besar di Desa/Kelurahan DESA DUMMY 2024', '[{\"Fasilitas_BAB\":\"1\",\"Jumlah\":21,\"Persentase\":\"42.00\"},{\"Fasilitas_BAB\":\"2\",\"Jumlah\":17,\"Persentase\":\"34.00\"},{\"Fasilitas_BAB\":\"3\",\"Jumlah\":12,\"Persentase\":\"24.00\"}]', '[{\"id\":43,\"var\":\"b3r11a\",\"value\":\"1\",\"nama\":\"Sendiri\"},{\"id\":44,\"var\":\"b3r11a\",\"value\":\"2\",\"nama\":\"Bersama\"},{\"id\":45,\"var\":\"b3r11a\",\"value\":\"3\",\"nama\":\"Umum\"},{\"id\":46,\"var\":\"b3r11a\",\"value\":\"4\",\"nama\":\"Tidak ada\"}]', '10', 0, '2024-11-01', 2, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1010, '999999', 'Jumlah Keluarga Menurut Jenis Kloset di Desa/Kelurahan DESA DUMMY 2024', '[{\"Jenis_Kloset\":\"1\",\"Jumlah\":9,\"Persentase\":\"18.00\"},{\"Jenis_Kloset\":\"2\",\"Jumlah\":7,\"Persentase\":\"14.00\"},{\"Jenis_Kloset\":\"3\",\"Jumlah\":23,\"Persentase\":\"46.00\"},{\"Jenis_Kloset\":\"4\",\"Jumlah\":11,\"Persentase\":\"22.00\"}]', '[{\"id\":47,\"var\":\"b3r11b\",\"value\":\"1\",\"nama\":\"Leher angsa\"},{\"id\":48,\"var\":\"b3r11b\",\"value\":\"2\",\"nama\":\"Plengsengan\"},{\"id\":49,\"var\":\"b3r11b\",\"value\":\"3\",\"nama\":\"Cemplung\\/cubluk\"},{\"id\":50,\"var\":\"b3r11b\",\"value\":\"4\",\"nama\":\"Tidak pakai\"}]', '11', 0, '2024-11-01', 2, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1011, '999999', 'Populasi DESA DUMMY 2024', '[{\"Populasi\":199}]', NULL, '12', 1, '2024-11-01', 1, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1012, '999999', 'Agama DESA DUMMY 2024', '[{\"Agama\":\"1\",\"total\":35,\"persentase\":\"17.58794\"}]', '[{\"id\":105,\"var\":\"b4k23\",\"value\":\"1\",\"nama\":\"Islam\"},{\"id\":106,\"var\":\"b4k23\",\"value\":\"2\",\"nama\":\"Protestan\"},{\"id\":107,\"var\":\"b4k23\",\"value\":\"3\",\"nama\":\"Katolik\"},{\"id\":108,\"var\":\"b4k23\",\"value\":\"4\",\"nama\":\"Hindu\"},{\"id\":109,\"var\":\"b4k23\",\"value\":\"5\",\"nama\":\"Budha\"},{\"id\":110,\"var\":\"b4k23\",\"value\":\"6\",\"nama\":\"Konghucu\"},{\"id\":111,\"var\":\"b4k23\",\"value\":\"7\",\"nama\":\"Lainnya\"}]', '13', 1, '2024-11-01', 1, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1013, '999999', 'Suku Mayoritas DESA DUMMY 2024', '[{\"Suku\":\"08\",\"total\":18,\"persentase\":\"9.04523\"}]', '[{\"id\":112,\"var\":\"b4k24\",\"value\":\"01\",\"nama\":\"Arab\"},{\"id\":113,\"var\":\"b4k24\",\"value\":\"02\",\"nama\":\"Ambon\"},{\"id\":114,\"var\":\"b4k24\",\"value\":\"03\",\"nama\":\"Bali\"},{\"id\":115,\"var\":\"b4k24\",\"value\":\"04\",\"nama\":\"Batak\"},{\"id\":116,\"var\":\"b4k24\",\"value\":\"05\",\"nama\":\"Betawi\"},{\"id\":117,\"var\":\"b4k24\",\"value\":\"06\",\"nama\":\"Bugis\"},{\"id\":118,\"var\":\"b4k24\",\"value\":\"07\",\"nama\":\"China\"},{\"id\":119,\"var\":\"b4k24\",\"value\":\"08\",\"nama\":\"Dayak\"},{\"id\":120,\"var\":\"b4k24\",\"value\":\"09\",\"nama\":\"India\"},{\"id\":121,\"var\":\"b4k24\",\"value\":\"10\",\"nama\":\"Jawa\"},{\"id\":122,\"var\":\"b4k24\",\"value\":\"11\",\"nama\":\"Madura\"},{\"id\":123,\"var\":\"b4k24\",\"value\":\"12\",\"nama\":\"Melayu\"},{\"id\":124,\"var\":\"b4k24\",\"value\":\"13\",\"nama\":\"Minang\"},{\"id\":125,\"var\":\"b4k24\",\"value\":\"14\",\"nama\":\"Papua\"},{\"id\":126,\"var\":\"b4k24\",\"value\":\"15\",\"nama\":\"Sunda\"},{\"id\":127,\"var\":\"b4k24\",\"value\":\"16\",\"nama\":\"Timor\"},{\"id\":128,\"var\":\"b4k24\",\"value\":\"17\",\"nama\":\"Lainnya\"}]', '14', 1, '2024-11-01', 1, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1014, '999999', 'Tempat Tinggal DESA DUMMY 2024', '[{\"Tempat Tinggal\":\"2\",\"total\":13,\"persentase\":\"26.00000\"}]', '[{\"id\":1,\"var\":\"b3r1a\",\"value\":\"1\",\"nama\":\"Milik sendiri\"},{\"id\":2,\"var\":\"b3r1a\",\"value\":\"2\",\"nama\":\"Kontrak\\/sewa\"},{\"id\":3,\"var\":\"b3r1a\",\"value\":\"3\",\"nama\":\"Bebas sewa\"},{\"id\":4,\"var\":\"b3r1a\",\"value\":\"4\",\"nama\":\"Dinas\"},{\"id\":5,\"var\":\"b3r1a\",\"value\":\"5\",\"nama\":\"Lainnya\"}]', '15', 1, '2024-11-01', 2, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1015, '999999', 'Lantai DESA DUMMY 2024', '[{\"Lantai\":\"01\",\"total\":11,\"persentase\":\"22.00000\"}]', '[{\"id\":6,\"var\":\"b3r3\",\"value\":\"01\",\"nama\":\"Marmer\\/granit\"},{\"id\":7,\"var\":\"b3r3\",\"value\":\"02\",\"nama\":\"Keramik\"},{\"id\":8,\"var\":\"b3r3\",\"value\":\"03\",\"nama\":\"Parket\\/vinil\\/permadani\"},{\"id\":9,\"var\":\"b3r3\",\"value\":\"04\",\"nama\":\"Ubin\\/tegel\\/teraso\"},{\"id\":10,\"var\":\"b3r3\",\"value\":\"05\",\"nama\":\"Kayu\\/papan kualitas tinggi\"},{\"id\":11,\"var\":\"b3r3\",\"value\":\"06\",\"nama\":\"Semen\\/bata merah\"},{\"id\":12,\"var\":\"b3r3\",\"value\":\"07\",\"nama\":\"Bambu\"},{\"id\":13,\"var\":\"b3r3\",\"value\":\"08\",\"nama\":\"Kayu\\/papan kualitas rendah\"},{\"id\":14,\"var\":\"b3r3\",\"value\":\"09\",\"nama\":\"Tanah\"},{\"id\":15,\"var\":\"b3r3\",\"value\":\"10\",\"nama\":\"Lainnya\"}]', '16', 1, '2024-11-01', 2, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1016, '999999', 'Dinding DESA DUMMY 2024', '[{\"Dinding\":\"1\",\"total\":11,\"persentase\":\"22.00000\"}]', '[{\"id\":26,\"var\":\"b3r4a\",\"value\":\"1\",\"nama\":\"Tembok\"},{\"id\":27,\"var\":\"b3r4a\",\"value\":\"2\",\"nama\":\"Plesteran anyaman bambu\\/kawat\"},{\"id\":28,\"var\":\"b3r4a\",\"value\":\"3\",\"nama\":\"Kayu\"},{\"id\":29,\"var\":\"b3r4a\",\"value\":\"4\",\"nama\":\"Anyaman bambu\"},{\"id\":30,\"var\":\"b3r4a\",\"value\":\"5\",\"nama\":\"Batang kayu\"},{\"id\":31,\"var\":\"b3r4a\",\"value\":\"6\",\"nama\":\"Bambu\"},{\"id\":32,\"var\":\"b3r4a\",\"value\":\"7\",\"nama\":\"Lainnya\"}]', '17', 1, '2024-11-01', 2, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1017, '999999', 'Fasilitas BAB DESA DUMMY 2024', '[{\"Fasilitas BAB\":\"1\",\"total\":21,\"persentase\":\"42.00000\"}]', '[{\"id\":43,\"var\":\"b3r11a\",\"value\":\"1\",\"nama\":\"Sendiri\"},{\"id\":44,\"var\":\"b3r11a\",\"value\":\"2\",\"nama\":\"Bersama\"},{\"id\":45,\"var\":\"b3r11a\",\"value\":\"3\",\"nama\":\"Umum\"},{\"id\":46,\"var\":\"b3r11a\",\"value\":\"4\",\"nama\":\"Tidak ada\"}]', '18', 1, '2024-11-01', 2, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1018, '999999', 'Wanita 10-49 Tahun KB DESA DUMMY 2024', '[{\"Wanita 10-49 Tahun Ber-KB\":83}]', NULL, '19', 1, '2024-11-01', 3, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1019, '999999', ' DESA DUMMY 2024', '[{\"Jumlah Penduduk Cacat\":183}]', '[{\"id\":60,\"var\":\"b4k12\",\"value\":\"00\",\"nama\":\"Tidak cacat\"},{\"id\":61,\"var\":\"b4k12\",\"value\":\"01\",\"nama\":\"Tuna daksa\\/cacat tubuh\"},{\"id\":62,\"var\":\"b4k12\",\"value\":\"02\",\"nama\":\"Tuna netra\\/buta\"},{\"id\":63,\"var\":\"b4k12\",\"value\":\"03\",\"nama\":\"Tuna rungu\"},{\"id\":64,\"var\":\"b4k12\",\"value\":\"04\",\"nama\":\"Tuna wicara\"},{\"id\":65,\"var\":\"b4k12\",\"value\":\"05\",\"nama\":\"Tuna rungu & wicara\"},{\"id\":66,\"var\":\"b4k12\",\"value\":\"06\",\"nama\":\"Tuna netra & cacat tubuh\"},{\"id\":67,\"var\":\"b4k12\",\"value\":\"07\",\"nama\":\"Tuna netra, rungu, & wicara\"},{\"id\":68,\"var\":\"b4k12\",\"value\":\"08\",\"nama\":\"Tuna rungu, wicara, & cacat tubuh\"},{\"id\":69,\"var\":\"b4k12\",\"value\":\"09\",\"nama\":\"Tuna rungu, wicara, netra, & cacat tubuh\"},{\"id\":70,\"var\":\"b4k12\",\"value\":\"10\",\"nama\":\"Cacat mental retardasi\"},{\"id\":71,\"var\":\"b4k12\",\"value\":\"11\",\"nama\":\"Mantan penderita gangguan jiwa\"},{\"id\":72,\"var\":\"b4k12\",\"value\":\"12\",\"nama\":\"Cacat fisik & mental\"}]', '20', 1, '2024-11-01', 3, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1020, '999999', ' DESA DUMMY 2024', '[{\"Penduduk Tidak Bersekolah Lagi\":76}]', '[{\"id\":73,\"var\":\"b4k15\",\"value\":\"0\",\"nama\":\"Tidak\\/belum pernah sekolah\"},{\"id\":74,\"var\":\"b4k15\",\"value\":\"1\",\"nama\":\"Masih sekolah\"},{\"id\":75,\"var\":\"b4k15\",\"value\":\"2\",\"nama\":\"Tidak bersekolah lagi\"}]', '21', 1, '2024-11-01', 4, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1021, '999999', ' DESA DUMMY 2024', '[{\"Penduduk Belum Pernah Sekolah\":69}]', '[{\"id\":73,\"var\":\"b4k15\",\"value\":\"0\",\"nama\":\"Tidak\\/belum pernah sekolah\"},{\"id\":74,\"var\":\"b4k15\",\"value\":\"1\",\"nama\":\"Masih sekolah\"},{\"id\":75,\"var\":\"b4k15\",\"value\":\"2\",\"nama\":\"Tidak bersekolah lagi\"}]', '22', 1, '2024-11-01', 4, '2024-11-22 00:45:45', '2024-11-22 00:45:45');
INSERT INTO `tabulasis` (`id`, `id_desa`, `judul_tabel`, `data`, `metadata`, `id_table`, `highlight`, `tanggal`, `kategori`, `created_at`, `updated_at`) VALUES
(1022, '999999', ' DESA DUMMY 2024', '[{\"Ijazah Tertinggi SD\":31}]', '[{\"id\":76,\"var\":\"b4k18\",\"value\":\"0\",\"nama\":\"Tidak punya ijazah\"},{\"id\":77,\"var\":\"b4k18\",\"value\":\"1\",\"nama\":\"SD\\/sederajat\"},{\"id\":78,\"var\":\"b4k18\",\"value\":\"2\",\"nama\":\"SMP\\/sederajat\"},{\"id\":79,\"var\":\"b4k18\",\"value\":\"3\",\"nama\":\"SMA\\/sederajat\"},{\"id\":80,\"var\":\"b4k18\",\"value\":\"4\",\"nama\":\"D1\\/D2\\/D3\"},{\"id\":81,\"var\":\"b4k18\",\"value\":\"5\",\"nama\":\"D4\\/S1\"},{\"id\":82,\"var\":\"b4k18\",\"value\":\"6\",\"nama\":\"S2\\/S3\"}]', '23', 1, '2024-11-01', 4, '2024-11-22 00:45:45', '2024-11-22 00:45:45'),
(1023, '999999', ' DESA DUMMY 2024', '[{\"Ijazah Tertinggi SMP\":31}]', '[{\"id\":76,\"var\":\"b4k18\",\"value\":\"0\",\"nama\":\"Tidak punya ijazah\"},{\"id\":77,\"var\":\"b4k18\",\"value\":\"1\",\"nama\":\"SD\\/sederajat\"},{\"id\":78,\"var\":\"b4k18\",\"value\":\"2\",\"nama\":\"SMP\\/sederajat\"},{\"id\":79,\"var\":\"b4k18\",\"value\":\"3\",\"nama\":\"SMA\\/sederajat\"},{\"id\":80,\"var\":\"b4k18\",\"value\":\"4\",\"nama\":\"D1\\/D2\\/D3\"},{\"id\":81,\"var\":\"b4k18\",\"value\":\"5\",\"nama\":\"D4\\/S1\"},{\"id\":82,\"var\":\"b4k18\",\"value\":\"6\",\"nama\":\"S2\\/S3\"}]', '24', 1, '2024-11-01', 4, '2024-11-22 00:45:45', '2024-11-22 00:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `id_desa` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `id_desa`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '110014', 'Admin', 'admin@admin.com', NULL, '$2y$12$RygIqKHsMsXai1FVDmEspO3HSlIEolSyJVo1HD/2d7rHvtZgMV70S', NULL, NULL, NULL),
(2, '999999', 'Zuhdi Ali Hisyam', 'hisyam@hisyam.com', NULL, '$2y$12$aE3uKVbAE4DiiQeTWDV6JunhQ333p.lcKhVf26BWEspUgJSjgf9ia', NULL, NULL, NULL),
(3, '110014', 'Fahmi Saputra', 'fahmi@fahmi.com', NULL, '$2y$12$oVWvMrkH1CTlMSj2rZ6JQ.RjX9MLgLS.r87KKAsHPJBls3j4b28ci', NULL, NULL, NULL),
(6, '999999', 'Admin Desa Dummy', 'dummy@dummy.com', NULL, '$2y$12$zLxGQQn3dS8SwxjdwV42Qe45zz2bSzB6EpR7J15x7gCVcwkPID/rW', NULL, '2024-11-20 20:32:58', '2024-11-20 20:32:58');

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
-- Indexes for table `environments`
--
ALTER TABLE `environments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `environments_kode_desa_unique` (`id_desa`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `FK_Environment` (`id_desa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akomodasis`
--
ALTER TABLE `akomodasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `environments`
--
ALTER TABLE `environments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasis`
--
ALTER TABLE `informasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tabulasis`
--
ALTER TABLE `tabulasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1024;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_Environment` FOREIGN KEY (`id_desa`) REFERENCES `environments` (`id_desa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
