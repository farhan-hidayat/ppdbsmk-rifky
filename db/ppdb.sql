-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2019 at 01:11 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_unbk`
--

CREATE TABLE `tbl_nilai_unbk` (
  `id_nilai_unbk` int(11) NOT NULL,
  `mapel_unbk` varchar(100) DEFAULT NULL,
  `nilai_unbk` int(10) DEFAULT NULL,
  `no_pendaftaran` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai_unbk`
--

INSERT INTO `tbl_nilai_unbk` (`id_nilai_unbk`, `mapel_unbk`, `nilai_unbk`, `no_pendaftaran`) VALUES
(8, 'Matematika', 80, 'PSB18004001'),
(6, 'Ilmu Pengetahuan Alam (IPA)', 80, 'PSB18004001'),
(9, 'Bahasa Indonesia', 80, 'PSB18004001'),
(10, 'Bahasa Inggris', 80, 'PSB18004001'),
(11, 'Ilmu Pengetahuan Alam (IPA)', 80, 'PSB18004002'),
(13, 'Matematika', 80, 'PSB18004002'),
(14, 'Bahasa Indonesia', 80, 'PSB18004002'),
(15, 'Bahasa Inggris', 80, 'PSB18004002'),
(16, 'Ilmu Pengetahuan Alam (IPA)', 80, 'PSB18004003'),
(17, 'Matematika', 80, 'PSB18004003'),
(18, 'Bahasa Indonesia', 80, 'PSB18004003'),
(19, 'Bahasa Inggris', 80, 'PSB18004003'),
(21, 'Ilmu Pengetahuan Alam (IPA)', 80, 'PSB18004004'),
(22, 'Matematika', 80, 'PSB18004004'),
(23, 'Bahasa Indonesia', 80, 'PSB18004004'),
(24, 'Bahasa Inggris', 80, 'PSB18004004'),
(26, 'Ilmu Pengetahuan Alam (IPA)', 56, 'PSB18004005'),
(27, 'Matematika', 56, 'PSB18004005'),
(28, 'Bahasa Indonesia', 70, 'PSB18004005'),
(29, 'Bahasa Inggris', 50, 'PSB18004005'),
(30, 'Ilmu Pengetahuan Alam (IPA)', 80, 'PSB18004006'),
(31, 'Matematika', 80, 'PSB18004006'),
(32, 'Bahasa Indonesia', 80, 'PSB18004006'),
(33, 'Bahasa Inggris', 80, 'PSB18004006'),
(34, 'Ilmu Pengetahuan Alam (IPA)', 80, 'PSB18004007'),
(35, 'Matematika', 80, 'PSB18004007'),
(36, 'Bahasa Indonesia', 80, 'PSB18004007'),
(37, 'Bahasa Inggris', 80, 'PSB18004007');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_usbn`
--

CREATE TABLE `tbl_nilai_usbn` (
  `id_nilai_usbn` int(10) NOT NULL,
  `mapel_usbn` varchar(100) DEFAULT NULL,
  `nilai_usbn` varchar(100) DEFAULT NULL,
  `no_pendaftaran` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai_usbn`
--

