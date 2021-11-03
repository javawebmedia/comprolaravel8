-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 12:52 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comprolaravel8`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori_agenda` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_agenda` varchar(255) NOT NULL,
  `judul_agenda` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `status_agenda` varchar(20) NOT NULL,
  `jenis_agenda` varchar(20) NOT NULL,
  `keywords` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `hits` int(11) NOT NULL DEFAULT 0,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `tempat` text DEFAULT NULL,
  `google_map` text DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `id_user`, `id_kategori_agenda`, `bahasa`, `slug_agenda`, `judul_agenda`, `isi`, `status_agenda`, `jenis_agenda`, `keywords`, `gambar`, `icon`, `hits`, `urutan`, `tanggal_mulai`, `tanggal_selesai`, `jam_mulai`, `jam_selesai`, `tempat`, `google_map`, `tanggal_post`, `tanggal_publish`, `tanggal`) VALUES
(1, 4, 6, 'ID', 'latihan-agenda', 'Latihan Agenda', '<p>Latihan</p>', 'Publish', 'Agenda', 'adad', NULL, 'daad', 0, NULL, '2020-09-12', '2020-09-12', '08:00:00', '17:00:00', 'AWS Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7930.3386078467065!2d106.82893243028725!3d-6.372131203377098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed5d166b756d%3A0x41d8cdc14c819774!2sDepok%20Town%20Square!5e0!3m2!1sen!2sid!4v1579565022446!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', '2020-09-12 23:46:53', '2020-09-12 23:42:16', '2020-09-13 00:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT 0,
  `bahasa` enum('ID','EN') NOT NULL,
  `updater` varchar(32) DEFAULT '-',
  `slug_berita` varchar(255) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `jenis_berita` varchar(20) DEFAULT 'Berita',
  `keywords` text DEFAULT '',
  `gambar` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_user`, `id_kategori`, `bahasa`, `updater`, `slug_berita`, `judul_berita`, `isi`, `status_berita`, `jenis_berita`, `keywords`, `gambar`, `icon`, `hits`, `urutan`, `tanggal_mulai`, `tanggal_selesai`, `tanggal_post`, `tanggal_publish`, `tanggal`) VALUES
