-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 07:05 PM
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
('andi', 'andi', 'andi');

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
(4, '22-08-2022', 'Tes Berita 1', '<p>Setelah melewati berbagai proses, akhirnya seluruh sekolah di Kabupaten <a href=\"https://jambi.tribunnews.com/tag/muaro-jambi\">Muaro&nbsp;Jambi</a> sudah melakukan <a href=\"https://jambi.tribunnews.com/tag/pembelajaran-tatap-muka\">pembelajaran&nbsp;tatap&nbsp;muka</a>.</p>\r\n\r\n<p>Pembelajaran tatap muka ini sudah dilakukan sejak beberapa waktu lalu. Hal itu diungkapkan oleh Kepala Dinas Pendidikan dan Kebudayaan (Disdikbud) <a href=\"https://jambi.tribunnews.com/tag/muaro-jambi\">Muaro&nbsp;Jambi</a>, Firdaus.</p>\r\n\r\n<p>Dikatakan Firdaus, dari hasil monitoring yang dilakukan, tak ada kendala untuk proses <a href=\"https://jambi.tribunnews.com/tag/pembelajaran-tatap-muka\">pembelajaran&nbsp;tatap&nbsp;muka</a> ini.</p>\r\n\r\n<p><br />\r\n<br />\r\nArtikel ini telah tayang di <a href=\"https://\">TribunJambi.com</a> dengan judul Lakukan Pembelajaran Tatap Muka, Sekolah di Muaro Jambi Diwajibkan Terapkan Protokol Kesehatan, <a href=\"https://jambi.tribunnews.com/2022/08/21/lakukan-pembelajaran-tatap-muka-sekolah-di-muaro-jambi-diwajibkan-terapkan-protokol-kesehatan\">https://jambi.tribunnews.com/2022/08/21/lakukan-pembelajaran-tatap-muka-sekolah-di-muaro-jambi-diwajibkan-terapkan-protokol-kesehatan</a>.<br />\r\nPenulis: Muzakkir | Editor: Rian Aidilfi Afriandi</p>\r\n', '61.jpg', 'Budi Bakwan'),
(5, '22-08-2022', 'Abdullah Sani Harap Forikan Tingkatkan Konsumsi Ikan di Masyarakat', '<p>Wakil Gubernur <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a>, Drs H <a href=\"https://jambi.tribunnews.com/tag/abdullah-sani\">Abdullah&nbsp;Sani</a>,M.Pd.I., mengharapkan pengurus Forum Peningkatan Konsumsi Ikan (FORIKAN) Provinsi <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> bisa lebih meningkatkan konsumsi ikan ditengah masyarakat.</p>\r\n\r\n<p>Hal tersebut disampaikan <a href=\"https://jambi.tribunnews.com/tag/abdullah-sani\">Abdullah&nbsp;Sani</a> pada Pengukuhan Pengurus FORIKAN Provinsi <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> Periode 2022-2024, bertempat di Rumah Kito Resort Hotel, Jum&#39;at (19/8/2022).</p>\r\n\r\n<p>&ldquo;Saya mengharapkan pengurus FORIKAN yang telah dikukuhkan untuk bekerja dengan baik, penuh tanggung jawab, dan berperan serta dengan aktif dalam wadah FORIKAN ini, sehingga minat masyarakat di Provinsi <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> untuk mengkonsumsi ikan semakin meningkat agar angka konsumsi ikan perkapita di Provinsi <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> semakin meningkat pula,&rdquo; ujarnya.</p>\r\n\r\n<p><br />\r\n<br />\r\nArtikel ini telah tayang di <a href=\"https://\">TribunJambi.com</a> dengan judul Abdullah Sani Harap Forikan Tingkatkan Konsumsi Ikan di Masyarakat, <a href=\"https://jambi.tribunnews.com/2022/08/21/abdullah-sani-harap-forikan-tingkatkan-konsumsi-ikan-di-masyarakat\">https://jambi.tribunnews.com/2022/08/21/abdullah-sani-harap-forikan-tingkatkan-konsumsi-ikan-di-masyarakat</a>.<br />\r\n&nbsp;</p>\r\n', 'Sani-forikan.jpg', 'Budi Bakwan'),
(3, '22-08-2022', 'Gubernur Jambi Lepas Lomba Lari 10K, Beri Semangat Pada Peserta', '<p>Gubernur <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> H <a href=\"https://jambi.tribunnews.com/tag/al-haris\">Al&nbsp;Haris</a> melepas peserta <a href=\"https://jambi.tribunnews.com/tag/lari\">lari</a> 10K, Minggu (28/8/2022) pagi.</p>\r\n\r\n<p>Lomba <a href=\"https://jambi.tribunnews.com/tag/lari\">lari</a> 10K tingkat nasional ini diikuti oleh ribuan peserta, baik dari Provinsi <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> sendiri, maupun dari provinsi lainnya.</p>\r\n\r\n<p>Gubernur <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> melepas kegiatan ini bersama wakil Gubernur <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> H Abdullah Sani dan didampingi oleh Forkompinda Provinsi <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a>.</p>\r\n\r\n<p><br />\r\n<br />\r\nArtikel ini telah tayang di <a href=\"https://\">TribunJambi.com</a> dengan judul Gubernur Jambi Lepas Lomba Lari 10K, Beri Semangat Pada Peserta, <a href=\"https://jambi.tribunnews.com/2022/08/21/gubernur-jambi-lepas-lomba-lari-10k-beri-semangat-pada-peserta\">https://jambi.tribunnews.com/2022/08/21/gubernur-jambi-lepas-lomba-lari-10k-beri-semangat-pada-peserta</a>.<br />\r\nPenulis: Muzakkir | Editor: Rahimin</p>\r\n', 'Al-haris10k.jpg', 'Udin Kacang'),
(6, '22-08-2022', 'Sekda Sudirman Harap PGIW Jambi Turut Berkontribusi Tingkatkan Kesejahteraan Masyarakat', '<p>Sekretaris Daerah (Sekda) Provinsi <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a>, H Sudirman SH MG mengharapkan pengurus Persekutuan Gereja Gereja Indonesia Wilayah (PGIW) Provinsi <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> terus meningkatkan peran dalam pembangunan masyarakat, khususnya dalam meningkatkan kesejahteraan masyarakat <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a>.</p>\r\n\r\n<p>Hal tersebut disampaikan <a href=\"https://jambi.tribunnews.com/tag/sekda-sudirman\">Sekda&nbsp;Sudirman</a> pada Pelantikan Majelis Pengurus Harian (MPH) PGIW Provinsi <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a> Periode 2021-2026, bertempat di Auditorium Rumah Dinas Gubernur <a href=\"https://jambi.tribunnews.com/tag/jambi\">Jambi</a>, Jum&rsquo;at (19/08/2022).</p>\r\n\r\n<p><br />\r\n<br />\r\nArtikel ini telah tayang di <a href=\"https://\">TribunJambi.com</a> dengan judul Sekda Sudirman Harap PGIW Jambi Turut Berkontribusi Tingkatkan Kesejahteraan Masyarakat, <a href=\"https://jambi.tribunnews.com/2022/08/21/sekda-sudirman-harap-pgiw-jambi-turut-berkontribusi-tingkatkan-kesejahteraan-masyarakat\">https://jambi.tribunnews.com/2022/08/21/sekda-sudirman-harap-pgiw-jambi-turut-berkontribusi-tingkatkan-kesejahteraan-masyarakat</a>.<br />\r\n&nbsp;</p>\r\n', 'Sekda-sudirman-yaa-pgiw.jpg', 'Udin Kacang');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `namafile` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `tahun`, `kategori`, `keterangan`, `namafile`) VALUES
(1, '2022', 'Mancing', '1 PERWAKO NOMOR 31 TH 2020 TTG Penjabaran APBDP KELIMA TA 2020', '1-PERWAKO-NOMOR-31-TH-2020-TTG-Penjabaran-APBDP-KELIMA-TA-2020.pdf'),
(2, '2022', 'Mancing', 'CALK AUDITED KOTA SUNGAI PENUH 2020', 'CALK-AUDITED-KOTA-SUNGAI-PENUH-2020.pdf'),
(3, '2018', 'Koceng', 'CATATAN ATAS LAPORAN KEUANGAN 2018', 'CATATAN-ATAS-LAPORAN-KEUANGAN-2018.pdf'),
(4, '2022', 'Koceng', 'LPE 2020', 'LPE-2020.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `kegiatan` text NOT NULL,
  `namafile` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `tgl`, `kegiatan`, `namafile`) VALUES