INSERT INTO `tbl_nilai_usbn` (`id_nilai_usbn`, `mapel_usbn`, `nilai_usbn`, `no_pendaftaran`) VALUES
(1, 'Pendidikan Agama', '80', 'PSB18004003'),
(2, 'PKN', '80', 'PSB18004003'),
(3, 'Bahasa Indonesia', '80', 'PSB18004003'),
(4, 'Bahasa Inggris', '80', 'PSB18004003'),
(5, 'Matematika', '80', 'PSB18004003'),
(6, 'Ilmu Pengetahuan Alam (IPA)', '80', 'PSB18004003'),
(7, 'Ilmu Pengetahuan Sosial (IPS)', '80', 'PSB18004003'),
(8, 'Pendidikan Agama', '80', 'PSB18004004'),
(9, 'PKN', '80', 'PSB18004004'),
(10, 'Bahasa Indonesia', '80', 'PSB18004004'),
(11, 'Bahasa Inggris', '80', 'PSB18004004'),
(12, 'Matematika', '80', 'PSB18004004'),
(13, 'Ilmu Pengetahuan Alam (IPA)', '80', 'PSB18004004'),
(14, 'Ilmu Pengetahuan Sosial (IPS)', '80', 'PSB18004004'),
(15, 'Pendidikan Agama', '70', 'PSB18004001'),
(16, 'PKN', '80', 'PSB18004001'),
(17, 'Bahasa Inggris', '76', 'PSB18004001'),
(18, 'Bahasa Indonesia', '77', 'PSB18004001'),
(19, 'Matematika', '79', 'PSB18004001'),
(20, 'Ilmu Pengetahuan Alam (IPA)', '80', 'PSB18004001'),
(21, 'Ilmu Pengetahuan Sosial (IPS)', '78', 'PSB18004001'),
(22, 'Pendidikan Agama', '80', 'PSB18004005'),
(23, 'PKN', '75', 'PSB18004005'),
(24, 'Bahasa Indonesia', '75', 'PSB18004005'),
(25, 'Bahasa Inggris', '75', 'PSB18004005'),
(26, 'Matematika', '75', 'PSB18004005'),
(27, 'Ilmu Pengetahuan Alam (IPA)', '75', 'PSB18004005'),
(28, 'Ilmu Pengetahuan Sosial (IPS)', '75', 'PSB18004005'),
(29, 'Pendidikan Agama', '75', 'PSB18004006'),
(30, 'PKN', '76', 'PSB18004006'),
(31, 'Bahasa Indonesia', '76', 'PSB18004006'),
(32, 'Bahasa Inggris', '76', 'PSB18004006'),
(33, 'Matematika', '76', 'PSB18004006'),
(34, 'Ilmu Pengetahuan Alam (IPA)', '76', 'PSB18004006'),
(35, 'Ilmu Pengetahuan Sosial (IPS)', '76', 'PSB18004006'),
(36, 'Pendidikan Agama', '90', 'PSB18004007'),
(37, 'PKN', '80', 'PSB18004007'),
(38, 'Bahasa Indonesia', '80', 'PSB18004007'),
(39, 'Bahasa Inggris', '80', 'PSB18004007'),
(40, 'Matematika', '80', 'PSB18004007'),
(41, 'Ilmu Pengetahuan Alam (IPA)', '80', 'PSB18004007'),
(42, 'Ilmu Pengetahuan Sosial (IPS)', '80', 'PSB18004007');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pdd`
--

CREATE TABLE `tbl_pdd` (
  `id_pdd` int(11) NOT NULL,
  `nama_pdd` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pdd`
--

