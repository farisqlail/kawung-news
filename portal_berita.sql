-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 08:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` longtext NOT NULL,
  `image` text,
  `reader` int(11) DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `user_id`, `kategori_id`, `judul`, `konten`, `image`, `reader`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 1, 2, 'Pemerintah AS Tutup, 1,3 Juta Tentara Terancam Tak Digaji', '<p><strong>Jakarta</strong> - Pemerintahan Amerika Serikat (AS) tutup atau ''shutdown'', kondisi ini terjadi karena adanya ketidaksepakatan anggaran yang akan digunakan di dalam operasional pemerintahan AS. Selain berdampak pada karyawan Gedung Putih yang terpaksa dicutikan, Militer AS yang saat ini tengah bertugas terancam tidak digaji. Militer yang dianggap penting dan masih akan melaporkan tugasnya dan termasuk pasukan mereka yang berada dalam pertempuran berpotensi tidak dibayar saat shutdown.Jika shutdown berlangsung selama berminggu-minggu, sekitar 1,3 juta tenaga kerja aktif berpotensi bekerja tanpa bayaran. Militer saat ini dibayar sampai 1 Februari.</p><p>Selain itu, banyak pegawai Departemen Pertahanan Sipil tidak akan bekerja selama penutupan, termasuk instruktur di akademi militer dan kontraktor pemeliharaan.Sebagai informasi, kondisi Pemerintahan AS yang saat ini tutup diketahui bahwa rencana anggaran pengganti atau ''stopgap spending-bill'' gagal diloloskan oleh Senat AS dalam voting pada Jumat (19/1) malam waktu AS. Rencana anggaran ini sebelumnya diloloskan oleh HOR pada Kamis (18/1) malam waktu AS. Dengan tidak diloloskannya rencana anggaran, maka pemerintah AS tidak memiliki dana untuk menjalankan operasionalnya. Situasi ini yang membuat pemerintah AS tutup, atau yang biasa disebut sebagai ''government shutdown''.&nbsp;</p><p>Situasi ''government shutdown'' terjadi saat Kongres tidak meloloskan rencana anggaran federal untuk tahun fiskal mendatang yang diajukan Presiden AS. Rencana anggaran itu untuk membiayai pemerintahan dan operasional departemen federal AS.Dalam situasi ini, departemen-departemen tidak esensial akan tutup sementara hingga rencana anggaran disepakati oleh Kongres AS. Jangka waktu penutupan pemerintah AS tidak bisa diperkirakan, karena tergantung lobi parlemen. Hingga kini, para Senator AS masih terus berunding di Capitol Hill, Washington DC. Berbagai lobi dan upaya dilakukan agar kesepakatan bisa dicapai dalam pembahasan rencana anggaran. Kemungkinan besar, rencana anggaran yang baru akan diajukan dan dibahas untuk nantinya di-voting lagi.Pemerintahan AS tercatat sebelumnya sudah melakukan 18 kali pemerintah AS tutup karena tidak tercapainya kesepakatan terkait anggaran pemerintahan.Total pemerintah AS tutup sebanyak 18 kali shutdown sejak tahun 1976. Namun sebelum tahun 1981, kebanyakan departemen pemerintah tetap beroperasi normal saat pemerintah AS tutup. Biaya operasional pemerintahan AS saat itu ditalangi oleh dana yang telah disepakati terlebih dahulu oleh Kongres AS. Pembiayaannya ditalangi secara surut. <strong>(zlf/zlf)</strong></p>', '2018-01-21 09-46-24_artikel.jpg', 29, '2018-01-21 09:46:24', '2018-01-24 20:09:24', NULL),
(4, 1, 1, 'Ribuan Cambuk Diderakan, Efektifkah Menekan Kejahatan di Aceh?', '<p><strong>Jakarta</strong> - Sejak tahun 2015, ribuan cambuk telah diderakan kepada pelaku kejahatan asusila di Aceh. Terakhir, dilaksankan untuk germo PSK online pada Jumat (19/1) lalu. Efektifkah hukuman cambuk untuk menekan angka kejahatan?Payung hukum hukuman cambuk di bawah Qanun Jinayat (Perda) Nomor 7/2013 yang berlaku efektif sejak Oktober 2015. Dalam catatan Institue for Criminal Justice Reform (ICJR), ribuan cambukan telah diderakan ke para terpidana kurun 2015-2017. "Catatan ICJR menunjukan sedikitnya 4.945 cambukan telah dilakukan," demikian lansir ICJR dalam siaran pers yang diterima detikcom beberapa waktu lalu.</p><figure class="image"><img src="https://newrevive.detik.com/delivery/lg.php?bannerid=0&amp;campaignid=0&amp;zoneid=642&amp;loc=https%3A%2F%2Fnews.detik.com%2Fberita%2Fd-3825824%2Fribuan-cambuk-diderakan-efektifkah-menekan-kejahatan-di-aceh%3F_ga%3D2.67779985.1619200485.1516524007-853823637.1516019337&amp;referer=https%3A%2F%2Fwww.detik.com%2F&amp;cb=71c017d33b"></figure><p>Mereka yang dicambuk karena melakukan kejahatan minuman keras, hubungan sejenis, perluasan zina dalam khalwat. Paling banyak dilakukan yaitu terkait pidana judi, bermesraan dan zina. Pada 2017, cambukan pertama dirasakan oleh sepasang pelaku liwath (hubungan sesama jenis)."Pemberlakuan hukuman cambuk tidaklah menimbulkan dampak positif sama sekali sebagaimana diharapkan ketika aturan itu diberlakukan. Hukuman cambuk telah gagal karena jumlah tindak pidana tetap tinggi, khususnya pada tindak perjudian dan minuman keras. Sehingga anggapan skema pidana cambuk ini sebenarnya gagal mencapai tujuannya sehingga harus dievaluasi," paparnya.Menurut ICJR, pidana cambuk merupakan penyiksaan, kejam, tidak manusiawi dan merendahkan martabat. Selain itu juga melanggar hukum internasional tentang penyiksaan dan perlakuan kejam dan tidak bermartabat."Hukuman cambuk yang dulunya dianggap bisa menunjukkan sanksi sosial untuk mempermalukan dan digadang-gadang dapat menimbulkan efek jera, kini bergeser tidak hanya untuk mempermalukan semata namun juga untuk menyakiti psikis dan fisik. Yang jelas-jelas dilarang secara tegas dalam hukum nasional Indonesia dan hukum HAM," pungkasnya.&nbsp;</p><p><strong>(asp/rvk)</strong></p>', NULL, 1, '2018-01-21 10:03:10', '2018-01-24 20:25:28', NULL),
(12, 1, 2, 'KPK Berharap Polisi Segera Ungkap Pelaku Teror ke Novel', '                                                                        Jakarta - KPK terus berkoordinasi dengan Polda Metro Jaya terkait kasus teror terhadap penyidiknya, Novel Baswedan. Pengusutan kasus Novel disebut KPK berjalan positif.\n\n"Pimpinan masih berkoordinasi terus dengan Polda Metro Jaya. Kita berharap dalam waktu yang tidak cukup lama. Ini kan sudah lebih dari 9 bulan, sketsa sudah disebar, ada perkembangan lah yang cukup positif," kata Kabiro Humas KPK Febri Diansyah di gedung KPK, Jalan Kuningan Persada, Jakarta Selatan, Senin (22/1/2018).\n\nFebri menyebut saat ini kewenangan penyidikan kasus teror terhadap Novel masih berada di kepolisian. Bila Presiden Joko Widodo nantinya membentuk tim gabungan pencari fakta (TGPF), KPK akan membantu sesuai kewenangan yang ada.\n\n"Kewenangan berada di Polri. Kalau pun nanti misalnya TGPF dibentuk oleh presiden, tentu saja kami akan beri support sesuai kewenangan KPK. KPK tidak berwenang menangani. Jadi yang bisa kami lakukan saat ini adalah koordinasi dengan pihak Polda," ujar Febri.\n\nHingga saat ini, Novel Baswedan masih menunggu jadwal operasi tahap kedua untuk mata kirinya di rumah sakit di Singapura. Novel harus menjalani operasi ulang tahap pertama pada 6 Desember 2017 karena pertumbuhan jaringan putih mata kirinya belum maksimal. \n\nOperasi ini dilakukan dengan menempelkan jaringan gusi pada mata kirinya untuk memperbaiki pertumbuhan jaringan putih mata.\n\nOperasi itu dilakukan setelah perawatan dan pemulihan sebelumnya tidak membawa hasil signifikan terhadap mata kiri Novel, yang mengalami kerusakan hingga 95 persen akibat paparan air keras. Novel pun harus dirawat di Singapura sejak 12 April 2017, sehari pascapenyerangan terjadi.\n\nPolisi belum menemukan tersangka penyiram air keras terhadap Novel. Polda Metro Jaya sudah menyebar sketsa empat terduga pelaku teror ke Polda se-Indonesia. \n(haf/fdn)                                                                                                                                                                                                                                                                                                ', 'kpk.jpg', 13, '2018-01-22 21:20:10', '2018-01-24 20:06:26', NULL),
(15, 1, 1, 'sadhf sdfkjsdg rkjweghrbd fsdakfjsd sdfsdjgh', 'iuere weotiljknf dsg sdlkhs fsdr;jklesr                                                                                                ', '[kertashitam.com]-daftar-anime.jpg', 5, '2018-01-22 23:03:19', '2018-01-24 19:42:06', NULL),
(16, 1, 1, 'qweqweqweqwe', 'wqeqweqweqwewe                                ', '', 3, '2018-01-23 19:04:44', '2018-01-24 19:50:29', NULL),
(20, 2, 2, 'dasdas sadasd sad sa', 'dasdas sadasd sad sa dasdas sadasd sad sa dasdas sadasd sad sa', '[kertashitam.com]-daftar-anime.jpg', 2, '2018-01-24 00:15:05', '2018-01-24 18:42:01', NULL),
(21, 2, 1, 'hdsfdsb dskfhlsd dsjkfhsdjf kjsdf', 'hdsfdsb dskfhlsd dsjkfhsdjf kjsdf hdsfdsb dskfhlsd dsjkfhsdjf kjsdf hdsfdsb dskfhlsd dsjkfhsdjf kjsdf hdsfdsb dskfhlsd dsjkfhsdjf kjsdf hdsfdsb dskfhlsd dsjkfhsdjf kjsdf', '[kertashitam.com]-daftar-anime.jpg', 5, '2018-01-24 00:17:03', '2018-01-24 19:46:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(119) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `keterangan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Berita', '2018-01-23 18:27:46', '2018-01-23 18:27:46', NULL),
(2, 'Politik', '2018-01-23 18:27:46', '2018-01-23 19:33:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `artikel_id` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `user_id`, `artikel_id`, `keterangan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 2, 3, 'test', '2018-01-24 19:25:28', '2018-01-24 19:25:28', NULL),
(3, 4, 3, 'test', '2018-01-24 19:50:55', '2018-01-24 19:50:55', NULL),
(4, 4, 3, 'test', '2018-01-24 19:50:59', '2018-01-24 19:50:59', NULL),
(5, 3, 3, 'test', '2018-01-24 20:01:49', '2018-01-24 20:01:49', NULL),
(6, 3, 3, 'halah', '2018-01-24 20:02:27', '2018-01-24 20:02:27', NULL),
(7, 2, 12, 'sdsad', '2018-01-24 20:02:52', '2018-01-24 20:02:52', NULL),
(8, 2, 12, 'sadasd', '2018-01-24 20:02:55', '2018-01-24 20:02:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` bit(1) NOT NULL DEFAULT b'0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$pBBx1/AOrEGkwpwySvyMtuY0Mm9A2fubrXVPcoETYsBYRIKXMvqiK', 'SIZNGprPzaCOyrQS45kCKKAWQxOfPmuxSFGikC2Z5yLmzGdA2DMgugxwuBtf', b'1', '2018-01-17 05:45:46', '2018-01-17 05:45:46'),
(2, 'Juminten', 'juminten@gmail.com', '4dc2eacab2ca4e11ff7d2f479414073e', NULL, b'0', '2018-01-17 05:45:46', '2018-01-17 05:45:46'),
(3, 'purwoto', 'purwoto@gmail.com', '6040c8be87a58f24a4592a0d13958083', NULL, b'0', '2018-01-17 05:45:46', '2018-01-17 05:45:46'),
(4, 'admin 1', 'admin1@gmail.com', '0192023a7bbd73250516f069df18b500', NULL, b'1', '2018-01-17 05:45:46', '2018-01-17 05:45:46'),
(5, 'kolili', 'kolili@gmail.com', 'daca5a0f75e4bffafd0856e3d28a0856', NULL, b'0', '2018-01-24 13:44:34', '2018-01-24 13:44:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `artikel_id` (`artikel_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artikel_ibfk_2` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`artikel_id`) REFERENCES `artikel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