(38, '24-08-2022', 'Mancing Mania', 'IMG_20210725_102328.jpg'),
(37, '24-08-2022', 'Mancing Mania', 'f7d18430-8ae9-4c47-9f8f-25f3daa75b70_169.jpeg'),
(36, '24-08-2022', 'Mancing Mania', '5d3d6cc483aed.jpg'),
(39, '24-08-2022', 'Pelantikan Walikota Sungai Penuh', '1.jpg'),
(40, '24-08-2022', 'Pelantikan Walikota Sungai Penuh', '2.jpg'),
(41, '24-08-2022', 'Pelantikan Walikota Sungai Penuh', '3.jpg'),
(42, '24-08-2022', 'Pelantikan Walikota Sungai Penuh', '4.jpg'),
(43, '24-08-2022', 'Pelantikan Walikota Sungai Penuh', '5.jpg'),
(44, '24-08-2022', 'Pelantikan Walikota Sungai Penuh', '6.jpg'),
(45, '24-08-2022', 'Pelantikan Walikota Sungai Penuh', '7.jpg'),
(46, '24-08-2022', 'Pelantikan Walikota Sungai Penuh', '8.jpg'),
(47, '28-08-2022', 'Surfing', 'funny-surfing-surfer-swimmer-wallpaper-preview.jpg'),
(48, '28-08-2022', 'Surfing', 'istockphoto-1131628989-612x612.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `kepala` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `wa` varchar(15) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `tw` varchar(100) NOT NULL,
  `fotokepala` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id`, `nama`, `kepala`, `alamat`, `email`, `wa`, `fb`, `ig`, `tw`, `fotokepala`, `logo`) VALUES
(7, 'Peternakan Lele Gembira', 'Oki Noza Putra', 'Jl. Yos Sudarso No.2 Kota Sungai Penuh', 'ternaklelegembira@gmail.com', '081293829109', 'www.facebook.com/ternak.lele.gembira', 'https://www.instagram.com/ternak_lele_gembira/', 'www.twitter.com/ternak.lele', 'adolf-hitler_16911.jpeg', 'pngwing_com(1).png');

-- --------------------------------------------------------

--
-- Table structure for table `kepuasan`
--

CREATE TABLE `kepuasan` (
  `id` int(11) NOT NULL,
  `sp` int(11) NOT NULL,
  `p` int(11) NOT NULL,
  `cp` int(11) NOT NULL,
  `kp` int(11) NOT NULL,
  `tp` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepuasan`
--

INSERT INTO `kepuasan` (`id`, `sp`, `p`, `cp`, `kp`, `tp`) VALUES
(1, 87, 70, 80, 23, 12);

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id` int(11) NOT NULL,
  `jenis` text NOT NULL,
  `standar` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id`, `jenis`, `standar`, `gambar`) VALUES