(8, 4, 0, 'ID', '', 'kursus-wordpress-mastering-cms', 'Kursus Wordpress (Mastering CMS)', '<h2>Deskripsi ringkas</h2>\r\n\r\n<p>Anda akan belajar membangun website pribadi, perusahaan, toko online dengan platform CMS (Content Management System) Wordpress dan database MySQL. Kursus ini tidak memerlukan koding yang berat. Cocok untuk yang ingin membuat website instan dengan cepat.</p>\r\n\r\n<hr />\r\n<p>Anda akan belajar membangun website pribadi, perusahaan,&nbsp;<strong>toko online&nbsp;</strong>dengan platform&nbsp;<strong>CMS (<em>Content Management System)&nbsp;</em>Wordpress</strong>&nbsp;dan database MySQL. Kursus ini tidak memerlukan koding yang berat. Cocok untuk yang ingin membuat website instan dengan cepat.</p>\r\n\r\n<h2><a name=\"_Toc32320282\"></a>Materi kursus</h2>\r\n\r\n<p>Anda akan mempelajari hal-hal berikut ini:</p>\r\n\r\n<ul>\r\n	<li>Dasar-dasar HTML5, CSS3 dan Bootstrap</li>\r\n	<li>Pembuatan website profil perusahaan dengan Wordpress</li>\r\n	<li>Pembuatan website&nbsp;<strong><em>online store</em></strong>&nbsp;dengan Wordpress dengan plugin Woocommerce</li>\r\n</ul>\r\n\r\n<h2><a name=\"_Toc32320283\"></a>Tujuan Kursus</h2>\r\n\r\n<p>Setelah Anda belajar&nbsp;di&nbsp;<strong>Kursus Web Design</strong>, Anda dapat:</p>\r\n\r\n<ul>\r\n	<li>Mengelola konten website dengan CMS.</li>\r\n	<li>Membangun website profil perusahaan dan&nbsp;<strong><em>online store</em></strong>&nbsp;dengan CMS Wordpress</li>\r\n	<li>Bekerja sebagai&nbsp;<strong>Content Creator dan Admin Toko Online.</strong></li>\r\n</ul>\r\n\r\n<h2><a name=\"_Toc32320284\"></a>Urutan materi</h2>\r\n\r\n<ol>\r\n	<li>Installasi Software pendukung</li>\r\n	<li>Dasar-dasar layouting dengan HTML dan CSS</li>\r\n	<li>Installasi CMS Wordpress</li>\r\n	<li>Pembuatan website&nbsp;<strong><em>company profile</em></strong></li>\r\n	<li>Mengelola plugin, widget dan menu</li>\r\n	<li>Memilih, mengelola dan mengubah template Wordpress</li>\r\n	<li>Pembuatan toko online dengan Plugin Woocommerce</li>\r\n	<li>Pengelolaan konten website, produk dan order toko online</li>\r\n	<li>Optimasi website Wordpress</li>\r\n	<li>Security website Wordpress</li>\r\n	<li>Pendaftaran website&nbsp;<em>Google Webmaster, Google Anayltic dan Google Business</em></li>\r\n</ol>\r\n\r\n<h2><a name=\"_Toc32320285\"></a>Software yang digunakan</h2>\r\n\r\n<p>XAMPP, Sublime Text/Notepad/Visual Studio, Browser, Aplikasi pengolah gambar</p>\r\n\r\n<h3>&nbsp;</h3>', 'Publish', 'Layanan', 'Anda akan belajar membangun website pribadi, perusahaan, toko online dengan Wordpress. Kursus ini tidak memerlukan koding yang berat. Cocok untuk membuat website instan dengan cepat.', '1-1600727475.png', 'fa fa-globe', 82, 3, NULL, NULL, '2020-01-16 08:04:58', '2020-01-16 08:01:54', '2020-09-21 22:40:26'),
(9, 4, 0, 'ID', '', 'kursus-advanced-web-programming', 'Kursus Advanced Web Programming', '<h2>Deskripsi ringkas</h2>\r\n\r\n<p>Anda akan belajar membangun aplikasi berbasis website (web based application) dengan menggunakan bootstrap, framework JavaScript, PHP framework Codeigniter/Laravel dan database MySQL.</p>\r\n\r\n<hr />\r\n<p>Anda akan belajar membangun&nbsp;<strong>aplikasi berbasis website (<em>web based application</em>)</strong>&nbsp;dengan menggunakan bootstrap, framework JavaScript,&nbsp;<strong><em>PHP framework</em></strong><em>&nbsp;<strong>Codeigniter/Laravel&nbsp;</strong></em>dan database MySQL.</p>\r\n\r\n<h2><a name=\"_Toc32320307\"></a>Materi kursus</h2>\r\n\r\n<p>Anda akan mempelajari hal-hal berikut ini:</p>\r\n\r\n<ul>\r\n	<li>Membangun aplikasi berbasis website</li>\r\n	<li>Membuat laporan dengan berbagai format (PDF, Excel, Word dll)</li>\r\n	<li>Membangun web service (API)</li>\r\n	<li>Membangun aplikasi web dengan berbagai database (MySQL, Oracle, SQL Server, PostgreSQL dll)</li>\r\n	<li><strong><em>Data visualization</em></strong>&nbsp;(format grafik dan peta digital)</li>\r\n</ul>\r\n\r\n<h2><a name=\"_Toc32320308\"></a>Tujuan Kursus</h2>\r\n\r\n<p>Setelah Anda belajar&nbsp;di&nbsp;<strong>Kursus Web Development</strong>, Anda akan dapat:</p>\r\n\r\n<ul>\r\n	<li>Membangun aplikasi kompleks berbasis web dengan berbagai database</li>\r\n	<li>Bekerja sebagai&nbsp;<strong>&nbsp;Senior Web Web Developer.</strong></li>\r\n</ul>\r\n\r\n<h2><a name=\"_Toc32320309\"></a>Urutan materi</h2>\r\n\r\n<ol>\r\n	<li>Installasi Software pendukung</li>\r\n	<li>Merencanakan, membuat &amp; mengelola database MySQL</li>\r\n	<li>Integrasi template&nbsp;<em>front end&nbsp;</em>dan&nbsp;<em>back end&nbsp;</em>dengan framework PHP</li>\r\n	<li>Authentication (Login, Logout &amp; Proteksi Halaman)</li>\r\n	<li>CRUD&nbsp;<em>(Create, Read, Update &amp; Delete)&nbsp;</em>Dasar</li>\r\n	<li>CRUD Kompleks dengan relasi database</li>\r\n	<li>Membuat berbagai jenis laporan (PDF, Excel, Word, Web Service/API, dll)</li>\r\n	<li>Membuat data visualization (Grafik dan Peta Digital)</li>\r\n	<li>Security review atas aplikasi yang telah dibuat</li>\r\n	<li>Version control dengan Git</li>\r\n	<li>Upload web ke hosting atau meng-onlinekan website</li>\r\n</ol>\r\n\r\n<h2><a name=\"_Toc32320310\"></a>Software yang digunakan</h2>\r\n\r\n<p>XAMPP, Sublime Text/Notepad/Visual Studio, Browser, Aplikasi pengolah gambar, Composer dll.</p>', 'Publish', 'Layanan', 'Anda akan belajar membangun aplikasi berbasis website (web based application) dengan menggunakan bootstrap, framework JavaScript, PHP framework Codeigniter/Laravel dan database MySQL.', '6-1600727385.png', 'fa fa-laptop', 69, 2, NULL, NULL, '2020-01-16 08:08:16', '2020-01-16 08:07:46', '2020-09-21 22:29:46'),
(18, 4, 0, 'ID', '-', 'kursus-web-development', 'Kursus Web Development', '<h2>Deskripsi ringkas</h2>\r\n\r\n<p>Anda akan belajar membangun website profil perusahaan dengan menggunakan bootstrap, framework JavaScript, PHP framework Codeigniter / Larevel dan database MySQL.</p>\r\n\r\n<hr />\r\n<p>Anda akan belajar membangun website&nbsp;<strong>profil perusahaan</strong>&nbsp;dengan menggunakan bootstrap, framework JavaScript,&nbsp;<strong><em>PHP framework</em></strong><em>&nbsp;<strong>Codeigniter / Laravel</strong></em>&nbsp;dan database MySQL.</p>\r\n\r\n<h2><a name=\"_Toc32320297\"></a>Materi kursus</h2>\r\n\r\n<p>Anda akan mempelajari hal-hal berikut ini:</p>\r\n\r\n<ul>\r\n	<li>Dasar-dasar HTML, CSS dan Bootstrap</li>\r\n	<li>Mengembangkan website profil perusahaan dengan framework Codeigniter / Laraveldan database MySQL</li>\r\n	<li>Integrasi framework JavaScript dengan Codeigniter / Laravel</li>\r\n</ul>\r\n\r\n<h2><a name=\"_Toc32320298\"></a>Tujuan Kursus</h2>\r\n\r\n<p>Setelah Anda belajar&nbsp;di&nbsp;<strong>Kursus Web Development</strong>, Anda akan dapat:</p>\r\n\r\n<ul>\r\n	<li>Membuat website profil perusahaan (<em>company profile</em>) dengan framework Codeigniter / Laravel dan database MySQL</li>\r\n	<li>Aplikasi pendaftaran online sederhana</li>\r\n	<li>Bekerja sebagai&nbsp;<strong>&nbsp;Web Programmer&nbsp;</strong>atau&nbsp;<strong>Web Developer dengan keahlian Bootstrap, HTML, CSS, JavaScript dan framework Codeigniter / Larevel.</strong></li>\r\n</ul>\r\n\r\n<h2><a name=\"_Toc32320299\"></a>Urutan materi</h2>\r\n\r\n<ol>\r\n	<li>Installasi Software pendukung</li>\r\n	<li>Dasar-dasar HTML, CSS dan Bootstrap</li>\r\n	<li>Membuat&nbsp;<em><strong>Brief project ,&nbsp;</strong></em>yaitu merencanakan website yang akan dibuat sehingga nantinya bisa diwujudkan menjadi website sebenarnya</li>\r\n	<li>Merencanakan, membuat dan mengelola database MySQL</li>\r\n	<li>Integrasi template&nbsp;<em>front end&nbsp;</em>dan&nbsp;<em>back end&nbsp;</em>dengan framework Codeigniter / Laravel</li>\r\n	<li>Authentication (Login, Logout &amp; Proteksi Halaman)</li>\r\n	<li>CRUD&nbsp;<em>(Create, Read, Update &amp; Delete)&nbsp;</em>Dasar</li>\r\n	<li>CRUD Kompleks dengan relasi database</li>\r\n	<li>Laporan PDF dengan MPDF</li>\r\n	<li>Security review atas aplikasi yang telah dibuat</li>\r\n	<li>Upload web ke hosting atau meng-onlinekan website</li>\r\n</ol>\r\n\r\n<h2><a name=\"_Toc32320300\"></a>Software yang digunakan</h2>\r\n\r\n<p>XAMPP, Sublime Text/Notepad/Visual Studio, Browser, Aplikasi pengolah gambar, Composer dll.</p>', 'Publish', 'Layanan', 'Anda akan belajar membangun website profil perusahaan dengan menggunakan bootstrap, framework JavaScript, PHP framework Codeigniter / Larevel dan database MySQL.', '2-1600727318.png', NULL, NULL, 1, NULL, NULL, '2020-09-15 23:29:49', '2020-09-15 23:29:03', '2020-09-21 22:28:39'),
(19, 4, 6, 'ID', '-', 'tips-menerima-proyek-website-untuk-pemula', 'TIPS MENERIMA PROYEK WEBSITE UNTUK PEMULA', '<h2>Kenapa ada Tips ini?</h2>\r\n\r\n<p>Banyak teman-teman Programmer pemula yang belum memiliki keberanian untuk mulai menerima proyek website. Mudah-mudahan dengan Tips sederhana ini, teman-teman semua mulai berani&nbsp;<strong>Belajar yang dibayarin&nbsp;</strong>dengan menerima Proyek Web.<br />\r\nSemoga Bermanfaat ya.</p>\r\n\r\n<p>Untuk mendapatkan Konsultasi &amp; Contoh dokumen pendukung (Kontrak, Proposal, Catatan Kebutuhan dll), silakan kontak:<br />\r\n<strong>Andoyo (085715100485)</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/08/3-13-1024x1024.jpg\" /></p>\r\n\r\n<p>#1 Catat kebutuhan client</p>\r\n\r\n<h2>#1 Catat kebutuhan client</h2>\r\n\r\n<p>Diskusikan kebutuhan dari client yang sesungguhnya.</p>\r\n\r\n<ul>\r\n	<li><strong>Tanyakan kebutuhannya</strong>&nbsp;apa saja, mulai dari websitenya untuk apa, fiturnya apa dsb. Jika ada yang kurang jelas, tanyakan.</li>\r\n	<li><strong>Buat Catatan</strong>&nbsp;dari hasil diskusi tersebut</li>\r\n	<li><strong>Bagikan Catatan</strong>&nbsp;tersebut kepada calon client, minta respon dan feedbacknya untuk mengkonfirmasi kebutuhan.</li>\r\n</ul>\r\n\r\n<p><strong>NOTE</strong>: Hindari memberikan perkiraan biaya pada client di tahap ini. Lihat&nbsp;<strong>#2 Buat estimasi biaya</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/08/4-10-1024x1024.jpg\" /></p>\r\n\r\n<p>#2&nbsp;Buat Estimasi Biaya</p>\r\n\r\n<h2>#2&nbsp;Buat Estimasi Biaya</h2>\r\n\r\n<p>Setelah berhasil memetakan kebutuhannya, buatlah estimasi biaya.</p>\r\n\r\n<ul>\r\n	<li>Hitung&nbsp;<strong>waktu pengerjaan</strong>&nbsp;per-fitur dari aplikasi/website tersebut. Konversi dalam jam.</li>\r\n	<li>Hitung kira-kira Anda mau&nbsp;<strong>dibayar berapa perjam</strong>&nbsp;dalam mengerjakan website tersebut</li>\r\n	<li><strong>Buat akumulasi</strong>&nbsp;dari perhitungan biaya tersebut&nbsp;<strong>ditambah minimal 30%</strong>. Misal Anda menghitung totalnya Rp.1.000.000, maka nilai proyeknya minimal adalah Rp.1.300.000</li>\r\n</ul>\r\n\r\n<p><strong>NOTE:&nbsp;</strong>Jika client bertanya berapa biayanya. Jawab<strong>&nbsp;&ldquo;Kami akan kirimkan proposal ya pak/bu&rdquo;</strong>.</p>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/08/5-6-1024x1024.jpg\" /></p>\r\n\r\n<p>#3&nbsp;Kirimkan Proposal</p>\r\n\r\n<h2>#3&nbsp;Kirimkan Proposal</h2>\r\n\r\n<p>Buat penawaran dengan Proposal yang menarik. Isinya minimal adalah:</p>\r\n\r\n<ul>\r\n	<li>Halaman&nbsp;<strong>Cover yang bagus</strong></li>\r\n	<li>Surat penawaran.&nbsp;<strong><em>Buat minimal 2 pilihan</em></strong><strong>&nbsp;</strong>harga, misal:&nbsp;<strong>Paket 1 Website Lengkap Rp. 1.300.000</strong>, lalu&nbsp;<strong>Paket 2 Website Lengkap &amp; Hosting Unlimeted Rp. 2.000.000,&nbsp;</strong>dan&nbsp;<strong>Paket 3 Website Lengkap, Hosting Unlimited &amp; Manual Book/Traing Rp. 2.500.000</strong>&nbsp;dst. Ini membuat client memilih dengan bantuan Anda</li>\r\n	<li><strong>Kirimkan proposal</strong>&nbsp;dengan baik dan sopan. Beri tahu calon client jika sudah dikirim.</li>\r\n	<li>Proposal dikirim sebaiknya&nbsp;<strong>tidak lebih dari 3 hari&nbsp;</strong>sejak diskusi kebutuhan dilakukan</li>\r\n</ul>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/08/6-7-1024x1024.jpg\" /></p>\r\n\r\n<p>#4&nbsp;Perjanjian Kerjasama</p>\r\n\r\n<h2>#4&nbsp;Perjanjian Kerjasama</h2>\r\n\r\n<p>Setelah&nbsp;<strong>Proposal Disetujui</strong>&nbsp;dan&nbsp;<strong>Disepakati&nbsp;</strong>besaran biaya dari proyek, maka buatlah&nbsp;<strong>Kontrak kerja</strong>. Isinya minimal adalah?</p>\r\n\r\n<ul>\r\n	<li><strong>Skup pekerjaan</strong>, buat rincian mendetail.</li>\r\n	<li><strong>Durasi Pekerjaan</strong>, misalnya 30 hari</li>\r\n	<li><strong>Termin Pembayaran</strong>, misalnya 2x pembayaran. DP Awal 50% dan 50% setelah serah terima.</li>\r\n	<li>Sepakati jika ada&nbsp;<strong>pekerjaan tambahan&nbsp;</strong>bagaimana? Tambah biayakah?</li>\r\n</ul>\r\n\r\n<p>Biasanya kontrak kerja sederhana antara 1-2 halaman A4. Ga banyak kan? Bisa menggunakan materai, bisa juga tidak. Sepakati bersama saja dengan client ya. Buat minimal 2 salinan kontrak kerja, 1 untuk Anda dan 1 untuk client.</p>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/08/7-5-1024x1024.jpg\" /></p>\r\n\r\n<p>#5&nbsp;Buat Invoice yang Baik</p>\r\n\r\n<h2>#5&nbsp;Buat Invoice yang Baik</h2>\r\n\r\n<p>Hindari menagih client hanya dengan melalui telepon atau pesan chatting (misal via WA).<br />\r\nMaka,&nbsp;<strong>buatlah invoice yang baik</strong>. Sekaligus untuk branding diri Anda. Isinya minimal:</p>\r\n\r\n<ul>\r\n	<li><strong>Ditujukan ke siapa?&nbsp;</strong>Tulis nama client dengan benar</li>\r\n	<li><strong>Tagihan Termin keberapa</strong>? Lihat Kontrak Kerja</li>\r\n	<li><strong>Besar tagihan berapa</strong>? Tulisa angka dan terbilangnya. Mis:&nbsp;<strong>Rp. 1.000 (Seribu rupiah)</strong></li>\r\n	<li><strong>Itu Duit Dikirim kemana?</strong>&nbsp;Cantumkan nomor rekening lengkap jika pembayaran diharapkan via transfer</li>\r\n	<li><strong>Tanda tangan dan nama jelas Anda</strong></li>\r\n</ul>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/08/8-3-1024x1024.jpg\" /></p>\r\n\r\n<p>#6&nbsp;Laporkan Perkembangan</p>\r\n\r\n<h2>#6&nbsp;Laporkan Perkembangan</h2>\r\n\r\n<p>Selalu laporkan perkembangan pekerjaan Anda. Jangan menunggu client menelpon Anda baru membuat laporan.</p>\r\n\r\n<ul>\r\n	<li>Buat&nbsp;<strong>Periode Laporan</strong>, misalnya 3 hari sekali</li>\r\n	<li>Tetap&nbsp;<strong>Laporkan Meskipun tidak ada perkembangan</strong>.</li>\r\n	<li><strong>Selalu berkomunikasi</strong>&nbsp;dan diskusikan dengan client jika ada kesulitan yang Anda alami.</li>\r\n	<li><strong>Selesaikan dengan bertanggung jawab</strong>. Selesaikan pekerjaan Anda, bahkan jika terpaksa harus dilimpahkan ke orang lain, selesaikan dengan baik-baik.</li>\r\n</ul>\r\n\r\n<p>Mulailah belajar membuat pola atau format laporan yang menjadi ciri khas Anda. Bisa via chat atau bahkan dengan file PDF yang menarik.</p>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/08/9-1024x1024.jpg\" /></p>\r\n\r\n<p>#7&nbsp;Training &amp; Manual Book</p>\r\n\r\n<h2>#7&nbsp;Training &amp; Manual Book</h2>\r\n\r\n<p>nda tentu akan capek jika setelah serah terima Client atau staffnya berkali-kali menelpon Anda menanyakan bagaimana cara mengupdate websitenya. Ga enak kan? Oleh karena itu:</p>\r\n\r\n<ul>\r\n	<li>Sediakan&nbsp;<strong>Training Client/Staff</strong>, ini bisa Anda cantumkan dalam estimasi harga. Perhitungkan biaya training staff.</li>\r\n	<li>Buat&nbsp;<strong>Manual Book</strong>&nbsp;atau bahkan&nbsp;<strong>Video Panduan</strong>&nbsp;cara mengoperasikan website yang Anda buat yang bisa diakses langsung di website mereka.</li>\r\n</ul>\r\n\r\n<p>Ini akan mempermudah pekerjaan Anda mendatang</p>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/08/10-1024x1024.jpg\" /></p>\r\n\r\n<p>#8&nbsp;Serah Terima Pekerjaan</p>\r\n\r\n<h2>#8&nbsp;Serah Terima Pekerjaan</h2>\r\n\r\n<p>Akhirnya selesai juga proyeknya. Nah saatnya menyerahkan hasil pekerjaan Anda kepada client.<br />\r\nApa saja yang sebaiknya Anda serahkan?</p>\r\n\r\n<ul>\r\n	<li>Data&nbsp;<strong>Akses Username Password&nbsp;</strong>akun Hosting dan website</li>\r\n	<li><strong>Source Code</strong>, semuanya. Berikan kepada client</li>\r\n	<li><strong>Dokumentasi Pekerjaan</strong>, mulai dari foto, kontrak dll</li>\r\n	<li><strong>Manual Book</strong>&nbsp;dan&nbsp;<strong>Video Panduan</strong>&nbsp;(jika ada). Serahkan kepada client. Bila perlu cetak Manual Book tadi.</li>\r\n	<li>Jaga selalu&nbsp;<strong>Hubungan Baik</strong>&nbsp;dengan client</li>\r\n</ul>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/08/11-1024x1024.jpg\" /></p>\r\n\r\n<p>#9&nbsp;Berdoa &amp; Bersyukur</p>\r\n\r\n<h2>#9&nbsp;Berdoa &amp; Bersyukur</h2>\r\n\r\n<p>Selalu berdoa dan bersyukur, telah diperkenalkan pada Client yang baik.<br />\r\nDiberi kesempatan untuk belajar sekaligus bekerja. Maka sudah sepatutnya kita Selalu Berdoa dan Bersyukur pada Tuhan Yang Maha Esa.</p>', 'Publish', 'Berita', 'TIPS MENERIMA PROYEK WEBSITE UNTUK PEMULA', '1-1600728135.png', NULL, NULL, NULL, NULL, NULL, '2020-09-15 23:43:00', '2020-09-15 23:41:16', '2020-09-21 22:42:15'),
(21, 4, 6, 'ID', '-', '3-alasan-kenapa-css-js-sebaiknya-di-minify', '3 Alasan Kenapa CSS & JS sebaiknya di-Minify?', '<p>Minification is the process of minimizing code and markup in your web pages and script files. It&rsquo;s one of the main methods used to reduce load times and bandwidth usage on websites.</p>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/07/2-1024x1024.jpg\" /></p>\r\n\r\n<p>CSS Minify &ndash; Kursus Web Java Web Media</p>\r\n\r\n<p>Minification dramatically improves site speed and accessibility, directly translating into a better user experience. It&rsquo;s also beneficial to users accessing your website through a limited data plan and who would like to save on their bandwidth usage while surfing the web.</p>\r\n\r\n<p>Sumber: https://www.imperva.com/learn/performance/minification</p>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/07/4-1-1024x1024.jpg\" /></p>\r\n\r\n<p>Kode dikompres &ndash; Kursus Web Java Web Media</p>\r\n\r\n<h2>Kenapa &ldquo;.min&rdquo;?</h2>\r\n\r\n<p>Nama &ldquo;<strong>.min</strong>&rdquo; sebelum ekstensi file (misal&nbsp;<strong>bootstrap.min.css</strong>&nbsp;atau&nbsp;<strong>bootstrap.min.js</strong>) menunjukkan dia adalah &ldquo;<strong>minify version</strong>&rdquo; yang artinya?</p>\r\n\r\n<ul>\r\n	<li><strong>Kode telah dikompres</strong>, bahkan spasi pun dibuang</li>\r\n	<li><strong>Ukuran file jadi lebih kecil</strong>&nbsp;dibanding dengan yang &ldquo;<strong>Non Minify</strong>&ldquo;</li>\r\n</ul>\r\n\r\n<h2>Sebaiknya gunakan &ldquo;minify&rdquo;</h2>\r\n\r\n<p>Ada banyak alasan kenapa saat Anda membuat web sebaiknya menggunakan CSS &amp; Javascript versi minify.</p>\r\n\r\n<p>Nah, kali ini&nbsp;<strong>Java Web Media&nbsp;</strong>akan menjelaskannya kenapa. Postingan berikutnya kita akan bahas bagaimana &ldquo;<strong>Cara membuat minify CSS &amp; Javascript&rdquo;&nbsp;</strong>yaa.</p>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/07/6-1-1024x1024.jpg\" /></p>\r\n\r\n<p>Ukuran File Jadi Kecil &ndash; Kursus Web Java Web Media</p>\r\n\r\n<h2>#1 Ukuran File Jadi Kecil</h2>\r\n\r\n<p>File CSS &amp; JavaScript yang di-<strong>minify</strong>&nbsp;pasti ukurannya lebih kecil. Hampir semua spasi, komentar dan dokumentasi akan dibuang saat dilakukan &ldquo;<strong>minification</strong>&ldquo;, sehingga file lebih compact.</p>\r\n\r\n<p>Dengan&nbsp;<strong>minification&nbsp;</strong>ukuran&nbsp;<strong>Javascript&nbsp;</strong>bisa&nbsp;<strong>48</strong>% lebih kecil dan&nbsp;<strong>CSS&nbsp;</strong>bisa&nbsp;<strong>60</strong>% dari ukuran asli. Mantap kan?</p>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/07/7-1-1024x1024.jpg\" /></p>\r\n\r\n<p>Lebih cepat diakses &ndash; Kursus Web Java Web Media</p>\r\n\r\n<h2>#2 Website jadi lebih cepat diakses</h2>\r\n\r\n<p>Karena ukuran file menjadi kecil, maka loading website menjadi lebih cepat. Ini adalah salah satu teknik&nbsp;<strong>Front End Optimization&nbsp;</strong>(FEO)<strong>.&nbsp;</strong>Dampaknya, ukuran website secara keseluruhan juga akan lebih kecil dan ringan.</p>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/07/8-1-1024x1024.jpg\" /></p>\r\n\r\n<p>Hemat Bandwidth &ndash; Kursus Web Java Web Media</p>\r\n\r\n<h2>#3&nbsp;Hemat Bandwith dan Space Hosting/Server</h2>\r\n\r\n<p>Karena ukuran file menjadi kecil, space hosting/server Anda menjadi lebih lega. Bandwidth juga jadi lebih hemat.</p>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/07/9-1024x1024.jpg\" /></p>\r\n\r\n<p>Online Store &ndash; Kursus Web Java Web Media</p>\r\n\r\n<h2>Mau kursus?</h2>\r\n\r\n<p>Mau kursus web bikin Toko Online? Kursus di Java Web Media aja ya.</p>', 'Publish', 'Berita', 'Minification is the process of minimizing code and markup in your web pages and script files. It’s one of the main methods used to reduce load times and bandwidth usage on websites.', '1-1600728277.jpg', NULL, NULL, NULL, NULL, NULL, '2020-09-15 23:57:11', '2020-09-15 23:56:44', '2020-09-21 22:44:38'),
(22, 4, 8, 'ID', '-', '7-konten-website-company-profile-yang-harus-anda-minta-ke-client-atau-anda-buat', '7  Konten Website Company Profile yang Harus Anda Minta ke Client (atau Anda Buat)', '<p><strong>&ldquo;Konten&nbsp;website menjadi salah satu Bagian Paling Lama dalam Pengerjaan Proyek Website.&rdquo;&nbsp; (Andoyo &ndash; Java Web Media)</strong></p>\r\n\r\n<p>Di posting sebelumnya Anda sudah belajar bagaimana mempersiapkan Proposal dan Kontrak Kerja.&nbsp;</p>\r\n\r\n<p>Nah,&nbsp;pada tahap ini Anda mulai bekerja. Anda akan belajar mempersiapkan konten apa saja yang harus&nbsp;<strong>Anda minta ke client&nbsp;</strong>atau&nbsp;<strong>Anda buat sendiri</strong>&nbsp;untuk membuat sebuah website&nbsp;<strong>Company Profile.</strong></p>\r\n\r\n<p>Buatlah list kebutuhan konten ini, kemudian kirimkan ke Client. Tanyakan kapan konten tersebut bisa tersedia.</p>\r\n\r\n<p>Nah, agar nyambung silakan membaca ini dulu yah:</p>\r\n\r\n<ol>\r\n	<li><a href=\"https://javawebmedia.com/blog/tips-menerima-proyek-website-untuk-pemula/\">Tips Menerima Proyek Website untuk Pemula</a></li>\r\n	<li><a href=\"https://javawebmedia.com/blog/1-catat-kebutuhan-client-6-pertanyaan-yang-harus-diajukan-ke-client/\">#1 Catat Kebutuhan Client: 6 Pertanyaan yang harus diajukan ke Client</a></li>\r\n	<li><a href=\"https://javawebmedia.com/blog/2-buat-estimasi-biaya-6-biaya-proyek-website-yang-harus-dihitung-oleh-web-programmer-pemula/\">#2 Buat Estimasi Biaya: 6 Biaya Proyek Website&nbsp;yang Harus Dihitung oleh Web Programmer Pemula</a></li>\r\n	<li><a href=\"https://javawebmedia.com/blog/3-kirimkan-proposal-5-isi-proposal-website-untuk-calon-client/\">#3 Kirimkan Proposal: 5 Isi Proposal Website untuk Calon Client</a></li>\r\n	<li><a href=\"https://javawebmedia.com/blog/4-perjanjian-kerjasama-4-isi-kontrak-kerja/\">#4 Perjanjian Kerjasama: 4 Isi Kontrak Kerja</a></li>\r\n</ol>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/07/3-2-1024x1024.png\" /></p>\r\n\r\n<p>Kursus Website Java Web Media</p>\r\n\r\n<h2><strong>#1 Nama website &amp; Slogannya</strong></h2>\r\n\r\n<p>Tanyakan ke client apa nama website dan slogan yang akan digunakan. Contoh:</p>\r\n\r\n<ul>\r\n	<li><strong>Nama website:</strong>&nbsp;<strong>Dokter Mobil</strong></li>\r\n	<li><strong>Slogan:</strong>&nbsp;<strong>Bengkel Mobil Terdekat &ndash; Spesialis Upgrade Performance</strong></li>\r\n</ul>\r\n\r\n<p>atau Misalnya&nbsp;<strong>Java Web Media &ndash; Pusat Kursus Desain, Web, Programming &amp; Statistik.&nbsp;</strong>Nah, silakan diskusikan dengan client sebaik-baiknya.</p>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/07/4-2-1024x1024.png\" /></p>\r\n\r\n<p>Kursus Website Java Web Media</p>\r\n\r\n<h2><strong>#2 Logo &amp; Icon Website</strong></h2>\r\n\r\n<p>Mintalah ke client&nbsp;<strong>Logo &amp; Icon&nbsp;</strong>yang akan digunakan di dalam website mereka. Mintalah logo dengan resolusi setidaknya&nbsp;<strong>1.080 pixel</strong>, atau bahkan jika memiliki file vectornya, mintalah. Logo &amp; icon dengan format vector tentu lebih mudah untuk Anda olah.</p>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/07/5-2-1024x1024.png\" /></p>\r\n\r\n<p>Kursus Website Java Web Media</p>\r\n\r\n<h2><strong>#3 Data Profil Website</strong></h2>\r\n\r\n<p>Profil website atau&nbsp;<strong>About Us</strong>&nbsp;dari website harus ada. Mintalah antara lain:</p>\r\n\r\n<ul>\r\n	<li><strong>Sejarah</strong>/profil</li>\r\n	<li><strong>Visi &amp; Misi</strong></li>\r\n	<li><strong>Kontak (</strong>alamat, telepon, HP, email dst)</li>\r\n	<li>Link akun&nbsp;<strong>media sosial</strong></li>\r\n	<li><strong>Team</strong>&nbsp;(Nama, foto, jabatan &amp; deskripsi)</li>\r\n	<li><strong>Value</strong>&nbsp;(nilai lebih) perusahaan</li>\r\n	<li>Data&nbsp;<strong>brand color&nbsp;</strong>(warna resmi) perusahaan. Misal&nbsp;<strong>Indosat&nbsp;</strong>identik dengan warna hijau dan kuning dst</li>\r\n	<li>Dan konten pendukung lainnya</li>\r\n</ul>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/07/6-2-1024x1024.png\" /></p>\r\n\r\n<p>Kursus Website Java Web Media</p>\r\n\r\n<h2><strong>#4 Produk &amp; Layanan</strong></h2>\r\n\r\n<p>Minta juga data produk &amp; layanan mereka, yang meliputi:</p>\r\n\r\n<ul>\r\n	<li><strong>Nama</strong>&nbsp;produk/layanan</li>\r\n	<li><strong>Harga&nbsp;</strong>produk/layanan</li>\r\n	<li><strong>Deskripsi&nbsp;</strong>ringkas &amp; lengkapnya</li>\r\n	<li><strong>Harga/Biaya&nbsp;</strong>produk &amp; layanan</li>\r\n	<li><strong>Kategori Produk</strong></li>\r\n	<li><strong>Gambar/Video&nbsp;</strong>pendukung produk/layanan yang akan dipasarkan</li>\r\n</ul>\r\n\r\n<p>Mintalah mereka untuk menyiapkan konten tersebut sebaik-baiknya.</p>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/07/7-2-1024x1024.png\" /></p>\r\n\r\n<p>Kursus Website Java Web Media</p>\r\n\r\n<h2><strong>#5 Berita &amp; Article</strong></h2>\r\n\r\n<p>Minta setidaknya 2 konten berita/article untuk mengisi website yang isinya berkaitan erat dengan website yang akan dibangun:</p>\r\n\r\n<ul>\r\n	<li><strong>Judul&nbsp;</strong>artikel/berita</li>\r\n	<li><strong>Deskripsi&nbsp;</strong>artikel/berita</li>\r\n	<li><strong>Kategori&nbsp;</strong>artikel/berita</li>\r\n	<li><strong>Gambar/Video&nbsp;</strong>artikel/berita</li>\r\n</ul>\r\n\r\n<p>Panjang artikel ini setidaknya 2 paragraf.</p>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/07/8-2-1024x1024.png\" /></p>\r\n\r\n<p>Kursus Website Java Web Media</p>\r\n\r\n<h2><strong>#6 File Pendukung</strong></h2>\r\n\r\n<p>Mintalah file-file pendukung website, antara lain:</p>\r\n\r\n<ul>\r\n	<li>Foto-foto&nbsp;aktivitas perusahaan</li>\r\n	<li>Video</li>\r\n	<li>File-file pendukung (Misal: Pricelist, Leaflet, Brosur dsb)</li>\r\n	<li>Gambar-gambar ilustrasi</li>\r\n	<li>Dsb</li>\r\n</ul>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/07/9-2-1024x1024.png\" /></p>\r\n\r\n<p>Kursus Website Java Web Media</p>\r\n\r\n<h2><strong>#7 Portofolio Client</strong></h2>\r\n\r\n<p>Client biasanya sudah pernah mengerjakan pekerjaan sesuai produk &amp; layanan yang mereka miliki. Mintalah data-data client &amp; informasi atas portofolio tersebut.</p>\r\n\r\n<p>Mintalah nama client mereka, nama pekerjaan, deskripsi ringkasnya jika perlu dan foto-fotonya.</p>\r\n\r\n<p><img alt=\"\" src=\"https://javawebmedia.com/blog/wp-content/uploads/2020/07/10-1024x1024.png\" /></p>\r\n\r\n<p>Kursus Website Java Web Media</p>\r\n\r\n<h2><strong>Butuh contoh Dokumen Lengkap Tips Menerima Proyek Website untuk Pemula?</strong></h2>\r\n\r\n<p>Silakan&nbsp;Follow, Spam dan Comment di Instagram kami (<a href=\"https://www.instagram.com/javawebmedia/\">https://www.instagram.com/javawebmedia/</a>).</p>\r\n\r\n<p>Lalu kirim bukti ke:&nbsp;<strong>0857 1510 0485</strong></p>', 'Publish', 'Berita', '7  Konten Website Company Profile yang Harus Anda Minta ke Client (atau Anda Buat)', '1-1600728341.png', NULL, NULL, NULL, NULL, NULL, '2020-09-16 00:01:35', '2020-09-15 23:59:58', '2020-09-21 22:45:42'),
(23, 4, 0, 'ID', '-', 'layanan-konsultasi-strategis', 'Layanan Konsultasi Strategis', '<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Layanan Konsultasi kami ideal untuk Anda saat membutuhkan dukungan dalam menyelaraskan tujuan strategis keberlanjutan perusahaan Anda dengan penatalayanan air yang baik dan mengembangkan rencana untuk tindakan tingkat wilayah operasional dan daerah tangkapan air. </span></span></p>\r\n\r\n<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Dari menilai kesiapan wilayah operasional Anda terhadap Standar AWS, hingga penilaian risiko air dalam rantai pasokan dan mengembangkan peta jalan menuju tindakan pengelolaan air yang baik di lokasi, rantai pasokan, dan tingkat daerah tangkapan, kami dapat membantu Anda dalam perjalanan. </span></span></p>\r\n\r\n<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Kami bekerja sama dengan penyedia layanan terakreditasi, kredensial profesional, dan terlatih AWS, bergantung pada kebutuhan spesifik perusahaan Anda. Ingin tahu lebih banyak? Hubungi kami dan untuk sesi konsultasi terbuka.</span></span></p>', 'Publish', 'Terjadi', 'Layanan Konsultasi Strategis', '26-image-section-aws-indonesia-contact-1600218408.jpg', NULL, NULL, 1, NULL, NULL, '2020-09-16 01:06:48', '2020-09-16 01:06:08', '2020-09-16 01:06:48'),
(24, 4, 0, 'ID', '-', 'pelatihan-standar-dan-sistem-aws', 'Pelatihan Standar dan Sistem AWS', '<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Program pelatihan Standar dan Sistem AWS interaktif selama 1, 2, dan 3 hari mencakup presentasi, studi kasus, serta latihan individu dan kelompok. </span></span></p>\r\n\r\n<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Berhasil menyelesaikan program pelatihan Spesialis memungkinkan Anda memenuhi syarat untuk menjadi penyedia layanan AWS yang terakreditasi, sebagai auditor, pelatih, dan konsultan. Ini juga mendukung Anda untuk membangun kapasitas internal untuk mengelola dan mengimplementasikan penatalayanan air dan sertifikasi AWS. Kami memberikan pelatihan dalam Bahasa Indonesia dan Bahasa Inggris.</span></span></p>', 'Publish', 'Terjadi', 'Pelatihan Standar dan Sistem AWS', '26-image-section-aws-indonesia-contact-1600218481.jpg', NULL, NULL, NULL, NULL, NULL, '2020-09-16 01:08:01', '2020-09-16 01:07:31', '2020-09-16 01:08:01'),
(25, 4, 0, 'ID', '-', 'studi-kasus', 'Studi Kasus', '<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Jelajahi studi kasus Indonesia dan contoh penerapan penatalayanan air yang baik di seluruh Indonesia dari berbagai sektor.</span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Natural Rubber 2019 Hevea |</span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Natural Rubber Processing Site Online Survey 2019 Hevea I</span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Hospitality Sector Hotel Indigo Seminyak IHG |</span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">GAA Hevea Connect<strong>&nbsp;|&nbsp;</strong></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Brantas mapping |&nbsp;</span></span></li>\r\n</ul>', 'Publish', 'Materi', 'Studi Kasus', NULL, NULL, NULL, 1, NULL, NULL, '2020-09-16 01:26:05', '2020-09-16 01:23:28', '2020-09-16 01:26:05'),
(26, 4, 0, 'ID', '-', 'platform-e-tools-untuk-anggota-aws', 'Platform e-Tools untuk Anggota AWS', '<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Cari tahu lebih lanjut tentang e-standar AWS, Panduan juga Modul Pembelajaran Online penatalayanan air di <a href=\"https://tools.a4ws.org/my-account/subscriptions/\" style=\"color:#0563c1; text-decoration:underline\">AWS Tool Hub</a>. Akses gratis untuk semua Anggota AWS dan non-anggota dapat membayar biaya untuk membuat akun.</span></span></p>', 'Publish', 'Materi', 'Platform e-Tools untuk Anggota AWS', NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-16 01:28:44', '2020-09-16 01:27:50', '2020-09-16 01:28:44'),
(27, 4, 0, 'ID', '-', 'webinars', 'Webinars', '<p><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Dapatkan wawasan Anda mengenai Standar dan Sistem AWS melalui webinar AWS dan diskusi penting lainnya tentang topik penatalayanan air di Indonesia.</span></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">World Water Development Report 2020 Launch by UNESCO &amp; Climate Tracker </span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Lainnya: <a href=\"https://unesdoc.unesco.org/ark:/48223/pf0000372985.locale=en\" style=\"color:#0563c1; text-decoration:underline\">Laporan</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">GWPSEA Webinar COVID-19 Belajar dari Krisis untuk Pengelolaan Air Terpadu yang Lebih<br />\r\n	Rekaman: <a href=\"https://www.facebook.com/GlobalWaterPartnershipSoutheastAsia/videos/271658824268924/?_rdc=1&amp;_rdr\" style=\"color:#0563c1; text-decoration:underline\">Tersedia</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Air Tanah untuk Tanah Air</span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Rekaman: <a href=\"bit.ly/youtube-airtanah\" style=\"color:#0563c1; text-decoration:underline\">Tersedia</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Online Consultation &ndash; the Principles for Addressing Water-related Disaster Risk Reduction and COVID-19 </span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Lainnya: <a href=\"https://www.gwp.org/en/GWP-South-East-Asia/WE-ACT/keep-updated/News-and-Activities/2020/help-gwp-pan-asia-consultation-meeting/\" style=\"color:#0563c1; text-decoration:underline\">Summary</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">AWS Member Webinars: Spotlight on Indonesia Brantas River Basin, East Java</span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Rekaman: <a href=\"https://register.gotowebinar.com/recording/4530186227396155147\" style=\"color:#0563c1; text-decoration:underline\">Tersedia</a></span></span></li>\r\n	<li><span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">World Water Week #AtHome 2020 &ndash; Water Stewardship in Agriculture</span></span><br />\r\n	<span style=\"font-size:10pt\"><span style=\"font-family:&quot;Arial Nova Light&quot;,sans-serif\">Rekaman: <a href=\"https://register.gotowebinar.com/recording/8511901561510833158\" style=\"color:#0563c1; text-decoration:underline\">Tersedia</a></span></span></li>\r\n</ul>', 'Publish', 'Materi', 'Webinars', NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-16 01:31:45', '2020-09-16 01:30:55', '2020-09-16 01:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id_download` int(11) NOT NULL,
  `id_kategori_download` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `judul_download` varchar(200) DEFAULT NULL,
  `jenis_download` varchar(20) NOT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `hits` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id_download`, `id_kategori_download`, `id_user`, `bahasa`, `judul_download`, `jenis_download`, `isi`, `gambar`, `website`, `hits`, `tanggal`) VALUES
(3, 1, 4, 'ID', 'The AWS Standard 2.0 Bahasa Indonesia', 'Download', '<p>Versi Bahasa Indonesia dari AWS Standar, Panduan dan Skoring Rubrik sudah tersedia online. <a href=\"https://a4ws.org/download-standard-2/\" style=\"color:#0563c1; text-decoration:underline\">Unduh</a> untuk Anda sekarang dan hubungi tim kami di Indonesia untuk mendukung Anda dalam perjalanan penatalayanan air.</p>', 'aws-standard-20-2019-bahasa-indonesia-1600653859.pdf', NULL, 22, '2020-09-21 02:06:43'),
(4, 1, 4, 'ID', 'The AWS Standard Guidance 2.0 Bahasa Indonesia', 'Download', '<p>The AWS Standard Guidance 2.0 Bahasa Indonesia</p>', 'aws-standard-20-guidance-final-january-2020-bahasa-indonesia-1600654043.pdf', NULL, 2, '2020-09-21 02:08:09'),
(5, 1, 4, 'ID', 'The AWS Standard Scoring 2.0 Bahasa Indonesia', 'Download', '<p>The AWS Standard Scoring 2.0 Bahasa Indonesia</p>', 'aws-standard-20-scoring-criteria-revised-june-1-2020-bahasa-indonesia-1600654078.pdf', NULL, 0, '2020-09-21 02:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_kategori_galeri` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `judul_galeri` varchar(200) DEFAULT NULL,
  `jenis_galeri` varchar(20) NOT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `popup_status` enum('Publish','Draft','','') NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `status_text` enum('Ya','Tidak','','') NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_kategori_galeri`, `id_user`, `bahasa`, `judul_galeri`, `jenis_galeri`, `isi`, `gambar`, `website`, `hits`, `popup_status`, `urutan`, `status_text`, `tanggal`) VALUES
(15, 4, 4, 'ID', 'Java Web Media', 'Homepage', NULL, 'banner-3-1-1600727828.jpg', 'https://javawebmedia.com/kursus', NULL, 'Publish', NULL, 'Ya', '2020-09-21 22:38:56');

-- --------------------------------------------------------

--
-- Table structure for table `heading`
--

CREATE TABLE `heading` (
  `id_heading` int(11) NOT NULL,
  `id_user` int(11) DEFAULT 0,
  `judul_heading` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `halaman` varchar(255) DEFAULT 'NULL',
  `tanggal` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `heading`
--

INSERT INTO `heading` (`id_heading`, `id_user`, `judul_heading`, `keterangan`, `gambar`, `halaman`, `tanggal`) VALUES
(1, 0, 'Berita dan Updates', '<p>Berita dan Updates</p>', 'heading-03-1600256326.jpg', 'Berita', '2020-09-16 11:38:46'),
(2, 0, 'AWS Indonesia', '<p>AWS Indonesia</p>', 'aws-indonesia-1600259780.jpg', 'AWS', '2020-09-16 12:36:20'),
(3, 0, 'Halaman Kontak', '<p>Halaman Kontak</p>', 'kontak-1600257025.jpg', 'Kontak', '2020-09-16 11:50:25'),
(4, 0, 'Board and Team', '<p>Board and Team</p>', 'board-and-team-300-1600260175.jpg', 'Team', '2020-09-16 12:42:55'),
(5, 0, 'Layanan', '<p>Penatalayanan air memungkinkan pengguna air bekerjasama untuk mengidentifikasi dan mencapai tujuan bersama untuk pengelolaan air yang berkelanjutan dan keamanan air bersama. Penatalayanan air yang baik didefinisikan sebagai penggunaan air yang adil secara sosial dan budaya, berkelanjutan secara lingkungan dan menguntungkan secara ekonomi, dicapai melalui proses inklusif pemangku kepentingan yang mencakup tindakan berbasis wilayah operasional dan daerah tangkapan air (DAS).</p>\r\n<p>AWS Indonesia meripakan promosi dan penerapan penatalayanan air yang baik dan standar penatalayanan air internasional (<a href=\"https://a4ws.org/the-aws-standard-2-0/\">AWS Standard</a>) di Indonesia sebagai mitra negara <a href=\"https://waterstewardship.org.au/\">Alliance for Water Stewardship Asia-Pacific</a> dan <a href=\"https://a4ws.org/about/\">Alliance for Water Stewardship SCIO</a>.</p>\r\n<p>Apakah Anda tertarik untuk mempelajari lebih lanjut mengenai penatalayanan air dan aktivitas kami di Indonesia? Apakah Anda Manajer Sustainability atau Engineer Air yang ingin menerapkan penatalayanan air di wilayah operasional Anda? Hubungi kami dan mari kita mulai penatalayanan air bersama-sama.</p>', 'layanan-1600315713.jpg', 'Layanan', '2020-09-17 04:08:33'),
(6, 0, 'Dokumen', '<p>Dokumen</p>', 'dokumen-1600317093.jpg', 'Dokumen', '2020-09-17 04:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `id_user`, `bahasa`, `slug_kategori`, `nama_kategori`, `urutan`, `hits`, `tanggal`) VALUES
(6, 4, 'ID', 'berita', 'Berita', 3, 0, '2020-09-12 21:36:42'),
(8, 4, 'ID', 'updates', 'Updates', 2, NULL, '2020-09-12 21:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_agenda`
--

CREATE TABLE `kategori_agenda` (
  `id_kategori_agenda` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori_agenda` varchar(255) NOT NULL,
  `nama_kategori_agenda` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_agenda`
--

INSERT INTO `kategori_agenda` (`id_kategori_agenda`, `bahasa`, `slug_kategori_agenda`, `nama_kategori_agenda`, `keterangan`, `urutan`) VALUES
(4, 'ID', 'kegiatan-eksternal', 'Kegiatan Eksternal', NULL, 2),
(6, 'ID', 'kegiatan-internal', 'Kegiatan Internal', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_download`
--

CREATE TABLE `kategori_download` (
  `id_kategori_download` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori_download` varchar(255) NOT NULL,
  `nama_kategori_download` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_download`
--

INSERT INTO `kategori_download` (`id_kategori_download`, `bahasa`, `slug_kategori_download`, `nama_kategori_download`, `keterangan`, `urutan`) VALUES
(1, 'ID', 'dokumen', 'Dokumen', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1),
(4, 'ID', 'download-pricelist', 'Download Pricelist', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 0),
(5, 'ID', 'studi-kasus', 'Studi Kasus', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 2),
(6, 'ID', 'webinar', 'Webinar', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_galeri`
--

CREATE TABLE `kategori_galeri` (
  `id_kategori_galeri` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori_galeri` varchar(255) NOT NULL,
  `nama_kategori_galeri` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_galeri`
--

INSERT INTO `kategori_galeri` (`id_kategori_galeri`, `bahasa`, `slug_kategori_galeri`, `nama_kategori_galeri`, `urutan`) VALUES
(4, 'ID', 'kegiatan', 'Kegiatan', 2),
(6, 'ID', 'kegiatan-kampus', 'Kegiatan Kampus', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_staff`
--

CREATE TABLE `kategori_staff` (
  `id_kategori_staff` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `slug_kategori_staff` varchar(255) NOT NULL,
  `nama_kategori_staff` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_staff`
--

INSERT INTO `kategori_staff` (`id_kategori_staff`, `bahasa`, `slug_kategori_staff`, `nama_kategori_staff`, `keterangan`, `urutan`) VALUES
(4, 'ID', 'senyum-programmer', 'Senyum Programmer', 'Yeay...selain tim tutor kita juga ada tim programmer yang bekerja full time maupun part time', 2),
(6, 'ID', 'happy-tutor', 'Happy Tutor', 'Java Web Media didampingi oleh tutor-tutor dan instruktur yang berpengalaman di bidangnya.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `bahasa` enum('ID','EN') NOT NULL,
  `namaweb` varchar(200) NOT NULL,
  `nama_singkat` varchar(200) DEFAULT NULL,
  `tagline` varchar(200) DEFAULT NULL,
  `tagline2` varchar(255) DEFAULT NULL,
  `tentang` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_cadangan` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `keywords` varchar(400) DEFAULT NULL,
  `metatext` text DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `nama_facebook` varchar(255) NOT NULL,
  `nama_twitter` varchar(255) NOT NULL,
  `nama_instagram` varchar(255) NOT NULL,
  `nama_google_plus` varchar(255) NOT NULL,
  `singkatan` varchar(255) NOT NULL,
  `google_map` text DEFAULT NULL,
  `judul_1` varchar(200) DEFAULT NULL,
  `pesan_1` varchar(200) DEFAULT NULL,
  `judul_2` varchar(200) DEFAULT NULL,
  `pesan_2` varchar(200) DEFAULT NULL,
  `judul_3` varchar(200) DEFAULT NULL,
  `pesan_3` varchar(200) DEFAULT NULL,
  `judul_4` varchar(200) DEFAULT NULL,
  `pesan_4` varchar(200) DEFAULT NULL,
  `judul_5` varchar(200) DEFAULT NULL,
  `pesan_5` varchar(200) NOT NULL,
  `judul_6` varchar(200) DEFAULT NULL,
  `pesan_6` varchar(200) NOT NULL,
  `isi_1` varchar(500) DEFAULT NULL,
  `isi_2` varchar(500) DEFAULT NULL,
  `isi_3` varchar(500) DEFAULT NULL,
  `isi_4` varchar(500) DEFAULT NULL,
  `isi_5` varchar(500) DEFAULT NULL,
  `isi_6` varchar(500) DEFAULT NULL,
  `link_1` varchar(255) DEFAULT NULL,
  `link_2` varchar(255) DEFAULT NULL,
  `link_3` varchar(255) DEFAULT NULL,
  `link_4` varchar(255) DEFAULT NULL,
  `link_5` varchar(255) DEFAULT NULL,
  `link_6` varchar(255) DEFAULT NULL,
  `javawebmedia` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `rekening` text DEFAULT NULL,
  `prolog_topik` text DEFAULT NULL,
  `prolog_program` text DEFAULT NULL,
  `prolog_sekretariat` text DEFAULT NULL,
  `prolog_aksi` text DEFAULT NULL,
  `prolog_kolaborasi` text DEFAULT NULL,
  `prolog_sebaran` text DEFAULT NULL,
  `gambar_berita` varchar(255) DEFAULT NULL,
  `prolog_agenda` text DEFAULT NULL,
  `prolog_wawasan` text DEFAULT NULL,
  `protocol` varchar(255) DEFAULT NULL,
  `smtp_host` varchar(255) DEFAULT NULL,
  `smtp_port` varchar(255) DEFAULT NULL,
  `smtp_timeout` varchar(255) DEFAULT NULL,
  `smtp_user` varchar(255) DEFAULT NULL,
  `smtp_pass` varchar(255) DEFAULT NULL,
  `judul_pembayaran` varchar(255) DEFAULT NULL,
  `isi_pembayaran` text DEFAULT NULL,
  `gambar_pembayaran` varchar(255) DEFAULT NULL,
  `link_bawah_peta` varchar(255) DEFAULT NULL,
  `text_bawah_peta` varchar(255) DEFAULT NULL,
  `cara_pesan` enum('Keranjang Belanja','Formulir Pemesanan') DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `bahasa`, `namaweb`, `nama_singkat`, `tagline`, `tagline2`, `tentang`, `deskripsi`, `website`, `email`, `email_cadangan`, `alamat`, `telepon`, `hp`, `fax`, `logo`, `icon`, `keywords`, `metatext`, `facebook`, `twitter`, `instagram`, `google_plus`, `nama_facebook`, `nama_twitter`, `nama_instagram`, `nama_google_plus`, `singkatan`, `google_map`, `judul_1`, `pesan_1`, `judul_2`, `pesan_2`, `judul_3`, `pesan_3`, `judul_4`, `pesan_4`, `judul_5`, `pesan_5`, `judul_6`, `pesan_6`, `isi_1`, `isi_2`, `isi_3`, `isi_4`, `isi_5`, `isi_6`, `link_1`, `link_2`, `link_3`, `link_4`, `link_5`, `link_6`, `javawebmedia`, `gambar`, `video`, `rekening`, `prolog_topik`, `prolog_program`, `prolog_sekretariat`, `prolog_aksi`, `prolog_kolaborasi`, `prolog_sebaran`, `gambar_berita`, `prolog_agenda`, `prolog_wawasan`, `protocol`, `smtp_host`, `smtp_port`, `smtp_timeout`, `smtp_user`, `smtp_pass`, `judul_pembayaran`, `isi_pembayaran`, `gambar_pembayaran`, `link_bawah_peta`, `text_bawah_peta`, `cara_pesan`, `id_user`, `tanggal`) VALUES
(1, 'ID', 'Java Web Media', 'Java Web Media', 'Pusat Kursus Private &  Kelas Web, Mobile Apps, Desain Grafis dan Statistik', 'Pusat Kursus Private &  Kelas Web, Mobile Apps, Desain Grafis dan Statistik', '<p>Java Web Media adalah Pusat Kursus Private dan Reguler bidang Desain Grafis, Web Programming, Mobile Application dan Statistik</p>\r\n\r\n<p>Java Web Media berdiri pada tanggal 26 April 2010. Java Web Media awalnya hanya bergerak di bidang pembuatan dan pengembangan website serta agensi desain grafis. Awal tahun 2011, perusahaan ini kemudian mulai bergerak di bidang pengembangan sumber daya manusia, khususnya di bidang keahlian computer&nbsp;<em>Graphic Design</em>,&nbsp;<em>Web Design</em>&nbsp;dan&nbsp;<em>Web Development.</em></p>\r\n\r\n<p>Java Web Media adalah lembaga kursus yang bergerak di bidang pendidikan khususnya kursus website, digital marketing, desain grafis dan statistik. Sampai saat ini Java Web Media sudah memiliki lulusan lebih dari 1200 orang dari berbagai status dan profesi mulai dari pelajar sekolah, mahasiswa, guru, dosen, staff profesional, freelancer, dll. Lulusan tidak hanya dari Indonesia tapi juga dari beberapa negara tetangga seperti New Zealand, Timor Leste dan Malaysia.</p>\r\n\r\n<p>Java Web Media membuka cabang pertamanya pada tahun 2014. Hingga tahun 2020 ini, Java Web Media telah memiliki 2 cabang yang berlokasi di kota Depok.</p>\r\n\r\n<p>Selain bergerak di bidang pendidikan Java Web Media juga memiliki layanan di bidang perencanaan strategis sistem informasi, pengembangan aplikasi berbasis web dan berbasis mobile (Android dan IOS/Apple).</p>\r\n\r\n<p>&nbsp;</p>', 'Grow And Strengthen Leadership On Good Water Stewardship For Water Secure In Indonesia, Now And The Feature.', 'https://javawebmedia.com', 'contact@javawebmedia.com', 'javawebmedia@gmail.com', 'Mall Depok Town Square\r\nLt 2 Blok SS1 No. 5-7\r\nJl. Margonda Raya Kota Depok', '085715100485', '+6281210697841', '081210697841', 'logo-java-web-media-01-01.png', 'logo-javawebmedia-square.png', 'educamedia, java web media, laravel, online course, kursus online', NULL, 'https://www.facebook.com/javawebmedia', 'http://twitter.com/javawebmedia', 'https://instagram.com/javawebmedia', 'https://www.youtube.com/channel/UCmm6mFZXYQ3ZylUMa0Tmc2Q', 'Educamedia', 'Educamedia', 'Educamedia', '', 'JWM', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7930.3386078467065!2d106.82893243028725!3d-6.372131203377098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed5d166b756d%3A0x41d8cdc14c819774!2sDepok%20Town%20Square!5e0!3m2!1sen!2sid!4v1579565022446!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', 'Tempat belajar nyaman', 'fa fa-home', 'Materi Kursus Selalu Update', 'fa fa-laptop', 'Jadwal Flexibel', 'fa fa-thumbs-up', 'Menjaga Amanah', 'fa-check-square-o', 'Tempat belajar nyaman', 'fa-home', 'Online service', 'fa-laptop', 'Kami menyediakan tempat belajar yang nyaman dan menyenangkan serasa di rumah sendiri', 'Materi kursus kamu selalu uptodate, Anda bisa mengunduh apa yang dipelajari', 'Bagi Anda siswa yang ingin belajar, kami menerapkan jadwal flexibel', 'Kami senantiasa menjaga amanah yang diberikan kepada donatur agar sampai di tangan yang berhak.', 'Kami menyediakan tempat belajar yang nyaman dan menyenangkan', 'Website kamu selalu uptodate, Anda bisa mengunduh apa yang dipelajari', '', '', '', '', '', '', '<p>Berawal dari keinginan ibunda Hj.Masah Muhari diakhir hidupnya untuk mewakaan sebagian hartanya dijalan Allah, gayungpun bersambut pada bulan Mei 2011 saat kami akan melaksanakan ibadah umrah, Seorang rekan kami sesama Jamaah bernama ustadzah Hj. Zainur Fahmid memberikan informasi Tentang Anggota yang hendak mewakaan sebidang tanahnya di wilayah Beji Timur. Kami pun memanjatkan doa di kota suci dengan penuh rasa harap pertolongan Allah untuk menunjukan jalan terbaik-Nya, maka sepulang umroh kami mengadakan pertemuan di kediaman Ibu Dra Hj Ratna Mardjanah untuk membicarakan visi misi kami dalam wakaf tersebut dan sepakat untuk mendirikan Istana Yatim Riyadhul Jannah ini.</p>\r\n<p>Nama Riyadhul Jannah Sendiri diambil dari nama pengelola wakaf (H. Ahmad Riyadh Muchtar, Lc) dan pemberi wakaf (Dra Hj Ratna Mardjanah). Istana Yatim Riyadhul Jannah hadir untuk melayani dan memfasilitasi segala kebutuhan anak yatim, terutama pendidikan agama, akhlak dan kehidupan yang layak untuk bekal masa depan mereka yang cerah agar bisa memberi manfaat bagi umat. Harapan kami semoga dengan membangunkan istana untuk anak yatim, maka Allah akan berikan istana-Nya di surga kelak dan kita termasuk manusia yang bisa memberika manfaat bagi sesama sebagaimana sabda Rasulullah SAW yang artinya:&nbsp;</p>\r\n<p>&ldquo;Sebaik-baik manusia adalah yang paling bermanfaat bagi manusia lainnya&rdquo;&nbsp;</p>\r\n<p>erimakasih atas segala bentuk bantuan yang dipercayakan kepada kami baik secara materi, tenaga dan kiran serta doa para muhsinin dan muhsinat Istana Yatim Riyadhul Jannah selama ini, mulai dari rencana pendirian hingga berkembang seperti saat ini. Semoga segala amal menjadi shadaqah jariyah disisi-Nya.&nbsp;</p>\r\n<p>&nbsp;</p>', '7.png', 'fsH_KhUWfho', '<table id=\"dataTables-example\" class=\"table table-bordered\" width=\"100%\">\r\n<thead>\r\n<tr>\r\n<th tabindex=\"0\" colspan=\"1\" rowspan=\"1\" width=\"19%\">Nama Bank</th>\r\n<th tabindex=\"0\" colspan=\"1\" rowspan=\"1\" width=\"21%\">Nomor Rekening</th>\r\n<th tabindex=\"0\" colspan=\"1\" rowspan=\"1\" width=\"7%\">Atas nama</th>\r\n</tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>BCA KCP Margo City</td>\r\n<td>4212548204</td>\r\n<td>Andoyo</td>\r\n</tr>\r\n<tr>\r\n<td>Bank Mandiri KCP Universitas Indonesia</td>\r\n<td>1570001807768</td>\r\n<td>Eflita Meiyetriani</td>\r\n</tr>\r\n<tr>\r\n<td>Bank BNI Syariah Kantor Cabang Jakarta Selatan</td>\r\n<td>0105301001</td>\r\n<td>Eflita Meiyetriani</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<p>Dalam mewujudkan pembangunan berkelanjutan, pemerintah kabupaten anggota LTKL telah mengidentifikasi dan memilih topik yang sesuai dengan kondisi di daerahnya. Ada 5 topik prioritas yang dipilih dengan penerapan yang disesuaikan kembali di masing-masing kabupaten.</p>', NULL, '<p>Setelah Lingkar Temu Kabupaten Lestari (LTKL) diinisiasi, kesekretariatan dibentuk untuk membantu para pemerintah kabupaten anggota bekerja dan berkolaborasi. Walaupun tidak memiliki mandat implementasi, Sekretariat LTKL menjadi vital dalam melancarkan koordinasi, pengumpulan basis data, hingga pelaporan perkembangan. Sekretariat LTKL juga diperkuat dengan kehadiran personil yang telah berpengalaman di bidang management pengetahuan, program pembangunan berkelanjutan hingga kebijakan.</p>', '', '<p>Lingkar Temu Kabupaten Lestari (LTKL) mengedepankan kolaborasi dalam mewududkan pembangunan berkelanjutan. Ada 10 kabupaten yang tersebar di 6 provinsi di Indonesia telah menjadi anggota LTKL.</p>\r\n<p>Hingga kini, berbagai pihak telah ikut berkolaborasi, mulai dari pemerintah kabupaten, sekeretariat LTKL, mitra pembangunan hingga pihak swasta.</p>', '', 'balairung-budiutomo-01.jpg', '<p>Acara yang ditampilkan merupakan kumpulan acara LTKL, mitra, maupun pemerintah kabupaten anggota LTKL, mulai dari acara seminar hingga festival.</p>', '<p>LTKL bukan satu-satunya yang bergerak dalam mewujudkan pembangunan berkelanjutan, serta upaya penanggulangan perubahan iklim. Ikuti terus perkembangan usaha LTKL serta rekan-rekan lain menuju bumi dan Indonesia yang lestari.</p>', 'smtp', 'ssl://mail.javawebmedia.com', '465', '12', 'info@javawebmedia.com', 'javawebmedia', 'Metode Pembayaran Produk', '<p>Anda dapat melakukan pembayaran dengan beberapa cara, yaitu:</p>\r\n<ol>\r\n<li><strong>Pembayaran Tunai</strong>, dapat Anda serahkan secara langsung ke salah satu staff Java Web Media</li>\r\n<li><strong>Pembayar Via Transfer Rekening</strong></li>\r\n</ol>\r\n<p>Lakukan transfer biaya atas layanan dan produk&nbsp;<strong>Java Web Media</strong>&nbsp;ke salah satu rekening di bawah ini.</p>\r\n<h3>Konfirmasi Pembayaran</h3>\r\n<p>Anda dapat melakukan konfirmasi pembayaran melalui:</p>\r\n<ul>\r\n<li><strong>Melalui Email</strong>, silakan kirim bukti pembayaran ke:&nbsp;<strong><a href=\"mailto:contact@javawebmedia.co.id?subject=Konfirmasi%20Pembayaran\">contact@javawebmedia.co.id</a></strong></li>\r\n<li><strong>Melalui Whatsapp</strong>, kirimkan bukti pembayaran Anda ke&nbsp;<strong>+6281210697841</strong></li>\r\n<li><strong>Melalui Formulir Konfirmasi Pembayaran</strong>, Anda dapat mengunggah bukti pembayaran Anda melalui form&nbsp;<strong><a title=\"Konfirmasi Pembayaran\" href=\"https://javawebmedia.com/konfirmasi\">&nbsp;Konfirmasi Pembayaran</a></strong></li>\r\n</ul>', 'payment.jpg', NULL, NULL, 'Formulir Pemesanan', 4, '2020-09-21 22:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `nomor_rekening` varchar(255) NOT NULL,
  `atas_nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `nama_bank`, `nomor_rekening`, `atas_nama`, `gambar`, `urutan`, `tanggal`) VALUES
(1, 'BCA KCP DEPOK', '4212-5482-04', 'ANDOYO', 'bca.jpg', 1, '2020-06-11 21:36:46'),
(2, 'BNI SYARIAH DEPOK', '0611-9927-06', 'CV JAVA WEB MEDIA', 'Logo_BNI_Syariah.png', 2, '2019-11-12 23:54:18'),
(4, 'BANK MANDIRI KCU DEPOK', '157-00-0180776-8', 'EFLITA MEIYETRIANI', 'mandiri.png', 4, '2019-11-12 23:58:42'),
(5, 'BANK BNI KCU DEPOK', '0105-3010-01', 'EFLITA MEIYETRIANI', 'bni.png', 5, '2019-11-13 00:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_kategori_staff` int(11) NOT NULL,
  `slug_staff` varchar(255) NOT NULL,
  `nama_staff` varchar(255) NOT NULL,
  `jabatan` varchar(200) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `expertise` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `status_staff` varchar(20) NOT NULL,
  `keywords` varchar(200) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `id_user`, `id_kategori_staff`, `slug_staff`, `nama_staff`, `jabatan`, `pendidikan`, `expertise`, `email`, `telepon`, `isi`, `gambar`, `status_staff`, `keywords`, `urutan`, `tanggal`) VALUES
(1, 4, 4, 'basja-jantowski-program-director', 'Bina Rika', 'Program Director', NULL, NULL, NULL, NULL, NULL, 'board-and-team-01-1599999423a.png', 'Ya', NULL, 1, '2020-09-13 12:17:03'),
(2, 4, 4, 'gracia-plenita-agnindhira-knowledge-and-learning-officer', 'Karyani', 'Knowledge and Learning Officer', NULL, NULL, NULL, NULL, NULL, 'board-and-team-05-15a99999506.png', 'Ya', NULL, 2, '2020-09-13 12:18:27'),
(3, 4, 4, 'uli-fitri-handayani-communication-and-project-officer', 'Ulindi', 'Communication and Project Officer', NULL, NULL, NULL, NULL, NULL, 'board-and-team-09-1599999886.png', 'Ya', NULL, 3, '2020-09-13 12:25:05'),
(4, 4, 6, 'heru-hendrayana-ketua-dewan-pembina', 'Uda', 'Ketua Dewan Pembina', NULL, NULL, NULL, NULL, NULL, 'board-and-team-07-1599a999946.png', 'Ya', NULL, 0, '2020-09-13 12:25:47'),
(5, 4, 6, 'gita-syahrani-ketua-dewan-pengawas', 'Diana Widya', 'Ketua Dewan Pengawas', NULL, NULL, NULL, NULL, NULL, 'board-and-team-04-1599a999987.png', 'Ya', NULL, 2, '2020-09-13 12:26:28'),
(6, 4, 6, 'fany-wedhahuditama-ketua-dewan-pengurus', 'Andoyo', 'Ketua Dewan Pengurus', NULL, NULL, NULL, NULL, NULL, 'board-and-team-06-160000a0085.png', 'Ya', NULL, 3, '2020-09-13 12:28:14'),
(7, 4, 6, 'fainta-susilo-negoro-sekretaris-dewan-pengurus', 'Muhammad Soleh', 'Sekretaris Dewan Pengurus', NULL, NULL, NULL, NULL, NULL, 'board-anad-team-03-1600000132.png', 'Ya', NULL, 4, '2020-09-13 12:29:04'),
(8, 4, 6, 'chrisandini-bendahara-dewan-pengurus', 'Dani Widya', 'Bendahara Dewan Pengurus', NULL, NULL, NULL, NULL, NULL, 'board-and-team-02-160000a0191.png', 'Ya', NULL, 5, '2020-09-13 12:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `kode_rahasia` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `kode_rahasia`, `gambar`, `tanggal`) VALUES
(4, 'Andoyo Cakep', 'javawebmedia@gmail.com', 'javawebmedia', 'dc28d4424ece38803650f440d7eb1cb2b3fb6651', 'Admin', NULL, 'testimonials-1.jpg', '2020-09-21 22:07:43'),
(14, 'Eflita Meiyetriani', 'eflita@gmail.com', 'eflita', '4228f9df60d56e866971c15271382b9f10251ce0', 'Admin', NULL, 'course-8-1599013102.jpg', '2020-09-02 02:18:22');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `video` text NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `bahasa` varchar(20) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `judul`, `posisi`, `keterangan`, `video`, `urutan`, `bahasa`, `gambar`, `id_user`, `tanggal`) VALUES
(66, 'Sesi 2a Penggunaan Mendeley (Praktek dan Langkah-langkah Pengerjaannya)', 'Homepage', 'Sesi 2a Penggunaan Mendeley (Praktek dan Langkah-langkah Pengerjaannya)', 'vsb93FnDim0', 1, 'Indonesia', 'post-fb-2-1600728513.png', 4, '2020-09-21 22:48:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `heading`
--
ALTER TABLE `heading`
  ADD PRIMARY KEY (`id_heading`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `nama_kategori` (`nama_kategori`);

--
-- Indexes for table `kategori_agenda`
--
ALTER TABLE `kategori_agenda`
  ADD PRIMARY KEY (`id_kategori_agenda`);

--
-- Indexes for table `kategori_download`
--
ALTER TABLE `kategori_download`
  ADD PRIMARY KEY (`id_kategori_download`);

--
-- Indexes for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  ADD PRIMARY KEY (`id_kategori_galeri`);

--
-- Indexes for table `kategori_staff`
--
ALTER TABLE `kategori_staff`
  ADD PRIMARY KEY (`id_kategori_staff`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id_download` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `heading`
--
ALTER TABLE `heading`
  MODIFY `id_heading` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori_agenda`
--
ALTER TABLE `kategori_agenda`
  MODIFY `id_kategori_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori_download`
--
ALTER TABLE `kategori_download`
  MODIFY `id_kategori_download` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori_galeri`
--
ALTER TABLE `kategori_galeri`
  MODIFY `id_kategori_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori_staff`
--
ALTER TABLE `kategori_staff`
  MODIFY `id_kategori_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
