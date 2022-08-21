-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2022 at 02:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webskpd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`) VALUES
('budi', 'budi', 'Budi Kontolodon');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `tgl` varchar(20) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `tgl`, `judul`, `isi`, `gambar`, `nama`) VALUES
(4, '21-08-2022', 'asdasd', '<p>Setelah melewati berbagai proses, akhirnya seluruh sekolah di Kabupaten <a href=\"https://jambi.tribunnews.com/tag/muaro-jambi\">Muaro&nbsp;Jambi</a> sudah melakukan <a href=\"https://jambi.tribunnews.com/tag/pembelajaran-tatap-muka\">pembelajaran&nbsp;tatap&nbsp;muka</a>.</p>\r\n\r\n<p>Pembelajaran tatap muka ini sudah dilakukan sejak beberapa waktu lalu. Hal itu diungkapkan oleh Kepala Dinas Pendidikan dan Kebudayaan (Disdikbud) <a href=\"https://jambi.tribunnews.com/tag/muaro-jambi\">Muaro&nbsp;Jambi</a>, Firdaus.</p>\r\n\r\n<p>Dikatakan Firdaus, dari hasil monitoring yang dilakukan, tak ada kendala untuk proses <a href=\"https://jambi.tribunnews.com/tag/pembelajaran-tatap-muka\">pembelajaran&nbsp;tatap&nbsp;muka</a> ini.</p>\r\n\r\n<p><br />\r\n<br />\r\nArtikel ini telah tayang di <a href=\"https://\">TribunJambi.com</a> dengan judul Lakukan Pembelajaran Tatap Muka, Sekolah di Muaro Jambi Diwajibkan Terapkan Protokol Kesehatan, <a href=\"https://jambi.tribunnews.com/2022/08/21/lakukan-pembelajaran-tatap-muka-sekolah-di-muaro-jambi-diwajibkan-terapkan-protokol-kesehatan\">https://jambi.tribunnews.com/2022/08/21/lakukan-pembelajaran-tatap-muka-sekolah-di-muaro-jambi-diwajibkan-terapkan-protokol-kesehatan</a>.<br />\r\nPenulis: Muzakkir | Editor: Rian Aidilfi Afriandi</p>\r\n', '61.jpg', 'Budi Kontolodon'),
(5, '21-08-2022', 'Abdullah Sani Harap Forikan Tingkatkan Konsumsi Ikan di Masyarakat', '<p>Wakil Gubernur <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a>, Drs H <a href=\"https://jambi.tribunnews.com/tag/abdullah-sani\">Abdullah&nbsp;Sani</a>,M.Pd.I., mengharapkan pengurus Forum Peningkatan Konsumsi Ikan (FORIKAN) Provinsi <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> bisa lebih meningkatkan konsumsi ikan ditengah masyarakat.</p>\r\n\r\n<p>Hal tersebut disampaikan <a href=\"https://jambi.tribunnews.com/tag/abdullah-sani\">Abdullah&nbsp;Sani</a> pada Pengukuhan Pengurus FORIKAN Provinsi <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> Periode 2022-2024, bertempat di Rumah Kito Resort Hotel, Jum&#39;at (19/8/2022).</p>\r\n\r\n<p>&ldquo;Saya mengharapkan pengurus FORIKAN yang telah dikukuhkan untuk bekerja dengan baik, penuh tanggung jawab, dan berperan serta dengan aktif dalam wadah FORIKAN ini, sehingga minat masyarakat di Provinsi <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> untuk mengkonsumsi ikan semakin meningkat agar angka konsumsi ikan perkapita di Provinsi <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> semakin meningkat pula,&rdquo; ujarnya.</p>\r\n\r\n<p><br />\r\n<br />\r\nArtikel ini telah tayang di <a href=\"https://\">TribunJambi.com</a> dengan judul Abdullah Sani Harap Forikan Tingkatkan Konsumsi Ikan di Masyarakat, <a href=\"https://jambi.tribunnews.com/2022/08/21/abdullah-sani-harap-forikan-tingkatkan-konsumsi-ikan-di-masyarakat\">https://jambi.tribunnews.com/2022/08/21/abdullah-sani-harap-forikan-tingkatkan-konsumsi-ikan-di-masyarakat</a>.<br />\r\n&nbsp;</p>\r\n', 'Sani-forikan.jpg', 'Budi Kontolodon'),
(3, '21-08-2022', 'Gubernur Jambi Lepas Lomba Lari 10K, Beri Semangat Pada Peserta', '<p>Gubernur <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> H <a href=\"https://jambi.tribunnews.com/tag/al-haris\">Al&nbsp;Haris</a> melepas peserta <a href=\"https://jambi.tribunnews.com/tag/lari\">lari</a> 10K, Minggu (28/8/2022) pagi.</p>\r\n\r\n<p>Lomba <a href=\"https://jambi.tribunnews.com/tag/lari\">lari</a> 10K tingkat nasional ini diikuti oleh ribuan peserta, baik dari Provinsi <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> sendiri, maupun dari provinsi lainnya.</p>\r\n\r\n<p>Gubernur <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> melepas kegiatan ini bersama wakil Gubernur <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> H Abdullah Sani dan didampingi oleh Forkompinda Provinsi <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a>.</p>\r\n\r\n<p><br />\r\n<br />\r\nArtikel ini telah tayang di <a href=\"https://\">TribunJambi.com</a> dengan judul Gubernur Jambi Lepas Lomba Lari 10K, Beri Semangat Pada Peserta, <a href=\"https://jambi.tribunnews.com/2022/08/21/gubernur-jambi-lepas-lomba-lari-10k-beri-semangat-pada-peserta\">https://jambi.tribunnews.com/2022/08/21/gubernur-jambi-lepas-lomba-lari-10k-beri-semangat-pada-peserta</a>.<br />\r\nPenulis: Muzakkir | Editor: Rahimin</p>\r\n', 'Al-haris10k.jpg', 'Budi Kontolodon'),
(6, '21-08-2022', 'Sekda Sudirman Harap PGIW Jambi Turut Berkontribusi Tingkatkan Kesejahteraan Masyarakat', '<p>Sekretaris Daerah (Sekda) Provinsi <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a>, H Sudirman SH MG mengharapkan pengurus Persekutuan Gereja Gereja Indonesia Wilayah (PGIW) Provinsi <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> terus meningkatkan peran dalam pembangunan masyarakat, khususnya dalam meningkatkan kesejahteraan masyarakat <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a>.</p>\r\n\r\n<p>Hal tersebut disampaikan <a href=\"https://jambi.tribunnews.com/tag/sekda-sudirman\">Sekda&nbsp;Sudirman</a> pada Pelantikan Majelis Pengurus Harian (MPH) PGIW Provinsi <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> Periode 2021-2026, bertempat di Auditorium Rumah Dinas Gubernur <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a>, Jum&rsquo;at (19/08/2022).</p>\r\n\r\n<p><br />\r\n<br />\r\nArtikel ini telah tayang di <a href=\"https://\">TribunJambi.com</a> dengan judul Sekda Sudirman Harap PGIW Jambi Turut Berkontribusi Tingkatkan Kesejahteraan Masyarakat, <a href=\"https://jambi.tribunnews.com/2022/08/21/sekda-sudirman-harap-pgiw-jambi-turut-berkontribusi-tingkatkan-kesejahteraan-masyarakat\">https://jambi.tribunnews.com/2022/08/21/sekda-sudirman-harap-pgiw-jambi-turut-berkontribusi-tingkatkan-kesejahteraan-masyarakat</a>.<br />\r\n&nbsp;</p>\r\n', 'Sekda-sudirman-yaa-pgiw.jpg', 'Budi Kontolodon');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `keterangan` text NOT NULL,
  `namafile` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `tahun`, `keterangan`, `namafile`) VALUES
(1, '2018', 'PERDA NO 7 TAHUN 2018', 'PERDA-NO-7-TAHUN-2018.pdf'),
(2, '2018', 'PERDA TTG PERUBAHAN APBD 2018', 'PERDA-TTG-PERUBAHAN-APBD-2018.pdf'),
(3, '2018', 'PERWAKO PENJABARAN APBD TA 2018', 'PERWAKO-PENJABARAN-APBD-TA-2018.pdf'),
(4, '2018', 'PERWAKO PENJABARAN PERUBAHAN 2018 APBD-P', 'PERWAKO-PENJABARAN-PERUBAHAN-2018-APBD-P.pdf'),
(5, '2018', 'CATATAN ATAS LAPORAN KEUANGAN 2018', 'CATATAN-ATAS-LAPORAN-KEUANGAN-2018.pdf'),
(6, '2018', 'LAPORAN ARUS KAS 2018', 'LAPORAN-ARUS-KAS-2018.pdf'),
(7, '2018', 'LAPORAN OPERASIONAL 2018', 'LAPORAN-OPERASIONAL-2018.pdf'),
(8, '2018', 'LAPORAN PERUBAHAN EKUITAS 2018', 'LAPORAN-PERUBAHAN-EKUITAS-2018.pdf'),
(9, '2018', 'LPSAL 2018', 'LPSAL-2018.pdf'),
(10, '2018', 'LRA 2018', 'LRA-2018.pdf'),
(11, '2018', 'NERACA 2018', 'NERACA-2018.pdf'),
(12, '2018', 'OPINI BPK 2018', 'OPINI-BPK-2018-1.pdf'),
(13, '2018', 'PERDA PERTANNGUNGJAWABAN APBD 2018', 'PERDA-PERTANNGUNGJAWABAN-APBD-2018.pdf'),
(14, '2019', 'PERDA NO 8 TAHUN 2019', 'PERDA-NO-8-TAHUN-2019.pdf'),
(15, '2019', 'PERDA TTG PERUBAHAN APBD 2019', 'PERDA-TTG-PERUBAHAN-APBD-2019.pdf'),
(16, '2019', 'PERWAKO PENJABARAN APBD TA 2019', 'PERWAKO-PENJABARAN-APBD-TA-2019.pdf'),
(17, '2019', 'PERWAKO NO 42 TAHUN 2019 TTG PERUBAHAN PERWAKO NO 21 TAHUN 2017 KEBIJAKAN AKUNTANSI PEMKO SUNGAI PENUH', 'PERWAKO-NO-42-TAHUN-2019-TTG-PERUBAHAN-PERWAKO-NO-21-TAHUN-2017-KEBIJAKAN-AKUNTANSI-PEMKO-SUNGAI-PENUH.pdf'),
(18, '2019', 'PERUBAHAN PERWAKO PENJABARAN 2019', 'PERUBAHAN-PERWAKO-PENJABARAN-2019.pdf'),
(19, '2019', 'PERUBAHAN KEDUA PERWAKO PENJABARAN 2019', 'PERUBAHAN-KEDUA-PERWAKO-PENJABARAN-2019.pdf'),
(20, '2019', 'PERWAKO PENJABARAN PERUBAHAN 2019 APBD', 'PERWAKO-PENJABARAN-PERUBAHAN-2019-APBD.pdf'),
(21, '2019', 'CATATAN ATAS LAPORAN KEUANGAN 2019', 'CATATAN-ATAS-LAPORAN-KEUANGAN-2019.pdf'),
(22, '2019', 'LAPORAN ARUS KAS TAHUN 2019', 'LAPORAN-ARUS-KAS-TAHUN-2019.pdf'),
(23, '2019', 'LAPORAN OPERASIONAL TAHUN 2019', 'LAPORAN-OPERASIONAL-TAHUN-2019.pdf'),
(24, '2019', 'LAPORAN PERUBAHAN SALDO ANGGARAN LEBIH TAHUN 2019', 'LAPORAN-PERUBAHAN-SALDO-ANGGARAN-LEBIH-TAHUN-2019.pdf'),
(25, '2019', 'LAPORAN REALISASI ANGGARAN TAHUN 2019', 'LAPORAN-REALISASI-ANGGARAN-TAHUN-2019.pdf'),
(26, '2019', 'NERACA TAHUN 2019', 'NERACA-TAHUN-2019.pdf'),
(27, '2019', 'OPINI BPK 2019', 'OPINI-BPK-2019.pdf'),
(28, '2019', 'Laporan Keuangan PDAM Tirta Khayangan 2019_', 'Laporan-Keuangan-PDAM-Tirta-Khayangan-2019_.pdf'),
(29, '2019', 'PERDA PERTANGGUNGJAWABAN APBD 2019', 'PERDA-PERTANGGUNGJAWABAN-APBD-2019.pdf'),
(30, '2020', 'PERDA NO 1 TAHUN 2020', 'PERDA-NO-1-TAHUN-2020.pdf'),
(31, '2020', 'PERDA TTG PERUBAHAN APBD 2020', 'PERDA-TTG-PERUBAHAN-APBD-2020.pdf'),
(32, '2020', 'KEBIJAKAN UMUM APBD TA 2020', 'KEBIJAKAN-UMUM-APBD-TA-2020.pdf'),
(33, '2020', 'PRIORITAS DAN PLAFON ANGGARAN TA 2020', 'PRIORITAS-DAN-PLAFON-ANGGARAN-TA-2020.pdf'),
(34, '2020', 'PERWAKO PENJABARAN APBD TA 2020', 'PERWAKO-PENJABARAN-APBD-TA-2020.pdf'),
(35, '2020', 'PERWAKO NOMOR 12 TAHUN 2020 TTG PERUBAHAN ATAS PERWAKO SPN NOMOR 45 THN 2019', 'PERWAKO-NOMOR-12-TAHUN-2020-TTG-PERUBAHAN-ATAS-PERWAKO-SPN-NOMOR-45-THN-2019.pdf'),
(36, '2020', 'PERWAKO NOMOR 19 TAHUN 2020 TTG PERUBAHAN KEDUA APBD 2020', 'PERWAKO-NOMOR-19-TAHUN-2020-TTG-PERUBAHAN-KEDUA-APBD-2020.pdf'),
(37, '2020', 'Perwako No 23 TAhun 2020 Perubahan Ketiga Penjabaran APBDP 2020', 'Perwako-No-23-TAhun-2020-Perubahan-Ketiga-Penjabaran-APBDP-2020.pdf'),
(38, '2020', 'PERWAKO NOMOR 27 TH 2020 TTG Penjabaran APBDP KE EMPAT', 'PERWAKO-NOMOR-27-TH-2020-TTG-Penjabaran-APBDP-KE-EMPAT.pdf'),
(39, '2020', '1 PERWAKO NOMOR 31 TH 2020 TTG Penjabaran APBDP KELIMA TA 2020', '1-PERWAKO-NOMOR-31-TH-2020-TTG-Penjabaran-APBDP-KELIMA-TA-2020.pdf'),
(40, '2020', 'PERWAKO NO 45 Tahun 2020 ttg Perubahan ke enam Penjabaran APBDP TA 2020', 'PERWAKO-NO-45-Tahun-2020-ttg-Perubahan-ke-enam-Penjabaran-APBDP-TA-2020.pdf'),
(41, '2020', 'PERWAKO NOMOR 47 TH 2020 TTG Perubahan ke 7 Penjabaran APBDP 2020', 'PERWAKO-NOMOR-47-TH-2020-TTG-Perubahan-ke-7-Penjabaran-APBDP-2020.pdf'),
(42, '2020', 'PERWAKO NOMOR 48 TH 2020 TTG Perubahan ke 8 Penjabaran APBDP 2020', 'PERWAKO-NOMOR-48-TH-2020-TTG-Perubahan-ke-8-Penjabaran-APBDP-2020.pdf'),
(43, '2020', 'CALK AUDITED KOTA SUNGAI PENUH 2020', 'CALK-AUDITED-KOTA-SUNGAI-PENUH-2020.pdf'),
(44, '2020', 'NERACA 2020', 'NERACA-2020.pdf'),
(45, '2020', 'LO 2020', 'LO-2020.pdf'),
(46, '2020', 'LPE 2020', 'LPE-2020.pdf'),
(47, '2020', 'LPSAL 2020', 'LPSAL-2020.pdf'),
(48, '2020', 'LRA 2020', 'LRA-2020.pdf'),
(49, '2020', 'OPINI BPK 2020', 'OPINI-BPK-2020-1.pdf'),
(50, '2020', 'Laporan Keuangan PDAM Tirta Khayangan 2020', 'Laporan-Keuangan-PDAM-Tirta-Khayangan-2020.pdf'),
(51, '2020', 'PERDA PERTANGGUNGJAWABAN APBD 2020', 'PERDA-PERTANGGUNGJAWABAN-APBD-2020.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `namafile` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `tgl`, `namafile`) VALUES
(30, '18-08-2022', '6.jpg'),
(29, '18-08-2022', '5.jpg'),
(28, '18-08-2022', '4.jpg'),
(26, '18-08-2022', '2.jpg'),
(27, '18-08-2022', '3.jpg'),
(25, '18-08-2022', '1.jpg'),
(31, '18-08-2022', '7.jpg'),
(32, '18-08-2022', '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `fb` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `tw` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id`, `nama`, `fb`, `ig`, `tw`) VALUES
(3, 'Mulung International', 'https://www.facebook.com/stenly.andika24', 'https://www.instagram.com/rainych_ran/', '');