(1, 'PELAYANAN PENDAFTARAN', '<p><strong>A. Persyaratan Pelayanan</strong></p>\r\n\r\n<p>Pengguna layanan (Pasien) datang dengan membawa</p>\r\n\r\n<ul>\r\n	<li>Kartu identitas : KTP,SIM, KK, Kartu pelajar (Pasien baru)</li>\r\n	<li>Kartu pendaftaran pasien (pasien lama)</li>\r\n	<li>Kartu jaminan kesehatan (jika ada)</li>\r\n</ul>\r\n\r\n<p><strong>B. Sistem, Mekanisme dan Prosedur</strong></p>\r\n\r\n<p>1. Pasien baru</p>\r\n\r\n<ul>\r\n	<li>Pasien datang</li>\r\n	<li>Pasien melakukan pendaftaran melalui petugas informasi dibagian pendaftaran dengan menunjukkan kartu identitas dan kartu jaminan (jika ada) untuk mendapatkan nomor antrian</li>\r\n	<li>Pasien menunggu panggilan petugas pendaftaran</li>\r\n	<li>Petugas pendaftaran melakukan identifikasi poli tujuan pasien</li>\r\n	<li>Pasien menunggu panggilan poli</li>\r\n</ul>\r\n\r\n<p>2. Pasien lama</p>\r\n\r\n<ul>\r\n	<li>Pasien datang</li>\r\n	<li>Pasien melakukan pendaftaran melalui petugas informasi dibagian pendaftaran dengan menunjukkan kartu berobat pasien dan kartu jaminan (jika ada) untuk mendapatkan nomor antrian</li>\r\n	<li>Pasien menunggu panggilan petugas pendaftaran</li>\r\n	<li>Petugas pendaftaran melakukan identifikasi poli tujuan pasien</li>\r\n	<li>Pasien menunggu panggilan poli</li>\r\n</ul>\r\n\r\n<p><img alt=\"alur pelayanan pendaftaran\" src=\"http://drive.google.com/uc?export=view&amp;id=1AieRrtOmfzpjYnPB-w9wosv1m-rqdVkU\" /></p>\r\n\r\n<p><strong>C. Jangka Waktu Pelayanan /Jam Pelayanan</strong></p>\r\n\r\n<ul>\r\n	<li>Pasien baru : 8 Menit</li>\r\n	<li>Pasien lama : 4 menit&nbsp;</li>\r\n	<li>Senin &ndash; kamis : 08.00 &ndash; 13.30 WIB</li>\r\n	<li>Jumat : 08.00 - 11.00 WIB</li>\r\n	<li>Sabtu : 08.00 - 12.30 WIB</li>\r\n</ul>\r\n\r\n<p><strong>D. Biaya/Tarif</strong></p>\r\n\r\n<ul>\r\n	<li>Gratis</li>\r\n</ul>\r\n\r\n<p><strong>E. Produk Pelayanan&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li>Pendaftaran pasien</li>\r\n	<li>Pelayanan rekam medis pasien</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>F.&nbsp;Penanganan Aduan, Saran Masukkan dan Informasi</strong></p>\r\n\r\n<ul>\r\n	<li>Kotak Saran</li>\r\n	<li>Web SP4N-LAPOR!: &nbsp;<a href=\"http://www.lapor.go.id\" target=\"_blank\">www.lapor.go.id</a></li>\r\n	<li>Web Puskesmas: <a href=\"http://pkmsekernanilir.muarojambikab.go.id\" target=\"_blank\">pkmsekernanilir.muarojambikab.go.id</a></li>\r\n	<li>Nomor Handphone: 089624600603</li>\r\n	<li>Email : puskesmas.sekernan@gmail.com</li>\r\n	<li>Alamat: Jl. Lintas Timur Desa Tunas Mudo Kec. Sekernan Kab. Muaro Jambi Kode Pos. 36364</li>\r\n</ul>\r\n', 'kisspng-health-uptd-gundih-logo-puskesmas-cdr-cdr-5abe4dd0b6b764_55497548152242120074841.png'),
(2, 'PELAYANAN UMUM', '<h2>Pelayanan Umum</h2>\r\n\r\n<p><strong>A. Persyaratan Pelayanan&nbsp; </strong></p>\r\n\r\n<ul>\r\n	<li>Tersedianya Rekam Medis pasien</li>\r\n</ul>\r\n\r\n<p><strong>B. Sistem, Mekanisme dan Prosedur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>\r\n\r\n<p><img alt=\"alur pelayanan umum\" src=\"http://drive.google.com/uc?export=view&amp;id=134N_ZKWJD6O8fK-v5mv_wgHOMoE-M5XS\" /></p>\r\n\r\n<ol>\r\n	<li>Petugas memanggil pasien sesuai nomor antrian</li>\r\n	<li>Petugas memastikan identitas pasien berdasarkan rekam medis</li>\r\n	<li>Petugas melakukan anamnesis</li>\r\n	<li>Petugas melakukan pengukuran vital sign</li>\r\n	<li>Petugas melakukan pemeriksaan/tindakan sesuai prosedur</li>\r\n	<li>Petugas menetukan diagnosis</li>\r\n	<li>Petugas memberikan terapi/tindak lanjut yang sesuai</li>\r\n</ol>\r\n\r\n<p>Jika memerlukan konsultasi/pemeriksaan lanjut:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p>Rujuk internal: konsultasi antar poli/ruangan (Poli KIA, Gizi, Gigi, Labor, sanitasi)</p>\r\n	</li>\r\n	<li>\r\n	<p>Rujuk eksternal: pemeriksaan Lanjutan ke Rumah Sakit.</p>\r\n	</li>\r\n</ol>\r\n\r\n<p><strong>C. Jangka Waktu Pelayanan /Jam Pelayanan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>\r\n\r\n<ul>\r\n	<li>Konsultasi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 5 Menit</li>\r\n	<li>Rujukan&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 5 Menit</li>\r\n	<li>Kir Dokter&nbsp;&nbsp;&nbsp; &nbsp; : 15 Menit</li>\r\n	<li>Senin &ndash; kamis &nbsp;&nbsp;&nbsp;&nbsp; : 08.00 &ndash; 13.30 WIB</li>\r\n	<li>Jumat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 08.00 - 11.00 WIB</li>\r\n	<li>Sabtu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 08.00 - 12.30 WIB</li>\r\n</ul>\r\n\r\n<p><strong>D.&nbsp;Biaya/Tarif&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>\r\n\r\n<ol>\r\n	<li>Pasien Umum : sesuai dengan peraturan Bupati Muaro Jambi No: 4 Tahun 2020 Tentang perubahan Tarif Retribusi Jasa Umum Pada Peraturan Daerah Kabupaten Muaro Jambi</li>\r\n	<li>Pasien JKN sesuai dengan Permenkes 21 Tahun 2016 tentang standar tarif JKN</li>\r\n</ol>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>No</th>\r\n			<th>Jenis Pelayanan</th>\r\n			<th>Jumlah</th>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>Pelayanan Rawat Jalan</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>a</td>\r\n			<td>Rawat Jalan Umum</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>3. Tindakan medis ringan</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>a. Jahit luka/ Jahitan</td>\r\n			<td>Rp25,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>b. Jahit luka (jahitan ke- 2 dst/Jahitan)</td>\r\n			<td>Rp5,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>c. Pasang kateter</td>\r\n			<td>Rp70,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>d. Pasang infus</td>\r\n			<td>Rp55,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>e. Injeksi/ Kali</td>\r\n			<td>Rp13,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>f. Up infus</td>\r\n			<td>Rp5,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>4. Tindakan medis khusus</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>a. Sirkumsisi (sunat anak laki- laki)</td>\r\n			<td>Rp200,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>b. Eksplorasi benda asing</td>\r\n			<td>Rp25,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>c. Insisi abses</td>\r\n			<td>Rp35,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>d. Operasi kecil</td>\r\n			<td>Rp100,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>5. Tindakan perawatan lanjutan</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>a. Perawatan luka kecil</td>\r\n			<td>Rp15,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>b. Angkat jahitan (up heacting)</td>\r\n			<td>Rp15,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>c. Extraksi (Pembersihan kotoran telinga)</td>\r\n			<td>Rp25,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>6. Pelayanan khusus</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>a. Surat keterangan sehat (SKBS)</td>\r\n			<td>Rp15,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>b. Surat keterangan kelahiran</td>\r\n			<td>Rp15,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>c. Surat keterangan sakit</td>\r\n			<td>Rp5,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>d. Surat keterangan kematian</td>\r\n			<td>Rp20,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>e. Visum et repertum</td>\r\n			<td>Rp50,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>e</td>\r\n			<td>Pelayanan Ambulance</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>a. Dalam kota &lt;10km jauh/ dekat</td>\r\n			<td>Rp60,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>b. Luar kota antara 10km s/d 100km/km pp</td>\r\n			<td>Rp8,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>c. Luar kota antara 101km s/d 500km/km pp</td>\r\n			<td>Rp8,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>d. Luar kota &gt;500km/km pp</td>\r\n			<td>Rp8,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>e. Jasa perawat pendamping pasien /org (pp 4&lt;12 jam)</td>\r\n			<td>Rp100,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>f. Jasa perawat pendamping pasien /org (pp&lt;12 jam)</td>\r\n			<td>Rp200,000</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>E.&nbsp; Produk Pelayanan</strong></p>\r\n\r\n<ul>\r\n	<li>Konsultasi Dokter,</li>\r\n	<li>Pemeriksaan Medis,</li>\r\n	<li>Tindakan Medis,</li>\r\n	<li>Surat Rujukan,</li>\r\n	<li>Surat Keterangan Kesehatan.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>F.&nbsp;Penanganan Aduan, Saran Masukkan dan Informasi</strong></p>\r\n\r\n<ul>\r\n	<li>Kotak Saran</li>\r\n	<li>Web SP4N-LAPOR!: &nbsp;<a href=\"http://www.lapor.go.id\" target=\"_blank\">www.lapor.go.id</a></li>\r\n	<li>Web Puskesmas: <a href=\"http://pkmsekernanilir.muarojambikab.go.id\" target=\"_blank\">pkmsekernanilir.muarojambikab.go.id</a></li>\r\n	<li>Nomor Handphone: 0813 6892 1832</li>\r\n	<li>Email : puskesmas.sekernan@gmail.com</li>\r\n	<li>Alamat: Jl. Lintas Timur Desa Tunas Mudo Kec. Sekernan Kab. Muaro Jambi Kode Pos. 36364</li>\r\n</ul>\r\n', 'pngwing_com(1).png');

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
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `tgl`, `nama`, `email`, `pesan`) VALUES
(7, '28-08-2022', 'Budi Batman', 'budibatman@gmail.com', 'Recursion occurs when a thing is defined in terms of itself or of its type. Recursion is used in a variety of disciplines ranging from linguistics to logic. The most common application of recursion is in mathematics and computer science, where a function being defined is applied within its own definition.                                    '),
(8, '28-08-2022', 'Udin Richard', 'udin_r@gmail.com', 'A regular expression is a sequence of characters that specifies a search pattern in text. Usually such patterns are used by string-searching algorithms for \"find\" or \"find and replace\" operations on strings, or for input validation. Regular expression techniques are developed in theoretical computer science and formal language theory.                                    ');

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
(5, '<p>asdasdas</p>\r\n');

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
-- Indexes for table `kepuasan`
--
ALTER TABLE `kepuasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
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
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kepuasan`
--
ALTER TABLE `kepuasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
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
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