INSERT INTO `tbl_pdd` (`id_pdd`, `nama_pdd`) VALUES
(1, 'Tdk Sekolah'),
(2, 'SD/MI'),
(3, 'SMP/MTs'),
(4, 'SMA/SMK/MA'),
(5, 'DIPLOMA'),
(6, 'S1'),
(7, 'S2'),
(8, 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pekerjaan`
--

CREATE TABLE `tbl_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(100) DEFAULT NULL,
  `ket_pekerjaan` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pekerjaan`
--

INSERT INTO `tbl_pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`, `ket_pekerjaan`) VALUES
(1, 'Buruh', 'ayah'),
(2, 'Tani', 'ayah'),
(3, 'Wiraswasta', 'ayah'),
(4, 'PNS', 'ayah'),
(5, 'TNI/POLRI', 'ayah'),
(6, 'Perangkat Desa', 'ayah'),
(7, 'Nelayan', 'ayah'),
(8, 'Lain-lain ', 'ayah'),
(9, 'Ibu Rumah Tangga\r\n', 'ibu'),
(10, 'Buruh', 'ibu'),
(11, 'Tani', 'ibu'),
(12, 'Wiraswasta', 'ibu'),
(13, 'PNS', 'ibu'),
(14, 'TNI/POLRI', 'ibu'),
(15, 'Perangkat Desa', 'ibu'),
(16, 'Nelayan', 'ibu'),
(17, 'Lain-lain', 'ibu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penghasilan`
--

CREATE TABLE `tbl_penghasilan` (
  `id_penghasilan` int(10) NOT NULL,
  `nama_penghasilan` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penghasilan`
--

INSERT INTO `tbl_penghasilan` (`id_penghasilan`, `nama_penghasilan`) VALUES
(1, '< 500rb'),
(2, '500-1jt'),
(3, '1jt-3jt'),
(4, '3jt-5jt'),
(5, '5jt-10jt'),
(6, '>10jt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(10) NOT NULL,
  `ket_pengumuman` text,
  `tgl_pengumuman` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `ket_pengumuman`, `tgl_pengumuman`) VALUES
(1, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p style="margin-left:0cm; margin-right:0cm"><span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><strong><u>Keterangan :</u></strong></span></span></span><br />\r\n<span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;1.&nbsp;Registrasi daftar ulang dilaksanakan pada tanggal 8 &ndash; 11 Juli 2018 pukul 08.00 &ndash; 14.00 </span></span></span></span><br />\r\n<span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;2. Mencetak dan membawa Surat Pengumuman ini sebagai bukti&nbsp; lulus seleksi</span></span></span></span><br />\r\n<span style="font-size:11pt"><span style="line-height:normal"><span style="font-family:Calibri,sans-serif"><span style="font-size:10.0pt">&nbsp; &nbsp; &nbsp; &nbsp; 3.&nbsp;Membawa materi Rp. 6000,- sebanyak 2 lembar</span></span></span></span></p>\r\n</body>\r\n</html>\r\n', '2018-04-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rapor`
--

CREATE TABLE `tbl_rapor` (
  `id_rapor` int(10) NOT NULL,
  `mapel` varchar(100) DEFAULT NULL,
  `semester1` int(10) DEFAULT NULL,
  `semester2` int(10) DEFAULT NULL,
  `semester3` int(10) DEFAULT NULL,
  `semester4` int(10) DEFAULT NULL,
  `semester5` int(10) DEFAULT NULL,
  `rata_rata_nilai` int(10) DEFAULT NULL,
  `no_pendaftaran` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rapor`
--

INSERT INTO `tbl_rapor` (`id_rapor`, `mapel`, `semester1`, `semester2`, `semester3`, `semester4`, `semester5`, `rata_rata_nilai`, `no_pendaftaran`) VALUES
(16, 'Ilmu Pengetahuan Alam (IPA)', 80, 70, 80, 80, 80, 78, 'PSB18004002'),
(15, 'Bahasa Inggris', 80, 80, 80, 80, 80, 80, 'PSB18004001'),
(14, 'Bahasa Indonesia', 60, 80, 80, 80, 80, 76, 'PSB18004001'),
(13, 'Matematika', 60, 80, 60, 80, 80, 72, 'PSB18004001'),
(12, 'Ilmu Pengetahuan Sosial (IPS)', 70, 70, 70, 70, 70, 70, 'PSB18004001'),
(11, 'Ilmu Pengetahuan Alam (IPA)', 80, 80, 80, 80, 80, 80, 'PSB18004001'),
(17, 'Ilmu Pengetahuan Sosial (IPS)', 80, 70, 80, 70, 80, 76, 'PSB18004002'),
(18, 'Matematika', 80, 80, 80, 80, 90, 82, 'PSB18004002'),
(19, 'Bahasa Indonesia', 80, 80, 80, 80, 50, 74, 'PSB18004002'),
(20, 'Bahasa Inggris', 80, 80, 80, 80, 80, 80, 'PSB18004002'),
(21, 'Ilmu Pengetahuan Alam (IPA)', 60, 50, 78, 68, 80, 67, 'PSB18004003'),
(22, 'Ilmu Pengetahuan Sosial (IPS)', 59, 80, 81, 67, 66, 71, 'PSB18004003'),
(23, 'Matematika', 80, 83, 54, 55, 78, 70, 'PSB18004003'),
(24, 'Bahasa Indonesia', 78, 98, 78, 88, 86, 86, 'PSB18004003'),
(25, 'Bahasa Inggris', 89, 89, 88, 80, 80, 85, 'PSB18004003'),
(26, 'Ilmu Pengetahuan Alam (IPA)', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(27, 'Ilmu Pengetahuan Sosial (IPS)', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(28, 'Matematika', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(29, 'Bahasa Indonesia', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(30, 'Bahasa Inggris', 80, 80, 80, 80, 80, 80, 'PSB18004004'),
(31, 'Ilmu Pengetahuan Alam (IPA)', 70, 70, 70, 70, 70, 70, 'PSB18004005'),
(32, 'Ilmu Pengetahuan Sosial (IPS)', 70, 70, 70, 70, 70, 70, 'PSB18004005'),
(33, 'Matematika', 70, 70, 70, 70, 70, 70, 'PSB18004005'),
(34, 'Bahasa Indonesia', 70, 70, 70, 70, 70, 70, 'PSB18004005'),
(35, 'Bahasa Inggris', 100, 100, 100, 100, 75, 95, 'PSB18004005'),
(36, 'Ilmu Pengetahuan Alam (IPA)', 75, 75, 75, 75, 75, 75, 'PSB18004006'),
(37, 'Ilmu Pengetahuan Sosial (IPS)', 75, 75, 75, 75, 75, 75, 'PSB18004006'),
(38, 'Matematika', 75, 75, 75, 75, 75, 75, 'PSB18004006'),
(39, 'Bahasa Indonesia', 75, 75, 75, 75, 75, 75, 'PSB18004006'),
(40, 'Bahasa Inggris', 75, 75, 75, 75, 75, 75, 'PSB18004006'),
(41, 'Ilmu Pengetahuan Alam (IPA)', 75, 75, 75, 75, 75, 75, 'PSB18004007'),
(42, 'Ilmu Pengetahuan Sosial (IPS)', 75, 80, 80, 80, 80, 79, 'PSB18004007'),
(43, 'Matematika', 80, 80, 80, 80, 80, 80, 'PSB18004007'),
(44, 'Bahasa Indonesia', 80, 80, 80, 80, 80, 80, 'PSB18004007'),
(45, 'Bahasa Inggris', 80, 80, 80, 80, 80, 80, 'PSB18004007');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(100) NOT NULL,
  `no_pendaftaran` varchar(20) NOT NULL,
  `password` text,
  `nis` varchar(30) DEFAULT NULL,
  `nisn` varchar(30) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jk` varchar(12) DEFAULT NULL,
  `tempat_lahir` text,
  `tgl_lahir` varchar(10) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `status_keluarga` varchar(30) DEFAULT NULL,
  `alamat_siswa` text,
  `no_hp_siswa` varchar(14) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `pdd_ayah` varchar(100) DEFAULT NULL,
  `pekerjaan_ayah` varchar(100) DEFAULT NULL,
  `penghasilan_ayah` varchar(100) DEFAULT NULL,
  `no_hp_ayah` varchar(14) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `pdd_ibu` varchar(100) DEFAULT NULL,
  `pekerjaan_ibu` varchar(100) DEFAULT NULL,
  `penghasilan_ibu` varchar(100) DEFAULT NULL,
  `no_hp_ibu` varchar(14) DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `pdd_wali` varchar(100) DEFAULT NULL,
  `pekerjaan_wali` varchar(100) DEFAULT NULL,
  `penghasilan_wali` varchar(100) DEFAULT NULL,
  `no_hp_wali` varchar(14) DEFAULT NULL,
  `npsn_sekolah` varchar(100) DEFAULT NULL,
  `nama_sekolah` varchar(100) DEFAULT NULL,
  `status_sekolah` varchar(100) DEFAULT NULL,
  `model_un` varchar(100) DEFAULT NULL,
  `alamat_sekolah` text,
  `thn_lulus` year(4) DEFAULT NULL,
  `rayonisasi` varchar(100) DEFAULT NULL,
  `foto` text,
  `tgl_siswa` datetime DEFAULT NULL,
  `status_verifikasi` varchar(30) DEFAULT NULL,
  `status_pendaftaran` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `no_pendaftaran`, `password`, `nis`, `nisn`, `nik`, `nama_lengkap`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `status_keluarga`, `alamat_siswa`, `no_hp_siswa`, `nama_ayah`, `pdd_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `no_hp_ayah`, `nama_ibu`, `pdd_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `no_hp_ibu`, `nama_wali`, `pdd_wali`, `pekerjaan_wali`, `penghasilan_wali`, `no_hp_wali`, `npsn_sekolah`, `nama_sekolah`, `status_sekolah`, `model_un`, `alamat_sekolah`, `thn_lulus`, `rayonisasi`, `foto`, `tgl_siswa`, `status_verifikasi`, `status_pendaftaran`) VALUES
(8, 'PSB18004005', '9956573698', '117180001', '999999999', '3202310909950003', 'MAHMUD AL FAUZI', 'Laki-Laki', 'SUKABUMI', '09-09-1995', 'Islam', 'Anak Kandung', 'Kp. Cicurug Rt. 09 Rw. 03 Desa Cikembang Kec. Caringin Kab. Sukabumi', '08562050812', 'RAHMAT', 'SMA/SMK/MA', 'Tani', '5jt-10jt', '0856', 'LISNAWATI', 'DIPLOMA', 'Ibu Rumah Tangga\r\n', '1jt-3jt', '0856', 'RAHMAT', 'S3', 'TNI/POLRI', '5jt-10jt', '0856', '20219158', 'SMP PASUNDAN 3 BANDUNG', 'NEGERI', 'UNBK', 'BANDUNG', 2017, 'Lintas Rayon', NULL, '2019-10-02 05:51:34', '1', 'lulus'),
(9, 'PSB18004006', '9956573698', '118190003', '9956573698', '3202310909950004', 'Siti Saidatul Fauziah', 'Perempuan', 'Bandung', '02-03-2002', 'Islam', 'Anak Kandung', 'Bandung', '0856', 'Rahmat Sasmita', 'DIPLOMA', 'PNS', '5jt-10jt', '087822345678', 'Lisna', 'S3', 'Ibu Rumah Tangga\r\n', '5jt-10jt', '088234567898', 'Rahmat Sasmita', 'DIPLOMA', 'TNI/POLRI', '5jt-10jt', '08675432187', '20200724', 'SMPN 1 CARINGIN', 'NEGERI', 'UNBK', 'CIMANDE', 2018, 'Lintas Sektoral', NULL, '2019-10-02 06:16:10', '1', 'lulus'),
(10, 'PSB18004007', '9967572345', '11819001', '9967572345', '3202310909950007', 'Sanusi Hamzah', 'Laki-Laki', 'Garut', '09-09-1992', 'Islam', 'Anak Kandung', 'ok', '0867', 'ss', 'Tdk Sekolah', 'TNI/POLRI', '5jt-10jt', '78687', 'khkjg', 'Tdk Sekolah', 'Buruh', '500-1jt', '876876', 'jjjgjh', 'SMP/MTs', 'Tani', '1jt-3jt', '766767', '676576576', 'mbvbvb', 'SWASTA', 'UNBK', 'jhh', 2017, 'Lintas Rayon', NULL, '2019-10-04 15:41:15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` text,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_lengkap`, `level`, `tgl_daftar`) VALUES
(1, 'admin', 'admin', 'Administrator', 'admin', '2018-04-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_verifikasi`
--

CREATE TABLE `tbl_verifikasi` (
  `id_verifikasi` int(10) NOT NULL,
  `isi` text,
  `ket` text,
  `tgl_verifikasi` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_verifikasi`
--

INSERT INTO `tbl_verifikasi` (`id_verifikasi`, `isi`, `ket`, `tgl_verifikasi`) VALUES
(1, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><u>Materi Tes Potensi Akdemik :</u></strong></span></span><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><u> </u></strong></span></span><br />\r\n<span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp; &nbsp; &nbsp; &nbsp;1.&nbsp;Bahasa Indonesia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 25 soal </span></span><br />\r\n<span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp; &nbsp; &nbsp; 2.&nbsp;Bahasa Inggris&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 25 soal </span></span><br />\r\n<span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp; &nbsp; &nbsp; 3.&nbsp;Matematika&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 25 soal&nbsp;&nbsp; </span></span><br />\r\n<span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp; &nbsp; &nbsp; 4. IPA </span></span><br />\r\n<span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Fisika&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 12 soal</span></span><br />\r\n<span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Biologi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;: 13 soal </span></span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><u>Hari Tanggal tes : </u></strong></span></span><br />\r\n<span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;tanggal 3 s.d 5 Juli 2018</span></span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><u>Waktu Tes potensi Akademik :</u></strong></span></span><br />\r\n<span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp; &nbsp; &nbsp; &nbsp; Sesi 1&nbsp; : 07.00 - 09.00</span></span><br />\r\n<span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp; &nbsp; &nbsp; &nbsp; Sesi 2&nbsp; : 09.30 - 11.30<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></span><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Sesi 3&nbsp; : 12.00 - 14.00</span></span><br />\r\n<span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp; &nbsp; &nbsp; &nbsp; Sesi 4&nbsp; : 14.30 - 16.30</span></span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><strong><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">*<em>catatan : </em></span></span></strong><br />\r\n<strong><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><em>jadwal ujian bisa berubah sewaktu - waktu&nbsp; Update infomasi di web PPDB </em></span></span><em><span style="font-size:11.0pt">peserta ujian datang 15&nbsp; menit sebelun tes dimulai.</span></em></strong></p>\r\n</body>\r\n</html>\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web`
--

CREATE TABLE `tbl_web` (
  `id_web` int(10) NOT NULL,
  `status_ppdb` varchar(30) DEFAULT NULL,
  `tgl_diubah` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_web`
--

INSERT INTO `tbl_web` (`id_web`, `status_ppdb`, `tgl_diubah`) VALUES
(1, 'buka', '2019-10-02 05:38:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_nilai_unbk`
--
ALTER TABLE `tbl_nilai_unbk`
  ADD PRIMARY KEY (`id_nilai_unbk`);

--
-- Indexes for table `tbl_nilai_usbn`
--
ALTER TABLE `tbl_nilai_usbn`
  ADD PRIMARY KEY (`id_nilai_usbn`);

--
-- Indexes for table `tbl_pdd`
--
ALTER TABLE `tbl_pdd`
  ADD PRIMARY KEY (`id_pdd`);

--
-- Indexes for table `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `tbl_penghasilan`
--
ALTER TABLE `tbl_penghasilan`
  ADD PRIMARY KEY (`id_penghasilan`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tbl_rapor`
--
ALTER TABLE `tbl_rapor`
  ADD PRIMARY KEY (`id_rapor`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`) USING BTREE;

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_verifikasi`
--
ALTER TABLE `tbl_verifikasi`
  ADD PRIMARY KEY (`id_verifikasi`);

--
-- Indexes for table `tbl_web`
--
ALTER TABLE `tbl_web`
  ADD PRIMARY KEY (`id_web`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_nilai_unbk`
--
ALTER TABLE `tbl_nilai_unbk`
  MODIFY `id_nilai_unbk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbl_nilai_usbn`
--
ALTER TABLE `tbl_nilai_usbn`
  MODIFY `id_nilai_usbn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tbl_pdd`
--
ALTER TABLE `tbl_pdd`
  MODIFY `id_pdd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_penghasilan`
--
ALTER TABLE `tbl_penghasilan`
  MODIFY `id_penghasilan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_rapor`
--
ALTER TABLE `tbl_rapor`
  MODIFY `id_rapor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_verifikasi`
--
ALTER TABLE `tbl_verifikasi`
  MODIFY `id_verifikasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_web`
--
ALTER TABLE `tbl_web`
  MODIFY `id_web` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