-- --------------------------------------------------------

--
-- Table structure for table `penghargaan`
--

CREATE TABLE `penghargaan` (
  `id` int(11) NOT NULL,
  `ket` text NOT NULL,
  `namafile` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penghargaan`
--

INSERT INTO `penghargaan` (`id`, `ket`, `namafile`) VALUES
(1, 'Penghargaan 2018', 'Lampiran_Penghargaan_2018.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `namafile` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `namafile`) VALUES
(2, 'Penonaktifan webside desa tahun 2022', 'CamScanner_02-22-2022_16_35.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(11) NOT NULL,
  `sejarah` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `sejarah`) VALUES
(5, '<p><strong>Adolf Hitler</strong> (<small>bahasa Jerman:&nbsp;</small><a href=\"https://id.wikipedia.org/wiki/Wikipedia:IPA_untuk_bahasa_Jerman\">[ˈadɔlf ˈhɪtlɐ]</a>; 20 April 1889&nbsp;&ndash;&nbsp;30 April 1945) adalah seorang politisi <a href=\"https://id.wikipedia.org/wiki/Jerman\">Jerman</a> dan ketua <a href=\"https://id.wikipedia.org/wiki/Partai_Nazi\">Partai Nazi</a> (<a href=\"https://id.wikipedia.org/wiki/Bahasa_Jerman\">bahasa Jerman</a>: <em>Nationalsozialistische Deutsche Arbeiterpartei</em> (NSDAP); Partai Pekerja Jerman Sosialis Nasional) kelahiran <a href=\"https://id.wikipedia.org/wiki/Austria\">Austria</a>. Ia menjabat sebagai <a href=\"https://id.wikipedia.org/wiki/Kanselir_Jerman#Kanselir_Reich_Ketiga_(1933–1945)\">Kanselir Jerman</a> sejak 1933 sampai 1945 dan <a href=\"https://id.wikipedia.org/wiki/Diktator\">diktator</a> <a href=\"https://id.wikipedia.org/wiki/Jerman_Nazi\">Jerman Nazi</a> (bergelar <a href=\"https://id.wikipedia.org/wiki/F%C3%BChrer\">F&uuml;hrer und Reichskanzler</a>) mulai tahun 1934 sampai 1945. Hitler menjadi tokoh utama Jerman Nazi, <a href=\"https://id.wikipedia.org/wiki/Teater_Eropa_pada_Perang_Dunia_II\">Perang Dunia II di Eropa</a>, dan <a href=\"https://id.wikipedia.org/wiki/Holocaust\">Holocaust</a>.</p>\r\n\r\n<p>Hitler adalah veteran <a href=\"https://id.wikipedia.org/wiki/Perang_Dunia_I\">Perang Dunia I</a> dengan banyak gelar. Ia bergabung dengan <a href=\"https://id.wikipedia.org/wiki/Partai_Pekerja_Jerman\">Partai Pekerja Jerman</a> (pendahulu NSDAP) pada tahun 1919, dan menjadi ketua NSDAP tahun 1921. Tahun 1923, ia melancarkan <a href=\"https://id.wikipedia.org/wiki/Kudeta\">kudeta</a> di Munich yang dikenal dengan peristiwa <a href=\"https://id.wikipedia.org/wiki/Beer_Hall_Putsch\">Beer Hall Putsch</a>. Kudeta yang gagal tersebut berujung dengan ditahannya Hitler. Di penjara, Hitler menulis memoarnya, <em><a href=\"https://id.wikipedia.org/wiki/Mein_Kampf\">Mein Kampf</a></em> (<em>Perjuanganku</em>). Setelah bebas tahun 1924, Hitler mendapat dukungan rakyat dengan mengecam <a href=\"https://id.wikipedia.org/wiki/Perjanjian_Versailles\">Perjanjian Versailles</a> dan menjunjung <a href=\"https://id.wikipedia.org/wiki/Pan-Jermanisme\">Pan-Jermanisme</a>, <a href=\"https://id.wikipedia.org/wiki/Antisemitisme\">antisemitisme</a>, dan <a href=\"https://id.wikipedia.org/wiki/Anti-komunisme\">anti-komunisme</a> melalui pidatonya yang karismatik dan <a href=\"https://id.wikipedia.org/wiki/Propaganda_Nazi\">propaganda Nazi</a>. Setelah ditunjuk sebagai kanselir pada tahun 1933, ia mengubah <a href=\"https://id.wikipedia.org/wiki/Republik_Weimar\">Republik Weimar</a> menjadi <a href=\"https://id.wikipedia.org/wiki/Jerman_Nazi\">Reich Ketiga</a>, sebuah kediktatoran <a href=\"https://id.wikipedia.org/wiki/Negara_satu_partai\">satu partai</a> yang didasarkan pada ideologi Nazisme yang <a href=\"https://id.wikipedia.org/wiki/Totalitarianisme\">totalitarian</a> dan <a href=\"https://id.wikipedia.org/wiki/Autokrasi\">autokrasi</a>.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id` int(11) NOT NULL,
  `struktur` varchar(100) NOT NULL,
  `tugas` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id`, `struktur`, `tugas`) VALUES
(1, 'STRUKTUR-ORGANISASI-BARU-1024x522.png', '<table style=\"height:813px; width:1218px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Kepala Dinas Komunikasi dan Informatika</strong></td>\r\n			<td>&nbsp;:</td>\r\n			<td>Drs. Bayu Ramawanto</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Sekretariat</strong></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sekretaris Diskominfo</td>\r\n			<td>:</td>\r\n			<td>Nia Indrawathi, S.Kom, MM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sub Koordinator Program &amp; Pelaporan</td>\r\n			<td>:</td>\r\n			<td>Edi Kasmara, S.E., M.Si.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kasubag Umum &amp; Kepegawaian</td>\r\n			<td>:</td>\r\n			<td>Sri Kuswanti, S.Sos., M.Si</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kasubag Keuangan</td>\r\n			<td>:</td>\r\n			<td>Elis Halimawati, S.E, MM</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Bidang Pengelolaan Informasi dan Komunikasi Publik</strong></td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kepala Bidang Pengelolaan Informasi dan Komunikasi Publik</td>\r\n			<td>:</td>\r\n			<td>Iwan Setiawan, S.Sos., M.Si.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sub Koordinator Pengelolaan Informasi</td>\r\n			<td>:</td>\r\n			<td>Ilham, S.H.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sub KoordinatorKomunikasi Publik</td>\r\n			<td>:</td>\r\n			<td>Cecep Jamhuri, S.AP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sub KoordinatorKemitraan dan Media</td>\r\n			<td>:</td>\r\n			<td>Dina Nababan, S.AP, M.AP</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Bidang Aplikasi Informatika</strong></td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kepala Bidang Aplikasi Informatika</td>\r\n			<td>:</td>\r\n			<td>Dadang Imansyah, S.Kom, M.M</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sub Koordinator Pengembangan Aplikasi</td>\r\n			<td>:</td>\r\n			<td>Muhidin Susanto, S.Kom, M.Si</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sub Koordinator Integrasi dan Interoperabilitas Aplikasi</td>\r\n			<td>:</td>\r\n			<td>Ilham Maulana, S.T.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sub KoordinatorTata Kelola Aplikasi Informatika</td>\r\n			<td>:</td>\r\n			<td>&ndash;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Bidang Infrastruktur Teknologi</strong></td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kepala Bidang Infrastruktur Teknologi</td>\r\n			<td>:</td>\r\n			<td>H. Muharom, S.Sos., M.AP.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sub Koordinator Infrastruktur Jaringan</td>\r\n			<td>:</td>\r\n			<td>Achmad Zamzami, S.Kom</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sub Koordinator Infrastuktur Pusat Data</td>\r\n			<td>:</td>\r\n			<td>Marjati, S.P, M.T</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sub Koordinator Pengembangan Sumber Daya dan Teknologi Informatika</td>\r\n			<td>:</td>\r\n			<td>Dini Saumi Imaniah, S.S., M.M.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Bidang Persandian dan Statistik</strong></td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kepala Bidang Persandian dan Statistik</td>\r\n			<td>:</td>\r\n			<td>Drs. Iskandar Zulkarnain, SE, M.Si</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kasie Persandian</td>\r\n			<td>:</td>\r\n			<td>Dede Fauzi, S.Kom</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kasie Pengumpulan, Pengolahan dan Analisis Data Statistik</td>\r\n			<td>:</td>\r\n			<td>Dede Kosasih, S.E., M.Si.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kasie Publikasi Data Statistik</td>\r\n			<td>:</td>\r\n			<td>Dede Hartini, S.E., M.Si</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Kepala UPT Radio dan Televisi</strong></td>\r\n			<td>:</td>\r\n			<td>Purnama Karnadi, S.E.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Kepala TU UPT Radio &amp; TV</td>\r\n			<td>:</td>\r\n			<td>Mochamad Ichsan Santoso, S.E</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `visi`, `misi`) VALUES
(1, '<p><strong>Menjadi Gembel Yang Baik dan Benar</strong></p>\r\n\r\n<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>MANDIRI</td>\r\n			<td>:</td>\r\n			<td>Diartikan bahwa Kota Sungai Penuh sebagai daerah otonom memiliki kemampuan untuk mengelola semua potensi daerah yang dimiliki baik potensi sumber daya alam (SDA), sumber daya manusia, sumber daya ekonomi, kelembagaan dan ide ide serta gagasan inovatif yang berkembang dari diri sendiri yang dapat mempercepat pembangunan daerah.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AGAMIS</td>\r\n			<td>:</td>\r\n			<td>Masyarakat yang taat dalam menjalankan agama yang tercermin dalam kehidupan masyarakat sehari-hari baik itu dalam bentuk konsitensi penduduknya menjalankan nilai-nilai agama dan tumbuh berkembangnya organisasi sosial keagamaan sebagai wadah/tempat kajian keagamaan sebagai tuntunan Untuk diimplementasikan dalam kehidupan sehari hari.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>JUJUR</td>\r\n			<td>:</td>\r\n			<td>Menjalankan kaidah atau aturan yang berlaku, menjalankan tata kelola pemerintahan yang baik (good governance) transparans partisipasi dan akuntabilitas sebagai unsur utama serta menghilangkan KKN ( Korupsi, Kolusi dan Nipotesme), terciptanya aparatur yang bersih dan dapat melaksanakan pembangunan sesual peraturan perundangan-undangan yang berlaku.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>UNGGUL</td>\r\n			<td>:</td>\r\n			<td>Menjadi daerah yang mampu berperan bagi peningkatan kesejahteraan masyarakat, yang memiliki daya saing yang kompetitif lebin tinggi dari daerah lainnya. Kemampuan tersebut tidak hanya mencakup SDM tetapi juga secara ekonomis.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>BERKEADILAN</td>\r\n			<td>:</td>\r\n			<td>Terwujudnya pembangunan yang adil dan merata, tanpa diskriminasi, baik antar individu, golongan maupun antar wilayah, sehingga hasil dari pembangunan dapat dinikmati oleh seluruh lapisan masyarakat.Terwujudnya pembangunan yang adil dan merata, tanpa diskriminasi, baik antar individu, golongan maupun antar wilayah, sehingga hasil dari pembangunan dapat dinikmati oleh seluruh lapisan masyarakat.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '<table style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>1.</td>\r\n			<td>Meningkatkan kualitas SDM yang berkarakter tinggi, berbasis nilai agama dan budaya.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2.</td>\r\n			<td>Meningkatkan tata kelola pemerintahan Kota Sungai Penuh yang baik, mandiri dan bebas KKN</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3.</td>\r\n			<td>Pemantapan struktur perekonomian masyarakat dalam pengembangan potensi daerah</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4.</td>\r\n			<td>Pemerataan dalam peningkatan sarana dan prasarana wilayah serta prasarana permukiman</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5.</td>\r\n			<td>Meningkatkan PAD</td>\r\n		</tr>\r\n		<tr>\r\n			<td>6.</td>\r\n			<td>Menciptakan Pelestarian Lingkungan Hidup</td>\r\n		</tr>\r\n		<tr>\r\n			<td>7.</td>\r\n			<td>Meningkatkan Keamanan dan Ketertiban</td>\r\n		</tr>\r\n		<tr>\r\n			<td>8.</td>\r\n			<td>Meningkatkan Teknologi Informasi di era industri 4.0</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penghargaan`
--
ALTER TABLE `penghargaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penghargaan`
--
ALTER TABLE `penghargaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
